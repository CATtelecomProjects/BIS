<html>

<head>
<title>��§ҹ�š�ô��Թ�ҹ�ͧ �ʷ ����ѹ�֡��͵�ŧ�����Թ�š�ô��Թ�ҹ�Ѱ����ˡԨ</title>
<meta name="generator" content="Namo WebEditor v6.0">
<meta http-equiv="content-type" content="text/html; charset=windows-874">
<script language="JavaScript">
<!--


function na_open_window(name, url, left, top, width, height, toolbar, menubar, statusbar, scrollbar, resizable)
{
  toolbar_str = toolbar ? 'yes' : 'no';
  menubar_str = menubar ? 'yes' : 'no';
  statusbar_str = statusbar ? 'yes' : 'no';
  scrollbar_str = scrollbar ? 'yes' : 'no';
  resizable_str = resizable ? 'yes' : 'no';

  cookie_str = document.cookie;
  cookie_str.toString();

  pos_start  = cookie_str.indexOf(name);
  pos_end    = cookie_str.indexOf('=', pos_start);

  cookie_name = cookie_str.substring(pos_start, pos_end);

  pos_start  = cookie_str.indexOf(name);
  pos_start  = cookie_str.indexOf('=', pos_start);
  pos_end    = cookie_str.indexOf(';', pos_start);
  
  if (pos_end <= 0) pos_end = cookie_str.length;
  cookie_val = cookie_str.substring(pos_start + 1, pos_end);
  if (cookie_name == name && cookie_val  == "done")
    return;

  window.open(url, name, 'left='+left+',top='+top+',width='+width+',height='+height+',toolbar='+toolbar_str+',menubar='+menubar_str+',status='+statusbar_str+',scrollbars='+scrollbar_str+',resizable='+resizable_str);
}


// --></script>

</head>

<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" background="images/bg22.gif">
<font size="2" face="MS Sans Serif"><br>
</font>
<?  include("./includes/head3-1.php"); ?>

<form name="frm" method = "post">

<table border = "0" cellspacing="0" width="1000" bordercolordark="white" bordercolorlight="black" style="border-collapse:collapse;">
    <tr>
        <td width="996" colspan="3" style="border-width:1; border-color:white; border-style:solid;">
            <p align="center"><b><font size="2">������§ҹ�š�ô��Թ�ҹ�ͧ �ʷ ����ѹ�֡��͵�ŧ�����Թ�š�ô��Թ�ҹ�Ѱ����ˡԨ</font></b><font size="2" face="MS Sans Serif"></font></p>
        </td>
    </tr>
    <tr>
        <td width="996" colspan="3" style="border-width:1; border-color:white; border-style:solid;">

            <p align="center"><b><font size="2">��ú����èѴ��÷�Ѿ�ҡúؤ��</font></b><font size="2" face="MS Sans Serif"></font></p>
        </td>
    </tr>
    <tr>
        <td width="140" style="border-width:1; border-color:white; border-style:solid;"><font size="2">&nbsp;</font></td>
        <td width="96" style="border-width:1; border-color:white; border-style:solid;"><font size="2">&nbsp;</font></td>
        <td width="654" style="border-width:1; border-color:white; border-style:solid;"><font size="2">&nbsp;</font></td>
    </tr>
    <tr>
        <td width="140" style="border-width:1; border-color:white; border-style:solid;"><font size="2">&nbsp;</font></td>
        <td width="96"  style="border-width:1; border-color:white; border-style:solid;" valign = "top" align = "right">
            <font size="2">��Шӻ�&nbsp;:</font>
        </td>
        <td width="654"  style="border-width:1; border-color:white; border-style:solid;">

            

