<?php

namespace App\Http\Controllers;

use App\Models\Groupe;
use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('stagiaires.index', compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $groupes = Groupe::all();
        return view('stagiaires.create', compact('groupes'));
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
                'moyenne' => 'required|numeric|between:0,20',
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
                'moyenne.required' => 'champ Obligatoire',
                'moyenne.numeric' => 'champ doit etre numerique',
                'moyenne.between' => 'champ doit etre entre 0 et 20',
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
        $stagiaire = Stagiaire::find($id);
        // $nom_groupe = Groupe::find($stagiaire->groupe_id)->libelle;
        $nom_groupe = $stagiaire->groupe->libelle;
        return view('stagiaires.show', compact('stagiaire','nom_groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stagiaire = Stagiaire::find($id);
        $groupes = Groupe::all();
        return view('stagiaires.edit', compact('stagiaire', 'groupes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $stagiaire = Stagiaire::find($id);
        $request->validate([
            'nom' => 'required|alpha',
            'prenom' => 'required|alpha_num',
            'genre' => 'required|in:M,F',
            'date_naissance' => 'required|date',
            'moyenne' => 'required|numeric|between:0,20',
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
            'moyenne.required' => 'champ Obligatoire',
            'moyenne.numeric' => 'champ doit etre numerique',
            'moyenne.between' => 'champ doit etre entre 0 et 20',
            'groupe_id.required' => 'champ Obligatoire',
        ]
    );
        $stagiaire->update($data);
        return redirect()->route('stagiaires.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stagiaire = Stagiaire::find($id);

        if ($stagiaire) {
            $stagiaire->delete();
            return back()->with('success', 'stagiaire deleted successfully!');
        } else {
            return back()->with('error', 'stagiaire not found!');
        }
    }
}
