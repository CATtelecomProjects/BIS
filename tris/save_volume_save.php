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
			$this_month = floatval($this_month);
	//====


$emp_id = "tui";  //===============  ��˹�������  emp_id  ��ҡѺ "tui"   仡�͹

/*
		// --------------    ���  ������� ----------------------
			echo "yr = ".$yr."<br>";
			echo "mn = ".$mn."<br>";
			echo "g1 = ".$g1."<br>";
			echo "year_goal = ".$year_goal."<br>";      //  ������·�駻�(�дѺ 5)  ---  number
			echo "month_goal = ".$month_goal."<br>";     //  ������������͹����   ---  number
			echo "this_month = ".$this_month."<br>";    // �š�ô��Թ������� � ��͹�Ѩ�غѹ  ---  number
			echo "success_goal = ".$success_goal."<br>";    //  % �����������º�Ѻ������� �����͹���� ----  number
			echo "success_goal_2 = ".$success_goal_2."<br>";    //  % ����������պ�Ѻ������� �дѺ 5  ---  number
			echo "score_level = ".$score_level."<br>";  //  ��ҡó��ṹ � ��鹻�  number
			echo "reason = ".$reason."<br>";  //   ���˵ػѭ��  txt
			echo "solution = ".$solution."<br>";  //  �Ƿҧ���  txt
			echo "doc = ".$doc."<br>";  //  file doc ����ͧ��è� attatch
			echo "<br><br>";
		// --------------    ���  ������� ----------------------
*/





?>




<html>
<head>
<TITLE> Save Data </TITLE>


</head>
<body bgcolor="white" background="images/bg22.gif">


<?

//======= START ====   Check  File ������� Upload  ==========================================================

		if (!empty($doc))
				{

							if (  is_uploaded_file($doc) )  //  Check  ����  Upload  file �����º��������ջѭ��
							{
									$tpic_num = str_replace(".","_",$g1);  //  ���� �ͧ subtopic_id �¡��᷹���  �ش  ����  _  ��������ҵ�駪��� file
									$rootdir = "/www/bis/tris/document"; //��˹� directory ����Ѻ�� file ���� upload ����
									
									$newfilename = "tris".$tpic_num."_".chkmn($mn).$yr.".pdf";

									$path_newfilename = $rootdir."/".$newfilename;

									// --- Move  file  ������ path  �����ҵ�ͧ��� ������Ѻ����¹���ʹ���
										if ( move_uploaded_file($doc , $path_newfilename )  )    
											{
												chmod ($path_newfilename,0777);   // ���ӡ�� chmod ����������� copy ���� ź file �з��� �� Server
											}
										else
											{    //  ��� Move �������� ����ʴ� Err ����
													// --- Start -- Pop Up �����Ţ���� ���� javascript
														echo '<script language="javascript">';
														echo '{	';
														echo ' alert("';
														echo "Upload File �������稹Ф�....�ͧ�ա���駹Ф� (Er_up2)";
														echo '");  ';
														echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
														echo '}';
														echo '</script>';
													// --- END ---Pop Up �����Ţ���� ���� javascript

											}  //  if ( move_uploaded_file($doc , "/www/tris/document/tui.pdf" )  )
									// ---

							}  //  else  if (  is_uploaded_file($doc) ) 
							else
							{
										// --- Start -- Pop Up �����Ţ���� ���� javascript
											echo '<script language="javascript">';
											echo '{	';
											echo ' alert("';
											echo "Upload File �������稹Ф�....�ͧ�ա���駹Ф� (Er_up1)";
											echo '");  ';
											echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
											echo '}';
											echo '</script>';
										// --- END ---Pop Up �����Ţ���� ���� javascript

							}  //  END  if (  is_uploaded_file($doc) ) 

		} // if (!empty($doc))

//======= END ====   Check  File ������� Upload  ==========================================================








