@extends('layout/frontend')
@section('title','Program')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="content-fluid">
      <div class="row-md-10">
        <div class="col-md-5">
          <div class="panel">
            <div class="panel-heading">
              <div class="panel-title">

      <h1 class="mt-3">Registrasikan Dirimu</h1>
    
    <form method="post" action="/daftar_donatur">
        @csrf 
         <div class="form-group">
            <label for="nama_donatur">ID.Program </label>
             <input type="text" class="form-control @error ('id_program') is-invalid @enderror" id="id_program" placeholder="" name="id_program" value="{{ old('id_program') }}">
             @error('id_program')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror   
            </div>
        <div class="form-group">
            <label for="nama_donatur">Nama </label>
             <input type="text" class="form-control @error ('nama_donatur') is-invalid @enderror" id="id" placeholder="Nama Sesuai KTP" name="nama_donatur" value="{{ old('nama_donatur') }}">
             @error('nama_donatur')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror   
            </div>

         <div class="form-group">
            <label for="tlp">Nomor Telepon</label>
             <input type="text" class="form-control  @error ('tlp') is-invalid @enderror" id="tlp" placeholder="Masukan Nomor Telepon" name="tlp" value="{{ old('tlp') }}">

              @error('tlp')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror 
            </div> 

         <div class="form-group">
            <label for="no_ktp">No.KTP</label>
             <input type="text" class="form-control  @error ('no_ktp') is-invalid @enderror" id="no_ktp" placeholder="Masukan Nomor KTP" name="no_ktp" value="{{ old('no_ktp') }}">

              @error('no_rek')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror 
            </div>  

             <div class="form-group">
            <label for="email">Email</label>
             <input type="text" class="form-control  @error ('email') is-invalid @enderror" id="no_rek" placeholder="" name="email" value="{{ old('email') }}">

              @error('email')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror 
            </div>  

              <div class="form-group">
            <label for="password">Password</label>
             <input type="password" class="form-control  @error ('password') is-invalid @enderror" id="no_rek" placeholder="" name="password" value="{{ old('password') }}">

              @error('password')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror 
            </div>  
            

        

            <button type="submit" class="btn btn-primary">Submit</button>       
 

</div>
  </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


  @endsection
    

   