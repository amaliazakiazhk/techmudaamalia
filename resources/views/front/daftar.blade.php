@extends('layout/frontend')
@section('title','Program')

@section('content')


      <h1 class="mt-3">Daftar Donatur</h1>
     
      @if(session('Status'))
      <div class="alert alert-success">
        {{ session ('Status') }}
        
      </div>
      @endif

    
        <ul class="list-group">
    @foreach($registers as $register)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $register-> nama_donatur }}
        <a href="/daftar_donatur/{{ $register->id }}" class="badge badge-info">Detail</a>
        </li>
      </ul>

 @endforeach
  </div>
  </div>
</div>


  @endsection
    

   