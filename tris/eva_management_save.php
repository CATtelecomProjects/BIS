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

$emp_id = "tui";

/*
		// --------------    ���  ������� ----------------------
			echo "yr = ".$yr."<br>";
			echo "mn = ".$mn."<br>";
			echo "g1 = ".$g1."<br>";
			echo "total_operation_goal = ".$totaloperation_goal."<br>";   // ��ǹ���������ҡ˹���á  
			echo "total_level = ".$totallevel."<br>";
			echo "year_predict = ".$year_predict."<br>";
			echo "criteria_type = ".$criteriatype."<br>";
			echo "emp_id = ".$emp_id."<br>";
			echo "hot = ".$hot."<br>";
			echo "<br><br>";
		// --------------    ���  ������� ----------------------
*/

//======= START ====   Check  File ������� Upload  ==========================================================

		if (!empty($doc))
				{

							if (  is_uploaded_file($doc) )  //  Check  ����  Upload  file �����º��������ջѭ��
							{
									$tpic_num = str_replace(".","_",$g1);  //  ���� �ͧ subtopic_id �¡��᷹���  �ش  ����  _  ��������ҵ�駪��� file
									$rootdir = "/www/bis/tris/document"; //��˹� directory ����Ѻ�� file ���� upload ����
									
									$newfilename = "eva".$tpic_num."_".chkmn($mn).$yr.".pdf";

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
														echo " parent.location = ''http://bis.cattelecom.com/tris/eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
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
											echo " parent.location = 'http://bis.cattelecom.com/tris/eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
											echo '}';
											echo '</script>';
										// --- END ---Pop Up �����Ţ���� ���� javascript

							}  //  END  if (  is_uploaded_file($doc) ) 

		} // if (!empty($doc))

//======= END ====   Check  File ������� Upload  ==========================================================




//===START   �ӡ�äӹǳ ��͹ �ҡ��Ңͧ  �š�ô��Թ������� � ��͹�Ѩ�غѹ (this_month) ���ͨ����Ңͧ score_level  ���͹����� table

if ( $criteriatype == "2" )
{

		// ===��˹������  year_predict ������鹡�͹�������� �ٹ��
				$yr_predict = 0;

		// ===



		$sql_c = "select *  ";
		$sql_c = $sql_c." from tris_year_criteria ";
		$sql_c = $sql_c." where year = '".$yr."' ";
		$sql_c = $sql_c." and month = '12' ";
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
											if ($year_predict < $c1)
												{
													$yr_predict = 1;
												}
											else
												{
											//  ��Ҥ�� this_month  �ҡ���� criteria5   ����ҡ����ش
													if ($year_predict > $c5)
														{
															$yr_predict = 5;
														}
													else //��ҡѺ����˹�
													  {
													       if ($year_predict == $c1)
                                                               {													
                                                                     $yr_predict = 1;
                                                               }
                                                          else
                                                               if ($year_predict == $c2)
                                                               {													
                                                                         $yr_predict = 2;
                                                                }
                                                            else
                                                                if ($year_predict ==$c3)
                                                                 {													
                                                                        $yr_predict = 3;
                                                                 }
                                                            else
                                                                if ($year_predict ==$c4)
                                                                   {													
                                                                         $yr_predict = 4;
                                                                   }
                                                               if ($year_predict ==$c5)
                                                                  {													
                                                                          $yr_predict = 5;
                                                                  }
                                                           else
                                                          {
											//  ��Ҥ�� this_month  ����㹪�ǧ����˹� (�����ҧ  criteria1 �֧  criteria5)
														
																switch($year_predict)
																	{
																	// ���������ҧ  �дѺ 1  ���  �дѺ   2
																		case ( ($year_predict > $c1) &&  ($year_predict < $c2)  ) :
																					$yr_predict = ( ($year_predict -$c1 ) / ($c2 - $c1) ) + 1 ;
																			break;

																		// ���������ҧ  �дѺ 2  ���  �дѺ   3
																		case ( ($year_predict > $c2) &&  ($year_predict < $c3)  ) :
																					$yr_predict = ( ( $year_predict - $c2 ) / ($c3 - $c2) ) + 2 ;
																			break;

																		// ���������ҧ  �дѺ 3  ���  �дѺ   4
																		case ( ($year_predict > $c3) &&  ($year_predict <= $c4)  ) :
																					$yr_predict = ( ( $year_predict -$c3) / ($c4 - $c3) ) + 3 ;
																			break;

																		// ���������ҧ  �дѺ 4  ���  �дѺ   5
																		case ( ($year_predict > $c4) &&  ($year_predict < $c5)  ) :
																					$yr_predict = ( ( $year_predict - $c4 ) / ($c5 - $c4) ) + 4 ;
																			break;
															} // End switch($year_predict)

														}

												} // end  if ($year_predict < $c1)

									} // if ($c1 < $c2)
						}
								else
