<?
	include("conora.php");  // Function  connect Database




switch ($criteriatype)  // �ʴ������ŵ��  criteria_type �������
{

//=================================  CRITERIA  TYPE  ��ҡѺ  1  ==========================

	case "1":
				//---------START-------  �֧������  ���˵���������������  �Ѻ �Ƿҧ���  -------------

								$sql = " select goal_level5 , reason , solution , progress , level_operation , year_predict ";
								$sql = $sql. " from tris_operation_quality  ";
								$sql = $sql. " where year = '".$yr."'  ";
								$sql = $sql. " and month = '".$mn."'  ";
								$sql = $sql. " and topic_id = '".$topicid."'  ";
								$sql = $sql. " order by goal_level5  ";

							// �Ѻ�ӹǹ rows ����ա�� rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// �Ѻ�ӹǹ rows ����բ������������

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									$var_reason = "";
									$var_solution = "";
									$var_jobprogress = "";
									$var_leveloperation = "";
									$var_yearpredict = "";

									while (ocifetch($data_sql))
										{
											$goallevel5 = ociresult($data_sql,1);
											$reason = ociresult($data_sql,2);
											$solution = ociresult($data_sql,3);
											$job_progress = ociresult($data_sql,4);
											$level_operation = ociresult($data_sql,5);
											$year_predict = ociresult($data_sql,6);

											$var_reason = $var_reason."�дѺ��� ".$goallevel5." : ".$reason."<br>";
											$var_solution = $var_solution."�дѺ��� ".$goallevel5." : ".$solution."<br>";
											$var_jobprogress = $var_jobprogress."�дѺ��� ".$goallevel5." : ".$job_progress."<br>";
											$var_leveloperation = $var_leveloperation."�дѺ��� ".$goallevel5." : ".$level_operation."<br>";
											$var_yearpredict = $var_yearpredict."�дѺ��� ".$goallevel5." : ".$year_predict."<br>";
										}
								}

				//---------END-------  �֧������  ���˵���������������  �Ѻ �Ƿҧ���  -------------



				//---------START-------  �֧������  ����Ѻ�Դ�ͺ -------------

								$sql = " select a.author ";
								$sql = $sql. " from tris_master_authority a , tris_topic_detail b ";
								$sql = $sql. " where b.year = '".$yr."'  ";
								$sql = $sql. " and b.month = '".$mn."'  ";
								$sql = $sql. " and b.topic_id = '".$topicid."'  ";
								$sql = $sql. " and a.id = b.author_id ";


							// �Ѻ�ӹǹ rows ����ա�� rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// �Ѻ�ӹǹ rows ����բ������������

							
							$var_author = "";
							$cntauthor=0;

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									while (ocifetch($data_sql))
										{
											$v_author = ociresult($data_sql,1);
									
											if ($cntauthor>0)  // �ó� ���ҡ���� 1 ����Ѻ�Դ�ͺ   ����Ѻ�Դ�ͺ���� ����  �� comma ��蹹�� ���仨���
												{
													$var_author = $var_author." , ".$v_author;
												}
											else
												{
													$var_author = $v_author;
												}
											$cntauthor++;
										}
								}

				//---------END-------  �֧������  ����Ѻ�Դ�ͺ -------------


				//---------START-------  �֧������  ������ҹ�ҹ -------------

							   $sql = " select a.monitor_name ";
								$sql = $sql. " from tris_monitor a , tris_topic_detail b ";
								$sql = $sql. " where b.year = '".$yr."'  ";
								$sql = $sql. " and b.month = '".$mn."'  ";
								$sql = $sql. " and b.topic_id = '".$topicid."'  ";
								$sql = $sql. " and a.monitor_id = b.monitor ";

							// �Ѻ�ӹǹ rows ����ա�� rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// �Ѻ�ӹǹ rows ����բ������������

							
							$var_userlogin = "";
							$cntuserlogin=0;

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									while (ocifetch($data_sql))
										{
											$v_userlogin = ociresult($data_sql,1);
									
											if ($cntuserlogin>0)  // �ó� ���ҡ���� 1 ����Ѻ�Դ�ͺ   ����Ѻ�Դ�ͺ���� ����  �� comma ��蹹�� ���仨���
												{
													$var_userlogin = $var_userlogin." , ".$v_userlogin;
												}
											else
												{
													$var_userlogin = $v_userlogin;
												}
											$cntuserlogin++;
										}
								}

				//---------END-------  �֧������  ����Ѻ�Դ�ͺ -------------
			break;


