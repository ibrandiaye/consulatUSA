{{-- \resources\views\permissions\create.blade.php --}}
@extends('welcome')


@section('title', '| Enregister Département')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">

                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" >ACCUEIL</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('carte.index') }}" >LISTE  UTILISATEUR </a></li>

                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('carte.store') }}" method="POST">
            @csrf
            <div class="card">
            <div class="card-header  text-center">FORMULAIRE D'ENREGISTREMENT D'UN UTILISATEUR</div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-lg-6 offset-lg-3">
                        <div class="form-group">
                            <label>Nom </label>
                            <input type="text" name="nom"  value="{{ old('nom') }}" class="form-control"required>
                        </div>
                    </div>
                    <div class="col-lg-6  offset-lg-3">
                        <div class="form-group">
                            <label>Prenom </label>
                            <input type="text" name="prenom"  value="{{ old('prenom') }}" class="form-control"required>
                        </div>
                    </div>
                    <div class="col-lg-6  offset-lg-3">
                        <div class="form-group">
                            <label>Date de Naissance </label>
                            <input type="text" name="date_naiss"  value="{{ old('date_naiss') }}" class="form-control"required>
                        </div>
                    </div>

                    <div class="col-lg-6  offset-lg-3">
                        <div class="form-group">
                            <label>Lieu de Naissance </label>
                            <input type="text" name="lieu_naiss"  value="{{ old('lieu_naiss') }}" class="form-control"required>
                        </div>
                    </div>
                    <div class="col-lg-6  offset-lg-3">
                        <div class="form-group">
                            <label>Date delivrance </label>
                            <input type="text" name="date_delivrance"  value="{{ old('date_delivrance') }}" class="form-control"required>
                        </div>
                    </div>
                    <div class="col-lg-6  offset-lg-3">
                        <div class="form-group">
                            <label>Date D'espiration </label>
                            <input type="text" name="date_expiration"  value="{{ old('date_expiration') }}" class="form-control"required>
                        </div>
                    </div>
                    <div class="col-lg-6  offset-lg-3">
                        <div class="form-group">
                            <label>Sexte </label>
                            <input type="text" name="sexe"  value="{{ old('sexe') }}" class="form-control"required>
                        </div>
                    </div>
                    <div class="col-lg-6  offset-lg-3">
                        <div class="form-group">
                            <label>Numero </label>
                            <input type="text" name="numero"  value="{{ old('numero') }}" class="form-control"required>
                        </div>
                    </div>
                    <div>
                        <br>
                        <center>
                     
                            <button type="submit" class="btn btn-success btn btn-lg "> ENREGISTRER</button>
                        </center>
                    </div>
                </div>

            </div>

        </form>
    </div>
</div>

        

@endsection
@section('script')

@endsection


