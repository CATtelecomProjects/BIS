<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}">
<meta http-equiv="Content-Style-Type" content="text/css">
{META}
{NAV_LINKS}
<title>{SITENAME} :: {PAGE_TITLE}</title>
<!-- link rel="stylesheet" href="themes/phpBB2Plus/forums/forums.css" type="text/css" -->
<style type="text/css">
<!--
/* Based on the original Style Sheet for the subsilver v2 Theme for phpBB version 2+
Edited by Daz  - http:/www.forumimages.com - last updated 23-03-03 */

/* The content of the posts (body of text) */
body{background:#ecf0f6;color:#000000;font:12px 'MS Sans Serif', Verdana,Arial,Helvetica,sans-serif;margin:6px;padding:0;
scrollbar-3dlight-color:#d1d7dc;
scrollbar-arrow-color:#006699;
scrollbar-darkshadow-color:#98aab1;
scrollbar-face-color:#dee3e7;
scrollbar-highlight-color:#ffffff;
scrollbar-shadow-color:#dee3e7;
scrollbar-track-color:#efefef}

/* General font families for common tags */
th,p{font:12px 'MS Sans Serif', Verdana,Arial,Helvetica,sans-serif}

/* General text */
.gensmall{font-size:10px}
td.genmed,.genmed{font-size:11px}
.explaintitle{font-size:11px;font-weight:bold;color:#5c81b1}

/* General page style */
a:link,a:active,a:visited,a.postlink{color:#006699;text-decoration:none}
a:hover{color:#dd6900}

/* titles for the topics:could specify viewed link colour too */
.topictitle{font-size:11px;font-weight:bold}
a.topictitle:visited{color:#5493b4}
a.topictitle:hover{color:#dd6900}

/* Name of poster in viewmsg.php and viewtopic.php and other places */
.name{font-size:11px;font-weight: bold}

hr{border: 0px solid #ffffff;border-top-width:1px;height:0px}

/* Category gradients*/
td.cat{font-weight:bold;letter-spacing:1px;background:#d9e2ec url(themes/phpBB2Plus/forums/images/cellpic1.gif);
height:29px;text-indent:4px}

/* Main table cell colours and backgrounds */
.row1{background:#eaedf4}
.row2,.helpline{background:#d9e2ec}
.row3{background:#cedcec}
td.spacerow{background:#cad9ea}

/* This is for the table cell above the Topics,Post & Last posts on the index.php */
td.rowpic{background:url(themes/phpBB2Plus/forums/images/cellpic2.jpg) #ffffff repeat-y}

/* Table Header cells */
th{background:#005eb2 url(themes/phpBB2Plus/forums/images/cellpic3.gif);color:#deeef3;font-size:11px;
font-weight:bold;height:27px;white-space:nowrap;text-align:center;padding-left:8px;padding-right:8px}

/* This is the border line & background colour round the entire page */
.bodyline{background:#ffffff;border:1px solid #98aab1}

/* This is the outline round the main forum tables */
.forumline{background:#ffffff;border:1px solid #006699}

.forumline th
{
	background: #006fc9 url(themes/phpBB2Plus/forums/images/cellpic3.gif);
	color:#fff;
	font-family: 'MS Sans Serif', Verdana, Tahoma, Arial, sans-serif;
	font-size:14px;
	font-weight:bold;
	height:26px;
	white-space:nowrap;
	padding:0 5px;
	border-top:2px solid #0084f0;
	border-bottom:2px solid #0062b1;
}

/* The largest text used in the index page title and toptic title etc. */
.maintitle,h1{
font:bold 16px 'MS Sans Serif', Verdana,Arial,Helvetica,sans-serif;text-decoration:none;color:#5c81b1}

.subtitle,h2{font:bold 18px/180% "Trebuchet MS",'MS Sans Serif', Verdana,Arial,Helvetica,sans-serif;
text-decoration:none}

/* Used for the navigation text,(Page 1,2,3 etc) and the navigation bar when in a forum */
.nav{font-size:11px;font-weight:bold}
.postbody{font-size:12px;line-height:125%}

/* Location,number of posts,post date etc */
.postdetails{font-size:10px;color:#00396a}

/* Quote blocks */
.quote{background:#fafafa;border:1px solid #d1d7dc;color:#444444;
font-size:11px;line-height:125%}

/* Code blocks */
.code{background:#fafafa;border:1px solid #d1d7dc;color:#006600;
font:12px Courier,"Courier New",sans-serif;padding:5px}

/* This is for the error messages that pop up */
.errorline{background:#add8e6;border:1px solid #006699}

/* Form elements */
form{display:inline}

input{font:11px 'MS Sans Serif', Verdana,Arial,Helvetica,sans-serif}

select{background:#ffffff;font:11px 'MS Sans Serif', Verdana,Arial,Helvetica,sans-serif}

input.post,textarea.post{background:#ffffff;border:1px solid #000000;
font:11px 'MS Sans Serif', Verdana,Arial,Helvetica,sans-serif;padding-bottom:2px;padding-left:2px}

input.button,input.liteoption,.fakebut{border:1px solid #000000;background:#fafafa;font-size:11px}
input.catbutton{border:1px solid #000000;background:#fafafa;font-size:10px}
input.mainoption{border:1px solid #000000;background:#fafafa;font-size:11px;font-weight:bold}

a.but,a.but:hover,a.but:visited{color:#000000;text-decoration:none}

/* This is the line in the posting page which shows the rollover
help line. Colour value in row2 */
.helpline{border-style:none}

/* This is the gradient background at the top of the page */
.topbkg{background: #dbe3ee url(themes/phpBB2Plus/forums/images/cellpic_bkg.jpg) repeat-x}
.topnav{font-size:10px;background: #e5ebf3 url(themes/phpBB2Plus/forums/images/cellpic_nav.gif) repeat-x;color:#dd6900;height:21px;white-space:nowrap;border: 0px solid #91a0ae;border-width: 1px 0px 1px 0px}
.topnav2{font-size:10px;color:#dd6900;height:21px;white-space:nowrap}

/* Admin & Moderator Colours MODification */
.admin,.mod{font-size:11px;font-weight:bold}
.admin,a.admin,a.admin:visited{color:#ffa34f}
.mod,a.mod,a.mod:visited{color:#006600}
a.admin:hover,a.mod:hover{color:#dd6900}

/* Specify the space around images */
.imgtopic,.imgicon{margin-left:3px}
.imgspace{margin-left:1px;margin-right:2px}
.imgfolder{margin:1px;margin-left:4px;margin-right:4px}

/* Gets rid of the need for border="0" on hyperlinked images */
img{border:0}

/* Background images for tables */
.tbl{border-collapse:collapse;height:4px;width:100%}
.tbll{background: url(themes/phpBB2Plus/forums/images/tb4_l.gif) no-repeat;width:8px}
.tblbot{background: url(themes/phpBB2Plus/forums/images/tb4_m.gif) repeat-x;width:100%}
.tblr{background: url(themes/phpBB2Plus/forums/images/tb4_r.gif) no-repeat;width:8px}

.imgfade{filter:alpha(opacity=50); -moz-opacity:0.5;margin-left:3px}
.imgfull{filter:alpha(opacity=100); -moz-opacity:1;margin-left:3px}
-->
</style>
<!-- BEGIN switch_enable_pm_popup -->
<script language="Javascript" type="text/javascript">
<!--
	if ( {PRIVATE_MESSAGE_NEW_FLAG} )
	{
		window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');;
	}
//-->
</script>
<!-- END switch_enable_pm_popup -->
</head>
<body bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}">
<a name="top"></a>
<table width="100%" cellspacing="0" cellpadding="0" border="0"> 
	<tr> 
		<td align="center" valign="top">
<table width="100%" cellspacing="0" cellpadding="0" border="0">
      <tr> 
				
        <td align="center" width="100%"><br />
&nbsp;
<table cellspacing="0" cellpadding="2" border="0">
            <tr> 
              <td align="center" nowrap class="genmed" valign="top">&nbsp;<a href="{U_FAQ}"><img src="themes/phpBB2Plus/forums/images/icon_mini_faq.gif" width="13" height="13" border="0" alt="{L_FAQ}" title="{L_FAQ}" hspace="3" align="top" />{L_FAQ}</a>&nbsp; 
&nbsp;<a href="{U_SEARCH}"><img src="themes/phpBB2Plus/forums/images/icon_mini_search.gif" width="13" height="13" border="0" alt="{L_SEARCH}" title="{L_SEARCH}" hspace="3" align="top" />{L_SEARCH}</a>&nbsp; 
&nbsp;<a href="{U_MEMBERLIST}"><img src="themes/phpBB2Plus/forums/images/icon_mini_members.gif" width="13" height="13" border="0" alt="{L_MEMBERLIST}" title="{L_MEMBERLIST}" hspace="3" align="top" />{L_MEMBERLIST}</a>&nbsp; 
&nbsp;<a href="{U_GROUP_CP}"><img src="themes/phpBB2Plus/forums/images/icon_mini_groups.gif" width="13" height="13" border="0" alt="{L_USERGROUPS}" title="{L_USERGROUPS}" hspace="3" align="top" />{L_USERGROUPS}</a>&nbsp; 
              </td>
            </tr>
            <tr> 
              <td height="25" align="center" nowrap class="genmed" valign="top">&nbsp;<a href="{U_PROFILE}"><img src="themes/phpBB2Plus/forums/images/icon_mini_profile.gif" width="13" height="13" border="0" alt="{L_PROFILE}" title="{L_PROFILE}" hspace="3" align="top" />{L_PROFILE}</a>&nbsp; 
&nbsp;<a href="{U_PRIVATEMSGS}"><img src="themes/phpBB2Plus/forums/images/icon_mini_message.gif" width="13" height="13" border="0" alt="{PRIVATE_MESSAGE_INFO}" title="{PRIVATE_MESSAGE_INFO}" hspace="3" align="top" />{PRIVATE_MESSAGE_INFO}</a>&nbsp; 
&nbsp;<a href="{U_LOGIN_LOGOUT}"><img src="themes/phpBB2Plus/forums/images/icon_mini_login.gif" width="13" height="13" border="0" alt="{L_LOGIN_LOGOUT}" title="{L_LOGIN_LOGOUT}" hspace="3" align="top" />{L_LOGIN_LOGOUT}</a>&nbsp;</td>
            </tr>
          </table></td>
      </tr>
    </table>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
<tr>
<td align="center">
</td>
      </tr>
    </table>
    </td>
    </table>
