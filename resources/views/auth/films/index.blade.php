@extends('auth.layouts.master')

@section('title', 'Адмінка Фільмів')

@section('content')

<style>

         .layer {
          padding-top: 100px;
          padding-right: 100px;
          padding-bottom: 70px;
          padding-left: 120px; 
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
        <h1> @lang('main.films')</h1>
         <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    # @lang('main.categories')
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
                    @lang('main.mark')
                </th>
                <th>
                    @lang('main.action')
                </th>
            </tr>
            @foreach($films as $film)
                <tr>
                    <td>{{$film->id}}</td>
                    <td>{{$film->category_id}}</td>
                    <td>{{$film->code}}</td>
                    <td>{{$film->name}}</td>
                     <td>{{$film->name_en}}</td>
                     <td>{{$film->mark}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="{{ route('films.destroy', $film) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{route('films.show', $film)}}"> @lang('main.open')</a>
                                <a class="btn btn-warning" type="button" href="{{ route('films.edit', $film) }}">@lang('main.edit')</a>
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="@lang('main.delete')"></form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
       {{$films->links()}}
        <a class="btn btn-success" type="button"
           href="{{ route('films.create') }}">@lang('main.addfilm')</a>
    </div>
</div>
    </div>
</div>

