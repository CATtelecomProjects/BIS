<?php
session_start();
?>
<script language="javascript">
$(function(){
	$("#my_day").click(function(){
			$("#div_kpi").html( '<img src="http://bis.cattelecom.com/cat-kpi/images/gif_ajax/ajax-loader6.gif"  align="absmiddle" /> รอสักครู่...') ;	
			$.get("my_report/index.php", 
				function(data){ 
					window.location = "my_report/";
			});	
	});
	$("#my_month").click(function(){

		//alert('ทดลองการใช้งานระบบ DW/DM ข้อมูลที่แสดงในระบบเป็นเพียงข้อมูลตัวอย่างเท่านั้น');
$("#div_kpi").html( '<img src="http://bis.cattelecom.com/cat-kpi/images/gif_ajax/ajax-loader6.gif"  align="absmiddle" /> รอสักครู่...') ;	
				$.get("./modules/Login/event_log.php?sysname=DW/DM Web Portal&denied=1",	function(data){
											window.location="CntUsr.php?select=R&PortalPage=PortalPage%2Bomi%3A%2F%2FFoundation%2Freposname%3DFoundation%2FPSPortalPage%3Bid%3DA5XM3OF3.C40000O4";	
			});
					});
$("#my_life_time").click(function(){
			$("#div_kpi").html( '<img src="http://bis.cattelecom.com/cat-kpi/images/gif_ajax/ajax-loader6.gif"  align="absmiddle" /> รอสักครู่...') ;	
			$.get("my_report/my_life_time.php", 
				function(data){ 
					window.location = "my_report/my_life_time.php";
			});	
	});

});
</script>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <!--<tr>
      <td height="22"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-collapse:collapse">
          <tr  class='dragme'>
            <td><img src="./images/popup/clg.gif" width="5" height="28"/></td>
            <td width="100%"  style="background-image:url(./images/popup/chg.gif)"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td width="98%"><span class="tableHeader"><span style="border-bottom-style:dotted; border-bottom-width:1px"></span><b class="textBodyRed">เลือกการทำงาน</b></span></td>
                  <td width="2%" align="center"><img src="./images/icon-close.png"  border="0" onclick="closeMessage();return false" style="cursor:pointer" title="ปิดหน้าต่างนี้" /></td>
                </tr>
              </table></td>
            <td align="right" valign="top"><img src="./images/popup/crg.gif" width="5" height="28"/></td>
          </tr>
        </table></td>
    </tr>-->
    <tr >
      <td height="100%" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="0">
          <tr>
            <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="3%" height="35">&nbsp;</td>
                <td width="97%" colspan="2" align="center"><span id="div_kpi"></span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td colspan="2" align="center">
                
                <?php
					$chk_auth = $_SESSION['klevel'];
					
	$chk_auth = 1;
					if($chk_auth == '1'){
						
				?>
                <img src="images/my_day.png" border="0" class="tooltips" style="cursor:pointer" title="รายงาน  my (รายวัน)" id="my_day" /></a><!--<br />
                  <a href="http://bis.cattelecom.com/prototype_kpi/"><img src="images/menu-kpi3.png" border="0" class="tooltips" style="cursor:pointer" title="เข้าระบบ CAT-KPIs" /></a>--><br> <br> <br>         
                  <?php
				}
				?>
				
                <img src="images/my_month.png"  class="tooltips" title="รายงาน  my (รายเดือน)"  style="cursor:pointer"  id="my_month">
<br> <br> <br>         
                 <img src="images/my_life_time.png"  class="tooltips" title="รายงาน  my (Lifetime)"  style="cursor:pointer"  id="my_life_time">
</td>
                <!-- onClick="alert('ขออภัย!! ยังไม่เปิดใช้งานในส่วน รับทราบ KPIs รายพนักงาน');" -->

              </tr>
              <tr>
                <td colspan="3" align="center">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
    </tr>
  </table>
  