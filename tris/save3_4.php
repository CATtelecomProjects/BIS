<?
session_start();
$desc = $_SESSION['desc'];
$emp=$_SESSION['userid'] ;
// ตรวจสอบวันที่  ป้อนข้อมูลได้ตั้งแต่วันที่ 15-27 ของในแต่ละเดือนเท่านั้น
$today = getdate();
$day = $today['mday'];
//echo $day;
 if (($emp<>'354277')&&($emp<>'233356')&&($emp<>'226143')&&(($day<14)||($day>28)))    
 { ?>
                       <script language = "javascript">
							alert("ขออภัยนะคะ ระบบจะเปิดให้บันทึกข้อมูลตั้งแต่วันที่ 15-27 ของในแต่ละเดือนเท่านั้น") ;
					        window.location = "http://bis.cattelecom.com/tris/index.php";
			               </script>
<? }
 if (($emp<>'354277')&&($emp<>'233356')&&($emp<>'226143')&&($emp<>'323648')&&($emp<>'351759'))
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


		//  START---- Function  สำหรับการ check ว่าค่าที่ดึงได้จาก database มี  รหัสเป็น ขึ้นบรรทัดใหม่ (13) หรือ feed line (10) หรือเปล่า ถ้าใช่ให้ตัดออก  เวลาแสดงใน javascript จะได้ไม่ error
			function chk_feedline($chk_str)  
			{
				for ($h=0 ; $h < strlen($chk_str) ; $h++)
				{
					if ( !( (ord(substr($chk_str,$h,1))  == 13) || ( ord(substr($chk_str,$h,1))  == 10) )  ) // รหัส ascii เท่ากับ 13 enter , 10 feed line น่ะ  ไม่ต้องเอามา  เดี๋ยว javascript Error    ใช้  ord()  ของ php ในการ check
					{
						$p = $p.substr($chk_str,$h,1);
					}
				}

				return $p;
			}
		//  END---- Function  สำหรับการ check ว่าค่าที่ดึงได้จาก database มี  รหัสเป็น ขึ้นบรรทัดใหม่ (13) หรือ feed line (10) หรือเปล่า ถ้าใช่ให้ตัดออก  เวลาแสดงใน javascript จะได้ไม่ error


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
			$emp_id = "tui";


?>


<html>

