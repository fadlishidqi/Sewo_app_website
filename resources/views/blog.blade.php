@extends('layouts.app')

@section('title', 'Blog - SEWO App')

@section('content')
<!-- Hero Section Blog - Minimal & Modern -->
<section class="blog-hero-minimal">
    <div class="container">
        <div class="blog-hero-content">
            <h1 class="blog-hero-title animate-fade-in">Blog</h1>
            <p class="blog-hero-subtitle animate-fade-in">Artikel terbaru, tips, dan insight seputar rental kendaraan</p>
        </div>
    </div>
</section>

<!-- Blog Content -->
<section class="blog-section section-padding">
    <div class="container">
        @if($blogs->count() > 0)
            <div class="blog-grid">
                @foreach($blogs as $index => $blog)
                <article class="blog-card animate-fade-in" style="animation-delay: {{ $index * 0.1 }}s">
                    @if($blog->featured_image)
                        <div class="blog-image-container">
                            <img src="{{ Storage::url($blog->featured_image) }}" class="blog-image" alt="{{ $blog->title }}">
                            <div class="blog-overlay"></div>
                        </div>
                    @endif
                    
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-date">
                                <i class="bi bi-calendar3"></i>
                                {{ $blog->formatted_published_at }}
                            </span>
                        </div>
                        
                        <h2 class="blog-title">{{ $blog->title }}</h2>
                        
                        <p class="blog-excerpt">{{ $blog->excerpt }}</p>
                        
                        <a href="{{ route('blog.show', $blog->slug) }}" class="blog-read-more">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="blog-pagination">
                {{ $blogs->links() }}
            </div>
        @else
            <div class="empty-state">
                <div class="empty-state-icon">
                    <i class="bi bi-journal-text"></i>
                </div>
                <h3>Belum Ada Artikel</h3>
                <p>Artikel blog akan segera hadir. Pantau terus untuk mendapatkan update terbaru!</p>
            </div>
        @endif
    </div>
</section>
@endsection