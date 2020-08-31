<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ConsentForm;

class ConsentFormController extends Controller
{
    /**
     * Create a new consent form instance so that user can submit
     */
    public function create()
    {
        return view('consent_form',
            [ 'locale' => \App::getLocale() ]);
    }

    /**
     * Save the user's consent form
     */
    public function store(Request $request)
    {     
        // define variables and set to empty values
        $name = $email = $code = $public = "";
          
        $name = $this->test_input($request->user_name);
        $email = $this->test_input($request->user_email);
        $public = $this->test_input($request->share_box);
        $language = \App::getLocale();

        $testModel = ConsentForm::create([
            'name' => $name,
            'email' => $email,
            'public' => $public,
            'language' => $language
        ]);
          
        $request->session()->put('user_id', $testModel->getKey());

        return redirect()->route('demographic_questionnaires.create');
    }

    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}