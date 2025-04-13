@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="one-to-many">
            <div class="sidebar">
                <p>Category List</p>
                <a class="{{ !isset($current_category) ? 'selected' : '' }}" href="/">All categories</a>
                @foreach ($categories as $category)
                    <a href="/category/{{ $category->id }}"
                        class="{{ isset($current_category) && $current_category->id === $category->id ? 'selected' : '' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
            <div class="container py-4">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">{{ $product->category->name }}</span>
                        <div class="text-center mb-3">
                            <img src="/storage/uploads/{{ $product->image }}" alt="{{ $product->name }}" class="img-fluid rounded product-image">
                        </div>
                        <h5 class="card-title text-center">{{ $product->name }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

        </div>
    </div>
@endsection