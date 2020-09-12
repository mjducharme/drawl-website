<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemographicQuestionnaire extends Model
{
    // Store demographic questionnaires as JSON
    use \Okipa\LaravelModelJsonStorage\ModelJsonStorage;

    protected $guarded = ['id'];

    public function consentForm()
    {
        return $this->belongsTo('App\ConsentForm');
    }
}
