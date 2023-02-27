@extends('racine/layourt')
@section('contenu')
<p> {{$type_bornage->id}} </p>
<div class="card" style="width: 18rem;">
    <h2>{{$type_bornage->id}}: {{$type_bornage->libelle}}</h2>
    <div class="card-body">
      <h5 class="card-title">la description du type de bornage</h5>
      <p class="card-text">{{$type_bornage->description}}</p>
      <a href=" {{route('etape.index')}} " class="btn btn-danger">retour</a>
    </div>
  </div>

@endsection
