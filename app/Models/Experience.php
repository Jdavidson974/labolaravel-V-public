<?php

namespace App\Models;
use App\Models\Cv;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    public function cvs(){
        return $this->belongsToMany(Cv::class,'cv_experience','cvs_id',"experiences_id");
    }
}
