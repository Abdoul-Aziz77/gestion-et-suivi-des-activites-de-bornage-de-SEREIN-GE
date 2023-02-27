@extends('racine/layourt')

@section('contenu')
    <br>
    <section id="content">

        <div class="container clearfix">
            <div class="table-responsive">


                <div class="card-header text-center">La liste des dossiers en cours</div>
                <br>
                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Réference</th>
                            <th>Client</th>
                            <th>Responsable</th>
                            <th>Date</th>
                            <th>Etape</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Réference</th>
                            <th>Client</th>
                            <th>Responsable</th>
                            <th>Date</th>
                            <th>Etape</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($dossiers as $dossier)
                        <tr>
                        @foreach ($etape_dossiers as $etape_dossier)
                        @if ($etape_dossier->id == $dossier->id)

                                @if ($etape_dossier->statut == 1)

                                <td>{{ $dossier->id }}</td>
                                <td>
                                    @foreach ($personne_physiques as $personne_physique)
                                        @if ($personne_physique->id == $dossier->id)
                                            <p>{{ $personne_physique->nom }} {{ $personne_physique->prenom }}</p>
                                        @endif
                                    @endforeach
                                </td>
                                <td> responsable </td>
                                <td> {{$dossier->date_enregistrement}} </td>
                                <td> {{$etape_dossier->Etapes->libelle}} </td>
                                @endif
                                @endif

                        @endforeach
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </section><!-- #content end -->

    @endsection
