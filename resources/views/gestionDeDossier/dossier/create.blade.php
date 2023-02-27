@extends('racine/layourt')
@section('contenu')
    <form method="Post", action="{{ route('dossier.store') }}">
        @csrf
        <fieldset>
            <legend class="text-center"> Enregistrer un nouveau dossier </legend>
            <div class="col-lg-6 bottommargin-sm">
                <div class="white-section">
                    <label>choisir un client:</label>
                    <select class="selectpicker" name="personne_physique_id" data-live-search="true">
                        @foreach ( $personnes as $personne)
                        <option value=" {{$personne->id}} " data-tokens="ketchup mustard"> {{$personne->nom}} {{$personne->prenom}} </option>
                        @endforeach

                    </select>
                    <a href="{{route('personne physique.create')}}" class="button button-circle button-green" ><i class="icon-plus-sign2"></i></a>
                </div>
            </div>
            <div class="col-md-6 form-group">
                <label>situation:</label>
                <input type="text" name="situation" id="situation" class="form-control" value="" placeholder="Entrer la localisation du site">
            </div>
            <div class="row">
                <a href="#{{-- {{ route('dossier.index') }} --}}" class="col-auto button button-3d button-rounded button-red"><i
                        class="icon-backspace"></i>Retour
                </a>
                <button class="col-auto me-auto button button-3d button-rounded button-green" type="submit"
                    ><i class="icon-news"></i> Enregister </button>
            </div>


            {{-- <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Choisissez un type de bornage</option>
                    <option value="1">delimitation</option>
                    <option value="2">fusion</option>
                    <option value="3">immatriculation</option>
                </select>
                <input type="text" class="form-control" aria-label="Text input with dropdown button"
                    placeholder="un titre pour le dossier : nom proprietaire/lieu">
            </div>
            <div class="row">
                <button type="submit" class="col-auto me-auto button button-3d button-rounded button-green"><i
                        class="icon-save1"></i>Enregistrer</button>
                <a href="{{ route('dossier.index') }}" class="col-auto button button-3d button-rounded button-red"><i
                        class="icon-backspace"></i>Annuler
                </a>
            </div> --}}



        </fieldset>

    </form>
@endsection
