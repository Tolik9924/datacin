@extends('master')


@section('title','Категорії:'.$category->name)
<!-- Category -->
@section('content')
  
<div class="layer1">
 <div class="starter-template">
<h1>
     {{$category->__('name')}} 
    </h1>
    <h2>@lang('main.search')  {{$category->films->count()}} </h2>
    <p>
       {{$category->__('description')}}
    </p>
    <div  class="row">
      
       @foreach($category->films as $film)
          @include('card', compact('film'))
        @endforeach
</div>
</div>
</div>

<!-- Category -->
@endsection
