<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Redirect;
use Auth;

class FetchDataFromDB extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index(Request $request)
    {
	    $users = User::all();
	    return view('admin.users', ['users' => $users]);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if(!$user->isAdmin()){
            $user->delete();
            return view('admin.delete' ,['user' => $user]);
        }
        else{
            // return Redirect::back()->withErrors(['msg', 'Admin cannot be deleted']);
        }
    }

    public function statusUpdate(Request $request, $id)
    {
        $user = User::find($id);
        if(!$user->isAdmin()){
         $user->status = $request->status;
         $user->update();
         return view('admin.change_status', ['user' => $user]);
        }
    }
    public function status($id)
    {
        $user = User::find($id);
        return view('admin.change_status', ['user' => $user]);
    }

   public function viewProfile()
   {
        $user=Auth::user();
        return view ('dashboard.viewprofile', ['user' => $user]);
    }

    public function viewAdminProfile()
    {
         $user=Auth::user();
         return view ('admin.view_admin_profile', ['user' => $user]);
     }


}
