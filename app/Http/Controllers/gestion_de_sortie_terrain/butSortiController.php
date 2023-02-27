<?php

namespace App\Http\Controllers\gestion_de_sortie_terrain;

use App\Http\Controllers\Controller;
use App\Models\But_sorties;
use App\Models\But_sorties_sortis;
use Illuminate\Http\Request;

class but_sortiesortiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $but_sorties = But_sorties::all();
        return view('gestionDeSortie.butSorti.index',['but_sorties'=>$but_sorties]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gestionDeSortie.butSorti.create');
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
        $but_sorties = new but_sorties([
            'libelle'=> $request-> get('libelle'),
            'description' => $request->get('description'),
        ]);

        $but_sorties->save();

        return redirect('/')->with('success', "le but_sorties est enregistrer avec succès");
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
        $but_sorties=but_sorties::findOrFail($id);
        return view('gestionDeSortie.butSorti.show',['but_sorties'=>$but_sorties]);
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
        $but_sorties=but_sorties::findOrFail($id);
        return view('gestionDeSortie.butSorti.edit',['but_sorties'=>$but_sorties]);
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
        $but_sorties=but_sorties::findOrFail($id);
        $but_sorties->libelle=$request-> get('libelle');
        $but_sorties->description = $request->get('description');

        $but_sorties->update();
        return redirect('/')->with('success', "le but_sorties est modifier avec succès");
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
        $but_sorties=but_sorties::findOrFail($id);
        $but_sorties->delete();
        return redirect('/')->with('success', "le but sorties est supprimer avec succès");
    }
}
