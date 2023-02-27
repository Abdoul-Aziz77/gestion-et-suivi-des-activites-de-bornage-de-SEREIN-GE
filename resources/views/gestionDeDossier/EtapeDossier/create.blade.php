@extends('racine/layourt')
@section('contenu')

    <form method="Post", action="{{route('etape dossier.store')}}">
        @csrf
        <fieldset><legend class="text-center"> Ajout d'un nouveau etape dossier  </legend>

            <div class="row mb-3">
                <label for="nom" class="col-sm-2 col-form-label">etape</label>

                    <select class="form-select" name="etapes_id" aria-label="Default select example">
                        <option selected>choisissez l'etape correspondant</option>

                        @foreach ($etapes as $etape)
                        <option value="{{$etape->id}}">{{$etape->libelle }}</option>
                        @endforeach
                      </select>
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
                <label for="surnom" class="col-sm-2 col-form-label"  >fini</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statut" id="inlineRadio1" value="1">
                    <label class="form-check-label" for="inlineRadio1">oui</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="statut" id="inlineRadio2" value="2">
                    <label class="form-check-label" for="inlineRadio2">non</label>
                  </div>
            </div>
            <div class="row mb-3">
                <label for="surnom" class="col-sm-2 col-form-label"  >date de realisation</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="date_realisation" id="dates">
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
