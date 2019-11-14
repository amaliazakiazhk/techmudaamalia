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
      <h1 class="mt-3">Detail Donatur</h1>
    
    <!-- form tampil data donatur -->
      <div class="card" style="width: 18rem;">
  <div class="card-body">
     <h5 class="card-title">No.ID :{{ $register->id_program }}</h5>
  
    <h5 class="card-title">Nama :{{ $register->nama_donatur }}</h5>
    <h6 class="card-subtitle mb-2 text-muted"> No.Telp: {{ $register->tlp }}</h6>
   
    <h5 class="card-title">No.KTP :{{ $register->no_ktp }}</h5>
  

    <h5 class="card-title">Email :{{ $register->email }}</h5>

    <h5 class="card-title">Password :{{ $register->password }}</h5>

    <!-- tombol edit yang akan diarahkan ke form edit data -->
    @if(auth()->user()->role == 'admin')
    <a href="/daftar_donatur/{{$register->id}}/edit" type="submit" class="btn btn-primary">Edit</a>

    <!-- tombol delete -->
    <form action="/daftar_donatur/{{ $register->id}}" method="post" class="d-inline"> 
      @method('delete')
      @csrf
   <button type="submit" class="btn btn-danger">Delete</button>
   @endif
   </form>
   <!-- untuk kembali ke halaman daftar donatur -->
    <a href="/daftar_donatur" class="card-link">Kembali</a>
  </div>
</div>
</div>
</div>
</div>
</div>
  </div>
  </div>

  @endsection
    

   