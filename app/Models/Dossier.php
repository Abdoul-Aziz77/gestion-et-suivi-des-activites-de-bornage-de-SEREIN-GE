<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Commentaire_dossier;

class Dossier extends Model
{
    use HasFactory;
    protected $fillable = [
        "libelle",
        "type_bornage_id",
        "personne_physique_id",
        "date_enregistrement",
    ];

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier est d'un seul type de bornage |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function type_bornages(){
        return $this->belongsTo(type_bornage::class);
    }
//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier appartient a un seul personne physique |--->
//  |------------------------------------------------------------------------------------------------------------|
public function personne_physiques(){
    return $this->belongsTo(personne_physique::class);
}

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier est associer a un ou plusieur fichier |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function fichiers(){
        return $this->hasMany(fichier::class);
    }

    //  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier est associer a un ou plusieur Affectation |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Affectation(){
    return $this->hasMany(Affectation::class);
}

//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier est associer a zéro ou plusieur sortie |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Sorties(){
        return $this->hasMany(Sortie::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier est associer a un ou plusieur etape de dossier |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Etape_dossier(){
        return $this->hasMany(Etape_dossier::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier est associer a un ou plusieur parcelle |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Parcelles(){
        return $this->hasMany(Parcelle::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier est associer a zéro ou plusieur commentaires |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function commentaire_dossiers(){
        return $this->hasMany(Commentaire_dossier::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier est associer a un ou plusieur personne dossier |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Personne_dossiers(){
        return $this->hasMany(Personne_dossier::class);
    }

//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier est associer a zéro ou plusieur observation |--->
//  |------------------------------------------------------------------------------------------------------------|
     public function Observation(){
        return $this->hasMany(Observation::class);
    }

}
