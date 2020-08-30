<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        
        $consent_full = array_map('str_getcsv', file("../database/csvdata/consent.csv"));
        array_walk($consent_full, function(&$a) use ($consent_full) {
             $a = array_combine($consent_full[0], $a);
          });
        array_shift($consent_full); # remove column header
        
        $myfile = fopen("../database/csvdata/consent.csv", "a") or die("Unable to open file!");
        if (sizeof($consent_full) == 0) {
            $curr_code = 1;
        } else {
            $last_code = (int) filter_var($consent_full[sizeof($consent_full)-1]["code"], FILTER_SANITIZE_NUMBER_INT);
            //$last_code = (int) filter_var(array_count_values(array_column($consent_full, 'code'))[$language], FILTER_SANITIZE_NUMBER_INT);
            $curr_code = $last_code + 1;    
          }
          fwrite($myfile, '"'.$name.'","'.$email.'","'.$language.$curr_code.'","'.$public.'"'."\n");
          fclose($myfile);
          
          $request->session()->put('user_id', $language.$curr_code);
          $request->session()->put('lang', $language);

          return redirect()->route('demographic_questionnaires.create');
    }

    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}