<?
	include("conora.php");  // Function  connect Database

	$emp_id = "tui";  //===============  กำหนดค่าให้  emp_id  เท่ากับ "tui"   ไปก่อน


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
		$sql_chk_havedata = " select * from tris_topic  ";
		$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
		$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";





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
								


											$sql_upd_data = " update tris_topic  ";
											$sql_upd_data = $sql_upd_data." set topic_name = '".$topic_name."' ";
											$sql_upd_data = $sql_upd_data." ,criteria_type = '".$criteria_type."' ";
											$sql_upd_data = $sql_upd_data." ,definition = '".$definition."' ";
											$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
											$sql_upd_data = $sql_upd_data." and topic_id = '".$g1."'  ";

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
																		echo " parent.location = 'save_criteria.php?yr=".$yr."&g1=".$g1."'; ";
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
																		echo " parent.location = 'save_criteria.php?yr=".$yr."&g1=".$g1."'; ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
													}

								//==== END  Update

						break;

				case "N":   //  Insert   new  data


								// ==== START   Insert new data



												$sql_ins_data = " insert into tris_topic(year ,  topic_id , topic_name , criteria_type , definition)  ";
												$sql_ins_data = $sql_ins_data." values('".$yr."','".$g1."','".$topic_name."','".$criteria_type."','".$definition."') ";

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
																		echo " parent.location = 'save_criteria.php?yr=".$yr."&g1=".$g1."'; ";
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
																		echo " parent.location = 'save_criteria.php?yr=".$yr."&g1=".$g1."'; ";
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
