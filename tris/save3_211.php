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

	// ===  ��� ������觤�� ����դ��   �ʴ������˹���á �ѧ����ա���觤�� �����  ��˹��������� "-" ��		
			if (!isset($yr))  // Check ����յ���ù�������ѧ
				{
					$maxyr = substr( (date(Y)+543) ,2,2);		//  �ջѨ�غѹ  2007 + 543  = 2550  ��������� 2 �����ѧ
					$yr = $maxyr;
				}
			else 
				{
					if (empty($yr))   // Check ��ҵ���ù��  �դ����������
						{
							$maxyr = substr( (date(Y)+543) ,2,2);		//  �ջѨ�غѹ  2007 + 543  = 2550  ��������� 2 �����ѧ
							$yr = $maxyr;
						}
				}
	//===


		//--------- emp_id
			$emp_id = "empid";



?>


<html>

<head>
<title>��§ҹ�š�ô��Թ�ҹ�ͧ �ʷ ����ѹ�֡��͵�ŧ�����Թ�š�ô��Թ�ҹ�Ѱ����ˡԨ</title>
<meta name="generator" content="Namo WebEditor v6.0">
<meta http-equiv="content-type" content="text/html; charset=windows-874">



<script language="javascript">
<?


//--------  Select ��Ң����ŷ����������  ����� JavaScript ��͹

		//+++++++ start +++++++++   ࡳ���Ѵ�š�ô��Թ�ҹ +++++++++++++++++++++++++++++++++++++++++++

			$sql = " select *  ";
			$sql = $sql." from tris_topic_group3 ";
			$sql = $sql." where topic_id = '3.2' ";
			$sql = $sql." and year  = '".$yr."' ";

		// �Ѻ�ӹǹ rows ����ա�� rows
		  $cntrows = OCIParse($db_conn, $sql);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// �Ѻ�ӹǹ rows ����բ�����������

		if ($chkrows > 0)
 			{
					$parse_sql = ociparse($db_conn,$sql);
					ociexecute($parse_sql);

					while (ocifetch($parse_sql))
						{
							$topic_id = ociresult($parse_sql,2);
							$subtopic_id = ociresult($parse_sql,3);
							$subtopic_name = ociresult($parse_sql,4);
							$goal = ociresult($parse_sql,5);

							$subtopicid = str_replace(".","_",$subtopic_id);

							echo "T_".$yr."Z".$subtopicid." = '".$subtopic_name."|".$goal."'; ";
						}
			}
		
		//+++++++ end +++++++++   ࡳ���Ѵ�š�ô��Թ�ҹ +++++++++++++++++++++++++++++++++++++++++++

		//+++++++ start +++++++++  ������ tris_operation_management +++++++++++++++++++++++++++++++++++++++++++

		$sql = " select * from tris_operation_management  ";
		$sql = $sql." where emp_id = '".$emp_id."'  and topic_id = '3.2' ";
		$sql = $sql." order by emp_id , year , month,subtopic_id ";

		// �Ѻ�ӹǹ rows ����ա�� rows
		  $cntrows = OCIParse($db_conn, $sql);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// �Ѻ�ӹǹ rows ����բ�����������

		if ($chkrows > 0)
 			{
					$parse_sql = ociparse($db_conn,$sql);
					ociexecute($parse_sql);

					while (ocifetch($parse_sql))
						{
							$yyr = ociresult($parse_sql,1);
							$mmn = ociresult($parse_sql,2);
							$subtopic_id = ociresult($parse_sql,3);
							$operation_goal = ociresult($parse_sql,5);
							$operation_level = ociresult($parse_sql,6);
							$reason = ociresult($parse_sql,7);
							$solution = ociresult($parse_sql,8);
							$active_flag = ociresult($parse_sql,9);

							$subtopicid = str_replace(".","_",$subtopic_id);
							echo $emp_id."_".$yyr."_".$mmn."Z".$subtopicid." = '".$operation_goal."|".$operation_level."|".$reason."|".$solution."|".$active_flag."'; ";
//							echo $emp_id."_".$yyr."_".$mmn."Z".$subtopicid." = '".$operation_goal."|".$operation_level."|".$reason."|".$solution."'; ";
						}
			}
		
		//+++++++ end +++++++++  ������ tris_operation_management +++++++++++++++++++++++++++++++++++++++++++

