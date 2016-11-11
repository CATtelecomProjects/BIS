<?
session_start();
if (!isset($usr))
{
	?>
			<script language = "javascript">
					window.location = "http://bis.cattelecom.com";
			</script>
	<?
}
?>
<?
$desc = $_SESSION['desc'];
$emp=$_SESSION['userid'] ;
?>
<html>
<head>
<title>ระบบรายงานผลการดำเนินงานของ กสท ตามบันทึกข้อตกลงประเมินผลการดำเนินงานรัฐวิสาหกิจ</title>
<!--Fireworks MX 2004 Dreamweaver MX 2004 target.  Created Fri Aug 20 19:31:32 GMT+0800 (China Standard Time) 2004-->
<link href="style.css" rel="stylesheet" type="text/css" />
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
<div id="Layer2" style="width:163px; height:91px; position:absolute; left:188px; top:332px; z-index:2;">
  <p align="justify" class="style2"><font size="2" face="MS Sans Serif"><a href="report.php">รายงานผลการดำเนินงานตามบันทึกข้อตกลงการประเมินผลการดำเนินงานของ กสท</a><br>
		<a href="../tris/document/manual.doc">คู่มือการใช้งาน</a></font></p>
</div>
<div id="Layer3" style="width:163px; height:94px; position:absolute; left:427px; top:332px; z-index:3;">
  <div align="justify">
        <p><font size="2" face="MS Sans Serif" color="#666666">
		<? if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='209102')||($emp=='274548')||($emp=='033718')
		||($emp=='011565')||($emp=='333803')||($emp=='355593'))
		{
		echo '<a href="save_volume.php">บันทึกข้อมูลเชิงปริมาณ</a>';
         }
		 else
		 {
		    echo "บันทึกข้อมูลเชิงปริมาณ";
		 }
		?>
		<br>
		<? if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='348665')||($emp=='231756')||($emp=='172446')||($emp=='283380')||($desc=='นายจิรายุทธ  รุ่งศรีทอง')||($emp=='350679'))
		{
		echo '<a href="save_quality.php">บันทึกข้อมูลเชิงคุณภาพ</a>';
         }
		 else
		 {
		    echo "บันทึกข้อมูลเชิงคุณภาพ";
		 }
		?>
		<br>
		<? if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='171450')||($emp=='180289')||($emp=='312031')
		||($emp=='323648')||($emp=='172792')||($emp=='275615')||($emp=='232496')||($emp=='293448')||($emp=='351759'))
		{
		echo '<a href="menu3.php">บันทึกข้อมูลเชิงบริหารจัดการ</a>';
         }
		 else
		 {
		    echo "บันทึกข้อมูลเชิงบริหารจัดการ";
		 }
		?>
		</font></p>
</div>
</div>
<div id="Layer4" style="width:162px; height:88px; position:absolute; left:676px; top:334px; z-index:4;">
  <div align="justify">
        <p><font size="2" face="MS Sans Serif" color="#666666">
		<? if (($emp=='354277')||($emp=='233356')||($emp=='226143'))  {
		echo '<a href="eva_management.php">ประเมินผลพยากรณ์ทุกตัวชี้วัด</a>';
         }
		 else
		 {
		    echo "ประเมินผลพยากรณ์ทุกตัวชี้วัด";
		 }
		?>
		</font></p>
