@extends('racine/layourt')
@section('contenu')

<form method="Post", action="{{route('but.store')}}">
    @csrf
    <fieldset><legend> ajouter un but  </legend>


            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="libelle" id="floatingInput" placeholder="le libelle ">
                <label for="floatingInput">le but</label>
              </div>
              <div class="form-floating">
                <textarea class="form-control" placeholder="la description du but" name="description" id="floatingTextarea" style="height: 100px"></textarea>
                <label for="floatingTextarea">La description du but</label>
              </div>
        <div>
            <button type="submit" class="btn btn-success">Enregistrer</button>

<a name="" id="" class="btn btn-danger" href=" {{route('parametre')}} " role="button">Annuler</a>
          </div>

    </fieldset>

</form>

@endsection
