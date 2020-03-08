<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
$text = $bot->getMessageText();
$bot->reply($text);

if($userMessage == "contoh"){
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('ini adalah contoh text message');
$result = $bot->replyMessage($event['replyToken'], $textMessageBuilder);
return $result->getHTTPStatus() . ' ' . $result->getRawBody();     
}
