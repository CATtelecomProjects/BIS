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
$content  .= "target=_blank> �ٹ���ҧ��ԡ���Ҥ�Ѱ</A><br>";
$content  .= "    </font> <font size=\"2\"><img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"><a href=\"http://www.nso.go.th\" target=\"_blank\"> �ӹѡ�ҹʶԵ���觪ҵ�</a><br>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.bot.or.th\" target=\"_blank\"> ��Ҥ����觻������</a><br>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.ntc.or.th\" target=\"_blank\"> ���.</a><br>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.settrade.com\" target=\"_blank\"> ���������</a><br>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <a href=\"http://www.sewu-cat.com/\" target=\"_blank\"> ���Ҿ�ç�ҹ �ʷ.</a><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A href=\"http://lexitron.nectec.or.th/\" ";
$content  .= "target=_blank>�ԡ�ѹ�����͹�Ź�</a><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.suparsit.com/index1.php \" target=_blank> ���ѧ��� � �� </A><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"></font> <A href=\"http://phonebook.tot.co.th/  \" target=_blank><font size=\"2\">�����������Ѿ�� </font></A><font size=\"2\"><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.bot.or.th/bothomepage/databank/FinMarkets/ExchangeRate/exchange_t.asp\" ";
$content  .= "target=_blank> �ѵ���š����¹�Թ��� </A><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.goldtraders.or.th/  \" target=_blank> �Ҥҷͧ��</A><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"> <A ";
$content  .= "href=\"http://www.trafficbkk.com/ \" target=_blank> ���Ǩ�Ҩ� �Ǿ.91 </A><BR>";
$content  .= "    <img src=\"images/circle03_orange.GIF\" width=\"6\" height=\"10\" border=\"0\"></font> <A ";
$content  .= "href=\"http://www.js100.com/\" target=_blank><font size=\"2\">��.100</font></A></td>";
$content  .= "  </tr>";
$content  .= "</table>";


?>