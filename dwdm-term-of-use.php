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
										//	alert('������!! ��й���������ö����§ҹ����� FI ����Ǥ��� \n �բ��ʧ��µԴ����������� 7336 ');
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
          �����ҹ��ŧ�Թ����١�ѹ�����͵�ŧ ������͹䢡�����ԡ�ä�ѧ���������ʹ�ȷҧ��áԨ (DW/DM) �ѧ���仹��</strong><br>
        </p>
<dd>1. ��á�з��� �������ҹ��зӼ�ҹ�к� DW/DM ���͡�ùӢ����Ũҡ�к� DW/DM ���ҹ��������� �������ʻ�Шӵ�� (User ID) ���/�������ʼ�ҹ (Password) �ͧ�����ҹ������Ѻ�ͺ�ҡͧ��� �������繡�á�зӢͧ�����ҹ ���ͺؤ����������Ҵ��»�С��㴡��� �����ҹ��ŧ���������繡�á�зӷ��١��ͧ����ó�ͧ�����ҹ �������ռż١�ѹ�����ҹ����͹˹�����з��¼����ҹ�ͧ ��м����ҹ�Թ����١�ѹ�Ѻ�Դ�ͺ㹡�ùӢ����Ũҡ�к� DW/DM ��觶���繢����Ţͧͧ������㹷ҧ���������Դ�������������ͧ��� �¼����ҹ����ͧ�� ����ŧ�����ͪ�����͡����� ��������ѡ�ҹ㹡�á�зӹ���ա ������к����������ͨ��ա�á�˹�������ҧ�Ѵਹ �¼����ҹ��ŧ��� �к�����ͧ�Ѻ�Դ�ͺ�� 㹤���������·���Դ��鹨ҡ��á�зӴѧ����Ǣ�ҧ��</dd>
          <br>
          <dd> 2. �����ҹ��ŧ�Թ����١�ѹ ��л�ԺѵԵ������º���/�����Ըջ�ԺѵԷ������ǡѺ��������Ǣ�ͧ�Ѻ�����ҹ�к� DW/DM �����駵�ŧ�Թ����١�ѹ ��л�ԺѵԵ�����������/�����͡����� �������Ǣ�ͧ�Ѻ�����ҹ�к� DW/DM ��駷���������͹�������/���ͷ����ջ�С�ȡ�˹��������¹�ŧ�������������ѧ������������к�����������Һ����</dd>
          <dd>&nbsp;</dd>
<br>
      </div></td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellspacing="5" cellpadding="2">
  <tr>
    <td width="50%"><label><input name="bi_report_accept" id="bi_report_accept" type="checkbox" value="Y"> ����Ѻ��͡�˹��ͧ��͵�ŧ��� </label></td>
    <td width="50%" align="right">
    <span class="btn_group">
    <button  name="btn_ok" id="btn_ok" > ��ŧ</button>      <button  name="btn_cancel" id="btn_cancel" >¡��ԡ</button>
    </span>
    </td>
  </tr>
</table>

