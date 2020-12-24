@extends('auth.layouts.master')

@section('title', 'Адмінка Категорій')

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
                    <td><a href="{{route('categories.index')}}">@lang('main.follow')</a></td>
                    <td><a href="{{route('films.index')}}">@lang('main.follow')</a></td>
                </tr>
            </tbody>
        </table>
        <h1>@lang('main.categories')</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    @lang('main.code')
                </th>
                <th>
                   @lang('main.name')
                </th>
                 <th>
                  Name en
                </th>
                <th>
                    @lang('main.action')
                </th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->code}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->name_en}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{route('categories.show', $category)}}"> @lang('main.open')</a>
                                <a class="btn btn-warning" type="button" href="{{ route('categories.edit', $category) }}">@lang('main.edit')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('main.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
       
        <a class="btn btn-success" type="button"
           href="{{ route('categories.create') }}">@lang('main.addcategory')</a>
    </div>
</div>
@endsection