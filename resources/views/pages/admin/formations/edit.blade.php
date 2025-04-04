@extends('layouts.admin')
@section('title', 'Modifier une formation')
@section('page-title', 'Modifier une formation')
@section('content')
<div class="container-fluid">
<!-- Page Header -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Modifier la formation</h1>
<a href="{{ route('admin.formations.index') }}" class="btn btn-sm btn-secondary shadow-sm">
<i class="fas fa-arrow-left fa-sm text-white-50 me-1"></i> Retour à la liste
</a>
</div>
Copy    <!-- Form Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informations de la formation</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.formations.update', $formation) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Left Column -->
                    <div class="col-lg-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title', $formation->title) }}" required>
                            @error('title')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $formation->description) }}</textarea>
                            @error('description')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="col-lg-4">
                        <!-- Basic Info Card -->
                        <div class="card mb-3">
                            <div class="card-header">
                                Informations de base
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Date et heure de début</label>
                                    <input type="datetime-local" class="form-control" id="start_date" name="start_date" 
                                           value="{{ old('start_date', $formation->start_date ? $formation->start_date->format('Y-m-d\TH:i') : '') }}">
                                    @error('start_date')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">Date et heure de fin</label>
                                    <input type="datetime-local" class="form-control" id="end_date" name="end_date" 
                                           value="{{ old('end_date', $formation->end_date ? $formation->end_date->format('Y-m-d\TH:i') : '') }}">
                                    @error('end_date')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="formateur" class="form-label">Formateur <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="formateur" name="formateur"
                                        value="{{ old('formateur', $formation->formateur) }}" required>
                                    @error('formateur')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="platform" class="form-label">Plateforme <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="platform" name="platform"
                                        value="{{ old('platform', $formation->platform) }}" required>
                                    @error('platform')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="is_published" name="is_published" 
                                   value="1" {{ old('is_published', $formation->is_published) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_published">Publier immédiatement</label>
                            @error('is_published')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Image Upload Card -->
                        <div class="card mb-3">
                            <div class="card-header">
                                Image de la formation
                            </div>
                            <div class="card-body">
                                @if($formation->thumbnail)
                                    <div class="mb-3">
                                        <label class="form-label">Image actuelle</label>
                                        <div>
                                            <img src="{{ asset('storage/' . $formation->thumbnail) }}" 
                                                 alt="Image actuelle" 
                                                 class="img-fluid rounded mb-2" 
                                                 style="max-height: 200px;">
                                        </div>
                                    </div>
                                @endif

                                <div class="mb-3">
                                    <label for="image" class="form-label">
                                        {{ $formation->thumbnail ? 'Remplacer l\'image' : 'Télécharger une image' }}
                                    </label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    <div class="form-text">Format recommandé: 800x600px, max 2MB</div>
                                    @error('image')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="image-preview-container mt-2 d-none">
                                    <p class="small text-muted mb-1">Aperçu:</p>
                                    <img src="#" class="img-fluid rounded preview-image"
                                        style="max-height: 150px;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('admin.formations.index') }}" class="btn btn-secondary me-2">
                            Annuler
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-1"></i> Mettre à jour
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
// Preview image when uploaded
const imageInput = document.getElementById('image');
const previewContainer = document.querySelector('.image-preview-container');
const previewImage = document.querySelector('.preview-image');
Copy        if (imageInput && previewContainer && previewImage) {
            imageInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        previewContainer.classList.remove('d-none');
                    };
                    reader.readAsDataURL(this.files[0]);
                }
            });
        }

        // Form validation
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(event) {
                let isValid = true;

                // Check required fields
                const requiredFields = form.querySelectorAll('[required]');
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        field.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });

                if (!isValid) {
                    event.preventDefault();
                    // Scroll to first invalid field
                    const firstInvalid = form.querySelector('.is-invalid');
                    if (firstInvalid) {
                        firstInvalid.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                        firstInvalid.focus();
                    }
                }
            });
        }

        // End date validation (must be after start date)
        const startDateInput = document.getElementById('start_date');
        const endDateInput = document.getElementById('end_date');

        if (startDateInput && endDateInput) {
            endDateInput.addEventListener('change', function() {
                if (startDateInput.value && endDateInput.value) {
                    const startDate = new Date(startDateInput.value);
                    const endDate = new Date(endDateInput.value);

                    if (endDate < startDate) {
                        endDateInput.setCustomValidity(
                            'La date de fin doit être postérieure à la date de début');
                        endDateInput.reportValidity();
                    } else {
                        endDateInput.setCustomValidity('');
                    }
                }
            });

            startDateInput.addEventListener('change', function() {
                if (endDateInput.value) {
                    endDateInput.dispatchEvent(new Event('change'));
                }
            });
        }
    });
</script>
@endsection