<?php
$wind_angle = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["WindAngle"];
$wind_angle_max = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["max_wind_angle"];
$wind = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["WindStrength"];
$wind_boen = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["GustStrength"];
$wind_max = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["max_wind_str"];
$wind_date_max = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["date_max_wind_str"];
$wind_date_max =  date('H:i', $wind_date_max); 						// Unix Timestamp in Uhrzeit wandeln
$wind_batterie = $array["body"]["devices"][0]["modules"][3]["battery_vp"];
$wind_p_batterie = $array["body"]["devices"][0]["modules"][3]["battery_percent"];
?>
