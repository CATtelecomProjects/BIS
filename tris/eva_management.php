<?
session_start();
$desc = $_SESSION['desc'];
$emp=$_SESSION['userid'] ;
 if (($emp<>'354277')&&($emp<>'233356')&&($emp<>'226143'))
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


?>


<html>

<head>
<title>�к���§ҹ�š�ô��Թ�ҹ�ͧ �ʷ ����ѹ�֡��͵�ŧ�����Թ�š�ô��Թ�ҹ�Ѱ����ˡԨ</title>
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

		//+++++++ start +++++++++   ������  topic_id ������ �ͧ����л�   +++++++++++++++++++++++++++++++++++++++++++
			$sql = " select year , topic_id ";
			$sql = $sql." from tris_topic ";
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


		//+++++++ start +++++++++   ��Ǫ���Ѵ��� +++++++++++++++++++++++++++++++++++++++++++

			$sql = " select * ";
			$sql = $sql." from tris_topic ";
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
							$criteriatype = ociresult($parse_sql,4);

							$topicid = str_replace(".","_",$topic_id);

							echo "T_".$yrr."Z".$topicid." = '".$topic_name."|".$criteriatype."'; ";
						}
			}
		
		//+++++++ end +++++++++   ��Ǫ���Ѵ��� +++++++++++++++++++++++++++++++++++++++++++


		//+++++++ Start +++++++  ������ tris_operation_quality_tot +++++++ criteria_type = 1+++++++++++++++++++
		$sql = " select a.year  ";
		$sql = $sql." , a.month ";
		$sql = $sql." , a.topic_id   ";
		$sql = $sql." , a.score_level  ";
		$sql = $sql." , a.year_predict   ";
		$sql = $sql." , a.emp_id   ";
		$sql = $sql." , b.criteria_type , c.flag_hot ";
		$sql = $sql." from tris_operation_quality_tot a  ,  tris_topic b , tris_topic_detail c ";
		$sql = $sql." where a.year = b.year  ";
		$sql = $sql." and a.topic_id = b.topic_id  ";
		$sql = $sql." and emp_id = '".$emp_id."' and a.topic_id = c.topic_id and a.year = c.year and a.month = c.month  ";


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
							$score_level = ociresult($parse_sql,4);
							$year_predict = ociresult($parse_sql,5);
							$empid = ociresult($parse_sql,6);
							$criteriatype = ociresult($parse_sql,7);
							$flag_hot = ociresult($parse_sql,8);

							$topicid = str_replace(".","_",$topic_id);
							echo $emp_id."_".$yyr."_".$mmn."Z".$topicid."C".$criteriatype." = '".$score_level."|".$year_predict."|".$flag_hot."'; ";
						}
			}
		//+++++++ END +++++++  ������ tris_operation_quality_tot +++++++ criteria_type = 1+++++++++++++++++++


		//+++++++ Start +++++++  ������ tris_operation_volume +++++++ criteria_type = 2+++++++++++++++++++

		$sql = " select a.year  ";
		$sql = $sql." , a.month   ";
		$sql = $sql." , a.topic_id  ";
		$sql = $sql." , a.year_predict  ";
		$sql = $sql." , a.emp_id  ";
        $sql = $sql." , a.year_predict_user  ";
		$sql = $sql." , b.criteria_type , c.flag_hot ";
		$sql = $sql." from tris_operation_volume a  ,  tris_topic b, tris_topic_detail c   ";
		$sql = $sql." where a.year = b.year  ";
		$sql = $sql." and a.topic_id = b.topic_id  ";
		$sql = $sql." and emp_id = '".$emp_id."' and a.topic_id = c.topic_id and a.year = c.year and a.month = c.month ";

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
							$year_predict = ociresult($parse_sql,4);
							$empid = ociresult($parse_sql,5);
							$year_predict_user = ociresult($parse_sql,6);
							$criteriatype = ociresult($parse_sql,7);
							$flag_hot = ociresult($parse_sql,8);

							$topicid = str_replace(".","_",$topic_id);
							echo $emp_id."_".$yyr."_".$mmn."Z".$topicid."C".$criteriatype." = '".$year_predict."|".$year_predict_user."|".$flag_hot."'; ";
						}
			}

		//+++++++ END +++++++  ������ tris_operation_volume +++++++ criteria_type = 2+++++++++++++++++++


		//+++++++ Start +++++++  ������ tris_operation_management_tot +++++++ criteria_type = 3+++++++++++++++++++

		$sql = " select a.year  ";
		$sql = $sql." , a.month ";
		$sql = $sql." , a.topic_id   ";
		$sql = $sql." , a.total_level   ";
		$sql = $sql." , a.emp_id   ";
		$sql = $sql." , b.criteria_type, c.flag_hot  ";
		$sql = $sql." from tris_operation_management_tot a  ,  tris_topic b, tris_topic_detail c   ";
		$sql = $sql." where a.year = b.year  ";
		$sql = $sql." and a.topic_id = b.topic_id  ";
		$sql = $sql." and emp_id = '".$emp_id."'  and a.topic_id = c.topic_id and a.year = c.year and a.month = c.month ";

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
							$total_level = ociresult($parse_sql,4);
							$empid = ociresult($parse_sql,5);
							$criteriatype = ociresult($parse_sql,6);
							$flag_hot = ociresult($parse_sql,7);

							$topicid = str_replace(".","_",$topic_id);
							echo $emp_id."_".$yyr."_".$mmn."Z".$topicid."C".$criteriatype." = '".$total_level."|".$flag_hot."'; ";
						}
			}
		
		//+++++++ END +++++++  ������ tris_operation_management_tot +++++++ criteria_type = 3+++++++++++++++++++




