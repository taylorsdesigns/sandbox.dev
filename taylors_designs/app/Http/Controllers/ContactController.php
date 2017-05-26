<?php

namespace App\ Http\ Controllers;

use Illuminate\ Http\ Request;
use App\ Mail\ RequestInfo;

class ContactController extends Controller {
	public
	function index() {
		$phrase = "Feel free to say hello!";
		$redword = "hello!";
		$position = strpos( $phrase, $redword );

		$newstr = substr_replace( $phrase, "<span id=\"heart\" class=\"red\">" . $redword . "</span>", $position, strlen( $redword ) );


		return view( 'contact', compact( 'newstr' ) );
	}

	public
	function submit( Request $request ) {
		$response = file_get_contents( 'https://www.google.com/recaptcha/api/siteverify?secret=6LeITSAUAAAAAOSXEF6Q0lO8Znbq_CFYnRRd_Q15&response=' . request( 'g-recaptcha-response' ) );
		$data = json_decode( $response );

		if ( $data->success ) {
			\Mail::to( 'nicholas.ryan.taylor@gmail.com' )->send( new RequestInfo($request));
			return redirect()->route('contact');
		}
	}
}