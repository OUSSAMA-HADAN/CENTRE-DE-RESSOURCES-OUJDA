@extends('layouts.app')

@section('title', 'Formations en ligne')

@section('content')
<section class="hero-section position-relative overflow-hidden mt-5" style="min-height: 70vh; background: #10B981;">
    <div class="hero-background position-absolute w-100 h-100" style="background: url('{{ asset('storage/images/formation-bg.jpg') }}') center/cover no-repeat; opacity: 0.15; top: 0; left: 0; z-index: 0;"></div>
    
    <!-- Animated shapes -->
    <div class="hero-shapes">
        <div class="shape-1"></div>
        <div class="shape-2"></div>
        <div class="shape-3"></div>
    </div>
    
    <div class="container position-relative" style="z-index: 5;">
        <div class="row justify-content-center align-items-center min-vh-50">
            <div class="col-lg-8 text-center text-white py-5">
                <div class="badge bg-warning text-dark px-3 py-2 mb-4">
                    <i class="fas fa-users me-2"></i>Centre de Ressources du Préscolaire
                </div>
                
                <h1 class="display-3 fw-bold mb-3 text-shadow">{{ __('formation.title') }}</h1>
                
                <div class="d-flex justify-content-center mb-4">
                    <div style="width: 100px; height: 4px; background-color: #ffc107;"></div>
                </div>
                
                <p class="lead mb-5 text-shadow">{{ __('formation.description') }}</p>
                
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="#formations" class="btn btn-light btn-lg px-4 py-3 rounded-pill shadow-sm">
                        <i class="fas fa-book-open me-2"></i>{{ __('formation.view_all_button') }}
                    </a>
                    {{-- <a href="{{ route('inscription.form') }}" class="btn btn-outline-light btn-lg px-4 py-3 rounded-pill">
                        <i class="fas fa-user-plus me-2"></i>{{ __('formation.register_button') }}
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    
    <!-- Wave bottom -->
    <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden" style="transform: translateY(1px);">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" class="w-100" style="height: 80px;">
            <path fill="#f8f9fa" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,197.3C384,181,480,139,576,144C672,149,768,203,864,202.7C960,203,1056,149,1152,133.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </div>
</section>

<!-- Notre approche -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <div class="row align-items-center">
                            <div class="col-md-4 mb-4 mb-md-0">
                                <img src="{{ asset('storage/images/formation-icon.png') }}" alt="Atelier en ligne" class="img-fluid rounded">
                            </div>
                            <div class="col-md-8">
                                <h2 class="mb-4">{{ __('formation.approach.title') }}</h2>
                                <p class="text-muted mb-4">{{ __('formation.approach.description') }}</p>
                                
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3 p-3 rounded-circle bg-info text-white">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">{{ __('formation.approach.flexibility.title') }}</h5>
                                        <p class="mb-0 text-muted">{{ __('formation.approach.flexibility.description') }}</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3 p-3 rounded-circle bg-info text-white">
                                        <i class="fas fa-certificate"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">{{ __('formation.approach.certification.title') }}</h5>
                                        <p class="mb-0 text-muted">{{ __('formation.approach.certification.description') }}</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex align-items-center">
                                    <div class="me-3 p-3 rounded-circle bg-info text-white">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-1">{{ __('formation.approach.community.title') }}</h5>
                                        <p class="mb-0 text-muted">{{ __('formation.approach.community.description') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formations programmées -->
<section id="formations" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Formations en ligne programmées</h2>
            <div class="d-flex justify-content-center mb-3">
                <div style="width: 80px; height: 4px; background-color: #10b981;"></div>
            </div>
            <p class="text-muted">Découvrez nos Ateliers en ligne conçues pour développer vos compétences professionnelles.</p>
        </div>
        
        @if(isset($formations) && count($formations) > 0)
            <div class="row g-4">
                @foreach($formations as $formation)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-header bg-info text-white py-3">
                                <h5 class="card-title mb-0">{{ $formation->title }}</h5>
                            </div>
                            <div class="card-body p-4">
                                <div class="mb-3">
                                    @if($formation->thumbnail)
                                        <img src="{{ $formation->thumbnail_url }}" alt="{{ $formation->title }}" class="img-fluid rounded mb-3">
                                    @endif
                                    <p class="text-muted">{{ Str::limit($formation->description, 150) }}</p>
                                </div>
                                
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-calendar-alt text-info me-2"></i>
                                    <span>Début le : {{ $formation->start_date ? $formation->start_date->format('d/m/Y') : 'Date non définie' }}</span>
                                </div>
                                
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-clock text-info me-2"></i>
                                    <span>Durée : {{ $formation->duration ?? 'Non spécifiée' }}</span>
                                </div>
                                
                                <div class="d-flex align-items-center mb-2">
                                    <i class="fas fa-user-tie text-info me-2"></i>
                                    <span>Formateur : {{ $formation->formateur }}</span>
                                </div>
                                
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-video text-info me-2"></i>
                                    <span>Plateforme : {{ $formation->platform }}</span>
                                </div>
                            </div>
                            
                            <div class="card-footer">
                                <a href="{{ route('formation.show', $formation->slug) }}" class="btn btn-outline-primary w-100">
                                    Voir les détails
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="card border-0 shadow-sm">
                <div class="card-body p-5 text-center">
                    <div class="mb-4">
                        <i class="fas fa-calendar-alt fa-4x text-muted opacity-50"></i>
                    </div>
                    <h3 class="mb-3">Aucune formation disponible</h3>
                    <p class="text-muted mb-4">Nous travaillons actuellement sur de nouvelles formations. Revenez bientôt !</p>
                </div>
            </div>
        @endif
    </div>
</section>

<!-- Pourquoi nos formations -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">{{ __('formation.why_choose.title') }}</h2>
            <div class="d-flex justify-content-center mb-3">
                <div style="width: 80px; height: 4px; background-color: #10b981;"></div>
            </div>
            <p class="text-muted">{{ __('formation.why_choose.description') }}</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-graduation-cap fa-3x text-info"></i>
                        </div>
                        <h4 class="mb-3">{{ __('formation.why_choose.expertise.title') }}</h4>
                        <p class="text-muted mb-0">{{ __('formation.why_choose.expertise.description') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-cogs fa-3x text-info"></i>
                        </div>
                        <h4 class="mb-3">{{ __('formation.why_choose.practical.title') }}</h4>
                        <p class="text-muted mb-0">{{ __('formation.why_choose.practical.description') }}</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="mb-3">
                            <i class="fas fa-comments fa-3x text-info"></i>
                        </div>
                        <h4 class="mb-3">{{ __('formation.why_choose.support.title') }}</h4>
                        <p class="text-muted mb-0">{{ __('formation.why_choose.support.description') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- CTA Section -->
<section class="py-5 bg-info text-white">
    <div class="container text-center py-3">
        <h2 class="fw-bold mb-4">{{ __('formation.cta.title') }}</h2>
        <p class="lead mb-4">{{ __('formation.cta.description') }}</p>
        <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
            <a href="{{ route('inscription.form') }}" class="btn btn-light btn-lg px-4">
                <i class="fas fa-user-plus me-2"></i>{{ __('formation.cta.register_button') }}
            </a>
            <a href="mailto:crp@markaz-oujda.com" class="btn btn-outline-light btn-lg px-4">
                <i class="fas fa-envelope me-2"></i>{{ __('formation.cta.contact_button') }}
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* Hero styling */
    .text-shadow {
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }
    
    .hero-section {
        padding-top: calc(3rem + 50px) !important;
        padding-bottom: 5rem !important;
        margin-top: 0 !important;
    }
    
    /* Animated background shapes */
    .hero-shapes .shape-1 {
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
        top: -100px;
        right: -100px;
        animation: float 15s infinite ease-in-out;
    }
    
    .hero-shapes .shape-2 {
        position: absolute;
        width: 200px;
        height: 200px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        bottom: 50px;
        left: -50px;
        animation: float 18s infinite ease-in-out reverse;
    }
    
    .hero-shapes .shape-3 {
        position: absolute;
        width: 150px;
        height: 150px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        bottom: 150px;
        right: 10%;
        animation: morph 15s infinite ease-in-out;
    }
    
    @keyframes float {
        0% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-30px) rotate(5deg); }
        100% { transform: translateY(0) rotate(0deg); }
    }
    
    @keyframes morph {
        0% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
        25% { border-radius: 50% 50% 30% 70% / 70% 30% 70% 30%; }
        50% { border-radius: 70% 30% 50% 50% / 30% 30% 70% 70%; }
        75% { border-radius: 30% 70% 70% 30% / 70% 70% 30% 30%; }
        100% { border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
    }
    
    /* Override Bootstrap colors */
    .bg-info {
        background-color: #0dcaf0 !important;
    }
    
    .text-info {
        color: #0dcaf0 !important;
    }
    
    .btn-info {
        background-color: #0dcaf0;
        border-color: #0dcaf0;
    }
    
    .btn-info:hover {
        background-color: #0bb8d8;
        border-color: #0bb8d8;
    }
    
    /* Card hover effects */
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1) !important;
    }
    
    /* Training card image sizing */
    .card-body img {
        height: 180px;
        object-fit: cover;
        width: 100%;
    }
</style>
@endpush