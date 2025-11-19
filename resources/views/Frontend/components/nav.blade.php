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
                            <a class="nav-link active" href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
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
