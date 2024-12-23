@extends('Layout.adminLayout')
@section('title', 'Thiết bị vệ sinh cao cấp')
@section('content')

<form action="{{ route('admin.products.edit', $product->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row-my-2">
        <div class="col-2"></div>
        <div class="col-6">
            <label for="name" class="">Name
                @if ($errors->has('name'))
                <span class="text-red-500 float-right">{{ $errors->first('name') }}</span>
                @endif
            </label>
                <input type="text" class="form-control" placeholder="Product Name" value="{{$product->name}}" name="name">
        </div>
        <div class="col-2"></div>
        <div class="col-6">
            <label for="price" class="">Price
                @if ($errors->has('price'))
                <span class="text-red-500 float-right">{{ $errors->first('price') }}</span>
                @endif
            </label>
            <div class="mt-2">
                <input type="text" class="form-control" placeholder="Price"
                    name="price" value="{{$product->price}}">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-6">
            <label for="category_id" class="">Category
                @if ($errors->has('category_id'))
                <span class="text-red-500 float-right">{{ $errors->first('category_id') }}</span>
                @endif
            </label>
            <div class="mt-2">
                <select class="w-full rounded-md h-8" name="category_id">\
                    <option value="" selected>Select Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->categoryname }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-6">
            <label for="file_upload" class="">Image
                @if ($errors->has('image'))
                <span class="text-red-500 float-right">{{ $errors->first('image') }}</span>
                @endif
            </label>
            <div class="mt-2">
                <input type="file"
                    class="
                        block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100"
                    name="image">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-6">
            <label for="description" class="">Description
            </label>
            <div class="mt-2">
                <textarea class="form-control" placeholder="Description" name="description">{{$product->description}}</textarea>
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-6">
            <label for="name" class="">Origin
                @if ($errors->has('origin'))
                <span class="text-red-500 float-right">{{ $errors->first('origin') }}</span>
                @endif
            </label>
                <input type="text" class="form-control" placeholder="Origin" value="{{$product->origin}}" name="origin">
        </div>
        <div class="col-2"></div>
        <div class="col-6">
            <label for="name" class="">Brand
                @if ($errors->has('brand'))
                <span class="text-red-500 float-right">{{ $errors->first('brand') }}</span>
                @endif
            </label>
                <input type="text" class="form-control" placeholder="Brand" value="{{$product->brand}}" name="brand">
        </div>
    </div>
    <div class="w-full p-3">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>




@endsection