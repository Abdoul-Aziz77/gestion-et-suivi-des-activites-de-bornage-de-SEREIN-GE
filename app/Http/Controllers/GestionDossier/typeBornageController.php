<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\typebornage;
use Illuminate\Http\Request;

class typeBornageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $typebornages = typebornage::all();
        return view('gestionDeDossier.type_bornage.index',['typebornages'=>$typebornages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gestionDeDossier.type_bornage.create');
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
            'description'=>'required',
        ]);

        // la request
        $typebornages = new typebornage([
            'libelle'=> $request-> get('libelle'),
            'description' => $request->get('description'),
        ]);

        $typebornages->save();
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
        $typebornages=typebornage::findOrFail($id);
        return view('gestionDeDossier.typebornage.show',['typebornages'=>$typebornages]);
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
        $typebornages=typebornage::findOrFail($id);
        return view('gestionDeDossier.typebornage.edit',['type_bornages'=>$typebornages]);
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
        $typebornages=typebornage::findOrFail($id);
        $typebornages->libelle=$request-> get('libelle');
        $typebornages->description = $request->get('description');

        $typebornages->update();
        return redirect('/')->with('success', "le type_bornage est modifier avec succès");
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
        $typebornages=typebornage::findOrFail($id);
        $typebornages->delete();
        return redirect('/')->with('success', "le type bornage est supprimer avec succès");
    }
}
