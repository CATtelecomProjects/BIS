<?php
	@session_start();

?>

	<form id='frm_send_var' name='frm_send_var' action='http://dw-webreport.cattelecom.com/dwdm-questionnaire/chk_userlogin.php' method='post'  target="_self">
	<input name='userid_bis' id='userid_bis' type='hidden' value='<?php echo $_SESSION['userid']; ?>'>

	<!--   �ç type �ͧ tag INPUT  ��˹���  hidden  ��͹���  �ó� �觵���è�ԧ  ��������ʴ�
		<input name='userid_bis' id='userid_bis' type='text' value='<?php echo $_SESSION['userid']; ?>'>  
	-->
</form>

<script language="javascript">

	// ��˹������ Session �ҡ php ŧ ����� Javascript
		var var_get_session = 'N'+"<?php echo $_SESSION['userid']; ?>" ;
		if ( var_get_session.trim() != 'N')
		{
			//alert("User SESSION ��� = "+"<?php echo $_SESSION['userid']; ?>");
			document.getElementById('frm_send_var').submit();
		}
		else
		{
//			alert('�������ö����к��� ... \n\n ��ͧ Login ��ҹ�к� BIS : " https://bis.cattelecom.com " ');

			// .. Redirect ��Ѻ� ˹��  BIS
				location.href = 'https://bis.cattelecom.com';
		}


</script>

<?

/*
$autoForm = " <form id= \"logonForm\" name= \"logonForm\" action=\"http://dw-webreport.cattelecom.com/dwdm-questionnaire/menu_01.php\" method=\"post\"> ";

$autoForm .= " <input name=\"bis_user\" id=\"bis_user\" type=\"hidden\" value=\"".$_SESSION['userid']."\"> ";
$autoForm .= " <input name=\"bis_pass\" id=\"bis_pass\" type=\"hidden\" value=\"".$_SESSION['password']."\">";
$autoForm .= " <input name=\"bis_name\" id=\"bis_name\" type=\"hidden\" value=\"".$_SESSION['desc']."\">";
		
$autoForm .= " </form>";    	
		
echo '<br>========='.$autoForm;

/*
echo '<script language="javascript">';
echo "document.getElementById('logonForm').submit();"; // SUBMIT FORM	
echo '</script>';


echo "<span style=\"text-align:center\"><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";
echo "<h5><img src=\"../../images/loading-gear.gif\"><br> Sign in to DW/DM : Back Office...</h5></span>";

*/

?>		

