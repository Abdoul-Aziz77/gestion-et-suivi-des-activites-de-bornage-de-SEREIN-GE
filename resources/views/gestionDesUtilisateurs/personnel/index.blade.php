@extends('parametre')
@section('parametre')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="table-responsive">
                    <div class="row">
                        <a href="{{ route('personnel.create') }}"
                            class="col-auto me-auto button button-3d button-rounded button-green"><i
                                class="icon-news"></i>Nouveau
                        </a>
                        <a href="{{ route('parametre') }}" class="col-auto button button-3d button-rounded button-red"><i
                                class="icon-backspace"></i>Retour
                        </a>
                    </div>
                    <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead class="thead-light">
                            <tr>
                                <th>Id</th>
                                <th>Matricule</th>
                                <th>La durée de contrat</th>
                                <th>La date du debut de contrat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personnels as $personnel)
                                <tr>
                                    <td>{{ $personnel->id }}</td>
                                    <td> {{ $personnel->matricule }} </td>
                                    <td>{{ $personnel->dure_contrat }}</td>
                                    <td>{{ $personnel->date_debut_contrat }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section><!-- #content end -->
@endsection
