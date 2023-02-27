<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_personne extends Model
{
    use HasFactory;
    protected $fillable = [
        "libelle", // le titre du rôle de la personne
        //"description",
    ];

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   un role personne est associé a une ou plusieur personne_dossier |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Personne_dossiers(){
        return $this->hasMany(Personne_dossier::class);
    }

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

}
