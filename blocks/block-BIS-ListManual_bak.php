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
/*
$content  =  "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"5\">";
$content  .= "  <tr>";
$content  .= "    <td colspan=\"2\" align=\"center\"><a href=\"http://infodept.cattelecom.com/kasikorn/index.php\" target=\"_balnk\"><img height=\"80\" src=\"./images/logo_kasikorn.gif\" width=\"460\" border=\"1\" /></a></td>";
$content  .= "  </tr>";
$content  .= "  <tr>";
$content  .= "    <td colspan=\"2\" align=\"center\" style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "    </tr>";
$content  .= "  <tr>";
$content  .= "    <td align=\"center\">&nbsp;</td>";
$content  .= "    <td align=\"left\" valign=\"top\">&nbsp;</td>";
$content  .= "  </tr>";
$content  .= "  <tr>";
$content  .= "    <td width=\"24%\" align=\"center\"><img height=\"90\" src=\"images/Img_highlight3.jpg\" width=\"150\" align=\"middle\" border=\"0\" /></td>";
$content  .= "    <td width=\"76%\" align=\"left\" valign=\"top\"><strong><img src=\"./images/arrowT.gif\" width=\"11\" height=\"9\" /> �����͡����ҹ�к���õԴ���Ἱ�ҹ/�ç���</strong><br>";
$content  .= "    Ver. 4 - Update 11 �ԧ�Ҥ� 2548<br>";
$content  .= "    <br>    <img src=\"./images/download.gif\" title=\"Download\" width=\"28\" height=\"28\" border=\"0\" align=\"absmiddle\" /> <a href=\"http://infodept.cattelecom.com/images2/Displaynew_4.pdf\">Click here to download</a></td>";
$content  .= "  </tr>";
$content  .= "  <tr>";
$content  .= "    <td colspan=\"2\" align=\"center\"   style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "    </tr>";
$content  .= "  <tr>";
$content  .= "    <td align=\"center\">&nbsp;</td>";
$content  .= "    <td align=\"left\" valign=\"top\">&nbsp;</td>";
$content  .= "  </tr>";
$content  .= "  <tr>";
$content  .= "    <td align=\"center\"><img height=\"90\" src=\"images/Img_highlight2.jpg\" width=\"150\" align=\"middle\" border=\"0\" /></td>";
$content  .= "    <td align=\"left\" valign=\"top\"><strong><img src=\"./images/arrowT.gif\" width=\"11\" height=\"9\" /> �����͡����ҹ�к����ʹ�����ͼ�������   (EIS/MIS)</strong><br>";
$content  .= "      <br>      ";
$content  .= "      <a href=\"http://bis.cattelecom.com/eisweb/user_manual.htm\" target=\"_blank\"><img src=\"./images/download.gif\" title=\"Download\" width=\"28\" height=\"28\" border=\"0\" align=\"absmiddle\" /></a> <a href=\"http://bis.cattelecom.com/eisweb/user_manual.htm\" target=\"_blank\">Click here to download</a><br></td>";
$content  .= "  </tr>";
$content  .= "  <tr>";
$content  .= "    <td colspan=\"2\" align=\"center\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "    </tr>";
$content  .= "  <tr>";
$content  .= "    <td align=\"center\">&nbsp;</td>";
$content  .= "    <td align=\"left\" valign=\"top\">&nbsp;</td>";
$content  .= "  </tr>";
$content  .= "  <tr>";
$content  .= "    <td align=\"center\"><img height=\"130\" src=\"images/java.gif\" width=\"100\" align=\"middle\" border=\"0\" /></td>";
$content  .= "    <td align=\"left\" valign=\"top\"><strong><img src=\"./images/arrowT.gif\" width=\"11\" height=\"9\" /> ����� Java</strong><br>";
$content  .= "    <br>    ";
$content  .= "      <img src=\"./images/usermanual.gif\" width=\"28\" height=\"28\" align=\"absmiddle\" /> <a href=\"./uploads/Files/installjava_manual.pdf\">��ǹ���Ŵ�����͡�õԴ���</a> <br>";
$content  .= "      <a href=\"http://bis.cattelecom.com/eisweb/user_manual.htm\" target=\"_blank\"><img src=\"./images/download.gif\" title=\"Download\" width=\"28\" height=\"28\" border=\"0\" align=\"absmiddle\" /></a> <a href=\"http://bis.cattelecom.com/eisweb/msjavx86.exe\" target=\"_blank\">Click here to download</a></td>";
$content  .= "  </tr>";
$content  .= "  <tr>";
$content  .= "    <td colspan=\"2\" align=\"center\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "    </tr>";
$content  .= "</table>";
*/
$content  =  "<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"3\">";
$content  .= "<tr>";
//$content  .= " <td width=\"15%\" rowspan=\"4\" align=\"center\" valign=\"top\">&nbsp;</td>";
//$content  .= " <td align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= " <td colspan=\"2\" align=\"left\" valign=\"top\"><strong><img src=\"./images/arrowT.gif\" width=\"11\" height=\"9\" /> ��ǹ���Ŵ��������ç��� Data Warehouse/Data Mining (DW/DM)</strong></td>";
$content  .= " </tr>";
$content  .= "<tr>";
//$content  .= " <td align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "<td align=\"center\" valign=\"top\"><strong><span style='color:#FF8000; font-size:40px'>DW/DM</span></strong></td>";
$content  .= "<td align=\"left\"  valign=\"top\"><img src=\"./images/usermanual.gif\"  align=\"absmiddle\" /> <a href=\"../usermanual/DW-DM/Phase2/WebPortal_Usermaunal_DWDM_V012.pdf\" target=\"blank\">��ǹ���Ŵ�����͡����ҹ�к� (pdf)</a> <img src='images/icon_new.gif'><br>";
//$content  .= "<img src=\"./images/usermanual.gif\" title=\"Download\"  border=\"0\" align=\"absmiddle\"/> <a href=\"../bsc-kpi/Usermanual/KPI_Manual_for_User.zip\">��ǹ���Ŵ�����͡����ҹ�к� (zip)</a><br>";
$content  .= "<img src=\"./images/ppt.gif\" title=\"Download\"  border=\"0\" align=\"absmiddle\"/> <a href=\"../usermanual/DW-DM/Phase2/Slide_for_Web_Report.pdf\" target='_blank'>�͡��ú�����ͺ�������ҹ</a> <img src='images/icon_new.gif'>";
$content  .= "</td>";
$content  .= "</tr>";

