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

			$author = chk_specialchar($author);
			$unit = chk_specialchar($unit);
			$weight = chk_specialchar($weight);
	//====

$emp_id = "tui";  //===============  ��˹�������  emp_id  ��ҡѺ "tui"   仡�͹

/*
		// --------------    ���  ������� ----------------------
			echo "yr = ".$yr."<br>";
			echo "mn = ".$mn."<br>";
			echo "g1 = ".$g1."<br>";
			echo "topicid = ".$stopicid."<br>";
			echo "percent_sucess = ".$percent_sucess."<br>";
			echo "score_level = ".$score_level."<br>";
			echo "reason = ".$reason."<br>";
			echo "solution = ".$solution."<br>";
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
		$sql_chk_havedata = " select * from tris_topic_detail  ";
		$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
		$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
		$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";


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

											//=== Start   ����Ѻ�� check ����ա�� Update / Insert   �������������
												  $cntrows = OCIParse($db_conn, $sql_upd_data);
												  OCIExecute($cntrows);
												  $chk_upd_ok = OCIRowCount($cntrows); 
											//=== End   ����Ѻ�� check ����ա�� Update / Insert   �������������

											  if ($chk_upd_ok > 0 )
													{
//														echo "<br>";
//														echo "Update ".$chk_upd_ok." Records Complete.";

																	// --- Start -- Pop Up �����Ţ���� ���� javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "Update ".$chk_upd_ok." Records Complete.";
																		echo '");  ';
																		echo " parent.location = 'save_criteria_detail.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up �����Ţ���� ���� javascript

													}
											  else
													{
//														echo "<br>";
//														echo "<font color='red'>�������ö Update ����  !!!  (Err_upd)</font>";
																	// --- Start -- Pop Up �����Ţ���� ���� javascript
																	
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "�������ö Update ����  !!!   �ͧ�ա���駹Ф�";
																		echo '");  ';
																		echo " parent.location = 'save_criteria_detail.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
																		echo '}';
																		echo '</script>';
																	
																	// --- END ---Pop Up �����Ţ���� ���� javascript
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
																		echo " parent.location = 'save_criteria_detail.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
																		echo " parent.location = 'save_criteria_detail.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
