@extends('layouts.app')

@section('title', $blog->title . ' - SEWO App')

@section('content')
<!-- Breadcrumb & Header -->
<section class="blog-detail-hero">
    <div class="container">
        <div class="blog-detail-wrapper">
            <!-- Breadcrumb -->
            <nav class="blog-breadcrumb animate-fade-in">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="breadcrumb-item active">{{ Str::limit($blog->title, 50) }}</li>
                </ol>
            </nav>
            
            <!-- Title -->
            <h1 class="blog-detail-title animate-fade-in">{{ $blog->title }}</h1>
            
            <!-- Meta Info -->
            <div class="blog-detail-meta animate-fade-in">
                <span class="meta-item">
                    <i class="bi bi-calendar3"></i>
                    {{ $blog->formatted_published_at }}
                </span>
                <span class="meta-item">
                    <i class="bi bi-eye"></i>
                    5 min read
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Article Content -->
<section class="blog-detail-content section-padding">
    <div class="container">
        <div class="blog-detail-wrapper">
            <article class="blog-article animate-fade-in">
                @if($blog->featured_image)
                    <div class="blog-featured-image">
                        <img src="{{ Storage::url($blog->featured_image) }}" class="img-fluid" alt="{{ $blog->title }}">
                    </div>
                @endif
                
                <div class="blog-content-body">
                    {!! $blog->content !!}
                </div>
            </article>
            
            <!-- Back Button -->
            <div class="blog-back-section">
                <a href="{{ route('blog') }}" class="btn-back">
                    <i class="bi bi-arrow-left"></i>
                    Kembali ke Blog
                </a>
            </div>
        </div>
    </div>
</section>
@endsection