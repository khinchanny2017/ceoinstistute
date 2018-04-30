<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mainimage extends Model
{
    //
    protected $table = "main_images";
    
    protected $fillable = [
        'main_title', 'sub_title','main_img', 'contents'
    ];
}
