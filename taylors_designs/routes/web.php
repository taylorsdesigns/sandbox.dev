<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$phrase = "Hello my name is nick, and I &amp;hearts; code.";
	$redword = "&amp;hearts;";
	
	$position = strpos($phrase, $redword);
		
	$newstr = substr_replace($phrase, "<span id=\"heart\" onmouseover=\"changeWord()\" onmouseout=\"changeHeart()\" class=\"red\">".$redword."</span>", $position, strlen($redword));

	
    return view('index', compact('newstr'));
});

Route::get('/work', function(){
	$phrase = "Here is some web design work i've done.";
	$redword = "web design";
	$position = strpos($phrase, $redword);
	
	$newstr = substr_replace($phrase, "<span id=\"heart\" class=\"red\">".$redword."</span>", $position, strlen($redword));

	
	return view('work', compact('newstr'));
});

Route::get('/resume', function(){
	$phrase = "Here is my resume, feel free to browse!";
	$redword = "resume";
	$position = strpos($phrase, $redword);
	
	$newstr = substr_replace($phrase, "<span id=\"heart\" class=\"red\">".$redword."</span>", $position, strlen($redword));

	
	return view('resume', compact('newstr'));
});

Route::get('/contact', function(){
	$phrase = "Feel free to say hello!";
	$redword = "hello!";
	$position = strpos($phrase, $redword);
	
	$newstr = substr_replace($phrase, "<span id=\"heart\" class=\"red\">".$redword."</span>", $position, strlen($redword));

	
	return view('contact', compact('newstr'));
});