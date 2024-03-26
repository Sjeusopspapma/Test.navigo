<?php


function _ip() {
    $ipaddress = '';
    if(getenv('HTTP_CLIENT_IP')){
        $ipaddress = getenv('HTTP_CLIENT_IP');
    }
    elseif(getenv('HTTP_X_FORWARDED_FOR')){
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    }
    elseif(getenv('HTTP_X_FORWARDED')){
        $ipaddress = getenv('HTTP_X_FORWARDED');
    }
    elseif(getenv('HTTP_FORWARDED_FOR')){
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    }
    elseif(getenv('HTTP_FORWARDED')){
        $ipaddress = getenv('HTTP_FORWARDED');
    }
    elseif(getenv('REMOTE_ADDR')){
        $ipaddress = getenv('REMOTE_ADDR');
    }
    else{
        $ipaddress = 'UNKNOWN';
    }
    return $ipaddress;
}

function telegram_send($message, $api_key, $chat_id) {
    $curl = curl_init();
    $format   = 'HTML';
    curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $api_key .'/sendMessage?chat_id='. $chat_id .'&text='. $message .'&parse_mode=' . $format);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    return true;
}
