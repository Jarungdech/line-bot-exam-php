<?php
$access_token = 'ZqAb5LTJwzOzIiX5hr9VYTWsc8t4hwp7V86B61uVAV4XuZjaokLxt/RQoBrlb13g1S1iMajLIjKMcsrRU95+7SIq9AXHDhOboaRBJ9et+FCRrQhf7bxQDonwXATjTbe1r3F3DT8LC5IiBl38A8YUEgdB04t89/1O/w1cDnyilFU=';


$url = 'https://chatbotoffirst.herokuapp.com/';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
