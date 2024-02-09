<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    public function index()
    {
        $produits_recents = Produit::with('category', 'medias')->orderBy('created_at', 'desc')->take(8)->get();
      return view('home', compact('produits_recents'));
    }
}
