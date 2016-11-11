<?
session_start();
$desc = $_SESSION['desc'];
$emp=$_SESSION['userid'] ;
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

$emp_id = "tui";
//$emp_id =$emp;


?>


<html>

<head>
<title>รายงานผลการดำเนินงานของ กสท ตามบันทึกข้อตกลงประเมินผลการดำเนินงานรัฐวิสาหกิจ</title>
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


		//+++++++ start +++++++++   ข้อมูล  topic_id  ของแต่ล่ะปี   +++++++++++++++++++++++++++++++++++++++++++
			$sql = " select year, topic_id  ";
			$sql = $sql." from tris_topic ";
//			$sql = $sql." where year = '".$yr."'";
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


		//+++++++ start +++++++++  ชื่อตัวชี้วัด +++++++++++++++++++++++++++++++++++++++++++


			$sql_topic = " select *  ";
			$sql_topic = $sql_topic." from tris_topic ";
//			$sql_topic = $sql_topic." where year = '".$yr."'";
			$sql_topic = $sql_topic."  order by  year, topic_id ";

		// นับจำนวน rows ว่ามีกี่ rows
		  $cntrows = OCIParse($db_conn, $sql_topic);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// นับจำนวน rows ว่ามีข้อมูลหรือไม

		if ($chkrows > 0)
 			{
					$parse_sql = ociparse($db_conn,$sql_topic);
					ociexecute($parse_sql);

					while (ocifetch($parse_sql))
						{
							$yrr = ociresult($parse_sql,1);
							$topic_id = ociresult($parse_sql,2);
							$topic_name = ociresult($parse_sql,3);

							$topicid = str_replace(".","_",$topic_id);

							echo "T_".$yrr."Z".$topicid." = '".chk_feedline($topic_name)."'; ";
						}
			}
		
		//+++++++ end +++++++++   ชื่อตัวชี้วัด +++++++++++++++++++++++++++++++++++++++++++



		//+++++++ start +++++++++  ข้อมูล tris_topic_detail +++++++++++++++++++++++++++++++++++++++++++

			$sql = " select * from tris_topic_detail  ";
//			$sql = $sql." where year = '".$yr."'  ";
			$sql = $sql." order by  year , month, topic_id ";

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
								$mmn = ociresult($parse_sql,2);
								$topic_id = ociresult($parse_sql,3);
								$author = ociresult($parse_sql,4);
								$unit = ociresult($parse_sql,5);
								$weight = ociresult($parse_sql,6);
								$coworker1 = ociresult($parse_sql,7);
								$coworker2 = ociresult($parse_sql,8);
								$topicid = str_replace(".","_",$topic_id);

								echo $emp_id."_".$yrr."_".$mmn."Z".$topicid." = '".$author."|".$unit."|".$weight."|".$coworker1."|".$coworker2."'; ";
							}
				}
			
			//+++++++ end +++++++++  ข้อมูล tris_topic_detail  +++++++++++++++++++++++++++++++++++++++++++


