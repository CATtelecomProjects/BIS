<?
	include("conora.php");  // Function  connect Database
?>

<html>

<head>
<title>�ʴ�������</title>
</head>



<body  text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" background="images/bg22.gif">

<center>

<?


	if (!empty($topicid))  // select ��Ҥ�Ңͧ ���� topic
	{
				$sql = " select definition from tris_topic where topic_id = '".$topicid."' and year = '".$yr."'";

			// �Ѻ�ӹǹ rows ����ա�� rows
				  $cntrows = OCIParse($db_conn, $sql);
				  OCIExecute($cntrows);
				  $chkrows = OCIFetchstatement($cntrows,$results);
			// �Ѻ�ӹǹ rows ����բ������������

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
//--------------------------------------------------- �ʴ������� ���˹�Ҩ� -------------------------------------------------------------------------------------------
?>

			<table cellspacing="0" style="border-collapse:collapse;" width="390">
				<tr>
					<td align='center' width="337" style="border-width:1; border-color:black; border-style:solid;" colspan="5" bgcolor="#3366FF">
						<font size="2" face="MS Sans Serif" color="white"><b>
						����� �ӨӡѴ����
						</b></font>
					</td>
				</tr>
			<tr>
				<td align="left" width="337" bgcolor="white" style="border-width:1; border-color:black; border-style:solid;" colspan="5">
					<font size="2" face="MS Sans Serif"><b>�ӨӡѴ���� : </b></font><br><font size="2" face="MS Sans Serif" color="#0099FF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
					<input type="button" name="close" value="�Դ˹�ҹ��" onclick="window.close();">
				</td>
			</tr>
			</table>

</center>

</body>

</html>