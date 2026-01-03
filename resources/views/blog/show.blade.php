@extends('layouts.app_main')

@section('title', $post->title . ' | KMA Medical store')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <h1>{{ $post->title }}</h1>
            <p class="text-muted">{{ $post->created_at->format('F d, Y') }}</p>
            @if($post->image)
                <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid mb-4" alt="{{ $post->title }}">
            @endif
            <div>{!! $post->content !!}</div>
        </div>
    </div>
</div>
@endsection
