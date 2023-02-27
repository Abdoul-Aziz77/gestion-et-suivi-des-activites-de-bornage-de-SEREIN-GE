<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sortie extends Model
{
    use HasFactory;
    protected $fillable = [
        "dossier_id",
        "etat_sortis_id",
        "materiel_utiliser", // cet sont les materiels utiliser pour la sortie
        "date_debut_sortie",
        "equipe_sortie",
    ];

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier est d'un seul type de bornage |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Dossiers(){
        return $this->belongsTo(Dossier::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   une sortie a un seul etat_de sorti |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Etat_sortie(){
    return $this->belongsTo(Etat_sorti::class);
}

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   une sortie est associer a un ou plusieur but_sortie |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function But_sorties(){
        return $this->hasMany(But_sortie::class);
    }
}
