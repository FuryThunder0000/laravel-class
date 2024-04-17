<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Formateur;


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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
