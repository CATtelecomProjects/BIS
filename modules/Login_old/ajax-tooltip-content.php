<?php
switch($_GET['tooltiptype']){
	case "EIS" :
		echo $content .="<span id=\"divEIS\"><font color='red'><img src=\"./images/logo-eis.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>�к����ʹ�����ͼ�������</b></u> </font>&nbsp;- ���ʹ͢��������ʹ������ǡѺ����Թ ��õ�Ҵ���ͧ�� <br>��� Economic Indicator ����Ӥѭ  ����ö��ǹ���Ŵ�����͡����ҹ�к�����������ǳ��ҹ��ҧ�ͧ˹�ҹ�� </span>";
	break;
	
	case "INFODEPT" :
		echo $content .="<span id=\"divInfodept\"><font color='red'><img src=\"./images/logo-infodept.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>�к����ʹ�����͡�èѴ��� </b></u></font>&nbsp;- &nbsp;���ʹ����ʹ�����͡�ú����� �ҷ� �� ��§ҹ�š�ô��Թ�ҹ<br>�ͧἹ�ҹ��ҧ� �͡���Ἱ��áԨ / Ἱ�ҹ�ͧ �ʷ &nbsp;���ʹ�ȴ�ҹ��õ�Ҵ<br> ���ʹ�Ȩҡ��¹͡ ���ʹ��ʶԵԺ�ԡ���ä��Ҥ� �繵�</span>";
	break;

	case "STATREGION" :
		echo $content .="<span id=\"divStatregion\"><font color='red'><img src=\"./images/logo-statregion.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <u><b>�к��ҹʶԵԢͧ�ӹѡ�ҹ��ԡ���١���</b></u></font> - ���ʹ����ʹ�����ʶԵ��ʹ��˹��ºѵ��ä��Ҥ��ء������<br>�ͧ �ʷ ���ʶԵԡ������ԡ�ô�ҹ��ҧ� �ͧ�ӹѡ�ҹ��ԡ���١���(ʤ.) <br>�ҷ��� �����ż����� ��ԡ�������͹ / ��»� �繵�</span>";
	break;

	case "TRIS" :
		echo $content .= "<span id=\"divTris\"><font color='red'><img src=\"./images/logo-tris.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>Tris</u> :  </b></font><br>�к���§ҹ�š�ô��Թ�ҹ����ѹ�֡��͵�ŧ��û����Թ�š�ô��Թ�ҹ�ͧ �ʷ</span>";
	break;

	case "DWPORTAL" :
		echo $content .= "<span id=\"divDWPortal\"><font color='red'><img src=\"./images/logo-webreport.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"><b><u>BI Report</u> :</b> </font><br>��§ҹ�к���ѧ������/����ͧ������ <br>(Data Warehouse/Data Mining)</span>";
	break;

	case "WEBSTUDIO" :
		echo $content .= "<span id=\"divDWWebStudio\"><font color='red'><img src=\"./images/logo-dw-webstudio.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"><b><u>DW-WEb Report Studio</u> : </font></b><br>��/�����§ҹ�к���ѧ������/����ͧ������ <br>(Data Warehouse/Data Mining)</span>";
	break;

	case "WEBENTRY" :
		echo $content .= "<span id=\"divDWEntry\"><font color='red'><img src=\"./images/logo-webentry.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>DW-Web Entry</u> </b></font>: <br>�ѹ�֡�������к���ѧ�������к���ѧ������/����ͧ������ <br>(Data Warehouse/Data Mining)</span>";
	break;
	
case "USERMANAGEMENT" :
	echo $content .= "<span id=\"divUserManamage\"><font color='red'><img src=\"./images/logo-usermanagement.gif\" align=\"left\"><img src=\"./images/indent1.png\" align=\"absmiddle\"> <b><u>BIS User Management</u> </b></font>: <br>�к��Ѵ��ü����ҹ��к� BIS <br>����ö ���� ź ��� ��˹��Է���,���Ҽ����ҹ�� �������ö�� Logs �����ҹ��ҧ�</span>";
	break;

	
	default :

	break;
}
?>