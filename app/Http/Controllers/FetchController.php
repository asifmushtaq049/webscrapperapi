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
    public function getApi($data, $format){
      	$filename="data";
        if($format=="xml"){
          $filename.=".xml";
          header("Content-Disposition: attachment; filename=\"$filename\"");
          header("Content-Type: text/xml");
    			header("Pragma: no-cache");
    			header("Expires: 0");
  	      echo($data);
        }else{
          $filename.=".json";
          header("Content-Disposition: attachment; filename=\"$filename\"");
          header("Content-Type: application/json");
    			header("Pragma: no-cache");
    			header("Expires: 0");
  	      echo($data);
        }

    }

    public function restful(Request $request)
    {
        $web = Input::get('web');
        $type = Input::get('type');
        $format = Input::get('format');
        // echo $web.''.$type.''.$format;
        if(Input::has("download")){
          return Redirect::to('/dashboard/data/'.$web.'/'.$type.'/'.$format.'/download');
        }else{
          return Redirect::to('/dashboard/data/'.$web.'/'.$type.'/'.$format.'/view');
        }
    }
    public function fetchdata($web, $type,$format,$action)
    {
        $data = Data::where('website', $web)->get()->first();
        $output = "";
        $result = "";
        if($type == "category"){
            $output = $data->category;
        }
        if($type == "products"){
            $output = $data->products;
        }
        if($format == "xml"){
          $result = $this->json2xml($output);
        }else{
          $result = $output;
        }
        if($action=="view"){
          if($format == "xml"){
            header("Content-type: text/xml");
          }else{
            header("Content-type: application/json");
          }
          echo $result;
        }
        else if($action=="download"){
          $this->getApi($result, $format);
        }
    }

    public function getWebsite(Request $request)
    {
        $data = DB::table('data')->distinct()->get(['website']);
        return view ('dashboard.getapi', ['data' => $data]);
    }
    public function json2xml($json) {
        $a = json_decode($json);
        $d = new \DOMDocument();
        $c = $d->createElement("root");
        $d->appendChild($c);
        $t = function($v) {
            $type = gettype($v);
            switch($type) {
                case 'integer': return 'number';
                case 'double':  return 'number';
                default: return strtolower($type);
            }
        };
        $f = function($f,$c,$a,$s=false) use ($t,$d) {
            $c->setAttribute('type', $t($a));
            if ($t($a) != 'array' && $t($a) != 'object') {
                if ($t($a) == 'boolean') {
                    $c->appendChild($d->createTextNode($a?'true':'false'));
                } else {
                    $c->appendChild($d->createTextNode($a));
                }
            } else {
                foreach($a as $k=>$v) {
                    if ($k == '__type' && $t($a) == 'object') {
                        $c->setAttribute('__type', $v);
                    } else {
                        if ($t($v) == 'object') {
                            $ch = $c->appendChild($d->createElementNS(null, $s ? 'item' : $k));
                            $f($f, $ch, $v);
                        } else if ($t($v) == 'array') {
                            $ch = $c->appendChild($d->createElementNS(null, $s ? 'item' : $k));
                            $f($f, $ch, $v, true);
                        } else {
                            $va = $d->createElementNS(null, $s ? 'item' : $k);
                            if ($t($v) == 'boolean') {
                                $va->appendChild($d->createTextNode($v?'true':'false'));
                            } else {
                                $va->appendChild($d->createTextNode($v));
                            }
                            $ch = $c->appendChild($va);
                            $ch->setAttribute('type', $t($v));
                        }
                    }
                }
            }
        };
        $f($f,$c,$a,$t($a)=='array');
        return $d->saveXML($d->documentElement);
    }
}
