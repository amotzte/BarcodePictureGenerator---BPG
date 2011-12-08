<?php
function make_qr($site){
    $url='http://chart.apis.google.com/chart?cht=qr&chs=300x300&chl=http%3A//'.$site.'&chld=H|0';
    
    $ch = curl_init($url,$user_number);
    $fp = fopen('uploads/qr.png', 'wb');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_exec($ch);
    curl_close($ch);
    
    fclose($fp);
    
}