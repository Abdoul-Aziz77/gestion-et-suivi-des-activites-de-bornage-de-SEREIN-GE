<?php

namespace App\Http\Controllers\GestionDossier;

use App\Http\Controllers\Controller;
use App\Models\Commentaire_dossier;
use App\Models\Dossier;
use App\Models\Etape;
use App\Models\Etape_dossier;
use App\Models\Etat_sorti;
use App\Models\fichier;
use App\Models\Observation;
use App\Models\Parcelle;
use App\Models\Personne_morale;
use App\Models\Personne_physique;
use App\Models\Personnel;
use App\Models\Sortie;
use App\Models\typebornage;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Isset_;

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

        /* $request->validate([

            'situation'=>'required',
            'type_bornage'=>'required',
            'personne_physique_id'=>'required'
        ]);
        /* // */
        //


        // la request
        $ad = 1;
        $dat = date("y/m/d H:i:s");
        $personne_physique_id = 1;

        /* Enregistrement d'une personne */
$verif_personne = $request-> get('nom');
        if(isset($verif_personne))
{
    $personne_physiques =$id = DB::table('personne_physiques')->insertGetId([
        'nom'=> $request-> get('nom'),
        'prenom' => $request->get('prenom'),
        'email' => $request->get('email'),
        'tel_personne' => $request->get('tel_personne'),

        'adresse_id'=> $ad,
    ]);
    $personne_physique_id = $personne_physiques;
}

/* Enregistrement de dossiers */
$verif_idperson = $request-> get('personne_physique_id');
        if(isset($verif_idperson))
        {
            $id = DB::table('dossiers')->insertGetId([
                'situation'=>$request->get('situation'),
                'personne_physique_id'=>$personne_physique_id,
                'typebornages_id' =>$request->get('typebornages_id'),
                'date_enregistrement'=> $dat,
            ]);
        }
        else{
            $id = DB::table('dossiers')->insertGetId([
                'situation'=>$request->get('situation'),
                'personne_physique_id'=>$request->get('personne_physique_id'),
                'typebornages_id' =>$request->get('typebornages_id'),
            ]);
        }



        /* $id_etat = DB::table('etat_dossiers')->insertGetId([
            'situation'=>$request->get('situation'),
            'personne_physique_id'=>$request->get('personne_physique_id'),
            'typebornages_id' =>$request->get('typebornages_id'),
        ]); */

        /* Enregistrement d'un parcelle du dossier */
        $verif_parcelle = $request->get('superficie');
        if(isset($verif_parcelle))
        {
            $parcelles = new Parcelle([

                'personne_moral_id'=> 1,
                'personne_physique_id' => $request->get('personne_physique_id'),
                'dossier_id' => $id,
                'lot' => $request->get('lot'),
                'numparcelle'=>$request->get('numparcelle'),
                'section' => $request->get('section'),
                'superficie' => $request->get('superficie'),

            ]);
            $parcelles->save();
        }

/* Enregistrement de commentaire */
        $verif_commentaire = $request-> get('contenu');
        if(isset($verif_commentaire))
        {
            $commentaire_dossiers = new commentaire_dossier([
                'dossier_id'=> $id,
                //'utilisateur_id' => $request->get('utilisateur_id'),
                'contenu'=> $request-> get('contenu'),
                'date_enregistrement'=> $dat,
            ]);
            $commentaire_dossiers->save();
        }

        /* enregistrement d'une etape du dossier */

        if(isset($id))
        {
            $etape_dossiers = new Etape_dossier([
                'etapes_id'=>$ad,
                'dossier_id'=>$id,
                'statut' => 1,
                'date_realisation'=>$dat,
            ]);
            $etape_dossiers->save();

            DB::table('etat_dossiers')->insert([
                'dossier_id'=>$id,
                'libelle'=>'Nouveau',
                'description'=>'un nouveau dossier enregistrer',
            ]);

        }



        /* enregistrement de fichier */
        $verif_fichier = $request->get('file');
        if(isset($verif_fichier))
       {
        $fichiers = new fichier([

            'parcelle_id'=> $request->get('parcelle_id'),
            'dossier_id' => $id,
            'nom' => $request->get('file'),
            //'fichier' => $request->get('fichier'),
        ]);
        $fichiers->save();
        /* $path = $request->file('file')->store('file');

        dd($path); */
       }

        $retour = url()->previous();

        return redirect("$retour")->with('success', "l'etape est enregistrer avec succès");
        //return view('home');
         }

        public function dossierAcceuil(Request $request)
        {
            //
            /* $dossiers = DB::table('dossiers')
                        ->join('personne_dossiers', 'dossiers.id','=','personne_dossiers.dossier_id')
                        ->join('etape_dossiers', 'dossier.id','=','etape_dossiers.dossier_id')
                        ->join('sorties','dossiers.id','=','sorties.dossier_id')
                        ->select('dossiers.*','etape_dossiers.*','sorties.*')
                        ->get()
                        ; */

            //$personnes= DB::table('personne_physique')->select('personne_personne.*')->get();

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
        public function dossierEncours(Request $request)
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

       // $personnes= DB::table('personne_physiques')->get();
        //$etapes  = DB::table('etapes')->get();
        $etat_dossiers  = DB::table('etat_dossiers')->latest()->get();
        $personnels = Personnel::all();
        $dossiers = Dossier::all();
        //$etape_dossiers = Etape_dossier::all();
        $sorties = Sortie::all();
        $personne_physiques = Personne_physique::all();
        $personne_morales = Personne_morale::all();
        $utilisateurs = Utilisateur::all();
        $etapeDossiers= DB::table('etapes')->join('etape_dossiers', 'etapes.id','=','etape_dossiers.etapes_id')->select('etapes.*','etape_dossiers.*');
        //$etapeDossiers=Etape::all()->join('Etape_dossier', 'Etape.id','=','Etape_dossier.etapes_id');
        $etapes=Etape::all();
        $type_bornages = typebornage::all();
        $etape_dossiers = Etape_dossier::all() /* Etape_dossier::all()->last()->get() */;
        $etat_sorties=Etat_sorti::all();
        return view('gestionDeDossier.dossier.index',['dossiers'=>$dossiers ,'etat_dossiers'=>$etat_dossiers,'type_bornages'=>$type_bornages, /* 'personnes'=>$personnes, */'etapes'=>$etapes, 'etat_sorties'=>$etat_sorties, 'personne_physiques'=>$personne_physiques, 'sorties'=>$sorties,'etape_dossiers'=>$etape_dossiers,'personnels'=>$personnels, 'utilisateurs'=>$utilisateurs, 'personne_morales'=>$personne_morales, /* 'etat_sorties'=>$etat_sorties */ ]);

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
        $etape_dossiers = DB::table('etape_dossiers')->where('dossier_id','=',$id)->get();
        $sorties = Sortie::all();
        $observations=Observation::all();
        $personne_physiques = Personne_physique::all();
        $commentaires = Commentaire_dossier::all();
        $utilisateurs = Utilisateur::all();
        $parcelles = Parcelle::all();
        $fichiers = fichier::all();
        return view('gestionDeDossier.dossier.show',[ 'parcelles'=>$parcelles, 'fichiers'=>$fichiers, 'dossiers'=>$dossiers,'utilisateurs'=>$utilisateurs, 'personne_physiques'=>$personne_physiques, 'sorties'=>$sorties,'etape_dossiers'=>$etape_dossiers,'personnels'=>$personnels,'observations'=>$observations, 'commentaires'=>$commentaires]);

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

    public function annuker($id)
    {
        //

    }
}
