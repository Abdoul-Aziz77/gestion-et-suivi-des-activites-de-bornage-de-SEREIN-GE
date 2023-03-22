@extends('racine/layourt')
@section('contenu')
    {{-- <p> {{ $dossiers->libelle }} </p> --}}
    {{-- <p> {{ $dossiers->type_bornage_id }} </p> --}}


    <div class="tabs tabs-alt clearfix ui-tabs ui-corner-all ui-widget ui-widget-content" id="tabs-profile">

        <ul class="tab-nav clearfix ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header"
            role="tablist">
            <li role="tab" tabindex="0"
                class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active"
                aria-controls="tab-feeds" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a
                    href="#tab-feeds" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1"><i
                        class="icon-rss2"></i>Tache</a></li>

            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="tab-posts" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a
                    href="#tab-posts" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-2"><i
                        class="icon-pencil2"></i> Les observations</a></li>

            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="commentaires" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false"><a
                    href="#commentaires" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3"><i
                        class="icon-reply"></i> les commentaires</a></li>

            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="tab-connections" aria-labelledby="ui-id-4" aria-selected="false" aria-expanded="false"><a
                    href="#tab-connections" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4"><i
                        class="icon-users"></i> L'equipe de travail</a></li>

            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="tab-connections" aria-labelledby="ui-id-5" aria-selected="false" aria-expanded="false"><a
                    href="#tab-parcelles" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-5"><i
                        class="icon-users"></i> Les parcelles</a></li>

            <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                aria-controls="tab-connections" aria-labelledby="ui-id-6" aria-selected="false" aria-expanded="false"><a
                    href="#tab-connections" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4"><i
                        class="icon-users"></i> Les fichiers</a></li>
        </ul>

        <div class="tab-container">

            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-feeds"
                aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false" style="">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>tache</th>
                            <th>Réaliser</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($etapes as $etape )
                        <tr>
                        @foreach ($etape_dossiers as $etape_dossier )
                        @if ($etape->id==$etape_dossier->etapes_id)
                        <td>
                            {{$etape->libelle}}
                        </td>
                        @endif

                            @endforeach
                        </tr>
                        @endforeach
                        {{--
                        @foreach ($etapes as $etape )
                        @foreach ($etape_dossiers as $etape_dossier )
                        <tr>

                        @if ($etape->id!==$etape_dossier->etapes_id)

                        @endif
                            @endforeach
                        </tr>
                        @endforeach --}}

                    </tbody>
                </table>

            </div>


            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-posts"
                aria-labelledby="ui-id-2" role="tabpanel" aria-hidden="true" style="display: none;">

                <!-- observation
                                ============================================= -->


                @foreach ($observations as $observation)

                        <div class="card">
                            <div class="card-header"><strong>Poster par : <a href="#">MONE</a></strong></div>
                            <div class="card-body">
                                {{ $observation->contenu }}
                            </div>
                        </div>
                        <br>

                @endforeach


            </div>


            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="commentaires"
                aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
 <p> un commentaire</p>

                @foreach ($commentaires as $commentaire)
                        <div class="clear topmargin-sm"></div>
                        <ol class="commentlist border-0 m-0 p-0 clearfix">
                            <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1"
                                id="li-comment-2">
                                <div class="comment-wrap clearfix">

                                    <div class="comment-content clearfix">
                                        <div class="comment-author"><a href="#" rel="external nofollow"
                                                class="#{{-- url --}}">MONE : {{ $commentaire->utilisateur_id }}
                                            </a><span><a href="#" title="Permalink to this comment">
                                                    {{ $commentaire->date_enregistrement }} </a></span></div>

                                        <p> {{ $commentaire->contenu }} </p>

                                        <a class="comment-reply-link" href="#"><i class="icon-reply"></i></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </li>
                        </ol>
                @endforeach
            </div>
            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-parcelles"
                aria-labelledby="ui-id-5" role="tabpanel" aria-hidden="true" style="display: none;">
                <p>une parcelle</p>

                        <div class="clear topmargin-sm"></div>
                        <ol class="commentlist border-0 m-0 p-0 clearfix">
                            <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1"
                                id="li-comment-2">
                                <div class="comment-wrap clearfix">

                                    <section id="content">
                                        <div class="content-wrap">
                                            <div class="container clearfix">
                                                <div class="table-responsive">

                                                    <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Le lot de la parcelle</th>
                                                                <th>La section</th>
                                                                <th>la superficie</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($parcelles as $parcelle)
                                                                <tr>
                                                                    <td>{{ $parcelle->id }}</td>
                                                                    <td>{{ $parcelle->lot }}</td>
                                                                    <td>{{ $parcelle->section }}</td>
                                                                    <td> {{ $parcelle->superficie }} </td>
                                                                    <td>
                                                                        <div class="input-group mb-3">

                                                                            <button type="button"
                                                                                class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                                <span class="visually-hidden"></span>Actions
                                                                            </button>
                                                                            <ul class="dropdown-menu">
                                                                                <li><a class="dropdown-item"
                                                                                        href=" {{ route('parcelle.edit', $parcelle->id) }} ">Modifier</a>
                                                                                </li>
                                                                                <li><a class="dropdown-item" class="btn btn-outline-info"
                                                                                        href=" {{ route('parcelle.show', $parcelle->id) }} ">detaille</a></li>
                                                                                <li>
                                                                                    <form method="POST"
                                                                                        action="{{ route('parcelle.destroy', $parcelle->id) }}">
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
                                    </section>
                                    <div class="clear"></div>
                                </div>
                            </li>
                        </ol>

            </div>
            <div class="tab-content clearfix ui-tabs-panel ui-corner-bottom ui-widget-content" id="tab-connections"
                aria-labelledby="ui-id-6" role="tabpanel" aria-hidden="true" style="display: none;">

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
                                                    href=" {{ route('fichier.show', $fichier->id) }} ">detaille</a></li>
                                            <li>
                                                <form method="POST" action="{{ route('fichier.destroy', $fichier->id) }}">
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
@endsection
