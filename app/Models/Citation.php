<?php

namespace App\Models;

use App\Models\Cv;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
    use HasFactory;

    public function cvs(){
        return $this->hasMany(Cv::class);
    }
}
