@extends('layout')

@section('titre', 'Accueil')

@section('contenu')
  <h1>Les listes de tâches</h1>

  <ul>
    @foreach ($utilisateurs as $prenom)
        <li><a href="{{ route('taches.index', $prenom) }}">{{ ucfirst($prenom) }}</a></li>
    @endforeach
  </ul>
@endsection
