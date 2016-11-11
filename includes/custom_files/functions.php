<?php
	####################################################
// ฟังก์ชั่นในการตรวจสอบสิทธิ์การใช้งานในกรณีที่เป็น Admin
function AuthAdmin($userlogin){

// Assign User to this Level	
	$arrUserAdmin = array("piyapong.k","wannapa.a","punnee.c","apinan.s","surapon.h","dhammarat.w","thanathip.y","pattarika.k","pisit.ku","krongkaew.m","nuttawat.s");
	
	$search = in_array($userlogin , $arrUserAdmin);
	
	if($search == true){
		return true;
	}else{
		return false;
	}
}

	####################################################
// ฟังก์ชั่นในการตรวจสอบสิทธิ์การใช้งานในกรณีที่เป็น Viewer
function AuthViewer($userlogin){

// Assign User to this Level
	$arrUserViewer = array();
		
	$search = in_array($userlogin , $arrUserViewer);
	if($search == true){
		return true;
	}else{
		return false;
	}
}

	####################################################
// ฟังก์ชั่นในการตรวจสอบสิทธิ์การใช้งานในกรณีที่เป็น Leave form User 
function AuthLeaveform($userlogin){

// Assign User to this Level	
	$arrUserLeaveform = array("piyapong.k",
											"wannapa.a",
											"apiradee.m",
											"punnee.c",
											"apinan.s",
											"surapon.h",
											"dhammarat.w",
											"thanathip.y",
											"kamhaeng.k",
											"kitsana",
											"waraporn.p",
											"vitchuda.c",
											"pattarika.k",
											"krongkaew.m",
											"pisit.ku"
										);
	
	$search = in_array($userlogin , $arrUserLeaveform);
	
	if($search == true){
		return true;
	}else{
		return false;
	}
}


####################################################
// ฟังก์ชั่นในการตรวจสอบสิทธิ์การเข้าใช้ชุด Software DW/DM  เช่น  E-guide , MS Add-In
function isAuthDWDMPrg($DBAuth){

		$setAuth = array("G","A"); // สิทธิ์ที่ต้องการตรวจสอบตามเงื่อนไข
		
		unset($getAuth);
		// แปลงค่าที่ได้จากการส่งค่ามาให้เป็น Array
		for($loop = 0; $loop < strlen($DBAuth); $loop++){
			$SplitChar =  substr($DBAuth , $loop  , 1);
			$getAuth[] = $SplitChar;
		}

		$count = 0;
		foreach($getAuth as $Data){
			$result  = in_array($Data, $setAuth); 
			if($result){
				$count++;
			}
		}

		// ตรวจสอบเงื่อนไข
				if ($count > 0) {
					return true;
				}else{
					return false;
				}
} // จบฟังก์ชั่น

####################################################
// ฟังก์ชั่นในการ Save log File ที่ /var/log/bis/
function SaveLog($logData , $logType){

if($logType == "SUCCESS"){
	$logFile = "/www/bis/logs/access.log";
}else if($logType == "FAIL"){
	$logFile = "/www/bis/logs/error.log";
}
	if(file_exists($logFile)){
		$fp = fopen($logFile, "a+");
			fwrite($fp,$logData);
			fclose($fp);
	}
}

################ Oracle Format #########################
function datethai($date,$type = "short"  , $separate = "-")
	{
	       if($type == "full"){		   
			   $ThaiMonth=array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน","05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฎาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");	
			 }else{
			 	$ThaiMonth=array("01"=>"ม.ค.","02"=>"ก.พ.","03"=>"มี.ค.","04"=>"เม.ย.","05"=>"พ.ค.","06"=>"มิ.ย.","07"=>"ก.ค.","08"=>"ส.ค.","09"=>"ก.ย.","10"=>"ต.ค.","11"=>"พ.ย.","12"=>"ธ.ค.");
			 }
		   
		
		$split = explode($separate , $date);
		
		$day = $split[0];
		$month = $split[1];
		$year = $split[2]+543;	
		return  (int) $day." ".$ThaiMonth[$month]." ".$year;


		// จบพังก์ชันสำหรับแปลงวันที่เป็นภาษาไทยแบบย่อ
	}

