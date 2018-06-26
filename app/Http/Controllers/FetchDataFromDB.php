<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
	    return view('fetch_data.users', ['users' => $users]);
    }
}