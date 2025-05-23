@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
  










<!-- Enhanced Hero Section with Responsive Adjustments -->
<section id="hero" class="hero position-relative d-flex align-items-center justify-content-center text-white" style="min-height: 90vh; padding-top: 76px; background: linear-gradient(rgba(16, 185, 129, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('storage/images/hero-img.png') }}') center/cover no-repeat fixed; overflow: hidden;">
    <!-- Animated Particles -->
    <div class="particles-container position-absolute w-100 h-100 top-0 start-0" style="z-index: 1;"></div>
    
    <div class="container position-relative" style="z-index: 10;">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <!-- Animated Logo Icon -->
                <div class="mb-3 mb-md-4 animate__animated animate__fadeInDown">
                    <i class="fas fa-graduation-cap fa-3x fa-md-4x mb-2 mb-md-3" style="color: #ffc107; filter: drop-shadow(0 0 10px rgba(255, 193, 7, 0.5));"></i>
                </div>
                
                <!-- Main Title - French -->
                <h1 class="display-5 display-md-4 fw-bold mb-2 animate__animated animate__fadeInUp" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
                    Centre de Ressources du Préscolaire - OUJDA
                </h1>
                
                <!-- Title in Arabic -->
                <h2 class="h3 h2-md fw-bold mb-3 animate__animated animate__fadeInUp animate__delay-1s" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5); font-family: 'Amiri', serif;">
                    مركز موارد التعليم الأولي - وجدة
                </h2>
                
                <!-- Glowing Separator -->
                <div class="d-flex justify-content-center mb-3 mb-md-4 animate__animated animate__fadeInUp animate__delay-1s">
                    <div style="width: 120px; height: 3px; background: linear-gradient(90deg, transparent, #ffc107, transparent); border-radius: 2px; box-shadow: 0 0 10px rgba(255, 193, 7, 0.7);"></div>
                </div>
                
                <!-- Action buttons with hover effects -->
                <div class="d-flex flex-column flex-md-row justify-content-center gap-2 gap-md-3 animate__animated animate__fadeInUp animate__delay-2s">
                    <a href="{{ route('inscription.form') }}" class="btn btn-lg px-3 px-md-4 py-2 py-md-3 shadow-sm hero-btn-primary">
                        <i class="fas fa-user-plus me-2"></i>{{ __('homepage.register_button') }}
                    </a>
                    <a href="#surNous" class="btn btn-outline-light btn-lg px-3 px-md-4 py-2 py-md-3 hero-btn-secondary">
                        <i class="fas fa-info-circle me-2"></i>{{ __('homepage.more_info_button') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Enhanced wave effect at bottom with multiple layers -->
    <div class="position-absolute bottom-0 start-0 w-100" style="z-index: 2;">
        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255,0.1)"></use>
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255,0.2)"></use>
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#f8f9fa"></use>
            </g>
        </svg>
    </div>
</section>

<!-- CSS Styles for Responsive Hero Section -->
<style>
    /* Hero waves animation enhanced */
    .hero .hero-waves {
        display: block;
        width: 100%;
        height: 60px;
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
    }

    .hero .wave1 use {
        animation: move-forever1 10s linear infinite;
        animation-delay: -2s;
    }

    .hero .wave2 use {
        animation: move-forever2 8s linear infinite;
        animation-delay: -2s;
    }

    .hero .wave3 use {
        animation: move-forever3 6s linear infinite;
        animation-delay: -2s;
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

    /* Hero buttons with enhanced effects */
    .hero-btn-primary {
        background-color: #f7a223;
        color: white;
        border: 2px solid #f7a223;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        z-index: 1;
    }

    .hero-btn-primary:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.7s ease;
        z-index: -1;
    }

    .hero-btn-primary:hover {
        background-color: #e8941e;
        border-color: #e8941e;
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .hero-btn-primary:hover:before {
        left: 100%;
    }

    .hero-btn-secondary {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
        z-index: 1;
    }

    .hero-btn-secondary:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.7s ease;
        z-index: -1;
    }

    .hero-btn-secondary:hover {
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        border-color: white;
    }

    .hero-btn-secondary:hover:before {
        left: 100%;
    }

    /* Particles animation */
    .particles-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Responsive styles */
    @media (max-width: 767.98px) {
        .hero {
            min-height: 85vh;
            padding-top: 60px; /* Adjust based on your header height on mobile */
        }
        
        .fa-md-4x {
            font-size: 3x;
        }
        
        .display-md-4 {
            font-size: calc(1.425rem + 1.5vw);
        }
        
        .h2-md {
            font-size: 1.5rem;
        }
        
        .hero-btn-primary, .hero-btn-secondary {
            font-size: 1rem;
            padding: 0.5rem 1rem !important;
        }
    }
    
    @media (max-width: 575.98px) {
        .hero {
            padding-top: 50px; /* Further adjust for smaller screens */
        }
        
        .hero h1 {
            font-size: calc(1.3rem + 1.5vw);
        }
        
        .hero h2 {
            font-size: 1.25rem;
        }
    }
    
    /* For very small devices */
    @media (max-width: 359.98px) {
        .hero {
            min-height: 80vh;
        }
        
        .hero-btn-primary, .hero-btn-secondary {
            width: 80%;
            margin-bottom: 0.5rem;
        }
    }
    
    /* Handle fixed background for iOS */
    @supports (-webkit-overflow-scrolling: touch) {
        .hero {
            background-attachment: scroll;
        }
    }
