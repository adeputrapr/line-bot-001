<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "GutdYNnFfVz6WnwSvH5cuyfqNtnoNgroztJD02uYZnbCw/bsTzme81GHPttRIWInRHilagj7UP283LJcNyEB5/muR690VDZjPYrfLPp7+COOZT8yIjTybQ3ahK2TLLY8E38ewqxNNbXemErs+Lfw/wdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "e66cf1bed8481c9ad3e661851b5903ef";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
