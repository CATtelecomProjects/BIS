<?
	include("conora.php");  // Function  connect Database
	include("month_desc.php");  // Function  �ŧ ����Ţ��͹ �� ��

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
//$today = getdate();
//$mon = "0".$today['mon'];
//echo $mn;
?>



<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=windows-874">
<title>�к������Թ�š�ô��Թ�ҹ�ͧ�Ѱ����ˡԨ - TRIS</title>
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
  window.open(url, name, 'left=300 , top=300 , width=520 , height=400 , toolbar=no , menubar=no , status=no , scrollbars=yes , resizable=yes');
}

function na_open_window4(name, url)
{
  window.open(url, name, 'left=50 , top=10 , width=1000 , height=1000 , toolbar=no , menubar=no , status=no , scrollbars=yes , resizable=yes');
}

function na_open_window5(name, url)
{
  window.open(url, name, 'left=300 , top=300 , width=520 , height=400 , toolbar=no , menubar=no , status=no , scrollbars=yes , resizable=yes');
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
                <p align="center"><font size="3" face="MS Sans Serif"><b>��§ҹ�š�ô��Թ�ҹ����ѹ�֡��͵�ŧ��û����Թ�š�ô��Թ�ҹ�ͧ �ʷ<br></b></font></p>
                <p align="center">
				



<?

// ------------------------------------   END  Dropdown list   ��͹  12 ��͹  --------------------------------------

		// ===  ��� ������觤�� ����դ��   �ʴ������˹���á �ѧ����ա���觤�� �����  ��˹��������� "-" ��		
		if (!isset($mn))
			{
				$mn = date(n) ;
				$maxmn = $mn;
				
	           $mn = "0".$maxmn;
			    
			}
		else
			{
				if (empty($mn)) // ��� mn ����դ���ʴ������˹���á �ѧ����ա���觤�� ����� mn ���ѧ����դ�� ���˹��������� ��͹ �.�. ��
					{
						$mn = date(n) ;
						$maxmn = $mn;
						  $mn = "0".$maxmn;
					}
			}
		//===



	// ++++   End �� ��͹����������բ����Ţͧ�ջѨ�غѹ   ++++

		echo "&nbsp;";
		echo '<font size="3" face="MS Sans Serif">��Ш���͹</font><font size="2" face="MS Sans Serif">';
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
							 echo '<option value="01"'.$v_selected.'>���Ҥ�</option>';break;
					case "2";
 							 echo '<option value="02"'.$v_selected.'>����Ҿѹ��</option>';break;
					case "3";
 							 echo '<option value="03"'.$v_selected.'>�չҤ�</option>';break;
					case "4";
 							 echo '<option value="04"'.$v_selected.'>����¹</option>';break;
					case "5";
 							 echo '<option value="05"'.$v_selected.'>����Ҥ�</option>';break;
					case "6";
 							 echo '<option value="06"'.$v_selected.'>�Զع�¹</option>';break;
					case "7";
 							 echo '<option value="07"'.$v_selected.'>�á�Ҥ�</option>';break;
					case "8";
 							 echo '<option value="08"'.$v_selected.'>�ԧ�Ҥ�</option>';break;
					case "9";
 							 echo '<option value="09"'.$v_selected.'>�ѹ��¹</option>';break;
					case "10";
 							 echo '<option value="10"'.$v_selected.'>���Ҥ�</option>';break;
					case "11";
 							 echo '<option value="11"'.$v_selected.'>��Ȩԡ�¹</option>';break;
					case "12";
 							 echo '<option value="12"'.$v_selected.'>�ѹ�Ҥ�</option>';break;
				}
			}

		echo '</SELECT>';

// ------------------------------------   END  Dropdown list   ��͹  12 ��͹  --------------------------------------


