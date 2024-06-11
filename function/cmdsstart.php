
application/x-httpd-php cmdsstart.php ( PHP script, UTF-8 Unicode text )

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('log_errors', TRUE);
ini_set('error_log', 'errors.log');


$users = file_get_contents('Database/free.txt');
$freeusers = explode("\n", $users);

$videoURLStart = "https://t.me/pandacc82/3";

if (preg_match('/^(\/start|\.start|!start)/', $text)) {
    if (in_array($userId, $freeusers)) {
        $caption = "𝕲𝖗𝖊𝖊𝖙𝖎𝖓𝖌𝖘 <code>@$username</code>\n\n
                    
                    𝗜'𝗺 𝗮 𝗺𝘂𝗹𝘁𝗶-𝘁𝗮𝗹𝗲𝗻𝘁𝗲𝗱 𝗯𝗼𝘁 𝗽𝗮𝗰𝗸𝗲𝗱 𝘄𝗶𝘁𝗵 𝗺𝗮𝗻𝘆 𝗴𝗮𝘁𝗲𝘄𝗮𝘆𝘀, 𝘁𝗼𝗼𝗹𝘀, 𝗮𝗻𝗱 𝗰𝗼𝗻𝘃𝗲𝗻𝗶𝗲𝗻𝘁 𝗰𝗼𝗺𝗺𝗮𝗻𝗱𝘀.\n\n
                    𝗧𝗼 𝗯𝗲𝗴𝗶𝗻, 𝗰𝗹𝗶𝗰𝗸 𝘁𝗵𝗲 𝗥𝗲𝗴𝗶𝘀𝘁𝗲𝗿 𝗯𝘂𝘁𝘁𝗼𝗻. 𝗙𝗼𝗿 𝗺𝗼𝗿𝗲 𝗶𝗻𝗳𝗼𝗿𝗺𝗮𝘁𝗶𝗼𝗻 𝗮𝗯𝗼𝘂𝘁 𝗺𝘆 𝗳𝗲𝗮𝘁𝘂𝗿𝗲𝘀, 𝗰𝗹𝗶𝗰𝗸 𝘁𝗵𝗲 𝗖𝗼𝗺𝗺𝗮𝗻𝗱𝘀 /cmds.\n
                    
                    ";
        sendVideox($chatId, $videoURLStart, $caption, $keyboard);
    } else {
        reply_tox($chatId,$message_id,$keyboard,"\n
        𝗛𝗲𝘆: $username\n\n
        𝗬𝗼𝘂 𝗔𝗿𝗲 𝗡𝗼𝘁 𝗥𝗲𝗴𝗶𝘀𝘁𝗲𝗿𝗲𝗱⚠️,\n
        
     𝗧𝗼 𝗿𝗲𝗴𝗶𝘀𝘁𝗲𝗿, 𝘀𝗶𝗺𝗽𝗹𝘆 𝘂𝘀𝗲 𝘁𝗵𝗲 𝗰𝗼𝗺𝗺𝗮𝗻𝗱 >> /register. 𝗘𝗮𝘀𝘆 𝗮𝘀 𝘁𝗵𝗮𝘁!");
    }
}
//=========START END========//
if (preg_match('/^(\/cmds|\.cmds|!cmds)/', $text)) {

    $videoUrl = "https://t.me/pandacc82/3"; 

    $keyboard2 = json_encode([
        'inline_keyboard' => [
            [
                             ['text' => '𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀', 'callback_data' => 'gates'],
                                 ['text' => '𝗧𝗼𝗼𝗹𝘀 ', 'callback_data' => 'herr'],
                                 ],
                                 [
                                 ['text' => '@venkypanda82', 'callback_data' => 'channel'],
                             ],
        ]
    ]);

    $caption = "𝗪𝗲𝗹𝗰𝗼𝗺𝗲 @$username\n
    𝗧𝗲𝗰𝗵𝗶𝗻𝗰𝗼𝗴𝗻𝗶𝘁𝗼 𝗶𝘀 𝘁𝗵𝗲 𝗻𝗲𝘅𝘂𝘀 𝗼𝗳 𝗖𝗼𝗺𝗺𝗮𝗻𝗱𝘀. 𝗪𝗲 𝗼𝗳𝗳𝗲𝗿 𝗔𝘂𝘁𝗵 𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀, 𝗖𝗵𝗮𝗿𝗴𝗲 𝗚𝗮𝘁𝗲𝘄𝗮𝘆𝘀 𝗮𝗻𝗱 𝗧𝗼𝗼𝗹𝘀.
    𝐁𝐮𝐲 𝐁𝐨𝐭 𝐏𝐫𝐞𝐦𝐢𝐮𝐦 𝐏𝐥𝐚𝐧𝐬
    𝐂𝐌𝐃: /price

";
    file_get_contents("https://api.telegram.org/bot$botToken/deleteMessage?chat_id=$chatId&message_id=$messageId");

    // Using sendVideo endpoint instead of sendPhoto
    file_get_contents("https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoUrl&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard2");
}

// Price \\\

if (preg_match('/^(\/price|\.price|!price)/', $text))

{

    $videoUrl = "https://t.me/pandacc82/3"; 

    $keyboard2 = json_encode([
        'inline_keyboard' => [
            [
                      
                                 ['text' => '𝗩𝗲𝗿𝗶𝗳𝘆 𝗣𝗮𝘆𝗺𝗲𝗻𝘁', 'url' => 'https://t.me/PersonlagreeBot'],   ], ]
    ]);

 $caption=" 𝗣𝗿𝗶𝗰𝗶𝗻𝗴 𝗧𝗲𝗰𝗵𝗶𝗻𝗰𝗼𝗴𝗻𝗶𝘁𝗼 𝗕𝗼𝘁 𝗖𝗵𝗲𝗰𝗸𝗲𝗿
━━━━━━━━━━━━━━━━━━
𝗡𝗼 𝗻𝗲𝗲𝗱 𝘁𝗼 𝗯𝘂𝘆 𝗶𝘁𝘀 𝗳𝗿𝗲𝗲 𝗷𝘂𝘀𝘁 𝗰𝗼𝗻𝘁𝗮𝗰𝘁 𝘁𝗵𝗲 𝗯𝗼𝘁
━━━━━━━━━━━━━━━━━━
• 𝗕𝗘𝗡𝗘𝗙𝗜𝗧𝗦 •
× 𝗔𝗟𝗟 𝗚𝗔𝗧𝗘𝗦 𝗔𝗖𝗖𝗘𝗦𝗦 ✅
× 𝗡𝗢 𝗔𝗡𝗧𝗜 𝗦𝗣𝗔𝗠 ✅
× 𝟮𝟰/𝟳 𝗖𝗨𝗦𝗧𝗢𝗠𝗘𝗥 𝗦𝗨𝗣𝗣𝗢𝗥𝗧✅

━━━━━━━━━━━━━━━━━━
";

file_get_contents("https://api.telegram.org/bot$botToken/deleteMessage?chat_id=$chatId&message_id=$messageId");

    // Using sendVideo endpoint instead of sendPhoto
    file_get_contents("https://api.telegram.org/bot$botToken/sendVideo?chat_id=$chatId&video=$videoUrl&caption=" . urlencode($caption) . "&parse_mode=HTML&reply_markup=$keyboard2");
}
