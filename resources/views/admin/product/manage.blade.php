@extends('admin.master')
@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body">
                       <h1 class="text-center text-muted"> All Information</h1>
                        <hr/>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->product_category}}</td>
                                <td>{{$product->product_brand}}</td>
                                <td>{{$product->product_price}}</td>
                                <td>
                                    <img src="{{asset($product->product_image)}}" alt="" height="100" width="100">
                                </td>
                                <td>{{$product->product_description}}</td>
                                <td>{{$product->status}}</td>
                                <td>
                                    <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('product-delete',['id'=>$product->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
