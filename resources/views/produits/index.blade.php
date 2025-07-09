<!DOCTYPE html>
<html>
<head>
    <title>Liste des produits</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h1 class="mb-4">Liste des produits</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ url('/produits/create') }}" class="btn btn-primary mb-3">Ajouter un produit</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($produits as $produit)
            <tr>
                <td>{{ $produit->id }}</td>
                <td>{{ $produit->nom }}</td>
                <td>{{ $produit->description }}</td>
                <td>{{ $produit->prix }}</td>
                <td>{{ $produit->quantite }}</td>
                <td>
                    <a href="{{ url('/produits/'.$produit->id.'/edit') }}" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="{{ url('/produits/'.$produit->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ce produit ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="6" class="text-center">Aucun produit</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
