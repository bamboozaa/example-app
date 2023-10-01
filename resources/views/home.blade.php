@extends('layouts.app')

@section('title', 'Home Page')

@section('importcss')
    @parent
    {{ Html::style('css/main.css') }}
@stop

@section('content')
    <div class="hero-section">
        <div class="container">
            {{-- Navbar --}}
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="#">START CODING</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
                            <li class="nav-item">
                                <button class="btn">Free Trial</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            {{-- Section content --}}
            <div class="hero-section-content">
                <div class="container">
                    <div class="left-part">
                        <h1>Welcome to <span>START COING Mobile App</span></h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <button class="btn">Get Started</button>
                    </div>
                    <div class="right-part">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('importjs')
    @parent
    {{ Html::script('js/main.js') }}
@stop
