<?php

$botToken = "6928061946:AAG_W3COAlDsCCEIfOB4p2RHw6C1k2_DqNg";

$website = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents('php://input');
//echo $update;
$update = json_decode($update, TRUE);
//global $website;
$e = print_r($update);
$update["message"]["chat"]["title"]; 
$newusername     = $update["message"]["new_chat_member"]["username"];
$newgId          = $update["message"]["new_chat_member"]["id"];
$newfirstname    = $update["message"]["new_chat_member"]["first_name"];
$new_chat_member = $update["message"]["new_chat_member"];
$message         = $update["message"]["text"];
$message_id      = $update["message"]["message_id"];
$chatId          = $update["message"]["chat"]["id"];
$username2       = $update["message"]["from"]["username"];
$firstname       = $update["message"]["from"]["first_name"];
$cdata2          = $update["callback_query"]["data"];
$cchatid2        = $update["callback_query"]["message"]["chat"]["id"]; 
$username2       = $update["callback_query"]["from"]["username"];
$firstname2      = $update["callback_query"]["from"]["first_name"];
$userId2         = $update["callback_query"]["from"]["id"];
$cmessage_id2    = $update["callback_query"]["message"]["message_id"]; 
$username3       = ('@'.$username);
// $username3       = '@'.$username2;
 $info            = json_encode($update, JSON_PRETTY_PRINT); 
$emojid = '❌';
$emojil = '✅';
$owner = '<code>⏤͟͟͞͞•𝄟⃝Yadav⏤͟͟͞͞•</code>';
$botu = "𝗕𝗼𝘁 𝗨𝗽𝗱𝗮𝘁𝗲𝘀 ↯ @venkypanda82";
$bota = "<b>|×| 𝗗𝗲𝘃 ↯ @venkypanda82</b>";$eror = "<b>Error ❌</b>";

$dd = "𝗗𝗲𝗰𝗹𝗶𝗻𝗲𝗱 ❌";
$live = "𝗔𝗽𝗽𝗿𝗼𝘃𝗲𝗱 ✅";


$cofuid = '1212';
$cofuid2 = '1212';
$cofuid3 = '1212';
#FIN DE LA CAPTURA

$update = json_decode(file_get_contents("php://input"));

$chat_id = $update->message->chat->id;

$userId = $update->message->from->id;

$userIdd = $update->message->reply_to_message->from->id;

$firstnamee = $update->message->reply_to_message->from->first_name;

$firstname = $update->message->from->first_name;

$lastname = $update->message->from->last_name;

$username = $update->message->from->username;

$chattype = $update->message->chat->type;

$replytomessageis = $update->message->reply_to_message->text;

$replytomessagei = $update->message->reply_to_message->from->id;

$replytomessageiss = $update->message->reply_to_message;

$data = $update->callback_query->data;

$callbackfname = $update->callback_query->from->first_name;

$callbacklname = $update->callback_query->from->last_name;

$callbackusername = $update->callback_query->from->username;

$callbackchatid = $update->callback_query->message->chat->id;

$callbackuserid = $update->callback_query->message->reply_to_message->from->id;

$callbackmessageid = $update->callback_query->message->message_id;

$callbackfrom = $update->callback_query->from->id;

$callbackmessage = $update->callback_query->message->text;

$callbackid = $update->callback_query->id;

$text = $update->message->text;
$owner = '<code>⏤͟͟͞͞•𝄟⃝Yadav⏤͟͟͞͞•</code>';



/////Cmd Back2 \\\\

if ($cdata2 == "back2") {
    $gatesText = "𝗪𝗲𝗹𝗰𝗼𝗺𝗲 𝗧𝗼 🆃🅴🅲🅷🅸🅽🅲🅾🅶🅽🅸🆃🅾. 乃ㄖㄒ";


    $gatesKeyboard = json_encode([
    'inline_keyboard' => [
        [
            ['text' => '𝗚𝗮𝘁𝗲𝘄𝗮𝘆', 'callback_data' => 'gates'],
            ['text' => '𝗧𝗼𝗼𝗹𝘀', 'callback_data' => 'herr'],
        ]
    ]
]);
  
  
    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}

/////End Code\\\\

