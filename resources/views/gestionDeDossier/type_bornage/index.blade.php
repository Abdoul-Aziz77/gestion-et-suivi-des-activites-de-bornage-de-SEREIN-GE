@extends('parametre')
@section('parametre')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="table-responsive">
                    <div class="row">
                        <a href="{{ route('type de bornage.create') }}"
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
                                <th>Le nom du type de bornage</th>
                                <th>La description du type de bornage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($typebornages as $type_bornage)
                                <tr>
                                    <td>{{ $type_bornage->id }}</td>
                                    <td>{{ $type_bornage->libelle }}</td>
                                    <td>{{ $type_bornage->description }}</td>
                                    <td>
                                        <div class="input-group mb-3">

                                            <button type="button"
                                                class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden"></span>Actions
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item"
                                                        href=" {{ route('type de bornage.edit', $type_bornage->id) }} ">Modifier</a>
                                                </li>
                                                <li><a class="dropdown-item" class="btn btn-outline-info"
                                                        href=" {{ route('type de bornage.show', $type_bornage) }} ">detaille</a>
                                                </li>
                                                <li>
                                                    <form method="POST"
                                                        action="{{ route('type de bornage.destroy', $type_bornage) }}">
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
