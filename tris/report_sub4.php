<?
	include("conora.php");  // Function  connect Database




				//---------START-------  �֧������  ���˵���������������  �Ѻ �Ƿҧ���  -------------

								$sql = " select a.topic_id , a.topic_name , b.criteria_no , b.criteria_name ";
								$sql = $sql. " from tris_topic a , tris_quality_criteria b ";
								$sql = $sql. " where a.topic_id = b.topic_id ";
								$sql = $sql. " and a.year = b.year ";
								$sql = $sql. " and b.month = b.month ";
								$sql = $sql. " and b.year = '".$yr."'  ";
								$sql = $sql. " and b.month = '".$mn."'  ";
								$sql = $sql. " and b.topic_id = '".$topicid."'  ";
//echo "<br>".$sql."<br>";

							// �Ѻ�ӹǹ rows ����ա�� rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// �Ѻ�ӹǹ rows ����բ������������

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

				//---------END-------  �֧������  ���˵���������������  �Ѻ �Ƿҧ���  -------------






?>


<html>

<head>
<title>�ʴ�������</title>
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
        <td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">�дѺ��� 1</font></td>
        <td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">
			<font size="2" face="MS Sans Serif">
			<?
					echo $c1;
			?>
			</font>
		
		</td>
    </tr>
    <tr>
        <td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">�дѺ��� 2</font></td>
        <td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">
		<font size="2" face="MS Sans Serif">
			<?
					echo $c2;
			?>
		</font>
		</td>
    </tr>
    <tr>
        <td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">�дѺ��� 3</font></td>
        <td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">
		<font size="2" face="MS Sans Serif">
			<?
					echo $c3;
			?>
		</font>
		</td>
    </tr>
    <tr>
        <td valign="top" width="78" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;"><font size="2" face="MS Sans Serif">�дѺ��� 4</font></td>
        <td valign="top" width="410" bgcolor="#CCFFFF" style="border-width:1; border-color:white; border-style:solid;">
		<font size="2" face="MS Sans Serif">
			<?
					echo $c4;
			?>
		</font>
		</td>
    </tr>
    <tr>
        <td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">�дѺ��� 5</font></td>
        <td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">
		<font size="2" face="MS Sans Serif">
			<?
					echo $c5;
			?>
		</font>
		</td>
    </tr>

<?
	//===== START =======  ���  topic_Id  ��ҡѺ   2.4.1  ����   2.6  ���� 2.7 ����ʴ�   �����˵�  ����  
	switch ($topicid)
	{
		case "2.4.1":
				echo '<tr>';
				echo '<td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">�����˵� : </font></td>';
				echo '<td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">					<font size="2" face="MS Sans Serif">';
				echo '����صԴѧ�����㹤��ࡳ���Ѵ �е�ͧ�繢���صԷ�褳С�����âͧ �ʷ �ä��Ҥ���������繪ͺ㹷ء�ó�';
				echo '</font>';
				echo '</td>';
				echo '</tr>';
			break;
		case "2.6":
				echo '<tr>';
				echo '<td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">�����˵� : </font></td>';
				echo '<td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">					<font size="2" face="MS Sans Serif">';
				echo '�óշ�� �ʷ �������ö���Թ�ҹ������͹䢴�ҹ��èѴ���ҧ�к� Collaboration ����ͧ���١������ҧ���¡��˹�觢ͧ������١��ҷ���˹������������ç��� e-Government (127) ��� �оԨ�ó��ѡ��ṹ 0.5 ��ṹ';
				echo '</font>';
				echo '</td>';
				echo '</tr>';
			break;
                                      case "2.7":
				echo '<tr>';
				echo '<td valign="top" width="78" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">�����˵� : </font></td>';
				echo '<td valign="top" width="410" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF">	<font size="2" face="MS Sans Serif">';
				echo " 1) Ἱ Turnaround ��ͧ��Ἱ���� 3-5 �� ����ʴ��֧��������ö㹡�èѴ��÷ҧ��ҹ����Թ �¡�ü�ѡ�ѹ���š�ô��Թ�ҹ�ҧ��ҹ����Թ��������������㹻պѭ�� 2551 ��觵�ͧ��˹����ط�������ٻ���� ����ö���·ʹ��Ἱ��Ժѵԡ�âͧ���н����� ���ͧ���Сͺ�ͧἹ Turnaround ��èл�Сͺ����<br><br>  1.1 Ἱ�Ѳ�Ҵ�ҹ��ú�����ͧ���<br> 1.2 Ἱ�Ѳ�Ҵ�ҹ��õ�Ҵ<br> 1.3 Ἱ�Ѳ�Ҹ�áԨ�ä��Ҥ�<br><br> 2) Ἱ Turnaround ���ա�û����Թ�س�Ҿ�ͧἹ�ҡ��þԨ�óҢͧ��С�����èѴ�Ӻѹ�֡��͵�ŧ� ������ö�Ԩ�óһ�Ѻ�織��ṹ�дѺ 1� ��㹡óշ��Ἱ Turnaround ����ʹ���ͧ�Ѻ���͹䢷���˹�";
				echo '</font>';
				echo '</td>';
				echo '</tr>';
			break;
	}
	//===== END =======  ���  topic_Id  ��ҡѺ   2.4.1  ����   2.6  ����ʴ�   �����˵�  ����  
?>


    <tr>
        <td width="491" bgcolor="white" style="border-width:1; border-color:white; border-style:solid;" colspan="2">
            <form name="form1">
            <p align="center">
			<input type="button" name="close" value="�Դ˹�ҹ��" onclick="window.close();">
			</p>
            </form>
            <p>&nbsp;</p>
        </td>
    </tr>
</table>
<p>&nbsp;</p>
</body>

</html>
