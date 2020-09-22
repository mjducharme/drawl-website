<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

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
        $root_path = base_path();
        $process = new Process::fromShellCommandline('cd ' . $root_path . '; sh ./deploy.sh');
        $process->run(function ($type, $buffer) {
            echo $buffer;
        });
    }
}
