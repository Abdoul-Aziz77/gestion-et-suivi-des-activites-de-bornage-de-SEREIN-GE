@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('personne physique.store')}}">
        @csrf
        <fieldset><legend> Adresse  </legend>

            <div class="row mb-3">
                <label for="pays" class="col-sm-2 col-form-label">pays</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="pays" placeholder="pays d'origine de la personne">
                </div>
            </div>
            <div class="row mb-3">
                <label for="ville" class="col-sm-2 col-form-label">ville</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="ville" placeholder="entrer votre prenom, exemple: Abdoul aziz">
                </div>
            </div>
            <div class="row mb-3">
                <label for="code_postale" class="col-sm-2 col-form-label">code postale</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="code_postale" placeholder="entrer surnom, exemple: Abdl-Aziz">
                </div>
            </div>
            <div class="row mb-3">
                <label for="quartier" class="col-sm-2 col-form-label">Quartier</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="quartier" placeholder="Quartier" id="quartier"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="secteur" class="col-sm-2 col-form-label">Le secteur</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="secteur" placeholder="Le secteur de residance de la personne" id="secteur"></textarea>
                </div>
            </div>
        </fieldset>
        <fieldset><legend> Ajout d'un nouveau personne  </legend>

            <div class="row mb-3">
                <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nom" placeholder="Entre votre nom de famille, Exemple: MONE">
                </div>
            </div>
            <div class="row mb-3">
                <label for="prenom" class="col-sm-2 col-form-label">Prenom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="prenom" placeholder="entrer votre prenom, exemple: Abdoul aziz">
                </div>
            </div>
            <div class="row mb-3">
                <label for="surnom" class="col-sm-2 col-form-label"  >email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="entrer surnom, exemple: Abdl-Aziz">
                </div>
            </div>
            <div class="row mb-3">
                <label for="telephone" class="col-sm-2 col-form-label"  >numero de télephone</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tel_personne" placeholder="entrer surnom, exemple: Abdl-Aziz">
                </div>
            </div>

            <div class="row mb-3">
                <label for="date_naissance" class="col-sm-2 col-form-label"  >date de naissance</label>
                <div class="col-sm-10">
                    <input type="datetime-local" name="date_naissance" id="dates">
                </div>
            </div>

            <div class="row">
                <a href="{{ route('personne physique.index') }}" class="col-auto button button-3d button-rounded button-red"><i
                        class="icon-backspace"></i>Retour
                </a>
                <button class="col-auto me-auto button button-3d button-rounded button-green" type="submit"
                    ><i class="icon-news"></i> Enregister </button>
            </div>


        </fieldset>

    </form>

@endsection
