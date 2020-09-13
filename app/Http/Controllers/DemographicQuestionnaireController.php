<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DemographicQuestionnaire;
use Illuminate\Support\Facades\Log;
use UA;
use Illuminate\Support\Facades\Gate;

class DemographicQuestionnaireController extends Controller
{
    /**
     * Create a new demographic questionnaire instance so that user can submit
     */
    public function create(Request $request)
    {
        return view('demographic_questionnaire',
            [ 'locale' => \App::getLocale(), 'useragent' => UA::parse($request->header('user-agent'))]);
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

        // delete the demographic questionnaire
        public function destroy($id)
        {
            if (Gate::allows('manage-data')) {
                $demographic_questionnaire = app(\App\DemographicQuestionnaire::class)->find($id);
                if (is_null($demographic_questionnaire)) {
                    // User could not be found
                    return back()->with('error', 'Delete failed - this demographic questionnaire could not be found!');
                };
                $demographic_questionnaire->delete();
                return back()->with('status', 'Demographic questionnaire ID ' . $demographic_questionnaire->id . ' has been successfully deleted!');
            }
    
            return redirect('admin')->with('error', 'You are not currently authorized to manage submissions!');
        }
}