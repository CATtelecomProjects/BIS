<?
	include("conora.php");  // Function  connect Database
?>

<html>

<head>
<title>แสดงข้อมูล</title>
</head>



<body  text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" background="images/bg22.gif">

<center>

<?


	if (!empty($topicid))  // select เอาค่าของ ชื่อ topic
	{
				$sql = " select definition from tris_topic where topic_id = '".$topicid."' and year = '".$yr."'";

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
							$topic_def = ociresult($data_sql,1);
						}
				}
	} // end   if (!empty($topicid))
?>






<?
//--------------------------------------------------- แสดงข้อมูล ขึ้นหน้าจอ -------------------------------------------------------------------------------------------
?>

			<table cellspacing="0" style="border-collapse:collapse;" width="390">
				<tr>
					<td align='center' width="337" style="border-width:1; border-color:black; border-style:solid;" colspan="5" bgcolor="#3366FF">
						<font size="2" face="MS Sans Serif" color="white"><b>
						นิยาม คำจำกัดความ
						</b></font>
					</td>
				</tr>
			<tr>
				<td align="left" width="337" bgcolor="white" style="border-width:1; border-color:black; border-style:solid;" colspan="5">
					<font size="2" face="MS Sans Serif"><b>คำจำกัดความ : </b></font><br><font size="2" face="MS Sans Serif" color="#0099FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<?
							if ( !empty($topic_def) )
								{
									echo $topic_def;
								}
							else
								{
									echo "-";
								}
						?>
					<p>&nbsp;</p></font>
				</td>
			</tr>
			
			<tr>
				<td align="center" bgcolor="white" colspan="5">
					<br>
					<input type="button" name="close" value="ปิดหน้านี้" onclick="window.close();">
				</td>
			</tr>
			</table>

</center>

</body>

</html>