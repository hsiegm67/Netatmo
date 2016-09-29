
<?php include "config.ini.php"; ?>
<?php include "aussenmodul.php"; ?>
<?php include "innenmodul.php"; ?>
<?php include "zusatzmodule.php"; ?>
<?php
echo "<br /> \n";  
echo "---------------------------------------------<br> \n";
echo '<img id="bilder" src="A.JPG" alt="Netatmo-Innenmodul"/>';
echo "<br /> \n";
echo "Das Wetter Heute: <br> \n";
echo "gemessen um : " .$time_aus  ." Uhr <br> \n";
echo "Temp. jetzt " .$temp_aus ."&ordm;<br> \n";
echo "Luftdruck: " .$druck_innen  ." mbar <br> \n";
echo "Luftfeuchtigkeit : " .$luft_aus  ." % <br> \n";
?>
<a href="wetter2.php">weitere daten</a>
<?php
echo "<br> \n";
echo "---------------------------------------------<br> \n";
echo "<br> \n";
?>
