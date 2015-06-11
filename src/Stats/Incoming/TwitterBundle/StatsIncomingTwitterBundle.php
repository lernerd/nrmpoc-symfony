<?php

namespace Stats\Incoming\TwitterBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class StatsIncomingTwitterBundle extends Bundle
{

	public function getURLCount($url) {
		$url = 'http://urls.api.twitter.com/1/urls/count.json?url='.$url;
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$response = curl_exec($ch);
		$response = @json_decode($response);
        return is_object($response)? $response->count : null;
	}

}
