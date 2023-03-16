<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>plate-forme de gestion et de suivi des activitées de bornage</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}" type="text/css" />
{{--     <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
 --}}    <link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}" type="text/css" />
    	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="{{ asset('css/components/bs-select.css') }}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{ asset('css/components/bs-switches.css') }}css/components/bs-switches.css" type="text/css" />

   {{--  <link rel="stylesheet"
        href="{{ asset('template11/fonts/themify-icons/themify-icons.css') }}"
        type="text/css" /> --}}
    <link rel="stylesheet" href="{{ asset('css/components/bs-datatable.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <style>
        .chart-samples ul {
            list-style: none;
        }

        .chart-samples h4 {
            text-transform: uppercase;
            margin-bottom: 20px;
            font-weight: 400;
        }

        .chart-samples li {
            font-size: 16px;
            line-height: 2.2;
            font-weight: 600;
        }

        .chart-samples li a:not(:hover) {
            color: #AAA;
        }
    </style>
</head>

<body class="stretched">
    <div id="wrapper" class="clearfix">

        <!-- Header
  ============================================= -->
        <header id="header">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">
                        <!-- Logo
      ============================================= -->
                        <div id="logo" class="mr-lg-5">
                            <a href="#" class="standard-logo" data-dark-logo="{{ asset('image/logo.png') }}"><img
                                    src="{{ asset('image/logo.png') }}" alt="SEREIN-GE"></a>
                            <a href="#" class="retina-logo" data-dark-logo="{{ asset('image/logo.png') }}"><img
                                    src="{{ asset('image/logo.png') }}" alt="SEREIN-GE"></a>
                        </div><!-- #logo end -->
                        <div class="header-misc">
                            <!-- Top Search
       ============================================= Administration -->
                            <!-- #top-search end -->

                            <div class="dropdown mx-3 mr-lg-0">
                                <a href="#" class="btn btn-secondary btn-sm " data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class="icon-user-cog"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1"
                                    style="">
                                    <a class="dropdown-item text-left" href="#">Profile</a>
                                    {{-- <a class="dropdown-item text-left" href="#">Messages <span class="badge badge-pill badge-secondary float-right" style="margin-top: 3px;">5</span></a> --}}
                                    <a class="dropdown-item text-left" href="{{ route('parametre') }} ">Administrer</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-left" href="#">Se deconnecter <i
                                            class="icon-signout"></i></a>
                                </ul>
                            </div>

                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
      ============================================= Menu -->
                        {{--      <nav class="primary-menu style-3 menu-spacing-margin">

        <ul class="menu-container">
            <li class="menu-item"><a class="menu-link" href="{{ route('home') }}" style="margin-top: 28px; margin-bottom: 28px;"><div>accueil</div></a></li>
            <li class="menu-item"><a class="menu-link" href="{{ route('dossier') }}" style="margin-top: 28px; margin-bottom: 28px;"><div>dossier</div></a></li>
            <li class="menu-item"><a class="menu-link" href="{{ route('sortie') }}" style="margin-top: 28px; margin-bottom: 28px;"><div>programme de sortie</div></a></li>
            {{-- <li class="menu-item current"><a class="menu-link" href="demo-medical-appointment.html" style="margin-top: 28px; margin-bottom: 28px;"><div>client</div></a></li>
         </ul>

    </nav> --}}
                        <nav class="primary-menu mr-lg-auto">

                            <ul class="menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('home') }}">
                                        <div>Acceuil</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('dossier') }}">
                                        <div>Dossier</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ route('sortie') }}">
                                        <div>Programme de sortie</div>
                                    </a>
                                </li>
                                {{-- <li class="menu-item">
                                    <a class="menu-link" href="{{ route('client') }}">
                                        <div>Client</div>
                                    </a>
                                </li> --}}
                            </ul>

                        </nav><!-- #primary-menu end -->

                        <form class="top-search-form" action="#" method="get">
                            <input type="text" name="q" class="form-control" value=""
                                placeholder="Type &amp; Hit Enter.." autocomplete="off">
                        </form>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->


        </nav>
        <main class="container">

            @yield('contenu')

        </main>
       {{--  <footer id="footer" class="dark">

            <!-- Copyrights
   ============================================= -->--}}
            <div id="copyrights">
                <div class="container">
                    <div class="row col-mb-30">
                        <div class="col-md-6 text-center text-md-left">
                            Copyrights © 2022 toute droit reserver à SEREIN-GE.<br>
                            <div class="copyright-links"><a href="#">condition d'utilisation</a> / <a
                                    href="#">politique de gestion</a></div>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            {{-- <div class="d-flex justify-content-center justify-content-md-end">
                                <a href="#" class="social-icon si-small si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                    <i class="icon-vimeo"></i>
                                    <i class="icon-vimeo"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-github">
                                    <i class="icon-github"></i>
                                    <i class="icon-github"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                    <i class="icon-yahoo"></i>
                                    <i class="icon-yahoo"></i>
                                </a>

                                <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                            </div> --}}
                            <div class="clear"></div>

                            <i class="icon-envelope2"></i> info@SEREIN.com <span class="middot">·</span> <i
                                class="icon-headphones"></i> +1-11-6541-6369 <span class="middot"></span>
                        </div>
                    </div>
                </div>
            </div><!-- #copyrights end -->
        </footer>

    {{-- </div> --}}


     <div id="gotoTop" class="icon-angle-up" style="display: block;"></div>
    {{-- <script src="{{ asset('js/js_templ/jquery-3.3.1.min.js') }}"></script>


    <!-- JQUERY STEP -->
    <script src="{{ asset('js/js_templ/jquery.steps.js') }}"></script> --}}

    {{-- <script src="{{ asset('js/js_templ/main.js') }}"></script> --}}
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/plugins.min.js') }}"></script>
    <script src="{{ asset('js/components/bs-datatable.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable1').dataTable();
        });
    </script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/offcanvas.js') }}"></script>
    <script src="{{ asset('js/mon_script.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/chart-utils.js') }}"></script>
    <script src="{{ asset('js/jquery.calendario.js') }}"></script>
    <script src="{{ asset('js/events-data.js') }}"></script>
    <script src="{{ asset('js/components/bs-select.js') }}"></script>
    <script src="{{ asset('js/components/selectsplitter.js') }}"></script>
{{--     <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>
 --}}{{--     <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
 --}}
 <script>

    $('.selectsplitter').selectsplitter();

