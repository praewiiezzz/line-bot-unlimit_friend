<?php



require "vendor/autoload.php";

$access_token = 'C6yU4avsrRJwRDd1QLE5GMjfW4FKaEVkE0cuCdCPMSpwPFkhxy6DPiT4BJt+LXH0Krw7P105yBcorxE0TzT1mlmvvTWzTOk3tAt6av5wjzkNQNddBAgFejnTYcSj66J+i40XZuUSyIyys5xX+jC+ewdB04t89/1O/w1cDnyilFU=';

$channelSecret = '17fece9503cef636192da92fb566ee4d';

$pushID = 'U19c3b82407a7eb6a9e1ab1f27daa6605';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('7 โมงเป็นต้นไปแน่นอนค่ะ ');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";







