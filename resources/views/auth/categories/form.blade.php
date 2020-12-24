@extends('auth.layouts.master')

@isset($category)
    @section('title', 'Редагувати категорію ' . $category->name)
@else
    @section('title', 'Створити категорію')
@endisset

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
    <div class="py-4">
        <div class="container">
            <div class="row justify-content-center">
    <div class="col-md-12">
                   @isset($category)
                       <h1>@lang('main.editcategory')  <b>{{$category->__('name')}}</b></h1>
                    @else
                       <h1>@lang('main.addcategory')</h1>
                    @endisset

                <form method="POST" enctype="multipart/form-data"
                    @isset($category)
                    action="{{ route('categories.update', $category) }}"
                    @else
                    action="{{ route('categories.store') }}"
                    @endisset
                >
                    <div>
                        @isset($category)
                            @method('PUT')
                        @endisset
                        @csrf
                        <div class="input-group row">
                            <label for="code" class="col-sm-2 col-form-label">@lang('main.code'): </label>
                             <div class="col-sm-6">
                            @error('code')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <input type="text" class="form-control" name="code" id="code" value="{{ old('code', isset($category) ? $category->code : null) }}">
                            </div>
                        </div>
                        <br>
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">@lang('main.name'): </label>
                            <div class="col-sm-6">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name" id="name" value="@isset($category){{$category->name}}@endisset">
                            </div>
                        </div>
                            
                            <br>
                        <div class="input-group row">
                            <label for="name" class="col-sm-2 col-form-label">@lang('main.editcategory'): </label>
                            <div class="col-sm-6">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control" name="name_en" id="name_en" value="@isset($category){{$category->name_en}}@endisset">
                            </div>
                        </div>

                            <br>
                        <div class="input-group row">
                            <label for="description" class="col-sm-2 col-form-label">@lang('main.description') : </label>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
							<textarea name="description" id="description" cols="72"
                                      rows="7">@isset($category){{$category->description}}@endisset</textarea>
                            </div>
                            
                             <br>
                        <div class="input-group row">
                            <label for="description" class="col-sm-2 col-form-label">@lang('main.description') en: </label>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <textarea name="description_en" id="description_en" cols="72"
                                      rows="7">@isset($category){{$category->description_en}}@endisset</textarea>
                            </div>

                            <br>

                        <div class="input-group row">
                            <label for="description" class="col-sm-2 col-form-label">@lang('main.image'): </label>
                             @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <textarea name="image" id="image" cols="72"
                                      rows="7">@isset($category){{$category->image}}@endisset</textarea>
                            </div>
                        <button class="btn btn-success">@lang('main.savechanges')</button>
                    
                </form>
    </div>
</div>
</div>
</div>
</div>
</div>

@endsection