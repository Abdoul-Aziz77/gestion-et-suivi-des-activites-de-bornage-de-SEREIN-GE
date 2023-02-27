@extends('racine/layourt')
@section('contenu')
    <br><br>
    <form method="Post", action="{{ route('commentaire dossier.store') }}">
        @csrf
        <fieldset>
            <legend class="text-center"> Ajout d'un commentaire sur le dossier </legend>
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
                <label for="nom" class="col-sm-2 col-form-label">utilisateur</label>

                <select class="form-select" name="utilisateur_id" aria-label="Default select example">
                    <option selected>choisissez l'utilisateur correspondant</option>
                    @foreach ($utilisateurs as $utilisateur)
                        <option value="{{ $utilisateur->id }}">{{ $utilisateur->nom_utilisateur }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row mb-3">
                <label for="contenu">Ajout de commentaire</label>
                <textarea class="form-control" placeholder="Ajout de commentaire" name="contenu" id="contenu" style="height: 100px"></textarea>
            </div>
            <div class="row mb-3">
                <label for="surnom" class="col-sm-2 col-form-label">date du commentaire'</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="date_enregistrement" id="dates">
                </div>
            </div>
            <div class="row mb-3"> 
                <div class="row">
                    <button type="submit" class="col-auto me-auto button button-3d button-rounded button-green"><i
                            class="icon-save1"></i>Enregistrer</button>
                    <a href="{{ route('dossier.index') }}" class="col-auto button button-3d button-rounded button-red"><i
                            class="icon-backspace"></i>Annuler
                    </a>
                </div>
            </div>

        </fieldset>

    </form>
@endsection
