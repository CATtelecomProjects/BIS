<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}" class="nav-current">{FORUM_NAME}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 

<form method="post" action="{S_MODCP_ACTION}">

<table width="100%" cellspacing="0" class="forumline">
<tr>
	<td colspan="5" class="row-header"><span>{L_MOD_CP}</span></td>
</tr>
<tr> 
	<th width="4%">&nbsp;</th>
	<th>{L_TOPICS}</th>
	<th width="8%">{L_REPLIES}</th>
	<th width="17%">{L_LASTPOST}</th>
	<th width="5%">{L_SELECT}</th>
</tr>
<!-- BEGIN topicrow -->
<tr> 
	<td class="row1 row-center"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="15" height="15" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	<td class="row1h" onclick="window.location.href='{topicrow.U_VIEW_TOPIC}'">&nbsp;<span class="topictitle">{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span></td>
	<td class="row2 row-center-small">{topicrow.REPLIES}</td>
	<td class="row1 row-center-small">{topicrow.LAST_POST_TIME}</td>
	<td class="row2 row-center-small"><input type="checkbox" name="topic_id_list[]" value="{topicrow.TOPIC_ID}" /></td>
</tr>
<!-- END topicrow -->
<tr> 
	<td class="catBottom" colspan="5"> {S_HIDDEN_FIELDS} 
		<input type="submit" name="delete" class="liteoption" value="{L_DELETE}" />
		&nbsp; 
		<input type="submit" name="move" class="liteoption" value="{L_MOVE}" />
		&nbsp; 
		<input type="submit" name="lock" class="liteoption" value="{L_LOCK}" />
		&nbsp; 
		<input type="submit" name="unlock" class="liteoption" value="{L_UNLOCK}" />
		&nbsp;
	</td>
</tr>
</table>

<table width="100%" cellspacing="0" class="empty-table">
<tr> 
	<td align="left" valign="middle"><span class="gen">{PAGE_NUMBER}</span></td>
	<td align="right" valign="top" nowrap="nowrap"><span class="gensmall">{S_TIMEZONE}</span><br /><span class="pagination">{PAGINATION}</span></td>
</tr>
</table>

</form>

<div align="right">{JUMPBOX}</div>
