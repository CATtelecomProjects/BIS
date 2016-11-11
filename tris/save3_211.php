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

	// ===  ถ้า ตัวแปรส่งค่า ไม่มีค่า   แสดงว่าเป็นหน้าแรก ยังไม่มีการส่งค่า ตัวแปร  กำหนดค่าให้เป็น "-" ซะ		
			if (!isset($yr))  // Check ว่ามีตัวแปรนี้หรือยัง
				{
					$maxyr = substr( (date(Y)+543) ,2,2);		//  ปีปัจจุบัน  2007 + 543  = 2550  แล้วเอาแค่ 2 ตัวหลัง
					$yr = $maxyr;
				}
			else 
				{
					if (empty($yr))   // Check ว่าตัวแปรนี้  มีค่าหรือเปล่า
						{
							$maxyr = substr( (date(Y)+543) ,2,2);		//  ปีปัจจุบัน  2007 + 543  = 2550  แล้วเอาแค่ 2 ตัวหลัง
							$yr = $maxyr;
						}
				}
	//===


		//--------- emp_id
			$emp_id = "empid";



?>


<html>

<head>
<title>รายงานผลการดำเนินงานของ กสท ตามบันทึกข้อตกลงประเมินผลการดำเนินงานรัฐวิสาหกิจ</title>
<meta name="generator" content="Namo WebEditor v6.0">
<meta http-equiv="content-type" content="text/html; charset=windows-874">



<script language="javascript">
<?


//--------  Select เอาข้อมูลที่มีมาใส่ใน  ตัวแปร JavaScript ก่อน

		//+++++++ start +++++++++   เกณฑ์วัดผลการดำเนินงาน +++++++++++++++++++++++++++++++++++++++++++

			$sql = " select *  ";
			$sql = $sql." from tris_topic_group3 ";
			$sql = $sql." where topic_id = '3.2' ";
			$sql = $sql." and year  = '".$yr."' ";

		// นับจำนวน rows ว่ามีกี่ rows
		  $cntrows = OCIParse($db_conn, $sql);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// นับจำนวน rows ว่ามีข้อมูลหรือไม

		if ($chkrows > 0)
 			{
					$parse_sql = ociparse($db_conn,$sql);
					ociexecute($parse_sql);

					while (ocifetch($parse_sql))
						{
							$topic_id = ociresult($parse_sql,2);
							$subtopic_id = ociresult($parse_sql,3);
							$subtopic_name = ociresult($parse_sql,4);
							$goal = ociresult($parse_sql,5);

							$subtopicid = str_replace(".","_",$subtopic_id);

							echo "T_".$yr."Z".$subtopicid." = '".$subtopic_name."|".$goal."'; ";
						}
			}
		
		//+++++++ end +++++++++   เกณฑ์วัดผลการดำเนินงาน +++++++++++++++++++++++++++++++++++++++++++

		//+++++++ start +++++++++  ข้อมูล tris_operation_management +++++++++++++++++++++++++++++++++++++++++++

		$sql = " select * from tris_operation_management  ";
		$sql = $sql." where emp_id = '".$emp_id."'  and topic_id = '3.2' ";
		$sql = $sql." order by emp_id , year , month,subtopic_id ";

		// นับจำนวน rows ว่ามีกี่ rows
		  $cntrows = OCIParse($db_conn, $sql);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// นับจำนวน rows ว่ามีข้อมูลหรือไม

		if ($chkrows > 0)
 			{
					$parse_sql = ociparse($db_conn,$sql);
					ociexecute($parse_sql);

					while (ocifetch($parse_sql))
						{
							$yyr = ociresult($parse_sql,1);
							$mmn = ociresult($parse_sql,2);
							$subtopic_id = ociresult($parse_sql,3);
							$operation_goal = ociresult($parse_sql,5);
							$operation_level = ociresult($parse_sql,6);
							$reason = ociresult($parse_sql,7);
							$solution = ociresult($parse_sql,8);
							$active_flag = ociresult($parse_sql,9);

							$subtopicid = str_replace(".","_",$subtopic_id);
							echo $emp_id."_".$yyr."_".$mmn."Z".$subtopicid." = '".$operation_goal."|".$operation_level."|".$reason."|".$solution."|".$active_flag."'; ";
//							echo $emp_id."_".$yyr."_".$mmn."Z".$subtopicid." = '".$operation_goal."|".$operation_level."|".$reason."|".$solution."'; ";
						}
			}
		
		//+++++++ end +++++++++  ข้อมูล tris_operation_management +++++++++++++++++++++++++++++++++++++++++++

