<?
	include("conora.php");  // Function  connect Database
	include("month_desc.php");  // Function  แปลง ตัวเลขเดือน เป็น ไทย

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
?>


<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=windows-874">
<title>ระบบประเมินผลการดำเนินงานของรัฐวิสาหกิจ - TRIS</title>
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
<meta name="generator" content="Namo WebEditor v5.0">


<script language="JavaScript">
<!--
function na_open_window(name, url)
{
  window.open(url, name, 'left=300 , top=320 , width=400 , height=160 , toolbar=no , menubar=no , status=no , scrollbars=no , resizable=yes');
}

function na_open_window2(name, url)
{
  window.open(url, name, 'left=300 , top=320 , width=400 , height=200 , toolbar=no , menubar=no , status=no , scrollbars=no , resizable=yes');
}

function na_open_window3(name, url)
{
  window.open(url, name, 'left=300 , top=300 , width=520 , height=200 , toolbar=no , menubar=no , status=no , scrollbars=no , resizable=yes');
}

function na_open_window4(name, url)
{
  window.open(url, name, 'left=50 , top=10 , width=1000 , height=1000 , toolbar=no , menubar=no , status=no , scrollbars=no , resizable=yes');
}

function na_open_window5(name, url)
{
  window.open(url, name, 'left=300 , top=300 , width=500 , height=250 , toolbar=no , menubar=no , status=no , scrollbars=no , resizable=yes');
}

function send_val1()
	{
		tmp = "report.php?mn="+frm.mn.value+"&yr="+frm.yr.value;
		self.location=tmp;
	}

// -->
</script>


</head>

<body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">

<?include("head.php");?>

<table width="987" height="1210">
   
    <tr>
        <td width="995" height="1000" valign="top" colspan="2">
		
<form name = 'frm' target='_self'>

    <p align="center"><font size="3">&nbsp;</font></p>
                <p align="center"><font size="3" face="MS Sans Serif"><b>รายงานผลการดำเนินงานตามบันทึกข้อตกลงการประเมินผลการดำเนินงานของ กสท<br></b></font></p>
                <p align="center">
				



<?

// ------------------------------------   END  Dropdown list   เดือน  12 เดือน  --------------------------------------

		// ===  ถ้า ตัวแปรส่งค่า ไม่มีค่า   แสดงว่าเป็นหน้าแรก ยังไม่มีการส่งค่า ตัวแปร  กำหนดค่าให้เป็น "-" ซะ		
		if (!isset($mn))
			{
				$mn = date(n) ;
				$maxmn = $mn;
			}
		else
			{
				if (empty($mn)) // ถ้า mn ไม่มีค่าแสดงว่าเป็นหน้าแรก ยังไม่มีการส่งค่า ตัวแปร mn จะยังไม่มีค่า ก็กำหนดค่าให้เป็น เดือน ม.ค. ซะ
					{
						$mn = date(n) ;
						$maxmn = $mn;
					}
			}
		//===



	// ++++   End เก็บ เดือนทั้งหมดที่มีข้อมูลของปีปัจจุบัน   ++++

		echo "&nbsp;";
		echo '<font size="3" face="MS Sans Serif">ประจำเดือน</font><font size="2" face="MS Sans Serif">';
		echo "&nbsp;&nbsp;";


		echo '<SELECT NAME="mn">';
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

// ------------------------------------   END  Dropdown list   เดือน  12 เดือน  --------------------------------------


