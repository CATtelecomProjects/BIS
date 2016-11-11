<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_SEARCH}">{L_SEARCH}</a> &raquo; <a href="#" class="nav-current">{L_SEARCH_MATCHES}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 

<table width="100%" cellspacing="0" class="forumline">
<tr>
	<td colspan="7" class="row-header"><span>{L_SEARCH_MATCHES}</span></td>
</tr>
<tr> 
	<th width="18">&nbsp;</th>
	<th>{L_FORUM}</th>
	<th>{L_TOPICS}</th>
	<th>{L_REPLIES}</th>
	<th>{L_AUTHOR}</th>
	<th>{L_VIEWS}</th>
	<th>{L_LASTPOST}</th>
</tr>
<!-- BEGIN searchresults -->
<tr> 
	<td class="row3 row-center"><img src="{searchresults.TOPIC_FOLDER_IMG}" width="15" height="15" alt="{searchresults.L_TOPIC_FOLDER_ALT}" title="{searchresults.L_TOPIC_FOLDER_ALT}" /></td>
	<td class="row1h row-forum" onclick="window.location.href='{searchresults.U_VIEW_FORUM}'"><span class="forumlink"><a href="{searchresults.U_VIEW_FORUM}" class="forumlink">{searchresults.FORUM_NAME}</a></span></td>
	<td class="row1h row-forum" onclick="window.location.href='{searchresults.U_VIEW_TOPIC}'"><span class="topiclink">{searchresults.NEWEST_POST_IMG}{searchresults.TOPIC_TYPE}<a href="{searchresults.U_VIEW_TOPIC}" class="topictitle">{searchresults.TOPIC_TITLE}</a></span><span class="gotopage">{searchresults.GOTO_PAGE}</span></td>
	<td class="row1 row-center-small">{searchresults.REPLIES}</td>
	<td class="row2 row-center-small">{searchresults.TOPIC_AUTHOR}</td>
	<td class="row1 row-center-small">{searchresults.VIEWS}</td>
	<td class="row2 row-center-small">{searchresults.LAST_POST_TIME}<br />{searchresults.LAST_POST_AUTHOR} {searchresults.LAST_POST_IMG}</span></td>
</tr>
<!-- END searchresults -->
<tr> 
	<td class="catBottom" colspan="7">&nbsp; </td>
</tr>
</table>

<table width="100%" cellspacing="0" class="empty-table">
<tr> 
	<td align="left" valign="top">{PAGE_NUMBER}</td>
	<td align="right" valign="top" nowrap="nowrap"><span class="pagination">{PAGINATION}</span><br /><span class="gensmall">{S_TIMEZONE}</span></td>
</tr>
</table>

<div align="right">{JUMPBOX}</div>