################ Oracle Format #########################
function datethaiTime($date,$type = "short"  , $separate = "-")
	{
	       if($type == "full"){		   
			   $ThaiMonth=array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน","05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฎาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");	
			 }else{
			 	$ThaiMonth=array("01"=>"ม.ค.","02"=>"ก.พ.","03"=>"มี.ค.","04"=>"เม.ย.","05"=>"พ.ค.","06"=>"มิ.ย.","07"=>"ก.ค.","08"=>"ส.ค.","09"=>"ก.ย.","10"=>"ต.ค.","11"=>"พ.ย.","12"=>"ธ.ค.");
			 }
		   
		$split = explode($separate , $date);
		$splitTime = explode(" " , $date);
		$day = $split[0];
		$month = $split[1];
		$year = $split[2]+543;	
		return  (int) $day." ".$ThaiMonth[$month]." ".$year." ".$splitTime[1];
		// จบพังก์ชันสำหรับแปลงวันที่เป็นภาษาไทยแบบย่อ
	}

//#######################################################
# Display date format to  31-12-2007
function showdate($date){
	if($date!=""){
		$split = explode("-" , $date);
		$d = $split[2];
		$m = $split[1];
		$y = $split[0];	
		return  $d."-".$m."-".$y;
	}else{
		return "";	
	}	
}

//#######################################################
# Insert date format 31-12-2007 to 2007-12-31 
function datetodb($date){
	if($date!=""){
		$split = explode("-" , $date);
		$d = $split[0];
		$m = $split[1];
		$y = $split[2];	
		return  $d."-".$m."-".$y;
	}
}



	//##################  MySQL Format ######################
# Display date format to  31 มกราคม 2551
function showdateThai($date){
 $ThaiMonth=array("01"=>"มกราคม","02"=>"กุมภาพันธ์","03"=>"มีนาคม","04"=>"เมษายน","05"=>"พฤษภาคม","06"=>"มิถุนายน","07"=>"กรกฎาคม","08"=>"สิงหาคม","09"=>"กันยายน","10"=>"ตุลาคม","11"=>"พฤศจิกายน","12"=>"ธันวาคม");	
	if($date!=""){		
		$d = substr($date , 8 , 2);
		$m = substr($date , 5, 2 );
		$y = substr($date ,0,4)+543;	
		return  (int) $d." ".$ThaiMonth[$m]." ".$y;
	}else{
		return "";	
	}	
}

# Display date format to  31 ม.ค. 2551
function showdateThaiShort($date){
 $ThaiMonth=array("01"=>"ม.ค.","02"=>"ก.พ.","03"=>"มี.ค.","04"=>"เม.ย.","05"=>"พ.ค.","06"=>"มิ.ย.","07"=>"ก.ค.","08"=>"ส.ค.","09"=>"ก.ย.","10"=>"ต.ค.","11"=>"พ.ย.","12"=>"ธ.ค.");
	if($date!=""){		
		$d = substr($date , 8 , 2);
		$m = substr($date , 5, 2 );
		$y = substr($date ,0,4)+543;	
		return  (int) $d." ".$ThaiMonth[$m]." ".$y;
	}else{
		return "";	
	}	
}




	####################################################
// ฟังก์ชั่นในการ แสดงคำว่า New  ตามเวลาที่กำหนด
function newUpdate($date){
	$d = substr($date,8,2);
	$m = substr($date,5,2);
	$y = substr($date,0,4);	

	$timeSet  = mktime (0,0,0,date("m")  ,date("d")-7,date("Y")); // วันที่กำหนดให้เป็นย้อนหลังไป 7 วัน
	$timePost  = mktime (0,0,0,date($m)  ,date($d),date($y));     // วันที่ปัจจุบัน
		
// ตรวจสอบเงื่อนไข
	if($timePost  >= $timeSet){
		return "<img src='./images/icon_new.gif' align='absmiddle'>";
	}else{
		return "";
	}
}


