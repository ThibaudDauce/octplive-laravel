<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tache;

class TachesController extends Controller
{
    public function index($prenom)
    {
        $taches = Tache::where('prenom', $prenom)->get();

        return view('taches', compact('taches', 'prenom'));
    }

    public function store(Request $request)
    {
        $tache = new Tache();
        $tache->prenom = $request->get('prenom');
        $tache->titre = $request->get('titre');
        $tache->save();

        return redirect()->route('taches.index', $request->get('prenom'));
    }
}
