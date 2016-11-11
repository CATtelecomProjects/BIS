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


// �ѧ������㹡�õ�Ǩ�ͺ�Է��� ��¡���觤�� Level �ҵ�Ǩ�ͺ
function check_auth($level){		
		$plevel = strtoupper($_SESSION[p]); // ��˹���� PLEVEL
		$level = strtoupper($level);
		
		$pos = strpos($plevel, $level);

		if ($pos === false) { //��辺
			return false;
		}else{ // ��
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
return window.confirm("��ͧ��ûԴ˹�ҵ�ҧ ��� ���� ���?")
	}
}

</script>
-->

<script type="text/javascript">

//var MsgAlert = "����ͧ�ҡ��й�����ѧ����㹪�ǧ��ù����Ң����Ţͧ Module CM �֧�������ö���¡����§ҹ�ͧ Module CM ���\n������ö����§ҹ��է��������������ѹ��� 23 �.�. 52 ���";

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



<!-------- ���ǻ�С�� --------->
<!--<body onLoad="displayMessage('./notification.php','450','250');"></body> -->
<!--<body onLoad='document.getElementById("styled_popup").style.display="block"'></body>-->
<?php
//if (isset($_SESSION['usr'])){
	if($_SESSION['desc']==""){ $userOnline = $_SESSION['usr']; }else{  $userOnline = $_SESSION['desc']; }
	if($_SESSION['lastlogin']==""){ $lastLogin ="��辺������"; }else{ $lastLogin = datethaiTime($_SESSION['lastlogin']); } 
	$WelcomeMess = "<br><b><font color='red'>".$userOnline."</b></font>";	
	
	
/*****************************************************************/
# ��ǹ�ʴ��ٻ��ѡ�ҹ
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
$content  .= "   <br>&nbsp;<img src=\"images/icon-information.gif\" align=\"absmiddle\" border=\"0\"><a href=\"#\"  id='user_detail'> ��������´�������ҹ</a>";
$content  .= "       </td>";
$content  .= "      </tr>";

if($_SESSION['user_type'] == "1"){
		$content  .= "      <tr>";
		$content  .= "        <td>";
		$content  .= "   &nbsp;&nbsp;<img src=\"images/edit.png\" align=\"absmiddle\" border=\"0\"><a href=\"http://eim.cattelecom.com\" target=\"_blank\"> �����¹���ʼ�ҹ</a>";
		$content  .= "       </td>";
		$content  .= "      </tr>";
}else{		
		$content  .= "      <tr>";
		$content  .= "        <td>";
		$content  .= "   &nbsp;&nbsp;<img src=\"images/edit.png\" align=\"absmiddle\" border=\"0\"><a href=\"modules.php?name=Login&op=chgpass\"> ���䢢����� / ���ʼ�ҹ</a>";
		$content  .= "       </td>";
		$content  .= "      </tr>";
}

$content  .= "      <tr>";
$content  .= "        <td align=\"center\">";
$content  .= "    <br>&nbsp;<span id='btn_logout'  class=\"tooltips\" title=\"�͡�ҡ�к�\" >�͡�ҡ�к�</span>";
$content  .= "       </td>";
$content  .= "      </tr>";

$content  .= "      <tr>";
$content  .= "        <td>";
$content  .= "   &nbsp;<span class=\"textSubHead\"><center>(����ҹ����ش : ".$lastLogin.")</center></span>";
$content  .= "       </td>";
$content  .= "      </tr>";

$content  .= "    </table>";
$content  .= "  </td>";
$content  .= "  </tr>";


