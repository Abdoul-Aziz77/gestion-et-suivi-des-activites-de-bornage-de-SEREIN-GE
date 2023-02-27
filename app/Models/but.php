<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class but extends Model
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
                 //   un but est associer a zéro ou plusieur but de sortie |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function But_sorties(){
        return $this->hasMany(But_sortie::class);
    }

  /*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

}
