@extends('layouts.app_main')

@section('title', 'Blog | KMA Medical store')

@section('content')
<div class="container my-5">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($post->image)
                        <img src="{{ asset('assets/img/about.jpg') }}" class="card-img-top" alt="{{ $post->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="{{ route('blog.show', $post->slug) }}" class="cta-btn">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $posts->links() }}
</div>
@endsection
