@extends('layouts.app')

@section('title', 'About Us - Landing Page')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <h1 class="text-center mb-5">Tentang Kami</h1>
            
            <div class="row align-items-center mb-5">
                <div class="col-md-6">
                    <h2>Siapa Kami?</h2>
                    <p class="lead">
                        Kami adalah tim profesional yang berdedikasi untuk memberikan solusi terbaik 
                        bagi kebutuhan bisnis Anda.
                    </p>
                    <p>
                        Dengan pengalaman bertahun-tahun di industri ini, kami memahami tantangan 
                        yang dihadapi oleh bisnis modern dan siap membantu Anda mengatasinya.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/500x300" alt="About Us" class="img-fluid rounded">
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <h3>Visi Kami</h3>
                    <p>
                        Menjadi partner terpercaya dalam transformasi digital bisnis Anda.
                    </p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <h3>Misi Kami</h3>
                    <p>
                        Memberikan solusi inovatif dan berkualitas tinggi untuk setiap klien.
                    </p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <h3>Nilai Kami</h3>
                    <p>
                        Integritas, kualitas, dan kepuasan pelanggan adalah prioritas utama kami.
                    </p>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col text-center">
                    <h3>Tim Kami</h3>
                    <p class="text-muted mb-4">Profesional berpengalaman yang siap membantu Anda</p>
                    
                    <div class="row">
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/150" alt="Team Member" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px;">
                                <div class="card-body text-center">
                                    <h5>John Doe</h5>
                                    <p class="text-muted">CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/150" alt="Team Member" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px;">
                                <div class="card-body text-center">
                                    <h5>Jane Smith</h5>
                                    <p class="text-muted">Lead Developer</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/150" alt="Team Member" class="card-img-top rounded-circle mx-auto mt-3" style="width: 150px; height: 150px;">
                                <div class="card-body text-center">
                                    <h5>Mike Johnson</h5>
                                    <p class="text-muted">Marketing Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection