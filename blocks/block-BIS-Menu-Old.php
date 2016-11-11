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
			alert('ไม่มีสิทธิ์เข้า Infodept');			
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
			alert('ไม่มีสิทธิ์เข้า EIS');
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
			alert('ไม่มีสิทธิ์เข้า Statregion');
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
//			alert('ไม่มีสิทธิ์เข้า Dawich');
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
//			alert('ไม่มีสิทธิ์เข้า Strategy Action-KPIs');
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
			alert('ไม่มีสิทธิ์เข้า TRIS');
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
			alert('ไม่มีสิทธิ์เข้าใช้รายงานระบบคลังข้อมูล/เหมืองข้อมูล');
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
			alert('ไม่มีสิทธิ์เข้าดู/แก้ไขรายงานระบบคลังข้อมูล/เหมืองข้อมูล');
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
			alert('ไม่มีสิทธิ์เข้าใช้บันทึกข้อมูลระบบคลังข้อมูล/เหมืองข้อมูล');
		}
}


//function confirmLogout(){
//	if(confirm("ต้องการออกจากระบบ ใช่ หรือ ไม่ ?")){
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
	if($_SESSION['lastlogin']==""){ $lastLogin ="ไม่พบข้อมูล"; }else{ $lastLogin = datethaiTime($_SESSION['lastlogin']); } 
	$WelcomeMess = "ยินดีต้อนรับ <br><br> <b><font color='red'>".$userOnline."</b></font>";
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
$content  .= "   <br>&nbsp;<img src=\"images/icon-information.gif\" align=\"absmiddle\" border=\"0\"><a href=\"#\" onclick=\"displayMessage('./usermanagement/listUserDetail.php?username=".$_SESSION['usr']."&emp_id=".$_SESSION['userid']."','520','440');return false;\"> รายละเอียดผู้ใช้งาน</a>";
$content  .= "    <br>&nbsp;<img src=\"images/edit.png\" align=\"absmiddle\" border=\"0\"><a href=\"modules.php?name=Login&op=chgpass\">แก้ไขข้อมูล / รหัสผ่าน</a>";
$content  .= "    <br>&nbsp;<img src=\"images/icon-logout.gif\" align=\"absmiddle\" border=\"0\"><a href=\"#\" onclick=\"displayMessage('./modules/Login/dialog_Logout.php','320','120');return false;\"> ออกจากระบบ</a>";
$content  .= "   <br>&nbsp;<span class=\"textSubHead\"><center>(ใช้งานล่าสุด : ".$lastLogin.")</center></span>";
$content  .= "       </td>";
$content  .= "      </tr>";
$content  .= "    </table>";
$content  .= "  </td>";
$content  .= "  </tr>";



