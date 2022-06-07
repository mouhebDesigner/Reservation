@extends('layouts.master')

@section('titre', 'Ajouter une salle')
@section('content')
<div class="wrapper">
    @include('includes.header')
    @include('includes.aside')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Ajouter une salle
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
                        <form action="{{ url('admin/salles') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body" id="inputs">
                                <div class="form-group @error('matiere_id') has-error @enderror">
                                    <label for="type_id"> Choisir type * </label>
                                    <select name="type_id" class="form-control" id="type_id">
                                        <option value="" disabled selected> Choisir type de salle</option>
                                        @foreach(App\Models\Type::all() as $type)
                                            <option value="{{ $type->id }}" @if(old('niveau') == $type->id) selected @endif> {{ $type->libelle }}</option>
                                        @endforeach
                                    </select>
                                    @error('type_id')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="numero">Numéro * <span
                                            style="color: red">* </span> </label>
                                    <input type="text" class="form-control" name="numero" value="{{ old('numero') }}" id="numero"
                                        placeholder="Saisir numéro ">
                                    @error('numero')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="capacite">Capacité *<span
                                            style="color: red">* </span> </label>
                                    <input type="text" class="form-control" name="capacite" value="{{ old('capacite') }}" id="capacite"
                                        placeholder="Saisir numéro ">
                                    @error('capacite')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Image *<span
                                            style="color: red">* </span> </label>
                                    <input type="file" class="form-control" name="image" value="{{ old('image') }}" id="image"
                                        placeholder="Saisir numéro ">
                                    @error('image')
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