// ------------------------------------   END  Dropdown list   ปี พ.ศ.    --------------------------------------

	// ===  ถ้า ตัวแปรส่งค่า ไม่มีค่า   แสดงว่าเป็นหน้าแรก ยังไม่มีการส่งค่า ตัวแปร  กำหนดค่าให้เป็น "-" ซะ		
			if (!isset($yr))  // Check ว่ามีตัวแปรนี้หรือยัง
				{
					$yr = "-";  
				}
			else 
				{
					if (empty($yr))   // Check ว่าตัวแปรนี้  มีค่าหรือเปล่า
						{
							$yr = "-";
						}
				}
	//===

	//  ++++  Check ก่อนว่ามีข้อมูลตามปีที่ แสดง ใน Table tris_topic หรือไม่  ถ้าไม่มีก็แสดงว่า ไม่มี ข้อมูลเลย  ++++
	
	if ($yr != "-")
		{
			$sql_yr = " select year from tris_topic where year = '".$yr."' group by year ";
			$sql_yr = $sql_yr." order by to_number(year) desc ";
		} 
	else
		{
			$maxyr = substr( (date(Y)+543) ,2,2);		//  ปีปัจจุบัน  2007 + 543  = 2550  แล้วเอาแค่ 2 ตัวหลัง
			$yr = $maxyr;

			$sql_yr = " select year from tris_topic where year = '".$yr."' group by year ";
			$sql_yr = $sql_yr." order by to_number(year) desc ";
		} 

		

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
				//-----------------------------------------------  START  dropdown list   ปี  -----------------------------------------------------
						echo "&nbsp;&nbsp;";
						echo '<font size="3" face="MS Sans Serif">&nbsp;ปี พ.ศ.</font>';
						echo "&nbsp;&nbsp;";

						echo '<SELECT NAME="yr">';

									$sql_vyr = " select year from tris_topic group by year ";
									$sql_vyr = $sql_vyr." order by to_number(year) desc ";

									$parse_sql_vyr = ociparse($db_conn,$sql_vyr);
									ociexecute($parse_sql_vyr);

									while (ocifetch($parse_sql_vyr))
										{
											$yymm_val = ociresult($parse_sql_vyr,1);
											$yymm_val_desc = ( "25".$yymm_val );

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
				//-----------------------------------------------  End  dropdown list   ปี  -----------------------------------------------------



				//---------------------------  ปุ่มแสดงข้อมูล  ----------------------------------
					echo '&nbsp;&nbsp;&nbsp;&nbsp;';
					echo '<INPUT TYPE="button" name ="bt_send1" value = " แสดงผล "  onclick="send_val1()">';
				// --------------------------- End ปุ่มแสดงข้อมูล -----------------------------








//---33333333333333333333333333   START  แสดงผล  333333333333333333333333333333333333333333333
$width_table = "995";

echo '<br><br>';
echo '<table width="995" cellspacing="0" style="border-collapse:collapse;">';
echo '    <tr>';
echo '        <td width="28" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">ลำดับ</font></p>';
echo '        </td>';
echo '        <td width="236" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">เกณฑ์วัดการดำเนินงาน</font></p>';
echo '        </td>';
echo '        <td width="45" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">หน่วยวัด</font></p>';
echo '        </td>';
echo '        <td width="27" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">น้ำหนัก (%)</font></p>';
echo '        </td>';
echo '        <td width="307" colspan="5" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">ค่าเกณฑ์วัดปีบัญชี </font><font size="2" face="MS Sans Serif" color="#CC0033"><b><? echo "25".$yr;?></b></font></p>';
echo '        </td>';
echo '        <td width="199" colspan="4" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">ผลการดำเนินงาน</font></p>';
echo '        </td>';
echo '                    <td width="67" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '                        <p align="center"><font size="2" face="MS Sans Serif">พยากรณ์ คะแนน ณ สิ้นปี</font></p>';
echo '                    </td>';
echo '        <td width="66" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">สถานะพยากรณ์ปลายปี</font></p>';
echo '        </td>';
echo '    </tr>';
echo '    <tr>';
echo '        <td width="64" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">1</font></p>';
echo '        </td>';
echo '        <td width="56" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">2</font></p>';
echo '        </td>';
echo '        <td width="60" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">3</font></p>';
echo '        </td>';
echo '        <td width="57" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">4</font></p>';
echo '        </td>';
echo '        <td width="58" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">5</font></p>';
echo '        </td>';
echo '        <td width="52" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif" color="#CC0033"><b>ธ.ค. '.(("25".$yr)-1).'</b></font></p>';
echo '        </td>';
echo '        <td width="27" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">ระดับ</font></p>';
echo '        </td>';
echo '        <td width="79" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">ณ </font><font size="2" face="MS Sans Serif" color="#CC0033"><b>'.month_longdesc(chkmn($mn))." ".$yr.'</b></font></p>';
echo '        </td>';
echo '        <td width="32" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">ระดับ</font></p>';
echo '        </td>';
echo '    </tr>';





	// == ตัวแปร  --------------------------------------------------------
		$topic_code_array = array();
		$topic_desc_array = array();
		$topic_criteria_type_array = array();
		$topic_unit_array = array();
		$topic_weight_array = array();
		$topic_amt = 1;
		$sumweight=0;  // ตัว sum weight ของหัวข้อใหญ่

		$tb_bgcolor_headtopic1 = "#00CC99";  // สีข้อใหญ่ ข้อที่ 1
		$tb_bgcolor_datatopic1 = "#CCFFCC";  // สีข้อย่อย ข้อที่ 1
		
		$tb_bgcolor_headtopic2 = "#FFFF66";  // สีข้อใหญ่ ข้อที่ 2
		$tb_bgcolor_datatopic2 = "#FFFFCC";  // สีข้อย่อย ข้อที่ 2

		$tb_bgcolor_headtopic3 = "#FF99FF";  // สีข้อใหญ่ ข้อที่ 3
		$tb_bgcolor_datatopic3 = "#FFCCFF";  // สีข้อย่อย ข้อที่ 3

		$fontcolor = "#000000";  // สีตัวหนังสือ

		$tb_borderstyle = "'border-width:2; border-color:white; border-style:solid;'";  //  กรอบของตาราง


		$tb_valign = "top";

	//---------------------------------------------------------------------



// SQL -----------------------------------
	$sql_topic = " select tt.topic_id ";
	$sql_topic = $sql_topic." , tt.topic_name ";
	$sql_topic = $sql_topic." , tt.criteria_type ";
	$sql_topic = $sql_topic." , tmu.unit_name ";
	$sql_topic = $sql_topic." , ttd.weight ";
	$sql_topic = $sql_topic." from tris_topic_detail ttd , tris_topic  tt , tris_master_unit tmu ";
	$sql_topic = $sql_topic." where ttd.unit_id = tmu.id ";
	$sql_topic = $sql_topic." and tt.topic_id = ttd.topic_id ";
	$sql_topic = $sql_topic." and tt.year = ttd.year ";
	$sql_topic = $sql_topic." and tt.year = '".$yr."' ";
	$sql_topic = $sql_topic." group by tt.topic_id , tt.topic_name , tt.criteria_type , tmu.unit_name , ttd.weight ";
	$sql_topic = $sql_topic." order by tt.topic_id ";

//echo $sql_topic."<br>";

	$data_topic = ociparse($db_conn,$sql_topic);
	ociexecute($data_topic);

	// --- Start  เก็บตัวข้อมูลลงตัวแปร Array
			$sumweight_1 = 0;
			$sumweight_2 = 0;
			$sumweight_3 = 0;

			while (ocifetch($data_topic))
				{
					$topic_code_array[$topic_amt] = ociresult($data_topic,1);
					$topic_desc_array[$topic_amt] = ociresult($data_topic,2);
					$topic_criteria_type_array[$topic_amt] = ociresult($data_topic,3);
					$topic_unit_array[$topic_amt] = ociresult($data_topic,4);
					$topic_weight_array[$topic_amt] = ociresult($data_topic,5);


					// เก็บ ค่ายอด sum ของ น้ำหนักรวมของแต่ล่ะ ข้อใหญ่ 
						list($hn1,$hn2,$hn3) = split("\.",$topic_code_array[$topic_amt]);  // แยกเอาหัวข้อใหญ่ ออกมา  จากตัวคั่น จุด
						switch ($hn1)
							{
								case 1:   // ข้อ 1
										$sumweight_1 = $sumweight_1 + $topic_weight_array[$topic_amt];
									break;
								case 2:   // ข้อ 2
										$sumweight_2 = $sumweight_2 + $topic_weight_array[$topic_amt];
									break;
								case 3:   // ข้อ 3
										$sumweight_3 = $sumweight_3 + $topic_weight_array[$topic_amt];
									break;
							}
					//---
					
					$sumweight = $sumweight + $topic_weight_array[$topic_amt];  // ยอด Sum ของ Weight ทั้งหมด

					$topic_amt++;   // บวกเพิ่มสำหรับตัวแปร array
				}
	// --- END  เก็บตัวข้อมูลลงตัวแปร Array




	// ลบ จำนวน Recode ออก 1 (กรณีที่มากกว่า 1) เพราะตัวสุดท้ายจะบวกค่าไปแล้ว 1
		if ($topic_amt > 1)
			{
				$topic_amt = $topic_amt-1 ;  
			}
	//--


	// แยก ข้อออกจากกันด้วย จุด(.) เช่น 2.3.10  จะได้ออกมา 3 ตัว  (โดยเอาตัวสุดท้ายของข้อมูล มาใช้ เพื่อจะได้ข้อสุดท้าย  เอามาใช้ ในการแสดงหัวข้อ
//			list($headnum1,$headnum2,$headnum3) = split("\.",$topic_code_array[$topic_amt]);
			// จะได้ ตัวแปร headnum1 คือ หัวข้อใหญ่ข้อสุดท้าย   จะได้เอามาวน loop แสดงผลแค่ ข้อ headnum1
	//---
















	// --- Start  แสดงผลตัวแปร Array topic ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		
		$cntnumnum1 = 1;
		$cntnumnum2 = 1;
		$cntnumnum3 = 1;

		$sum_level_performance = 0;   // SUM  บรรทัด รวม ระดับของเดือนปัจจุบัน (สุดท้าย)  โดย เก็บยอดรวมของ  ระดับ * น้ำหนัก


		for ($t1=1 ; $t1<=$topic_amt ; $t1++ )
			{


						list($headnum1,$headnum2,$headnum3) = split("\.",$topic_code_array[$t1]);
						$cntn_num = "cntnumnum".$headnum1;



//============================  Start  แสดง  ชื่อ ข้อใหญ่ =================================================


						if ($t1 > 1)  // Check ว่าเป็น record แรก หรือเปล่า ----  สำหรับใช้แสดงหัวข้อใหญ่
							{
								list($headnum11,$headnum22,$headnum33) = split("\.",$topic_code_array[($t1-1)]);  // แยกเอาข้อใหญ่ ตัวก่อนหน้า สำหรับการ check ว่าข้อ ตัวปัจจุบันกับตัวก่อนหน้า เหมือนกันไม๊ จะได้แสดงข้อใหญ่ ไม่ซ้ำกัน  เช่น 1.1 , 2.1  ก็คือข้อใหญ่ คือ 1 , 2 เป็นต้น

								if ($headnum1 != $headnum11)
									{

										//============================  Start  แสดง  ชื่อ ข้อใหญ่ ======
													$tbbgcolorhead = "tb_bgcolor_headtopic".$headnum1;

													echo "<tr>";

													for ($all_column=1;$all_column<=15;$all_column++)  // วนแสดง 15 column ต่อ 1 บรรทัด
														{
															switch($all_column)
															{

																case 2:   // แสดงชื่อ ข้อใหญ่  ( case = 2  หรือ  4  คือ column ที่ 2 กับ 4 ที่หน้า report  ที่ใช้ในการแสดงข้อมูลของข้อใหญ่ )
																		switch ($headnum1)
																		{
																			case 1:
																				echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;การดำเนินการตามนโยบาย</font></td>";
																				break;
																			case 2:
																				echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;การดำเนินงานของรัฐวิสาหกิจ</font></td>";
																				break;
																			case 3:
																			echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;การบริหารจัดการองค์กร</font></td>";
																				break;
																		}
																	break;

																case 4:  //  ( case = 2  หรือ  4  คือ column ที่ 2 กับ 4 ที่หน้า report  ที่ใช้ในการแสดงข้อมูลของข้อใหญ่ )
																		if ($headnum1 == "2")
																			{
																				echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif' color=".$fontcolor."><b>".$sumweight_2."</b></font></td>";   //  ยอดรวมของ น้ำหนัก  ถ้าเป็นข้อ 2 ใส่ คือ  sumweight_2  ถ้าเป็น ข้อ 3 ใส่ $sumweight_3
																			}
																		elseif  ($headnum1 == "3")
																			{
																				echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif' color=".$fontcolor."><b>".$sumweight_3."</b></font></td>";   //  ยอดรวมของ น้ำหนัก  ถ้าเป็นข้อ 2 ใส่ คือ  sumweight_2  ถ้าเป็น ข้อ 3 ใส่ $sumweight_3
																			}
																	break;
																default:
																	// ถ้าไม่ใช่ column ที่ 2 (ชื่อ topic) กับ  4 (weight รวม)   ให้ใส่ column ว่างๆๆ
																	echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
															}

														}  // END  for ($all_column=1;$all_column<=15;$all_column++)  // วนแสดง 15 column ต่อ 1 บรรทัด

													echo "</tr>";
										//============================  END  แสดง  ชื่อ  ข้อใหญ่ ======


									} // if ($headnum1 != $headnum11)

							}  // if ($t1 > 1)
						else   //  ถ้าเป็น Record แรก ให้แสดงข้อใหญ่เลย
							{
										//============================  Start  แสดง  ชื่อ ข้อใหญ่ ======
													$tbbgcolorhead = "tb_bgcolor_headtopic".$headnum1;

													echo "<tr>";

													for ($all_column=1;$all_column<=15;$all_column++)  // วนแสดง 15 column ต่อ 1 บรรทัด
														{
															switch($all_column)
															{

																case 2:   // แสดงชื่อ ข้อใหญ่ ( case = 2  หรือ  4  คือ column ที่ 2 กับ 4 ที่หน้า report  ที่ใช้ในการแสดงข้อมูลของข้อใหญ่ )
																		switch ($headnum1)
																		{
																			case 1:
																				echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;การดำเนินการตามนโยบาย</font></td>";
																				break;
																			case 2:
																				echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;การดำเนินงานของรัฐวิสาหกิจ</font></td>";
																				break;
																			case 3:
																			echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;การบริหารจัดการองค์กร</font></td>";
																				break;
																		}
																	break;

																case 4:  //  ( case = 2  หรือ  4  คือ column ที่ 2 กับ 4 ที่หน้า report  ที่ใช้ในการแสดงข้อมูลของข้อใหญ่ )
																			echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif' color=".$fontcolor."><b>".$sumweight_1."</b></font></td>";   // ถ้าเป็น record แรกให้ข้อใหญ่ใส่ ยอดรวมของ น้ำหนักเลย คือ  sumweight_1
																			
																	break;
																default:
																	// ถ้าไม่ใช่ column ที่ 2 (ชื่อ topic) กับ  4 (weight รวม)   ให้ใส่ column ว่างๆๆ
																	echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
															}

														}  // END  for ($all_column=1;$all_column<=15;$all_column++)  // วนแสดง 15 column ต่อ 1 บรรทัด

													echo "</tr>";
										//============================  END  แสดง  ชื่อ  ข้อใหญ่ ======
							}  // if ($t1 > 1)


//============================  END  แสดง  ชื่อ ข้อใหญ่ =================================================









//============================   START  แสดง  ข้อย่อย =================================================

												$tbbgcolordata = "tb_bgcolor_datatopic".$headnum1;
												list($n1,$n2,$n3) = split("\.",$topic_code_array[$t1]);

												if ($n1 == $headnum1)
													{
																	echo "<tr>";
																//-- ลำดับ
																	echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$t1."</font></td>";

																//-- เกณฑ์วัดการดำเนินงาน
																	echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">";

																	$file_n2="report_sub2.php?yr=".$yr."&topicid=".$topic_code_array[$t1];
																	echo '<a href="javascript:na_open_window2(\'win\', \''.$file_n2.'\' )" target="_self" title="คลิ๊กเพื่อดูคำจำกัดความ">'.$topic_code_array[$t1]."&nbsp;".$topic_desc_array[$t1].'</a>';

																	echo "</font>";



																	// ถ้าเป็นข้อที่ 1.2 , 2.1 ,  2.2  ให้มี pdf ต่อท้าย
																			switch ($topic_code_array[$t1])
																				{
																					case "1.2":
																							//--- Check ดูก่อนว่า มี File บน Server หรือไม่  ก่อนเรียกมาแสดง
																									$chk_file_exists = "document/tris1_2_".chkmn($mn).$yr.".xls";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris1_2_'.chkmn($mn).$yr.'.xls" target="_blank" title="คลิ๊กเพื่อดูเอกสารประกอบ"><img src="images/icon_PDF_icon.gif" width="20" height="20" border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'ไม่พบ File ค่ะ\')"><img src="images/icon_PDF_icon.gif" width="20" height="20" border="0" align="top"></a>';
																											  }
																							//----
																						break;
																					case "2.1":
																							//--- Check ดูก่อนว่า มี File บน Server หรือไม่  ก่อนเรียกมาแสดง
																									$chk_file_exists = "document/tris2_1_".chkmn($mn).$yr.".xls";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris2_1_'.chkmn($mn).$yr.'.xls" target="_blank" title="คลิ๊กเพื่อดูเอกสารประกอบ"><img src="images/icon_PDF_icon.gif" width="20" height="20" border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'ไม่พบ File ค่ะ\')"><img src="images/icon_PDF_icon.gif" width="20" height="20" border="0" align="top"></a>';
																											  }
																							//----
																						break;
																					case "2.2":
																							//--- Check ดูก่อนว่า มี File บน Server หรือไม่  ก่อนเรียกมาแสดง
																									$chk_file_exists = "document/tris2_2_".chkmn($mn).$yr.".xls";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris2_2_'.chkmn($mn).$yr.'.xls" target="_blank" title="คลิ๊กเพื่อดูเอกสารประกอบ"><img src="images/icon_PDF_icon.gif" width="20" height="20" border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'ไม่พบ File ค่ะ\')"><img src="images/icon_PDF_icon.gif" width="20" height="20" border="0" align="top"></a>';
																											  }
																							//----
																						break;
																		} // END  switch ($topic_code_array[$t1]) 
																	echo "</td>";
																//---

																//-- หน่วยวัด
																	echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color='#0066FF'>".$topic_unit_array[$t1]."</font></td>";

																//-- น้ำหนัก
																	echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color='#CC0033'>".$topic_weight_array[$t1]."</font></td>";

																//-- ค่าเกณฑ์วัดปีบัญชี ...............
																	
																			$sql_tris_year_criteria = "select * from tris_year_criteria where year = '".$yr."' and month = '".chkmn($mn)."' and topic_id = '".$topic_code_array[$t1]."' ";
																		

																		// นับจำนวน rows ว่ามีกี่ rows
																		  $cntrows = OCIParse($db_conn, $sql_tris_year_criteria);
																		  OCIExecute($cntrows);
																		  $chkrows = OCIFetchstatement($cntrows,$results);
																		// นับจำนวน rows ว่ามีข้อมูลหรือไม่

																		if ($chkrows > 0) 
																			{   
																				$data_tris_year_criteria = ociparse($db_conn,$sql_tris_year_criteria);
																				ociexecute($data_tris_year_criteria);


																						while (ocifetch($data_tris_year_criteria))
																							{
																											if ( ($topic_code_array[$t1] == "1.1")  || ($topic_code_array[$t1] == "2.7") ||($topic_code_array[$t1] == "2.3.1") ||($topic_code_array[$t1] == "2.3.2")  ||($topic_code_array[$t1] == "2.5") || ( $headnum1 == "3") )  //  ตัวเลข  ไม่มี ทศนิยม
																												{
																														$yr_criteria1 = number_format(ociresult($data_tris_year_criteria,4),0,".",",");
																														$yr_criteria2 = number_format(ociresult($data_tris_year_criteria,5),0,".",",");
																														$yr_criteria3 = number_format(ociresult($data_tris_year_criteria,6),0,".",",");
																														$yr_criteria4 = number_format(ociresult($data_tris_year_criteria,7),0,".",",");
																														$yr_criteria5 = number_format(ociresult($data_tris_year_criteria,8),0,".",",");
																												}
																											else  // ที่เหลือ  ใส่ ทศนิยม 2 ตัว
																												{
																													$yr_criteria1 = number_format(ociresult($data_tris_year_criteria,4),2,".",",");
																													$yr_criteria2 = number_format(ociresult($data_tris_year_criteria,5),2,".",",");
																													$yr_criteria3 = number_format(ociresult($data_tris_year_criteria,6),2,".",",");
																													$yr_criteria4 = number_format(ociresult($data_tris_year_criteria,7),2,".",",");
																													$yr_criteria5 = number_format(ociresult($data_tris_year_criteria,8),2,".",",");

																									}



																								//-------- ถ้า cyteria_type เท่ากับ 1 ให้เพิ่ม link เปิดหน้าต่าง แสดงรายละเอียดด้วย
																										if ($topic_criteria_type_array[$t1] == "1")  
																											{
																												$file_n4 = "report_sub4.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1];

																												$yr_criteria1 = '<a href="javascript:na_open_window5(\'win\', \''.$file_n4.'\' )" target="_self" title="คลิ๊กเพื่อดูค่าเกณฑ์วัดแต่ละระดับ">'.$yr_criteria1.'</a>';
																												$yr_criteria2 = '<a href="javascript:na_open_window5(\'win\', \''.$file_n4.'\' )" target="_self" title="คลิ๊กเพื่อดูค่าเกณฑ์วัดแต่ละระดับ">'.$yr_criteria2.'</a>';
																												$yr_criteria3 = '<a href="javascript:na_open_window5(\'win\', \''.$file_n4.'\' )" target="_self" title="คลิ๊กเพื่อดูค่าเกณฑ์วัดแต่ละระดับ">'.$yr_criteria3.'</a>';
																												$yr_criteria4 = '<a href="javascript:na_open_window5(\'win\', \''.$file_n4.'\' )" target="_self" title="คลิ๊กเพื่อดูค่าเกณฑ์วัดแต่ละระดับ">'.$yr_criteria4.'</a>';
																												$yr_criteria5 = '<a href="javascript:na_open_window5(\'win\', \''.$file_n4.'\' )" target="_self" title="คลิ๊กเพื่อดูค่าเกณฑ์วัดแต่ละระดับ">'.$yr_criteria5.'</a>';
																											}
																								//--------


																											echo "<td align='right'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yr_criteria1."</font></td>";

																											echo "<td align='right'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yr_criteria2."</font></td>";

																											echo "<td align='right'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yr_criteria3."</font></td>";

																											echo "<td align='right'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yr_criteria4."</font></td>";

																											echo "<td align='right'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yr_criteria5."</font></td>";



																							}

																			}  //if ($chkrows > 0)

																		else  //  ถ้าไม่มีข้อมูล  ให้แสดงตารางว่างๆ
																			{
																				for ($ii=1 ; $ii<=5 ; $ii++)
																				{
																					echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																				}
																			} //if ($chkrows > 0)

																	//----- ค่าเกณฑ์วัดบัญชี........



																	//-----  Start  ผลการดำเนินงาน  ... --------------------------------

																			switch ($topic_criteria_type_array[$t1])   // แสดงข้อมูลตาม Criteria_type จากต่าง Table
																				{


																					//*************  criteria type = 1 *********************************************************
																							case "1":
																									$aa = ""; 
																									$bb = "";

																									//--- ผลการดำเนินงาน เดือนปัจจุบัน ของ  ปีปัจจุบัน ลบ 1 ..........
																										$sql = " select score_level from tris_operation_quality_tot where year = '".($yr-1)."' and month = '".chkmn($mn)."' and topic_id = '".$topic_code_array[$t1]."' ";

																										// นับจำนวน rows ว่ามีกี่ rows
																										  $cntrows = OCIParse($db_conn, $sql);
																										  OCIExecute($cntrows);
																										  $chkrows = OCIFetchstatement($cntrows,$results);
																										// นับจำนวน rows ว่ามีข้อมูลหรือไม่

																										if ($chkrows > 0) 
																											{   
																												$data_sql = ociparse($db_conn,$sql);
																												ociexecute($data_sql);



																														while (ocifetch($data_sql))
																															{
																																$aa = ociresult($data_sql,1);

																																if ($aa != "")
																																{
																																	if ( ($topic_code_array[$t1] == "1.1")  || ($topic_code_array[$t1] == "2.7") ||($topic_code_array[$t1] == "2.3.1") ||($topic_code_array[$t1] == "2.3.2")  ||($topic_code_array[$t1] == "2.5") || ( $headnum1 == "3") )  //  ตัวเลข  ไม่มี ทศนิยม
																																		{
																																			$aa = number_format($aa,0,".",",");
																																		}
																																	else
																																		{
																																			$aa = number_format($aa,2,".",",");
																																		}
																																}

																									
																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">";

																																$file_n1 = "report_sub1.php?mn=".chkmn($mn)."&yr=".($yr-1)."&topicid=".$topic_code_array[$t1]."&tb=tris_operation_quality_tot&ff=score_level";
																																echo '<a href="javascript:na_open_window(\'win\', \''.$file_n1.'\' )" target="_self" title="คลิ๊กเพื่อดูผลการดำเนินงานในอดีต">'.$aa.'</a></font></td>';


																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$aa."</font></td>";

																															}

																											}
																										else
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";
																											}
																									//--- ผลการดำเนินงาน เดือน 12 ของ ปีปัจจุบัน ลบ 1 ..........

																									//--- ผลการดำเนินงาน เดือน ปัจจุบัน  ..........
																										$sql = " select tris_operation_quality_tot.score_level from  tris_operation_quality_tot where tris_operation_quality_tot.year = '".$yr."' and tris_operation_quality_tot.month = '".chkmn($mn)."' and tris_operation_quality_tot.topic_id = '".$topic_code_array[$t1]."' ";

																										// นับจำนวน rows ว่ามีกี่ rows
																										  $cntrows = OCIParse($db_conn, $sql);
																										  OCIExecute($cntrows);
																										  $chkrows = OCIFetchstatement($cntrows,$results);
																										// นับจำนวน rows ว่ามีข้อมูลหรือไม่

																										if ($chkrows > 0) 
																											{   
																												$data_sql = ociparse($db_conn,$sql);
																												ociexecute($data_sql);


																														while (ocifetch($data_sql))
																															{
																																$aa = ociresult($data_sql,1);
																																$yearpredict = $aa;

																																if ($aa != "")
																																{
																																	if ( ($topic_code_array[$t1] == "1.1")  || ($topic_code_array[$t1] == "2.7") ||($topic_code_array[$t1] == "2.3.1") ||($topic_code_array[$t1] == "2.3.2")  ||($topic_code_array[$t1] == "2.5") || ( $headnum1 == "3") )  //  ตัวเลข  ไม่มี ทศนิยม
																																			{
																																				$aa = number_format($aa,0,".",",");
																																			}
																																		else
																																			{
																																				$aa = number_format($aa,2,".",",");
																																			}
																																}

																																echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">";
																																		$file_n1 = "report_sub1.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&tb=tris_operation_quality_tot&ff=score_level";
																																echo '<a href="javascript:na_open_window(\'win\', \''.$file_n1.'\' )" target="_self" title="คลิ๊กเพื่อดูผลการดำเนินงานในอดีต">'.$aa.'</a></font></td>';


																																echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$aa."</font></td>";

																																//===  เก็บยอด SUM ของระดับของเดือนปัจจุบัน
																																	$sum_level_performance = $sum_level_performance + ( $aa * $topic_weight_array[$t1]); // ระดับ * น้ำหนัก
																																//---

																															// -- พยากรณ์คะแนน ณ สิ้นปี
																																	if ($yearpredict == "-")
																																		{
																																			echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yearpredict."</font></td>";
																																		}
																																	else
																																		{
																																			echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".number_format($yearpredict,0,".",",")."</font></td>";
																																		}
																															// --

																															// -- สถานะ สีไฟ
																																switch ($aa)
																																{
																																	case ($aa >= 4): // สีเขียว
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle.">";
																																				$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																				echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="คลิ๊กเพื่อดูพยากรณ์ผลการดำเนินงานที่คาดว่าจะทำได้ปลายปี ปัญหา/อุปสรรค  เสนอแนวทางแก้ไข ผู้รับผิดชอบ และผู้ประสานงาน"><img src="images/green.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																			break;
																																	case (($aa >= 3) && ($aa < 4)): // สีเหลือง
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle.">";
																																				$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																				echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="คลิ๊กเพื่อดูพยากรณ์ผลการดำเนินงานที่คาดว่าจะทำได้ปลายปี ปัญหา/อุปสรรค  เสนอแนวทางแก้ไข ผู้รับผิดชอบ และผู้ประสานงาน"><img src="images/yellow.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																			break;
																																	case ($aa < 3): // สีแดง
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle.">";
																																				$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																				echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="คลิ๊กเพื่อดูพยากรณ์ผลการดำเนินงานที่คาดว่าจะทำได้ปลายปี ปัญหา/อุปสรรค  เสนอแนวทางแก้ไข ผู้รับผิดชอบ และผู้ประสานงาน"><img src="images/red.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																			break;
																																}
																															// --


																															}  //  END  while (ocifetch($data_sql))


																											}
																										else
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																											}
																									//--- ผลการดำเนินงาน เดือนปัจจุบัน  ..........

																								break;


																					//*************  criteria type = 2 *********************************************************
																							case "2":
																									$aa = ""; 
																									$bb = "";

																									//--- ผลการดำเนินงาน เดือนปัจจุบัน ของ ปีปัจจุบัน ลบ 1 ..........
																										$sql = " select volume_month,score_level from tris_operation_volume where year = '".($yr-1)."' and month = '".chkmn($mn)."' and topic_id = '".$topic_code_array[$t1]."' ";

																										// นับจำนวน rows ว่ามีกี่ rows
																										  $cntrows = OCIParse($db_conn, $sql);
																										  OCIExecute($cntrows);
																										  $chkrows = OCIFetchstatement($cntrows,$results);
																										// นับจำนวน rows ว่ามีข้อมูลหรือไม่

																										if ($chkrows > 0) 
																											{   
																												$data_sql = ociparse($db_conn,$sql);
																												ociexecute($data_sql);


																														while (ocifetch($data_sql))
																															{
																																$aa = ociresult($data_sql,1);
																																$bb = ociresult($data_sql,2);

																																if ($aa != "")
																																{
																																		if ( ($topic_code_array[$t1] == "1.1")  || ($topic_code_array[$t1] == "2.7") ||($topic_code_array[$t1] == "2.3.1") ||($topic_code_array[$t1] == "2.3.2")  ||($topic_code_array[$t1] == "2.5") || ( $headnum1 == "3") )  //  ตัวเลข  ไม่มี ทศนิยม
																																				{
																																					$aa = number_format($aa,0,".",",");
																																				}
																																			else
																																				{
																																					$aa = number_format($aa,2,".",",");
																																				}
																																}

																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">";
																																		$file_n1 = "report_sub1.php?mn=".chkmn($mn)."&yr=".($yr-1)."&topicid=".$topic_code_array[$t1]."&tb=tris_operation_volume&ff=volume_month";
																																echo '<a href="javascript:na_open_window(\'win\', \''.$file_n1.'\' )" target="_self" title="คลิ๊กเพื่อดูผลการดำเนินงานในอดีต">'.$aa.'</a></font></td>';


																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$bb."</font></td>";
																															}
																											}
																										else
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";
																											}
																									//--- ผลการดำเนินงาน เดือน 12 ของ ปีปัจจุบัน ลบ 1 ..........

																									//--- ผลการดำเนินงาน เดือน ปัจจุบัน  ..........
																										$sql = " select volume_month,score_level,year_predict from tris_operation_volume where year = '".$yr."' and month = '".chkmn($mn)."' and topic_id = '".$topic_code_array[$t1]."' ";

																										// นับจำนวน rows ว่ามีกี่ rows
																										  $cntrows = OCIParse($db_conn, $sql);
																										  OCIExecute($cntrows);
																										  $chkrows = OCIFetchstatement($cntrows,$results);
																										// นับจำนวน rows ว่ามีข้อมูลหรือไม่

																										if ($chkrows > 0) 
																											{   
																												$data_sql = ociparse($db_conn,$sql);
																												ociexecute($data_sql);


																														while (ocifetch($data_sql))
																															{
																																$aa = ociresult($data_sql,1);
																																$bb = ociresult($data_sql,2);
																																$yearpredict = ociresult($data_sql,3);

																																if ($aa != "")
																																{
																																	if ( ($topic_code_array[$t1] == "1.1")  || ($topic_code_array[$t1] == "2.7") ||($topic_code_array[$t1] == "2.3.1") ||($topic_code_array[$t1] == "2.3.2")  ||($topic_code_array[$t1] == "2.5") || ( $headnum1 == "3") )  //  ตัวเลข  ไม่มี ทศนิยม
																																			{
																																				$aa = number_format($aa,0,".",",");
																																			}
																																		else
																																			{
																																				$aa = number_format($aa,2,".",",");
																																			}
																																}

																																echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">";
																																		$file_n1 = "report_sub1.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&tb=tris_operation_volume&ff=volume_month";
																																echo '<a href="javascript:na_open_window(\'win\', \''.$file_n1.'\' )" target="_self" title="คลิ๊กเพื่อดูผลการดำเนินงานในอดีต">'.$aa.'</a></font></td>';

																																echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$bb."</font></td>";

																																//===  เก็บยอด SUM ของระดับของเดือนปัจจุบัน
																																	$sum_level_performance = $sum_level_performance + ( $bb * $topic_weight_array[$t1]); // ระดับ * น้ำหนัก
																																//---

																															// -- พยากรณ์คะแนน ณ สิ้นปี
																																	if ($yearpredict == "")
																																		{
																																			echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yearpredict."</font></td>";
																																		}
																																	else
																																		{
																																			echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".number_format($yearpredict,0,".",",")."</font></td>";
																																		}
																															// --

																															// -- สถานะ สีไฟ
																																switch ($bb)
																																{
																																	case ($bb >= 4): // สีเขียว
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle.">";
																																				$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																				echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="คลิ๊กเพื่อดูพยากรณ์ผลการดำเนินงานที่คาดว่าจะทำได้ปลายปี ปัญหา/อุปสรรค  เสนอแนวทางแก้ไข ผู้รับผิดชอบ และผู้ประสานงาน"><img src="images/green.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																			break;
																																	case (($bb >= 3) && ($bb < 4)): // สีเหลือง
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle.">";
																																				$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																				echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="คลิ๊กเพื่อดูพยากรณ์ผลการดำเนินงานที่คาดว่าจะทำได้ปลายปี ปัญหา/อุปสรรค  เสนอแนวทางแก้ไข ผู้รับผิดชอบ และผู้ประสานงาน"><img src="images/yellow.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																			break;
																																	case ($bb < 3): // สีแดง
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle.">";
																																				$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																				echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="คลิ๊กเพื่อดูพยากรณ์ผลการดำเนินงานที่คาดว่าจะทำได้ปลายปี ปัญหา/อุปสรรค  เสนอแนวทางแก้ไข ผู้รับผิดชอบ และผู้ประสานงาน"><img src="images/red.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																			break;
																																}
																															// --

																															} // END  while (ocifetch($data_sql))
																											}
																										else
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																											}
																									//--- ผลการดำเนินงาน เดือนปัจจุบัน  ..........

																								break;

																					//*************  criteria type = 3 *********************************************************
																							case "3":
																									$aa = "";
																									$bb = "";
																									$tmpcolor = "";

																									//--- ผลการดำเนินงาน เดือนปัจจุบัน ของ ปีปัจจุบัน ลบ 1 

																										//--- แสดง ค่า
																												echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">-</font></td>";
																										//--- 
																										
																										// +++ แสดงระดับ
																										$sql = " select total_level from tris_operation_management_tot where year = '".($yr-1)."' and month = '".chkmn($mn)."' and topic_id = '".$topic_code_array[$t1]."' ";

																										// นับจำนวน rows ว่ามีกี่ rows
																										  $cntrows = OCIParse($db_conn, $sql);
																										  OCIExecute($cntrows);
																										  $chkrows = OCIFetchstatement($cntrows,$results);
																										// นับจำนวน rows ว่ามีข้อมูลหรือไม่

																										if ($chkrows > 0) 
																											{ 
																												$data_sql = ociparse($db_conn,$sql);
																												ociexecute($data_sql);


																														while (ocifetch($data_sql))
																															{
																																$aa = ociresult($data_sql,1);
																									
																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$aa."</font></td>";
																															}
																											}
																										else
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">-</font></td>";
																											}

																									//--- ผลการดำเนินงาน เดือนปัจจุบัน  ..........

																										//--- แสดงค่า
																											echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">-</font></td>";
																										//---

																										// +++ แสดง ระดับ
																										$sql = " select total_level from tris_operation_management_tot where year = '".$yr."' and month = '".chkmn($mn)."' and topic_id = '".$topic_code_array[$t1]."' ";

																										// นับจำนวน rows ว่ามีกี่ rows
																										  $cntrows = OCIParse($db_conn, $sql);
																										  OCIExecute($cntrows);
																										  $chkrows = OCIFetchstatement($cntrows,$results);
																										// นับจำนวน rows ว่ามีข้อมูลหรือไม่

																										if ($chkrows > 0) 
																											{   
																												$data_sql = ociparse($db_conn,$sql);
																												ociexecute($data_sql);


																														while (ocifetch($data_sql))
																															{
																																$aa = ociresult($data_sql,1);
																																$tmpcolor = $aa;																									
																																echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$aa."</font></td>";
																															}

																																//===  เก็บยอด SUM ของระดับของเดือนปัจจุบัน
																																	$sum_level_performance = $sum_level_performance + ( $aa * $topic_weight_array[$t1]); // ระดับ * น้ำหนัก
																																//---
																											}
																										else
																											{
																													$tmpcolor = "N";
																													echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">-</font></td>";
																											}
																									//--- ผลการดำเนินงาน เดือนปัจจุบัน  ..........

																									// -- พยากรณ์คะแนน ณ สิ้นปี
																											echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$aa."</font></td>";
																									// --

																									// -- สถานะ สีไฟ

																										if ($tmpcolor == "N")
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																											}
																										else
																											{

																												$dash_topicid = str_replace(".","_",$topic_code_array[$t1]);  // replace ข้อ topic_id เช่น  3.1  ให้เป็น  3_1 จะได้เอามาต่อกับ search เป็นชื่อ file

																												if ($dash_topicid == "3_3")  // เฉพาะข้อ 3.3 นี้ ให้เติม 1 ไปอีกตัว เป็น 3_3_1
																													{
																														$dash_topicid = "3_3_1";
																													}

																												$na_fileopentopicid = "search".$dash_topicid.".php?yr=".$yr."&mn=".$mn;

																												switch ($tmpcolor)
																													{
																														case ($tmpcolor >= 4): // สีเขียว
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle.">";
																																				echo '<a href="javascript:na_open_window4(\'win\', \''.$na_fileopentopicid.'\' )" target="_self" title="คลิ๊กเพื่อดูความคืบหน้าการดำเนินการ (จากปีที่ผ่านมา) ปัญหา/อุปสรรค และ เสนอแนวทางแก้ไข "><img src="images/green.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																break;
																															case (($tmpcolor >= 3) && ($tmpcolor < 4)): // สีเหลือง
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle.">";
																																				echo '<a href="javascript:na_open_window4(\'win\', \''.$na_fileopentopicid.'\' )" target="_self" title="คลิ๊กเพื่อดูความคืบหน้าการดำเนินการ (จากปีที่ผ่านมา) ปัญหา/อุปสรรค และ เสนอแนวทางแก้ไข"><img src="images/yellow.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																break;
																															case ($tmpcolor < 3): // สีแดง
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle.">";
																																				echo '<a href="javascript:na_open_window4(\'win\', \''.$na_fileopentopicid.'\' )" target="_self" title="คลิ๊กเพื่อดูความคืบหน้าการดำเนินการ (จากปีที่ผ่านมา) ปัญหา/อุปสรรค และ เสนอแนวทางแก้ไข"><img src="images/red.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																break;
																													}
																											}

																									// --

																								break;


																				}  //  END  switch ($topic_criteria_type_array[$t1])



																	//-------  END  ผลการดำเนินงาน  ... --------------------------------



																	echo "</tr>";
													
													}  // END  if ($n1 == $headnum1)

