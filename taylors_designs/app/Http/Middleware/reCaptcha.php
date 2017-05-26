<?php

namespace App\Http\Middleware;

use Closure;

class reCaptcha
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LeITSAUAAAAAOSXEF6Q0lO8Znbq_CFYnRRd_Q15&response='.$request->g-recaptcha-response);
		$data = json_decode($response);

	if($data->success != 1){
		return redirect('/contact');
	}
        return $next($request);
    }
}
