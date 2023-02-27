<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Personne_dossier;
use App\Models\Personne_morale;
use App\Models\Personne_physique;
use App\Models\Role_personne;
use Illuminate\Http\Request;

class personneDossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $personne_dossiers = Personne_dossier::all();
        $role_personnes=Role_personne::all();
        $personne_morales = Personne_morale::all();
        $personne_physiques = Personne_physique::all();
        return view('gestionDeDossier.personneDossier.index',['personne_dossiers'=>$personne_dossiers,'personne_morales'=>$personne_morales,'personne_physiques'=>$personne_physiques,'role_personnes'=>$role_personnes]);
    }

      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gestionDeDossier.personneDossier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'personne_physique_id'=>'required',
            'dossier_id'=>'required',
            'role_personne_id'=>'required',
        ]);

        // la request
        $personne_dossiers = new personne_dossier([
            'personne_physique_id' => $request->get('personne_physique_id'),
            'dossier_id' => $request->get('dossier_id'),
            'role_personne_id' => $request->get('role_personne_id'),
        ]);

        $personne_dossiers->save();

        return redirect('/')->with('success', "la personne_dossier est enregistrer avec succès");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $personne_dossiers=personne_dossier::findOrFail($id);
        return view('gestionDeDossier.personneDossier.show',['personne_dossiers'=>$personne_dossiers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $personne_dossiers=personne_dossier::findOrFail($id);
        $role_personnes=Role_personne::all();
        $personne_morales = Personne_morale::all();
        $personne_physiques = Personne_physique::all();
        return view('gestionDeDossier.personneDossier.edit',['personne_dossiers'=>$personne_dossiers,'personne_morales'=>$personne_morales,'personne_physiques'=>$personne_physiques,'role_personnes'=>$role_personnes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // le validation
        $request->validate([
            'personne_physique_id'=>'required',
            'dossier_id'=>'required',
            'role_personne_id'=>'required',

        ]);
        // la request
        $personne_dossiers=personne_dossier::findOrFail($id);
        $personne_dossiers->personne_physique_id = $request->get('personne_physique_id');
        $personne_dossiers->dossier_id = $request->get('dossier_id');
        $personne_dossiers->role_personne_id = $request->get('role_personne_id');
        $personne_dossiers->update();
        return redirect('/')->with('success', "l'personne_dossier est modifier avec succès");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $personne_dossiers=personne_dossier::findOrFail($id);
        $personne_dossiers->delete();
        return redirect('/')->with('success', "la personne_dossier est supprimer avec succès");
    }
}
