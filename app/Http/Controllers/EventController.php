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
        'image' => 'required|image|max:2048',
    ]);

    // Traiter l'image
    $imagePath = $request->file('image')->store('images', 'public');

    // Créer l'événement
    $evenement = new Event();
    $evenement->nom = $validated['nom'];
    $evenement->description = $validated['description'];
    $evenement->image = $imagePath;
    $evenement->save();


    return redirect()->back()->with('success', 'Événement créé avec succès');
}
}