// ------------------------------------   END  Dropdown list   �� �.�.    --------------------------------------

	// ===  ��� ������觤�� ����դ��   �ʴ������˹���á �ѧ����ա���觤�� �����  ��˹��������� "-" ��		
			if (!isset($yr))  // Check ����յ���ù�������ѧ
				{
					$yr = "-";  
				}
			else 
				{
					if (empty($yr))   // Check ��ҵ���ù��  �դ����������
						{
							$yr = "-";
						}
				}
	//===

	//  ++++  Check ��͹����բ����ŵ���շ�� �ʴ� � Table tris_topic �������  �������ա��ʴ���� ����� ���������  ++++
	
	if ($yr != "-")
		{
			$sql_yr = " select year from tris_topic where year = '".$yr."' group by year ";
			$sql_yr = $sql_yr." order by to_number(year) desc ";
		} 
	else
		{
			$maxyr = substr( (date(Y)+543) ,2,2);		//  �ջѨ�غѹ  2007 + 543  = 2550  ��������� 2 �����ѧ
			$yr = $maxyr;

			$sql_yr = " select year from tris_topic where year = '".$yr."' group by year ";
			$sql_yr = $sql_yr." order by to_number(year) desc ";
		} 

		

		// �Ѻ�ӹǹ rows ����ա�� rows
		  $cntrows = OCIParse($db_conn, $sql_yr);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// �Ѻ�ӹǹ rows ����բ������������

		if ($chkrows == 0) // check ���   �������բ����� � Table Master   tris_topic   �ͧ�շ���ʴ�  ������������բ�����
 			{   
						echo "&nbsp;&nbsp;";
						echo '<font size="3" face="MS Sans Serif">&nbsp;�� �.�.</font>';
						echo "&nbsp;&nbsp;";

						echo '<SELECT NAME="yr">';
						echo '<option value="'.$maxyr.'" selected>25'.$maxyr.'</option>';
						echo '</SELECT>';
						

				echo "<br><br>";
				echo "<font color='red' size='3'>��辺�����ŵ������к�</font>";
			}  
		else
			{ 
				//-----------------------------------------------  START  dropdown list   ��  -----------------------------------------------------
						echo "&nbsp;&nbsp;";
						echo '<font size="3" face="MS Sans Serif">&nbsp;�� �.�.</font>';
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
				//-----------------------------------------------  End  dropdown list   ��  -----------------------------------------------------



				//---------------------------  �����ʴ�������  ----------------------------------
					echo '&nbsp;&nbsp;&nbsp;&nbsp;';
					echo '<INPUT TYPE="button" name ="bt_send1" value = " �ʴ��� "  onclick="send_val1()">';
				// --------------------------- End �����ʴ������� -----------------------------








//---33333333333333333333333333   START  �ʴ���  333333333333333333333333333333333333333333333
$width_table = "995";

echo '<br><br>';
echo '<table width="995" cellspacing="0" style="border-collapse:collapse;">';
echo '    <tr>';
echo '        <td width="28" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">�ӴѺ</font></p>';
echo '        </td>';
echo '        <td width="236" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">ࡳ���Ѵ��ô��Թ�ҹ</font></p>';
echo '        </td>';
echo '        <td width="45" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">˹����Ѵ</font></p>';
echo '        </td>';
echo '        <td width="27" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">���˹ѡ (%)</font></p>';
echo '        </td>';
echo '        <td width="307" colspan="5" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">���ࡳ���Ѵ�պѭ�� </font><font size="2" face="MS Sans Serif" color="#CC0033"><b><? echo "25".$yr;?></b></font></p>';
echo '        </td>';
echo '        <td width="199" colspan="4" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">�š�ô��Թ�ҹ</font></p>';
echo '        </td>';
echo '                    <td width="67" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '                        <p align="center"><font size="2" face="MS Sans Serif">��ҡó� ��ṹ � ��鹻�</font></p>';
echo '                    </td>';
echo '        <td width="66" rowspan="2" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">ʶҹо�ҡó���»�</font></p>';
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
echo '            <p align="center"><font size="2" face="MS Sans Serif" color="#CC0033"><b>�.�. '.(("25".$yr)-1).'</b></font></p>';
echo '        </td>';
echo '        <td width="27" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">�дѺ</font></p>';
echo '        </td>';
echo '        <td width="79" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">� </font><font size="2" face="MS Sans Serif" color="#CC0033"><b>'.month_longdesc(chkmn($mn))." ".$yr.'</b></font></p>';
echo '        </td>';
echo '        <td width="32" bgcolor="#99CCFF" style="border-width:1; border-color:white; border-style:solid;">';
echo '            <p align="center"><font size="2" face="MS Sans Serif">�дѺ</font></p>';
echo '        </td>';
echo '    </tr>';





	// == �����  --------------------------------------------------------
		$topic_code_array = array();
		$topic_desc_array = array();
		$topic_criteria_type_array = array();
		$topic_unit_array = array();
		$topic_weight_array = array();
		$topic_amt = 1;
		$sumweight=0;  // ��� sum weight �ͧ��Ǣ���˭�

		$tb_bgcolor_headtopic1 = "#00CC99";  // �բ���˭� ��ͷ�� 1
		$tb_bgcolor_datatopic1 = "#CCFFCC";  // �բ������ ��ͷ�� 1
		
		$tb_bgcolor_headtopic2 = "#FFFF66";  // �բ���˭� ��ͷ�� 2
		$tb_bgcolor_datatopic2 = "#FFFFCC";  // �բ������ ��ͷ�� 2

		$tb_bgcolor_headtopic3 = "#FF99FF";  // �բ���˭� ��ͷ�� 3
		$tb_bgcolor_datatopic3 = "#FFCCFF";  // �բ������ ��ͷ�� 3

		$fontcolor = "#000000";  // �յ��˹ѧ���

		$tb_borderstyle = "'border-width:2; border-color:white; border-style:solid;'";  //  ��ͺ�ͧ���ҧ


		$tb_valign = "top";

	//---------------------------------------------------------------------



// SQL -----------------------------------
	$sql_topic = " select tt.topic_id ";
	$sql_topic = $sql_topic." , tt.topic_name ";
	$sql_topic = $sql_topic." , tt.criteria_type ";
	$sql_topic = $sql_topic." , tmu.unit_name ";
	$sql_topic = $sql_topic." , ttd.weight , ttd.flag_hot  ";
	$sql_topic = $sql_topic." from tris_topic_detail ttd , tris_topic  tt , tris_master_unit tmu ";
	$sql_topic = $sql_topic." where ttd.unit_id = tmu.id ";
	$sql_topic = $sql_topic." and tt.topic_id = ttd.topic_id ";
	$sql_topic = $sql_topic." and tt.year = ttd.year ";
	$sql_topic = $sql_topic." and tt.year = '".$yr."' ";
	//$sql_topic = $sql_topic."and tt.topic_id = ttd.topic_id";
	$sql_topic = $sql_topic." and ttd.month = '".$mn."' ";
	$sql_topic = $sql_topic." group by tt.topic_id , tt.topic_name , tt.criteria_type , tmu.unit_name , ttd.weight, ttd.flag_hot ";
	$sql_topic = $sql_topic." order by tt.topic_id ";

//echo $sql_topic."<br>";

	$data_topic = ociparse($db_conn,$sql_topic);
	ociexecute($data_topic);

	// --- Start  �纵�Ǣ�����ŧ����� Array
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
					$topic_hot_array[$topic_amt] = ociresult($data_topic,6);

					// �� ����ʹ sum �ͧ ���˹ѡ����ͧ����� ����˭� 
						list($hn1,$hn2,$hn3) = split("\.",$topic_code_array[$topic_amt]);  // �¡�����Ǣ���˭� �͡��  �ҡ��Ǥ�� �ش
						switch ($hn1)
							{
								case 1:   // ��� 1
										$sumweight_1 = $sumweight_1 + $topic_weight_array[$topic_amt];
									break;
								case 2:   // ��� 2
										$sumweight_2 = $sumweight_2 + $topic_weight_array[$topic_amt];
									break;
								case 3:   // ��� 3
										$sumweight_3 = $sumweight_3 + $topic_weight_array[$topic_amt];
									break;
							}
					//---
					
					$sumweight = $sumweight + $topic_weight_array[$topic_amt];  // �ʹ Sum �ͧ Weight ������

					$topic_amt++;   // �ǡ��������Ѻ����� array
				}
	// --- END  �纵�Ǣ�����ŧ����� Array




	// ź �ӹǹ Recode �͡ 1 (�óշ���ҡ���� 1) ���е���ش���¨кǡ�������� 1
		if ($topic_amt > 1)
			{
				$topic_amt = $topic_amt-1 ;  
			}
	//--


	// �¡ ����͡�ҡ�ѹ���� �ش(.) �� 2.3.10  �����͡�� 3 ���  (����ҵ���ش���¢ͧ������ ���� ���ͨ������ش����  ������� 㹡���ʴ���Ǣ��
