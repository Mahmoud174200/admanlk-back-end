<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Users extends Model
{

    use HasFactory;
    protected $table="users";
    protected $fillable = [
        'id',
        'f_name',
        'm_name',
        'l_name',
        'user_name',
        'email',
        'password',
        'age',
        'address_1',
        'address_2',
        'city',
        'zip_code',
        'phone',
        'profile_pic',
        'last_login',
        'creat_date',
        'company',
        'last_update_info',
        'activity_log',
        'Admin',
        'phone_2',
        'sex',
        
    ];
    
}
