<?php


 if (!defined('MODULE_FILE')) {
 	die ("You can't access this file directly...");
 }

 require_once("mainfile.php");
 include("includes/ipban.php");
 $module_name = basename(dirname(__FILE__));  //ชื่อ module


//มองภาษาปัจจุบัน  global $currentlang  และจะ  @include_once("modules/$module/language/lang-".$language.".php");
 get_lang($module_name);


 $ThemeSel = get_theme();
// echo $ThemeSel;

 
 include("header.php");


function HeadBlock(){
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="40" align="center"><span class="title_block">BIS Gallery Online</span></td>
  </tr>
</table>
<?
}


function SlideShow($id)
{
	global $prefix, $db, $user_prefix, $Version_Num, $module_name, $textcolor1 , $ThemeSel ,  $bgcolor2;
	
	OpenTable();  
	
	HeadBlock();
	
	$rows = $db->sql_fetchrow($db->sql_query("SELECT id,  title ,url, description , hits , postdate   FROM ".$prefix."_gallery WHERE id=$id"));
	$db->sql_query("UPDATE ".$prefix."_gallery  SET hits = hits +1  WHERE id=$id");
	
	
	?>
	<!--  html   -->


<table width="100%" border="0" cellspacing="2" cellpadding="0">
  
  <tr>
    <td height="25" align="center"><?=$rows['title']?></td>
  </tr>
  <tr>
    <td height="29" align="center"><?=$rows['description']?></td>
  </tr>
  <tr>
    <td width="97%" align="center"><table width="530" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
          <tr>
            <td align="center"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="530" height="400" align="middle">
              <param name="FlashVars" value="assetsRSS=<?=$rows['url']?>" />
              <param name="Movie" value="http://sc1.sclive.net/12.2.1268.1026/Web/Parts/PhotoAlbum/script/slideshow.swf" />
              <param name="Src" value="http://sc1.sclive.net/12.2.1268.1026/Web/Parts/PhotoAlbum/script/slideshow.swf" />
              <param name="WMode" value="opaque" />
              <param name="Quality" value="High" />
              <param name="SAlign" value="LT" />
              <param name="Menu" value="1" />
              <param name="Base" value="" />
              <param name="AllowScriptAccess" value="always" />
              <param name="BGColor" value="000000" />
              <param name="SWRemote" value="" />
              <param name="AllowNetworking" value="all" />
              <embed src="http://sc1.sclive.net/12.2.1268.1026/Web/Parts/PhotoAlbum/script/slideshow.swf" quality="high" FlashVars="assetsRSS=<?=$rows['url'];?>" wmode="opaque" width="530" height="400" align="middle" allowscriptaccess="always" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
            </object></td>
          </tr>
        </table>          </td>
  </tr>
  

  <tr>
    <td height="30" align="center"  bgcolor="<?=$bgcolor1;?>">โพสต์เมื่อ : 
      <?=showdateThai($rows['postdate'])?> 
      | จำนวนคนเข้าดู :  <b><?=$rows['hits']?>
    </b> ครั้ง&nbsp;</td>
  </tr>
</table>


	<?
	CloseTable();

}













switch($op) { // เปิด $op จาก GET ได้เลย
		default:		
		SlideShow($_GET['id']);	
	break;
	/*default:		
		$title = "งานเลี้ยงปีใหม่ กสท 2550 ";
		$postAt = "28-12-2550";
		$setUrl = "http://biscattelecom.spaces.live.com/photos/cns!6A6BFB5F92C87481!186/feed.rss";	
		SlideShow($setUrl,$title,$postAt);	
	break;

	case "NontSportDay2550":
		$title = "งานกีฬาสีศูนย์โทรคมนาคมนนทบุรี เมื่อ 20 ธ.ค. 2550";
		$postAt = "20-12-2550 ";
		$setUrl = "http://biscattelecom.spaces.live.com/photos/cns!6A6BFB5F92C87481!110/feed.rss";
		SlideShow($setUrl,$title,$postAt);	
	break;

	case "option2";
	option2();
	break;*/


}










include("footer.php"); 
?>
  

