<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        "personne_physique_id",
        "personne_morale_id",
        "profil_id",
        "nom_utilisateur",
        "mot_de_passe",
    ];

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/
//  |------------------------------------------------------------------------------------------------------------|
                 //   un utlisateur peut faire au moins zéro commentaires |--->
//  |------------------------------------------------------------------------------------------------------------|

    public function Commentaire_fichiers(){
        return $this->hasMany(Commentaire_fichier::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   un utilisateur fait zéro ou plusieur commentaire sur un dossier|--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Commentaire_dossiers(){
        return $this->hasMany(Commentaire_dossier::class);
    }

    /*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|***********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   un utilisateur est une personne physique |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Personne_physques(){
    return $this->belongsTo(Personne_physque::class);
}

//  |------------------------------------------------------------------------------------------------------------|
                 //   un utilisateur est une personne morale |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Personne_morale(){
    return $this->belongsTo(Personne_morale::class);
}

//  |------------------------------------------------------------------------------------------------------------|
                 //   un utilisateur a un profil |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Profils(){
    return $this->belongsTo(Profil::class);
}


    protected $hidden = [
        'mot_de_passe',
        'remember_token',
    ];

}
