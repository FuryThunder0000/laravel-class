@extends('layout')
@section('title','filiere')
@section('heading','ISTA NTIC SYBA Rechereche')
@section('content')
      <div class="col-sm-8">
            <h4>Recherche Par Groupe Stagiaires Annee Formation</h2>
      </div>
      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Groupe</th>
                        <th>Annee de Formation</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($resultats as $resultat)
                  <tr>
                        <td>{{$resultat->nom}}</td>                      
                        <td>{{$resultat->prenom}}</td>                      
                        <td>{{$resultat->libelle}}</td>                      
                        <td>{{$resultat->annee_formation}}</td>                      
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