//=================================  CRITERIA  TYPE  ��ҡѺ  2  ==========================

	case "2":
				//---------START-------  �֧������  ���˵���������������  �Ѻ �Ƿҧ���  -------------

								$sql = " select reason , solution , progress ";
								$sql = $sql. " from tris_operation_volume  ";
								$sql = $sql. " where year = '".$yr."'  ";
								$sql = $sql. " and month = '".$mn."'  ";
								$sql = $sql. " and topic_id = '".$topicid."'  ";

							// �Ѻ�ӹǹ rows ����ա�� rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// �Ѻ�ӹǹ rows ����բ������������

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									$var_reason = "";
									$var_solution = "";
									$var_jobprogress = "";


									while (ocifetch($data_sql))
										{
											$reason = ociresult($data_sql,1);
											$solution = ociresult($data_sql,2);
											$job_progress = ociresult($data_sql,3);

											$var_reason = $var_reason.$reason."<br>";
											$var_solution = $var_solution.$solution."<br>";
											$var_jobprogress = $var_jobprogress.$job_progress."<br>";
										}
								}

				//---------END-------  �֧������  ���˵���������������  �Ѻ �Ƿҧ���  -------------



				//---------START-------  �֧������  ����Ѻ�Դ�ͺ -------------

								$sql = " select a.author ";
								$sql = $sql. " from tris_master_authority a , tris_topic_detail b ";
								$sql = $sql. " where b.year = '".$yr."'  ";
								$sql = $sql. " and b.month = '".$mn."'  ";
								$sql = $sql. " and b.topic_id = '".$topicid."'  ";
								$sql = $sql. " and a.id = b.author_id ";


							// �Ѻ�ӹǹ rows ����ա�� rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// �Ѻ�ӹǹ rows ����բ������������

							
							$var_author = "";
							$cntauthor=0;

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									while (ocifetch($data_sql))
										{
											$v_author = ociresult($data_sql,1);
									
											if ($cntauthor>0)  // �ó� ���ҡ���� 1 ����Ѻ�Դ�ͺ   ����Ѻ�Դ�ͺ���� ����  �� comma ��蹹�� ���仨���
												{
													$var_author = $var_author." , ".$v_author;
												}
											else
												{
													$var_author = $v_author;
												}
											$cntauthor++;
										}
								}

				//---------END-------  �֧������  ����Ѻ�Դ�ͺ -------------


				//---------START-------  �֧������  ������ҹ�ҹ -------------

                               $sql = " select a.monitor_name ";
								$sql = $sql. " from tris_monitor a , tris_topic_detail b ";
								$sql = $sql. " where b.year = '".$yr."'  ";
								$sql = $sql. " and b.month = '".$mn."'  ";
								$sql = $sql. " and b.topic_id = '".$topicid."'  ";
								$sql = $sql. " and a.monitor_id = b.monitor ";

							// �Ѻ�ӹǹ rows ����ա�� rows
								  $cntrows = OCIParse($db_conn, $sql);
								  OCIExecute($cntrows);
								  $chkrows = OCIFetchstatement($cntrows,$results);
							// �Ѻ�ӹǹ rows ����բ������������

							
							$var_userlogin = "";
							$cntuserlogin=0;

							if ($chkrows > 0)
								{   
									$data_sql = ociparse($db_conn,$sql);
									ociexecute($data_sql);

									while (ocifetch($data_sql))
										{
											$v_userlogin = ociresult($data_sql,1);
									
											if ($cntuserlogin>0)  // �ó� ���ҡ���� 1 ����Ѻ�Դ�ͺ   ����Ѻ�Դ�ͺ���� ����  �� comma ��蹹�� ���仨���
												{
													$var_userlogin = $var_userlogin." , ".$v_userlogin;
												}
											else
												{
													$var_userlogin = $v_userlogin;
												}
											$cntuserlogin++;
										}
								}

				//---------END-------  �֧������  ����Ѻ�Դ�ͺ -------------

			break;


