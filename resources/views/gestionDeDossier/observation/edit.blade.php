@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('observation.update',$observations->id)}}">
        @csrf
        @method('PATCH')
        <fieldset><legend> Ajout d'une observation  </legend>

            <div class="row mb-3">
                <label for="nom" class="col-sm-2 col-form-label">Dossier</label>

                    <select class="form-select" name="dossier_id" aria-label="Default select example">
                        <option selected> choix de dossier</option>

                        @foreach ($dossiers as $dossier)
                        <option value="{{$dossier->id}}"> {{$dossier->libelle }}</option>
                        @endforeach
                      </select>
            </div>
            <div class="row mb-3">
                <label for="nom" class="col-sm-2 col-form-label">personnel</label>

                    <select class="form-select" name="personnel_id" aria-label="Default select example">
                        <option selected>choix personnel</option>

                        @foreach ($personnels as $personnel)
                        <option value="{{$personnel->id}}">{{$personnel->matricule }}</option>
                        @endforeach
                      </select>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="ajouter une observation" name="contenu" id="floatingTextarea" style="height: 100px">  {{$observations->contenu}} </textarea>
                <label for="floatingTextarea">Le contenu de l'observation</label>
              </div>

              <div class="row mb-3">
                <label for="surnom" class="col-sm-2 col-form-label">date d'observation'</label>
                <div class="col-sm-10">
                    <input type="datetime-local" value=" {{$observations->date_observation}} " name="date_observation" id="dates">
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
