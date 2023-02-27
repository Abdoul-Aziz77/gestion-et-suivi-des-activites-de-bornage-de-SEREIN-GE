<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class But_sorties extends Model
{
    use HasFactory;
    protected $fillable = [
        "but_id",
        "sorties_id",
        "libelle",
        "statut",
    ];

  /*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   un but est associer a zéro ou plusieur but de sortie |--->
//  |------------------------------------------------------------------------------------------------------------|
public function buts(){
    return $this->belongsTo(but::class);
}

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

}
