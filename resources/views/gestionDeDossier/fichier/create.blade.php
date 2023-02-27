@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('fichier.store')}}">
        @csrf
        <fieldset><legend> Ajout d'un nouveau fichier  </legend>

            <div class="row mb-3">
                <label for="nom" class="col-sm-2 col-form-label">Nom du fichier</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nom" placeholder="Entre votre nom du fichier">
                </div>
            </div>
            <div class="row mb-3">
                <label for="prenom" class="col-sm-2 col-form-label">fichier</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="fichier">
                </div>
            </div>
            <div class="row mb-3">
                <label for="nom" class="col-sm-2 col-form-label">Dossier</label>

                    <select class="form-select" name="dossier_id" aria-label="Default select example">
                        <option selected>choisissez le dossier correspondant</option>

                        @foreach ($dossiers as $dossier)
                        <option value="{{$dossier->id}}">{{$dossier->libelle }}</option>
                        @endforeach
                      </select>
            </div>
            <div class="row mb-3">
                <label for="surnom" class="col-sm-2 col-form-label"  >date de enregistrement</label>
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
