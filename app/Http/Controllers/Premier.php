<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Premier extends Controller
{
    public function AfficherEleve(){
        $eleves=[
            'moi',
            'toi'
        ];
         
        return view('newdeux', ['eleves' => $eleves]);
        
    }
}
