@extends('layouts.app')

@section('title', 'Formulaire de Demande d\'inscription')

@section('content')
<!-- Form submission overlay -->
<x-shared.loader message="{{ __('form.loader.message') }}" id="formOverlay" />

<div class="container py-5">
    <header class="header-custom text-white p-4 shadow mb-5 " style="margin-top: 70px">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="header-text">
                    <h1 class="display-5 fw-bold merriweather-bold text-center"><i class="fas fa-file-alt me-2"></i>{{ __('form.page_title') }}</h1>
                    <div class="d-flex justify-content-center mt-2 mb-3">
                        <div style="width: 80px; height: 3px; background-color: rgba(255, 255, 255, 0.7);"></div>
                    </div>
                    <p class="lead merriweather-regular text-center">{{ __('form.page_description') }}</p>
                </div>
            </div>
            <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 100px;">
            </div>
        </div>
    </header>

    <div class="card shadow border-0">
        <div class="card-body p-4 p-md-5">
            @if(session('success'))
                <x-shared.alert type="success">
                    {{ session('success') }}
                </x-shared.alert>
            @endif

            @if(session('error'))
                <x-shared.alert type="danger">
                    {{ session('error') }}
                </x-shared.alert>
            @endif

            @if ($errors->any())
                <x-shared.alert type="danger">
                    <p>{{ __('form.fields.validation.error_title') }}</p>
                    <ul class="mb-0 mt-2">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </x-shared.alert>
            @endif

            <form id="applicationForm" action="{{route('inscription.store')}}" method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-md-6">
                        <x-public.form.input
                            name="first_name"
                            label="{{ __('form.fields.first_name') }}"
                            :value="old('first_name')"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <x-public.form.input
                            name="last_name"
                            label="{{ __('form.fields.last_name') }}"
                            :value="old('last_name')"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <x-public.form.input
                            type="email"
                            name="email"
                            label="{{ __('form.fields.email') }}"
                            :value="old('email')"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <x-public.form.input
                            type="date"
                            name="birth_date"
                            label="{{ __('form.fields.birth_date') }}"
                            :value="old('birth_date')"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <x-public.form.input
                            name="birth_place"
                            label="{{ __('form.fields.birth_place') }}"
                            :value="old('birth_place')"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <x-public.form.input
                            name="id_card_number"
                            label="{{ __('form.fields.id_card_number') }}"
                            :value="old('id_card_number')"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <x-public.form.input
                            name="phone_number"
                            label="{{ __('form.fields.phone_number') }}"
                            :value="old('phone_number')"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <x-public.form.select
                            name="marital_status"
                            label="{{ __('form.marital_status_options.chosen') }}"
                            :options="[
                                'single' => __('form.marital_status_options.single'),
                                'married' => __('form.marital_status_options.married'),
                                'divorced' => __('form.marital_status_options.divorced'),
                                'widowed' => __('form.marital_status_options.widowed')
                            ]"
                            :value="old('marital_status')"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <x-public.form.input
                            type="number"
                            name="years_of_experience"
                            label="{{ __('form.fields.years_of_experience') }}"
                            :value="old('years_of_experience')"
                            required
                        />
                    </div>
                    <div class="col-md-6">
                        <x-public.form.input
                            name="education_level"
                            label="{{ __('form.fields.education_level') }}"
                            :value="old('education_level')"
                            required
                        />
                    </div>
                </div>

                <div class="d-grid gap-2 mt-4">
                    <x-public.form.button 
                        type="submit" 
                        color="primary" 
                        icon="paper-plane" 
                        class="btn-lg py-3"
                        id="submitBtn"
                    >
                    {{ __('form.submit_button') }}
                    </x-public.form.button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap');

    .merriweather-light {
        font-family: "Merriweather", serif;
        font-weight: 300;
        font-style: normal;
    }

    .merriweather-regular {
        font-family: "Merriweather", serif;
        font-weight: 400;
        font-style: normal;
    }

    .merriweather-bold {
        font-family: "Merriweather", serif;
        font-weight: 700;
        font-style: normal;
    }

    .merriweather-black {
        font-family: "Merriweather", serif;
        font-weight: 900;
        font-style: normal;
    }

    .header-custom {
        background: linear-gradient(135deg, #28a745, #20c997);
        border-radius: 0.5rem;
        position: relative;
        overflow: hidden;
    }

    .header-custom::before {
        content: "";
        position: absolute;
        top: 0;
        left: -50%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.1);
        transform: skewX(-25deg);
    }

    .header-text {
        position: relative;
        z-index: 2;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('applicationForm');
        const formOverlay = document.getElementById('formOverlay');
        const submitBtn = document.getElementById('submitBtn');

        // Check if there's a success or error message and scroll to it
        const alerts = document.querySelectorAll('.alert');
        if (alerts.length > 0) {
            alerts[0].scrollIntoView({ behavior: 'smooth', block: 'center' });
            
            // Auto dismiss success alert after 5 seconds
            const successAlert = document.querySelector('.alert-success');
            if (successAlert) {
                setTimeout(() => {
                    const closeBtn = successAlert.querySelector('.btn-close');
                    if (closeBtn) closeBtn.click();
                }, 5000);
            }
        }

        // Show loading overlay when form is submitted
        form.addEventListener('submit', function(e) {
            // Basic client-side validation
            const inputs = form.querySelectorAll('input[required], select[required]');
            let isValid = true;
            
            inputs.forEach(input => {
                if (!input.value.trim()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                
                // Afficher un message d'erreur en français
                let errorMessage = document.createElement('div');
                errorMessage.className = 'alert alert-danger alert-dismissible fade show mt-3';
                errorMessage.innerHTML = `
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    {{ __('form.fields.validation.required_fields') }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                `;
                
                // Insérer le message d'erreur au début du formulaire
                form.insertAdjacentElement('afterbegin', errorMessage);
                
                // Faire défiler jusqu'au message d'erreur
                errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                return;
            }
            
            // Disable submit button and show overlay
            submitBtn.disabled = true;
            formOverlay.style.display = 'flex';
        });
    });
</script>
@endpush