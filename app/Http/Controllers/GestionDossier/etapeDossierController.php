<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Dossier;
use App\Models\Etape;
use App\Models\Etape_dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class etapeDossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $etape_dossiers = Etape_dossier::all();
        return view('gestionDeDossier.EtapeDossier.index', ['etape_dossiers'=>$etape_dossiers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $etapes = Etape::all();
        $dossiers = Dossier::all();
        return view('gestionDeDossier.EtapeDossier.create',['etapes'=>$etapes, 'dossiers'=>$dossiers]);
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
            'statut'=>'required',
            'date_realisation'=>'required',
        ]);

        // request
        $etape_dossiers = new Etape_dossier([
            'etapes_id'=>$request->get('etapes_id'),
            'dossier_id'=>$request->get('dossier_id'),
            'statut' => $request->get('statut'),
            'date_realisation'=>$request->get('date_realisation'),
        ]);
        $etape_dossiers->save();

        return redirect('/')->with('success', "l'etape du dossier a été enregistrer avec succès");
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

        $etape_dossiers=Etape_dossier::findOrFail($id);
        return view('gestionDeDossier.EtapeDossier.show',['etape_dossiers'=>$etape_dossiers]);

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
        $x=$id;
        $Etape_dossier = Etape_dossier::all();
        $etape_dossiers=$Etape_dossier->find(2);
        $dossiers = Dossier::all();
        $etapes = Etape::all();
        return view('gestionDeDossier.EtapeDossier.edit',['etape_dossiers'=>$etape_dossiers,'etapes'=>$etapes, 'dossiers'=>$dossiers]);

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

        $etape_dossiers=Etape_dossier::findOrFail($id);
        $etape_dossiers->etapes_id = $request->get('etapes_id');
        $etape_dossiers->dossier_id=$request->get('dossier_id');
        $etape_dossiers->statut = $request->get('statut');
        $etape_dossiers->date_realisation =$request->get('date_realisation');
        $etape_dossiers->update();
        return redirect('/')->with('success', "l'etape de dossier est modifier avec succès");
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
        $etape_dossiers=Etape_dossier::findOrFail($id);
        $etape_dossiers->delete();
        return redirect('/')->with('success', "l'etape de dossier est supprimer avec succès");
    }

    public function annuler($id)
    {
        //
$etap_id = DB::table('etapes')->where('niveau','=',0)->value('id');
$dat = date("y/m/d H:i:s");
        $etape_dossiers = new Etape_dossier([
            'etapes_id'=>$etap_id,
            'dossier_id'=>$id,
            'statut' => 1,
            'date_realisation'=>$dat,
        ]);
        $etape_dossiers->save();

        return redirect('/')->with('success', "l'etape est supprimer avec succès");
    }

    public function suspendre($id)
    {
        //

        $etape_dossiers=DB::table('etape_dossiers')->latest()
        ->where('dossier_id','=',$id)->value('id')
        ;

        $affected = DB::table('etape_dossiers')
              ->where('id', '=',$etape_dossiers)
              ->update([
                'statut' => 0
            ]);

      /*  // $etape_dossiers->etapes_id = $request->get('etapes_id');
        //$etape_dossiers->dossier_id=$request->get('dossier_id');
        $etape_dossiers->statut = 0;
       // $etape_dossiers->date_realisation =$request->get('date_realisation');
        $etape_dossiers->update(); */
        return redirect('/')->with('success', "l'etape de dossier est modifier avec succès");
    }
}
