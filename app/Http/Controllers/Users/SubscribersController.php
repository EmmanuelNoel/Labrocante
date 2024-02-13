<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SubscribersController extends Controller
{
    public function create()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $existingSubscriber = Subscribers::where('email', $request->input('subscribersmail'))->first();

        if ($existingSubscriber) {
            return redirect()->route('home')->with('existe', "Cet utilisateur s'est déjà abonné à notre newsletter");
        } else {
            $subscribers = new Subscribers([
                'email' => $request->input('subscribersmail'),
            ]);

            $subscribers->save();

            if ($subscribers) {
                return redirect()->route('subscribers.create')->with('success', 'Vous êtes abonné avec succès à notre newsletter !');
            } else {
                return redirect()->route('subscribers.create')->with('echoue', "Erreur lors de l'abonnement.");
            }
        }
    }
}
