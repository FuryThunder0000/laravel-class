@extends('layout')
@section('title','groupes')
@section('heading','ISTA NTIC SYBA Rechereche')
@section('content')
      <div class="col-sm-8">
            <h4>Recherche  Nombre de Stagiaires Par Groupe</h2>
      </div>
      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>Nom Groupe</th>
                        <th>Nombre Inscrit</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($NbStagiairesParGroupe as $resultat)
                  <tr>
                        <td>{{$resultat->libelle}}</td>                      
                        <td>{{$resultat->nbInscrit}}</td>                      
                     
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