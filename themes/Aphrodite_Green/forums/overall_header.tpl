<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="Author" content="http://www.phpbbstyles.com" />
{META}
{NAV_LINKS}
<title>{SITENAME} :: {PAGE_TITLE}</title>
<script language="javascript" type="text/javascript" src="themes/Aphrodite_Green/forums/scripts.js"></script>
{CA_INLINE_CSS} 
<!-- IE conditional comments: http://msdn.microsoft.com/workshop/author/dhtml/overview/ccomment_ovw.asp -->
<!--[if IE]>
<style type="text/css">
/* IE hack to emulate the :hover & :focus pseudo-classes
   Add the selectors below that required the extra attributes */
.row1h, .row1h-new { behavior: url("themes/Aphrodite_Green/forums/pseudo-hover.htc"); }
</style>
<![endif]-->
</head>
<body onload="PreloadFlag = true;">
<a name="top"></a>
<table cellspacing="0" width="100%" id="forum">
<tr>
	<td class="forum-header" align="left"><a href="{U_INDEX}" title="{L_INDEX}"><img src="themes/Aphrodite_Green/forums/images/forum_logo.gif" height="63" alt="{L_INDEX}" /></a></td>
	<td class="forum-header header-search" align="right" valign="bottom">
		<form action="{U_SEARCH}" method="post"><input name="search_keywords" type="text" class="post" style="width: 100px;" /> <input type="submit" class="liteoption" value="{L_SEARCH}" /></form>
	</td>
</tr>
<tr>
	<td align="center" colspan="2" class="forum-buttons" valign="middle"> 
				<!-- BEGIN switch_user_logged_out --> 
				<a href="{U_REGISTER}">{L_REGISTER}</a> &#8226; 
				<!-- END switch_user_logged_out --> 
				<!-- BEGIN switch_user_logged_in --> 
				<a href="{U_PROFILE}">{L_PROFILE}</a> &#8226; 
				<a href="{U_PRIVATEMSGS}">{L_PRIVATEMSGS}</a> &#8226; 
				<!-- END switch_user_logged_in --> 
				<a href="{U_SEARCH}">{L_SEARCH}</a> &#8226; 
				<a href="{U_FAQ}">{L_FAQ}</a> &#8226; 
				<a href="{U_MEMBERLIST}">{L_MEMBERLIST}</a> &#8226; 
				<a href="{U_GROUP_CP}">{L_USERGROUPS}</a> &#8226; 
				<a href="{U_LOGIN_LOGOUT}">{L_LOGIN_LOGOUT}</a> 
		</td>
</tr>
<tr>
	<td colspan="2" id="content">

	<!-- BEGIN switch_user_logged_in -->
	<div class="popup{PRIVMSG_IMG}"><a href="{U_PRIVATEMSGS}">{PRIVATE_MESSAGE_INFO}</a></div>
	<!-- END switch_user_logged_in -->