//// Buy \\\

if ($cdata2 == "buy") {
    $gatesText = "
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍
𝗡𝗼 𝗻𝗲𝗲𝗱 𝘁𝗼 𝗯𝘂𝘆 ,𝗶𝘁𝘀 𝗳𝗿𝗲𝗲 𝗳𝗼𝗿 𝗲𝘃𝗲𝗿𝘆 𝗼𝗻𝗲
𝗝𝘂𝘀𝘁  𝗦𝗲𝗻𝗱 𝗺𝗲𝘀𝘀𝗮𝗴𝗲 <code>CODE</code> @PersonlagreeBot 𝗧𝗵𝗶𝘀 𝗕𝗼𝘁
━━━━━━━━━━━━━━━━━━
• 𝗕𝗲𝗻𝗲𝗳𝗶𝘁𝘀 •
× 𝗔𝗹𝗹 𝗚𝗮𝘁𝗲𝘀 𝗔𝗰𝗰𝗲𝘀𝘀 ✅
× 𝗡𝗼 𝗔𝗻𝘁𝗶 𝗦𝗽𝗮𝗺 ✅
× 𝟮𝟰/𝟳 𝗖𝘂𝘀𝘁𝗼𝗺𝗲𝗿 𝗖𝗮𝗿𝗲 ✅
    
━━━━━━━━━━━━━━━━━━
";
                                 $gatesKeyboard = json_encode([
                                 'inline_keyboard' => [
                                     [                     ['text' => '• 𝙑𝙀𝙍𝙄𝙁𝙔 𝙋𝘼𝙔𝙈𝙀𝙉𝙏 •', 'url' => 'https://t.me/pandacc82'],   ], ]
  ]);


    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}

//////// End\\\\\\\


//=======inline keyboard========//
$keyboard = json_encode([
    'inline_keyboard' => [
        [
            ['text' => "↯ 𝗕𝘂𝘆 𝗔𝗰𝗰𝗲𝘀𝘀", 'url' => "https://t.me/PersonlagreeBot"],
        ],
    ]
]);

//=======Inline Keyboard for "BACK" button========//

if ($cdata2 == "back") {
    // Go back to the welcome page
    $gatesText = "<b>𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ 
 𝗖𝗵𝗮𝗿𝗴𝗲 𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀 : 𝟭𝟮
 𝗔𝘂𝘁𝗵 𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀 : 𝟲
 𝗧𝗼𝘁𝗮𝗹 : 𝟭𝟴
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍

$bota</b>";

    $gatesKeyboard = json_encode([
    'inline_keyboard' => [
        [['text' => "𝗔𝘂𝘁𝗵 𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀", 'callback_data' => 'premium'], ['text' => "𝗖𝗵𝗮𝗿𝗴𝗲 𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀", 'callback_data' => 'free']],
        [['text' => '𝗚𝗼 𝗕𝗮𝗰𝗸', 'callback_data' => 'back2']]
    ]
]);

    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);


    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}


//============GATES START===========//

if ($cdata2 == "gates") {
    $gatesText = "<b>𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ 
 𝗖𝗵𝗮𝗿𝗴𝗲 𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀 : 𝟭𝟮
 𝗔𝘂𝘁𝗵 𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀 : 𝟲
 𝗧𝗼𝘁𝗮𝗹 : 𝟭𝟴
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍

$bota</b>";


     $gatesKeyboard = json_encode([
    'inline_keyboard' => [
        [['text' => "𝗔𝘂𝘁𝗵 𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀", 'callback_data' => 'premium'], ['text' => "𝗖𝗵𝗮𝗿𝗴𝗲 𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀", 'callback_data' => 'free']],
        [['text' => '𝗚𝗼 𝗕𝗮𝗰𝗸', 'callback_data' => 'back2']]
    ]
]);

  
    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $gatesText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($gatesKeyboard));
}





//=========Back===========//

$premiumButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝗕𝗮𝗰𝗸 𝗣𝗮𝗴𝗲 𝟬", 'callback_data' => 'mm'], ['text' => "𝟮 𝗡𝗲𝘅𝘁 ⥭", 'callback_data' => 'freec']],
                                 [['text' => '𝗛𝗼𝗺𝗲', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "free") {
    $freeText = "𝗣𝗮𝗴𝗲 𝗡𝗼. ↯ 𝟏
   
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝙋𝘼𝙔𝙋𝘼𝙇 0.01$</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/pp cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗦𝘁𝗿𝗶𝗽𝗲 𝟭𝟱$</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/str cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆- 𝗦𝘁𝗿𝗶𝗽𝗲 𝗖𝗵𝗮𝗿𝗴𝗲 𝟭𝟮€</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/sec cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumButton));
}

//////=====Second Page Of Charge=======\\\\\

$premiumcButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝗕𝗮𝗰𝗸 𝗣𝗮𝗴𝗲 𝟭", 'callback_data' => 'free'], ['text' => "𝟯 𝗡𝗲𝘅𝘁 ⥭", 'callback_data' => 'freea']],
                                 [['text' => '𝗛𝗼𝗺𝗲', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "freec") {
    $freeText = "𝗣𝗮𝗴𝗲 𝗡𝗼. ↯ 𝟮
   
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝙎𝙏𝙍𝙄𝙋𝙀 2$</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/sta cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅ </code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗣𝗮𝘆𝗽𝗮𝗹 𝗠𝗮𝘀𝘀 1$</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/mpp cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 </code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗦𝗵𝗼𝗽𝗳𝗶𝘆 𝗠𝗮𝘀𝘀</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/mss cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumcButton));
}

/////=====END====\\\\


//////===== 3 PAGE OF CHARGE GATES ===\\\

$premiumaButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝗕𝗮𝗰𝗸 𝗣𝗮𝗴𝗲 𝟮", 'callback_data' => 'freec'], ['text' => "𝟰 𝗡𝗲𝘅𝘁  ⥭", 'callback_data' => 'freeg']],
                                 [['text' => '𝗛𝗼𝗺𝗲', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "freea") {
    $freeText = "𝗣𝗮𝗴𝗲 𝗡𝗼. ↯ 𝟯

╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝙎𝙏𝙍𝙄𝙋𝙀 49$</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/dep cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗣𝗮𝘆𝗽𝗮𝗹 𝟮$ 𝗖𝗵𝗮𝗿𝗴𝗲</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/pu cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗖𝗖𝗡 𝗖𝗵𝗮𝗿𝗴𝗲 𝟬.𝟳$</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/ccn cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumaButton));
}


///////======END======\\\\\\




////// PAGE 4 OF CHARGED GATE \\\\\

$premiumgButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝗕𝗮𝗰𝗸 𝗣𝗮𝗴𝗲 𝟑", 'callback_data' => 'freea'], ['text' => "𝗘𝗻𝗱 𝗽𝗮𝗴𝗲 ⥭", 'callback_data' => 'gates']],
                                 [['text' => '𝗛𝗼𝗺𝗲', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "freeg") {
    $freeText = "𝗣𝗮𝗴𝗲 𝗡𝗼. ↯ 𝟒
    
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗕𝗿𝗮𝗶𝗻𝘁𝗿𝗲𝗲 𝗔𝘂𝘁𝗵</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/chk cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗙𝗙 🔴</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗕𝗿𝗮𝗶𝗻𝘁𝗿𝗲𝗲 𝗔𝘂𝘁𝗵 𝗩𝟭</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/bvv cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗕𝗿𝗮𝗶𝗻𝘁𝗿𝗲𝗲 𝗔𝘂𝘁𝗵 [𝗩𝟮]</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/bva cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $freeText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumgButton));
}



////// END CODE \\\\\

////// Charge Gate Page 5 /\\\\\
// $premiumgButton = json_encode([
// 'inline_keyboard' => [
//                                  [['text' => "⥫ 𝘽𝘼𝘾𝙆 𝙋𝘼𝙂𝙀 𝟒", 'callback_data' => 'freeg'], ['text' => "𝙀𝙉𝘿 𝙋𝘼𝙂𝙀 ⥭", 'callback_data' => 'gates']],
//                                  [['text' => '𝙃𝙊𝙈𝙀', 'callback_data' => 'gates']]
//                              ]

// ]);

// if ($cdata2 == "freeh") {
//     $freeText = "𝙋𝘼𝙂𝙀 𝙉𝙊. ↯ 5

// ╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
// <b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙋𝘼𝙔𝙋𝘼𝙇 2$</b>
// <b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/lul cc|mm|yy|cvv</code></b>
// <b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
// <b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>ON ✅</code></b>    
// ╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
// <b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝙎𝙏𝙍𝙄𝙋𝙀 2$</b>
// <b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/sor cc|mm|yy|cvv</code></b>
// <b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
// <b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>ON ✅</code></b>
// ╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
// <b>× 𝙂𝘼𝙏𝙀𝙒𝘼𝙔 - 𝘼𝙐𝙏𝙃𝙊𝙍𝙄𝙕𝙀 𝙉𝙀𝙏 200$</b>
// <b>• 𝙐𝙎𝘼𝙂𝙀 - <code>/anh cc|mm|yy|cvv</code></b>
// <b>× 𝙍𝘼𝙉𝙆 - <code>SPECIAL GRADE</code></b>
// <b>• 𝙎𝙏𝘼𝙏𝙐𝙎 - <code>𝙊𝙉 ✅</code></b>
// ╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 


// $bota";

//     // Replace this with your video URL
//     $videoUrl = "https://t.me/pandacc82/3";

//     $inputMediaVideo = json_encode([
//         'type' => 'video',
//         'media' => $videoUrl,
//         'caption' => $freeText,
//         'parse_mode' => 'HTML'
//     ]);

//     file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($premiumgButton));
// }

//// End Code \\\\

//========Premium and free=======//

$freeButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝗕𝗮𝗰𝗸 𝗣𝗮𝗴𝗲 𝟎", 'callback_data' => 'premium'], ['text' => "𝟐 𝗡𝗲𝘅𝘁 ⥭", 'callback_data' => 'premiump']],
                                 [['text' => '𝗛𝗼𝗺𝗲', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "premium") {
   $premiumText = "𝗣𝗮𝗴𝗲 𝗡𝗼.↯ 𝟏
   
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗦𝘁𝗿𝗶𝗽𝗲 𝗔𝘂𝘁𝗵 [𝘃𝟭]</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/au cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗔𝗱𝘆𝗲𝗻𝗔𝘂𝘁𝗵</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/ady cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗦𝘁𝗿𝗶𝗽𝗲 𝗖𝗵𝗮𝗿𝗴𝗲 𝟭$</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/st cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗙𝗙 🔴</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 

$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video', 
        'media' => $videoUrl,
        'caption' => $premiumText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($freeButton));
}




//// Auth Page 2 \\\\

$freeButton = json_encode([
'inline_keyboard' => [
                                 [['text' => "⥫ 𝗕𝗮𝗰𝗸 𝗣𝗮𝗴𝗲 𝟐", 'callback_data' => 'premium'], ['text' => "𝗘𝗻𝗱 𝗽𝗮𝗴𝗲⥭", 'callback_data' => 'gates']],
                                 [['text' => '𝗛𝗼𝗺𝗲', 'callback_data' => 'gates']]
                             ]

]);

if ($cdata2 == "premiump") {
   $premiumText = "𝗣𝗮𝗴𝗲 𝗡𝗼. ↯ 𝟐
   
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗦𝘁𝗿𝗶𝗽𝗲 𝗔𝘂𝘁𝗵</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/ss cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗦𝗾𝘂𝗮𝗿𝗲 𝗔𝘂𝘁𝗵</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/sq cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
<b>× 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 - 𝗦𝗵𝗼𝗽𝗶𝗳𝘆+𝗦𝗽𝗿𝗲𝗲𝗱𝗹𝘆 𝟲$</b>
<b>• 𝗨𝘀𝗮𝗴𝗲 - <code>/sd cc|mm|yy|cvv</code></b>
<b>× 𝗥𝗮𝗻𝗸 - <code>SPECIAL GRADE</code></b>
<b>• 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code></b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 


$bota";

    // Replace this with your video URL
    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video', 
        'media' => $videoUrl,
        'caption' => $premiumText,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($freeButton));
}



//////=====End====\\\

//=======Premium and free end=====//




//==============TOOLS===============//
$toolKeyboard = json_encode([
    'inline_keyboard' => [
        [['text' => "𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀", 'callback_data' => 'gates']], 
        [['text' => "𝗕𝗮𝗰𝗸", 'callback_data' => 'back2']]
    ]
]);

   

