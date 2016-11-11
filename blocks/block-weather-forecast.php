<?php

#######################################################
#  Weather forcast Block
# รายงานสภาพอากาศวันนี้
#  Coded by http://www.thainuke.net
#  Resources By: www.tmd.go.th
#######################################################

if (@eregi("block-weather-forecast.php",$_SERVER['SCRIPT_NAME'])) {
    Header("Location: index.php");
    die();
}

$content .= "<div align=\"center\">\n";
$content .= "<iframe src=\"http://www.tmd.go.th/daily_forecast_forweb.php\" width=\"170\" height=\"240\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"no\">\n";
$content .= "</iframe>\n";
$content .= "</div>\n";

?>