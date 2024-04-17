@extends('layout')
@section('title','groupes')
@section('heading', 'Groupe : '.$groupe->libelle)
@section('content')
<div class="column">
      <h2><span>Informations : </span></h2>

      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>libelle</th>
                        <th>Filiere</th>
                        <th>created at</th>
                        <th>updated at</th>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                        <td>{{$groupe->libelle}}</td>
                        <td>{{$nom_filiere}}</td>
                        <td>{{$groupe->created_at}}</td>
                        <td>{{$groupe->updated_at}}</td>
                        
                  </tr>
            </tbody>
      </table>
      {{-- liste des stagiaire --}}
      <div class="col-sm-8">
            <h2>Liste des Stagiaires de <b>{{$groupe->libelle}} :</b></h2>
      </div>
      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Date de naissance</th>
                        <th>Moyenne</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($stagiaires as $stagiaire)
                  <tr>
                        <td>{{$stagiaire->nom}}</td>
                        <td>{{$stagiaire->prenom}}</td>
                        <td>{{$stagiaire->date_naissance}}</td>
                        <td>{{$stagiaire->moyenne}}</td>                        
                  </tr>
                  @endforeach
            </tbody>
      </table>
            {{-- liste des formateurs --}}
      <div class="col-sm-8">
            <h2>Liste des Formateur de <b>{{$groupe->libelle}} :</b></h2>
      </div>
      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>Matricule</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Annee formation</th>

                  </tr>
            </thead>
            <tbody>
                  @foreach ($groupe->formateurs as $formateur)
                        <tr>
                              <td>{{$formateur->matricule}}</td>
                              <td>{{$formateur->nom}}</td>
                              <td>{{$formateur->prenom}}</td>
                              <td>{{$formateur->pivot->annee_formation}}</td>
                        </tr>
                  @endforeach
            </tbody>
      </table>
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