####################################################
// ฟังก์ชั่นในการ สร้างตามเวลาที่กำหนด
function getTime(){
	$set3Month = date("d-m-Y", mktime(0, 0, 0, date("m")+3, date("d"), date("Y")));
	return 	$set3Month;

}

//#######################################################
// ฟังก์ชันในการแสดงรูป Hot ตามเงื่อนไขครั้งที่ระบุุ
function imgHothits($hits){
// เกณฑ์จำนวนครั้งที่เข้าดูเพื่อแสดงรูป hot
$setHit = 100;
	if($hits >= $setHit){
		return "<img src='./images/icon_hot.gif' align='absmiddle'>";
	}else{
		return "";
	}
}

//#######################################################
// ฟังก์ชันในการสร้าง Radom ตัวอักษรตามจำนวนที่ระบุมา
function random_gen($length){
  $random= "";
  srand((double)microtime()*1000000);
  $char_list = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $char_list .= "abcdefghijklmnopqrstuvwxyz";
  $char_list .= "1234567890";
  // Add the special characters to $char_list if needed

  for($i = 0; $i < $length; $i++)  { 
    $random .= substr($char_list,(rand()%(strlen($char_list))), 1);
  }
  return $random;
} 

//echo $random_string = random_gen(30); //This will return a random 10 character string

//#######################################################
function orderSelect( $sort  , $field  ,$order ){
	$img = array("DESC" => "<img src='./images/arrow_up.png'  id='soimg1' >" , "ASC" => "<img src='./images/arrow_down.png'  id='soimg1' >" , "" => "<img src=./images/arrow_up.png' id='soimg1'>" );
	if($sort == $field){		
		$chk_order = true;		
	}else{
		return  "";
	}
	
	if($chk_order == true){			
			return  $img[$order];			
		}else{
			return  $img['ASC'];	
		}	
}


// ##############################################################
 // ฟังก์ชั่นในการดาวน์โหลดไฟล์
function DownloadFile($mm_type,$fileName){	

		if (file_exists($fileName)) {
			@header('Content-Description: File Transfer');
			@header('Content-Type: application/octet-stream');
			@header('Content-Disposition: attachment; filename='.basename($fileName));
			@header('Content-Transfer-Encoding: binary');
			@header('Expires: 0');
			@header('Cache-Control: must-revalidate');
			@header('Pragma: public');
			@header('Content-Length: ' . filesize($fileName));
			ob_clean();
			flush();
			readfile($fileName);
		}
		/*@header("Cache-Control: public, must-revalidate");
		@header("Pragma: public");
		@header("Content-Type: " . $mm_type);
		@header("Content-Length: " .(string)(filesize($fileName)) );
		@header('Content-Disposition: attachment; filename="'.basename($fileName).'"');
		@header("Content-Transfer-Encoding: binary\n");*/
						  
		//readfile($fileName);
}


