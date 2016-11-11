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

<table cellspacing="0" width="100%" class="forumline">
<tr>
	<td colspan="2" class="row-header"><span>{L_SEARCH_MATCHES}</span></td>
</tr>
<tr> 
	<th width="150">{L_AUTHOR}</th>
	<th width="100%">{L_MESSAGE}</th>
</tr>
<!-- BEGIN searchresults -->
<tr> 
	<td class="row-post-author">
		<span class="post-name">{searchresults.POSTER_NAME}</span><br />
		<div class="post-details">
			{L_REPLIES}: {searchresults.TOPIC_REPLIES}<br />
			{L_VIEWS}: {searchresults.TOPIC_VIEWS}
		</div><br />
		<img src="themes/Aphrodite_Green/forums/images/spacer.gif" width="150" height="1" alt="" />
	</td>
	<td class="row-post" width="100%">

		<img src="{searchresults.MINI_POST_IMG}" width="12" height="9" alt="{searchresults.L_MINI_POST_ALT}" title="{searchresults.L_MINI_POST_ALT}" /><span class="post-details">{L_FORUM}:&nbsp;<b><a href="{searchresults.U_FORUM}">{searchresults.FORUM_NAME}</a></b>&nbsp; &nbsp;{L_POSTED}: {searchresults.POST_DATE}&nbsp; &nbsp;{L_SUBJECT}: <b><a href="{searchresults.U_POST}">{searchresults.POST_SUBJECT}</a></b></span><br /><br />
		<div class="post-text">{searchresults.MESSAGE}</div>
	</td>
</tr>
<tr> 
	<td class="spaceRow" colspan="2"><img src="themes/Aphrodite_Green/forums/images/spacer.gif" width="1" height="3" alt="" /></td>
</tr>
<!-- END searchresults -->
<tr> 
	<td class="catBottom" colspan="2">&nbsp;</td>
</tr>
</table>

<table width="100%" cellspacing="0" class="empty-table">
<tr> 
	<td align="left" valign="top">{PAGE_NUMBER}</td>
	<td align="right" valign="top" nowrap="nowrap"><span class="pagination">{PAGINATION}</span><br /><span class="gensmall">{S_TIMEZONE}</span></td>
</tr>
</table>

<div align="right">{JUMPBOX}</div>