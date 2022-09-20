<?php

namespace App\Models;

use App\Models\Cv;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atout extends Model
{
    use HasFactory;
    public function cvs(){
        return $this->belongsToMany(Cv::class,'atout_cv','cvs_id',"atouts_id");
    }
}
