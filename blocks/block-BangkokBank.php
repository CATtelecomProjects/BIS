<?php

#######################################################
#  Bangkok Bank
# อัตราการแลกเปลี่ยน
#  Coded by http://www.thainuke.net
#  Resources By: http://www.bangkokbank.com/MajorRates/MainBannerThai.htm
#######################################################

/*
if ( !defined('BLOCK_FILE') ) {
    Header("Location: ../index.php");
    die();
}
*/
if (eregi("block-PTT.php",$_SERVER['SCRIPT_NAME'])) {
    Header("Location: index.php");
    die();
}

$content .= "<div align=\"center\">\n";
$content .= "<iframe src=\"http://www.bangkokbank.com/MajorRates/MainBannerThai.htm\" width=\"170\" height=\"168\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"no\">\n";
$content .= "</iframe>\n";
$content .= "</div>\n";

?>