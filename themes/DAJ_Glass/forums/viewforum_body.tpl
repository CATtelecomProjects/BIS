<form method="post" action="{S_POST_DAYS_ACTION}">
<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_VIEW_FORUM}" class="mainmenu">{FORUM_NAME}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr>
  	<td valign="bottom" nowrap="nowrap"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" /></a></td>
	<td width="100%" valign="middle"><span class="gensmall"><b>{PAGINATION}</b></span></td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr valign="middle">
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {FORUM_NAME}</span></td>
	<td align="right" class="row4" nowrap="nowrap"><span class="mainmenu1"><a href="{U_MARK_READ}" class="mainmenu1">{L_MARK_TOPICS_READ}</a> </span></td>
  </tr>
  <tr>
  	<td colspan="2">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr align="center">
		  <td class="row6" width="20" nowrap="nowrap"><span class="vsmall"> </span></td>
	  	  <td height="20" align="left" class="row6" nowrap="nowrap" width="100%"><span class="mainmenu">{L_TOPICS}</span></td>
	  	  <td width="50" class="row6" nowrap="nowrap"><span class="mainmenu"> {L_REPLIES} </span></td>
	  	  <td width="100" class="row6" nowrap="nowrap"><span class="mainmenu"> {L_AUTHOR} </span></td>
	  	  <td width="50" class="row6" nowrap="nowrap"><span class="mainmenu"> {L_VIEWS} </span></td>
	  	  <td align="right" class="row6" align="right" nowrap="nowrap"><span class="mainmenu">{L_LASTPOST}</span></td>
		</tr>
		<!-- BEGIN topicrow -->
		<tr align="center" valign="middle"> 
	 	  <td class="row2" nowrap="nowrap"><img src="{topicrow.TOPIC_FOLDER_IMG}" border="0" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	  	  <td class="row2" align="left"><span class="mainmenu">{topicrow.NEWEST_POST_IMG}{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="mainmenu">{topicrow.TOPIC_TITLE}</a></span><span class="gensmall"><br />{topicrow.GOTO_PAGE}</span></td>
	  	  <td class="row2"><span class="postdetails">{topicrow.REPLIES}</span></td>
	  	  <td class="row2"><span class="name">{topicrow.TOPIC_AUTHOR}</span></td>
	  	  <td class="row2"><span class="postdetails">{topicrow.VIEWS}</span></td>
	  	  <td class="row2" nowrap="nowrap" align="right"><span class="postdetails">{topicrow.LAST_POST_TIME}<br />{topicrow.LAST_POST_AUTHOR} {topicrow.LAST_POST_IMG}</span></td>
		</tr>
		<!-- END topicrow -->
		<!-- BEGIN switch_no_topics -->
		<tr> 
	  	  <td class="row2" colspan="6" height="30" align="center" valign="middle"><span class="genmed">{L_NO_TOPICS}</span></td>
		</tr>
		<!-- END switch_no_topics -->
		<tr> 
	  	  <td class="row3" align="center" valign="middle" colspan="6" height="28"><span class="mainmenu1">{L_DISPLAY_TOPICS}: {S_SELECT_TOPIC_DAYS}  
		  <input type="submit" class="liteoption" value="{L_GO}" name="submit" /></span></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
  	<td nowrap="nowrap"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" border="0" alt="{L_POST_NEW_TOPIC}" /></a></td>
	<td width="100%" valign="middle"><span class="gensmall"><b>{PAGINATION}</b></span></td>
	<td align="right" nowrap="nowrap"><span class="nav">{PAGE_NUMBER}</span></td>
  </tr>
</table>
</form>

<br />

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_VIEW_FORUM}" class="mainmenu">{FORUM_NAME}</a></span></td>
	<td align="right" nowrap="nowrap">{JUMPBOX}</td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr>
		  <td class="row6"><span class="mainmenu">{L_MODERATOR}: {MODERATORS}</span></td>
		</tr>
		<tr>
		  <td class="row6"><span class="mainmenu">{LOGGED_IN_USER_LIST}</span></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
  	<td class="row6">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr>
		  <td valign="middle">
		  	<table cellspacing="3" cellpadding="0" border="0">
			  <tr>
				<td width="20"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" border="0" /></td>
				<td class="gensmall">{L_NEW_POSTS}</td>
				<td>  </td>
				<td width="20" align="center"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" border="0" /></td>
				<td class="gensmall">{L_NO_NEW_POSTS}</td>
				<td>  </td>
				<td width="20" align="center"><img src="{FOLDER_ANNOUNCE_IMG}" alt="{L_ANNOUNCEMENT}" border="0" /></td>
				<td class="gensmall">{L_ANNOUNCEMENT}</td>
			  </tr>
			  <tr> 
				<td width="20" align="center"><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}" border="0" /></td>
				<td class="gensmall">{L_NEW_POSTS_HOT}</td>
				<td>  </td>
				<td width="20" align="center"><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}" border="0" /></td>
				<td class="gensmall">{L_NO_NEW_POSTS_HOT}</td>
				<td>  </td>
				<td width="20" align="center"><img src="{FOLDER_STICKY_IMG}" alt="{L_STICKY}" border="0" /></td>
				<td class="gensmall">{L_STICKY}</td>
			  </tr>
			  <tr>
				<td class="gensmall"><img src="{FOLDER_LOCKED_NEW_IMG}" alt="{L_NEW_POSTS_LOCKED}" border="0" /></td>
				<td class="gensmall">{L_NEW_POSTS_LOCKED}</td>
				<td>  </td>
				<td class="gensmall"><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_LOCKED}" border="0" /></td>
				<td class="gensmall">{L_NO_NEW_POSTS_LOCKED}</td>
			  </tr>
			</table>
		  </td>
		  <td align="right"><span class="gensmall">{S_AUTH_LIST}</span></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>