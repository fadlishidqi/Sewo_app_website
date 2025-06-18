@extends('layouts.app')

@section('title', $blog->title . ' - Landing Page')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <article>
                @if($blog->featured_image)
                    <img src="{{ Storage::url($blog->featured_image) }}" class="img-fluid rounded mb-4" alt="{{ $blog->title }}">
                @endif
                
                <h1 class="mb-3">{{ $blog->title }}</h1>
                
                <p class="text-muted mb-4">
                    <small>Dipublikasikan pada {{ $blog->formatted_published_at }}</small>
                </p>
                
                <div class="content">
                    {!! $blog->content !!}
                </div>
            </article>
            
            <hr class="my-5">
            
            <div class="text-center">
                <a href="{{ route('blog') }}" class="btn btn-outline-primary">← Kembali ke Blog</a>
            </div>
        </div>
    </div>
</div>
@endsection