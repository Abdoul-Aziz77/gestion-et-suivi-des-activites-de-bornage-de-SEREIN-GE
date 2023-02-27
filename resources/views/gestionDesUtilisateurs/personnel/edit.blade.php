@extends('racine/layourt')
@section('contenu')

<br><br>
    <form method="Post", action="{{route('personne physique.update')}}">
        @csrf
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
