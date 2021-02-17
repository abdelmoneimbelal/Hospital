<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{

    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'phone', 'id_number', 'password', 'blood_type');



    protected $hidden = [
        'password', 'api_token',
    ];
}