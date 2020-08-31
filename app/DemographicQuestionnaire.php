<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemographicQuestionnaire extends Model
{
    // Store demographic questionnaires as JSON
    use \Okipa\LaravelModelJsonStorage\ModelJsonStorage;

    public $fillable = [
        'consent_form_id',
        'user_age',
        'user_gender',
        'user_pob',
        'user_cpor',
        'user_l2',
        'user_l3',
        'user_l4',
        'user_l5',
        'user_l6'
    ];

    public function consentForm()
    {
        return $this->belongsTo('App\ConsentForm');
    }
}
