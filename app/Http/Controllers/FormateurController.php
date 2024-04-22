<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Formateur;
use App\models\Groupe;


class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $formateur1 = Formateur::find(1);
        // $groupes = $formateur1->groupes;
        // $annee_formation = $formateur1->groupes[0]->pivot->annee_formation;

        // return response()->json($annee_formation);

        $formateurs = Formateur::all();
        return view('formateurs.index', compact('formateurs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupes = Groupe::all();
        return view('formateurs.create', compact('groupes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
                'nom' => 'required|alpha',
                'prenom' => 'required|alpha_num',
                'genre' => 'required|in:M,F',
                'date_naissance' => 'required|date',
                'salaire' => 'required|numeric|min:3000',
                'groupe_id' => 'required',
            ],
            [
                'nom.required' => 'champ Obligatoire',
                'nom.alpha' => 'champ doit etre une chaine de caractaire',
                'prenom.required' => 'champ Obligatoire',
                'prenom.alpha_num' => 'champ doit etre alpha numerique',
                'genre.required' => 'champ Obligatoire',
                'genre.in' => 'champ doit etre soit F ou M',
                'date_naissance.required' => 'champ Obligatoire',
                'date_naissance.date' => 'champ doit etre une date',
                'salaire.required' => 'champ Obligatoire',
                'salaire.numeric' => 'champ doit etre numerique',
                'salaire.min' => 'champ doit en minimum 0',
                'groupe_id.required' => 'champ Obligatoire',
            ]
        );
        // dd($data);
        Stagiaire::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'genre' => $request->genre,
            'date_naissance' => $request->date_naissance,
            'moyenne' => $request->moyenne,
            'groupe_id' => $request->groupe_id,
        ]);
        return redirect()->route('stagiaires.index')->with('success', 'Stagiaire bien ajoute');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $formateur = Formateur::find($id);
        return view('formateurs.show', compact('formateur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $formateur = Formateur::find($id);
        $formateur->delete();
        return redirect()->route('formateurs.index');
    }
}
