<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="frontend/css/tiny-slider.css" rel="stylesheet">
    <link href="frontend/css/style.css" rel="stylesheet">
    <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
</head>

<body>

    <!-- Start Header/Navigation -->
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Furni<span>.</span></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
                aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsFurni">
                <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">

                    <li class="{{ request()->is('/') ? 'nav-item active' : '' }}">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="{{ request()->is('shop') ? 'nav-item active' : '' }}"><a class="nav-link"
                            href="{{ url('/shop') }}">Shop</a></li>
                    <li class="{{ request()->is('about') ? 'nav-item active' : '' }}"><a class="nav-link"
                            href="{{ url('/about') }}">About us</a></li>
                    <li class="{{ request()->is('services') ? 'nav-item active' : '' }}"><a class="nav-link"
                            href="{{ url('/services') }}">Services</a></li>
                    <li class="{{ request()->is('blog') ? 'nav-item active' : '' }}"><a class="nav-link"
                            href="{{ url('/blog') }}">Blog</a></li>
                    <li class="{{ request()->is('contact') ? 'nav-item active' : '' }}"><a class="nav-link"
                            href="{{ url('/contact') }}">Contact us</a></li>
                </ul>

                <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
                    <li><a class="nav-link" href="{{ url('/') }}/login"><img src="frontend/images/user.svg"></a></li>
                    <li><a class="nav-link" href="{{ url('/cart') }}"><img src="frontend/images/cart.svg"></a></li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- End Header/Navigation -->