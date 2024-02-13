<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\ProduitStatus;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function index()
    {
        $status = ProduitStatus::where('nom', 'valide')->first();
        $produits_recents = Produit::where('produit_status_id', $status->id)->with('category', 'medias')->orderBy('created_at', 'desc')->take(4)->get();
      return view('home', compact('produits_recents'));
    }
}
