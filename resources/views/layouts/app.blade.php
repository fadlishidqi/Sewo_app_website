<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SEWO App - Your Trusted Rental Partner')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #2B4168;
            --secondary-color: #F4C430;
            --text-dark: #333;
            --text-light: #666;
            --bg-light: #F8F9FA;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        /* NAVBAR */
        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: var(--primary-color) !important;
            padding: 0.5rem 0;
        }

        .navbar-logo {
            height: 40px;
            width: auto;
            max-width: 150px;
            transition: transform 0.3s ease;
        }

        .navbar-logo:hover {
            transform: scale(1.05);
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: var(--text-dark) !important;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: var(--primary-color) !important;
        }

        /* HERO SECTION */
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1a2d47 100%);
            color: white;
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 20"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100" height="20" fill="url(%23grid)" /></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            font-weight: 300;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .hero-description {
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            opacity: 0.8;
            max-width: 600px;
        }

        .hero-cars {
            position: absolute;
            right: -50px;
            bottom: -20px;
            width: 60%;
            opacity: 0.9;
        }

        .hero-cars img {
            max-width: 70%;
            height: auto;
            filter: drop-shadow(0 20px 40px rgba(0,0,0,0.2));
            transition: transform 0.3s ease;
            margin-left: 200px;
            display: block;
            opacity: 0;
            transform: translateX(50px) translateY(30px);
            animation: heroCarsFadeIn 1.2s ease-out 0.8s forwards;
        }

        .hero-cars img:hover {
            transform: scale(1.05) translateX(50px) translateY(30px);
        }

        @keyframes heroCarsFadeIn {
            from { 
                opacity: 0; 
                transform: translateX(50px) translateY(30px) scale(0.8);
            }
            to { 
                opacity: 1; 
                transform: translateX(50px) translateY(30px) scale(1);
            }
        }

        /* BUTTONS */
        .btn-custom {
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-primary-custom {
            background: var(--secondary-color);
            color: var(--primary-color);
            border: 2px solid var(--secondary-color);
        }

        .btn-primary-custom:hover {
            background: transparent;
            color: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(244, 196, 48, 0.3);
        }

        /* SECTIONS */
        .section-padding {
            padding: 80px 0;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
            text-align: center;
        }

        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            text-align: center;
            margin-bottom: 3rem;
        }

        /* FEATURE CARDS */
        .feature-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem 2rem;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: none;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
        }

        .feature-icon.icon-1 { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .feature-icon.icon-2 { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
        .feature-icon.icon-3 { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }
        .feature-icon.icon-4 { background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); }

        .feature-title {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .feature-description {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* TESTIMONIALS */
        .testimonial-section {
            background: var(--bg-light);
        }

        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            height: 100%;
        }

        .testimonial-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .testimonial-name {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .testimonial-role {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .testimonial-rating {
            color: #ffc107;
            margin-bottom: 1rem;
        }

        .testimonial-text {
            color: var(--text-light);
            line-height: 1.6;
            font-style: italic;
        }

        /* FOOTER */
        .footer-modern {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 60px 0 30px;
            border-top: 1px solid rgba(0,0,0,0.1);
        }

        .footer-brand-section {
            display: flex;
            flex-direction: column;
        }

        .footer-logo {
            height: 50px;
            width: auto;
            max-width: 180px;
        }

        .social-icons-modern {
            display: flex;
            gap: 12px;
            margin-bottom: 1rem;
        }

        .social-icon-modern {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            background: #333;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }

        .social-icon-modern:hover {
            background: var(--primary-color);
            transform: translateY(-2px);
            color: white;
        }

        .footer-company-name {
            color: #333;
            font-weight: 600;
            margin: 0;
            font-size: 0.95rem;
        }

        .footer-heading {
            color: #333;
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .footer-links-modern {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links-modern li {
            margin-bottom: 0.8rem;
        }

        .footer-links-modern a {
            color: #666;
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 0.3s ease;
            line-height: 1.5;
        }

        .footer-links-modern a:hover {
            color: var(--primary-color);
        }

        .customer-service-info p {
            color: #666;
            line-height: 1.6;
            margin: 0;
            font-size: 0.95rem;
        }

        .email-link {
            color: var(--primary-color) !important;
            text-decoration: none;
            font-weight: 500;
        }

        .email-link:hover {
            text-decoration: underline;
        }

        /* APP DOWNLOAD SECTION */
        .app-download-section {
            display: flex;
            flex-direction: column;
            gap: 8px;
            align-items: center;
        }

        .app-store-btn .store-badge {
            height: 40px;
            width: auto;
        }

        .google-play-btn .store-badge {
            height: 60px;
            width: auto;
            max-width: 135px;
        }

        .store-badge {
            transition: transform 0.3s ease;
            border-radius: 8px;
        }

        .store-badge:hover {
            transform: scale(1.05);
        }

        .app-store-btn,
        .google-play-btn {
            display: block;
            text-decoration: none;
            border-radius: 8px;
            overflow: hidden;
        }

        /* ANIMATIONS */
        .animate-fade-in {
            animation: fadeIn 0.8s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* RESPONSIVE DESIGN */
        @media (max-width: 768px) {
            /* Navbar */
            .navbar-logo {
                height: 35px;
                max-width: 120px;
            }

            /* Hero */
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .hero-cars {
                display: none;
            }

            /* Sections */
            .section-title {
                font-size: 2rem;
            }

            /* Footer */
            .footer-modern {
                padding: 40px 0 20px;
            }
            
            .footer-brand-section {
                text-align: center;
                margin-bottom: 2rem;
            }
            
            .social-icons-modern {
                justify-content: center;
            }
            
            .footer-heading {
                font-size: 0.9rem;
                margin-bottom: 1rem;
            }
            
            .app-download-section {
                align-items: center;
            }
            
            .app-store-btn .store-badge {
                height: 38px;
            }
            
            .google-play-btn .store-badge {
                height: 54px;
                max-width: 125px;
            }

            /* Hero cars */
            .hero-cars {
                margin-top: 2rem;
                text-align: center;
            }
            
            .hero-cars img {
                max-width: 90%;
            }
        }

        @media (max-width: 576px) {
            /* Social icons */
            .social-icons-modern {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .social-icon-modern {
                width: 32px;
                height: 32px;
                font-size: 1rem;
            }

            /* App download */
            .app-store-btn .store-badge {
                height: 36px;
            }
            
            .google-play-btn .store-badge {
                height: 50px;
                max-width: 115px;
            }
        }

        .blog-hero-minimal {
            background: white;
            padding: 40px 0 40px;
            border-bottom: 1px solid #f0f0f0;
        }

        .blog-hero-content {
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
        }

        .blog-hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
            letter-spacing: -0.5px;
        }

        .blog-hero-subtitle {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 0;
            font-weight: 400;
            line-height: 1.6;
        }

        /* Blog Section */
        .blog-section {
            background: #fafbfc;
        }

        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .blog-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 25px rgba(0,0,0,0.06);
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(0,0,0,0.04);
        }

        .blog-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.12);
            border-color: rgba(43, 65, 104, 0.1);
        }

        .blog-image-container {
            position: relative;
            height: 240px;
            overflow: hidden;
        }

        .blog-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .blog-card:hover .blog-image {
            transform: scale(1.05);
        }

        .blog-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(43,65,104,0.7) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .blog-card:hover .blog-overlay {
            opacity: 1;
        }

        .blog-content {
            padding: 2rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .blog-meta {
            margin-bottom: 1rem;
        }

        .blog-date {
            color: var(--text-light);
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
        }

        .blog-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 1rem;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            transition: color 0.3s ease;
        }

        .blog-card:hover .blog-title {
            color: var(--primary-color);
        }

        .blog-excerpt {
            color: var(--text-light);
            line-height: 1.6;
            margin-bottom: 1.5rem;
            flex: 1;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .blog-read-more {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            margin-top: auto;
        }

        .blog-read-more:hover {
            color: var(--secondary-color);
            transform: translateX(5px);
        }

        .blog-read-more i {
            transition: transform 0.3s ease;
        }

        .blog-read-more:hover i {
            transform: translateX(3px);
        }

        .blog-pagination {
            margin-top: 3rem;
            display: flex;
            justify-content: center;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            max-width: 500px;
            margin: 0 auto;
        }

        .empty-state-icon {
            font-size: 4rem;
            color: var(--text-light);
            margin-bottom: 1.5rem;
            opacity: 0.7;
        }

        .empty-state h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .empty-state p {
            color: var(--text-light);
            line-height: 1.6;
        }

        /* BLOG DETAIL STYLES */
        .blog-detail-hero {
            background: white;
            padding: 120px 0 40px;
            border-bottom: 1px solid #f0f0f0;
        }

        .blog-detail-wrapper {
            max-width: 800px;
            margin: 0 auto;
        }

        .blog-breadcrumb {
            margin-bottom: 2rem;
        }

        .breadcrumb {
            background: none;
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }

        .breadcrumb-item {
            display: flex;
            align-items: center;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: "/";
            color: var(--text-light);
            margin: 0 0.5rem;
        }

        .breadcrumb-item a {
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb-item a:hover {
            color: var(--primary-color);
        }

        .breadcrumb-item.active {
            color: var(--primary-color);
            font-weight: 500;
        }

        .blog-detail-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 1.5rem;
            line-height: 1.3;
            letter-spacing: -0.5px;
        }

        .blog-detail-meta {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            padding-bottom: 2rem;
            border-bottom: 1px solid #f0f0f0;
        }

        .meta-item {
            color: var(--text-light);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .blog-detail-content {
            background: white;
            padding: 40px 0;
        }

        .blog-article {
            background: white;
        }

        .blog-featured-image {
            margin-bottom: 3rem;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .blog-featured-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .blog-content-body {
            line-height: 1.8;
            font-size: 1.1rem;
            color: var(--text-dark);
        }

        .blog-content-body h1,
        .blog-content-body h2,
        .blog-content-body h3,
        .blog-content-body h4,
        .blog-content-body h5,
        .blog-content-body h6 {
            color: var(--primary-color);
            margin-top: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
            line-height: 1.3;
        }

        .blog-content-body h1 { font-size: 2.2rem; }
        .blog-content-body h2 { font-size: 1.8rem; }
        .blog-content-body h3 { font-size: 1.5rem; }
        .blog-content-body h4 { font-size: 1.3rem; }

        .blog-content-body p {
            margin-bottom: 1.5rem;
            color: var(--text-dark);
        }

        .blog-content-body img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
            margin: 2rem 0;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .blog-content-body a {
            color: var(--primary-color);
            text-decoration: none;
            border-bottom: 1px solid transparent;
            transition: border-color 0.3s ease;
        }

        .blog-content-body a:hover {
            border-bottom-color: var(--primary-color);
        }

        .blog-content-body ul,
        .blog-content-body ol {
            margin-bottom: 1.5rem;
            padding-left: 2rem;
        }

        .blog-content-body li {
            margin-bottom: 0.5rem;
            color: var(--text-dark);
        }

        .blog-content-body blockquote {
            border-left: 4px solid var(--primary-color);
            background: #f8f9fa;
            padding: 1.5rem 2rem;
            margin: 2rem 0;
            border-radius: 0 10px 10px 0;
            font-style: italic;
            color: var(--text-light);
        }

        .blog-content-body code {
            background: #f8f9fa;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            font-size: 0.9rem;
            color: var(--primary-color);
        }

        .blog-back-section {
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid #f0f0f0;
        }

        .btn-back {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 12px 24px;
            background: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            background: var(--secondary-color);
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(244, 196, 48, 0.3);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .blog-hero-title {
                font-size: 2rem;
            }
            
            .blog-detail-title {
                font-size: 2rem;
            }
            
            .blog-detail-meta {
                gap: 1rem;
            }
            
            .blog-content {
                padding: 1.5rem;
            }
            
            .blog-image-container {
                height: 200px;
            }
            
            .blog-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .blog-detail-wrapper {
                padding: 0 1rem;
            }
            
            .blog-content-body {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .blog-hero-minimal {
                padding: 100px 0 40px;
            }
            
            .blog-detail-hero {
                padding: 100px 0 30px;
            }
            
            .blog-hero-title {
                font-size: 1.8rem;
            }
            
            .blog-detail-title {
                font-size: 1.8rem;
            }
            
            .blog-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
        }
</style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo sewo.png') }}" alt="SEWO App" class="navbar-logo">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main style="margin-top: 80px;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-modern">
        <div class="container">
            <div class="row align-items-start">
                <!-- Logo Section -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-brand-section">
                        <img src="{{ asset('images/logo sewo.png') }}" alt="SEWO App" class="footer-logo mb-3">
                        <div class="social-icons-modern">
                            <a href="#" class="social-icon-modern"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="social-icon-modern"><i class="bi bi-youtube"></i></a>
                            <a href="#" class="social-icon-modern"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="social-icon-modern"><i class="bi bi-tiktok"></i></a>
                            <a href="#" class="social-icon-modern"><i class="bi bi-linkedin"></i></a>
                        </div>
                        <p class="footer-company-name">SEWO Indonesia</p>
                    </div>
                </div>
                
                <!-- Produk dan Layanan -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="footer-heading">Produk dan Layanan</h6>
                    <ul class="footer-links-modern">
                        <li><a href="#">Sewa Mobil</a></li>
                        <li><a href="#">List Kendaraan</a></li>
                        <li><a href="#">Customer Service</a></li>
                    </ul>
                </div>
                
                <!-- Tentang Sewo -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="footer-heading">Tentang Sewo</h6>
                    <ul class="footer-links-modern">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>
                
                <!-- Layanan Pelanggan -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h6 class="footer-heading">Layanan Pelanggan</h6>
                    <div class="customer-service-info">
                        <p>Layanan pengaduan konsumen<br>
                        SEWO Indonesia<br>
                        <a href="mailto:help@sewo.id" class="email-link">help@sewo.id</a></p>
                    </div>
                </div>
                
                <!-- Download App -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="app-download-section">
                        <a href="#" class="app-store-btn">
                            <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="Download on App Store" class="store-badge">
                        </a>
                        <a href="#" class="google-play-btn">
                            <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="Get it on Google Play" class="store-badge">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.background = 'rgba(255, 255, 255, 0.98)';
            } else {
                navbar.style.background = 'rgba(255, 255, 255, 0.95)';
            }
        });
    </script>
</body>
</html>