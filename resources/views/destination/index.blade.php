@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content">
            <!-- Documentation Section -->
            <div class="card card-default mb-4">
                <div class="px-6 py-4">
                    <p style="color: black; font-size: 20px;">Bienvenue à <strong style="font-size: 24px;">SYGSTOCK</strong>,
                        votre meilleure application de gestion de stock.</p>
                </div>
            </div>

            <!-- Categories Inventory -->
            <div class="card card-default">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2>Inventaire des fournisseurs</h2>
                    <!-- Affichage du total des catégories -->
                    <p style="font-size: 18px; margin-bottom: 0;">Total de fournisseurs :
                        <strong>{{ $totalCategories }}</strong></p>
                    <!-- Ajouter un fournisseur -->
                    <button class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
                        Ajouter
                    </button>
                </div>

                <div class="card-body">
                    <!-- Fournisseurs Table -->
                    <table id="productsTable" class="table table-hover table-product" style="width:100%">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fournisseurs as $fournisseur)
                                <tr>
                                    <!-- Afficher la photo -->
                                    <td>
                                        @if ($fournisseur->photo)
                                            <img src="{{ Storage::url($fournisseur->photo) }}" alt="Photo de {{ $fournisseur->name }}" style="width: 50px; height: 50px;">
                                        @else
                                            Aucune photo
                                        @endif
                                    </td>
                                    <td>{{ $fournisseur->name }}</td>
                                    <td>{{ $fournisseur->contact }}</td>
                                    <td>{{ $fournisseur->email }}</td>
                                    <td>
                                        <span class="badge {{ $fournisseur->status == 'active' ? 'badge-success' : 'badge-danger' }}">
                                            {{ ucfirst($fournisseur->status) }}
                                        </span>
                                    </td>
                                    <td>
                                        <!-- Bouton Modifier avec icône -->
                                        <a href="{{ route('fournisseurs.edit', $fournisseur->id) }}" class="btn btn-sm btn-primary">
                                            <i class="mdi mdi-pencil"></i>
                                        </a>

                                        <!-- Bouton Afficher avec icône -->
                                        <a href="{{ route('fournisseurs.show', $fournisseur->id) }}" class="btn btn-sm btn-info">
                                            <i class="mdi mdi-eye"></i>
                                        </a>

                                        <!-- Formulaire de suppression -->
                                        <form action="{{ route('fournisseurs.destroy', $fournisseur->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="mdi mdi-delete"></i>
                                            </button>
                                        </form>

                                        <!-- Formulaire d'activation -->
                                        @if ($fournisseur->status != 'active')
                                            <form action="{{ route('fournisseurs.activate', $fournisseur->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success">
                                                    <i class="mdi mdi-check"></i> Activer
                                                </button>
                                            </form>
                                        @endif

                                        <!-- Formulaire de désactivation -->
                                        @if ($fournisseur->status != 'inactive')
                                            <form action="{{ route('fournisseurs.deactivate', $fournisseur->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-warning">
                                                    <i class="mdi mdi-close"></i> Désactiver
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="pagination-wrapper">
                        <div class="d-flex justify-content-center">
                            {{ $fournisseurs->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Ajouter Fournisseur -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductModalLabel">Ajouter un fournisseur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulaire d'ajout de fournisseur -->
                    <form method="post" action="{{ url('fournisseurs') }}" id="addProductForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="productName">Nom du fournisseur</label>
                            <input type="text" class="form-control" id="productName" placeholder="Nom du fournisseur" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" id="photo" placeholder="Photo du fournisseur" name="photo" accept="image/*">
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="tel" id="contact" class="form-control" name="contact" placeholder="Contact du fournisseur" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Adresse</label>
                            <input type="text" class="form-control" id="address" placeholder="Adresse" name="address" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" form="addProductForm">Ajouter</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var input = document.querySelector("#contact");
            var iti = intlTelInput(input, {
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });
        });
    </script>
@endsection

@section('styles')
    <style>
        /* Pagination personnalisée */
        .pagination {
            display: flex;
            justify-content: center;
            padding: 10px;
            margin: 0;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a,
        .pagination span {
            padding: 10px 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            color: #007bff;
            text-decoration: none;
        }

        .pagination a:hover {
            background-color: #f1f1f1;
        }

        .pagination .active a {
            background-color: #007bff;
            color: white;
            border: 1px solid #007bff;
        }

        .pagination .disabled a {
            color: #ddd;
            cursor: not-allowed;
        }

        .pagination .next,
        .pagination .prev {
            font-weight: bold;
        }

        .pagination .page-item:first-child a {
            border-radius: 5px 0 0 5px;
        }

        .pagination .page-item:last-child a {
            border-radius: 0 5px 5px 0;
        }

        /* Styling de la table */
        .table-product th,
        .table-product td {
            vertical-align: middle;
        }

        .table-product th {
            background-color: #f8f9fa;
        }

        .table-product tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#productsTable').DataTable();
        });
    </script>
@endsection
