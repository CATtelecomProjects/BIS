
<?php


 if (!defined('MODULE_FILE')) {
 	die ("You can't access this file directly...");
 }

 require_once("mainfile.php");
 $module_name = basename(dirname(__FILE__));  //���� module


//�ͧ���һѨ�غѹ  global $currentlang  ��Ш�  @include_once("modules/$module/language/lang-".$language.".php");
 get_lang($module_name);


 $ThemeSel = get_theme();
// echo $ThemeSel;

 
 include("header.php");





#########################################################################
	function Main(){
	global $prefix, $db, $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;
	OpenTable();  
?>

<div id="divWebboardSecter">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="center" class="subtitle">��дҹ����</td>
    </tr>
    <tr>
      <td height="30" align="right"><a href="modules.php?name=Webboard&amp;op=createtopic"><img src="./modules/Webboard/images/icons-post.gif" border="0" align="absmiddle"  style="cursor:pointer" title="��駡�з������"/></a></td>
    </tr>
  </table>
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" style="border-collapse:collapse">
    
    <tr>
      <td width="4%" height="25" align="center" background="../../images/grid-hrow.gif" bgcolor="#CCCCCC"><strong>�ӴѺ</strong></td>
      <td width="53%" align="center" background="../../images/grid-hrow.gif" bgcolor="#CCCCCC"><strong>��Ǣ�͡�з��</strong></td>
      <td width="14%" align="center" background="../../images/grid-hrow.gif" bgcolor="#CCCCCC"><strong>��</strong></td>
      <td width="19%" align="center" background="../../images/grid-hrow.gif" bgcolor="#CCCCCC"><strong>�����</strong></td>
      <td width="5%" align="center" background="../../images/grid-hrow.gif" bgcolor="#CCCCCC"><strong>��ҹ</strong></td>
      <td width="5%" align="center" background="../../images/grid-hrow.gif" bgcolor="#CCCCCC"><strong>�ͺ</strong></td>
    </tr>
    <?php
$sqlList ="SELECT * FROM nuke_webboard_topics ORDER BY topic_id DESC";		  
$result = $db->sql_query($sqlList);
$numrow = $db->sql_numrows($result);
if( $numrow > 0){
/*
if(isset($_GET[page])) $page = $_GET[page]; else  $page = 1;				
		$recordPerPage=10;  // �ӹǹ�����ŷ���ʴ���� 1 ˹��
		$noallarrData = count($rsList);  //�Ѻ�ӹǹ�����ŷ�����
		$paging=showRecord($noallarrData,$recordPerPage,$page); // �ѧ����㹡�����ҧ˹��
		$totalPage=$paging['totalPage'];  // ˹�ҷ�����
		$beginRec=$paging['BeginRecord'];  // �ä�����������
		$endRec=$paging['EndRecord'];  // �ä��������ش
		$linkpage ="modules.php?name=Webboard";
	   for($i = $beginRec ; $i <= $endRec ; $i++){	
	*/	
	//for($i=0;$i<count($rsList);$i++){
	$i=1;
while($rsList = $db->sql_fetchrow($result)) {
if($i % 2 == 1){ $bg = "#FFECFF"; }else{ $bg = "#FFFFFF"; }
?>
    <tr  bgcolor="<?=$bg;?>" onMouseOver="style.backgroundColor='#FFFFDD';" onMouseOut="style.backgroundColor='<?=$bg;?>';">
      <td align="center"><?=($i)?></td>
      <td><a href="modules.php?name=Webboard&op=viewtopic&topic_id=<?=$rsList['topic_id']?>">
        <?=$rsList['topic_title'];?> </a> <?=newUpdate($rsList['topic_postdate']);?></td>
      <td align="left"><?=$rsList['topic_postby'];?>      </td>
      <td align="center"><?=showdateThaiShort($rsList['topic_postdate']);?></td>
      <td align="center"><?=$rsList['topic_hits_read'];?></td>
      <td align="center"><?=$rsList['topic_hits_reply'];?></td>
    </tr>
    <? 
		$i++;
		}
	}else{ ?>
    <tr>
      <td colspan="6" align="center" bgcolor="#FFFFFF" class="TextWarning"> ��辺��Ǣ�͡�з��</td>
    </tr>
    <? } ?>
  </table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    
    <tr>
      <td height="30" align="right"><a href="modules.php?name=Webboard&amp;op=createtopic"><img src="./modules/Webboard/images/icons-post.gif" border="0" align="absmiddle"  style="cursor:pointer" title="��駡�з������"/></a></td>
    </tr>
  </table>
  </div>
<?						
CloseTable();	
	} // End Functio Main 
	
	