//------------------------------------------  ��� criteria � table  tris_year_criteria   ���§�ҡ  ---------------------  �ҡ -> ����
									{
										if ($c1 > $c2)
											{
													//  ��Ҥ�� this_month  �ҡ���� criteria1   ����ҡ����ش
														if ($year_predict > $c1)
															{
																$yr_predict =   ( $c1 + ($c1 - $c2) - $year_predict ) / ($c1-$c2)  ;
															}
														else
															{
														//  ��Ҥ�� this_month  ���¡��� criteria5   ��ǹ��·���ش
																if ($year_predict < $c5)
																	{
																		$yr_predict = 5;
																	}
																else
														//  ��Ҥ�� this_month  ����㹪�ǧ����˹� (�����ҧ  criteria1 �֧  criteria5)
																	{  //��ҡѺ�дѺ����˹�
						                                  	if ($year_predict == $c1)
                                                                 {													
                                                                       $yr_predict = 1;
                                                                   }
                                                             else
                                                                  if ($year_predict == $c2)
                                                                        {													
                                                                              $yr_predict = 2;
                                                                        }
                                                             else
                                                                    if ($year_predict ==$c3)
                                                                           {													
                                                                                $yr_predict = 3;
                                                                            }
                                                            else
                                                                    if ($year_predict ==$c4)
                                                                          {													
                                                                                    $yr_predict = 4;
                                                                           }
                                                                     if ($year_predict ==$c5)
                                                                          {													
                                                                                    $yr_predict = 5;
                                                                           }
                                                                 else
                                                                     {				
																			switch($year_predict)
																				{
																			// ���������ҧ  �дѺ 1  ���  �дѺ   2
																					case ( ($year_predict < $c1) &&  ($year_predict > $c2)  ) :
																								$yr_predict = ( ($c1 - $year_predict) / ($c1 - $c2) ) + 1 ;
																						break;

																					// ���������ҧ  �дѺ 2  ���  �дѺ   3
																					case ( ($year_predict <=$c2) &&  ($year_predict > $c3)  ) :
																								$yr_predict = ( ($c2 - $year_predict) / ($c2 - $c3) ) + 2 ;
																						break;

																					// ���������ҧ  �дѺ 3  ���  �дѺ   4
																					case ( ($year_predict < $c3) &&  ($year_predict > $c4)  ) :
																								$yr_predict = ( ($c3 - $year_predict) / ($c3 - $c4) ) + 3 ;
																						break;

																					// ���������ҧ  �дѺ 4  ���  �дѺ   5
																					case ( ($year_predict < $c4) &&  ($year_predict > $c5)  ) :
																								$yr_predict = ( ($c4- $year_predict) / ($c4 - $c5) ) + 4 ;
																						break;

																				} // End switch($year_predict)

																	}

															} // end  if ($year_predict < $c1)

											} // end  if ($c1 > $c2)

									}  //  end  if ($c1 < $c2)
				}
						//=================================================

				$yr_predict = number_format($yr_predict,2,".",",");  // ���ȹ������  2  �ش

