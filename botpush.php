<?php



require "vendor/autoload.php";

$access_token = 'mwZ0JayWXNUoxnj6+Sy/7ffex7pdpSM1CIqFrsT9GzgnwnUTGutnuPEZmVVkQFrv1dAvVrLLdnOKajyPgM30y995FTARhclLsAxWdTQPGgllS7LXw4I5NRKxx5e3BUzVLxT4/WV7uERFgPqNjuHiQQdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'cd0010ad4444002f4c583c751713bcd5';

$pushID = 'U77f3df8dad58c0e429ba7d385b7a95a2 ';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('สามารถติดต่อ reception ได้ที่เบอร์ 035212535');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK";







