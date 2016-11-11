
<?
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

if ( !defined('BLOCK_FILE') ) {
    Header("Location: ../index.php");
    die();
}

global $prefix, $multilingual, $currentlang, $db, $boxTitle, $content2, $pollcomm, $user, $cookie, $userinfo;

$content  =  "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">";
$content  .= "  <TR>";
$content  .= "    <td width=\"50%\" height=\"17\" align=\"left\" class=\"2\" valign=\"middle\"><p>&nbsp;<a href=\"http://www.thaitv3.com\"><img src=\"images/logo_ch3.jpg\" width=\"30\" height=\"25\" border=\"0\" align=\"top\"></a>&nbsp;<a href=\"http://www.thaitv3.com\" target=\"_blank\">ช่อง 3</a></p></td>";
$content  .= "    <td height=\"17\" align=\"left\" valign=\"middle\" class=\"2\"><p><a href=\"http://www.prd.go.th/\"><img src=\"images/logo_nbt.gif\"  border=\"0\" align=\"top\"></a>&nbsp;<a href=\"http://www.prd.go.th/\" target=\"_blank\">ช่อง 11</a></p></td>";
$content  .= "  </TR>";
$content  .= "  <TR>";
$content  .= "    <td width=\"340\" height=\"17\" align=\"left\" valign=\"middle\" class=\"2\"><p>&nbsp;<a href=\"http://www.tv5.co.th/\"><img src=\"images/logo_ch5.jpg\" width=\"30\" height=\"25\" border=\"0\" align=\"top\"></a>&nbsp;<a href=\"http://www.tv5.co.th/\" target=\"_blank\">ช่อง 5</a></p></td>";
$content  .= "    <td width=\"355\" height=\"17\" align=\"left\" valign=\"top\" class=\"2\"><p><a href=\"http://www.mcot.net/\" target=\"_blank\"><img src=\"images/logo_ch9.jpg\" width=\"30\" height=\"25\" border=\"0\" align=\"middle\"> ช่อง 9</a></p></td>";
$content  .= "  </TR>";
$content  .= "  <TR>";
$content  .= "    <td width=\"340\" height=\"17\" align=\"left\" valign=\"middle\" class=\"2\"><p>&nbsp;<a href=\"http://www.ch7.com/\"><img src=\"images/logo_ch7.jpg\" width=\"30\" height=\"25\" border=\"0\" align=\"top\"></a>&nbsp;<a href=\"http://www.ch7.com/\" target=\"_blank\">ช่อง 7</a></p></td>";
$content  .= "    <td width=\"355\" height=\"17\" align=\"left\" valign=\"top\" class=\"2\"><p><a href=\"http://www.truevisionstv.com/\"><img src=\"images/logo_ubc.jpg\" width=\"30\" height=\"25\" border=\"0\" align=\"middle\"></a> <a href=\"http://www.truevisionstv.com/\" target=\"_blank\">True Vision</a></p></td>";
$content  .= "  </TR>";
//$content  .= "  <TR>";
//$content  .= "    <td width=\"340\" height=\"17\" align=\"left\" valign=\"middle\" class=\"2\"><p>&nbsp;<a href=\"http://www.mcot.net/\"><img src=\"images/logo_ch9.jpg\" width=\"30\" height=\"25\" border=\"0\" align=\"top\"></a> <a href=\"http://www.mcot.net/\" target=\"_blank\">ช่อง 9</a></p></td>";
//$content  .= "    <td width=\"355\" height=\"17\" align=\"left\" valign=\"top\" class=\"2\">&nbsp;</td>";
//$content  .= "  </TR>";
$content  .= "</table>";

?>
