<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = [
        "poste_id",
        "Personne_physique_id",
        "date_debut_contrat",
        "dure_contrat",
    ];

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/


//  |------------------------------------------------------------------------------------------------------------|
                 //   un personnel peut faire zéro ou plusieur observation sur un dossier |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Observations(){
        return $this->hasMany(Observation::class);
    }

    /*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   une personne physique est un personnel |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Personne_physiques(){
    return $this->belongsTo(Personne_physique::class);
}

}


