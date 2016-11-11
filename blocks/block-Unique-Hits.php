<?php
/************************************************************************/
/* PHP Coded System			                       						*/
/* ===========================                                          */
/*                                                                      */
/* Unique Hit Counter												    */
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




if (file_exists("./includes/custom_files/dbConnect.php")) {
		include("./includes/custom_files/dbConnect.php");
}



$sqlStat = "SELECT * FROM USERS_STAT";
$resultStat = $dbOra -> GetRow($sqlStat);


$hitsToday               = number_format($resultStat['TODAY'],0);
$hitsYesterday          = number_format($resultStat['YESTERDAY'],0);
$hitsMonth               = number_format($resultStat['MONTH'],0);
$hitsMonthPrevious  = number_format($resultStat['MONTH_LAST'],0);
$hitsYear                = number_format($resultStat['YEAR'],0);
$hitsYearPrevious    = number_format($resultStat['YEAR_LAST'],0);
$hits                       = $resultStat['TOTALS'];

$hits = sprintf( "%05d", $hits );
		$digit = strval( $hits );
		$count=number_format($hits);
		for ( $i=0; $i<strlen( $hits ); $i++ ){
			$counter .= "<img src='./images/img_counter/gif/$digit[$i].gif'  align=\"absmiddle\">";
		}

$content = "<center>";
$content .= "<img src=\"./images/statatistics.gif\"><br>&nbsp;<br>";		
$content .= "$counter";
$content .= "<br><span style=\"font-size:10px;\">(������Ѻ����� 4 �.�. 2548)</span>";
$content .= "</center>";
$content .= "<br>";

$content .= "<table border=\"0\" width=\"100%\">";
$content .= "<tr>";
$content .= "<td align=\"center\"><img src=\"./images/system/useronline.jpg\" botder=\"0\" align=\"absmiddle\"> <b>ʶԵԼ����ҹ</b></td>";
$content .= "</tr>";
$content .= "<tr>";
$content .= "<td>� ʶԵ��ѹ��� : <b>$hitsToday</b> ��</td>";
$content .= "</tr>";
$content .= "<tr>";
$content .= "<td>� ʶԵ�������ҹ : <b>$hitsYesterday</b> ��</td>";
$content .= "</tr>";
$content .= "<tr>";
$content .= "<td>� ʶԵ���͹��� : <b>$hitsMonth</b> ��<td>";
$content .= "</tr>";
$content .= "<tr>";
$content .= "<td>� ʶԵ���͹������� : <b>$hitsMonthPrevious</b> ��<td>";
$content .= "</tr>";
$content .= "<tr>";
$content .= "<td>� ʶԵԻչ�� : <b>$hitsYear</b> ��</td>";
$content .= "</tr>";
$content .= "<tr>";
$content .= "<td>� ʶԵԻշ������ : <b>$hitsYearPrevious</b> ��</td>";
$content .= "</tr>";
$content .= "<tr>";
$content .= "<td align=\"center\"><span style=\"font-size:10px;\">(�Ѻ�ҡ��� Login �ͧ�����ҹ)</span></td>";
$content .= "</tr>";
$content .= "</table>";

?>