//			list($headnum1,$headnum2,$headnum3) = split("\.",$topic_code_array[$topic_amt]);
			// ���� ����� headnum1 ��� ��Ǣ���˭����ش����   ���������ǹ loop �ʴ����� ��� headnum1
	//---
















	// --- Start  �ʴ��ŵ���� Array topic ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
		
		$cntnumnum1 = 1;
		$cntnumnum2 = 1;
		$cntnumnum3 = 1;

		$sumsum_yearpredict = 0;   // SUM  ��÷Ѵ ��� ��ҡó� ��ṹ � ��鹻� (�ش����)    �� ���ʹ����ͧ  [ ��ҡó� ��ṹ � ��鹻� * ���˹ѡ ]


		for ($t1=1 ; $t1<=$topic_amt ; $t1++ )
			{


						list($headnum1,$headnum2,$headnum3) = split("\.",$topic_code_array[$t1]);
						$cntn_num = "cntnumnum".$headnum1;



//============================  Start  �ʴ�  ���� ����˭� =================================================


						if ($t1 > 1)  // Check ����� record �á �������� ----  ����Ѻ���ʴ���Ǣ���˭�
							{
								list($headnum11,$headnum22,$headnum33) = split("\.",$topic_code_array[($t1-1)]);  // �¡��Ң���˭� ��ǡ�͹˹�� ����Ѻ��� check ��Ң�� ��ǻѨ�غѹ�Ѻ��ǡ�͹˹�� ����͹�ѹ��� �����ʴ�����˭� ����ӡѹ  �� 1.1 , 2.1  ���͢���˭� ��� 1 , 2 �繵�

								if ($headnum1 != $headnum11)
									{

										//============================  Start  �ʴ�  ���� ����˭� ======
													$tbbgcolorhead = "tb_bgcolor_headtopic".$headnum1;

													echo "<tr>";

													for ($all_column=1;$all_column<=15;$all_column++)  // ǹ�ʴ� 15 column ��� 1 ��÷Ѵ
														{
															switch($all_column)
															{

																case 2:   // �ʴ����� ����˭�  ( case = 2  ����  4  ��� column ��� 2 �Ѻ 4 ���˹�� report  �����㹡���ʴ������Ţͧ����˭� )
																		switch ($headnum1)
																		{
																			case 1:
																				echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;��ô��Թ��õ����º��</font></td>";
																				break;
																			case 2:
																				echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;��ô��Թ�ҹ�ͧ�Ѱ����ˡԨ</font></td>";
																				break;
																			case 3:
																			echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;��ú����èѴ���ͧ���</font></td>";
																				break;
																		}
																	break;

																case 4:  //  ( case = 2  ����  4  ��� column ��� 2 �Ѻ 4 ���˹�� report  �����㹡���ʴ������Ţͧ����˭� )
																		if ($headnum1 == "2")
																			{
																				echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif' color=".$fontcolor."><b>".$sumweight_2."</b></font></td>";   //  �ʹ����ͧ ���˹ѡ  ����繢�� 2 ��� ���  sumweight_2  ����� ��� 3 ��� $sumweight_3
																			}
																		elseif  ($headnum1 == "3")
																			{
																				echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif' color=".$fontcolor."><b>".$sumweight_3."</b></font></td>";   //  �ʹ����ͧ ���˹ѡ  ����繢�� 2 ��� ���  sumweight_2  ����� ��� 3 ��� $sumweight_3
																			}
																	break;
																default:
																	// �������� column ��� 2 (���� topic) �Ѻ  4 (weight ���)   ������ column ��ҧ��
																	echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
															}

														}  // END  for ($all_column=1;$all_column<=15;$all_column++)  // ǹ�ʴ� 15 column ��� 1 ��÷Ѵ

													echo "</tr>";
										//============================  END  �ʴ�  ����  ����˭� ======


									} // if ($headnum1 != $headnum11)

							}  // if ($t1 > 1)
						else   //  ����� Record �á ����ʴ�����˭����
							{
										//============================  Start  �ʴ�  ���� ����˭� ======
													$tbbgcolorhead = "tb_bgcolor_headtopic".$headnum1;

													echo "<tr>";

													for ($all_column=1;$all_column<=15;$all_column++)  // ǹ�ʴ� 15 column ��� 1 ��÷Ѵ
														{
															switch($all_column)
															{

																case 2:   // �ʴ����� ����˭� ( case = 2  ����  4  ��� column ��� 2 �Ѻ 4 ���˹�� report  �����㹡���ʴ������Ţͧ����˭� )
																		switch ($headnum1)
																		{
																			case 1:
																				echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;��ô��Թ��õ����º��</font></td>";
																				break;
																			case 2:
																				echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;��ô��Թ�ҹ�ͧ�Ѱ����ˡԨ</font></td>";
																				break;
																			case 3:
																			echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">".$headnum1.".&nbsp;&nbsp;��ú����èѴ���ͧ���</font></td>";
																				break;
																		}
																	break;

																case 4:  //  ( case = 2  ����  4  ��� column ��� 2 �Ѻ 4 ���˹�� report  �����㹡���ʴ������Ţͧ����˭� )
																			echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font size='2' face='MS Sans Serif' color=".$fontcolor."><b>".$sumweight_1."</b></font></td>";   // ����� record �á������˭���� �ʹ����ͧ ���˹ѡ��� ���  sumweight_1
																			
																	break;
																default:
																	// �������� column ��� 2 (���� topic) �Ѻ  4 (weight ���)   ������ column ��ҧ��
																	echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolorhead." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
															}

														}  // END  for ($all_column=1;$all_column<=15;$all_column++)  // ǹ�ʴ� 15 column ��� 1 ��÷Ѵ

													echo "</tr>";
										//============================  END  �ʴ�  ����  ����˭� ======
							}  // if ($t1 > 1)


//============================  END  �ʴ�  ���� ����˭� =================================================









//============================   START  �ʴ�  ������� =================================================

												$tbbgcolordata = "tb_bgcolor_datatopic".$headnum1;
												list($n1,$n2,$n3) = split("\.",$topic_code_array[$t1]);

												if ($n1 == $headnum1)
													{
																	echo "<tr>";
																//-- �ӴѺ
																	echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$t1."</font></td>";

																//-- ࡳ���Ѵ��ô��Թ�ҹ
																	echo "<td  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">";

																	$file_n2="report_sub2.php?yr=".$yr."&topicid=".$topic_code_array[$t1];
																	if($topic_hot_array[$t1] <>null)
														           {
																		echo '<a href="javascript:na_open_window2(\'win\', \''.$file_n2.'\' )" target="_self" title="�������ʹ٤ӨӡѴ����">'.$topic_code_array[$t1]."&nbsp;".$topic_desc_array[$t1].'</a>';
                                                                       	// echo  $topic_hot_array[$t1];
																		 echo "</font>";
                                                                         // ����¹ . �� _ 			
																		 $topic_change = str_replace( ".","_",$topic_code_array[$t1]);
					                                                     $topic_change = $topic_change."_";
																		// echo $topic_change;
                                                                         $chk_file_exists = "document/tris".$topic_change.chkmn($mn).$yr.".pdf";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris'.$topic_change.chkmn($mn).$yr.'.pdf" target="_blank" title="�������ʹ��͡��û�Сͺ"> <img src="images/icon_hot.gif"  border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'��辺 File ���\')"> <img src="images/icon_hot.gif"  border="0" align="top"></a>';
																											  }
																		  //echo '<img src = images/icon_hot.gif>';
														            }
																	else
														           {
																	echo '<a href="javascript:na_open_window2(\'win\', \''.$file_n2.'\' )" target="_self" title="�������ʹ٤ӨӡѴ����">'.$topic_code_array[$t1]."&nbsp;".$topic_desc_array[$t1].'</a>';
																	echo "</font>";
																   }


																	// ����繢�ͷ�� 1.2 , 2.1 ,  2.2  , 3.1 , 3.2  , 3.3.1 , 3.3.2 , 3.4 , 3.5 ����� ��� ��ͷ���
																			switch ($topic_code_array[$t1])
																				{
																					case "1.2":
																							//--- Check �١�͹��� �� File �� Server �������  ��͹���¡���ʴ�
																									$chk_file_exists = "document/tris1_2_".chkmn($mn).$yr.".pdf";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris1_2_'.chkmn($mn).$yr.'.pdf" target="_blank" title="�������ʹ��͡��û�Сͺ"> <img src="images/pdf.gif" width="16" height="16" border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'��辺 File ���\')"> <img src="images/pdf.gif" width="16" height="16" border="0" align="top"></a>';
																											  }
																							//----
																						break;
																					case "2.1":
																							//--- Check �١�͹��� �� File �� Server �������  ��͹���¡���ʴ�
																									$chk_file_exists = "document/tris2_1_".chkmn($mn).$yr.".pdf";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris2_1_'.chkmn($mn).$yr.'.pdf" target="_blank" title="�������ʹ��͡��û�Сͺ"> <img src="images/pdf.gif" width="16" height="16" border="0" align="top"></a> ';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'��辺 File ���\')"> <img src="images/pdf.gif" width="16" height="16" border="0" align="top"></a>';
																											  }
																							//----
																						break;
																					case "2.2":
																							//--- Check �١�͹��� �� File �� Server �������  ��͹���¡���ʴ�
																									$chk_file_exists = "document/tris2_2_".chkmn($mn).$yr.".pdf";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris2_2_'.chkmn($mn).$yr.'.pdf" target="_blank" title="�������ʹ��͡��û�Сͺ"> <img src="images/pdf.gif" width="16" height="16" border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'��辺 File ���\')"> <img src="images/pdf.gif" width="16" height="16" border="0" align="top"></a>';
																											  }
																							//----
																						break;
																				/*case "3.1":
																							//--- Check �١�͹��� �� File �� Server �������  ��͹���¡���ʴ�
																									$chk_file_exists = "document/tris3_1_".chkmn($mn).$yr.".pdf";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris3_1_'.chkmn($mn).$yr.'.pdf" target="_blank" title="�������ʹ��͡��û�Сͺ"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'��辺 File ���\')"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																							//----
																						break;
                                                                              case "3.2":
																							//--- Check �١�͹��� �� File �� Server �������  ��͹���¡���ʴ�
																									$chk_file_exists = "document/tris3_2_".chkmn($mn).$yr.".pdf";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris3_2_'.chkmn($mn).$yr.'.pdf" target="_blank" title="�������ʹ��͡��û�Сͺ"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'��辺 File ���\')"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																							//----
																						break;
                                                                            case "3.3.1":
																							//--- Check �١�͹��� �� File �� Server �������  ��͹���¡���ʴ�
																									$chk_file_exists = "document/tris3_3_1_".chkmn($mn).$yr.".pdf";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris3_3_1_'.chkmn($mn).$yr.'.pdf" target="_blank" title="�������ʹ��͡��û�Сͺ"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'��辺 File ���\')"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																							//----
																						break;
                                                                            case "3.3.2":
																							//--- Check �١�͹��� �� File �� Server �������  ��͹���¡���ʴ�
																									$chk_file_exists = "document/tris3_3_2_".chkmn($mn).$yr.".pdf";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris3_3_2_'.chkmn($mn).$yr.'.pdf" target="_blank" title="�������ʹ��͡��û�Сͺ"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'��辺 File ���\')"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																							//----
																						break;  
                                                                                 case "3.4":
																							//--- Check �١�͹��� �� File �� Server �������  ��͹���¡���ʴ�
																									$chk_file_exists = "document/tris3_4_".chkmn($mn).$yr.".pdf";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris3_4_'.chkmn($mn).$yr.'.pdf" target="_blank" title="�������ʹ��͡��û�Сͺ"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'��辺 File ���\')"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																							//----
																						break;
                                                                            case "3.5":
																							//--- Check �١�͹��� �� File �� Server �������  ��͹���¡���ʴ�
																									$chk_file_exists = "document/tris3_5_".chkmn($mn).$yr.".pdf";

																										 if (file_exists ($chk_file_exists) )
																											 {
																												//"File already exists. ";
																												echo '<a href="document/tris3_5_'.chkmn($mn).$yr.'.pdf" target="_blank" title="�������ʹ��͡��û�Сͺ"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																										 else
																											 {
																												echo '<a href="javascript:alert(\'��辺 File ���\')"> <img src="images/pdf.gif"  border="0" align="top"></a>';
																											  }
																							//----
																						break;*/
																		} // END  switch ($topic_code_array[$t1]) 
																	echo "</td>";
																//---

																//-- ˹����Ѵ
																	echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color='#0066FF'>".$topic_unit_array[$t1]."</font></td>";

																//-- ���˹ѡ
																		// ��� criteria_type = 3 ��� 3.3.1 ��� 3.3.2  ����ʴ����˹ѡ�������  �����������ǡѹ
																		switch ($topic_code_array[$t1])
																				{
																					case "3.3.1":
																							echo "<td align='center' rowspan='2' valign='center' bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color='#CC0033'>".$topic_weight_array[$t1]."</font></td>";
																						break;
																					case "3.3.2":
																							// �������ҧ���  ����ͧ�� <td></td>  ����  ��� 3.3.1  �� rowspan = '2' �����(��������÷Ѵ��������)
																						break;
																					default:
																							echo "<td align='center' valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color='#CC0033'>".$topic_weight_array[$t1]."</font></td>";
																				}


																//-- ���ࡳ���Ѵ�պѭ�� ...............
																	
																		$sql_tris_year_criteria = " select * from tris_year_criteria where year = '".$yr."' and month = '".chkmn($mn)."' and topic_id = '".$topic_code_array[$t1]."' ";

																		// �Ѻ�ӹǹ rows ����ա�� rows
																		  $cntrows = OCIParse($db_conn, $sql_tris_year_criteria);
																		  OCIExecute($cntrows);
																		  $chkrows = OCIFetchstatement($cntrows,$results);
																		// �Ѻ�ӹǹ rows ����բ������������

																		if ($chkrows > 0) 
																			{   
																				$data_tris_year_criteria = ociparse($db_conn,$sql_tris_year_criteria);
																				ociexecute($data_tris_year_criteria);


																						while (ocifetch($data_tris_year_criteria))
																							{
																										
																											if ( $topic_criteria_type_array[$t1] == "2" )
																												{
																													$yr_criteria1 = number_format(ociresult($data_tris_year_criteria,4),2,".",",");
																													$yr_criteria2 = number_format(ociresult($data_tris_year_criteria,5),2,".",",");
																													$yr_criteria3 = number_format(ociresult($data_tris_year_criteria,6),2,".",",");
																													$yr_criteria4 = number_format(ociresult($data_tris_year_criteria,7),2,".",",");
																													$yr_criteria5 = number_format(ociresult($data_tris_year_criteria,8),2,".",",");

																												}
																											else  // ��������  ��� �ȹ��� 2 ���
																												{
																														$yr_criteria1 = number_format(ociresult($data_tris_year_criteria,4),0,".",",");
																														$yr_criteria2 = number_format(ociresult($data_tris_year_criteria,5),0,".",",");
																														$yr_criteria3 = number_format(ociresult($data_tris_year_criteria,6),0,".",",");
																														$yr_criteria4 = number_format(ociresult($data_tris_year_criteria,7),0,".",",");
																														$yr_criteria5 = number_format(ociresult($data_tris_year_criteria,8),0,".",",");
																												}
																											
																								//-------- ��� cyteria_type ��ҡѺ 1 ������� link �Դ˹�ҵ�ҧ �ʴ���������´����
																										if ($topic_criteria_type_array[$t1] == "1")  
																											{
																												$file_n4 = "report_sub4.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1];

																												$yr_criteria1 = '<a href="javascript:na_open_window5(\'win\', \''.$file_n4.'\' )" target="_self" title="�������ʹ٤��ࡳ���Ѵ�����дѺ">'.$yr_criteria1.'</a>';
																												$yr_criteria2 = '<a href="javascript:na_open_window5(\'win\', \''.$file_n4.'\' )" target="_self" title="�������ʹ٤��ࡳ���Ѵ�����дѺ">'.$yr_criteria2.'</a>';
																												$yr_criteria3 = '<a href="javascript:na_open_window5(\'win\', \''.$file_n4.'\' )" target="_self" title="�������ʹ٤��ࡳ���Ѵ�����дѺ">'.$yr_criteria3.'</a>';
																												$yr_criteria4 = '<a href="javascript:na_open_window5(\'win\', \''.$file_n4.'\' )" target="_self" title="�������ʹ٤��ࡳ���Ѵ�����дѺ">'.$yr_criteria4.'</a>';
																												$yr_criteria5 = '<a href="javascript:na_open_window5(\'win\', \''.$file_n4.'\' )" target="_self" title="�������ʹ٤��ࡳ���Ѵ�����дѺ">'.$yr_criteria5.'</a>';
																											}
																								//--------


																											echo "<td align='right'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yr_criteria1."</font></td>";

																											echo "<td align='right'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yr_criteria2."</font></td>";

																											echo "<td align='right'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yr_criteria3."</font></td>";

																											echo "<td align='right'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yr_criteria4."</font></td>";

																											echo "<td align='right'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$yr_criteria5."</font></td>";



																							}

																			}  //if ($chkrows > 0)

																		else  //  �������բ�����  ����ʴ����ҧ��ҧ�
																			{
																				for ($ii=1 ; $ii<=5 ; $ii++)
																				{
																					echo "<td align='center'  valign=".$tb_valign." bgcolor=".$$tbbgcolordata." style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																				}
																			} //if ($chkrows > 0)

																	//----- ���ࡳ���Ѵ�ѭ��........



																	//-----  Start  �š�ô��Թ�ҹ  ... --------------------------------

																			switch ($topic_criteria_type_array[$t1])   // �ʴ������ŵ�� Criteria_type �ҡ��ҧ Table
																				{


																					//*************  criteria type = 1 *********************************************************
																							case "1":
																									$aa = "";
																									$bb = "";
																									$yearpredict = "";
																									$tmpcolor = "N";

																									//--- �š�ô��Թ�ҹ ��͹ 12 �ͧ  �ջѨ�غѹ ź 1 ..........
																										$sql = " select score_level from tris_operation_quality_tot where year = '".($yr-1)."' and month = '12' and topic_id = '".$topic_code_array[$t1]."' ";

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
																																$aa = number_format(ociresult($data_sql,1),2,".",",");

																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">";

																																$file_n1 = "report_sub1.php?mn=12&yr=".($yr-1)."&topicid=".$topic_code_array[$t1]."&tb=tris_operation_quality_tot&ff=score_level&criteriatype=".$topic_criteria_type_array[$t1];
																																echo '<a href="javascript:na_open_window(\'win\', \''.$file_n1.'\' )" target="_self" title="�������ʹټš�ô��Թ�ҹ�ʹյ">'.$aa.'</a></font></td>';


																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$aa."</font></td>";

																															}

																											}
																										else
																											{

																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";
																											}
																									//--- �š�ô��Թ�ҹ ��͹ 12 �ͧ �ջѨ�غѹ ź 1 ..........

																									//--- �š�ô��Թ�ҹ ��͹ �Ѩ�غѹ  ..........
																										$sql = " select tris_operation_quality_tot.score_level , tris_operation_quality_tot.year_predict from  tris_operation_quality_tot where tris_operation_quality_tot.year = '".$yr."' and tris_operation_quality_tot.month = '".chkmn($mn)."' and tris_operation_quality_tot.topic_id = '".$topic_code_array[$t1]."' ";

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
																																$aa = number_format(ociresult($data_sql,1),2,".",",");
																																$bb = number_format(ociresult($data_sql,2),2,".",",");
																																$yearpredict = $bb;
																																$tmpcolor = $yearpredict;

																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#D6B7F9' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">";
																																		$file_n1 = "report_sub1.php?mn=".chkmn($mn)."&yr=".($yr-1)."&topicid=".$topic_code_array[$t1]."&tb=tris_operation_quality_tot&ff=score_level&criteriatype=".$topic_criteria_type_array[$t1];
																																echo '<a href="javascript:na_open_window(\'win\', \''.$file_n1.'\' )" target="_self" title="�������ʹټš�ô��Թ�ҹ�ʹյ">'.$aa.'</a></font></td>';


																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#D6B7F9'  style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$aa."</font></td>";


																															// -- ��ҡó��ṹ � ��鹻�
																																			echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color='#ffffff'><b>".$yearpredict."</b></font></td>";
																															// --


																															}  //  END  while (ocifetch($data_sql))

																											}
																										else
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#D6B7F9'  style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#D6B7F9'  style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																											}
																									//--- �š�ô��Թ�ҹ ��͹�Ѩ�غѹ  ..........


																									// -- ʶҹ� ���
																										if ( ($tmpcolor == "N") || ($tmpcolor == "")  )
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																											}
																										else
																											{
																													//===  ���ʹ SUM �ͧ�дѺ�ͧ��͹�Ѩ�غѹ
																														$sumsum_yearpredict = $sumsum_yearpredict + ( $yearpredict * $topic_weight_array[$t1]); // �дѺ * ���˹ѡ
																													//---


																														switch ($tmpcolor)
																														{
																															case ($tmpcolor >= 4): // ������
																																		echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle.">";
																																		$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																		echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="�������ʹپ�ҡó�š�ô��Թ�ҹ���Ҵ��Ҩз�����»� �ѭ��/�ػ��ä  �ʹ��Ƿҧ��� ����Ѻ�Դ�ͺ ��м�����ҹ�ҹ"><img src="images/green.gif" width="25" height="25" border="0" align="middle"></a>';
																																		echo "</td>";
																																	break;
																															case (($tmpcolor >= 3) && ($tmpcolor < 4)): // ������ͧ
																																		echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle.">";
																																		$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																		echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="�������ʹپ�ҡó�š�ô��Թ�ҹ���Ҵ��Ҩз�����»� �ѭ��/�ػ��ä  �ʹ��Ƿҧ��� ����Ѻ�Դ�ͺ ��м�����ҹ�ҹ"><img src="images/yellow.gif" width="25" height="25" border="0" align="middle"></a>';
																																		echo "</td>";
																																	break;
																															case ($tmpcolor < 3): // ��ᴧ
																																		echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle.">";
																																		$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																		echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="�������ʹپ�ҡó�š�ô��Թ�ҹ���Ҵ��Ҩз�����»� �ѭ��/�ػ��ä  �ʹ��Ƿҧ��� ����Ѻ�Դ�ͺ ��м�����ҹ�ҹ"><img src="images/red.gif" width="25" height="25" border="0" align="middle"></a>';
																																		echo "</td>";
																																	break;
																														}

																											}

																									// --

																								break;


																					//*************  criteria type = 2 *********************************************************
																							case "2":
																									$aa = ""; 
																									$bb = "";
																									$yearpredict = "";
																									$tmpcolor = "N";

																									//--- �š�ô��Թ�ҹ ��͹ 12 �ͧ �ջѨ�غѹ ź 1 ..........
																										$sql = " select volume_month,score_level from tris_operation_volume where year = '".($yr-1)."' and month = '12' and topic_id = '".$topic_code_array[$t1]."' ";

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
																																$aa = number_format(ociresult($data_sql,1),2,".",",");
																																$bb = number_format(ociresult($data_sql,2),2,".",",");

																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">";
																																		$file_n1 = "report_sub1.php?mn=12&yr=".($yr-1)."&topicid=".$topic_code_array[$t1]."&tb=tris_operation_volume&ff=volume_month&criteriatype=".$topic_criteria_type_array[$t1];
																																echo '<a href="javascript:na_open_window(\'win\', \''.$file_n1.'\' )" target="_self" title="�������ʹټš�ô��Թ�ҹ�ʹյ">'.$aa.'</a></font></td>';


																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$bb."</font></td>";
																															}
																											}
																										else
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";
																											}
																									//--- �š�ô��Թ�ҹ ��͹ 12 �ͧ �ջѨ�غѹ ź 1 ..........

																									//--- �š�ô��Թ�ҹ ��͹ �Ѩ�غѹ  ..........
																										$sql = " select volume_month,score_level,year_predict_user,year_predict from tris_operation_volume where year = '".$yr."' and month = '".chkmn($mn)."' and topic_id = '".$topic_code_array[$t1]."' ";

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
																																$aa = number_format(ociresult($data_sql,1),2,".",",");
																																$bb = number_format(ociresult($data_sql,2),2,".",",");
																																$yearpredict = ociresult($data_sql,3);
																																$show = number_format(ociresult($data_sql,4),2,".",",");
																																$tmpcolor = $yearpredict;
																																

																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#D6B7F9'  style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">";
																																		$file_n1 = "report_sub1.php?mn=".chkmn($mn)."&yr=".($yr-1)."&topicid=".$topic_code_array[$t1]."&tb=tris_operation_volume&ff=volume_month&criteriatype=".$topic_criteria_type_array[$t1];
																																echo '<a href="javascript:na_open_window(\'win\', \''.$file_n1.'\' )" target="_self" title="�������ʹټš�ô��Թ�ҹ�ʹյ">'.$aa.'</a></font></td>';

																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#D6B7F9'  style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">".$bb."</font></td>";


																															// -- ��ҡó��ṹ � ��鹻�
																																			echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color='#ffffff'><b>";
																																				 // ��Ҥ�Ҿ�ҡó��ṹ����դ������������ҧ��
																																					if ($yearpredict == "")
																																						{
																																							echo "&nbsp;";
																																						}
																																					else
																																						{
																																							echo "<a href='#' title= ".$show."><font color='#ffffff''>"; 
																																							echo number_format($yearpredict,2,".",","); 
																																							echo '</a>';
																																						}
																																					//--
																																			echo "</b></font></td>";
																															// --


																															} // END  while (ocifetch($data_sql))
																											}
																										else
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#D6B7F9'  style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#D6B7F9'  style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">N/A</font></td>";

																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																											}
																									//--- �š�ô��Թ�ҹ ��͹�Ѩ�غѹ  ..........


																									// -- ʶҹ� ���
																										if  ( ($tmpcolor == "N") || ($tmpcolor == "") )
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																											}
																										else
																											{
																													//===  ���ʹ SUM �ͧ�дѺ�ͧ��͹�Ѩ�غѹ
																														$sumsum_yearpredict = $sumsum_yearpredict + ( $yearpredict * $topic_weight_array[$t1]); // �дѺ * ���˹ѡ
																													//---

																																switch ($tmpcolor)
																																{
																																	case ($tmpcolor >= 4): // ������
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle.">";
																																				$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																				echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="�������ʹپ�ҡó�š�ô��Թ�ҹ���Ҵ��Ҩз�����»� �ѭ��/�ػ��ä  �ʹ��Ƿҧ��� ����Ѻ�Դ�ͺ ��м�����ҹ�ҹ"><img src="images/green.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																			break;
																																	case (($tmpcolor >= 3) && ($tmpcolor < 4)): // ������ͧ
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle.">";
																																				$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																				echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="�������ʹپ�ҡó�š�ô��Թ�ҹ���Ҵ��Ҩз�����»� �ѭ��/�ػ��ä  �ʹ��Ƿҧ��� ����Ѻ�Դ�ͺ ��м�����ҹ�ҹ"><img src="images/yellow.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																			break;
																																	case ($tmpcolor < 3): // ��ᴧ
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle.">";
																																				$file_n3 = "report_sub3.php?mn=".chkmn($mn)."&yr=".$yr."&topicid=".$topic_code_array[$t1]."&criteriatype=".$topic_criteria_type_array[$t1];
																																				echo '<a href="javascript:na_open_window3(\'win\', \''.$file_n3.'\' )" target="_self" title="�������ʹپ�ҡó�š�ô��Թ�ҹ���Ҵ��Ҩз�����»� �ѭ��/�ػ��ä  �ʹ��Ƿҧ��� ����Ѻ�Դ�ͺ ��м�����ҹ�ҹ"><img src="images/red.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																			break;
																																}

																											}
																									// --

																								break;

																					//*************  criteria type = 3 *********************************************************
																							case "3":
																									$aa = "";
																									$bb = "";
																									$yearpredict = "";
																									$tmpcolor = "N";

																									//--- �š�ô��Թ�ҹ ��͹�Ѩ�غѹ �ͧ �ջѨ�غѹ ź 1 

																										//--- �ʴ� ���
																												echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">-</font></td>";
																										//--- 
																										
																										// +++ �ʴ��дѺ
																										$sql = " select total_level from tris_operation_management_tot where month = '12' and year = '".($yr-1)."' and topic_id = '".$topic_code_array[$t1]."' ";

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
																																if (ociresult($data_sql,1) != "")  // ����դ�� ��� �ʴ� �ȹ��� 4 ���˹�
																																	{
																																		$aa = number_format(ociresult($data_sql,1),4,".",",");
																																	}
																																else
																																	{
																																		$aa = ociresult($data_sql,1);
																																	}


																																echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">";

																																$file_n1 = "report_sub5.php?mn=12&yr=".($yr-1)."&topicid=".$topic_code_array[$t1]."&tb=tris_operation_management_tot&ff=total_level&criteriatype=".$topic_criteria_type_array[$t1];
																																echo '<a href="javascript:na_open_window(\'win\', \''.$file_n1.'\' )" target="_self" title="�������ʹټš�ô��Թ�ҹ�ʹյ">'.$aa.'</a></font></td>';


																															// -- �ʴ��дѺ�š�ô��Թ�ҹ�Ѩ�غѹ�� ��ҧ��� �ҡ������ʴ�� <�����˵� aaa1> (����͡�͹�ʴ�� �Ѩ�غѹ����������ʴ�)
																																	echo "<td align='center'  valign=".$tb_valign." bgcolor='#D6B7F9'  style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																															//---

																															}
																											}
																										else
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#ffcc99' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">-</font></td>";

																													// -- �ʴ��дѺ�š�ô��Թ�ҹ�Ѩ�غѹ�� ��ҧ��� �ҡ������ʴ�� <�����˵� aaa1> (����͡�͹�ʴ�� �Ѩ�غѹ����������ʴ�)
																														echo "<td align='center'  valign=".$tb_valign." bgcolor='#D6B7F9'  style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																													//---
																											}
																									//---

																									//--- �š�ô��Թ�ҹ ��͹�Ѩ�غѹ  ..........

																										//--- �ʴ����
																											echo "<td align='center'  valign=".$tb_valign." bgcolor='#D6B7F9'  style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">-</font></td>";
																										//---

																										// +++ �ʴ� �дѺ
																										$sql = " select total_level from tris_operation_management_tot where year = '".$yr."' and month = '".chkmn($mn)."' and topic_id = '".$topic_code_array[$t1]."' ";

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
																																$aa = ociresult($data_sql,1);
																																$yearpredict = $aa;
																																$tmpcolor = $yearpredict;
																															}

																											}


																									//--- �š�ô��Թ�ҹ ��͹�Ѩ�غѹ  ..........

																									// -- ��ҡó��ṹ � ��鹻�
																												echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color='#ffffff'><b>".$yearpredict."</b></font></td>";

																									// -- ʶҹ� ���
																										if ( ($tmpcolor == "N") || ($tmpcolor == "") )
																											{
																													echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle."><font  size='2' face='MS Sans Serif' color=".$fontcolor.">&nbsp;</font></td>";
																											}
																										else
																											{
																													//===  ���ʹ SUM �ͧ�дѺ�ͧ��͹�Ѩ�غѹ

																														// ��� criteria_type = 3 ��� 3.3.1 ��� 3.3.2   ��ҡó���鹻� 2 ��͹���������ѹ���� ��� 2  (���� ��ǹ��˹ѡ�������Ҥٳ �� �������)
																															if ( ($topic_code_array[$t1] == "3.3.1") || ($topic_code_array[$t1] == "3.3.2") )
																																{
																																	$sum_yearpredict_331_332 = $sum_yearpredict_331_332 + $aa;

																																	if  ($topic_code_array[$t1] == "3.3.1")
																																		{
																																			$weight_331_332 = $topic_weight_array[$t1];
																																		}
																																}
																															else
																																{
																																	$sumsum_yearpredict = $sumsum_yearpredict + ( $aa * $topic_weight_array[$t1]); // �дѺ * ���˹ѡ
																																}

																													//---

																												$dash_topicid = str_replace(".","_",$topic_code_array[$t1]);  // replace ��� topic_id ��  3.1  �����  3_1 ��������ҵ�͡Ѻ search �繪��� file

																												if ($dash_topicid == "3_3")  // ੾�Т�� 3.3 ��� ������ 1 ��ա��� �� 3_3_1
																													{
																														$dash_topicid = "3_3_1";
																													}

																												$na_fileopentopicid = "search".$dash_topicid.".php?yr=".$yr."&mn=".$mn;

																												switch ($tmpcolor)
																													{
																														case ($tmpcolor >= 4): // ������
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle.">";
																																				echo '<a href="javascript:na_open_window4(\'win\', \''.$na_fileopentopicid.'\' )" target="_self" title="�������ʹ٤����׺˹�ҡ�ô��Թ��� (�ҡ�շ���ҹ��) �ѭ��/�ػ��ä ��� �ʹ��Ƿҧ��� "><img src="images/green.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																break;
																															case (($tmpcolor >= 3) && ($tmpcolor < 4)): // ������ͧ
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle.">";
																																				echo '<a href="javascript:na_open_window4(\'win\', \''.$na_fileopentopicid.'\' )" target="_self" title="�������ʹ٤����׺˹�ҡ�ô��Թ��� (�ҡ�շ���ҹ��) �ѭ��/�ػ��ä ��� �ʹ��Ƿҧ���"><img src="images/yellow.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																break;
																															case ($tmpcolor < 3): // ��ᴧ
																																				echo "<td align='center'  valign=".$tb_valign." bgcolor='#6A94F5' style=".$tb_borderstyle.">";
																																				echo '<a href="javascript:na_open_window4(\'win\', \''.$na_fileopentopicid.'\' )" target="_self" title="�������ʹ٤����׺˹�ҡ�ô��Թ��� (�ҡ�շ���ҹ��) �ѭ��/�ػ��ä ��� �ʹ��Ƿҧ���"><img src="images/red.gif" width="25" height="25" border="0" align="middle"></a>';
																																				echo "</td>";
																																break;
																													}
																											}

																									// --

																								break;


																				}  //  END  switch ($topic_criteria_type_array[$t1])



																	//-------  END  �š�ô��Թ�ҹ  ... --------------------------------



																	echo "</tr>";
													
													}  // END  if ($n1 == $headnum1)

