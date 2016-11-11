<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}" class="nav-current">{FORUM_NAME}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		<!-- BEGIN switch_user_logged_in --> 
		<a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a>
		<!-- END switch_user_logged_in --> 
		<!-- BEGIN switch_user_logged_out -->  
		&nbsp;
		<!-- END switch_user_logged_out --> 
	</div> 
</div> 

<table width="100%" cellspacing="0" class="empty-table">
<tr> 
	<td align="left" valign="bottom" width="70%"><span class="gensmall">{L_MODERATOR}: {MODERATORS}<br />{LOGGED_IN_USER_LIST}</span></td>
	<td align="right" valign="bottom" rowspan="2"><span class="gen">
		{PAGE_NUMBER}<br />
		<span class="pagination">{PAGINATION}</span>
	</span></td>
</tr>
<tr> 
	<td align="left" valign="middle"><a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" alt="{L_POST_NEW_TOPIC}" /></a></td>
</tr>
</table>

<form method="post" action="{S_POST_DAYS_ACTION}" style="display: inline;">
<table cellspacing="0" width="100%" class="forumline">
<tr>
	<td colspan="6" class="row-header"><span><a href="{U_VIEW_FORUM}">{FORUM_NAME}</a></span></td>
</tr>
<tr>
	<th colspan="2">{L_TOPICS}</th>
	<th width="50">{L_REPLIES}</th>
	<th width="100">{L_AUTHOR}</th>
	<th width="50">{L_VIEWS}</th>
	<th>{L_LASTPOST}</th>
</tr>
<!-- BEGIN topicrow -->
<tr> 
	<td class="row3 row-center" width="18"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="15" height="15" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	<td class="row1h{topicrow.XS_NEW} row-forum" width="100%" onclick="window.location.href='{topicrow.U_VIEW_TOPIC}'">
		<span class="topiclink{topicrow.XS_NEW}">{topicrow.NEWEST_POST_IMG}{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}">{topicrow.TOPIC_TITLE}</a></span>
		<span class="gotopage">{topicrow.GOTO_PAGE}</span>
	</td>
	<td class="row2 row-center-small">{topicrow.REPLIES}</td>
	<td class="row3 row-center-small">{topicrow.TOPIC_AUTHOR}</td>
	<td class="row2 row-center-small">{topicrow.VIEWS}</td>
	<td class="row3 row-center-small" style="padding-top: 0;" nowrap="nowrap">{topicrow.LAST_POST_TIME}<br />{topicrow.LAST_POST_AUTHOR} {topicrow.LAST_POST_IMG}</td>
</tr>
<!-- END topicrow -->
<!-- BEGIN switch_no_topics -->
<tr> 
	<td class="row1 row-center" colspan="6" height="30"><span class="gen">{L_NO_TOPICS}</span></td>
</tr>
<!-- END switch_no_topics -->
<tr> 
	<td class="catBottom" align="right" valign="middle" colspan="6"><table width="100%" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td valign="middle" nowrap="nowrap"><span class="genmed">&nbsp;{L_DISPLAY_TOPICS}:</span></td>
		<td valign="middle" nowrap="nowrap">&nbsp;{S_SELECT_TOPIC_DAYS}&nbsp;<input type="submit" class="liteoption jumpbox" value="{L_GO}" name="submit" /></td>
		<td valign="middle" align="right" width="100%"><span class="genmed">{S_TIMEZONE}&nbsp;</span></td>
	  </tr></table></td>
	</tr>
</table>
</form>

<table width="100%" cellspacing="0" cellpadding="0">
<tr> 
	<td align="left" valign="top" nowrap="nowrap">
		<a href="{U_POST_NEW_TOPIC}"><img src="{POST_IMG}" alt="{L_POST_NEW_TOPIC}" /></a><br />
		<table cellspacing="2" cellpadding="0" border="0" class="forumline">
			<tr>
				<td width="20" align="center"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" width="15" height="15" /></td>
				<td class="gensmall">{L_NEW_POSTS}</td>
				<td>&nbsp;&nbsp;</td>
				<td width="20" align="center"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" width="15" height="15" /></td>
				<td class="gensmall">{L_NO_NEW_POSTS}</td>
				<td>&nbsp;&nbsp;</td>
			</tr>
			<tr>
				<td class="gensmall" align="center"><img src="{FOLDER_LOCKED_NEW_IMG}" alt="{L_NEW_POSTS_TOPIC_LOCKED}" width="15" height="15" /></td>
				<td class="gensmall">{L_NEW_POSTS_LOCKED}</td>
				<td>&nbsp;&nbsp;</td>
				<td class="gensmall" align="center"><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_TOPIC_LOCKED}" width="15" height="15" /></td>
				<td class="gensmall">{L_NO_NEW_POSTS_LOCKED}</td>
				<td>&nbsp;&nbsp;</td>
			</tr>
		</table>
		{JUMPBOX}<br />
	</td>
	<td align="right" valign="top" nowrap="nowrap">
		<span class="pagination">{PAGINATION}</span><br />
		<span class="gensmall">{S_AUTH_LIST}</span><br />
	</td>
</tr>
</table>
