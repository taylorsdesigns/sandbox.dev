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
	$phrase = "Hello My Name Is Nick, And I &amp;hearts; Code.";
	$redword = "&amp;hearts;";
	
	$position = strpos($phrase, $redword);
		
		
	if($_SERVER['PHP_SELF'] == "/index.php") {
		$newstr = substr_replace($phrase, "<span id=\"heart\" onmouseover=\"changeWord()\" onmouseout=\"changeHeart()\" class=\"red\">".$redword."</span>", $position, strlen($redword));
	}
	else {
		$newstr = substr_replace($phrase, "<span id=\"heart\" class=\"red\">".$redword."</span>", $position, strlen($redword));
	}
	
    return view('index', compact('newstr'));
});
