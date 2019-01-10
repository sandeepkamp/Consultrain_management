<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgencyProductMapping extends Model
{
    public $fillable = [
        'product_id',
        'agency_id',
     ];
}