// ������ʼ�ҹ Expire �����ͧ�ʴ����١������ҹ
if($_SESSION['password_expire'] != true){ 

/*============= EBM =====================*/
 if(check_auth('D') == true){

$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" ><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='btn_ebm' class='tr_hover'>";
$content  .= "          <td width=\"5%\"  valign=\"top\"><img src=\"images/EBM-8083.jpg\"  width=\"45\" height=\"45\" align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"EBM: �к� EBM\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>EBM</u> : </span><br /><span class=\"textSubHead\">�к� EBM</span> <img src='images/icon_new.gif'><div id='divLoadEventEBM'></div>";
$content  .= "          </td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

} // End if

 #================================================================#

/*============= Report  My =====================*/
 if(check_auth('M') == true){

$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" ><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='btn_my' class='tr_hover'>";
$content  .= "          <td width=\"5%\"  valign=\"top\"><img src=\"images/icon_my.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"my Reports: �к���§ҹ my\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>my Reports</u> : </span><br /><span class=\"textSubHead\">�к���§ҹ my</span> <img src='images/icon_new.gif'><div id='divLoadEventMY'></div>";
$content  .= "          </td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

} // End if

 #================================================================#
 

   /*============= CAT-KPI =====================*/
/*

 if(check_auth('K') == true){
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" ><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='btn_kpi' class='tr_hover'>";
$content  .= "          <td width=\"5%\"  valign=\"top\"><img src=\"images/icon-cat-kpi.png\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"CAT-KPIs : �к������Թ�š�ô���Թ�ҹ��� KPIs\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>CAT-KPIs</u> : </span><br /><span class=\"textSubHead\">�к������Թ�š�ô���Թ�ҹ��� KPIs</span> <img src='images/icon_new.gif'><div id='divLoadEventKPI'></div>";
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
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"BI Report : ��§ҹ�к���ѧ������/����ͧ������ (Data Warehouse/Data Mining)\"><span class=\"textHead\"><img src=\"images/indent1.png\" border=\"0\" ><u>BI Report</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> ��§ҹ�к���ѧ������/����ͧ������<br>(Data Warehouse/Data Mining) </span>\n<div id='divLoadEventPortal'></div>\n</td>";
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
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"DW-Web Report Studio : ��/�������§ҹ�к���ѧ������/����ͧ������(Data Warehouse/Data Mining)\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>DW-Web Report Studio</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> ��/�������§ҹ�к���ѧ������/����ͧ������<br>(Data Warehouse/Data Mining) </span>\n<div id='divLoadEventReport'></div>\n</td>";
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
$content  .= "          <td width=\"95%\" valign=\"top\"  class=\"tooltips\" title=\"Management Information System : �к����ʹ�������͡�èѴ���\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Management<br> Information<br> System</u> :<br></span>";
$content  .= "              <span class=\"textSubHead\"> �к����ʹ��������<br>��èѴ���</span>\n<div id='divLoadEventInfodept'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

}// End if

 /*============= STATREGION =====================*/
/*
if(check_auth('S') == true){

$content  .= "  <tr >";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='StatRegion' class='tr_hover'>";
$content  .= "          <td width=\"5%\"><img src=\"images/icon-stat.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"StatRegion: �к��ҹʶԵԢͧ�ӹѡ�ҹ��ԡ���١���\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>StatRegion</u> :</span> <br />";
$content  .= "          <span class=\"textSubHead\"> �к��ҹʶԵԢͧ<br>�ӹѡ�ҹ��ԡ���١���</span>\n<div id='divLoadEventStatregion'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

} // End if
*/


 
 /*============= Summary Of Invoices =====================*/
if(check_auth('B') == true){

$content  .= "  <tr >";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='SummaryInvoices' class='tr_hover'>";
$content  .= "          <td width=\"5%\"><img src=\"images/icon-bill.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"Summary of Invoices : �к���§ҹ��ػ�ʹ����駤�������ԡ��\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Summary of Invoices</u> :</span> ";
$content  .= "          <span class=\"textSubHead\"> <br>�к���§ҹ��ػ�ʹ����駤�������ԡ��</span>\n<div id='divLoadEventBilling'></div> <img src='images/icon_update.jpg'>\n</td>";
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
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"Frequency : �к����蹤������\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Spectrum Management</u>:</span> ";
$content  .= "          <span class=\"textSubHead\"> <br>�к������ä�������Է����ä��Ҥ�</span>\n<div id='divLoadEventFrequency'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

} // End if

 
 /*============= Report  My =====================*/
/*
 if(check_auth('M') == true){

$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" ><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='btn_my' class='tr_hover'>";
$content  .= "          <td width=\"5%\"  valign=\"top\"><img src=\"images/icon_my.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"my Reports: �к���§ҹ my\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>My Reports</u> : </span><br /><span class=\"textSubHead\">�к���§ҹ my</span> <img src='images/icon_new.gif'><div id='divLoadEventMY'></div>";
$content  .= "          </td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

} // End if

 #================================================================#
 
   /*============= CAT-KPI =====================*/


 if(check_auth('K') == true){
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" ><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='btn_kpi' class='tr_hover'>";
$content  .= "          <td width=\"5%\"  valign=\"top\"><img src=\"images/icon-cat-kpi.png\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"CAT-KPIs : �к������Թ�š�ô���Թ�ҹ��� KPIs\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>CAT-KPIs</u> : </span><br /><span class=\"textSubHead\">�к������Թ�š�ô���Թ�ҹ��� KPIs</span> <img src='images/icon_new.gif'><div id='divLoadEventKPI'></div>";
$content  .= "          </td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

 } // End if
 
   /*============= Suspend CDRS �к� Billing =====================*/


 if(check_auth('H') == true){
$content  .= "  <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" ><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr id='btn_susp' class='tr_hover'>";
$content  .= "          <td width=\"5%\"  valign=\"top\"><img src=\"images/icon-susp.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"Suspend-CDRs : ��§ҹ������ Suspend CDRs �к� Billing\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>Suspend CDRs</u> : </span><br /><span class=\"textSubHead\">��§ҹ������ Suspend CDRs �к� Billing</span> <img src='images/icon_new.gif'><div id='divLoadEventSUSP'></div>";
$content  .= "          </td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

 } // End if
 

 /*============= DCSS =====================*/
/*
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">"
$content  .= "        <tr onclick=\"fullscreen('http://bis.cattelecom.com/infodept/dcss');SaveEvent('sysname=DCSS&denied=1','divLoadEventDCSS');\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-tris.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"  class=\"tooltips\" title=\"DCSS: �к����ʹ��Ⱥ�ԡ��������â������������͢���\"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>DCSS</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> �к����ʹ��Ⱥ�ԡ��<br>������â������������͢���</span>\n<div id='divLoadEventDCSS'></div>\n</td>";
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
$content  .= "                <span class=\"textSubHead\">�к���§ҹ�š��<br>����Թ�ҹ����ѹ�֡���<br>��ŧ�����Թ�š��<br>����Թ�ҹ �ʷ </span>\n<div id='divLoadEventTris'></div>\n</td>";
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
$content  .= "        <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"EIS/MIS : �к����ʹ�������ͼ��������\"> <span class=\"textHead\"><img src=\"images/indent1.png\"><u>EIS/MIS</u> :</span><br />";
$content  .= "            <span class=\"textSubHead\"> �к����ʹ�������ͼ��������</span>\n<div id='divLoadEventEIS'></div><br>\n</td>";
$content  .= "      </tr>";
$content  .= "    </table>      </td>";
$content  .= "  </tr>";

 }*/ // End if


/*$content  .= "        <tr onClick=\"window.open('./popups.php','winname','left=20,top=20,width=470,height=460,toolbar=0,resizable=0')\"  onmouseover=\"TagToTip('divInfodept')\">";
$content  .= "          <td width=\"5%\"  valign=\"top\" ><img src=\"images/icon-infodept.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"><span class=\"textHead\"><img src=\"images/indent1.png\">Management<br> Information<br> System :<br></span>";
$content  .= "              <span class=\"textSubHead\">�к����ʹ��������<br>��èѴ���</span></td>";
$content  .= "        </tr>";
*/

 
 /*============= DW - Web Entry =====================*/

/*
 if(check_auth('W') == true){
 
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\" onmouseover=\"style.backgroundColor='#CCFFCC';\" onmouseout=\"style.backgroundColor='';\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr onClick=\"dw_entry()\">";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-dw-entry.gif\"  align=\"texttop\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\" class=\"tooltips\" title=\"DW/DM-Web Entry : �ѹ�֡�������к���ѧ������/����ͧ������ (Data Warehouse/Data Mining) \"><span class=\"textHead\"><img src=\"images/indent1.png\"><u>DW/DM-Web Entry</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> �ѹ�֡�������к���ѧ������/����ͧ������<br>(Data Warehouse/Data Mining) </span>\n<div id='divLoadEventEntry'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";

 } // End if 
 
 */


 
  /*============= BIS User Management =====================*/
  if( ((AuthAdmin($_SESSION['usr']) == true) or (AuthViewer($_SESSION['usr'])== true)) ){
$content  .= "    <tr>";
$content  .= "    <td height=\"20\" align=\"left\" valign=\"top\"  style=\"padding:2px 0px 2px 0px; border-bottom:1px dotted #C0C0C0;cursor:pointer\"><table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "        <tr  onclick=\"fullscreen('https://bis.cattelecom.com/usermanagement/');SaveEvent('sysname=BIS User Management&denied=1','divLoadEventUserMng');\" class='tr_hover'>";
$content  .= "          <td width=\"5%\" valign=\"top\"><img src=\"images/icon-user.gif\"  align=\"texttop\" border=\"0\" />&nbsp;</td>";
$content  .= "          <td width=\"95%\" valign=\"top\"  class=\"tooltips\" title=\"BIS User Management : �к��Ѵ��ü������ҹ  BIS ����ö ����� ź ����� ��˹��Է���,����Ҽ������ҹ, Logs �������ҹ��ҧ�\"><span class=\"textHead\"><img src=\"images/indent1.png\" border=\"0\"><u>BIS User Management</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> �к��Ѵ��ü������ҹ  BIS <br>����ö ����� ź ����� ��˹��Է���,����Ҽ������ҹ, Logs �������ҹ��ҧ�</span>\n<div id='divLoadEventUserMng'></div>\n</td>";
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
$content  .= "          <td width=\"95%\" valign=\"top\"   class=\"tooltips\" title=\"Leave Form Management : �к���§ҹ�š���� ����ö ����� ź ����� �����š����\"><span class=\"textHead\"><img src=\"images/indent1.png\" border=\"0\"><u>Leave Form Management</u> : </span> <br />";
$content  .= "                <span class=\"textSubHead\"> �к���§ҹ�š���� <br>����ö ����� ź ����� �����š����</span>\n<div id='divLoadEventUserMng'></div>\n</td>";
$content  .= "        </tr>";
$content  .= "      </table></td>";
$content  .= "  </tr>";
}*/
 #================================================================#
 
 


 } // End // ������ʼ�ҹ Expire �����ͧ�ʴ����١������ҹ


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
	$content  .= "<font color='#FF0000'><b>��������к� BIS</b></font><br><br><button value=\" ��سҤ�ԡ������ \" id='btn_login' class=\"tooltips\" title=\"��ԡ�������������������к�\">��سҤ�ԡ������</button><br>&nbsp;<br>&nbsp;</center>";
}
?>

