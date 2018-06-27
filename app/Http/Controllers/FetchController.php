<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class FetchController extends Controller
{
    //
    public function getApi(Request $request){
    	$web = Input::get('web');
    	$type = Input::get('type');
    	$format = Input::get('format');
    	$data = Data::where('website', $web)->get()->first();
    	$filename="download.json";
    	$output = "";
		if($type == "category"){
			$output = $data->category;
    	}
    	if($type == "products"){
    		$output = $data->products;
    	}
    	if(Input::has("download")){
	    	header("Content-Disposition: attachment; filename=\"$filename\"");
			header("Content-Type: application/json");
			header("Pragma: no-cache"); 
			header("Expires: 0");
			echo($output);
    	}
    }
}
