@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('observation.store')}}">
        @csrf
        <fieldset><legend class="text-center"> Ajout d'une observation  </legend>

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
                <label for="nom" class="col-sm-2 col-form-label">Personnel</label>

                    <select class="form-select" name="personnel_id" aria-label="Default select example">
                        <option selected>choisissez le personnel correspondant</option>

                        @foreach ($personnels as $personnel)
                        <option value="{{$personnel->id}}">{{$personnel->matricule }}</option>
                        @endforeach
                      </select>
            </div>

            <div class="row mb-3">
                <label for="contenu" class="col-sm-2 col-form-label">Le contenu de l'observation</label>
                <textarea class="form-control" placeholder="ajouter une observation" name="contenu" id="contenu" style="height: 100px"></textarea>
                
              </div>

              <div class="row mb-3">
                <label for="surnom" class="col-sm-2 col-form-label"  >date d'observation'</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="date_observation" id="dates">
                </div>
            </div>
            <div class="row mb-3">

                <div class="row">
                    <button type="submit" class="col-auto me-auto button button-3d button-rounded button-green"><i
                            class="icon-save1"></i>Enregistrer</button>
                    <a href="{{ route('observation.index') }}" class="col-auto button button-3d button-rounded button-red"><i
                            class="icon-backspace"></i>Annuler
                    </a>
                </div>
            </div>

        </fieldset>

    </form>

@endsection