<?php


?>

<!-------- ���ǻ�С�� --------->
<!--<body onLoad="displayMessage('./notification.php','450','250');"></body>-->
<!--<div id='dialog' name='dialog' style='display: block ;' title="�զ����� �˵� ����Ҫ�"><img src="http://pr.cattelecom.com/king/king53.jpg" width="480" height="690" /></div>-->

<?php
$_SESSION['Ann_count'] +=1;
$sql = "SELECT id,title,contents, datetimes, active ,width , height   FROM cat_Announced  WHERE active = 1";
$rows = $db->sql_fetchrow($db->sql_query($sql));
$count_row = $db->sql_numrows($db->sql_query($sql));

 if($count_row > 0  && $_SESSION['Ann_count'] <= 2) { ?>
<div id="dialog_announced" title="��С�� : <?=$rows['title']?>">
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
			
			set_dialog("diag_login",520 , 320 ,'��������к����ʹ��ȷҧ��áԨ..');			
			
			$("#diag_login").dialog('open');
			get("./modules/Login/dialog_Login.php" ,"diag_login_detail");


			//onclick=\"displayMessage('./modules/Login/dialog_Login.php','510','315');return false\"	
	});
	
		
		
	<!------------------------------------------- CAT KPIs -------------------------------------->
	
	$("#btn_kpi").click(function(){
			
		
	<? //if(check_auth('K') == true){ // ������͡��÷ӧҹ��͹?>
		<? //if($_SESSION['usr'] <> 'catsysmo'){  ?>
		//SaveEvent('sysname=CAT-KPIs&denied=1','divLoadEventKPI');
		//Save Event
		get("./modules/Login/event_log.php?sysname=CAT-KPIs&denied=1" ,"divLoadEventKPI");
		
		<? //} ?>
		//displayMessage('./kpi_menu_select.php','490','285');return false
		set_dialog("diag_login",450 , 350 ,'CAT-KPIs : ���͡��÷ӧҹ');			
			
			$("#diag_login").dialog('open');
			get("kpi_menu_select.php" ,"diag_login_detail");
			
	<? //} //else{ // 价��˹�� �Ѻ��Һ KPIs ��¾�ѡ�ҹ?>
			//alert('������!! �к� CAT-KPIs �ѧ�����Դ����ҹ����ǹ �Ѻ��Һ KPIs ��¾�ѡ�ҹ');			
			
	<? //} ?>
		
	});
	
	
	<!-------------------event based marketing<EBM>---------------------------------------->
    $("#btn_ebm").click(function(){
	 
//Save Event
		get("./modules/Login/event_log.php?sysname=event based marketing&denied=1" ,"divLoadEventEBM");
	// "divLoadEventEBMt"
		window.location="https://bis.cattelecom.com/modules/Login/login_ebm.php";
    //	window.open(this.href,'popUpWindow','height=400,width=600,left=10,top=10,,scrollbars=yes,menubar=no'); return false;"
});


	<!-------------------------------------------My Report -------------------------------------->
	
	$("#btn_my").click(function(){
			
	<? //if(check_auth('K') == true){ // ������͡��÷ӧҹ��͹?>
		<? //if($_SESSION['usr'] <> 'catsysmo'){  ?>
		//SaveEvent('sysname=CAT-KPIs&denied=1','divLoadEventKPI');
		//Save Event
		get("./modules/Login/event_log.php?sysname=My-Report&denied=1" ,"divLoadEventKPI");
		
		<? //} ?>
		//displayMessage('./kpi_menu_select.php','490','285');return false
		set_dialog("diag_login",450 , 410 ,'my Reports : ���͡��÷ӧҹ');			
			
			$("#diag_login").dialog('open');
			get("my_menu_select.php" ,"diag_login_detail");
			
	<? //} //else{ // 价��˹�� �Ѻ��Һ KPIs ��¾�ѡ�ҹ?>
			//alert('������!! �к� CAT-KPIs �ѧ�����Դ����ҹ����ǹ �Ѻ��Һ KPIs ��¾�ѡ�ҹ');			
			
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
					text: "��ŧ",
					click: function() {
						<? //if($_SESSION['usr'] <> 'catsysmo'){  ?>
									get("./modules/Login/event_log.php?sysname=DW/DM Web Portal&denied=1" ,"divLoadEventPortal");									
									window.location="CntUsr.php?select=R";	
							<? //} ?>
						$( this ).dialog( "close" );
							
					}
				},
				{
					text: "¡��ԡ",
					click: function() {
						$( this ).dialog( "close" );
						//alert('cancel');
					}
				}
			]*/
			
		});
		
		
		
		<!------------------------------------------- SAS Web Portal  -------------------------------------->
	
		
	$("#dwdmportal").click(function(event){
		// alert('������ �к� DW/DM ���������ҧ��þѲ��!!');
		
		$( "#dialog_dwdm" ).dialog( "open" );
		//alert('���ͧ�������ҹ�к� DW/DM �����ŷ���ʴ����к��������§�����ŵ�����ҧ���ҹ���');
			$.get('dwdm-term-of-use.php',	function(data){
				$('#dialog-content').html(data);
			});
		//	event.preventDefault();
			
		});
		
		
		
			<!------------------------------------------- SAS Web Report Studio  -------------------------------------->
	
		
	$("#dw_WebStudio").click(function(event){
		// alert('������ �к� DW/DM ���������ҧ��þѲ��!!');
		
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
		// alert('������ �к� DW/DM ���������ҧ��þѲ��!!');
		
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
		// alert('������ �к� DW/DM ���������ҧ��þѲ��!!');
		<?php //if($_SESSION['usr'] <> 'catsysmo'){  ?>
		
		//Save Event
		$.get("./modules/Login/event_log.php?sysname=Summary of Invoices&denied=1" ,function(data){
		
			window.location="https://bis.cattelecom.com/billingtotal";
			// "divLoadEventBilling"
			
		});
		
		<?php //} ?>
			
		});
		

