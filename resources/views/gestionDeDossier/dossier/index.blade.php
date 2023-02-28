@extends('parametre')
@section('parametre')
    <br>
    <section id="content">

        <div class="container clearfix">
            <div class="table-responsive">
                <div class="row">
                    <button class="col-auto me-auto button button-3d button-rounded button-green" data-toggle="modal"
                        data-target="#myModal1"><i class="icon-news"></i> Nouveau</button>

                    <a href="{{ route('parametre') }}" class="col-auto button button-3d button-rounded button-red"><i
                            class="icon-backspace"></i>Retour
                    </a>
                </div>
                <div class="card-header text-center">La liste des dossiers</div>
                <br>
                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>id dossier</th>
                            <th>Date d'enregistrement</th>
                            <th>Date d'affection</th>
                            <th>client</th>
                            <th>Responsable</th>
                            <th>Etat</th>
                            <th>Action</th>
                            <th>Plus</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id dossier</th>
                            <th>Date d'enregistrement</th>
                            <th>Date d'affection</th>
                            <th>client</th>
                            <th>Responsable</th>
                            <th>Etape</th>
                            <th>Action</th>
                            <th>Plus</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($dossiers as $dossier)
                            <tr>
                                <td>{{ $dossier->id }}</td>
                                <td> {{ $dossier->date_enregistrement }} </td>
                                <td> {{ $dossier->date_enregistrement }} </td>
                                <td>
                                    @foreach ($personne_physiques as $personne_physique)
                                        @if ($personne_physique->id == $dossier->id)
                                            <p>{{ $personne_physique->nom }} {{ $personne_physique->prenom }}</p>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($personne_physiques as $personne_physique)
                                        @if ($personne_physique->id == $dossier->id)
                                            <p>{{ $personne_physique->nom }} {{ $personne_physique->prenom }}</p>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ($etape_dossiers as $etape_dossier)
                                        @if ($etape_dossier->id == $dossier->id)
                                            {{ $etape_dossier->Etapes->libelle }}
                                        @endif
                                    @endforeach
                                </td>

                                <td>
                                    <div class="input-group mb-3">

                                        <button type="button"
                                            class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden"></span>Actions
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Affecter le dossier</a></li>
                                            <li><a class="dropdown-item " data-toggle="modal" data-target="#myModal3"
                                                    href="#{{-- {{ route('commentaire dossier.create') }} --}}">Commentaire</a></li>
                                            <li><a class="dropdown-item" data-toggle="modal" data-target="#myModal2"
                                                    href="#{{-- {{ route('observation.create') }} --}}">Faire une
                                                    observation</a></li>
                                            <li><a class="dropdown-item" data-toggle="modal" data-target="#myModal4"
                                                    href="#{{-- {{ route('etape dossier.create') }} --}}">Changer
                                                    l'étape du dossier</a></li>
                                            <li><a class="dropdown-item" data-toggle="modal" data-target="#myModal6"
                                                    href="#"> programmer une sortie</a></li>
                                            {{--                       <li><a class="dropdown-item" href="#">Arrêter le dossier</a></li>
 --}}
                                            <li><a class="dropdown-item" data-toggle="modal" data-target="#myModal5"
                                                    href="#"> Ajouer une parcelle</a></li>

                                        </ul>
                                    </div>
                                    {{-- changer l'etape d'un dossier --}}
                                    <div class="modal fadeInDown dark fast undefined animated" id="myModal4" tabindex="-1"
                                        role="dialog" aria-labelledby="myModalLabel " aria-hidden="true">
                                        <div class="modal-dialog modal-lg ">
                                            <div class="modal-body "style="background-color: #2f3542;">
                                                <div class="modal-content" style="background-color: #2f3542;">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title " id="myModalLabel"> <span> Ajout d'un
                                                                nouveau etape au dossier</span>
                                                        </h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="Post", action="{{ route('etape dossier.store') }}">
                                                            @csrf
                                                            <div class="row mb-3">
                                                                <label for="nom"
                                                                    class="col-sm-2 col-form-label">etape</label>

                                                                <select class="form-select" name="etapes_id"
                                                                    aria-label="Default select example">
                                                                    <option selected>choisissez l'etape correspondant
                                                                    </option>
                                                                    @foreach ($etapes as $etape)
                                                                        <option value="{{ $etape->id }}">
                                                                            {{ $etape->libelle }}</option>
                                                                    @endforeach
                                                                    {{-- @foreach ($etape_dossiers as $etape_dossier)
                                                                        @if ($dossier->id === $etape_dossier->dossier_id)
                                                                            @foreach ($etapes as $etape)
                                                                                @if ($etape_dossier->etapes_id === $etape->id)
                                                                                    <?php

                                                                                    $niveau = $etape->niveau;
                                                                                    ?>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                                    @endforeach
                                                                    @foreach ($etapes as $etape)
                                                                        @if ($etape->niveau > $niveau)
                                                                            <option value="{{ $etape->id }}">
                                                                                {{ $etape->libelle }}</option>
                                                                        @endif
                                                                    @break
                                                                @endforeach --}}

                                                                </select>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="nom"
                                                                    class="col-sm-2 col-form-label">Dossier</label>

                                                                <select class="form-select" name="dossier_id"
                                                                    aria-label="Default select example">


                                                                    <option value="{{ $dossier->id }}">
                                                                        {{ $dossier->personne_physiques }}


                                                                </select>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="surnom"
                                                                    class="col-sm-2 col-form-label">fini</label>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="statut" id="inlineRadio1" value="1">
                                                                    <label class="form-check-label"
                                                                        for="inlineRadio1">oui</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="statut" id="inlineRadio2" value="2">
                                                                    <label class="form-check-label"
                                                                        for="inlineRadio2">non</label>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="surnom" class="col-sm-2 col-form-label">date
                                                                    de realisation</label>
                                                                <div class="col-sm-10">
                                                                    <input type="datetime-local" name="date_realisation"
                                                                        id="dates">
                                                                </div>
                                                            </div>
                                                            <div class="row modal-footer">
                                                                <button type="submit"
                                                                    class="col-auto me-auto button button-3d button-rounded button-green"><i
                                                                        class="icon-save1"></i>Enregistrer</button>
                                                                <button type="button"
                                                                    class="col-auto button button-3d button-rounded button-red"
                                                                    data-dismiss="modal"><i
                                                                        class="icon-backspace"></i>fermer</button>
                                                            </div>



                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </td>
                                <td>
                                    <a class="dropdown-item" href="{{ route('dossier.show', $dossier) }}">detail</a>
                                </td>

                                {{-- Ajouter un nouveau parcelle --}}
                                <div class="modal fadeInDown dark fast undefined animated" id="myModal5"
                                tabindex="-1" role="dialog" aria-labelledby="myModalLabel "
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg ">
                                    <div class="modal-body "style="background-color: #2f3542;">
                                        <div class="modal-content" style="background-color: #2f3542;">
                                            <div class="modal-header">
                                                <h4 class="modal-title " id="myModalLabel"> <span> Ajoute d'un parcelle </span>
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">

                                                <form method="Post", action="{{ route('adresse.store') }}">
                                                    @csrf



                                                    <fieldset>
                                                        <legend>  </legend>

                                                        <div class="row mb-3">
                                                            <label for="dossier"
                                                                class="col-sm-2 col-form-label">dossier</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="dossier_id"
                                                                    value=" {{ $dossier->id }} "
                                                                    placeholder=" {{ $dossier->type_bornage_id }}.{{ $dossier->personne_morale_id }}.{{ $dossier->id }} ">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="nom"
                                                                class="col-sm-2 col-form-label">le propriétaire
                                                                de la parcelle</label>

                                                            <select class="form-select" name="dossier_id"
                                                                aria-label="Default select example">
                                                                <option selected>choisissez le proprietaire
                                                                </option>

                                                                @foreach ($personne_physiques as $personne_physique)
                                                                    <option
                                                                        value="{{ $personne_physique->id }}">
                                                                        {{ $personne_physique->nom }}
                                                                        {{ $personne_physique->prenom }}
                                                                    </option>
                                                                @endforeach
                                                                @foreach ($personne_morales as $personne_morale)
                                                                    <option
                                                                        value="{{ $personne_morale->id }}">
                                                                        {{ $personne_morale->numero_recipicer }}:
                                                                        {{ $personne_morale->email }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="row mb-3">
                                                            <label for="lot"
                                                                class="col-sm-2 col-form-label">lot</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    name="lot"
                                                                    placeholder="entrer lot, exemple: Abdl-Aziz">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="section"
                                                                class="col-sm-2 col-form-label">section</label>
                                                            <input type="text" name="section"
                                                                id="section">
                                                        </div>

                                                        <div class="row mb-3">
                                                            <label for="lot"
                                                                class="col-sm-2 col-form-label">superficie</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" name="superficie"
                                                                    id="superficie">
                                                            </div>
                                                        </div>
                                                        <div class="row modal-footer">
                                                            <button type="submit"
                                                                class="col-auto me-auto button button-3d button-rounded button-green"><i
                                                                    class="icon-save1"></i>Enregistrer</button>
                                                            <button type="button"
                                                                class="col-auto button button-3d button-rounded button-red"
                                                                data-dismiss="modal"><i
                                                                    class="icon-backspace"></i>fermer</button>
                                                        </div>

                                                    </fieldset>

                                                </form>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href=" {{ route('dossier.create') }} ">dossier</a>

            </div>

        </div>

        {{-- enregistrement d'un dossier --}}
        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-body ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center" id="myModalLabel">Enregistrer un nouveau dossier </h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="Post", action="{{ route('dossiers.store') }}">
                                @csrf

                                {{--
                                    choix multiple
                                    <div class="col-lg-6 bottommargin-sm">
									<div class="white-section">
										<label>Live Search:</label>
										<select class="selectpicker" multiple data-live-search="true">
											<option>Mustard</option>
											<option>Ketchup</option>
											<option>Relish</option>
										</select>
									</div>
								</div> --}}
                                <div class="col-lg-6 bottommargin-sm">
                                    <div class="white-section">
                                        <label>choisir un client:</label>
                                        <select class="selectpicker" name="personne_physique_id" data-live-search="true">
                                            @foreach ($personne_physiques as $personne_physique)
                                                <option value=" {{ $personne_physique->id }} "
                                                    data-tokens="ketchup mustard">
                                                    {{ $personne_physique->nom }} {{ $personne_physique->prenom }}
                                                </option>
                                            @endforeach

                                        </select>
                                        <a href="{{ route('personne physique.create') }}"
                                            class="button button-circle button-green"><i class="icon-plus-sign2"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label>situation:</label>
                                    <input type="text" name="situation" id="situation" class="form-control"
                                        value="" placeholder="Entrer la localisation du site">
                                </div>
                                <div class="row">
                                    <a href="#{{-- {{ route('dossier.index') }} --}}"
                                        class="col-auto button button-3d button-rounded button-red"><i
                                            class="icon-backspace"></i>Retour
                                    </a>
                                    <button class="col-auto me-auto button button-3d button-rounded button-green"
                                        type="submit"><i class="icon-news"></i> Enregister </button>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- enregistrer une observation --}}
        <div class="modal zoomIn faster mx-auto undefined animated" id="myModal2" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-body ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center" id="myModalLabel">Enregistrer un nouveau dossier </h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="Post", action="{{ route('observation.store') }}">
                                @csrf
                                {{-- <div class="row mb-3">
                                    <label for="nom" class="col-sm-2 col-form-label">Dossier</label>

                                    <select class="form-select" name="dossier_id" aria-label="Default select example">



                                        <option value="{{ $dossier->id }}">{{ $dossier->libelle }}</option>

                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <label for="nom" class="col-sm-2 col-form-label">Personnel</label>

                                    <select class="form-select" name="personnel_id" aria-label="Default select example">
                                        <option selected>choisissez le personnel correspondant</option>

                                        @foreach ($personnels as $personnel)
                                            <option value="{{ $personnel->id }}">{{ $personnel->matricule }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                {{-- <div class="row mb-3">
                                    <label>Additional Notes:</label>
                                    <textarea name="freelance-quote-additional-notes" id="freelance-quote-additional-notes" class="form-control" cols="30" rows="8" style="display: none;" aria-hidden="true"></textarea><div role="application" class="tox tox-tinymce" style="visibility: hidden; height: 206px;"><div class="tox-editor-container"><div data-alloy-vertical-dir="toptobottom" class="tox-editor-header"><div role="group" class="tox-toolbar-overlord" aria-disabled="false"><div role="group" class="tox-toolbar__primary"><div title="history" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Undo" title="Undo" type="button" tabindex="-1" class="tox-tbtn valid tox-tbtn--disabled" aria-disabled="true"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M6.4 8H12c3.7 0 6.2 2 6.8 5.1.6 2.7-.4 5.6-2.3 6.8a1 1 0 01-1-1.8c1.1-.6 1.8-2.7 1.4-4.6-.5-2.1-2.1-3.5-4.9-3.5H6.4l3.3 3.3a1 1 0 11-1.4 1.4l-5-5a1 1 0 010-1.4l5-5a1 1 0 011.4 1.4L6.4 8z" fill-rule="nonzero"></path></svg></span></button><button aria-label="Redo" title="Redo" type="button" tabindex="-1" class="tox-tbtn valid" aria-disabled="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M17.6 10H12c-2.8 0-4.4 1.4-4.9 3.5-.4 2 .3 4 1.4 4.6a1 1 0 11-1 1.8c-2-1.2-2.9-4.1-2.3-6.8.6-3 3-5.1 6.8-5.1h5.6l-3.3-3.3a1 1 0 111.4-1.4l5 5a1 1 0 010 1.4l-5 5a1 1 0 01-1.4-1.4l3.3-3.3z" fill-rule="nonzero"></path></svg></span></button></div><div title="styles" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button title="Formats" aria-label="Formats" aria-haspopup="true" type="button" unselectable="on" tabindex="-1" class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke valid" aria-expanded="false" style="user-select: none;"><span class="tox-tbtn__select-label">Paragraph</span><div class="tox-tbtn__select-chevron"><svg width="10" height="10"><path d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z" fill-rule="nonzero"></path></svg></div></button></div><div title="formatting" role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="Bold" title="Bold" type="button" tabindex="-1" class="tox-tbtn valid" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z" fill-rule="evenodd"></path></svg></span></button><button aria-label="Italic" title="Italic" type="button" tabindex="-1" class="tox-tbtn valid" aria-disabled="false" aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z" fill-rule="evenodd"></path></svg></span></button></div><div role="toolbar" data-alloy-tabstop="true" tabindex="-1" class="tox-toolbar__group"><button aria-label="More..." title="More..." aria-haspopup="true" type="button" data-alloy-tabstop="true" tabindex="-1" class="tox-tbtn" aria-expanded="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"><path d="M6 10a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2zm12 0a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2zm-6 0a2 2 0 00-2 2c0 1.1.9 2 2 2a2 2 0 002-2 2 2 0 00-2-2z" fill-rule="nonzero"></path></svg></span></button></div></div></div><div class="tox-anchorbar"></div></div><div class="tox-sidebar-wrap"><div class="tox-edit-area"><iframe id="freelance-quote-additional-notes_ifr" frameborder="0" allowtransparency="true" title="Rich Text Area. Press ALT-0 for help." class="tox-edit-area__iframe"></iframe></div><div role="complementary" class="tox-sidebar"><div data-alloy-tabstop="true" tabindex="-1" class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;"><div class="tox-sidebar__pane-container"></div></div></div></div></div><div class="tox-statusbar"><div class="tox-statusbar__text-container"><div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path" aria-disabled="false"><div role="button" data-index="0" tab-index="-1" aria-level="1" tabindex="-1" class="tox-statusbar__path-item" aria-disabled="false">p</div></div><span class="tox-statusbar__branding"><a href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5" rel="noopener" target="_blank" tabindex="-1" aria-label="Powered by Tiny">Powered by Tiny</a></span></div><div title="Resize" aria-hidden="true" class="tox-statusbar__resize-handle"><svg width="10" height="10"><g fill-rule="nonzero"><path d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z"></path></g></svg></div></div><div aria-hidden="true" class="tox-throbber" style="display: none;"></div></div>
                                </div> --}}
                                <div class="row mb-3">
                                    <label for="contenu" class="col-sm-2 col-form-label">Le contenu de
                                        l'observation</label>
                                    <textarea class="form-control" placeholder="ajouter une observation" name="contenu" id="contenu"
                                        style="height: 100px"></textarea>
                                </div>
                                {{-- <div class="row mb-3">
                                    <label for="surnom" class="col-sm-2 col-form-label">date d'observation'</label>
                                    <div class="col-sm-10">
                                        <input type="datetime-local" name="date_observation" id="dates">
                                    </div>
                                </div> --}}
                                <div class="row modal-footer">
                                    <button type="submit"
                                        class="col-auto me-auto button button-3d button-rounded button-green"><i
                                            class="icon-save1"></i> Enregistrer </button>
                                    <button type="button" class="col-auto button button-3d button-rounded button-red"
                                        data-dismiss="modal"><i class="icon-backspace"></i>fermer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- enregistrer un commentaire --}}
        <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-body ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center" id="myModalLabel">Enregistrer un nouveau dossier </h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">

                            <form method="Post", action="{{ route('commentaire dossier.store') }}">
                                @csrf

                                <div class="text-center"> Ajout d'un commentaire sur le dossier </div>
                                {{--  <div class="row mb-3">
                                    <label for="nom" class="col-sm-2 col-form-label">Dossier</label>

                                    <select class="form-select" name="dossier_id" aria-label="Default select example">


                                        <option value="{{ $dossier->id }}">{{ $dossier->libelle }}</option>

                                    </select>
                                </div> --}}
                                {{-- <div class="row mb-3">
                                    <label for="nom" class="col-sm-2 col-form-label">utilisateur</label>
                                    <select class="form-select" name="utilisateur_id" aria-label="Default select example">
                                        <option selected>choisissez l'utilisateur correspondant</option>
                                        @foreach ($utilisateurs as $utilisateur)
                                            <option value="{{ $utilisateur->id }}">
                                                {{ $utilisateur->nom_utilisateur }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div> --}}
                                <div class="row mb-3">
                                    <label for="contenu">Ajout de commentaire</label>
                                    <textarea class="form-control" placeholder="Ajout de commentaire" name="contenu" id="contenu"
                                        style="height: 100px"></textarea>
                                </div>
                                {{-- <div class="row mb-3">
                                    <label for="surnom" class="col-sm-2 col-form-label">date du commentaire'</label>
                                    <div class="col-sm-10">
                                        <input type="datetime-local" name="date_enregistrement" id="dates">
                                    </div>
                                </div> --}}
                                <div class="row modal-footer">
                                    <button type="submit"
                                        class="col-auto me-auto button button-3d button-rounded button-green"><i
                                            class="icon-save1"></i>Enregistrer</button>
                                    <button type="button" class="col-auto button button-3d button-rounded button-red"
                                        data-dismiss="modal"><i class="icon-backspace"></i>fermer</button>
                                </div>




                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>



        {{-- affecter un dossier --}}

        <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-body ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center" id="myModalLabel">Enregistrer un nouveau dossier </h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">


                        </div>

                    </div>
                </div>
            </div>
        </div>

        {{-- faire un programme de sortie pour un dossier --}}

        <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-body ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center" id="myModalLabel">Enregistrer un nouveau dossier </h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="Post", action="{{ route('sortie.store') }}">
                                @csrf
                                <fieldset>
                                    <legend> Ajout d'un nouveau sortie </legend>

                                    <div class="row mb-3">
                                        <label for="nom" class="col-sm-2 col-form-label">etat de sortie</label>

                                        <select class="form-select" name="etat_sortie_id"
                                            aria-label="Default select example">
                                            <option selected>choisissez l'etat de sortie correspondant</option>

                                            @foreach ($etat_sorties as $etat_sortie)
                                                <option value="{{ $etat_sortie->id }}">{{ $etat_sortie->etat }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="nom" class="col-sm-2 col-form-label">materiel utilisaer</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="materiel_utiliser"
                                                placeholder="Entre votre nom de famille, Exemple: MONE">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="prenom" class="col-sm-2 col-form-label">equipe de sorite</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="equipe_sorti"
                                                placeholder="entre l'equipe de sortie">
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="surnom" class="col-sm-2 col-form-label">date de sortie de
                                            terrain</label>
                                        <div class="col-sm-10">
                                            <input type="datetime-local" name="date_debut_sortie" id="dates">
                                        </div>
                                    </div>
                                    <div class="row modal-footer">
                                        <button type="submit"
                                            class="col-auto me-auto button button-3d button-rounded button-green"><i
                                                class="icon-save1"></i>Enregistrer</button>
                                        <button type="button" class="col-auto button button-3d button-rounded button-red"
                                            data-dismiss="modal"><i class="icon-backspace"></i>fermer</button>
                                    </div>

                                </fieldset>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div data-toggle="modal" data-target="#myModal4">


                <div class="modal undefined animated" id="myModal7" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="block mx-auto" style="background-color: #FFF; max-width: 500px;">
                        <div class="center" style="padding: 50px;">
                            <h3>notification</h3>

                            <div class="alert alert-success">
                                {{-- <p> {{ $message }} </p> --}}
                                <script>
                                    console.pop({{ $message }})
                                </script>
                            </div>

                        </div>
                        <div class="section center m-0" style="padding: 30px;">
                            <a href="#" class="button" onclick="$.magnificPopup.close();return false;"> Fermer</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </section><!-- #content end -->
@endsection
