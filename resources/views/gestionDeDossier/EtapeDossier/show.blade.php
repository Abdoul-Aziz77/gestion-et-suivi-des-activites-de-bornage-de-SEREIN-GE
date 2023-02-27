@extends('racine/layourt')
@section('contenu')
<div class="card" style="width: 18rem;">
    <h2>{{$etape_dossier->etapes_id}}</h2>
    <div class="card-body">
      <h5 class="card-title">la description de l'etape</h5>
      <p class="card-text">{{$etape_dossier->etapes_id}}</p>
      <a href=" {{route('etape dossier.index')}} " class="btn btn-danger">retour</a>
    </div>
  </div>
@endsection
