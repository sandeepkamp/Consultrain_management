<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = [
        'name',
        'detail',
     ];


     public function project_management()
     {
         return $this->hasMany('App\ProjectManagement','iso_product_id');
     }

}
