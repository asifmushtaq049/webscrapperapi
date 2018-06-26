<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
class Register extends Model
{
    //
    protected $table="user";
    public static function formstore($data)
    {
    	$fname=Input::get('fname');
    	$lname=Input::get('lname');
    	$email=Input::get('email');
    	$pass=Input::get('password');
    	$users=new Register();
    	$users->fname=$fname;
    	$users->lname=$lname;
    	$users->email=$email;
    	$users->password=$pass;
    	$users->save();

    }
}
