<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Dossier;
use App\Models\Observation;
use App\Models\Personnel;
use Illuminate\Http\Request;

class observationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $observations = Observation::all();
        $dossiers = Dossier::all();
        $personnels = Personnel::all();
        return view('gestionDeDossier.observation.index',['observations'=>$observations,'dossiers'=>$dossiers,'personnels'=>$personnels]);
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
        $personnels = Personnel::all();
        return view('gestionDeDossier.observation.create',['dossiers'=>$dossiers,'personnels'=>$personnels]);
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
        $observations = new Observation([
            'dossier_id'=> $request-> get('dossier_id'),
            'personnel_id' => $request->get('personnel_id'),
            'contenu'=> $request-> get('contenu'),
            'date_observation'=> $request-> get('date_observation'),
        ]);

        $observations->save();

        return redirect(route("dossier.index"))->with('success', "L'observation est enregistrer avec succès");
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
        $observations=observation::findOrFail($id);
        return view('gestionDeDossier.observation.show',['observations'=>$observations]);
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
        $observations=observation::findOrFail($id);
        $dossiers = Dossier::all();
        $personnels = Personnel::all();
        return view('gestionDeDossier.observation.edit',['observations'=>$observations,'dossiers'=>$dossiers,'personnels'=>$personnels]);
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
        //
        $observations=observation::findOrFail($id);
        $observations->dossier_id=$request-> get('dossier_id');
        $observations->personnel_id = $request->get('personnel_id');
        $observations->contenu = $request->get('contenu');
        $observations->date_observation = $request->get('date_observation');

        $observations->update();
        return redirect('/')->with('success', "l'observation est modifier avec succès");
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
        $observations=observation::findOrFail($id);
        $observations->delete();
        return redirect('/')->with('success', "l'observation est supprimer avec succès");
    }
}
