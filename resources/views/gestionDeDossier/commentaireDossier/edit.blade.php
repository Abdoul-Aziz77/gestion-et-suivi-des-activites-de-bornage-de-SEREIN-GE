@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('commentaire dossier.store')}}">
        @csrf
        <fieldset><legend> Ajout d'un commentaire sur le dossier </legend>
            <div class="row mb-3">
                <label for="nom" class="col-sm-2 col-form-label">utilisateur</label>

                    <select class="form-select" name="utilisateur_id" aria-label="Default select example">
                        <option selected>
                            @foreach ( $utilisateurs as $utilisateur)

                            @foreach ($commentaire_dossiers as $commentaire_dossier )

                            @if ($commentaire_dossier->utilisateur_id==$utilisateur->id)

                            {{$utilisateur->nom_utilisateur}}

                            @endif

                            @endforeach

                            @endforeach
                        </option>
                        @foreach ($utilisateurs as $utilisateur)
                        <option value="{{$utilisateur->id}}">{{$utilisateur->nom_utilisateur}}</option>
                        @endforeach
                      </select>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="ajouter une observation" name="contenu" id="floatingTextarea" style="height: 100px"> {{$commentaire_dossier->contenu}} </textarea>
                <label for="floatingTextarea">Le contenu de l'observation</label>
              </div>

              <div class="row mb-3">
                <label for="surnom" class="col-sm-2 col-form-label"  >date du commentaire'</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="date_enregistrement" id="dates">
                </div>
            </div>
            <div class="row mb-3">

                <div class="col-sm-10">
                    <button type="submit">Soumettre</button>
                </div>
            </div>

        </fieldset>

    </form>

@endsection
