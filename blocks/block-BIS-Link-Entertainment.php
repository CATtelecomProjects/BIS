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

$content  =  "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "  <tr>";
$content  .= "    <td><img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\" /> <a ";
$content  .= "href=\"http://www.majorcineplex.com/\" target=\"_blank\"> Major Cineplex</a><br />";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\" /> <a ";
$content  .= "href=\"http://www.sfcinemacity.com/\" target=\"_blank\"> sfcinemacity<br />";
$content  .= "      </a><img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\" /> <a href=\"http://www.egv.com\" target=\"_blank\">เครือ EGV</a></td>";
$content  .= "  </tr>";
$content  .= "</table>";
?>