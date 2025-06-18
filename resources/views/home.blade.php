@extends('layouts.app')

@section('title', 'Home - Landing Page')

@section('content')
<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <h1 class="display-4 mb-4">Selamat Datang di Website Kami</h1>
        <p class="lead mb-4">Solusi terbaik untuk kebutuhan bisnis Anda</p>
        <a href="#features" class="btn btn-light btn-lg">Pelajari Lebih Lanjut</a>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2>Fitur Unggulan</h2>
                <p class="text-muted">Mengapa memilih layanan kami?</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-rocket fa-3x text-primary"></i>
                        </div>
                        <h5 class="card-title">Cepat & Efisien</h5>
                        <p class="card-text">Layanan yang cepat dan efisien untuk memenuhi kebutuhan Anda.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-shield-alt fa-3x text-success"></i>
                        </div>
                        <h5 class="card-title">Aman & Terpercaya</h5>
                        <p class="card-text">Keamanan data dan privasi Anda adalah prioritas utama kami.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="fas fa-headset fa-3x text-info"></i>
                        </div>
                        <h5 class="card-title">Support 24/7</h5>
                        <p class="card-text">Tim support yang siap membantu Anda kapan saja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-primary text-white py-5">
    <div class="container text-center">
        <h3>Siap untuk Memulai?</h3>
        <p class="mb-4">Bergabunglah dengan ribuan pelanggan yang puas</p>
        <a href="#" class="btn btn-light btn-lg">Hubungi Kami</a>
    </div>
</section>
@endsection