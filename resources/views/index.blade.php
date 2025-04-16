@extends('layouts.home')

@section('content')
    <div class="container">
    <div class="main-nav">
        <a href="/"><i class="fas fa-fw fa-tb"></i>Electronics Product List</a>
        <div class="push-right">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
                     
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
            <a href="/new/category"><i class="fas fa-fw fa-plus"></i> New Category</a>
            <a href="/new/product"><i class="fas fa-fw fa-plus"></i> New Product</a>
            <a href="{{ url('/generate-pdf') }}" <i class="fas fa-fw fa-file-pdf"></i> PDF </a>
        </div>
    </div>
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