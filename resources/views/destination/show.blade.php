@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="font-size: 32px;">Détails du Fournisseur</h1>

        <div class="row">
            <!-- Card for Fournisseur Info -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title" style="font-size: 24px;">Informations du Fournisseur</h3>
                    </div>
                    <div class="card-body" style="font-size: 18px;">
                        <p><strong>Nom:</strong> {{ $fournisseur->name }}</p>
                        <p><strong>Contact:</strong> {{ $fournisseur->contact }}</p>
                        <p><strong>Adresse:</strong> {{ $fournisseur->address }}</p>
                        <p><strong>Email:</strong> {{ $fournisseur->email }}</p>
                        <p><strong>Status:</strong> {{ ucfirst($fournisseur->status) }}</p>
                    </div>
                </div>
            </div>

            <!-- Card for Fournisseur Photo -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h3 class="card-title" style="font-size: 24px;">Photo du Fournisseur</h3>
                    </div>
                    <div class="card-body" style="font-size: 18px; text-align: center;">
                        @if($fournisseur->photo)
                            <img src="{{ asset('storage/' . $fournisseur->photo) }}" alt="Photo" width="200">
                        @else
                            <p><strong>Pas de photo</strong></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="d-flex justify-content-start">
            <a href="{{ route('fournisseurs.index') }}" class="btn btn-secondary">Retour à la liste des fournisseurs</a>
        </div>
    </div>
@endsection
