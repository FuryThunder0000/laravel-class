<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormateurGroupeRequest;
use App\models\Formateur;
use App\models\Groupe;
use App\models\Formateur_Groupe;

class FormateurGroupeController extends Controller
{

    public function index(){
        $resultats =  Formateur::join('formateur_groupe','formateurs.id','=','formateur_groupe.formateur_id')
        ->join('groupes','formateur_groupe.groupe_id','=','groupes.id')
        ->selectRaw('
                        formateur_groupe.id ,
                        concat(formateurs.nom," ",formateurs.prenom) as nom_complet,
                        formateurs.id as formateur_id,
                        groupes.id as groupe_id,
                        groupes.libelle,
                        formateur_groupe.annee_formation
                    ')
        ->orderby('groupes.libelle','ASC')
        ->orderby('formateur_groupe.annee_formation','DESC')
        ->get();
        return view('formateursGroupes.index',compact('resultats'));
    }
    public function create(){
        $formateurs = Formateur::all();
        $groupes = Groupe::all();
        return view('formateursGroupes.create',compact('formateurs','groupes'));
    }
    public function affecter(FormateurGroupeRequest $request){
        $formateurId = $request->input('formateur_id');
        $groupeId = $request->input('groupe_id');
        $anneeFormation = $request->input('annee_formation');

        // Formateur_Groupe::create(
        //         [
        //             'formateur_id' =>$formateurId,
        //             'groupe_id' =>$groupeId,
        //             'annee_formation' =>$anneeFormation,
        //         ]
        //     );

        $formateur = Formateur::find($formateurId);
        $groupe = Groupe::find($groupeId);
        $formateur->groupes()->attach(
            $groupe,
            [
                'annee_formation' => $anneeFormation,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        return redirect()->route('formateursGroupes.index')->with('success', 'affectation bien enregistrer');
    }

    public function edit($id){
        $affectation = Formateur_Groupe::find($id);
        $formateurs = Formateur::all();
        $groupes = Groupe::all();
        // dd($affectation);
        return view('formateursGroupes.edit',compact('affectation','formateurs','groupes'));
    }

    // public function update(FormateurGroupeRequest $request, string $id)
    // {
    //     // dd($request);
    //     // $affectation = Formateur_Groupe::find($id);
    //     // $affectation->update($request->all());
    //     $formateurID = $request->formateur_id;
    //     $groupeID = $request->groupe_id;
    //     $formateur = Formateur::find($formateurID);
    //     $groupe = Groupe::find($groupeID);

    //     $formateur->groupes()->updateExistingPivot(
    //         $groupe, 
    //         [
    //         'groupe_id' => $request->groupe_id,
    //         'annee_formation' => $request->annee_formation,
    //         ]
    // );
    //     return redirect()->route('formateursGroupes.index')->with('success', 'affectation bien modifie');
    // }

    public function update(FormateurGroupeRequest $request)
    {
        $formateur = Formateur::find($request->input('formateur_id'));
        $groupe = Groupe::find($request->input('groupe_id'));
        $formateur_id = $request->input('formateur_id');
        $groupe_id = $request->input('groupe_id');
        $annee_formation = $request->input('annee_formation');

        $formateur->groupes()->sync([$groupe_id]);
        $groupe->formateurs()->sync([$formateur_id]);
        $formateur->groupes()->updateExistingPivot($groupe_id, ['annee_formation' => $annee_formation]);

        return redirect()->route('formateursGroupes.index')->with('success', 'affectation bien modifie');
    }
    public function destroy($formateur_id,$groupe_id){
        // dd($groupe_id);
        // $affectation = Formateur_Groupe::find($id);
        // $affectation->delete();
        $formateur = Formateur::find($formateur_id);
        $groupe = Groupe::find($groupe_id);
        $formateur->groupes()->detach($groupe);
        return redirect()->route('formateursGroupes.index')->with('success','affectation bien supprime');
    }
}