<?	

	include("conora.php");


	$topic_id = '3.5'; //��� topic_id = 3.5
	$max_year = date("Y")  + 543;	

		// ��Ǩ�ͺ ����� year �١�����������
		 if (!isset($year))	 
		 {
			$selected_year =  $max_year;
			$year = substr($selected_year,2,2);				
		  } 
		 else 
		 {
			$selected_year = $year; 
		  }
	
		echo "<select name=\"year\" size=\"1\">";	
		
		for ($i = $max_year; $i > $max_year-5; $i--) 
		{
			$little_year = substr($i,2,2);
			if ($little_year==$selected_year) 
			{
			  echo "<option value=$little_year selected>$i</option>";						 
			}
			else 
			{
				echo "<option value=$little_year >$i</option>";
			}		
		}
	
	echo "</select><font size='2'>";
	echo "&nbsp;&nbsp;&nbsp; ��͹&nbsp; : ";


	 if (!isset($month))	
		 {
			   //  select  ��͹�ش���·���բ����� �ҡ table tris_operation_management
			   $sqlSelectM = "select max(month) from tris_operation_management where topic_id ='".$topic_id."' and year = '".$year."'";
			   //echo $sqlSelectM;
			  
			   $SelectM = OCIparse($db_conn,$sqlSelectM);
			   OCIExecute($SelectM);

			   while  ($nrows =ocifetch($SelectM))
			   {
					$select_month = ociresult($SelectM,1);	
					$month= $select_month;	  
			   }			
		}
		else 
		{
		  $select_month=$month;
		}
		


			//Simple way		
			$m1_selected="";
			$m2_selected="";
			$m3_selected="";
			$m4_selected="";
			$m5_selected="";
			$m6_selected="";
			$m7_selected="";
			$m8_selected="";
			$m9_selected="";
			$m10_selected="";
			$m11_selected="";
			$m12_selected="";		    					


				switch($select_month)
				{
					case "1" ;
							$m1_selected = "selected";break;							 
					case "2";
							 $m2_selected = "selected";break;							 
					case "3";
							 $m3_selected = "selected";break;							 
					case "4";
							 $m4_selected = "selected";break;							 
					case "5";
							 $m5_selected = "selected";break;							 
					case "6";
							 $m6_selected = "selected";break;							 
					case "7";
							 $m7_selected = "selected";break;							 
					case "8";
							 $m8_selected = "selected";break;							 
					case "9";
							 $m9_selected = "selected";break;							 
					case "10";
							 $m1_selected = "selected";break;							 
					case "11";
							 $m11_selected = "selected";break;							 
					case "12";
							 $m12_selected = "selected";break;							 
				}				




?>
				<select name="month" size="1">';		
					<option value="01" <?=$m1_selected?>>���Ҥ�</option>
					<option value="02" <?=$m2_selected?>>����Ҿѹ��</option>
					<option value="03" <?= $m3_selected ?>>�չҤ�</option>
					<option value="04" <?=$m4_selected?>>����¹</option>
					<option value="05" <?=$m5_selected?>>����Ҥ�</option>
					<option value="06" <?=$m6_selected?>>�Զع�¹</option>
					<option value="07" <?=$m7_selected?>>�á�Ҥ�</option>
					<option value="08" <?=$m8_selected?>>�ԧ�Ҥ�</option>
					<option value="09" <?=$m9_selected?>>�ѹ��¹</option>
					<option value="10" <?=$m10_selected?>>���Ҥ�</option>
					<option value="11" <?=$m11_selected?>>��Ȩԡ�¹</option>
					<option value="12" <?=$m12_selected?>>�ѹ�Ҥ�</option>
				</select>
			&nbsp;&nbsp;&nbsp;<input type="submit" name="search" value="����"></td>
        </tr>
 

	    <tr>
        <td width="340" style="border-width:1; border-color:white; border-style:solid;"><font size="2" face="MS Sans Serif">&nbsp;</font></td>
        <td width="96" style="border-width:1; border-color:white; border-style:solid;"><font size="2" face="MS Sans Serif">&nbsp;</font></td>
        <td width="454" style="border-width:1; border-color:white; border-style:solid;">
	<font size="2" face="MS Sans Serif">&nbsp;</font>        </td>
    </tr>
    <tr>
        <td width="1000" colspan="3" >

            <table border="1" width="995">
                <tr>
                    <td width="500" colspan="2" bgcolor="#0066FF">
                        <p align="center"><b><font size="2" face="MS Sans Serif" color="white">ࡳ���Ѵ�š�ô��Թ�ҹ</font></b><font size="2" face="MS Sans Serif"></font></p>
                    </td>
                    <td width="250"  bgcolor="#0066FF">
                        <p align="center"><b><font size="2" face="MS Sans Serif" color="white">�����׺˹�ҡ�ô��Թ��� (�ҡ�շ���ҹ��)</font></b><font size="2" face="MS Sans Serif"></font></p>
                    </td>
		            <td width="250" bgcolor="#0066FF">
                        <p align="center"><b><font size="2" face="MS Sans Serif" color="white">�ѭ��/�ػ��ä �ʹ��Ƿҧ���</font></b></p>
                    </td>
		</tr>


