<?php

namespace Cavidel\Cavilock;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CavilockController extends Controller
{
    /*
    |-----------------------------------------
    | CONFIRM SOFTWARE LIENCE
    |-----------------------------------------
    */
    public function confirmSoftwareLicence(){
    	// body
    	$software_key = env("SOFTWARE_KEY");
    	if(empty($software_key)){
    		return view('cavilock::invalid');
    	}else{
	    	$query = array(
	    		"software_key" => $software_key
	    	);

	    	$ch = curl_init();
	    	curl_setopt($ch, CURLOPT_URL, "http://localhost:8402/api/verify/software");
	    	curl_setopt($ch, CURLOPT_POST, true);
	    	curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
	    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 200);
	    	$res = curl_exec($ch);
	    	$data = json_decode($res, true);
	    	if($data["status"] == true){
	    		return $data;
	    	}else{
	    		return view('cavilock::expired');
	    	}

	    	// close curl process 
	    	curl_close($ch);
    	}
    }
}
