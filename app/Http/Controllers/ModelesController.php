<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\modeles;

class ModelesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function modeles()
    {
        return view('Modeles.modeles');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function storeM(Request $request)
    {
        return view('Modeles.ajouterM');

        $request->validate([
            'nom' => 'required',
            'image' => 'required',
    
        ]);
        $model= new modeles();
        $model->nom = $request->nom;
        $model->image = $request->image;
        $model->class = $request->class;
        $model->save();

        return redirect('/ajouter')->with('status','L\'model a bien été ajouter avec succes');

    }

    /**
     * Store a newly created resource in storage.
     */
      
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
