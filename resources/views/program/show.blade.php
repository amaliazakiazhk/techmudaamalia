@extends('layout/main')
@section('title','Program')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-7">
      <h1 class="mt-3">Detail Program</h1>
    
    <!-- form tampil data donatur -->
      
     <table class="table" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Program</th>
      <th scope="col">Deskripsi</th>
      
      <th scope="col" colspan="2">Aksi</th>
      

          </tr>
  </thead>
  @foreach($programs as $program)
  <tbody>
    <tr>
      <th scope="row">{{ $program->id }}</th>
      <td>{{ $program->nama_program }}</td>
      <td>{{$program ->   deskripsi}}</td>
      
     
      <td>
    <!-- tombol edit yang akan diarahkan ke form edit data -->
    <a href="/program/{{$program->id}}/edit" type="submit" class="btn btn-primary">Edit</a>

    <!-- tombol delete -->
    <form action="/program/{{$program->id}}" method="post" class="d-inline"> 
      @method('delete')
      @csrf
   <button type="submit" class="btn btn-danger">Delete</button>
   </form>
   <!-- untuk kembali ke halaman daftar donatur -->
    <a href="/program" class="card-link">Kembali</a>
  </div>

</div>
  </div>
  </div>

  @endsection
    

   