<html>

<head>
<title>รายงานผลการดำเนินงานของ กสท ตามบันทึกข้อตกลงประเมินผลการดำเนินงานรัฐวิสาหกิจ</title>
<meta name="generator" content="Namo WebEditor v6.0">
<meta http-equiv="content-type" content="text/html; charset=windows-874">
<script language="JavaScript">
<!--


function na_open_window(name, url, left, top, width, height, toolbar, menubar, statusbar, scrollbar, resizable)
{
  toolbar_str = toolbar ? 'yes' : 'no';
  menubar_str = menubar ? 'yes' : 'no';
  statusbar_str = statusbar ? 'yes' : 'no';
  scrollbar_str = scrollbar ? 'yes' : 'no';
  resizable_str = resizable ? 'yes' : 'no';

  cookie_str = document.cookie;
  cookie_str.toString();

  pos_start  = cookie_str.indexOf(name);
  pos_end    = cookie_str.indexOf('=', pos_start);

  cookie_name = cookie_str.substring(pos_start, pos_end);

  pos_start  = cookie_str.indexOf(name);
  pos_start  = cookie_str.indexOf('=', pos_start);
  pos_end    = cookie_str.indexOf(';', pos_start);
  
  if (pos_end <= 0) pos_end = cookie_str.length;
  cookie_val = cookie_str.substring(pos_start + 1, pos_end);
  if (cookie_name == name && cookie_val  == "done")
    return;

  window.open(url, name, 'left='+left+',top='+top+',width='+width+',height='+height+',toolbar='+toolbar_str+',menubar='+menubar_str+',status='+statusbar_str+',scrollbars='+scrollbar_str+',resizable='+resizable_str);
}


// --></script>

</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" background="images/bg22.gif">
<font size="2" face="MS Sans Serif"><br>
</font>

<form name="frm" method = "post">

<table border = "0" cellspacing="0" width="1000" bordercolordark="white" bordercolorlight="black" style="border-collapse:collapse;">
    <tr>
        <td width="996" colspan="3" style="border-width:1; border-color:white; border-style:solid;">
            <p align="center"><b><font size="2">ค้นหารายงานผลการดำเนินงานของ กสท ตามบันทึกข้อตกลงประเมินผลการดำเนินงานรัฐวิสาหกิจ</font></b><font size="2" face="MS Sans Serif"></font></p>
        </td>
    </tr>
    <tr>
        <td width="996" colspan="3" style="border-width:1; border-color:white; border-style:solid;">

            <p align="center"><b><font size="2">การประเมินผลบทบาทของคณะกรรมการรัฐวิสาหกิจ</font></b><font size="2" face="MS Sans Serif"></font></p>
        </td>
    </tr>
    <tr>
        <td width="140" style="border-width:1; border-color:white; border-style:solid;"><font size="2">&nbsp;</font></td>
        <td width="96" style="border-width:1; border-color:white; border-style:solid;"><font size="2">&nbsp;</font></td>
        <td width="654" style="border-width:1; border-color:white; border-style:solid;"><font size="2">&nbsp;</font></td>
    </tr>
    <tr>
        <td width="140" style="border-width:1; border-color:white; border-style:solid;"><font size="2">&nbsp;</font></td>
        <td width="96"  style="border-width:1; border-color:white; border-style:solid;" valign = "top" align = "right">
            <font size="2">ประจำปี&nbsp;:</font>
        </td>
        <td width="654"  style="border-width:1; border-color:white; border-style:solid;">

            

