@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('sortie.store')}}">
        @csrf
        <fieldset><legend> Ajout d'un nouveau sortie  </legend>

            <div class="row mb-3">
                <label for="nom" class="col-sm-2 col-form-label">etat de sortie</label>

                    <select class="form-select" name="etat_sortie_id" aria-label="Default select example">
                        <option selected>choisissez l'etat de sortie correspondant</option>

                        @foreach ($etat_sorties as $etat_sortie)
                        <option value="{{$etat_sortie->id}}">{{$etat_sortie->etat }}</option>
                        @endforeach
                      </select>
            </div>

            <div class="row mb-3">
                <label for="nom" class="col-sm-2 col-form-label">materiel utilisaer</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="materiel_utiliser" placeholder="Entre votre nom de famille, Exemple: MONE">
                </div>
            </div>
            <div class="row mb-3">
                <label for="prenom" class="col-sm-2 col-form-label">equipe de sorite</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="equipe_sorti" placeholder="entre l'equipe de sortie">
                </div>
            </div>


            <div class="row mb-3">
                <label for="surnom" class="col-sm-2 col-form-label"  >date de sortie de terrain</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="date_debut_sortie" id="dates">
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
