<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
    protected $table = 'main_images';

    protected $fillable = [
        'main_title',
        'sub_title',
        'main_img',
        'contents',
        // add all other fields
    ];
}

	