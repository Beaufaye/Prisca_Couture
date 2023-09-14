<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\paiement;
use App\Models\clients;
class PaiementController extends Controller
{
    
    public function paiement()
    {
        $paiement = Paiement::all();
        return view('Paiement.paiement', compact('paiement'));
    }

    
    public function paiements()
    {
        $clients = Clients::all();
        return view('Paiement.ajout_paiement', compact('clients'));
    }

    public function paiementT(Request $request)
    {
         $request->validate([
             
             'objet' => 'required',
             'montant' => 'required', 
             'reste' => 'required',
             'date_paiement' => 'required',
             'clients_id' => 'required',
             
         ]);

        $paiement = new Paiement();
        $paiement->objet = $request->objet;
        $paiement->montant = $request->montant;
        $paiement->reste = $request->reste;
        $paiement->date_paiement = $request->date_paiement;
        $paiement->clients_id = $request->clients_id;
        $paiement->save();

        return redirect('paiement')->with('status', 'Le paiement a bien été effectué.');
    }

    public function show(string $id)
    {
        //
    }

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
