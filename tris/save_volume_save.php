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
			$this_month = floatval($this_month);
	//====


$emp_id = "tui";  //===============  กำหนดค่าให้  emp_id  เท่ากับ "tui"   ไปก่อน

/*
		// --------------    ค่า  ที่ส่งมา ----------------------
			echo "yr = ".$yr."<br>";
			echo "mn = ".$mn."<br>";
			echo "g1 = ".$g1."<br>";
			echo "year_goal = ".$year_goal."<br>";      //  เป้าหมายทั้งปี(ระดับ 5)  ---  number
			echo "month_goal = ".$month_goal."<br>";     //  เป้าหมายรายเดือนสะสม   ---  number
			echo "this_month = ".$this_month."<br>";    // ผลการดำเนินการสะสม ณ เดือนปัจจุบัน  ---  number
			echo "success_goal = ".$success_goal."<br>";    //  % ความสำเร็จเทียบกับเป้าหมาย รายเดือนสะสม ----  number
			echo "success_goal_2 = ".$success_goal_2."<br>";    //  % ความสำเร็จเทีบกับเป้าหมาย ระดับ 5  ---  number
			echo "score_level = ".$score_level."<br>";  //  พยากรณ์คะแนน ณ สิ้นปี  number
			echo "reason = ".$reason."<br>";  //   สาเหตุปัญหา  txt
			echo "solution = ".$solution."<br>";  //  แนวทางแก้ไข  txt
			echo "doc = ".$doc."<br>";  //  file doc ที่ต้องการจะ attatch
			echo "<br><br>";
		// --------------    ค่า  ที่ส่งมา ----------------------
*/





?>




<html>
<head>
<TITLE> Save Data </TITLE>


</head>
<body bgcolor="white" background="images/bg22.gif">


<?

//======= START ====   Check  File ที่ส่งมา Upload  ==========================================================

		if (!empty($doc))
				{

							if (  is_uploaded_file($doc) )  //  Check  ด้วย  Upload  file ได้เรียบร้อยไม่มีปัญหา
							{
									$tpic_num = str_replace(".","_",$g1);  //  ชื่อ ของ subtopic_id โดยการแทนที่  จุด  ด้วย  _  เพื่อเอามาตั้งชื่อ file
									$rootdir = "/www/bis/tris/document"; //กำหนด directory สำหรับเก็บ file ที่จะ upload เข้าไป
									
									$newfilename = "tris".$tpic_num."_".chkmn($mn).$yr.".pdf";

									$path_newfilename = $rootdir."/".$newfilename;

									// --- Move  file  ไปไว้ที่ path  ที่เราต้องการ พร้อมกับเปลี่ยนชื่อด้วย
										if ( move_uploaded_file($doc , $path_newfilename )  )    
											{
												chmod ($path_newfilename,0777);   // ที่ทำการ chmod นี่เพราะเวลา copy หรือ ลบ file จะทำได้ บน Server
											}
										else
											{    //  ถ้า Move ไม่สำเร็จ ให้แสดง Err ด้วย
													// --- Start -- Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
														echo '<script language="javascript">';
														echo '{	';
														echo ' alert("';
														echo "Upload File ไม่สำเร็จนะคะ....ลองอีกครั้งนะคะ (Er_up2)";
														echo '");  ';
														echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
														echo '}';
														echo '</script>';
													// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript

											}  //  if ( move_uploaded_file($doc , "/www/tris/document/tui.pdf" )  )
									// ---

							}  //  else  if (  is_uploaded_file($doc) ) 
							else
							{
										// --- Start -- Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
											echo '<script language="javascript">';
											echo '{	';
											echo ' alert("';
											echo "Upload File ไม่สำเร็จนะคะ....ลองอีกครั้งนะคะ (Er_up1)";
											echo '");  ';
											echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
											echo '}';
											echo '</script>';
										// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript

							}  //  END  if (  is_uploaded_file($doc) ) 

		} // if (!empty($doc))

//======= END ====   Check  File ที่ส่งมา Upload  ==========================================================








//===START   ทำการคำนวณ ก่อน จากค่าของ  ผลการดำเนินการสะสม ณ เดือนปัจจุบัน (this_month) เพื่อจะได้ค่าของ score_level  เพื่อนำไปใสใน table

		// ===กำหนดตัวแปร  score_level เริ่มต้นก่อนเลยให้เป็น ศูนย์
				$sc_level = 0;
		// ===



		$sql_c = "select *  ";
		$sql_c = $sql_c." from tris_year_criteria ";
		$sql_c = $sql_c." where year = '".$yr."' ";
		$sql_c = $sql_c." and month = '".$mn."' ";
		$sql_c = $sql_c." and topic_id = '".$g1."' ";


		// นับจำนวน rows ว่ามีกี่ rows
		  $cntrows = OCIParse($db_conn, $sql_c);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// นับจำนวน rows ว่ามีข้อมูลหรือไม่


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


						//=== check ดูการเรียงของ  criteria  ว่ามีการเรียงแบบ น้อย->มาก  หรือ   มาก->น้อย  โดยดูจาก criteria1 กับ criteria2 ตัวไหนมากก่ากัน ที่เหลือก็เรียงตามนั้น

