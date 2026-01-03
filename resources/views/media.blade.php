@extends('layouts.app_main')

@section('title', 'Contact us | KMA medial store UAE')

@section('meta_description', 'Explore detailed information Contact our product, including category, size, description, ingredients, and key features. Perfect for understanding what makes this product unique and suitable for your needs.')

@section('content')


<!-- Page Title -->
<div class="page-title">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2>Gallery</h2>
                        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                    </div><!-- End Section Title -->

                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="current">Media</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- Starter Section Section -->
<section id="starter-section" class="starter-section section">

    <div class="container" data-aos="fade-up">

        <!-- Start gallery_section Area -->
        @include('includes.gallery_section')
        <!-- End gallery_section Area -->

    </div>

</section><!-- /Starter Section Section -->

@endsection