<?php

namespace App\Http\Controllers\Produits;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProduitsController extends Controller
{

    public function produit_details(Request $request, $id)
    {
        $produit = Produit::findOrFail($id)->with('category', 'medias')->first();

        return view('produits.detailproduit', compact('produit'));

    }

   
}