// ถ้ารหัสผ่าน Expire ไม่ต้องแสดงเมนูการใช้งาน
if($_SESSION['password_expire'] != true){ 
/*============= BI - Web Portal =====================*/
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr  onClick=\"dw_DWPortal()\" title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=DWPORTAL\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dw-report.gif\"  align=\"texttop\" border=\"0\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\" border=\"0\" ><u>BI Report</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\">รายงานระบบคลังข้อมูล/เหมืองข้อมูล<br>(Data Warehouse/Data Mining) <img src='images/icon_update.jpg' border=\"0\" ></span>\n<div id='divLoadEventPortal'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";


/*============= INFODEPT=====================*/
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"infodept()\"  title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=INFODEPT\">";
$content  .= "          <td width=\"5%\"  valign=\"top\" ><img src=\"images/icon-dawich.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Management<br> Information<br> System</u> :<br></span>";
$content  .= "              <span class=\"textSubHead\">ระบบสารสนเทศเพื่อ<br>การจัดการ</span>\n<div id='divLoadEventInfodept'></div>\n</td>";
$content  .= "        </tr>";

 /*============= STATREGION =====================*/
$content  .= "      </table></td>";
$content  .= "  </tr>";
$content  .= "  <tr >";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\" ><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"stat()\"  title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=STATREGION\">";
$content  .= "          <td width=\"5%\"><img src=\"images/icon-stat.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>StatRegion</u> :</span> <br />";
$content  .= "          <span class=\"textSubHead\">ระบบงานสถิติของ<br>สำนักงานบริการลูกค้า</span>\n<div id='divLoadEventStatregion'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

 /*============= TRIS =====================*/
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onclick =\"tris()\"  title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=TRIS\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-tris.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Tris</u> :</span> <br />";
$content  .= "                <span class=\"textSubHead\">ระบบรายงานผลการ<br>ดำเนินงานตามบันทึกข้อ<br>ตกลงประเมินผลการ<br>ดำเนินงาน กสท </span>\n<div id='divLoadEventTris'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";



 /*============= EIS =====================*/
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0; cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\">  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "      <tr  onclick=\"eis()\"  title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=EIS\">";
$content  .= "        <td width=\"5%\"  valign=\"top\"><img src=\"images/icon-eis.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "        <td width=\"95%\" valign=\"top\"> <span class=\"textHead\"><img src=\"images/indent1.png\"><u>EIS/MIS</u> :</span><br />";
$content  .= "            <span class=\"textSubHead\">ระบบสารสนเทศเพื่อ<br>ผู้บริหาร</span>\n<div id='divLoadEventEIS'></div><br>\n</td>";
$content  .= "      </tr>";
$content  .= "    </table>      </td>";
$content  .= "  </tr>";

 


/*$content  .= "        <tr onClick=\"window.open('./popups.php','winname','left=20,top=20,width=470,height=460,toolbar=0,resizable=0')\"  onmouseover=\"TagToTip('divInfodept')\">";
$content  .= "          <td width=\"5%\"  valign=\"top\" ><img src=\"images/icon-infodept.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\">Management<br> Information<br> System :<br></span>";
$content  .= "              <span class=\"textSubHead\">ระบบสารสนเทศเพื่อ<br>การจัดการ</span></td>";
$content  .= "        </tr>";
*/


/*============= DW - Web Report Studio =====================*/
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr  onClick=\"dw_WebStudio()\"  title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=WEBSTUDIO\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dw-report.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>DW-Web Report Studio</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\">ดู/แก้ไขรายงานระบบคลังข้อมูล/เหมืองข้อมูล<br>(Data Warehouse/Data Mining) <img src='images/icon_update.jpg'></span>\n<div id='divLoadEventReport'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

 /*============= DW - Web Entry =====================*/
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"dw_entry()\"   title=\"ajax:./modules/Login/ajax-tooltip-content.php?tooltiptype=WEBENTRY\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dw-entry.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>DW/DM-Web Entry</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\">บันทึกข้อมูลระบบคลังข้อมูล/เหมืองข้อมูล<br>(Data Warehouse/Data Mining) <img src='images/icon_update.jpg'></span>\n<div id='divLoadEventEntry'></div>\n</td>";
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
$content  .= "                <span class=\"textSubHead\">ระบบจัดการผู้ใช้งาน  BIS <br>สามารถ เพิ่ม ลบ แก้ไข กำหนดสิทธิ์,ค้นหาผู้ใช้งานได้<br>และสามารถดู Logs การใช้งานต่างๆ<img src='images/icon_update.jpg' border=\"0\"></span>\n<div id='divLoadEventUserMng'></div>\n</td>";
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
$content  .= "                <span class=\"textSubHead\">ระบบคลังข้อมูลบริการ<br>โทรศัพท์ระหว่างประเทศ </span></td>";
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
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Strategy <br>Action-KPIs</u> : </span><br /><span class=\"textSubHead\">ระบบงานติดตามและ<br>ประเมินผลการดำเนินงาน<br>ตาม KPIs และ Action <br>Plan</span>";
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
$content  .= "                <span class=\"textSubHead\">ระบบสารสนเทศบริการ<br>สื่อสารข้อมูลและ<br>เครือข่าย</span></td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";
*/
 } // End // ถ้ารหัสผ่าน Expire ไม่ต้องแสดงเมนูการใช้งาน


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


// ถ้ารหัสผ่าน Expire ไม่ต้องแสดงเมนูการใช้งาน
//if($_SESSION['password_expire'] != true){ 

//$content .="<span id=\"divEIS\"><font color='red'><img src=\"./images/logo-eis.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>ระบบสารสนเทศเพื่อผู้บริหาร</b></u> </font>&nbsp;- นำเสนอข้อมูลสารสนเทศเกี่ยวกับการเงิน การตลาดเบื้องต้น <br>และ Economic Indicator ที่สำคัญ  สามารถดาวน์โหลดคู่มือการใช้งานระบบนี้ได้ที่บริเวณด้านล่างของหน้านี้ </span>";

