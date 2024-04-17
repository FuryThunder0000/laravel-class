<?php

namespace App\Http\Controllers;
use App\models\Filiere;

use Illuminate\Http\Request;

class FiliereController extends Controller
{
    public function index()
    {
        $filieres = Filiere::all();
        return view('filieres.index', compact('filieres'));

        // $filiere = Filiere::find(1);
        // $groupes = $filiere->groupes;
        // dd($groupes);
        // return response()->json($groupes);
    }

    public function create()
    {
        return view('filieres.create');
    }

    public function store(Request $request)
    {
        // $data = $request->validate(([
        //     'titre' => 'required',
        //     'description' => 'required',
        // ]));
        
        $titre = $request->input('titre');
        $description = $request->input('description');


        Filiere::create([
                            'titre' =>$titre,
                            'description' =>$description,
                        ]);
        return redirect()->route('filieres.index');
    }

    public function show(string $id)
    {
        $filiere = Filiere::find($id);
        // $groupes = $filiere->groupes;
        // return view('filieres.show', compact('filiere','groupes'));
        return view('filieres.show', compact('filiere'));
    }

    public function edit(string $id)
    {
        $filiere = Filiere::find($id);
        return view('filieres.edit', compact('filiere'));
    }

    public function update(Request $request, string $id)
    {
        $filiere = Filiere::find($id);

        $filiere->titre = $request->input('titre');
        $filiere->description = $request->input('description');

        $filiere->save();
        return redirect()->route('filieres.index');
    }

    public function destroy(string $id)
    {
        $filiere = Filiere::find($id);
        $filiere->delete();
        return redirect()->route('filieres.index');

    }
}
