<?php

namespace App\Http\Controllers\Users;

use App\Models\Subscribers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SubscribersController extends Controller
{

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
                return redirect()->back()->with('success', 'Vous êtes abonné avec succès à notre newsletter !');
            } else {
                return redirect()->back()->with('echoue', "Erreur lors de l'abonnement.");
            }
        }
    }
}
