@extends('layout')
@section('title','filiere')
@section('heading','Filiere : ' . $filiere->titre)
@section('content')
<div class="column">
      <h2><span>Informations : </span></h2>
      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>crerated at</th>
                        <th>updated at</th>
                  </tr>
            </thead>
            <tbody>
                  <tr>
                        <td>{{$filiere->id}}</td>
                        <td>{{$filiere->titre}}</td>
                        <td>{{$filiere->description}}</td>
                        <td>{{$filiere->created_at}}</td>
                        <td>{{$filiere->updated_at}}</td>
                        
                  </tr>


            </tbody>
      </table>
      <div class="col-sm-8">
            <h2>Liste des Groupes:</h2>
      </div>
      <table class="table table-bordered">
            <thead>
                  <tr>
                        <th>libelle</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($filiere->groupes as $groupe)
                  <tr>
                        <td>{{$groupe->libelle}}</td>                      
                  </tr>
                  @endforeach
            </tbody>
      </table>
      
</div>
@endsection
@section('back')
<h3>
      <a class="details" href="{{route('filieres.index')}}" title="details" data-toggle="tooltip">
            <i class="material-icons">&#xE5C4;</i>
            Back
      </a>
</h3>
@endsection