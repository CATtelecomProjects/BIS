<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>

<TITLE>สาเหตุที่ไม่บรรลุเป้าหมาย และแนวทางการแก้ไข</TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
</HEAD>

<BODY>
<font size="2" face="MS Sans Serif">
<table cellspacing="1" width="100%" bordercolordark="white" bordercolorlight="black" style="border-collapse:collapse;">
    <tr>
			<td width="100%" colspan="3"  bgcolor="#0066FF"><p align="center"><b>
			<font size="2" face="MS Sans Serif" color="white">ปัญหา/อุปสรรค เสนอแนวทางแก้ไข</font></b></p></td></tr>


<?
		
		//เช็คตัวแปรที่ส่งมา

		if (empty($solution)) 
		{
            echo '<td width="100%" colspan="3" ><p align="center"><b><font size="2" face="MS Sans Serif">ไม่มีข้อมูล</font></b></p><br></td></tr></table>';
		}
		else
		{

			echo '<tr><td width="100%" colspan="3" style="border-width:1; border-color:white; border-style:solid;">';
            echo '<p align="left"><font size="2" face="MS Sans Serif">'.$solution.'</font></p></td></tr></table>';
		}

?>


</BODY>
</HTML>