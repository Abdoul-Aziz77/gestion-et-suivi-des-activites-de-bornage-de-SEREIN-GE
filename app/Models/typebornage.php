<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class typebornage extends Model
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
                 //   un type de bornage est associer a zéro ou plusieurs dossiers |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Dossiers(){
        return $this->hasMany(Dossier::class);
    }
}

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/
