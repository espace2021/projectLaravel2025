@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card p-3">
                    <h5>Add a new product</h5>
                    <form action="{{ route('new_product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Select a category</label>
                            <select required name="category" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Product Name</label>
                            <input name="name" required class="form-control" placeholder="Product Name" />
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Product Description</label>
                            <input name="description" required class="form-control" placeholder="Product Description" />
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Product Price</label>
                            <input name="price" required class="form-control" placeholder="Product Price" type="number" />
                            @error('price')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Product Stock</label>
                            <input name="stock" required class="form-control" placeholder="Product Stock" type="number" />
                            @error('stock')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Product Picture</label>
                            <input name="picture" type="file" required class="form-control" />
                            @error('picture')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-primary w-100">Create Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection