<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assurez-vous d'importer le modèle User si vous utilisez le modèle par défaut fourni par Laravel

class InscriptionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
          'photo' => 'required|image|max:2048', 
        ]);

        $file = $request->file('photo');
    

          // Traiter l'image et la stocker dans le dossier 'public/images'
    $imagePath = $request->file('photo')->store('public/images');

    // Transformer le chemin stocké pour qu'il soit accessible via une URL
    $imagePath = str_replace('public/', 'storage/', $imagePath);
      //  dd($request->all());
       
        $user = new User();
        $user->login =  strtolower(substr($request->prenom, 0, 2)) . strtolower($request->nom);
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->datenaissance = $request->datenaissance;
        $user->email = $request->mail;
        $user->password = bcrypt($request->motdepasse);
        $user->ville = $request->ville;
        $user->photo = $imagePath;
        
    
        // Enregistrez l'utilisateur dans la base de données
        $user->save();
    
        // Rediriger l'utilisateur vers une page de confirmation ou autre
        return view('confirm', ['nom' => $user->nom, 'prenom' => $user->prenom]);
    }
}
