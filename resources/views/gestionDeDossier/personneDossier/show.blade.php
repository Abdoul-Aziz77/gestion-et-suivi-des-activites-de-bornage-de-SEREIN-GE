@extends('racine/layourt')
@section('contenu')
<h2>la personne dossier</h2>
<p> Identifiant du personne dossier : {{$personne_dossier->id}} </p>
<p> Identifiant du rôle : {{$personne_dossier->role_id}} </p>
<p> Identifiant de la personne : {{$personne_dossier->personne_physique_id}} </p>
@endsection
