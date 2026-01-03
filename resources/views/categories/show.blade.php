@extends('layouts.app_main')

@section('content')
<div class="container py-5">
    <h2>{{ $category->name }}</h2>

    <div class="row mt-4">
        @foreach($category->products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">

                    <img src="{{ asset('assets/img/about.jpg') }}"
                         class="card-img-top">

                    <div class="card-body">
                        <h5>{{ $product->name }}</h5>
                        <p>{{ $product->short_description }}</p>
                    </div>

                    <div class="card-footer bg-white border-0">
                        <a href="{{ route('product.show', $product->slug) }}"
                           class="cta-btn">
                           Read More
                        </a>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
