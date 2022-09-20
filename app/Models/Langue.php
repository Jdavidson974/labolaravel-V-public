<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    use HasFactory;
    public function cvs(){
        return $this->belongsToMany(Cv::class,'cv_langue','cvs_id',"langues_id");
    }
}
