<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\solde;
use DateTime;
use Illuminate\Support\Facades\Redirect;
use Auth;

class buyController extends Controller
{
    //

    public function buy(){
    	$buy = new solde;
		$ldate = new DateTime('today');
	    $buy->solde = Input::get('solde');
	    $buy->date = $ldate;
	    $buy->id_user = Auth::user()->id;
	    //$buy->carte = Input::get('carte');
	    $buy->save();

	    return Redirect::back();
    }
}
