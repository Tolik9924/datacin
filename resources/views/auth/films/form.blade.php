@extends('auth.layouts.master')

@isset($film)
    @section('title', 'Редагувати фільм ' . $film->name)
@else
    @section('title', 'Створити фільм')
@endisset

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
    <div class="py-4">
    <div class="container">
<div class="row justify-content-center">
        <div class="col-md-12">
                    @isset($film)
                       <h1>@lang('main.editfilm')  <b>{{$film->name}}</b></h1>
                    @else
                       <h1>@lang('main.addfilm')</h1>
                    @endisset

                <form method="POST" enctype="multipart/form-data"
                 @isset($film)
                    action="{{ route('films.update', $film) }}"
                    @else
                    action="{{ route('films.store') }}"
                    @endisset   
                >
                    <div>
                         @isset($film)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="input-group row">
                            <label for="code" class="col-sm-2 col-form-label">@lang('main.code'): </label>
                             @error('code')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <input type="text" class="form-control" name="code" id="code" value="{{ old('code', isset($film) ? $film->code : null) }}">
                            </div>
                        </div>
                        <br>
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">@lang('main.name'): </label>
                            <div class="col-sm-6">
                                 @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <input type="text" class="form-control" name="name" id="name" value="@isset($film){{$film->name}}@endisset">
                            </div>
                        </div>

                         <br>
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">@lang('main.name') en: </label>
                            <div class="col-sm-6">
                                 @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <input type="text" class="form-control" name="name_en" id="name_en" value="@isset($film){{$film->name_en}}@endisset">
                            </div>
                        </div>

                        <br>
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">@lang('main.mark'): </label>
                            <div class="col-sm-6">
                                @error('mark')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="mark" id="mark" value="@isset($film){{$film->mark}}@endisset">
                            </div>
                        </div>
                            

                              <br>
                        <div class="input-group row">
                            <label for="category_id" class="col-sm-2 col-form-label">@lang('main.category'): </label>
                        <div class="col-sm-6">
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @isset($film)
                                        @if($film->category_id == $category->id)
                                        selected
                                    @endif
                                    @endisset
                                >{{ $category->__('name') }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                            <br>
                        <div class="input-group row">
                            <label for="description" class="col-sm-2 col-form-label">@lang('main.description'): </label>
                             @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
							<textarea name="description" id="description" cols="72"
                                      rows="7">@isset($film){{$film->description}}@endisset</textarea>
                            </div>

                             <br>
                        <div class="input-group row">
                            <label for="description" class="col-sm-2 col-form-label">@lang('main.description') en: </label>
                             @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <textarea name="description_en" id="description_en" cols="72"
                                      rows="7">@isset($film){{$film->description_en}}@endisset</textarea>
                            </div>
                            
                            <br>

                       <div class="input-group row">
                            <label for="description" class="col-sm-2 col-form-label">@lang('main.image'): </label>
                             @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <textarea name="image" id="image" cols="72"
                                      rows="7">@isset($film){{$film->image}}@endisset</textarea>
                            </div>
                        
                             <br>
                        @foreach([
                            'new' => 'Новинка',
                            'hit' => 'Хіт',
                            'recommend' => 'Рекомендуємі'
                        ] as $field => $title)
                            <div class="form-group row">
                            <label for="{{$field}}" class="col-sm-2 col-form-label">{{$title}}: </label>
                                <input type="checkbox" class="form-control" name="{{$field}}" id="{{$field}}"  @if(isset($film) && $film->$field === 1)
                                    checked="'checked"
                                @endif>
                            </div>
                        </div>
                        <br>
                        @endforeach

                        <button class="btn btn-success">@lang('main.savechanges')</button>
                    
                </form>
    </div>
</div>
</div>
</div>
</div>
@endsection