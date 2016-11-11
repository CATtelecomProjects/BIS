	<?php
/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2006 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

if ( !defined('BLOCK_FILE') ) {
    Header("Location: ../index.php");
    die();
}



global $prefix, $multilingual, $currentlang, $db, $boxTitle, $content2, $pollcomm, $user, $cookie, $userinfo;

if (isset($_SESSION['usr']) && $_SESSION['status'] !="0"){
?>
<!--
<script language="javascript" src="../../includes/ajax/_class.js"></script>
<script language="javascript" src="../../includes/ajax/ajax.js"></script>
-->
<script language="JavaScript">
<!--


	function confirmLogout(sel){
		
		if(sel){
			// Confirmed message, i.e. clicked on "Yes"
			//alert('Message confirmed');
			window.location = 'modules.php?name=Login&op=Logout';
		}else{
			// Clicked on "No"
			closeMessage();
			return false;
		}
	}


function fullscreen(url) {
	  w = screen.availWidth-10;
	  h = screen.availHeight-20;
	  features = "width="+w+",height="+h;
	  features += ",left=0,top=0,screenX=0,screenY=0,menubar=0,resizable=0,scrollbars=1,status=0,titlebar=0,location=0,toolbar=0";
	
window.open(url, "", features);
		
}

function infodept()
{
	ch = 0;
	for (i=0;i<=(main.p.value.length-1);i++)
	{
		tmp_str = main.p.value;
		tmp_str2 = tmp_str.charAt(i);
		str_ch = tmp_str2.toUpperCase();
		if (	 str_ch == "I") 
		{
			ch = 1;
			SaveEvent('sysname=INFODEPT&denied=1','divLoadEventInfodept');
			window.location="CntUsr.php?select=I";
		}		
	}
if (ch == 0)
		{
			SaveEvent('sysname=INFODEPT&denied=0','divLoadEventInfodept');
			alert('������Է������ Infodept');			
		}
}

function eis()
{
	ch = 0;
	for (i=0;i<=(main.p.value.length-1);i++)
	{
		tmp_str = main.p.value;
		tmp_str2 = tmp_str.charAt(i);
		str_ch = tmp_str2.toUpperCase();
		if (	 str_ch == "E") 
		{
			ch = 1;
			SaveEvent('sysname=EIS&denied=1','divLoadEventEIS');
			window.location="CntUsr.php?select=E";
		}		
	}
if (ch == 0)
		{
			SaveEvent('sysname=EIS&denied=0','divLoadEventEIS');
			alert('������Է������ EIS');
		}
}

function stat()
{
	ch = 0;
	for (i=0;i<=(main.p.value.length-1);i++)
	{
		tmp_str = main.p.value;
		tmp_str2 = tmp_str.charAt(i);
		str_ch = tmp_str2.toUpperCase();
		if (	 str_ch == "S") 
		{
			ch = 1;
			SaveEvent('sysname=STATREGION&denied=1','divLoadEventStatregion');
			window.location="CntUsr.php?select=S";
		}		
	}
if (ch == 0)
		{
			SaveEvent('sysname=STATREGION&denied=0','divLoadEventStatregion');
			alert('������Է������ Statregion');
		}
}


//function dawich()
//{
//	ch = 0;
//	for (i=0;i<=(main.p.value.length-1);i++)
//	{
//		tmp_str = main.p.value;
//		tmp_str2 = tmp_str.charAt(i);
//		str_ch = tmp_str2.toUpperCase();
//		if (	 str_ch == "D") 
//		{
//			ch = 1;
//			window.location="CntUsr.php?select=D";
//		}		
//	}
//if (ch == 0)
//		{
//			alert('������Է������ Dawich');
//		}
//}

//function kpi()
//{
//	ch = 0;
//	for (i=0;i<=(main.p.value.length-1);i++)
//	{
//		tmp_str = main.p.value;
//		tmp_str2 = tmp_str.charAt(i);
//		str_ch = tmp_str2.toUpperCase();
//		if (	 str_ch == "K") 
//		{
//			ch = 1;
//			window.location="CntUsr.php?select=K";
//		}		
//	}
//if (ch == 0)
//		{
//			alert('������Է������ Strategy Action-KPIs');
//		}
//}

function tris()
{
	ch = 0;
	for (i=0;i<=(main.p.value.length-1);i++)
	{
		tmp_str = main.p.value;
		tmp_str2 = tmp_str.charAt(i);
		str_ch = tmp_str2.toUpperCase();
		if (	 str_ch == "T") 
		{
			ch = 1;
			SaveEvent('sysname=TRIS&denied=1','divLoadEventTris');
			window.location="CntUsr.php?select=T";
		}		
	}
if (ch == 0)
		{
			SaveEvent('sysname=TRIS&denied=0','divLoadEventTris');
			alert('������Է������ TRIS');
		}
}

function dw_DWPortal()
{
	ch = 0;
	for (i=0;i<=(main.p.value.length-1);i++)
	{
		tmp_str = main.p.value;
		tmp_str2 = tmp_str.charAt(i);
		str_ch = tmp_str2.toUpperCase();
		if (	 str_ch == "P") 
		{
			ch = 1;
			SaveEvent('sysname=DW/DM Web Portal&denied=1','divLoadEventPortal');
			window.location="CntUsr.php?select=P";
			//window.location="http://dw-webreport.cattelecom.com:7001/Portal/logon.do?userid=<?=$_SESSION['usr']?>&password=<?=$_SESSION['pass_dw']?>";
		}		
	}
if (ch == 0)
		{
			SaveEvent('sysname=DW/DM Web Portal&denied=0','divLoadEventPortal');
			alert('������Է����������§ҹ�к���ѧ������/����ͧ������');
		}
}

function dw_WebStudio()
{
	ch = 0;
	for (i=0;i<=(main.p.value.length-1);i++)
	{
		tmp_str = main.p.value;
		tmp_str2 = tmp_str.charAt(i);
		str_ch = tmp_str2.toUpperCase();
		if (	 str_ch == "R") 
		{
			ch = 1;		
			SaveEvent('sysname=DW/DM Web Report Studio&denied=1','divLoadEventReport');
			window.location="CntUsr.php?select=R";
			//window.location="http://dw-webreport.cattelecom.com:7001/SASWebReportStudio/logon.do?domain=DefaultAuth&username=<?=$_SESSION['usr']?>&password=<?=$_SESSION['pass_dw']?>";
		}		
	}
if (ch == 0)
		{
		SaveEvent('sysname=DW/DM Web Report Studio&denied=0','divLoadEventReport');
			alert('������Է�����Ҵ�/�����§ҹ�к���ѧ������/����ͧ������');
		}
}

function dw_entry()
{
	ch = 0;
	for (i=0;i<=(main.p.value.length-1);i++)
	{
		tmp_str = main.p.value;
		tmp_str2 = tmp_str.charAt(i);
		str_ch = tmp_str2.toUpperCase();
		if (	 str_ch == "W") 
		{
			ch = 1;
			SaveEvent('sysname=DW/DM Web Data Entry&denied=1','divLoadEventEntry');
			window.location="CntUsr.php?select=W";
			//window.location="http://dw-webentry.cattelecom.com:8080/catedu/common/do_login.jsp?username=<?=$_SESSION['usr']?>&password=<?=$_SESSION['pass_dw']?>";
			
		}		
	}
if (ch == 0)
		{
			SaveEvent('sysname=DW/DM Web Data Entry&denied=0','divLoadEventEntry');
			alert('������Է��������ѹ�֡�������к���ѧ������/����ͧ������');
		}
}


//function confirmLogout(){
//	if(confirm("��ͧ����͡�ҡ�к� �� ���� ��� ?")){
//		window.location = "modules.php?name=Login&op=Logout";
//	}else{
//		return false;
//	}
	//}


// -->
</script>








<?
//if (isset($_SESSION['usr'])){
	if($_SESSION['desc']==""){ $userOnline = $_SESSION['usr']; }else{  $userOnline = $_SESSION['desc']; }
	if($_SESSION['lastlogin']==""){ $lastLogin ="��辺������"; }else{ $lastLogin = datethaiTime($_SESSION['lastlogin']); } 
	$WelcomeMess = "�Թ�յ�͹�Ѻ <br><br> <b><font color='red'>".$userOnline."</b></font>";
//}
$content  =  "<style type=\"text/css\">";
$content  .= "<!--";
$content  .= ".textHead {font-size: 13px; font-weight:bold }";
$content  .= ".textSubHead {font-size: 11px; color:#777777}";
$content  .= "-->";
$content  .= "</style>";
//$content  .= "<BODY BGCOLOR= LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>";
$content  .= "<form action=\"\" name=\"main\">";
$content .=  "<table width=\"100%\" border=\"0\"  cellpadding=\"0\" cellspacing=\"0\">";
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"center\" style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;border-top:1px dotted #C0C0C0;border-left:1px dotted #C0C0C0;border-right:1px dotted #C0C0C0\" bgcolor=\"\"><img src=\"./images/homeusers.gif\" /><br>$WelcomeMess";
$content  .= "    <table width=\"100%\" border=\"0\" cellspacing=\"3\" cellpadding=\"3\">";
$content  .= "      <tr>";
$content  .= "        <td>";
$content  .= "   <br>&nbsp;<img src=\"images/icon-information.gif\" align=\"absmiddle\" border=\"0\"><a href=\"#\" onclick=\"displayMessage('./usermanagement/listUserDetail.php?username=".$_SESSION['usr']."&emp_id=".$_SESSION['userid']."','520','440');return false;\"> ��������´�����ҹ</a>";
$content  .= "    <br>&nbsp;<img src=\"images/edit.png\" align=\"absmiddle\" border=\"0\"><a href=\"modules.php?name=Login&op=chgpass\">��䢢����� / ���ʼ�ҹ</a>";
$content  .= "    <br>&nbsp;<img src=\"images/icon-logout.gif\" align=\"absmiddle\" border=\"0\"><a href=\"#\" onclick=\"displayMessage('./modules/Login/dialog_Logout.php','320','120');return false;\"> �͡�ҡ�к�</a>";
$content  .= "   <br>&nbsp;<span class=\"textSubHead\"><center>(��ҹ����ش : ".$lastLogin.")</center></span>";
$content  .= "       </td>";
$content  .= "      </tr>";
$content  .= "    </table>";
$content  .= "  </td>";
$content  .= "  </tr>";



// ������ʼ�ҹ Expire ����ͧ�ʴ����١����ҹ
if($_SESSION['password_expire'] != true){ 
/*============= BI - Web Portal =====================*/
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr  onClick=\"dw_DWPortal()\" title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=DWPORTAL\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dw-report.gif\"  align=\"texttop\" border=\"0\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\" border=\"0\" ><u>BI Report</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\">��§ҹ�к���ѧ������/����ͧ������<br>(Data Warehouse/Data Mining) <img src='images/icon_update.jpg' border=\"0\" ></span>\n<div id='divLoadEventPortal'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";


/*============= INFODEPT=====================*/
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"infodept()\"  title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=INFODEPT\">";
$content  .= "          <td width=\"5%\"  valign=\"top\" ><img src=\"images/icon-dawich.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Management<br> Information<br> System</u> :<br></span>";
$content  .= "              <span class=\"textSubHead\">�к����ʹ������<br>��èѴ���</span>\n<div id='divLoadEventInfodept'></div>\n</td>";
$content  .= "        </tr>";

 /*============= STATREGION =====================*/
$content  .= "      </table></td>";
$content  .= "  </tr>";
$content  .= "  <tr >";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\" ><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"stat()\"  title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=STATREGION\">";
$content  .= "          <td width=\"5%\"><img src=\"images/icon-stat.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>StatRegion</u> :</span> <br />";
$content  .= "          <span class=\"textSubHead\">�к��ҹʶԵԢͧ<br>�ӹѡ�ҹ��ԡ���١���</span>\n<div id='divLoadEventStatregion'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

 /*============= TRIS =====================*/
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onclick =\"tris()\"  title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=TRIS\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-tris.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Tris</u> :</span> <br />";
$content  .= "                <span class=\"textSubHead\">�к���§ҹ�š��<br>���Թ�ҹ����ѹ�֡���<br>��ŧ�����Թ�š��<br>���Թ�ҹ �ʷ </span>\n<div id='divLoadEventTris'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";



 /*============= EIS =====================*/
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0; cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\">  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "      <tr  onclick=\"eis()\"  title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=EIS\">";
$content  .= "        <td width=\"5%\"  valign=\"top\"><img src=\"images/icon-eis.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "        <td width=\"95%\" valign=\"top\"> <span class=\"textHead\"><img src=\"images/indent1.png\"><u>EIS/MIS</u> :</span><br />";
$content  .= "            <span class=\"textSubHead\">�к����ʹ������<br>��������</span>\n<div id='divLoadEventEIS'></div><br>\n</td>";
$content  .= "      </tr>";
$content  .= "    </table>      </td>";
$content  .= "  </tr>";

 


/*$content  .= "        <tr onClick=\"window.open('./popups.php','winname','left=20,top=20,width=470,height=460,toolbar=0,resizable=0')\"  onmouseover=\"TagToTip('divInfodept')\">";
$content  .= "          <td width=\"5%\"  valign=\"top\" ><img src=\"images/icon-infodept.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\">Management<br> Information<br> System :<br></span>";
$content  .= "              <span class=\"textSubHead\">�к����ʹ������<br>��èѴ���</span></td>";
$content  .= "        </tr>";
*/


/*============= DW - Web Report Studio =====================*/
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr  onClick=\"dw_WebStudio()\"  title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=WEBSTUDIO\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dw-report.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>DW-Web Report Studio</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\">��/�����§ҹ�к���ѧ������/����ͧ������<br>(Data Warehouse/Data Mining) <img src='images/icon_update.jpg'></span>\n<div id='divLoadEventReport'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

 /*============= DW - Web Entry =====================*/
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"dw_entry()\"   title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=WEBENTRY\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dw-entry.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>DW/DM-Web Entry</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\">�ѹ�֡�������к���ѧ������/����ͧ������<br>(Data Warehouse/Data Mining) <img src='images/icon_update.jpg'></span>\n<div id='divLoadEventEntry'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";
 #================================================================#
 
 
  /*============= BIS User Management =====================*/
  if( ((AuthAdmin($_SESSION['usr']) == true) or (AuthViewer($_SESSION['usr'])== true)) ){
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr  onclick=\"fullscreen('http://bis.cattelecom.com/usermanagement/');SaveEvent('sysname=BIS User Management&denied=1','divLoadEventUserMng');\"   title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=USERMANAGEMENT\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-user.gif\"  align=\"texttop\" border=\"0\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\" border=\"0\"><u>BIS User Management</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\">�к��Ѵ��ü����ҹ  BIS <br>����ö ���� ź ��� ��˹��Է���,���Ҽ����ҹ��<br>�������ö�� Logs �����ҹ��ҧ�<img src='images/icon_update.jpg' border=\"0\"></span>\n<div id='divLoadEventUserMng'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";
}
 #================================================================#

 
 /*============= DAWICH =====================*/
/*
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"dawich()\"  onmouseover=\"TagToTip('divDawich')\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dawich.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\">DAWICH :</span> <br />";
$content  .= "                <span class=\"textSubHead\">�к���ѧ�����ź�ԡ��<br>���Ѿ�������ҧ����� </span></td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";
*/


 /*============= KPT =====================*/
/*
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"kpi()\"  onmouseover=\"TagToTip('divKPI')\">";
$content  .= "          <td width=\"5%\"  valign=\"top\"><img src=\"images/icon-kpi.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Strategy <br>Action-KPIs</u> : </span><br /><span class=\"textSubHead\">�к��ҹ�Դ������<br>�����Թ�š�ô��Թ�ҹ<br>��� KPIs ��� Action <br>Plan</span>";
$content  .= "          </td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";
*/

 /*============= DCSS =====================*/
/*
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onclick=\"javascript:window.location='http://infodept.cattelecom.com/dcss';\"  onmouseover=\"TagToTip('divDcss')\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dcss.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>DCSS</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\">�к����ʹ�Ⱥ�ԡ��<br>������â��������<br>���͢���</span></td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";
*/
 } // End // ������ʼ�ҹ Expire ����ͧ�ʴ����١����ҹ


$content  .= "</table>";

$content  .= "<INPUT TYPE=\"hidden\" name = \"desc\" value = \"$_SESSION[desc]\">";
$content  .= "<INPUT TYPE=\"hidden\" name = \"p\" value = \"$_SESSION[p]\">";
$content  .= "<INPUT TYPE=\"hidden\" name = \"i\">";
//$content  .= "<INPUT TYPE=\"hidden\" name = \"d\">";
$content  .= "<INPUT TYPE=\"hidden\" name = \"s\">";
$content  .= "<INPUT TYPE=\"hidden\" name = \"usr\">";
$content  .= "<INPUT TYPE=\"hidden\" name = \"mlevel\">";
$content  .= "<INPUT TYPE=\"hidden\" name = \"org\">";

$content  .= "</form>";
//$content  .= "</body>";


// ������ʼ�ҹ Expire ����ͧ�ʴ����١����ҹ
//if($_SESSION['password_expire'] != true){ 

//$content .="<span id=\"divEIS\"><font color='red'><img src=\"./images/logo-eis.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>�к����ʹ�����ͼ�������</b></u> </font>&nbsp;- ���ʹ͢��������ʹ������ǡѺ����Թ ��õ�Ҵ���ͧ�� <br>��� Economic Indicator ����Ӥѭ  ����ö��ǹ���Ŵ�����͡����ҹ�к�����������ǳ��ҹ��ҧ�ͧ˹�ҹ�� </span>";

//$content .="<span id=\"divInfodept\"><font color='red'><img src=\"./images/logo-infodept.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>�к����ʹ�����͡�èѴ��� </b></u></font>&nbsp;- &nbsp;���ʹ����ʹ�����͡�ú����� �ҷ� �� ��§ҹ�š�ô��Թ�ҹ<br>�ͧἹ�ҹ��ҧ� �͡���Ἱ��áԨ / Ἱ�ҹ�ͧ �ʷ &nbsp;���ʹ�ȴ�ҹ��õ�Ҵ<br> ���ʹ�Ȩҡ��¹͡ ���ʹ��ʶԵԺ�ԡ���ä��Ҥ� �繵�</span>";

//$content .="<span id=\"divStatregion\"><font color='red'><img src=\"./images/logo-statregion.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>�к��ҹʶԵԢͧ�ӹѡ�ҹ��ԡ���١���</b></u></font> - ���ʹ����ʹ�����ʶԵ��ʹ��˹��ºѵ��ä��Ҥ��ء������<br>�ͧ �ʷ ���ʶԵԡ������ԡ�ô�ҹ��ҧ� �ͧ�ӹѡ�ҹ��ԡ���١���(ʤ.) <br>�ҷ��� �����ż����� ��ԡ�������͹ / ��»� �繵�</span>";


//$content .= "<span id=\"divTris\"><font color='red'><img src=\"./images/logo-tris.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>Tris</u> : </font><br>�к���§ҹ�š�ô��Թ�ҹ����ѹ�֡��͵�ŧ��û����Թ�š�ô��Թ�ҹ�ͧ �ʷ </b></span>";


//$content .= "<span id=\"divDWPortal\"><font color='red'><img src=\"./images/logo-webreport.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"><b><u>BI Report</u> : </font><br>��§ҹ�к���ѧ������/����ͧ������ <br>(Data Warehouse/Data Mining)</b></span>";

//$content .= "<span id=\"divDWWebStudio\"><font color='red'><img src=\"./images/logo-dw-webstudio.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"><b><u>DW-WEb Report Studio</u> : </font><br>��/�����§ҹ�к���ѧ������/����ͧ������ <br>(Data Warehouse/Data Mining)</b></span>";

//$content .= "<span id=\"divDWEntry\"><font color='red'><img src=\"./images/logo-webentry.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>DW-Web Entry</u> </font>: <br>�ѹ�֡�������к���ѧ�������к���ѧ������/����ͧ������ <br>(Data Warehouse/Data Mining)</b></span>";


//} // End ������ʼ�ҹ Expire ����ͧ�ʴ����١����ҹ



 /*============= BIS User Management =====================*/
 // if( ((AuthAdmin($_SESSION['usr']) == true) or (AuthViewer($_SESSION['usr'])== true)) ){
//$content .= "<span id=\"divUserManamage\"><font color='red'><img src=\"./images/logo-usermanagement.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>BIS User Management</u> </b></font>: <br>�к��Ѵ��ü����ҹ��к� BIS <br>����ö ���� ź ��� ��˹��Է�����Ф��Ҽ����ҹ��</span>";
//}

//$content .= "<span id=\"divKPI\">&nbsp;<font color='red'><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b>�к��ҹ�Դ�����л����Թ�š�ô��Թ�ҹ��� KPIs ��� Action Plan</b></font></span>";
												
//$content .= "<span id=\"divDawich\">&nbsp;<font color='red'><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b>�к���ѧ�����ź�ԡ�����Ѿ�������ҧ�����</b></font></span>";

//$content .= "<span id=\"divDcss\">&nbsp;<font color='red'><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b>��§ҹ�к����ʹ�Ⱥ�ԡ��������â�����������͢���</b></font></span>";	

}else{

	$content  .= "<br><center>";
	$content  .= "<img src=\"./images/keylogin.gif\"><br>";	
	$content  .= "<font color='#FF0000'><b>�������к����ʹ�ȷҧ��áԨ<br><br><input type=\"button\" value=\" ��سҤ�ԡ����� \" title=\"��ԡ����������������к�\" onclick=\"displayMessage('./modules/Login/dialog_Login.php','450','230');return false\" style=\"cursor:pointer\"></b><br>&nbsp;<br>&nbsp;</font></center>";
}
?>