#########################################################
	function createtopic(){
	global $prefix, $db, $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;
	OpenTable(); 
	/*
	if(!isset($_SESSION['login'])){
		pageback("index.php","��سҷӡ�� Login ��͹�ӡ�õ�駡�з������");
	}else{
    */
	
	#======= Add Topic ===========#
	if($_POST['doAction'] =="AddTopic"){
	
	//if(isAuth()){ $postby = $_SESSION['emp_name']; }else{ $postby = $_POST['topic_postby']; }
	
	  $sql = "INSERT INTO 
							nuke_webboard_topics 
							(topic_title,topic_desc,topic_postby,topic_postdate)
				VALUES('$_POST[topic_title]','".$_POST['topic_desc']."','$_POST[topic_postby]',Now())";
	$db->sql_query($sql);
	pageback("modules.php?name=Webboard","��駡�з�����º�������� !!");
	}
	
	
	?>
<script language="javascript">
<!--
	function chkForm(){
		var frm = document.frmTopic;
	
		if(frm.topic_postby.value==""){
			alert("��͡���ͼ������Ǣ�͡�з�� !!");
			frm.topic_postby.focus();
			return false;
		}

		
		if(frm.topic_title.value == ""){
			alert("��͡��Ǣ�͡�з�� !!");
			frm.topic_title.focus();
			return false;
		}else{
			frm.doAction.value ="AddTopic";
			return true;			
		}
	}
-->	
</script>	
<div id="divWebboardSecter">
<table width="100%" border="0" align="center" cellpadding="2" cellspacing="1">
  
  <tr>
    <td width="100%" align="left" valign="top"><form id="frmTopic" name="frmTopic" method="post" action="" onsubmit="return chkForm()">
        <table width="100%" border="0" cellspacing="1" cellpadding="2">
        
          <tr>
            <td align="center" background="../../images/grid-hrow.gif"><a href="modules.php?name=Webboard">&lt;&lt; ��Ѻ˹�ҡ�з��</a></td>
            <td height="25" align="center" background="../../images/grid-hrow.gif"><strong>��駡�з������</strong></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>��駡�з���� : </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="topic_postby" type="text" class="inputText" id="topic_postby" size="40" /></td>
          </tr>
          
          <tr>
            <td width="15%">&nbsp;</td>
            <td width="85%">��Ǣ�͡�з�� : </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input name="topic_title" type="text" class="inputText" id="topic_title" size="60" />
              </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>��������´��з�� : </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <textarea name="topic_desc" cols="100%" rows="5" id="topic_desc"></textarea>
              </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input name="Submit" type="submit" class="button" value=" ��駡�з�� " />
              <input name="Submit2" type="button" class="button" value="  ¡��ԡ " onclick="window.location='modules.php?name=Webboard';"/>
              <input name="doAction" type="hidden" id="doAction" />
            </label></td>
          </tr>
        </table>
      </form></td>
  </tr>
</table>
</div>
<?
		//	} // if(!isset($_SESSION['login'])){
	CloseTable();
	} // End Function
	
