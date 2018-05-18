<?php



require "vendor/autoload.php";

$access_token = 'nQiY++j/wbNA8u6zlNzz/RtafsC2i40ERqGEgtvxNDXwTTt9Z62ZdAxwwceZk3WqPWBquHunHE0HZtRL8Ezq9xf7cxTdeI/fKSKy9uNqwBIAk+GCO+4DYuhGzchTA1jWATfAYoSH7oEJNRTobVOdIAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '74f635ba1154370dd18c994619068ac8';

$pushID = 'Ufd7798f8e80447988a4bf8a50dd9ac44';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







