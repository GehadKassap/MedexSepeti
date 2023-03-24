@extends('Dashboard.layouts.app')
@section('title')
    Create Category
@endsection
@section('content')

<form action="{{ route("categories.store") }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Category Name</label>
        <input type="text" class="form-control" name="name">
        @error('name')
        <div class="alert alert-danger my-3">
             <p class="pt-2">{{ $message }}</p>
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info">Add Category</button>
    </div>
</form>
@endsection
