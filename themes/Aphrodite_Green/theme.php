<?php
//*********************************************************************************************************//
// Theme Name: Aphrodite_Green Theme              			    	      
// Theme Design: Lorkan (http://lorkan.com)		      
// version 1.0                                              
// 
// Original Author of file: Design by phpBBStyles.com | Styles Database
// Theme Developed by: Lorkan Themes - An Evolution In Theme Designs
// Forum Template: Desgined by Design by phpBBStyles.com | Styles Database, but ported by: Lorkan Themes for use with PHP-Nukeฉ
// Copyright ฉ 2005 by Lorkan Themes - All Rights Reserved
// ----------------------------------------------------------------------
// THEME MODIFICATION 
// Users may alter or modify this theme at their own risk,
// but only for their own use. They may also hire Lorkan Themes to modify their own copy of the theme.
// Although users may modify the code for their use,
// modified code may not be resold or distributed,
// without express written permission from Lorkan Themes.
//
// DISPLAY OF COPYRIGHT NOTICES REQUIRED
// All copyright notices used within the scripts that the scripts generate,
// MUST remain intact. Furthermore, these notices must remain visible.
//
// SUPPORT
// Lorkan Themes provide free support on all their theme designs, BUT not on Forum Templates,
// (includes consulting, troubleshooting and fixing problems).
//
// Lorkan Themes is not liable for any products or services offered by means of the theme.
// The user must assume the entire risk of using the program.
//
// Lorkan Themes
// For commercial themes, exclusive themes, visit our Theme Shop http://lorkan.com/modules.php?name=Themes
// For some free themes, visit us at: http://lorkan.com
//*********************************************************************************************************//

$bgcolor1 = "#F8F8F8";
$bgcolor2 = "#F8F8F8";
$bgcolor3 = "#EAEAEA";
$bgcolor4 = "#F8F8F8";
$textcolor1 = "#000000";
$textcolor2 = "#469A40";

echo "<script type=\"text/javascript\" src=\"themes/Aphrodite_Green/forums/fading.js\"></script>";

/************************************************************/
/* OpenTable Functions                                      */
/************************************************************/

function OpenTable() {
	global $bgcolor1, $bgcolor2;
	echo "<table class=\"forumline\" width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">";
	echo "<tr>";
	echo "<td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
	echo "<tr>";
 	echo "<td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
	echo "<tr>";
	echo "<td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
	echo "<tr>";
	echo "<td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\">";
	echo "<tr>";
	echo "<td>";
}

function CloseTable() {
	echo "</td></tr></table></td></tr></table></td></tr></table></td></tr></table>";
	echo "</td></tr></table>";

}

function OpenTable2() {
	global $bgcolor1, $bgcolor2;
	echo "<table class=\"forumline\" width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">";
	echo "<tr>";
	echo "<td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
	echo "<tr>";
 	echo "<td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
	echo "<tr>";
	echo "<td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
	echo "<tr>";
	echo "<td><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\">";
	echo "<tr>";
	echo "<td>";
}

function CloseTable2() {
	echo "</td></tr></table></td></tr></table></td></tr></table></td></tr></table>";
	echo "</td></tr></table>";

}

/************************************************************/
/* Format Stories		                                    */
/************************************************************/

function FormatStory($thetext, $notes, $aid, $informant) {
    global $anonymous;
    if ($notes != "") {
	$notes = "<br><br><b>"._NOTE."</b> $notes\n";
   } else {
	$notes = "";
   }
    if ("$aid" == "$informant") {
	echo "<font class=\"content\">$thetext$notes</font>\n";
   } else {
	if($informant != "") {
	    $boxstuff = "<a href=\"modules.php?name=Your_Account&op=userinfo&amp;username=$informant\">$informant</a> ";
   } else {
	    $boxstuff = "$anonymous ";
   }
	$boxstuff .= ""._WRITES.": $thetext $notes\n";
	echo "<font class=\"content\">$boxstuff</font>\n";
   }
   }

/************************************************************/
/* Function themeheader()                                   */
/************************************************************/

