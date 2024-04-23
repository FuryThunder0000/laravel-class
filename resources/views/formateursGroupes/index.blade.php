@extends('layout')
@section('title','filiere')
@section('heading','ISTA NTIC SYBA Filieres')
@section('content')
<div class="container-lg">
      <div class="table-responsive">
            <div class="table-wrapper">
                  <div class="table-title">
                        <div class="row">
                              <div class="col-sm-8">
                                    <h2>Liste de <b>Affectation</b></h2>
                              </div>
                              <div class="col-sm-4">
                                    <a href="{{route('formateursGroupes.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                              </div>
                        </div>
                  </div>
                  @if (session('success'))
                        <div class="alert alert-success">
                              <span>{{ session('success') }}</span>
                        </div>
                  @endif
                  <table class="table table-bordered">
                        <thead>
                              <tr>
                                    <th>Formateur</th>
                                    <th>Groupe</th>
                                    <th>Annee Formation</th>
                                    <th>Actions</th>
                              </tr>
                        </thead>
                        <tbody>
                              @if (count($resultats)>0)
                              @foreach ( $resultats as $resultat )
                              <tr>
                                    <td>{{$resultat->nom_complet}}</td>
                                    <td>{{$resultat->libelle}}</td>
                                    <td>{{$resultat->annee_formation}}</td>
                                    <td style="width: 130px;">
                                          {{-- <a class="details" href="{{route('formateursGroupes.show', $resultat->id)}}" title="details" data-toggle="tooltip"><i class="material-icons">&#xE88E;</i></a> --}}
                                          <a class="edit" href="{{route('formateursGroupes.edit', $resultat->id)}}" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                          <form action="{{route('formateursGroupes.destroy',[
                                                            'formateur_id' => $resultat->formateur_id,
                                                            'groupe_id' => $resultat->groupe_id
                                                            ])}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('voulez vous supprimer cette filiere')" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                                          </form>
                                    </td>
                              </tr>
                              @endforeach
                              @else
                                  <tr style="text-align: center">
                                    <td colspan="3">
                                          Aucune Filiere Trouve
                                    </td>
                                  </tr>
                              @endif


                        </tbody>
                  </table>
            </div>
      </div>
</div>
@endsection