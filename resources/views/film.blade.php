@extends('master')


@section('title','Фільм')

@section('content')
<div class="layer2">
 <div class="starter-template">
 	<img src="{{$filmObject->image}}" width="300" height="421" alt="film">
<h1>
   {{$filmObject->__('name')}}
    </h1>
    <p>{{$filmObject->__('description')}} </p>
    <p>
       {{$filmObject->mark}}/10
    </p>
</div>
</div>
@endsection