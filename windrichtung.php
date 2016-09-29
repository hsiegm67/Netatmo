<?php
$richtung = "kein Wind" ;
        if ($wind_angle >= 348.75 && $wind_angle <= 360.00) $richtung = "Nord";
        else if ($wind_angle >= 0.00 && $wind_angle < 11.25) $richtung = "Nord";
        else if ($wind_angle >= 11.25 and $wind_angle < 33.75) $richtung = "Nord-Nordost";
        else if ($wind_angle >= 33.75 and $wind_angle < 56.25) $richtung = "Nordost";
        else if ($wind_angle >= 56.25 and $wind_angle < 78.75) $richtung = "Ost-Nordost";
        else if ($wind_angle >= 78.75 and $wind_angle < 101.25) $richtung = "Ost";
        else if ($wind_angle >= 101.25 and $wind_angle < 123.75) $richtung = "Ost-S&uuml;dost";
        else if ($wind_angle >= 123.75 and $wind_angle < 146.25) $richtung = "S&uuml;dost";
        else if ($wind_angle >= 146.25 and $wind_angle < 168.75) $richtung = "S&uuml;d-S&uuml;dost";
        else if ($wind_angle >= 168.75 and $wind_angle < 191.25) $richtung = "S&uuml;d";
        else if ($wind_angle >= 191.25 and $wind_angle < 213.75) $richtung = "S&uuml;d-S&uuml;dwest";
        else if ($wind_angle >= 213.75 and $wind_angle < 236.25) $richtung = "S&uuml;dwest ";
        else if ($wind_angle >= 236.25 and $wind_angle < 258.75) $richtung = "West-S&uuml;dwest";
        else if ($wind_angle >= 258.75 and $wind_angle < 281.25) $richtung = "West";
        else if ($wind_angle >= 281.25 and $wind_angle < 303.75) $richtung = "West-Nordwest";
        else if ($wind_angle >= 303.75 and $wind_angle < 326.25) $richtung = "Nordwest";
        else if ($wind_angle >= 326.25 and $wind_angle < 348.75) $richtung = "Nord-Nordwest";
?>
