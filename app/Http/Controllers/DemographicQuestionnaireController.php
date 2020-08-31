<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DemographicQuestionnaire;

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
        // define variables and set to empty values
        $user = $this->test_input($request->session()->get('user_id'));
        // print("hi ".$user);
        $age = $gender = $place_of_birth = $place_of_residence = $l2 = $l3 = $l4 = $l5 = $l6 = "";
        //$language = "eng";
        
        
        $age = $this->test_input($request->user_age);
        $gender = $this->test_input($request->user_gender);
        $place_of_birth = $this->test_input($request->user_pob);
        $place_of_residence = $this->test_input($request->user_cpor);
        $l2 = $this->test_input($request->user_l2);
        $l3 = $this->test_input($request->user_l3);
        $l4 = $this->test_input($request->user_l4);
        $l5 = $this->test_input($request->user_l5);
        $l6 = $this->test_input($request->user_l6);

        $testModel = DemographicQuestionnaire::create([
            'consent_form_id' => $user,
            'user_age' => $age,
            'user_pob' => $place_of_birth,
            'user_cpor' => $place_of_residence,
            'user_l2' => $l2,
            'user_l3' => $l3,
            'user_l4' => $l4,
            'user_l5' => $l5,
            'user_l6' => $l6,
        ]);
        
        return redirect()->route('recordings.create');
    }

    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}