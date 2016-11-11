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
$module_name = "Gallery";
include_once("modules/$module_name/admin/language/lang-".$currentlang.".php");


switch($op) {

	case "Gallery":
	case "EditGallery":
	case "DeleteGallery":
	case "UpdateGallery":
	case "InsertGallery":
	case "DeleteGallery":
	
	include("modules/$module_name/admin/index.php");
	break;

}

?>