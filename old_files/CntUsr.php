<? session_start();?>
<HTML>
<HEAD>
<TITLE> ��Ǩ�ͺ�����ҹ.... </TITLE>
</HEAD>
<BODY>
<? 	
	include ("conora.php");

		// �� Log Statregion //
		

		// �� Log KPI //
	

		// ��ҧҹ EIS 
		if ($_GET['select'] == 'E')
		{
		echo '<script language="javascript">';
		echo "window.location = 'goto_eis.php'";
		echo '</script>';
		}

		//��ҧҹ Infodept * ������ $i  ���͡�˹� Level
		if ($_GET['select'] == 'I')
		{
		echo '<script language="javascript">';
		echo "window.location = './goto_infodept.php'";
//		echo "window.location = '../infodept/check_login.php'";
		echo '</script>';
		}
//��ҧҹ Statregion * ������ $s  ���͡�˹� Level
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
//��ҧҹ Dawich
		if ($_GET['select'] == 'D')
		{
		echo '<script language="javascript">';
		echo "window.location = 'redirect.php'";
		echo '</script>';
		}

//��ҧҹ KPI * ������ $i  ���͡�˹� Level
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
// ��ҧҹ TRIS 
if ($_GET['select'] == 'T')
		{
		echo '<script language="javascript">';
		echo "window.location = 'goto_tris.php'";
		echo '</script>';
		}
?>	
</BODY>
</HTML>
