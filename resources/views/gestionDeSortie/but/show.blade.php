@extends('racine/layourt')
@section('contenu')
<div class="card" style="width: 40rem;">

    <h2>{{$buts->libelle}}</h2>
    <div class="card-body">
      <h5 class="card-title">la description du but</h5>
      <p class="card-text">{{$buts->description}}</p>
      <a href=" {{route('but.index')}} " class="btn btn-danger">retour</a>
    </div>
  </div>

@endsection
