@extends('Dashboard.layouts.app')
@section('title')
    Create New Product
@endsection
@section('content')
    <form action="{{ route("products.store") }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" class="form-control" name="name" value="{{ old("name") }}">
            @error('name')
            <div class="alert alert-danger my-3">
                <p class="pt-2">{{ $message }}</p>
            </div>
            @enderror
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Product Price</label>
                    <input type="text" class="form-control" name="price" value="{{ old("price") }}">
                    @error('price')
                    <div class="alert alert-danger my-3">
                        <p class="pt-2">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Product Quantity</label>
                    <input type="text" class="form-control" value="{{ old("quantity") }}" name="quantity">
                    @error('quantity')
                    <div class="alert alert-danger my-3">
                        <p class="pt-2">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label">Product Discount</label>
                    <input type="text" class="form-control" value="{{ old("discount") }}" name="discount">
                    @error('discount')
                    <div class="alert alert-danger my-3">
                        <p class="pt-2">{{ $message }}</p>
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Product Category</label>
            <select class="form-select" aria-label="Default select example" name="category_id">
                @foreach (get_categories() as $category )
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
              @error('category_id')
              <div class="alert alert-danger my-3">
                  <p class="pt-2">{{ $message }}</p>
              </div>
              @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Product Short Description</label>
            <textarea type="text" class="form-control" name="short_desc">
                {{ old("short_desc") }}
            </textarea>
            @error('short_desc')
            <div class="alert alert-danger my-3">
                <p class="pt-2">{{ $message }}</p>
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Product Long Description</label>
            <textarea type="text" class="form-control" name="long_text">
                {{ old("long_text") }}
            </textarea>
            @error('long_text')
            <div class="alert alert-danger my-3">
                <p class="pt-2">{{ $message }}</p>
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Product Image</label>
            <input class="form-control" type="file" name="image">
            @error('image')
            <div class="alert alert-danger my-3">
                <p class="pt-2">{{ $message }}</p>
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-info">Add Product</button>
        </div>
</form>
@endsection
