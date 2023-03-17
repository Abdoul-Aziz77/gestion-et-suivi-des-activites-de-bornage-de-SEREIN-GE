<?php

namespace App\Http\Controllers\GestionDesUtilisateurs;

use App\Http\Controllers\Controller;
use App\Models\Adresse;
use App\Models\Personne_physique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personnePhysiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $personne_physiques = Personne_physique::all();
        return view('gestionDesUtilisateurs.personnePhysique.index',['personnes'=>$personne_physiques]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('gestionDesUtilisateurs.personnePhysique.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function nouveauPersonePhysique(Request $request)
    {
         $personne_physiques = new Personne_physique([
            'nom'=> $request-> get('nom'),
            'prenom' => $request->get('prenom'),
            'email' => $request->get('email'),
            'tel_personne' => $request->get('tel_personne'),
            //'date_naissance' => $request->get('date_naissance'),
            //'adresse_id'=> $id,
        ]);

        $personne_physiques->save();
 
/* Personne_physique::create([
            'nom'=> $request-> get('nom'),
            'prenom' => $request->get('prenom'),
            'email' => $request->get('email'),
            'tel_personne' => $request->get('tel_personne'),
]); */

        return response()->json([
            'success'=> 'une personne ajouter avec succes'
        ],201);

        /* $person = DB::table('persnne_physiques')->latest();
        $retour = url()->previous();
       redirect ("$retour",['persons'=>$person,]); */
    }
    public function store(Request $request)
    {
        // //
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'tel_personne'=>'required',
            'date_naissance'=>'date',
            'pays'=>'required',
            'ville'=>'required',
            'code_postale'=>'required',
            'quartier'=>'required',
            'secteur'=>'required',

        ]);

        // la request

        /* $adresses = new Adresse( [
            'pays'=> $request-> get('pays'),
            'ville'=> $request-> get('ville'),
            'code_postale'=> $request-> get('code_postale'),
            'quartier'=> $request-> get('quartier'),
            'secteur'=> $request-> get('secteur'),
        ] );
        $adresses->save(); */
        $id = DB::table('adresses')->insertGetId( [
            'pays'=> $request-> get('pays'),
            'ville'=> $request-> get('ville'),
            'code_postale'=> $request-> get('code_postale'),
            'quartier'=> $request-> get('quartier'),
            'secteur'=> $request-> get('secteur'),
        ] );
//$adresse = DB::table('adresses')->latest()->limit(1);

        $personne_physiques = new Personne_physique([
            'nom'=> $request-> get('nom'),
            'prenom' => $request->get('prenom'),
            'email' => $request->get('email'),
            'tel_personne' => $request->get('tel_personne'),
            'date_naissance' => $request->get('date_naissance'),
            'adresse_id'=> $id,
        ]);

        $personne_physiques->save();
        //$retour = url()->previous();
        return redirect('/')->with('success', "l'etape est enregistrer avec succès");

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
