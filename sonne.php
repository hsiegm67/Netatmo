<?php
// Sonnenaufgang & Sonnenuntergang
/* calculate the sunset time for Europa/Berlin Latitude: 52.2 North Longitude: 9 West Zenith ~= 90 offset: +2 GMT  */
echo " <br>  \n";
echo("Datum:  " . date("D d M Y") . "<br />");
echo '<img src="auf.PNG" alt="Sonne geht auf"  />';
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,52.2,-9,90,2));
echo "   \n";
echo '<img src="ab.PNG" alt="Sonne geht unter"/>';
echo(date_sunset(time(),SUNFUNCS_RET_STRING,52.2,-9,90,2));
echo " <br> \n";
?>
