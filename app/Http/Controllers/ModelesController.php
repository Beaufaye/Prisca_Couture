<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\modeles;
class ModelesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function modeles()
    {
        $modeles = Modeles::all();
        return view('Modeles.modeles', compact('modeles'));
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
    public function modele(Request $request)
    {
        return view('Modeles.ajouterM');
    }


    public function modeleT(Request $request)
    {
        // $request->validate([
        //     'nom_prenom' => 'required',
        //     'adresse' => 'required',
        //     'telephone' => 'required',
        //     'sexe' => 'required',
        // ]);

        $modeles = new Modeles();
        $modeles->nom_modele = $request->nom_modele;
        $modeles->image = $request->image->store('photo', 'public');
        $modeles->save();

        return redirect('modele')->with('status', 'Le modèle a bien été ajouté.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
