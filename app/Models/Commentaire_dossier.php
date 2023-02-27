<?php

namespace App\Models;
use app\Models\Dossier;
use app\Models\fichier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire_dossier extends Model
{
    use HasFactory;
    protected $fillable = [
        "dossier_id",
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
                 //   un commentaire est fait sur un seul dossier |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Dossiers(){
        return $this->belongsTo(Dossier::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   au moins un commentaires est fait sur un dossier |--->
//  |------------------------------------------------------------------------------------------------------------|

public function utilisateurs(){
    return $this->belongsTo(Utilisateur::class);
}

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

}
