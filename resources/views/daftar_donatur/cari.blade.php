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
      <a href="/daftar_donatur/create" class="btn btn-primary my-4"> Tambah Data Donatur </a>
      <br>
      @if(session('Status'))
      <div class="alert alert-success">
        {{ session ('Status') }}
        
      </div>
      @endif

    @if(count($hasil)>0)    
        <ul class="list-group">
    @foreach($hasil as $data)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $data -> nama_donatur }}
        <a href="/daftar_donatur/{{ $data->id }}" class="badge badge-info">Detail</a>
        </li>
      </ul>

 @endforeach
 @else
 Data Tidak Ditemukan
 @endif
  </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

  @endsection
    

   