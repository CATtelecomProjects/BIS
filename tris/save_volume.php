<?
session_start();
$desc = $_SESSION['desc'];
$emp=$_SESSION['userid'] ;
// ��Ǩ�ͺ�ѹ���  ��͹�������������ѹ��� 15-27 �ͧ�������͹��ҹ��
$today = getdate();
$day = $today['mday'];
//echo $day;
 if (($emp<>'354277')&&($emp<>'233356')&&($emp<>'226143')&&(($day<14)||($day>28)))    
 { ?>
                       <script language = "javascript">
							alert("�����¹Ф� �к����Դ���ѹ�֡�����ŵ�����ѹ��� 15-27 �ͧ�������͹��ҹ��") ;
					        window.location = "http://bis.cattelecom.com/tris/index.php";
			               </script>
<? }
if (($emp<>'354277')&&($emp<>'233356')&&($emp<>'226143')&&($emp<>'209102')&&($emp<>'274548')&&($emp<>'033718')
		&&($emp<>'011565')&&($emp<>'333803')&&($emp<>'355593'))
		{?>
                            <script language = "javascript">
							alert("�س������Է�������Һѹ�֡�����������ͧ���Ф�") ;
					        window.location = "http://bis.cattelecom.com/tris/index.php";
			               </script>
	<?	}
?>
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


		//  START---- Function  ����Ѻ��� check ��Ҥ�ҷ��֧��ҡ database ��  ������ ��鹺�÷Ѵ���� (13) ���� feed line (10) �������� ��������Ѵ�͡  �����ʴ�� javascript ������� error
			function chk_feedline($chk_str)  
			{
				for ($h=0 ; $h < strlen($chk_str) ; $h++)
				{
					if ( !( (ord(substr($chk_str,$h,1))  == 13) || ( ord(substr($chk_str,$h,1))  == 10) )  ) // ���� ascii ��ҡѺ 13 enter , 10 feed line ���  ����ͧ�����  ����� javascript Error    ��  ord()  �ͧ php 㹡�� check
					{
						$p = $p.substr($chk_str,$h,1);
					}
				}

				return $p;
			}
		//  END---- Function  ����Ѻ��� check ��Ҥ�ҷ��֧��ҡ database ��  ������ ��鹺�÷Ѵ���� (13) ���� feed line (10) �������� ��������Ѵ�͡  �����ʴ�� javascript ������� error



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

$emp_id = "tui";
//$emp_id =$emp;





?>


<html>

<head>
<title>��§ҹ�š�ô��Թ�ҹ�ͧ �ʷ ����ѹ�֡��͵�ŧ�����Թ�š�ô��Թ�ҹ�Ѱ����ˡԨ</title>
<meta name="generator" content="Namo WebEditor v6.0">
<meta http-equiv="content-type" content="text/html; charset=windows-874">
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


<script language="javascript">


	//---- start  ����¹ ���� Element  g1  ( topic_id ��� �� ������͡ )
		function year_showtopicid()
		{

				 //  set  ���  ����  g1  �� null ������ �����Ѻ�������
				 for (m=0 ; m<frm.g1.options.length ; m++)   //   frm.g1.options.length  ��ͨӹǹ Options ������ g1
						frm.g1.options[m]=null;

				 // ��������Ѻ g1 ��ѧ�ҡ reset �������  �¡�˹���� value = '-'  ��Ф����ҡѺ '--- SELECT --'  ����  new Option("--- SELECT ---","-")

			i_yr = 1;

			while(true)
			{
				tmp_val1 = "typeof("+"Y"+frm.yr.value+"_"+i_yr+") != \'undefined\' "; 

				if (eval(tmp_val1))  //  ��ҵ�����դ��������������
				{
						tmp_val2 = "Y"+frm.yr.value+"_"+i_yr;
						frm.g1.options[i_yr-1]=new Option(eval(tmp_val2),eval(tmp_val2));

						//  ��Ҥ�ҷ������  �ç�Ѻ���� ���ӡ�� selected ��ǹ��
						if ( eval(tmp_val2) == "<? echo $g1; ?>" )
						{
							frm.g1.options[i_yr-1].selected=true;
						}

				}
				else
				{
					break;
				}

				i_yr++;

			}  // END  while

				show_g1detail();   //  call  function

		}  	
	//---- END  ����¹ ���� Element  g1  ( topic_id ��� �� ������͡ )


<?

