<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Productline extends Model
{
    protected $table = 'productlines';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    //

    protected $fillable = [
        'productlines',
        'textDescription',
        'htmlDescription',
        'image',
    ];
 
}
