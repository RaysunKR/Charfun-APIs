<?php
function shortUrlGen($longurl="https://www.charfun.com/"){
    $pattern_1 = '@(?i)\b((?:[a-z][\w-]+:(?:/{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))@';
    if (preg_match($pattern_1, $longurl)) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.charfun.com/api/shorturl");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS ,array("longurl"=>$longurl));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, '0');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, '0');
        $output = curl_exec($ch);
        $rawData = $output;
        curl_close($ch);
        $data = json_decode($rawData);
        return $data;
    } else {
        return false;
    }

}

var_dump(shortUrlGen("https://github.com/RaysunKR/Charfun-APIs"));