//--------  Select ��Ң����ŷ����������  ����� JavaScript ��͹

		//+++++++ start +++++++++   ������  topic_id  �ͧ����л�   +++++++++++++++++++++++++++++++++++++++++++
			$sql = " select year , topic_id ";
			$sql = $sql." from tris_topic ";
			$sql = $sql." where criteria_type = '2' ";
			$sql = $sql." order by year , topic_id ";

		// �Ѻ�ӹǹ rows ����ա�� rows
		  $cntrows = OCIParse($db_conn, $sql);
		  OCIExecute($cntrows);
		  $chkrows = OCIFetchstatement($cntrows,$results);
		// �Ѻ�ӹǹ rows ����բ�����������

		if ($chkrows > 0)
 			{
					$parse_sql = ociparse($db_conn,$sql);
					ociexecute($parse_sql);
					
					$tmpyrr_1 = "N";
					$tmpyrr_2 = 0;

					while (ocifetch($parse_sql))
						{
							$tmpyrr_2++;

							$yrr = ociresult($parse_sql,1);
							$topicid = ociresult($parse_sql,2);

							if ($tmpyrr_1 != $yrr)
							{
								$tmpyrr_1 = $yrr;
								$tmpyrr_2 = 1;
							}

							echo "Y".$yrr."_".$tmpyrr_2."= \"".$topicid."\"; ";
						}
			}

		//+++++++ END +++++++++   ������  topic_id  �ͧ����л�   +++++++++++++++++++++++++++++++++++++++++++


		//+++++++ start +++++++++   ࡳ���Ѵ�š�ô��Թ�ҹ +++++++++++++++++++++++++++++++++++++++++++

			$sql = " select * ";
			$sql = $sql." from tris_topic ";
			$sql = $sql." where criteria_type = '2' ";
			$sql = $sql." order by topic_id ";

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
							$yrr = ociresult($parse_sql,1);
							$topic_id = ociresult($parse_sql,2);
							$topic_name = ociresult($parse_sql,3);

							$topicid = str_replace(".","_",$topic_id);

							echo "T_".$yrr."Z".$topicid." = '".chk_feedline($topic_name)."'; ";
						}
			}
		
		//+++++++ end +++++++++   ࡳ���Ѵ�š�ô��Թ�ҹ +++++++++++++++++++++++++++++++++++++++++++


		//+++++++ start +++++++++  ������ tris_operation_volume +++++++++++++++++++++++++++++++++++++++++++

		$sql = " select  ";
		$sql = $sql." year , month , topic_id , emp_id  ";
		$sql = $sql." , goal_year , goal_month , volume_month  ";
		$sql = $sql." , volume_goal , volume_level5  ";
		$sql = $sql." , year_predict , reason , solution ,withdraw,amount ,  progress ";
		$sql = $sql."  from tris_operation_volume ";
		$sql = $sql." where emp_id = '".$emp_id."'  ";


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
							$topic_id = ociresult($parse_sql,3);
							$goal_year = ociresult($parse_sql,5);
							$goal_month = ociresult($parse_sql,6);
							$volume_month = ociresult($parse_sql,7);
							$volume_goal = ociresult($parse_sql,8);
							$volume_level5 = ociresult($parse_sql,9);
							$year_predict = ociresult($parse_sql,10);
							$reason = ociresult($parse_sql,11);
							$solution = ociresult($parse_sql,12);
							$withdraw = ociresult($parse_sql,13);
							$amount = ociresult($parse_sql,14);
							$j_progress = ociresult($parse_sql,15);

							$topicid = str_replace(".","_",$topic_id);

							echo $emp_id."_".$yyr."_".$mmn."Z".$topicid." = '".$goal_year."|".$goal_month."|".$volume_month."|".$volume_goal."|".$volume_level5."|".$year_predict."|".chk_feedline($reason)."|".chk_feedline($solution)."|".$withdraw."|".$amount."|".chk_feedline($j_progress)."'; ";

						}
			}

		//+++++++ end +++++++++  ������ tris_operation_volume +++++++++++++++++++++++++++++++++++++++++++





