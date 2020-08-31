<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recording extends Model
{
    // Store recordings as JSON
    use \Okipa\LaravelModelJsonStorage\ModelJsonStorage;

    public $fillable = [
        'consent_form_id',
        'recording_filename'
    ];

    public function consentForm()
    {
        return $this->belongsTo('App\ConsentForm');
    }
}
