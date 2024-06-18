<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class MembreController extends Controller
{
    public function listeUtilisateurs()
    {
        $utilisateurs = User::all(); // Récupérer tous les utilisateurs depuis la base de données

        foreach ($utilisateurs as $utilisateur) {
            if ($utilisateur->photo == null) {
                // Chemin de la photo par défaut
                $utilisateur->photo = 'https://media.istockphoto.com/id/1223671392/fr/vectoriel/photo-de-profil-par-d%C3%A9faut-avatar-photo-placeholder-illustration-de-vecteur.jpg?s=170667a&w=0&k=20&c=EqD6q8IUqwN_bgGec0UBhh3tk2Zuur5lezDDlQsGdPY=';
            }
        }

        return view('adminpanel', compact('utilisateurs')); // Passer les utilisateurs à la vue
    }

    public function delete($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return response()->json(['message' => 'Utilisateur supprimé avec succès'], 200);
}

public function update(Request $request, $id)
{
    $user = User::find($id);

    if ($request->filled('nom')) {
        $user->nom = $request->input('nom');
    }

    if ($request->filled('prenom')) {
        $user->prenom = $request->input('prenom');
    }

    if ($request->filled('email')) {
        $user->email = $request->input('email');
    }

    if ($request->filled('date_naissance')) {
        $user->date_naissance = $request->input('date_naissance');
    }

    if ($request->filled('ville')) {
        $user->ville = $request->input('ville');
    }
    
    if ($request->filled('mot_de_passe')) {
        $user->password = bcrypt($request->input('mot_de_passe'));
    }

    if ($request->filled('photo')) {
        
      $imagePath = $request->file('photo')->store('public/images');
  
      // Transformer le chemin stocké pour qu'il soit accessible via une URL
      $imagePath = str_replace('public/', 'storage/', $imagePath);
        //  dd($request->all());
        
        $user->photo = $imagePath;
    }

    $user->save();

    return redirect()->back()->with('success', 'Utilisateur mis à jour avec succès');
}

}
