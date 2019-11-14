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
      <h1 class="mt-3">Form Edit Program</h1>
    
    <form method="post" action="/program/{{$program->id}}">
         @method('patch')
        @csrf 

         <div class="form-group">
            <label for="id">ID</label>
             <input type="text" class="form-control @error ('id') is-invalid @enderror" id="id" placeholder="Masukan ID" name="nama_program" value="{{ $program->id }}">
             @error('id')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror   
            </div>

        <div class="form-group">
            <label for="nama_program">Nama Program</label>
             <input type="text" class="form-control @error ('nama_program') is-invalid @enderror" id="nama_program" placeholder="Masukan Nama Program" name="nama_program" value="{{ $program->nama_program }}">
             @error('nama_program')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror   
            </div>

              <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
             <textarea class="form-control @error ('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukan Deskripsi" name="deskripsi" value="{{ $program->deskripsi }}"></textarea>
             @error('deskripsi')

                <div class="invalid-feedback">{{ $message }}</div>

             @enderror   
            </div>

          

       

         

         <button type="submit" class="btn btn-primary">Submit</button>       
 
</form>
</div>
</div>
</div>
</div>

</div>
  </div>
  </div>

  @endsection
    

   