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
		
if (stristr(htmlentities($_SERVER['PHP_SELF']), "javascript.php")) {
    Header("Location: ../index.php");
    die();
}

##################################################
# Include for some common javascripts functions  #
##################################################

global $module, $name, $admin, $advanced_editor, $lang, $nuke_editor, $nukeurl;
/*echo "<script type=\"text/javascript\" src=\"./includes/tooltips/wz_tooltip.js\"></script> ";*/



/***********************************************
* Ajax Tooltip script- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and 100s more
***********************************************/
/*echo "<script type=\"text/javascript\" src=\"./includes/ajax-tooltip/jquery.js\"></script>\n";
echo"<style type=\"text/css\"\n>";
*/

//echo ".ajaxtooltip{\n";

//echo" position: absolute; /*leave this alone*/ \n";
//echo "display: none; /*leave this alone*/\n ";
//echo "width: 480px;\n";
//echo "left: 0; /*leave this alone*/\n";
//echo "top: 0; /*leave this alone*/\n";
//echo "background: lightyellow;\n";
//echo "border: 1px solid gray;\n";
//echo "border-width: 1px 1px 1px 1px;\n";
//echo "padding: 5px;\n";
//echo "}\n";
//echo "</style>\n";

//echo "<script type=\"text/javascript\" src=\"./includes/ajax-tooltip/ajaxtooltip.js\">\n";


/*echo "</script>\n";*/

if (file_exists("themes/".$ThemeSel."/style/editor.css")) {
    $edtcss = "editor_css : \"themes/".$ThemeSel."/style/editor.css\",";
} else {
    $edtcss = "editor_css : \"includes/tiny_mce/themes/advanced/skins/o2k7/ui.css\",";
}

if ($nuke_editor == 1) {
	if (is_admin($admin) AND $name != "Private_Messages" AND $name != "Forums" AND !defined('NO_EDITOR')) {
	
	echo "<script type=\"text/javascript\" src=\"$nukeurl/includes/tiny_mce/tiny_mce.js\"></script>";
echo "<script type=\"text/javascript\">
tinyMCE.init({
        // General options
        mode : 'textareas',
        theme : 'advanced',
        plugins : 'autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template',

        // Theme options
        theme_advanced_buttons1 : 'save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect',
        theme_advanced_buttons2 : 'cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor',
        theme_advanced_buttons3 : 'tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen',
        theme_advanced_buttons4 : 'insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage',
        theme_advanced_toolbar_location : 'top',
        theme_advanced_toolbar_align : 'left',
        theme_advanced_statusbar_location : 'bottom',
        theme_advanced_resizing : true,

        // Skin options
        skin : 'o2k7',
        skin_variant : 'silver',

        // Example content CSS (should be your site CSS)
        content_css : '$nukeurl/includes/tiny_mce/css/content.css'

      
  
});
</script> ";
	
	/*
		echo "<!-- tinyMCE -->";
		echo "<script type=\"text/javascript\" src=\"$nukeurl/includes/tinymce/tiny_mce.js\"></script>";
		echo '<script type="text/javascript">
	tinyMCE.init({
		// General options
		 language : "th", 
		mode : "textareas",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		
		skin : "o2k7",
        skin_variant : "silver",
		// Example content CSS (should be your site CSS)
		//content_css : "includes/tinymce/css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "$nukeurl/includes/tinymce/lists/template_list.js",
		external_link_list_url : "$nukeurl/includes/tinymce/lists/link_list.js",
		external_image_list_url : "$nukeurl/includes/tinymce/lists/image_list.js",
		media_external_list_url : "$nukeurl/includes/tinymce/lists/media_list.js",

		// Style formats
		style_formats : [
			{title : "Bold text", inline : "b"},
			{title : "Red text", inline : "span", styles : {color : "#ff0000"}},
			{title : "Red header", block : "h1", styles : {color : "#ff0000"}},
			{title : "Example 1", inline : "span", classes : "example1"},
			{title : "Example 2", inline : "span", classes : "example2"},
			{title : "Table styles"},
			{title : "Table row 1", selector : "tr", classes : "tablerow1"}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>';
*/
		
	echo "		<!-- /tinyMCE -->";
	} elseif ($name != "Private_Messages" AND $name != "Forums" AND !defined("NO_EDITOR")) {
		echo "<script type=\"text/javascript\" src=\"$nukeurl/includes/tiny_mce/tiny_mce.js\"></script>";
echo "<script type=\"text/javascript\">
tinyMCE.init({
        // General options
        mode : 'textareas',
        theme : 'advanced',
        plugins : 'autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template',

        // Theme options
        theme_advanced_buttons1 : 'save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect',
        theme_advanced_buttons2 : 'cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor',
        theme_advanced_buttons3 : 'tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen',
        theme_advanced_buttons4 : 'insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage',
        theme_advanced_toolbar_location : 'top',
        theme_advanced_toolbar_align : 'left',
        theme_advanced_statusbar_location : 'bottom',
        theme_advanced_resizing : true,

        // Skin options
        skin : 'o2k7',
        skin_variant : 'silver',

        // Example content CSS (should be your site CSS)
        content_css : '$nukeurl/includes/tiny_mce/css/content.css'

      
  
});
</script> ";
	}
}

if ($userpage == 1) {
    echo "<SCRIPT type=\"text/javascript\">\n";
    echo "<!--\n";
    echo "function showimage() {\n";
    echo "if (!document.images)\n";
    echo "return\n";
    echo "document.images.avatar.src=\n";
    echo "'$nukeurl/modules/Forums/images/avatars/gallery/' + document.Register.user_avatar.options[document.Register.user_avatar.selectedIndex].value\n";
    echo "}\n";
    echo "//-->\n";
    echo "</SCRIPT>\n\n";
}

if (defined('MODULE_FILE') AND file_exists("modules/".$name."/copyright.php")) {
    echo "<script type=\"text/javascript\">\n";
    echo "<!--\n";
    echo "function openwindow(){\n";
    echo "	window.open (\"modules/".$name."/copyright.php\",\"Copyright\",\"toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=no,copyhistory=no,width=400,height=200\");\n";
    echo "}\n";
    echo "//-->\n";
    echo "</SCRIPT>\n\n";
}

?>