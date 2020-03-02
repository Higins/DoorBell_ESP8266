<?php

class DoorBell
{
	private $appId = '';

	function __construct($appId)
	{
		$this->appId = $appId;
	}

	function sendMessage()
	{
		$content = [
			"en" => "Ring ring!",
		];

		$fields = [
			'app_id'            => $this->appId,
			'included_segments' => ['All'],
			'contents'          => $content
		];

		$fields = json_encode($fields);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json; charset=utf-8',
			'Authorization: Basic REST API KEY'
		));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		$response = curl_exec($ch);
		curl_close($ch);

		return $response;

	}

}

$doorBell = new DoorBell('appid');
$doorBell->sendMessage();

