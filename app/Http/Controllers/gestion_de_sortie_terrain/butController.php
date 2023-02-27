<?php

namespace App\Http\Controllers\gestion_de_sortie_terrain;

use App\Http\Controllers\Controller;
use App\Models\but;
use Illuminate\Http\Request;

class butController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $buts=but::all();

        return view('gestionDeSortie.but.index',['buts'=>$buts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $buts = but::all();
        return view('gestionDeSortie.but.create');
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
        $buts = new but([
            'libelle'=> $request-> get('libelle'),
            'description' => $request->get('description'),
        ]);

        $buts->save();

        return redirect('/')->with('success', "le but est enregistrer avec succès");
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
        $buts=but::findOrFail($id);
        return view('gestionDeSortie.but.show',['buts'=>$buts]);
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
        $buts=but::findOrFail($id);
        return view('gestionDeSortie.but.edit',['buts'=>$buts]);
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
        $buts=but::findOrFail($id);
        $buts->libelle=$request-> get('libelle');
        $buts->description = $request->get('description');

        $buts->update();
        return redirect('/')->with('success', "le but est modifier avec succès");
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
        $buts=but::findOrFail($id);
        $buts->delete();
        return redirect('/')->with('success', "le but est supprimer avec succès");
    }
}
