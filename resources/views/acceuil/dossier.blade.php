@extends('racine/layourt')

@section('contenu')
    <br>
    {{ $hniveau }}
    <div class="tabs tabs-alt clearfix ui-tabs ui-corner-all ui-widget ui-widget-content" id="tabs-profile">

        <ul class="tab-nav clearfix ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header"
            role="tablist">
            <li role="tab" tabindex="0"
                class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active"
                aria-controls="tab-feeds" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a
                    href="#tab-feeds" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1"><i
                        class="icon-et-book-open"></i>Tous</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="tab-posts" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a
                    href="#tab-posts" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-2"><i
                        class="icon-pencil2"></i> Dossier en cours</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="tab-replies" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a
                    href="#tab-replies" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3"><i
                        class="icon-ok-circle"></i> Dossier finaliser</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="tab-connections" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false"><a
                    href="#tab-connections" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4"><i
                        class="icon-users"></i> Dossier annuler</a></li>
            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="tab-suspend" aria-labelledby="ui-id-5" aria-selected="false" aria-expanded="false"><a
                    href="#tab-suspend" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4"><i
                        class="icon-stop-circle1"></i> Dossier suspendu</a></li>

        </ul>

        <div class="tab-container">

            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-feeds"
                aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="">

                <div class="table-responsive">

                    <div class="card-header text-center">La liste de tous les dossiers</div>
                    <br>
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                    <td>{{ $dossier->id }}</td>
                                    <td>
                                        @foreach ($personne_physiques as $personne_physique)
                                            @if ($personne_physique->id == $dossier->id)
                                                <p>{{ $personne_physique->nom }} {{ $personne_physique->prenom }}</p>
                                            @endif
                                        @endforeach
                                    </td>
                                    <td> responsable </td>
                                    <td> {{ $dossier->date_enregistrement }} </td>
                                    <td>
                                        @foreach ($etape_dossiers as $etape_dossier)
                                            @if ($etape_dossier->id == $dossier->id)
                                                <p>
                                                    @if ($etape_dossier->statut == 1)
                                                        <p>cours ...</p>
                                                    @else
                                                        <p>arrêter!</p>
                                                    @endif
                                                </p>
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-posts"
                aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="false" style="">

                <div class="table-responsive">

                    <div class="card-header text-center">La liste des dossiers en cours</div>
                    <br>
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                            
                                                <td>{{ $dossier->id }}</td>
                                                <td>
                                                    @foreach ($personne_physiques as $personne_physique)
                                                        @if ($personne_physique->id == $dossier->id)
                                                            <p>{{ $personne_physique->nom }}
                                                                {{ $personne_physique->prenom }}</p>
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td> responsable </td>
                                                <td> {{ $dossier->date_enregistrement }} </td>
                                                <td> {{ $etape_dossier->Etapes->libelle }} </td>
                                            
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-replies"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="false" style="">

                <div class="table-responsive">

                    <div class="card-header text-center">La liste des dossiers finaliser</div>
                    <br>
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                        @if ($etape_dossier->id == $dossier->id and $etape_dossier->Etapes->niveau == $hniveau)
                                            <td>{{ $dossier->id }}</td>
                                            <td>
                                                @foreach ($personne_physiques as $personne_physique)
                                                    @if ($personne_physique->id == $dossier->id)
                                                        <p>{{ $personne_physique->nom }} {{ $personne_physique->prenom }}
                                                        </p>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td> responsable </td>
                                            <td> {{ $dossier->date_enregistrement }} </td>
                                            <td> {{ $etape_dossier->Etapes->libelle }} </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-connections"
                aria-labelledby="ui-id-4" role="tabpanel" aria-hidden="false" style="">

                <div class="table-responsive">

                    <div class="card-header text-center">La liste des dossiers annuler</div>
                    <br>
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                        @if ($etape_dossier->id == $dossier->id and $etape_dossier->Etapes->niveau == 0)
                                            <td>{{ $dossier->id }}</td>
                                            <td>
                                                @foreach ($personne_physiques as $personne_physique)
                                                    @if ($personne_physique->id == $dossier->id)
                                                        <p>{{ $personne_physique->nom }} {{ $personne_physique->prenom }}
                                                        </p>
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td> responsable </td>
                                            <td> {{ $dossier->date_enregistrement }} </td>
                                            <td> {{ $etape_dossier->Etapes->libelle }} </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-suspend"
                aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="false" style="">

                <div class="table-responsive">

                    <div class="card-header text-center">La liste des dossiers suspendu</div>
                    <br>
                    <table class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                                            <p>{{ $personne_physique->nom }}
                                                                {{ $personne_physique->prenom }}</p>
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td> responsable </td>
                                                <td> {{ $dossier->date_enregistrement }} </td>
                                                <td> {{ $etape_dossier->Etapes->libelle }} </td>
                                            @endif
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection
