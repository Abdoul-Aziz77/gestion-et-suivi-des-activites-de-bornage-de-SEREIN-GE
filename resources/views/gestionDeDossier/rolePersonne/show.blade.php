@extends('racine/layourt')
@section('contenu')
<h2>le role personne</h2>
<hr>
<p> L'identifiant du rôle : {{$role_personne->id}} </p><hr>
<p> le rôle : {{$role_personne->libelle}} </p><hr>
@endsection
