<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Dossier;
use App\Models\fichier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class fichierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $fichiers = fichier::all();
        $dossiers = Dossier::all();
        return view('gestionDeDossier.fichier.index',['fichiers'=>$fichiers,'dossiers'=>$dossiers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gestionDeDossier.fichier.create');
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
        //$path = $request->file('nom')->store('public'); 
        //$donnes= $request->nom;
        //$donne =$donnes->get('originalName');
        //dd($donnes);
        //$contents = Storage::get("$request->get('nom')");
        //storage::putFile('public',$request->file('nom'));
        DB::table('fichiers')->insert([
            'parcelle_id'=> $request->get('parcelle_id'),
            'dossier_id'=>$request->get('dossier_id'),
            'nom'=> $request->get('nom'),
            'fichier' => $request->get('nom'),
        ]);
        
        $path = $request->file('nom')->storeas('public', 'dossier1');

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
        $fichiers = fichier::findOrFail($id);
        $dossiers = Dossier::all();
        return view('gestionDeDossier.fichier.index',['fichiers'=>$fichiers,'dossiers'=>$dossiers]);
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
        $fichiers=fichier::findOrFail($id);
        $fichiers->delete();
        $retour = url()->previous();

        return redirect("$retour")->with('success', "l'etape est enregistrer avec succès");
    }
}
