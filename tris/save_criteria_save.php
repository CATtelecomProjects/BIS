<?
	include("conora.php");  // Function  connect Database

	$emp_id = "tui";  //===============  ��˹�������  emp_id  ��ҡѺ "tui"   仡�͹


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
		$sql_chk_havedata = " select * from tris_topic  ";
		$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
		$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";





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
								


											$sql_upd_data = " update tris_topic  ";
											$sql_upd_data = $sql_upd_data." set topic_name = '".$topic_name."' ";
											$sql_upd_data = $sql_upd_data." ,criteria_type = '".$criteria_type."' ";
											$sql_upd_data = $sql_upd_data." ,definition = '".$definition."' ";
											$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
											$sql_upd_data = $sql_upd_data." and topic_id = '".$g1."'  ";

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
																		echo " parent.location = 'save_criteria.php?yr=".$yr."&g1=".$g1."'; ";
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
																		echo " parent.location = 'save_criteria.php?yr=".$yr."&g1=".$g1."'; ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up �����Ţ���� ���� javascript
													}

								//==== END  Update

						break;

				case "N":   //  Insert   new  data


								// ==== START   Insert new data



												$sql_ins_data = " insert into tris_topic(year ,  topic_id , topic_name , criteria_type , definition)  ";
												$sql_ins_data = $sql_ins_data." values('".$yr."','".$g1."','".$topic_name."','".$criteria_type."','".$definition."') ";

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
																		echo " parent.location = 'save_criteria.php?yr=".$yr."&g1=".$g1."'; ";
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
																		echo " parent.location = 'save_criteria.php?yr=".$yr."&g1=".$g1."'; ";
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
