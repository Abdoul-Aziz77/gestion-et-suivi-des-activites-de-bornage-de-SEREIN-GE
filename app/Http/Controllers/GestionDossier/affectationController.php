<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class affectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        // Les variables
        $dat = date("y/m/d H:i:s");
        $dossier_id = $request->get('dossier_id');
        $etap_id = DB::table('etapes')
                    ->where('niveau', '=', 2)
                    ->value('id');

        $etape_id = DB::table('etape_dossiers')->latest()
        ->where('dossier_id', '=', $dossier_id)->value('etapes_id');

        $niveau = DB::table('etapes')
                    ->where('id', '=', $etape_id)
                    ->value('niveau');

        /* $etaD_id = DB::table('etape_dossiers')
                    ->where('dossier_id', '=', $dossier_id)
                    ->value('id'); */

        if($niveau == 1){
// l'affection
        DB::table('affectation')->insert([
            'dossier_id'=>$request->get('dossier_id'),
            'personne_physique_id'=>$request->get('personnel_id'),
            'date_affection'=>$dat,
        ]);
// changement d'etape
        $af = DB::table('etape_dossiers')
                    ->insert([
                'etapes_id' => $etap_id,
                'dossier_id' => $request->get('dossier_id'),
                'statut' => 1,
                'date_realisation'=>$dat,
        ]);
        } else{
            // l'affection
        DB::table('affectation')->insert([
            'dossier_id'=>$request->get('dossier_id'),
            'personne_physique_id'=>$request->get('personnel_id'),
            'date_affection'=>$dat,
        ]);
        }

        $retour = url()->previous();
        return redirect("$retour")->with('success', "l'etape est enregistrer avec succès");
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
