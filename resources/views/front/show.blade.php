@extends('layout/front')
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
      <h1 align="left" class="md-12 mt-0">Detail Donatur</h1>
    
    <!-- form tampil data donatur -->
      <div class="card" style="width: 18rem;">
  <div class="card-body">
    <center>
    <font color="#2d3436">
    
  
    <h5 class="card-title">Nama  <br>{{ $register->nama_donatur }}</h5>  <hr>
    <h6 class="card-subtitle mb-2 text-muted"> No.Telp <br>{{ $register->tlp }}</h6>  <hr>
   
    <h5 class="card-title">No.KTP <br> {{ $register->no_ktp }}</h5>  <hr>
  

    <h5 class="card-title">Email  <br> {{ $register->email }}</h5> <hr>

    <h5 class="card-title">Total <br> {{ $register->harga }}</h5> <hr>
    </font>

   
   <!-- untuk kembali ke halaman daftar donatur -->
    <a href="/" class="card-link">Kembali</a>
</center>
  </div>
</div>
</div>
</div>
</div>
</div>
  </div>
  </div>

  @endsection
    

   