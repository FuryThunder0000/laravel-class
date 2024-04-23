@extends('layout')
@section('title','groupes')
@section('heading', ' New Groupe')
@section('content')
<div class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-5">
                                <h2 class="h3">New Groupe</h2>
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
                    <form action="{{route('groupes.store')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row gy-3 gy-md-4 overflow-hidden">
                            <div class="col-12">
                                <label for="libelle" class="form-label">Titre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Groupe Titre">
                                @error('libelle')
                                <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="filiere" class="form-label">Filiere<span class="text-danger">*</span></label>
                                <select name="filiere_id" id="filiere_id" class="form-control">
                                    @foreach ($filieres as $filiere)
                                    <option value="{{$filiere->id}}">{{$filiere->titre}}</option>
                                    @endforeach
                                </select>
                                @error('filier_id')
                                    <span class="text-danger d-block">{{ $message }}</span>
                                @enderror
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