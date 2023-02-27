@extends('racine/layourt')
@section('contenu')

    <form method="Post", action="{{route('etape.store')}}">
        @csrf

        <fieldset><legend> Ajouter une etape de traitement de dossier de bornage </legend>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="libelle" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">etape de traitement</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="niveau" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Niveau</label>
              </div>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" name="description" id="floatingTextarea" style="height: 100px"></textarea>
                <label for="floatingTextarea">La description de l'etape de traitement de bornage</label>
              </div>
              <br>
              <div>
                <button type="submit" class="btn btn-success">Enregistrer</button>

   <a name="" id="" class="btn btn-danger" href=" {{route('etape.index')}} " role="button">Annuler</a>
              </div>

        </fieldset>

    </form>

@endsection