</div>
</div>
<table border="0" cellpadding="0" cellspacing="0" width="721" align="center">
<!-- fwtable fwsrc="template1.png" fwbase="index.gif" fwstyle="Dreamweaver" fwdocid = "1173201612" fwnested="0" -->
    <tr>
        <td>
            <p align="center"><img src="images/spacer.gif" width="6" height="1" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="226" height="1" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="3" height="1" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="6" height="1" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="237" height="1" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="7" height="1" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="236" height="1" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="1" height="1" border="0" alt=""></p>
        </td>
    </tr>

  <tr>
        <td rowspan="3" colspan="3">
            <p align="center"><font size="2" face="MS Sans Serif">ชื่อผู้ใช้งาน :  <?echo  $desc; ?></font></p>
        </td>
        <td colspan="4">
            <p align="center"><img name="index_r1_c4" src="images/index_r1_c4.gif" width="486" height="11" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="1" height="11" border="0" alt=""></p>
        </td>
  </tr>
    <tr>
        <td rowspan="2">
            <p align="center"><img name="index_r2_c4" src="images/index_r2_c4.gif" width="6" height="28" border="0" alt=""></p>
        </td>
        <td colspan="3" bgcolor="#0099FF">
            <p align="center"><font size="2" face="MS Sans Serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><a href = "http://bis.cattelecom.com/main.php"><font size="2" face="MS Sans Serif" color="white">ออกจากระบบ</font></a></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="1" height="22" border="0" alt=""></p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p align="center"><img name="index_r3_c5" src="images/index_r3_c5.gif" width="480" height="6" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="1" height="6" border="0" alt=""></p>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <p align="center"><img name="index_r4_c1" src="images/index_r4_c1.gif" width="241" height="61" border="0" alt=""></p>
        </td>
        <td rowspan="4" colspan="3">
            <p align="center"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="480" height="176">
            <param name="movie" value="images/t1.swf">
            <param name="play" value="true">
            <param name="loop" value="true">
            <param name="quality" value="high">
<embed width="480" height="176" src="images/t1.swf" play="true" loop="true" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="1" height="61" border="0" alt=""></p>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <p align="center"><img name="index_r5_c1" src="images/index_r5_c1.gif" width="241" height="4" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="1" height="4" border="0" alt=""></p>
        </td>
    </tr>
    <tr>
        <td rowspan="3">
            <p align="center"><img name="index_r6_c1" src="images/index_r6_c1.gif" width="6" height="135" border="0" alt=""></p>
        </td>
        <td valign="top">
            <p align="center"><span class="style1"><br>
   </span><img src="images/logo_catdata.gif" border="0"></p>
        </td>
        <td rowspan="3" colspan="2">
            <p align="center"><img name="index_r6_c3" src="images/index_r6_c3.gif" width="9" height="135" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="1" height="108" border="0" alt=""></p>
        </td>
    </tr>
    <tr>
        <td rowspan="2">
            <p align="center"><img name="index_r7_c2" src="images/index_r7_c2.gif" width="226" height="27" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="1" height="3" border="0" alt=""></p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p align="center"><img name="index_r8_c5" src="images/index_r8_c5.gif" width="480" height="24" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="1" height="24" border="0" alt=""></p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p align="center"><img name="index_r9_c1" src="images/index_r9_c1.gif" width="235" height="179" border="0" alt=""></p>
        </td>
        <td rowspan="2">
            <p align="center"><img name="index_r9_c4" src="images/index_r9_c4.gif" width="6" height="205" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img name="index_r9_c5" src="images/index_r9_c5.gif" width="237" height="179" border="0" alt=""></p>
        </td>
        <td rowspan="2">
            <p align="center"><img name="index_r9_c6" src="images/index_r9_c6.gif" width="7" height="205" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img name="index_r9_c7" src="images/index_r9_c7.gif" width="236" height="179" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="1" height="179" border="0" alt=""></p>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p align="center"><img name="index_r10_c1" src="images/index_r10_c1.gif" width="235" height="26" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img name="index_r10_c5" src="images/index_r10_c5.gif" width="237" height="26" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img name="index_r10_c7" src="images/index_r10_c7.gif" width="236" height="26" border="0" alt=""></p>
        </td>
        <td>
            <p align="center"><img src="images/spacer.gif" width="1" height="26" border="0" alt=""></p>
        </td>
    </tr>
 <?  include("footer.php"); ?>
</table>


</body>
</html>