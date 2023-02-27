@extends('parametre')
@section('parametre')
    <br>
    <section id="content">
        <div class="container clearfix">
            <div class="table-responsive">
                <div class="row">
                    <a href="{{ route('observation.create') }}"
                        class="col-auto me-auto button button-3d button-rounded button-green"><i class="icon-news"></i>Nouveau
                    </a>
                    <a href="{{ route('parametre') }}" class="col-auto button button-3d button-rounded button-red"><i
                            class="icon-backspace"></i>Retour
                    </a>
                </div>
                <div class="card-header text-center">Les observations</div>
                <br>
                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead class="thead-light">
                        <tr>
                            <th>Id</th>
                            <th>La date de l'observation</th>
                            <th>Le commentaire</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($observations as $observation)
                            <tr>
                                <td>{{ $observation->id }}</td>
                                <td>{{ $observation->date_observation }}</td>
                                <td>{{ $observation->contenu }}</td>
                                <td>
                                    <div class="input-group mb-3">

                                        <button type="button"
                                            class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden"></span>Actions
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href=" {{ route('observation.edit', $observation) }} ">Modifier</a>
                                            </li>
                                            <li><a class="dropdown-item" class="btn btn-outline-info"
                                                    href=" {{ route('observation.show', $observation) }} ">detaille</a>
                                            </li>
                                            <li>
                                                <form method="POST"
                                                    action="{{ route('observation.destroy', $observation) }}">
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
    </section><!-- #content end -->
    <a class="btn btn-danger btn-sm " href="{{ route('parametre') }}" role="button"> retour </a>
@endsection
