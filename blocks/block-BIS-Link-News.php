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
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.bangkokbizweek.com/ \" target=\"_blank\">��ا෾��áԨ Biz week</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.manager.co.th\" target=\"_blank\">���Ѵ���</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.matichon.co.th/ \" target=\"_blank\">��Ԫ�</a><br>";
//$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.manager.co.th/mgrweekly/ \" target=\"_blank\">���Ѵ�������ѻ����</a><br>";
//$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.gotomanager.com\" target=\"_blank\">���Ѵ��������͹</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.bangkokbiznews.com\" target=\"_blank\">��ا෾��áԨ</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.nationweekend.com\" target=\"_blank\">๪���ش�ѻ����</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.stockwave.in.th\" target=\"_blank\">��������</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <a href=\"http://www.tj.co.th\" target=\"_blank\">��Ť�� ������</a><br>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.thairath.co.th\" target=\"_blank\">���Ѱ</a><BR>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.dailynews.co.th\" target=_blank>��Թ����</A><BR>";
$content  .= "      <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\">  <A href=\"http://www.komchadluek.net\" target=_blank>���Ѵ�֡<br>";
$content  .= "        </A><img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A href=\"http://www.komchadluek.net\" ";
$content  .= "target=_blank></A><a href=\"http://www.thannews.th.com\" target=\"_blank\">�ҹ���ɰ�Ԩ</a></td>";
$content  .= "  </tr>";
$content  .= "</table>";

?>
