<?
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/************************************************************************/

if ( !defined('BLOCK_FILE') ) {
    Header("Location: ../index.php");
    die();
}

global $prefix, $multilingual, $currentlang, $db, $boxTitle, $content2, $pollcomm, $user, $cookie, $userinfo;



$content  =  "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">";
$content  .= "  <tr>";
$content  .= "    <td>";
$content  .= "      <p align=\"center\"><a href=\"http://www.cattelecom.com\" class=\"tooltips\" title=\"กสท โทรคมนาคม\" target=\"_blank\"><img src=\"./images/links/cattelecom.jpg\" width=\"150\" height=\"50\" border=\"0\" title=\"กสท\"></a></p>";

$content  .= "  <p align=\"center\"><a href=\"http://hrprd.cattelecom.com/irj/portal\" class=\"tooltips\" title=\"WEBHR\" target=\"_blank\"><img src=\"./images/links/webhr.gif\" width=\"150\" height=\"50\" border=\"0\"><br>";

$content  .= "  <p align=\"center\"><a href=\"https://intranet.cattelecom.com\" class=\"tooltips\" title=\"CAT Web Intranet\" target=\"_blank\"><img src=\"./images/links/web-intranet.gif\" width=\"150\" height=\"50\" border=\"0\"><br>";

$content  .= "  <p align=\"center\"><a href=\"http://it4cb.cattelecom.com\" class=\"tooltips\" title=\"ฝ่ายเทคโนโลยีสารสนเทศเพื่อสนับสนุนธุรกิจ(ธท.)\" target=\"_blank\"><img src=\"./images/links/cbBanner.gif\" width=\"150\" height=\"50\" border=\"0\"><br>";

$content  .= "  <p align=\"center\"><a href=\"https://bis.cattelecom.com/meetingroom\" class=\"tooltips\" title=\"จองห้องประชุม(กท.)\" target=\"_blank\" ><img src=\"./images/links/bookameeting.gif\"  width=\"150\" height=\"50\" border=\"0\"><br>";

//$content  .= "            <br>";


//$content  .= "    </a><a href=\"http://www.catadmin.cattelecom.com/hr\" class=\"tooltips\" title=\"การบริหารบุคลากร\" target=\"_blank\"><img src=\"./images/links/hrm_banner.jpg\" width=\"150\" height=\"50\" border=\"0\" alt=\"การบริหารบุคลากร\"></a></p>";
//$content  .= "      <p align=\"center\"><a href=\"http://catadmin.cattelecom.com/training\" class=\"tooltips\" title=\"การพัฒนาบุคลากร\" target=\"_blank\"><img src=\"./images/links/HrdBanner.jpg\" width=\"150\" height=\"50\" border=\"0\" alt=\"การพัฒนาบุคลากร\"></a></p>";
//$content  .= "      <p align=\"center\"><a href=\"http://catadmin.cattelecom.com/km/cdma\" title=\"KM Project\" target=\"_blank\"><img src=\"./images/links/kmBanner.gif\" width=\"150\" height=\"50\" border=\"0\" class=\"tooltips\" title=\"การจัดการความรู้\"></a></p>";
//$content  .= "      <p align=\"center\"><a href=\"http://www.catadmin.cattelecom.com/wellfare\" class=\"tooltips\" title=\"ฝ่ายสวัสดิการและแรงงานสัมพันธ์\" target=\"_blank\"><img src=\"./images/links/wellfare.jpg\" width=\"150\" height=\"50\" border=\"0\"></a><br>";
//$content  .= "            <br>";
//$content  .= "            <a href=\"http://catkm.cattelecom.com/\" class=\"tooltips\" title=\"การจัดการความรู้ CAT Knowledge Management\" target=\"_blank\"><img src=\"./images/links/cat-km.gif\" width=\"150\" height=\"50\" border=\"0\"></a><br>";
//$content  .= "            <br>";
//$content  .= "            <a href=\"http://10.9.1.13\" class=\"tooltips\" title=\"CAT Antivirus\" target=\"_blank\"><img src=\"./images/links/cavc.jpg\" width=\"150\" height=\"50\" border=\"0\"></a><br>";
//$content  .= "            <br>";
//$content  .= "            <a href=\"http://intranet.cattelecom.com/web_data/corporate_strategy/research/\" class=\"tooltips\" title=\"CAT Resrearch & Development\" target=\"_blank\"><img src=\"./images/links/CAT-RD.gif\" width=\"150\" height=\"50\" border=\"0\"></a><br>";
$content  .= "            <br>";
$contents .="</p></td>";
$content  .= "  </tr>";
$content  .= "</table>";
?>
