@extends('layouts.master')

@section('titre', 'Réserver une salle')
@section('content')
<div class="wrapper">
    @include('includes.header')
    @include('includes.aside')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Réserver une salle
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col">
                    @include('includes.error-message')
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Formulaire d'ajout</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('reserver') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="salle_id" value="{{ $salle_id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="card-body" id="inputs">
                                <div class="form-group">
                                    <label for="raison">Raison<span
                                            style="color: red">* </span> </label>
                                    <textarea cols="10" rows="7" class="form-control" name="raison" value="{{ old('raison') }}" id="raison"
                                        placeholder="Saisir raison de réservation "></textarea>
                                    @error('raison')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="date_debut">Date début<span
                                            style="color: red">* </span> </label>
                                    <input type="datetime-local" class="form-control" name="date_debut" value="{{ old('date_debut') }}" id="date_debut"
                                        placeholder="Saisir capacité ">
                                    @error('date_debut')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="date_fin">Date fin<span
                                            style="color: red">* </span> </label>
                                    <input type="datetime-local" class="form-control" name="date_fin" value="{{ old('date_fin') }}" id="date_fin">
                                    @error('date_fin')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                <button type="reset" class="btn btn-info">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
    </div>



    @endsection
    @section('script')
   

    @endsection