//===START   �ӡ�äӹǳ ��͹ �ҡ��Ңͧ  �š�ô��Թ������� � ��͹�Ѩ�غѹ (this_month) ���ͨ����Ңͧ score_level  ���͹����� table

		// ===��˹������  score_level ������鹡�͹�������� �ٹ��
				$sc_level = 0;
		// ===



		$sql_c = "select *  ";
		$sql_c = $sql_c." from tris_year_criteria ";
		$sql_c = $sql_c." where year = '".$yr."' ";
		$sql_c = $sql_c." and month = '".$mn."' ";
		$sql_c = $sql_c." and topic_id = '".$g1."' ";


		// �Ѻ�ӹǹ rows ����ա�� rows
		  $cntrows = OCIParse($db_conn, $sql_c);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// �Ѻ�ӹǹ rows ����բ������������


		if ($chkrows > 0)
			{
					$parse_sql = ociparse($db_conn,$sql_c);
					ociexecute($parse_sql);

					while (ocifetch($parse_sql))
						{  
							$c1 = floatval( ociresult($parse_sql,4) );
							$c2 = floatval( ociresult($parse_sql,5) );
							$c3 = floatval( ociresult($parse_sql,6) );
							$c4 = floatval( ociresult($parse_sql,7) );
							$c5 = floatval( ociresult($parse_sql,8) );
						}


						//=== check �١�����§�ͧ  criteria  ����ա�����§Ẻ ����->�ҡ  ����   �ҡ->����  �´٨ҡ criteria1 �Ѻ criteria2 ����˹�ҡ��ҡѹ �������͡����§������

//------------------------------------------  ��� criteria � table  tris_year_criteria   ���§�ҡ  ---------------------  ���� -> �ҡ
				
								if ($c1< $c2)
									{
										//  ��Ҥ�� this_month  ���¡��� criteria1   ��ǹ��·���ش
											if ($this_month < $c1)
												{
													$sc_level = 1;
												}
											else
												{
											//  ��Ҥ�� this_month  �ҡ���� criteria5   ����ҡ����ش
													if ($this_month > $c5)
														{
															$sc_level = 5;
														}
													else
											//  ��Ҥ�� this_month  ����㹪�ǧ����˹� (�����ҧ  criteria1 �֧  criteria5)
														{
																switch($this_month)
																	{
																		// ���������ҧ  �дѺ 1  ���  �дѺ   2
																		case ( ($this_month > $c1) &&  ($this_month < $c2)  ) :
																					$sc_level = ( ($this_month - $c1) / ($c2 - $c1) ) + 1 ;
																			break;

																		// ���������ҧ  �дѺ 2  ���  �дѺ   3
																		case ( ($this_month > $c2) &&  ($this_month < $c3)  ) :
																					$sc_level = ( ($this_month - $c2) / ($c3 - $c2) ) + 2 ;
																			break;

																		// ���������ҧ  �дѺ 3  ���  �дѺ   4
																		case ( ($this_month > $c3) &&  ($this_month <= $c4)  ) :
																					$sc_level = ( ($this_month - $c3) / ($c4 - $c3) ) + 3 ;
																			break;

																		// ���������ҧ  �дѺ 4  ���  �дѺ   5
																		case ( ($this_month > $c4) &&  ($this_month < $c5)  ) :
																					$sc_level = ( ($this_month - $c4) / ($c5 - $c4) ) + 4 ;
																			break;
																			 // ��ҡѺ �дѺ����˹�
																		case  ($this_month = $c1) : $sc_level = 1; break;
																		case  ($this_month = $c2) : $sc_level = 2; break;
																		case  ($this_month = $c3) : $sc_level = 3; break;
																		case  ($this_month = $c4) : $sc_level = 4; break;
																		case  ($this_month = $c5) : $sc_level = 5; break;

																	} // End switch($this_month)

														}

												} // end  if ($this_month < $c1)

									} // if ($c1 < $c2)
								else
//------------------------------------------  ��� criteria � table  tris_year_criteria   ���§�ҡ  ---------------------  �ҡ -> ����
									{
										if ($c1 > $c2)
											{
													//  ��Ҥ�� this_month  �ҡ���� criteria1   ����ҡ����ش
														if ($this_month > $c1)
															{
															    $sc_level = 1;
																//$sc_level =   ( $c1 + ($c1 - $c2) - $this_month ) / ($c1-$c2)  ;
															}
														else
															{
														//  ��Ҥ�� this_month  ���¡��� criteria5   ��ǹ��·���ش
																if ($this_month < $c5)
																	{
																		$sc_level = 5;
																	}
																else
														//  ��Ҥ�� this_month  ����㹪�ǧ����˹� (�����ҧ  criteria1 �֧  criteria5)
																	{
																			switch($this_month)
																				{
																				
																					// ���������ҧ  �дѺ 1  ���  �дѺ   2
																					case ( ($this_month < $c1) &&  ($this_month > $c2)  ) :
																								$sc_level = ( ($c1 - $this_month) / ($c1 - $c2) ) + 1 ;
																						break;

																					// ���������ҧ  �дѺ 2  ���  �дѺ   3
																					case ( ($this_month <=$c2) &&  ($this_month > $c3)  ) :
																								$sc_level = ( ($c2 - $this_month) / ($c2 - $c3) ) + 2 ;
																						break;

																					// ���������ҧ  �дѺ 3  ���  �дѺ   4
																					case ( ($this_month < $c3) &&  ($this_month > $c4)  ) :
																								$sc_level = ( ($c3 - $this_month) / ($c3 - $c4) ) + 3 ;
																						break;

																					// ���������ҧ  �дѺ 4  ���  �дѺ   5
																					case ( ($this_month < $c4) &&  ($this_month > $c5)  ) :
																								$sc_level = ( ($c4- $this_month) / ($c4 - $c5) ) + 4 ;
																						break;

																				// ��ҡѺ �дѺ����˹�
																		case ($this_month = $c1) : $sc_level = 1; break;
																		case  ($this_month = $c2) : $sc_level = 2; break;
																		case  ($this_month = $c3) : $sc_level = 3; break;
																		case  ($this_month = $c4) : $sc_level = 4; break;
																		case  ($this_month = $c5) : $sc_level = 5; break;

																				} // End switch($this_month)

																	}

															} // end  if ($this_month < $c1)

											} // end  if ($c1 > $c2)

									}  //  end  if ($c1 < $c2)
						//=================================================

				$sc_level = number_format($sc_level,2,".",",");  // ���ȹ������  2  �ش

//echo $sc_level.'<br>';

			} //  end  if ($chkrows > 0)



