<?php // callback.php

require "autoload.php";
require_once("LINEBotTiny.php");

$access_token = 'SxczR2IyC07PRDl2mKgNJIiFQxTTb1Hi3M6KEb3KkCY6e4sl+mr8f4awoIGMnM4/1dAvVrLLdnOKajyPgM30y995FTARhclLsAxWdTQPGgkkcmcOpkV2pUu6R+VWyuqFjU9Ja6YUPxLXMA1t22FLkgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
$text2 = '';
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text']."\n".$event['source']['userId'];
			// Get replyToken
			$text2 = $text;
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];

			// Make a POST Request to Messaging API to reply to sender
			/*$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);*/

			echo $result . "\r\n";
		}
	}
}
require "autoload.php";
$access_token = 'SxczR2IyC07PRDl2mKgNJIiFQxTTb1Hi3M6KEb3KkCY6e4sl+mr8f4awoIGMnM4/1dAvVrLLdnOKajyPgM30y995FTARhclLsAxWdTQPGgkkcmcOpkV2pUu6R+VWyuqFjU9Ja6YUPxLXMA1t22FLkgdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'cd0010ad4444002f4c583c751713bcd5';
$pushID = 'U219bbe2274f2d1e13e1456ecddd5259e';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($text2);
$response = $bot->pushMessage($pushID, $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "ok";
echo "OK";
