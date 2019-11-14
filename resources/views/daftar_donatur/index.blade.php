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

      <h1 class="mt-3">Daftar Donatur</h1>
      <a href="/daftar_donatur/create" class="btn btn-primary my-4"><font color="white"> Tambah Data Donatur </font> </a>
      <br>
      @if(session('Status'))
      <div class="alert alert-success">
        {{ session ('Status') }}
        
      </div>
      @endif

    
        <ul class="list-group">
       @foreach($registers as $register)
        <li class="list-group-item d-flex justify-content-between align-items-center">
          <font color="#000">
            {{ $register-> nama_donatur }}
            </font>
        <a href="/daftar_donatur/{{ $register->id }}" class="badge badge-info">Detail</a>
        </li>
      </ul>
 @endforeach
  </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

  @endsection
    

   