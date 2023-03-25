@extends('Dashboard.layouts.app')
@section('title')
    Create Settings
@endsection
@section('content')

<form action="{{ route("settings.store") }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Setting Name</label>
        <input type="text" class="form-control" name="key" value="{{ old("key") }}">
        @error('key')
        <div class="alert alert-danger my-3">
             <p class="pt-2">{{ $message }}</p>
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Setting Type</label>
        <select class="form-select change-setting-key" aria-label="Default select example" name="type">
              <option value="text">Text</option>
              <option value="image">Image</option>
          </select>
    </div>
    <div class="mb-3 display-text-value">
        <label class="form-label">Setting Value</label>
        <input type="text"  value="{{ old("value") }}" class="form-control" name="value">
        @error('value')
        <div class="alert alert-danger my-3">
             <p class="pt-2">{{ $message }}</p>
        </div>
        @enderror
    </div>
    <div class="mb-3 display-image-value d-none">
        <label class="form-label">Upload Image</label>
        <input type="file" class="form-control" name="value">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-info">Add Setting</button>
    </div>
</form>
@endsection
