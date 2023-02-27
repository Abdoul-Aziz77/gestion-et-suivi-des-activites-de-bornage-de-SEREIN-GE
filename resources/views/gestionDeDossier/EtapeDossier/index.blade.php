@extends('parametre')
@section('parametre')
    <div class="table-responsive">

        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="table-responsive">
                        <div class="row">
                            <a href="{{ route('etape dossier.create') }}"
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
                                    <th>Statut</th>
                                    <th>date d'enregistrement</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($etape_dossiers as $etape_dossier)
                                    <tr>
                                        <td>{{ $etape_dossier->id }}</td>
                                        <td>{{ $etape_dossier->statut }}</td>
                                        <td> {{ $etape_dossier->date_realisation }} </td>
                                        <td>
                                            <div class="input-group mb-3">

                                                <button type="button"
                                                    class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden"></span>Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href=" {{ route('etape dossier.edit', $etape_dossier) }} ">Modifier</a>
                                                    </li>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li><a class="dropdown-item" class="btn btn-outline-info"
                                                            href=" {{ route('etape dossier.show', $etape_dossier->id) }} ">detaille</a>
                                                    </li>
                                                    <li>
                                                        <form method="POST"
                                                            action="{{ route('etape dossier.destroy', $etape_dossier->id) }}">
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
    </div>

    <a class="btn btn-danger btn-sm " href="{{ route('parametre') }}" role="button"> retour </a>
@endsection
