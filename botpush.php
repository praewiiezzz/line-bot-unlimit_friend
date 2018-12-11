<?php



require "vendor/autoload.php";

$access_token = 'mwZ0JayWXNUoxnj6+Sy/7ffex7pdpSM1CIqFrsT9GzgnwnUTGutnuPEZmVVkQFrv1dAvVrLLdnOKajyPgM30y995FTARhclLsAxWdTQPGgllS7LXw4I5NRKxx5e3BUzVLxT4/WV7uERFgPqNjuHiQQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '17fece9503cef636192da92fb566ee4d';

$pushID = 'U19c3b82407a7eb6a9e1ab1f27daa6605';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('7 โมงเป็นต้นไปแน่นอนค่ะ ');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







