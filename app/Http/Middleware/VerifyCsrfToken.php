<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Closure;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/comparison',
        '/candidates/compare', 
    ];

    public function handle($request, Closure $next) {
    	//\Log::info("Third: ".$request->headers->get('referer'));
    	$referer = $request->headers->get('referer');
    	$exempted = [
    		'https://compare.wegov.nyc/',
    		'https://www.gothamgazette.com/',
    		'https://www.nydailynews.com/',
    	]; 

    	/*\Log::info($referer."\n");
    	\Log::info(print_r($request->all()));*/

	    /*if ($referer == 'https://compare.wegov.nyc/') {
	        return $next($request);
	    }

	    if ($referer == 'https://www.gothamgazette.com/' ) {
	        return $next($request);
	    }*/

	    if (in_array($referer, $exempted)) {
	    	return $next($request);
	    }

	    return parent::handle($request, $next);
	}
}
