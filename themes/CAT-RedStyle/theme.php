<?php
$bgcolor1 = "#CE9B9B";
$bgcolor2 = "#BC7676";
$bgcolor3 = "#FFFFFF";
$bgcolor4 = "#333";
$textcolor1 = "#FFFFFF";
$textcolor2 = "#333333";

function OpenTable() {
    global $bgcolor1, $bgcolor2;
    echo "<div class=\"opentable\"><table bgcolor=\"$bgcolor1\" width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" align=\"center\"><tr><td>\n";
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"8\"><tr><td>\n";
}

function CloseTable() {
    echo "</td></tr></table></td></tr></table></div>\n";
}

function OpenTable2() {
    global $bgcolor1, $bgcolor2;
    echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\"><tr><td>\n";
    echo "<table class=\"opentable2\" width=\"100%\" border=\"0\"><tr><td>\n";
}

function CloseTable2() {
    echo "</td></tr></table></td></tr></table>\n";
}

function themeheader() {
    global $user, $slogan, $sitename, $banners, $user, $cookie, $prefix, $anonymous, $name;

    $email = "webmaster@sitename.com";
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = $anonymous;
    }

    echo "</head>\n";
    echo "<body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\n\n\n";
//copyright info. Out of respect, please do not remove thank you. 	
    echo "<!-- Theme Designed by © 2004 VIPixel (http://www.vipixel.com - webmaster at vipixel dot com) ----->\n";
    echo "<!-- $sitename is using CAT-RedStyle, Free PHP-Nuke theme -->\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";
//Begin Header
    include("themes/CAT-RedStyle/header.php");
//end header

echo "<table bgcolor=\"#F1DCDC\" align=\"center\" width=\"97%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n"
     ."<tr valign=\"top\">\n"
     ."<td bgcolor=\"#333\"><img src=\"themes/CAT-RedStyle/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td><img src=\"themes/CAT-RedStyle/images/spacer.gif\" width=\"4\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td valign=\"top\">\n";
//Hiding left sideblock for these modules listed below:
    if (($name=='Forums') OR ($name=='Private_Messages') OR ($name=='Gallery') OR ($name=='Members_List')) { 
	} else { 	 
     blocks('left');
    }
echo "<td><img src=\"themes/CAT-RedStyle/images/spacer.gif\" width=\"4\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td align=\"center\" valign=\"top\" width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">\n";
     if (defined('INDEX_FILE') || ($index == 1)) {
     blocks('centre');
        }
}

function themefooter() {
    global $index, $slogan, $Version_Num;
            if (defined('INDEX_FILE') || ($index == 1)) {
echo "</td>\n"
     ."<td><img src=\"themes/CAT-RedStyle/images/spacer.gif\" width=\"4\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td valign=\"top\">\n";
     blocks('right');
}
echo "</td>\n"
     ."<td width=\"4\"><img src=\"themes/CAT-RedStyle/images/spacer.gif\" width=\"4\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."<td bgcolor=\"#333\"><img src=\"themes/CAT-RedStyle/images/spacer.gif\" width=\"1\" height=\"1\" border=\"0\" alt=\"\"></td>\n"
     ."</td>\n"
     ."</tr>\n"
     ."</table>\n\n\n";
//Begin Footer
?>
<table align="center" width="97%" cellpadding="0" cellspacing="0">
  <tr>
  <td width="1" bgcolor="#333"></td>
    <td bgcolor="#F1DCDC">
   <?
// Should we display banners?
if ($Version_Num > "7.7") {
		$ads = ads(0);
		echo "$ads";
} else {
        if ($banners == 1) {
                include("banners.php");
        }
}
echo "<br /><br />\n";
echo "<div class=\"slogan\">$slogan\n";
echo "<br /><div class=\"footer\">";
        footmsg();
                ?>
<br />
Designed By <a target="_blank" href=" http://nuke.vipixel.com/"><img src="themes/CAT-RedStyle/images/vipixel.gif" border="0" alt="VIPixel.com"></a>&nbsp;
Thai Edition By <a target="_blank" href=" http://www.thainuke.org/"><img src="themes/CAT-RedStyle/images/thainuke.png" border="0" alt="ThaiNuke"></a>
</div></td>
<td></td>
<td width="1" bgcolor="#333"></td>
  </tr>
</table>
<?
}

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath, $sid;
    $ThemeSel = get_theme();
    if (file_exists("themes/$ThemeSel/images/topics/$topicimage")) {
        $t_image = "themes/$ThemeSel/images/topics/$topicimage";
    } else {
        $t_image = "$tipath$topicimage";
    }
        // Build some vars we need
        if ($notes != "") {
                        $notes = "<br /><br />"._NOTE." $notes\n";
            } else {
                        $notes = "";
    }

    if ("$aid" == "$informant") {
                        $content = "$thetext$notes\n";
            } else {
                        if($informant != "") {
                            $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;uname=$informant\">$informant</a> ";
                        } else {
                    $content = "$anonymous ";
                }
    $content .= "<div class=\"option\">"._WRITES." \"$thetext\" $notes</div>\n";
    }

    $posted = ""._POSTEDBY."";
    $posted .= get_author($aid);
    $posted .= " "._ON." $time $timezone ($counter "._READS.")";

