
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
$content  .= "    <td><img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.livescore.com/\" target=_blank> Live score</A><BR>      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.siamsport.co.th\" target=_blank> สยามสปอร์ต</A><BR>      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.kickoff.in.th/\" target=_blank> Kickoff</A></td>";
$content  .= "  </tr>";
$content  .= "</table>";
?>
