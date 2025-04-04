@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero position-relative d-flex align-items-center justify-content-center text-white" style="height: 100vh; background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.6)), url('{{ asset('storage/images/hero-img.png') }}') center/cover no-repeat; overflow: hidden;">
        <div class="container position-relative" style="z-index: 10;">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <!-- Simple icon -->
                    <div class="mb-4">
                        <i class="fas fa-graduation-cap fa-3x mb-3" style="color: #ffc107;"></i>
                    </div>
                    
                    <!-- Title in French -->
                    <h1 class="display-4 fw-bold mb-2" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                        Centre de Ressources du Préscolaire - OUJDA
                    </h1>
                    
                    <!-- Title in Arabic -->
                    <h2 class="h2 fw-bold mb-3" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); font-family: 'Amiri', serif;">
                        مركز موارد التعليم الأولي - وجدة
                    </h2>
                    
                    <!-- Simple separator -->
                    <div class="d-flex justify-content-center mb-4">
                        <div style="width: 100px; height: 4px; background-color: #ffc107;"></div>
                    </div>
                    
                    <!-- Action buttons -->
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="{{ route('inscription.form') }}" class="btn btn-lg px-4 py-3 shadow-sm" style="background-color: #f7a223; color: white;">
                            <i class="fas fa-user-plus me-2"></i>{{ __('homepage.register_button') }}
                        </a>
                        <a href="#surNous" class="btn btn-outline-light btn-lg px-4 py-3">
                            <i class="fas fa-info-circle me-2"></i>{{ __('homepage.more_info_button') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Simple wave effect at bottom -->
        <div class="position-absolute bottom-0 start-0 w-100" style="transform: translateY(1px); background-color: #fff;">
            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
                <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                </defs>
                <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3" style="fill: #f8f9fa;"></use>
                </g>
                <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0" style="fill: #f8f9fa;"></use>
                </g>
                <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9" style="fill: #f8f9fa;"></use>
                </g>
            </svg>
        </div>
    </section>

    <!-- Sur Nous Section -->
    <section id="surNous" class="py-5 bg-light ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="pe-md-4">
                        <h2 class="fw-bold mb-4 text-center">{{ __('homepage.about.title') }}</h2>
                        <p class="text-secondary mb-4 text-center">{{ __('homepage.about.description') }}</p>
                        
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-graduation-cap fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">{{ __('homepage.about.professional_training.title') }}</h5>
                                <p class="mb-0 text-secondary">{{ __('homepage.about.professional_training.description') }}</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-3">
                            <div class="me-3 text-primary">
                                <i class="fas fa-chalkboard-teacher fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">{{ __('homepage.about.qualified_experts.title') }}</h5>
                                <p class="mb-0 text-secondary">{{ __('homepage.about.qualified_experts.description') }}</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center">
                            <div class="me-3 text-primary">
                                <i class="fas fa-tools fa-2x"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">{{ __('homepage.about.pedagogical_resources.title') }}</h5>
                                <p class="mb-0 text-secondary">{{ __('homepage.about.pedagogical_resources.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="position-relative">
                        <img src="{{ asset('storage/images/ecole.png') }}" class="img-fluid rounded shadow-lg" alt="Centre de Ressources du Préscolaire">
                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded" style="background: linear-gradient(135deg, rgba(13, 110, 253, 0.1) 0%, rgba(0, 0, 0, 0) 100%);"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="units" class="py-5 bg-light">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">{{ __('units.title') }}</h2>
                <div class="d-flex justify-content-center mb-3">
                    <div style="width: 80px; height: 3px; background-color: #10b981;"></div>
                </div>
                <p class="text-secondary">{{ __('units.description') }}</p>
            </div>
    
            <!-- Units Grid -->
            <div class="row g-4">
                <!-- Research and Development Unit -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 rounded overflow-hidden shadow-sm h-100 unit-card">
                        <div class="card-header bg-primary text-white d-flex align-items-center">
                            <i class="fas fa-microscope fa-2x me-3"></i>
                            <h5 class="mb-0">{{ __('units.research.title') }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-secondary">{{ __('units.research.description') }}</p>
                            <ul class="list-unstyled">
                                @foreach(__('units.research.key_areas') as $area)
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-primary me-2"></i>{{ $area }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer bg-light">
                            <a href="{{route('recherche.index')}}" class="btn btn-outline-primary w-100">
                                {{ __('units.research.learn_more') }}
                            </a>
                        </div>
                    </div>
                </div>
    
                <!-- Documentation and Production Unit -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 rounded overflow-hidden shadow-sm h-100 unit-card">
                        <div class="card-header bg-success text-white d-flex align-items-center">
                            <i class="fas fa-book fa-2x me-3"></i>
                            <h5 class="mb-0">{{ __('units.documentation.title') }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-secondary">{{ __('units.documentation.description') }}</p>
                            <ul class="list-unstyled">
                                @foreach(__('units.documentation.key_areas') as $area)
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-success me-2"></i>{{ $area }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer bg-light">
                            <a href="{{route('documentation.index')}}" class="btn btn-outline-success w-100">
                                {{ __('units.documentation.learn_more') }}
                            </a>
                        </div>
                    </div>
                </div>
    
                <!-- Online Training Unit -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 rounded overflow-hidden shadow-sm h-100 unit-card">
                        <div class="card-header bg-info text-white d-flex align-items-center">
                            <i class="fas fa-users fa-2x me-3"></i>
                            <h5 class="mb-0">{{ __('units.online_training.title') }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-secondary">{{ __('units.online_training.description') }}</p>
                            <ul class="list-unstyled">
                                @foreach(__('units.online_training.key_areas') as $area)
                                    <li class="mb-2">
                                        <i class="fas fa-check-circle text-info me-2"></i>{{ $area }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer bg-light">
                            <a href="{{route('formation.index')}}" class="btn btn-outline-info w-100">
                                {{ __('units.online_training.learn_more') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @push('styles')
    <style>
        .unit-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
    
        .unit-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
        }
    
        .unit-card .card-header {
            display: flex;
            align-items: center;
            padding: 1rem;
        }
    
        .unit-card .card-header i {
            margin-right: 1rem;
        }
    
        .unit-card ul li i {
            margin-right: 0.5rem;
        }
    </style>
    @endpush
    <!-- Gallery Section -->
    <section id="gallery" class="py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">{{ __('homepage.galery.title') }}</h2>
                <div class="d-flex justify-content-center mb-3">
                    <div style="width: 80px; height: 4px; background-color: #10b981;"></div>
                </div>
                <p class="text-secondary">{{ __('homepage.galery.description') }}</p>
            </div>
            
            <!-- Gallery Grid -->
            <div class="row g-4">
                <!-- Gallery Item 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 rounded overflow-hidden shadow-sm h-100">
                        <img src="{{ asset('storage/images/galery1.png') }}" class="card-img-top" alt="Formation">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">{{ __('homepage.galery.items.1') }}</h5>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 rounded overflow-hidden shadow-sm h-100">
                        <img src="{{ asset('storage/images/galery6.png') }}" class="card-img-top" alt="Salle de classe">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">{{ __('homepage.galery.items.2') }}</h5>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 rounded overflow-hidden shadow-sm h-100">
                        <img src="{{ asset('storage/images/galery7.png') }}" class="card-img-top" alt="Communauté">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">{{ __('homepage.galery.items.3') }}</h5>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 4 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 rounded overflow-hidden shadow-sm h-100">
                        <img src="{{ asset('storage/images/galery4.png') }}" class="card-img-top" alt="Ressources">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">{{ __('homepage.galery.items.4') }}</h5>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 5 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 rounded overflow-hidden shadow-sm h-100">
                        <img src="{{ asset('storage/images/galery2.png') }}" class="card-img-top" alt="Événements">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">{{ __('homepage.galery.items.5') }}</h5>
                        </div>
                    </div>
                </div>
                <!-- Gallery Item 6 -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 rounded overflow-hidden shadow-sm h-100">
                        <img src="{{ asset('storage/images/galery5.png') }}" class="card-img-top" alt="Activités">
                        <div class="card-body text-center">
                            <h5 class="fw-bold">{{ __('homepage.galery.items.6') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="p-4 bg-white rounded shadow-sm">
                        <h2 class="fw-bold mb-4">{{ __('homepage.location.title') }}</h2>
                        <p class="text-secondary mb-4">{{ __('homepage.location.description') }}</p>
                        
                        <div class="d-flex align-items-start mb-3">
                            <i class="fas fa-map-marker-alt text-primary mt-1 me-3" style="font-size: 1.25rem;"></i>
                            <div>
                                <h5 class="mb-1 h6 fw-bold">{{ __('homepage.location.address.title') }}</h5>
                                <p class="mb-0">{{ __('homepage.location.address.content') }}</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start mb-4">
                            <i class="fas fa-envelope text-primary mt-1 me-3" style="font-size: 1.25rem;"></i>
                            <div>
                                <h5 class="mb-1 h6 fw-bold">{{ __('homepage.location.email.title') }}</h5>
                                <p class="mb-0">crp@markaz-oujda.com</p>
                            </div>
                        </div>
                        
                        <a href="https://maps.app.goo.gl/8zbQf7E21C3FiMx99" target="_blank" class="btn btn-primary">
                            <i class="fas fa-directions me-2"></i>{{ __('homepage.location.get_directions') }}
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-7">
                    <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.0650964313495!2d-1.915168!3d34.6783065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd78659d1f422f09%3A0xf34ce4c061aff2ff!2z2KfZhNmF2K_Ysdiz2Kkg2KfZhNil2KjYqtiv2KfYptmK2Kkg2LPZitiv2Yog2LLZitin2YYg2KfZhNmF2K7YqtmE2LfYqQ!5e0!3m2!1sen!2sma!4v1735366763972!5m2!1sen!2sma"
                            allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Hero waves animation */
    .hero .hero-waves {
        display: block;
        width: 100%;
        height: 60px;
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 3;
    }

    .hero .wave1 use {
        animation: move-forever1 10s linear infinite;
        animation-delay: -2s;
        fill: var(--light-gray);
        opacity: 0.6;
    }

    .hero .wave2 use {
        animation: move-forever2 8s linear infinite;
        animation-delay: -2s;
        fill: var(--light-gray);
        opacity: 0.4;
    }

    .hero .wave3 use {
        animation: move-forever3 6s linear infinite;
        animation-delay: -2s;
        fill: var(--light-gray);
    }

    @keyframes move-forever1 {
        0% { transform: translate(85px, 0%); }
        100% { transform: translate(-90px, 0%); }
    }

    @keyframes move-forever2 {
        0% { transform: translate(-90px, 0%); }
        100% { transform: translate(85px, 0%); }
    }

    @keyframes move-forever3 {
        0% { transform: translate(-90px, 0%); }
        100% { transform: translate(85px, 0%); }
    }

    /* Gallery hover effects */
    #gallery .card {
        transition: transform 0.3s ease;
        height: 100%;
    }
    
    #gallery .card:hover {
        transform: translateY(-8px);
    }
    
    #gallery .card-img-top {
        height: 200px;
        object-fit: cover;
    }
</style>
@endpush