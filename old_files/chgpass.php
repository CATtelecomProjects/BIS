<HTML>
<HEAD>
<TITLE> ระบบสารสนเทศผ่านเครือข่าย  Intranet :: Change password</TITLE>
<link href="style.css" rel="stylesheet" type="text/css">
<script language="javascript">
function savepass()
{
	if (frmchgp.txtusr.value == 'cattelecom')
	{
			alert("User cattelecom ไม่สามารถเปลี่ยนแปลง Password ได้");
	}else
	{
		if (frmchgp.txtusr.value == '')
		{
			alert("กรุณาใส่ User Name");
		}
		else if (frmchgp.txtold.value == "")
		{
			alert("กรุณาใส่ User Name");
		}
		else if (frmchgp.txtold.value == frmchgp.txtnew.value)
		{
			alert("ไม่สามารถเปลี่ยนได้ เนื่องจาก Password ซ้ำกับตัวเดิม");
		}else
			{
				if ((frmchgp.txtnew.value == "") || (frmchgp.txtnew1.value == ""))
				{
					alert("Password ใหม่ต้องไม่ใช่ค่าว่าง");
				} 
				else if (frmchgp.txtnew.value == frmchgp.txtnew1.value)
					{
						tmp='savepass.php?opass='+frmchgp.txtold.value+'&npass='+frmchgp.txtnew.value+'&usr='+frmchgp.txtusr.value;
						self.location = tmp;
						alert("ทำการเปลี่ยน Password เรียบร้อยแล้ว กรุณา Login เข้าใหม่");
					} 
					else
						alert("กรุณาพิมพ์รหัสให้ตรงกันทั้ง 2 ช่อง");
		}
	}
}
function logout()
{
	tmp = 'index.php';
	self.location = tmp;
}
</script>
<meta http-equiv="content-type" content="text/html; charset=windows-874">
</HEAD>
<BODY leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" vlink="blue">
<?
	session_start();
	include("conora.php");
?>
<FORM name = "frmchgp" METHOD=POST ACTION="">
    <center>        <table width="1000" cellpadding="0" cellspacing="0">
            <tr>
                <td height="15" bgcolor="white" colspan="3" width="1001"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="1000" height="193">
                    <param name="movie" value="images/logo_2.swf">
                    <param name="play" value="true">
                    <param name="loop" value="true">
                    <param name="quality" value="high">
<embed width="1000" height="193" src="images/logo_2.swf" play="true" loop="true" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed></object></td>
            </tr>
            <tr>
                <td bgcolor="#000066" height="11" width="300"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><b><a href="http://bis.cattelecom.com"><font size="3" face="MS Sans Serif" color="white">Home</font></a></b></td>
                <td width="410" height="11" bgcolor="#000066">

                    <p align="left">&nbsp;</p>
                </td>
                <td width="291" height="11" bgcolor="#000066">
                    <p><b><font size="3" face="MS Sans Serif" color="white"><b>&nbsp;วัน</font></b><font color="white" face="MS Sans Serif" size="3">
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
// -- end hiding 
            </script>
</font></b><font color="white"><b><br>
</b></font></p>
                </td>
            </tr>
            <tr>
                <td colspan="3" width="1001">&nbsp;</td>
            </tr>
            <tr>
                <td width="300">

                    <p align="center"><img src="images/man1.gif" width="150" height="218" border="0"></p>


                </td>
<td width="701" colspan="2">                    <div align="left">
                        <TABLE width="398" cellpadding="0" cellspacing="0">
                            <tr>
                                <td colspan='2'  class=head width="398" bgcolor="#6699CC"><center><b><font size="3" face="MS Sans Serif" color="white">Change Password</font></b></center></td>
                            </tr>
                            <TR>
                                <TD  class=unit width="151" bgcolor="#EEEEEE">

                                    <p align="right">&nbsp;</p>
                                </TD>
                                <TD width="247" bgcolor="#EEEEEE">&nbsp;</TD>
                            </TR>
                            <TR>
                                <td width="151" bgcolor="#EEEEEE" class="unit">

                                    <p align="right"><b><font size="2" face="MS Sans Serif">Username :</font></b></p>
                                </td>
                                <td width="247" bgcolor="#EEEEEE">&nbsp;<INPUT TYPE="text" NAME="txtusr"></td>
                            </TR>
                            <TR>
                                <TD  class=unit width="151" bgcolor="#EEEEEE">

                                    <p align="right"><b><font size="2" face="MS Sans Serif">Old Password </font><font size="2" face="Arial">:</font></b></p>
                                </TD>
                                <TD width="247" bgcolor="#EEEEEE">&nbsp;<INPUT TYPE="password" NAME="txtold"></TD>
                            </TR>
                            <TR>
                                <TD class=unit width="151" bgcolor="#EEEEEE">

                                    <p align="right"><b><font size="2" face="MS Reference Sans Serif">New Password :</font></b></p>
                                </TD>
                                <TD width="247" bgcolor="#EEEEEE">&nbsp;<INPUT TYPE="password" NAME="txtnew"></TD>
                            </TR>
                            <TR>
                                <TD  class=unit width="151" bgcolor="#EEEEEE">

                                    <p align="right"><b><font size="2" face="MS Sans Serif">Confirm Password :</font></b></p>
                                </TD>
                                <TD width="247" bgcolor="#EEEEEE">&nbsp;<INPUT TYPE="password" NAME="txtnew1"></TD>
                            </TR>
                            <TR>
                                <td width="398" colspan="2" bgcolor="#EEEEEE">&nbsp;</td>
                            </TR>
                            <tr>
                                <td colspan='2' width="398" bgcolor="#EEEEEE"><center><INPUT TYPE="button" value="Change" onclick=savepass();>&nbsp;<INPUT TYPE="reset" value="Cancle" onclick=logout();><!-- <INPUT TYPE="button" value='เข้าระบบ' onclick=login();> --></center></td>
                            </tr>
                            <tr>
                                <td width="398" colspan="2" bgcolor="#EEEEEE">&nbsp;</td>
                            </tr>
                        </TABLE>
                    </div>
</td>
            </tr>
            <tr>
                <td colspan="3" width="1001">
                    <P align=center>&nbsp;</P>
                </td>
            </tr>
            <tr>
                <td bgcolor="#6699CC" colspan="3" width="1001">

                    <P align=center><B><font size="2" face="MS Sans Serif" color="white">ฝ่ายพัฒนาระบบเทคโนโลยีสารสนเทศเพื่องานลูกค้าและธุรกิจ 
(ลท.)<BR>พัฒนาโดย&nbsp;ส่วนพัฒนาระบบสารสนเทศทางธุรกิจ&nbsp;&nbsp;&nbsp; โทร. 
0-2956-7332-4<br></font><FONT 
face="MS Sans Serif" color=white>:</FONT><font size="2" face="MS Sans Serif" color="white">+:&nbsp; Best view with Internet Explorer  
</font></B><font size="2" face="MS Sans Serif" color="white"><b>1024x768 </b></font><B><font size="2" face="MS Sans Serif" color="white">resolution&nbsp; :+:</font><font size="2" face="MS Sans Serif" color="#5E8809"><BR></font></B></P>
                </td>
            </tr>
        </table>
    </center>

</FORM>
</BODY>
</HTML>
