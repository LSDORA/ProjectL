<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function traiterConnexion(Request $request)
    {
        $credentials = $request->only('login', 'password');

        if (Auth::attempt($credentials)) {
            // L'authentification a réussi
            $user = User::where('login', $request->login)->first();
            if ($user) {
                if ($user->droit == 1) {
                    // Ouvrir une session pour l'utilisateur avec le droit égal à 1
                    Auth::login($user);
                    // Rediriger l'utilisateur vers la page adminpanel
                    return redirect('/adminpanel');
                } elseif ($user->droit == 0) {
                    // Ouvrir une session pour l'utilisateur avec le droit égal à 0
                    Auth::login($user);
                    // Rediriger l'utilisateur vers la page clientpanel
                    return redirect('/clientpanel');
                }
            }
        
             
           
        } else {
            // L'authentification a échoué, affichage d'un message d'erreur
            return redirect()->back()->with('error', 'Identifiant ou mot de passe incorrect.');
        }
    }

    public function deconnexion(Request $request){
        Auth::logout();
        return redirect('/index');
    }
}

               // 
               // return redirect()->back()->with('error', 'Vous n\'avez pas les droits d\'accès.');