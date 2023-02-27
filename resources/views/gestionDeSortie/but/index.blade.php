@extends('parametre')
@section('parametre')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <a href="{{ route('but.create') }}" class="button button-3d button-rounded button-green"><i
                        class="icon-news"></i>Nouveau</a>
                <div class="table-responsive">
                    <div class="row">
                        <a href="{{ route('dossier.create') }}"
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
                                <th>Le nom du but</th>
                                <th>La description du but</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buts as $but)
                                <tr>
                                    <td>{{ $but->id }}</td>
                                    <td>{{ $but->libelle }}</td>
                                    <td>{{ $but->description }}</td>
                                    <td>
                                        <div class="input-group mb-3">

                                            <button type="button"
                                                class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden"></span>Actions
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href=" {{ route('but.edit', $but->id) }} ">Modifier</a></li>
                                                <li><a class="dropdown-item" class="btn btn-outline-info"
                                                        href=" {{ route('but.show', $but->id) }} ">detaille</a></li>
                                                <li>
                                                    <form method="POST" action="{{ route('but.destroy', $but) }}">
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
