@extends('Dashboard.layouts.app')
@section('title')
    All Products
@endsection
@section('content')
<section class="container">
    <h2 class="text-center">All Products</h2>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Qunatity</th>
            <th scope="col">Category</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">1</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->category->name }}</td>
                <td>
                    <a  href="{{ route("products.show",$product->id) }}" class="btn btn-success">Show</a>
                    <a href="{{ route("products.edit",$product->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route("products.destroy",$product->id) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
 </section>
@endsection
