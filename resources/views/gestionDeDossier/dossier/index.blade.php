@extends('parametre')
@section('parametre')
    <br>

    <style>
        .white-section {
            background-color: #FFF;
            padding: 25px 20px;
            -webkit-box-shadow: 0px 1px 1px 0px #dfdfdf;
            box-shadow: 0px 1px 1px 0px #dfdfdf;
            border-radius: 3px;
        }

        .white-section label {
            display: block;
            margin-bottom: 15px;
        }

        .white-section pre {
            margin-top: 15px;
        }

        .dark .white-section {
            background-color: #111;
            -webkit-box-shadow: 0px 1px 1px 0px #444;
            box-shadow: 0px 1px 1px 0px #444;
        }
    </style>
    <section id="content">

        <div class="container clearfix">
            <div class="table-responsive">
                <div class="row">
                    <button class="col-auto me-auto button button-3d button-rounded button-green" data-toggle="modal"
                        data-target="#myModal1"><i class="icon-news"></i> Nouveau</button>
                    {{--                         <a href="{{ route('dossier.create') }}"><i class="icon-news"></i>Nouveau</a>
                            --}} <a href="{{ route('parametre') }}"
                        class="col-auto button button-3d button-rounded button-red"><i class="icon-backspace"></i>Retour
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
                            <th>Etat</th>
                            <th>Action</th>
                            <th>Plus</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($dossiers as $dossier)
                            @php
                                $dossier_id = $dossier->id;
                                global $dossier_id;
                            @endphp

                            <tr>
                                <td>{{ $dossier->id }}</td>

                                <td> {{ $dossier->date_enregistrement }} </td>

                                <td>
                                    @foreach ($affectations as $affectation)
                                        @if ($affectation->id === $dossier->id)
                                            {{ $affectation->date_affection }}
                                        @endif
                                    @endforeach
                                </td>

                                <td>
                                    @foreach ($personne_physiques as $personne_physique)
                                        @if ($dossier->personne_physique_id === $personne_physique->id)
                                            {{ $personne_physique->nom }} {{ $personne_physique->prenom }}
                                        @endif
                                    @endforeach
                                </td>

                                <td>
                                    @foreach ($affectations as $affectation)
                                        @if ($affectation->id === $dossier->id)
                                            {{ $affectation->nom }} {{ $affectation->prenom }}
                                        @endif
                                    @endforeach
                                </td>

                                <td>
                                    @foreach ($etat_dossiers as $etat_dossier)
                                        @if ($dossier->id === $etat_dossier->dossier_id)
                                            {{ $etat_dossier->libelle }}
                                        @endif
                                    @endforeach
                                </td>

                                <td>


                                    @foreach ($etat_dossiers as $etat_dossier)
                                        @if ($dossier->id === $etat_dossier->dossier_id)
                                            @if ($etat_dossier->libelle == 'Annuler')
                                                <div class="input-group mb-3">

                                                    <button type="button"
                                                        class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="visually-hidden"></span>Actions
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item " data-toggle="modal"
                                                                data-target="#myModal3"
                                                                href="#{{-- {{ route('commentaire dossier.create') }} --}}">Commentaire</a></li>

                                                    </ul>
                                                </div>
                                            @break
                                        @endif
                                        @if ($etat_dossier->libelle == 'Suspendu')
                                            <div class="input-group mb-3">

                                                <button type="button"
                                                    class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <span class="visually-hidden"></span>Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item " data-toggle="modal"
                                                            data-target="#myModal3"
                                                            href="#{{-- {{ route('commentaire dossier.create') }} --}}">Commentaire</a></li>
                                                    <li><a class="dropdown-item" data-toggle="modal"
                                                            data-target="#myModal2" href="#{{-- {{ route('observation.create') }} --}}">Faire
                                                            une
                                                            observation</a></li>
                                                    <li><a class="dropdown-item "  href="{{ route('Annuler', $dossier->id) }}">Annuler</a></li>

                                                    <li><a class="dropdown-item " href="{{ route('annul_suspension', $dossier->id) }}" id="NonSuspension"
                                                             > Annuler la
                                                            suspension</a></li>
                                                </ul>

                                            </div>
                                        @break
                                    @endif
                                    @if ($etat_dossier->libelle == 'Nouveau')
                                        <div class="input-group mb-3">

                                            <button type="button"
                                                class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden"></span>Actions
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"></a>
                                                </li>
                                                <li><a class="dropdown-item " data-toggle="modal"
                                                        data-target="#myModal12"
                                                        href="#{{-- {{ route('commentaire dossier.create') }} --}}">Affecter le
                                                        dossier</a></li>
                                                <li><a class="dropdown-item " data-toggle="modal"
                                                        data-target="#myModal3"
                                                        href="#{{-- {{ route('commentaire dossier.create') }} --}}">Commentaire</a></li>
                                                <li><a class="dropdown-item" data-toggle="modal"
                                                        data-target="#myModal2" href="#{{-- {{ route('observation.create') }} --}}">Faire
                                                        une
                                                        observation</a></li>
                                                <li><a class="dropdown-item" data-toggle="modal"
                                                        data-target="#myModal5" href="#"> Ajouer une
                                                        parcelle</a></li>

                                                <li><a class="dropdown-item" data-toggle="modal"
                                                        data-target="#myModal9" href="#"> Ajouter un fichier
                                                    </a></li>
                                                    <li><a class="dropdown-item"  href="{{ route('Annuler', $dossier->id) }}">Annuler</a></li>

                                            </ul>

                                        </div>
                                    @break

                                @else
                                    <div class="input-group mb-3">

                                        <button type="button"
                                            class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="visually-hidden"></span>Actions
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"></a>
                                            </li>
                                            <li><a class="dropdown-item " data-toggle="modal"
                                                    data-target="#myModal12"
                                                    href="#{{-- {{ route('commentaire dossier.create') }} --}}">Reaffecter le
                                                    dossier</a></li>
                                            <li><a class="dropdown-item " data-toggle="modal"
                                                    data-target="#myModal4" href="#"> Changer l'étape du
                                                    dossier</a></li>

                                            <li><a class="dropdown-item " data-toggle="modal"
                                                    data-target="#myModal3"
                                                    href="#{{-- {{ route('commentaire dossier.create') }} --}}">Faire un commentaire</a></li>
                                            <li><a class="dropdown-item" data-toggle="modal"
                                                    data-target="#myModal2"
                                                    href="#{{-- {{ route('observation.create') }} --}}">Faire
                                                    une
                                                    observation</a></li>

                                            <li><a class="dropdown-item" data-toggle="modal"
                                                    data-target="#myModal5" href="#"> Ajouer une
                                                    parcelle</a></li>

                                            <li id="fichier"><a class="dropdown-item" data-toggle="modal"
                                                    data-target="#myModal9" href="#"> Ajouter un fichier
                                                </a></li>

                                            <li><a class="dropdown-item"  href="{{ route('Annuler', $dossier->id) }}">Annuler</a></li>

                                            <li><a class="dropdown-item confirmModalLink" href="{{ route('Suspendu', $dossier->id) }}"
                                                    > Suspendre

                                                </a></li>
                                        </ul>
                                    </div>
                                @endif


                        @endif
                    @endforeach



                </td>



                <td>
                    {{$dossier->id}}
                    <a class="dropdown-item" href="{{ route('dossier.show', $dossier->id) }}">detail</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>

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

            <link rel="stylesheet" href="{{ asset('template11/css/style.css') }}" type="text/css" />

            <h2>Enregistrement de dossier</h2>
            <form method="Post", action="{{ route('dossier.store') }}" id="signup-form"
                class="signup-form" enctype="multipart/form-data">
                @csrf
                <h3>
                    <span class="icon"><i class="ti-user"></i></span>
                    <span class="title_text">personnel</span>
                </h3>
                <fieldset>
                    <legend>
                        <span class="step-heading">ajout un nouveau client : </span>
                        <span class="step-number">Step 1 / 3</span>
                    </legend>
                    <label>choisir un client:</label>
                    <div>

                        <div id="physique">
                            <input id="physiqu" class="radio-style" name="radio-group-1"
                                type="radio" checked>
                            <label for="physiqu" class="radio-style-1-label">personne physique</label>

                        </div>
                        <div id="morale">
                            <input id="moral" class="radio-style" name="radio-group-1"
                                type="radio">
                            <label for="moral" class="radio-style-1-label">personne morale</label>
                        </div>

                            <div class="row " id="physiqued">

                                <select class=" col-sm-9 selectpicker" name="client"
                                    data-live-search="true">
                                    <option> choisir le client
                                    </option>
                                    @foreach ($personne_physiques as $personne_physique)
                                        <option
                                            data-tokens="{{ $personne_physique->nom }} {{ $personne_physique->prenom }}"
                                            value=" {{ $personne_physique->id }} ">
                                            {{ $personne_physique->nom }} {{ $personne_physique->prenom }}
                                        </option>
                                    @endforeach

                                </select>

                                <a class=" col-sm-3" href="#" data-toggle="modal" id="clientPhys" data-target="#clientP"> <i
                                        class="i-rounded i-small icon-plus-sign2 " ></i> </a>

                            </div>






                        <div class='row morale' id="moraled">

                            <select class="col-sm-9 selectpicker" name="proprietaire"
                                data-live-search="true">
                                <option> choisir le client
                                </option>
                                @foreach ($personne_morales as $personne_morale)
                                    <option data-tokens="{{ $personne_morale->numero_recipicer }}"
                                        value="{{ $personne_morale->id }}">
                                        {{ $personne_morale->numero_recipicer }}:
                                        {{ $personne_morale->email }}</option>
                                @endforeach
                            </select>
                            <a class=" col-sm-3" href="#clientM" data-toggle="modal" data-target="#"> <i
                                    class="i-rounded i-small icon-plus-sign2"></i> </a>
                        </div>





                        <div class="col-md-4 col-sm-6 col-12" hidden>
                            <label for="">Client</label>
                            <select class="selectpicker form-control" {{-- multiple --}}
                                data-live-search="true" {{-- data-size="5" style="width:100%;" --}}>
                                <option value="#">choisir un client</option>
                                <optgroup label="Personne physique">
                                    @foreach ($personne_physiques as $personne_physique)
                                        <option
                                            data-tokens="{{ $personne_physique->nom }} {{ $personne_physique->prenom }}"
                                            value=" {{ $personne_physique->id }} ">
                                            {{ $personne_physique->nom }} {{ $personne_physique->prenom }}
                                        </option>
                                    @endforeach
                                </optgroup>
                                <optgroup label="Personne Morale">
                                    @foreach ($personne_morales as $personne_morale)
                                        <option data-tokens="{{ $personne_morale->numero_recipicer }}"
                                            value="{{ $personne_morale->id }}">
                                            {{ $personne_morale->numero_recipicer }}:
                                            {{ $personne_morale->email }}</option>
                                    @endforeach
                                    <option value="#">Coris Bank</option>
                                </optgroup>
                            </select>
                        </div>



                        <label for="file" class="col-md-4 col-form-label text-md-right">fichier sur le
                            dossier</label>
                        <div class="form-group">
                            <input type="file" name="fichierd" class="form-control-file">
                        </div>



                </fieldset>

                <h3>
                    <span class="icon"><i class="ti-email"></i></span>
                    <span class="title_text">Parcelle</span>
                </h3>
                <fieldset>
                    <legend>
                        <span class="step-heading">information sur la parcelle: </span>
                        <span class="step-number">Step 2 / 3</span>
                    </legend>
                    <div class="form-group">
                        <label for="numparcelle" class="form-label required">numero de la parcelle</label>
                        <input type="number" name="numparcelle" id="numparcelle" />
                    </div>

                    <div class="form-group">
                        <label for="lot" class="form-label required">lot</label>
                        <input type="text" name="lot" id="lot" />
                    </div>

                    <div class="form-group">
                        <label for="section" class="form-label required">section</label>
                        <input type="text" name="section" id="section" />
                    </div>

                    <div class="form-group">
                        <label for="superficie" class="form-label required">superficie</label>
                        <input type="text" name="superficie" id="superficie" />
                    </div>

                    <select class="selectpicker form-control" {{-- multiple --}}
                        data-live-search="true" name="proprietaireP" aria-label="Default select example">
                        <option selected>choisissez le proprietaire
                        </option>

                        @foreach ($personne_physiques as $personne_physique)
                            <option value="{{ $personne_physique->id }}">
                                {{ $personne_physique->nom }}
                                {{ $personne_physique->prenom }}
                            </option>
                        @endforeach
                    </select>


                    <div class="col-md-4 col-sm-6 col-12">
                        <label for="">proprietaire</label>
                        <select class="selectpicker form-control" {{-- multiple --}}
                            data-live-search="true" name="proprietaire" {{-- data-size="5" style="width:100%;" --}}>
                            <option value="#">choisir un client</option>
                            <optgroup label="Personne physique">
                                @foreach ($personne_physiques as $personne_physique)
                                    <option
                                        data-tokens="{{ $personne_physique->nom }} {{ $personne_physique->prenom }}"
                                        value=" {{ $personne_physique->id }} ">
                                        {{ $personne_physique->nom }} {{ $personne_physique->prenom }}
                                    </option>
                                @endforeach
                            </optgroup>
                            <optgroup label="Personne Morale">
                                @foreach ($personne_morales as $personne_morale)
                                    <option data-tokens="{{ $personne_morale->numero_recipicer }}"
                                        value="{{ $personne_morale->id }}">
                                        {{ $personne_morale->numero_recipicer }}:
                                        {{ $personne_morale->email }}</option>
                                @endforeach
                                <option value="#">Coris Bank</option>
                            </optgroup>
                        </select>
                    </div>

                    <label for="file" class="col-md-4 col-form-label text-md-right">fichier sur la
                        parcelle</label>
                    <div class="form-group">
                        <input type="file" name="fichierp" class="form-control-file">
                    </div>

                    {{-- <div class="select-list">
                                <select name="country" id="country">
                                    <option value="">Australia</option>
                                    <option value="Australia">Australia</option>
                                    <option value="USA">America</option>
                                </select>
                            </div>
                        </div> --}}
                </fieldset>

                <h3>
                    <span class="icon"><i class="ti-credit-card"></i></span>
                    <span class="title_text">Commentaire</span>
                </h3>
                <fieldset>
                    <legend>
                        <span class="step-heading">faites un commentaire sur le dossier: </span>
                        <span class="step-number">Step 3 / 3</span>
                    </legend>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Ajout de commentaire" name="contenu" id="contenu"
                            style="height: 100px"></textarea>
                    </div>

                    <button class="col-auto me-auto button button-3d button-rounded button-green"
                        type="submit"><i class="icon-news"></i> Enregister </button>
                </fieldset>

            </form>


        </div>
        <script src="{{ asset('template11/vendor/jquery/jquery.min.js') }}"></script>

        <script src="{{ asset('template11/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>

        <script src="{{ asset('template11/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>

        <script src="{{ asset('template11/vendor/jquery-steps/jquery.steps.min.js') }}"></script>

        <script src="{{ asset('template11/vendor/minimalist-picker/dobpicker.js') }}"></script>

        <script src="{{ asset('template11/js/main.js') }}"></script>
    </div>
