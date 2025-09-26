<?php
// Lisbon, Portugal:
// Latitude: 38.4 North, Longitude: 9 West
// Zenith ~= 90, offset: +1 GMT

echo("Lisbon, Portugal: Date: " . date("D M d Y"));
echo("<br>Sunset time: ");
echo(date_sunset(time(),SUNFUNCS_RET_STRING,38.4,-9,90,1));
?>