</style>

<!-- Responsive JS code for particles -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Create and animate floating particles in the hero section
    const particlesContainer = document.querySelector('.particles-container');
    
    if (particlesContainer) {
        // Adjust number of particles based on screen size
        const width = window.innerWidth;
        const particleCount = width < 768 ? 25 : 50;
        
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            
            // Random styling for particles - smaller for mobile
            const size = width < 768 ? (Math.random() * 3 + 1) : (Math.random() * 5 + 2);
            const posX = Math.random() * 100;
            const posY = Math.random() * 100;
            const opacity = Math.random() * 0.5 + 0.1;
            const animDuration = Math.random() * 15 + 10;
            const animDelay = Math.random() * 5;
            
            // Set particle styles
            particle.style.position = 'absolute';
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            particle.style.borderRadius = '50%';
            particle.style.backgroundColor = 'rgba(255, 255, 255, ' + opacity + ')';
            particle.style.left = `${posX}%`;
            particle.style.top = `${posY}%`;
            particle.style.animation = `floatParticle ${animDuration}s ease-in-out ${animDelay}s infinite`;
            
            particlesContainer.appendChild(particle);
        }
    }
    
    // Smooth scroll for anchor links with offset for fixed header
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                // Get header height for offset
                const headerHeight = document.querySelector('header') ? 
                    document.querySelector('header').offsetHeight : 0;
                
                window.scrollTo({
                    top: targetElement.offsetTop - headerHeight,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Handle resize events for responsiveness
    window.addEventListener('resize', function() {
        // You could add additional resize handling here if needed
    });
});

// Add keyframe animation for particles
const style = document.createElement('style');
style.innerHTML = `
    @keyframes floatParticle {
        0%, 100% {
            transform: translateY(0) translateX(0);
        }
        25% {
            transform: translateY(-15px) translateX(10px);
        }
        50% {
            transform: translateY(-25px) translateX(-5px);
        }
        75% {
            transform: translateY(-10px) translateX(-10px);
        }
    }
`;
document.head.appendChild(style);
</script>



















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
   






