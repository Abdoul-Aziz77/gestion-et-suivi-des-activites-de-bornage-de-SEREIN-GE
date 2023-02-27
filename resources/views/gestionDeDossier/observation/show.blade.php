@extends('racine/layourt')
@section('contenu')
<div class="card" style="width: 18rem;">
    <h2>{{$observations->personnel_id}}</h2>
    <div class="card-body">
      <h5 class="card-title">Contenu</h5>
      <p class="card-text">{{$observations->contenu}}</p>
      <a href=" {{route('observations.index')}} " class="btn btn-danger">retour</a>
    </div>
  </div>
@endsection