</div>
</div>
</div>



{{-- Affectation de dossier a un technicien --}}
<div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-body ">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-center" id="myModalLabel">Affectation d'un dossier a un technicien
            </h4>
            <button type="button" class="close" data-dismiss="modal"
                aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">

            <form method="Post", action="{{ route('affectation.store') }}">
                @csrf


                <div class="row mb-3">
                    <label for="nom" class="col-sm-2 col-form-label">Dossier</label>

                    <select class="form-select" name="dossier_id" aria-label="Default select example">

                        @foreach ($dossiers as $dossier)
                            <option value="{{ $dossier->id }}">{{ $dossier->id }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="row mb-3">
                    <label for="nom" class="col-sm-2 col-form-label">Dossier</label>

                    <select class="form-select" name="personnel_id" aria-label="Default select example">

                        @foreach ($personne_physiques as $personne_physique)
                            <option value="{{ $personne_physique->id }}">{{ $personne_physique->nom }}
                                {{ $personne_physique->prenom }}</option>
                        @endforeach

                    </select>
                </div>


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

{{-- enregistrer un commentaire --}}
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-body ">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-center" id="myModalLabel">Enregistrer un
                nouveau dossier </h4>
            <button type="button" class="close" data-dismiss="modal"
                aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">

            <form method="Post", action="{{ route('commentaire dossier.store') }}">
                @csrf

                <div class="text-center"> Ajout d'un commentaire sur le dossier
                </div>
                <div class="row mb-3">
                    <label for="nom" class="col-sm-2 col-form-label">Dossier</label>

                    <select class="form-select" name="dossier_id" aria-label="Default select example">


                        <option value="{{ $dossier->id }}">{{ $dossier->id }}</option>

                    </select>
                </div>
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
            <h4 class="modal-title text-center" id="myModalLabel">Enregistrer un
                nouveau dossier </h4>
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
            <h4 class="modal-title text-center" id="myModalLabel">Enregistrer un
                nouveau dossier </h4>
            <button type="button" class="close" data-dismiss="modal"
                aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
            <form method="Post", action="{{ route('sortie.store') }}">
                @csrf
                <fieldset>
                    <legend> Ajout d'un nouveau sortie </legend>

                    <div class="row mb-3">
                        <label for="nom" class="col-sm-2 col-form-label">etat
                            de sortie</label>

                        <select class="form-select" name="etat_sortie_id"
                            aria-label="Default select example">
                            <option selected>choisissez l'etat de sortie
                                correspondant</option>

                            @foreach ($etat_sorties as $etat_sortie)
                                <option value="{{ $etat_sortie->id }}">
                                    {{ $etat_sortie->etat }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row mb-3">
                        <label for="nom" class="col-sm-2 col-form-label">materiel
                            utilisaer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="materiel_utiliser"
                                placeholder="Entre votre nom de famille, Exemple: MONE">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="prenom" class="col-sm-2 col-form-label">equipe de
                            sorite</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="equipe_sorti"
                                placeholder="entre l'equipe de sortie">
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="surnom" class="col-sm-2 col-form-label">date
                            de sortie de
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



{{-- nouveau personne physique --}}
<form id="clientPhysique" method="POST" role="form" action="{{route('nouveauPersonnePhysique')}}">
    @csrf
<div class="modal fadeInDown dark fast undefined animated" id="clientP" tabindex="-1"
role="dialog" aria-labelledby="myModalLabel " aria-hidden="true">
<div class="modal-dialog modal-lg ">
    <div class="modal-body "style="background-color: #2f3542;">
        <div class="modal-content" style="background-color: #2f3542;">
            <div class="modal-header">
                <h4 class="modal-title " id="myModalLabel"> <span> Ajoute
                        d'un
                        nouveau client physique
                    </span>
                </h4>

                <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">


                    <div class="form-group">
                        <label for="first_name" class="form-label required">
                            nom</label>
                        <input type="text" name="nom" id="first_name" />
                    </div>

                    <div class="form-group">
                        <label for="last_name" class="form-label required">
                            Prenom</label>
                        <input type="text" name="prenom" id="last_name" />
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label required">email
                        </label>
                        <input type="email" name="email" id="email" />
                    </div>


                    <div class="form-group">
                        <label for="tel"
                            class="form-label required">telephone</label>
                        <input type="tel" name="tel_personne" id="tel">

                    </div>
                    <div class="row modal-footer">
                         <input type="submit" class="col-auto me-auto button button-3d button-rounded button-green" value="enregister">
                         {{-- <button id="savebtn" type="button" class="col-auto me-auto button button-3d button-rounded button-green"><i
                                class="icon-save1"></i>Enregistrer</button> --}}
                        <button type="button" class="col-auto button button-3d button-rounded button-red"
                            data-dismiss="modal"><i class="icon-backspace"></i>fermer</button>
                    </div>

            </div>

        </div>
    </div>
</div>
</div>
</form>

{{-- nouveau personne morale --}}
<form id="clientMorale"></form>
<div class="modal fadeInDown dark fast undefined animated" id="clientM"
tabindex="-1" role="dialog" aria-labelledby="myModalLabel "
aria-hidden="true">
<div class="modal-dialog modal-lg ">
    <div class="modal-body "style="background-color: #2f3542;">
        <div class="modal-content" style="background-color: #2f3542;">
            <div class="modal-header">
                <h4 class="modal-title " id="myModalLabel"> <span> Ajout d'un
                        client morale
                    </span>
                </h4>
                <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name" class="form-label required">
                        nom</label>
                    <input type="text" name="nom" id="first_name" />
                </div>

                <div class="form-group">
                    <label for="last_name" class="form-label required">
                        Prenom</label>
                    <input type="text" name="prenom" id="last_name" />
                </div>
                <div class="form-group">
                    <label for="email" class="form-label required">email
                    </label>
                    <input type="email" name="email" id="email" />
                </div>


                <div class="form-group">
                    <label for="tel"
                        class="form-label required">telephone</label>
                    <input type="tel" name="tel_personne" id="tel">

                </div>
            </div>

        </div>
    </div>
</div>

</div>


</section><!-- #content end -->
@endsection