//echo $yr_predict.'<br>';

			} //  end  if ($chkrows > 0)


} //  END   if ( $criteriatype == "2" )

//===END   �ӡ�äӹǳ ��͹ �ҡ��Ңͧ  �š�ô��Թ������� � ��͹�Ѩ�غѹ (this_month) ���ͨ����Ңͧ year_predict  ���͹����� table

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

		switch ($criteriatype)
			{
				case "1" :  //  criteria_type = '1' �����ŧ  tris_operation_quality_tot
							$sql_chk_havedata = " select * from tris_operation_quality_tot  ";
							$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and emp_id = '".$emp_id."'  ";
					break;

				case "2" :   //   criteria_type = '2' �����ŧ tris_operation_volume
							$sql_chk_havedata = " select * from tris_operation_volume  ";
							$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and emp_id = '".$emp_id."'  ";
					break;

				case "3" :   //   criteria_type = '3' �����ŧ tris_operation_management_tot
							$sql_chk_havedata = " select * from tris_operation_management_tot  ";
							$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and emp_id = '".$emp_id."'  ";
					break;

				default:  //  ����� cryteria ������ �������� ��� '1' , '2'  '3'   ���Դ������˹�ҷ�� 
						// --- Start -- Pop Up �����Ţ���� ���� javascript
								echo '<script language="javascript">';
								echo '{	';
								echo ' alert("';
								echo "�������ö �ѹ�֡������ ���� !!! (��辺 Criteria Type = ' ".($criteriatype)." ' ��͵�����˹�ҷ��Ф�)";
								echo '");  ';
								echo " parent.location = 'eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
								echo '}';
								echo '</script>';
						// --- END ---Pop Up �����Ţ���� ���� javascript

			}


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

												if (!empty($totallevel))
														$totallevel = $totallevel;
												else
														$totallevel = "null";


												if ( $criteriatype == "2" )
												{
													$year_predict_user = $yr_predict;
												}
												else
												{
													if (!empty($totallevel))
															$year_predict = $year_predict;
													else
															$totallevel = "null";
												} //  END   if ( $criteriatype == "2" )



									switch ($criteriatype)
										{
											case "1" :  //  criteria_type = '1' �����ŧ  tris_operation_quality_tot
													$sql_upd_data = " update tris_operation_quality_tot ";
													$sql_upd_data = $sql_upd_data." set score_level = ".$totallevel;
													$sql_upd_data = $sql_upd_data." , year_predict = ".$year_predict;
													$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
													$sql_upd_data = $sql_upd_data." and month = '".$mn."'  ";
													$sql_upd_data = $sql_upd_data." and topic_id  = '".$g1."'  ";
													$sql_upd_data = $sql_upd_data." and emp_id  = '".$emp_id."'  ";
                                                  
													// ��˹���� HOT ������� Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot."  where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;

											case "2" :   //   criteria_type = '2' �����ŧ tris_operation_volume

													$sql_upd_data = " update tris_operation_volume  ";
													$sql_upd_data = $sql_upd_data." set year_predict = ".$year_predict;
													$sql_upd_data = $sql_upd_data."  ,year_predict_user = ".$year_predict_user;
													$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
													$sql_upd_data = $sql_upd_data." and month = '".$mn."'  ";
													$sql_upd_data = $sql_upd_data." and topic_id  = '".$g1."'  ";
													$sql_upd_data = $sql_upd_data." and emp_id  = '".$emp_id."'  ";
												
												    // ��˹���� HOT ������� Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot." where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;

											case "3" :   //   criteria_type = '3' �����ŧ tris_operation_management_tot

													$sql_upd_data = " update tris_operation_management_tot  ";
													$sql_upd_data = $sql_upd_data." set total_level = ".$year_predict;
													$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
													$sql_upd_data = $sql_upd_data." and month = '".$mn."'  ";
													$sql_upd_data = $sql_upd_data." and topic_id  = '".$g1."'  ";
													$sql_upd_data = $sql_upd_data." and emp_id  = '".$emp_id."'  ";
												
												// ��˹���� HOT ������� Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot." where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;
										}



											//=== Start   ����Ѻ�� check ����ա�� Update / Insert   �������������
												  $cntrows = OCIParse($db_conn, $sql_upd_data);
												  OCIExecute($cntrows);
												  $chk_upd_ok = OCIRowCount($cntrows); 
                                           // update flag_hot
												  $cntrows = OCIParse($db_conn, $sql_hot);
												  OCIExecute($cntrows);
												  $chk_hot_ok = OCIRowCount($cntrows);
											//=== End   ����Ѻ�� check ����ա�� Update / Insert   �������������

											  if (($chk_upd_ok > 0 )and ($chk_hot_ok > 0 ))
													{
																	// --- Start -- Pop Up �����Ţ���� ���� javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "Update ".$chk_upd_ok." Records Complete.";
																		echo '");  ';
																		echo " parent.location = 'eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
																		echo " parent.location = 'eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up �����Ţ���� ���� javascript

													}

								//==== END  Update

						break;

				case "N":   //  Insert   new  data


								// ==== START   Insert new data

												if (!empty($totallevel))
														$totallevel = $totallevel;
												else
														$totallevel = "null";

												if ( $criteriatype == "2" )
												{
													$year_predict_user = $yr_predict;
												}
												else
												{
													if (!empty($totallevel))
															$year_predict = $year_predict;
													else
															$totallevel = "null";
												} //  END   if ( $criteriatype == "2" )


									switch ($criteriatype)
										{
											case "1" :  //  criteria_type = '1' �����ŧ  tris_operation_quality_tot
																	$sql_ins_data = " insert into tris_operation_quality_tot( year , month , topic_id ,  emp_id , score_level , year_predict , save_date )  ";
																	$sql_ins_data = $sql_ins_data." values('".$yr."','".$mn."','".$g1."','".$emp_id."',".$totallevel." , ".$year_predict." , sysdate) ";

																	// ��˹���� HOT ������� Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot." where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;
											case "2" :   //   criteria_type = '2' �����ŧ tris_operation_volume
																	$sql_ins_data = " insert into tris_operation_volume(year , month , topic_id , year_predict , emp_id , year_predict_user )  ";
																	$sql_ins_data = $sql_ins_data." values('".$yr."','".$mn."','".$g1."',".$year_predict.",'".$emp_id."',".$year_predict_user.") ";

																	// ��˹���� HOT ������� Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot." where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;
											case "3" :   //   criteria_type = '3' �����ŧ tris_operation_management_tot
																	$sql_ins_data = " insert into tris_operation_management_tot(year , month , topic_id , total_level , emp_id )  ";
																	$sql_ins_data = $sql_ins_data." values('".$yr."','".$mn."','".$g1."',".$year_predict.",'".$emp_id."') ";

																	// ��˹���� HOT ������� Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot." where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;
										}

//echo "<br>".$sql_ins_data."<br>";


											//=== Start   ����Ѻ�� check ����ա�� Update / Insert   �������������
												  $cntrows = OCIParse($db_conn, $sql_ins_data);
												  OCIExecute($cntrows);
												  $chk_ins_ok = OCIRowCount($cntrows);
												  // update flag_hot
												  $cntrows = OCIParse($db_conn, $sql_hot);
												  OCIExecute($cntrows);
												  $chk_hot_ok = OCIRowCount($cntrows);
											//=== End   ����Ѻ�� check ����ա�� Update / Insert   �������������

											  if (($chk_ins_ok > 0 )and ($chk_hot_ok > 0 ))
													{
																	// --- Start -- Pop Up �����Ţ���� ���� javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "Insert ".$chk_ins_ok." Records Complete.";
																		echo '");  ';
																		echo " parent.location = 'eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
																		echo " parent.location = 'eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
