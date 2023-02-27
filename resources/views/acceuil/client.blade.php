@extends('racine/layourt')

@section('contenu')
<br>
<section id="content">

    <div class="container clearfix">
        <div class="table-responsive">

            <div class="card-header text-center">La liste des clients</div>
            <br>
            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
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
