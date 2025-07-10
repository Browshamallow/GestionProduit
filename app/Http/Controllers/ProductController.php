<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $produits = Product::all();
        return view('produits.index', compact('produits'));
    }

public function create()
{
    return view('produits.create');
}


 public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'nullable|string',
        'prix' => 'required|numeric',
        'quantite' => 'required|integer',
        'reference' => 'required|string',
    ]);

    Product::create($request->all());

    return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès');
}

public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'nullable|string',
        'prix' => 'required|numeric',
        'quantite' => 'required|integer',
        'reference' => 'required|string',
    ]);

    $produit = Product::findOrFail($id);
    $produit->update($request->all());

    return redirect()->route('produits.index')->with('success', 'Produit mis à jour');
}

public function destroy($id)
{
    $produit = Product::findOrFail($id);
    $produit->delete();

    return redirect()->route('produits.index')->with('success', 'Produit supprimé');
}
}