function themeheader() {
	global  $sitename, $admin, $index, $user, $cookie, $user_prefix, $userinfo, $prefix, $db, $banners, $Version_Num;


	if ($Version_Num > "7.7") {
		$showbanners = ads(0);
	} else {
			if ($banners == 1) {
				$numrows = $db->sql_numrows($db->sql_query("SELECT * FROM ".$prefix."_banner WHERE type='0' AND active='1'"));

				if ($numrows>1) {
					$numrows = $numrows-1;
					mt_srand((double)microtime()*1000000);
					$bannum = mt_rand(0, $numrows);
				} else {
					$bannum = 0;
				}

				$sql = "SELECT bid, imageurl, clickurl, alttext FROM ".$prefix."_banner WHERE type='0' AND active='1' LIMIT $bannum,1";
				$result = $db->sql_query($sql);
				$row = $db->sql_fetchrow($result);
				$bid = $row[bid];
				$imageurl = $row[imageurl];
				$clickurl = $row[clickurl];
				$alttext = $row[alttext];

				if (!is_admin($admin)) {
					$db->sql_query("UPDATE ".$prefix."_banner SET impmade=impmade+1 WHERE bid='$bid'");
				}

				if($numrows>0) {
					$sql2 = "SELECT cid, imptotal, impmade, clicks, date FROM ".$prefix."_banner WHERE bid='$bid'";
					$result2 = $db->sql_query($sql2);
					$row2 = $db->sql_fetchrow($result2);
					$cid = $row2[cid];
					$imptotal = $row2[imptotal];
					$impmade = $row2[impmade];
					$clicks = $row2[clicks];
					$date = $row2[date];

					if (($imptotal <= $impmade) AND ($imptotal != 0)) {
						$db->sql_query("UPDATE ".$prefix."_banner SET active='0' WHERE bid='$bid'");
						$sql3 = "SELECT name, contact, email FROM ".$prefix."_bannerclient WHERE cid='$cid'";
						$result3 = $db->sql_query($sql3);
						$row3 = $db->sql_fetchrow($result3);
						$c_name = $row3[name];
						$c_contact = $row3[contact];
						$c_email = $row3[email];

						if ($c_email != "") {
							$from = "$sitename <$adminmail>";
							$to = "$c_contact <$c_email>";
							$message = ""._HELLO." $c_contact:\n\n";
							$message .= ""._THISISAUTOMATED."\n\n";
							$message .= ""._THERESULTS."\n\n";
							$message .= ""._TOTALIMPRESSIONS." $imptotal\n";
							$message .= ""._CLICKSRECEIVED." $clicks\n";
							$message .= ""._IMAGEURL." $imageurl\n";
							$message .= ""._CLICKURL." $clickurl\n";
							$message .= ""._ALTERNATETEXT." $alttext\n\n";
							$message .= ""._HOPEYOULIKED."\n\n";
							$message .= ""._THANKSUPPORT."\n\n";
							$message .= "- $sitename "._TEAM."\n";
							$message .= "$nukeurl";
							$subject = "$sitename: "._BANNERSFINNISHED."";
							mail($to, $subject, $message, "From: $from\nX-Mailer: PHP/" . phpversion());
						}
					}

					$showbanners = "<a href=\"banners.php?op=click&bid=$bid\" target=\"_blank\"><img src=\"$imageurl\" alt='$alttext' title='$alttext'></a>&nbsp;";
				}
			}
	}


    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }

   /* if ($username == "Anonymous") {
	$theuser = "<a href=\"modules.php?name=Your_Account\">"._LOGIN."</a> or <a href=\"modules.php?name=Your_Account&op=new_user\">"._BREG."</a>";
    } else {
	$theuser = "<font color=\"#469A40\"><b>"._BWEL."</b></font> $username!";
    }*/




	$datetime = "<script type=\"text/javascript\">\n\n";
	$datetime .= "<!--   // Array ofmonth Names\n";
	$datetime .= "var monthNames = new Array( \""._JANUARY."\",\""._FEBRUARY."\",\""._MARCH."\",\""._APRIL."\",\""._MAY."\",\""._JUNE."\",\""._JULY."\",\""._AUGUST."\",\""._SEPTEMBER."\",\""._OCTOBER."\",\""._NOVEMBER."\",\""._DECEMBER."\");\n";
	$datetime .= "var now = new Date();\n";
	$datetime .= "thisYear = now.getYear()+543;\n";
	$datetime .= "if(thisYear < 1900) {thisYear += 1900}; // corrections if Y2K display problem\n";
	//$datetime .= "document.write(monthNames[now.getMonth()] + \" \" + now.getDate() + \", \" + thisYear);\n";
	$datetime .= "document.write(now.getDate() + \" \" + monthNames[now.getMonth()] + \" \" + thisYear);\n";
	$datetime .= "// -->\n\n";
	$datetime .= "</script>";

	$public_msg = public_message();

	echo "<table id=\"forum\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">";
	echo "<tr>";
	echo "<td class=\"forum-header\" align=\"center\" valign=\"top\">";
	echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">";
	echo "<tr>";
	echo "<td width=\"60%\" height=\"80\">&nbsp;<a href=\"index.php\"><!--<img src=\"themes/Aphrodite_Green/forums/images/logo.gif\" title=\"$sitename\" align=\"absmiddle\">--></a><span style=\"font-family: Verdana;font-size: 19px ;color:#469A40;font-weight: bold;\"> $sitename</span></td>";
	echo "<td width=\"40%\" style=\"PADDING-right: 2px\" height=\"80\">$showbanners</td>";
	echo "</tr></table>";
	echo "<table height=\"20\" width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
	echo "<tr>";
	echo "<td align=\"center\" class=\"forum-buttons\" width=\"160\" nowrap>&nbsp;&nbsp;$theuser</td>";
	echo "<td align=\"center\" class=\"forum-buttons\">";

	//URL Links
	echo "<a href=\"index.php\">หน้าแรก</a> &#8226; ";
	//echo "<a href=\"modules.php?name=Forums\">กระดานข่าว</a> &#8226; "; 
	echo "<a href=\"modules.php?name=Downloads\">ดาวน์โหลด</a> &#8226; ";
	//echo "<a href=\"modules.php?name=Your_Account\">สำหรับสมาชิก</a> &#8226; ";
	echo "<a href=\"modules.php?name=Web_Links\">สารบัญเว็บ</a>";
	//End URL Links

	echo "</td>";
	echo "<td align=\"right\" class=\"forum-buttons\" width=\"125\" nowrap>$datetime";
	echo "&nbsp;&nbsp;</td></tr></table>";
	echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\">";
	echo "<tr valign=\"top\">";
	echo "<td>$public_msg</td>";
	echo "</tr></table>";
	echo "<table width=\"100%\" cellpadding=\"4\" cellspacing=\"0\" border=\"0\" align=\"center\">";
	echo "<tr>";
	echo "<td valign=\"top\">";
		blocks(left);
	echo"</td><td valign=\"top\" width=\"100%\">";

}
/************************************************************/
/* Function themefooter()                                   */
/************************************************************/

