<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Dossier;
use App\Models\Parcelle;
use App\Models\Personne_morale;
use App\Models\Personne_physique;
use Illuminate\Http\Request;

class parcelleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $parcelles = Parcelle::all();
        $dossiers = Dossier::all();
        $personne_physiques = Personne_physique::all();
        $personne_morales = Personne_morale::all();
        return view('gestionDeDossier.parcelle.index',['parcelles'=>$parcelles,'personne_physiques'=>$personne_physiques,'personne_morales'=>$personne_morales,'dossiers'=>$dossiers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dossiers = Dossier::all();
        $personne_physiques = Personne_physique::all();
        $personne_morales = Personne_morale::all();
        return view('gestionDeDossier.parcelle.create',['personne_physiques'=>$personne_physiques,'personne_morales'=>$personne_morales,'dossiers'=>$dossiers]);
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
            'personne_moral_id'=>'required',
            'personne_physique_id'=>'required',
            'dossier_id'=>'required',
            'lot'=>'required',
            'section'=>'required',
            'superficie'=>'required',

        ]);

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $parcelles=parcelle::findOrFail($id);
        return view('gestionDeDossier.parcelle.show',['parcelles'=>$parcelles]);
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
        $parcelles=parcelle::findOrFail($id);
        $dossiers = Dossier::all();
        $personne_physiques = Personne_physique::all();
        $personne_morales = Personne_morale::all();
        return view('gestionDeDossier.parcelle.edit',['parcelles'=>$parcelles,'personne_physiques'=>$personne_physiques,'personne_morales'=>$personne_morales,'dossiers'=>$dossiers]);
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
            'personne_moral_id'=>'required',
            'personne_physique_id'=>'required',
            'dossier_id'=>'required',
            'lot'=>'required',
            'section'=>'required',
            'superficie'=>'required',
        ]);
        // la request
        $parcelles=parcelle::findOrFail($id);
        $parcelles->personne_moral_id=$request-> get('personne_moral_id');
        $parcelles->personne_physique_id = $request->get('personne_physique_id');
        $parcelles->dossier_id = $request->get('dossier_id');
        $parcelles->lot = $request->get('lot');
        $parcelles->section = $request->get('section');
        $parcelles->superficie = $request->get('superficie');
        $parcelles->update();
        return redirect('/')->with('success', "l'parcelle est modifier avec succès");
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
        $parcelles=parcelle::findOrFail($id);
        $parcelles->delete();
        return redirect('/')->with('success', "l'parcelle est supprimer avec succès");
    }
}