//-----------------  Select เอาข้อมูลที่มีมาใส่ใน  ตัวแปร JavaScript ก่อน

	?>	

		//=== clear data
				function cleardata()
					{
							frm.author.value ='';										
							frm.unit.value='';
							frm.weight.value ='';
							frm.coworker1.value ='';						
							frm.coworker2.value ='';		
					}
		//===




		//====
			function show_g1detail()
				{

						cleardata();	

					//---- Start แสดงข้อมูล เกณฑ์วัดผลการดำเนินงาน
							tmp_g1 = frm.g1.value;
							tmp_g1 = tmp_g1.replace(".","_");  // 1 จุด  replace ทีล่ะจุด
							tmp_g1 = tmp_g1.replace(".","_");  // 2  จุด
							tmp_g1 = tmp_g1.replace(".","_");  // 3  จุด

							tmp_g1_val = "T_"+frm.yr.value+"Z"+tmp_g1;

							tmp_str = eval(tmp_g1_val);

							if (tmp_str == null) 
								{
									frm.g2.value='';
								}
							else
								{
									frm.g2.value=tmp_str;
								}


					//---- End  แสดงข้อมูล เกณฑ์วัดผลการดำเนินงาน


					//---- Start   แสดงข้อมูล ที่บันทึก ( tris_topic_detail)

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

							dt1 = tmp_g1_val_split[0];
							dt2 = tmp_g1_val_split[1];
							dt3 = tmp_g1_val_split[2];
							dt4 = tmp_g1_val_split[3];
							dt5 = tmp_g1_val_split[4];


								if (dt1 == null) 
									{
										frm.author.value ='';										
									}
								else
									{
										frm.author.value=dt1;			
									}

								if (dt2 == null) 
									{
										frm.unit.value='';
									}
								else
									{
										frm.unit.value=dt2;
									}
	
								if (dt3 == null) 
									{
										frm.weight.value ='';
									}
								else
									{
										frm.weight.value=dt3;			
									}

								if (dt4 == null) 
									{
										frm.coworker1.value ='';
									}
								else
									{
										frm.coworker1.value=dt4;
									}

								if (dt5 == null) 
									{
										frm.coworker2.value ='';
									}
								else
									{
										frm.coworker2.value=dt5;
									}
					
					}  // END  if ( eval(tmp_g1valtmp) )  // ตัวแปรมีค่า (ให้ค่าเป็น True) 


				//---- End   แสดงข้อมูล ที่บันทึก  ( tris_operation_quality )


				}
		//====



		//====
			function send_save()
				{

						if ( !Isdouble(frm.unit.value) )
							{
								alert("กรุณาป้อนข้อมูล ' พยากรณ์คะแนน ณ สิ้นปี   ' เป็นตัวเลขค่ะ...");
								frm.unit.focus();
							}
						else
							{
									if (confirm("ยืนยันการ บันทึกข้อมูล ?")) 
										{
											frm.submit();
										}  // end  if (confirm("ยืนยันการ บันทึกข้อมูล ?")) 
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

		$sql_yr = " select year from tris_topic_detail group by year ";
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
	            echo '<form name="frm" action = "save_criteriadetail_save.php" method = "post">';

				$tdwidth_td1 = "200";   // ความกว้างของ column ที่ใช่ในการแสดงข้อมูล  column  1
				$tdwidth_td2 = "400";   // ความกว้างของ column ที่ใช่ในการแสดงข้อมูล  column  2


				echo "<center>";

				echo "<font size='4' color='#0099FF'>บันทึกข้อมูลการกำหนดเกณฑ์ตัวชี้วัด</font>";
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
						echo '<SELECT NAME="mn"  tabindex="2" onKeyDown=chk_enter()  onchange=show_g1detail() >';
																									 
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



				//-----------------------------------------------  START  ชื่อตัวชี้วัด -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ชื่อตัวชี้วัด</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="g2" rows="3" cols="50" style="BACKGROUND-COLOR: #ffffff" readonly>';
										echo '</textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  ชื่อตัวชี้วัด-----------------------------------------------------


				//-----------------------------------------------  START ผู้รับผิดชอบ  -----------------------------------------------------
					

								$sql_author = " select * from  tris_master_authority order by id ";

								// นับจำนวน rows ว่ามีกี่ rows
								  $cntrows = OCIParse($db_conn, $sql_author);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
								// นับจำนวน rows ว่ามีข้อมูลหรือไม


								if ($chkrows == 0) // check ว่า   ถ้าไม่มีข้อมูล ใน Table Master   tris_master_authority   ให้ขึ้นว่าไม่มีข้อมูล
									{   
												echo "&nbsp;&nbsp;";
												echo '<font size="3" face="MS Sans Serif">&nbsp;ผู้รับผิดชอบ</font>';
												echo "&nbsp;&nbsp;";

												echo '<SELECT NAME="author">';
												echo '<option  selected>--ไม่มีข้อมูล--</option>';
												echo '</SELECT>';
										
									}  
								else
									{ 
												echo "<tr>";
												echo "<td align='left' width=".$tdwidth_td1.">";
												echo '<font size="3" face="MS Sans Serif">ผู้รับผิดชอบ</font>';
												echo "</td>";

												echo "<td align='left' width=".$tdwidth_td2.">";
												echo '<SELECT NAME="author"  tabindex="5" onKeyDown=chk_enter() >';

															$parse_sql_author = ociparse($db_conn,$sql_author);
															ociexecute($parse_sql_author);

															while (ocifetch($parse_sql_author))
																{
																	$author_id = ociresult($parse_sql_author,1);
																	$author_name = ociresult($parse_sql_author,2);

																	echo '<option value = "'.$author_id.'">'.$author_name.'</option>';
																}


													echo '</SELECT>';
													echo '</td>';


										echo "</tr>";

									}

				//-----------------------------------------------  END ผู้รับผิดชอบ  -----------------------------------------------------


				//-----------------------------------------------  START หน่วยวัด  -----------------------------------------------------
					

								$sql_unit = " select * from  tris_master_unit order by id ";

								// นับจำนวน rows ว่ามีกี่ rows
								  $cntrows = OCIParse($db_conn, $sql_unit);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
								// นับจำนวน rows ว่ามีข้อมูลหรือไม


								if ($chkrows == 0) // check ว่า   ถ้าไม่มีข้อมูล ใน Table Master   tris_master_unit   ให้ขึ้นว่าไม่มีข้อมูล
									{   
												echo "&nbsp;&nbsp;";
												echo '<font size="3" face="MS Sans Serif">&nbsp;หน่วยวัด</font>';
												echo "&nbsp;&nbsp;";

												echo '<SELECT NAME="unit">';
												echo '<option  selected>--ไม่มีข้อมูล--</option>';
												echo '</SELECT>';
										
									}  
								else
									{ 
												echo "<tr>";
												echo "<td align='left' width=".$tdwidth_td1.">";
												echo '<font size="3" face="MS Sans Serif">หน่วยวัด</font>';
												echo "</td>";

												echo "<td align='left' width=".$tdwidth_td2.">";
												echo '<SELECT NAME="unit"  tabindex="6" onKeyDown=chk_enter() >';

															$parse_sql_unit = ociparse($db_conn,$sql_unit);
															ociexecute($parse_sql_unit);

															while (ocifetch($parse_sql_unit))
																{
																	$unit_id = ociresult($parse_sql_unit,1);
																	$unit_name = ociresult($parse_sql_unit,2);

																	echo '<option value = "'.$unit_id.'">'.$unit_name.'</option>';
																}


													echo '</SELECT>';
													echo '</td>';


										echo "</tr>";

									}

				//-----------------------------------------------  END หน่วยวัด  -----------------------------------------------------



				//-----------------------------------------------  START  น้ำหนัก  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">น้ำหนัก</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="weight" maxlength="5" size="5"  tabindex="7" onKeyDown=chk_enter()>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  น้ำหนัก  -----------------------------------------------------


				
				//-----------------------------------------------  START  ผู้ประสานงาน 1  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ผู้ประสานงาน 1</font>' ;
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="coworker1" maxlength="6" size="6"  tabindex="8" onKeyDown=chk_enter()>';
										echo '<font size="2" face="MS Sans Serif"> <font color="red">* โปรดระบุเป็นรหัสพนักงาน</font></td>';

								echo "</tr>";
				//-----------------------------------------------  END  ผู้ประสานงาน 1  -----------------------------------------------------



				//-----------------------------------------------  START ผู้ประสานงาน 2  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ผู้ประสานงาน 2</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="coworker2" maxlength="6" size="6"  tabindex="9" onKeyDown=chk_enter()>';
										echo '<font size="2" face="MS Sans Serif"> <font color="red">* โปรดระบุเป็นรหัสพนักงาน</font></td>';
					
								echo "</tr>";
				//-----------------------------------------------  END  ผู้ประสานงาน 2  -----------------------------------------------------




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
