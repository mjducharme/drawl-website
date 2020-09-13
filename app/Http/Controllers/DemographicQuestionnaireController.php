<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DemographicQuestionnaire;
use Illuminate\Support\Facades\Log;

class DemographicQuestionnaireController extends Controller
{
    /**
     * Create a new demographic questionnaire instance so that user can submit
     */
    public function create()
    {
        return view('demographic_questionnaire',
            [ 'locale' => \App::getLocale() ]);
    }

    /**
     * Save the user's demographic questionnaire
     */
    public function store(Request $request)
    {     
        // define variables
        $user = $this->test_input($request->session()->get('user_id'));

        $questionnaire = new DemographicQuestionnaire;

        $questionnaire->consent_form_id = (int) $user;

        // iterate through all form variables to store questionnaire data
        foreach($request->all() as $key => $value) {
            if ($key != "_token") {
                $questionnaire[$key] = $this->test_input($value);
            }
        }

        $questionnaire->save();

        return redirect()->route('recordings.create');
    }

    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}