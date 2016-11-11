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


// ฟังก์ชั่นในการตรวจสอบสิทธิ์ โดยการส่งค่า Level มาตรวจสอบ
function check_auth($level){		
		$plevel = strtoupper($_SESSION[p]); // กำหนดค่า PLEVEL
		$level = strtoupper($level);
		
		$pos = strpos($plevel, $level);

		if ($pos === false) { //ไม่พบ
			return false;
		}else{ // พบ
			return true;
		}

} // End Function



if (isset($_SESSION['usr']) && $_SESSION['status'] !="0"){
	
	
	
?>
<!--
<script language="javascript" src="../../includes/ajax/_class.js"></script>
<script language="javascript" src="../../includes/ajax/ajax.js"></script>
-->
 

<!--
<link rel="stylesheet" href="../../includes/dhtmlwindow/dhtmlwindow.css" type="text/css" />
<script type="text/javascript" src="../../includes/dhtmlwindow/dhtmlwindow.js"></script>
<script type="text/javascript">
function openPopUp(win_name , url , title ){
	  w = screen.availWidth-45;
	  h = screen.availHeight-180;
	  features = "width="+w+"px,height="+h+"px";
var googlewin=dhtmlwindow.open(win_name, "iframe", url, title, features+",resize=1,scrolling=1,center=1", "recal")

googlewin.onclose=function(){ //Run custom code when window is being closed (return false to cancel action):
return window.confirm("ต้องการปิดหน้าต่าง ใช่ หรือ ไม่?")
	}
}

</script>
-->

<script type="text/javascript">

//var MsgAlert = "เนื่องจากขณะนี้กำลังอยู่ในช่วงการนำเข้าข้อมูลของ Module CM จึงไม่สามารถเรียกดูรายงานของ Module CM ได้\nจะสามารถดูรายงานดัีงกล่าวได้ภายในวันที่ 23 พ.ค. 52 นี้";

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


</script>



<!-------- ข่าวประกาศ --------->
<!--<body onLoad="displayMessage('./notification.php','450','250');"></body> -->
<!--<body onLoad='document.getElementById("styled_popup").style.display="block"'></body>-->
<?php
//if (isset($_SESSION['usr'])){
	if($_SESSION['desc']==""){ $userOnline = $_SESSION['usr']; }else{  $userOnline = $_SESSION['desc']; }
	if($_SESSION['lastlogin']==""){ $lastLogin ="ไม่พบข้อมูล"; }else{ $lastLogin = datethaiTime($_SESSION['lastlogin']); } 
	$WelcomeMess = "<br><b><font color='red'>".$userOnline."</b></font>";	
	
	
/*****************************************************************/
# ส่วนแสดงรูปพนักงาน
	//$PicturePath = "http://intranet.cattelecom.com/web_data/profile/$_SESSION[userid].jpg";
	/*if(!file_exists($PicturePath)) {
		$Picture = $PicturePath;
		$dimension = " width='100px' height='130px' border='1' ";
	}else{
		$Picture = "./images/default-avatar.gif";
		$dimension = "";
	}
	*/
	/*
	if($_SESSION['userid'] > 0){
		$Picture = $PicturePath;
		$dimension = "  width='90px' height='113px' ";
	}else{
		$Picture = "./images/default-avatar.gif";	
		$dimension = "  width='90px' height='113px' ";
	}
	*/
	$Picture = "./images/default-avatar.gif";	
	$dimension = "  width='90px' height='113px' ";

/*****************************************************************/	
	
//}
$content  =  "<style type=\"text/css\">";
$content  .= "<!--";
$content  .= ".textHead {font-size: 13px; font-weight:bold }";
$content  .= ".textSubHead {font-size: 11px; color:#777777}";
$content  .= "-->";
$content  .= "</style>";
//$content  .= "<BODY BGCOLOR= LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>";
$content  .= "<form action=\"\" name=\"main\">";
$content .=  "<table width=\"100%\" border=\"0\"  cellpadding=\"1\" cellspacing=\"1\" id='tbl_menu'>";
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"center\" style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;border-top:1px dotted #C0C0C0;border-left:1px dotted #C0C0C0;border-right:1px dotted #C0C0C0\" bgcolor=\"\"><br><img src='$Picture'  border='1' $dimension /><br>$WelcomeMess";
$content  .= "    <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">";
$content  .= "      <tr>";
$content  .= "        <td>";
$content  .= "   <br>&nbsp;<img src=\"images/icon-information.gif\" align=\"absmiddle\" border=\"0\"><a href=\"#\"  id='user_detail'> รายละเอียดผู้ใช้งาน</a>";
$content  .= "       </td>";
$content  .= "      </tr>";

if($_SESSION['user_type'] == "1"){
		$content  .= "      <tr>";
		$content  .= "        <td>";
		$content  .= "   &nbsp;&nbsp;<img src=\"images/edit.png\" align=\"absmiddle\" border=\"0\"><a href=\"http://eim.cattelecom.com\" target=\"_blank\"> เปลี่ยนรหัสผ่าน</a>";
		$content  .= "       </td>";
		$content  .= "      </tr>";
}else{		
		$content  .= "      <tr>";
		$content  .= "        <td>";
		$content  .= "   &nbsp;&nbsp;<img src=\"images/edit.png\" align=\"absmiddle\" border=\"0\"><a href=\"modules.php?name=Login&op=chgpass\"> แก้ไขข้อมูล / รหัสผ่าน</a>";
		$content  .= "       </td>";
		$content  .= "      </tr>";
}

$content  .= "      <tr>";
$content  .= "        <td align=\"center\">";
$content  .= "    <br>&nbsp;<span id='btn_logout'  class=\"tooltips\" title=\"ออกจากระบบ\" >ออกจากระบบ</span>";
$content  .= "       </td>";
$content  .= "      </tr>";

$content  .= "      <tr>";
$content  .= "        <td>";
$content  .= "   &nbsp;<span class=\"textSubHead\"><center>(ใช้งานล่าสุด : ".$lastLogin.")</center></span>";
$content  .= "       </td>";
$content  .= "      </tr>";

$content  .= "    </table>";
$content  .= "  </td>";
$content  .= "  </tr>";


// ถ้ารหัสผ่าน Expire ไม่ต้องแสดงเมนูการใช้งาน
if($_SESSION['password_expire'] != true){ 


 
   /*============= CAT-KPI =====================*/


 if(check_auth('K') == true){
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" ><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='btn_kpi' class='tr_hover'>";
$content  .= "          <td width=\"5%\"  valign=\"top\"><img src=\"images/icon-cat-kpi.png\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"CAT-KPIs : ระบบประเมินผลการดำเนินงานตาม KPIs\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>CAT-KPIs</u> : </span><br /><span class=\"textSubHead\">ระบบประเมินผลการดำเนินงานตาม KPIs</span> <img src='images/icon_new.gif'><div id='divLoadEventKPI'></div>";
$content  .= "          </td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

 } // End if
 
 
/*============= BI - Web Portal =====================*/


if(check_auth('R') == true){

$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">"; 
//onClick=\"dw_DWPortal()\"
$content  .= "        <tr id='dwdmportal'  class='tr_hover'>";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dw-report.gif\"  align=\"texttop\" border=\"0\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"BI Report : รายงานระบบคลังข้อมูล/เหมืองข้อมูล (Data Warehouse/Data Mining)\"><span class=\"textHead\"><img src=\"images/indent1.png\" border=\"0\" ><u>BI Report</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> รายงานระบบคลังข้อมูล/เหมืองข้อมูล<br>(Data Warehouse/Data Mining) </span>\n<div id='divLoadEventPortal'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

} // End if



/*============= DW - Web Report Studio =====================*/


if(check_auth('W') == true){
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='dw_WebStudio'  class='tr_hover'>";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dw-report.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"DW-Web Report Studio : ดู/แก้ไขรายงานระบบคลังข้อมูล/เหมืองข้อมูล(Data Warehouse/Data Mining)\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>DW-Web Report Studio</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> ดู/แก้ไขรายงานระบบคลังข้อมูล/เหมืองข้อมูล<br>(Data Warehouse/Data Mining) </span>\n<div id='divLoadEventReport'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

} // End if
 


/*============= INFODEPT=====================*/
/*
if(check_auth('I') == true){
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"infodept()\">";
$content  .= "          <td width=\"5%\"  valign=\"top\" ><img src=\"images/icon-dawich.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"  class=\"tooltips\" title=\"Management Information System : ระบบสารสนเทศเพื่อการจัดการ\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Management<br> Information<br> System</u> :<br></span>";
$content  .= "              <span class=\"textSubHead\"> ระบบสารสนเทศเพื่อ<br>การจัดการ</span>\n<div id='divLoadEventInfodept'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

}// End if

 /*============= STATREGION =====================*/

if(check_auth('S') == true){

$content  .= "  <tr >";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='StatRegion' class='tr_hover'>";
$content  .= "          <td width=\"5%\"><img src=\"images/icon-stat.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"StatRegion: ระบบงานสถิติของสำนักงานบริการลูกค้า\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>StatRegion</u> :</span> <br />";
$content  .= "          <span class=\"textSubHead\"> ระบบงานสถิติของ<br>สำนักงานบริการลูกค้า</span>\n<div id='divLoadEventStatregion'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

} // End if



 
 /*============= Summary Of Invoices =====================*/
if(check_auth('B') == true){

$content  .= "  <tr >";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='SummaryInvoices' class='tr_hover'>";
$content  .= "          <td width=\"5%\"><img src=\"images/icon-bill.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"Summary of Invoices : ระบบรายงานสรุปยอดใบแจ้งค่าใช้บริการ\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Summary of Invoices</u> :</span> ";
$content  .= "          <span class=\"textSubHead\"> <br>ระบบรายงานสรุปยอดใบแจ้งค่าใช้บริการ</span>\n<div id='divLoadEventBilling'></div> <img src='images/icon_update.jpg'>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

} // End if


 /*============= Frequency Report =====================*/
if(check_auth('C') == true){

$content  .= "  <tr >";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='Frequency' class='tr_hover'>";
$content  .= "          <td width=\"5%\"><img src=\"images/icon-frequency.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"Frequency : ระบบคลื่นความถี่\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Spectrum Management</u>:</span> ";
$content  .= "          <span class=\"textSubHead\"> <br>ระบบบริหารความถี่วิทยุโทรคมนาคม</span>\n<div id='divLoadEventFrequency'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

} // End if

 
 /*============= Report  My =====================*/

$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"cdma_prepaid()\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon_my.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"Report My \"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Reports My</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> Report My </span>\n<div id='divLoadEventCdmaPrepaid'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

 #================================================================#
 
 

 /*============= DCSS =====================*/
/*
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onclick=\"fullscreen('http://bis.cattelecom.com/infodept/dcss');SaveEvent('sysname=DCSS&denied=1','divLoadEventDCSS');\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-tris.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"  class=\"tooltips\" title=\"DCSS: ระบบสารสนเทศบริการสื่อสารข้อมูลและเครือข่าย\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>DCSS</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> ระบบสารสนเทศบริการ<br>สื่อสารข้อมูลและเครือข่าย</span>\n<div id='divLoadEventDCSS'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

*/
 /*============= TRIS =====================*/
/*$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onclick =\"tris()\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-tris.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Tris</u> :</span> <br />";
$content  .= "                <span class=\"textSubHead\">ระบบรายงานผลการ<br>ดำเนินงานตามบันทึกข้อ<br>ตกลงประเมินผลการ<br>ดำเนินงาน กสท </span>\n<div id='divLoadEventTris'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";
*/


 /*============= EIS =====================*/
/* if(check_auth('E') == true){
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0; cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\">  <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "      <tr  onclick=\"eis()\">";
$content  .= "        <td width=\"5%\"  valign=\"top\"><img src=\"images/icon-eis.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "        <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"EIS/MIS : ระบบสารสนเทศเพื่อผู้บริหาร\"> <span class=\"textHead\"><img src=\"images/indent1.png\"><u>EIS/MIS</u> :</span><br />";
$content  .= "            <span class=\"textSubHead\"> ระบบสารสนเทศเพื่อผู้บริหาร</span>\n<div id='divLoadEventEIS'></div><br>\n</td>";
$content  .= "      </tr>";
$content  .= "    </table>      </td>";
$content  .= "  </tr>";

 }*/ // End if


/*$content  .= "        <tr onClick=\"window.open('./popups.php','winname','left=20,top=20,width=470,height=460,toolbar=0,resizable=0')\"  onmouseover=\"TagToTip('divInfodept')\">";
$content  .= "          <td width=\"5%\"  valign=\"top\" ><img src=\"images/icon-infodept.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\">Management<br> Information<br> System :<br></span>";
$content  .= "              <span class=\"textSubHead\">ระบบสารสนเทศเพื่อ<br>การจัดการ</span></td>";
$content  .= "        </tr>";
*/

 
 /*============= DW - Web Entry =====================*/

/*
 if(check_auth('W') == true){
 
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"dw_entry()\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dw-entry.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"DW/DM-Web Entry : บันทึกข้อมูลระบบคลังข้อมูล/เหมืองข้อมูล (Data Warehouse/Data Mining) \"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>DW/DM-Web Entry</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> บันทึกข้อมูลระบบคลังข้อมูล/เหมืองข้อมูล<br>(Data Warehouse/Data Mining) </span>\n<div id='divLoadEventEntry'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

 } // End if 
 
 */


 
  /*============= BIS User Management =====================*/
  if( ((AuthAdmin($_SESSION['usr']) == true) or (AuthViewer($_SESSION['usr'])== true)) ){
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr  onclick=\"fullscreen('http://bis.cattelecom.com/usermanagement/');SaveEvent('sysname=BIS User Management&denied=1','divLoadEventUserMng');\" class='tr_hover'>";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-user.gif\"  align=\"texttop\" border=\"0\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"  class=\"tooltips\" title=\"BIS User Management : ระบบจัดการผู้ใช้งาน  BIS สามารถ เพิ่ม ลบ แก้ไข กำหนดสิทธิ์,ค้นหาผู้ใช้งาน, Logs การใช้งานต่างๆ\"><span class=\"textHead\"><img src=\"images/indent1.png\" border=\"0\"><u>BIS User Management</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> ระบบจัดการผู้ใช้งาน  BIS <br>สามารถ เพิ่ม ลบ แก้ไข กำหนดสิทธิ์,ค้นหาผู้ใช้งาน, Logs การใช้งานต่างๆ</span>\n<div id='divLoadEventUserMng'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";
}
 #================================================================#

 
  /*============= Levae Form Managent =====================*/
/*  if( AuthLeaveform($_SESSION['usr']) == true){
	  $via_username = $_SESSION['userid'];
	  
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr  onclick=\"fullscreen('http://bis.cattelecom.com/leaveform/modules.php?name=Your_Account&op=via_BIS&username=$via_username');SaveEvent('sysname=Leave Form Management&denied=1','divLoadEventUserMng');\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon_leaveform.jpg\"  align=\"texttop\" border=\"0\" width=\"40\" height=\"40\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"   class=\"tooltips\" title=\"Leave Form Management : ระบบรายงานผลการลา สามารถ เพิ่ม ลบ แก้ไข ข้อมูลการลา\"><span class=\"textHead\"><img src=\"images/indent1.png\" border=\"0\"><u>Leave Form Management</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> ระบบรายงานผลการลา <br>สามารถ เพิ่ม ลบ แก้ไข ข้อมูลการลา</span>\n<div id='divLoadEventUserMng'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";
}*/
 #================================================================#
 
 


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


}else{

	$content  .= "<br><center>";
	$content  .= "<img src=\"./images/login.png\"><br>";	
	$content  .= "<font color='#FF0000'><b>เข้าสู่ระบบ BIS</b></font><br><br><button value=\" กรุณาคลิกที่นี่ \" id='btn_login' class=\"tooltips\" title=\"คลิกที่นี่เพื่อเข้าสู่ระบบ\">กรุณาคลิกที่นี่</button><br>&nbsp;<br>&nbsp;</center>";
}
?>

<?php


?>

<!-------- ข่าวประกาศ --------->
<!--<body onLoad="displayMessage('./notification.php','450','250');"></body>-->
<!--<div id='dialog' name='dialog' style='display: block ;' title="ฑีฆายุโก โหตุ มหาราชา"><img src="http://pr.cattelecom.com/king/king53.jpg" width="480" height="690" /></div>-->

<?php
$_SESSION['Ann_count'] +=1;
$sql = "SELECT id,title,contents, datetimes, active ,width , height   FROM cat_Announced  WHERE active = 1";
$rows = $db->sql_fetchrow($db->sql_query($sql));
$count_row = $db->sql_numrows($db->sql_query($sql));

 if($count_row > 0  && $_SESSION['Ann_count'] <= 2) { ?>
<div id="dialog_announced" title="ประกาศ : <?=$rows['title']?>">
	<?=$rows['contents']?>
</div>
<script type="text/javascript">
	$(function(){
		
			$( "#dialog_announced" ).dialog({
			modal: true ,
			height: <?=$rows['height']?>,
			width : <?=$rows['width']?>,
			minHeight: 200,
			minWidth: 400
			
			});
		
		
	});
</script>



<?  } ?>


 <script type="text/javascript">
	$(function(){
		var w = $(window).width();
		var h = $(window).height();
		
		
		
	<!------------------------------------------- Login  -------------------------------------->
		
	$("#btn_login").button({
      icons: {
        primary: "ui-icon-locked"
      }
    }).click(function(){
			
			set_dialog("diag_login",520 , 320 ,'เข้าสู่ระบบสารสนเทศทางธุรกิจ..');			
			
			$("#diag_login").dialog('open');
			get("./modules/Login/dialog_Login.php" ,"diag_login_detail");
			
			
			//onclick=\"displayMessage('./modules/Login/dialog_Login.php','510','315');return false\"	
	});
	
		
		
	<!------------------------------------------- CAT KPIs -------------------------------------->
	
	$("#btn_kpi").click(function(){
			
		
	<? //if(check_auth('K') == true){ // ให้เลือกการทำงานก่อน?>
		<? //if($_SESSION['usr'] <> 'catsysmo'){  ?>
		//SaveEvent('sysname=CAT-KPIs&denied=1','divLoadEventKPI');
		//Save Event
		get("./modules/Login/event_log.php?sysname=CAT-KPIs&denied=1" ,"divLoadEventKPI");
		
		<? //} ?>
		//displayMessage('./kpi_menu_select.php','490','285');return false
		set_dialog("diag_login",450 , 280 ,'CAT-KPIs : เลือกการทำงาน');			
			
			$("#diag_login").dialog('open');
			get("kpi_menu_select.php" ,"diag_login_detail");
			
	<? //} //else{ // ไปที่หน้า รับทราบ KPIs รายพนักงาน?>
			//alert('ขออภัย!! ระบบ CAT-KPIs ยังไม่เปิดใช้งานในส่วน รับทราบ KPIs รายพนักงาน');			
			
	<? //} ?>
		
	});
	
	

		
		<!------------------------------------------- Dialog DWDM  -------------------------------------->

		$( "#dialog_dwdm" ).dialog(
		{
			autoOpen: false,
			modal: true,	
			width: 600,
			height : 400 ,
			draggable: false,
			closeOnEscape: false,
			 open: function(event, ui) {
				  $(this).closest('.ui-dialog').find('.ui-dialog-titlebar-close').hide();
				}
			/*
			buttons: [
				{
					text: "ตกลง",
					click: function() {
						<? //if($_SESSION['usr'] <> 'catsysmo'){  ?>
									get("./modules/Login/event_log.php?sysname=DW/DM Web Portal&denied=1" ,"divLoadEventPortal");									
									window.location="CntUsr.php?select=R";	
							<? //} ?>
						$( this ).dialog( "close" );
							
					}
				},
				{
					text: "ยกเลิก",
					click: function() {
						$( this ).dialog( "close" );
						//alert('cancel');
					}
				}
			]*/
			
		});
		
		
		
		<!------------------------------------------- SAS Web Portal  -------------------------------------->
	
		
	$("#dwdmportal").click(function(event){
		// alert('ขออภัย ระบบ DW/DM อยู่ระหว่างการพัฒนา!!');
		
		$( "#dialog_dwdm" ).dialog( "open" );
		//alert('ทดลองการใช้งานระบบ DW/DM ข้อมูลที่แสดงในระบบเป็นเพียงข้อมูลตัวอย่างเท่านั้น');
			$.get('dwdm-term-of-use.php',	function(data){
				$('#dialog-content').html(data);
			});
		//	event.preventDefault();
			
		});
		
		
		
			<!------------------------------------------- SAS Web Report Studio  -------------------------------------->
	
		
	$("#dw_WebStudio").click(function(event){
		// alert('ขออภัย ระบบ DW/DM อยู่ระหว่างการพัฒนา!!');
		
		<?php //if($_SESSION['usr'] <> 'catsysmo'){  ?>
		
		//Save Event
		$.get("./modules/Login/event_log.php?sysname=DW/DM Web Report Studio&denied=1" ,function(data){
		
			window.location="CntUsr.php?select=W";	
			// "divLoadEventReport"
			
		});
		
		<?php //} ?>
			
		});
		
		
		
		
			<!------------------------------------------- Stat Region  -------------------------------------->
	
		$("#StatRegion").click(function(){
		// alert('ขออภัย ระบบ DW/DM อยู่ระหว่างการพัฒนา!!');
		
		<?php //if($_SESSION['usr'] <> 'catsysmo'){  ?>
		
		//Save Event
		$.get("./modules/Login/event_log.php?sysname=STATREGION&denied=1" ,function(data){
		
			window.location="CntUsr.php?select=S";
			// "divLoadEventStatregion"
			
		});
		
		<?php //} ?>
			
		});
		


<!------------------------------------------- Summary Of Invoices   -------------------------------------->

	$("#SummaryInvoices").click(function(){
		// alert('ขออภัย ระบบ DW/DM อยู่ระหว่างการพัฒนา!!');
		<?php //if($_SESSION['usr'] <> 'catsysmo'){  ?>
		
		//Save Event
		$.get("./modules/Login/event_log.php?sysname=Summary of Invoices&denied=1" ,function(data){
		
			window.location="http://bis.cattelecom.com/billingtotal";
			// "divLoadEventBilling"
			
		});
		
		<?php //} ?>
			
		});
		

<!------------------------------------------- Frequency   -------------------------------------->

	$("#Frequency").click(function(){
		// alert('ขออภัย ระบบ DW/DM อยู่ระหว่างการพัฒนา!!');
		<?php //if($_SESSION['usr'] <> 'catsysmo'){  ?>
		
		//Save Event
		$.get("./modules/Login/event_log.php?sysname=CAT-Frequency&denied=1" ,function(data){
		
			window.location="http://bis.cattelecom.com/frequency/";
			// "divLoadEventFrequency"
			
		});
		
		<?php //} ?>
			
	});		
	
	
		<!------------------------------------------- User Detail  -------------------------------------->

	// User Detail 
	$("#user_detail").click(function(){
			
			set_dialog("diag_login" ,620 , 600 ,'รายละเอียดผู้ใช้งาน :   <?=$_SESSION['desc']?>');						
			$("#diag_login").dialog('open');
			var usr = '<?=$_SESSION['usr']?>';
			var userid = '<?=$_SESSION['userid']?>';
			
			
			get("http://bis.cattelecom.com/usermanagement/listUserDetail.php?src=true&username="+usr+"&emp_id="+userid ,"diag_login_detail");
	});
	
	// End User Detail
	
	
	//onclick=\"displayMessage('./usermanagement/listUserDetail.php?username=".$_SESSION['usr']."&emp_id=".$_SESSION['userid']."','600','580');return false;\"
	
	// End User Detail
	
	
	
		<!------------------------------------------- Logout  -------------------------------------->

	// loout 
	$("#btn_logout").button({
      icons: {
        primary: "ui-icon-power"
      }
    }).click(function(){
			
			//set_dialog("diag_login",350 , 160 ,'ยืนยัน! การออกการระบบ ?');			
	$( "#diag_login" ).dialog({
      modal: true,
	  height: 190,
  	 width: 350,
	  title : 'ยืนยัน! การออกการระบบ ?',
      buttons: {
        '  ใช่  ': function() {
          confirmLogout(true);
        },
		 '  ไม่  ': function() {
          $( this ).dialog( "close" );
        }
      }
    });
			
			$("#diag_login").dialog('open');
			get("./modules/Login/dialog_Logout.php" ,"diag_login_detail");
			
		});
		
		// End logout
	



		$(".tr_hover").hover(function(){ 
			$(this).css("background-color",  "#CCFFCC" ); }, 	function(){ $(this).css("background-color",  "" );
		});
	


	});
</script>

<div id="diag_login"/>
	<div id="diag_login_detail"/></div>
</div>
<div id="dialog_dwdm" title="ข้อตกลงและเงื่อนไขการใช้บริการคลังข้อมูลสารสนเทศทางธุรกิจ (DW/DM)  (Terms & Conditions)">
  <div id="dialog-content"  style="width:100%; height:100% overflow:auto;"></div>
  
</div>