$content  .= "<tr>";
$content  .= "<td colspan=\"5\" align=\"center\" style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "</tr>";


$content  .= "<tr>";
//$content  .= " <td width=\"15%\" rowspan=\"4\" align=\"center\" valign=\"top\">&nbsp;</td>";
//$content  .= " <td align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= " <td colspan=\"2\" align=\"left\" valign=\"top\"><strong><img src=\"./images/arrowT.gif\" width=\"11\" height=\"9\" /> ��ǹ���Ŵ�����͡����ҹ �к� CAT-KPIs (����Ѻ User)</strong></td>";
$content  .= " </tr>";
$content  .= "<tr>";
//$content  .= " <td align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "<td align=\"center\" valign=\"top\"><img  src=\"images/kpi-logo.gif\"  align=\"middle\" border=\"0\" /></td>";
$content  .= "<td align=\"left\"  valign=\"top\"><img src=\"./images/usermanual.gif\"  align=\"absmiddle\" /> <a href=\"../cat-kpi/downloads/KPI_Manual_for_User.pdf\" target=\"blank\">��ǹ���Ŵ�����͡����ҹ�к� (pdf)</a> <br>";
//$content  .= "<img src=\"./images/usermanual.gif\" title=\"Download\"  border=\"0\" align=\"absmiddle\"/> <a href=\"../bsc-kpi/Usermanual/KPI_Manual_for_User.zip\">��ǹ���Ŵ�����͡����ҹ�к� (zip)</a><br>";
$content  .= "<img src=\"./images/ppt.gif\" title=\"Download\"  border=\"0\" align=\"absmiddle\"/> <a href=\"../cat-kpi/downloads/present.ppt\"  target='_blank'>�͡��ú�����ͺ�������ҹ</a> <img src='images/icon_new.gif'>";
$content  .= "</td>";
$content  .= "</tr>";

$content  .= "<tr>";
$content  .= "<td colspan=\"5\" align=\"center\" style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "</tr>";





/* Frequency Manual*/
$content  .= "<tr>";
//$content  .= " <td width=\"15%\" rowspan=\"4\" align=\"center\" valign=\"top\">&nbsp;</td>";
//$content  .= " <td align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= " <td colspan=\"2\" align=\"left\" valign=\"top\"><strong><img src=\"./images/arrowT.gif\" width=\"11\" height=\"9\" /> ��ǹ���Ŵ�����͡����ҹ �к��ҹ��������Է�ؤ��Ҥ� �ʷ (Frequency Report)</strong></td>";
$content  .= " </tr>";
$content  .= "<tr>";
//$content  .= " <td align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "<td align=\"center\" valign=\"top\"><img  src=\"images/freq-logo.gif\"  align=\"middle\" border=\"0\" /></td>";
$content  .= "<td align=\"left\"  valign=\"top\"><img src=\"./images/usermanual.gif\"  align=\"absmiddle\" /> <a href=\"usermanual/Frequency/FrequencyUsageSystem_Manual_1.0.pdf\" target=\"blank\">��ǹ���Ŵ�����͡����ҹ�к�</a> <img src='images/icon_new.gif'>";
$content  .= "</td>";
$content  .= "</tr>";

$content  .= "<tr>";
$content  .= "<td colspan=\"5\" align=\"center\" style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "</tr>";

$content  .= "<tr>";
$content  .= "<td colspan=\"5\" align=\"center\"><br><a href=\"/RentalValidation/?username=".$_SESSION[usr]."\" target=\"blank\"><img height=\"80\" src=\"./images/links/mis2.gif\" width=\"460\" border=\"1\" /></a></td>";
$content  .= "</tr>";

$content  .= "<tr>";
$content  .= "<td colspan=\"5\" align=\"center\"><a href=\"http://infodept.cattelecom.com/kasikorn/index.php\" target=\"_balnk\"><img height=\"80\" src=\"./images/logo_kasikorn.gif\" width=\"460\" border=\"1\" /></a></td>";
$content  .= "</tr>";

$content  .= "<tr>";
$content  .= "<td colspan=\"5\" align=\"center\" style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "</tr>";

/*
$content  .= "<tr>";
$content  .= " <td colspan=\"2\" align=\"left\" valign=\"top\"><strong><img src=\"./images/arrowT.gif\" width=\"11\" height=\"9\" /> �����͡����ҹ�к� Datawarehouse / Data Mining</strong></td>";
$content  .= " <td align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= " <td colspan=\"2\" align=\"left\" valign=\"top\"><strong><img src=\"./images/arrowT.gif\" width=\"11\" height=\"9\" /> �����͡����ҹ�к����ʹ�����ͼ�������   (EIS/MIS)</strong></td>";
$content  .= " </tr>";
$content  .= "<tr>";
$content  .= "<td align=\"center\" valign=\"top\"><img src=\"./images/img_data_warehouse.gif\" width=\"135\" height=\"103\"></td>";
$content  .= "<td width=\"40%\" rowspan=\"5\" align=\"left\" valign=\"top\">";
$content  .= "<img src=\"./images/usermanual.gif\" title=\"�������Ըջ�Ժѵ�㹡�ô����к���ѧ������/����ͧ������ �ͧ �ʷ
(Data Warehouse / Data Mining)\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/DWManual.pdf\"  target=\"_blank\">�������Ըջ�Ժѵ�㹡�ô����к���ѧ������/����ͧ������ �ͧ �ʷ
(Data Warehouse / Data Mining)</a> <br>";
$content  .= "<img src=\"./images/icons-download.gif\" title=\"�͡��� Change Request Form (Version 2.1)\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/Change Request Form_V2.1.xls\"  target=\"_blank\">�͡��� Change Request Form (Version 2.1)</a><br>";
$content  .= "<img src=\"./images/usermanual.gif\" title=\"�����͡�õԴ��� SAS Microsoft Add In\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/User_Manual_for_setup_SAS_Microsoft_Office_Add-In.pdf\"  target=\"_blank\">�����͡�õԴ��� SAS Microsoft Add In</a><br>";
$content  .= " <img src=\"./images/download.gif\" title=\"Download\"  border=\"0\" align=\"absmiddle\"  width=\"20\" height=\"20\"/> <a href=\"./usermanual/DW-DM/SAS-Microsoft-AddIn.zip\" target=\"_blank\">��ǹ���Ŵ����� SAS Microsoft Add In</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�����͡����ҹ����� SAS Web Portal ����Ѻ����� Modeller\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/User Manual SAS Web Portal for Modeller v1.1.pdf\" target=\"_blank\">�����͡����ҹ SAS Web Portal ����Ѻ����� Modeller</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�����͡����ҹ����� SAS Enterprise Guide\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/SAS_Enterprise_Guide_CAT.pdf\" target=\"_blank\">�����͡����ҹ����� SAS Enterprise Guide</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�����͡����ҹ����Ѻ�����ҹ BSC\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/%a4%d9%e8%c1%d7%cd%a1%d2%c3%e3%aa%e9%a7%d2%b9%ca%d3%cb%c3%d1%ba%bc%d9%e9%e3%aa%e9%a7%d2%b9%20BSC.pdf\" target=\"_blank\">�����͡����ҹ����Ѻ�����ҹ BSC</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�����͡����ҹ����Ѻ�����ҹ NW\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/%a4%d9%e8%c1%d7%cd%a1%d2%c3%e3%aa%e9%a7%d2%b9%ca%d3%cb%c3%d1%ba%bc%d9%e9%e3%aa%e9%a7%d2%b9%20NW.pdf\" target=\"_blank\">�����͡����ҹ����Ѻ�����ҹ NW</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�����͡����ҹ����Ѻ�����ҹ FI\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/%a4%d9%e8%c1%d7%cd%a1%d2%c3%e3%aa%e9%a7%d2%b9%ca%d3%cb%c3%d1%ba%bc%d9%e9%e3%aa%e9%a7%d2%b9%20FI.pdf\" target=\"_blank\">�����͡����ҹ����Ѻ�����ҹ FI</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�����͡����ҹ����Ѻ�����ҹ CM\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/%a4%d9%e8%c1%d7%cd%a1%d2%c3%e3%aa%e9%a7%d2%b9%ca%d3%cb%c3%d1%ba%bc%d9%e9%e3%aa%e9%a7%d2%b9%20CM.pdf\" target=\"_blank\">�����͡����ҹ����Ѻ�����ҹ CM</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�����͡����ҹ����Ѻ������Ң����� BSC\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/%a4%d9%e8%c1%d7%cd%a1%d2%c3%e3%aa%e9%a7%d2%b9%ca%d3%cb%c3%d1%ba%bc%d9%e9%b9%d3%e0%a2%e9%d2%a2%e9%cd%c1%d9%c5%20BSC.pdf\" target=\"_blank\">�����͡����ҹ����Ѻ������Ң����� BSC</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�����͡����ҹ����Ѻ������Ң����� NW\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/%a4%d9%e8%c1%d7%cd%a1%d2%c3%e3%aa%e9%a7%d2%b9%ca%d3%cb%c3%d1%ba%bc%d9%e9%b9%d3%e0%a2%e9%d2%a2%e9%cd%c1%d9%c5%20NW.pdf\" target=\"_blank\">�����͡����ҹ����Ѻ������Ң����� NW</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�����͡����ҹ����Ѻ������Ң����� FI\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/%a4%d9%e8%c1%d7%cd%a1%d2%c3%e3%aa%e9%a7%d2%b9%ca%d3%cb%c3%d1%ba%bc%d9%e9%b9%d3%e0%a2%e9%d2%a2%e9%cd%c1%d9%c5%20FI.pdf\" target=\"_blank\">�����͡����ҹ����Ѻ������Ң����� FI</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�����͡����ҹ����Ѻ������Ң����� CM\"  align=\"absmiddle\" /> <a href=\"http://bis.cattelecom.com/usermanual/DW-DM/%a4%d9%e8%c1%d7%cd%a1%d2%c3%e3%aa%e9%a7%d2%b9%ca%d3%cb%c3%d1%ba%bc%d9%e9%b9%d3%e0%a2%e9%d2%a2%e9%cd%c1%d9%c5%20CM.pdf\" target=\"_blank\">�����͡����ҹ����Ѻ������Ң����� CM</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"��������´�����ҹ��§ҹ FI\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/%c3%d2%c2%c5%d0%e0%cd%d5%c2%b4%a1%d2%c3%e3%aa%e9%a7%d2%b9%c3%d2%c2%a7%d2%b9%20FI.pdf\" target=\"_blank\">��������´�����ҹ��§ҹ FI</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�͡��ä����͡�ù���Ң����� - FI\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/User_Manual_For_WebbaseDataEntry_FI(2010-08-03).pdf\" target=\"_blank\">�͡��ä����͡�ù���Ң����� - FI</a><br>";
$content  .= " <img src=\"./images/usermanual.gif\" title=\"�͡��ä����͡�ù���Ң����� - CM\"  align=\"absmiddle\" /> <a href=\"./usermanual/DW-DM/User_Manual_For_WebbaseDataEntry_CM_2010-09-13.pdf\" target=\"_blank\">�͡��ä����͡�ù���Ң����� - CM</a> </td>";
$content  .= "<td align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "<td align=\"center\" valign=\"top\"><img height=\"82\" src=\"images/Img_highlight3.jpg\" width=\"138\" align=\"middle\" border=\"0\" /></td>";
$content  .= "<td width=\"29%\" align=\"left\" valign=\"top\"><img src=\"./images/usermanual.gif\" title=\"Download\"  border=\"0\" align=\"absmiddle\"/> <a href=\"http://bis.cattelecom.com/eisweb/user_manual.htm\" target=\"_blank\">Click here to download</a></td>";
$content  .= "</tr>";
$content  .= "<tr>";
$content  .= " <td width=\"15%\" rowspan=\"4\" align=\"center\" valign=\"top\">&nbsp;</td>";
$content  .= " <td align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= " <td colspan=\"2\" align=\"left\" valign=\"top\"><strong><img src=\"./images/arrowT.gif\" width=\"11\" height=\"9\" /> ��ǹ���Ŵ����� Java  (JRE) ����Ѻ����§ҹ EIS</strong></td>";
$content  .= " </tr>";
$content  .= "<tr>";
$content  .= " <td align=\"left\" valign=\"top\"   style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "<td align=\"center\" valign=\"top\"><img height=\"130\" src=\"images/java.gif\" width=\"100\" align=\"middle\" border=\"0\" /></td>";
$content  .= "<td align=\"left\" valign=\"top\"><img src=\"./images/usermanual.gif\"  align=\"absmiddle\" /> <a href=\"uploads/Files/installjava_manual.pdf\">��ǹ���Ŵ�����͡�õԴ���</a> <br>";
$content  .= "<img src=\"./images/download.gif\" title=\"Download\"  border=\"0\" align=\"absmiddle\"  width=\"20\" height=\"20\" /> <a href=\"http://bis.cattelecom.com/eisweb/msjavx86.exe\" target=\"_blank\">Click here to download</a><br></td>";
$content  .= "</tr>";
*/
/////


