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
                    <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="thead-light">
                            <tr>
                                <th>nom d'utilisateur</th>
                                <th>nom et prenom</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($utilisateurs as $utilisateur)
                                <tr>
                                    <td>{{ $utilisateur->nom_utilisateur }}</td>
                                    <td>
                                        @foreach ($personne_physiques as $personne_physique)
                                            @if ($utilisateur->personne_physique_id == $personne_physique->id)
                                                {{ $personne_physique->nom }} {{ $personne_physique->prenom }}
                                            @endif
                                        @endforeach
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
