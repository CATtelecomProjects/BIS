<?php
session_start();

//show_session();
?>
<script language="javascript">
$(function(){
	$("#kpi_keyin").click(function(){
			$("#div_kpi").html( '<img src="http://bis.cattelecom.com/cat-kpi/images/gif_ajax/ajax-loader6.gif"  align="absmiddle" /> รอสักครู่...') ;	
			$.get("cat-kpi/Auth.php", 
				function(data){ 
					window.location = "cat-kpi/index.php";
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
      <td height="307" valign="top">
        <table width="74%" border="0" cellspacing="1" cellpadding="0">
          <tr>
            <td height="263">
            <table width="110%" height="254" border="0" cellpadding="0"  cellspacing="0">
              <tr>
                <td width="16%" height="254">&nbsp;</td>
                <td width="84%" align="center">
                
                <?php
					$chk_auth = $_SESSION['klevel'];
					
	
					if($chk_auth == '1'){
						
				?>
                <img src="images/menu-kpi2.png" border="0" class="tooltips" style="cursor:pointer" title="เข้าระบบ CAT-KPIs" id="kpi_keyin" /></a><!--<br />
                  <a href="http://bis.cattelecom.com/prototype_kpi/"><img src="images/menu-kpi3.png" border="0" class="tooltips" style="cursor:pointer" title="เข้าระบบ CAT-KPIs" /></a>--><br>                  
                  <?php
				}
				?>  
                                    
                <img src="images/menu-kpi1.png"  class="tooltips" title="รับทราบ KPIs รายบุคคล"  style="cursor:pointer" onClick="fullscreen('cat-kpi/chk_emp_accept.php');closeMessage();return false;">
                <!-- 
                 <br>
                  <img src="images/menu-kpi4.png"  class="tooltips" title="คะแนน  KPIs"  style="cursor:pointer" onClick="fullscreen('cat-kpi/view_hr_emp_kpi.php');closeMessage();return false;">
  -->
                </td>
                <!-- onClick="alert('ขออภัย!! ยังไม่เปิดใช้งานในส่วน รับทราบ KPIs รายพนักงาน');" -->
                 
              </tr>
             
            </table></td>
          </tr>
          
          
        </table></td>
    </tr>
  </table>