if ($cdata2 == "herr") {

  $toolcmds = "<b> 𝗧𝗼𝗼𝗹𝘀 </b>
<b>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝗨𝘀𝗲𝗿 𝗜𝗻𝗳𝗼 - <code>/info</code>
• 𝗨𝘀𝗮𝗴𝗲 - <code>/info</code>
× 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝗜𝗣 𝗟𝗼𝗼𝗸𝘂𝗽 - <code>/ip</code>
• 𝗨𝘀𝗮𝗴𝗲 - <code>/ip 1.1.1.1</code>
× 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝗕𝗶𝗻 𝗟𝗼𝗼𝗸𝘂𝗽 - <code>/bin</code>
• 𝗨𝘀𝗮𝗴𝗲 - <code>/bin 435546</code>
× 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝗖𝗖 𝗚𝗲𝗻𝗲𝗿𝗮𝘁𝗼𝗿- <code>/gen</code>
• 𝗨𝘀𝗮𝗴𝗲 - <code>/gen 439786</code>
× 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝗣𝗿𝗼𝘅𝘆 𝗚𝗲𝗻𝗲𝗿𝗮𝘁𝗼𝗿- https-socks4-socks5
• 𝗨𝘀𝗮𝗴𝗲- <code>/http</code>, <code>/socks4</code>, <code>/socks5</code>
× 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code>  
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝗖𝗿𝗲𝗱𝗶𝘁𝘀 𝗖𝗵𝗲𝗰𝗸- <code>/credits</code>
• 𝗨𝘀𝗮𝗴𝗲 - <code>/credits check</code>
× 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝗥𝗮𝗻𝗱𝗼𝗺 𝗔𝗱𝗱𝗿𝗲𝘀𝘀 - <code>/fake</code>
• 𝗨𝘀𝗮𝗴𝗲 - <code>/fake us</code>
× 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ 
× 𝗦𝗸 𝗞𝗲𝘆 𝗖𝗵𝗲𝗰𝗸𝗲𝗿 - <code>/sk</code>
• 𝗨𝘀𝗮𝗴𝗲 - <code>/sk sk_live</code>
× 𝗦𝘁𝗮𝘁𝘂𝘀 - <code>𝗢𝗡 ✅</code>
╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍╍ ╍ </b>

<b>|×| 𝗗𝗲𝘃 </b>- $owner";

    // Change this to your video URL
    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $toolcmds,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($toolKeyboard));
}



//=============TOOLS END============//

//=============PRICE===============//




//=============PRICE END============//







//========finalize end=========//
$channel = json_encode([
    'inline_keyboard' => [
        [['text' => "𝗢𝘄𝗻𝗲𝗿", 'url' => "t.me/"], ['text' => "𝗖𝗵𝗮𝗻𝗻𝗲𝗹", 'url' => ""]],
        [['text' => "𝗕𝗮𝗰𝗸", 'callback_data' => 'back2']]
    ]
]);

if ($cdata2 == "channel") {
    $channelText = "𝗝𝗼𝗶𝗻 𝗠𝘆 𝗖𝗵𝗮𝗻𝗻𝗲𝗹𝘀 𝗙𝗼𝗿 𝗕𝗼𝘁 𝗨𝗽𝗱𝗮𝘁𝗲𝘀.";

    // Change this to your video URL
    $videoUrl = "https://t.me/pandacc82/3";

    $inputMediaVideo = json_encode([
        'type' => 'video',
        'media' => $videoUrl,
        'caption' => $channelText,
        'parse_mode' => 'HTML'
    ]);

file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($inputMediaVideo) . "&reply_markup=" . urlencode($channel));
}



