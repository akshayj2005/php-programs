<?php
#date and time of current city and berlin also calculate the time difference between them
date_default_timezone_set('Europe/Berlin');
$currentDateTimeBerlin = date('Y-m-d H:i:s'); 
echo "Current date and time in Berlin: " . $currentDateTimeBerlin . "<br>";
date_default_timezone_set('Asia/Kolkata');
$currentDateTimeNewDelhi = date('Y-m-d H:i:s'); 
echo "Current date and time in New Delhi: " . $currentDateTimeNewDelhi . "<br>";

$timestampBerlin = strtotime($currentDateTimeBerlin);
$timestampNewDelhi = strtotime($currentDateTimeNewDelhi);
$timeDifference = abs($timestampNewDelhi - $timestampBerlin);
$hoursDifference = floor($timeDifference / 3600);
$minutesDifference = floor(($timeDifference % 3600) / 60);

echo "Time difference between Berlin and New Delhi: {$hoursDifference} hours and {$minutesDifference} minutes<br>";

?>