<head>
<title>ระบบรายงานผลการดำเนินงานของ กสท ตามบันทึกข้อตกลงประเมินผลการดำเนินงานรัฐวิสาหกิจ</title>
<meta name="generator" content="Namo WebEditor v6.0">
<meta http-equiv="content-type" content="text/html; charset=windows-874">



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

		//+++++++ start +++++++++   ข้อมูล  topic_id  ของแต่ล่ะปี   +++++++++++++++++++++++++++++++++++++++++++
			$sql = " select year, subtopic_id  ";
			$sql = $sql." from tris_topic_group3 ";
			$sql = $sql." where topic_id = '3.4' ";
			$sql = $sql." order by year , subtopic_id ";

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


		//+++++++ start +++++++++   เกณฑ์วัดผลการดำเนินงาน +++++++++++++++++++++++++++++++++++++++++++

			$sql = " select *  ";
			$sql = $sql." from tris_topic_group3 ";
			$sql = $sql." where topic_id = '3.4' ";


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
							$subtopic_id = ociresult($parse_sql,3);
							$subtopic_name = ociresult($parse_sql,4);
							$goal = ociresult($parse_sql,5);

							$subtopicid = str_replace(".","_",$subtopic_id);

							echo "T_".$yrr."Z".$subtopicid." = '".chk_feedline($subtopic_name)."|".$goal."'; ";
						}
			}

		//+++++++ end +++++++++   เกณฑ์วัดผลการดำเนินงาน +++++++++++++++++++++++++++++++++++++++++++



		//+++++++ start +++++++++  ข้อมูล tris_operation_management +++++++++++++++++++++++++++++++++++++++++++

		$sql = " select * from tris_operation_management  ";
		$sql = $sql." where emp_id = '".$emp_id."'  and  topic_id = '3.4'  ";
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
							$progress = ociresult($parse_sql,13);

							$subtopicid = str_replace(".","_",$subtopic_id);
							echo $emp_id."_".$yyr."_".$mmn."Z".$subtopicid." = '".$operation_goal."|".$operation_level."|".chk_feedline($reason)."|".chk_feedline($solution)."|".chk_feedline($progress)."'; ";
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
							frm.progress.value ='';
					}
		//===




		//====
			function show_g1detail()
				{


							frm.percent_sucess.value ='';	
							frm.score_level.value='';
							frm.reason.value ='';
							frm.solution.value ='';
							frm.progress.value ='';

					//---- Start แสดงข้อมูล เกณฑ์วัดผลการดำเนินงาน
							tmp_g1 = frm.g1.value;
							tmp_g1 = tmp_g1.replace(".","_");  // 1 จุด  replace ทีล่ะจุด
							tmp_g1 = tmp_g1.replace(".","_");  // 2  จุด
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
										frm.progress.value ='';
									}
								else
									{
										frm.progress.value=d5;
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
										alert("กรุณาป้อนข้อมูล ' ผลประเมินปลายปี ที่คาดว่าจะทำได้ ' เป็นตัวเลขค่ะ...");
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

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" background="images/bg22.gif" onload=year_showtopicid()>
<?  include("./includes/head3-4.php"); ?>

<br>


<?
// ------------------------------------   END  Dropdown list   ปี พ.ศ.    --------------------------------------

	//  ++++  Check ก่อนว่ามีข้อมูลตามปีที่ แสดง ใน Table tris_topic_group3 หรือไม่  ถ้าไม่มีก็แสดงว่า ไม่มี ข้อมูลเลย  ++++

		$sql_yr = " select year from tris_topic_group3 group by year ";
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
	            echo '<form name="frm" action = "save3_4_save.php" method = "post">';

				$tdwidth_td1 = "200";   // ความกว้างของ column ที่ใช่ในการแสดงข้อมูล  column  1
				$tdwidth_td2 = "400";   // ความกว้างของ column ที่ใช่ในการแสดงข้อมูล  column  2


				echo "<center>";

				echo "<font size='4' color='#0099ff'>บันทึกข้อมูลการบริหารจัดการสารสนเทศ</font>";
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





				//-----------------------------------------------  START  เกณฑ์วัดผลการดำเนินงาน  -----------------------------------------------------
						echo "<tr>";
								echo "<td align='left' width=".$tdwidth_td1.">";
								echo '<font size="3" face="MS Sans Serif">เกณฑ์วัดผลการดำเนินงาน</font>';
								echo "</td>";

								echo "<td align='left' width=".$tdwidth_td2.">";

								echo '<SELECT NAME="g1"  tabindex="3" onKeyDown=chk_enter() onchange=show_g1detail()>';
								echo '<option value="-" selected>--- select ---</option>';
								echo '</SELECT>';
								echo '</td>';
						echo "</tr>";
				//-----------------------------------------------  END  เกณฑ์วัดผลการดำเนินงาน  -----------------------------------------------------


				//====  Hidden field ของ รหัส topic_id
					echo '<INPUT TYPE="hidden" NAME="stopicid" value="3.4">';
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
								/*echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">เป้าหมาย %</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";*/
										echo '<input type="hidden" name="go" maxlength="3" size="3" style="BACKGROUND-COLOR: #ffffff" readonly>';
										/*echo "</td>";

								echo "</tr>"; */
				//-----------------------------------------------  END  เป้าหมาย %  -----------------------------------------------------




				//-----------------------------------------------  START  % ความสำเร็จของเป้าหมาย  -----------------------------------------------------
								/*echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">% ความสำเร็จของเป้าหมาย</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";*/
										echo '<input type="hidden" name="percent_sucess" maxlength="5" size="5"  tabindex="4"  onKeyDown=chk_enter()>';
										/*echo "</td>";

								echo "</tr>";*/
				//-----------------------------------------------  END  % ความสำเร็จของเป้าหมาย  -----------------------------------------------------

								
				//-----------------------------------------------  START  สาเหตุที่ไม่บรรลุตามเป้าหมาย  -----------------------------------------------------
/*   ซ่อน ไว้ก่อน  โดยทำเป็น hidden
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">สาเหตุที่ไม่บรรลุตามเป้าหมาย</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="reason" rows="5" cols="50"  tabindex="6" onKeyDown=chk_enter()></textarea>';
										echo "</td>";
								echo "</tr>";
*/
								echo '<input type="hidden" name="reason"  tabindex="6" onKeyDown=chk_enter()>';
				//-----------------------------------------------  END  สาเหตุที่ไม่บรรลุตามเป้าหมาย  -----------------------------------------------------


		//-----------------------------------------------  START  ความคืบหน้าการดำเนินการจากปีที่ผ่านมา--------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ความคืบหน้าการดำเนินการจากปีที่ผ่านมา</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="progress" rows="5" cols="50"  tabindex="7" onKeyDown=chk_enter()></textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END ความคืบหน้าการดำเนินการจากปีที่ผ่านมา----------------------------


				//-----------------------------------------------  START  เสนอแนวทางแก้ไข  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ปัญหา / อุปสรรค<br>เสนอแนวทางแก้ไข</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="solution" rows="5" cols="50"   tabindex="8" onKeyDown=chk_enter()></textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  เสนอแนวทางแก้ไข  -----------------------------------------------------


		
//-----------------------------------------------  START  ผลประเมินปลายปี ที่คาดว่าจะทำได้  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ผลประเมินปลายปี ที่คาดว่าจะทำได้</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="score_level" maxlength="6" size="5"  tabindex="9" onKeyDown=chk_enter()>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  ผลประเมินปลายปี ที่คาดว่าจะทำได้  -----------------------------------------------------


				//-----------------------------------------------  START  ปุ่ม SAVE  -----------------------------------------------------
								echo "<tr>";
										echo "<td colspan='2' align='center'>";
										echo '<input type="button" name="save" value="บันทึก" tabindex="10" onclick=send_save()>';
										echo "&nbsp;";
										echo '<input type="button" name="cancle" value="ยกเลิก"  tabindex="11" onclick=cleardata()>';
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