//==================================================================================

	default:
			$var_reason="";
			$var_solution="";
			$var_jobprogress="";
			$var_leveloperation = "";
			$var_yearpredict = "";
			$var_author="";
			$var_userlogin="";

}  // END  switch


?>


<html>

<head>
<title>�ʴ�������</title>
<meta name="generator" content="Namo WebEditor v6.0">
<meta http-equiv="content-type" content="text/html; charset=windows-874">


<script language="JavaScript">
	function open_newwindow(name, url)
	{
	  window.open(url, name, 'left=300 , top=320 , width=400 , height=160 , toolbar=no , menubar=no , status=no , scrollbars=no , resizable=yes');
	}
</script>

</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">
<table width="495" cellspacing="0" style="border-collapse:collapse;">
    <tr>
        <td width="491" style="border-width:1; border-color:white; border-style:solid;" colspan="2" bgcolor="#0099FF">
            <p align="center"><b><font size="3" face="MS Sans Serif" color="white">�ʴ�������</font></b></p>
        </td>
    </tr>



	<?  

		if ($criteriatype <> "2")
		{
			 echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">��ô��Թ�ҹ����ºࡳ�� :</font></td>';
		   echo ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
				
					echo $var_leveloperation;
				
			echo '</font></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">��ҡó�š�ô��Թ�ҹ���»� :</font></td>';
	echo  ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
				
					echo $var_yearpredict;

			echo '</font></td>';
	  echo  '</tr>';
	 echo ' <tr>';
	echo  ' <td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">���˵ط���������������� :</font></td>';
	echo  ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
					echo $var_reason;
		
		echo	'</font></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">�Ƿҧ��� :</font></td>';
			echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
			
					echo $var_solution;
		echo '</font></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">�����׺˹�Ңͧ�Ƿҧ���</font></td>';
			echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
			
					echo $var_jobprogress;
			
			echo '</font></td>';
		echo '</tr>';
		echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">����Ѻ�Դ�ͺ</font></td>';
			echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
			
				echo $var_author;
			
			echo '</font></td>';
	echo  ' </tr>';
		echo '<tr>';
			echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">������ҹ�ҹ (Monitor)</font></td>';
		  echo ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
							echo $var_userlogin;
			
			echo '</font></td>';
		echo '</tr>';
		}
		else
		{
echo ' <tr>';
echo  ' <td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">���˵ط���������������� :</font></td>';
echo  ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
				echo $var_reason;
	
	echo	'</font></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">�Ƿҧ��� :</font></td>';
        echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
		
				echo $var_solution;
	echo '</font></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">�����׺˹�Ңͧ�Ƿҧ���</font></td>';
        echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
		
				echo $var_jobprogress;
		
		echo '</font></td>';
    echo '</tr>';
    echo '<tr>';
        echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">����Ѻ�Դ�ͺ</font></td>';
        echo '<td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
		
			echo $var_author;
		
		echo '</font></td>';
echo  ' </tr>';
    echo '<tr>';
        echo '<td valign="top" width="174" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#99CCFF"><font size="2" face="MS Sans Serif">������ҹ�ҹ (Monitor)</font></td>';
      echo ' <td width="314" style="border-width:1; border-color:white; border-style:solid;" bgcolor="#CCFFFF"><font size="2" face="MS Sans Serif">';
						echo $var_userlogin;
		
		echo '</font></td>';
    echo '</tr>';
		}
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
