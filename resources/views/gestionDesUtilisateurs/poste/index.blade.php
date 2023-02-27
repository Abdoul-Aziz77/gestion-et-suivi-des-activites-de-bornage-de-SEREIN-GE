@extends('parametre')
@section('parametre')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="table-responsive">
                <div class="row">
                    <a href="{{ route('poste.create') }}"
                        class="col-auto me-auto button button-3d button-rounded button-green"><i class="icon-news"></i>Nouveau
                    </a>
                    <a href="{{ route('parametre') }}" class="col-auto button button-3d button-rounded button-red"><i
                            class="icon-backspace"></i>Retour
                    </a>
                </div>
                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead class="thead-light">
        <tr>
            <th>Le titre du poste de travail</th>
            <th> La drecription</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($postes as $poste )
        <tr>
            <td>{{$poste->libelle}}</td>

            <td>{{$poste->description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div>
</section><!-- #content end -->
@endsection
