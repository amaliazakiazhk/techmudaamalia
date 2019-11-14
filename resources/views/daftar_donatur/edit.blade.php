@extends('layout/main')
@section('title','Program')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="content-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="panel">
            <div class="panel-heading">
              <div class="panel-title">

      <h1 class="mt-3">Form Edit Donatur</h1>
    
    <form method="post" action="/daftar_donatur/{{$register->id}}">
        @method('patch')
        @csrf 
         <div class="form-group">
            <label for="nama_donatur">ID.Program </label>
             <input type="text" class="form-control @error ('id_program') is-invalid @enderror" id="id_program" placeholder="" name="id_program" value="{{ old('id_program') }}">
             @error('id_program')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror   
            </div>
        <div class="form-group">
            <label for="nama_donatur">Nama</label>
             <input type="text" class="form-control @error ('nama_donatur') is-invalid @enderror" id="id" placeholder="Masukan nama_donatur" name="nama_donatur" value="{{ $register->nama_donatur }}">
             @error('nama_donatur')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror   
            </div>

         <div class="form-group">
            <label for="tlp">Nomor Telepon</label>
             <input type="text" class="form-control  @error ('tlp') is-invalid @enderror" id="tlp" placeholder="Masukan Nomor Telepon" name="tlp" value="{{ $register->tlp }}">

              @error('tlp')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror 
            </div> 

           <div class="form-group">
            <label for="no_ktp">No.KTP</label>
             <input type="text" class="form-control  @error ('no_ktp') is-invalid @enderror" id="no_ktp" placeholder="Masukan Nomor KTP" name="no_ktp" value="{{ $register->no_ktp}}">

              @error('no_rek')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror 
            </div>  

           <div class="form-group">
            <label for="email">Email</label>
             <input type="text" class="form-control  @error ('email') is-invalid @enderror" id="email" placeholder="" name="email" value="{{ $register->email }}">

              @error('password')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror 
            </div> 

             <div class="form-group">
            <label for="password">Password</label>
             <input type="text" class="form-control  @error ('password') is-invalid @enderror" id="email" placeholder="" name="password" value="{{ $register->Password }}">

              @error('password')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror 
            </div>   

            <button type="submit" class="btn btn-primary">Update</button>       
 

</div>
</div>
</div>
</div>
</div>
</div>
  </div>
  </div>

  @endsection
    {{ $register->pass }}

   