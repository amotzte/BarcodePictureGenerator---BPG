<?php
function make_qr($site,$user_number,$qrsize){
    if(!($site[4]==':' & $site[5]=='/' &  $site[5]=='/')){
       $site='http://'.$site;
    }
     $site=urlencode($site);
    $url='http://chart.apis.google.com/chart?cht=qr&chs='.$qrsize.'x'.$qrsize.'&chl='.$site.'&chld=H|0';
    
    $ch = curl_init($url);
    $fp = fopen('uploads/'.$user_number."_qr.png", 'wb');
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_exec($ch);
    curl_close($ch);
    
    fclose($fp);
    
}