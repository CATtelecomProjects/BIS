<?
	include("conora.php");  // Function  connect Database




switch ($criteriatype)  // แสดงข้อมูลตาม  criteria_type ที่ส่งมา
{

//=================================  CRITERIA  TYPE  เท่ากับ  1  ==========================

	case "1":
				//---------START-------  ดึงข้อมูล  สาเหตุไม่บรรลุเป้าหมาย  กับ แนวทางแก้ไข  -------------

								$sql = " select goal_level5 , reason , solution , progress , level_operation , year_predict ";
								$sql = $sql. " from tris_operation_quality  ";
								$sql = $sql. " where year = '".$yr."'  ";
								$sql = $sql. " and month = '".$mn."'  ";
								$sql = $sql. " and topic_id = '".$topicid."'  ";
								$sql = $sql. " order by goal_level5  ";

							// นับจำนวน rows ว่ามีกี่ rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// นับจำนวน rows ว่ามีข้อมูลหรือไม่

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									$var_reason = "";
									$var_solution = "";
									$var_jobprogress = "";
									$var_leveloperation = "";
									$var_yearpredict = "";

									while (ocifetch($data_sql))
										{
											$goallevel5 = ociresult($data_sql,1);
											$reason = ociresult($data_sql,2);
											$solution = ociresult($data_sql,3);
											$job_progress = ociresult($data_sql,4);
											$level_operation = ociresult($data_sql,5);
											$year_predict = ociresult($data_sql,6);

											$var_reason = $var_reason."ระดับที่ ".$goallevel5." : ".$reason."<br>";
											$var_solution = $var_solution."ระดับที่ ".$goallevel5." : ".$solution."<br>";
											$var_jobprogress = $var_jobprogress."ระดับที่ ".$goallevel5." : ".$job_progress."<br>";
											$var_leveloperation = $var_leveloperation."ระดับที่ ".$goallevel5." : ".$level_operation."<br>";
											$var_yearpredict = $var_yearpredict."ระดับที่ ".$goallevel5." : ".$year_predict."<br>";
										}
								}

				//---------END-------  ดึงข้อมูล  สาเหตุไม่บรรลุเป้าหมาย  กับ แนวทางแก้ไข  -------------



				//---------START-------  ดึงข้อมูล  ผู้รับผิดชอบ -------------

								$sql = " select a.author ";
								$sql = $sql. " from tris_master_authority a , tris_topic_detail b ";
								$sql = $sql. " where b.year = '".$yr."'  ";
								$sql = $sql. " and b.month = '".$mn."'  ";
								$sql = $sql. " and b.topic_id = '".$topicid."'  ";
								$sql = $sql. " and a.id = b.author_id ";


							// นับจำนวน rows ว่ามีกี่ rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// นับจำนวน rows ว่ามีข้อมูลหรือไม่

							
							$var_author = "";
							$cntauthor=0;

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									while (ocifetch($data_sql))
										{
											$v_author = ociresult($data_sql,1);
									
											if ($cntauthor>0)  // กรณี มีมากกว่า 1 ผู้รับผิดชอบ   ผู้รับผิดชอบต่อไป จะได้  มี comma คั่นน่ะ ต่อไปจะได้
												{
													$var_author = $var_author." , ".$v_author;
												}
											else
												{
													$var_author = $v_author;
												}
											$cntauthor++;
										}
								}

				//---------END-------  ดึงข้อมูล  ผู้รับผิดชอบ -------------


				//---------START-------  ดึงข้อมูล  ผู้ประสานงาน -------------

							   $sql = " select a.monitor_name ";
								$sql = $sql. " from tris_monitor a , tris_topic_detail b ";
								$sql = $sql. " where b.year = '".$yr."'  ";
								$sql = $sql. " and b.month = '".$mn."'  ";
								$sql = $sql. " and b.topic_id = '".$topicid."'  ";
								$sql = $sql. " and a.monitor_id = b.monitor ";

							// นับจำนวน rows ว่ามีกี่ rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// นับจำนวน rows ว่ามีข้อมูลหรือไม่

							
							$var_userlogin = "";
							$cntuserlogin=0;

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									while (ocifetch($data_sql))
										{
											$v_userlogin = ociresult($data_sql,1);
									
											if ($cntuserlogin>0)  // กรณี มีมากกว่า 1 ผู้รับผิดชอบ   ผู้รับผิดชอบต่อไป จะได้  มี comma คั่นน่ะ ต่อไปจะได้
												{
													$var_userlogin = $var_userlogin." , ".$v_userlogin;
												}
											else
												{
													$var_userlogin = $v_userlogin;
												}
											$cntuserlogin++;
										}
								}

				//---------END-------  ดึงข้อมูล  ผู้รับผิดชอบ -------------
			break;


