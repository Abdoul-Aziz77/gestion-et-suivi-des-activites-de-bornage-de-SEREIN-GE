@extends('racine/layourt')
@section('contenu')

<form method="Post", action="{{route('but.update',$buts->id)}}">
    @csrf
    @csrf
    @method('PATCH')
    <fieldset><legend> Modifier le but </legend>


            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="libelle" value=" {{ $buts->libelle }} " id="floatingInput" placeholder=" libelle">
                <label for="floatingInput">type de bornage</label>
              </div>
              <div class="form-floating">
                <textarea class="form-control" placeholder=" La description " name="description" id="floatingTextarea" style="height: 100px"> {{$buts->description}} </textarea>
                <label for="floatingTextarea">La description du type</label>
              </div>
        <div>
            <button type="submit" class="btn btn-success">Enregistrer</button>

<a name="" id="" class="btn btn-danger" href=" {{route('parametre')}} " role="button">Annuler</a>
          </div>

    </fieldset>

</form>

@endsection
