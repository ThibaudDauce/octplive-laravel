@extends('layout')

@section('titre', $prenom)

@section('contenu')
  <h1>La liste de tâches de {{ $prenom }} ({{ count($taches) }} tâches restantes)</h1>

  <a href="{{ route('accueil') }}">Retour à l'accueil</a>

  <ul>
    @forelse($taches as $tache)
      <li>{{ $tache }}</li>
    @empty
      Il n'y a pas encore de tâches.
    @endforelse
  </ul>
@endsection
