<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assurez-vous d'importer le modèle User si vous utilisez le modèle par défaut fourni par Laravel

class InscriptionController extends Controller
{
    public function store(Request $request)
    {

      //  dd($request->all());
       
        $user = new User();
        $user->login =  strtolower(substr($request->prenom, 0, 2)) . strtolower($request->nom);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->datenaissance = $request->datenaissance;
        $user->email = $request->mail;
        $user->password = bcrypt($request->motdepasse);
        $user->ville = $request->ville;
        $user->photo = $request->photo;
        
    
        // Enregistrez l'utilisateur dans la base de données
        $user->save();
    
        // Rediriger l'utilisateur vers une page de confirmation ou autre
        return view('confirm', ['nom' => $user->nom, 'prenom' => $user->prenom]);
    }
}
