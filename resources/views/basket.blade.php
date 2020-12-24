@extends('master')

@section('title','Корзина')

@section('content')
<!-- Menu Categories -->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://use.fontawesome.com/c560c025cf.js"></script>
<div class="container">
   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                @lang('main.shelvesmovies')
                <a href="{{route('index')}}" class="btn btn-outline-info btn-sm pull-right">Continiu surfing</a>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                    <!-- PRODUCT -->
                    @foreach( $order->films as $film)
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="{{$film->image}}" alt="prewiew" width="120" height="180">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name" ><strong>{{$film->__('name')}}</strong></h4>
                            <a href="{{route('film',[$film->category->code,$film->code])}}">@lang('main.look')</a>
                            <h4>
                                <small>{{$film->__('description')}}</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>{{$film->mark}} <span class="text-muted">/10</span></strong></h6>
                            </div>
                            <!--<div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <input type="button" value="+" class="plus">
                                    <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                    <input type="button" value="-" class="minus">
                                </div>
                            </div>-->
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <form action="{{ route('basket-remove', $film) }} " method="POST">
                                <button type="submit" class="btn btn-outline-danger btn-xs" href="{{ route('basket-remove', $film) }}">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                                @csrf
                            </form>
                            </div>
                        </div>
                    </div>
                   @endforeach
                    <hr>
                    <!-- END PRODUCT -->
                <!--<div class="pull-right">
                    <a href="" class="btn btn-outline-secondary pull-right">
                        Update shopping cart
                    </a>
                </div>-->
            </div>
            <div class="card-footer">
                <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                    <div class="row">
                        <!--<div class="col-6">
                            <input type="text" class="form-control" placeholder="cupone code">
                        </div>-->
                        <!--<div class="col-6">
                            <input type="submit" class="btn btn-default" value="Use cupone">
                        </div>-->
                    </div>
                </div>
                <div class="pull-right" style="margin: 10px">
                    <div class="pull-right" style="margin: 5px">
                         @lang('main.countmovies') <b>{{$order->films->count()}}</b>
                    </div>
                </div>
            </div>
        </div>
</div>
                                   
@endsection

<!-- Menu Categories -->