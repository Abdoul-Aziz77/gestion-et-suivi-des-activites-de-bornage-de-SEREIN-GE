@extends('parametre')
@section('parametre')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="table-responsive">
                    <div class="row">
                        <a href="{{ route('fichier.create') }}"
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
                                <th>Id</th>
                                <th>Nom</th>
                                <th>fichier</th>
                                <th>date d'enregistrement</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fichiers as $fichier)
                                <tr>
                                    <td>{{ $fichier->id }}</td>
                                    <td><a href=" {{$fichier->fichier}} " target="blank">{{ $fichier->nom }}</a></td>
                                    <td>{{ $fichier->fichier }}</td>
                                    <td> {{ $fichier->date_enregistrement }} </td>
                                    <td>
                                        <div class="input-group mb-3">

                                            <button type="button"
                                                class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden"></span>Actions
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href=" {{ route('fichier.edit', $fichier->id) }} ">Modifier</a></li>
                                                <li><a class="dropdown-item" class="btn btn-outline-info"
                                                        href=" {{ route('fichier.show', $fichier) }} ">detaille</a></li>
                                                <li>
                                                    <form method="POST" action="{{ route('fichier.destroy', $fichier) }}">
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
    <a class="btn btn-danger btn-sm " href="{{ route('home') }}" role="button"> </a>
    <a class="btn btn-danger btn-sm " href="{{ route('parametre') }}" role="button"> retour </a>
@endsection
