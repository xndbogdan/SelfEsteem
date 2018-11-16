<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question_Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'question_categories';
    public $timestamps=false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name'
    ];
}
