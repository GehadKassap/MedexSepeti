@extends('Dashboard.layouts.app')
@section('title')
    Create Brand
@endsection
@section('content')

<form action="{{ route("brands.store") }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Brand Name</label>
        <input type="text" class="form-control" name="name" value="{{ old("name") }}">
        @error('name')
        <div class="alert alert-danger my-3">
             <p class="pt-2">{{ $message }}</p>
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Brand Description</label>
        <textarea type="text" class="form-control" name="desc">
           {{ old("desc") }}
        </textarea>
        @error('desc')
        <div class="alert alert-danger my-3">
             <p class="pt-2">{{ $message }}</p>
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Upload Image</label>
        <input type="file" class="form-control" name="image">
        @error('image')
        <div class="alert alert-danger my-3">
             <p class="pt-2">{{ $message }}</p>
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info">Add Brand</button>
    </div>
</form>
@endsection
