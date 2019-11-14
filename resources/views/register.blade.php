@extends('layout/main')
@section('title','Register')

@section('konten')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Daftar Untuk Menjadi Anggota</h1>
    </div>
  </div>
  </div>
  
@endif

div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
   <label class="col-md-4 control-label">Username</label>

    <div class="col-md-6">
       <input type="text" class="form-control" name="username" value="{{ old('username') }}">

       @if ($errors->has('username'))
          <span class="help-block">
             <strong>{{ $errors->first('username') }}</strong>
          </span>
       @endif
    </div>
</div>


  @endsection
    

   