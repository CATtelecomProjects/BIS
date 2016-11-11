<?
session_start();
$desc = $_SESSION['desc'];
$emp=$_SESSION['userid'] ;
?>
<html>
<head>
<title>ระบบประเมินผลการดำเนินงานรัฐวิสหากิจ</title>
<!--Fireworks MX 2004 Dreamweaver MX 2004 target.  Created Fri Aug 20 19:31:32 GMT+0800 (China Standard Time) 2004-->
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
}
.textbox {
	border: thin none;
	background-color: #EFEFEF;
}
.style2 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 10px; color: #666666; }
-->
</style>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<meta http-equiv="content-type" content="text/html; charset=windows-874">
</head>
<body bgcolor="#ffffff" vlink="blue" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">
<table border="0" cellpadding="0" cellspacing="0" width="1000">
<!-- fwtable fwsrc="template1.png" fwbase="index.gif" fwstyle="Dreamweaver" fwdocid = "1173201612" fwnested="0" -->
    <tr>
        <td width="243">
                <p align="left"><img src="images/spacer.gif" width="226" height="1" border="0" alt=""></p>
        </td>
        <td width="435">
                <p align="left"><img src="images/spacer.gif" width="237" height="1" border="0" alt=""></p>
        </td>
        <td width="9">
                <p align="left"><img src="images/spacer.gif" width="7" height="1" border="0" alt=""></p>
        </td>
        <td width="313">
                <p align="left"><img src="images/spacer.gif" width="236" height="1" border="0" alt=""></p>
        </td>
    </tr>

        <tr>
        <td width="243" height="21">
                <p align="center"><font size="2" face="MS Sans Serif">ชื่อผู้ใช้งาน : <?echo  $desc; ?> </font></p>
        </td>
        <td colspan="3" bgcolor="#0099FF" width="757" height="21">
                <p align="center"><font size="2" face="MS Sans Serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></p>
        </td>        </tr>
    <tr>
        <td valign="top" width="243" height="98">
            <p align="left"><img src="images/logo_catdata1.gif" width="243" height="98" border="0"></p>
        </td>        <td rowspan="2" colspan="3" width="757" height="98">

            <p><img src="images/header2.gif" width="760" height="98" border="0"></p>
        </td>
    </tr>
    <tr>
        <td rowspan="2" width="243" height="22">

            <p align="center"><font size="2" face="MS Sans Serif" color="#0099FF">วัน 
		<script language="JavaScript">
days = new Array(7)
days[1] = "&#3629;&#3634;&#3607;&#3636;&#3605;&#3618;&#3660;";
days[2] = "&#3592;&#3633;&#3609;&#3607;&#3619;&#3660;";
days[3] = "&#3629;&#3633;&#3591;&#3588;&#3634;&#3619;"; 
days[4] = "&#3614;&#3640;&#3608;";
days[5] = "&#3614;&#3620;&#3627;&#3633;&#3626;&#3610;&#3604;&#3637;";
days[6] = "&#3624;&#3640;&#3585;&#3619;&#3660;";
days[7] = "&#3648;&#3626;&#3634;&#3619;&#3660;";
months = new Array(12)
months[1] = "มกราคม";
months[2] = "กุมภาพันธ์";
months[3] = "มีนาคม";
months[4] = "เมษายน";
months[5] = "พฤษภาคม";
months[6] = "มิถุนายน";
months[7] = "กรกฎาคม";
months[8] = "สิงหาคม";
months[9] = "กันยายน";
months[10] = "ตุลาคม"; 
months[11] = "พฤศจิกายน";
months[12] = "ธันวาคม";
today = new Date(); day = days[today.getDay() + 1]
month = months[today.getMonth() + 1]
date = today.getDate()
year=today.getYear(); 
if (year > 2000)
year = year + 543;
document.write ("<span class='emp-txt'> "+ day +
"&#3607;&#3637;&#3656; " + date + " " + month +" "+ year + "</span>")
// -- end hiding  </script>
 </font></p>
        </td>
    </tr>
    <tr>
        <td colspan="3" width="757" height="22" bgcolor="#0099FF">

            <p align="center"><font size="2" face="MS Sans Serif">&nbsp;</font><font size="2" face="MS Sans Serif" color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><a href="index.php"><font size="2" face="MS Sans Serif" color="white">เมนูหลัก</font></a><font size="2" face="MS Sans Serif" color="white"> | </font><a href="report.php"><font size="2" face="MS Sans Serif" color="white">รายงาน</font></a><font size="2" face="MS Sans Serif" color="white"> | </font><a href="menu3.php"><font size="2" face="MS Sans Serif" color="white">บันทึกข้อมูลเชิงบริหารจัดการ</font></a><font size="2" face="MS Sans Serif" color="white"> |</font><a href="search3_2.php"><font size="2" face="MS Sans Serif" color="white">&nbsp;</font><font size="2" face="MS Sans Serif" color="white">ค้นหา</font></a><font size="2" face="MS Sans Serif" color="white"> |&nbsp; </font><a href="http://bis.cattelecom.com/main.php"><font size="2" face="MS Sans Serif" color="white">ออกจากระบบ</font></a></p>
        </td>
    </tr>
</table>




</body>
</html>