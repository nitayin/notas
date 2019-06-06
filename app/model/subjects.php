<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
    protected $table='subjects';

    protected $primarykey='idsubjects';
    public $TIMESTAMPS=true;
    const CREATED_AT='create_ad';
    const UPDATED_AT='update_ad';

    protected $fillabel=[
        'name_subjects',
        'student_idstudent',
        'create_ad',
        'update_ad'
    ];
}
