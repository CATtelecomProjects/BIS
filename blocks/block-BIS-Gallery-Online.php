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

if ( !defined('BLOCK_FILE') ) {
    Header("Location: ../index.php");
    die();
}

	global $prefix, $db, $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;
	 $sqlList = "SELECT id,  title ,url, description , hits , postdate   FROM ".$prefix."_gallery ORDER BY id DESC";
	$result = $db->sql_query($sqlList);

	$content = "";
	$content .="<center><img src=\"images/admin/gallery.jpg\"></center><br>";
	while($row = $db->sql_fetchrow($result)) {
		$id = intval($row['id']);
		$title = $row['title'];	
		$hits = $row['hits'];
		$postdate = $row['postdate'];		
		
	$content .= "• <a href=\"modules.php?name=Gallery&id=$id\"> $title</a> ".newUpdate($postdate)." ".imgHothits($hits)."<br>";	
	}
	$db->sql_freeresult($result);
	

?>