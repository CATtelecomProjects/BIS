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

//if (file_exists("includes/custom_files/functions.php")) {
	//	include_once("../includes/custom_files/functions.php");
//}
/*
$content = "<script type='text/javascript' src='http://www.norsorpor.com/news.php?category=10&n=10&showas=table&align=left&content=1&col=2&v=2&tcr=&tsz=10&fnt=Tahoma&udl=1&isz=50&ipd=10&pph=10&ppv=15&ccr=&csz=8&tbi=b&cbi=&enc=tis'> </script>";
*/
global $db;

$content  =  "<table width=\"100%\" border=\"0\" cellspacing=\"2\" cellpadding=\"1\">";
$content  .= "<tr>";
$content  .= "<td align=\"right\"><a href=\"modules.php?name=Webboard&amp;op=createtopic\"><img src=\"./modules/Webboard/images/icons-post.gif\" border=\"0\" align=\"absmiddle\"  style=\"cursor:pointer\" title=\"ตั้งกระทู้ใหม่\"/></a></td>";
$content  .= "</tr>";
$content  .= "</table>";
$content  .=  "<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"3\" cellspacing=\"1\" style=\"border-collapse:collapse\">";
$content  .= "        <tr>";
$content  .= "      <td width=\"5%\" height=\"25\" align=\"center\" background=\"../../images/grid-hrow.gif\" bgcolor=\"#CCCCCC\"><strong>ลำดับ</strong></td>";
$content  .= "      <td width=\"67%\" align=\"center\" background=\"../../images/grid-hrow.gif\" bgcolor=\"#CCCCCC\"><strong>หัวข้อกระทู้</strong></td>";
$content  .= "      <td width=\"13%\" align=\"center\" background=\"../../images/grid-hrow.gif\" bgcolor=\"#CCCCCC\"><strong>โดย</strong></td>";
$content  .= "      <td width=\"8%\" align=\"center\" background=\"../../images/grid-hrow.gif\" bgcolor=\"#CCCCCC\"><strong>อ่าน</strong></td>";
$content  .= "      <td width=\"8%\" align=\"center\" background=\"../../images/grid-hrow.gif\" bgcolor=\"#CCCCCC\"><strong>ตอบ</strong></td>";
$content  .= "    </tr>    ";

$sqlList ="SELECT * FROM nuke_webboard_topics ORDER BY topic_id DESC LIMIT 0 , 10";		  
$result = $db->sql_query($sqlList); 
$numrow = $db->sql_numrows($result);
if( $numrow > 0){
$i=1;
while($rsList = $db->sql_fetchrow($result)) {
if($i % 2 == 1){ $bg = "#FFECFF"; }else{ $bg = "#FFFFFF"; }

$content  .= "    <tr  bgcolor=\"$bg\"  class='tr_hover'>";
$content  .= "      <td align=\"center\">$i</td>";
$content  .= "      <td><a href=\"modules.php?name=Webboard&op=viewtopic&topic_id=".$rsList['topic_id']."\">";
$content  .= "        ".$rsList['topic_title']." </a>".newUpdate($rsList['topic_postdate'])." <font size='9pt' color='#8A8A8A'>(".showdateThaiShort($rsList['topic_postdate']).")</font></td>";
$content  .= "      <td align=\"left\">".$rsList['topic_postby']."      </td>";
$content  .= "      <td align=\"center\">".number_format($rsList['topic_hits_read'],0)."      </td>";
$content  .= "      <td align=\"center\">".number_format($rsList['topic_hits_reply'],0)."      </td>";
$content  .= "    </tr>";

		$i++;
		}
	}else{ 

$content  .= "       <tr>";
$content  .= "      <td colspan=\"6\" align=\"center\" bgcolor=\"#FFFFFF\" class=\"TextWarning\"> ไม่พบหัวข้อกระทู้</td>";
$content  .= "    </tr>";
	}
$content  .= "       <tr>";
$content  .= "      <td colspan=\"6\" height=\"20\" align=\"right\" background=\"../../images/grid-hrow.gif\"><a href=\"modules.php?name=Webboard\">ดูทั้งหมด >></a>&nbsp;</td>";
$content  .= "    </tr>    ";

	
$content  .= "  </table><br>";
?>