<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\Register;
use App\User;

class FrontController extends Controller
{

     public function index(Register $request)
    {
         $registers = Register::all();
        return view('front.index', compact('registers')); 

    }

     public function create()
    {
        return view('front.register');




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
        $user->password = bcrypt ($request->password);
        $user->save();


        $request->request->add(['user_id' => $user->id]);
        
             
       
       Register::create($request->all()); 

     return redirect('/front')->with('Status','Data Donatur Berhasil Ditambahkan!'); 

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        return view('front.show',compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */

    public function home(){
    	return view('front.home');
    }

    public function program( Program $program){
        $program=Program::all();
    	return view('front.program', compact('program'));
    }
    public function tentang(){
    	return view('front.tentang');
    }
    public function login(){
    	return view('auths.login');
    }
    public function logout(){
        return redirect('/auths/login');
    }

    public function register(){
    	return view('front.register');
    }
     public function postregister(Request $request) {
       $user = new \App\User;
        $user->name = $request->nama_donatur;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $pegawai = \App\Register::create($request->all());
        return redirect('/front/register')->with('sukses', 'data pendaftaran berhasil');
    }
    public function pendaftaran(){
        return view('front.pendaftaran');
    }
    public function postdatfar(Request $request){
         $pegawai = \App\Register::create($request->all());
        return redirect('/front/pendaftaran')->with('sukses', 'data pendaftaran berhasil');
    }
    public function baju(){
        return view('front/baju', compact('register'));
    }
}
