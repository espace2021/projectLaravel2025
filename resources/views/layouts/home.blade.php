<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

     <style>
        body,
        .nunito {
            font-family: 'Nunito';
            background-color: #efefef;
        }

        img.product-image {
            width: 100%
        }

        .sidebar {
            display: flex;
            flex-direction: column;
            min-width: 270px;
        }

        .sidebar a {
            text-decoration: none;
            margin-bottom: 8px;
        }

        .sidebar p {
            font-size: 1.4rem;
            font-weight: 600;
        }

        .sidebar a.selected {
            font-weight: bold;
        }

        .one-to-many {
            display: flex;
        }

        .content-wrapper {
            margin-left: 15px
        }

        .thumbnail {
            height: 120px;
        }

        .thumbnail img {
            object-fit: contain;
            height: 120px;
        }

        .main-nav {
            display: flex;
            justify-content: space-between;
            padding: 11px 30px;
            background-color: blue;
            margin-bottom: 30px;
        }

        .main-nav a {
            text-decoration: none;
            color: white;
            font-weight: 600;
        }

        .push-right {
            display: flex;
        }

        .push-right *:not(:last-child) {
            margin-right: 10px;
        }

        .product {
            width: 100%;
            background-color: white;
            padding: 16px 16px 4px;
            border-radius: 4px;
            box-shadow: 0 0 4px rgba(0, 0, 0, .15);
            cursor: pointer;
        }

        .product p {
            font-weight: 600;
        }

        h5 {
            font-weight: 700;
            margin-bottom: .9rem;
        }

    </style>

    @yield('extra-head')
</head>

<body>

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
        </div>
    </div>
    @yield('content')
   
    <script src="https://kit.fontawesome.com/fa4a01622d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if (session()->has('status'))
        @php
        $icon = session()->get('status');
        $title = session()->get('title');
        $message = session()->get('message');
        @endphp
        <script>
            Swal.fire({
                title: "{{ $title }}",
                icon: "{{ $icon }}",
                text: "{{ $message }}",
                confirmButtonText: "Sweet!"
            })

        </script>
    @endif
</body>

</html>
