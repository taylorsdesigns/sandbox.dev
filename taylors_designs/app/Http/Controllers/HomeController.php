<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
	$phrase = "Hello my name is nick, and I <span class=\"lowercase\">&amp;hearts;</span> code.";
	$redword = "<span class=\"lowercase\">&amp;hearts;</span>";
	
	$position = strpos($phrase, $redword);
		
	$newstr = substr_replace($phrase, "<span id=\"heart\" onmouseover=\"changeWord()\" onmouseout=\"changeHeart()\" class=\"red\">".$redword."</span>", $position, strlen($redword));

	
    return view('index', compact('newstr'));
	}
}