function themefooter() {
	global $index, $foot1, $foot2, $foot3, $foot4, $total_time, $start_time, $footer_message;
	if (defined('INDEX_FILE') || ($index == 1)) {
	echo"</td><td valign=\"top\" width=\"170\">";
	blocks(right);
    }	
//    $footer_message = "$foot1<br>$foot2<br>$foot3<br>$foot4";
	$footer_message = "$foot1<br>$foot2";
    //$footer_message = htmlentities(strip_tags(substr($footer_message,0,1000)));
    $mtime = microtime();
    $mtime = explode(" ",$mtime);
    $mtime = $mtime[1] + $mtime[0];
    $end_time = $mtime;
    $total_time = ($end_time - $start_time);
    $total_time = "".substr($total_time,0,5)."";

	echo "</td></tr></table>\n";

// PLEASE DO NOT TAMPER WITH THE FOLLOWING LINE(s).

	echo "<table cellSpacing=\"0\" cellPadding=\"2\" width=\"100%\" border=\"0\">";
	echo "<tr><td id=\"copyright\" width=\"25%\" align=\"left\">Powered by: <a target=\"_blank\" href=\"http://bis.cattelecom.com.org\">Bis Team&#8482;</a> &copy; - 2007";
	echo "</td>";
	echo "<td width=\"50%\" id=\"copyright\" align=\"center\">$footer_message</td>";
	echo "<td width=\"25%\" id=\"copyright\" align=\"right\">";
	echo "เวลาในการสร้างหน้าเพจ : $total_time seconds</td></tr></table>";

}

