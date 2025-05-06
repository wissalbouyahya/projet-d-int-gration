@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="recipe-header text-center mb-4 py-3 rounded" style="background: linear-gradient(135deg, #2a5c8d 0%, #3a7cb9 100%);">
                <h1 class="display-5 fw-bold text-white">Modifier la Recette</h1>
                <p class="lead text-white mb-0">Améliorez votre recette existante</p>
            </div>
            
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <form action="{{ route('recettes.update', $recette->id_recette) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="mb-4">
                            <label for="name" class="form-label fw-bold" style="color: #2a5c8d;">
                                <i class="fas fa-utensils me-2" style="color: #f5a623;"></i>Nom de la recette
                            </label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $recette->name }}" required style="border-color: #ced4da;">
                        </div>
                        
                        <div class="mb-4">
                            <label for="categorie" class="form-label fw-bold" style="color: #2a5c8d;">
                                <i class="fas fa-tag me-2" style="color: #f5a623;"></i>Catégorie
                            </label>
                            <select class="form-select" id="categorie" name="categorie" required style="border-color: #ced4da;">
                                <option value="salé" {{ $recette->categorie == 'salé' ? 'selected' : '' }}>Salé</option>
                                <option value="sucré" {{ $recette->categorie == 'sucré' ? 'selected' : '' }}>Sucré</option>
                                <option value="mixte" {{ $recette->categorie == 'mixte' ? 'selected' : '' }}>Mixte</option>
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <label for="Ingredient" class="form-label fw-bold" style="color: #2a5c8d;">
                                <i class="fas fa-shopping-basket me-2" style="color: #f5a623;"></i>Ingrédients
                            </label>
                            <textarea class="form-control" id="Ingredient" name="Ingredient" rows="6" required style="border-color: #ced4da;">{{ $recette->Ingredient }}</textarea>
                        </div>
                        
                        <div class="mb-4">
                            <label for="Preparation" class="form-label fw-bold" style="color: #2a5c8d;">
                                <i class="fas fa-mortar-pestle me-2" style="color: #f5a623;"></i>Préparation
                            </label>
                            <textarea class="form-control" id="Preparation" name="Preparation" rows="8" required style="border-color: #ced4da;">{{ $recette->Preparation }}</textarea>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('recettes.index') }}" class="btn me-md-2" style="background-color: #6c757d; color: white;">
                                <i class="fas fa-arrow-left me-1"></i> Annuler
                            </a>
                            <button type="submit" class="btn" style="background-color: #f5a623; color: white;">
                                <i class="fas fa-save me-1"></i> Mettre à jour
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection