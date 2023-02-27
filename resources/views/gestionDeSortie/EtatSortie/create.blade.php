@extends('racine/layourt')
@section('contenu')

<form method="Post", action="{{route('etape.store')}}">
    @csrf
    <fieldset><legend> Ajouter un etat de sortie de terrain </legend>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="libelle" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">l'etat de sortie de terrain</label>
              </div>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" name="description" id="floatingTextarea" style="height: 100px"></textarea>
                <label for="floatingTextarea">La description de la sortie de tarrain</label>
              </div>
        <div>
            <button type="submit" class="btn btn-success">Enregistrer</button>

<a name="" id="" class="btn btn-danger" href=" {{route('home')}} " role="button">Annuler</a>
          </div>

    </fieldset>

</form>

@endsection
