<?php

namespace App\Http\Controllers;

use App\Register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if ($request->has('cari')) {
           $registers = \App\Register::where('nama_donatur','LIKE','%'.$request->cari.'%')->get();
       }else{
           $registers = Register::all();

       }
        
        return view('daftar_donatur.index', compact('registers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftar_donatur.create');




         # $user = new \App\User;
       # $user->role = 'member';
       # $user->name = $request->nama;
       # $user->email = $request->email;
        #$user->password = bcrypt ('rahasia');
        #$user->save();


       # $request->request->add(['user_id' => $user->id]);
        
        #$buku = \App\Buku::create($request->all());
        #return redirect('/buku')->with('sukses', 'Berhasil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*
        $register = new Register;
        $register->nama = $request->nama;
        $register->tlp = $request->tlp;
        $register->email = $request->email;
        $register->jml_donasi = $request->jml_donasi;
        $register->pass = $request->pass;


        $register->save();

       */
        $user = new \App\User;
        $user->role = 'member';
        $user->name = $request->nama_donatur;
        $user->email = $request->email;
        $user->password = bcrypt ('rahasia');
        $user->save();


        $request->request->add(['user_id' => $user->id]);
        
             
       
       Register::create($request->all()); 

        return redirect('/daftar_donatur')->with('Status','Data Donatur Berhasil Ditambahkan!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        return view('daftar_donatur.show',compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        return view('daftar_donatur.edit', compact('register'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        Register::where('id', $register->id)
        ->update([
            'id_program' => $request->id_program,
            'nama_donatur' => $request->nama_donatur,
            'tlp' => $request->tlp,
            'no_ktp' => $request->no_ktp,
            'harga' => $request->harga,
            'email' => $request->email,
            'password' => $request->password,
           ]);
         return redirect('/daftar_donatur')->with('Status','Data Doantur Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        Register::destroy($register->id);
         return redirect('/daftar_donatur')->with('Status','Data Doantur Berhasil Dihapus!');
    }

    public function cari(Request $request, Register $register)
    {
        // menangkap data pencarian
      $query = $request->get('nama_donatur');
       $hasil = Register::where('nama_donatur','Like','%'.$query.'%')->paginate(5);
       return view('daftar_donatur.cari', compact('hasil' , 'query'));
 
    }
}
