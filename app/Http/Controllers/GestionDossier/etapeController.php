<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Etape;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class etapeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $etapes=Etape::all();
        //$etapes = DB::table('etapes')->get();
        $nombre = DB::table('etapes')->count();
        return view('gestionDeDossier.Etape.index',['etapes'=>$etapes, 'nombre'=>$nombre]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gestionDeDossier.Etape.create');
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
            'niveau'=>'required',
            'description'=>'required',
        ]);

        // la request
        $etapes = new Etape([
            'libelle'=> $request-> get('libelle'),
            'niveau'=> $request-> get('niveau'),
            'description' => $request->get('description'),
        ]);

        $etapes->save();
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
        $etapes=Etape::findOrFail($id);

        return view('gestionDeDossier.Etape.show',['etapes'=>$etapes, ]);
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
        $etapes=Etape::findOrFail($id);
        return view('gestionDeDossier.Etape.edit',['etapes'=>$etapes]);
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

        // la request
        $etapes=Etape::findOrFail($id);
        $etapes->libelle=$request-> get('libelle');
        $etapes->description = $request->get('description');

        $etapes->update();
        return redirect('/')->with('success', "l'etape est modifier avec succès");
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
        $etapes=Etape::findOrFail($id);
        $etapes->delete();
        return redirect('/')->with('success', "l'etape est supprimer avec succès");
    }
}
