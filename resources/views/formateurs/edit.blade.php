@extends('layout')
@section('title','formateur')
@section('heading', $formateur->nom . ' '. $formateur->prenom . ' Edit')
@section('content')
<!-- Registration 2 - Bootstrap Brain Component -->
<div class="bg-light py-3 py-md-5">
      <div class="container">
            <div class="row justify-content-md-center">
                  <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                              <div class="row">
                                    <div class="col-12">
                                          <div class="mb-5">
                                                <h2 class="h3">Edit Formateur</h2>
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
                              <form action="{{route('formateurs.update', $formateur->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="row gy-3 gy-md-4 overflow-hidden">
                                          <div class="col-12">
                                                <label for="matricule" class="form-label">Matricule <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="matricule" id="matricule" placeholder="Matricule" value="{{$formateur->matricule}}">
                                                @error('matricule')
                                                <span class="text-danger d-block">{{ $message }}</span>
                                                @enderror
                                          </div>
                                          <div class="col-12">
                                                <label for="nom" class="form-label">Nom <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" value="{{$formateur->nom}}">
                                                @error('nom')
                                                <span class="text-danger d-block">{{ $message }}</span>
                                                @enderror
                                          </div>
                                          <div class="col-12">
                                                <label for="prenom" class="form-label">Prenom <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom" value="{{$formateur->prenom}}">
                                                @error('prenom')
                                                <span class="text-danger d-block">{{ $message }}</span>
                                                @enderror
                                          </div>
                                          <div class="col-12">
                                                <label for="genre" class="form-label">Genre <span class="text-danger">*</span></label><br>
                                                <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="genre" id="genre" value="M" @if($formateur->genre === 'M') checked @endif>
                                                      <label class="form-check-label" for="genre">Homme</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio" name="genre" id="genre" value="F" @if($formateur->genre === 'F') checked @endif>
                                                      <label class="form-check-label" for="genre">Femme</label>
                                                </div>
                                                @error('genre')
                                                <span class="text-danger d-block">{{ $message }}</span>
                                                @enderror
                                          </div>
                                          <div class="col-12">
                                                <label for="date_naissance" class="form-label">Date de naissance <span class="text-danger">*</span></label>
                                                <input type="date" class="form-control" name="date_naissance" id="date_naissance" value="{{$formateur->date_naissance}}" placeholder="Date de naissance">
                                                @error('date_naissance')
                                                <span class="text-danger d-block">{{ $message }}</span>
                                                @enderror
                                          </div>
                                          <div class="col-12">
                                                <label for="salaire" class="form-label">Salaire <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="salaire" id="salaire" placeholder="Salaire" value="{{$formateur->salaire}}">
                                                @error('salaire')
                                                <span class="text-danger d-block">{{ $message }}</span>
                                                @enderror
                                          </div>
                                          <div class="col-12">
                                                <div class="d-grid">
                                                      <button class="btn btn-lg btn-primary" type="submit">Update</button>
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
      <a class="details" href="{{route('formateurs.index')}}" title="details" data-toggle="tooltip">
            <i class="material-icons">&#xE5C4;</i>
            Back
      </a>
</h3>
@endsection