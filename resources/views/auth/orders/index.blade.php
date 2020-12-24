@extends('auth.layouts.master')
@section('title', 'Меню адмінки')
@section('content')
    
     <style>

         .layer {
          padding-top: 100px;
          padding-right: 100px;
          padding-bottom: 70px;
          padding-left: 120px; /* Поля вокруг текста */
          }

    </style>

 <div class="layer">
    <div class="col-md-12">
        <h1>@lang('main.admin')</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                   @lang('main.editcategories')
                </th>
                <th>
                    @lang('main.editfilms')
                </th>
            
                <tr>
                    <td><a href="{{route('categories.index')}}"> @lang('main.follow')</a></td>
                    <td><a href="{{route('films.index')}}"> @lang('main.follow')</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection