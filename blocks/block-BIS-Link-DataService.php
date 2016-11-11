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
$content  .= "    <td><font size=\"2\"><img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.ecitizen.go.th/  \" ";
$content  .= "target=_blank> ศูนย์กลางบริการภาครัฐ</A><br>";
$content  .= "    </font> <font size=\"2\"><img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"><a href=\"http://www.nso.go.th\" target=\"_blank\"> สำนักงานสถิติแห่งชาติ</a><br>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.bot.or.th\" target=\"_blank\"> ธนาคารแห่งประเทศไทย</a><br>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.ntc.or.th\" target=\"_blank\"> กทช.</a><br>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.settrade.com\" target=\"_blank\"> ข้อมูลหุ้น</a><br>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.sewu-cat.com/\" target=\"_blank\"> สหภาพแรงงาน กสท.</a><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A href=\"http://lexitron.nectec.or.th/\" ";
$content  .= "target=_blank>ดิกชันนารีออนไลน์</a><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.suparsit.com/index1.php \" target=_blank> แปลอังกฤษ – ไทย </A><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"></font> <A href=\"http://phonebook.tot.co.th/  \" target=_blank><font size=\"2\">ค้นหาเบอร์โทรศัพท์ </font></A><font size=\"2\"><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.bot.or.th/bothomepage/databank/FinMarkets/ExchangeRate/exchange_t.asp\" ";
$content  .= "target=_blank> อัตราแลกเปลี่ยนเงินตรา </A><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.goldtraders.or.th/  \" target=_blank> ราคาทองคำ</A><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.trafficbkk.com/ \" target=_blank> ข่าวจราจร สวพ.91 </A><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"></font> <A ";
$content  .= "href=\"http://www.js100.com/\" target=_blank><font size=\"2\">จส.100</font></A></td>";
$content  .= "  </tr>";
$content  .= "</table>";


?>