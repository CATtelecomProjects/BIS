<? session_start();

	//include ("conora.php");
	include("./includes/custom_files/dbConnect.php");
	$dbOra  -> debug= false;
	

	$today =  date("Y/m/d");
		// �� Log Statregion //
	


		// �� Log KPI //
	

		// ��ҧҹ EIS 
		if ($_GET['select'] == 'E'){
		echo '<script language="javascript">';
		echo "window.location = 'goto_eis.php';";
		echo '</script>';
		}

		//��ҧҹ Infodept * ������ $i  ���͡�˹� Level
		if ($_GET['select'] == 'I')	{
		echo '<script language="javascript">';
		echo "window.location = './goto_infodept.php';";
		//echo "window.location = '../infodept/check_login.php'";
		echo '</script>';
		}
//��ҧҹ Statregion * ������ $s  ���͡�˹� Level
		if ($_GET['select'] == 'S'){
		//$today = date("d-M-y");
		$cmdstr = "insert into login_cstatregion  values('".$usr."','".$org."','".$mlevel."' ,to_date('".$today."','YYYY/MM/DD'))";
		$dbOra -> Execute($cmdstr);	
		//$parsed=ociparse($db_conn,$cmdstr);
		//ociexecute($parsed);	

		echo '<script language="javascript">';
		/**echo "window.location = '../program/fmain.php'";*/
		echo "window.location = 'goto_stat.php'";
		echo '</script>';
		}
//��ҧҹ Dawich
/*		if ($_GET['select'] == 'D')		{
		echo '<script language="javascript">';
		echo "window.location = 'redirect.php'";
		echo '</script>';
		}
*/

//��ҧҹ KPI * ������ $i  ���͡�˹� Level
		if ($_GET['select'] == 'K'){
		
		echo '<script language="javascript">';
		//echo "window.location = 'http://172.16.192.41/bsc-kpi/Auth.php?userid=".base64_encode($_SESSION[userid])."&randText=".$_SESSION[randText]."'";
		echo "window.location = 'http://bis.cattelecom.com/cat-kpi/Auth.php';";
		echo '</script>';
		}
		
// ��ҧҹ TRIS 
if ($_GET['select'] == 'T')		{
		echo '<script language="javascript">';
		echo "window.location = 'goto_tris.php'";
		echo '</script>';
		}



		
// ��ҧҹ DW-DM WEb Portal 
if ($_GET['select'] == 'R')		{ 

		// $redirect = isset($_GET['PortalPage']) ? "<input type=\"hidden\" name=\"PortalPage\" value=\"".$_GET['PortalPage']."\" />" : "";
		

		
		// ����Ǥ��Ǩ����� EIM ���Ҥ�ͺ�к� BIS
	/*
		$str = $_SESSION['userid']; // ��˹���� $str = ���� ��� 8 ��ѡ
		
		$arrEmp_id = str_split($str); //�ŧ����� array
		
		$rev_emp_id = array_reverse($arrEmp_id); // �ӡ�����§ array �ҡ��ѧ�˹��
		
		$pass_dwdm = implode("", $rev_emp_id); // �ŧ��Ѻ�ҡ array �� string
*/

		$autoForm = " <form action=\"http://dw-webreport.cattelecom.com:7001/SASLogon/Logon.do\" method=\"post\" id=\"DWDMForm\"> ";
		$autoForm .= " <input name=\"ux\" type=\"hidden\" value=\"".$_SESSION['userid']."\"> ";
		$autoForm .= " <input name=\"px\" type=\"hidden\" value=\"".base64_decode($_SESSION['password'])."\">";
		$autoForm .= " <input type=\"hidden\" name=\"_sasapp\" value=\"Information Delivery Portal 4.3\" />  ";
		
		//$autoForm .= $redirect;
		
		$autoForm .= " </form>";    	
		echo $autoForm;
		
		echo '<script language="javascript">'; 
		
		// ��˹� User ����ͧ����觪��ͼ����ҹ�᷹��������ʾ�ѡ�ҹ
		$exclude_user = array("mgt_train","training1","training2","training3","catdemo","mes","ceodemo");
	
		$search = in_array($_SESSION['usr'] , $exclude_user);
	
	if($search == true){
		echo "window.location = 'http://dw-webreport.cattelecom.com:7001/SASLogon/Logon.do?ux=".$_SESSION['usr']."&px=".base64_decode($_SESSION['password'])."&_sasapp=Information+Delivery+Portal+4.3' ";
	}else{
		echo "document.getElementById('DWDMForm').submit();"; // SUBMIT FORM
	}
		
	
		//echo "window.location = 'http://dw-webreport.cattelecom.com:7001/Portal/logon.do?userid=".$_SESSION['usr']."&password=".strtolower($_SESSION['pass_dw'])."' ";
		echo '</script>';
		}			

		
// ��ҧҹ DW-DM WEb Report Studio 
if ($_GET['select'] == 'W')		{
		$autoForm = " <form action=\"http://dw-webreport.cattelecom.com:7001/SASLogon/Logon.do\" method=\"post\" id=\"DWDMForm\"> ";
		$autoForm .= " <input name=\"ux\" type=\"hidden\" value=\"".$_SESSION['userid']."\"> ";
		$autoForm .= " <input name=\"px\" type=\"hidden\" value=\"".base64_decode($_SESSION['password'])."\">";
		$autoForm .= " <input type=\"hidden\" name=\"_sasapp\" value=\"Web Report Studio 4.3\" />  ";
		$autoForm .= " </form>";    	
		echo $autoForm;
		
		echo '<script language="javascript">';
		
		//echo "window.location ='http://dw-webreport.cattelecom.com:7001/SASLogon/Logon.do?ux=".$_SESSION['userid']."&px=".base64_decode($_SESSION['password'])."&_sasapp=Web+Report+Studio+4.3';";
		
		echo "document.getElementById('DWDMForm').submit();"; // SUBMIT FORM
		
		echo '</script>';
		}			
	
// ��ҧҹ DW-DM WEb Data Entry
/*if ($_GET['select'] == 'W')		{
		echo '<script language="javascript">';
		echo "window.location = 'http://dw-webentry.cattelecom.com:8080/catedu/common/do_login.jsp?username=".$_SESSION['usr']."&password=".strtolower($_SESSION['pass_dw'])."' ";
		echo '</script>';
		}			
*/				
		
?>	
