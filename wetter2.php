<?php include "config.ini.php"; ?>
<?php include "aussenmodul.php"; ?>
<?php include "innenmodul.php"; ?>
<?php include "zusatzmodul.php"; ?>
<?php header("Content-Type: text/html; charset=ISO-8859-1");?>
<?php
echo "---------------------------------------------<br> \n";
echo "Wetter Heute: <br> \n";
echo "gemessen um : " .$time_aus  ." Uhr <br> \n";
echo "Temp. jetzt " .$temp_aus ."&ordm; <br> \n";
echo "Luftdruck: " .$druck_innen  ." mbar <br> \n";
echo "Luftfeuchtigkeit : " .$luft_aus  ." % <br> \n";
echo "---------------------------------------------<br> \n";
echo "Niedrieste Temp : " .$temp_min_aus  ." &ordm; <br> \n";
echo "gemessen um : " .$date_min_aus  ." UhrC <br> \n";
echo "---------------------------------------------<br> \n";
echo "Höheste Temp : " .$temp_max_aus  ." &ordm; <br> \n";
echo "gemessen um : " .$date_max_aus  ." Uhr <br> \n";
echo "---------------------------------------------<br> \n";
?>
