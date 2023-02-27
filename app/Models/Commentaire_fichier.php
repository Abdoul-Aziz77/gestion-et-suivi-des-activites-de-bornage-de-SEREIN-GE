<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire_fichier extends Model
{
    use HasFactory;
    protected $fillable = [
        "fichier_id",
        "utilisateur_id",
        "contenu",
        "date_enregistrement",
    ];
/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/
//  |------------------------------------------------------------------------------------------------------------|
                 //   au moins un commentaires est fait sur un fichier |--->
//  |------------------------------------------------------------------------------------------------------------|

    public function fichier(){
        return $this->belongsTo(fichier::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   un utlisateur peut faire au moins zéro commentaires |--->
//  |------------------------------------------------------------------------------------------------------------|

    public function Utilisateurs(){
        return $this->belongsTo(Utilisateur::class);
    }

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

}
