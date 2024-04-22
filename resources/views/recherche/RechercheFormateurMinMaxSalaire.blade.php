@extends('layout')
@section('title','formateurs')
@section('heading','ISTA NTIC SYBA Rechereche')
@section('content')
      <div class="col-sm-8">
            <h4>Recherche Formateurs Min Salaire</h2>
      </div>
      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Salaire</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($FormateursMinSalaire as $MinSalaire)
                  <tr>
                    <td>{{$MinSalaire->matricule}}</td>
                    <td>{{$MinSalaire->nom}}</td>
                    <td>{{$MinSalaire->prenom}}</td>
                    <td>{{$MinSalaire->salaire}}</td>
              </tr>
                  @endforeach
            </tbody>
      </table>
      <div class="col-sm-8">
        <h4>Recherche Formateurs Max Salaire</h2>
  </div>
  <table class="table table-bordered">
        <thead>
              <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Salaire</th>
              </tr>
        </thead>
        <tbody>
              @foreach ($FormateursMaxSalaire as $MaxSalaire)
              <tr>
                <td>{{$MaxSalaire->matricule}}</td>
                <td>{{$MaxSalaire->nom}}</td>
                <td>{{$MaxSalaire->prenom}}</td>
                <td>{{$MaxSalaire->salaire}}</td>
          </tr>
              @endforeach
        </tbody>
  </table>
@endsection
@section('back')
<h3>
      <a class="details" href="{{route('Recherche')}}" title="details" data-toggle="tooltip">
            <i class="material-icons">&#xE5C4;</i>
            Back
      </a>
</h3>
@endsection