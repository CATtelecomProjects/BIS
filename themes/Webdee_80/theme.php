<?php

/************************************************************/
/* Theme Name: PH v2.0 (Pitcher@Home)                       */
/* Theme Design: Pitcher (www.pitcher.no)                   */
/*                                                          */
/*                                                          */
/* Copyright Notice                                         */
/* - THIS THEME IS NOT RELEASED AS GPL/GNU SCRIPTING.       */
/* - Our Package name and link MUST REMAIN in the credit    */
/*   footer of all Nuke generated pages.                    */
/*   Translations are permitted, not renaming.              */
/* - This package CAN NOT be ported without written         */
/*   permission.                                            */
/* - This package CAN NOT be mirrored without written       */
/*   permission.                                            */
/* - Use of this package requires that credits to the       */
/*   original PHPNuke remain in all site generated          */
/*   page footers.                                          */
/************************************************************/

/************************************************************/
/* Theme Colors Definition                                  */
/*                                                          */
/* Define colors for your web site. $bgcolor2 is generaly   */
/* used for the tables border as you can see on OpenTable() */
/* function, $bgcolor1 is for the table background and the  */
/* other two bgcolor variables follows the same criteria.   */
/* $texcolor1 and 2 are for tables internal texts           */
/************************************************************/

$bgcolor1 = "#FFFFFF";
$bgcolor2 = "#FDF0C2";
$bgcolor3 = "#FFFFFF";
$bgcolor4 = "#FFFFFF";
$textcolor1 = "#000000";
$textcolor2 = "#FDF0C2";

include("themes/Webdee_80/tables.php");

/************************************************************/
/* Function themeheader()                                   */
/*                                                          */
/* Control the header for your site. You need to define the */
/* BODY tag and in some part of the code call the blocks    */
/* function for left side with: blocks(left);               */
/************************************************************/

function themeheader() {
    global  $admin, $user, $banners, $sitename, $slogan, $cookie, $prefix, $db, $nukeurl, $anonymous, $name, $index, $blockside, $Version_Num;


	/* Check of right block on/off */

	if (defined('INDEX_FILE') || ($index == 1)) {
		$topblock = "<td width=\"194\" height=\"12\"><img src=\"themes/Webdee_80/images/right_block_top.jpg\"></td>";
	} else {
		$topblock = "<td width=\"194\" height=\"12\" background=\"themes/Webdee_80/images/middle_block_top.jpg\"></td>";
	}
	if ($Version_Num > "7.8") {
		$showbanners = ads(0);
	} else {
			if ($banners == 1) {
			$numrows = $db->sql_numrows($db->sql_query("SELECT * FROM ".$prefix."_banner WHERE type='0' AND active='1'"));
		   /* Get a random banner if exist any. */
		   /* More efficient random stuff, thanks to Cristian Arroyo from http://www.planetalinux.com.ar */

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

		/* Check if this impression is the last one and print the banner */

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
			$showbanners = "<a href=\"banners.php?op=click&bid=$bid\" target=\"_blank\"><img src=\"$imageurl\" border=\"0\" alt='$alttext' title='$alttext'></a>";
			}
		}
	}
    cookiedecode($user);
    $username = $cookie[1];
    if ($username == "") {
        $username = "Anonymous";
    }

    echo "<body leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\">\n";
    //NavTap();
    if ($username == "Anonymous") {
        $theuser = "&nbsp;&nbsp;<a href=\"modules.php?name=Your_Account&op=new_user\">Create an account";
    } else {
        $theuser = "&nbsp;&nbsp;Welcome $username!";
    }
        $public_msg = public_message();
    $tmpl_file = "themes/Webdee_80/header.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
    $blockside="l";
  if ($name=='tutorial') { 
} 
else
	if ($name=='Forums') { 
} 
else
		if ($name=='Private_Messages') { 
} 
else
			if ($name=='My_eGallery') { 
} 
else
	{ 
blocks(left); 
} 

    $tmpl_file = "themes/Webdee_80/left_center.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;

}
/************************************************************/
/* Function themefooter()                                   */
/*                                                          */
/* Control the footer for your site. You don't need to      */
/* close BODY and HTML tags at the end. In some part call   */
/* the function for right blocks with: blocks(right);       */
/* Also, $index variable need to be global and is used to   */
/* determine if the page your're viewing is the Homepage or */
/* and internal one.                                        */
/************************************************************/

function themefooter() {
    global $index, $foot1, $foot2, $foot3, $foot4, $copyright, $totaltime, $footer_message, $blockside;
    if (defined('INDEX_FILE') || ($index == 1)) {
        $tmpl_file = "themes/Webdee_80/center_right.html";
        $thefile = implode("", file($tmpl_file));
        $thefile = addslashes($thefile);
        $thefile = "\$r_file=\"".$thefile."\";";
        eval($thefile);
        print $r_file;
        $blockside="r";
        blocks(right);
     }
    $footer_message = "$foot1<br>$foot2<br>$foot3<br>$foot4";
    $tmpl_file = "themes/Webdee_80/footer.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}


/************************************************************/
/* Function themeindex()                                    */
/*                                                          */
/* This function format the stories on the Homepage         */
/************************************************************/

function themeindex ($aid, $informant, $time, $title, $counter, $topic, $thetext, $notes, $morelink, $topicname, $topicimage, $topictext) {
    global $anonymous, $tipath;

    if ($notes != "") {
        $notes = "<br><br><b>"._NOTE."</b> $notes\n";
    } else {
        $notes = "";
    }
    if ("$aid" == "$informant") {
        $content = "$thetext$notes\n";
    } else {
        if($informant != "") {
            $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant\">$informant</a> ";
        } else {
            $content = "$anonymous ";
        }
        $content .= ""._WRITES.": $thetext$notes\n";
    }
    $posted = ""._POSTEDBY." ";
    $posted .= get_author($aid);
    $posted .= " "._ON." $time $timezone ($counter "._READS.")";
    $tmpl_file = "themes/Webdee_80/story_home.html";
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}

/************************************************************/
/* Function themearticle()                                  */
/*                                                          */
/* This function format the stories on the story page, when */
/* you click on that "Read More..." link in the home        */
/************************************************************/

function themearticle ($aid, $informant, $datetime, $title, $thetext, $topic, $topicname, $topicimage, $topictext) {
    global $admin, $sid, $tipath;
    $posted = ""._POSTEDON." $datetime "._BY." ";
    $posted .= get_author($aid);
    if ($notes != "") {
        $notes = "<br><br><b>"._NOTE."</b> $notes\n";
    } else {
        $notes = "";
    }
    if ("$aid" == "$informant") {
        $content = "$thetext$notes\n";
    } else {
        if($informant != "") {
            $content = "<a href=\"modules.php?name=Your_Account&amp;op=userinfo&amp;username=$informant\">$informant</a> ";
        } else {
            $content = "$anonymous ";
        }
        $content .= ""._WRITES.": $thetext$notes\n";
    }
    $tmpl_file = "themes/Webdee_80/story_page.html";

    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;

}

/************************************************************/
/* Function themesidebox()                                  */
/*                                                          */
/* Control look of your blocks. Just simple.                */
/************************************************************/

function themesidebox($title, $content) {
	global $blockside;
	if ($blockside=="l") {
    	$tmpl_file = "themes/Webdee_80/blocks_l.html";
    } else {
    	$tmpl_file = "themes/Webdee_80/blocks_r.html";
    }
    $thefile = implode("", file($tmpl_file));
    $thefile = addslashes($thefile);
    $thefile = "\$r_file=\"".$thefile."\";";
    eval($thefile);
    print $r_file;
}


?>