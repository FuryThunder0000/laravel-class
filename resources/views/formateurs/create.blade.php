@extends('layout')
@section('title','stagiaires')
@section('heading', ' New Stagiaire')
@section('content')
<div class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-5">
                                <h2 class="h3">New Stagiaire</h2>
                            </div>
                        </div>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                    </div>
                    @endif
                    <form action="{{route('stagiaires.store')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row gy-3 gy-md-4 overflow-hidden">
                            <div class="col-12">
                                <label for="nom" class="form-label">Nom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required>
                            </div>
                            <div class="col-12">
                                <label for="prenom" class="form-label">Prenom <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom" required>
                            </div>
                            <div class="col-12">
                                <label for="genre" class="form-label">Genre <span class="text-danger">*</span></label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="genre" id="genre" value="M">
                                    <label class="form-check-label" for="genre">Homme</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="genre" id="genre" value="F">
                                    <label class="form-check-label" for="genre">Femme</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="date_naissance" class="form-label">Date de naissance <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="date_naissance" id="date_naissance" placeholder="Date de naissance">
                            </div>
                            <div class="col-12">
                                <label for="moyenne" class="form-label">Moyenne <span class="text-danger">*</span></label>
                                <input type="number" class="form-control" name="moyenne" id="moyenne" placeholder="Moyenne" required>
                            </div>
                            <div class="col-12">
                                <label for="groupe" class="form-label">groupe<span class="text-danger">*</span></label>
                                <select name="groupe_id" id="groupe_id" class="form-control" required>
                                    @foreach ($groupes as $groupe)
                                    <option value="{{$groupe->id}}">{{$groupe->libelle}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="btn btn-lg btn-primary" type="submit">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('back')
<h3>
    <a class="details" href="{{route('groupes.index')}}" title="details" data-toggle="tooltip">
        <i class="material-icons">&#xE5C4;</i>
        Back
    </a>
</h3>
@endsection