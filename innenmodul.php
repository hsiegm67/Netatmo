<?php
// ----- Innenmodul ----- 
$temp_innen = number_format($array["body"]["devices"][0]["modules"][4]["dashboard_data"]["Temperature"], 1, ".", "");
$temp_max_innen = number_format($array["body"]["devices"][0]["modules"][4]["dashboard_data"]["max_temp"], 1, ".", "");
$temp_min_innen = number_format($array["body"]["devices"][0]["modules"][4]["dashboard_data"]["min_temp"], 1, ".", "");
$laerm_innen = $array["body"]["devices"][0]["modules"][4]["dashboard_data"]["Noise"];
$luft_innen = $array["body"]["devices"][0]["modules"][4]["dashboard_data"]["Humidity"];
$druck_innen = number_format($array["body"]["devices"][0]["modules"][4]["dashboard_data"]["Pressure"], 1, ".", "");
$co2_innen = $array["body"]["devices"][0]["modules"][4]["dashboard_data"]["CO2"];
$date_max_innen = $array["body"]["devices"][0]["modules"][4]["dashboard_data"]["date_max_temp"];
$date_max_innen =  date('H:i', $date_max_innen); 						// Unix Timestamp in Uhrzeit wandeln
$date_min_innen = $array["body"]["devices"][0]["modules"][4]["dashboard_data"]["date_min_temp"];
$date_min_innen =  date('H:i', $date_min_innen); 						// Unix Timestamp in Uhrzeit wandeln
$wifi = $array["body"]["devices"][0]["modules"][4]["wifi_status"];
$firmware_innen = $array["body"]["devices"][0]["modules"][4]["firmware"];
$name_innen = $array["body"]["devices"][0]["modules"][4]["module_name"];
$last_update = $array["body"]["devices"][0]["modules"][4]["dashboard_data"]["time_utc"];
$time_last_update =  date('H:i', $last_update); 						// Unix Timestamp in Uhrzeit wandeln
$date_last_update =  date('d.m.Y', $last_update); 						// Unix Timestamp in Datum wandeln
$date_last_update_mysql =  date('Y-m-d', $last_update); 						// Unix Timestamp in Datum wandeln
$last_status_store = $array["body"]["devices"][0]["modules"][4]["last_status_store"];
$last_status_store =  date('H:i', $last_status_store); 					// Unix Timestamp in Uhrzeit wandeln
$last_upgrade = $array["body"]["devices"][0]["modules"][4]["last_upgrade"];
$last_upgrade =  date('d.m.Y - H:i:s', $last_upgrade); 					// Unix Timestamp in Uhrzeit wandeln
?>
