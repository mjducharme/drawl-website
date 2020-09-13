<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Gate::allows('manage-users')) {
            // The current user can manage users
            $users = \App\User::all();

            return view('admin_users',
                [ 'users' => $users ]);
        }

        return redirect('admin')->with('error', 'You are not currently authorized to manage users!');
    }

    // authorize the user
    public function authorizeUser($user_id)
    {
        if ($user_id == Auth::user()->id) {
            return back()->with('error', 'You are not allowed to authorize yourself!');
        } elseif (Gate::allows('manage-users')) {
            $user = \App\User::find($user_id);
            if (is_null($user)) {
                // User could not be found
                return back()->with('error', 'Authorization failed - this user could not be found!');
            }
            if ($user->authorized == true) {
                return back()->with('error', 'This user is already authorized and cannot be authorized again!');
            }
            $user->authorized = true;
            $user->save();
            return back()->with('status', 'User ' . $user->name . ' (ID: ' . $user->id . ') has been successfully authorized!');
        }

        return redirect('admin')->with('error', 'You are not currently authorized to manage users!');
    }

    // authorize the user
    public function deauthorizeUser($user_id)
    {
        if ($user_id == Auth::user()->id) {
            return back()->with('error', 'You are not allowed to deauthorize yourself!');
        } elseif (Gate::allows('manage-users')) {
            $user = \App\User::find($user_id);
            if (is_null($user)) {
                // User could not be found
                return back()->with('error', 'Deauthorization failed - this user could not be found!');
            }
            if ($user->authorized == false) {
                return back()->with('error', 'This user is already deauthorized and cannot be deauthorized again!');
            }
            $user->authorized = false;
            $user->save();
            return back()->with('status', 'User ' . $user->name . ' (ID: ' . $user->id . ') has been successfully deauthorized!');
        }

        return redirect('admin')->with('error', 'You are not currently authorized to manage users!');
    }

    // delete the user
    public function destroy($user_id)
    {
        if ($user_id == Auth::user()->id) {
            return back()->with('error', 'You are not allowed to delete yourself!');
        } elseif (Gate::allows('manage-users')) {
            $user = \App\User::find($user_id);
            if (is_null($user)) {
                // User could not be found
                return back()->with('error', 'Delete failed - this user could not be found!');
            };
            if ($user->authorized == true) {
                return back()->with('error', 'This user must be deauthorized before you can delete them!');
            }
            $user->delete();
            return back()->with('status', 'User ' . $user->name . ' (ID: ' . $user->id . ') has been successfully deleted!');
        }

        return redirect('admin')->with('error', 'You are not currently authorized to manage users!');
    }
}
