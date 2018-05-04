<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\registerController; 
use Session;
use DB;

class loginController extends BaseController
{
   public function login(Request $req)
   {
        $username=$req->input('gmail');
        $password=$req->input('password');
        
        $checkLogin=DB::table("user")->where(['email'=>$username,'password'=>$password])->get();
        if(count($checkLogin) >0)
        {
          Session::put("email",$username);
             return redirect()->to('/dashboard');
        }else
        {
            echo "Login failed.Try again!";
        }
   }
}
