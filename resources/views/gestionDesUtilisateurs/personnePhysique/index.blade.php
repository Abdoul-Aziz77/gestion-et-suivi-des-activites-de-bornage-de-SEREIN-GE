@extends('parametre')
@section('parametre')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="table-responsive">
                    <div class="row">
                        <a href="{{ route('personne physique.create') }}"
                            class="col-auto me-auto button button-3d button-rounded button-green"><i
                                class="icon-news"></i>Nouveau
                        </a>
                        <a href="{{ route('parametre') }}" class="col-auto button button-3d button-rounded button-red"><i
                                class="icon-backspace"></i>Retour
                        </a>
                    </div>
                    <div class="card-header text-center">La liste des personnes</div>
                    <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="thead-light">
                            <tr>
                                <th>Id </th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Email</th>
                                <th>Telephone</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personnes as $personne)
                                <tr>
                                    <td>{{ $personne->id }}</td>
                                    <td>{{ $personne->nom }}</td>
                                    <td>{{ $personne->prenom }}</td>
                                    <td>{{ $personne->email }}</td>
                                    <td>{{ $personne->telephone }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section><!-- #content end -->
@endsection
