@extends('auth.layouts.master')

@section('title', 'Категория '. $category->name)

@section('content')
    <div class="col-md-12">
        <h1>Категория </h1>
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
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <td>@lang('main.code')</td>
                <td>{{ $category->code }}</td>
            </tr>
            <tr>
                <td>@lang('main.name')</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>@lang('main.name') en</td>
                <td>{{ $category->name_en }}</td>
            </tr>
            <tr>
                <td>@lang('main.description')</td>
                <td>{{ $category->description }}</td>
            </tr>
            <tr>
                <td>@lang('main.description') en</td>
                <td>{{ $category->description_en }}</td>
            </tr>
            <tr>
                <td>@lang('main.image')</td>
                <td><img src="{{ $category->image }}" height="240px"></td>
            </tr>
            <tr>
                <td>@lang('main.countgenres')</td>
                <td>{{ $category->films->count() }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection