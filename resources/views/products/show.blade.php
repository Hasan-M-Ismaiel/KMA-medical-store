@extends('layouts.app_main')

@section('content')
<div class="container py-5">

    <h2>{{ $product->name }}</h2>

    <img src="{{ asset('assets/img/about.jpg') }}"
        class="img-fluid mb-4">

    <p>{{ $product->description }}</p>

    <ul>
        <li><strong>Dosage Form:</strong> {{ $product->dosage_form }}</li>
        <li><strong>Age Group:</strong> {{ $product->age_group }}</li>
    </ul>

    <h5>Usage Instructions</h5>
    <p>{{ $product->usage_instructions }}</p>

    <h5 class="text-danger">Warnings</h5>
    <p>{{ $product->warnings }}</p>

</div>
@endsection