//=================================  CRITERIA  TYPE  เท่ากับ  2  ==========================

	case "2":
				//---------START-------  ดึงข้อมูล  สาเหตุไม่บรรลุเป้าหมาย  กับ แนวทางแก้ไข  -------------

								$sql = " select reason , solution , progress ";
								$sql = $sql. " from tris_operation_volume  ";
								$sql = $sql. " where year = '".$yr."'  ";
								$sql = $sql. " and month = '".$mn."'  ";
								$sql = $sql. " and topic_id = '".$topicid."'  ";

							// นับจำนวน rows ว่ามีกี่ rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// นับจำนวน rows ว่ามีข้อมูลหรือไม่

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									$var_reason = "";
									$var_solution = "";
									$var_jobprogress = "";


									while (ocifetch($data_sql))
										{
											$reason = ociresult($data_sql,1);
											$solution = ociresult($data_sql,2);
											$job_progress = ociresult($data_sql,3);

											$var_reason = $var_reason.$reason."<br>";
											$var_solution = $var_solution.$solution."<br>";
											$var_jobprogress = $var_jobprogress.$job_progress."<br>";
										}
								}

				//---------END-------  ดึงข้อมูล  สาเหตุไม่บรรลุเป้าหมาย  กับ แนวทางแก้ไข  -------------



				//---------START-------  ดึงข้อมูล  ผู้รับผิดชอบ -------------

								$sql = " select a.author ";
								$sql = $sql. " from tris_master_authority a , tris_topic_detail b ";
								$sql = $sql. " where b.year = '".$yr."'  ";
								$sql = $sql. " and b.month = '".$mn."'  ";
								$sql = $sql. " and b.topic_id = '".$topicid."'  ";
								$sql = $sql. " and a.id = b.author_id ";


							// นับจำนวน rows ว่ามีกี่ rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// นับจำนวน rows ว่ามีข้อมูลหรือไม่

							
							$var_author = "";
							$cntauthor=0;

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									while (ocifetch($data_sql))
										{
											$v_author = ociresult($data_sql,1);
									
											if ($cntauthor>0)  // กรณี มีมากกว่า 1 ผู้รับผิดชอบ   ผู้รับผิดชอบต่อไป จะได้  มี comma คั่นน่ะ ต่อไปจะได้
												{
													$var_author = $var_author." , ".$v_author;
												}
											else
												{
													$var_author = $v_author;
												}
											$cntauthor++;
										}
								}

				//---------END-------  ดึงข้อมูล  ผู้รับผิดชอบ -------------


				//---------START-------  ดึงข้อมูล  ผู้ประสานงาน -------------

                               $sql = " select a.monitor_name ";
								$sql = $sql. " from tris_monitor a , tris_topic_detail b ";
								$sql = $sql. " where b.year = '".$yr."'  ";
								$sql = $sql. " and b.month = '".$mn."'  ";
								$sql = $sql. " and b.topic_id = '".$topicid."'  ";
								$sql = $sql. " and a.monitor_id = b.monitor ";

							// นับจำนวน rows ว่ามีกี่ rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// นับจำนวน rows ว่ามีข้อมูลหรือไม่

							
							$var_userlogin = "";
							$cntuserlogin=0;

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									while (ocifetch($data_sql))
										{
											$v_userlogin = ociresult($data_sql,1);
									
											if ($cntuserlogin>0)  // กรณี มีมากกว่า 1 ผู้รับผิดชอบ   ผู้รับผิดชอบต่อไป จะได้  มี comma คั่นน่ะ ต่อไปจะได้
												{
													$var_userlogin = $var_userlogin." , ".$v_userlogin;
												}
											else
												{
													$var_userlogin = $v_userlogin;
												}
											$cntuserlogin++;
										}
								}

				//---------END-------  ดึงข้อมูล  ผู้รับผิดชอบ -------------

			break;


//==================================================================================

	default:
			$var_reason="";
			$var_solution="";
			$var_jobprogress="";
			$var_leveloperation = "";
			$var_yearpredict = "";
			$var_author="";
			$var_userlogin="";

}  // END  switch


?>


<html>

<head>
<title>แสดงข้อมูล</title>
<meta name="generator" content="Namo WebEditor v6.0">
<meta http-equiv="content-type" content="text/html; charset=windows-874">


<script language="JavaScript">
	function open_newwindow(name, url)
	{
	  window.open(url, name, 'left=300 , top=320 , width=400 , height=160 , toolbar=no , menubar=no , status=no , scrollbars=no , resizable=yes');
	}
</script>

</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">
<table width="495" cellspacing="0" style="border-collapse:collapse;">
    <tr>
        <td width="491" style="border-width:1; border-color:white; border-style:solid;" colspan="2" bgcolor="#0099FF">
            <p align="center"><b><font size="3" face="MS Sans Serif" color="white">แสดงข้อมูล</font></b></p>
        </td>
    </tr>



	<?  

		if ($criteriatype <> "2")
		{
			 echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">การดำเนินงานโดยเทียบเกณฑ์ :</font></td>';
		   echo ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
				
					echo $var_leveloperation;
				
			echo '</font></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">พยากรณ์ผลการดำเนินงานปลายปี :</font></td>';
	echo  ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
				
					echo $var_yearpredict;

			echo '</font></td>';
	  echo  '</tr>';
	 echo ' <tr>';
	echo  ' <td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">สาเหตุที่ไม่บรรลุเป้าหมาย :</font></td>';
	echo  ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
					echo $var_reason;
		
		echo	'</font></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">แนวทางแก้ไข :</font></td>';
			echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
			
					echo $var_solution;
		echo '</font></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">ความคืบหน้าของแนวทางแก้ไข</font></td>';
			echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
			
					echo $var_jobprogress;
			
			echo '</font></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">ผู้รับผิดชอบ</font></td>';
			echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
			
				echo $var_author;
			
			echo '</font></td>';
	echo  ' </tr>';
		echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">ผู้ประสานงาน (Monitor)</font></td>';
		  echo ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
							echo $var_userlogin;
			
			echo '</font></td>';
		echo '</tr>';
		}
		else
		{
echo ' <tr>';
echo  ' <td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">สาเหตุที่ไม่บรรลุเป้าหมาย :</font></td>';
echo  ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
				echo $var_reason;
	
	echo	'</font></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">แนวทางแก้ไข :</font></td>';
        echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
		
				echo $var_solution;
	echo '</font></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">ความคืบหน้าของแนวทางแก้ไข</font></td>';
        echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
		
				echo $var_jobprogress;
		
		echo '</font></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">ผู้รับผิดชอบ</font></td>';
        echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
		
			echo $var_author;
		
		echo '</font></td>';
echo  ' </tr>';
    echo '<tr>';
        echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">ผู้ประสานงาน (Monitor)</font></td>';
      echo ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
						echo $var_userlogin;
		
		echo '</font></td>';
    echo '</tr>';
		}
	?>
	    <tr>
        <td width="491" bgcolor="white" style="border-width:1; border-color:white; border-style:solid;" colspan="2">
            <form name="form1">

				<p align="center">
					<input type="button" name="close" value="ปิดหน้านี้" onclick="window.close();">
				</p>
            </form>
            <p>&nbsp;</p>
        </td>
    </tr>
</table>
<p>&nbsp;</p>
</body>

</html>
