<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_VIEW_FORUM}" class="mainmenu">{FORUM_NAME}</a> » <a class="mainmenu" href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr> 
	<td valign="bottom" nowrap="nowrap"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>  <a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a></span></td>
	<td valign="middle" width="100%"><span class="gensmall"><b>{PAGINATION}</b></span></td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr valign="middle">
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {TOPIC_TITLE}</span></td>
	<td align="right" class="row4"><span class="mainmenu1">« <a href="{U_VIEW_OLDER_TOPIC}" class="mainmenu1">{L_VIEW_PREVIOUS_TOPIC}</a> :: <a href="{U_VIEW_NEWER_TOPIC}" class="mainmenu1">{L_VIEW_NEXT_TOPIC}</a> » </span></td>
  </tr>
  <tr>
  	<td colspan="2">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		{POLL_DISPLAY} 
		<tr align="center">
		  <td class="row6" width="150" height="20" nowrap="nowrap"><span class="mainmenu">{L_AUTHOR}</span></td>
		  <td class="row6" nowrap="nowrap"><span class="mainmenu">{L_MESSAGE}</span></th>
		</tr>
		<!-- BEGIN postrow -->
		<tr valign="middle">
		  <td class="row1" width="150" height="20" nowrap="nowrap"><span class="name"><a name="{postrow.U_POST_ID}"></a><b>{postrow.POSTER_NAME}</b></span></td>
		  <td class="row1" width="100%">
		    <table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td width="100%"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" border="0" /></a><span class="postdetails">{L_POSTED}: {postrow.POST_DATE}<span class="genmed"> </span>   {L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></td>
				<td nowrap="nowrap" valign="middle">{postrow.QUOTE_IMG} {postrow.EDIT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG}</td>
			  </tr>
			</table>
		  </td>
		</tr>
		<tr> 
		  <td valign="top" align="center" class="row2">{postrow.POSTER_AVATAR}<br /><span class="postdetails">{postrow.POSTER_RANK}<br />{postrow.RANK_IMAGE}<br /></span><div align="left"><span class="postdetails">{postrow.POSTER_JOINED}<br />{postrow.POSTER_POSTS}<br />{postrow.POSTER_FROM}</span></div><br /></td>
		  <td class="row2" width="100%" height="28" valign="top">
		    <table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td><span class="postbody">{postrow.MESSAGE}{postrow.SIGNATURE}</span><span class="gensmall">{postrow.EDITED_MESSAGE}</span></td>
			  </tr>
			</table>
		  </td>
		</tr>
		<tr> 
		  <td class="row6" valign="middle"><a href="#top" class="mainmenu">{L_BACK_TO_TOP}</a></td>
		  <td class="row6" width="100%" height="20" valign="bottom" nowrap="nowrap">
		  	<table cellspacing="0" cellpadding="0" border="0" height="18" width="18">
			  <tr> 
				<td valign="middle" nowrap="nowrap">{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.AIM_IMG} {postrow.YIM_IMG} {postrow.MSN_IMG}<script language="JavaScript" type="text/javascript"><!-- 

				if ( navigator.userAgent.toLowerCase().indexOf('mozilla') != -1 && navigator.userAgent.indexOf('5.') == -1 && navigator.userAgent.indexOf('6.') == -1 )
					document.write(' {postrow.ICQ_IMG}');
				else
					document.write('</td><td>&nbsp;</td><td valign="top" nowrap="nowrap"><div style="position:relative"><div style="position:absolute">{postrow.ICQ_IMG}</div><div style="position:absolute;left:3px;top:-1px">{postrow.ICQ_STATUS_IMG}</div></div>');
				
				//--></script><noscript>{postrow.ICQ_IMG}</noscript></td>
			  </tr>
			</table>
		  </td>
		</tr>
		<tr> 
		  <td class="row3" colspan="2" height="2"><img src="themes/DAJ_Glass/forums/images/spacer.gif" border="0" width="1" height="1"></td>
		</tr>
		<!-- END postrow -->
		<tr align="center"> 
		  <td class="row3" colspan="2" height="28">
		    <table cellspacing="0" cellpadding="0" border="0">
			  <tr><form method="post" action="{S_POST_DAYS_ACTION}">
				<td align="center"><span class="mainmenu1">{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS} {S_SELECT_POST_ORDER} <input type="submit" value="{L_GO}" class="liteoption" name="submit" /></span></td>
			  </form></tr>
			</table>
		  </td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top"> 
	<td nowrap="nowrap"><span class="nav"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" align="middle" /></a>  <a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" border="0" alt="{L_POST_REPLY_TOPIC}" align="middle" /></a></span></td>
	<td valign="middle" width="100%"><span class="gensmall">{PAGINATION}</span></td>
	<td align="right" nowrap="nowrap"><span class="nav">{PAGE_NUMBER}</span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_VIEW_FORUM}" class="mainmenu">{FORUM_NAME}</a> » <a class="mainmenu" href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a></span></td>
	<td nowrap="nowrap" align="right">{JUMPBOX}</td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
  	<td class="row6">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr> 
		  <td width="40%" valign="top" nowrap="nowrap"><span class="gensmall">{S_WATCH_TOPIC}</span><br /><br />{S_TOPIC_ADMIN}</td>
		  <td align="right" valign="middle" nowrap="nowrap"><span class="gensmall">{S_AUTH_LIST}</span></td>
  		</tr>
	  </table>
	</td>
  </tr>
</table>