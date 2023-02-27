@extends('parametre')
@section('parametre')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="table-responsive">
                    <div class="row">
                        <a href="{{ route('adresse.create') }}"
                            class="col-auto me-auto button button-3d button-rounded button-green"><i
                                class="icon-news"></i>Nouveau
                        </a>
                        <a href="{{ route('parametre') }}" class="col-auto button button-3d button-rounded button-red"><i
                                class="icon-backspace"></i>Retour
                        </a>
                    </div>
                    <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="thead-light">
                            <tr>
                                <th>Le pays</th>
                                <th>La ville</th>
                                <th>Le code postale</th>
                                <th>Le quartier</th>
                                <th>Le secteur</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($adresses as $adresse)
                                <tr>
                                    <td>{{ $adresse->pays }}</td>
                                    <td>{{ $adresse->ville }}</td>
                                    <td>{{ $adresse->code_postale }}</td>
                                    <td>{{ $adresse->quartier }}</td>
                                    <td> {{ $adresse->secteur }} </td>
                                    <td>
                                        <div class="input-group mb-3">

                                            <button type="button"
                                                class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden"></span>Actions
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href=" {{ route('adresse.edit', $adresse->id) }} ">Modifier</a></li>
                                                <li><a class="dropdown-item" class="btn btn-outline-info"
                                                        href=" {{ route('adresse.show', $adresse->id) }} ">detaille</a></li>
                                                <li>
                                                    <form method="POST" action="{{ route('adresse.destroy', $adresse) }}">
                                                        <!-- CSRF token -->
                                                        @csrf
                                                        <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                                        @method('DELETE')
                                                        <input type="submit" value="Supprimer">
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section><!-- #content end -->
@endsection
