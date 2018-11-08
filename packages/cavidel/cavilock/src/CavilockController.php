<?php

namespace Cavidel\Cavilock;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cavidel\Cavilock;

class CavilockController extends Controller
{
    /*
    |-----------------------------------------
    | CONFIRM SOFTWARE LIENCE
    |-----------------------------------------
    */
    public function confirmSoftwareLicence(){
    	return Cavilock::verifySofware();
    }
}
