<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne_physique extends Model
{
    use HasFactory;
    protected $fillable = [

        "nom",
        "prenom",
        "email",
        "tel_personne",
        "adresse_id",
    ];

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   une personne physique  a un seul adresse |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function adresse(){
        return $this->belongsTo(adresse::class);
    }

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                //   une personne physique est responsable d'une personne morale |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Personne_morale(){
        return $this->hasOne(Personne_morale::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   une personne physique est associer a un ou plusieur Affectation |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Affectation(){
    return $this->hasMany(Affectation::class);
}

//  |------------------------------------------------------------------------------------------------------------|
                 //   une personne physique est un personnel |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Personnels(){
        return $this->hasMany(Personnel::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   une persone physique a zéro ou plusieurs parcelle |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Parcelles(){
        return $this->hasMany(Parcelle::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   une persone physique est un utilisateur |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Utilisateurs(){
        return $this->hasOne(Utilisateur::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   une persone physique est associer personne dossier |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Personne_dossiers(){
        return $this->hasMany(Personne_dossier::class);
    }

    //  |------------------------------------------------------------------------------------------------------------|
                 //   une personne physique est associer a zéro ou plusieurs dossiers |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Dossiers(){
    return $this->hasMany(Dossier::class);
    }


}
