<?php
if (preg_match('/\/register/', $message)) {
    // Load the existing users.
    $users = file_get_contents('Database/free.txt');
    $freeusers = explode("\n", $users);

    // Check if the user has already registered.
    if (in_array($userId, $freeusers)) {
        $response = "𝗔𝗹𝗿𝗲𝗮𝗱𝘆 𝗥𝗲𝗴𝗶𝘀𝘁𝗲𝗿𝗲𝗱 😒\n
                     𝗠𝗲𝘀𝘀𝗮𝗴𝗲: 𝗬𝗼𝘂 𝗮𝗿𝗲 𝗮𝗹𝗿𝗲𝗮𝗱𝘆 𝗿𝗲𝗴𝗶𝘀𝘁𝗲𝗿𝗲𝗱 𝘄𝗶𝘁𝗵 𝗼𝘂𝗿 𝗯𝗼𝘁. 𝗡𝗼 𝗮𝗰𝘁𝗶𝗼𝗻 𝗿𝗲𝗾𝘂𝗶𝗿𝗲𝗱 𝘁𝗼 𝗿𝗲𝗴𝗶𝘀𝘁𝗲𝗿 𝗮𝗴𝗮𝗶𝗻.\n
                     𝗖𝗵𝗲𝗰𝗸 𝗼𝘂𝘁 𝗮𝗹𝗹 𝘁𝗵𝗲 𝗰𝗼𝗼𝗹 𝘁𝗵𝗶𝗻𝗴𝘀 𝗜 𝗰𝗮𝗻 𝗱𝗼 𝗯𝘆 𝘁𝗮𝗽𝗽𝗶𝗻𝗴 𝗼𝗻 𝘁𝗵𝗲 /cmds 👈";
         }
    else {
        // If not, add the user to the file.
        $file = fopen('Database/free.txt', 'a');
        fwrite($file, $userId . "\n");
        fclose($file);

        $response = "𝐑𝐞𝐠𝐢𝐬𝐭𝐫𝐚𝐭𝐢𝐨𝐧 𝐒𝐮𝐜𝐜𝐞𝐬𝐬𝐟𝐮𝐥𝐥 ✅!\n
                     ━━━━━━━━━━━━━━\n\n
                     𝗨𝗲𝘀𝗲𝗿:<code>@$username</code>\n
                     𝐔𝐬𝐞𝐫 𝐈𝐃:<code>$userId</code>\n
                     𝗥𝗮𝗻𝗸:$rank\n
                     𝗡𝗼𝘄 𝗰𝗹𝗶𝗰𝗸 /start 𝘁𝗼 𝘀𝘁𝗮𝗿𝘁 𝘂𝘀𝗶𝗻𝗴 𝘁𝗵𝗲 𝗯𝗼𝘁.";
    }

    // Send the response.
    reply_tox($chatId, $message_id, $keyboard, $response);
}
?>