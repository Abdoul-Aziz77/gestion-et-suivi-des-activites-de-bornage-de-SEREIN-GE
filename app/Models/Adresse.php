<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;
    protected $fillable = [
        "pays",
        "ville",
        "code_postale",
        "quartier",
        "secteur",
    ];

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/
//  |------------------------------------------------------------------------------------------------------------|
                 //  une personne physique peut avoir zéro une adresse |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Personne_physique(){
        return $this->hasOne(Personne_physique::class, 'Personne_physique_id');
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   une personne morale peut avoir une adresse |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Personne_morales(){
        return $this->hasOne(Personne_morale::class, 'Personne_morale_id');
    }

  /*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

}
