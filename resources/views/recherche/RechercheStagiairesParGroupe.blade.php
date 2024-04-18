@extends('layout')
@section('title','filiere')
@section('heading','ISTA NTIC SYBA Rechereche')
@section('content')
      <div class="col-sm-8">
            <h4>Recherche Stagiaires Par Groupe</h2>
      </div>
      <form action="{{route('Recherche.RechercheStagiairesParGroupe')}}" method="post">
        @csrf
        @method('POST')
        <div class="row gy-3 gy-md-4 overflow-hidden">
            <div class="col-6">

                <select name="groupe_id" id="groupe_id" class="form-control" required>
                    @foreach ($groupes as $groupe)
                    <option value="{{$groupe->id}}"
                        @isset($old_groupe_id)
                            @if ($old_groupe_id == $groupe->id)
                                selected
                            @endif 
                        @endisset
                    >
                        {{$groupe->libelle}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit">Rechercher</button>
                </div>
            </div>
        </div>
    </form>
    @isset($stagiaires)
        <table class="table table-bordered">
            <thead>
                <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                </tr>
            </thead>
        <tbody>
            @if(count($stagiaires) == 0)
                <tr>
                    <td colspan="2">Aucun Stagiaire Inscrit</td>                      
                </tr>
            @else
                @foreach ($stagiaires as $stagiaire)
                <tr>
                    <td>{{$stagiaire->nom}}</td>                      
                    <td>{{$stagiaire->prenom}}</td>                      
                </tr>
                @endforeach
            @endempty
              
        </tbody>
    </table>
    @endisset
   
@endsection
@section('back')
<h3>
      <a class="details" href="{{route('Recherche')}}" title="details" data-toggle="tooltip">
            <i class="material-icons">&#xE5C4;</i>
            Back
      </a>
</h3>

@endsection