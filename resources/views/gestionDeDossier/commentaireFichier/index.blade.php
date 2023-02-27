@extends('racine/layourt')

@section('contenu')

<table class="table table-dark">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Le nom de l'etape</th>
            <th>La description de l'etape</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($etapes as $etape )
        <tr>
            <td>{{$etape->id}}</td>
            <td>{{$etape->libelle}}</td>
            <td>{{$etape->description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
