<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class ConnexionController extends Controller
{
    public function traiterConnexion(Request $request)
    {
        $credentials = $request->only('login', 'password');

        if (Auth::attempt($credentials)) {
            // Authentification réussie, vérifiez le droit de l'utilisateur
            $user = Auth::user();

            if ($user->droit == 1) {
                // L'utilisateur a le droit requis, redirigez-le vers adminpanel
                return redirect('/adminpanel');
            } else {
                // L'utilisateur n'a pas le droit requis, affichez un message d'erreur
                return redirect()->back()->with('error', 'Droit insuffisant');
            }
        } else {
            // Authentification échouée, redirigez avec un message d'erreur
            return redirect()->back()->with('error', 'Mot de passe incorrect');
        }
    }

    public function deconnexion(Request $request){
        Auth::logout();
        return redirect('/index');
    }
}

               // 
               // return redirect()->back()->with('error', 'Vous n\'avez pas les droits d\'accès.');