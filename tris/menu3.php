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

 if (($emp<>'354277')&&($emp<>'233356')&&($emp<>'226143')&&($emp<>'171450')&&($emp<>'180289')&&($emp<>'312031')
		&&($emp<>'323648')&&($emp<>'172792')&&($emp<>'275615')&&($emp<>'232496')&&($emp<>'293448')&&($emp<>'351759'))
		{?>
                            <script language = "javascript">
							alert("�س������Է�������Һѹ�֡�����š�ú����èѴ��ùФ�") ;
					        window.location = "http://bis.cattelecom.com/tris/index.php";
			               </script>
	<?	}
?>
<html>

<head>
<title>�ѹ�֡�������ԧ�����èѴ���</title>
<meta name="generator" content="Namo WebEditor v6.0">
<meta http-equiv="content-type" content="text/html; charset=windows-874">
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body bgcolor="white" text="black" link="blue" vlink="#8000FF" alink="red" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0">
<center>
<?  include("head.php"); ?>
<br>&nbsp;
    <table border="0" width="626">
        <tr>
            <td width="620" colspan="3">

                <p align="center"><b><font size="3" face="MS Sans Serif" color="#0099FF">�ѹ�֡�������ԧ�����èѴ���</font></b></p>
            </td>
        </tr>
        <tr>
            <td width="211" bgcolor="#EFEFEF">
        <? if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='171450'))
		{
                echo '<p align="center"><a href="save3_1.php" title="�ѹ�֡������ ���� ������"><img src="images/head_shot5.jpg" width="211" height="160" border="0"></a></p>';
		}
		    else
			{
               echo '<p align="center"><img src="images/head_shot5.jpg" width="211" height="160" border="0"></p>';
			}
			?>
            </td>
            <td width="211" bgcolor="#EFEFEF">
           <? if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='180289'))
		{
              echo  '<p align="center"><a href="save3_2.php" title="�ѹ�֡������ ���� ������"><img src="images/head_shot5c.jpg" width="211" height="160" border="0"></a></p>';
		}
		   else
		   {
			 echo  '<p align="center"><img src="images/head_shot5c.jpg" width="211" height="160" border="0"></p>';
		   }
		   ?>
            </td>
            <td width="190" bgcolor="#EFEFEF">
<? if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='312031')||($emp=='293448'))
		{
            echo   '<p align="center"><a href="save3_3_1.php" title="�ѹ�֡������ ���� ������"><img src="images/head_shot3.jpg" width="211" height="160" border="0"></a></p>';
		}
		else
		{
			echo   '<p align="center"><img src="images/head_shot3.jpg" width="211" height="160" border="0"></p>';
		}
		?>
            </td>
        </tr>
        <tr>
            <td width="211">
              <? if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='171450'))
		{
				echo '<p align="center"><font size="2" face="MS Sans Serif"><a href="save3_1.php" title="�ѹ�֡������ ���� ������">3.1���ҷ�ͧ��С�������Ѱ����ˡԨ</a></font></p>';
		}
		else
		{
			echo '<p align="center"><font size="2" face="MS Sans Serif">3.1���ҷ�ͧ��С�������Ѱ����ˡԨ</font></p>';
		}
		?>
            </td>
            <td width="211">
               <? if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='180289'))
		{
				echo '<p align="center"><font size="2" face="MS Sans Serif"><a href="save3_2.php" title="�ѹ�֡������ ���� ������">3.2&nbsp; ��ú����ä�������§</a></font></p>';
		}
		else
		{
                 echo '<p align="center"><font size="2" face="MS Sans Serif">3.2&nbsp; ��ú����ä�������§</font></p>';
		}
		?>
            </td>
            <td width="190">
              <? if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='312031')||($emp=='293448'))
		{
				echo '<p align="center"><font size="2" face="MS Sans Serif"><a href="save3_3_1.php" title="�ѹ�֡������ ���� ������">3.3.1 ��äǺ�������</a></font></p>';
		}
		else
		{
				echo '<p align="center"><font size="2" face="MS Sans Serif">3.3.1 ��äǺ�������</font></p>';
		}
		?>
            </td>
        </tr>
        <tr>
            <td width="211" bgcolor="#EFEFEF">
     <?  if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='312031')||($emp=='293448'))
		{
                echo '<p align="center"><a href="save3_3_2.php" title="�ѹ�֡������ ���� ������"><img src="images/head_shot6.jpg" width="211" height="160" border="0"></a></p>';
		}
		else
		{
				echo '<p align="center"><img src="images/head_shot6.jpg" width="211" height="160" border="0"></p>';
		}
		?>
            </td>
            <td width="211" bgcolor="#EFEFEF">
		<?  if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='323648')||($emp=='351759'))
		{
              echo  '<p align="center"><a href="save3_4.php" title="�ѹ�֡������ ���� ������"><img src="images/head_shot3c.jpg" width="211" height="160" border="0"></a></p>';
		}
		else
		{
           echo  '<p align="center"><img src="images/head_shot3c.jpg" width="211" height="160" border="0"></p>';
		}
		?>
            </td>
            <td width="190" bgcolor="#EFEFEF">
     <?  if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='172792')||($emp=='275615')||($emp=='232496'))
		{
                echo '<p align="center"><a href="save3_5.php" title="�ѹ�֡������ ���� ������"><img src="images/head_shot4.jpg" width="211" height="160" border="0"></a></p>';
		}
		else
		{
				echo '<p align="center"><img src="images/head_shot4.jpg" width="211" height="160" border="0"></p>';
		}
		?>
            </td>
        </tr>
        <tr>
            <td width="211">
			<?  if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='312031')||($emp=='293448'))
		{
                echo '<p align="center"><font size="2" face="MS Sans Serif"><a href="save3_3_2.php" title="�ѹ�֡������ ���� ������">3.3.2 ��õ�Ǩ�ͺ����</a></font></p>';
		}
		else
		{
			echo '<p align="center"><font size="2" face="MS Sans Serif">3.3.2 ��õ�Ǩ�ͺ����</font></p>';
		}
		?>
            </td>
            <td width="211">
                <?  if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='323648')||($emp=='351759'))
		{
				echo '<p align="center"><font size="2" face="MS Sans Serif"><a href="save3_4.php" title="�ѹ�֡������ ���� ������">3.4 ��ú����èѴ������ʹ��</a></font></p>';
		}
		else
		{
			echo '<p align="center"><font size="2" face="MS Sans Serif">3.4 ��ú����èѴ������ʹ��</font></p>';
		}
		?>
            </td>
            <td width="190">
               <?  if (($emp=='354277')||($emp=='233356')||($emp=='226143')||($emp=='172792')||($emp=='275615')||($emp=='232496'))
		{
				echo '<p align="center"><font size="2" face="MS Sans Serif"><a href="save3_5.php" title="�ѹ�֡������ ���� ������">3.5 ��ú����èѴ��÷�Ѿ�ҡúؤ��</a></font></p>';
		}
		else
		{
              echo '<p align="center"><font size="2" face="MS Sans Serif">3.5 ��ú����èѴ��÷�Ѿ�ҡúؤ��</font></p>';
		}
		?>
            </td>
        </tr>
    </table>    <p>&nbsp;</p>


<table border="0" width="1000">
        <tr>
            <td width="985">
                <p align="center"><?  include("footer.php"); ?></p>
            </td>
        </tr>
</table>

</center>
</body>

</html>
