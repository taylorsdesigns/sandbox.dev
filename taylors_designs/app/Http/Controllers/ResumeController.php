<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index() {
	$phrase = "Here is my resume, feel free to browse!";
	$redword = "resume";
	$position = strpos($phrase, $redword);
	
	$newstr = substr_replace($phrase, "<span id=\"heart\" class=\"red\">".$redword."</span>", $position, strlen($redword));

	
	return view('resume', compact('newstr'));	}
}
