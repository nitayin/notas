<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class notes extends Model
{
    protected $table='notes';

    protected $primarykey='idnotes';
    public $TIMESTAMPS=true;
    const CREATED_AT='create_ad';
    const UPDATED_AT='update_ad';

    protected $fillabel=[
        'idnotes',
        'first_partial',
        'second_partial',
        'third_partial',
        'final_note',
        'subjects_idsubjects',
        'create_ad',
        'update_ad' 
    ];
}
