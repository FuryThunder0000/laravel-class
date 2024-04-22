@extends('layout')
@section('title','groupes')
@section('heading','ISTA NTIC SYBA Groupes')
@section('content')
<div class="container-lg">
      <div class="table-responsive">
            <div class="table-wrapper">
                  <div class="table-title">
                        <div class="row">
                              <div class="col-sm-8">
                                    <h2>Liste de <b>Groupes</b></h2>
                              </div>
                              <div class="col-sm-4">
                                    <a href="{{route('groupes.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</a>
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
                                    <th>Nom</th>
                                    <th>Actions</th>
                              </tr>
                        </thead>
                        <tbody>
                              @if (count($groupes)>0)
                              @foreach ( $groupes as $groupe )
                              <tr>
                                    <td>{{$groupe->libelle}}</td>
                                    <td style="width: 130px;">
                                          <a class="details" href="{{route('groupes.show', $groupe->id)}}" title="details" data-toggle="tooltip"><i class="material-icons">&#xE88E;</i></a>
                                          <a class="edit" href="{{route('groupes.edit', $groupe->id)}}" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                          <form action="{{route('groupes.destroy',$groupe->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('voulez vous supprimer ce groupe')" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></button>
                                          </form>
                                    </td>
                              </tr>
                              @endforeach
                              @else
                                  <tr style="text-align: center">
                                    <td colspan="2">
                                          Aucune Groupe Trouve
                                    </td>
                                  </tr>
                              @endif

                        </tbody>
                  </table>
            </div>
      </div>
</div>
@endsection