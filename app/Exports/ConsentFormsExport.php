<?php

namespace App\Exports;

use App\ConsentForm;
use App\DemographicQuestionnaire;
use App\Recording;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\Log;

class ConsentFormsExport implements FromView
{
    public function view(): View
    {
        // build list of field names in the questionnaire since they may vary between records
        $demographic_questionnaire_fieldnames = [];
        $demographic_questionnaires = DemographicQuestionnaire::all();

        foreach ($demographic_questionnaires as $demographic_questionnaire) {
            foreach ($demographic_questionnaire->toArray() as $key => $demo) {
                if (!in_array($key, $demographic_questionnaire_fieldnames)) {
                    $demographic_questionnaire_fieldnames[] = $key;
                }
            }
        }

        $consent_forms = ConsentForm::all();

        foreach ($consent_forms as $key => $consent_form) {
            $recording_filenames = "";
            $recordings = app(\App\Recording::class)->where('consent_form_id',$consent_form->id)->get();
            foreach ($recordings as $recording) {
                //Log::info('recording filename ' . $recording->recording_filename);
                $recording_filenames = $recording_filenames . " " . $recording->recording_filename;
            }
            $consent_forms[$key]['recording_filenames'] = $recording_filenames;
            $consent_forms[$key]['demographic_questionnaires'] = app(\App\DemographicQuestionnaire::class)->where('consent_form_id',$consent_form->id)->get();
            //Log::info('consent form ' . $consent_form->id . ', recording filenames ' . $recording_filenames);
        }

        return view('exports.consent_forms', [
            'consent_forms' => $consent_forms, 'fieldnames' => $demographic_questionnaire_fieldnames
        ]);
    }
}
