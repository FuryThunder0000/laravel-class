<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Groupe;
use \App\Models\Stagiaire;
use \App\Models\Formateur;

class RechercheController extends Controller
{
    public function RechercheGroupeStagiairesAnneeFormation() {
        
        $resultats = Groupe::join('stagiaires','groupes.id','=','stagiaires.groupe_id')
        ->join('formateur_groupe','groupes.id','=','formateur_groupe.groupe_id')
        ->select('stagiaires.nom','stagiaires.prenom','groupes.libelle','formateur_groupe.annee_formation')
        ->orderby('groupes.libelle')
        ->orderby('formateur_groupe.annee_formation')
        ->get();
        // return response()->json($resultat);
        // dd($resultat);
        return view('recherche.RechercheGroupeStagiairesAnneeFormation', compact('resultats'));

    }
    public function RechercheGroupe() {
        $groupes = Groupe::all();
        return view('recherche.RechercheStagiairesParGroupe',compact('groupes'));
        // return response()->json($resultat);
        // dd($t);
    }
    public function RechercheStagiairesParGroupe(Request $request) {
        $groupes = Groupe::all();
        $groupe_id = $request->groupe_id;
        $old_groupe_id = $groupe_id;
        $stagiaires = Stagiaire::where('groupe_id',$groupe_id)->get();
        return view('recherche.RechercheStagiairesParGroupe',compact('groupes','stagiaires','old_groupe_id'));
        // return response()->json($resultat);
    }
    public function RechercheFormateur() {
        return view('recherche.RechercheFormateurParMatricule');

    }
    public function RechercheFormateurParMatricule(Request $request) {
        $matricule = $request->matricule; 
        
        $formateur = Formateur::where('matricule',$matricule)->first();
        return view('recherche.RechercheFormateurParMatricule',compact('formateur'));
        // dd($formateur);
    }

    public function RechercheNbStagiaireParGroupe(){
        $NbStagiairesParGroupe = Stagiaire::join('groupes', 'stagiaires.groupe_id','=','groupes.id')
                                ->selectRaw('groupes.libelle, count(*) as nbInscrit')
                                ->groupby('groupes.libelle')
                                ->get();
        
        return view('recherche.RechercheNbStagiaireParGroupe',compact('NbStagiairesParGroupe'));

    }

    public function RechercheFormateurMinMaxSalaire(){
        $FormateursMinSalaire = Formateur::where('salaire','=',Formateur::min('salaire'))->get();
        $FormateursMaxSalaire = Formateur::where('salaire','=',Formateur::max('salaire'))->get();

        return view('recherche.RechercheFormateurMinMaxSalaire',compact('FormateursMinSalaire','FormateursMaxSalaire'));
    }

    public function RechercheFormateurParSalaires() {
        return view('recherche.RechercheFormateurTranchSalaire');

    }
    public function RechercheFormateurTranchSalaire(Request $request){
        $MinSalaire = $request->MinSalaire;
        $MaxSalaire = $request->MaxSalaire;
        $formateurs = Formateur::whereBetween('salaire',[$MinSalaire,$MaxSalaire])->get();

        return view('recherche.RechercheFormateurTranchSalaire',compact('formateurs'));
    }
}
