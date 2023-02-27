@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('but de sortie.create')}}">
        @csrf
        <fieldset><legend> Ajout un but de sortie </legend>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="libelle" id="floatingInput" placeholder="le libelle ">
                <label for="floatingInput">le but</label>
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
                <label for="nom" class="col-sm-2 col-form-label">but</label>

                    <select class="form-select" name="but_id" aria-label="Default select example">
                        <option selected>choisissez le but correspondant</option>

                        @foreach ($buts as $but)
                        <option value="{{$but->id}}">{{$but->libelle }}</option>
                        @endforeach
                      </select>
            </div>
            <div class="row mb-3">
                <label for="nom" class="col-sm-2 col-form-label">sortie</label>

                    <select class="form-select" name="sortie_id" aria-label="Default select example">
                        <option selected>choisissez la sortie correspondant</option>

                        @foreach ($sorties as $sortie)
                        <option value="{{$sortie->id}}">{{$sortie->date_debut_sortie }} : {{$sortie->id}}</option>
                        @endforeach
                      </select>
            </div>
        </fieldset>

    </form>

@endsection
