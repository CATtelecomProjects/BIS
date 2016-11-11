<?php
	####################################################
// �ѧ����㹡�õ�Ǩ�ͺ�Է�������ҹ㹡óշ���� Admin
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
// �ѧ����㹡�õ�Ǩ�ͺ�Է�������ҹ㹡óշ���� Viewer
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
// �ѧ����㹡�õ�Ǩ�ͺ�Է�������ҹ㹡óշ���� Leave form User 
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
// �ѧ����㹡�õ�Ǩ�ͺ�Է����������ش Software DW/DM  ��  E-guide , MS Add-In
function isAuthDWDMPrg($DBAuth){

		$setAuth = array("G","A"); // �Է������ͧ��õ�Ǩ�ͺ������͹�
		
		unset($getAuth);
		// �ŧ��ҷ����ҡ����觤��������� Array
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

		// ��Ǩ�ͺ���͹�
				if ($count > 0) {
					return true;
				}else{
					return false;
				}
} // ���ѧ����

####################################################
// �ѧ����㹡�� Save log File ��� /var/log/bis/
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
			   $ThaiMonth=array("01"=>"���Ҥ�","02"=>"����Ҿѹ��","03"=>"�չҤ�","04"=>"����¹","05"=>"����Ҥ�","06"=>"�Զع�¹","07"=>"�á�Ҥ�","08"=>"�ԧ�Ҥ�","09"=>"�ѹ��¹","10"=>"���Ҥ�","11"=>"��Ȩԡ�¹","12"=>"�ѹ�Ҥ�");	
			 }else{
			 	$ThaiMonth=array("01"=>"�.�.","02"=>"�.�.","03"=>"��.�.","04"=>"��.�.","05"=>"�.�.","06"=>"��.�.","07"=>"�.�.","08"=>"�.�.","09"=>"�.�.","10"=>"�.�.","11"=>"�.�.","12"=>"�.�.");
			 }
		   
		
		$split = explode($separate , $date);
		
		$day = $split[0];
		$month = $split[1];
		$year = $split[2]+543;	
		return  (int) $day." ".$ThaiMonth[$month]." ".$year;


		// ���ѧ��ѹ����Ѻ�ŧ�ѹ�����������Ẻ���
	}

