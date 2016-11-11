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
$content  .= "    <td><img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.bangkokpost.com/\" target=\"_blank\"> Bangkok Post</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.time.com/time/magazine/asia\" target=\"_blank\">Time Magazine -- Asia Ed.</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.nationmultimedia.com\" target=\"_blank\">The Nation</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.bangkokbizweek.com/ \" target=\"_blank\">กรุงเทพธุรกิจ Biz week</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.manager.co.th\" target=\"_blank\">ผู้จัดการ</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.matichon.co.th/ \" target=\"_blank\">มติชน</a><br>";
//$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.manager.co.th/mgrweekly/ \" target=\"_blank\">ผู้จัดการรายสัปดาห์</a><br>";
//$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.gotomanager.com\" target=\"_blank\">ผู้จัดการรายเดือน</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.bangkokbiznews.com\" target=\"_blank\">กรุงเทพธุรกิจ</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.nationweekend.com\" target=\"_blank\">เนชั่นสุดสัปดาห์</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.stockwave.in.th\" target=\"_blank\">กระแสหุ้น</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.tj.co.th\" target=\"_blank\">เทเลคอม เจอร์นัล</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.thairath.co.th\" target=\"_blank\">ไทยรัฐ</a><BR>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.dailynews.co.th\" target=_blank>เดลินิวส์</A><BR>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <A href=\"http://www.komchadluek.net\" target=_blank>คมชัดลึก<br>";
$content  .= "        </A><img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A href=\"http://www.komchadluek.net\" ";
$content  .= "target=_blank></A><a href=\"http://www.thannews.th.com\" target=\"_blank\">ฐานเศรษฐกิจ</a></td>";
$content  .= "  </tr>";
$content  .= "</table>";

?>