//-----------------  Select เอาข้อมูลที่มีมาใส่ใน  ตัวแปร JavaScript ก่อน

	?>	

		//=== clear data
				function cleardata()
					{
							frm.percent_sucess.value ='';										
							frm.score_level.value='';
							frm.reason.value ='';
							frm.solution.value ='';		
							document.getElementById("y_active_flag").checked=false;
							document.getElementById("n_active_flag").checked=false;
					}
		//===




		//====
			function show_g1detail()
				{

							frm.percent_sucess.value ='';	
							frm.score_level.value='';
							frm.reason.value ='';
							frm.solution.value ='';
							document.getElementById("y_active_flag").checked=false;
							document.getElementById("n_active_flag").checked=false;
							

					//---- Start แสดงข้อมูล เกณฑ์วัดผลการดำเนินงาน
							tmp_g1 = frm.g1.value;
							tmp_g1 = tmp_g1.replace(".","_");  // 1 จุด  replace ทีล่ะจุด
							tmp_g1 = tmp_g1.replace(".","_");  // 2  จุด
							tmp_g1 = tmp_g1.replace(".","_");  // 3  จุด
							tmp_g1 = tmp_g1.replace(".","_");  // 3  จุด


							tmp_g1_val = "T_"+frm.yr.value+"Z"+tmp_g1;

							tmp_str = eval(tmp_g1_val);

							tmp_g1_val_split = tmp_str.split("|");

							dt1 = tmp_g1_val_split[0];
							go1 = tmp_g1_val_split[1];

							if (dt1 == null) 
								{
									frm.g2.value='';
								}
							else
								{
									frm.g2.value=dt1;			
								}

							if (go1 == null) 
								{
									frm.go.value='';
								}
							else
								{
									frm.go.value=go1;			
								}
					//---- End  แสดงข้อมูล เกณฑ์วัดผลการดำเนินงาน


					//---- Start   แสดงข้อมูล ที่บันทึก ตาม เกณฑ์วัดผลการดำเนินงาน

							tmp_g1 = frm.g1.value;
							tmp_g1 = tmp_g1.replace(".","_");  // 1 จุด  replace ทีล่ะจุด
							tmp_g1 = tmp_g1.replace(".","_");  // 2  จุด
							tmp_g1 = tmp_g1.replace(".","_");  // 3  จุด
							tmp_g1 = tmp_g1.replace(".","_");  // 3  จุด



<?
					echo '   tmp_g1valtmp = "typeof('.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+") != \'undefined\' ";   ';  // ใช้ check  ว่าตัวแปรนี้มีการสร้างไว้หรือไม่
?>

					if ( eval(tmp_g1valtmp) )  // ตัวแปรมีค่า (ให้ค่าเป็น True) 
					{
						<?
								echo 'tmp_g1_val = "'.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1; ';
						?>

								tmp_str = eval(tmp_g1_val);

								tmp_g1_val_split = tmp_str.split("|");

								d1 = tmp_g1_val_split[0];
								d2 = tmp_g1_val_split[1];
								d3 = tmp_g1_val_split[2];
								d4 = tmp_g1_val_split[3];
								d5 = tmp_g1_val_split[4];




								if (d1 == null) 
									{
										frm.percent_sucess.value ='';										
									}
								else
									{
										frm.percent_sucess.value=d1;			
									}

								if (d2 == null) 
									{
										frm.score_level.value='';
									}
								else
									{
										frm.score_level.value=d2;
									}
	
								if (d3 == null) 
									{
										frm.reason.value ='';
									}
								else
									{
										frm.reason.value=d3;			
									}

								if (d4 == null) 
									{
										frm.solution.value ='';
									}
								else
									{
										frm.solution.value=d4;
									}

								if (d5 == null) 
									{
											document.getElementById("y_active_flag").checked=false;
											document.getElementById("n_active_flag").checked=false;
									}
								else
									{
//										alert (d5);
										if (d5 == 0)
										{
											document.getElementById("y_active_flag").checked=false;
											document.getElementById("n_active_flag").checked=true;
										}
										else if (d5 == 1)
										{
											document.getElementById("y_active_flag").checked=true;
											document.getElementById("n_active_flag").checked=false;
										}
									}				



					}  // END  if ( eval(tmp_g1valtmp) )  // ตัวแปรมีค่า (ให้ค่าเป็น True) 



					//---- End   แสดงข้อมูล ที่บันทึก ตาม เกณฑ์วัดผลการดำเนินงาน

				}
		//====

		//====
			function send_save()
				{
					
						if ( !Isdouble(frm.percent_sucess.value) )
							{
								alert("กรุณาป้อนข้อมูล ' %ความสำเร็จของเป้าหมาย  ' เป็นตัวเลขค่ะ...");
								frm.percent_sucess.focus();
							}
						else
							{
								if ( !Isdouble(frm.score_level.value) )
									{
										alert("กรุณาป้อนข้อมูล ' ระดับคะแนน ' เป็นตัวเลขค่ะ...");
										frm.score_level.focus();
									}
								else
									{
										if (confirm("ยืนยันการ บันทึกข้อมูล ?")) 
											{
												frm.submit();
											}  // end  if (confirm("ยืนยันการ บันทึกข้อมูล ?")) 
									}
							}
				}
		//====

		//====
			function chk_enter()
				{
					if (window.event.keyCode == 13) 
						{
								window.event.keyCode = 9;			 // ส่งค่า 9 ไปเพราะว่า รหัส ascii 9 คือ ปุ่ม tab   , 13 คือ  ปุ่ม Enter 	
						}
				}
		//====



	//--- check if string is double

	function Isdouble(s)
		{
			 var i;
			 var nLength = s.length;
			 var valid = true;
			 var n;

		//	นับจำนวนจุดทศนิยมด้วย ว่าต้องมีไม่เกิน 1 จุดเท่านั้น
			n=0;
			 for ( i=0; i<nLength; i++ )
			 {
				  if  ( s.charAt(i) == "." )
				 {
					n++;
				  }
			 }

			if (n > 1)
			{
				valid = false;
			}
		//	---
			else
			{
				 for ( i=0; i<nLength; i++ )
				 {
					  if  ( ( s.charAt(i) >= '0' && s.charAt(i) <= '9' ) || (s.charAt(i) == ".") )
						   continue;
					  else
					  {
						   valid = false;
						   break;
					  }
				 }
			
			}


			 return valid;
		}
	//---- Check end double



