@extends('auth.layouts.master')

@section('title', ' Фільм '. $film->name)

@section('content')
    <div class="col-md-12">
        <h1>Фільм </h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                     @lang('main.field')
                </th>
                <th>
                    @lang('main.value')
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $film->id }}</td>
            </tr>
            <tr>
                <td>@lang('main.code')</td>
                <td>{{ $film->code }}</td>
            </tr>
            <tr>
                <td>@lang('main.name')</td>
                <td>{{ $film->name }}</td>
            </tr>
             <tr>
                <td>@lang('main.name') en</td>
                <td>{{ $film->name_en }}</td>
            </tr>
             <tr>
                <td>@lang('main.description')</td>
                <td>{{ $film->description }}</td>
            </tr>
            <tr>
                <td>@lang('main.description') en</td>
                <td>{{ $film->description_en }}</td>
            </tr>
             <tr>
                <td>@lang('main.mark')</td>
                <td>{{ $film->mark }}</td>
            </tr>
            <tr>
                <td>@lang('main.image')</td>
                <td><img src="{{ $film->image }}" height="240px"></td>
            </tr>
            <tr>
                <td>Лейбли</td>
                <td>
                    @if($film->isNew())
                    <span class="badge badge-success">Новинка</span>
                  @endif

                   @if($film->isHit())
                     <span class="badge badge-warning">Хіт</span>
                   @endif
                    
                   @if($film->isRecommend())
                    <span class="badge badge-danger">Рекомендуємо</span>
                   @endif 
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection