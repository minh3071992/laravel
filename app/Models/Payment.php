<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    public $timestamps = false;
    protected $dateFormat = 'U';

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    //

    protected $fillable = [
        'customerNumber',
        'checkNumber',
        'paymentDate',
        'amount',
    ];
}
