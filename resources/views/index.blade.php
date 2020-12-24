@extends('master')

@section('title','Головна')

@section('content')
	
    <div class="row">
        @foreach($films as $film)
          @include('card', compact('film'))
        @endforeach
    </div>
{{$films->links()}}
@endsection