<?	

	include("conora.php");


	$topic_id = '3.1'; //ค่า topic_id = 3.1
	$max_year = date("Y")  + 543;	

		// ตรวจสอบ ตัวแปร year ถูกส่งมาหรือไม่
		 if (!isset($year))	 
		 {
			$selected_year =  $max_year;
			$year = substr($selected_year,2,2);				
		  } 
		 else 
		 {
			$selected_year = $year; 
		  }
	
		echo "<select name=\"year\" size=\"1\">";	
		
		for ($i = $max_year; $i > $max_year-5; $i--) 
		{
			$little_year = substr($i,2,2);
			if ($little_year==$selected_year) 
			{
			  echo "<option value=$little_year selected>$i</option>";						 
			}
			else 
			{
				echo "<option value=$little_year >$i</option>";
			}		
		}
	
	echo "</select><font size='2'>";
	echo "&nbsp;&nbsp;&nbsp; เดือน&nbsp; : ";


	 if (!isset($month))	
		 {
			   //  select  เดือนสุดท้ายที่มีข้อมูล จาก table tris_operation_management
			   $sqlSelectM = "select max(month) from tris_operation_management where topic_id ='".$topic_id."' and year = '".$year."'";
			   //echo $sqlSelectM;
			  
			   $SelectM = OCIparse($db_conn,$sqlSelectM);
			   OCIExecute($SelectM);

			   while  ($nrows =ocifetch($SelectM))
			   {
					$select_month = ociresult($SelectM,1);	
					$month= $select_month;	  
			   }			
		}
		else 
		{
		  $select_month=$month;
		}
		


			//Simple way		
			$m1_selected="";
			$m2_selected="";
			$m3_selected="";
			$m4_selected="";
			$m5_selected="";
			$m6_selected="";
			$m7_selected="";
			$m8_selected="";
			$m9_selected="";
			$m10_selected="";
			$m11_selected="";
			$m12_selected="";		    					


				switch($select_month)
				{
					case "1" ;
							$m1_selected = "selected";break;							 
					case "2";
							 $m2_selected = "selected";break;							 
					case "3";
							 $m3_selected = "selected";break;							 
					case "4";
							 $m4_selected = "selected";break;							 
					case "5";
							 $m5_selected = "selected";break;							 
					case "6";
							 $m6_selected = "selected";break;							 
					case "7";
							 $m7_selected = "selected";break;							 
					case "8";
							 $m8_selected = "selected";break;							 
					case "9";
							 $m9_selected = "selected";break;							 
					case "10";
							 $m1_selected = "selected";break;							 
					case "11";
							 $m11_selected = "selected";break;							 
					case "12";
							 $m12_selected = "selected";break;							 
				}				


OCIFreeStatement($SelectM);

?>
				<select name="month" size="1">';		
					<option value="01" <?=$m1_selected?>>มกราคม</option>
					<option value="02" <?=$m2_selected?>>กุมภาพันธ์</option>
					<option value="03" <?= $m3_selected ?>>มีนาคม</option>
					<option value="04" <?=$m4_selected?>>เมษายน</option>
					<option value="05" <?=$m5_selected?>>พฤษภาคม</option>
					<option value="06" <?=$m6_selected?>>มิถุนายน</option>
					<option value="07" <?=$m7_selected?>>กรกฎาคม</option>
					<option value="08" <?=$m8_selected?>>สิงหาคม</option>
					<option value="09" <?=$m9_selected?>>กันยายน</option>
					<option value="10" <?=$m10_selected?>>ตุลาคม</option>
					<option value="11" <?=$m11_selected?>>พฤศจิกายน</option>
					<option value="12" <?=$m12_selected?>>ธันวาคม</option>
				</select>
			&nbsp;&nbsp;&nbsp;<input type="submit" name="search" value="ค้นหา"></td>
        </tr>
 

	    <tr>
        <td width="340" style="border-width:1; border-color:white; border-style:solid;"><font size="2" face="MS Sans Serif">&nbsp;</font></td>
        <td width="96" style="border-width:1; border-color:white; border-style:solid;"><font size="2" face="MS Sans Serif">&nbsp;</font></td>
        <td width="454" style="border-width:1; border-color:white; border-style:solid;">
	<font size="2" face="MS Sans Serif">&nbsp;</font>        </td>
    </tr>
    <tr>
        <td width="996" colspan="3" style="border-width:1; border-color:white; border-style:solid;">

            <table border="0" width="995">
                <tr>
                    <td width="395" colspan="2" rowspan="2" bgcolor="#0066FF">
                        <p align="center"><b><font size="2" face="MS Sans Serif" color="white">เกณฑ์วัดผลการดำเนินงาน</font></b><font size="2" face="MS Sans Serif"></font></p>
                    </td>
                    <td width="57" rowspan="2" bgcolor="#0066FF">
                        <p align="center"><b><font size="2" face="MS Sans Serif" color="white">เป้าหมาย %</font></b><font size="2" face="MS Sans Serif"></font></p>
                    </td>
                    <td width="317" colspan="2" bgcolor="#0066FF">
                        <p align="center"><b><font size="2" face="MS Sans Serif" color="white">ผลการดำเนินงาน</font></b><font size="2" face="MS Sans Serif"></font></p>
                    </td>
                    <td width="180" rowspan="2" bgcolor="#0066FF"><font size="2" face="MS Sans Serif" color="white">&nbsp;</font></td>
                </tr>
                <tr>
                    <td width="153" bgcolor="#0066FF">
                        <p align="center"><b><font size="2" face="MS Sans Serif" color="white">% ความสำเร็จของเป้าหมาย</font></b></p>
                    </td>
                    <td width="160" bgcolor="#0066FF">
                        <p align="center"><b><font size="2" face="MS Sans Serif" color="white">ระดับคะแนน</font></b></p>
                    </td>
                </tr>


