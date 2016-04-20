@extends('layout')

@section('titre', 'Accueil')

@section('contenu')
  <h1>Les listes de tâches</h1>

  <form action="" method="post">
      {{ csrf_field() }}
    <input type="text" name="prenom">
    <input type="text" name="titre">
    <input type="submit" value="Ajouter la tâche">
  </form>

  <ul>
    @foreach ($utilisateurs as $utilisateur)
        <li><a href="{{ route('taches.index', $utilisateur->prenom) }}">{{ ucfirst($utilisateur->prenom) }}</a></li>
    @endforeach
  </ul>
@endsection
