<?php
if ((strpos($message, "/adm") === 0)||(strpos($message, "!adm") === 0)||(strpos($message, ".adm") === 0))
{
  $owners = file_get_contents('Database/owner.txt');
  $admins = explode("\n", $owners);
  if (!in_array($userId, $admins)) {
      sendMessage($chatId,"𝗛𝗮𝗵𝗮! 𝗗𝗼𝗻'𝘁 𝗯𝗲 𝗢𝘃𝗲𝗿 𝗦𝗺𝗮𝗿𝘁.\n
                           𝗬𝗼𝘂 𝗮𝗿𝗲 𝗻𝗼𝘁 𝗮𝗻 𝗮𝗱𝗺𝗶𝗻❌",$messageId);
  } else
  {
  sendMessage($chatId,urlencode(
    "<b>
𝗔𝗱𝗺𝗶𝗻 𝗰𝗼𝗺𝗺𝗮𝗻𝗱𝘀 𝗵𝗲𝗿𝗲

𝗖𝗼𝗱𝗲 𝗴𝗲𝗻𝗲𝗿𝗮𝘁𝗲: /code 𝗱𝗮𝘆-𝗮𝗺𝗼𝘂𝗻𝘁
𝗨𝘀𝗮𝗴𝗲: <𝗰𝗼𝗱𝗲>/code 1-1</𝗰𝗼𝗱𝗲>

𝗗𝗲𝗹𝗲𝘁𝗲 𝗲𝘅𝗽𝗶𝗿𝗲𝗱: /remexp
𝗨𝘀𝗮𝗴𝗲: <𝗰𝗼𝗱𝗲>/remexp</𝗰𝗼𝗱𝗲>

𝗖𝗵𝗲𝗰𝗸 𝗨𝘀𝗲𝗿𝘀: /users
𝗨𝘀𝗮𝗴𝗲: <𝗰𝗼𝗱𝗲>/users</𝗰𝗼𝗱𝗲>

</b>"),$messageId);
  }
}

?>
