@extends('racine/layourt')
@section('contenu')


<div class="card" style="width: 18rem;">
    <h2>{{$etapes->libelle}}</h2>
    <div class="card-body">
      <h5 class="card-title">la description de l'etape</h5>
      <p class="card-text">{{$etapes->description}}</p>
      <a href=" {{route('etape.index')}} " class="btn btn-danger">retour</a>
    </div>
  </div>

@endsection
