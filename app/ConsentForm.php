<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsentForm extends Model
{
    // Store consent forms as JSON
    use \Okipa\LaravelModelJsonStorage\ModelJsonStorage;

    public $fillable = [
        'name',
        'email',
        'public',
        'language'
    ];

}
