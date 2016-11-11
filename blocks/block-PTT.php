<?php

#######################################################
#  PTT Block
# ราคาน้ำมันวันนี้
#  Coded by http://www.thainuke.net
#  Resources By: http://www.pttplc.com/
#######################################################

/*
if ( !defined('BLOCK_FILE') ) {
    Header("Location: ../index.php");
    die();
}
*/
if (@eregi("block-PTT.php",$_SERVER['SCRIPT_NAME'])) {
    Header("Location: index.php");
    die();
}

$content .= "<div align=\"center\">\n";
$content .= "<iframe src=\"http://www.pttplc.com/th/getoilprice.aspx\" width=\"170\" height=\"400\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\" scrolling=\"no\">\n";
$content .= "</iframe>\n";
$content .= "</div>\n";

?>