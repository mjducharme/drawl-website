<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Recording;

class RecordingController extends Controller
{
    /**
     * Create a new recorder instance so that user can submit
     */
    public function create()
    {
        return view('recorder',
            [ 'locale' => \App::getLocale() ]);
    }

    /**
     * Save the user's recording
     */
    public function store(Request $request)
    {     
        // Muaz Khan     - www.MuazKhan.com 
        // MIT License   - https://www.webrtc-experiment.com/licence/
        // Documentation - https://github.com/muaz-khan/RecordRTC

        Log::Info('About to upload recording.');

        // define variables and set to empty values
        $user = $this->test_input($request->session()->get('user_id'));

        if (!isset($_POST['audio-filename']) && !isset($_POST['video-filename'])) {
            error_log ('Empty file name');
            echo 'Empty file name.';
            return;
        }
    
        // do NOT allow empty file names
        if (empty($_POST['audio-filename']) && empty($_POST['video-filename'])) {
            error_log ('Empty file name');
            echo 'Empty file name.';
            return;
        }
    
        // do NOT allow third party audio uploads
        if (isset($_POST['audio-filename']) && strrpos($_POST['audio-filename'], "RecordRTC-") !== 0) {
            error_log ('Audio File name must start with RecordRTC-, filename is '.$_POST['audio-filename']);
            echo 'File name must start with "RecordRTC-"';
            return;
        }
    
        // do NOT allow third party video uploads
        if (isset($_POST['video-filename']) && strrpos($_POST['video-filename'], "RecordRTC-") !== 0) {
            error_log ('Video File name must start with RecordRTC-');
            echo 'File name must start with "RecordRTC-"';
            return;
        }
        
        $fileName = '';
        $tempName = '';
        $file_idx = '';
        
        if (!empty($_FILES['audio-blob'])) {
            $file_idx = 'audio-blob';
            $fileName = $_POST['audio-filename'];
            $tempName = $_FILES[$file_idx]['tmp_name'];
        } else {
            $file_idx = 'video-blob';
            $fileName = $_POST['video-filename'];
            $tempName = $_FILES[$file_idx]['tmp_name'];
        }
        
        if (empty($fileName) || empty($tempName)) {
            if(empty($tempName)) {
                error_log ('Invalid temp_name: '.$tempName);
                echo 'Invalid temp_name: '.$tempName;
                return;
            }
            error_log('Invalid file name: '.$fileName);
            echo 'Invalid file name: '.$fileName;
            return;
        }
    
        /*
        $upload_max_filesize = return_bytes(ini_get('upload_max_filesize'));
    
        if ($_FILES[$file_idx]['size'] > $upload_max_filesize)
           error_log('upload_max_filesize exceeded');
           echo 'upload_max_filesize exceeded.';
           return;
        }
    
        $post_max_size = return_bytes(ini_get('post_max_size'));
    
        if ($_FILES[$file_idx]['size'] > $post_max_size)
           error_log('post_max_size exceeded');
           echo 'post_max_size exceeded.';
           return;
        }
        */
        
        $filePath = '../storage/app/audio/' . $fileName;
        
        //error_log("this is the file path:" . $filePath);
        //return
        
        // make sure that one can upload only allowed audio/video files
        $allowed = array(
            'webm',
            'wav',
            'mp4',
            "mkv",
            'mp3',
            'ogg'
        );
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        if (!$extension || empty($extension) || !in_array($extension, $allowed)) {
            error_log('Invalid file extension: '.$extension);
            echo 'Invalid file extension: '.$extension;
            return;
        }
    
        if (!move_uploaded_file($tempName, $filePath)) {
            error_log('Problem saving file: '.$tempName.','.$filePath);
            echo 'Problem saving file: '.$tempName;
            return;
        }
        
        echo 'success';

        $testModel = Recording::create([
            'consent_form_id' => $user,
            'recording_filename' => $fileName
        ]);

    }

    private function someFunction($errno, $errstr)
    {
        echo '<h2>Upload failed.</h2><br>';
        echo '<p>'.$errstr.'</p>';
    }

    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /*
    function return_bytes($val) {
        $val = trim($val);
        $last = strtolower($val[strlen($val)-1]);
        switch($last) {
            // The 'G' modifier is available since PHP 5.1.0
            case 'g':
               $val *= 1024;
            case 'm':
                $val *= 1024;
            case 'k':
                $val *= 1024;
        }
        return $val;
    }
    */

}

