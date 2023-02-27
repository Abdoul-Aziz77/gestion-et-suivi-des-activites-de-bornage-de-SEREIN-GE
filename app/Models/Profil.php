<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $fillable = [
        "habilitation_id",
        "libelle",
        "description",
    ];

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   un profif a un ou plusieur habilitation |--->
//  |------------------------------------------------------------------------------------------------------------|
public function habilitation(){
    return $this->belongsToMany(habilitation::class);
}

//  |------------------------------------------------------------------------------------------------------------|
                 //   un profil est assosié à zéro ou plusieur utilisateur |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Utilisateurs(){
        return $this->hasMany(Utilisateur::class);
    }

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

}