<?


		if ($year	== "" and $month =="") //������ա�����͡��͹ ���������
		{		
			echo '<font size="2" face="MS Sans Serif"><b>��س����͡�������͹����ͧ���</font></b>';

		}
		else
		{		

			//////////////////����繡�þԨ�ó�

			$old_subtopic ='';

			//create View ������ join table 
			$sql_view = "create or replace view v_tris_operation_management as (select *  from tris_operation_management where  year='".$year."'";
			$sql_view = $sql_view." and month='".$month."' and  topic_id = '".$topic_id."')";

			//echo $sql_view;

			$create_view = OCIparse($db_conn,$sql_view);
			OCIExecute($create_view);

			
			//join Table
			$sql = "select g.topic_id, g.subtopic_id, g.subtopic_name, g.goal,o.operation_goal, o.operation_level,o.reason, o.solution, o.progress ";
			$sql = $sql." from v_tris_operation_management o,tris_topic_group3 g where  g.subtopic_id =o.subtopic_id(+) and g.topic_id = o.topic_id(+) and "; 
			$sql = $sql." g.topic_id = '".$topic_id."' and g.year = '".$year."'";
			$sql = $sql." order by g.subtopic_id ";

			//echo $sql;
			
			// �Ѻ rows 
			$cnt = OCIparse($db_conn,$sql);
			OCIExecute($cnt);
			$cntrow = OCIFetchstatement($cnt,$result);

			if ($cntrow > 0)  //  �礨ӹǹ rows ����բ�����������
			{
				$data = OCIparse($db_conn,$sql);
                OCIExecute($data);


						while ($row = ocifetch($data)) // ǹ��� ���� Record
								{																		
										$topic_id = ociresult($data,1);
										$subtopic_id = ociresult($data,2);
										$subtopic_name = ociresult($data,3);
										$goal = ociresult($data,4);
										$operation_goal = ociresult($data,5);
										$operation_level = ociresult($data,6);
										$reason = ociresult($data,7);
										$solution = ociresult($data,8);		
										$progress = ociresult($data,9);
										$file = "show_detail.php?reason=".$reason."&solution=".$solution;  //�觤�� reason �Ѻ solution ��ʴ�� popup window

										switch (substr($subtopic_id,0,1))   // �ʴ� Header
											{
												case "1" ;
														$header  = "����繷�� 1 : ��º����С��ط���ҹ��Ѿ�ҡ�";														
														break;														
												case "2";
														$header  = "����繷�� 2 : ������к�㹡�ú����÷�Ѿ�ҡúؤ��";
														break;																								
												case "3";												
														$header  = "����繷�� 3 : ������ç���ҧ��鹰ҹʹѺʹع�к���ú����÷�Ѿ�ҡúؤ��";	
														break;
												case "4";												
														$header  = "����繷�� 4";	
														break;
												case "5";												
														$header  = "����繷�� 5";	
														break;
												case "6";												
														$header  = "����繷�� 6";	
														break;
																		
											} //end switch
																						
											if ($progress == null)
											{
												$progress = "&nbsp;";
											}
											else
											{
												$progress = $progress;
											}

											if ($solution == null)
											{
												$solution = "&nbsp;";
											}
											else
											{
												$solution = $solution;
											}
					
											if  ($old_subtopic != substr($subtopic_id,0,1)) // �ʴ������ŵ�� subtopic_id
											{
													echo '<tr><td width="500" colspan="4" bgcolor="#99CCFF"><b><font size="2" face="MS Sans Serif">'.$header;
													echo '</font></b><font size="2" face="MS Sans Serif"></font></td>';
													echo '<tr>';
													echo '<td width="30"  valign="top" bgcolor="#CCCC99"><font size="2" face="MS Sans Serif">'.$subtopic_id.'</font></td>';
													echo '<td width="470" valign="top" bgcolor="#FFFFCC" ><font size="2" face="MS Sans Serif">'.$subtopic_name.'</font></td>';
													echo '<td width="250" valign="top" bgcolor="#CCFFCC"><font size="2" face="MS Sans Serif">'.$progress.'</font></td>';										
													echo '<td width="250" valign="top" bgcolor="#FFDDFF"> <font size="2" face="MS Sans Serif">'.$solution.' </font> </td></tr>';
													$old_subtopic = substr($subtopic_id,0,1);
									
											}
												else
											{
												//�ʴ���������´

												echo '<tr><td width="30" valign="top" bgcolor="#CCCC99"><font size="2" face="MS Sans Serif">'.$subtopic_id.'</font></td>';
												echo '<td width="470" valign="top" bgcolor="#FFFFCC"><font size="2" face="MS Sans Serif">'.$subtopic_name.'</font></td>';
												echo '<td width="250" valign="top" bgcolor="#CCFFCC"><font size="2" face="MS Sans Serif">'.$progress.'</font></td>';
												echo '<td width="250" valign="top" bgcolor="#FFDDFF"> <font size="2" face="MS Sans Serif">'.$solution.' </font> </td></tr>';
											}


								} //end while ($row = ocifetch($data))
			}
			else
			{
					echo '<tr><td width="1000"   colspan="2"  bgcolor="#99CCFF" style="border-width:1; border-color:black; border-style:solid;"><b><font size="2" face="MS Sans Serif">����繡�þԨ�óҷ�� 1 ��º����С��ط���ҹ��Ѿ�ҡ�';
					echo '</font></b><font size="2" face="MS Sans Serif"></font></td>';
					echo '<td width="200" bgcolor="#99CCFF" style="border-width:1; border-color:black; border-style:solid;"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
					echo '<td width="200" bgcolor="#99CCFF" style="border-width:1; border-color:black; border-style:solid;"><font size="2" face="MS Sans Serif">&nbsp;</font></td></tr>';

					echo '<tr><td width="1000" colspan="2"  bgcolor="#99CCFF" style="border-width:1; border-color:black; border-style:solid;"><b><font size="2" face="MS Sans Serif">����繡�þԨ�óҷ�� 2 ������к�㹡�ú����÷�Ѿ�ҡúؤ��';
					echo '</font></b><font size="2" face="MS Sans Serif"></font></td>';
					echo '<td width="200" bgcolor="#99CCFF" style="border-width:1; border-color:black; border-style:solid;"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
					echo '<td width="200" bgcolor="#99CCFF" style="border-width:1; border-color:black; border-style:solid;"><font size="2" face="MS Sans Serif">&nbsp;</font></td></tr>';
					echo '<tr><td width="1000" colspan="2"  bgcolor="#99CCFF" style="border-width:1; border-color:black; border-style:solid;"><b><font size="2" face="MS Sans Serif">����繡�þԨ�óҷ�� 3 ������ç���ҧ��鹰ҹʹѺʹع�к���ú����÷�Ѿ�ҡúؤ��';
					echo '</font></b><font size="2" face="MS Sans Serif"></font></td>';
					echo '<td width="200" bgcolor="#99CCFF" style="border-width:1; border-color:black; border-style:solid;"><font size="2" face="MS Sans Serif">&nbsp;</font></td>';
					echo '<td width="200" bgcolor="#99CCFF" style="border-width:1; border-color:black; border-style:solid;"><font size="2" face="MS Sans Serif">&nbsp;</font></td></tr>';
					echo '<tr><td width="1000"   style="border-width:1; border-color:black; border-style:solid;"><b><font size="2" face="MS Sans Serif">';
					echo '</font></b><font size="2" face="MS Sans Serif"></font></td></tr>';

			} //end if (cntrow>0)

			
			/*
						//select ������� View  V_TRIS_OPERATION_MANAGEMENT �������  ����ը� drop view ���
						$sql = "select * from all_views  where view_name = 'V_TRIS_OPERATION_MANAGEMENT'";

						// �Ѻ rows 
						$cnt = OCIparse($db_conn,$sql);
						OCIExecute($cnt);
						$cntrow = OCIFetchstatement($cnt,$result);

						if ($cntrow > 0)  //  �礨ӹǹ rows ����բ������������
						{
							//drop View 
							$sql_dropview = "drop view  v_tris_operation_management";
							$drop_view = OCIparse($db_conn,$sql_dropview);
							OCIExecute($drop_view);
						}

			*/
	

		}  //end if  �ա�����͡�������͹�������




OCILogoff($db_conn);



?>


            </table>
        </td>
    </tr>
	</form>
</table>
<br>
<br>
</body>

</html>