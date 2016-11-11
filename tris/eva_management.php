<?
session_start();
$desc = $_SESSION['desc'];
$emp=$_SESSION['userid'] ;
 if (($emp<>'354277')&&($emp<>'233356')&&($emp<>'226143'))
		{?>
                            <script language = "javascript">
							alert("คุณไม่มีสิทธิ์เข้ามาบันทึกข้อมูลในเรื่องนี้นะคะ") ;
					        window.location = "http://bis.cattelecom.com/tris/index.php";
			               </script>
	<?	}
?>
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

$emp_id = "tui";


?>


<html>

<head>
<title>ระบบรายงานผลการดำเนินงานของ กสท ตามบันทึกข้อตกลงประเมินผลการดำเนินงานรัฐวิสาหกิจ</title>
<meta name="generator" content="Namo WebEditor v6.0">
<meta http-equiv="content-type" content="text/html; charset=windows-874">
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #333333;
}
.textbox {
	border: thin none;
	background-color: #EFEFEF;
}
.style2 {font-family: Geneva, Arial, Helvetica, sans-serif; font-size: 10px; color: #666666; }
-->
</style>


<script language="javascript">


	//---- start  เปลี่ยน ค่าใน Element  g1  ( topic_id ตาม ปี ที่เลือก )
		function year_showtopicid()
		{

				 //  set  ให้  ค่าใน  g1  เป็น null ให้หมด เพื่อรับค่าใหม่
				 for (m=0 ; m<frm.g1.options.length ; m++)   //   frm.g1.options.length  คือจำนวน Options ที่มีใน g1
						frm.g1.options[m]=null;

				 // ใส่ค่าให้กับ g1 หลังจาก reset ค่าแล้ว  โดยกำหนดให้ value = '-'  และค่าเท่ากับ '--- SELECT --'  โดยใช้  new Option("--- SELECT ---","-")

			i_yr = 1;

			while(true)
			{
				tmp_val1 = "typeof("+"Y"+frm.yr.value+"_"+i_yr+") != \'undefined\' "; 

				if (eval(tmp_val1))  //  ถ้าตัวแปรมีค่าให้ใส่ค่าเข้าไป
				{
						tmp_val2 = "Y"+frm.yr.value+"_"+i_yr;
						frm.g1.options[i_yr-1]=new Option(eval(tmp_val2),eval(tmp_val2));

						//  ถ้าค่าที่ส่งมา  ตรงกับชื่อ ให้ทำการ selected ตัวนั้น
						if ( eval(tmp_val2) == "<? echo $g1; ?>" )
						{
							frm.g1.options[i_yr-1].selected=true;
						}

				}
				else
				{
					break;
				}

				i_yr++;

			}  // END  while

				show_g1detail();   //  call  function

		}  	
	//---- END  เปลี่ยน ค่าใน Element  g1  ( topic_id ตาม ปี ที่เลือก )


<?

//--------  Select เอาข้อมูลที่มีมาใส่ใน  ตัวแปร JavaScript ก่อน

		//+++++++ start +++++++++   ข้อมูล  topic_id ทั้งหมด ของแต่ล่ะปี   +++++++++++++++++++++++++++++++++++++++++++
			$sql = " select year , topic_id ";
			$sql = $sql." from tris_topic ";
			$sql = $sql." order by year , topic_id ";

		// นับจำนวน rows ว่ามีกี่ rows
		  $cntrows = OCIParse($db_conn, $sql);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// นับจำนวน rows ว่ามีข้อมูลหรือไม

		if ($chkrows > 0)
 			{
					$parse_sql = ociparse($db_conn,$sql);
					ociexecute($parse_sql);
					
					$tmpyrr_1 = "N";
					$tmpyrr_2 = 0;

					while (ocifetch($parse_sql))
						{
							$tmpyrr_2++;

							$yrr = ociresult($parse_sql,1);
							$topicid = ociresult($parse_sql,2);

							if ($tmpyrr_1 != $yrr)
							{
								$tmpyrr_1 = $yrr;
								$tmpyrr_2 = 1;
							}

							echo "Y".$yrr."_".$tmpyrr_2."= \"".$topicid."\"; ";
						}
			}

		//+++++++ END +++++++++   ข้อมูล  topic_id  ของแต่ล่ะปี   +++++++++++++++++++++++++++++++++++++++++++


		//+++++++ start +++++++++   ตัวชี้วัดที่ +++++++++++++++++++++++++++++++++++++++++++

			$sql = " select * ";
			$sql = $sql." from tris_topic ";
			$sql = $sql." order by topic_id ";

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
							$yrr = ociresult($parse_sql,1);
							$topic_id = ociresult($parse_sql,2);
							$topic_name = ociresult($parse_sql,3);
							$criteriatype = ociresult($parse_sql,4);

							$topicid = str_replace(".","_",$topic_id);

							echo "T_".$yrr."Z".$topicid." = '".$topic_name."|".$criteriatype."'; ";
						}
			}
		
		//+++++++ end +++++++++   ตัวชี้วัดที่ +++++++++++++++++++++++++++++++++++++++++++


		//+++++++ Start +++++++  ข้อมูล tris_operation_quality_tot +++++++ criteria_type = 1+++++++++++++++++++
		$sql = " select a.year  ";
		$sql = $sql." , a.month ";
		$sql = $sql." , a.topic_id   ";
		$sql = $sql." , a.score_level  ";
		$sql = $sql." , a.year_predict   ";
		$sql = $sql." , a.emp_id   ";
		$sql = $sql." , b.criteria_type , c.flag_hot ";
		$sql = $sql." from tris_operation_quality_tot a  ,  tris_topic b , tris_topic_detail c ";
		$sql = $sql." where a.year = b.year  ";
		$sql = $sql." and a.topic_id = b.topic_id  ";
		$sql = $sql." and emp_id = '".$emp_id."' and a.topic_id = c.topic_id and a.year = c.year and a.month = c.month  ";


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
							$topic_id = ociresult($parse_sql,3);
							$score_level = ociresult($parse_sql,4);
							$year_predict = ociresult($parse_sql,5);
							$empid = ociresult($parse_sql,6);
							$criteriatype = ociresult($parse_sql,7);
							$flag_hot = ociresult($parse_sql,8);

							$topicid = str_replace(".","_",$topic_id);
							echo $emp_id."_".$yyr."_".$mmn."Z".$topicid."C".$criteriatype." = '".$score_level."|".$year_predict."|".$flag_hot."'; ";
						}
			}
		//+++++++ END +++++++  ข้อมูล tris_operation_quality_tot +++++++ criteria_type = 1+++++++++++++++++++


		//+++++++ Start +++++++  ข้อมูล tris_operation_volume +++++++ criteria_type = 2+++++++++++++++++++

		$sql = " select a.year  ";
		$sql = $sql." , a.month   ";
		$sql = $sql." , a.topic_id  ";
		$sql = $sql." , a.year_predict  ";
		$sql = $sql." , a.emp_id  ";
        $sql = $sql." , a.year_predict_user  ";
		$sql = $sql." , b.criteria_type , c.flag_hot ";
		$sql = $sql." from tris_operation_volume a  ,  tris_topic b, tris_topic_detail c   ";
		$sql = $sql." where a.year = b.year  ";
		$sql = $sql." and a.topic_id = b.topic_id  ";
		$sql = $sql." and emp_id = '".$emp_id."' and a.topic_id = c.topic_id and a.year = c.year and a.month = c.month ";

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
							$topic_id = ociresult($parse_sql,3);
							$year_predict = ociresult($parse_sql,4);
							$empid = ociresult($parse_sql,5);
							$year_predict_user = ociresult($parse_sql,6);
							$criteriatype = ociresult($parse_sql,7);
							$flag_hot = ociresult($parse_sql,8);

							$topicid = str_replace(".","_",$topic_id);
							echo $emp_id."_".$yyr."_".$mmn."Z".$topicid."C".$criteriatype." = '".$year_predict."|".$year_predict_user."|".$flag_hot."'; ";
						}
			}

		//+++++++ END +++++++  ข้อมูล tris_operation_volume +++++++ criteria_type = 2+++++++++++++++++++


		//+++++++ Start +++++++  ข้อมูล tris_operation_management_tot +++++++ criteria_type = 3+++++++++++++++++++

		$sql = " select a.year  ";
		$sql = $sql." , a.month ";
		$sql = $sql." , a.topic_id   ";
		$sql = $sql." , a.total_level   ";
		$sql = $sql." , a.emp_id   ";
		$sql = $sql." , b.criteria_type, c.flag_hot  ";
		$sql = $sql." from tris_operation_management_tot a  ,  tris_topic b, tris_topic_detail c   ";
		$sql = $sql." where a.year = b.year  ";
		$sql = $sql." and a.topic_id = b.topic_id  ";
		$sql = $sql." and emp_id = '".$emp_id."'  and a.topic_id = c.topic_id and a.year = c.year and a.month = c.month ";

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
							$topic_id = ociresult($parse_sql,3);
							$total_level = ociresult($parse_sql,4);
							$empid = ociresult($parse_sql,5);
							$criteriatype = ociresult($parse_sql,6);
							$flag_hot = ociresult($parse_sql,7);

							$topicid = str_replace(".","_",$topic_id);
							echo $emp_id."_".$yyr."_".$mmn."Z".$topicid."C".$criteriatype." = '".$total_level."|".$flag_hot."'; ";
						}
			}
		
		//+++++++ END +++++++  ข้อมูล tris_operation_management_tot +++++++ criteria_type = 3+++++++++++++++++++




