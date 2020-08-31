<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    // Store languages as JSON
    use \Okipa\LaravelModelJsonStorage\ModelJsonStorage;

    protected $fillable = [
        'code', 'name'
    ];
}
