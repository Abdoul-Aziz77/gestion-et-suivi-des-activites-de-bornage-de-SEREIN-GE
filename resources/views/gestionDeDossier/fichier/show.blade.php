@extends('racine/layourt')
@section('contenu')
<p> Identifiant du fichier : {{$fichiers->id}} </p> <hr>
<p> Identifiant du dossier correspondant : {{$fichiers->dossier_id}} </p> <hr>
<p> Le nom du fichier : {{$fichiers->nom}} </p> <hr>
<p> La date d'enregistrement : {{$fichiers->date_enregistrement}} </p>
@endsection