<!------------------------------------------- Frequency   -------------------------------------->

	$("#Frequency").click(function(){
		// alert('������ �к� DW/DM ���������ҧ��þѲ��!!');
		<?php //if($_SESSION['usr'] <> 'catsysmo'){  ?>
		
		//Save Event
		$.get("./modules/Login/event_log.php?sysname=CAT-Frequency&denied=1" ,function(data){
		
			window.location="https://bis.cattelecom.com/frequency/";
			// "divLoadEventFrequency"
			
		});
		
		<?php //} ?>
			
	});		
	
	<!------------------------------------------- Suspend CDRs ���к� Billing  -------------------------------------->
	
		$("#btn_susp").click(function(){
		// alert('������ �к� DW/DM ���������ҧ��þѲ��!!');
		
		<?php //if($_SESSION['usr'] <> 'catsysmo'){  ?>
		
		//Save Event
		$.get("./modules/Login/event_log.php?sysname=SUSPENDCDRS&denied=1" ,function(data){
		
			window.location="https://bis.cattelecom.com/scdr/index.php?";
			// "divLoadEventStatregion"
			
		});
		
		<?php //} ?>
			
		});
	
	
	<!------------------------------------------- Suspendcdrs  -------------------------------------->
	
		$("#btn_susp").click(function(){
		// alert('������ �к� DW/DM ���������ҧ��þѲ��!!');
		
		<?php //if($_SESSION['usr'] <> 'catsysmo'){  ?>
		
		//Save Event
		$.get("./modules/Login/event_log.php?sysname=SUSPENDCDRS&denied=1" ,function(data){
		
			window.location="https://bis.cattelecom.com/scdr/index.php?";
			// "divLoadEventStatregion"
			
		});
		
		<?php //} ?>
			
		});
		
		<!------------------------------------------- User Detail  -------------------------------------->

	// User Detail 
	$("#user_detail").click(function(){
			
			set_dialog("diag_login" ,620 , 600 ,'��������´�������ҹ :   <?=$_SESSION['desc']?>');						
			$("#diag_login").dialog('open');
			var usr = '<?=$_SESSION['usr']?>';
			var userid = '<?=$_SESSION['userid']?>';
			
			
			get("https://bis.cattelecom.com/usermanagement/listUserDetail.php?src=true&username="+usr+"&emp_id="+userid ,"diag_login_detail");
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
			
			//set_dialog("diag_login",350 , 160 ,'�׹�ѹ! ����͡����к� ?');			
	$( "#diag_login" ).dialog({
      modal: true,
	  height: 190,
  	 width: 350,
	  title : '�׹�ѹ! ����͡����к� ?',
      buttons: {
        '  ���  ': function() {
          confirmLogout(true);
        },
		 '  ���  ': function() {
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
<div id="dialog_dwdm" title="��͵�ŧ�������͹䢡�������ԡ�ä�ѧ���������ʹ��ȷҧ��áԨ (DW/DM)  (Terms & Conditions)">
  <div id="dialog-content"  style="width:100%; height:100% overflow:auto;"></div>
  
</div>
