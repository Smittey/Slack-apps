<?php

	$command = $_POST['command'];
	$text = $_POST['text'];
	$token = $_POST['token'];
	$channel_name = $_POST['channel_name'];
	$USERNAME = "Music bot bleep bloop";

	$url = 'http://ws.audioscrobbler.com/2.0/?method=artist.getsimilar&artist=' . $text . '&api_key=9ddaab7dc99dbcfb3f2ed8204ef965ce&limit=10&format=json';
	$content = file_get_contents($url);
	$json = json_decode($content, true);

	$WEBHOOK_URL = "https://hooks.slack.com/services/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";

	$curl = curl_init($WEBHOOK_URL);
	curl_setopt($curl, CURLOPT_POST, true);

	$response = '';

	foreach($json['similarartists']['artist'] as $item) 
	{
		$response .= $item['name'];
		$response .= '\n';
	}

	$payload = array(
		'text' => rawurlencode($response),
		'username' => $USERNAME,
		'channel' => "#".$channel_name
	);

	$jsonPayload = "payload=".json_encode($payload);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonPayload);
	$return = curl_exec($curl);
	curl_close($curl);
?>