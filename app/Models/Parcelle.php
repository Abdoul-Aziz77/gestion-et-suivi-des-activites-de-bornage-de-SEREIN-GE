<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcelle extends Model
{
    use HasFactory;
    protected $fillable = [
        "personne_moral_id",
        "personne_physique_id",
        "dossier_id",
        'numparcelle',
        "lot",
        "section",
        "superficie",
    ];

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   une parcelle appartient a un et seul dossier de bornage|--->
//  |------------------------------------------------------------------------------------------------------------|
public function Dossiers(){
    return $this->belongsTo(Dossier::class);
}

//  |------------------------------------------------------------------------------------------------------------|
                 //   une parcelle appartient a une seul personne morale |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Personne_morale(){
    return $this->belongsTo(Personne_morale::class);
}

//  |------------------------------------------------------------------------------------------------------------|
                 //   une parcelle appartient a une seul personne physique |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Personne_physques(){
    return $this->belongsTo(Personne_physque::class);
}

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   une parcelle a un ou plusieur fichier |--->
//  |------------------------------------------------------------------------------------------------------------|
public function fichiers(){
    return $this->hasMany(fichier::class);
}

}
