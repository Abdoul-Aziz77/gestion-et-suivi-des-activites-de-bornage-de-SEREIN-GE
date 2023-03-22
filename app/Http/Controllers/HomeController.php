<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function home()
    {
        //
        $dossierNouveau = DB::table('dossiers')
        ->join('etat_dossiers','etat_dossiers.dossier_id','=','dossiers.id')
        ->where('etat_dossiers.libelle','=',"Nouveau")
        ->count()
        ;
        $dossierSuspendu = DB::table('dossiers')
        ->join('etat_dossiers','etat_dossiers.dossier_id','=','dossiers.id')
        ->where('etat_dossiers.libelle','=',"Suspendu")
        ->count()
        ;
        $dossierAnnuler = DB::table('dossiers')
        ->join('etat_dossiers','etat_dossiers.dossier_id','=','dossiers.id')
        ->where('etat_dossiers.libelle','=',"Annuler")
        ->count()
        ;
        $dossierEnCour = DB::table('dossiers')
        ->join('etat_dossiers','etat_dossiers.dossier_id','=','dossiers.id')
        ->where('etat_dossiers.libelle','=',"En Cours")
        ->count()
        ;
        $dossierFinaliser = DB::table('dossiers')
        ->join('etat_dossiers','etat_dossiers.dossier_id','=','dossiers.id')
        ->where('etat_dossiers.libelle','=',"Finaliser")
        ->count()
        ;
        return view('home',['dossierNouveau'=>$dossierNouveau, 'dossierSuspendu'=>$dossierSuspendu,'dossierAnnuler'=>$dossierAnnuler,'dossierEnCour'=>$dossierEnCour, 'dossierFinaliser'=>$dossierFinaliser]);

    }

    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
