<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Commentaire_fichier;
use App\Models\fichier;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class commentaireFichierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $commentaire_fichiers = Commentaire_fichier::all();
        $fichiers = fichier::all();
        $utilisateurs = Utilisateur::all();
        return view('gestionDeDossier.commentaireFichier.index',['commentaire_fichiers'=>$commentaire_fichiers,'utilisateurs'=>$utilisateurs,'fichiers'=>$fichiers]);
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
        return view('gestionDeDossier.commentaireFichier.create',['utilisateurs'=>$utilisateurs]);
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
        $commentaire_fichiers = new commentaire_fichier([
            'dossier_id'=> $request-> get('dossier_id'),
            'utilisateur_id' => $request->get('utilisateur_id'),
            'contenu'=> $request-> get('contenu'),
            'date_commentaire_fichier'=> $request-> get('date_commentaire_fichier'),
        ]);

        $commentaire_fichiers->save();

        return redirect('/')->with('success', "le commentaire_fichier est enregistrer avec succès");
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
        $commentaire_fichiers=commentaire_fichier::findOrFail($id);
        return view('gestionDeDossier.commentaireFichier.show',['commentaire_fichiers'=>$commentaire_fichiers]);
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
        $commentaire_fichiers=commentaire_fichier::findOrFail($id);
        $utilisateurs = Utilisateur::all();
        $fichiers = fichier::all();
        return view('gestionDeDossier.commentaireFichier.edit',['commentaire_fichiers'=>$commentaire_fichiers,'utilisateurs'=>$utilisateurs,'fichiers'=>$fichiers]);
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
        $commentaire_fichiers=commentaire_fichier::findOrFail($id);
        $commentaire_fichiers->dossier_id=$request-> get('dossier_id');
        $commentaire_fichiers->utilisateur_id = $request->get('utilisateur_id');
        $commentaire_fichiers->contenu = $request->get('contenu');
        $commentaire_fichiers->date_commentaire_fichier = $request->get('date_commentaire_fichier');

        $commentaire_fichiers->update();
        return redirect('/')->with('success', "le commentaire_fichier est modifier avec succès");
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
        $commentaire_fichiers=commentaire_fichier::findOrFail($id);
        $commentaire_fichiers->delete();
        return redirect('/')->with('success', "le commentaire_fichier est supprimer avec succès");
    }
}
