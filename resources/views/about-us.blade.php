@extends('layouts.app_main')

@section('title', 'About us | KMA medial store UAE')

@section('meta_description', 'Explore detailed information about our product, including category, size, description, ingredients, and key features. Perfect for understanding what makes this product unique and suitable for your needs.')

@section('content')


<!-- Page Title -->
<div class="page-title">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2>About Us<br></h2>
                        <p>support healthcare providers with safe, timely, and compliant access to pharmaceutical products sourced from approved international partners</p>
                    </div><!-- End Section Title -->

                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="current">About KMA</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- Starter Section Section -->
<section id="starter-section" class="starter-section section">

    <div class="container" data-aos="fade-up">
        <!-- About Section -->
        <section id="about" class="about section">


            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                        <a href="#" class="#"></a>
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>A Trusted Partner in Medical Supply</h3>
                        <p class="fst-italic">
                            KMA.care operates under strict UAE government regulations and holds strong licensing for pharmaceutical import and distribution.
                            With a focused leadership team and a dedicated operational network, we provide dependable medical supply solutions tailored to the needs of hospitals, clinics, and healthcare professionals.
                        </p>
                        <p>
                            <strong> Why Choose KMA.care </strong>
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Fully licensed and regulated in the UAE.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Compliance with pharmaceutical storage and distribution standards.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Flexible, demand-based sourcing.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Reliable logistics and responsive service.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Reliable logistics and responsive service.</span></li>
                        </ul>
                        <p>
                            Key Medical Aid (KMA.care) is a UAE-licensed medical store specializing in pharmaceutical import, storage, and distribution
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Start KMA_members Area -->
        @include('includes.kma_members')
        <!-- End KMA_members Area -->
    </div>

</section><!-- /Starter Section Section -->





@endsection