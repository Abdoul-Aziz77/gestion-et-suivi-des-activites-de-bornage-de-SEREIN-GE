<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    use HasFactory;
    protected $fillable = [
        "libelle",
        "niveau",
        "description",
    ];

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   une etape peut concerner zéro ou plusieur étape dossier |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Etape_dossiers(){
        return $this->hasMany(Etape_dossier::class);
    }
}

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/
