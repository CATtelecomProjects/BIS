<?php

/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2006 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

if (!defined('ADMIN_FILE')) {
	die ("Access Denied");
}

global $prefix, $db, $admin_file ,$module_name,$bgcolor1;
$aid = substr("$aid", 0,25);
$row = $db->sql_fetchrow($db->sql_query("SELECT title, admins FROM ".$prefix."_modules WHERE title='Gallery'"));
$row2 = $db->sql_fetchrow($db->sql_query("SELECT name, radminsuper FROM ".$prefix."_authors WHERE aid='$aid'"));
$admins = explode(",", $row['admins']);
$auth_user = 0;
for ($i=0; $i < sizeof($admins); $i++) {
	if ($row2['name'] == "$admins[$i]" AND !empty($row['admins'])) {
		$auth_user = 1;
	}
}

if ($row2['radminsuper'] == 1 || $auth_user == 1) {

	function InsertGallery(){
		global $prefix, $db, $admin_file ,$module_name,$bgcolor1;		
		echo $sql= "INSERT INTO ".$prefix."_gallery ( title ,url, description ,  postdate) VALUES('$_POST[txtTitle]','$_POST[txtUrl]','$_POST[txtDesc]',Now())";
		$db->sql_query($sql);
		pageBack("admin.php?op=Gallery","");
		//header("Location:admin.php?op=Gallery");
	}
	
	function UpdateGallery(){
		global $prefix, $db, $admin_file ,$module_name,$bgcolor1;		
		 $sql = "UPDATE ".$prefix."_gallery SET title ='$_POST[txtTitle]' ,url ='$_POST[txtUrl]', description ='$_POST[txtDesc]' WHERE id=$_GET[id]";
		$db->sql_query($sql);
		pageBack("admin.php?op=Gallery","");
	}

function DeleteGallery($id){
		global $prefix, $db, $admin_file ,$module_name,$bgcolor1;		
		 $sql = "DELETE  FROM ".$prefix."_gallery WHERE id=$id";
		$db->sql_query($sql);
		pageBack("admin.php?op=Gallery","");
	}

	function main(){
	global $prefix, $db, $admin_file ,$module_name,$bgcolor1;

		OpenTable();
		echo "<center><span class=\"title_block\">Bis Gallery Online</span></center>";
		CloseTable();
		echo "<p>";
		
		OpenTable();
		$result = $db->sql_query("SELECT id,  title ,url, description , hits , postdate   FROM ".$prefix."_gallery ORDER BY id DESC");
		?>
		<table width="100%" border="1" cellspacing="0" cellpadding="1" style="border-collapse:collapse" bordercolor="<?=$bgcolor1;?>">
  <tr>
    <td width="6%" align="center"  bgcolor="<?=$bgcolor1;?>">ที่</td>
    <td width="83%" align="center"  bgcolor="<?=$bgcolor1;?>">หัวข้อ Gallery</td>
    <td width="11%" align="center"  bgcolor="<?=$bgcolor1;?>">จัดการ</td>
  </tr>
  <?

  		$i = 1;
		while($row = $db->sql_fetchrow($result)) {
	?>
			
  <tr>
    <td align="center"><?=$i?></td>
    <td>&nbsp;<?=$row['title']?></td>
    <td align="center">&nbsp;<a href="admin.php?op=EditGallery&id=<?=$row['id']?>"><img src="./images/edit.gif" alt="แก้ไขข้อมูล" border="0"/></a> | <a href="admin.php?op=DeleteGallery&id=<?=$row['id']?>"><img src="./images/delete.gif" alt="ลบข้อมูล" border="0"/></a></td>
  </tr>

	<?
	$i++;
		}
	?>
		</table>
	<?
		CloseTable();
		
		//$db->sql_freeresult($result);
		
		echo "<p>";
		OpenTable();
		
		
	if($_GET['op'] == "EditGallery"){
			$rows = $db->sql_fetchrow($db->sql_query("SELECT id,  title ,url, description , hits , postdate   FROM ".$prefix."_gallery WHERE id=$_GET[id]"));
	}
?>


<script language="javascript">
<!--
function chkForm(frm){
	if(frm.txtTitle.value==""){
		alert("กรอกหัวข้อ Gallery");
		frm.txtTitle.focus();
		return false;
	}else if(frm.txtUrl.value==""){
		alert("กรอก Url ของ Link");
		frm.txtUrl.focus();
		return false;	
	}else{
		frm.submit();
	}
}
-->
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td><form id="formGallery" name="formGallery" method="post" action="admin.php?op=<?=$_GET['op'] == "EditGallery"?"UpdateGallery&id=$_GET[id]":"InsertGallery"?>">
      <table width="100%" border="0" cellspacing="2" cellpadding="1">
        <tr>
          <td height="25" colspan="2" class="title_block"><?=$_GET['op']=="EditGallery"?"แก้ไข":"เพิ่ม";?>ข้อมูล Gallery </td>
          </tr>
        <tr>
          <td width="6%">&nbsp;</td>
          <td width="94%">หัวข้อ Gallery เช่น งานกีฬาสีปี 2550 </td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="txtTitle" type="text" id="txtTitle" value="<?=$rows['title']?>" size="50" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Url ของ Link เช่น http://biscattelecom.spaces.live.com/photos/cns!6A6BFB5F92C87481!186/feed.rss</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="txtUrl" type="text" id="txtUrl"  value="<?=$rows['url']?>" size="70" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>รายละเอียดเพิ่มเติม</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><label>
            <textarea name="txtDesc" cols="100%" rows="2" id="txtDesc"> <?=$rows['description']?> </textarea>
          </label></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td height="28"><label>
            <input type="button" name="Submit" value="  <?=_WRITES;?>  "  onclick="chkForm(this.form)"/>
          </label></td>
        </tr>
      </table>
            </form>
    </td>
  </tr>
</table>
<?		
	
	
		CloseTable();
		
	}

		include ("header.php");
		
		GraphicAdmin();
		
	switch ($op) {

		default :
			main();
		break;
		case "UpdateGallery":
			UpdateGallery();
		break;		
		case "InsertGallery":
			InsertGallery();
		break;
		case "DeleteGallery":
			DeleteGallery($_GET['id']);
		break;
		

	}
include("footer.php");

} else {
	include("header.php");
	GraphicAdmin();
	OpenTable();
	echo "<center><b>"._ERROR."</b><br><br>You do not have administration permission for module \"$module_name\"</center>";
	CloseTable();
	include("footer.php");
}

?>