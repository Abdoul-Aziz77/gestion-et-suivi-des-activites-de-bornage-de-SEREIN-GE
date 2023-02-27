<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etat_sorti extends Model
{
    use HasFactory;
    protected $fillable = [
        "etat",
        "detaille",
    ];

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   un etat de sortie est associer a zéro ou plusieur sorite |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Sorties(){
        return $this->hasMany(Sortie::class);
    }

    /*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/
}
