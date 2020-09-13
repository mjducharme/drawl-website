<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
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
        $name = $email = $code = "";

        $public = false;
          
        $name = $this->test_input($request->user_name);
        $email = $this->test_input($request->user_email);
        if ($this->test_input($request->share_box) == "on") {
            $public = true;
        };
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

    // delete the consent form
    public function destroy($id)
    {
        if (Gate::allows('manage-data')) {
            $consent_form = app(\App\ConsentForm::class)->find($id);
            if (is_null($consent_form)) {
                // User could not be found
                return back()->with('error', 'Delete failed - this submission could not be found!');
            };
            if ((app(\App\DemographicQuestionnaire::class)->where('consent_form_id',$id)->get()->count() > 0 ) || (app(\App\Recording::class)->where('consent_form_id',$id)->get()->count() > 0 ))  {
                return back()->with('error', 'This submission cannot be deleted - submission includes questionnaire and/or recording. View the submission details and delete the recording and/or questionnaire first.');
            }
            $consent_form->delete();
            return back()->with('status', 'Submission for ' . $consent_form->name . ' (ID: ' . $consent_form->id . ') has been successfully deleted!');
        }

        return redirect('admin')->with('error', 'You are not currently authorized to manage submissions!');
    }

    // show the consent form
    public function show($id)
    {
        if (Gate::allows('manage-data')) {
            $consent_form = app(\App\ConsentForm::class)->find($id);
            if (is_null($consent_form)) {
                // User could not be found
                return back()->with('error', 'View failed - this submission could not be found!');
            };
            $demographic_questionnaires = app(\App\DemographicQuestionnaire::class)->where('consent_form_id',$id)->get();
            $recordings = app(\App\Recording::class)->where('consent_form_id',$id)->get();
            return view('admin_consent_form',
            [ 'consent_form' => $consent_form,
              'demographic_questionnaires' => $demographic_questionnaires,
              'recordings' => $recordings ]);

        }

        return redirect('admin')->with('error', 'You are not currently authorized to manage submissions!');
    }
}