<?php

$owners = ["1142868987", "7129662536", "1846893947", ""];  // Add owner ids here

function getUsersCount($filename) {
    if(file_exists($filename)) {
        $lines = file($filename);
        return count($lines);
    } else {
        return 0; // Return 0 if the file doesn't exist
    }
}

$update = json_decode(file_get_contents('php://input'), true);

if (isset($update['message']['text'])) {
    $message = $update['message']['text'];
    $chat_id = $update['message']['chat']['id'];

    if ($message === '/users') {
        if (in_array($chat_id, $owners)) {
            $freeUserCount = getUsersCount('Database/free.txt');
            $paidUserCount = getUsersCount('Database/paid.txt');
            $banUserCount = getUsersCount('Database/banned.txt');
            $response = "<b>[×] 𝗧𝗼𝘁𝗮𝗹 𝘂𝘀𝗲𝗿𝘀: {$freeUserCount}%0A[×] Paid users: {$paidUserCount}%0A[×] Banned users: {$banUserCount}%0A%0A[×] Bot by: @venkypanda82 </b>";
        } else {
            $response = "<b>𝗛𝗮𝗵𝗮! 𝗗𝗼𝗻'𝘁 𝗯𝗲 𝗢𝘃𝗲𝗿 𝗦𝗺𝗮𝗿𝘁 .
                            𝗬𝗼𝘂 𝗮𝗿𝗲 𝗻𝗼𝘁 𝗮𝗻 𝗮𝗱𝗺𝗶𝗻❌</b>";
        }
        sendMessage($chat_id, $response, $message_id);
    }
}
?>
