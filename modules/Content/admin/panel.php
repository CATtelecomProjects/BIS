<?php

/************************************************************************/
/* PHP-NUKE: Web Portal System                                          */
/* ===========================                                          */
/*                                                                      */
/* Copyright (c) 2005 by Francisco Burzi                                */
/* http://phpnuke.org                                                   */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

if (!defined('MODULE_FILE')) {
	die ("Access Denied");
}

global $cid, $pid, $admin, $db, $prefix, $admin_file;
if (!is_admin($admin)) { die ("Access Denied"); }
$module_name = "Content";
echo "<center><b>��ǹ�Ѵ�������� $module_name</b><br><br>";
if (isset($cid)) {
	$row = $db->sql_fetchrow($db->sql_query("SELECT title FROM ".$prefix."_pages_categories WHERE cid='$cid'"));
	echo "��Ǵ����: <b>".$row['title']."</b><br><br>[ <a href='".$admin_file.".php?op=edit_category&cid=$cid'>���</a> | <a href='".$admin_file.".php?op=del_content_cat&cid=$cid&ok=0'>ź</a> ]";
}
if (isset($pid)) {
	$row = $db->sql_fetchrow($db->sql_query("SELECT title, active FROM ".$prefix."_pages WHERE pid='$pid'"));
	echo "������: <b>".$row['title']."</b><br><br>[ <a href='".$admin_file.".php?op=content_edit&pid=$pid'>���</a> | ";
	if ($row['active'] == 1) {
		echo "<a href='".$admin_file.".php?op=content_change_status&pid=$pid&active=1'>���ӧҹ</a> | ";
	} elseif ($row['active'] == 0) {
		echo "<a href='".$admin_file.".php?op=content_change_status&pid=$pid&active=0'>�ӧҹ</a> | ";
	}
	echo "<a href='".$admin_file.".php?op=content_delete&pid=$pid&ok=0'>ź</a> ]";
}
echo "</center>";

?>