<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'produits';
    protected $fillable = ['nom', 'description', 'prix', 'quantite', 'reference'];
}

