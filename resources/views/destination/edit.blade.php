@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier le Fournisseur</h1>

        <!-- Afficher les messages d'erreur -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulaire de modification -->
        <form action="{{ route('fournisseurs.update', $fournisseur->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $fournisseur->name) }}" required>
            </div>

            <div class="form-group">
                <label for="country">Pays</label>
                <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $fournisseur->country) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $fournisseur->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Prix</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $fournisseur->price) }}" required>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
                @if($fournisseur->photo)
                    <img src="{{ asset('storage/' . $fournisseur->photo) }}" alt="Photo" width="100">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour le Fournisseur</button>
        </form>
    </div>
@endsection
