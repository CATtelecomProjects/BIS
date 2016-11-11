<?
	include("conora.php");  // Function  connect Database

		function chkmn($mon)
		{
			if ( strlen($mon) == 1 )
				{
					$r_mon = "0".$mon;
				}
			else
					$r_mon = $mon;


			return $r_mon;
		}

	//===
		function chk_specialchar($t)
			{
					$tmp_t = str_replace("\\\\","\\",trim($t));
					$tmp_t = str_replace("\\\"","\"",trim($tmp_t));
					$tmp_t = str_replace("\'","\"",trim($tmp_t));
				return $tmp_t;
			}
	//===


	//====  Check ค่าตัวแปร  ที่ส่งมา  เป็น Special charactor หรือเปล่า  \ " '   ที่ใช้ในการ  เก็บลง Table  ก่อน (กันมีปัญหา ตอน Save)
			$reason = chk_specialchar($reason);
			$solution = chk_specialchar($solution);
			$operation = chk_specialchar($operation);
			$job_progress = chk_specialchar($job_progress);
	//====

$emp_id = "tui";  //===============  กำหนดค่าให้  emp_id  เท่ากับ "tui"   ไปก่อน

/*
		// --------------    ค่า  ที่ส่งมา ----------------------
			echo "yr = ".$yr."<br>";
			echo "mn = ".$mn."<br>";
			echo "g1 = ".$g1."<br>";
			echo "g_level = ".$g_level."<br>";   //  เกณฑ์การดำเนินงานระดับที่   
			echo "operation = ".$operation."<br>";  //   การดำเนินงานโดยเทียบเกณฑ์    txt
			echo "score_level = ".$score_level."<br>";  //  พยากรณ์คะแนน ณ สิ้นปี  number
			echo "reason = ".$reason."<br>";  //   สาเหตุปัญหา  txt
			echo "solution = ".$solution."<br>";  //  แนวทางแก้ไข  txt
			echo "<br><br>";
		// --------------    ค่า  ที่ส่งมา ----------------------
*/




?>




<html>
<head>
<TITLE> Save Data </TITLE>

<script language = "Javascript">
		function closewin()
		{
					window.close()
		}
</script>

</head>
<body bgcolor="white" background="images/bg22.gif">


<?


// === Start  Select  ข้อมูลก่อนว่ามีอยู่แล้วหรือยัง  จะได้รู้ว่าจะทำการ  Insert into  หรือ  Update 

			$sql_chk_havedata = " select * from tris_operation_quality  ";
			$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and goal_level5 = '".$g_level."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and emp_id = '".$emp_id."'  ";

//echo $sql_chk_havedata."<br>";



		// นับจำนวน rows ว่ามีกี่ rows
		  $cntrows = OCIParse($db_conn, $sql_chk_havedata);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// นับจำนวน rows ว่ามีข้อมูลหรือไม่


		if ($chkrows > 0)
			{
				$chk_havedata = "Y";  // มีข้อมูลอยู่แล้ว ให้ทำการ Update
			}
		else
			{
				$chk_havedata = "N";  // ไม่มีข้อมูลเลย ให้ Insert ใหม่
			}

// === END  Select  ข้อมูลก่อนว่ามีอยู่แล้วหรือยัง  จะได้รู้ว่าจะทำการ  Insert into  หรือ  Update 




// =======================   Process  =======================================================

		echo "<center>";


		switch ($chk_havedata)
			{
				case "Y" :

								// ==== START   Update  
										$sql_upd_data = " update tris_operation_quality ";

												if (!empty($operation))
														$sql_upd_data = $sql_upd_data." set level_operation = '".$operation."'";
												else
														$sql_upd_data = $sql_upd_data." set level_operation = null ";

												if (!empty($score_level))
														$sql_upd_data = $sql_upd_data." , year_predict = '".$score_level."'";
												else
														$sql_upd_data = $sql_upd_data." , year_predict = null ";

												if (!empty($reason))
														$sql_upd_data = $sql_upd_data." , reason = '".$reason."'";
												else
														$sql_upd_data = $sql_upd_data." , reason = null ";

												if (!empty($solution))
														$sql_upd_data = $sql_upd_data." , solution = '".$solution."'";
												else
														$sql_upd_data = $sql_upd_data." , solution = null ";

												if (!empty($job_progress))
														$sql_upd_data = $sql_upd_data." , progress = '".$job_progress."'";
												else
														$sql_upd_data = $sql_upd_data." , progress = null ";

										$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
										$sql_upd_data = $sql_upd_data." and month = '".$mn."'  ";
										$sql_upd_data = $sql_upd_data." and topic_id  = '".$g1."'  ";
										$sql_upd_data = $sql_upd_data." and goal_level5 = '".$g_level."'  ";
										$sql_upd_data = $sql_upd_data." and emp_id  = '".$emp_id."'  ";


											//=== Start   สำหรับใช้ check ว่ามีการ Update / Insert   สำเร็จหรือเปล่า
												  $cntrows = OCIParse($db_conn, $sql_upd_data);
												  OCIExecute($cntrows);
												  $chk_upd_ok = OCIRowCount($cntrows); 
											//=== End   สำหรับใช้ check ว่ามีการ Update / Insert   สำเร็จหรือเปล่า

											  if ($chk_upd_ok > 0 )
													{
																	// --- Start -- Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "Update ".$chk_upd_ok." Records Complete.";
																		echo '");  ';
																		echo " parent.location = 'save_quality.php?yr=".$yr."&mn=".$mn."&g1=".$g1."&g_level=".$g_level."' ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
													}
											  else
													{
																	// --- Start -- Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "ไม่สามารถ Update ได้ค่ะ  !!!   ลองอีกครั้งนะคะ";
																		echo '");  ';
																		echo " parent.location = 'save_quality.php?yr=".$yr."&mn=".$mn."&g1=".$g1."&g_level=".$g_level."' ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
													}

								//==== END  Update

						break;

				case "N":   //  Insert   new  data

												if (!empty($operation))
														$operation = "'".$operation."'";
												else
														$operation = "null";

												if (!empty($score_level))
														$score_level = "'".$score_level."'";
												else
														$score_level = "null";

												if (!empty($reason))
														$reason = "'".$reason."'";
												else
														$reason = "null";

												if (!empty($solution))
														$solution = "'".$solution."'";
												else
														$solution = "null";

												if (!empty($job_progress))
														$job_progress = "'".$job_progress."'";
												else
														$job_progress = "null";


								// ==== START   Insert new data

												$sql_ins_data = " insert into tris_operation_quality( year , month , topic_id ,  emp_id , goal_level5 , level_operation , reason , solution , year_predict , save_date , progress )  ";
												$sql_ins_data = $sql_ins_data." values('".$yr."','".$mn."','".$g1."','".$emp_id."','".$g_level."',".$operation.",".$reason.",".$solution.",".$score_level." , sysdate , ".$job_progress.") ";

//echo "<br>".$sql_ins_data."<br>";


											//=== Start   สำหรับใช้ check ว่ามีการ Update / Insert   สำเร็จหรือเปล่า
												  $cntrows = OCIParse($db_conn, $sql_ins_data);
												  OCIExecute($cntrows);
												  $chk_ins_ok = OCIRowCount($cntrows);
											//=== End   สำหรับใช้ check ว่ามีการ Update / Insert   สำเร็จหรือเปล่า

											  if ($chk_ins_ok > 0 )
													{
																	// --- Start -- Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "Insert ".$chk_ins_ok." Records Complete.";
																		echo '");  ';
																		echo " parent.location = 'save_quality.php?yr=".$yr."&mn=".$mn."&g1=".$g1."&g_level=".$g_level."' ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
													}
											  else
													{
																	// --- Start -- Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "ไม่สามารถ บันทึกข้อมูล ได้ค่ะ  !!!  ลองอีกครั้งนะคะ";
																		echo '");  ';
																		echo " parent.location = 'save_quality.php?yr=".$yr."&mn=".$mn."&g1=".$g1."&g_level=".$g_level."' ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
													}

								//==== END   Insert new data



						break;
			}


		echo "</center>";

// =======================   Process  =======================================================


?>

</body>
</html>
