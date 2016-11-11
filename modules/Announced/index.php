<?php
	session_start();

	$rows = $db->sql_fetchrow($db->sql_query("SELECT id,title,contents, datetimes, active  FROM cat_Announced  WHERE id=$_GET[id]"));
	print_r($rows);
?>