################ Oracle Format #########################
function datethaiTime($date,$type = "short"  , $separate = "-")
	{
	       if($type == "full"){		   
			   $ThaiMonth=array("01"=>"���Ҥ�","02"=>"����Ҿѹ��","03"=>"�չҤ�","04"=>"����¹","05"=>"����Ҥ�","06"=>"�Զع�¹","07"=>"�á�Ҥ�","08"=>"�ԧ�Ҥ�","09"=>"�ѹ��¹","10"=>"���Ҥ�","11"=>"��Ȩԡ�¹","12"=>"�ѹ�Ҥ�");	
			 }else{
			 	$ThaiMonth=array("01"=>"�.�.","02"=>"�.�.","03"=>"��.�.","04"=>"��.�.","05"=>"�.�.","06"=>"��.�.","07"=>"�.�.","08"=>"�.�.","09"=>"�.�.","10"=>"�.�.","11"=>"�.�.","12"=>"�.�.");
			 }
		   
		$split = explode($separate , $date);
		$splitTime = explode(" " , $date);
		$day = $split[0];
		$month = $split[1];
		$year = $split[2]+543;	
		return  (int) $day." ".$ThaiMonth[$month]." ".$year." ".$splitTime[1];
		// ���ѧ��ѹ����Ѻ�ŧ�ѹ�����������Ẻ���
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
# Display date format to  31 ���Ҥ� 2551
function showdateThai($date){
 $ThaiMonth=array("01"=>"���Ҥ�","02"=>"����Ҿѹ��","03"=>"�չҤ�","04"=>"����¹","05"=>"����Ҥ�","06"=>"�Զع�¹","07"=>"�á�Ҥ�","08"=>"�ԧ�Ҥ�","09"=>"�ѹ��¹","10"=>"���Ҥ�","11"=>"��Ȩԡ�¹","12"=>"�ѹ�Ҥ�");	
	if($date!=""){		
		$d = substr($date , 8 , 2);
		$m = substr($date , 5, 2 );
		$y = substr($date ,0,4)+543;	
		return  (int) $d." ".$ThaiMonth[$m]." ".$y;
	}else{
		return "";	
	}	
}

# Display date format to  31 �.�. 2551
function showdateThaiShort($date){
 $ThaiMonth=array("01"=>"�.�.","02"=>"�.�.","03"=>"��.�.","04"=>"��.�.","05"=>"�.�.","06"=>"��.�.","07"=>"�.�.","08"=>"�.�.","09"=>"�.�.","10"=>"�.�.","11"=>"�.�.","12"=>"�.�.");
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
// �ѧ����㹡�� �ʴ������ New  ������ҷ���˹�
function newUpdate($date){
	$d = substr($date,8,2);
	$m = substr($date,5,2);
	$y = substr($date,0,4);	

	$timeSet  = mktime (0,0,0,date("m")  ,date("d")-7,date("Y")); // �ѹ����˹��������͹��ѧ� 7 �ѹ
	$timePost  = mktime (0,0,0,date($m)  ,date($d),date($y));     // �ѹ���Ѩ�غѹ
		
// ��Ǩ�ͺ���͹�
	if($timePost  >= $timeSet){
		return "<img src='./images/icon_new.gif' align='absmiddle'>";
	}else{
		return "";
	}
}


####################################################
// �ѧ����㹡�� ���ҧ������ҷ���˹�
function getTime(){
	$set3Month = date("d-m-Y", mktime(0, 0, 0, date("m")+3, date("d"), date("Y")));
	return 	$set3Month;

}

//#######################################################
// �ѧ��ѹ㹡���ʴ��ٻ Hot ������͹䢤��駷���к��
function imgHothits($hits){
// ࡳ��ӹǹ���駷����Ҵ������ʴ��ٻ hot
$setHit = 100;
	if($hits >= $setHit){
		return "<img src='./images/icon_hot.gif' align='absmiddle'>";
	}else{
		return "";
	}
}

//#######################################################
// �ѧ��ѹ㹡�����ҧ Radom ����ѡ�õ���ӹǹ����к���
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
 // �ѧ����㹡�ô�ǹ���Ŵ���
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
$text .= "<img src=\"includes/textsize/images/textsize-plus.gif\" width=\"21\" height=\"23\" alt=\"������Ҵ�͹��\" border=\"0\" /></a><a href=\"\" onclick=\"dw_fontSizerDX.adjust(-2); return false\" title=\"Decrease font-size\">";
$text .= "<img src=\"includes/textsize/images/textsize-minus.gif\" width=\"21\" height=\"23\" alt=\"Ŵ��Ҵ�͹��\" border=\"0\" /></a><a href=\"\" onclick=\"dw_fontSizerDX.reset(); return false\" title=\"Restore default font-sizes\">";
$text .= "<img src=\"includes/textsize/images/textsize-reset.gif\" width=\"21\" height=\"23\" alt=\"��Ҵ�͹���������\" border=\"0\" /></a><img height=\"23\" src=\"includes/textsize/images/textsize-r.gif\" width=\"6\" border=\"0\" />";
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
						  "C"=>"Frequency : �к���§ҹ���蹤������",						  
						  "P" =>"DW/DM - SAS Web Portal" ,
						  "R" =>"DW/DM - SAS Web Report Studio" ,
						  "W" =>"DM - Web Data Entry" ,
						  "F" =>"DW/DM - FTP / Shared Files",
						  "G" => "DW/DM - SAS Enterprise Giude (E-Guide)",
					      "A" => "DW/DM - SAS Microsoft Add-In",
						  "M" =>"MY Report",
						  "D" =>"Event Base Marketing",
						  "H" =>"Suspend CDRs");


// function 㹡��������
function sendMail($rsData , $option = ''){
global $authority;
							
																				
/*
$arrQuestion = array("1"=>"�ѹ���س������ӧҹ��� �ʷ",
 							 "2"=>"���˹��á���س��ӧҹ� �ʷ",
							 "3"=>"�����ѵ������§���س�ͺ",
							 "4"=>"����¹ö+��ҹ�Ţ���",
							 "5"=>"������ö+�շ��س��ҡ��"
							);
*/
																		
		$str = $rsData['PLEVEL'];
		$count = strlen(trim($str));
		
		$arr = array();
		$msg = "";
		for($i=0;$i<$count;$i++){
			$arr[]= substr($str , $i , 1);
			$msg .= "- �к��ҹ ".$authority[$arr[$i]]."<br>";
		}
		
 // multiple recipients
$to  = $rsData['USER_DESC']."<".$rsData['EMAIL'].">"; // note the comma
//$to .= 'wez@example.com';

// subject
//$subject = '�����ʼ�ҹ��Т����ż����ҹ�к� BIS : '.$rsData['USER_DESC'];
$subject = 'BIS User Informations : '.$rsData['EMP_ID'];

$passw = '���������ǡѺ email';

$lastLogin = $rsData['LAST_LOGIN']==""?"-":datethaiTime($rsData['LAST_LOGIN']);


// message

$message  =  "<table width=\"100%\" border=\"0\" align=\"center\" cellpadding=\"1\" cellspacing=\"1\" bgcolor=\"#666666\" >";
$message  .= "  <tr bgcolor=\"#666666\">";
$message  .= "    <td><table width=\"99%\" border=\"0\" align=\"center\" cellpadding=\"2\" cellspacing=\"1\" bgcolor=\"#FFFFFF\">";
$message  .= "      <tr>";
$message  .= "        <td height=\"75\" colspan=\"2\"> &nbsp;&nbsp;<b><img src=\"https://bis.cattelecom.com/images/logo-cat-01.gif\" width=\"185\" height=\"62\" align=\"absmiddle\" /> <font face=\"Tahoma\" color=\"#666666\" size=\"2\"> �к����ʹ�ȷҧ��áԨ (Business Information Systems)</font></b></td>";
$message  .= "        </tr>";
$message  .= " <tr>";
$message  .= "        <td colspan=\"2\" align=\"center\" bgcolor=\"#666666\" height=\"2\"></td>";
$message  .= "        </tr>";
$message  .= "<tr>";
$message  .= "        <td align=\"center\">&nbsp;</td>";
$message  .= "        <td>&nbsp;</td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td align=\"center\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">����ͧ</font> </td>";
$message  .= "        <td><font face=\"Tahoma\" color=\"#666666\" size=\"2\">�����ʼ�ҹ��Т����ż����ҹ</font></td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td width=\"12%\" align=\"center\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">���¹ </font></td>";
$message  .= "        <td width=\"88%\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">".$rsData['USER_DESC']."</font></td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td>&nbsp;</td>";
$message  .= "        <td><table width=\"100%\" border=\"0\" cellpadding=\"2\" cellspacing=\"1\" bgcolor=\"#CCCCCC\">";
$message  .= "          <tr>";
$message  .= "            <td colspan=\"2\" align=\"center\" bgcolor=\"#D2E9FF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;&nbsp;<strong>�����ż����ҹ</strong></font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\" ><font face=\"Tahoma\" color=\"#666666\" size=\"2\">���ͼ����ҹ :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$rsData['USERNAME']."</font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td width=\"25%\" align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">���ʼ�ҹ BIS:</font></td>";
$message  .= "            <td width=\"75%\" bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$passw."</font></td>";
$message  .= "          </tr>";
/*
  if(isAuthDWDMPrg($rsData['PLEVEL']) == true){ // ��Ǩ�ͺ�����ҹ Program DW/DM ��  E-Guide , MS-AddIn
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\" ><font face=\"Tahoma\" color=\"#666666\" size=\"2\">* ���ʼ�ҹ : DW/DM</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".base64_decode($rsData['PASS_DW'])."</font></td>";
$message  .= "          </tr>";
		}*/
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">������ :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$rsData['EMAIL']."</font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">������ :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$rsData['TELEPHONE']."</font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">�ѹ������آͧ���ʼ�ҹ :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".datethai($rsData['EXPIRE_DATE'])."</font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">�ѹ�����ҹ����ش :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$lastLogin."</font></td>";
$message  .= "          </tr>";
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">URL :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;https://bis.cattelecom.com</font></td>";
$message  .= "          </tr>";





/*
$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">��Ǵ�Ӷ���ѹ��� :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".$arrQuestion[$rsData['FORGOT_QUESTION']]."</font></td>";
$message  .= "          </tr>";

$message  .= "          <tr>";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">�ӵͺ�ѹ��� :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">&nbsp;".base64_decode($rsData['FORGOT_ANSWER'])."</font></td>";
$message  .= "          </tr>";
*/
$message  .= "          <tr valign=\"top\">";
$message  .= "            <td align=\"right\" bgcolor=\"#EEEEEE\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">�Է���㹡����ҹ :</font></td>";
$message  .= "            <td bgcolor=\"#FFFFFF\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\">".$msg."</font></td>";
$message  .= "          </tr>";
$message  .= "        </table></td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td align=\"center\"><font face=\"Tahoma\" color=\"#ff0000\" size=\"2\">�����˵�*</font></td>";
$message  .= "        <td align=\"left\"><font face=\"Tahoma\" color=\"#ff0000\" size=\"2\">1. �����쩺Ѻ������繤����Ѻ �����觵�����索Ҵ</font></td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td align=\"center\">&nbsp;</td>";
$message  .= "        <td align=\"left\"><font face=\"Tahoma\" color=\"#ff0000\" size=\"2\">2. �ҡ�բ��ʧ����� ��سҵԴ��ͼ������к�  ������ 7320</font></td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td align=\"center\">&nbsp;</td>";
$message  .= "        <td align=\"left\">&nbsp;</td>";
$message  .= "      </tr>";

/*  if(isAuthDWDMPrg($rsData['PLEVEL']) == true){ // ��Ǩ�ͺ�����ҹ Program DW/DM ��  E-Guide , MS-AddIn
$message  .= "      <tr>";
$message  .= "        <td align=\"center\">&nbsp;</td>";
$message  .= "        <td align=\"left\"><font face=\"Tahoma\" color=\"#ff0000\" size=\"2\">���ʼ�ҹ DW/DM ��㹡óշ�����Է��������ҹ����� �ѧ��� <br>1. SAS Enterprise Guide <br>2. Microsoft Add-In<br>������ͼ����ҹ���ǡѺ�к� BIS</font></td>";
$message  .= "      </tr>";
}*/

$message  .= "      <tr>";
$message  .= "        <td align=\"center\">&nbsp;</td>";
$message  .= "        <td align=\"left\">&nbsp;</td>";
$message  .= "      </tr>";
$message  .= "      <tr>";
$message  .= "        <td colspan=\"2\" align=\"center\"><font face=\"Tahoma\" color=\"#666666\" size=\"2\"><br>";
$message  .= "        ���¤����Ѻ���</span> <br>";
$message  .= "         ��ǹ�к����ʹ�����͡�ú��������ʶԵ� (͸.)<br />";
$message  .= "          ���¡��ط��෤��������ʹ�� (��.)<br>";
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
//$headers .= 'To: ��� ���о��� ��ǹ�ҹ<piyapong.k@cattelecom.com>' . "\r\n";
$headers .= 'From : Webmaster BIS <surapon.h@cattelecom.com>' . "\r\n";
$headers .= 'Cc:  Webmaster BIS <surapon.h@cattelecom.com>' . "\r\n";
//$headers .= 'Bcc: Webmaster BIS <piyapong.k@cattelecom.com>' . "\r\n";

// Mail it
$result = mail($to, $subject, $message, $headers);
	if($result){
	   if($option == ''){
		echo "<br><span style=\"color:green;font-weight:bold\">�к����觢����� ���ʼ�ҹ��м����ҹ���º����!! <br>��سҵ�Ǩ�ͺ����������  <font color='blue'>".$rsData['EMAIL']."</font> </span><br>&nbsp;<br>";	
		echo "<br><input type=\"button\" name=\"button\" id=\"button\" value=\"��Ѻ˹����ѡ\" onclick=\"window.location = 'https://bis.cattelecom.com'\" style=\"cursor:pointer\" /><br>&nbsp;";
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