//============================   END  �ʴ�  ������� =================================================






			}
	// --- End  �ʴ��ŵ���� Array topic ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++











//----------------------------Start  �ʹ���  ---------------------------------------------------------------

													echo "<tr>";

													for ($all_column=1;$all_column<=15;$all_column++)  // ǹ�ʴ� 15 column ��� 1 ��÷Ѵ
														{
															switch($all_column)
															{
																case 2:
																			echo "<td align='center' valign='middle' bgcolor='#CCFFFF' style=".$tb_borderstyle."><font size='3' face='MS Sans Serif'  color=".$fontcolor."><b>���</b></font></td>";
																	break;
																case 4:
																			echo "<td align='center' valign='middle' bgcolor='#CCFFFF' style=".$tb_borderstyle."><font size='3' face='MS Sans Serif'  color=".$fontcolor."><b>".$sumweight."</b></font></td>";
																	break;
																case 14:  // column ��� 14  �ʹ SUM  ��ҡó� ��ṹ � ��鹻�
																			echo "<td align='center' valign='middle' bgcolor='#CCFFFF' style=".$tb_borderstyle."><font size='3' face='MS Sans Serif'  color=".$fontcolor."><b>";
																			

																			$criteriatype3_331_332 = ($sum_yearpredict_331_332 / 2) * $weight_331_332;
																			$sumsum_yearpredict = $sumsum_yearpredict + $criteriatype3_331_332;

																			// ��Ң������� �ٹ�� ����ͧ�ʴ��������ҧ
																				if ($sumsum_yearpredict == 0) 
																					{
																						echo "&nbsp;";
																					}
																				else
																					{
																						echo number_format(($sumsum_yearpredict/100),4,".",",");
																					}
																			//---
																			echo "</b></font></td>";
																	break;
                                                              case 15 : //  column ��� 15 �ʴ����
                                                                   $light = 0;
																	$light = $sumsum_yearpredict/100;
																	switch ($light)
																				{
																						case ($light >= 4): // ������
																								echo "<td align='center' valign=".$tb_valign." bgcolor='#CCFFFF' style=".$tb_borderstyle.">";
																								echo '<img src="images/green.gif" width="30" height="30" border="0" align="middle">';
																								echo "</td>";
																							break;
																						case (($light >= 3) && ($light < 4)): // ������ͧ
																								echo "<td align='center' valign=".$tb_valign." bgcolor='#CCFFFF' style=".$tb_borderstyle.">	";
																								echo '<img src="images/yellow.gif" width="30" height="30" border="0" align="middle">';
																								echo "</td>";
																							break;
																						case ($light < 3): // ��ᴧ
																								echo "<td align='center' valign=".$tb_valign." bgcolor='#CCFFFF' style=".$tb_borderstyle.">";
																								echo '<img src="images/red.gif" width="30" height="30" border="0" align="middle">';
																								echo "</td>";
																							break;
																				}
															        break;
																default:
																	// �������� column ��� 2 (���� topic) �Ѻ  4 (weight ���)   ������ column ��ҧ��
																	echo "<td  valign=".$tb_valign." bgcolor='#CCFFFF' style=".$tb_borderstyle."><font size='2' face='MS Sans Serif'  color=".$fontcolor.">&nbsp;</font></td>";
															}

														}  // END  for ($all_column=1;$all_column<=15;$all_column++)  // ǹ�ʴ� 15 column ��� 1 ��÷Ѵ

													echo "</tr>";

//----------------------------END  �ʹ���  ---------------------------------------------------------------






echo "</table>";


//---333333333333333333333333 END  �ʴ���  33333333333333333333333333333333333333333333333333





			}  //  END .... if ($chkrows == 0) // check ���   �������բ����� � Table Master   tris_topic   �ͧ�շ���ʴ�  ������������բ�����


			// ���� Return
				echo "<br>";
				echo "�ʶҹо�ҡó���»�  ���¶֧ : <br>";
				 echo '<img src="images/red.gif" width="25" height="25" border="0" > : ��ҡó��ṹ � ��鹻� �������дѺ��ṹ 3 &nbsp;&nbsp;';
				 echo '<img src="images/yellow.gif" width="25" height="25" border="0" > : ��ҡó��ṹ � ��鹻� ������дѺ��ṹ 3 ������Թ 4 &nbsp;&nbsp;';
				 echo '<img src="images/green.gif" width="25" height="25" border="0" > : ��ҡó��ṹ � ��鹻� ������дѺ��ṹ 4 ����<br><br>';
				echo '<a href="index.php"><img src="images/set08_return_on.gif" width="170" height="31" border="0" alt="set08_return_on.gif"></a>';
			//--

//==================================================================================




?>












</body>

</html>
