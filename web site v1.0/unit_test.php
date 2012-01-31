<?php
function check_files($qr,$pic){	
    $file1=file_exists($qr);
    $file2=file_exists($pic);
	
    if ($file1)
        echo $qr." is found <BR>";
    else 
    	echo $qr." is NOT found <BR>";

     	
    if ($file2)
        echo $pic." is found <BR>";
    else
        echo $pic." is NOT found <BR>";
    	
    return ($file1 && $file2); 
        
}


function http_response($pic,$url1,$debug) 
{ 

    $encode=urlencode($pic);
    $url="http://zxing.org/w/decode?u=".$encode."&full=true";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
    $head = curl_exec($ch); 
    if ($debug){
    	echo $head."<br>" ;
    }
    curl_close($ch);
    $pos = strrpos($head, "<td>Raw text</td><td>");
    $res = substr($head, $pos+21);
    $pos2 = strrpos($res, "</td></tr><tr><td>Raw bytes");
    $res2 = substr($res, 0,$pos2);
    if(strcmp($res2,$url1)==0)
    {
    	if ($debug){echo "<br> QR readble"; }
       return 1;
    }
    else
    {
      if ($debug){echo "<br> QR not readble"; }
       return 0;
    };
     
    
    
}