</script>

</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" background="images/bg22.gif" onload=show_g1detail()>


<br>


<?


// ------------------------------------   END  Dropdown list   ปี พ.ศ.    --------------------------------------

	//  ++++  Check ก่อนว่ามีข้อมูลตามปีที่ แสดง ใน Table tris_topic หรือไม่  ถ้าไม่มีก็แสดงว่า ไม่มี ข้อมูลเลย  ++++

		$sql_yr = " select year from tris_topic where year = '".$yr."' group by year ";
		$sql_yr = $sql_yr." order by to_number(year) desc ";


		// นับจำนวน rows ว่ามีกี่ rows
		  $cntrows = OCIParse($db_conn, $sql_yr);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// นับจำนวน rows ว่ามีข้อมูลหรือไม่



		if ($chkrows == 0) // check ว่า   ถ้าไม่มีข้อมูล ใน Table Master   tris_topic   ของปีที่แสดง  ให้ขึ้นว่าไม่มีข้อมูล
 			{   
						echo "&nbsp;&nbsp;";
						echo '<font size="3" face="MS Sans Serif">&nbsp;ปี พ.ศ.</font>';
						echo "&nbsp;&nbsp;";

						echo '<SELECT NAME="yr">';
						echo '<option value="'.$maxyr.'" selected>25'.$maxyr.'</option>';
						echo '</SELECT>';
						

				echo "<br><br>";
				echo "<font color='red' size='3'>ไม่พบข้อมูลตามที่ระบุ</font>";
			}  
		else
			{ 
	            echo '<form name="frm" action = "save3_2_save.php" method = "post">';

				$tdwidth_td1 = "200";   // ความกว้างของ column ที่ใช่ในการแสดงข้อมูล  column  1
				$tdwidth_td2 = "400";   // ความกว้างของ column ที่ใช่ในการแสดงข้อมูล  column  2


				echo "<center>";

				echo "<font size='4' color='blue'>รายงานผลการดำเนินงานของ กสท ตามบันทึกข้อตกลงประเมินผลการดำเนินงานรัฐวิสาหกิจ</font>";
				echo "<br>";
				echo "<font size='4' color='blue'>การประเมินผลการบริหารความเสี่ยง</font>";
				echo "<br><br>";

				echo "<table border=0 width='700'>";


				//-----------------------------------------------  START  dropdown list   ปี  -----------------------------------------------------
				
				echo "<tr>";
						echo "<td align='left' width=".$tdwidth_td1.">";
						echo '<font size="3" face="MS Sans Serif">ประจำปี</font>';
						echo "</td>";

						echo "<td align='left' width=".$tdwidth_td2.">";
						echo '<SELECT NAME="yr"  tabindex="1" onKeyDown=chk_enter() onchange=show_g1detail()>';

									$parse_sql_yr = ociparse($db_conn,$sql_yr);
									ociexecute($parse_sql_yr);

									while (ocifetch($parse_sql_yr))
										{
											$yymm_val = ociresult($parse_sql_yr,1);
											$yymm_val_desc = ( "25".$yymm_val );

											echo $yymm_val_desc." ";

											++$amtckyr;

											if ($yr == "-")
												{
														if ($amtckyr == 1)
															{
																echo '<option value="'.$yymm_val.'" selected>'.$yymm_val_desc.'</option>';
																$yr = $yymm_val;
																$maxyr = $yymm_val;
															}
														else
															echo '<option value = "'.$yymm_val.'">'.$yymm_val_desc.'</option>';
												}
											else
												{
													if ($yymm_val == $yr)
														{
															echo '<option value = "'.$yymm_val.'" selected>'.$yymm_val_desc.'</option>';
															$maxyr = $yymm_val;
														}
													else
															echo '<option value = "'.$yymm_val.'">'.$yymm_val_desc.'</option>';
												}

										}


							echo '</SELECT>';
							echo '</td>';


				echo "</tr>";
				//-----------------------------------------------  End  dropdown list   ปี  -----------------------------------------------------





				//-----------------------------------------------  START  dropdown list  เดือน 12 เดือน -----------------------------------------------------

					// ===  ถ้า ตัวแปรส่งค่า ไม่มีค่า   แสดงว่าเป็นหน้าแรก ยังไม่มีการส่งค่า ตัวแปร  กำหนดค่าให้เป็น "-" ซะ		
					if (!isset($mn))
						{
							$mn = date(n) ;
							$maxmn = chkmn($mn);
						}
					else
						{
							if (empty($mn)) // ถ้า mn ไม่มีค่าแสดงว่าเป็นหน้าแรก ยังไม่มีการส่งค่า ตัวแปร mn จะยังไม่มีค่า ก็กำหนดค่าให้เป็น เดือน ม.ค. ซะ
								{
									$mn = date(n) ;
									$maxmn = chkmn($mn);
								}
						}
					//===

				echo "<tr>";
						echo "<td align='left' width=".$tdwidth_td1.">";
						echo '<font size="3" face="MS Sans Serif">เดือน</font>';
						echo "</td>";

						echo "<td align='left' width=".$tdwidth_td2.">";
						echo '<SELECT NAME="mn"  tabindex="2" onKeyDown=chk_enter()  onchange=show_g1detail()>';
						
						for ($m=1;$m<=12;$m++)
							{

									if ( ($mn + 0) == $m )
										$v_selected = " selected";
									else
										$v_selected = "";

							switch($m)
								{
									case "1" ;
											 echo '<option value="01"'.$v_selected.'>มกราคม</option>';break;
									case "2";
											 echo '<option value="02"'.$v_selected.'>กุมภาพันธ์</option>';break;
									case "3";
											 echo '<option value="03"'.$v_selected.'>มีนาคม</option>';break;
									case "4";
											 echo '<option value="04"'.$v_selected.'>เมษายน</option>';break;
									case "5";
											 echo '<option value="05"'.$v_selected.'>พฤษภาคม</option>';break;
									case "6";
											 echo '<option value="06"'.$v_selected.'>มิถุนายน</option>';break;
									case "7";
											 echo '<option value="07"'.$v_selected.'>กรกฏาคม</option>';break;
									case "8";
											 echo '<option value="08"'.$v_selected.'>สิงหาคม</option>';break;
									case "9";
											 echo '<option value="09"'.$v_selected.'>กันยายน</option>';break;
									case "10";
											 echo '<option value="10"'.$v_selected.'>ตุลาคม</option>';break;
									case "11";
											 echo '<option value="11"'.$v_selected.'>พฤศจิกายน</option>';break;
									case "12";
											 echo '<option value="12"'.$v_selected.'>ธันวาคม</option>';break;
								}
							}

						echo '</SELECT>';
						echo '</td>';

				echo "</tr>";

				//-----------------------------------------------  END  dropdown list  เดือน 12 เดือน -----------------------------------------------------





				//-----------------------------------------------  START  เกณฑ์วัดผลการดำเนินงาน  -----------------------------------------------------

					// ===  ถ้า ตัวแปรส่งค่า ไม่มีค่า   แสดงว่าเป็นหน้าแรก ยังไม่มีการส่งค่า ตัวแปร  กำหนดค่าให้เป็น "-" ซะ		
					if (!isset($g1))
						{
							$g1 = "-";
						}
					else
						{
							if (empty($g1))
								{
									$g1 = "-";
								}
						}
					//===

						//  Select ข้อมูล  จาก Table  Tris_topic_group3
							$sql = " select *  ";
							$sql = $sql." from tris_topic_group3 ";
							$sql = $sql." where topic_id = '3.2' ";
							$sql = $sql." and year  = '".$yr."' ";
						//---


						// นับจำนวน rows ว่ามีกี่ rows
						  $cntrows = OCIParse($db_conn, $sql);
						  OCIExecute($cntrows);
						  $chkrows = OCIFetchstatement($cntrows,$results);
						// นับจำนวน rows ว่ามีข้อมูลหรือไม่



						if ($chkrows == 0) // check ว่า   ถ้าไม่มีข้อมูล ใน Table Master   tris_topic   ของปีที่แสดง  ให้ขึ้นว่าไม่มีข้อมูล
							{   
									echo "<tr>";
											echo "<td align='left' width=".$tdwidth_td1.">";
											echo '<font size="3" face="MS Sans Serif">เกณฑ์วัดผลการดำเนินงาน</font>';
											echo "</td>";

											echo "<td align='left' width=".$tdwidth_td2.">";

											echo '<SELECT NAME="g1" tabindex="3" onKeyDown=chk_enter() >';
											echo '<option value="" selected></option>';											
											echo '</SELECT>';
											echo '</td>';

									echo "</tr>";
							}  
						else
							{ 
								$amt_a1=0;

								$vdata = ociparse($db_conn,$sql);
								ociexecute($vdata);

								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">เกณฑ์วัดผลการดำเนินงาน</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<SELECT NAME="g1"  tabindex="3" onKeyDown=chk_enter() onchange=show_g1detail()>';
										
										$vtopicid = "";

										while (ocifetch($vdata))
											{
												$v_year = ociresult($vdata,1);
												$v_topicid = ociresult($vdata,2);
												$v_subtopicid = ociresult($vdata,3);
												$v_subtopicname = ociresult($vdata,4);
												$v_goal = ociresult($vdata,5);


												++$amt_a1;

												if ($g1 == "-")
													{
															if ($amt_a1 == 1)
																{
																	echo '<option value="'.$v_subtopicid.'" selected>'.$v_subtopicid.'</option>';
																	$g1 = $v_subtopicid;
																	$vtopicid = $v_topicid;
																}
															else
																{
																	echo '<option value="'.$v_subtopicid.'">'.$v_subtopicid.'</option>';
																}
													}
												else
													{
														if ("\'".$v_subtopicid."\'" == "\'".$g1."\'")
															{
																	echo '<option value="'.$v_subtopicid.'" selected>'.$v_subtopicid.'</option>';
																	$vtopicid = $v_topicid;
															}
														else
															{
																	echo '<option value="'.$v_subtopicid.'">'.$v_subtopicid.'</option>';
															}
													}

	
											}  // END  while (ocifetch($data_topic))

									
										echo '</SELECT>';
										echo '</td>';

								echo "</tr>";


							} //  END  if ($chkrows == 0) // check ว่า   ถ้าไม่มีข้อมูล ใน Table Master   tris_topic   ของปีที่แสดง  ให้ขึ้นว่าไม่มีข้อมูล



				//-----------------------------------------------  END  เกณฑ์วัดผลการดำเนินงาน  -----------------------------------------------------


				//====  Hidden field ของ รหัส topic_id
					echo '<INPUT TYPE="hidden" NAME="topicid" value="'.$vtopicid.'">';
				//====



				//-----------------------------------------------  START  รายละเอียดของ  เกณฑ์วัดผลการดำเนินงาน  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">รายละเอียดของเกณฑ์</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="g2" rows="5" cols="50" style="BACKGROUND-COLOR: #ffffff" readonly>';
										echo '</textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  รายละเอียดของ  เกณฑ์วัดผลการดำเนินงาน  -----------------------------------------------------




				//-----------------------------------------------  START  เป้าหมาย %  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">เป้าหมาย %</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="go" maxlength="3" size="3" style="BACKGROUND-COLOR: #ffffff" readonly>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  เป้าหมาย %  -----------------------------------------------------


				//-----------------------------------------------  START  ความสามารถในกิจกรรมที่ทำ -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ความสามารถในกิจกรรมที่ทำ</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<INPUT TYPE="radio" id="y_active_flag"   NAME="active_flag" VALUE = "1">ทำได้';
										echo '<INPUT TYPE="radio" id="n_active_flag"   NAME="active_flag" VALUE = "0">ทำไม่ได้';

										echo "</td>";

								echo "</tr>";



				//-----------------------------------------------  END ความสามารถในกิจกรรมที่ทำ -----------------------------------------------------




				//-----------------------------------------------  START  % ความสำเร็จของเป้าหมาย  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">% ความสำเร็จของเป้าหมาย</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="percent_sucess" maxlength="5" size="5"  tabindex="4"  onKeyDown=chk_enter()>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  % ความสำเร็จของเป้าหมาย  -----------------------------------------------------


				//-----------------------------------------------  START  ระดับคะแนน  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ระดับคะแนน</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="score_level" maxlength="5" size="5"  tabindex="5" onKeyDown=chk_enter()>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  ระดับคะแนน  -----------------------------------------------------


				
				//-----------------------------------------------  START  สาเหตุที่ไม่บรรลุตามเป้าหมาย  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">สาเหตุที่ไม่บรรลุตามเป้าหมาย</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="reason" rows="5" cols="50"  tabindex="6" onKeyDown=chk_enter()></textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  สาเหตุที่ไม่บรรลุตามเป้าหมาย  -----------------------------------------------------



				//-----------------------------------------------  START  เสนอแนวทางแก้ไข  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">เสนอแนวทางแก้ไข</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="solution" rows="5" cols="50"   tabindex="7" onKeyDown=chk_enter()></textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  เสนอแนวทางแก้ไข  -----------------------------------------------------



				//-----------------------------------------------  START  ปุ่ม SAVE  -----------------------------------------------------
								echo "<tr>";
										echo "<td colspan='2' align='center'>";
										echo '<input type="button" name="save" value="บันทึก" tabindex="8" onclick=send_save()>';
										echo "&nbsp;&nbsp;&nbsp;";
										echo '<input type="button" name="cancle" value="ยกเลิก"  tabindex="9" onclick=cleardata()>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  ปุ่ม SAVE  -----------------------------------------------------




				echo "</table>";
				echo "</center>";

				echo "</form>";

			}  //  END  if ($chkrows == 0) // check ว่า   ถ้าไม่มีข้อมูล ใน Table Master   tris_topic   ของปีที่แสดง  ให้ขึ้นว่าไม่มีข้อมูล
?>



</body>

</html>