//------------------------------------------  ค่า criteria ใน table  tris_year_criteria   เรียงจาก  ---------------------  น้อย -> มาก
				
								if ($c1< $c2)
									{
										//  ถ้าค่า this_month  น้อยกว่า criteria1   ตัวน้อยที่สุด
											if ($this_month < $c1)
												{
													$sc_level = 1;
												}
											else
												{
											//  ถ้าค่า this_month  มากกว่า criteria5   ตัวมากที่สุด
													if ($this_month > $c5)
														{
															$sc_level = 5;
														}
													else
											//  ถ้าค่า this_month  อยู่ในช่วงที่กำหนด (ระหว่าง  criteria1 ถึง  criteria5)
														{
																switch($this_month)
																	{
																		// อยู่ระหว่าง  ระดับ 1  และ  ระดับ   2
																		case ( ($this_month > $c1) &&  ($this_month < $c2)  ) :
																					$sc_level = ( ($this_month - $c1) / ($c2 - $c1) ) + 1 ;
																			break;

																		// อยู่ระหว่าง  ระดับ 2  และ  ระดับ   3
																		case ( ($this_month > $c2) &&  ($this_month < $c3)  ) :
																					$sc_level = ( ($this_month - $c2) / ($c3 - $c2) ) + 2 ;
																			break;

																		// อยู่ระหว่าง  ระดับ 3  และ  ระดับ   4
																		case ( ($this_month > $c3) &&  ($this_month <= $c4)  ) :
																					$sc_level = ( ($this_month - $c3) / ($c4 - $c3) ) + 3 ;
																			break;

																		// อยู่ระหว่าง  ระดับ 4  และ  ระดับ   5
																		case ( ($this_month > $c4) &&  ($this_month < $c5)  ) :
																					$sc_level = ( ($this_month - $c4) / ($c5 - $c4) ) + 4 ;
																			break;
																			 // เท่ากับ ระดับที่กำหนด
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
//------------------------------------------  ค่า criteria ใน table  tris_year_criteria   เรียงจาก  ---------------------  มาก -> น้อย
									{
										if ($c1 > $c2)
											{
													//  ถ้าค่า this_month  มากกว่า criteria1   ตัวมากที่สุด
														if ($this_month > $c1)
															{
															    $sc_level = 1;
																//$sc_level =   ( $c1 + ($c1 - $c2) - $this_month ) / ($c1-$c2)  ;
															}
														else
															{
														//  ถ้าค่า this_month  น้อยกว่า criteria5   ตัวน้อยที่สุด
																if ($this_month < $c5)
																	{
																		$sc_level = 5;
																	}
																else
														//  ถ้าค่า this_month  อยู่ในช่วงที่กำหนด (ระหว่าง  criteria1 ถึง  criteria5)
																	{
																			switch($this_month)
																				{
																				
																					// อยู่ระหว่าง  ระดับ 1  และ  ระดับ   2
																					case ( ($this_month < $c1) &&  ($this_month > $c2)  ) :
																								$sc_level = ( ($c1 - $this_month) / ($c1 - $c2) ) + 1 ;
																						break;

																					// อยู่ระหว่าง  ระดับ 2  และ  ระดับ   3
																					case ( ($this_month <=$c2) &&  ($this_month > $c3)  ) :
																								$sc_level = ( ($c2 - $this_month) / ($c2 - $c3) ) + 2 ;
																						break;

																					// อยู่ระหว่าง  ระดับ 3  และ  ระดับ   4
																					case ( ($this_month < $c3) &&  ($this_month > $c4)  ) :
																								$sc_level = ( ($c3 - $this_month) / ($c3 - $c4) ) + 3 ;
																						break;

																					// อยู่ระหว่าง  ระดับ 4  และ  ระดับ   5
																					case ( ($this_month < $c4) &&  ($this_month > $c5)  ) :
																								$sc_level = ( ($c4- $this_month) / ($c4 - $c5) ) + 4 ;
																						break;

																				// เท่ากับ ระดับที่กำหนด
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

				$sc_level = number_format($sc_level,2,".",",");  // ใส่ทศนิยมให้  2  จุด

//echo $sc_level.'<br>';

			} //  end  if ($chkrows > 0)



//===END   ทำการคำนวณ ก่อน จากค่าของ  ผลการดำเนินการสะสม ณ เดือนปัจจุบัน (this_month) เพื่อจะได้ค่าของ score_level  เพื่อนำไปใสใน table







// === Start  Select  ข้อมูลก่อนว่ามีอยู่แล้วหรือยัง  จะได้รู้ว่าจะทำการ  Insert into  หรือ  Update 

			$sql_chk_havedata = " select * from tris_operation_volume  ";
			$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
			$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";
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
																		echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
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
																		echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript

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
																		echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
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
																		echo " parent.location = 'save_volume.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
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
