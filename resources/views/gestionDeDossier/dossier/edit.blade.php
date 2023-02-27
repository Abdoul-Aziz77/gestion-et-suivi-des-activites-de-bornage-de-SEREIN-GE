@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('personne morale.store')}}">
        @csrf
        <fieldset><legend> Enregistrer un nouveau dossier  </legend>

            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example">
                        @foreach ( $dossiers as $dossier)

                            @foreach ($type_dossiers as $type_dossier )

                            @if ($type_dossier->dossier_id==$dossier->id)

                            <option value="{{$dossier->id}}">{{$dossier->libelle}}</option>

                            @endif

                            @endforeach

                            @endforeach

                        @foreach ($dossiers as $dossier)
                        <option value="{{$dossier->id}}">{{$dossier->libelle}}</option>
                        @endforeach
                    </option>
                    <option value="1">delimitation</option>
                    <option value="2">fusion</option>
                    <option value="3">immatriculation</option>
                  </select>
                <input type="text" name="libelle" value=" {{$dossiers->libelle}} " class="form-control" aria-label="Text input with dropdown button" placeholder="un titre pour le dossier : nom proprietaire/lieu">
              </div>
              <div >
                <button type="submit" class="btn btn-outline-success">Enregistrer</button>

   <a name="" id="" class="btn btn-outline-danger" href=" {{route('home')}} " role="button">Annuler</a>
              </div>
        </fieldset>

    </form>

@endsection
