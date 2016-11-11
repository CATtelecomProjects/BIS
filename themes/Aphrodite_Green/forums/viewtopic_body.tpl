<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}">{FORUM_NAME}</a> &raquo; <a href="{U_VIEW_TOPIC}" class="nav-current">{TOPIC_TITLE}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		<a href="{U_VIEW_OLDER_TOPIC}">{L_VIEW_PREVIOUS_TOPIC}</a> | <a href="{U_VIEW_NEWER_TOPIC}">{L_VIEW_NEXT_TOPIC}</a>
	</div> 
</div> 

<table width="100%" cellspacing="0" class="empty-table">
<tr> 
	<td align="left" valign="bottom"><a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" alt="{L_POST_REPLY_TOPIC}" /></a></td>
	<td align="right" valign="bottom"><span class="gen">
		{PAGE_NUMBER}<br />
		<span class="pagination">{PAGINATION}</span>
	</span></td>
</tr>
</table>

<table class="forumline" width="100%" cellspacing="0">
<tr>
	<td class="row-header" colspan="2"><span>{TOPIC_TITLE}</span></td>
</tr>
{POLL_DISPLAY} 
<tr>
	<th width="150">{L_AUTHOR}</th>
	<th>{L_MESSAGE}</th>
</tr>
<!-- BEGIN postrow -->
<tr> 
	<td class="row-post-author">
		<span class="post-name"><a name="{postrow.U_POST_ID}"></a>{postrow.POSTER_NAME}</span><br />
		<span class="post-rank">{postrow.POSTER_RANK}<br /></span>
		{postrow.RANK_IMAGE}
		<span class="post-images">{postrow.POSTER_AVATAR}</span>
		<div class="post-details">
			{postrow.POSTER_JOINED}<br />
			{postrow.POSTER_POSTS}<br />
			{postrow.POSTER_FROM}
		</div><br />
		<img src="themes/Aphrodite_Green/forums/images/spacer.gif" width="150" height="1" alt="" />
	</td>
	<td class="row-post" width="100%">
		<div class="post-buttons-top post-buttons">{postrow.ARROWS} <span class="img-main">{postrow.QUOTE_IMG}</span> {postrow.EDIT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG}</div>
		<span class="post-details"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}" /></a>
{L_POSTED}: {postrow.POST_DATE}</span>
		<br /><br /><div class="post-text">
			{postrow.MESSAGE}<br /><br />
			<span class="gensmall">{postrow.EDITED_MESSAGE}</span>
			{postrow.SIGNATURE}
		</div>
	</td>
</tr>
<tr>
	<td class="row-post-date">{postrow.POST_DATE}</td>
	<td class="row-post-buttons post-buttons"><span class="img-main">{postrow.PROFILE_IMG}</span> {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.AIM_IMG} {postrow.YIM_IMG} {postrow.MSN_IMG} {postrow.ICQ_IMG}</td>
</tr>
<tr> 
	<td class="spaceRow" colspan="2"><img src="themes/Aphrodite_Green/forums/images/spacer.gif" width="1" height="3" alt="" /></td>
</tr>
<!-- END postrow -->
<tr> 
	<td class="catBottom" colspan="2">
		<form method="post" action="{S_POST_DAYS_ACTION}" style="display: inline;"><table cellspacing="0" cellpadding="0">
		<tr>
			<td valign="middle" nowrap="nowrap"><span class="genmed">{L_DISPLAY_POSTS}: </span></td>
			<td valign="middle"> {S_SELECT_POST_DAYS} {S_SELECT_POST_ORDER} <input type="submit" value="{L_GO}" class="liteoption jumpbox" name="submit" /></td>
		</tr></table></form>
	</td>
</tr>
</table>

<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}">{FORUM_NAME}</a> &raquo; <a href="{U_VIEW_TOPIC}" class="nav-current">{TOPIC_TITLE}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME} | {S_TIMEZONE}
		</div> 
		&nbsp;{S_WATCH_TOPIC}
	</div> 
</div> 

<table width="100%" cellspacing="0" class="empty-table">
<tr> 
	<td align="left" valign="top"><a href="{U_POST_REPLY_TOPIC}"><img src="{REPLY_IMG}" alt="{L_POST_REPLY_TOPIC}" /></a> {CA_QUICK_REPLY_BUTTON}</td>
	<td align="right" valign="top"><span class="gen">
		{PAGE_NUMBER}<br />
		<span class="pagination">{PAGINATION}</span>
	</span></td>
</tr>
</table>
{CA_QUICK_REPLY_FORM}
<table width="100%" cellspacing="0" class="empty-table">
<tr>
	<td align="left" valign="top" class="gensmall">{S_AUTH_LIST}</td>
	<td align="right" valign="top">
		{JUMPBOX}<br />
		<br />
		{S_TOPIC_ADMIN}
	</td>
</tr>
</table>
