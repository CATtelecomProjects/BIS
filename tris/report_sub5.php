<?
	include("conora.php");  // Function  connect Database
	include("month_desc.php");  // Function  แปลง ตัวเลขเดือน เป็น ไทย
?>

<html>

<head>
<title>ข้อมูลในอดีตย้อนหลัง</title>
</head>



<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">

<center>

<?

//echo "mn=".$mn."<br>yr=".$yr."<br>topicid=".$topicid."<br>tb=".$tb."<br>ff=".$ff."<br>criteriatype=".$criteriatype;

	$nametopic = "...";
	$col_year = 2 ; //  กำหนดจำนวน column ของ ปี ว่าจะให้แสดงกี่ป

	if (!empty($topicid))  // select เอาค่าของ ชื่อ topic
	{
				$sql = " select topic_name from tris_topic where topic_id = '".$topicid."' and year = '".$yr."' ";

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
							$nametopic = ociresult($data_sql,1);
						}
				}
	} // end   if (!empty($topicid))




	// สร้างตัวแปร ARRAY สำหรับการแสดงผล  ตาม ปี 5 ปี(กำหนดค่าเริ่มต้นเป็น "-")  เมื่อมีข้อมูล ก็เอามาแทนที่
				$where_yr_in = "";  // ตัวแปร where in () ปี อะไรบ้าง เวลา Select

				for ($y=($yr-($col_year-1)) ; $y<=($yr) ; $y++)  // วน loop แสดงข้อมูล ปีย้อนหลัง
					{
						$var_yr = "var_yr".$y;
						$$var_yr = "-";

						if ( $y==($yr) )  // ถ้าเป็นตัวสุดท้ายไม่ต้องใส่ comma  (,)
							$where_yr_in = $where_yr_in."'".$y."'";
						else
							$where_yr_in = $where_yr_in."'".$y."',";

					} 

					$where_yr_in = "(".$where_yr_in.")";

	//----



	//--------------------------- SELECT ---------------------------------

			$sql = " select ".$ff." , year ";
			$sql = $sql." from ".$tb;
			$sql = $sql." where year in ".$where_yr_in;
			$sql = $sql." and month = '".$mn."' ";
			$sql = $sql." and topic_id = '".$topicid."' ";

//			echo $sql;

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
						$val_num = ociresult($data_sql,1);
						$yrr = ociresult($data_sql,2);

						$var_yr = "var_yr".$yrr;

						if ($val_num == "")
						{
							$$var_yr = "-";
						}
						else
						{
							$$var_yr = number_format($val_num,4,".",",");
						}


					}  // END  	while (ocifetch($data_sql))


			} // END 		if ($chkrows > 0) 



//--------------------------------------------------- แสดงข้อมูล ขึ้นหน้าจอ -------------------------------------------------------------------------------------------
?>
			<table cellspacing="0" style="border-collapse:collapse;" width="390">
				<tr>
					<td align='center' width="337" style="border-width:1; border-color:black; border-style:solid;" colspan="<? echo $col_year; ?>" bgcolor="#3366FF">
						<font size="2" face="MS Sans Serif" color="white"><b>
						<?
							echo $topicid."&nbsp;".$nametopic."&nbsp;เดือน&nbsp;".month_longdesc($mn);
						?>
						</b></font>
					</td>
				</tr>
				<tr>
					<?
							for ($y=($yr-($col_year-1)) ; $y<=($yr) ; $y++) 
								{
									echo '<td align="center" style="border-width:1; border-color:black; border-style:solid;" bgcolor="#FFCCFF"><font size="2" face="MS Sans Serif"><b>25'.$y.'</b></font></td>';
								} 
					?>
				</tr>
				<tr>
					<?
									for ($y=($yr-($col_year-1)) ; $y<=($yr) ; $y++) 
										{
											$var_yr = "var_yr".$y;

											echo '<td align="center" style="border-width:1; border-color:black; border-style:solid;"><p align="center"><font size="2" face="MS Sans Serif">'.$$var_yr.'</font></p></td>';
										}

					?>
			</tr>
			<tr>
				<td align="center" bgcolor="white" style="border-width:1; border-color:black; border-style:solid;" colspan="<? echo $col_year; ?>">
					<br>
					<input type="button" name="close" value="ปิดหน้านี้" onclick="window.close();">
					<p>&nbsp;</p>
				</td>
			</tr>
			</table>

</center>

</body>

</html>