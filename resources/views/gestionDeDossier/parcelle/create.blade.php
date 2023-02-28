@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('parcelle.index')}}">
        @csrf
        <fieldset><legend> Ajout d'un nouveau parcelle  </legend>

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
                <label for="nom" class="col-sm-2 col-form-label">Personne physique</label>

                    <select class="form-select" name="dossier_id" aria-label="Default select example">
                        <option selected>choisissez la personne correspondant</option>

                        @foreach ($personne_physiques as $personne_physique)
                        <option value="{{$personne_physique->id}}">{{$personne_physique->nom }} {{$personne_physique->prenom}}</option>
                        @endforeach
                        @foreach ($personne_morales as $personne_morale)
                        <option value="{{$personne_morale->id}}">{{$personne_morale->numero_recipicer}}: {{$personne_morale->email}}</option>
                        @endforeach
                      </select>
            </div>


            <div class="row mb-3">
                <label for="lot" class="col-sm-2 col-form-label"  >lot</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="lot" placeholder="entrer lot, exemple: Abdl-Aziz">
                </div>
            </div>
            <div class="row mb-3">
                <label for="section" class="col-sm-2 col-form-label">section</label>
                <input type="text" name="section" id="section">
            </div>

            <div class="row mb-3">
                <label for="lot" class="col-sm-2 col-form-label"  >superficie</label>
                <div class="col-sm-10">
                    <input type="text" name="superficie" id="superficie">
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
