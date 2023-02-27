<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fichier extends Model
{
    use HasFactory;
    protected $fillable = [
        "dossier_id",
        "nom", // le nom du fichier
        "parcelle_id",
        "fichier", // le fichier lui même
        "date_enregistrement",
    ];

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   un fichier peut concerner un ou plusieur commentaires |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function commentaire_fichiers(){
        return $this->hasMany(Commentaire_fichier::class);
    }

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   plusieur fichier peut être associer a un dossier |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Dossiers(){
        return $this->belongsTo(Dossier::class);
    }

    //  |------------------------------------------------------------------------------------------------------------|
                 //   un fichier appartient à une parcelle |--->
//  |------------------------------------------------------------------------------------------------------------|
public function parcelles(){
    return $this->belongsTo(Parcelle::class);
}

}