//Begin Story Box
OpenTable2();
echo "<div class=\"storytitle\">$title</div>\n"
     ."<div align=\"left\" class=\"tiny\">$posted</div>\n";
echo "<div align=\"left\">\n"
     ."<a href=\"modules.php?name=News&amp;new_topic=$topic\"><img src=\"$t_image\" border=\"0\" Alt=\"$topictext\" align=\"right\" hspace=\"0\" vspace=\"0\"></a>\n"
     ."<div class=\"storycontent\">$content</div><br /><br />\n"
     ."<span class=\"note\">$preformat[notes]</span></div>\n"
     ."<br /><div align=\"right\"><span class=\"comments\">$morelink</span></div>\n";
CloseTable2();
}


function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
        global $tipath, $admin, $sid;

    $ThemeSel = get_theme();
    if (file_exists("themes/$ThemeSel/images/topics/$topicimage")) {
        $t_image = "themes/$ThemeSel/images/topics/$topicimage";
    } else {
        $t_image = "$tipath$topicimage";
    }
//Begin Article Box
OpenTable2();
    echo "<div class=\"storytitle\">$title\n";
            if ($admin) {
    echo "&nbsp; [ <a href=admin.php?op=EditStory&sid=$sid>"._EDIT."</a> | <a href=admin.php?op=RemoveStory&sid=$sid>"._DELETE."</a> ]";
            }
    echo "</div><div class=\"comments\">"._POSTEDBY."\n";
//Now format our Posted Info
            formatAidHeader($aid);
    echo " "._ON." $datetime $timezone</div>\n";

// Check if the Admin wrote this story
        if ("$aid" != "$informant") {

                // If it is not the admin someone else but who ;-)
                if($informant != "") {
                        $boxstuff = "<div class=\"storycontent\"><a href=\"modules.php?name=Your_Account&amp;op=userinfo&uname=$informant\">$informant</a>";
                         } else {
                        $boxstuff = "<div class=\"storycontent\">$anonymous";
                }

    echo "$boxstuff"._WRITES.": \"</div> ";
    echo "<div class=\"storycontent\">$thetext \"</div><br /><br />\n";
                 } else {
    echo "<a href=modules.php?name=Search&amp;query=&topic=$topic&author=><img src=\"$t_image\" border=0 Alt=\"$topictext\" align=\"right\" hspace=\"0\" vspace=\"0\"></a>\n"; 
    echo "<div class=\"storycontent\">$thetext</div><br /><br />\n";
            }
CloseTable2();
}

function themesidebox($title, $content) {
	echo "<div class=\"sidebox\"><div class=\"boxtitle\">\n";
    echo "$title<br /></div>\n";
    echo "<div class=\"sideboxcontent\">\n";
    echo "$content\n"
     ."</div></div>\n";
}
?>
