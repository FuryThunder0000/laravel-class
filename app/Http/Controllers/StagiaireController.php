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
        $data = $request->validate(([
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'date_naissance' => 'date',
            'moyenne' => 'required|numeric|between:0.00,20',
            'groupe_id' => 'required',
        ]));
        // dd($data);
        Stagiaire::create($data);
        return redirect()->route('stagiaires.index');
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
        $data = $request->validate(([
            'nom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'date_naissance' => 'date',
            'moyenne' => 'required|numeric|between:0.00,20',
            'groupe_id' => 'required',
        ]));
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
