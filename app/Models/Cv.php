<?php

namespace App\Models;
use App\Models\Atout;
use App\Models\Interets;
use App\Models\Langue;
use App\Models\Citation;
use App\Models\Information;
use App\Models\Competence;
use App\Models\DiplomeFormation;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    public function citation(){
        return $this->belongsTo(Citation::class);
    }

    public function informations(){
        //Arg 1 = class qu'on souhaite faire une relation x-n
        //Arg 2 = nom de la table
        //Arg 3 = nom de la 1er foreign key
        //Arg 4 = nom de la 2eme foreign key
        return $this->belongsToMany(Information::class,'cv_information','cvs_id',"informations_id");
    }
    public function competences(){
        return $this->belongsToMany(Competence::class,'cv_competence','cvs_id',"competences_id");
    }
    public function diplome_formations(){
        return $this->belongsToMany(DiplomeFormation::class,'cv_diplome_formation','cvs_id',"diplome_formations_id");
    }
    public function experiences(){
        return $this->belongsToMany(Experience::class,'cv_experience','cvs_id',"experiences_id");
    }
    public function atouts(){
        return $this->belongsToMany(Atout::class,'atout_cv','cvs_id',"atouts_id");
    }
    public function langues(){
        return $this->belongsToMany(Langue::class,'cv_langue','cvs_id',"langues_id");
    }
    public function interets(){
        return $this->belongsToMany(Interets::class,'cv_interet','cvs_id',"interets_id");
    }
}
