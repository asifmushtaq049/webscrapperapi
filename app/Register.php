<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
class Register extends Model
{
    //
    protected $table="noor";
    public static function formstore($data)
    {
    	$fname=Input::get('fname');
    	$lname=Input::get('lname');
    	$email=Input::get('email');
    	$pass=Input::get('password');
    	$users=new Register();
    	$users->first_name=$fname;
    	$users->last_name=$lname;
    	$users->email=$email;
    	$users->password=$pass;
    	$users->save();

    }
}
