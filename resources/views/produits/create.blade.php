<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h1 class="mb-4">Ajouter un produit</h1>

    <form action="{{ url('/produits') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Prix</label>
            <input type="number" name="prix" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label>Quantité</label>
            <input type="number" name="quantite" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="{{ url('/') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
</body>
</html>
