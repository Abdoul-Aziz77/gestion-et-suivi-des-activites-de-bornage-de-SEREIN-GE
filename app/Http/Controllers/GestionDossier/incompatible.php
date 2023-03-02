<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Parcelle;
use Illuminate\Http\Request;

class incompatible extends Controller
{
    //

    public function ajoutParcelle(Request $request)
    {
        //
        /* $request->validate([
            'personne_moral_id'=>'required',
            'personne_physique_id'=>'required',
            'dossier_id'=>'required',
            'lot'=>'required',
            'section'=>'required',
            'superficie'=>'required',

        ]); */

        // la request
        $parcelles = new Parcelle([
            'personne_moral_id'=> $request-> get('personne_moral_id'),
            'personne_physique_id' => $request->get('personne_physique_id'),
            'dossier_id' => $request->get('dossier_id'),
            'lot' => $request->get('lot'),
            'section' => $request->get('section'),
            'superficie' => $request->get('superficie'),

        ]);

        $parcelles->save();

        return redirect('/')->with('success', "l'parcelle est enregistrer avec succès");
    }
}