<!-- Gallery Section -->
<!-- Immersive 3D Gallery Section -->
<section id="gallery" class="gallery-section">
    <div class="container-fluid p-0">
        <!-- Section Header -->
        <div class="gallery-header text-center">
            <h2 class="gallery-title">{{ __('homepage.galery.title') }}</h2>
            <div class="title-decoration">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <p class="gallery-description">{{ __('homepage.galery.description') }}</p>
        </div>
        
        <!-- Interactive Gallery -->
        <div class="gallery-showcase">
            <div class="gallery-container">
                <!-- Gallery Nav Dots -->
                <div class="gallery-nav">
                    <span class="nav-dot active" data-index="0"></span>
                    <span class="nav-dot" data-index="1"></span>
                    <span class="nav-dot" data-index="2"></span>
                    <span class="nav-dot" data-index="3"></span>
                    <span class="nav-dot" data-index="4"></span>
                    <span class="nav-dot" data-index="5"></span>
                </div>
                
                <!-- Featured Image Display -->
                <div class="featured-image-container">
                    <div class="featured-wrapper">
                        <div class="featured-image active" style="background-image: url('{{ asset('storage/images/galery1.png') }}');">
                            <div class="image-info">
                                <div class="info-content">
                                    <h3>{{ __('homepage.galery.items.1') }}</h3>
                                    <div class="info-decoration"></div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-image" style="background-image: url('{{ asset('storage/images/galery6.png') }}');">
                            <div class="image-info">
                                <div class="info-content">
                                    <h3>{{ __('homepage.galery.items.2') }}</h3>
                                    <div class="info-decoration"></div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-image" style="background-image: url('{{ asset('storage/images/galery7.png') }}');">
                            <div class="image-info">
                                <div class="info-content">
                                    <h3>{{ __('homepage.galery.items.3') }}</h3>
                                    <div class="info-decoration"></div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-image" style="background-image: url('{{ asset('storage/images/galery4.png') }}');">
                            <div class="image-info">
                                <div class="info-content">
                                    <h3>{{ __('homepage.galery.items.4') }}</h3>
                                    <div class="info-decoration"></div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-image" style="background-image: url('{{ asset('storage/images/galery2.png') }}');">
                            <div class="image-info">
                                <div class="info-content">
                                    <h3>{{ __('homepage.galery.items.5') }}</h3>
                                    <div class="info-decoration"></div>
                                </div>
                            </div>
                        </div>
                        <div class="featured-image" style="background-image: url('{{ asset('storage/images/galery5.png') }}');">
                            <div class="image-info">
                                <div class="info-content">
                                    <h3>{{ __('homepage.galery.items.6') }}</h3>
                                    <div class="info-decoration"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Thumbnail Strip -->
                <div class="thumbnail-strip-container">
                    <div class="thumbnail-controls">
                        <button class="control-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                        </button>
                        <button class="control-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </button>
                    </div>
                    <div class="thumbnail-strip">
                        <div class="thumbnail active" data-index="0">
                            <img src="{{ asset('storage/images/galery1.png') }}" alt="Formation">
                        </div>
                        <div class="thumbnail" data-index="1">
                            <img src="{{ asset('storage/images/galery6.png') }}" alt="Salle de classe">
                        </div>
                        <div class="thumbnail" data-index="2">
                            <img src="{{ asset('storage/images/galery7.png') }}" alt="Communauté">
                        </div>
                        <div class="thumbnail" data-index="3">
                            <img src="{{ asset('storage/images/galery4.png') }}" alt="Ressources">
                        </div>
                        <div class="thumbnail" data-index="4">
                            <img src="{{ asset('storage/images/galery2.png') }}" alt="Événements">
                        </div>
                        <div class="thumbnail" data-index="5">
                            <img src="{{ asset('storage/images/galery5.png') }}" alt="Activités">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Gallery Main Styles */
.gallery-section {
    position: relative;
    padding: 0;
    background: #ffffff;
    color: #2d3748;
    overflow: hidden;
}

/* Header Styles */
.gallery-header {
    position: relative;
    padding: 60px 15px;
    z-index: 10;
}

.gallery-title {
    font-size: 3.5rem;
    font-weight: 800;
    letter-spacing: 2px;
    margin-bottom: 20px;
    background: linear-gradient(90deg, #10b981, #3b82f6);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    text-transform: uppercase;
    text-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
}

.title-decoration {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-bottom: 25px;
}

.title-decoration span {
    display: block;
    height: 4px;
    width: 25px;
    background: #10b981;
    border-radius: 4px;
}

.title-decoration span:nth-child(2) {
    width: 45px;
    background: #3b82f6;
}

.gallery-description {
    max-width: 700px;
    margin: 0 auto;
    font-size: 1.2rem;
    color: rgba(45, 55, 72, 0.8);
}

/* Gallery Showcase */
.gallery-showcase {
    position: relative;
    width: 100%;
    height: 85vh; /* Increased height to show full images */
    min-height: 650px; /* Increased minimum height */
}

.gallery-container {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
}

/* Nav Dots */
.gallery-nav {
    position: relative;
    display: flex;
    justify-content: center;
    gap: 15px;
    padding: 15px 0;
    background: #ffffff;
    border-bottom: 1px solid rgba(59, 130, 246, 0.2);
}

.nav-dot {
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background: rgba(59, 130, 246, 0.3);
    cursor: pointer;
    transition: all 0.4s ease;
}

.nav-dot.active {
    background: #10b981;
    transform: scale(1.2);
    box-shadow: 0 0 10px #10b981, 0 0 20px rgba(16, 185, 129, 0.4);
}

/* Featured Image */
.featured-image-container {
    position: relative;
    flex: 1;
    width: 100%;
    overflow: hidden;
}

.featured-wrapper {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.featured-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: contain;
    background-position: center;
    opacity: 0;
    transform: scale(1.05);
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    background-repeat: no-repeat;
}

.featured-image.active {
    opacity: 1;
    transform: scale(1);
}

.featured-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(0deg, rgba(255, 255, 255, 0.8) 0%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.4) 100%);
}

/* Image Info */
.image-info {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 30px;
    transform: translateY(20px);
    opacity: 0;
    transition: all 0.5s ease 0.3s;
}

