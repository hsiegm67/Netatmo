<?php
$regen_24 = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["sum_rain_24"];
$regen_24=round($regen_24 , 1); 												// runden auf 1 Nachkommastellen
$regen_1 = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["sum_rain_1"];
$regen_1=round($regen_1 , 1); 													// runden auf 1 Nachkommastellen
$batterie_regen = $array["body"]["devices"][0]["modules"][3]["battery_vp"];
$batterie_p_regen = $array["body"]["devices"][0]["modules"][3]["battery_percent"];
$rf_regen = $array["body"]["devices"][0]["modules"][3]["rf_status"];
$name_regen = $array["body"]["devices"][0]["modules"][3]["module_name"];
$firmware_regen = $array["body"]["devices"][0]["modules"][3]["firmware"];
$time_regen = $array["body"]["devices"][0]["modules"][3]["dashboard_data"]["time_utc"];
$time_regen =  date('H:i', $time_regen);						// Sekunden in Uhrzeit umwandeln
$message_regen = $array["body"]["devices"][0]["modules"][3]["last_message"];
$message_regen =  date('H:i', $message_regen);						// Sekunden in Uhrzeit umwandeln
$seen_regen = $array["body"]["devices"][0]["modules"][3]["last_seen"];
$seen_regen =  date('H:i', $seen_regen);						// Sekunden in Uhrzeit umwandeln
?>
