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

			$author = chk_specialchar($author);
			$unit = chk_specialchar($unit);
			$weight = chk_specialchar($weight);
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
		$sql_chk_havedata = " select * from tris_topic_detail  ";
		$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
		$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
		$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";


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


											$sql_upd_data = " update tris_topic_detail ";
											$sql_upd_data = $sql_upd_data." set  ";

											if (!empty($author))
													$sql_upd_data = $sql_upd_data."  author_id = ".$author;
											else
													$sql_upd_data = $sql_upd_data."  author_id = null ";
											if (!empty($unit))
													$sql_upd_data = $sql_upd_data." , unit_id = ".$unit;
											else
													$sql_upd_data = $sql_upd_data." , unit_id = null ";
											if (!empty($weight))
													$sql_upd_data = $sql_upd_data." , weight = ".$weight;
											else
													$sql_upd_data = $sql_upd_data." , weight = null ";
											$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
											$sql_upd_data = $sql_upd_data." and month = '".$mn."'  ";
											$sql_upd_data = $sql_upd_data." and topic_id  = '".$g1."'  ";

											//echo $sql_upd_data;

											//=== Start   สำหรับใช้ check ว่ามีการ Update / Insert   สำเร็จหรือเปล่า
												  $cntrows = OCIParse($db_conn, $sql_upd_data);
												  OCIExecute($cntrows);
												  $chk_upd_ok = OCIRowCount($cntrows); 
											//=== End   สำหรับใช้ check ว่ามีการ Update / Insert   สำเร็จหรือเปล่า

											  if ($chk_upd_ok > 0 )
													{
//														echo "<br>";
//														echo "Update ".$chk_upd_ok." Records Complete.";

																	// --- Start -- Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "Update ".$chk_upd_ok." Records Complete.";
																		echo '");  ';
																		echo " parent.location = 'save_criteria_detail.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript

													}
											  else
													{
//														echo "<br>";
//														echo "<font color='red'>ไม่สามารถ Update ได้ค่ะ  !!!  (Err_upd)</font>";
																	// --- Start -- Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
																	
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "ไม่สามารถ Update ได้ค่ะ  !!!   ลองอีกครั้งนะคะ";
																		echo '");  ';
																		echo " parent.location = 'save_criteria_detail.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
																		echo '}';
																		echo '</script>';
																	
																	// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
													}

								//==== END  Update

						break;

				case "N":   //  Insert   new  data


								// ==== START   Insert new data


												if (!empty($author))
														$author = $author;
												else
														$author = "null";

												if (!empty($unit))
														$unit = $unit;
												else
														$unit = "null";

												if (!empty($weight))
														$weight = $weight;
												else
														$weight = "null";

												if (!empty($coworker1))
														$coworker1 = $coworker1;
												else
														$coworker1 = "null";

												if (!empty($coworker2))
														$coworker2 = $coworker2;
												else
														$coworker2 = "null";


												$sql_ins_data = " insert into tris_topic_detail(year , month , topic_id , author_id , unit_id , weight , coworker1 , coworker2)  ";
												$sql_ins_data = $sql_ins_data." values('".$yr."','".$mn."','".$g1."',".$author.",".$unit.",".$weight.",'".$coworker1."','".$coworker2."') ";

												//echo $sql_ins_data;


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
																		echo " parent.location = 'save_criteria_detail.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
																		echo " parent.location = 'save_criteria_detail.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
