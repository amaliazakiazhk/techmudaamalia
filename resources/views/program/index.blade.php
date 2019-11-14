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
                    <h1 class="mt-3">
                          Daftar Program
                    </h1>

      <div class="right">
      <a href="/program/create" class="btn btn-primary my-4"> Tambah Data Program </a>
      <a href="/program/export_excel" class="btn btn-primary my-3" target="_blank">EXPORT EXCEL</a>
      <a href="/program/cetak_pdf" class="btn btn-primary my-3" target="_blank">EXPORT PDF</a>
       
      </div>
      <br>

      <div class="panel-body">
        <table class="table table-hobver">
          <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Program</th>
                <th scope="col">Deskripsi</th>
               
                <th scope="col" colspan="2">Aksi</th>
            </tr>
           </thead>
           
          <tbody>
         @foreach($programs as $program)
         <tr>
               <td scope="row">{{ $program -> id }}</td>
               <td scope="row">{{ $program -> nama_program }}</td>
               <td scope="row">{{$program ->  deskripsi}}</td>
              
              
     
      <td>
         <a href="/program/{{$program->id}}/edit" type="submit" class="btn btn-primary">Edit</a>
          <a href="/program/{{$program->id}}/destroy" type="submit" class="btn btn-danger">Delete</a>
       
          </td>
          </tr>
          @endforeach 


        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>




<div class="modal fade" id="exampleMOdal" tabindex="-1" role="dialog" aria-labelledby="exampleMOdalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-hedaer">
        <h5 class="modal-title" id="exampleMOdalLabel"></h5>

        <button type="button" class="close" data-dismis="modal" aria-label="Close">
          <span aria-hidden="true">
            &times;
            
          </span>
        </button>







    

      @if(session('Status'))
      <div class="alert alert-success">
        {{ session ('Status') }}
        
      </div>
      @endif
    <div class="panel-body">
             
      <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama Program</th>
      <th scope="col">Foto</th>
      <th scope="col">Deskripsi</th>
      <th scope="col" colspan="2">Aksi</th>
      </tr>
  </thead>
 
  <tbody>
     @foreach($programs as $program)
     <tr>
      <td scope="row">{{ $program -> id }}</td>
      <td scope="row">{{ $program -> nama_program }}</td>
      <td scope="row">{{$program -> deskripsi}}</td>
      <td scope="row"><img src="{{ asset('/bootstrap/img'.$program['foto']) }}" width="90"></td>
   
     <td>
         <a href="/program/{{$program->id}}/edit" type="submit" class="btn btn-primary">Edit</a>
        <form action="/program/{{$program->id}}" method="post" class="d-inline"> 
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger">Delete</button>
         </td>
          </tr>
           @endforeach 
          </tbody>
              </table>
              
            </div>
          </div>
          
        </div>
        
      </div>
      
    </div>
    
  </div>
  
</div>

    @endsection

    

   