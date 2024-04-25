@extends('layout')
@section('title','filiere')
@section('heading', 'Affectation Edit')
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
                                                <h2 class="h3">Edit Affectation</h2>
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
                              <form action="{{route('formateursGroupes.update')}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="row gy-3 gy-md-4 overflow-hidden">

                                          <div class="col-12">
                                                <label for="formateur" class="form-label">Formateur<span class="text-danger">*</span></label>
                                                <select name="formateur_id" id="formateur_id" class="form-control">
                                                    @foreach ($formateurs as $formateur)
                                                    <option value="{{$formateur->id}}" @if($affectation->formateur_id === $formateur->id) selected @endif>{{$formateur->nom . ' '.$formateur->prenom}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="groupe" class="form-label">Groupe<span class="text-danger">*</span></label>
                                                <select name="groupe_id" id="groupe_id" class="form-control">
                                                    @foreach ($groupes as $groupe)
                                                    <option value="{{$groupe->id}}"  @if($affectation->groupe_id === $groupe->id) selected @endif>{{$groupe->libelle}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="annee_formation" class="form-label">Annee de formation <span class="text-danger">*</span></label>
                                                <select name="annee_formation" id="annee_formation" class="form-control">
                                                    <option value="2023-2024" @if($affectation->annee_formation == '2023-2024') selected @endif>2023-2024</option>
                                                    <option value="2022-2023" @if($affectation->annee_formation == '2022-2023') selected @endif>2022-2023</option>
                                                    <option value="2021-2022" @if($affectation->annee_formation == '2021-2022') selected @endif>2021-2022</option>
                                                    <option value="2020-2021" @if($affectation->annee_formation == '2020-2021') selected @endif>2020-2021</option>
                                                </select>
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
      <a class="details" href="{{route('formateursGroupes.index')}}" title="details" data-toggle="tooltip">
            <i class="material-icons">&#xE5C4;</i>
            Back
      </a>
</h3>
@endsection