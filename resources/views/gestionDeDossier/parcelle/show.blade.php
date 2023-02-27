@extends('racine/layourt')
@section('contenu')
<p> Identifiant de la parcelle : {{$parcelles->id}} </p> <hr>
<p> Le lot : {{$parcelles->lot}} </p> <hr>
<p> La section : {{$parcelles->section}} </p> <hr>
<p> La superficie : {{$parcelles->superficie}} </p>
@endsection
