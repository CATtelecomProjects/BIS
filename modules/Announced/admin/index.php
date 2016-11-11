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
$row = $db->sql_fetchrow($db->sql_query("SELECT title, admins FROM ".$prefix."_modules WHERE title='Announced'"));
$row2 = $db->sql_fetchrow($db->sql_query("SELECT name, radminsuper FROM ".$prefix."_authors WHERE aid='$aid'"));
$admins = explode(",", $row['admins']);
$auth_user = 0;
for ($i=0; $i < sizeof($admins); $i++) {
	if ($row2['name'] == "$admins[$i]" AND !empty($row['admins'])) {
		$auth_user = 1;
	}
}

if ($row2['radminsuper'] == 1 || $auth_user == 1) {

	function InsertAnnounced(){
		global $prefix, $db, $admin_file ,$module_name,$bgcolor1;		
		$sql= "INSERT INTO cat_Announced ( title,contents,  active , width , height ) VALUES('$_POST[title]','$_POST[contents]','$_POST[active]' ,$_POST[width],$_POST[height])";		
		$db->sql_query($sql);
		pageBack("admin.php?op=Announced","");
		//header("Location:admin.php?op=Announced");
	}
	
	function UpdateAnnounced(){
		global $prefix, $db, $admin_file ,$module_name,$bgcolor1;		
		 $sql = "UPDATE cat_Announced SET title ='$_POST[title]' ,contents ='$_POST[contents]', active ='$_POST[active]' , width = $_POST[width] , height = $_POST[height] WHERE id=$_GET[id]";
		$db->sql_query($sql);
		pageBack("admin.php?op=Announced","");
	}

function DeleteAnnounced(){
		global $prefix, $db, $admin_file ,$module_name,$bgcolor1;		
		$sql = "DELETE  FROM cat_Announced WHERE id = $_GET[id]";
		$db->sql_query($sql);
		pageBack("admin.php?op=Announced","");
	}

function UpdateStatus(){
		global $prefix, $db, $admin_file ,$module_name,$bgcolor1;	
		$stat = $_GET['status'] == "1" ? "0" : "1";
		 $sql = "UPDATE cat_Announced SET  active ='$stat' WHERE id=$_GET[id]";
		$db->sql_query($sql);
		pageBack("admin.php?op=Announced","");
	}

	function main(){
	global $prefix, $db, $admin_file ,$module_name,$bgcolor1;

		OpenTable();
		echo "<center><span class=\"title_block\">Bis ข่าวประกาศ Popup</span></center>";
		CloseTable();
		echo "<p>";
		
		OpenTable();
		$result = $db->sql_query("SELECT id,title,contents, datetimes, active , width , height  FROM cat_Announced ORDER BY active DESC, id  DESC");
		?>

<table width="100%" border="1" cellspacing="0" cellpadding="1" style="border-collapse:collapse" bordercolor="<?=$bgcolor1;?>">
  <tr>
    <td width="3%" align="center"  bgcolor="<?=$bgcolor1;?>">ที่</td>
    <td width="57%" align="center"  bgcolor="<?=$bgcolor1;?>">หัวข้อประกาศ</td>
    <td width="7%" align="center"  bgcolor="<?=$bgcolor1;?>">สถานะ</td>
    <td width="9%" align="center"  bgcolor="<?=$bgcolor1;?>">ขนาด</td>
    <td width="14%" align="center"  bgcolor="<?=$bgcolor1;?>">วันที่</td>
    <td width="10%" align="center"  bgcolor="<?=$bgcolor1;?>">จัดการ</td>
  </tr>
  <?

  		$i = 1;
		while($row = $db->sql_fetchrow($result)) {
			$img = $row['active']==1?"on":"off";
	?>
  <tr>
    <td align="center"><?=$i?></td>
    <td>&nbsp;
      <?=$row['title']?></td>
    <td align="center"><a href="admin.php?op=UpdateStatus&id=<?=$row['id']?>&status=<?=$row['active']?>"><img src="./images/<?=$img;?>.gif"  border="0"/></a></td>
    <td align="center"><?=$row['width']?>
    x
    <?=$row['height']?></td>
    <td align="center"><?=$row['datetimes']?></td>
    <td align="center">&nbsp;<a href="admin.php?op=EditAnnounced&id=<?=$row['id']?>"><img src="./images/edit.gif" alt="แก้ไขข้อมูล" border="0"/></a> | <a href="admin.php?op=DeleteAnnounced&id=<?=$row['id']?>"><img src="./images/delete.gif" alt="ลบข้อมูล" border="0"/></a></td>
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
		
		
	if($_GET['op'] == "EditAnnounced"){
			$rows = $db->sql_fetchrow($db->sql_query("SELECT id,title,contents, datetimes, active, width , height  FROM cat_Announced  WHERE id=$_GET[id]"));			
	}
?>
<script language="javascript">
<!--
function chkForm(frm){
	if(frm.title.value==""){
		alert("กรอกหัวข้อประกาศ");
		frm.title.focus();
		return false;
	}else{
		if(confirm('ต้องการบันทึกข้อมูล ใช่ หรือไม่ ?')){
			frm.submit();
		}else{
			return false;	
		}
	}
}
-->
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td><form id="formAnnounced" name="formAnnounced" method="post" action="admin.php?op=<?=$_GET['op'] == "EditAnnounced"?"UpdateAnnounced&id=$_GET[id]":"InsertAnnounced"?>">
        <table width="100%" border="0" cellspacing="2" cellpadding="1">
          <tr>
            <td height="25" colspan="2" class="title_block"><?=$_GET['op']=="EditAnnounced"?"แก้ไข":"เพิ่ม";?>ข้อมูลประกาศ </td>
          </tr>
          <tr>
            <td width="6%">&nbsp;</td>
            <td width="94%">หัวข้อ :<br />
              <label for="title"></label>
              <input name="title" type="text" id="title" size="80" value="<?=$rows['title']?>"/></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label> รายละเอียด : <br />
                <textarea name="contents" cols="100%" rows="7" id="contents"><?=$rows['contents']?></textarea>
              </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>กว้าง: 
              <input name="width" type="text" id="width" value="<?=$rows['width']?>" size="8"/>
            px สูง : 
            <input name="height" type="text" id="height" value="<?=$rows['height']?>" size="8"/> 
            px</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input type="checkbox" name="active" id="active" value="1" <?=$rows['active']==1?"checked":""?>/>
              ทำงาน</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="50">
                <input type="button" name="Submit" value="  บันทึก  "  onclick="chkForm(this.form)"/>
                <input type="button" name="buttons" id="buttons" value="  ยกเลิก  " onclick="window.location='admin.php?op=Announced';" />
           </td>
          </tr>
        </table>
    </form></td>
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
		case "UpdateAnnounced":
			UpdateAnnounced();
		break;		
		case "InsertAnnounced":
			InsertAnnounced();
		break;
		case "DeleteAnnounced":
			DeleteAnnounced();
		break;
		case "UpdateStatus":
			UpdateStatus();
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
