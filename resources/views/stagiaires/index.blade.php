@extends('layout')
@section('title','stagiaires')
@section('heading','ISTA NTIC SYBA Stagiaires')
@section('content')
<div class="container-lg">
      <div class="table-responsive">
            <div class="table-wrapper">
                  <div class="table-title">
                        <div class="row">
                              <div class="col-sm-8">
                                    <h2>Liste de <b>Stagiaires</b></h2>
                              </div>
                              <div class="col-sm-4">
                                    <a href="{{route('stagiaires.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                              </div>
                        </div>
                  </div>
                  <table class="table table-bordered">
                        <thead>
                              <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Date de naissance</th>
                                    <th>Moyenne</th>
                                    <th>Actions</th>
                              </tr>
                        </thead>
                        <tbody>
                              @if (count($stagiaires)>0)
                              @foreach ( $stagiaires as $stagiaire )
                              <tr>
                                    <td>{{$stagiaire->nom}}</td>
                                    <td>{{$stagiaire->prenom}}</td>
                                    <td>{{$stagiaire->date_naissance}}</td>
                                    <td>{{$stagiaire->moyenne}}</td>
                                    <td style="width: 130px;">
                                          <a class="details" href="{{route('stagiaires.show', $stagiaire->id)}}" title="details" data-toggle="tooltip"><i class="material-icons">&#xE88E;</i></a>
                                          <a class="edit" href="{{route('stagiaires.edit', $stagiaire->id)}}" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                          <form action="{{route('stagiaires.destroy',$stagiaire->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit"onclick="return confirm('voulez vous supprimer ce stagiaire')" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                                          </form>
                                    </td>
                              </tr>
                              @endforeach
                              @else
                                  <tr style="text-align: center">
                                    <td colspan="5">
                                          Aucune Stagiaire Trouve
                                    </td>
                                  </tr>
                              @endif
                        </tbody>
                  </table>
            </div>
      </div>
</div>
@endsection