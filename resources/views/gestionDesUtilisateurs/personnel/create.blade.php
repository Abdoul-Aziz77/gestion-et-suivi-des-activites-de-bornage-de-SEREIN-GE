@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('personnel.store')}}">
        @csrf
        <fieldset><legend> Ajout d'un nouveau personne  </legend>

            <div class="col-lg-6 bottommargin-sm">
                <div class="white-section">
                    <label>choisir une personne:</label>
                    <select class="selectpicker" name="personne_physique_id" data-live-search="true">
                        @foreach ($personne_physiques as $personne_physique)
                            <option value=" {{ $personne_physique->id }} "
                                data-tokens="ketchup mustard">
                                {{ $personne_physique->nom }} {{ $personne_physique->prenom }}
                            </option>
                        @endforeach

                    </select>
                </div>
                <a href="{{ route('personne physique.create') }}"
                        class="button button-circle button-green"><i class="icon-plus-sign2"></i></a>
            </div>

            <div class="row mb-3">
                <label>choisir un poste:</label>
            <select class="selectpicker" name="poste_id" data-live-search="true">
                @foreach ($postes as $poste)
                    <option value=" {{ $poste->id }} "
                        data-tokens="ketchup mustard">
                        {{ $poste->libelle }} 
                    </option>
                @endforeach

            </select>
            </div>

                    <div class="row mb-3">
                        <label for="surnom" class="col-sm-2 col-form-label">date
                            de debut de contrat</label>
                        <div class="col-sm-10">
                            <input type="datetime-local" name="date_debut_contrat"
                                id="dates">
                        </div>
                    </div>
a
                   
            <div class="row mb-3">
                <label for="nom" class="col-sm-2 col-form-label">durée de contrat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="dure" placeholder="Entre votre nom de famille, Exemple: MONE">
                </div>
            </div>
            <div class="row mb-3">
                <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="prenom" placeholder="entrer votre prenom, exemple: Abdoul aziz">
                </div>
            </div>
            <div class="row mb-3">
                <label for="surnom" class="col-sm-2 col-form-label"  >Surnom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="surnom" placeholder="entrer surnom, exemple: Abdl-Aziz">
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" placeholder="Entrer une description de la personne pour pouvoir le reconnaitre même en cas de pert de memoire" id="description"></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="surnom" class="col-sm-2 col-form-label"  >date de naissance</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="date_naissance" id="dates">
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