#########################################################
	function viewtopic(){
	global $prefix, $db, $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;
	OpenTable(); 
	/*
	if(!isset($_SESSION['login'])){
		pageback("index.php","��سҷӡ�� Login ��͹�ӡ�õͺ��з��");
	}else{
*/
	// ����������ǹ�ͧ�ӹǹ�����Ҵ�
	$sqlUpdateHitsPost = "UPDATE nuke_webboard_topics SET topic_hits_read=topic_hits_read+1 WHERE topic_id=$_GET[topic_id]";
	$db->sql_query($sqlUpdateHitsPost);
	
	// �ʴ���Ǣ�͡�з��
	$sqlshowTopic = "SELECT
									 topic_id , topic_title , topic_desc , topic_postby , topic_postdate , topic_hits_read , topic_hits_reply  
								FROM
										nuke_webboard_topics
								WHERE topic_id=$_GET[topic_id]";
		$result = $db->sql_query($sqlshowTopic);
		$rsShowTopic = $db->sql_fetchrow($result);				
	
		
	#======= Add Topic ===========#
	if($_POST['doAction'] =="ReplyTopic"){
	
	//if(isAuth()){ $postby = $_SESSION['emp_name']; }else{ $postby = $_POST['reply_by']; }
	
	 $sql = "INSERT INTO 
							nuke_webboard_reply  
							(topic_id,reply_desc,reply_by,reply_date)
				VALUES('$_GET[topic_id]','".$_POST['reply_desc']."','$_POST[reply_by]',Now())";
	$db->sql_query($sql);
	
	// ����������ǹ�ͧ�ӹǹ���ͺ
	$sqlUpdateHitsReply = "UPDATE nuke_webboard_topics SET topic_hits_reply=topic_hits_reply+1 WHERE topic_id=$_GET[topic_id]";
	$db->sql_query($sqlUpdateHitsReply);
	pageback("modules.php?name=Webboard&op=viewtopic&topic_id=$_GET[topic_id]","�ͺ��з�����º�������� !!");
	}
	
	
	?>
<br />
<script language="javascript"><!--
	function chkForm(){
		var frm = document.frmReplyTopic;		
		
		if(frm.reply_by.value==""){
			alert("��͡���ͼ��ͺ��Ǣ�͡�з�� !!");
			frm.reply_by.focus();
			return false;
		}
	
			frm.doAction.value ="ReplyTopic";
			return true;			
	}
-->	
</script>	
<div id="divWebboardSecter"> &nbsp;&nbsp;&nbsp;&nbsp;<a href="modules.php?name=Webboard">&lt;&lt; ��Ѻ˹�ҡ�з��</a><br />
  <br />
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td valign="top"><table cellspacing="0" cellpadding="0" width="100%" align="center" bgcolor="#CCCCCC" border="0">
        <tbody>
          <tr>
            <td><table cellspacing="1" cellpadding="0" width="100%" align="center" border="0">
              <tbody>
                <tr>
                  <td height="22"  colspan="2" background="../../images/grid-hrow.gif" bgcolor="#F6F6F6"><table cellspacing="0" cellpadding="0" width="100%" border="0">
                    <tbody>
                      <tr>
                        <td width="72%"> &nbsp;<strong><span class="bodyTextBold">��Ǣ�͡�з�� :  </span><span class="tableHeader"><?=$rsShowTopic['topic_title']?></span>
                          
                          </span></strong>(��ҹ<span class="active">
                            <?=number_format($rsShowTopic['topic_hits_read']);?>
                            </span>�ͺ<span class="active">
                              <?=number_format($rsShowTopic['topic_hits_reply']);?></span>)
                          <!--�����Դ��繷��</span> :<font color="#D12E32"><b> --></td>
                          <td align="right"><a href="modules.php?name=Webboard&amp;op=createtopic"></a><strong> </strong><a href="#replyForm"><img src="./modules/Webboard/images/icons-reply.gif" border="0" align="absmiddle"  style="cursor:pointer" title="�ͺ��Ѻ��з��"/></a><a href="modules.php?name=Webboard&amp;op=createtopic"> <img src="./modules/Webboard/images/icons-post.gif" border="0" align="absmiddle"  style="cursor:pointer" title="��駡�з������"/></a> �&nbsp;</td>
                          </tr>
                      </tbody>
                    </table></td>
                  </tr>
                <tr bgcolor="#ffffff">
                  <td width="24%" valign="top" bgcolor="#EEEEEE"><table width="100%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#FFFFFF" style="border-collapse:collapse">
                    <tbody>
                      
                      <tr>
                        <td width="93%" align="left" valign="top">�� :                          
                          <span class="active"><?=$rsShowTopic['topic_postby'];?></span></td>
                      </tr>
                      <tr>
                        <td valign="top" align="left">����� :
                          <span class="active"><?=showdateThai($rsShowTopic['topic_postdate']);?></span></td>
                      </tr>
                    </tbody>
                  </table></td>
                  <td width="76%" align="left" valign="top" bgcolor="#ffffff"><table cellspacing="0" cellpadding="5" width="100%" border="0">
                    <tbody>
                      <tr>
                        <td width="1%"></td>
                        <td width="96%" colspan="2" align="justify" valign="top"><?=$rsShowTopic['topic_desc']?>                          <br /></td>
                        <td width="2%">� </td>
                      </tr>
                    </tbody>
                  </table>                    </td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
  <br />
  <br />
  

      <?php
$sqlListReply ="SELECT * FROM nuke_webboard_reply WHERE topic_id=$_GET[topic_id] ORDER BY reply_id ASC";		  
$result = $db->sql_query($sqlListReply);
$numrow = $db->sql_numrows($result);
if( $numrow > 0){

/*if(isset($_GET[page])) $page = $_GET[page]; else  $page = 1;				
		$recordPerPage=10;  // �ӹǹ�����ŷ���ʴ���� 1 ˹��
		$noallarrData = count($rsListReply);  //�Ѻ�ӹǹ�����ŷ�����
		$paging=showRecord($noallarrData,$recordPerPage,$page); // �ѧ����㹡�����ҧ˹��
		$totalPage=$paging['totalPage'];  // ˹�ҷ�����
		$beginRec=$paging['BeginRecord'];  // �ä�����������
		$endRec=$paging['EndRecord'];  // �ä��������ش
		$linkpage ="modules.php?name=Webboard&op=viewtopic&topic_id=$_GET[topic_id]";
	   for($i = $beginRec ; $i <= $endRec ; $i++){	*/
	   $i=1;
	   while($rsListReply = $db->sql_fetchrow($result)) {
if($i % 2 == 1){ $bg = "#D1F3F8"; }else{ $bg = "#FFFFFF"; }
  ?>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td valign="top"><table cellspacing="0" cellpadding="0" width="100%" align="center" bgcolor="#CCCCCC" border="0">
            <tbody>
              <tr>
                <td><table cellspacing="1" cellpadding="0" width="100%" align="center" border="0">
                    <tbody>
                      
                      <tr bgcolor="#ffffff">
                        <td width="24%" valign="top">
						<table width="100%" border="1" align="center" cellpadding="5" cellspacing="0" bordercolor="#FFFFFF" class="tbl"  style="border-collapse:collapse">
                            <tbody>
                              <tr>
                                <td align="left" valign="top" background="../../images/grid-hrow.gif" bgcolor="#E1F0FF">�����Դ��繷�� : <span class="active">
                                  <?=($i)?>
                                </span></td>
                              </tr>
                              <tr>
                                <td width="93%" align="left" valign="top" bgcolor="#FFFFFF">�ͺ�� : <span class="active">
                                  <?=$rsListReply['reply_by'];?>
                                </span></td>
                              </tr>
                              <tr>
                                <td align="left" valign="top" bgcolor="#FFFFFF">����� : <span class="active">
                                  <?=showdateThai($rsListReply['reply_date']);?>
                                </span></td>
                              </tr>
                            </tbody>
                        </table></td>
                        <td width="76%" align="left" valign="top" bgcolor="#ffffff"><table cellspacing="0" cellpadding="5" width="100%" border="0">
                            <tbody>
                              <tr>
                                <td width="1%"></td>
                                <td width="96%" colspan="2" align="justify" valign="top"><?=$rsListReply['reply_desc']?>
                                    <br /></td>
                                <td width="2%">� </td>
                              </tr>
                            </tbody>
                        </table></td>
                      </tr>
                    </tbody>
                </table>
                </td>
              </tr>
            </tbody>
        </table></td>
      </tr>
    </tbody>
  </table>
  
  <br />
  <? 
  	$i++;
  } // For Loop
  ?>
  <br />
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="20" align="center"><? //if(count($rsListReply)){ echo genPaging($page,$totalPage,$linkpage); } ?>      </td>
    </tr>
  </table>
  <?
  }else{
  ?>
  
  <table cellspacing="1" cellpadding="0" width="98%" align="center" border="0" class="box">
    <tbody>
      <tr bgcolor="#ffffff">
        <td align="center">�ѧ����ա�õͺ㹡�з����</td>
      </tr>
    </tbody>
  </table>
<? } ?>
<a name="replyForm" id="replyForm"></a><br />
<table width="98%" border="0" align="center" cellpadding="2" cellspacing="1">
  
  <tr>
    <td width="100%" align="left" valign="top"><form id="frmReplyTopic" name="frmReplyTopic" method="post" action="" onsubmit="return chkForm()">
        <table width="100%" border="0" cellspacing="1" cellpadding="2">
          <tr>
            <td height="25" colspan="2" background="../../images/grid-hrow.gif"> &nbsp;&nbsp;�ͺ��з�� : <strong><span class="bodyTextBold">
              <?=$rsShowTopic['topic_title']?>
            </span></strong></td>
            </tr>
          
          <tr>
            <td>&nbsp;</td>
            <td>�ͺ��з���� : </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input name="reply_by" type="text" class="inputText" id="reply_by" size="40" /></td>
          </tr>
          
          <tr>
            <td width="20%">&nbsp;</td>
            <td width="80%">��������´ : </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <textarea name="reply_desc" cols="100%" rows="5" id="reply_desc"></textarea>
              </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input name="Submit" type="submit" class="button" value="�ͺ��з�� " />
              <input name="Submit2" type="reset" class="button" value="  ¡��ԡ " />
              <input name="doAction" type="hidden" id="doAction" />
            </label></td>
          </tr>
        </table>
      </form></td>
  </tr>
</table>
</div>
<?
		//	} // if(!isset($_SESSION['login'])){
		CloseTable();
	} // End Function	


switch($op) { // �Դ $op �ҡ GET �����

		case "createtopic": 
			createtopic();
		break;
		case "viewtopic": 
			viewtopic();
		break;		
		default ;
			Main();
		break;


}

include("footer.php"); 
?>
  

    
	