.featured-image.active .image-info {
    transform: translateY(0);
    opacity: 1;
}

.info-content {
    max-width: 600px;
}

.info-content h3 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #2d3748;
    text-shadow: 1px 1px 3px rgba(255, 255, 255, 0.5);
}

.info-decoration {
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #10b981, #3b82f6);
    border-radius: 4px;
    box-shadow: 0 0 10px rgba(16, 185, 129, 0.6);
    animation: pulseGlow 2s infinite alternate;
}

@keyframes pulseGlow {
    from {
        box-shadow: 0 0 5px rgba(16, 185, 129, 0.4);
    }
    to {
        box-shadow: 0 0 15px rgba(16, 185, 129, 0.6), 0 0 30px rgba(59, 130, 246, 0.3);
    }
}

/* Thumbnail Strip */
.thumbnail-strip-container {
    position: relative;
    height: 120px;
    background: #f0f7ff;
    overflow: hidden;
    border-top: 1px solid rgba(59, 130, 246, 0.2);
}

.thumbnail-controls {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 10;
}

.control-prev, .control-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.9);
    border: 2px solid #10b981;
    color: #10b981;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    pointer-events: auto;
    transition: all 0.3s ease;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.control-prev {
    left: 20px;
}

.control-next {
    right: 20px;
}

.control-prev:hover, .control-next:hover {
    background: #10b981;
    color: white;
}

.thumbnail-strip {
    display: flex;
    align-items: center;
    height: 100%;
    overflow-x: auto;
    scroll-behavior: smooth;
    scrollbar-width: none; /* Firefox */
    -ms-overflow-style: none; /* IE/Edge */
    gap: 10px;
    padding: 0 80px;
}

.thumbnail-strip::-webkit-scrollbar {
    display: none; /* Chrome, Safari, Opera */
}

.thumbnail {
    flex: 0 0 auto;
    width: 160px;
    height: 90px;
    border-radius: 8px;
    overflow: hidden;
    cursor: pointer;
    border: 3px solid transparent;
    transition: all 0.3s ease;
    transform: scale(0.95);
    opacity: 0.6;
}

.thumbnail.active {
    border-color: #10b981;
    transform: scale(1);
    opacity: 1;
    box-shadow: 0 0 15px rgba(16, 185, 129, 0.6);
}

.thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.thumbnail:hover img {
    transform: scale(1.1);
}

/* Animation Keyframes */
@keyframes fadeScale {
    0% {
        opacity: 0;
        transform: scale(1.1);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}

/* Responsive Styles */
@media (max-width: 991px) {
    .gallery-title {
        font-size: 2.5rem;
    }
    
    .info-content h3 {
        font-size: 2rem;
    }
    
    .thumbnail {
        width: 140px;
        height: 80px;
    }
    
    .gallery-showcase {
        height: 65vh;
        min-height: 550px;
    }
    
    .featured-image::before {
        background: linear-gradient(0deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.3) 50%, rgba(255, 255, 255, 0.5) 100%);
    }
}

