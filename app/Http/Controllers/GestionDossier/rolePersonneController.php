<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Role_personne;
use Illuminate\Http\Request;

class rolePersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $role_personnes = Role_personne::all();
        return view('gestionDeDossier.rolePersonne.index',['role_personnes'=>$role_personnes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gestionDeDossier.rolePersonne.create');
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
            'libelle'=>'required',
        ]);

        // la request
        $role_personnes = new role_personne([
            'libelle'=> $request-> get('libelle'),
        ]);
        $role_personnes->save();
        return redirect('/')->with('success', "le role_personne est enregistrer avec succès");
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
        $role_personnes=role_personne::findOrFail($id);
        return view('gestionDeDossier.role_personne.show',['role_personnes'=>$role_personnes]);
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
        $role_personnes=role_personne::findOrFail($id);
        return view('gestionDeDossier.role_personne.edit',['role_personnes'=>$role_personnes]);
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
            'libelle'=>'required',
        ]);
        // la request
        $role_personnes=role_personne::findOrFail($id);
        $role_personnes->libelle=$request-> get('libelle');

        $role_personnes->update();
        return redirect('/')->with('success', "le role_personne est modifier avec succès");
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
        $role_personnes=role_personne::findOrFail($id);
        $role_personnes->delete();
        return redirect('/')->with('success', "le role_personne est supprimer avec succès");
    }
}
