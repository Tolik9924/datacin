@extends('master')

@section('title','Всі категорії')

@section('content')
<!-- Menu Categories -->

<div class="container">
    <div class="starter-template">
      @foreach($categories as $category)
        <div class="panel">
            <a href =" {{route('category' ,$category->code)}} ">
                <img src="{{$category->image}}"  width="100" height="100">
                <h2>{{$category->__('name')}}</h2>
            </a>
            <p>
               {{$category->__('description')}}
            </p>
        </div>
      @endforeach
                                   
@endsection

<!-- Menu Categories -->


