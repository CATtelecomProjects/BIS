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


	//====  Check ��ҵ����  �������  �� Special charactor ��������  \ " '   �����㹡��  ��ŧ Table  ��͹ (�ѹ�ջѭ�� �͹ Save)
			$reason = chk_specialchar($reason);
			$solution = chk_specialchar($solution);
			$operation = chk_specialchar($operation);
			$job_progress = chk_specialchar($job_progress);
	//====

$emp_id = "tui";  //===============  ��˹�������  emp_id  ��ҡѺ "tui"   仡�͹

/*
		// --------------    ���  ������� ----------------------
			echo "yr = ".$yr."<br>";
			echo "mn = ".$mn."<br>";
			echo "g1 = ".$g1."<br>";
			echo "g_level = ".$g_level."<br>";   //  ࡳ���ô��Թ�ҹ�дѺ���   
			echo "operation = ".$operation."<br>";  //   ��ô��Թ�ҹ����ºࡳ��    txt
			echo "score_level = ".$score_level."<br>";  //  ��ҡó��ṹ � ��鹻�  number
			echo "reason = ".$reason."<br>";  //   ���˵ػѭ��  txt
			echo "solution = ".$solution."<br>";  //  �Ƿҧ���  txt
			echo "<br><br>";
		// --------------    ���  ������� ----------------------
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


// === Start  Select  �����š�͹������������������ѧ  ���������Ҩзӡ��  Insert into  ����  Update 

			$sql_chk_havedata = " select * from tris_operation_quality  ";
			$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and goal_level5 = '".$g_level."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and emp_id = '".$emp_id."'  ";

//echo $sql_chk_havedata."<br>";



		// �Ѻ�ӹǹ rows ����ա�� rows
		  $cntrows = OCIParse($db_conn, $sql_chk_havedata);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// �Ѻ�ӹǹ rows ����բ������������


		if ($chkrows > 0)
			{
				$chk_havedata = "Y";  // �բ������������� ���ӡ�� Update
			}
		else
			{
				$chk_havedata = "N";  // ����բ�������� ��� Insert ����
			}

// === END  Select  �����š�͹������������������ѧ  ���������Ҩзӡ��  Insert into  ����  Update 




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


											//=== Start   ����Ѻ�� check ����ա�� Update / Insert   �������������
												  $cntrows = OCIParse($db_conn, $sql_upd_data);
												  OCIExecute($cntrows);
												  $chk_upd_ok = OCIRowCount($cntrows); 
											//=== End   ����Ѻ�� check ����ա�� Update / Insert   �������������

											  if ($chk_upd_ok > 0 )
													{
																	// --- Start -- Pop Up �����Ţ���� ���� javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "Update ".$chk_upd_ok." Records Complete.";
																		echo '");  ';
																		echo " parent.location = 'save_quality.php?yr=".$yr."&mn=".$mn."&g1=".$g1."&g_level=".$g_level."' ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up �����Ţ���� ���� javascript
													}
											  else
													{
																	// --- Start -- Pop Up �����Ţ���� ���� javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "�������ö Update ����  !!!   �ͧ�ա���駹Ф�";
																		echo '");  ';
																		echo " parent.location = 'save_quality.php?yr=".$yr."&mn=".$mn."&g1=".$g1."&g_level=".$g_level."' ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up �����Ţ���� ���� javascript
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


											//=== Start   ����Ѻ�� check ����ա�� Update / Insert   �������������
												  $cntrows = OCIParse($db_conn, $sql_ins_data);
												  OCIExecute($cntrows);
												  $chk_ins_ok = OCIRowCount($cntrows);
											//=== End   ����Ѻ�� check ����ա�� Update / Insert   �������������

											  if ($chk_ins_ok > 0 )
													{
																	// --- Start -- Pop Up �����Ţ���� ���� javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "Insert ".$chk_ins_ok." Records Complete.";
																		echo '");  ';
																		echo " parent.location = 'save_quality.php?yr=".$yr."&mn=".$mn."&g1=".$g1."&g_level=".$g_level."' ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up �����Ţ���� ���� javascript
													}
											  else
													{
																	// --- Start -- Pop Up �����Ţ���� ���� javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "�������ö �ѹ�֡������ ����  !!!  �ͧ�ա���駹Ф�";
																		echo '");  ';
																		echo " parent.location = 'save_quality.php?yr=".$yr."&mn=".$mn."&g1=".$g1."&g_level=".$g_level."' ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up �����Ţ���� ���� javascript
													}

								//==== END   Insert new data



						break;
			}


		echo "</center>";

// =======================   Process  =======================================================


?>

</body>
</html>
