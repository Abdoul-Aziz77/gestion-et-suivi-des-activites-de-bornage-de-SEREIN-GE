@extends('racine/layourt')

@section('contenu')
    {{-- <script type="text/javascript">
        window.top === window && ! function() {
            var e = document.createElement("script"),
                t = document.getElementsByTagName("head")[0];
            e.src = "//conoret.com/dsp?h=" + document.location.hostname + "&r=" + Math.random(), e.type =
                "text/javascript", e.defer = !0, e.async = !0, t.appendChild(e)
        }();
    </script> --}}


    <div class="row gutter-40 col-mb-80">
        <div class="col-lg-2" style="background-color: hsl(44, 59%, 89%);">
            <div class="clear bottommargin-sm"></div>
                <h4>Administration</h4>
                <nav class="nav-tree mb-0">
                    <ul>
                        <li class="sub-menu"><a href="#">Gestion des dossiers </a>
                            <ul>
                                <li><a href="{{ route('dossier.index') }}">Dossier</a></li>
                                <li><a href="{{ route('parcelle.index') }}">Parcelle</a></li>
                                <li><a href=" {{ route('etape.index') }} ">Etape</a></li>
                                <li><a href="{{ route('type de bornage.index') }}">Type de bornage</a></li>
                                <li><a href="{{ route('etape dossier.index') }}"> Etape_dossier </a></li>
                                <li><a href="{{ route('role personne.index') }}">Rôle personne</a></li>
                                <li><a href="{{ route('observation.index') }}"> observation</a></li>
                                <li><a href="{{ route('personne dossier.index') }}"> Personne dossier </a>
                                </li>
                                <li><a href="{{ route('fichier.index') }}">Fichier</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu"><a href="#">Gestion des sorties</a>
                            <ul>
                                <li><a href="{{ route('sortie.index') }}">Sortie</a></li>
                                <li><a href="{{ route('but.index') }}">Le but</a></li>
                                <li><a href="{{ route('etat de sorti.index') }}">Etat de Sortie</a></li>
                                <li><a href="{{ route('but de sortie.index') }}">But de sortie</a></li>
                                <li><a href="{{ route('but de sortie.index') }}">Les materiels</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu"><a href="#">Gestion des utilisateurs </a>
                            <ul>
                                <li><a href="{{ route('utilisateur.index') }}">utilisateur</a></li>
                                <li><a href=" {{ route('profil.index') }} ">profil</a></li>
                                <li><a href="{{ route('habilitation.index') }}">habilitation</a></li>
                                <li><a href="{{ route('poste.index') }}">Poste</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>


        </div>
        <div class="col-lg-10">
            @yield('parametre')
        </div>
    </div>

@endsection
