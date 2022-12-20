<?php
date_default_timezone_set('Asia/Hong_Kong');
$ip = $_SERVER['REMOTE_ADDR'];
$shijian = date('Y-m-d H:i:s');
echo "$ip";
    $shell = "ping {$ip} -c 1 -W 3 ";
    echo "<pre>";
    exec($shell,$res,$status);
    echo "</pre>";
    $shell = "<font color='red'>$shell</font>";
    if( $status )
{
        echo "Your device's network firewall is turned on.";
echo        passthru("echo {$ip} - {$shijian} >> on-firewall-assfasdf.txt");
}

else

{
        echo "Your device's network firewall is turned off." ;
echo        passthru("echo {$ip} - {$shijian}  >> off-firewall-assfasdf.txt");

$nmap  = "nmap {$ip} -6   |grep open";
echo "<pre>";
echo "your device net port open: <br>" ;
echo  system($nmap,$nmapstatus);
echo "</pre>";





echo "$nmapres" ;
#echo  "$agent $ip";
}





?>
