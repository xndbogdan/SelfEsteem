<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire_Result extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'questionnaire_id',
        'values'
    ];
}
