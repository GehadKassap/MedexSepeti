@extends('Dashboard.layouts.app')
@section('title')
    Categories
@endsection

@section('content')
 <section class="container">
    <h2 class="text-center">All Categories</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <th scope="row">1</th>
                <td>{{ $category->name }}</td>
                <td>
                    <a  href="{{ route("categories.show",$category->id) }}" class="btn btn-success">Show</a>
                    <a href="{{ route("categories.edit",$category->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route("categories.destroy",$category->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
 </section>
@endsection
