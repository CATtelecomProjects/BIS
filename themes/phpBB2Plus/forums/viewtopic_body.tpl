<table width="100%" border="0" cellspacing="2" cellpadding="2"> 
<tr> 
<td height="34" valign="top" class="nav"><a href="{U_VIEW_TOPIC}" class="maintitle">{TOPIC_TITLE}</a> 
<br /> 
{PAGINATION}</td> 
<td class="gensmall">&nbsp;</td> 
</tr> 
</table> 
<table width="100%" cellspacing="2" cellpadding="2" border="0"> 
<tr> 
<td nowrap="nowrap"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}" /></a><a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" alt="{L_POST_REPLY_TOPIC}" hspace="8" border="0" title="{L_POST_REPLY_TOPIC}" /></a></td> 
<td width="100%" class="nav"><a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}">{FORUM_NAME}</a></td> 
<td valign="bottom" nowrap="nowrap"><table width="100%" border="0" cellspacing="0" cellpadding="0"> 
<tr> 
<td><a href="{U_VIEW_OLDER_TOPIC}"><img src="themes/phpBB2Plus/forums/images/topic_previous.gif" alt="{L_VIEW_PREVIOUS_TOPIC}" title="{L_VIEW_PREVIOUS_TOPIC}" width="14" height="14" border="0" /></a></td> 
<td nowrap="nowrap">{S_WATCH_TOPIC_IMG}<a href="{U_PRIVATEMSGS}"><img src="{PRIVMSG_IMG}" border="0" alt="{PRIVATE_MESSAGE_INFO}" title="{PRIVATE_MESSAGE_INFO}" /></a></td> 
<td><a href="{U_VIEW_NEWER_TOPIC}"><img src="themes/phpBB2Plus/forums/images/topic_next.gif" alt="{L_VIEW_NEXT_TOPIC}" title="{L_VIEW_NEXT_TOPIC}" width="14" height="14" border="0" /></a></td> 
</tr> 
</table></td> 
</tr> 
</table>
{POLL_DISPLAY}
<table class="forumline" width="100%" cellspacing="1" cellpadding="3" border="0">
<tr>
<th width="150" height="28">{L_AUTHOR}</th>
<th width="100%">{L_MESSAGE}</th>
</tr>
<!-- BEGIN postrow -->
<tr>
<td valign="top" class="{postrow.ROW_CLASS}" rowspan="2"><span class="name"><a name="{postrow.U_POST_ID}" id="{postrow.U_POST_ID}"></a><strong>{postrow.POSTER_NAME}</strong></span><br />
<span class="postdetails">{postrow.POSTER_RANK}<br />
{postrow.RANK_IMAGE}{postrow.POSTER_AVATAR}<br /><br />
{postrow.POSTER_JOINED}<br />
{postrow.POSTER_POSTS}<br />
{postrow.POSTER_FROM}</span><br />
<img src="themes/phpBB2Plus/forums/images/spacer.gif" alt="" width="150" height="1" />
</td>
<td class="{postrow.ROW_CLASS}" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td class="postdetails"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" /></a>{L_POSTED}: 
{postrow.POST_DATE}</td>
<td align="right" valign="top" nowrap="nowrap">{postrow.QUOTE_IMG}{postrow.EDIT_IMG}<a href="#top"><img src="themes/phpBB2Plus/forums/images/icon_up.gif" alt="{L_BACK_TO_TOP}" width="16" height="18" title="{L_BACK_TO_TOP}" class="imgfade" onmouseover="this.className='imgfull'" onmouseout="this.className='imgfade'" /></a>{postrow.DELETE_IMG}{postrow.IP_IMG}</td>
</tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td valign="top" class="postbody">
<hr />
{postrow.MESSAGE}</td>
</tr>
<tr>
<td height="40" valign="bottom" class="genmed">{postrow.SIGNATURE}<span class="postdetails">{postrow.EDITED_MESSAGE}</span></td>
</tr>
</table>
</td>
</tr>
<tr>
<td valign="bottom" nowrap="nowrap" class="{postrow.ROW_CLASS}">{postrow.PROFILE_IMG}{postrow.PM_IMG}{postrow.EMAIL_IMG}{postrow.WWW_IMG}{postrow.AIM_IMG}{postrow.YIM_IMG}{postrow.MSN_IMG}{postrow.ICQ_IMG}</td>
</tr>
<tr>
<td class="spacerow" colspan="2" height="1"><img src="themes/phpBB2Plus/forums/images/spacer.gif" alt="" width="1" height="1" /></td>
</tr>
<!-- END postrow -->
<tr>
<td colspan="2" align="center" class="cat"> 
<form method="post" action="{S_POST_DAYS_ACTION}">
<table cellspacing="0" cellpadding="0" border="0">
<tr>
<td class="gensmall">{L_DISPLAY_POSTS}:&nbsp;&nbsp;</td>
<td>{S_SELECT_POST_DAYS}&nbsp;</td>
<td>{S_SELECT_POST_ORDER}&nbsp;</td>
<td><input type="submit" value="{L_GO}" class="catbutton" name="submit" /></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="tbl"><tr><td class="tbll"><img src="themes/phpBB2Plus/forums/images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblbot"><img src="themes/phpBB2Plus/forums/images/spacer.gif" alt="" width="8" height="4" /></td><td class="tblr"><img src="themes/phpBB2Plus/forums/images/spacer.gif" alt="" width="8" height="4" /></td></tr></table>
<table width="100%" cellspacing="2" cellpadding="2" border="0"> 
<tr> 
<td nowrap="nowrap"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" title="{L_POST_NEW_TOPIC}" /></a><a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" alt="{L_POST_REPLY_TOPIC}" hspace="8" border="0" title="{L_POST_REPLY_TOPIC}" /></a></td> 
<td width="100%" class="nav"><a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}">{FORUM_NAME}</a></td> 
<td valign="top" nowrap="nowrap"><table width="100%" border="0" cellspacing="0" cellpadding="0"> 
<tr> 
<td><a href="{U_VIEW_OLDER_TOPIC}"><img src="themes/phpBB2Plus/forums/images/topic_previous.gif" alt="{L_VIEW_PREVIOUS_TOPIC}" title="{L_VIEW_PREVIOUS_TOPIC}" width="14" height="14" border="0" /></a></td> 
<td nowrap="nowrap">{S_WATCH_TOPIC_IMG}<a href="{U_PRIVATEMSGS}"><img src="{PRIVMSG_IMG}" border="0" alt="{PRIVATE_MESSAGE_INFO}" title="{PRIVATE_MESSAGE_INFO}" /></a></td> 
<td><a href="{U_VIEW_NEWER_TOPIC}"><img src="themes/phpBB2Plus/forums/images/topic_next.gif" alt="{L_VIEW_NEXT_TOPIC}" title="{L_VIEW_NEXT_TOPIC}" width="14" height="14" border="0" /></a></td> 
</tr> 
</table></td> 
</tr> 
</table> 
<table width="100%" border="0" cellspacing="2" cellpadding="2"> 
<tr> 
<td class="nav" valign="top">{PAGINATION}</td> 
<td class="gensmall" align="right" valign="top">{S_AUTH_LIST}<br /> 
{S_TOPIC_ADMIN}</td> 
</tr> 
</table>