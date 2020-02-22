<?php

sleep(2);
$z_code = $_GET["z_code"];


$url = "http://api.openweathermap.org/data/2.5/weather?zip=$z_code,us&APPID=9ac78bf3aa1a9878ed1726ba8ab7d1f2"; 


//Your API Key has to be obtained from openweathermap.org


$fp = fopen ( $url , "r" ); 
$contents = "";

while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
}
  

echo $contents ;
 
?>
