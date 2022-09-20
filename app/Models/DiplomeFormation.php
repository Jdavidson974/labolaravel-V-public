<?php

namespace App\Models;

use App\Models\Cv;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiplomeFormation extends Model
{
    use HasFactory;

    public function cvs(){
        return $this->belongsToMany(Cv::class,'cv_diplome_formations','cvs_id',"diplome_formations_id");
    }
}
