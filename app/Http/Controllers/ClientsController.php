<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function clients()
    {
        $clients = Clients::all();
        return view('Clients.clients', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function ajouter_client()
    {
        return view('Clients.ajouter_client');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nom_prenom' => 'required',
        //     'adresse' => 'required',
        //     'telephone' => 'required',
        //     'sexe' => 'required',
        // ]);

        $clients = new Clients();
        $clients->nom_prenom = $request->nom_prenom;
        $clients->adresse = $request->adresse;
        $clients->telephone = $request->telephone;
        $clients->sexe = $request->sexe;
        $clients->save();

        return redirect('ajouter_client')->with('status', 'Le client a bien été ajouté.');
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
