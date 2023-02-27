<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Commentaire_dossier;
use App\Models\Dossier;
use App\Models\fichier;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class commentaireDossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $commentaire_dossiers = Commentaire_dossier::all();
        $fichiers = fichier::all();
        $utilisateurs = Utilisateur::all();
        return view('gestionDeDossier.commentaireDossier.index',['commentaire_dossiers'=>$commentaire_dossiers,'utilisateurs'=>$utilisateurs,'fichiers'=>$fichiers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $utilisateurs = Utilisateur::all();
        $dossiers = Dossier::all();
        return view('gestionDeDossier.commentaireDossier.create',['utilisateurs'=>$utilisateurs,'dossiers'=>$dossiers]);
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
        $commentaire_dossiers = new commentaire_dossier([
            'dossier_id'=> $request-> get('dossier_id'),
            'utilisateur_id' => $request->get('utilisateur_id'),
            'contenu'=> $request-> get('contenu'),
            'date_enregistrement'=> $request-> get('date_enregistrement'),
        ]);

        $commentaire_dossiers->save();

        return redirect('/')->with('success', "le commentaire_dossier est enregistrer avec succès");
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
        $commentaire_dossiers=commentaire_dossier::findOrFail($id);
        return view('gestionDeDossier.commentaireDossier.show',['commentaire_dossiers'=>$commentaire_dossiers]);
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
        $commentaire_dossiers=commentaire_dossier::findOrFail($id);
        $utilisateurs = Utilisateur::all();
        $fichiers = fichier::all();
        return view('gestionDeDossier.commentaireDossier.edit',['commentaire_dossiers'=>$commentaire_dossiers,'utilisateurs'=>$utilisateurs,'fichiers'=>$fichiers]);
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
        $commentaire_dossiers=commentaire_dossier::findOrFail($id);
        $commentaire_dossiers->dossier_id=$request-> get('dossier_id');
        $commentaire_dossiers->utilisateur_id = $request->get('utilisateur_id');
        $commentaire_dossiers->contenu = $request->get('contenu');
        $commentaire_dossiers->date_enregistrement = $request->get('date_enregistrement');

        $commentaire_dossiers->update();
        return redirect('/')->with('success', "le commentaire_dossier est modifier avec succès");
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
        $commentaire_dossiers=commentaire_dossier::findOrFail($id);
        $commentaire_dossiers->delete();
        return redirect('/')->with('success', "le commentaire_dossier est supprimer avec succès");
    }
}
