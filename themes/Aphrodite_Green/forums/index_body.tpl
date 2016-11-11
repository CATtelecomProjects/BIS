<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			<!-- BEGIN switch_user_logged_in --> 
			<a href="{U_PRIVATEMSGS}">{PRIVATE_MESSAGE_INFO}</a><br /> 
			<!-- END switch_user_logged_in --> 
			{CURRENT_TIME} | {S_TIMEZONE} 
		</div> 
		<!-- BEGIN switch_user_logged_in --> 
		<a href="{U_MARK_READ}">{L_MARK_FORUMS_READ}</a> | <a href="{U_SEARCH_NEW}">{L_SEARCH_NEW}</a><br /> 
		<a href="{U_SEARCH_SELF}">{L_SEARCH_SELF}</a> | <a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a> 
		<!-- END switch_user_logged_in --> 
		<!-- BEGIN switch_user_logged_out -->  
		<a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a> 
		<!-- END switch_user_logged_out --> 
	</div> 
</div> 

<!-- BEGIN switch_user_logged_out -->
<div align="right">
	<form method="post" action="{S_LOGIN_ACTION}"><input type="hidden" name="autologin" value="checked" />
	<span class="gensmall">{L_USERNAME}: 
		<input class="post" type="text" name="username" size="10" />
		&nbsp;{L_PASSWORD}: 
		<input class="post" type="password" name="password" size="10" maxlength="32" />
		&nbsp; 
		<input type="submit" class="mainoption" name="login" value="{L_LOGIN}" />
		</span>
	</form>
</div>
<!-- END switch_user_logged_out -->

<!-- BEGIN catrow -->
<table width="100%" cellspacing="0" class="forumline">
<tr>
	<td colspan="5" class="row-header"><span>{catrow.CAT_DESC}</span></td>
</tr>
<tr> 
	<th colspan="2">{L_FORUM}</th>
	<th>{L_TOPICS}</th>
	<th>{L_POSTS}</th>
	<th>{L_LASTPOST}</th>
</tr> 
<!-- BEGIN forumrow --> 
<tr> 
	<td class="row3 row-center" width="30"><img src="{catrow.forumrow.FORUM_FOLDER_IMG}" width="25" height="25" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /></td>
	<td class="row1h{catrow.forumrow.XS_NEW} row-forum" width="70%" onclick="window.location.href='{catrow.forumrow.U_VIEWFORUM}'"><a class="forumlink{catrow.forumrow.XS_NEW}" href="{catrow.forumrow.U_VIEWFORUM}">{catrow.forumrow.FORUM_NAME}</a><br />
	  <span class="genmed">{catrow.forumrow.FORUM_DESC}<br />
	  </span><span class="moderators">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span></td>
	<td class="row2 row-center-small">{catrow.forumrow.TOPICS}</td>
	<td class="row2 row-center-small">{catrow.forumrow.POSTS}</td>
	<td class="row3 row-center-small" width="130">{catrow.forumrow.LAST_POST}</td>
</tr> 
<!-- END forumrow --> 
</table> 
<!-- END catrow --> 

<div class="forumline">
	<p class="row-header"><span><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></span></p>
	<p class="row1 gensmall">{TOTAL_POSTS}<br />{TOTAL_USERS}<br />{NEWEST_USER}</p>
	<p class="row1 gensmall">{TOTAL_USERS_ONLINE} &nbsp; [ {L_WHOSONLINE_ADMIN} ] &nbsp; [ {L_WHOSONLINE_MOD} ]<br />{RECORD_USERS}<br />{LOGGED_IN_USER_LIST}<br />{L_ONLINE_EXPLAIN}</p>
</div>

<table cellspacing="3" align="center" cellpadding="0" class="forumline no-width">
<tr> 
	<td class="row-center-small"><img src="themes/Aphrodite_Green/forums/images/folder_new.gif" alt="{L_NEW_POSTS}"/></td>
	<td class="row-center-small">{L_NEW_POSTS}</td>
	<td class="row-center-small">&nbsp;&nbsp;</td>
	<td class="row-center-small"><img src="themes/Aphrodite_Green/forums/images/folder.gif" alt="{L_NO_NEW_POSTS}" /></td>
	<td class="row-center-small">{L_NO_NEW_POSTS}</td>
	<td class="row-center-small">&nbsp;&nbsp;</td>
	<td class="row-center-small"><img src="themes/Aphrodite_Green/forums/images/folder_locked.gif" alt="{L_FORUM_LOCKED}" /></td>
	<td class="row-center-small">{L_FORUM_LOCKED}</td>
</tr>
</table>