//===END   �ӡ�äӹǳ ��͹ �ҡ��Ңͧ  �š�ô��Թ������� � ��͹�Ѩ�غѹ (this_month) ���ͨ����Ңͧ score_level  ���͹����� table







// === Start  Select  �����š�͹������������������ѧ  ���������Ҩзӡ��  Insert into  ����  Update 

			$sql_chk_havedata = " select * from tris_operation_volume  ";
			$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";
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
										$sql_upd_data = " update tris_operation_volume ";

												if (!empty($year_goal))
														$sql_upd_data = $sql_upd_data." set goal_year = ".$year_goal;
												else
														$sql_upd_data = $sql_upd_data." set goal_year = null ";

												if (!empty($month_goal))
														$sql_upd_data = $sql_upd_data." , goal_month = ".$month_goal;
												else
														$sql_upd_data = $sql_upd_data." , goal_month = null ";

												if (!empty($this_month))
														$sql_upd_data = $sql_upd_data." , volume_month = ".$this_month;
												else
														$sql_upd_data = $sql_upd_data." , volume_month = null ";

												if (!empty($success_goal))
														$sql_upd_data = $sql_upd_data." , volume_goal = ".$success_goal;
												else
														$sql_upd_data = $sql_upd_data." , volume_goal = null ";

												if (!empty($success_goal_2))
														$sql_upd_data = $sql_upd_data." , volume_level5 = ".$success_goal_2;
												else
														$sql_upd_data = $sql_upd_data." , volume_level5 = null ";

												if (!empty($score_level))
														$sql_upd_data = $sql_upd_data." , year_predict = ".$score_level;
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

                                                 if (!empty($withdraw))
														$sql_upd_data = $sql_upd_data." , withdraw = '".$withdraw."'";
												else
														$sql_upd_data = $sql_upd_data." , withdraw = null ";

												if (!empty($amount))
														$sql_upd_data = $sql_upd_data." , amount = '".$amount."'";
												else
														$sql_upd_data = $sql_upd_data." , amount = null ";

												if (!empty($job_progress))
														$sql_upd_data = $sql_upd_data." , progress = '".$job_progress."'";
												else
														$sql_upd_data = $sql_upd_data." , progress = null ";


										$sql_upd_data = $sql_upd_data." , score_level = ".$sc_level;
										$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
										$sql_upd_data = $sql_upd_data." and month = '".$mn."'  ";
										$sql_upd_data = $sql_upd_data." and topic_id  = '".$g1."'  ";
										$sql_upd_data = $sql_upd_data." and emp_id  = '".$emp_id."'  ";

//echo  "<br><br>".$sql_upd_data."<br>";

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
																		echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
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
																		echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up �����Ţ���� ���� javascript

													}

								//==== END  Update

						break;

				case "N":   //  Insert   new  data

												if (!empty($year_goal))
														$year_goal = $year_goal;
												else
														$year_goal = "null";

												if (!empty($month_goal))
														$month_goal = $month_goal;
												else
														$month_goal = "null";

												if (!empty($this_month))
														$this_month = $this_month;
												else
														$this_month = "null";

												if (!empty($success_goal))
														$success_goal = $success_goal;
												else
														$success_goal = "null";

												if (!empty($success_goal_2))
														$success_goal_2 = $success_goal_2;
												else
														$success_goal_2 = "null";

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

												if (!empty($withdraw))
														$withdraw = "'".$withdraw."'";
												else
														$withdraw = "null";

												if (!empty($amount))
														$amount = "'".$amount."'";
												else
														$amount = "null";

												if (!empty($job_progress))
														$job_progress = "'".$job_progress."'";
												else
														$job_progress = "null";


												$sql_ins_data = " insert into tris_operation_volume ( year , month , topic_id , emp_id , save_date , goal_year , goal_month , volume_month , volume_goal , volume_level5 , year_predict , reason , solution , score_level , withdraw , amount , progress )  ";
												$sql_ins_data = $sql_ins_data." values('".$yr."','".$mn."','".$g1."','".$emp_id."',sysdate,".$year_goal.",".$month_goal.",".$this_month.",".$success_goal.",".$success_goal_2.",".$score_level.",".$reason.",".$solution.",".$sc_level.",".$withdraw.",".$amount.",".$job_progress.") ";

//echo "<br>".$sql_ins_data."<br><br>";


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
																		echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
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
																		echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
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
