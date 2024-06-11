<?php


if (strpos($message, "/remexp") === 0) {
    // Read the owner's chat ID from the file
    $ownerId = trim(file_get_contents('Database/owner.txt'));

    // Check if the user's chat ID matches the owner's chat ID
    if ($chatId != $ownerId) {
        sendMessage($chatId, "𝗛𝗮𝗵𝗮! 𝗗𝗼𝗻'𝘁 𝗯𝗲 𝗢𝘃𝗲𝗿 𝗦𝗺𝗮𝗿𝘁.
                              𝗬𝗼𝘂 𝗮𝗿𝗲 𝗻𝗼𝘁 𝗮𝗻 𝗮𝗱𝗺𝗶𝗻  ❌", $randomArgument);
    } else {
        // The rest of your code goes here
        $lines = file('Database/paid.txt', FILE_IGNORE_NEW_LINES);
        $currentDate = date('Y-m-d');
        foreach ($lines as $index => $line) {
            list($userIdFromFile, $expiryDate) = explode(" ", $line);
            if ($expiryDate < $currentDate) {
                unset($lines[$index]); // remove the expired entry
            }
        }
        // save the remaining (non-expired) entries back to the file
        $result = file_put_contents('Database/paid.txt', implode("\n", $lines));
        if ($result !== false) {
            sendMessage($chatId, "𝗔𝗹𝗹 𝘁𝗵𝗲 𝗲𝘅𝗽𝗶𝗿𝗲𝗱 𝘂𝘀𝗲𝗿𝘀 𝗮𝗿𝗲 𝗿𝗲𝗺𝗼𝘃𝗲𝗱 𝘀𝘂𝗰𝗰𝗲𝘀𝘀𝗳𝘂𝗹𝗹𝘆 ✅", $randomArgument);
        } else {
            sendMessage($chatId, "𝗔𝗻 𝗲𝗿𝗿𝗼𝗿 𝗼𝗰𝗰𝘂𝗿𝗿𝗲𝗱 ❌", $randomArgument);
        }
    }
}
