<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index() {
	$phrase = "Here is some web design work i've done.";
	$redword = "web design";
	$position = strpos($phrase, $redword);
	
	$newstr = substr_replace($phrase, "<span id=\"heart\" class=\"red\">".$redword."</span>", $position, strlen($redword));

	
	return view('work', compact('newstr'));
	}
}
