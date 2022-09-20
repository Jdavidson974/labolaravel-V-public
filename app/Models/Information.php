<?php

namespace App\Models;

use App\Models\Cv;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    //définis la table en db
    // https://stackoverflow.com/questions/38770785/how-to-fix-error-base-table-or-view-not-found-1146-table-laravel-relationship-t
    protected $table = 'informations';

    use HasFactory;

    public function cvs(){
        return $this->belongsToMany(Cv::class,'cv_information','cvs_id',"informations_id");
    }
}