//#######################################################
function textsize(){
$text .= " <script type=\"text/javascript\">";
/*************************************************************************
    This code is from Dynamic Web Coding at dyn-web.com
    Copyright 2004-5 by Sharon Paine 
    See Terms of Use at www.dyn-web.com/bus/terms.html
    regarding conditions under which you may use this code.
    This notice must be retained in the code as is!
*************************************************************************/

// setDefaults arguments: size unit, default size, minimum, maximum
// optional array of elements or selectors to apply these defaults to
//dw_fontSizerDX.setDefaults("px", 14, 9, 32, ['div#content'] );

// set arguments: default size, minimum, maximum
// array of elements or selectors to apply these settings to
//dw_fontSizerDX.set(12, 9, 18, ['div.sidebar'] );

$text .= "dw_fontSizerDX.init();";
$text .= "</script>	";
$text .= "<div id=\"sizer\">";
$text .= "<img height=\"23\" src=\"includes/textsize/images/textsize.gif\" width=\"66\" border=\"0\" /><a href=\"\" onclick=\"dw_fontSizerDX.adjust(2); return false\" title=\"Increase font-size\"></a><a href=\"\" onclick=\"dw_fontSizerDX.adjust(2); return false\" title=\"Increase font-size\">";
$text .= "<img src=\"includes/textsize/images/textsize-plus.gif\" width=\"21\" height=\"23\" alt=\"เพิ่มขนาดฟอนต์\" border=\"0\" /></a><a href=\"\" onclick=\"dw_fontSizerDX.adjust(-2); return false\" title=\"Decrease font-size\">";
$text .= "<img src=\"includes/textsize/images/textsize-minus.gif\" width=\"21\" height=\"23\" alt=\"ลดขนาดฟอนต์\" border=\"0\" /></a><a href=\"\" onclick=\"dw_fontSizerDX.reset(); return false\" title=\"Restore default font-sizes\">";
$text .= "<img src=\"includes/textsize/images/textsize-reset.gif\" width=\"21\" height=\"23\" alt=\"ขนาดฟอนต์เริ่มต้น\" border=\"0\" /></a><img height=\"23\" src=\"includes/textsize/images/textsize-r.gif\" width=\"6\" border=\"0\" />";
$text .= "</div>";
return $text;
}
###########################################
//Set Page goto
function pageBack($backStep, $err_msg) 
{
	echo "<script language=\"javascript\">";
	if($err_msg != "") {
		echo "	alert('$err_msg');";
	}
	if($backStep == -1){
		echo "	history.back($backStep);";
	}else if($backStep == "x"){
		echo "window.close();";
	}else if($backStep != ""){
		echo "window.location = '".$backStep."';";
	}
	echo "</script>";
}


/**********************************************/

$authority = array( "K" =>"CAT-KPIs" ,
						  "B" => "Summary of Invoices",
						  "C"=>"Frequency : ระบบรายงานคลื่นความถี่",						  
						  "P" =>"DW/DM - SAS Web Portal" ,
						  "R" =>"DW/DM - SAS Web Report Studio" ,
						  "W" =>"DM - Web Data Entry" ,
						  "F" =>"DW/DM - FTP / Shared Files",
						  "G" => "DW/DM - SAS Enterprise Giude (E-Guide)",
					      "A" => "DW/DM - SAS Microsoft Add-In",
						  "M" =>"MY Report",
						  "D" =>"Event Base Marketing",
						  "H" =>"Suspend CDRs");