//-----------------  Select เอาข้อมูลที่มีมาใส่ใน  ตัวแปร JavaScript ก่อน

	?>	

		//=== clear data
				function cleardata()
					{
							frm.totallevel.value='';
							frm.year_predict.value ='';
							frm.year_predict_user.value ='';
							document.getElementById("hot").checked=false;
					}
		//===




		//====
			function show_g1detail()
				{
							frm.totallevel.value='';
							frm.year_predict.value ='';
							frm.year_predict_user.value ='';

// ==  ถ้า topic_id เท่ากับ  3.1 , 3.2 , 3.3.1, 3.3.2 , 3.4 , 3.5  ให้ปุ่มค้นหาเอกสารแนบทำงาน
						
									frm.doc.disabled = false;
						// ==

					//---- Start แสดงข้อมูล เกณฑ์วัดผลการดำเนินงาน
							tmp_g1 = frm.g1.value;
							tmp_g1 = tmp_g1.replace(".","_");  // 1 จุด  replace ทีล่ะจุด
							tmp_g1 = tmp_g1.replace(".","_");  // 2  จุด
							tmp_g1 = tmp_g1.replace(".","_");  // 3  จุด

							tmp_g1_val = "T_"+frm.yr.value+"Z"+tmp_g1;

							tmp_str = eval(tmp_g1_val);
							tmp_g1_val_split = tmp_str.split("|");

							dt1 = tmp_g1_val_split[0];  // topic_name
							dt2 = tmp_g1_val_split[1];  // criteria_type
							dt3 = tmp_g1_val_split[2];  // flag_hot

							if (tmp_str == null) 
								{
									frm.g2.value='';
								}
							else
								{
									frm.g2.value=dt1;
								}

								frm.criteriatype.value = dt2;  //  เก็บค่า criteria_type ลงตัวแปร text แบบ hidden เพื่อส่งค่าไป

					//---- End  แสดงข้อมูล เกณฑ์วัดผลการดำเนินงาน




					//------ Start  ถ้า  Criteria type  เป็นตัว  '3'  หรือ  '1'   ให้แสดงค่าตามนั้น   จากตัวแปร  dt2
						switch (dt2) 
							{
								case "1":   // criteria_type = 1
											//---- Start   แสดงข้อมูล ที่บันทึก ( tris_operation_quality_tot )

													frm.totallevel.disabled=false;
													frm.year_predict.disabled=false;
													document.getElementById("hot").checked=false;		
													//frm.year_predict_user.disabled=true;
													tmp_g1 = frm.g1.value;
													tmp_g1 = tmp_g1.replace(".","_");  // 1 จุด  replace ทีล่ะจุด
													tmp_g1 = tmp_g1.replace(".","_");  // 2  จุด
													tmp_g1 = tmp_g1.replace(".","_");  // 3  จุด

								<?
													echo '   tmp_g1valtmp = "typeof('.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2+") != \'undefined\' ";   ';  // ใช้ check  ว่าตัวแปรนี้มีการสร้างไว้หรือไม่
								?>

													if ( eval(tmp_g1valtmp) )  // ตัวแปรมีค่า (ให้ค่าเป็น True) 
													{
														<?
																echo '  tmp_g1_val = "'.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2;   ';
														?>

																tmp_str = eval(tmp_g1_val);

																tmp_g1_val_split = tmp_str.split("|");

																d1 = tmp_g1_val_split[0];
																d2 = tmp_g1_val_split[1];
																d3 = tmp_g1_val_split[2];


																if (d1 == null) 
																	{
																		frm.totallevel.value='';
																	}
																else
																	{
																		frm.totallevel.value=d1;
																	}

																if (d2 == null) 
																	{
																		frm.year_predict.value ='';
																	}
																else
																	{
																		frm.year_predict.value=d2;
																	}
													
																if (d3 == null) 
																{														
																		document.getElementById("hot").checked=false;		
																}
																else
																{
																	if (d3 == 0)
																	{
																		document.getElementById("hot").checked=false;		
																	}
																	else if (d3 == 1)
																	{
																		document.getElementById("hot").checked=true;
																	}
																}					


													}  // END  if ( eval(tmp_g1valtmp) )  // ตัวแปรมีค่า (ให้ค่าเป็น True) 
													break;
										//---- END   แสดงข้อมูล ที่บันทึก ( tris_operation_quality_tot )

								case "2":  // criteria_type = 2
											//---- Start   แสดงข้อมูล ที่บันทึก ( tris_operation_volume  )

													frm.totallevel.disabled=true;
													frm.year_predict.disabled=false;
													document.getElementById("hot").checked=false;		
													tmp_g1 = frm.g1.value;
													tmp_g1 = tmp_g1.replace(".","_");  // 1 จุด  replace ทีล่ะจุด
													tmp_g1 = tmp_g1.replace(".","_");  // 2  จุด
													tmp_g1 = tmp_g1.replace(".","_");  // 3  จุด

								<?
													echo '   tmp_g1valtmp = "typeof('.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2+") != \'undefined\' ";   ';  // ใช้ check  ว่าตัวแปรนี้มีการสร้างไว้หรือไม่
								?>

													if ( eval(tmp_g1valtmp) )  // ตัวแปรมีค่า (ให้ค่าเป็น True) 
													{
														<?
																echo '  tmp_g1_val = "'.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2;   ';
														?>

																tmp_str = eval(tmp_g1_val);

																tmp_g1_val_split = tmp_str.split("|");

																d1 = tmp_g1_val_split[0];
																d2 = tmp_g1_val_split[1];
																d3 = tmp_g1_val_split[2];

																if (d1 == null) 
																	{
																		frm.year_predict.value='';
																	}
																else
																	{
																		frm.year_predict.value=d1;
																	}

																if (d2 == null) 
																	{
																		frm.year_predict_user.value ='';
																	}
																else
																	{
																		frm.year_predict_user.value=d2;
																	}
																if (d3 == null) 
																{
																		document.getElementById("hot").checked=false;		
																}
																else
																{
																	if (d3 == 0)
																	{
																		document.getElementById("hot").checked=false;		
																	}
																	else if (d3 == 1)
																	{
																		document.getElementById("hot").checked=true;
																	}
																}				
	

/*

																if (tmp_str == null) 
																	{
																		frm.year_predict.value ='';
																	}
																else
																	{
																		frm.year_predict.value=tmp_str;
																	}
*/
													}  // END  if ( eval(tmp_g1valtmp) )  // ตัวแปรมีค่า (ให้ค่าเป็น True) 
													break;
											//---- END   แสดงข้อมูล ที่บันทึก ( tris_operation_volume  )

								case "3":   // criteria_type = 3
											//---- Start   แสดงข้อมูล ที่บันทึก ( tris_operation_management_tot  )
													document.getElementById("hot").checked=false;		
													frm.totallevel.disabled=true;
													frm.year_predict.disabled=false;
												//	frm.year_predict_user.disabled=true;
													tmp_g1 = frm.g1.value;
													tmp_g1 = tmp_g1.replace(".","_");  // 1 จุด  replace ทีล่ะจุด
													tmp_g1 = tmp_g1.replace(".","_");  // 2  จุด
													tmp_g1 = tmp_g1.replace(".","_");  // 3  จุด

								<?
													echo '   tmp_g1valtmp = "typeof('.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2+") != \'undefined\' ";   ';  // ใช้ check  ว่าตัวแปรนี้มีการสร้างไว้หรือไม่
								?>

													if ( eval(tmp_g1valtmp) )  // ตัวแปรมีค่า (ให้ค่าเป็น True) 
													{
														<?
																echo '  tmp_g1_val = "'.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2;   ';
														?>

																tmp_str = eval(tmp_g1_val);
																tmp_g1_val_split = tmp_str.split("|");
																d1 = tmp_g1_val_split[0];
																d2 = tmp_g1_val_split[1];

																if (d1 == null) 
																	{
																		frm.year_predict.value='';
																	}
																else
																	{
																		frm.year_predict.value=d1;
																	}

																if (d2 == null) 
																{
																		document.getElementById("hot").checked=false;		
																}
																else
																{
																	if (d2 == 0)
																	{
																		document.getElementById("hot").checked=false;		
																	}
																	else if (d2 == 1)
																	{
																		document.getElementById("hot").checked=true;
																	}
																}		
													}  // END  if ( eval(tmp_g1valtmp) )  // ตัวแปรมีค่า (ให้ค่าเป็น True) 
													break;
											//---- End   แสดงข้อมูล ที่บันทึก  ( tris_operation_management_tot )

								default: 
										alert('ไม่พบ Criteria type นี้ !!  (กรุณาแจ้งเจ้าหน้าที่ผู้ดูแลระบบ)');
							}
					//------ End  ถ้า  Criteria type  เป็นตัว  '3'  หรือ  '1'   ให้แสดงค่าตามนั้น






				}
		//====



		//====
			function send_save()
				{
					
						if ( !Isdouble(frm.totallevel.value) )
							{
									alert("กรุณาป้อนข้อมูล ' ระดับคะแนน ณ เดือนที่รายงาน ' เป็นตัวเลขค่ะ...");
									frm.totallevel.focus();
							}
						else
							{
								if ( !Isdouble(frm.year_predict.value) )
									{
											alert("กรุณาป้อนข้อมูล ' ระดับคะแนนพยากรณ์ปลายปี  ' เป็นตัวเลขค่ะ...");
											frm.year_predict.focus();
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

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" background="images/bg22.gif" onload=year_showtopicid()>
<?include("head.php");?>

<?
// ------------------------------------   END  Dropdown list   ปี พ.ศ.    --------------------------------------

	//  ++++  Check ก่อนว่ามีข้อมูลตามปีที่ แสดง ใน Table tris_topic หรือไม่  ถ้าไม่มีก็แสดงว่า ไม่มี ข้อมูลเลย  ++++

		$sql_yr = " select year from tris_topic group by year ";
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
	            echo '<form name="frm" action = "eva_management_save.php" enctype="multipart/form-data" method = "post">';

				$tdwidth_td1 = "200";   // ความกว้างของ column ที่ใช่ในการแสดงข้อมูล  column  1
				$tdwidth_td2 = "400";   // ความกว้างของ column ที่ใช่ในการแสดงข้อมูล  column  2


				echo "<center>";

				echo "<font size='4' color='#0099FF'>บันทึกการประเมินผลพยากรณ์ทุกตัวชี้วัด</font>";
								echo "<br><br>";

				echo "<table border=0 width='700'>";


				//-----------------------------------------------  START  dropdown list   ปี  -----------------------------------------------------
				
				echo "<tr>";
						echo "<td align='left' width=".$tdwidth_td1.">";
						echo '<font size="3" face="MS Sans Serif">ประจำปี</font>';
						echo "</td>";

						echo "<td align='left' width=".$tdwidth_td2.">";
						echo '<SELECT NAME="yr"  tabindex="1" onKeyDown=chk_enter() onchange=year_showtopicid()>';

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





				//-----------------------------------------------  START  ตัวชี้วัดที่  -----------------------------------------------------
						echo "<tr>";
								echo "<td align='left' width=".$tdwidth_td1.">";
								echo '<font size="3" face="MS Sans Serif">ตัวชี้วัดที่</font>';
								echo "</td>";

								echo "<td align='left' width=".$tdwidth_td2.">";

								echo '<SELECT NAME="g1"  tabindex="3" onKeyDown=chk_enter() onchange=show_g1detail()>';
								echo '<option value="-" selected>--- select ---</option>';
								echo '</SELECT>';
								echo '</td>';
						echo "</tr>";
				//-----------------------------------------------  END  ตัวชี้วัดที่  -----------------------------------------------------

			
				//----------- Hidden field  ของ  criteria_type  ที่ต้องส่งไปด้วย  ใช้ในการ SAVE ลง 2 table ตาม criteria_type ที่ส่งไป ----------------
						echo '<INPUT TYPE="hidden" NAME="criteriatype" value="'.$criteriatype.'">';
				//---------


				//-----------------------------------------------  START  ชื่อตัวชี้วัด  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ชื่อตัวชี้วัด</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="g2" rows="3" cols="50" style="BACKGROUND-COLOR: #ffffff" readonly>';
										echo '</textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END ชื่อตัวชี้วัด-----------------------------------------------------


				//-----------------------------------------------  START  คะแนนรวม  -----------------------------------------------------
								/*echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">คะแนนรวม</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";*/
										echo '<input type="hidden" name="totaloperation_goal" maxlength="5" size="5"  tabindex="4"  onKeyDown=chk_enter()>';
									/*	echo "</td>";

								echo "</tr>";*/
				//-----------------------------------------------  END  คะแนนรวม  -----------------------------------------------------


				//-----------------------------------------------  START  ระดับคะแนน -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ระดับคะแนน ณ เดือนที่รายงาน</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="totallevel" maxlength="6" size="6"  tabindex="5" onKeyDown=chk_enter()>';
										echo '&nbsp;<font color="red" size ="2">* (เฉพาะข้อมูลเชิงคุณภาพเท่านั้น)</font>';
										echo "</td>";

								echo "</tr>";
								
				//-----------------------------------------------  END  ระดับคะแนน -----------------------------------------------------


				//-----------------------------------------------  START  พยากรณ์ผลการดำเนินงานปลายปี --------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">พยากรณ์ผลการดำเนินงานปลายปี</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="year_predict" maxlength="6" size="6"  tabindex="6" onKeyDown=chk_enter()>';
										echo "</td>";

								echo "</tr>";
								
				//-----------------------------------------------  END  พยากรณ์ผลการดำเนินงานปลายปี -----------------------------------


	//-----------------------------------------------  START  ระดับคะแนนพยากรณ์ปลายปี --------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ระดับคะแนนพยากรณ์ปลายปี</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="year_predict_user" maxlength="6" size="6"  tabindex="6" onKeyDown=chk_enter() readonly>';
										echo '&nbsp;<font color="red" size ="2">* (เฉพาะข้อมูลเชิงปริมาณ จะแสดงผลเมื่อกดปุ่มบันทึกแล้ว)</font>';
										echo "</td>";

								echo "</tr>";
								
				//-----------------------------------------------  END  ระดับคะแนนพยากรณ์ปลายปี -----------------------------------


//-----------------------------------------------  START  เอกสารแนบ  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">เอกสารแนบ</font>';
										echo "</td>";
										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="file" name="doc" size="50" disabled="ture">';

										echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  เอกสารแนบ  -----------------------------------------------------


	//-----------------------------------------------  START  กำหนด HOT  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">กำหนดสัญลักษณ์</font>';
										echo "</td>";
										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="checkbox" name="hot" value="1"><img src="images/icon_hot.gif"  border="0">';
										echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  HOT  -----------------------------------------------------

				//-----------------------------------------------  START  ปุ่ม SAVE  -----------------------------------------------------
								echo "<tr>";
										echo "<td > </td>";
										echo "<td>";
										echo '<input type="button" name="save" value="บันทึก" tabindex="8" onclick=send_save()>';
										echo "&nbsp;";
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
