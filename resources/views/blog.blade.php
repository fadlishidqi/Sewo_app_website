@extends('layouts.app')

@section('title', 'Blog - Landing Page')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-5">Blog Kami</h1>
            
            @if($blogs->count() > 0)
                @foreach($blogs as $blog)
                <article class="card mb-4">
                    @if($blog->featured_image)
                        <img src="{{ Storage::url($blog->featured_image) }}" class="card-img-top" alt="{{ $blog->title }}" style="height: 250px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h2 class="card-title">{{ $blog->title }}</h2>
                        <p class="text-muted mb-3">
                            <small>Dipublikasikan pada {{ $blog->formatted_published_at }}</small>
                        </p>
                        <p class="card-text">{{ $blog->excerpt }}</p>
                        <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </article>
                @endforeach
                
                <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    {{ $blogs->links() }}
                </div>
            @else
                <div class="text-center">
                    <p class="text-muted">Belum ada artikel yang dipublikasikan.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection