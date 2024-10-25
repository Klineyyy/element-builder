<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    protected $table = 't_customers'; 
    protected $fillable = [
        'cus_first_name',
        'cus_last_name',
        'cus_email', 
        'cus_phone_number', 
        'cus_address', 
        'cus_city', 
        'cus_state', 
        'cus_postal_code', 
        'cus_country'
    ];
}