// Mis2
/*if(isset($_SESSION[usr])){
$content  .= "<tr>";
$content  .= " <td  colspan=\"2\" align=\"left\" valign=\"top\" align=\"left\"><strong><img src=\"./images/arrowT.gif\" width=\"11\" height=\"9\" /> MIS 2</strong>&nbsp;&nbsp;&nbsp;&nbsp;";
$content  .= "<img src=\"./images/view.gif\" align=\"absmiddle\" /> <a href=\"/RentalValidation/?username=".$_SESSION[usr]."\" target=\"blank\">��Ǩ�ͺ�ٻẺ�����Ť�����</a></td>";
$content  .= " <td>&nbsp;</td>";
$content  .= " <td>&nbsp;</td>";
$content  .= " <td>&nbsp;</td>";
}*/

/////

/*
$content  .= "<tr>";
$content  .= " <td align=\"left\" valign=\"top\"   style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= " <td colspan=\"2\" align=\"left\" valign=\"top\"><strong>&nbsp;</td>";
$content  .= " </tr>";

$content  .= "<tr>";
$content  .= " <td align=\"left\" valign=\"top\"   style=\"padding:2px 0px 2px 0px; border-right:1px dotted #C0C0C0\">&nbsp;</td>";
$content  .= "<td align=\"center\" valign=\"top\">&nbsp;</td>";
$content  .= "<td align=\"left\" valign=\"top\">&nbsp; <br>";
$content  .= "&nbsp;<br></td>";
$content  .= "</tr>";
*/
$content  .= "</table>";
?>