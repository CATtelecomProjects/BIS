<?session_start();?>
<HTML>
<HEAD>
<TITLE> ��Ǩ�ͺ�����....NONG... </TITLE>
</HEAD>
<BODY>
<? 	
	include ("conora.php");

		// �� Log Statregion //
		

		// �� Log KPI //
	

		// ��ҧҹ EIS 
		if ($select == 'E')
		{
		echo '<script language="javascript">';
		echo "window.location = 'goto_eis.php'";
		echo '</script>';
		}

		//��ҧҹ Infodept * ������ $i  ���͡�˹� Level
		if ($select == 'I')
		{
		echo '<script language="javascript">';
		echo "window.location = '../infodept/check_login_new.php'";
		//echo "window.location = '../infodept/check_login.php'";
		echo '</script>';
		}
//��ҧҹ Statregion * ������ $s  ���͡�˹� Level
		if ($select == 'S')
		{
		$today = date("d-M-y");
		$cmdstr = "insert into login_cstatregion  values('".$usr."','".$org."','".$mlevel."' ,'".$today."')";
		$parsed=ociparse($db_conn,$cmdstr);
		ociexecute($parsed);	

		echo '<script language="javascript">';
		echo "window.location = '../program/fmain.php'";
		echo '</script>';
		}
//��ҧҹ Dawich
		if ($select == 'D')
		{
		echo '<script language="javascript">';
		echo "window.location = 'redirect.php'";
		echo '</script>';
		}

//��ҧҹ KPI * ������ $i  ���͡�˹� Level
		if ($select == 'K')
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


?>	
</BODY>
</HTML>
