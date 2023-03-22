@extends('racine/layourt')

@section('contenu')
<br> <br>
    <div class="clear bottommargin-sm"></div>
    <a href="  {{route('dossierFinaliser') }}  " class="button button-xlarge button-circle button-green"><i class="icon-news"></i>Dossier finaliser</a>
    <a href="{{ route('dossierEnCours') }} " class="button button-xlarge button-circle button-dirtygreen"><i class="icon-play"></i>Dossier En cours</a>
    <a href=" {{route('dossierAnnuler') }}  " class="button button-xlarge button-circle button-red"><i class="icon-line-pause"></i>Dossier annuler</a>
    <a href=" {{route('dossierSuspendu') }}  " class="button button-xlarge button-circle button-amber"><i class="icon-ok"></i>Dossier suspendu</a>
    <a href="{{route('dossierNouveau')}}" class="button button-xlarge button-circle button-leaf"><i class="icon-ok"></i>Nouveau dossier</a>
    <div class="clear bottommargin-sm"></div>
    <div class="bottommargin mx-auto" style="max-width: 70%; min-height: 350px;">
        <canvas id="chart-0"></canvas>
    </div>


    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/chart-utils.js') }}"></script>
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
                        {{$dossierAnnuler}},
                        {{$dossierSuspendu}},
                        {{$dossierNouveau}},
                        {{$dossierFinaliser}},
                        {{$dossierEnCour}},
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
@endsection
