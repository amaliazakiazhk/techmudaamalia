<?php

namespace App\Http\Controllers;
use App\Program;
use Illuminate\Http\Request;
use App\Exports\ProgramExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Http\Controllers\Controller;

class ProgramController extends Controller
{
     public function index()
    {
        $programs = new Program;
        $programs = Program::all();
        return view('program.index', compact('programs')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        /*
        $program = new Program;
        $program->nama_program = $request->nama_program;
        $program->id_program = $request->id_program;
        $program->foto = $request->foto;

        $program->save();
        */
        
         
       
      Program::create($request->all()); 

        return redirect('/program')->with('Status','Data Program Berhasil Ditambahkan!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Program $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        return view('program.show',compact('program'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        return view('program.edit', compact('program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        Program::where('id', $program->id)
        ->update([
        	'id_program' => $request->id_program,
            'nama_program' => $request->nama_program,
            'deskripsi' => $request->deskripsi,
                    
            
           ]);
         return redirect('/program')->with('Status','Data Program Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        Program::destroy($program->id);
         return redirect('/program')->with('Status','Data Program Berhasil Dihapus!');
    }

    public function home(){
        return view('/site.home');
    }

        public function export_excel()
    {
        return Excel::download(new ProgramExport, 'Program.xlsx');
    }
    public function cetak_pdf(){
        $program = \App\Program::all();
        $pdf = PDF::loadview('program.program_pdf', ['program' => $program]);
        return $pdf->download('program.pdf');
    }
}
