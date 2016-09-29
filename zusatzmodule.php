<?php
// ----- Zusatzmodul ----- 
$temp_innen_2 = number_format($array["body"]["devices"][0]["modules"][3]["dashboard_data"]["Temperature"], 1, ".", "");
$temp_max_innen_2 = number_format($array["body"]["devices"][0]["modules"][3]["dashboard_data"]["max_temp"], 1, ".", "");
$temp_min_innen_2 = number_format($array["body"]["devices"][0]["modules"][3]["dashboard_data"]["min_temp"], 1, ".", "");
$luft_innen_2 = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["Humidity"];
$co2_innen_2 = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["CO2"];
$date_max_innen_2 = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["date_max_temp"];
$date_max_innen_2 =  date('H:i', $date_max_innen_2); 						// Unix Timestamp in Uhrzeit wandeln
$date_min_innen_2 = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["date_min_temp"];
$date_min_innen_2 =  date('H:i', $date_min_innen_2); 						// Unix Timestamp in Uhrzeit wandeln
$batterie_innen_2 = $array["body"]["devices"][0]["modules"][3]["battery_vp"];
$rf_innen_2 = $array["body"]["devices"][0]["modules"][3]["rf_status"];
$firmware_innen_2 = $array["body"]["devices"][0]["modules"][3]["firmware"];
$name_innen_2 = $array["body"]["devices"][0]["modules"][3]["module_name"];
$seen_innen_2 = $array["body"]["devices"][0]["modules"][3]["last_seen"];
$seen_innen_2 =  date('H:i', $seen_innen_2); 									// Unix Timestamp in Uhrzeit wandeln
$message_innen_2 = $array["body"]["devices"][0]["modules"][3]["last_message"];
$message_innen_2 =  date('H:i', $message_innen_2); 								// Unix Timestamp in Uhrzeit wandeln
$time_innen_2 = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["time_utc"];
$time_innen_2 =  date('H:i', $time_innen_2);									// Unix Timestamp in Uhrzeit wandeln
?>
