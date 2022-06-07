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
                                                <div class="card card-widget collapsed-card">
                                                    <div class="card-header">
                                                        <div class="user-block">
                                                            <span
                                                                class="description">{{ $salle->created_at->diffForHumans() }}</span>
                                                        </div>
                                                        <!-- /.user-block -->
                                                        <div class="card-tools d-flex">

                                                           
                                                        </div>
                                                        <!-- /.card-tools -->
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body" style="display: none;">

                                                        <!-- post text -->
                                                        <p>
                                                            {{ $salle->description }}
                                                        </p>

                                                        <span
                                                            class="float-right text-muted">{{ $salle->commentaires->count() }}
                                                            commentaires</span>
                                                    </div>
                                                    <!-- /.card-body -->
                                                    <div class="card-footer card-comments" style="display: none;">
                                                        @foreach($salle->commentaires as $comment)
                                                        <!-- /.card-comment -->
                                                        <div class="card-comment">
                                                            <!-- User image -->
                                                            <img class="img-circle img-sm"
                                                                src="{{ asset('storage/'.App\Models\User::find($comment->user_id)->photo) }}"
                                                                alt="User Image">

                                                            <div class="comment-text">
                                                                <span class="username">

                                                                    <span
                                                                        class="text-muted float-right">{{ $comment->created_at->diffForHumans() }}</span>
                                                                </span><!-- /.username -->
                                                                {{ $comment->contenue }}
                                                                <form action="{{ url('commentaires/'.$comment->id) }}"
                                                                    method="post" class="form_comment">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="btn-delete"
                                                                        style="background: transparent"
                                                                        onclick="return confirm('Voules-vous supprimer ce forum')">
                                                                        <i class="fa fa-trash"
                                                                            style="transform: scale(1)"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                            <!-- /.comment-text -->
                                                        </div>
                                                        @endforeach
                                                        <!-- /.card-comment -->
                                                    </div>
                                                    <!-- /.card-footer -->
                                                    <div class="card-footer" style="display: none;">
                                                        <form action="{{ url('commentaires') }}" class="" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{ $salle->id }}"
                                                                name="forum_id">

                                                            <img class="img-fluid img-circle img-sm"
                                                                src="{{ asset('storage/'.Auth::user()->photo) }}"
                                                                alt="Alt Text">
                                                            <!-- .img-push is used to add margin to elements next to floating images -->
                                                            <div class="img-push d-flex">
                                                                <input type="text" name="message"
                                                                    class="form-control form-control-sm"
                                                                    placeholder="Saisir votre commentaire">
                                                                <button type="submit"
                                                                    style="border: none; background: transparent">
                                                                    <i class="fa fa-share"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- /.card-footer -->
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
