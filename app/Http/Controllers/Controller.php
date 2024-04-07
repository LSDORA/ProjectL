<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function AfficherEleve(){
        $eleves=[
            'moi',
            'toi'
        ];
        dd($eleves);
        return view('newdeux', ['eleves' => $eleves]);
        
    }
}
