
<?php

function getUserProfilePhoto($userId) {
    global $website;
    $url = $website . "/getUserProfilePhotos?user_id=" . $userId . "&limit=1";

    $response = json_decode(file_get_contents($url), TRUE);

    if ($response === FALSE) {
        error_log("Failed to get user profile photo: " . $url);
        return null;
    }
    if ($response['ok'] && count($response['result']['photos']) > 0) {
        return $response['result']['photos'][0][0]['file_id'];
    }

    return null;
}



//============function end==========//
if (preg_match('/^(\/id|\.id|!info)/', $text)) {

    $photoId = getUserProfilePhoto($userId);

    $m = "<b>[火] 𝗨𝘀𝗲𝗿 𝗶𝗻𝗳𝗼𝗿𝗺𝗮𝘁𝗶𝗼𝗻 %0A╔═════════════════╗%0A•├User[𝗡𝗔𝗠𝗘] » @$username%0A•├User[𝗜𝗗] » <code>$userId</code>%0A•├𝗡𝗮𝗺𝗲[𝗧𝗚] » $firstname%0A•├𝗨𝘀𝗲𝗿[𝗥𝗔𝗡𝗞] >» <code>$rank</code%0A•├𝗨𝘀𝗲𝗿[𝗘𝘅𝗶𝗽𝗿𝗲] >» $expiryDate%0A╚═════════════════╝%0A•├𝗗𝗲𝘃 » <code>@venkypanda82</code></b>";

    if ($photoId) {
        sendPhotox($chatId, $photoId, $m);
    } else {
        sendMessage($chatId, $m, $message_id);
    }
}
