<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = 'U5af19ab1cf4a8712fb7d588e56fcd881';
$access_token  = 'R5lpQztL0e3enR4mPpBoWQXWYkAUG5yOQphTQdXf4jPtWQWi2JMvUeXS9c18pVBtxuxuNBnQfqoJpghka2o/hlFN+bxPvEd8NUtWWmF0iACWdVnj8U76wS5jfFv1xvLVQRXwP7EAk/dwxgLuJYXFSQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}
