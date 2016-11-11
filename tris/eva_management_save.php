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
		// --------------    ค่า  ที่ส่งมา ----------------------
			echo "yr = ".$yr."<br>";
			echo "mn = ".$mn."<br>";
			echo "g1 = ".$g1."<br>";
			echo "total_operation_goal = ".$totaloperation_goal."<br>";   // ตัวนี้ไม่ได้ใช้จากหน้าแรก  
			echo "total_level = ".$totallevel."<br>";
			echo "year_predict = ".$year_predict."<br>";
			echo "criteria_type = ".$criteriatype."<br>";
			echo "emp_id = ".$emp_id."<br>";
			echo "hot = ".$hot."<br>";
			echo "<br><br>";
		// --------------    ค่า  ที่ส่งมา ----------------------
*/

//======= START ====   Check  File ที่ส่งมา Upload  ==========================================================

		if (!empty($doc))
				{

							if (  is_uploaded_file($doc) )  //  Check  ด้วย  Upload  file ได้เรียบร้อยไม่มีปัญหา
							{
									$tpic_num = str_replace(".","_",$g1);  //  ชื่อ ของ subtopic_id โดยการแทนที่  จุด  ด้วย  _  เพื่อเอามาตั้งชื่อ file
									$rootdir = "/www/bis/tris/document"; //กำหนด directory สำหรับเก็บ file ที่จะ upload เข้าไป
									
									$newfilename = "eva".$tpic_num."_".chkmn($mn).$yr.".pdf";

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
														echo " parent.location = ''http://bis.cattelecom.com/tris/eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
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
											echo " parent.location = 'http://bis.cattelecom.com/tris/eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."' ";
											echo '}';
											echo '</script>';
										// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript

							}  //  END  if (  is_uploaded_file($doc) ) 

		} // if (!empty($doc))

//======= END ====   Check  File ที่ส่งมา Upload  ==========================================================




//===START   ทำการคำนวณ ก่อน จากค่าของ  ผลการดำเนินการสะสม ณ เดือนปัจจุบัน (this_month) เพื่อจะได้ค่าของ score_level  เพื่อนำไปใสใน table

if ( $criteriatype == "2" )
{

		// ===กำหนดตัวแปร  year_predict เริ่มต้นก่อนเลยให้เป็น ศูนย์
				$yr_predict = 0;

		// ===



		$sql_c = "select *  ";
		$sql_c = $sql_c." from tris_year_criteria ";
		$sql_c = $sql_c." where year = '".$yr."' ";
		$sql_c = $sql_c." and month = '12' ";
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
											if ($year_predict < $c1)
												{
													$yr_predict = 1;
												}
											else
												{
											//  ถ้าค่า this_month  มากกว่า criteria5   ตัวมากที่สุด
													if ($year_predict > $c5)
														{
															$yr_predict = 5;
														}
													else //เท่ากับที่กำหนด
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
											//  ถ้าค่า this_month  อยู่ในช่วงที่กำหนด (ระหว่าง  criteria1 ถึง  criteria5)
														
																switch($year_predict)
																	{
																	// อยู่ระหว่าง  ระดับ 1  และ  ระดับ   2
																		case ( ($year_predict > $c1) &&  ($year_predict < $c2)  ) :
																					$yr_predict = ( ($year_predict -$c1 ) / ($c2 - $c1) ) + 1 ;
																			break;

																		// อยู่ระหว่าง  ระดับ 2  และ  ระดับ   3
																		case ( ($year_predict > $c2) &&  ($year_predict < $c3)  ) :
																					$yr_predict = ( ( $year_predict - $c2 ) / ($c3 - $c2) ) + 2 ;
																			break;

																		// อยู่ระหว่าง  ระดับ 3  และ  ระดับ   4
																		case ( ($year_predict > $c3) &&  ($year_predict <= $c4)  ) :
																					$yr_predict = ( ( $year_predict -$c3) / ($c4 - $c3) ) + 3 ;
																			break;

																		// อยู่ระหว่าง  ระดับ 4  และ  ระดับ   5
																		case ( ($year_predict > $c4) &&  ($year_predict < $c5)  ) :
																					$yr_predict = ( ( $year_predict - $c4 ) / ($c5 - $c4) ) + 4 ;
																			break;
															} // End switch($year_predict)

														}

												} // end  if ($year_predict < $c1)

									} // if ($c1 < $c2)
						}
								else
