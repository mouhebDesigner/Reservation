@extends('layouts.master')

@section('titre', 'Modifier une salle')
@section('content')
<div class="wrapper">
    @include('includes.header')
    @include('includes.aside')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Modifier une salle
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
                                    <label for="numero">Num??ro <span
                                            style="color: red">* </span> </label>
                                    <input type="text" class="form-control" name="numero" value="{{ $salle->numero }}" id="numero"
                                        placeholder="Saisir num??ro ">
                                    @error('numero')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="capacite">Capacit?? <span
                                            style="color: red">* </span> </label>
                                    <input type="text" class="form-control" name="capacite" value="{{ $salle->capacite }}" id="capacite"
                                        placeholder="Saisir num??ro ">
                                    @error('capacite')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="prix">Prix (Par Heure) <span style="color: red">* </span> </label>
                                    <input type="text" class="form-control" name="prix" value="{{ $salle->prix }}" id="prix"
                                        placeholder="Saisir prix">
                                    @error('prix')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Description * <span
                                            style="color: red">* </span> </label>
                                    <textarea cols="10" rows="7" class="form-control" name="description" value="{{ $salle->description }}" id="description"
                                        placeholder="Saisir description... ">{{ old('description') }}</textarea>
                                    @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Image *<span
                                            style="color: red">* </span> </label>
                                    <input type="file" class="form-control" name="image" value="{{ old('image') }}" id="image"
                                        placeholder="Saisir num??ro ">
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