</script>
    <script src="{{ asset('js/functions.js') }}"></script>


{{-- create dossier --}}

  <!-- JS -->
 {{-- <script src="{{ asset('template11/vendor/jquery/jquery.min.js') }}"></script>

 <script src="{{ asset('template11/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>

 <script src="{{ asset('template11/vendor/jquery-validation/dist/additional-methods.min.js') }}"></script>

 <script src="{{ asset('template11/vendor/jquery-steps/jquery.steps.min.js') }}"></script>

 <script src="{{ asset('template11/vendor/minimalist-picker/dobpicker.js') }}"></script>

 <script src="{{ asset('template11/js/main.js') }}"></script> --}}

    <!-- Charts JS
 ============================================= -->


 <script>
    
    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                    /* randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(), */
                    10,
                    15,
                    50,
                    600,
                    200,
                ],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.leaf,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "Dossier annuler",
                "Dossier suspendu",
                "nouveau dossier",
                "Dossier finnaliser",
                "Dossier en cours"
            ]
        },
        options: {
            responsive: true
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("chart-0").getContext("2d");
        window.myPie = new Chart(ctx, config);
    };
    //var colorNames = Object.keys(window.chartColors);
</script>

<script>
    // calendrier
    var cal = $('#calendar').calendario({
            onDayClick: function($el, $contentEl, dateProperties) {

                for (var key in dateProperties) {
                    console.log(key + ' = ' + dateProperties[key]);
                }

                $('#clicked-month').html(dateProperties['month']);
                $('#clicked-day').html(dateProperties['day']);

            },
            caldata: canvasEvents
        }),
        $month = $('#calendar-month').html(cal.getMonthName()),
        $year = $('#calendar-year').html(cal.getYear());

    $('#calendar-next').on('click', function() {
        cal.gotoNextMonth(updateMonthYear);
    });
    $('#calendar-prev').on('click', function() {
        cal.gotoPreviousMonth(updateMonthYear);
    });
    $('#calendar-current').on('click', function() {
        cal.gotoNow(updateMonthYear);
    });

    function updateMonthYear() {
        $month.html(cal.getMonthName());
        $year.html(cal.getYear());
    }

    skrollr.init({
        forceHeight: false
    });
</script>

</body>

</html>