//============================   END  แสดง  ข้อย่อย =================================================






			}
	// --- End  แสดงผลตัวแปร Array topic ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++











//----------------------------Start  ยอดรวม  ---------------------------------------------------------------

													echo "<tr>";

													for ($all_column=1;$all_column<=15;$all_column++)  // วนแสดง 15 column ต่อ 1 บรรทัด
														{
															switch($all_column)
															{
																case 2:
																			echo "<td align='center' valign=".$tb_valign." bgcolor='#CCFFFF' style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">รวม</font></td>";
																	break;
																case 4:
																			echo "<td align='center' valign=".$tb_valign." bgcolor='#CCFFFF' style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$sumweight."</font></td>";
																	break;
																case 13:  // column ที่ 13  ยอด SUM  ระดับของเดือนนี้
																			echo "<td align='center' valign=".$tb_valign." bgcolor='#CCFFFF' style=".$tb_borderstyle."></td>";
																	break;
																default:
																	// ถ้าไม่ใช่ column ที่ 2 (ชื่อ topic) กับ  4 (weight รวม)   ให้ใส่ column ว่างๆๆ
																	echo "<td  valign=".$tb_valign." bgcolor='#CCFFFF' style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">&nbsp;</font></td>";
															}

														}  // END  for ($all_column=1;$all_column<=15;$all_column++)  // วนแสดง 15 column ต่อ 1 บรรทัด

													echo "</tr>";

