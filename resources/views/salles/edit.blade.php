@extends('layouts.master')

@section('titre', 'Modifier etudiant')
@section('content')
<div class="wrapper">
    @include('includes.header')
    @include('includes.aside')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Modifier un catégorie
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
                        <form action="{{ route('admin.salles.update', ['salle' => $salle]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body" id="inputs">
                                <div class="form-group @error('matiere_id') has-error @enderror">
                                    <label for="type_id"> Choisir type * </label>
                                    <select name="type_id" class="form-control" id="type_id">
                                        <option value="" disabled selected> Choisir type de salle</option>
                                        @foreach(App\Models\Type::all() as $type)
                                            <option value="{{ $type->id }}" @if($salle->type_id == $type->id) selected @endif> {{ $type->libelle }}</option>
                                        @endforeach
                                    </select>
                                    @error('type_id')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                 <div class="form-group">
                                    <label for="numero">Numéro <span
                                            style="color: red">* </span> </label>
                                    <input type="text" class="form-control" name="numero" value="{{ $salle->numero }}" id="numero"
                                        placeholder="Saisir numéro ">
                                    @error('numero')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="capacite">Numéro <span
                                            style="color: red">* </span> </label>
                                    <input type="text" class="form-control" name="capacite" value="{{ $salle->capacite }}" id="capacite"
                                        placeholder="Saisir numéro ">
                                    @error('capacite')
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
