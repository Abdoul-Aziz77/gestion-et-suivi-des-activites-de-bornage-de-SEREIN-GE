<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etape_dossier extends Model
{
    use HasFactory;
    protected $fillable = [
        "etapes_id",
        "dossier_id",
        "date_realisation",
        "statut",
    ];
    
/*
|**************************************** ETRANGER *********************************************|
  |--->> cette partie regroupe l'ensemble des clés primaires migrer dans sur cette table <<---|
|*********************************************************************************************|
*/ 

//  |------------------------------------------------------------------------------------------------------------|
                 //   une etape dossiers a une etape |--->
//  |------------------------------------------------------------------------------------------------------------|
public function Etapes(){
    return $this->belongsTo(Etape::class);
}

//  |------------------------------------------------------------------------------------------------------------|
                 //   un dossier est d'un seul type de bornage |--->
//  |------------------------------------------------------------------------------------------------------------|
    public function Dossiers(){
        return $this->belongsTo(Dossier::class);
    }
}

/*
|**************************************** MIGRER *********************************************|
  |--->> cette parti regroupe l'ensemble des migrations de la clé primaire de la table <<---|
|*********************************************************************************************|
*/
