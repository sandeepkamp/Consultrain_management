<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectManagement extends Model
{
    protected $table = 'project_managements';
    protected $primaryKey = 'id';
    
    public $fillable=[
        
        'customer_id',
        'iso_product_id',
        'agency_id',
        'order_no',
        'order_amount',
        'order_date',
        'tender_no',
        'tender_amount',
        'tender_date',
        'reference',
        'project_lead',
        'start_plnd_dt',
        'start_actual_dt',
        'amc',
        'gap_assessment'
    ];

    public function documentations() 
    {
       return $this->hasMany('App\Documentation','order_id');
    }


    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function product()
    {
        return $this->belongsTo('App\Product','iso_product_id');
    }

    public function agency()
    {
        return $this->belongsTo('App\Agency');
    }
}
