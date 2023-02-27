<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;
    protected $fillable = [
        "dossier_id",
        "personnel_id",
        "contenu",
        "date_observation",
    ];

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   une observation est fait sur un seul dossier |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Dossiers(){
    return $this->belongsTo(Dossier::class);
}

//  |------------------------------------------------------------------------------------------------------------|
                 //   un utilisateur est une personne physique |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Personnels(){
    return $this->belongsTo(Personnel::class);
}


/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

}
