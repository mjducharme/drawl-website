<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use App\Recording;
use Exception;

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

        if (!isset($request['audio-filename']) && !isset($request['video-filename'])) {
            Log::Error('Empty file name');
            return response('Empty file name.', 400);
        }
    
        // do NOT allow empty file names
        if (empty($request['audio-filename']) && empty($request['video-filename'])) {
            Log::Error('Empty file name');
            return response('Empty file name.', 400);
        }
    /*
        This block no longer necessary, third party uploads are forbidden by CSRF token checking
        
        // do NOT allow third party audio uploads
        if (isset($request['audio-filename']) && strrpos($request['audio-filename'], "RecordRTC-") !== 0) {
            Log::Error('Audio File name must start with RecordRTC-, filename is '.$request['audio-filename']);
            return response('File name must start with "RecordRTC-"', 400);
        }
    
        // do NOT allow third party video uploads
        if (isset($request['video-filename']) && strrpos($request['video-filename'], "RecordRTC-") !== 0) {
            Log::Error('Video File name must start with RecordRTC-');
            return response('File name must start with "RecordRTC-"', 400);
        }
        */
        
        $fileName = '';
        $tempName = '';
        $file_idx = '';
        
        if (!empty($request->file('audio-blob'))) {
            $file_idx = 'audio-blob';
            $fileName = $request['audio-filename'];
            $tempName = $_FILES[$file_idx]['tmp_name'];
        } else {
            $file_idx = 'video-blob';
            $fileName = $request['video-filename'];
            $tempName = $_FILES[$file_idx]['tmp_name'];
        }

        if(!empty($_FILES[$file_idx]["error"]) && ($_FILES[$file_idx]["error"] != 0)) {
            $listOfErrors = array(
                '1' => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
                '2' => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
                '3' => 'The uploaded file was only partially uploaded.',
                '4' => 'No file was uploaded.',
                '6' => 'Missing a temporary folder. Introduced in PHP 5.0.3.',
                '7' => 'Failed to write file to disk. Introduced in PHP 5.1.0.',
                '8' => 'A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop; examining the list of loaded extensions with phpinfo() may help.'
            );
            $error = $_FILES[$file_idx]["error"];

            if(!empty($listOfErrors[$error])) {
                Log::Error($listOfErrors[$error]);
                return response($listOfErrors[$error], 400);
            }
            else {
                Log::Error('Not uploaded because of error #'.$_FILES["$file_idx"]["error"]);
                return response('Not uploaded because of error #'.$_FILES["$file_idx"]["error"], 400);
            }
        }
        
        if (empty($fileName) || empty($tempName)) {
            if(empty($tempName)) {
                Log::Error('Invalid temp_name: '.$tempName);
                return response('Invalid temp_name: '.$tempName, 400);
            }
            Log::Error('Invalid file name: '.$fileName);
            return response('Invalid file name: '.$fileName, 400);
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
            Log::Error('Invalid file extension: '.$extension);
            return response('Invalid file extension: '.$extension, 400);
        }
    
        try {
            if (!move_uploaded_file($tempName, $filePath)) {
                Log::Error('Problem saving file: '.$tempName.','.$filePath);
                return response('Problem saving file: '.$tempName.','.$filePath, 400);
            }
        } catch (Exception $e) {
            Log::Error('Problem saving file: '.$tempName.','.$filePath.' : '.$e);
            return response('Problem saving file: '.$tempName.','.$filePath.' : '.$e->getMessage(), 400);
        }
        
        echo 'success';

        $testModel = Recording::create([
            'consent_form_id' => (int) $user,
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

        // delete the recording
        public function destroy($id)
        {
            if (Gate::allows('manage-data')) {
                $recording = app(\App\Recording::class)->find($id);
                if (is_null($recording)) {
                    // Recording could not be found
                    return back()->with('error', 'Delete failed - this recording could not be found!');
                };
                Storage::delete('audio/' . $recording->recording_filename);
                $recording->delete();
                return back()->with('status', 'Recording ID ' . $recording->id . ' has been successfully deleted!');
            }
    
            return redirect('admin')->with('error', 'You are not currently authorized to manage submissions!');
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