//==========back and close========//
if ($cdata2 == "back2") {
    $backtxt = ("𝗪𝗲𝗹𝗰𝗼𝗺𝗲 𝗰𝗹𝗶𝗰𝗸 /price 𝘁𝗼 𝗯𝘂𝘆 𝘁𝗵𝗲 𝗣𝗿𝗲𝗺𝗶𝘂𝗺 𝗽𝗹𝗮𝗻 ✅");

    // Change this to your video url
    $backVideoUrl = "https://t.me/pandacc82/3"; 

    $keyboard2 = json_encode([
    'inline_keyboard' => [
        [
            ['text' => '𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀', 'callback_data' => 'gates'],
            ['text' => '𝗧𝗼𝗼𝗹𝘀', 'callback_data' => 'herr'],
        ],
        [
            ['text' => 'Bot Updates', 'callback_data' => 'channel'],
        ],
    ]
]);


    $mediaArray = json_encode([
        'type' => 'video',
        'media' => $backVideoUrl,
        'caption' => $backtxt,
        'parse_mode' => 'HTML'
    ]);

    file_get_contents("https://api.telegram.org/bot$botToken/editMessageMedia?chat_id=$cchatid2&message_id=$cmessage_id2&media=" . urlencode($mediaArray) . "&reply_markup=$keyboard2");
}


//========back and close end=======//

//=========functions started=========//

///=====Function Sendphoto======//
function sendPhotox($chatId, $photo, $caption, $keyboard = null) {
    global $website;
    $url = $website."/sendPhoto?chat_id=".$chatId."&photo=".$photo."&caption=".$caption."&parse_mode=HTML";

    if ($keyboard != null) {
        $url .= "&reply_markup=".$keyboard;
    }

    return file_get_contents($url);
}

///======function sendVideo========///
function sendVideox($chatId, $videoURL, $caption, $keyboard) {
    global $botToken;
    $url = "https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoURL&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard";
    file_get_contents($url);
}



function reply_tox($chatId,$message_id,$keyboard,$message) {
    global $website;
    $url = $website."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML&reply_markup=".$keyboard."";
    return file_get_contents($url);
}

function deleteM($chatId,$message_id){
    global $website;
    $url = $website."/deleteMessage?chat_id=".$chatId."&message_id=".$message_id."";
    file_get_contents($url);
}


function edit_message($chatId,$message,$message_id) {
  sendChatAction($chatId,"type");
   $url = $GLOBALS['website']."/editMessageText?chat_id=".$chatId."&text=".$message."&message_id=".$message_id."&parse_mode=HTML&disable_web_page_preview=True";
  file_get_contents($url);
}


function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

function gibarray($message){
    return explode("\n", $message);
}

function sendMessage ($chatId, $message, $messageId){
  sendChatAction($chatId,"type");
$url = $GLOBALS['website']."/sendMessage?chat_id=".$chatId."&text=".$message."&parse_mode=html&disable_web_page_preview=True";
file_get_contents($url);

};
function delMessage ($chatId, $messageId){
$url = $GLOBALS['website']."/deleteMessage?chat_id=".$chatId."&message_id=".$messageId."";
file_get_contents($url);
};

function sendChatAction($chatId, $action)
{

$data = array("type" => "typing", "photo" => "upload_photo", "rcvideo" => "record_video", "video" => "upload_video", "rcvoice" => "record_voice", "voice" => "upload_voice", "doc" => "upload_document", "location" => "find_location", "rcvideonote" => "record_video_note", "uvideonote" => "upload_video_note");
$actiontype = $data["$action"];
$url = $GLOBALS['website']."/sendChatAction?chat_id=".$chatId."&action=".$actiontype."&parse_mode=HTML";
file_get_contents($url);

}

function answerCallbackQuery($data) {
    global $botToken; // Use the global bot token

    $url = "https://api.telegram.org/bot$botToken/answerCallbackQuery";

    $options = [
        'http' => [
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

}

function bot($method, $datas = [])
{
    global $botToken;
    $url = "https://api.telegram.org/bot" . $botToken . "/" . $method;

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($datas),
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    ]);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        // Manejar el error de cURL
        return false;
    } else {
        // Decodificar la respuesta
        $result = json_decode($response, true);

        if ($result['ok']) {
            // La solicitud fue exitosa
            return $result['result'];
        } else {
            // Manejar el error de la API de Telegram
            return false;
        }
    }
}

//=========Functions end===========//


foreach (glob("tools/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("function/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("gates/*.php") as $filename)
{
    include $filename;
} 

foreach (glob("admin/*.php") as $filename)
{
    include $filename;
} 



//==========foreach end============//



?>