//------------------------------------------  ค่า criteria ใน table  tris_year_criteria   เรียงจาก  ---------------------  มาก -> น้อย
									{
										if ($c1 > $c2)
											{
													//  ถ้าค่า this_month  มากกว่า criteria1   ตัวมากที่สุด
														if ($year_predict > $c1)
															{
																$yr_predict =   ( $c1 + ($c1 - $c2) - $year_predict ) / ($c1-$c2)  ;
															}
														else
															{
														//  ถ้าค่า this_month  น้อยกว่า criteria5   ตัวน้อยที่สุด
																if ($year_predict < $c5)
																	{
																		$yr_predict = 5;
																	}
																else
														//  ถ้าค่า this_month  อยู่ในช่วงที่กำหนด (ระหว่าง  criteria1 ถึง  criteria5)
																	{  //เท่ากับระดับที่กำหนด
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
																			// อยู่ระหว่าง  ระดับ 1  และ  ระดับ   2
																					case ( ($year_predict < $c1) &&  ($year_predict > $c2)  ) :
																								$yr_predict = ( ($c1 - $year_predict) / ($c1 - $c2) ) + 1 ;
																						break;

																					// อยู่ระหว่าง  ระดับ 2  และ  ระดับ   3
																					case ( ($year_predict <=$c2) &&  ($year_predict > $c3)  ) :
																								$yr_predict = ( ($c2 - $year_predict) / ($c2 - $c3) ) + 2 ;
																						break;

																					// อยู่ระหว่าง  ระดับ 3  และ  ระดับ   4
																					case ( ($year_predict < $c3) &&  ($year_predict > $c4)  ) :
																								$yr_predict = ( ($c3 - $year_predict) / ($c3 - $c4) ) + 3 ;
																						break;

																					// อยู่ระหว่าง  ระดับ 4  และ  ระดับ   5
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

				$yr_predict = number_format($yr_predict,2,".",",");  // ใส่ทศนิยมให้  2  จุด

//echo $yr_predict.'<br>';

			} //  end  if ($chkrows > 0)


} //  END   if ( $criteriatype == "2" )

//===END   ทำการคำนวณ ก่อน จากค่าของ  ผลการดำเนินการสะสม ณ เดือนปัจจุบัน (this_month) เพื่อจะได้ค่าของ year_predict  เพื่อนำไปใสใน table

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

		switch ($criteriatype)
			{
				case "1" :  //  criteria_type = '1' ให้เก็บลง  tris_operation_quality_tot
							$sql_chk_havedata = " select * from tris_operation_quality_tot  ";
							$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and emp_id = '".$emp_id."'  ";
					break;

				case "2" :   //   criteria_type = '2' ให้เก็บลง tris_operation_volume
							$sql_chk_havedata = " select * from tris_operation_volume  ";
							$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and emp_id = '".$emp_id."'  ";
					break;

				case "3" :   //   criteria_type = '3' ให้เก็บลง tris_operation_management_tot
							$sql_chk_havedata = " select * from tris_operation_management_tot  ";
							$sql_chk_havedata = $sql_chk_havedata." where year = '".$yr."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and month = '".$mn."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and topic_id = '".$g1."'  ";
							$sql_chk_havedata = $sql_chk_havedata." and emp_id = '".$emp_id."'  ";
					break;

				default:  //  ถ้าเป็น cryteria ตัวอื่น ที่ไม่ใช่ ตัว '1' , '2'  '3'   ให้ติดต่อเจ้าหน้าที่ 
						// --- Start -- Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
								echo '<script language="javascript">';
								echo '{	';
								echo ' alert("';
								echo "ไม่สามารถ บันทึกข้อมูล ได้ค่ะ !!! (ไม่พบ Criteria Type = ' ".($criteriatype)." ' ต่อต่อเจ้าหน้าที่นะคะ)";
								echo '");  ';
								echo " parent.location = 'eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
								echo '}';
								echo '</script>';
						// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript

			}


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
											case "1" :  //  criteria_type = '1' ให้เก็บลง  tris_operation_quality_tot
													$sql_upd_data = " update tris_operation_quality_tot ";
													$sql_upd_data = $sql_upd_data." set score_level = ".$totallevel;
													$sql_upd_data = $sql_upd_data." , year_predict = ".$year_predict;
													$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
													$sql_upd_data = $sql_upd_data." and month = '".$mn."'  ";
													$sql_upd_data = $sql_upd_data." and topic_id  = '".$g1."'  ";
													$sql_upd_data = $sql_upd_data." and emp_id  = '".$emp_id."'  ";
                                                  
													// กำหนดค่า HOT ให้แต่ละ Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot."  where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;

											case "2" :   //   criteria_type = '2' ให้เก็บลง tris_operation_volume

													$sql_upd_data = " update tris_operation_volume  ";
													$sql_upd_data = $sql_upd_data." set year_predict = ".$year_predict;
													$sql_upd_data = $sql_upd_data."  ,year_predict_user = ".$year_predict_user;
													$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
													$sql_upd_data = $sql_upd_data." and month = '".$mn."'  ";
													$sql_upd_data = $sql_upd_data." and topic_id  = '".$g1."'  ";
													$sql_upd_data = $sql_upd_data." and emp_id  = '".$emp_id."'  ";
												
												    // กำหนดค่า HOT ให้แต่ละ Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot." where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;

											case "3" :   //   criteria_type = '3' ให้เก็บลง tris_operation_management_tot

													$sql_upd_data = " update tris_operation_management_tot  ";
													$sql_upd_data = $sql_upd_data." set total_level = ".$year_predict;
													$sql_upd_data = $sql_upd_data." where year = '".$yr."'  ";
													$sql_upd_data = $sql_upd_data." and month = '".$mn."'  ";
													$sql_upd_data = $sql_upd_data." and topic_id  = '".$g1."'  ";
													$sql_upd_data = $sql_upd_data." and emp_id  = '".$emp_id."'  ";
												
												// กำหนดค่า HOT ให้แต่ละ Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot." where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;
										}



											//=== Start   สำหรับใช้ check ว่ามีการ Update / Insert   สำเร็จหรือเปล่า
												  $cntrows = OCIParse($db_conn, $sql_upd_data);
												  OCIExecute($cntrows);
												  $chk_upd_ok = OCIRowCount($cntrows); 
                                           // update flag_hot
												  $cntrows = OCIParse($db_conn, $sql_hot);
												  OCIExecute($cntrows);
												  $chk_hot_ok = OCIRowCount($cntrows);
											//=== End   สำหรับใช้ check ว่ามีการ Update / Insert   สำเร็จหรือเปล่า

											  if (($chk_upd_ok > 0 )and ($chk_hot_ok > 0 ))
													{
																	// --- Start -- Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "Update ".$chk_upd_ok." Records Complete.";
																		echo '");  ';
																		echo " parent.location = 'eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
																		echo " parent.location = 'eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
																		echo '}';
																		echo '</script>';
																	// --- END ---Pop Up ข้อมูลขึ้นมา โดยใช้ javascript

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
											case "1" :  //  criteria_type = '1' ให้เก็บลง  tris_operation_quality_tot
																	$sql_ins_data = " insert into tris_operation_quality_tot( year , month , topic_id ,  emp_id , score_level , year_predict , save_date )  ";
																	$sql_ins_data = $sql_ins_data." values('".$yr."','".$mn."','".$g1."','".$emp_id."',".$totallevel." , ".$year_predict." , sysdate) ";

																	// กำหนดค่า HOT ให้แต่ละ Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot." where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;
											case "2" :   //   criteria_type = '2' ให้เก็บลง tris_operation_volume
																	$sql_ins_data = " insert into tris_operation_volume(year , month , topic_id , year_predict , emp_id , year_predict_user )  ";
																	$sql_ins_data = $sql_ins_data." values('".$yr."','".$mn."','".$g1."',".$year_predict.",'".$emp_id."',".$year_predict_user.") ";

																	// กำหนดค่า HOT ให้แต่ละ Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot." where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;
											case "3" :   //   criteria_type = '3' ให้เก็บลง tris_operation_management_tot
																	$sql_ins_data = " insert into tris_operation_management_tot(year , month , topic_id , total_level , emp_id )  ";
																	$sql_ins_data = $sql_ins_data." values('".$yr."','".$mn."','".$g1."',".$year_predict.",'".$emp_id."') ";

																	// กำหนดค่า HOT ให้แต่ละ Topic_ID
													$sql_hot=" update tris_topic_detail ";
													$sql_hot = $sql_hot." set flag_hot =  '".$hot."'  ";
													$sql_hot = $sql_hot." where year = '".$yr."'  ";
													$sql_hot = $sql_hot." and month = '".$mn."'  ";
													$sql_hot = $sql_hot." and topic_id  = '".$g1."'  ";
												break;
										}

//echo "<br>".$sql_ins_data."<br>";


											//=== Start   สำหรับใช้ check ว่ามีการ Update / Insert   สำเร็จหรือเปล่า
												  $cntrows = OCIParse($db_conn, $sql_ins_data);
												  OCIExecute($cntrows);
												  $chk_ins_ok = OCIRowCount($cntrows);
												  // update flag_hot
												  $cntrows = OCIParse($db_conn, $sql_hot);
												  OCIExecute($cntrows);
												  $chk_hot_ok = OCIRowCount($cntrows);
											//=== End   สำหรับใช้ check ว่ามีการ Update / Insert   สำเร็จหรือเปล่า

											  if (($chk_ins_ok > 0 )and ($chk_hot_ok > 0 ))
													{
																	// --- Start -- Pop Up ข้อมูลขึ้นมา โดยใช้ javascript
																		echo '<script language="javascript">';
																		echo '{	';
																		echo ' alert("';
																		echo "Insert ".$chk_ins_ok." Records Complete.";
																		echo '");  ';
																		echo " parent.location = 'eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
																		echo " parent.location = 'eva_management.php?yr=".$yr."&mn=".$mn."&g1=".$g1."'; ";
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
