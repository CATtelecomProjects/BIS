
<?php


 if (!defined('MODULE_FILE')) {
 	die ("You can't access this file directly...");
 }

 require_once("mainfile.php");
 $module_name = basename(dirname(__FILE__));  //���� module


//�ͧ���һѨ�غѹ  global $currentlang  ��Ш�  @include_once("modules/$module/language/lang-".$language.".php");
 get_lang($module_name);


 $ThemeSel = get_theme();
// echo $ThemeSel;

 
 include("header.php");




function main()
{
	global $prefix, $db, $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;

	OpenTable();  

	?>
	<script language="javascript">
		function chkForm(){
			var frm = document.formGuestBook;
			if(frm.guestName.value == ''){
				alert('��سҡ�͡����');
				frm.guestName.focus();
				return false;
			}else{
				frm.op.value = "SaveGuest";
				frm.submit();
			}
		}
	
	</script>
	
	<form id="formGuestBook" name="formGuestBook" method="post" action="">
	  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="82%" align="center" >&nbsp;</td>
          </tr>
          <tr>
            <td height="26" align="right" class="title_block"><? //=textsize();?>
              <table cellspacing="0" cellpadding="0" width="145" border="0">
              </table></td></tr>

          <tr>
            <td height="26" align="center" class="title_block">����ŧ������¾�о�</td>
          </tr>
          <tr>
            <td valign="bottom" class="title_block"><table width="80%" border="0" align="center" cellpadding="5" cellspacing="0">
              <tr>
                <td valign="bottom" >��Ҿ�оط����</td>
              </tr>
              <tr>
                <td><label>
                  <input name="guestName" type="text" id="guestName" tabindex="0" size="42" />
                </label></td>
              </tr>
              
              <tr>
                <td valign="bottom">�͹������¾�о�</td>
              </tr>
              <tr>
                <td><label>
                  <textarea name="txtGuestComment" cols="100" rows="7" id="txtGuestComment"></textarea>
                </label></td>
              </tr>
              <tr>
                <td height="39"><label>
                  <input type="button" name="Submit" value="�觤Ӷ��¾�о�" onclick="chkForm()" />
                  <input type="reset" name="Submit2" value="  ��ҧ��ͤ���  " />
                  <input type="hidden" name="op" />
                </label></td>
              </tr>
              
            </table></td>
          </tr>

      </table></td>
    </tr>
  </table>
</form>

	<?
	CloseTable();
		// ��ǹ�ʴ��Ӷ��¾�о�

	 //$sqlList = "SELECT id,sign_name,sign_desc,sign_date FROM ".$prefix."_sign2king LIMIT 0 , 10";
	 $sqlList = "SELECT id,sign_name,sign_desc,sign_date FROM ".$prefix."_sign2king";
	$result = $db->sql_query($sqlList);
	$i=1;
	while($row = $db->sql_fetchrow($result)) {
		$id = intval($row['id']);
		$sign_name = $row['sign_name'];
		$sign_desc = $row['sign_desc'];
		$sign_date = $row['sign_date'];
	echo "<br>";

	OpenTable();	
?>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="EBFFE4">
          <tr>
            <td colspan="2"><strong>�Ӷ��¾�о÷�� : <?=$i?></strong> </td>
          </tr>
          
          <tr>
            <td width="3%">&nbsp;</td>
            <td width="97%"><?=$sign_desc;?></td>
          </tr>
          
          <tr>
            <td colspan="2"><strong>��</strong> <?=$sign_name;?> � <strong>�ѹ���</strong> <?=showdateThai($sign_date);?> </td>
          </tr>
        </table></td>
      </tr>
    </table>
<?	
	$i++;
	CloseTable();
	}
	$db->sql_freeresult($result);
	
	
}




function SaveGuest()
{
	global $prefix, $db, $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;

	OpenTable(); 
	
	$sql = "INSERT INTO ".$prefix."_sign2king (sign_name,sign_desc,sign_date) VALUES ('$_POST[guestName]','$_POST[txtGuestComment]', now())";
	$db->sql_query($sql);
	echo "<p>&nbsp;</p><center><b>������Ѻ�Ӷ��¾�оèҡ��ҹ���� !!</b><br><br>���ѡ���� ���ѧ��Ѻ����˹����ѡ���¾�о�</center><p>&nbsp;</p>";
	echo "<META HTTP-EQUIV=\"Refresh\"   CONTENT=\"2; URL=modules.php?name=King60\">";
	CloseTable();
}	

switch($op) { // �Դ $op �ҡ GET �����

	default:
	main();
	break;

	case "SaveGuest";
	SaveGuest();
	break;


}










include("footer.php"); 
?>
  

    
	