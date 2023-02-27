<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class habilitation extends Model
{
    use HasFactory;
    protected $fillable = [
        "libelle",
        "description",
    ];

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   une habilitation peut être dosnner a un ou plusieur profil |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Profils(){
        return $this->hasMany(Profil::class);
    }
}

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/