//-----------------  Select ��Ң����ŷ����������  ����� JavaScript ��͹

	?>	

		//=== clear data
				function cleardata()
					{
							frm.percent_sucess.value ='';										
							frm.score_level.value='';
							frm.reason.value ='';
							frm.solution.value ='';		
							document.getElementById("y_active_flag").checked=false;
							document.getElementById("n_active_flag").checked=false;
					}
		//===




		//====
			function show_g1detail()
				{

							frm.percent_sucess.value ='';	
							frm.score_level.value='';
							frm.reason.value ='';
							frm.solution.value ='';
							document.getElementById("y_active_flag").checked=false;
							document.getElementById("n_active_flag").checked=false;
							

					//---- Start �ʴ������� ࡳ���Ѵ�š�ô��Թ�ҹ
							tmp_g1 = frm.g1.value;
							tmp_g1 = tmp_g1.replace(".","_");  // 1 �ش  replace ����Шش
							tmp_g1 = tmp_g1.replace(".","_");  // 2  �ش
							tmp_g1 = tmp_g1.replace(".","_");  // 3  �ش
							tmp_g1 = tmp_g1.replace(".","_");  // 3  �ش


							tmp_g1_val = "T_"+frm.yr.value+"Z"+tmp_g1;

							tmp_str = eval(tmp_g1_val);

							tmp_g1_val_split = tmp_str.split("|");

							dt1 = tmp_g1_val_split[0];
							go1 = tmp_g1_val_split[1];

							if (dt1 == null) 
								{
									frm.g2.value='';
								}
							else
								{
									frm.g2.value=dt1;			
								}

							if (go1 == null) 
								{
									frm.go.value='';
								}
							else
								{
									frm.go.value=go1;			
								}
					//---- End  �ʴ������� ࡳ���Ѵ�š�ô��Թ�ҹ


					//---- Start   �ʴ������� ���ѹ�֡ ��� ࡳ���Ѵ�š�ô��Թ�ҹ

							tmp_g1 = frm.g1.value;
							tmp_g1 = tmp_g1.replace(".","_");  // 1 �ش  replace ����Шش
							tmp_g1 = tmp_g1.replace(".","_");  // 2  �ش
							tmp_g1 = tmp_g1.replace(".","_");  // 3  �ش
							tmp_g1 = tmp_g1.replace(".","_");  // 3  �ش



<?
					echo '   tmp_g1valtmp = "typeof('.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+") != \'undefined\' ";   ';  // �� check  ��ҵ���ù���ա�����ҧ����������
?>

					if ( eval(tmp_g1valtmp) )  // ������դ�� (������� True) 
					{
						<?
								echo 'tmp_g1_val = "'.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1; ';
						?>

								tmp_str = eval(tmp_g1_val);

								tmp_g1_val_split = tmp_str.split("|");

								d1 = tmp_g1_val_split[0];
								d2 = tmp_g1_val_split[1];
								d3 = tmp_g1_val_split[2];
								d4 = tmp_g1_val_split[3];
								d5 = tmp_g1_val_split[4];




								if (d1 == null) 
									{
										frm.percent_sucess.value ='';										
									}
								else
									{
										frm.percent_sucess.value=d1;			
									}

								if (d2 == null) 
									{
										frm.score_level.value='';
									}
								else
									{
										frm.score_level.value=d2;
									}
	
								if (d3 == null) 
									{
										frm.reason.value ='';
									}
								else
									{
										frm.reason.value=d3;			
									}

								if (d4 == null) 
									{
										frm.solution.value ='';
									}
								else
									{
										frm.solution.value=d4;
									}

								if (d5 == null) 
									{
											document.getElementById("y_active_flag").checked=false;
											document.getElementById("n_active_flag").checked=false;
									}
								else
									{
//										alert (d5);
										if (d5 == 0)
										{
											document.getElementById("y_active_flag").checked=false;
											document.getElementById("n_active_flag").checked=true;
										}
										else if (d5 == 1)
										{
											document.getElementById("y_active_flag").checked=true;
											document.getElementById("n_active_flag").checked=false;
										}
									}				



					}  // END  if ( eval(tmp_g1valtmp) )  // ������դ�� (������� True) 



					//---- End   �ʴ������� ���ѹ�֡ ��� ࡳ���Ѵ�š�ô��Թ�ҹ

				}
		//====

		//====
			function send_save()
				{
					
						if ( !Isdouble(frm.percent_sucess.value) )
							{
								alert("��سһ�͹������ ' %��������稢ͧ�������  ' �繵���Ţ���...");
								frm.percent_sucess.focus();
							}
						else
							{
								if ( !Isdouble(frm.score_level.value) )
									{
										alert("��سһ�͹������ ' �дѺ��ṹ ' �繵���Ţ���...");
										frm.score_level.focus();
									}
								else
									{
										if (confirm("�׹�ѹ��� �ѹ�֡������ ?")) 
											{
												frm.submit();
											}  // end  if (confirm("�׹�ѹ��� �ѹ�֡������ ?")) 
									}
							}
				}
		//====

		//====
			function chk_enter()
				{
					if (window.event.keyCode == 13) 
						{
								window.event.keyCode = 9;			 // �觤�� 9 �������� ���� ascii 9 ��� ���� tab   , 13 ���  ���� Enter 	
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

		//	�Ѻ�ӹǹ�ش�ȹ������� ��ҵ�ͧ������Թ 1 �ش��ҹ��
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

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" background="images/bg22.gif" onload=show_g1detail()>


<br>


<?


// ------------------------------------   END  Dropdown list   �� �.�.    --------------------------------------

	//  ++++  Check ��͹����բ����ŵ���շ�� �ʴ� � Table tris_topic �������  �������ա��ʴ���� ����� ���������  ++++

		$sql_yr = " select year from tris_topic where year = '".$yr."' group by year ";
		$sql_yr = $sql_yr." order by to_number(year) desc ";


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
	            echo '<form name="frm" action = "save3_2_save.php" method = "post">';

				$tdwidth_td1 = "200";   // �������ҧ�ͧ column �����㹡���ʴ�������  column  1
				$tdwidth_td2 = "400";   // �������ҧ�ͧ column �����㹡���ʴ�������  column  2


				echo "<center>";

				echo "<font size='4' color='blue'>��§ҹ�š�ô��Թ�ҹ�ͧ �ʷ ����ѹ�֡��͵�ŧ�����Թ�š�ô��Թ�ҹ�Ѱ����ˡԨ</font>";
				echo "<br>";
				echo "<font size='4' color='blue'>��û����Թ�š�ú����ä�������§</font>";
				echo "<br><br>";

				echo "<table border=0 width='700'>";


				//-----------------------------------------------  START  dropdown list   ��  -----------------------------------------------------
				
				echo "<tr>";
						echo "<td align='left' width=".$tdwidth_td1.">";
						echo '<font size="3" face="MS Sans Serif">��Шӻ�</font>';
						echo "</td>";

						echo "<td align='left' width=".$tdwidth_td2.">";
						echo '<SELECT NAME="yr"  tabindex="1" onKeyDown=chk_enter() onchange=show_g1detail()>';

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
				//-----------------------------------------------  End  dropdown list   ��  -----------------------------------------------------





				//-----------------------------------------------  START  dropdown list  ��͹ 12 ��͹ -----------------------------------------------------

					// ===  ��� ������觤�� ����դ��   �ʴ������˹���á �ѧ����ա���觤�� �����  ��˹��������� "-" ��		
					if (!isset($mn))
						{
							$mn = date(n) ;
							$maxmn = chkmn($mn);
						}
					else
						{
							if (empty($mn)) // ��� mn ����դ���ʴ������˹���á �ѧ����ա���觤�� ����� mn ���ѧ����դ�� ���˹��������� ��͹ �.�. ��
								{
									$mn = date(n) ;
									$maxmn = chkmn($mn);
								}
						}
					//===

				echo "<tr>";
						echo "<td align='left' width=".$tdwidth_td1.">";
						echo '<font size="3" face="MS Sans Serif">��͹</font>';
						echo "</td>";

						echo "<td align='left' width=".$tdwidth_td2.">";
						echo '<SELECT NAME="mn"  tabindex="2" onKeyDown=chk_enter()  onchange=show_g1detail()>';
						
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
						echo '</td>';

				echo "</tr>";

				//-----------------------------------------------  END  dropdown list  ��͹ 12 ��͹ -----------------------------------------------------





				//-----------------------------------------------  START  ࡳ���Ѵ�š�ô��Թ�ҹ  -----------------------------------------------------

					// ===  ��� ������觤�� ����դ��   �ʴ������˹���á �ѧ����ա���觤�� �����  ��˹��������� "-" ��		
					if (!isset($g1))
						{
							$g1 = "-";
						}
					else
						{
							if (empty($g1))
								{
									$g1 = "-";
								}
						}
					//===

						//  Select ������  �ҡ Table  Tris_topic_group3
							$sql = " select *  ";
							$sql = $sql." from tris_topic_group3 ";
							$sql = $sql." where topic_id = '3.2' ";
							$sql = $sql." and year  = '".$yr."' ";
						//---


						// �Ѻ�ӹǹ rows ����ա�� rows
						  $cntrows = OCIParse($db_conn, $sql);
						  OCIExecute($cntrows);
						  $chkrows = OCIFetchstatement($cntrows,$results);
						// �Ѻ�ӹǹ rows ����բ������������



						if ($chkrows == 0) // check ���   �������բ����� � Table Master   tris_topic   �ͧ�շ���ʴ�  ������������բ�����
							{   
									echo "<tr>";
											echo "<td align='left' width=".$tdwidth_td1.">";
											echo '<font size="3" face="MS Sans Serif">ࡳ���Ѵ�š�ô��Թ�ҹ</font>';
											echo "</td>";

											echo "<td align='left' width=".$tdwidth_td2.">";

											echo '<SELECT NAME="g1" tabindex="3" onKeyDown=chk_enter() >';
											echo '<option value="" selected></option>';											
											echo '</SELECT>';
											echo '</td>';

									echo "</tr>";
							}  
						else
							{ 
								$amt_a1=0;

								$vdata = ociparse($db_conn,$sql);
								ociexecute($vdata);

								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ࡳ���Ѵ�š�ô��Թ�ҹ</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<SELECT NAME="g1"  tabindex="3" onKeyDown=chk_enter() onchange=show_g1detail()>';
										
										$vtopicid = "";

										while (ocifetch($vdata))
											{
												$v_year = ociresult($vdata,1);
												$v_topicid = ociresult($vdata,2);
												$v_subtopicid = ociresult($vdata,3);
												$v_subtopicname = ociresult($vdata,4);
												$v_goal = ociresult($vdata,5);


												++$amt_a1;

												if ($g1 == "-")
													{
															if ($amt_a1 == 1)
																{
																	echo '<option value="'.$v_subtopicid.'" selected>'.$v_subtopicid.'</option>';
																	$g1 = $v_subtopicid;
																	$vtopicid = $v_topicid;
																}
															else
																{
																	echo '<option value="'.$v_subtopicid.'">'.$v_subtopicid.'</option>';
																}
													}
												else
													{
														if ("\'".$v_subtopicid."\'" == "\'".$g1."\'")
															{
																	echo '<option value="'.$v_subtopicid.'" selected>'.$v_subtopicid.'</option>';
																	$vtopicid = $v_topicid;
															}
														else
															{
																	echo '<option value="'.$v_subtopicid.'">'.$v_subtopicid.'</option>';
															}
													}

	
											}  // END  while (ocifetch($data_topic))

									
										echo '</SELECT>';
										echo '</td>';

								echo "</tr>";


							} //  END  if ($chkrows == 0) // check ���   �������բ����� � Table Master   tris_topic   �ͧ�շ���ʴ�  ������������բ�����



				//-----------------------------------------------  END  ࡳ���Ѵ�š�ô��Թ�ҹ  -----------------------------------------------------


				//====  Hidden field �ͧ ���� topic_id
					echo '<INPUT TYPE="hidden" NAME="topicid" value="'.$vtopicid.'">';
				//====



				//-----------------------------------------------  START  ��������´�ͧ  ࡳ���Ѵ�š�ô��Թ�ҹ  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">��������´�ͧࡳ��</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="g2" rows="5" cols="50" style="BACKGROUND-COLOR: #ffffff" readonly>';
										echo '</textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  ��������´�ͧ  ࡳ���Ѵ�š�ô��Թ�ҹ  -----------------------------------------------------




				//-----------------------------------------------  START  ������� %  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">������� %</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="go" maxlength="3" size="3" style="BACKGROUND-COLOR: #ffffff" readonly>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  ������� %  -----------------------------------------------------


				//-----------------------------------------------  START  ��������ö㹡Ԩ�������� -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">��������ö㹡Ԩ��������</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<INPUT TYPE="radio" id="y_active_flag"   NAME="active_flag" VALUE = "1">����';
										echo '<INPUT TYPE="radio" id="n_active_flag"   NAME="active_flag" VALUE = "0">�������';

										echo "</td>";

								echo "</tr>";



				//-----------------------------------------------  END ��������ö㹡Ԩ�������� -----------------------------------------------------




				//-----------------------------------------------  START  % ��������稢ͧ�������  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">% ��������稢ͧ�������</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="percent_sucess" maxlength="5" size="5"  tabindex="4"  onKeyDown=chk_enter()>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  % ��������稢ͧ�������  -----------------------------------------------------


				//-----------------------------------------------  START  �дѺ��ṹ  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">�дѺ��ṹ</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="score_level" maxlength="5" size="5"  tabindex="5" onKeyDown=chk_enter()>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  �дѺ��ṹ  -----------------------------------------------------


				
				//-----------------------------------------------  START  ���˵ط��������ص���������  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">���˵ط��������ص���������</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="reason" rows="5" cols="50"  tabindex="6" onKeyDown=chk_enter()></textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  ���˵ط��������ص���������  -----------------------------------------------------



				//-----------------------------------------------  START  �ʹ��Ƿҧ���  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">�ʹ��Ƿҧ���</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="solution" rows="5" cols="50"   tabindex="7" onKeyDown=chk_enter()></textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  �ʹ��Ƿҧ���  -----------------------------------------------------



				//-----------------------------------------------  START  ���� SAVE  -----------------------------------------------------
								echo "<tr>";
										echo "<td colspan='2' align='center'>";
										echo '<input type="button" name="save" value="�ѹ�֡" tabindex="8" onclick=send_save()>';
										echo "&nbsp;&nbsp;&nbsp;";
										echo '<input type="button" name="cancle" value="¡��ԡ"  tabindex="9" onclick=cleardata()>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  ���� SAVE  -----------------------------------------------------




				echo "</table>";
				echo "</center>";

				echo "</form>";

			}  //  END  if ($chkrows == 0) // check ���   �������բ����� � Table Master   tris_topic   �ͧ�շ���ʴ�  ������������բ�����
?>



</body>

</html>
