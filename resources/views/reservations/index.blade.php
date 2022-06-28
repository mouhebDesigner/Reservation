@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
    <div class="wrapper">
        
        @include('includes.header')
        @include('includes.aside')
        <div class="content-wrapper" style="min-height: 257px">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                       
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                @include('includes.error-message')

                    <div class="row">
                        <div class="col-12">
                            
                            <!-- /.card -->

                            <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-flex justify-content-between">
                                            <h3 class="m-0">Liste des réservation</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th>
                                                            Numéro
                                                        </th>
                                                        <th>
                                                            Capacité
                                                        </th>
                                                        <th>
                                                            Type de salle
                                                        </th>
                                                        <th>
                                                            Date début
                                                        </th>
                                                        <th>
                                                            Date fin
                                                        </th>
                                                        <th>
                                                            Nombre d'heure
                                                        </th>
                                                        <th>
                                                            Montant
                                                        </th>
                                                        <th>
                                                            Status
                                                        </th>
                                                        <th>
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($reservations as $reservation)
                                                        <tr>
                                                            <td>{{ $reservation->id }}</td>
                                                            <td>{{ $reservation->salle->numero }}</td>
                                                            <td>{{ $reservation->salle->capacite }}</td>
                                                            <td>{{ $reservation->salle->type->libelle }}</td>
                                                            <td>{{ $reservation->date_debut }}</td>
                                                            <td>{{ $reservation->date_fin }}</td>
                                                            <td>{{ $reservation->nbr_heures }}</td>
                                                            <td>{{ $reservation->montant }}DT</td>
                                                            <td>{{ $reservation->status }}</td>
                                                            <td>
                                                                <div class="d-flex justify-content-around w-100">
                                                                    
                                                                    @if(Auth::user()->isAdmin())
                                                                        <a   href="{{ route('reservations.accepter', ['reservation'=>$reservation]) }}" title="Accepter réservation" class=" accepter-confirm"  data-model="reservation" >
                                                                            <i class="fas fa-check-square accept-reservation"></i>
                                                                        </a>

                                                                        <a   href="{{ route('reservations.refuser', ['reservation'=>$reservation]) }}" title="Réfuser réservation" class=" refuser-confirm"  data-model="reservation" >
                                                                            <i class="fas fa-times-circle close-reservation"></i>
                                                                        </a>
                                                                    @else 

                                                                        <a  @if($reservation->status == "annuler") role="link" aria-disabled="true" class="btn-edit" @else href="{{ route('reservations.annuler', ['reservation'=>$reservation]) }}" class="btn-edit annuler-confirm" @endif data-model="reservation"  style="width: 100%">
                                                                            Annuler
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="d-flex justify-content-center">
                                                {{ $reservations->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection
