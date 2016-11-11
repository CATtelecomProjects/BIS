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
			$progress = chk_specialchar($progress);
	//====


$emp_id = "tui";  //===============  กำหนดค่าให้  emp_id  เท่ากับ "tui"   ไปก่อน

/*
		// --------------    ค่า  ที่ส่งมา ----------------------
			echo "yr = ".$yr."<br>";
			echo "mn = ".$mn."<br>";
			echo "g1 = ".$g1."<br>";
			echo "topicid = ".$stopicid."<br>";
			echo "percent_sucess = ".$percent_sucess."<br>";
			echo "score_level = ".$score_level."<br>";
			echo "reason = ".$reason."<br>";
			echo "solution = ".$solution."<br>";
			echo "progress = ".$progress."<br>";
			echo "<br><br>";*/
		// --------------    ค่า  ที่ส่งมา ----------------------




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
		$sql_chk_havedata = " select * from tris_operation_management  ";
		$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
		$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
		$sql_chk_havedata = $sql_chk_havedata." and subtopic_id = '".$g1."'  ";
		$sql_chk_havedata = $sql_chk_havedata." and emp_id = '".$emp_id."'  ";
		$sql_chk_havedata = $sql_chk_havedata." and topic_id  = '".$stopicid."'  ";

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
				case "Y":

								// ==== START   Update  
								
												if (!empty($percent_sucess))
														$percent_sucess = $percent_sucess;
												else
														$percent_sucess = "null";

												if (!empty($score_level))
														$score_level = $score_level;
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

												if (!empty($progress))
														$progress = "'".$progress."'";
												else
														$progress = "null";

											$sql_upd_data = " update tris_operation_management  ";
											$sql_upd_data = $sql_upd_data." set reason = ".$reason;
											$sql_upd_data = $sql_upd_data." , solution = ".$solution;
											$sql_upd_data = $sql_upd_data." , progress = ".$progress;
											$sql_upd_data = $sql_upd_data." , operation_goal = ".$percent_sucess;
											$sql_upd_data = $sql_upd_data." , operation_level = ".$score_level;
											$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
											$sql_upd_data = $sql_upd_data." and month = '".$mn."'  ";
											$sql_upd_data = $sql_upd_data." and subtopic_id  = '".$g1."'  ";
											$sql_upd_data = $sql_upd_data." and emp_id  = '".$emp_id."'  ";
											$sql_upd_data = $sql_upd_data." and topic_id  = '".$stopicid."'  ";

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
																		echo " parent.location = 'save3_3_2.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
																		echo " parent.location = 'save3_3_2.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript

													}

								//==== END  Update

						break;

				case "N":   //  Insert   new  data


								// ==== START   Insert new data

												if (!empty($percent_sucess))
														$percent_sucess = $percent_sucess;
												else
														$percent_sucess = "null";

												if (!empty($score_level))
														$score_level = $score_level;
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

												if (!empty($progress))
														$progress = "'".$progress."'";
												else
														$progress = "null";


												$sql_ins_data = " insert into tris_operation_management(year , month , subtopic_id , topic_id , operation_goal , operation_level , reason , solution , active_flag ,  emp_id , save_date , progress)  ";
												$sql_ins_data = $sql_ins_data." values('".$yr."','".$mn."','".$g1."','".$stopicid."',".$percent_sucess.",".$score_level.",".$reason.",".$solution.",2,'".$emp_id."',sysdate , ".$progress." ) ";

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
																		echo " parent.location = 'save3_3_2.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
																		echo " parent.location = 'save3_3_2.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
