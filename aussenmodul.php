<?php
// ----- Aussenmodul ----- 
$temp_aus = number_format($array["body"]["devices"][0]["modules"][1]["dashboard_data"]["Temperature"], 1, ".", "");
$date_max_aus = $array["body"]["devices"][0]["modules"][1]["dashboard_data"]["date_max_temp"];
$date_max_aus =  date('H:i', $date_max_aus); 							// Unix Timestamp in Uhrzeit wandeln
$date_min_aus = $array["body"]["devices"][0]["modules"][1]["dashboard_data"]["date_min_temp"];
$date_min_aus =  date('H:i', $date_min_aus); 							// Unix Timestamp in Uhrzeit wandeln
$luft_aus = $array["body"]["devices"][0]["modules"][1]["dashboard_data"]["Humidity"];
$temp_min_aus = number_format($array["body"]["devices"][0]["modules"][1]["dashboard_data"]["min_temp"], 1, ".", "");
$temp_max_aus = number_format($array["body"]["devices"][0]["modules"][1]["dashboard_data"]["max_temp"], 1, ".", "");
$batterie_aus = $array["body"]["devices"][0]["modules"][1]["battery_vp"];
$batterie_p_aus = $array["body"]["devices"][0]["modules"][1]["battery_percent"];
$rf_aus = $array["body"]["devices"][0]["modules"][1]["rf_status"];
$firmware_aus = $array["body"]["devices"][0]["modules"][1]["firmware"];
$name_aus = $array["body"]["devices"][0]["modules"][1]["module_name"];
$seen_aus = $array["body"]["devices"][0]["modules"][1]["last_seen"];
$seen_aus =  date('H:i', $seen_aus); 									// Unix Timestamp in Uhrzeit wandeln
$message_aus = $array["body"]["devices"][0]["modules"][1]["last_message"];
$message_aus =  date('H:i', $message_aus); 								// Unix Timestamp in Uhrzeit wandeln
$time_aus = $array["body"]["devices"][0]["modules"][1]["dashboard_data"]["time_utc"];
$time_aus =  date('H:i', $time_aus);									// Unix Timestamp in Uhrzeit wandeln
?>
