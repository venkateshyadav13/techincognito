<?php
if (preg_match('/^(\/ip|\.ip|!ip)/', $text)) {


    $iplist = preg_replace("/[^0-9.]/", "",$message);
    if(empty($iplist)){
      sendMessage($chatId, '​𝗦𝗲𝗻𝗱 𝗜𝗣 𝗮𝗱𝗱𝗿𝗲𝘀𝘀',$mes_id);
      exit();
    }
    $array = explode("\n", $iplist);
   

  $gip = file_get_contents('https://scamalytics.com/ip/'.$array[0].'');
      

  
  $msg = trim(strip_tags(getStr($gip,'   <div style="border-bottom: 1px solid #CCCCCC"><b>IP Fraud Risk API</b></div>
        <pre style="margin: 0; text-transform: lowercase;">','</pre>
        <div style="border-top: 1px solid #CCCCCC"><a href="/ip/api/pricing">Click here</a> for details of our <a href="/ip/api/pricing">free usage tier</a>, <a href="/ip/api/pricing">free trial</a>, and <a href="/ip/api/pricing">pricing information</a>.</div>')));

$score = trim(strip_tags(getStr($gip,'"ip":"'.$array[0].'",
  "score":"','",')));
  
  $risk = $country = trim(strip_tags(getStr($gip,'"ip":"'.$array[0].'",
  "score":"'.$score.'",
  "risk":"','"
}')));
  
$country = trim(strip_tags(getStr($gip,'   </tr>
        <tr>
            <th>Country Name</th>','   </tr>
        <tr>')));
  $isp = trim(strip_tags(getStr($gip,'   </tr>
        <tr>
            <th>ISP Name</th>','   </tr>
        <tr>')));

$message = "<b>
[火] IP FraudRisk 🌩
━━━━━━━━━━━━━━
•├IP : <code>$array[0]</code>
•├𝗦𝗰𝗼𝗿𝗲 : <code>$score</code>
•├𝗥𝗶𝘀𝗸 : <code>$risk</code>
•├ISP : <code>$isp</code>
•├𝗖𝗼𝘂𝗻𝘁𝗿𝘆 : <code>$country</code>

•├Req: @$username/<code>[$rank]</code>
━━━━━━━━━━━━━━
•├Dev: <code>@venkypanda82</code>
</b>";

$urlEncodedMessage = urlencode($message);

sendMessage($chatId, $urlEncodedMessage, $mes_id);
}
?>


