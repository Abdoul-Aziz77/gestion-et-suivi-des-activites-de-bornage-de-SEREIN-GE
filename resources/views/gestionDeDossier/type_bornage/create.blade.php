@extends('racine/layourt')
@section('contenu')

<form method="Post", action="{{route('type de bornage.store')}}">
    @csrf
    <fieldset><legend> Ajouter un type de bornage  </legend>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="libelle" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">type de bornage</label>
              </div>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" name="description" id="floatingTextarea" style="height: 100px"></textarea>
                <label for="floatingTextarea">La description du type de bornage</label>
              </div>
        <div>
            <button type="submit" class="btn btn-success">Enregistrer</button>

<a name="" id="" class="btn btn-danger" href=" {{route('home')}} " role="button">Annuler</a>
          </div>

    </fieldset>

</form>

@endsection
