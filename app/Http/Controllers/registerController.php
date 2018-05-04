<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Input;
use Validator;
use App\Register;
use Session;
use DB;

class registerController extends BaseController
{
   public function store()
   {
        $data=Input::except(array('_token'));
        
        $rule=array(
          'fname' => 'required',
          'lname' => 'required',
          'email' => 'required|email',
          'password' => 'required|min:3',
          'cpassword' => 'required|same:password'
        );
        $message=array(
          'password.required' => 'At least 6 characters',
          'cpassword.same' => 'Passwords dont match'
        );
        $validator=Validator::make($data,$rule,$message);
        if ($validator->fails()) {
          return Redirect::to('/dashboard/register')->withErrors($validator);

        }else{
          Register::formstore(Input::except(array('_token','cpassword')));
        }
   }
}
