<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table='student';

    protected $primarykey='idstudent';
    public $TIMESTAMPS=true;
    const CREATED_AT='create_ad';
    const UPDATED_AT='update_ad';

    protected $fillabel=[
        'name',
        'last_name',
        'mothers_last_name',
        'age',
        'telephone',
        'address',
        'email',
        'create_ad',
        'update_ad' 
    ];
}
