<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne_dossier extends Model
{
    use HasFactory;
    protected $fillable = [
        "dossier_id",
        "personne_id",
        "role_id",
    ];

/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/

//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier personne reprensrente un seul dossier de bornage |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Dossiers(){
        return $this->belongsTo(Dossier::class);
    }


//  |------------------------------------------------------------------------------------------------------------|
                 //   un Personne_dossier contient une personne physique |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Personne_physques(){
    return $this->belongsTo(Personne_physque::class);
}

//  |------------------------------------------------------------------------------------------------------------|
                 //  un dossier personne a un role_personne|--->
//  |------------------------------------------------------------------------------------------------------------|
public function Role_personnes(){
    return $this->belongsTo(Role_personne::class);
}


/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/

}
