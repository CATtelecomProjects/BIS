<?php

#######################################################
#  PTT Block
# ราคาน้ำมันวันนี้
#  Coded by http://www.thainuke.net
#  Resources By: http://www.pttplc.com/
#######################################################


if ( !defined('BLOCK_FILE') ) {
    Header("Location: ../index.php");
    die();
}

/*
$content = "<script type='text/javascript' src='http://www.norsorpor.com/news.php?category=10&n=10&showas=table&align=left&content=1&col=2&v=2&tcr=&tsz=10&fnt=Tahoma&udl=1&isz=50&ipd=10&pph=10&ppv=15&ccr=&csz=8&tbi=b&cbi=&enc=tis'> </script>";
*/

$content  =  "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd\">";
$content  .= "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">";
$content  .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"/includes/ajax-tab/ajaxtabs/ajaxtabs.css\" />";
$content  .= "<script type=\"text/javascript\" src=\"/includes/ajax-tab/ajaxtabs/ajaxtabs.js\">";
$content  .= "</script>";
$content  .= "<div id=\"NewsTab\" class=\"indentmenu\">";
$content  .= "<ul>";
//$content  .= "<li><a href=\"./includes/ajax-tab/getNewsType.php?type=10\" rel=\"#iframe\" class=\"selected\">ข่าวเด่นวันนี้</a></li>";
$content  .= "<li><a href=\"./includes/ajax-tab/getNewsType.php?type=37\" rel=\"#iframe\">  ข่าว IT  </a></li>";
$content  .= "<li><a href=\"./includes/ajax-tab/getNewsType.php?type=33\" rel=\"#iframe\">ข่าวเศรษฐกิจ</a></li>";
$content  .= "<li><a href=\"./includes/ajax-tab/getNewsType.php?type=32\" rel=\"#iframe\">ข่าวการเมือง</a></li>";
$content  .= "<li><a href=\"./includes/ajax-tab/getNewsType.php?type=34\" rel=\"#iframe\">ข่าวต่างประเทศ</a></li>";
$content  .= "<li><a href=\"./includes/ajax-tab/getNewsType.php?type=35\" rel=\"#iframe\">ข่าวกีฬา</a></li>";
$content  .= "<li><a href=\"./includes/ajax-tab/getNewsType.php?type=11\" rel=\"#iframe\">ข่าวบันเทิง</a></li>";
$content  .= "</ul>";
$content  .= "<br style=\"clear: left\" />";
$content  .= "</div>";
$content  .= "<div id=\"NewsDivcontainer\" style=\"border:1px solid darkred; width:100%;  height:580px; padding: 5px; margin-bottom:1em\">";
$content  .= "</div>";
$content  .= "<script type=\"text/javascript\">";
$content  .= "var BISNews=new ddajaxtabs(\"NewsTab\", \"NewsDivcontainer\");";
$content  .= "BISNews.setpersist(false);";
$content  .= "BISNews.setselectedClassTarget(\"link\");";
$content  .= "BISNews.init();";
$content  .= "</script>";
$content  .= "<html>";
?>