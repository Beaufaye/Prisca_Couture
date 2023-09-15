<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\depenses;
use Illuminate\Http\Request;
use App\Models\personnels;
class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function depensel()
    {
        $depense = depenses::all();
        return view('Depenses.depense', compact('depense'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function depenseaj()
    {
        $personnels = Personnels::all();
        return view('Depenses.ajout_depense', compact('personnels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function depense(Request $request)
    {
        $request->validate([
             
            'montant' => 'required', 
            'date_depense' => 'required',
            'personnels_id' => 'required',
            
        ]);

        $depense = new Depenses();
        $depense->montant = $request->montant;
        $depense->date_depense = $request->date_depense;
        $depense->personnels_id = $request->personnels_id;
        $depense->save();
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
