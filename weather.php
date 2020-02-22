<?php

sleep(2);
$z_code = $_GET["z_code"];


$url = "http://api.openweathermap.org/data/2.5/weather?zip=$z_code,us&APPID=bb84fb990a3633f854ed4a3fcf6dc252"; 


//Your API Key has to be obtained from openweathermap.org


$fp = fopen ( $url , "r" ); 
$contents = "";

while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
}
  

echo $contents ;
 
?>
