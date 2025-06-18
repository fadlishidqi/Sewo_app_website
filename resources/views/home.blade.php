@extends('layouts.app')

@section('title', 'SEWO App - Your Trusted Rental Partner')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content animate-fade-in">
                    <h1 class="hero-title">#SEWOSEWESEWO</h1>
                    <h2 class="hero-subtitle">Your Trusted Rental Partner</h2>
                    <p class="hero-description">
                        SEWO adalah salah satu platform penyedia jasa sewa mobil dan motor untuk sewa harian, 
                        mingguan, hingga bulanan. Berbasis aplikasi dan website, pengguna dapat mengakses 
                        dimana pun dan kapan pun sesuai dengan kebutuhan pengguna.
                    </p>
                    <a href="#features" class="btn-custom btn-primary-custom">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-cars">
                    <img src="{{ asset('images/herosect.png') }}" alt="Rental Cars" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="section-padding">
    <div class="container">
        <h2 class="section-title">Kenapa Sewa di "Sewo App"?</h2>
        <p class="section-subtitle">Keunggulan yang membuat SEWO menjadi pilihan terbaik untuk kebutuhan rental Anda</p>
        
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="feature-card animate-fade-in">
                    <div class="feature-icon icon-1">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                    <h4 class="feature-title">Proses Mudah dan Cepat</h4>
                    <p class="feature-description">
                        Booking kendaraan dengan mudah hanya dalam beberapa langkah. 
                        Proses yang simpel dan user-friendly.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card animate-fade-in">
                    <div class="feature-icon icon-2">
                        <i class="bi bi-credit-card"></i>
                    </div>
                    <h4 class="feature-title">Kemudahan Pembayaran</h4>
                    <p class="feature-description">
                        Berbagai pilihan metode pembayaran yang aman dan terpercaya. 
                        Transaksi mudah dan cepat.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card animate-fade-in">
                    <div class="feature-icon icon-3">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="feature-title">Keamanan Sistem</h4>
                    <p class="feature-description">
                        Sistem keamanan berlapis untuk melindungi data dan privasi Anda. 
                        Terjamin aman dan terpercaya.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="feature-card animate-fade-in">
                    <div class="feature-icon icon-4">
                        <i class="bi bi-link-45deg"></i>
                    </div>
                    <h4 class="feature-title">Beragam Pilihan Kendaraan</h4>
                    <p class="feature-description">
                        Koleksi lengkap mobil dan motor dengan berbagai tipe dan harga. 
                        Sesuai kebutuhan Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonial-section section-padding">
    <div class="container">
        <h2 class="section-title">Kata Pengguna "Sewo App"</h2>
        <p class="section-subtitle">Pengalaman nyata dari pelanggan yang telah menggunakan layanan kami</p>
        
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="testimonial-card">
                    <div class="d-flex align-items-start mb-3">
                        <div class="testimonial-avatar me-3">SA</div>
                        <div>
                            <div class="testimonial-name">Sultan Aladin</div>
                            <div class="testimonial-role">Traveler</div>
                        </div>
                    </div>
                    <div class="testimonial-rating mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">
                        "Aplikasi ini membantu saya ketika membutuhkan kendaraan secara mendadak. 
                        Prosesnya mudah dan cepat, hanya perlu beberapa klik. Pilihan mobil yang 
                        disediakan juga sangat beragam."
                    </p>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="testimonial-card">
                    <div class="d-flex align-items-start mb-3">
                        <div class="testimonial-avatar me-3">SA</div>
                        <div>
                            <div class="testimonial-name">Syaiful Abdul</div>
                            <div class="testimonial-role">Business Man</div>
                        </div>
                    </div>
                    <div class="testimonial-rating mb-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">
                        "Fitur yang disediakan membantu saya untuk segera memproses sewa kendaraan. 
                        Simpel namun lengkap dan cepat."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="hero-section" style="padding: 60px 0;">
    <div class="container text-center">
        <h3 class="mb-4" style="font-size: 2.5rem; font-weight: 700;">Siap untuk Memulai?</h3>
        <p class="mb-4" style="font-size: 1.2rem; opacity: 0.9;">Download aplikasi SEWO sekarang dan nikmati kemudahan rental kendaraan</p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="#" class="btn-custom btn-primary-custom">
                <i class="bi bi-apple me-2"></i>Download di App Store
            </a>
            <a href="#" class="btn-custom btn-primary-custom">
                <i class="bi bi-google-play me-2"></i>Download di Play Store
            </a>
        </div>
    </div>
</section>
@endsection