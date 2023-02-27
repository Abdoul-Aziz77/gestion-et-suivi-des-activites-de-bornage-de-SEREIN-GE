<?php

namespace App\Http\Controllers\GestionDesUtilisateurs;

use App\Http\Controllers\Controller;
use App\Models\Personne_physique;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class utilisateurController extends Controller
{

    public function clients(Request $request)
    {
        //
        $utilisateurs = Utilisateur::all();
        $personne_physiques = Personne_physique::all();
        return view('acceuil.client',['utilisateurs'=>$utilisateurs,'personne_physiques'=>$personne_physiques]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $utilisateurs = Utilisateur::all();
        $personne_physiques = Personne_physique::all();
        return view('gestionDesUtilisateurs.utilisateur.index',['utilisateurs'=>$utilisateurs,'personne_physiques'=>$personne_physiques]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gestionDesUtilisateurs.utilisateur.create');
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
    }
}
