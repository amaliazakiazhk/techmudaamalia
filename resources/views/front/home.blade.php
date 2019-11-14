<!--KONTEN1-->
@extends('layout.frontend')

@section('content')


 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<!--BIGIMAGES-->
  
@endsection

        