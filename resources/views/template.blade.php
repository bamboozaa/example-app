@extends('layouts.app')

@section('title', 'Start Coding | Mobile App landing Page')

@section('importcss')
    @parent
    {{ Html::style('css/main.css') }}
@stop

@section('header')

@endsection

@section('content')
    <!-- Start Hero Section -->
    <div class="hero-section">
        <div class="container">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">START CODING</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Screenshots</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Download</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact us</a>
                            </li>
                        </ul>
                        <button class="btn">Free Trial</button>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- Section Content -->
            <div class="hero-section-content">
                <div class="container">
                    <div class="left-part">
                        <h1>Welcome to <span>START CODING Mobile App</span></h1>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s,
                        </p>
                        <button class="btn">Get Started</button>
                    </div>
                    <div class="right-part">

                    </div>
                </div>
            </div>
            <!-- End Section Content -->

            <!-- Start Features Section -->
            <section class="features-section">
                <div class="container">
                    <h3 class="section-title">Our Features</h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <h3>Secured Design</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry
                                </p>
                                <a href="">
                                    Read More
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="icon">
                                    <i class="bi bi-bounding-box"></i>
                                </div>
                                <h3>Awesome Design</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry
                                </p>
                                <a href="">
                                    Read More
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card">
                                <div class="icon">
                                    <i class="bi bi-card-checklist"></i>
                                </div>
                                <h3>Easy Customized</h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                    been the industry
                                </p>
                                <a href="">
                                    Read More
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Features Section -->

            <!-- Start About us Section -->

            <section class="aboutus-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="left-part">
                                <img src="../images/about-us.svg" alt="about-us-image">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="right-part">
                                <h3>
                                    Awesome App for you business growth
                                </h3>
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry
                                </p>
                                <a href="" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End About us Section -->

        </div>
    </div>

@endsection

@section('footer')

@endsection

@section('importjs')
    @parent
    {{ Html::script('js/main.js') }}
@stop
