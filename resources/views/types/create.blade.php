@extends('layouts.master')

@section('titre', 'Ajouter un type de salle')
@section('content')
<div class="wrapper">
    @include('includes.header')
    @include('includes.aside')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Ajouter un type de salle
            </h1>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Formulaire d'ajout</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('admin/types') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body" id="inputs">
                                
                                <div class="form-group">
                                    <label for="libelle">Libellé * <span
                                            style="color: red">* </span> </label>
                                    <input type="text" class="form-control" name="libelle" value="{{ old('libelle') }}" id="libelle"
                                        placeholder="Saisir numéro ">
                                    @error('libelle')
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
