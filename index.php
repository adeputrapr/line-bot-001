<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
$text = $bot->getMessageText('HAI');
$bot->reply($text);

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel access token>');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('<replyToken>', $textMessageBuilder);

echo $response->getHTTPStatus() . 'Hahaahah' . $response->getRawBody();
