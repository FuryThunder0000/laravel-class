@extends('layout')
@section('title','Formateur')
@section('heading','ISTA NTIC SYBA Rechereche')
@section('content')
      <div class="col-sm-8">
            <h4>Recherche Formateurs Par Salaire</h2>
      </div>
      <form action="{{route('Recherche.RechercheFormateurTranchSalaire')}}" method="post">
        @csrf
        @method('POST')
        <div class="row gy-3 gy-md-4 overflow-hidden">
            <div class="col-3">
                <input type="text" class="form-control" name="MinSalaire" id="MinSalaire" placeholder="Min Salaire">
            </div>
            <div class="col-3">
                <input type="text" class="form-control" name="MaxSalaire" id="MaxSalaire" placeholder="Max Salaire">
            </div>
            <div class="col-3">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Rechercher</button>
                </div>
            </div>
        </div>
    </form>
@isset($formateurs)
@if (count($formateurs) != 0)
    <br>
    <h6>Nombre de Resultat trouvee est : {{count($formateurs)  }}</h6>
    <br>

    <table class="table table-bordered">
        <thead>
              <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Genre</th>
                    <th>Date de naissance</th>
                    <th>Salaire</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($formateurs as $formateur)
            <tr>
                <td>{{$formateur->matricule}}</td>
                <td>{{$formateur->nom}}</td>
                <td>{{$formateur->prenom}}</td>
                <td>{{$formateur->genre}}</td>
                <td>{{$formateur->date_naissance}}</td>
                <td>{{$formateur->salaire}}</td>
            </tr>
            @endforeach
        </tbody>
</table>

@else
<table class="table table-bordered">
    <thead>
        <tr>
            <th colspan="6">Aucun Formateur Trouvé</th>
        </tr>
    </thead>
  </table>
  @endif
@endisset
@endsection
@section('back')
<h3>
      <a class="details" href="{{route('Recherche')}}" title="details" data-toggle="tooltip">
            <i class="material-icons">&#xE5C4;</i>
            Back
      </a>
</h3>

@endsection