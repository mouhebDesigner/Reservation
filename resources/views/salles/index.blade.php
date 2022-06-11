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
                                            <h3 class="m-0">Liste des salles</h3>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                    <div class="row">
                                        <div class="col-sm-12">

                                            @foreach($salles as $salle)
                                            <div class="col-md-6">
                                                <!-- Box Comment -->
                                                <div class="card card-widget">
                                                    <div class="card-body">
                                                        <img class="img-fluid pad" src="{{ asset($salle->image) }}"
                                                            alt="Photo">
                                                        <p>
                                                            {{$salle->description}}
                                                            <br>
                                                            <h2>Autre information:</h2>
                                                            <span>
                                                                Capactié: 
                                                                {{ $salle->capacite }}
                                                                
                                                            </span><br>
                                                            <span>
                                                                Numéro:
                                                                {{ $salle->numero }}
                                                            </span><br>
                                                            <span>
                                                                Type: 
                                                                {{ $salle->type->libelle }}
                                                            </span>

                                                        </p>
                                                        <button type="button"
                                                            class="float-right  btn btn-primary btn-sm">Reserver</button>
                                                    </div>
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                            @endforeach


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
