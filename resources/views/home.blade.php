@extends('racine/layourt')

@section('contenu')
    <div class="clear bottommargin-sm"></div>
    <a href=" #{{-- {{route('dossierFinaliser') }}  --}}" class="button button-xlarge button-circle button-green"><i class="icon-news"></i>Dossier finaliser</a>
    <a href="#{{-- {{ route('dossierEnCours') }} --}}" class="button button-xlarge button-circle button-dirtygreen"><i class="icon-play"></i>Dossier En cours</a>
    <a href=" #{{-- {{route('dossierAnnuler') }} --}} " class="button button-xlarge button-circle button-red"><i class="icon-line-pause"></i>Dossier annuler</a>
    <a href=" #{{-- {{route('dossierSuspendu') }} --}} " class="button button-xlarge button-circle button-amber"><i class="icon-ok"></i>Dossier suspendu</a>
    <a href="#" class="button button-xlarge button-circle button-leaf"><i class="icon-ok"></i>Nouveau dossier</a>
    <div class="clear bottommargin-sm"></div>
    <div class="bottommargin mx-auto" style="max-width: 70%; min-height: 350px;">
        <canvas id="chart-0"></canvas>
    </div>

@endsection
