@extends('Frontend.layout.master')

@section('content')

    <body class="about">

        <header id="full_nav">
            <div class="header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="/">
                            <img decoding="async" src="./img/logo.png" alt="">
                        </a>

                        <div class="collapse navbar-collapse" id="main-nav">
                            <ul class="navbar-nav mx-auto">

                                <form class="d-flex">
                                    <input class="form-control px-2" type="search" placeholder="" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>

                                <li class="nav-item">
                                    <a class="nav-link " href="/">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="product.html">Product</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="icon-use">
                            <div class="cart">
                                <a href="index.html"> <img src="./img/shopping-bag.png" alt=""></a>
                            </div>

                            <div class="user">
                                <a href="#"><img src="./img/user.png" alt=""></a>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                            aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <!-- <span class="navbar-toggler-icon"></span> -->
                            <i class="fas fa-stream navbar-toggler-icon"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </header>
        <!-- Navbar Section Exit -->

        <!-- banner Section start -->
        <section class="bbanner_section">
            <div class="container">
                <div class="banner-content">
                    <h1>About Us</h1>
                </div>
            </div>
        </section>
        <!-- banner section exit -->

        <!--About Section start -->
        <section class="about_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center pb-5">
                        <h2 class="section-title">About Us</h2>
                        <p class="section-subtitle">Our goal is to support farmers and provide quality products to every
                            home by
                            creating a fair and transparent online marketplace</p>
                    </div>
                </div>
                <div class="row align-items-center py-5">
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="me-lg-5">
                            <img decoding="async" src="../img/about2.png" alt="about" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="about-content">
                            <div class="about-details">
                                <p>AgriMart is a Nepal-based online agriculture marketplace built to support farmers and
                                    modernize the way fresh produce is sold. In traditional markets, farmers often face low
                                    profit margins due to middlemen. AgriMart changes this by offering a platform where
                                    farmers
                                    can directly list their products, set their own prices, and reach customers easily.
                                    Customers can browse fresh vegetables, place orders, and enjoy timely delivery—all while
                                    supporting local farmers. Our goal is to create a fair, transparent, and sustainable
                                    agricultural ecosystem that benefits both farmers and consumers.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center py-5">
                    <div class="col-lg-6 col-12 order-2 order-lg-1 mb-4 ">
                        <div class="about-content">
                            <div class="about-details">
                                <p>AgriMart is a digital marketplace designed to empower Nepalese farmers by giving them
                                    direct
                                    access to customers. We provide a simple and transparent platform where farmers can
                                    upload
                                    their products and customers can buy fresh vegetables at fair prices. By eliminating
                                    middlemen, AgriMart ensures better income for farmers and affordable, high-quality
                                    products
                                    for consumers. Our mission is to support local agriculture and promote a smarter, fairer
                                    way
                                    of buying and selling farm products.</p>
                                <p>We’re here to make buying fresh vegetables simple and affordable while helping farmers
                                    earn
                                    more. Our platform allows farmers to sell their products directly to you—no middlemen,
                                    no
                                    unfair prices. Just fresh, local produce delivered with trust.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 order-1 order-lg-2 mb-4">
                        <div class="me-lg-5">
                            <img decoding="async" src="../img/about1.jpg" alt="about" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Section Exit -->

    </body>
    @include('Frontend.components.footer')
@endsection
