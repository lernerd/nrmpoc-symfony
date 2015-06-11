<?php

namespace Stats\Incoming\FacebookBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class StatsIncomingFacebookBundle extends Bundle
{

	public function getURLCount($url) {
		$url = 'https://graph.facebook.com/?id='.$url;
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		
		$response = curl_exec($ch);
		$response = @json_decode($response);
        return is_object($response)? $response->shares : null;
	}

}