//-----------------  Select ��Ң����ŷ����������  ����� JavaScript ��͹

	?>	

		//=== clear data
				function cleardata()
					{
							frm.year_goal.value ='';
							frm.month_goal.value='';
							frm.this_month.value='';
							frm.success_goal.value='';
							frm.success_goal_2.value='';
							frm.score_level.value='';
							frm.reason.value='';
							frm.solution.value='';
							frm.withdraw.value='';
							frm.amount.value='';
							frm.job_progress.value='';
					}
		//===




		//====
			function show_g1detail()
				{

							cleardata();

						// ==  ��� topic_id �����ҡѺ  1.2 , 2.1 ,  2.2  �����������͡���Ṻ���ӧҹ
							if (  (frm.g1.value == '1.2')  ||  (frm.g1.value == '2.1')  ||  (frm.g1.value == '2.2')  )
								{
									frm.doc.disabled = false;
								}
							else
								{
									frm.doc.disabled = true;
								}
						// ==

					//---- Start �ʴ������� ࡳ���Ѵ�š�ô��Թ�ҹ
							tmp_g1 = frm.g1.value;
							tmp_g1 = tmp_g1.replace(".","_");  // 1 �ش  replace ����Шش
							tmp_g1 = tmp_g1.replace(".","_");  // 2  �ش
							tmp_g1 = tmp_g1.replace(".","_");  // 3  �ش

							tmp_g1_val = "T_"+frm.yr.value+"Z"+tmp_g1;

							tmp_str = eval(tmp_g1_val);

							if (tmp_str == null) 
								{
									frm.g2.value='';
								}
							else
								{
									frm.g2.value=tmp_str;
								}

					//---- End  �ʴ������� ࡳ���Ѵ�š�ô��Թ�ҹ




					//---- Start   �ʴ������� ���ѹ�֡


								tmp_g1 = frm.g1.value;
								tmp_g1 = tmp_g1.replace(".","_");  // 1 �ش  replace ����Шش
								tmp_g1 = tmp_g1.replace(".","_");  // 2  �ش
								tmp_g1 = tmp_g1.replace(".","_");  // 3  �ش

			<?
								echo '   tmp_g1valtmp = "typeof('.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+") != \'undefined\' ";   ';  // �� check  ��ҵ���ù���ա�����ҧ����������
			?>

								if ( eval(tmp_g1valtmp) )  // ������դ�� (������� True) 
									{
			<?
											echo '  tmp_g1_val = "'.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1;   ';
			?>

												tmp_str = eval(tmp_g1_val);

												tmp_g1_val_split = tmp_str.split("|");

												d1 = tmp_g1_val_split[0];
												d2 = tmp_g1_val_split[1];
												d3 = tmp_g1_val_split[2];
												d4 = tmp_g1_val_split[3];
												d5 = tmp_g1_val_split[4];
												d6 = tmp_g1_val_split[5];
												d7 = tmp_g1_val_split[6];
												d8 = tmp_g1_val_split[7];
												d9 = tmp_g1_val_split[8];
												d10 = tmp_g1_val_split[9];
												d11 = tmp_g1_val_split[10];

												if (d1 == null) 
													{
														frm.year_goal.value ='';
													}
												else
													{
														frm.year_goal.value=d1;
													}

												if (d2 == null) 
													{
														frm.month_goal.value ='';
													}
												else
													{
														frm.month_goal.value=d2;
													}

												if (d3 == null) 
													{
														frm.this_month.value ='';
													}
												else
													{
														frm.this_month.value=d3;
													}

												if (d4 == null) 
													{
														frm.success_goal.value ='';
													}
												else
													{
														frm.success_goal.value=d4;
													}

												if (d5 == null) 
													{
														frm.success_goal_2.value ='';
													}
												else
													{
														frm.success_goal_2.value=d5;
													}

												if (d6 == null) 
													{
														frm.score_level.value ='';
													}
												else
													{
														frm.score_level.value=d6;
													}

												if (d7 == null) 
													{
														frm.reason.value ='';
													}
												else
													{
														frm.reason.value=d7;
													}

												if (d8 == null) 
													{
														frm.solution.value ='';
													}
												else
													{
														frm.solution.value=d8;
													}
                                                 if (d9 == null) 
													{
														frm.withdraw.value ='';
													}
												else
													{
														frm.withdraw.value=d9;
													}
                                                  if (d10 == null) 
													{
														frm.amount.value ='';
													}
												else
													{
														frm.amount.value=d10;
													}
                                                  
												  if (d11 == null) 
													{
														frm.job_progress.value ='';
													}
												else
													{
														frm.job_progress.value=d11;
													}


									}  // END  if ( eval(tmp_g1valtmp) )  // ������դ�� (������� True) 

					//---- End   �ʴ������� ���ѹ�֡ 


				}
		//====



		//====
			function send_save()
				{
			
						if ( !Isdouble(frm.year_goal.value) )
							{
								alert("��سһ�͹������ ' ������·�駻�(�дѺ 5)  ' �繵���Ţ���...");
								frm.year_goal.focus();
							}
						else
							{
								if ( !Isdouble(frm.month_goal.value) )
									{
										alert("��سһ�͹������ ' ������������͹���� ' �繵���Ţ���...");
										frm.month_goal.focus();
									}
								else
									{
										if (frm.this_month.value == "")
										{
												alert("��سһ�͹������ ' �š�ô��Թ������� � ��͹�Ѩ�غѹ '  ��� ...");
												frm.this_month.focus();
										}
										else
										{
											if ( !Isdouble(frm.this_month.value) )
												{
													alert("��سһ�͹������ ' �š�ô��Թ������� � ��͹�Ѩ�غѹ ' �繵���Ţ���...");
													frm.this_month.focus();
												}
											else
												{
													if ( !Isdouble(frm.success_goal.value) )
														{
															alert("��سһ�͹������ ' % �����������º�Ѻ������� �����͹���� ' �繵���Ţ���...");
															frm.success_goal.focus();
														}
													else
														{
															if ( !Isdouble(frm.success_goal_2.value) )
																{
																	alert("��سһ�͹������ ' % �����������º�Ѻ������� �дѺ 5 ' �繵���Ţ���...");
																	frm.success_goal_2.focus();
																}
															else
																{
																	if ( !Isdouble(frm.score_level.value) )
																		{
																			alert("��سһ�͹������ ' ��ҡó��ṹ � ��鹻�  ' �繵���Ţ���...");
																			frm.score_level.focus();
																		}
																	else
																		{
																			if ( !Isdouble(frm.withdraw.value) )
																				{
																					alert("��سһ�͹������ ' ǧ�Թ�ԡ����  ' �繵���Ţ���...");
																					frm.withdraw.focus();
																				}
																			else
																				{
																					if ( !Isdouble(frm.amount.value) )
																						{
																							alert("��سһ�͹������ ' ǧ�Թ�����������֧��͹�����§ҹ ' �繵���Ţ���...");
																							frm.amount.focus();
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
																}
													}

										}
								}
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

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" background="images/bg22.gif" onload=year_showtopicid()>
<?include("head.php");?>

<?
// ------------------------------------   END  Dropdown list   �� �.�.    --------------------------------------

	//  ++++  Check ��͹����բ����ŵ���շ�� �ʴ� � Table tris_topic �������  �������ա��ʴ���� ����� ���������  ++++

		$sql_yr = " select year from tris_topic group by year ";
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
	            echo '<form name="frm" action = "save_volume_save.php" enctype="multipart/form-data" method = "post">';

				$tdwidth_td1 = "200";   // �������ҧ�ͧ column �����㹡���ʴ�������  column  1
				$tdwidth_td2 = "400";   // �������ҧ�ͧ column �����㹡���ʴ�������  column  2


				echo "<center>";

				echo "<font size='4' color='#0099FF'>�ѹ�֡�������ԧ����ҳ</font>";
								echo "<br><br>";

				echo "<table border=0 width='700'>";


				//-----------------------------------------------  START  dropdown list   ��  -----------------------------------------------------
				
				echo "<tr>";
						echo "<td align='left' width=".$tdwidth_td1.">";
						echo '<font size="3" face="MS Sans Serif">��Шӻ�</font>';
						echo "</td>";

						echo "<td align='left' width=".$tdwidth_td2.">";
						echo '<SELECT NAME="yr"  tabindex="1" onKeyDown=chk_enter() onchange=year_showtopicid()>';

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
						echo "<tr>";
								echo "<td align='left' width=".$tdwidth_td1.">";
								echo '<font size="3" face="MS Sans Serif">��Ǫ���Ѵ���</font>';
								echo "</td>";

								echo "<td align='left' width=".$tdwidth_td2.">";

								echo '<SELECT NAME="g1"  tabindex="3" onKeyDown=chk_enter() onchange=show_g1detail()>';
								echo '<option value="-" selected>--- select ---</option>';
								echo '</SELECT>';
								echo '</td>';
						echo "</tr>";
				//-----------------------------------------------  END  ࡳ���Ѵ�š�ô��Թ�ҹ  -----------------------------------------------------

			


				//-----------------------------------------------  START  ��������´�ͧ  ࡳ���Ѵ�š�ô��Թ�ҹ  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">���͵�Ǫ���Ѵ</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="g2" rows="3" cols="50" style="BACKGROUND-COLOR: #ffffff" readonly>';
										echo '</textarea>';
										echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  ��������´�ͧ  ࡳ���Ѵ�š�ô��Թ�ҹ  -----------------------------------------------------


				//-----------------------------------------------  START  ������·�駻�(�дѺ 5)  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">������·�駻�(�дѺ 5)</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="year_goal" maxlength="10" size="10"  tabindex="4"  onKeyDown=chk_enter()>';
                                      	echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  ������·�駻�(�дѺ 5)  -----------------------------------------------------


	//-----------------------------------------------  START  ǧ�Թ�ԡ����  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ǧ�Թ�ԡ����</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="withdraw" size="10" tabindex="5" onKeyDown=chk_enter()>';
										echo '&nbsp;<font color="red" size ="2">* (������Ѻ��Ǫ���Ѵ��������ö㹡�ú�����Ἱŧ�ع)</font>';
                                      	echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  ǧ�Թ�ԡ����  -----------------------------------------------------

				//-----------------------------------------------  START  ������������͹����  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">������������͹����</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="month_goal" maxlength="10" size="10"  tabindex="6" onKeyDown=chk_enter()>';
										echo '&nbsp;<font color="red" size ="2">* (�ҧ��Ǫ���Ѵ���������ͧ��͡)</font>';
										echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  ������������͹����  -----------------------------------------------------


				//-----------------------------------------------  START  �š�ô��Թ������� � ��͹�Ѩ�غѹ -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">��ô��Թ�ҹ����<br>� ��͹�Ѩ�غѹ</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="this_month" maxlength="10" size="10"  tabindex="7" onKeyDown=chk_enter()>';
										echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  �š�ô��Թ������� � ��͹�Ѩ�غѹ  -----------------------------------------------------


				//-----------------------------------------------  START  % �����������º�Ѻ������� �����͹���� -----------------------------------------------------
								/*echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">% �����������º�Ѻ�������<br>�����͹����</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";*/
										echo '<input type="hidden" name="success_goal" maxlength="10" size="10" onKeyDown=chk_enter()>';
										/*echo '&nbsp;&nbsp;<font color="red">* (�ҧ��Ǫ���Ѵ���������ͧ��͡)</font>';
										echo "</td>";
								echo "</tr>";*/
				//-----------------------------------------------  END  % �����������º�Ѻ������� �����͹���� -----------------------------------------------------


				//-----------------------------------------------  START  % ����������պ�Ѻ������� �дѺ 5  -----------------------------------------------------
								/*echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">% ����������պ�Ѻ������� �дѺ 5</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";*/
										echo '<input type="hidden" name="success_goal_2" maxlength="10" size="10"  onKeyDown=chk_enter()>';
										/*echo "</td>";
								echo "</tr>";*/
				//-----------------------------------------------  END  % ����������պ�Ѻ������� �дѺ 5  -----------------------------------------------------



//-----------------------------------------------  START  ǧ�Թ�����������֧ ��͹�����§ҹ  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">ǧ�Թ�����������֧ ��͹�����§ҹ</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="amount" size="10" tabindex="8" onKeyDown=chk_enter()>';
                                      	echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  ǧ�Թ�����������֧ ��͹�����§ҹ  -----------------------------------------------------


				//-----------------------------------------------  START  ��ҡó��ṹ � ��鹻�  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">��ҡó�š�ô��Թ�ҹ���»�</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="score_level" maxlength="10" size="10"  tabindex="9" onKeyDown=chk_enter()>';
										echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  ��ҡó��ṹ � ��鹻�  -----------------------------------------------------


				//-----------------------------------------------  START  ���˵ط��������ص���������  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">���˵ط��������ص���������</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="reason" rows="5" cols="50"  tabindex="10" onKeyDown=chk_enter()></textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END  ���˵ط��������ص���������  -----------------------------------------------------


				//-----------------------------------------------  START  �ʹ��Ƿҧ���  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">�ʹ��Ƿҧ���</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="solution" rows="5" cols="50"   tabindex="11" onKeyDown=chk_enter()></textarea>';
										echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  �ʹ��Ƿҧ���  -----------------------------------------------------


				//-----------------------------------------------  START  �����׺˹��  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">�����׺˹�Ңͧ�Ƿҧ���</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="job_progress" rows="5" cols="50"   tabindex="12" onKeyDown=chk_enter()></textarea>';
										echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  �����׺˹��  -----------------------------------------------------


				//-----------------------------------------------  START  �͡���Ṻ  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">�͡���Ṻ</font>';
										echo "</td>";
										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="file" name="doc" size="50" tabindex="13" disabled="ture">';

										echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  �͡���Ṻ  -----------------------------------------------------


				//-----------------------------------------------  START  ���� SAVE  -----------------------------------------------------
								echo "<tr>";
										echo "<td colspan='2' align='center'>";
										echo '<input type="button" name="save" value="�ѹ�֡" tabindex="14" onclick=send_save()>';
										echo "&nbsp;&nbsp;&nbsp;";
										echo '<input type="button" name="cancle" value="¡��ԡ"  tabindex="15" onclick=cleardata()>';
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
