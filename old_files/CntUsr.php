<? session_start();?>
<HTML>
<HEAD>
<TITLE> ตรวจสอบผู้ใช้งาน.... </TITLE>
</HEAD>
<BODY>
<? 	
	include ("conora.php");

		// เก็บ Log Statregion //
		

		// เก็บ Log KPI //
	

		// เข้างาน EIS 
		if ($_GET['select'] == 'E')
		{
		echo '<script language="javascript">';
		echo "window.location = 'goto_eis.php'";
		echo '</script>';
		}

		//เข้างาน Infodept * ใช้ตัวแปล $i  เพื่อกำหนด Level
		if ($_GET['select'] == 'I')
		{
		echo '<script language="javascript">';
		echo "window.location = './goto_infodept.php'";
//		echo "window.location = '../infodept/check_login.php'";
		echo '</script>';
		}
//เข้างาน Statregion * ใช้ตัวแปล $s  เพื่อกำหนด Level
		if ($_GET['select'] == 'S')
		{
		$today = date("d-M-y");
		$cmdstr = "insert into login_cstatregion  values('".$usr."','".$org."','".$mlevel."' ,'".$today."')";
		$parsed=ociparse($db_conn,$cmdstr);
		ociexecute($parsed);	

		echo '<script language="javascript">';
		/**echo "window.location = '../program/fmain.php'";*/
		echo "window.location = 'goto_stat.php'";
		echo '</script>';
		}
//เข้างาน Dawich
		if ($_GET['select'] == 'D')
		{
		echo '<script language="javascript">';
		echo "window.location = 'redirect.php'";
		echo '</script>';
		}

//เข้างาน KPI * ใช้ตัวแปล $i  เพื่อกำหนด Level
		if ($_GET['select'] == 'K')
		{
		$today = date("d-M-y");
		$cmdstr = "insert into strategy.login_kpi  values('".$usr."','".$userid."','".$today."')";
		$parsed=ociparse($db_conn,$cmdstr);
		ociexecute($parsed);	

		echo '<script language="javascript">';
//		echo "window.location = '../kpi/index_kpi.php'";
		echo "window.location = '../kpi/fmain_kpi.php'";
		echo '</script>';
		}
// เข้างาน TRIS 
if ($_GET['select'] == 'T')
		{
		echo '<script language="javascript">';
		echo "window.location = 'goto_tris.php'";
		echo '</script>';
		}
?>	
</BODY>
</HTML>
