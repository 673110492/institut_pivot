@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <!-- Scrolling Alert for low stock -->
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Avertissement !</strong> Les niveaux de stock pour certains produits sont au minimum. Veuillez revoir votre inventaire.
            <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="row">

            <!-- Fournisseurs -->
            <div class="col-xl-3 col-sm-6">
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Total Fournisseurs</h4>
                            <span class="text-muted">Nombre total de fournisseurs</span>
                        </div>
                        <i class="mdi mdi-account-group mdi-36px icon"></i> <!-- Icone fournisseur -->
                    </div>
                    <div class="card-body">
                        <h2 class="text-center dynamic-value">34</h2> <!-- Valeur Dynamique -->
                    </div>
                </div>
            </div>

            <!-- Catégories -->
            <div class="col-xl-3 col-sm-6">
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Total Catégories</h4>
                            <span class="text-muted">Nombre total de catégories</span>
                        </div>
                        <i class="mdi mdi-categorize mdi-36px icon"></i> <!-- Icone catégories -->
                    </div>
                    <div class="card-body">
                        <h2 class="text-center dynamic-value">56</h2> <!-- Valeur Dynamique -->
                    </div>
                </div>
            </div>

            <!-- Produit/Stock -->
            <div class="col-xl-3 col-sm-6">
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Total Produits</h4>
                            <span class="text-muted">Nombre total de produits en stock</span>
                        </div>
                        <i class="mdi mdi-cube-outline mdi-36px icon"></i> <!-- Icone produit -->
                    </div>
                    <div class="card-body">
                        <h2 class="text-center dynamic-value">34</h2> <!-- Valeur Dynamique -->
                    </div>
                </div>
            </div>

            <!-- Ventes -->
            <div class="col-xl-3 col-sm-6">
                <div class="card custom-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h4>Total Ventes</h4>
                            <span class="text-muted">Ventes totales ce mois-ci</span>
                        </div>
                        <i class="mdi mdi-cash mdi-36px icon"></i> <!-- Icone ventes -->
                    </div>
                    <div class="card-body">
                        <h2 class="text-center dynamic-value">42</h2> <!-- Valeur Dynamique -->
                    </div>
                </div>
            </div>

        </div>
        <!-- Continuez avec le reste de votre contenu (graphique, tableaux, etc.) -->
    </div>
</div>

@endsection

@section('styles')
<style>
    .content-wrapper {
        background-color: #f4f6f9;
        padding: 30px 20px;
    }

    .card.custom-card {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        margin-bottom: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card.custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        background-color: #007bff; /* Blue */
        color: white;
        padding: 15px 20px;
        border-radius: 12px 12px 0 0;
    }

    .card-header .icon {
        color: white;
    }

    .card-body {
        padding: 20px;
        text-align: center;
    }

    .dynamic-value {
        font-size: 2.5rem;
        font-weight: 600;
        color: #4e73df; /* Blue */
        transition: color 0.3s ease;
    }

    .dynamic-value:hover {
        color: #ff6f61; /* Coral */
    }

    .text-muted {
        font-size: 0.9rem;
        color: #a4a4a4;
    }

    /* Alert Design */
    .alert {
        background-color: #ffcc00; /* Yellow */
        color: #fff;
        border-radius: 10px;
        font-size: 1rem;
        margin-bottom: 30px;
    }

    .alert .close {
        color: #fff;
    }

    .alert-warning {
        animation: slideIn 2s ease-out;
    }

    @keyframes slideIn {
        0% {
            transform: translateX(100%);
        }
        100% {
            transform: translateX(0);
        }
    }

    /* Icons */
    .mdi {
        font-size: 40px;
        color: #fff;
    }

    .mdi-36px {
        font-size: 36px;
    }

    /* Card colors */
    .card.custom-card:nth-child(1) .card-header {
        background-color: #28a745; /* Green for suppliers */
    }

    .card.custom-card:nth-child(2) .card-header {
        background-color: #dc3545; /* Red for categories */
    }

    .card.custom-card:nth-child(3) .card-header {
        background-color: #ffc107; /* Yellow for products */
    }

    .card.custom-card:nth-child(4) .card-header {
        background-color: #17a2b8; /* Teal for sales */
    }

    /* Responsive */
    @media (max-width: 767px) {
        .col-xl-3 {
            margin-bottom: 20px;
        }
    }
</style>
@endsection
