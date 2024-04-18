@extends('layout')
@section('title','filiere')
@section('heading','ISTA NTIC SYBA Rechereche')
@section('content')
      <div class="col-sm-8">
            <h4>Recherche Formateur Par Matricule</h2>
      </div>
      <form action="{{route('Recherche.RechercheFormateurParMatricule')}}" method="post">
        @csrf
        @method('POST')
        <div class="row gy-3 gy-md-4 overflow-hidden">
            <div class="col-6">
                <input type="text" class="form-control" name="matricule" id="matricule" placeholder="Matricule">
            </div>
            <div class="col-3">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Rechercher</button>
                </div>
            </div>
        </div>
    </form>
    @isset($formateur)
    <table class="table table-bordered">
        <thead>
              <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>genre</th>
                    <th>Date de naissance</th>
                    <th>Salaire</th>
              </tr>
        </thead>
        <tbody>
            @empty($formateur)
                <tr>
                    <td colspan="2">Aucun Formateur Trouvee</td>                      
                </tr>
            @else
            <tr>
                <td>{{$formateur->matricule}}</td>
                <td>{{$formateur->nom}}</td>
                <td>{{$formateur->prenom}}</td>
                <td>{{$formateur->genre}}</td>
                <td>{{$formateur->date_naissance}}</td>
                <td>{{$formateur->salaire}}</td>
            </tr>  
              @endempty
        </tbody>
  </table>
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