/************************************************************/
/* Function themeindex()                                    */
/************************************************************/

	function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
	global $anonymous, $tipath, $sitename;

	$ThemeSel = get_theme();
	if (file_exists("themes/$ThemeSel/images/topics/$topicimage")) {
	$t_image = "themes/$ThemeSel/images/topics/$topicimage";
	} else {
	$t_image = "$tipath$topicimage";
	}

	echo "<table class=\"forumline\" border=\"0\" cellspacing=\"0\" width=\"100%\" cellpadding=\"3\"><tr>";
	echo "<td class=\"row-header\"><span>$title</span></td>";
	echo "<tr>";
	echo "<td><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tr>";
	echo "<td bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\">";
	echo "<tr><td>";
    	echo "<a href=\"modules.php?name=News&new_topic=$topic\"><img onmouseover=high(this) style=\"FILTER: alpha(opacity=30); moz-opacity: 0.3\" onmouseout=low(this) src=\"$t_image\" alt=\"$topictext\" hspace=\"10\" vspace=\"10\" align=\"left\"></a>";
		FormatStory($thetext, $notes, $aid, $informant);
	echo "</td></tr></table></td></tr></table>";
	echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tr>";
	echo "<td id=\"news-footer\">";
	echo ""._POSTEDBY.": <a href=\"modules.php?name=Your_Account&op=userinfo&amp;username=$informant\"><b>$informant</b></a> ";
	echo ""._ON." $time $timezone";
	echo "</td>";
	echo "<td id=\"news-footer\" align=\"right\" >$morelink</td></tr></table></td></tr></table>\n";
}

/************************************************************/
/* Function themearticle()                                  */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
	global $admin, $sid, $tipath;
	$ThemeSel = get_theme();
	if (file_exists("themes/$ThemeSel/images/topics/$topicimage")) {
	$t_image = "themes/$ThemeSel/images/topics/$topicimage";
	} else {
	$t_image = "$tipath$topicimage";
	}

	echo "<table class=\"forumline\" border=\"0\" cellspacing=\"0\" width=\"100%\" cellpadding=\"3\"><tr>";
	echo "<td class=\"row-header\"><span>$title</span></td>";
	echo "<tr>";
	echo "<td><table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tr>";
	echo "<td bgcolor=\"#FFFFFF\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"4\">";
	echo "<tr><td>";
    	echo "<a href=\"modules.php?name=News&new_topic=$topic\"><img onmouseover=high(this) style=\"FILTER: alpha(opacity=30); moz-opacity: 0.3\" onmouseout=low(this) src=\"$t_image\" alt=\"$topictext\" hspace=\"10\" vspace=\"10\" align=\"left\"></a>";
		FormatStory($thetext, $notes, $aid, $informant);
	echo "</td></tr></table></td></tr></table>";
	echo "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\"><tr>";
	echo "<td height=\"22\" id=\"news-footer\">"._POSTEDBY.": <b>";
		formatAidHeader($aid);
	echo "</b> "._ON." $datetime</td>";
	echo "<td id=\"news-footer\" align=\"right\" >$morelink</td></tr></table></td></tr></table>\n";
}

/************************************************************/
/* Function themesidebox()                                  */
/************************************************************/

function themesidebox($title, $content) {
	echo "<table border=\"0\" class=\"forumline\" cellspacing=\"0\" width=\"185\" cellpadding=\"3\"><tr>";
	echo "<td class=\"row-header\" width=\"100%\">";
	echo "<span>$title</span>";
	echo "</td></tr>";
	echo "<tr><td class=\"row1\" width=\"170\">$content";
	echo "</td></tr></table>";
   }
?>