//$content .="<span id=\"divInfodept\"><font color='red'><img src=\"./images/logo-infodept.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>ระบบสารสนเทศเพื่อการจัดการ </b></u></font>&nbsp;- &nbsp;นำเสนอสารสนเทศเพื่อการบริหาร อาทิ เช่น รายงานผลการดำเนินงาน<br>ของแผนงานต่างๆ เอกสารแผนธุรกิจ / แผนงานของ กสท &nbsp;สารสนเทศด้านการตลาด<br> สารสนเทศจากภายนอก สารสนเทศสถิติบริการโทรคมนาคม เป็นต้น</span>";

//$content .="<span id=\"divStatregion\"><font color='red'><img src=\"./images/logo-statregion.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>ระบบงานสถิติของสำนักงานบริการลูกค้า</b></u></font> - นำเสนอสารสนเทศและสถิติยอดจำหน่ายบัตรโทรคมนาคมทุกประเภท<br>ของ กสท และสถิติการให้บริการด้านต่างๆ ของสำนักงานบริการลูกค้า(สค.) <br>อาทิเช่น ข้อมูลผู้เช่า บริการรายเดือน / รายปี เป็นต้น</span>";


//$content .= "<span id=\"divTris\"><font color='red'><img src=\"./images/logo-tris.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>Tris</u> : </font><br>ระบบรายงานผลการดำเนินงานตามบันทึกข้อตกลงการประเมินผลการดำเนินงานของ กสท </b></span>";


//$content .= "<span id=\"divDWPortal\"><font color='red'><img src=\"./images/logo-webreport.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"><b><u>BI Report</u> : </font><br>รายงานระบบคลังข้อมูล/เหมืองข้อมูล <br>(Data Warehouse/Data Mining)</b></span>";

//$content .= "<span id=\"divDWWebStudio\"><font color='red'><img src=\"./images/logo-dw-webstudio.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"><b><u>DW-WEb Report Studio</u> : </font><br>ดู/แก้ไขรายงานระบบคลังข้อมูล/เหมืองข้อมูล <br>(Data Warehouse/Data Mining)</b></span>";

//$content .= "<span id=\"divDWEntry\"><font color='red'><img src=\"./images/logo-webentry.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>DW-Web Entry</u> </font>: <br>บันทึกข้อมูลระบบคลังข้อมูลระบบคลังข้อมูล/เหมืองข้อมูล <br>(Data Warehouse/Data Mining)</b></span>";


//} // End ถ้ารหัสผ่าน Expire ไม่ต้องแสดงเมนูการใช้งาน



 /*============= BIS User Management =====================*/
 // if( ((AuthAdmin($_SESSION['usr']) == true) or (AuthViewer($_SESSION['usr'])== true)) ){
//$content .= "<span id=\"divUserManamage\"><font color='red'><img src=\"./images/logo-usermanagement.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>BIS User Management</u> </b></font>: <br>ระบบจัดการผู้ใช้งานในระบบ BIS <br>สามารถ เพิ่ม ลบ แก้ไข กำหนดสิทธิ์และค้นหาผู้ใช้งานได้</span>";
//}

//$content .= "<span id=\"divKPI\">&nbsp;<font color='red'><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b>ระบบงานติดตามและประเมินผลการดำเนินงานตาม KPIs และ Action Plan</b></font></span>";
												
//$content .= "<span id=\"divDawich\">&nbsp;<font color='red'><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b>ระบบคลังข้อมูลบริการโทรศัพท์ระหว่างประเทศ</b></font></span>";

//$content .= "<span id=\"divDcss\">&nbsp;<font color='red'><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b>รายงานระบบสารสนเทศบริการสื่อสารข้อมูลและเครือข่าย</b></font></span>";	

}else{

	$content  .= "<br><center>";
	$content  .= "<img src=\"./images/keylogin.gif\"><br>";	
	$content  .= "<font color='#FF0000'><b>เข้าสู่ระบบสารสนเทศทางธุรกิจ<br><br><input type=\"button\" value=\" กรุณาคลิกที่นี่ \" title=\"คลิกที่นี่เพื่อเข้าสู่ระบบ\" onclick=\"displayMessage('./modules/Login/dialog_Login.php','450','230');return false\" style=\"cursor:pointer\"></b><br>&nbsp;<br>&nbsp;</font></center>";
}
?>
