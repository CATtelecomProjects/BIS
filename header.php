<?php

/************************************************************************/
/* PHP-NUKE: Advanced Content Management System                         */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2006 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

if (stristr(htmlentities($_SERVER['PHP_SELF']), "header.php")) {
	Header("Location: index.php");
	die();
}

if (file_exists("./includes/custom_files/dbConnect.php")) {
		include_once("./includes/custom_files/dbConnect.php");
}

if (file_exists("./includes/custom_files/functions.php")) {
		include_once("./includes/custom_files/functions.php");
}

/*
if (file_exists("includes/custom_files/Unique-Counter.php")) {
		include_once("includes/custom_files/Unique-Counter.php");
	}
*/
define('NUKE_HEADER', true);
require_once("mainfile.php");

##################################################
# Include some common header for HTML generation #
##################################################


function head() {
	global $slogan, $sitename, $banners, $nukeurl, $Version_Num, $artpage, $topic, $hlpfile, $user, $hr, $theme, $cookie, $bgcolor1, $bgcolor2, $bgcolor3, $bgcolor4, $textcolor1, $textcolor2, $forumpage, $adminpage, $userpage, $pagetitle;
	$ThemeSel = get_theme();
	include_once("themes/$ThemeSel/theme.php");
	echo "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n";
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n";
	echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n";	
	echo "<head>\n";
	echo "<title>$sitename $pagetitle</title>\n";
	echo "<script language='Javascript'>\n";
	echo "document.write('<style><!-- @import url(includes/webbands/webband.css); --></style>'
+ '<div class=\"THBWeLoveOurKingRight\"><img src=\"includes/webbands/kwebbandr.gif\" width=\"100\" height=\"100\" border=\"0\" usemap=\"#THBRight\"></div>'
+ '<map name=\"THBRight\"><area shape=\"poly\" coords=\"0,0,100,100,100,71,30,0\" href=\"index.php\" target=\"_blank\"></map>');\n";
echo "</script>\n";

// Include Javascript TextSize 
//echo "<style type=\"text/css\">\n";
/* hide from incapable browsers */
//echo "#sizer { display: } \n";
//echo "</style>\n";
/*echo "<script src=\"includes/textsize/js/dw_cookies.js\" type=\"text/javascript\"></script>\n";
echo "<script src=\"includes/textsize/js/dw_sizerdx.js\" type=\"text/javascript\"></script>\n";
*/
echo "<script language=\"javascript\" src=\"./includes/ajax/_class.js\"></script>\n";
echo "<script language=\"javascript\" src=\"./includes/ajax/ajax.js\"></script>\n";


// Include modal-message
/*echo "<link rel=\"stylesheet\" href=\"./includes/modal-message/css/modal-message.css\" type=\"text/css\">\n";
echo	"<script type=\"text/javascript\" src=\"./includes/modal-message/js/ajax.js\"></script>\n";
echo	"<script type=\"text/javascript\" src=\"./includes/modal-message/js/modal-message.js\"></script>\n";
echo	"<script type=\"text/javascript\" src=\"./includes/modal-message/js/ajax-dynamic-content.js\"></script>\n";
echo	"<script type=\"text/javascript\" src=\"./includes/modal-message/js/bis-modal-message.js\"></script>\n";*/

// jQuery
echo	"<link type=\"text/css\" href=\"./includes/jQuery/css/cat-theme/jquery-ui-1.8.6.custom.css\" rel=\"stylesheet\" />\n";
echo	"<script type=\"text/javascript\" src=\"./includes/jQuery/js/jquery-1.4.2.min.js\"></script>\n";
echo	"<script type=\"text/javascript\" src=\"./includes/jQuery/js/jquery-ui-1.8.6.custom.min.js\"></script>\n";
echo	"<script type=\"text/javascript\" src=\"./includes/jQuery/js/js_jquery_util.js\"></script>\n";
// Tipsy Tooltips 
echo	"<link rel=\"stylesheet\" type=\"text/css\" href=\"./includes/jQuery/css/tipsy.css\" />\n";
echo	"<script type=\"text/javascript\" src=\"./includes/jQuery/js/jquery.tipsy.js\"></script>\n";

// Include Custom jQuery
echo	"<script type=\"text/javascript\" src=\"./includes/custom_files/custom_jquery.js\"></script>\n";

// Include SpryAssets
/*
echo "<script  type=\"text/javascript\" src=\"./includes/SpryAssets/SpryTooltip.js\"></script>\n";
echo "<link href=\"./includes/SpryAssets/SpryTooltip.css\" rel=\"stylesheet\" type=\"text/css\" />\n";
*/

// Check Close Button before logout 
/*
if(isset($_SESSION['usr'])){
		echo "<script type=\"text/javascript\">";
		echo "window.onbeforeunload = function (evt) {";
		echo "var message = \"ระบบกำลังทำการ Logout อัตโนมัติ!!\";";
		echo "if (typeof evt == \"undefined\") {";
		echo "evt = window.event;";
		echo "} ";
		echo "		if (evt) { ";
		echo "		evt.returnValue = message; ";
		echo "		window.location = \"http://bis.cattelecom.com/modules.php?name=Login&op=Logout\"; ";
		echo "		}";
		echo "}";
		echo "</script>";
}
*/
//End  Check Close Button before logout 

	include("includes/meta.php");
	include("includes/javascript.php");

	/*if (file_exists("themes/$ThemeSel/images/favicon.ico")) {
		echo "<link rel=\"shortcut icon\" href=\"themes/$ThemeSel/images/favicon.ico\" type=\"image/x-icon\">\n";
	}*/
	if (file_exists("./images/favicon.ico")) {
		//echo "<link rel=\"shortcut icon\" href=\"./images/favicon.ico\" type=\"image/x-icon\">\n";
		echo "<link rel=\"shortcut icon\" href=\"./images/favicon.ico\" type=\"image/x-icon\" />\n ";
		echo "<link rel=\"icon\" href=\"./images/favicon.gif\" type=\"image/gif\" />\n";
	}
	echo "<link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS\" href=\"backend.php\">\n";	
	echo "<LINK REL=\"StyleSheet\" HREF=\"themes/$ThemeSel/style/style.css\" TYPE=\"text/css\">\n\n\n";
	if (file_exists("includes/custom_files/custom_head.php")) {
		include_once("includes/custom_files/custom_head.php");
	}
	echo "\n\n\n</head>\n\n";
	if (file_exists("includes/custom_files/custom_header.php")) {
		include_once("includes/custom_files/custom_header.php");
	}
	themeheader();
}

online();
head();
include("includes/counter.php");
if(defined('HOME_FILE')) {
	message_box();
	blocks("Center");
}

?>