<?
	include("conora.php");  // Function  connect Database




				//---------START-------  ดึงข้อมูล  สาเหตุไม่บรรลุเป้าหมาย  กับ แนวทางแก้ไข  -------------

								$sql = " select a.topic_id , a.topic_name , b.criteria_no , b.criteria_name ";
								$sql = $sql. " from tris_topic a , tris_quality_criteria b ";
								$sql = $sql. " where a.topic_id = b.topic_id ";
								$sql = $sql. " and a.year = b.year ";
								$sql = $sql. " and b.month = b.month ";
								$sql = $sql. " and b.year = '".$yr."'  ";
								$sql = $sql. " and b.month = '".$mn."'  ";
								$sql = $sql. " and b.topic_id = '".$topicid."'  ";
//echo "<br>".$sql."<br>";

							// นับจำนวน rows ว่ามีกี่ rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// นับจำนวน rows ว่ามีข้อมูลหรือไม่

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									$c1 = "";
									$c2 = "";
									$c3 = "";
									$c4 = "";
									$c5 = "";

									while (ocifetch($data_sql))
										{
											$topicname = ociresult($data_sql,2);
											$c_no = ociresult($data_sql,3);
											$c_name = ociresult($data_sql,4);

											switch ($c_no)
												{
													case "1":
																$c1 = $c_name;
															break;
													case "2":
																$c2 = $c_name;
															break;
													case "3":
																$c3 = $c_name;
															break;
													case "4":
																$c4 = $c_name;
															break;
													case "5":
																$c5 = $c_name;
															break;
												}  // END switch
										}
								}

				//---------END-------  ดึงข้อมูล  สาเหตุไม่บรรลุเป้าหมาย  กับ แนวทางแก้ไข  -------------






?>


<html>

<head>
<title>แสดงข้อมูล</title>
<meta name="generator" content="Namo WebEditor v6.0">
<meta http-equiv="content-type" content="text/html; charset=windows-874">
</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">
<table width="495" cellspacing="0" style="border-collapse:collapse;">
    <tr>
        <td width="491" style="border-width:1; border-color:white; border-style:solid;" colspan="2" bgcolor="#0099FF">
            <p align="center"><b>
			<font size="2" face="MS Sans Serif" color="white">
				<?
					echo $topicname;
				?>
			</font></b></p>
        </td>
    </tr>
    <tr>
        <td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">ระดับที่ 1</font></td>
        <td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">
			<font size="2" face="MS Sans Serif">
			<?
					echo $c1;
			?>
			</font>
		
		</td>
    </tr>
    <tr>
        <td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">ระดับที่ 2</font></td>
        <td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">
		<font size="2" face="MS Sans Serif">
			<?
					echo $c2;
			?>
		</font>
		</td>
    </tr>
    <tr>
        <td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">ระดับที่ 3</font></td>
        <td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">
		<font size="2" face="MS Sans Serif">
			<?
					echo $c3;
			?>
		</font>
		</td>
    </tr>
    <tr>
        <td valign="top" width="78" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;"><font size="2" face="MS Sans Serif">ระดับที่ 4</font></td>
        <td valign="top" width="410" bgcolor="#CCFFFF" style="border-width:1; border-color:white; border-style:solid;">
		<font size="2" face="MS Sans Serif">
			<?
					echo $c4;
			?>
		</font>
		</td>
    </tr>
    <tr>
        <td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">ระดับที่ 5</font></td>
        <td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">
		<font size="2" face="MS Sans Serif">
			<?
					echo $c5;
			?>
		</font>
		</td>
    </tr>

<?
	//===== START =======  ถ้า  topic_Id  เท่ากับ   2.4.1  หรือ   2.6  หรือ 2.7 ให้แสดง   หมายเหตุ  ด้วย  
	switch ($topicid)
	{
		case "2.4.1":
				echo '<tr>';
				echo '<td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">หมายเหตุ : </font></td>';
				echo '<td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">					<font size="2" face="MS Sans Serif">';
				echo 'ข้อยุติดังกล่าวในค่าเกณฑ์วัด จะต้องเป็นข้อยุติที่คณะกรรมการของ กสท โทรคมนาคมให้ความเห็นชอบในทุกกรณี';
				echo '</font>';
				echo '</td>';
				echo '</tr>';
			break;
		case "2.6":
				echo '<tr>';
				echo '<td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">หมายเหตุ : </font></td>';
				echo '<td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">					<font size="2" face="MS Sans Serif">';
				echo 'กรณีที่ กสท ไม่สามารถดำเนินงานตามเงื่อนไขด้านการจัดสร้างระบบ Collaboration ที่ต้องมีลูกค้าอย่างน้อยกึ่งหนึ่งของกลุ่มลูกค้าที่กำหนดเป็นเป้าหมายในโครงการ e-Government (127) ราย จะพิจารณาหักคะแนน 0.5 คะแนน';
				echo '</font>';
				echo '</td>';
				echo '</tr>';
			break;
                                      case "2.7":
				echo '<tr>';
				echo '<td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">หมายเหตุ : </font></td>';
				echo '<td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">	<font size="2" face="MS Sans Serif">';
				echo " 1) แผน Turnaround ต้องเป็นแผนระยะ 3-5 ปี ที่แสดงถึงความสามารถในการจัดการทางด้านการเงิน โดยการผลักดันให้ผลการดำเนินงานทางด้านการเงินมีแนวโน้มเพิ่มขึ้นในปีบัญชี 2551 ซึ่งต้องกำหนดกลยุทธ์ที่เป็นรูปธรรม สามารถถ่ายทอดเป็นแผนปฏิบัติการของแต่ละฝ่ายได้ ซึ่งองค์ประกอบของแผน Turnaround ควรจะประกอบด้วย<br><br>  1.1 แผนพัฒนาด้านการบริหารองค์กร<br> 1.2 แผนพัฒนาด้านการตลาด<br> 1.3 แผนพัฒนาธุรกิจโทรคมนาคม<br><br> 2) แผน Turnaround จะมีการประเมินคุณภาพของแผนจากการพิจารณาของคณะกรรมการจัดทำบันทึกข้อตกลงฯ โดยสามารถพิจารณาปรับเป็น”คะแนนระดับ 1” ได้ในกรณีที่แผน Turnaround ไม่สอดคล้องกับเงื่อนไขที่กำหนด";
				echo '</font>';
				echo '</td>';
				echo '</tr>';
			break;
	}
	//===== END =======  ถ้า  topic_Id  เท่ากับ   2.4.1  หรือ   2.6  ให้แสดง   หมายเหตุ  ด้วย  
?>


    <tr>
        <td width="491" bgcolor="white" style="border-width:1; border-color:white; border-style:solid;" colspan="2">
            <form name="form1">
            <p align="center">
			<input type="button" name="close" value="ปิดหน้านี้" onclick="window.close();">
			</p>
            </form>
            <p>&nbsp;</p>
        </td>
    </tr>
</table>
<p>&nbsp;</p>
</body>

</html>
