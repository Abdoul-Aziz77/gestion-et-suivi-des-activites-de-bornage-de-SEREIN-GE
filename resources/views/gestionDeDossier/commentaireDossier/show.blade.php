@extends('racine/layourt')
@section('contenu')

<div class="card" style="width: 18rem;">
    <h2>{{$commentaire_dossiers->libelle}}</h2>
    <div class="card-body">
      <h5 class="card-title">le ommentaire du dossier</h5>
      <p class="card-text">{{$commentaire_dossiers->description}}</p>
      <a href=" {{route('commentaire dossier.index')}} " class="btn btn-danger">retour</a>
    </div>
  </div>

@endsection
