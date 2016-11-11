<?
	session_start();
	include("conora.php");
	
	$today = date("d-M-y");
	$exdate = date("d-M-y",strtotime("+90 day"));
	$cmdstr = "select  username,password,org_code  from user_login where username ='".$_POST['txtusr']."'  and password = '".$_POST['txtold']."' ";

	$parsed=ociparse($db_conn,$cmdstr);
	ociexecute($parsed);
    $nrows=ocifetch($parsed);

	$org = ociresult($parsed,3);
	//session_register("org");
	$_SESSION['org']=$org;

	/*$area = ociresult($parsed,4);
	session_register("area");
	$_session['area']=$area;*/


	if  ($nrows == 1 )
	{
		$cmdstr = "update user_login set password ='".$_POST['txtnew']."' ,change_date ='".$today."' ,expire_date = '$exdate' where username ='".$_POST['txtusr']."'";
		$parsed=ociparse($db_conn,$cmdstr);
		ociexecute($parsed);

		//$cmdIns =  "insert into login_count  values('".$usr."' , '".$npass."', 'A' ,'".$today."')";
		//$parsed_ins=ociparse($db_conn,$cmdIns);
		//ociexecute($parsed_ins);	
				global $prefix, $db, $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;
				unset($_SESSION['usr']);	
				unset($_SESSION['desc']);
				unset($_SESSION['p']);
				unset($_SESSION['level']);
				unset($_SESSION['s']);
				unset($_SESSION['d']);
				unset($_SESSION['mlevel']);
				unset($_SESSION['org']);
				unset($_SESSION['userid']);
				unset($_SESSION['klevel']);
				unset($_SESSION['mlevels']);
		echo '<script language="javascript">';
		echo 'alert("รหัสผ่านได้ถูกแก้ไขแล้วกรุณาทำการ Login ใหม่");';
				//echo 'tmp = "index1.php";';
		echo 'tmp = "index.php";';
		echo 'parent.location = tmp;';
		echo '</script>';
		


	}
else  // nrows <> 1
	{
			//echo "ชื่อหรือรหัสผ่านไม่ถูกต้อง";
			echo '<script language = javascript>'; 
			echo 'alert("ชื่อหรือรหัสผ่านไม่ถูกต้อง");';
			echo '	location.href = "modules.php?name=Login&op=chgpass";'; 
			echo '</script>'; 
	}  // end $nrows = 1

//	**** ต้องเพิ่ม ins ใน table user_login

?>

