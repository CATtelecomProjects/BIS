<?php
/************************************************************************/
/* PHP Coded System			                       						*/
/* ===========================                                          */
/*                                                                      */
/* Unique Hit Counter Capture Data									    */
/*                                                                      */
/* Copyright (c) 2007 ld-software.co.uk                                 */
/*  				                                                    */
/* Support Can be found at                                              */
/* www.ld-software.co.uk/modules.php?name=Forums&file=viewforum&f=6     */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/
session_start();

global $prefix, $db;

$ip=getenv(REMOTE_ADDR);
$realIP = $_SERVER["HTTP_X_FORWARDED_FOR"];
$Now = date('Y-m-d');
$PHP_SELF = $_SERVER['REQUEST_URI'];

if (!isset($_SESSION['usr'])){
		$user = "Anonymous";
}else{
		$user = $_SESSION['usr'];
}

//$sql = "SELECT ip, page ,counterdate,realIP FROM ".$prefix."_uhits WHERE counterdate = '$Now' AND realIP = '$realIP' AND page='$PHP_SELF' ";
$sql = "SELECT ip, page ,counterdate,realIP FROM ".$prefix."_uhits WHERE counterdate = '$Now' AND realIP = '$realIP' AND page='$PHP_SELF' ";
$result = $db->sql_fetchrow($db->sql_query($sql));

$r_ip = $result['ip'];
$r_Xip = $result['realIP'];
$r_page = $result['page'];
$r_date = $result['counterdate'];


//if ( $ip <> $r_ip && $PHP_SELF <> $r_page && $Now <> $r_date) {
if (($r_Xip != $realIP) && ($Now != $r_date) && ($PHP_SELF != $r_page)) {
	// Do insert
	 $sqlInsert = "INSERT INTO ".$prefix."_uhits VALUES ('$PHP_SELF', '$ip', 1,now(),'$realIP','$user')";
	$db->sql_query($sqlInsert);
	
	} else {
	 $sqlUpdate = "UPDATE ".$prefix."_uhits  SET page='$PHP_SELF', counter=counter+1,counterdate=now() , user='$user' WHERE counterdate = '$Now' AND realIP = '$realIP' AND page='$PHP_SELF' ";
	$db->sql_query($sqlUpdate);
	
	}

?>