@extends('layout')
@section('title','filiere')
@section('heading','ISTA NTIC SYBA Rechereche')
@section('content')
    <h1>Liste de Recherche</h1>
    <a href="{{ route('Recherche.RechercheGroupeStagiairesAnneeFormation')}}">Recherche Par Groupe Stagiaires Annee Formation</a>
    <br>
    <a href="{{ route('Recherche.RechercheGroupe')}}">Recherche  Stagiaires Par Groupe</a>
    <br>
    <a href="{{ route('Recherche.RechercheFormateur')}}">Recherche  Formateur Par Matricule</a>
    <br>
    <a href="{{ route('Recherche.RechercheNbStagiaireParGroupe')}}">Recherche  Nombre de Stagiaires Par Groupe</a>
    <br>
    <a href="{{ route('Recherche.RechercheFormateurMinMaxSalaire')}}">Recherche Formateurs Min et Max Salaire</a>
    <br>
    <a href="{{ route('Recherche.RechercheFormateurParSalaire')}}">Recherche Formateurs par tranche Salaire</a>
@endsection