//-----------------  Select ��Ң����ŷ����������  ����� JavaScript ��͹

	?>	

		//=== clear data
				function cleardata()
					{
							frm.totallevel.value='';
							frm.year_predict.value ='';
							frm.year_predict_user.value ='';
							document.getElementById("hot").checked=false;
					}
		//===




		//====
			function show_g1detail()
				{
							frm.totallevel.value='';
							frm.year_predict.value ='';
							frm.year_predict_user.value ='';

// ==  ��� topic_id ��ҡѺ  3.1 , 3.2 , 3.3.1, 3.3.2 , 3.4 , 3.5  �����������͡���Ṻ�ӧҹ
						
									frm.doc.disabled = false;
						// ==

					//---- Start �ʴ������� ࡳ���Ѵ�š�ô��Թ�ҹ
							tmp_g1 = frm.g1.value;
							tmp_g1 = tmp_g1.replace(".","_");  // 1 �ش  replace ����Шش
							tmp_g1 = tmp_g1.replace(".","_");  // 2  �ش
							tmp_g1 = tmp_g1.replace(".","_");  // 3  �ش

							tmp_g1_val = "T_"+frm.yr.value+"Z"+tmp_g1;

							tmp_str = eval(tmp_g1_val);
							tmp_g1_val_split = tmp_str.split("|");

							dt1 = tmp_g1_val_split[0];  // topic_name
							dt2 = tmp_g1_val_split[1];  // criteria_type
							dt3 = tmp_g1_val_split[2];  // flag_hot

							if (tmp_str == null) 
								{
									frm.g2.value='';
								}
							else
								{
									frm.g2.value=dt1;
								}

								frm.criteriatype.value = dt2;  //  �纤�� criteria_type ŧ����� text Ẻ hidden �����觤���

					//---- End  �ʴ������� ࡳ���Ѵ�š�ô��Թ�ҹ




					//------ Start  ���  Criteria type  �繵��  '3'  ����  '1'   ����ʴ���ҵ�����   �ҡ�����  dt2
						switch (dt2) 
							{
								case "1":   // criteria_type = 1
											//---- Start   �ʴ������� ���ѹ�֡ ( tris_operation_quality_tot )

													frm.totallevel.disabled=false;
													frm.year_predict.disabled=false;
													document.getElementById("hot").checked=false;		
													//frm.year_predict_user.disabled=true;
													tmp_g1 = frm.g1.value;
													tmp_g1 = tmp_g1.replace(".","_");  // 1 �ش  replace ����Шش
													tmp_g1 = tmp_g1.replace(".","_");  // 2  �ش
													tmp_g1 = tmp_g1.replace(".","_");  // 3  �ش

								<?
													echo '   tmp_g1valtmp = "typeof('.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2+") != \'undefined\' ";   ';  // �� check  ��ҵ���ù���ա�����ҧ����������
								?>

													if ( eval(tmp_g1valtmp) )  // ������դ�� (������� True) 
													{
														<?
																echo '  tmp_g1_val = "'.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2;   ';
														?>

																tmp_str = eval(tmp_g1_val);

																tmp_g1_val_split = tmp_str.split("|");

																d1 = tmp_g1_val_split[0];
																d2 = tmp_g1_val_split[1];
																d3 = tmp_g1_val_split[2];


																if (d1 == null) 
																	{
																		frm.totallevel.value='';
																	}
																else
																	{
																		frm.totallevel.value=d1;
																	}

																if (d2 == null) 
																	{
																		frm.year_predict.value ='';
																	}
																else
																	{
																		frm.year_predict.value=d2;
																	}
													
																if (d3 == null) 
																{														
																		document.getElementById("hot").checked=false;		
																}
																else
																{
																	if (d3 == 0)
																	{
																		document.getElementById("hot").checked=false;		
																	}
																	else if (d3 == 1)
																	{
																		document.getElementById("hot").checked=true;
																	}
																}					


													}  // END  if ( eval(tmp_g1valtmp) )  // ������դ�� (������� True) 
													break;
										//---- END   �ʴ������� ���ѹ�֡ ( tris_operation_quality_tot )

								case "2":  // criteria_type = 2
											//---- Start   �ʴ������� ���ѹ�֡ ( tris_operation_volume  )

													frm.totallevel.disabled=true;
													frm.year_predict.disabled=false;
													document.getElementById("hot").checked=false;		
													tmp_g1 = frm.g1.value;
													tmp_g1 = tmp_g1.replace(".","_");  // 1 �ش  replace ����Шش
													tmp_g1 = tmp_g1.replace(".","_");  // 2  �ش
													tmp_g1 = tmp_g1.replace(".","_");  // 3  �ش

								<?
													echo '   tmp_g1valtmp = "typeof('.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2+") != \'undefined\' ";   ';  // �� check  ��ҵ���ù���ա�����ҧ����������
								?>

													if ( eval(tmp_g1valtmp) )  // ������դ�� (������� True) 
													{
														<?
																echo '  tmp_g1_val = "'.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2;   ';
														?>

																tmp_str = eval(tmp_g1_val);

																tmp_g1_val_split = tmp_str.split("|");

																d1 = tmp_g1_val_split[0];
																d2 = tmp_g1_val_split[1];
																d3 = tmp_g1_val_split[2];

																if (d1 == null) 
																	{
																		frm.year_predict.value='';
																	}
																else
																	{
																		frm.year_predict.value=d1;
																	}

																if (d2 == null) 
																	{
																		frm.year_predict_user.value ='';
																	}
																else
																	{
																		frm.year_predict_user.value=d2;
																	}
																if (d3 == null) 
																{
																		document.getElementById("hot").checked=false;		
																}
																else
																{
																	if (d3 == 0)
																	{
																		document.getElementById("hot").checked=false;		
																	}
																	else if (d3 == 1)
																	{
																		document.getElementById("hot").checked=true;
																	}
																}				
	

/*

																if (tmp_str == null) 
																	{
																		frm.year_predict.value ='';
																	}
																else
																	{
																		frm.year_predict.value=tmp_str;
																	}
*/
													}  // END  if ( eval(tmp_g1valtmp) )  // ������դ�� (������� True) 
													break;
											//---- END   �ʴ������� ���ѹ�֡ ( tris_operation_volume  )

								case "3":   // criteria_type = 3
											//---- Start   �ʴ������� ���ѹ�֡ ( tris_operation_management_tot  )
													document.getElementById("hot").checked=false;		
													frm.totallevel.disabled=true;
													frm.year_predict.disabled=false;
												//	frm.year_predict_user.disabled=true;
													tmp_g1 = frm.g1.value;
													tmp_g1 = tmp_g1.replace(".","_");  // 1 �ش  replace ����Шش
													tmp_g1 = tmp_g1.replace(".","_");  // 2  �ش
													tmp_g1 = tmp_g1.replace(".","_");  // 3  �ش

								<?
													echo '   tmp_g1valtmp = "typeof('.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2+") != \'undefined\' ";   ';  // �� check  ��ҵ���ù���ա�����ҧ����������
								?>

													if ( eval(tmp_g1valtmp) )  // ������դ�� (������� True) 
													{
														<?
																echo '  tmp_g1_val = "'.$emp_id.'_"+frm.yr.value+"_"+frm.mn.value+"Z"+tmp_g1+"C"+dt2;   ';
														?>

																tmp_str = eval(tmp_g1_val);
																tmp_g1_val_split = tmp_str.split("|");
																d1 = tmp_g1_val_split[0];
																d2 = tmp_g1_val_split[1];

																if (d1 == null) 
																	{
																		frm.year_predict.value='';
																	}
																else
																	{
																		frm.year_predict.value=d1;
																	}

																if (d2 == null) 
																{
																		document.getElementById("hot").checked=false;		
																}
																else
																{
																	if (d2 == 0)
																	{
																		document.getElementById("hot").checked=false;		
																	}
																	else if (d2 == 1)
																	{
																		document.getElementById("hot").checked=true;
																	}
																}		
													}  // END  if ( eval(tmp_g1valtmp) )  // ������դ�� (������� True) 
													break;
											//---- End   �ʴ������� ���ѹ�֡  ( tris_operation_management_tot )

								default: 
										alert('��辺 Criteria type ��� !!  (��س������˹�ҷ��������к�)');
							}
					//------ End  ���  Criteria type  �繵��  '3'  ����  '1'   ����ʴ���ҵ�����






				}
		//====



		//====
			function send_save()
				{
					
						if ( !Isdouble(frm.totallevel.value) )
							{
									alert("��سһ�͹������ ' �дѺ��ṹ � ��͹�����§ҹ ' �繵���Ţ���...");
									frm.totallevel.focus();
							}
						else
							{
								if ( !Isdouble(frm.year_predict.value) )
									{
											alert("��سһ�͹������ ' �дѺ��ṹ��ҡó���»�  ' �繵���Ţ���...");
											frm.year_predict.focus();
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
	            echo '<form name="frm" action = "eva_management_save.php" enctype="multipart/form-data" method = "post">';

				$tdwidth_td1 = "200";   // �������ҧ�ͧ column �����㹡���ʴ�������  column  1
				$tdwidth_td2 = "400";   // �������ҧ�ͧ column �����㹡���ʴ�������  column  2


				echo "<center>";

				echo "<font size='4' color='#0099FF'>�ѹ�֡��û����Թ�ž�ҡó�ء��Ǫ���Ѵ</font>";
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





				//-----------------------------------------------  START  ��Ǫ���Ѵ���  -----------------------------------------------------
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
				//-----------------------------------------------  END  ��Ǫ���Ѵ���  -----------------------------------------------------

			
				//----------- Hidden field  �ͧ  criteria_type  ����ͧ��仴���  ��㹡�� SAVE ŧ 2 table ��� criteria_type ������ ----------------
						echo '<INPUT TYPE="hidden" NAME="criteriatype" value="'.$criteriatype.'">';
				//---------


				//-----------------------------------------------  START  ���͵�Ǫ���Ѵ  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">���͵�Ǫ���Ѵ</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<textarea name="g2" rows="3" cols="50" style="BACKGROUND-COLOR: #ffffff" readonly>';
										echo '</textarea>';
										echo "</td>";

								echo "</tr>";
				//-----------------------------------------------  END ���͵�Ǫ���Ѵ-----------------------------------------------------


				//-----------------------------------------------  START  ��ṹ���  -----------------------------------------------------
								/*echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">��ṹ���</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";*/
										echo '<input type="hidden" name="totaloperation_goal" maxlength="5" size="5"  tabindex="4"  onKeyDown=chk_enter()>';
									/*	echo "</td>";

								echo "</tr>";*/
				//-----------------------------------------------  END  ��ṹ���  -----------------------------------------------------


				//-----------------------------------------------  START  �дѺ��ṹ -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">�дѺ��ṹ � ��͹�����§ҹ</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="totallevel" maxlength="6" size="6"  tabindex="5" onKeyDown=chk_enter()>';
										echo '&nbsp;<font color="red" size ="2">* (੾�Т������ԧ�س�Ҿ��ҹ��)</font>';
										echo "</td>";

								echo "</tr>";
								
				//-----------------------------------------------  END  �дѺ��ṹ -----------------------------------------------------


				//-----------------------------------------------  START  ��ҡó�š�ô��Թ�ҹ���»� --------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">��ҡó�š�ô��Թ�ҹ���»�</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="year_predict" maxlength="6" size="6"  tabindex="6" onKeyDown=chk_enter()>';
										echo "</td>";

								echo "</tr>";
								
				//-----------------------------------------------  END  ��ҡó�š�ô��Թ�ҹ���»� -----------------------------------


	//-----------------------------------------------  START  �дѺ��ṹ��ҡó���»� --------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">�дѺ��ṹ��ҡó���»�</font>';
										echo "</td>";

										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="text" name="year_predict_user" maxlength="6" size="6"  tabindex="6" onKeyDown=chk_enter() readonly>';
										echo '&nbsp;<font color="red" size ="2">* (੾�Т������ԧ����ҳ ���ʴ�������͡������ѹ�֡����)</font>';
										echo "</td>";

								echo "</tr>";
								
				//-----------------------------------------------  END  �дѺ��ṹ��ҡó���»� -----------------------------------


//-----------------------------------------------  START  �͡���Ṻ  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">�͡���Ṻ</font>';
										echo "</td>";
										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="file" name="doc" size="50" disabled="ture">';

										echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  �͡���Ṻ  -----------------------------------------------------


	//-----------------------------------------------  START  ��˹� HOT  -----------------------------------------------------
								echo "<tr>";
										echo "<td align='left' width=".$tdwidth_td1.">";
										echo '<font size="3" face="MS Sans Serif">��˹��ѭ�ѡɳ�</font>';
										echo "</td>";
										echo "<td align='left' width=".$tdwidth_td2.">";
										echo '<input type="checkbox" name="hot" value="1"><img src="images/icon_hot.gif"  border="0">';
										echo "</td>";
								echo "</tr>";
				//-----------------------------------------------  END  HOT  -----------------------------------------------------

				//-----------------------------------------------  START  ���� SAVE  -----------------------------------------------------
								echo "<tr>";
										echo "<td > </td>";
										echo "<td>";
										echo '<input type="button" name="save" value="�ѹ�֡" tabindex="8" onclick=send_save()>';
										echo "&nbsp;";
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
