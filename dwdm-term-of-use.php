<script type="text/javascript">
	$(function(){
		
		$('#btn_ok').attr('disabled', true).addClass( 'ui-state-disabled' );
		
		$('#bi_report_accept').click(function(){
				if($(this).is(":checked")){					
					$('#btn_ok').attr('disabled', false).removeClass( 'ui-state-disabled' );
				}else{
					$('#btn_ok').attr('disabled', false).addClass( 'ui-state-disabled' );
				}
		});
		
		
		
		//Button
				$("#btn_ok").button({
				icons: {
					primary: 'ui-icon-check'
				}				
				}).click( function() {
					
					<? if($_SESSION['usr'] <> 'catsysmo'){  ?>
									$.get("./modules/Login/event_log.php?sysname=DW/DM Web Portal&denied=1" , function(data){
											window.location="CntUsr.php?select=R";	
										//	alert('ขออภัย!! ขณะนี้ไม่สามารถใช้รายงานโมดูล FI ได้ชั่วคราว \n มีข้อสงสัยติดต่อได้ที่เบอร์ 7336 ');
											//divLoadEventPortal	
									});									
									
							<? } ?>
						$( '#dialog_dwdm' ).dialog( "close" );
					
				});
				
				
				$("#btn_cancel").button({
					  icons: {
						primary: "ui-icon-closethick"				
					  }
				}).click( function() {
					
						$( '#dialog_dwdm' ).dialog( "close" );
					
				});
		
	});
</script>
<style type="text/css">
.mycss {
	background-color:#fff;
	border-radius: 4px;
	-moz-border-radius: 4px;
	-webkit-box-shadow: 0 1px 2px #CCC;
	-moz-box-shadow: 0 1px 2px #CCC;
	box-shadow: 0 1px 2px #CCC;
	border-color:#366;
	border:#ccc solid 1px;
}
</style>
<table width="99%" align="center" cellpadding="8" cellspacing="0" class="mycss">
  <tbody>
    <tr>
      <td colspan="2" ><div > 
        <p><strong>          <br />
          ผู้ใช้งานตกลงยินยอมผูกพันตามข้อตกลง และเงื่อนไขการใช้บริการคลังข้อมูลสารสนเทศทางธุรกิจ (DW/DM) ดังต่อไปนี้</strong><br>
        </p>
<dd>1. การกระทำใดๆ ที่ผู้ใช้งานกระทำผ่านระบบ DW/DM หรือการนำข้อมูลจากระบบ DW/DM ไปใช้งานหรือเผยแพร่ โดยใช้รหัสประจำตัว (User ID) และ/หรือรหัสผ่าน (Password) ของผู้ใช้งานที่ได้รับมอบจากองค์กร ไม่ว่าเป็นการกระทำของผู้ใช้งาน หรือบุคคลอื่นไม่ว่าด้วยประการใดก็ตาม ผู้ใช้งานตกลงให้ถือว่าเป็นการกระทำที่ถูกต้องสมบูรณ์ของผู้ใช้งาน และให้มีผลผูกพันผู้ใช้งานเสมือนหนึ่งได้กระทำโดยผู้ใช้งานเอง และผู้ใช้งานยินยอมผูกพันรับผิดชอบในการนำข้อมูลจากระบบ DW/DM ซึ่งถือเป็นข้อมูลขององค์กรไปใช้ในทางที่ก่อให้เกิดความเสียหายแก่องค์กร โดยผู้ใช้งานไม่ต้องทำ หรือลงลายมือชื่อในเอกสารใดๆ เพื่อเป็นหลักฐานในการกระทำนั้นอีก เว้นแต่ระบบจะได้แจ้งหรือจะมีการกำหนดไว้อย่างชัดเจน โดยผู้ใช้งานตกลงว่า ระบบไม่ต้องรับผิดชอบใดๆ ในความเสียหายที่เกิดขึ้นจากการกระทำดังกล่าวข้างต้น</dd>
          <br>
          <dd> 2. ผู้ใช้งานตกลงยินยอมผูกพัน และปฏิบัติตามระเบียบและ/หรือวิธีปฏิบัติที่เกี่ยวกับหรือเกี่ยวข้องกับการใช้งานระบบ DW/DM รวมทั้งตกลงยินยอมผูกพัน และปฏิบัติตามคู่มือและ/หรือเอกสารใดๆ ที่เกี่ยวข้องกับการใช้งานระบบ DW/DM ทั้งที่มีอยู่ก่อนแล้วและ/หรือที่จะมีประกาศกำหนดแก้ไขเปลี่ยนแปลงเพิ่มเติมในภายหลังตามที่ผู้ดูแลระบบจะได้แจ้งให้ทราบต่อไป</dd>
          <dd>&nbsp;</dd>
<br>
      </div></td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellspacing="5" cellpadding="2">
  <tr>
    <td width="50%"><label><input name="bi_report_accept" id="bi_report_accept" type="checkbox" value="Y"> ยอมรับข้อกำหนดของข้อตกลงนี้ </label></td>
    <td width="50%" align="right">
    <span class="btn_group">
    <button  name="btn_ok" id="btn_ok" > ตกลง</button>      <button  name="btn_cancel" id="btn_cancel" >ยกเลิก</button>
    </span>
    </td>
  </tr>
</table>

