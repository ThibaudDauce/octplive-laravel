<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tache;

class AccueilController extends Controller
{
    public function welcome()
    {
        $utilisateurs = \DB::table('taches')->select('prenom')->distinct()->get();

        return view('welcome', compact('utilisateurs'));
    }
}
