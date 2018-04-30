<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    //
    protected  $table = 'company_partner';

     protected $fillable = [
        'company_name',
        'logo_company',
        'description_company',
        'url_website',
        // add all other fields
    ];
}