// function ในการส่งเมล์
function sendMail($rsData , $option = ''){
global $authority;
							
																				
/*
$arrQuestion = array("1"=>"วันที่คุณเริ่มทำงานที่ กสท",
 							 "2"=>"ตำแหน่งแรกที่คุณได้ทำงานใน กสท",
							 "3"=>"ชื่อสัตว์เลี้ยงที่คุณชอบ",
							 "4"=>"ทะเบียนรถ+บ้านเลขที่",
							 "5"=>"ยี่ห้อรถ+สีที่คุณอยากได้"
							);
*/
																		
		$str = $rsData['PLEVEL'];
		$count = strlen(trim($str));
		
		$arr = array();
		$msg = "";
		for($i=0;$i<$count;$i++){
			$arr[]= substr($str , $i , 1);
			$msg .= "- ระบบงาน ".$authority[$arr[$i]]."<br>";
		}
		
 // multiple recipients
$to  = $rsData['USER_DESC']."<".$rsData['EMAIL'].">"; // note the comma
//$to .= 'wez@example.com';

// subject
//$subject = 'ส่งรหัสผ่านและข้อมูลผู้ใช้งานระบบ BIS : '.$rsData['USER_DESC'];
$subject = 'BIS User Informations : '.$rsData['EMP_ID'];

$passw = 'ใช้รหัสเดียวกับ email';

$lastLogin = $rsData['LAST_LOGIN']==""?"-":datethaiTime($rsData['LAST_LOGIN']);


// message

$message  =  "<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"1\" cellspacing=\"1\" bgcolor=\"#666666\" >";
$message  .= "  <tr bgcolor=\"#666666\">";
$message  .= "    <td><table width=\"99%\" border=\"0\" align=\"center\" cellpadding=\"2\" cellspacing=\"1\" bgcolor=\"#FFFFFF\">";
$message  .= "      <tr>";
$message  .= "        <td height=\"75\" colspan=\"2\"> &nbsp;&nbsp;<b><img src=\"https://bis.cattelecom.com/images/logo-cat-01.gif\" width=\"185\" height=\"62\" align=\"absmiddle\" /> <font face=\"Tahoma\" color=\"#666666\" size=\"2\"> ระบบสารสนเทศทางธุรกิจ (Business Information Systems)</font></b></td>";
$message  .= "        </tr>";
$message  .= " <tr>";
$message  .= "        <td colspan=\"2\" align=\"center\" bgcolor=\"#666666\" height=\"2\"></td>";
$message  .= "        </tr>";
$message  .= "<tr>";
$message  .= "        <td align=\"center\">&nbsp;</td>";
$message  .= "        <td>&nbsp;</td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td align=\"center\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">เรื่อง</font> </td>";
$message  .= "        <td><font face=\"Tahoma\" color=\"#666666\" size=\"2\">ส่งรหัสผ่านและข้อมูลผู้ใช้งาน</font></td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td width=\"12%\" align=\"center\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">เรียน </font></td>";
$message  .= "        <td width=\"88%\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">".$rsData['USER_DESC']."</font></td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td>&nbsp;</td>";
$message  .= "        <td><table width=\"100%\" border=\"0\" cellpadding=\"2\" cellspacing=\"1\" bgcolor=\"#CCCCCC\">";
$message  .= "          <tr>";
$message  .= "            <td colspan=\"2\" align=\"center\" bgcolor=\"#D2E9FF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;&nbsp;<strong>ข้อมูลผู้ใช้งาน</strong></font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\" ><font face=\"Tahoma\" color=\"#666666\" size=\"2\">ชื่อผู้ใช้งาน :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$rsData['USERNAME']."</font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td width=\"25%\" align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">รหัสผ่าน BIS:</font></td>";
$message  .= "            <td width=\"75%\" bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$passw."</font></td>";
$message  .= "          </tr>";
/*
  if(isAuthDWDMPrg($rsData['PLEVEL']) == true){ // ตรวจสอบการใช้งาน Program DW/DM เช่น  E-Guide , MS-AddIn
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\" ><font face=\"Tahoma\" color=\"#666666\" size=\"2\">* รหัสผ่าน : DW/DM</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".base64_decode($rsData['PASS_DW'])."</font></td>";
$message  .= "          </tr>";
		}*/
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">อีเมล์ :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$rsData['EMAIL']."</font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">เบอร์โทร :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$rsData['TELEPHONE']."</font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">วันหมดอายุของรหัสผ่าน :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".datethai($rsData['EXPIRE_DATE'])."</font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">วันที่ใช้งานล่าสุด :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$lastLogin."</font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">URL :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;https://bis.cattelecom.com</font></td>";
$message  .= "          </tr>";





/*
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">หมวดคำถามกันลืม :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$arrQuestion[$rsData['FORGOT_QUESTION']]."</font></td>";
$message  .= "          </tr>";

$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">คำตอบกันลืม :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".base64_decode($rsData['FORGOT_ANSWER'])."</font></td>";
$message  .= "          </tr>";
*/
$message  .= "          <tr valign=\"top\">";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">สิทธิ์ในการใช้งาน :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">".$msg."</font></td>";
$message  .= "          </tr>";
$message  .= "        </table></td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td align=\"center\"><font face=\"Tahoma\" color=\"#ff0000\" size=\"2\">หมายเหตุ*</font></td>";
$message  .= "        <td align=\"left\"><font face=\"Tahoma\" color=\"#ff0000\" size=\"2\">1. อีเมล์ฉบับนี้ถือเป็นความลับ อย่าส่งต่อโดยเด็ดขาด</font></td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td align=\"center\">&nbsp;</td>";
$message  .= "        <td align=\"left\"><font face=\"Tahoma\" color=\"#ff0000\" size=\"2\">2. หากมีข้อสงสัยใดๆ กรุณาติดต่อผู้ดูแลระบบ  เบอร์โทร 7320</font></td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td align=\"center\">&nbsp;</td>";
$message  .= "        <td align=\"left\">&nbsp;</td>";
$message  .= "      </tr>";

/*  if(isAuthDWDMPrg($rsData['PLEVEL']) == true){ // ตรวจสอบการใช้งาน Program DW/DM เช่น  E-Guide , MS-AddIn
$message  .= "      <tr>";
$message  .= "        <td align=\"center\">&nbsp;</td>";
$message  .= "        <td align=\"left\"><font face=\"Tahoma\" color=\"#ff0000\" size=\"2\">รหัสผ่าน DW/DM ใช้ในกรณีที่มีสิทธิ์เข้าใช้งานโปรแกรม ดังนี้ <br>1. SAS Enterprise Guide <br>2. Microsoft Add-In<br>โดยใช้ชื่อผู้ใช้งานเดียวกับระบบ BIS</font></td>";
$message  .= "      </tr>";
}*/

$message  .= "      <tr>";
$message  .= "        <td align=\"center\">&nbsp;</td>";
$message  .= "        <td align=\"left\">&nbsp;</td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td colspan=\"2\" align=\"center\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\"><br>";
$message  .= "        ด้วยความนับถือ</span> <br>";
$message  .= "         ส่วนระบบสารสนเทศเพื่อการบริหารและสถิติ (อธ.)<br />";
$message  .= "          ฝ่ายกลยุทธ์เทคโนโลยีสารสนเทศ (กท.)<br>";
$message  .= "          <br></font></td>";
$message  .= "        </tr>";
$message  .= "    </table></td>";
$message  .= "  </tr>";
$message  .= "</table>";

//echo $message;

 // To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=tis-620' . "\r\n";

// Additional headers
//$headers .= 'To: นาย ปิยะพงษ์ แก้วน่าน<piyapong.k@cattelecom.com>' . "\r\n";
$headers .= 'From : Webmaster BIS <surapon.h@cattelecom.com>' . "\r\n";
$headers .= 'Cc:  Webmaster BIS <surapon.h@cattelecom.com>' . "\r\n";
//$headers .= 'Bcc: Webmaster BIS <piyapong.k@cattelecom.com>' . "\r\n";

// Mail it
$result = mail($to, $subject, $message, $headers);
	if($result){
	   if($option == ''){
		echo "<br><span style=\"color:green;font-weight:bold\">ระบบได้ส่งข้อมูล รหัสผ่านและผู้ใช้งานเรียบร้อย!! <br>กรุณาตรวจสอบได้ที่อีเมล์  <font color='blue'>".$rsData['EMAIL']."</font> </span><br>&nbsp;<br>";	
		echo "<br><input type=\"button\" name=\"button\" id=\"button\" value=\"กลับหน้าหลัก\" onclick=\"window.location = 'https://bis.cattelecom.com'\" style=\"cursor:pointer\" /><br>&nbsp;";
		}
	}
}

 ###########################################
//Print POST Data
function show_post(){
		print "<pre>";
		print_r($_POST);
		print "</pre>";
}

 ###########################################
//Print GET Data
function show_get(){
		print "<pre>";
		print_r($_GET);
		print "</pre>";
}

 ###########################################
//Print session Data
function show_session(){
		print "<pre>";
		print_r($_SESSION);
		print "</pre>";
}

 ###########################################
//Print Array Data
function show_array($arrData){
		print "<pre>";
		print_r($arrData);
		print "</pre>";
}
?>	