//----------------------------END  ยอดรวม  ---------------------------------------------------------------






echo "</table>";


//---333333333333333333333333 END  แสดงผล  33333333333333333333333333333333333333333333333333





			}  //  END .... if ($chkrows == 0) // check ว่า   ถ้าไม่มีข้อมูล ใน Table Master   tris_topic   ของปีที่แสดง  ให้ขึ้นว่าไม่มีข้อมูล


			// ปุ่ม Return
				echo "<br>";
				echo "ไฟสถานะพยากรณ์ปลายปี  หมายถึง : <br>";
				 echo '<img src="images/red.gif" width="25" height="25" border="0" > : พยากรณ์คะแนน ณ สิ้นปี ต่ำว่าระดับคะแนน 3 &nbsp;&nbsp;';
				 echo '<img src="images/yellow.gif" width="25" height="25" border="0" > : พยากรณ์คะแนน ณ สิ้นปี ตั้งแต่ระดับคะแนน 3 แต่ไม่เกิน 4 &nbsp;&nbsp;';
				 echo '<img src="images/green.gif" width="25" height="25" border="0" > : พยากรณ์คะแนน ณ สิ้นปี ตั้งแต่ระดับคะแนน 4 ขึ้นไป<br><br>';
				echo '<a href="index.php"><img src="images/set08_return_on.gif" width="170" height="31" border="0" alt="set08_return_on.gif"></a>';
			//--

//==================================================================================




?>












</body>

</html>
