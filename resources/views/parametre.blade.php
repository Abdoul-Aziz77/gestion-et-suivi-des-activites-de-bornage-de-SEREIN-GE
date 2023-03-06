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
                <nav class="nav-tree mb-0" class="col-lg-2" style="background-color: hsl(44, 59%, 89%);">
                     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" class="col-lg-2" style="background-color: hsl(44, 59%, 89%);" >
                        <li class="sub-menu" navbar-nav bg-gradient-primary sidebar sidebar-dark accordion id="accordionSidebar" class="col-lg-2"><a href="#">Gestion des dossiers </a>
                            <ul style="background-color: hsl(44, 59%, 89%);">
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
                    {{-- <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        

                        <!-- Nav Item - Dashboard -->
                        
                
                        <!-- Heading -->
                        <div class="sidebar-heading">
                            Gestion
                        </div>
                
                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fas fa-fw fa-cog"></i>
                                <span>Dossier</span>
                            </a>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Dossier:</h6>
                                    <a class="collapse-item" href="{{ route('dossier.index') }}">Gestion de dossier</a>
                                    <a class="collapse-item" href="cards.html">Cards</a>
                                </div>
                            </div>
                        </li>
                
                        <!-- Nav Item - Utilities Collapse Menu -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                                aria-expanded="true" aria-controls="collapseUtilities">
                                <i class="fas fa-fw fa-wrench"></i>
                                <span>Utilities</span>
                            </a>
                            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                                data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Custom Utilities:</h6>
                                    <a class="collapse-item" href="utilities-color.html">Colors</a>
                                    <a class="collapse-item" href="utilities-border.html">Borders</a>
                                    <a class="collapse-item" href="utilities-animation.html">Animations</a>
                                    <a class="collapse-item" href="utilities-other.html">Other</a>
                                </div>
                            </div>
                        </li>
                
                        <!-- Divider -->
                        <hr class="sidebar-divider">
                
                        <!-- Heading -->
                        <div class="sidebar-heading">
                            Addons
                        </div>
                
                        <!-- Nav Item - Pages Collapse Menu -->
                        <li class="nav-item">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                                aria-expanded="true" aria-controls="collapsePages">
                                <i class="fas fa-fw fa-folder"></i>
                                <span>Pages</span>
                            </a>
                            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Login Screens:</h6>
                                    <a class="collapse-item" href="login.html">Login</a>
                                    <a class="collapse-item" href="register.html">Register</a>
                                    <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                                    <div class="collapse-divider"></div>
                                    <h6 class="collapse-header">Other Pages:</h6>
                                    <a class="collapse-item" href="404.html">404 Page</a>
                                    <a class="collapse-item" href="blank.html">Blank Page</a>
                                </div>
                            </div>
                        </li>
                
                        <!-- Nav Item - Charts -->
                        <li class="nav-item">
                            <a class="nav-link" href="charts.html">
                                <i class="fas fa-fw fa-chart-area"></i>
                                <span>Charts</span></a>
                        </li>
                
                        <!-- Nav Item - Tables -->
                        <li class="nav-item">
                            <a class="nav-link" href="tables.html">
                                <i class="fas fa-fw fa-table"></i>
                                <span>Tables</span></a>
                        </li>
                
                        <!-- Divider -->
                        <hr class="sidebar-divider d-none d-md-block">
                
                        <!-- Sidebar Toggler (Sidebar) -->
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>
                
                        <!-- Sidebar Message -->
                        <div class="sidebar-card d-none d-lg-flex">
                            <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                            <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                            <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
                        </div>
                
                    </ul> --}}
                </nav>


        </div>
        <div class="col-lg-10">
            @yield('parametre')
        </div>
    </div>
     <!-- Topbar -->
    
    <!-- End of Topbar -->
 
@endsection
