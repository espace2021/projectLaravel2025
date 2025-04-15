<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Products</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
   <!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous"> -->

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

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"  type="text/css" media="all" />
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
<!-- js -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- //js -->
<!-- cart -->
<script src="{{ asset('js/simpleCart.min.js') }}"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{ asset('js/bootstrap-3.1.1.min.js') }}"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- timer -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //timer -->
<!-- animation-effect -->
<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"> 
<script src="{{ asset('js/wow.min.js') }}"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
    @yield('extra-head')
</head>

<body>
<!-- header -->
<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login.html">Login</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.html">Register</a></li>
					</ul>
				</div>
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						<li><a href="#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="g"></a></li>
						<li><a href="#" class="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="{{ route('index') }}">Best Store <span>Shop anywhere</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="{{ route('index') }}" class="act">Home</a></li>	
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Men's Wear</h6>
												<li><a href="{{ route('products') }}">Clothing</a></li>
												<li><a href="{{ route('products') }}">Wallets</a></li>
												<li><a href="{{ route('products') }}">Shoes</a></li>
												<li><a href="{{ route('products') }}">Watches</a></li>
												<li><a href="{{ route('products') }}">Accessories</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Women's Wear</h6>
												<li><a href="{{ route('products') }}">Clothing</a></li>
												<li><a href="{{ route('products') }}">Wallets,Bags</a></li>
												<li><a href="{{ route('products') }}">Footwear</a></li>
												<li><a href="{{ route('products') }}">Watches</a></li>
												<li><a href="{{ route('products') }}">Accessories</a></li>
												<li><a href="{{ route('products') }}">Jewellery</a></li>
												<li><a href="{{ route('products') }}">Beauty & Grooming</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Kid's Wear</h6>
												<li><a href="{{ route('products') }}">Kids Home Fashion</a></li>
												<li><a href="{{ route('products') }}">Boy's Clothing</a></li>
												<li><a href="{{ route('products') }}">Girl's Clothing</a></li>
												<li><a href="{{ route('products') }}">Shoes</a></li>
												<li><a href="{{ route('products') }}">Brand Stores</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Furniture <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Home Collection</h6>
												<li><a href="{{ route('furniture') }}">Cookware</a></li>
												<li><a href="{{ route('furniture') }}">Sofas</a></li>
												<li><a href="{{ route('furniture') }}">Dining Tables</a></li>
												<li><a href="{{ route('furniture') }}">Shoe Racks</a></li>
												<li><a href="{{ route('furniture') }}">Home Decor</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Office Collection</h6>
												<li><a href="{{ route('furniture') }}">Carpets</a></li>
												<li><a href="{{ route('furniture') }}">Tables</a></li>
												<li><a href="{{ route('furniture') }}">Sofas</a></li>
												<li><a href="{{ route('furniture') }}">Shoe Racks</a></li>
												<li><a href="{{ route('furniture') }}">Sockets</a></li>
												<li><a href="{{ route('furniture') }}">Electrical Machines</a></li>
											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Decorations</h6>
												<li><a href="{{ route('furniture') }}">Toys</a></li>
												<li><a href="{{ route('furniture') }}">Wall Clock</a></li>
												<li><a href="{{ route('furniture') }}">Lighting</a></li>
												<li><a href="{{ route('furniture') }}">Top Brands</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li><a href="short-codes.html">Short Codes</a></li>
							<li><a href="mail.html">Mail Us</a></li>
						</ul>
					</div>
					</nav>
				</div>
				<div class="logo-nav-right">
					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>
						<!-- search-scripts -->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
							<script>
								new UISearch( document.getElementById( 'sb-search' ) );
							</script>
						<!-- //search-scripts -->
				</div>
				<div class="header-right">
					<div class="cart box_1">
						<a href="{{ route('checkout') }}">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="images/bag.png" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->
<!--

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
-->

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
