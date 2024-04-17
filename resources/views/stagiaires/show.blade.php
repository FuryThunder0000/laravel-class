@extends('layout')
@section('title','stagiaires')
@section('heading', 'Stagiaire : ' . $stagiaire->nom . ' ' .$stagiaire->prenom . ' Details')
@section('content')
<div class="column">
      <h2><span>Informations : </span></h2>

      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>genre</th>
                        <th>Date de naissance</th>
                        <th>Moyenne</th>
                        <th>Groupe</th>
                        <th>created at</th>
                        <th>updated at</th>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                        <td>{{$stagiaire->nom}}</td>
                        <td>{{$stagiaire->prenom}}</td>
                        <td>{{$stagiaire->genre}}</td>
                        <td>{{$stagiaire->date_naissance}}</td>
                        <td>{{$stagiaire->moyenne}}</td>
                        <td>{{$nom_groupe}}</td>
                        <td>{{$stagiaire->created_at}}</td>
                        <td>{{$stagiaire->updated_at}}</td>
                        
                  </tr>
            </tbody>
      </table>
</div>
@endsection
@section('back')
<h3>
      <a class="details" href="{{route('stagiaires.index')}}" title="details" data-toggle="tooltip">
            <i class="material-icons">&#xE5C4;</i>
            Back
      </a>
</h3>
@endsection