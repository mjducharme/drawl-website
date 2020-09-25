<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Gate;

class DeployController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function deploy(Request $request)
    {
        if (Gate::allows('manage-users')) {
            $root_path = base_path();
            $process = new Process(['/bin/sh','../deploy.sh']);
            $process->run(function ($type, $buffer) {
                echo $buffer;
            });

            return response('', 200)->header('Content-Type', 'text/plain')->header('Charset', 'utf-8');
        } else {
            return redirect('admin')->with('error', 'You are not currently authorized to manage users, so you cannot trigger deployment!');
        }
        
    }
}
