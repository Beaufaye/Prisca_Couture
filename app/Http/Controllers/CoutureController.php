<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\couture;
use App\Models\clients;
use App\Models\modeles;
class CoutureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function couture()
    {
        $couture = Couture::all();
        return view('Couture.couture', compact('couture'));
    }


    public function coutures()
    {
        $modeles = Modeles::all();
        $clients = Clients::all();
        return view('Couture.ajout_couture', compact('modeles', 'clients'));
    }
    public function coutureT(Request $request)
    {
        $request->validate([
            'date_depot' => 'required',
             'date_recuperation' => 'required',
             'modeles_id' => 'required',
             'clients_id' => 'required',
         ]);

        $couture = new Couture();
        $couture->date_depot = $request->date_depot;
        $couture->date_recuperation = $request->date_recuperation;
        $couture->modeles_id = $request->modeles_id;
        $couture->clients_id = $request->clients_id;
        $couture->save();

        return redirect('couture')->with('status', 'Le modèle a bien été ajouté.');
        
    }
    /**
     * Show the form for creating a new resource.
     */
    

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
