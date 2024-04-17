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
                                    <h2>Liste de <b>Filieres</b></h2>
                              </div>
                              <div class="col-sm-4">
                                    <a href="{{route('filieres.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
                              </div>
                        </div>
                  </div>
                  <table class="table table-bordered">
                        <thead>
                              <tr>
                                    <th>titre</th>
                                    <th>description</th>
                                    <th>Actions</th>
                              </tr>
                        </thead>
                        <tbody>
                              @if (count($filieres)>0)
                              @foreach ( $filieres as $filiere )
                              <tr>
                                    <td>{{$filiere->titre}}</td>
                                    <td>{{$filiere->description}}</td>
                                    <td style="width: 130px;">
                                          <a class="details" href="{{route('filieres.show', $filiere->id)}}" title="details" data-toggle="tooltip"><i class="material-icons">&#xE88E;</i></a>
                                          <a class="edit" href="{{route('filieres.edit', $filiere->id)}}" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                          <form action="{{route('filieres.destroy',$filiere->id)}}" method="post">
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