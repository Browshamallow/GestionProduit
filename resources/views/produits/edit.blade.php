<!DOCTYPE html>
<html>
<head>
    <title>Modifier un produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h1 class="mb-4">Modifier le produit</h1>

    <form action="{{ url('/produits/'.$produit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ $produit->nom }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $produit->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Prix</label>
            <input type="number" name="prix" class="form-control" step="0.01" value="{{ $produit->prix }}" required>
        </div>
        <div class="mb-3">
            <label>Quantité</label>
            <input type="number" name="quantite" class="form-control" value="{{ $produit->quantite }}" required>
        </div>
        <div class="mb-3">
            <label>Reference</label>
            <input type="text" name="reference" class="form-control" value="{{ $produit->reference }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a href="{{ url('/') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
</body>
</html>
