<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\personnels;
class PersonnelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function personnels()
    {
        $personnel = Personnels::all();
        return view('Personnels.personnels', compact('personnel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function personnelT(Request $request)
    {
        $request->validate([
            'photo' => 'required',
             'poste' => 'required',
             'nom' => 'required',
         ]);

        $personnel = new Personnels();
        $personnel->photo = $request->photo->store('photo', 'public', 'app');
        $personnel->poste = $request->poste;
        $personnel->nom = $request->nom;
        $personnel->save();

        return redirect('ajout_personnel')->with('status', 'Le personnel a bien été ajouté.');
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function ajout_personnel()
    {
        return view('Personnels.ajout_personnel');
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
