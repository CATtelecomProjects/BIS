<?php
switch($_GET['tooltiptype']){
	case "EIS" :
		echo $content .="<span id=\"divEIS\"><font color='red'><img src=\"./images/logo-eis.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>ระบบสารสนเทศเพื่อผู้บริหาร</b></u> </font>&nbsp;- นำเสนอข้อมูลสารสนเทศเกี่ยวกับการเงิน การตลาดเบื้องต้น <br>และ Economic Indicator ที่สำคัญ  สามารถดาวน์โหลดคู่มือการใช้งานระบบนี้ได้ที่บริเวณด้านล่างของหน้านี้ </span>";
	break;
	
	case "INFODEPT" :
		echo $content .="<span id=\"divInfodept\"><font color='red'><img src=\"./images/logo-infodept.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>ระบบสารสนเทศเพื่อการจัดการ </b></u></font>&nbsp;- &nbsp;นำเสนอสารสนเทศเพื่อการบริหาร อาทิ เช่น รายงานผลการดำเนินงาน<br>ของแผนงานต่างๆ เอกสารแผนธุรกิจ / แผนงานของ กสท &nbsp;สารสนเทศด้านการตลาด<br> สารสนเทศจากภายนอก สารสนเทศสถิติบริการโทรคมนาคม เป็นต้น</span>";
	break;

	case "STATREGION" :
		echo $content .="<span id=\"divStatregion\"><font color='red'><img src=\"./images/logo-statregion.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>ระบบงานสถิติของสำนักงานบริการลูกค้า</b></u></font> - นำเสนอสารสนเทศและสถิติยอดจำหน่ายบัตรโทรคมนาคมทุกประเภท<br>ของ กสท และสถิติการให้บริการด้านต่างๆ ของสำนักงานบริการลูกค้า(สค.) <br>อาทิเช่น ข้อมูลผู้เช่า บริการรายเดือน / รายปี เป็นต้น</span>";
	break;

	case "TRIS" :
		echo $content .= "<span id=\"divTris\"><font color='red'><img src=\"./images/logo-tris.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>Tris</u> :  </b></font><br>ระบบรายงานผลการดำเนินงานตามบันทึกข้อตกลงการประเมินผลการดำเนินงานของ กสท</span>";
	break;

	case "DWPORTAL" :
		echo $content .= "<span id=\"divDWPortal\"><font color='red'><img src=\"./images/logo-webreport.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"><b><u>BI Report</u> :</b> </font><br>รายงานระบบคลังข้อมูล/เหมืองข้อมูล <br>(Data Warehouse/Data Mining)</span>";
	break;

	case "WEBSTUDIO" :
		echo $content .= "<span id=\"divDWWebStudio\"><font color='red'><img src=\"./images/logo-dw-webstudio.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"><b><u>DW-WEb Report Studio</u> : </font></b><br>ดู/แก้ไขรายงานระบบคลังข้อมูล/เหมืองข้อมูล <br>(Data Warehouse/Data Mining)</span>";
	break;

	case "WEBENTRY" :
		echo $content .= "<span id=\"divDWEntry\"><font color='red'><img src=\"./images/logo-webentry.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>DW-Web Entry</u> </b></font>: <br>บันทึกข้อมูลระบบคลังข้อมูลระบบคลังข้อมูล/เหมืองข้อมูล <br>(Data Warehouse/Data Mining)</span>";
	break;
	
case "USERMANAGEMENT" :
	echo $content .= "<span id=\"divUserManamage\"><font color='red'><img src=\"./images/logo-usermanagement.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>BIS User Management</u> </b></font>: <br>ระบบจัดการผู้ใช้งานในระบบ BIS <br>สามารถ เพิ่ม ลบ แก้ไข กำหนดสิทธิ์,ค้นหาผู้ใช้งานได้ และสามารถดู Logs การใช้งานต่างๆ</span>";
	break;

	
	default :

	break;
}
?>