<?php



require "vendor/autoload.php";

$access_token = 'ZqAb5LTJwzOzIiX5hr9VYTWsc8t4hwp7V86B61uVAV4XuZjaokLxt/RQoBrlb13g1S1iMajLIjKMcsrRU95+7SIq9AXHDhOboaRBJ9et+FCRrQhf7bxQDonwXATjTbe1r3F3DT8LC5IiBl38A8YUEgdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b38833f3bf7ac695e27a877d50f9c5a1';

$pushID = '1594721038';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







