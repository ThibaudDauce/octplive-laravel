<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tache;

class TachesController extends Controller
{
    public function index($prenom)
    {
        $taches = [
            'faire les courses',
            'aller à l\'escalade',
            'jouer de la musique',
        ];

        return view('taches', compact('taches', 'prenom'));
    }
}
