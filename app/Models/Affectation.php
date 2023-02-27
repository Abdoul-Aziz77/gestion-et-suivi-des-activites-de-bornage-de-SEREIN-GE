<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    use HasFactory;
    protected $fillable = [
        "dossier_id",
        "personne_physique_id",
        "date_affectation",

    ];

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   une affectation est fait sur un dossier |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Dossiers(){
        return $this->belongsTo(Dossier::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   une Affectation est pour une seule personne |--->
//  |------------------------------------------------------------------------------------------------------------|
public function personne_physiques(){
    return $this->belongsTo(Personne_physique::class);
}

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   une Affectation est associer a un ou plusieur but_Affectation |--->
//  |------------------------------------------------------------------------------------------------------------|

}
