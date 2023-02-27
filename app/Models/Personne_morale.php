<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne_morale extends Model
{
    use HasFactory;
    protected $fillable = [
        "Personne_physique_id", // le responsable de l'entreprise ou de la societe concerner
        "adresse_id",
        "email",
        "tel_personne",
        "numero_recipicer",
    ];

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //  une personne morale a une adresse |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function adresse(){
        return $this->belongsTo(adresse::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //  une personne morale a un responsable dans un la table personne_physique |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Personne_physique(){
        return $this->belongsTo(Personne_physique::class);
    }

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   une personne morale peut avoir zéro ou plusieur parecelles |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Parcelles(){
    return $this->hasMany(Parcelle::class);
}

//  |------------------------------------------------------------------------------------------------------------|
                 //   une personne morale est un utilisateur |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Utilisateurs(){
    return $this->hasOne(Utilisateur::class);
}
}
