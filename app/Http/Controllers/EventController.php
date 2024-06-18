<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function showEvents()
{
    $evenements = Event::all();
    return view('index', compact('evenements'));
}

public function createEvent(Request $request) {
    // Valider les données du formulaire
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|max:2048', // règles de validation de l'image
    ]);

    // Vérifier le contenu du fichier téléchargé
    $file = $request->file('image');
    if ($file) {
        // Afficher des informations de débogage
        echo 'Nom du fichier : ' . $file->getClientOriginalName() . '<br>';
        echo 'Extension du fichier : ' . $file->getClientOriginalExtension() . '<br>';
        echo 'Taille du fichier : ' . $file->getSize() . ' bytes<br>';
    }

    // Traiter l'image et la stocker dans le dossier 'public/images'
    $imagePath = $request->file('image')->store('public/images');

    // Transformer le chemin stocké pour qu'il soit accessible via une URL
    $imagePath = str_replace('public/', 'storage/', $imagePath);

    // Vérifier le chemin final
    echo 'Chemin de l\'image : ' . $imagePath . '<br>';

    // Créer l'événement dans la base de données
    $evenement = new Event();
    $evenement->nom = $validated['nom'];
    $evenement->description = $validated['description'];
    $evenement->image = $imagePath; // enregistrement du chemin vers l'image
    $evenement->save();

    return redirect()->back()->with('success', 'Événement créé avec succès');
}

}


