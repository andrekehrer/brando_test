<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    public function getRemoteData(Request $request){
        $from = $request->input('from');
        $to = $request->input('to');
    	$client = new Client();
		$response = $client->request('GET', 'https://api.tfl.gov.uk/Journey/JourneyResults/'.$from.'/to/'.$to.'');
		$data = ($response->getBody());
		return $data;
    }
}
