@extends('Frontend.layout.master')

@section('content')

    <body class="contact">
        <!-- Navbar Section Start -->

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
                                    <a class="nav-link" href="/">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="">Product</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Contact</a>
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
                    <h1>Contact Us</h1>
                </div>
            </div>
        </section>
        <!-- banner section exit -->

        <!--Contact Section Start-->
        <section class="contact_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center pb-5">
                        <h2 class="section-title">Get In Touch</h2>
                        <p class="section-subtitle">The Passage Experienced A Surge In Popularity During The 1960s When
                            Again During The 90s As Desktop Publishers</p>
                    </div>
                    <div class="col-12 contact-form">
                        <div class="row">
                            <div class="col-lg-7 mb-5">
                                <form class="row g-3">
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-controler" placeholder="Your Name *" required="">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="email" class="form-controler" placeholder="Your Email *"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="text" class="form-controler" placeholder="Your Address *"
                                            required="">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input type="number" class="form-controler" placeholder="Your Phone *"
                                            required="">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <input class="form-controler" placeholder="your Message.....">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="bto main-btn">Send Message</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-5 mb-5">
                                <div class="content-box ms-sm-5">
                                    <ul class="info-box clearfix">
                                        <li>
                                            <i class="fas fa-phone-alt"></i>
                                            <p>Any Questions? Call us</p>
                                            <div>
                                                <a href="#">+977-9800000000</a>
                                            </div>
                                        </li>
                                        <li>
                                            <i class="far fa-envelope-open"></i>
                                            <p>Any Questions? Email us</p>
                                            <div>
                                                <a href="#">@agrimart.com</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Section Exit -->

    </body>
    @include('Frontend.components.footer')
@endsection
