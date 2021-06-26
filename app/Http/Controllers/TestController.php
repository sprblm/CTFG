<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class TestController extends Controller {
    public function load(Request $request) {
        echo "loaderio-766414ee00dde3c55989cd46e8533eb8";
    }
    public function test(Request $request){
    	//echo "test";
        $candidates = DB::table('candidates')->get();
        $issues = DB::table('issues')->get();

        $content = DB::table('content')->get();

        $url = "http://127.0.0.1:8000/compare?candidates%5B%5D=recZkuP0lAMUjBKJC&candidates%5B%5D=recNxWXPOzYJwoPtn&issues%5B%5D=rec1YK8Hw75udjCSO&issues%5B%5D=rec6t72xa2FL3z7b2&issues%5B%5D=recvXTaCuszeS6Z1b";

        return view('welcome', [
            'candidates' => $candidates,
            'issues' => $issues,
            'content' => $content,
        ]);


        /*return view('comparison', [
            'ctd1' => $candidate1,
            'ctd2' => $candidate2,
            'ppls' => $proposals1,
            'ppls2' => $proposals2,
            'ct2Image' => $ct2Image,
            'ct1Image' => $ct1Image,
        ]); */
    }	

    public function en(Request $request){
        $candidates = $request->candidates;
        $issues = $request->issues;

        $url = "/comparison?";

        for ($i=0; $i < sizeof($candidates); $i++) { 
            $url .= "candidates%5B%5D=".$candidates[$i]."&";
        }

        $lastElement = end($issues);
        for ($i=0; $i < sizeof($issues); $i++) { 
            if ($issues[$i] == $lastElement) {
                $url .= "issues%5B%5D=".$issues[$i];
            } else {
                $url .= "issues%5B%5D=".$issues[$i]."&";
            }
        }

        echo url($url);
    }

}
