<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use DB;

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
    	}else{
    		echo $output;
    	}
    }

    public function restful(Request $request)
    {
        $web = Input::get('web');
        $type = Input::get('type');
        $format = Input::get('format');
        // echo $web.''.$type.''.$format;

        return Redirect::to('/dashboard/data/'.$web.'/'.$type.'/'.$format);
    }
    public function fetchdata($web, $type,$format)
    {
        
        $data = Data::where('website', $web)->get()->first();
        $output = "";
        if($type == "category"){
            $output = $data->category;
        }
        if($type == "products"){
            $output = $data->products;
        }
            echo $output;
    }

    public function getWebsite(Request $request)
    {
        $data = DB::table('data')->distinct()->get(['website']);
        return view ('dashboard.getapi', ['data' => $data]);
    }
}
