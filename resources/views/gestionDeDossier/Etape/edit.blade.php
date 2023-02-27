@extends('racine/layourt')
@section('contenu')

    <form method="Post", action="{{route('etape.update',$etapes->id)}}">
        @csrf
        @method('PATCH')
        <fieldset><legend> Modifier l'etape de traitement de bornage </legend>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" value="{{$etapes->libelle}}" name="libelle" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">l'etape de traitement</label>
                  </div>
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" {{ isset($personne->description) ? $personne->description : old('description') }} name="description" id="floatingTextarea" style="height: 100px">{{$etapes->description}}</textarea>
                    <label for="floatingTextarea">La description de l'etape</label>
                  </div>
            <div>
                <button type="submit" class="btn btn-success">Mise à jour</button>

   <a name="" id="" class="btn btn-danger" href=" {{route('parametre')}} " role="button">Annuler</a>
              </div>

        </fieldset>

    </form>

@endsection