@media (max-width: 767px) {
    .gallery-title {
        font-size: 2rem;
    }
    
    .gallery-header {
        padding: 40px 15px;
    }
    
    .info-content h3 {
        font-size: 1.5rem;
    }
    
    .thumbnail {
        width: 120px;
        height: 70px;
    }
    
    .thumbnail-strip {
        padding: 0 60px;
    }
    
    .gallery-showcase {
        height: 65vh;
        min-height: 500px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const thumbnails = document.querySelectorAll('.thumbnail');
    const navDots = document.querySelectorAll('.nav-dot');
    const featuredImages = document.querySelectorAll('.featured-image');
    const thumbnailStrip = document.querySelector('.thumbnail-strip');
    const prevBtn = document.querySelector('.control-prev');
    const nextBtn = document.querySelector('.control-next');
    const galleryContainer = document.querySelector('.gallery-container');
    
    let currentIndex = 0;
    let autoplayTimeout = null;
    const autoplaySpeed = 3000; // Reduced from 6000ms to 3000ms for faster autoplay
    let isAutoplayEnabled = true;
    let isGalleryInView = false;
    
    // Check if gallery is in viewport
    function checkGalleryInView() {
        const galleryRect = galleryContainer.getBoundingClientRect();
        return (
            galleryRect.top < (window.innerHeight || document.documentElement.clientHeight) &&
            galleryRect.bottom > 0
        );
    }
    
    // Function to change active image
    function changeImage(index) {
        // Update current index
        currentIndex = index;
        
        // Update featured images
        featuredImages.forEach(img => img.classList.remove('active'));
        featuredImages[index].classList.add('active');
        
        // Update thumbnails
        thumbnails.forEach(thumb => thumb.classList.remove('active'));
        thumbnails[index].classList.add('active');
        
        // Update navigation dots
        navDots.forEach(dot => dot.classList.remove('active'));
        navDots[index].classList.add('active');
        
        // Only scroll the thumbnail into view if gallery is in viewport
        const galleryRect = galleryContainer.getBoundingClientRect();
        const isInViewport = (
            galleryRect.top >= 0 &&
            galleryRect.left >= 0 &&
            galleryRect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            galleryRect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
        
        if (isInViewport) {
            thumbnails[index].scrollIntoView({
                behavior: 'smooth',
                block: 'nearest',
                inline: 'center'
            });
        }
        
        // Reset autoplay timeout
        if (autoplayTimeout) {
            clearTimeout(autoplayTimeout);
        }
        
        // Set new autoplay timeout
        startAutoplay();
    }
    
    // Function to start autoplay
    function startAutoplay() {
        if (isAutoplayEnabled) {
            autoplayTimeout = setTimeout(() => {
                // Only change image if gallery is in view
                isGalleryInView = checkGalleryInView();
                if (isGalleryInView) {
                    let newIndex = currentIndex + 1;
                    if (newIndex >= featuredImages.length) newIndex = 0;
                    changeImage(newIndex);
                } else {
                    // If not in view, just restart the timer without changing image
                    startAutoplay();
                }
            }, autoplaySpeed);
        }
    }
    
    // Monitor scroll to detect when gallery enters or leaves viewport
    window.addEventListener('scroll', function() {
        isGalleryInView = checkGalleryInView();
    });
    
    // Check if gallery is initially in view
    isGalleryInView = checkGalleryInView();
    
    // Immediately start autoplay
    startAutoplay();
    
    // Set up thumbnail click events
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => changeImage(index));
    });
    
    // Set up navigation dot click events
    navDots.forEach((dot, index) => {
        dot.addEventListener('click', () => changeImage(index));
    });
    
    // Previous button
    prevBtn.addEventListener('click', () => {
        let newIndex = currentIndex - 1;
        if (newIndex < 0) newIndex = featuredImages.length - 1;
        changeImage(newIndex);
    });
    
    // Next button
    nextBtn.addEventListener('click', () => {
        let newIndex = currentIndex + 1;
        if (newIndex >= featuredImages.length) newIndex = 0;
        changeImage(newIndex);
    });
    
    // Pause autoplay on hover
    galleryContainer.addEventListener('mouseenter', () => {
        if (autoplayTimeout) {
            clearTimeout(autoplayTimeout);
            autoplayTimeout = null;
        }
        isAutoplayEnabled = false;
    });
    
    galleryContainer.addEventListener('mouseleave', () => {
        isAutoplayEnabled = true;
        startAutoplay();
    });
    
    // Force all images to preload for smoother transitions
    featuredImages.forEach(img => {
        const bgUrl = img.style.backgroundImage.replace(/url\(['"]?(.*?)['"]?\)/i, '$1');
        const preloadImg = new Image();
        preloadImg.src = bgUrl;
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            let newIndex = currentIndex - 1;
            if (newIndex < 0) newIndex = featuredImages.length - 1;
            changeImage(newIndex);
        } else if (e.key === 'ArrowRight') {
            let newIndex = currentIndex + 1;
            if (newIndex >= featuredImages.length) newIndex = 0;
            changeImage(newIndex);
        }
    });
    
    // Swipe detection for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    const galleryShowcase = document.querySelector('.gallery-showcase');
    
    galleryShowcase.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        
        // Pause autoplay on touch
        if (autoplayTimeout) {
            clearTimeout(autoplayTimeout);
            autoplayTimeout = null;
        }
        isAutoplayEnabled = false;
    });
    
    galleryShowcase.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
        
        // Resume autoplay after touch
        isAutoplayEnabled = true;
        startAutoplay();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        if (touchEndX < touchStartX - swipeThreshold) {
            // Swipe left - next image
            let newIndex = currentIndex + 1;
            if (newIndex >= featuredImages.length) newIndex = 0;
            changeImage(newIndex);
        }
        
        if (touchEndX > touchStartX + swipeThreshold) {
            // Swipe right - previous image
            let newIndex = currentIndex - 1;
            if (newIndex < 0) newIndex = featuredImages.length - 1;
            changeImage(newIndex);
        }
    }
});
</script>









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