<?


		if ($year	== "" and $month =="") //เช็คว่ามีการเลือกเดือน ปีหรือไม่
		{		
			echo '<font size="2" face="MS Sans Serif"><b>กรุณาเลือกปีและเดือนที่ต้องการ</font></b>';

		}
		else
		{		

			//////////////////ประเด็นการพิจารณา

			$old_subtopic ='';

			//create View เอาไว้ join table 
			$sql_view = "create or replace view v_tris_operation_management as (select *  from tris_operation_management where  year='".$year."'";
			$sql_view = $sql_view." and month='".$month."' and  topic_id = '".$topic_id."')";

			//echo $sql_view;

			$create_view = OCIparse($db_conn,$sql_view);
			OCIExecute($create_view);

			
			//join Table
			$sql = "select g.topic_id, g.subtopic_id, g.subtopic_name, g.goal,o.operation_goal, o.operation_level,o.reason, o.solution ";
			$sql = $sql." from v_tris_operation_management o,tris_topic_group3 g where  g.subtopic_id =o.subtopic_id(+) and g.topic_id = o.topic_id(+) and "; 
			$sql = $sql." g.topic_id = '".$topic_id."' and g.year = '".$year."'";
			$sql = $sql." order by g.subtopic_id ";

			//echo $sql;
			
			// นับ rows 
			$cnt = OCIparse($db_conn,$sql);
			OCIExecute($cnt);
			$cntrow = OCIFetchstatement($cnt,$result);

			if ($cntrow > 0)  //  เช็คจำนวน rows ว่ามีข้อมูลหรือไม
			{
				$data = OCIparse($db_conn,$sql);
                OCIExecute($data);


						while ($row = ocifetch($data)) // วนใส่ ทีละ Record
								{																		
										$topic_id = ociresult($data,1);
										$subtopic_id = ociresult($data,2);
										$subtopic_name = ociresult($data,3);
										$goal = ociresult($data,4);
										$operation_goal = ociresult($data,5);
										$operation_level = ociresult($data,6);
										$reason = ociresult($data,7);
										$solution = ociresult($data,8);		
										$file = "show_detail.php?reason=".$reason."&solution=".$solution;  //ส่งค่า reason กับ solution ไปแสดงใน popup window


										switch (substr($subtopic_id,0,1))   // แสดง Header
											{
												case "1" ;
														$header  = "ประเด็นการพิจารณาที่ 1 : บทบาทและการปฏิบัติหน้าที่ของคณะกรรมการ";														
														break;														
												case "2";
														$header  = "ประเด็นการพิจารณาที่ 2 : การพัฒนาตนเองของคณะกรรมการ";
														break;																								
												case "3";												
														$header  = "ประเด็นการพิจารณาที่ 3";	
														break;
												case "4";												
														$header  = "ประเด็นการพิจารณาที่ 4";	
														break;
												case "5";												
														$header  =  "ประเด็นการพิจารณาที่ 5";	
														break;
												case "6";												
														$header  = "ประเด็นการพิจารณาที่ 6";	
														break;
																		
											} //end switch
											
					
											if  ($old_subtopic != substr($subtopic_id,0,1)) // แสดงข้อมูลตาม subtopic_id
											{
													echo '<tr><td width="395" colspan="2" bgcolor="#99CCFF"><b><font size="2" face="MS Sans Serif">'.$header;
													echo '</font></b><font size="2" face="MS Sans Serif"></font></td>';
													echo '<td width="57" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
													echo '<td width="153" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
													echo '<td width="160" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
													echo '<td width="180" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td></tr>';
													echo '<tr><td width="3%" valign="top"><font size="2" face="MS Sans Serif">'.$subtopic_id.'</font></td>';
													echo '<td width="40%" ><font size="2" face="MS Sans Serif">'.$subtopic_name.'</font></td>';
													echo '<td width="57"><center><font size="2" face="MS Sans Serif">'.$goal.'</font></td>';
													echo '<td width="153" ><center><font size="2" face="MS Sans Serif">'.$operation_goal.'</font></td>';
													echo '<td width="160"><center><font size="2" face="MS Sans Serif">'.$operation_level.'</font></td>';
													echo '<td width="180" > <p align="center"><font size="2" face="MS Sans Serif">';
													echo '<a href="save3_1.php?yr='.$year.'&mn='.$month.'&g1='.$subtopic_id.'">แก้ไข</a>';
													echo '&nbsp;<a href="javascript:na_open_window(\'win\', \''.$file.'\', 300, 300, 500, 300, 0, 0, 0, 0, 0) "target="_self">';
													echo 'สาเหตุและแนวทางแก้ไข</a></font></p> </td></tr></font>';
													$old_subtopic = substr($subtopic_id,0,1);
									
											}
												else
											{
												//แสดงรายละเอียด

												echo '<tr><td width="3%" valign="top"><font size="2" face="MS Sans Serif">'.$subtopic_id.'</font></td>';
												echo '<td width="40%" ><font size="2" face="MS Sans Serif">'.$subtopic_name.'</font></td>';
												echo '<td width="57"><center><font size="2" face="MS Sans Serif">'.$goal.'</font></td>';
												echo '<td width="153" ><center><font size="2" face="MS Sans Serif">'.$operation_goal.'</font></td>';
												echo '<td width="160"><center><font size="2" face="MS Sans Serif">'.$operation_level.'</font></td>';
												echo '<td width="180" > <p align="center"><font size="2" face="MS Sans Serif">';
												echo '<a href="save3_1.php?yr='.$year.'&mn='.$month.'&g1='.$subtopic_id.'">แก้ไข</a>';
												echo '&nbsp;<a href="javascript:na_open_window(\'win\', \''.$file.'\', 300, 300, 500, 300, 0, 0, 0, 0, 0) "target="_self">';
												echo 'สาเหตุและแนวทางแก้ไข</a></font></p> </td></tr></font>';
											}


								} //end while ($row = ocifetch($data))
			}
			else
			{
					echo '<tr><td width="395" colspan="2" bgcolor="#99CCFF"><b><font size="2" face="MS Sans Serif">ประเด็นการพิจารณาที่ 1 : บทบาทและการปฏิบัติหน้าที่ของคณะกรรมการ ';
					echo '</font></b><font size="2" face="MS Sans Serif"></font></td>';
					echo '<td width="57" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
					echo '<td width="153" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
					echo '<td width="160" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
					echo '<td width="180" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td></tr>';
					echo '<tr><td width="395" colspan="2" bgcolor="#99CCFF"><b><font size="2" face="MS Sans Serif">ประเด็นการพิจารณาที่ 2 : การพัฒนาตนเองของคณะกรรมการ ';
					echo '</font></b><font size="2" face="MS Sans Serif"></font></td>';
					echo '<td width="57" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
					echo '<td width="153" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
					echo '<td width="160" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
					echo '<td width="180" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">&nbsp;</font></td></tr>';

			} //end if (cntrow>0)

			/*
						//select ดูว่ามี View  V_TRIS_OPERATION_MANAGEMENT หรือไม่  ถ้ามีจะ drop view ทิ้ง
						$sql = "select * from all_views  where view_name = 'V_TRIS_OPERATION_MANAGEMENT'";

						// นับ rows 
						$cnt = OCIparse($db_conn,$sql);
						OCIExecute($cnt);
						$cntrow = OCIFetchstatement($cnt,$result);

						if ($cntrow > 0)  //  เช็คจำนวน rows ว่ามีข้อมูลหรือไม่
						{
							//drop View 
							$sql_dropview = "drop view  v_tris_operation_management";
							$drop_view = OCIparse($db_conn,$sql_dropview);
							OCIExecute($drop_view);
						}

			*/
	

		}  //end if  มีการเลือกปีและเดือนหรือไม่



			//////////////////หายอดรวม

			$sql = "select  sum(g.goal), t.total_operation_goal,t.total_level from tris_operation_management_tot t, tris_topic_group3 g  ";
			$sql = $sql." where t.topic_id = g.topic_id and  t.topic_id = '".$topic_id."' and t.year ='".$year."' and t.month = '".$month."' group by g.topic_id,"; 
			$sql = $sql."t.total_operation_goal,t.total_level";
			
			//echo $sql;
			// นับ rows 
			$cnt = OCIparse($db_conn,$sql);
			OCIExecute($cnt);
			$cntrow = OCIFetchstatement($cnt,$result);

			if ($cntrow > 0)  //  เช็คจำนวน rows ว่ามีข้อมูลหรือไม
			{
				$data = OCIparse($db_conn,$sql);
                OCIExecute($data);

						while ($row = ocifetch($data)) // วนใส่ ทีละ Record
								{
										$tot_goal = ociresult($data,1);									
										$tot_oper_goal = ociresult($data,2);
										$tot_level = ociresult($data,3);									

										echo '<tr><td width="395" colspan="2" bgcolor="#0066FF"><p align="center"><b>';
										echo '<font size="2" face="Microsoft Sans Serif" color="white">รวม</font></b></p>';
										echo '</td><td width="57" bgcolor="#0066FF"><p align="center"><b><font size="2" face="Microsoft Sans Serif" color="white">';
										echo $tot_goal.'</font></b></p></td><td width="153" bgcolor="#0066FF"><p align="center">';
										echo '<b><font size="2" face="Microsoft Sans Serif" color="white">'.$tot_oper_goal.'</font></b></p></td>';
										echo '<td width="160" bgcolor="#0066FF"><p align="center"><b><font size="2" face="Microsoft Sans Serif" color="white">';
										echo $tot_level.'</font></b></p></td><td width="180" bgcolor="#0066FF">&nbsp;</td></tr>';

								}
			}
			else
			{
										echo '<tr><td width="395" colspan="2" bgcolor="#0066FF"><p align="center"><b>';
										echo '<font size="2" face="Microsoft Sans Serif" color="white">รวม</font></b></p>';
										echo '</td><td width="57" bgcolor="#0066FF"><p align="center"><b><font size="2" face="Microsoft Sans Serif" color="white">';
										echo '</font></b></p></td><td width="153" bgcolor="#0066FF"><p align="center">';
										echo '<b><font size="2" face="Microsoft Sans Serif" color="white"></font></b></p></td>';
										echo '<td width="160" bgcolor="#0066FF"><p align="center"><b><font size="2" face="Microsoft Sans Serif" color="white">';
										echo '</font></b></p></td><td width="180" bgcolor="#0066FF">&nbsp;</td></tr>';

			} //end if (cntrow>0)


OCIFreeStatement($data);



OCILogoff($db_conn);



?>


            </table>
        </td>
    </tr>
	</form>
</table>
</body>

</html>