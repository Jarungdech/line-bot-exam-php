<?php



require "vendor/autoload.php";

$access_token = 'ZqAb5LTJwzOzIiX5hr9VYTWsc8t4hwp7V86B61uVAV4XuZjaokLxt/RQoBrlb13g1S1iMajLIjKMcsrRU95+7SIq9AXHDhOboaRBJ9et+FCRrQhf7bxQDonwXATjTbe1r3F3DT8LC5IiBl38A8YUEgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







