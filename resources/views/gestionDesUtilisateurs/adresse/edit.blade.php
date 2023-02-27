@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('adresse.update')}}">
        @csrf
        <fieldset><legend> Ajout d'un nouveau personne  </legend>

            <div class="row mb-3">
                <label for="pays" class="col-sm-2 col-form-label">pays</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="pays" placeholder="pays d'origine de la personne">
                </div>
            </div>
            <div class="row mb-3">
                <label for="prenom" class="col-sm-2 col-form-label">ville</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="ville" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="surnom" class="col-sm-2 col-form-label">code postale</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="code_postale" placeholder="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Quartier</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="quartier" placeholder="Quartier" id="description"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Le secteur</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="secteur" placeholder="" id="description"></textarea>
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
