<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Commentaire_dossier;
use App\Models\Dossier;
use App\Models\Etape;
use App\Models\Etape_dossier;
use App\Models\Etat_sorti;
use App\Models\Observation;
use App\Models\Personne_physique;
use App\Models\Personnel;
use App\Models\Sortie;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/* la fonction permettant de voir la liste des dossiers sur l'acceuil */


class dossierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
    {

        $request->validate([

            'situation'=>'required',
            'type_bornage'=>'required',
            'personne_physique_id'=>'required'
        ]);
        /* //
        //


        // la request
        $Dossier = new Dossier([

            'situation'=>$request->get('situation'),
            'personne_physique_id'=>$request->get('personne_physique_id'),
            'type_bornage' => $request->get('type_bornage'),
        ]);

        $Dossier->save();
        $retour = url()->previous();

        return view('home')->with('success', "l'etape est enregistrer avec succès"); */
        return view('home');
         }

        public function dossierAcceuil(Request $request)
        {
            //
            /*$dossiers = DB::table('dossier')
                        ->join('personne_dossier', 'dossier.id','=','personne_dossier.dossier_id')
                        ->join('etape_dossier', 'dossier.id','=','etape_dossier.dossier_id')
                        ->join('sorties','dossier.id','=','sorties.dossier_id')
                        ->select('dossier.*','etape_dossier.*','sorties.*')
                        ->get()
                        ;

            $personnes= DB::table('personne_physique')->select('personne_personne.*')->get();*/

            $personnels = Personnel::all();
            $dossiers = Dossier::all();
            $etape_dossiers = Etape_dossier::all()->last()->get();
            //$etape_dossiers = DB::table('etape_dossiers')->latest()->get();
            $sorties = Sortie::all();
            $personne_physiques = Personne_physique::all();
            $utilisateurs = Utilisateur::all();
            $hniveau=DB::table('etapes')->max('niveau');
            $etapes=Etape::all();
            $etat_sorties=Etat_sorti::all();
            return view('acceuil.dossier',['hniveau'=>$hniveau, 'dossiers'=>$dossiers, 'personne_physiques'=>$personne_physiques, 'sorties'=>$sorties,'etape_dossiers'=>$etape_dossiers,'personnels'=>$personnels, 'utilisateurs'=>$utilisateurs, 'etapes'=>$etapes, 'etat_sorties'=>$etat_sorties]);

        }

  /*       public function dossierEncours(Request $request)
        {

            $personnels = Personnel::all();
            $dossiers = Dossier::all();
            $etape_dossiers = Etape_dossier::all();
            $sorties = Sortie::all();
            $personne_physiques = Personne_physique::all();
            $utilisateurs = Utilisateur::all();
            $etapes=Etape::all();
            $etat_sorties=Etat_sorti::all();
            return view('acceuil.dossierEnCours',['dossiers'=>$dossiers, 'personne_physiques'=>$personne_physiques, 'sorties'=>$sorties,'etape_dossiers'=>$etape_dossiers,'personnels'=>$personnels, 'utilisateurs'=>$utilisateurs, 'etapes'=>$etapes, 'etat_sorties'=>$etat_sorties]);

        }

        public function dossierFinaliser(Request $request)
        {

            $personnels = Personnel::all();
            $dossiers = Dossier::all();
            $etape_dossiers = Etape_dossier::all();
            $sorties = Sortie::all();
            $personne_physiques = Personne_physique::all();
            $utilisateurs = Utilisateur::all();
            $etapes=Etape::all();
            $etat_sorties=Etat_sorti::all();
            return view('acceuil.dossierEnCours',['dossiers'=>$dossiers, 'personne_physiques'=>$personne_physiques, 'sorties'=>$sorties,'etape_dossiers'=>$etape_dossiers,'personnels'=>$personnels, 'utilisateurs'=>$utilisateurs, 'etapes'=>$etapes, 'etat_sorties'=>$etat_sorties]);

        }

        public function dossierSuspendu(Request $request)
        {

            $personnels = Personnel::all();
            $dossiers = Dossier::all();
            $etape_dossiers = Etape_dossier::all();
            $sorties = Sortie::all();
            $personne_physiques = Personne_physique::all();
            $utilisateurs = Utilisateur::all();
            $etapes=Etape::all();
            $etat_sorties=Etat_sorti::all();
            return view('acceuil.dossierEnCours',['dossiers'=>$dossiers, 'personne_physiques'=>$personne_physiques, 'sorties'=>$sorties,'etape_dossiers'=>$etape_dossiers,'personnels'=>$personnels, 'utilisateurs'=>$utilisateurs, 'etapes'=>$etapes, 'etat_sorties'=>$etat_sorties]);

        }

        public function dossierAnnuler(Request $request)
        {

            $personnels = Personnel::all();
            $dossiers = Dossier::all();
            $etape_dossiers = Etape_dossier::all();
            $sorties = Sortie::all();
            $personne_physiques = Personne_physique::all();
            $utilisateurs = Utilisateur::all();
            $etapes=Etape::all();
            $etat_sorties=Etat_sorti::all();
            return view('acceuil.dossierEnCours',['dossiers'=>$dossiers, 'personne_physiques'=>$personne_physiques, 'sorties'=>$sorties,'etape_dossiers'=>$etape_dossiers,'personnels'=>$personnels, 'utilisateurs'=>$utilisateurs, 'etapes'=>$etapes, 'etat_sorties'=>$etat_sorties]);

        }
 */
    public function index(Request $request)
    {
        //
       /*  $dossiers = DB::table('dossiers')
                    ->join('personne_dossiers', 'dossiers.id','=','personne_dossiers.dossier_id')
                    ->join('etape_dossiers', 'dossiers.id','=','etape_dossiers.dossier_id')
                    ->join('sorties','dossiers.id','=','sorties.dossier_id')
                    ->select('dossiers.*','etape_dossiers.*','sorties.*')
                    ->get()
                    ; */

        $personnes= DB::table('personne_physiques')->get();
        //$etapes  = DB::table('etapes')->get();
        //$etat_sorties  = DB::table('etat_sortis')->get();

        $personnels = Personnel::all();
        $dossiers = Dossier::all();
        //$etape_dossiers = Etape_dossier::all();
        $sorties = Sortie::all();
        $personne_physiques = Personne_physique::all();
        $utilisateurs = Utilisateur::all();
        $etapeDossiers= DB::table('etapes')->join('etape_dossiers', 'etapes.id','=','etape_dossiers.etapes_id')->select('etapes.*','etape_dossiers.*');
        //$etapeDossiers=Etape::all()->join('Etape_dossier', 'Etape.id','=','Etape_dossier.etapes_id');
        $etapes=Etape::all();
        $niveau = 1;
        $etape_dossiers = Etape_dossier::all()->last()->get();
        $etat_sorties=Etat_sorti::all();
        return view('gestionDeDossier.dossier.index',['niveau'=>$niveau, 'dossiers'=>$dossiers ,'personnes'=>$personnes, 'etapes'=>$etapes, 'etat_sorties'=>$etat_sorties, 'personne_physiques'=>$personne_physiques, 'sorties'=>$sorties,'etape_dossiers'=>$etape_dossiers,'personnels'=>$personnels, 'utilisateurs'=>$utilisateurs, 'etapes'=>$etapes, 'etat_sorties'=>$etat_sorties ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('gestionDeDossier.dossier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $personnels = Personnel::all();
        $dossiers = Dossier::findOrFail($id);
        $etape_dossiers = Etape_dossier::all();
        $sorties = Sortie::all();
        $observations=Observation::all();
        $personne_physiques = Personne_physique::all();
        $commentaires = Commentaire_dossier::all();
        $utilisateurs = Utilisateur::all();
        return view('gestionDeDossier.dossier.show',['dossiers'=>$dossiers,'utilisateurs'=>$utilisateurs, 'personne_physiques'=>$personne_physiques, 'sorties'=>$sorties,'etape_dossiers'=>$etape_dossiers,'personnels'=>$personnels,'observations'=>$observations, 'commentaires'=>$commentaires]);

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