@extends('racine/layourt')
@section('contenu')

<div class="card" style="width: 18rem;">
    <h2>{{$commentaire_fichiers->libelle}}</h2>
    <div class="card-body">
      <h5 class="card-title">le commentaire du fichier</h5>
      <p class="card-text">{{$commentaire_fichiers->description}}</p>
      <a href=" {{route('commentaire fichier.index')}} " class="btn btn-danger">retour</a>
    </div>
  </div>

@endsection
