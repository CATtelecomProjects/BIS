<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a></span></td>

  </tr>
</table>

<!-- BEGIN switch_user_logged_out -->
<br />
<!-- END switch_user_logged_out -->

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="bottom">
	<td><span class="gensmall">
	<!-- BEGIN switch_user_logged_in -->
	{LAST_VISIT_DATE}<br />
	<!-- END switch_user_logged_in -->
	{CURRENT_TIME}</span></td>
	<td align="right">
	<!-- BEGIN switch_user_logged_in -->
	<a href="{U_SEARCH_NEW}" class="gensmall">{L_SEARCH_NEW}</a><br /><a href="{U_SEARCH_SELF}" class="gensmall">{L_SEARCH_SELF}</a><br />
	<!-- END switch_user_logged_in -->
	<a href="{U_SEARCH_UNANSWERED}" class="gensmall">{L_SEARCH_UNANSWERED}</a></td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {SITE_DESCRIPTION}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr align="center">
		  <td height="20" nowrap="nowrap" class="row6"><span class="vsmall"> </span></td>
		  <td width="100%" nowrap="nowrap" align="left" class="row6"><span class="mainmenu">{L_FORUM}</span></td>
		  <td nowrap="nowrap" class="row6"><span class="mainmenu">  {L_TOPICS}  </span></td>
		  <td nowrap="nowrap" class="row6"><span class="mainmenu">  {L_POSTS}  </span></td>
		  <td nowrap="nowrap" align="right" class="row6"><span class="mainmenu">{L_LASTPOST}</span></td>
		</tr>
		<!-- BEGIN catrow -->
		<tr>
		  <td height="20" colspan="2" nowrap="nowrap" class="row1"><a href="{catrow.U_VIEWCAT}" class="mainmenu">{catrow.CAT_DESC}</a></td>
		  <td class="row1"><span class="vsmall"> </span></td>
		  <td class="row1"><span class="vsmall"> </span></td>
		  <td class="row1"><span class="vsmall"> </span></td>
		</tr>
		<!-- BEGIN forumrow -->
		<tr align="center" valign="middle">
		  <td height="30" class="row2" nowrap="nowrap"><span class="mainmenu"> <img src="{catrow.forumrow.FORUM_FOLDER_IMG}" alt="{catrow.forumrow.L_FORUM_FOLDER_ALT}" title="{catrow.forumrow.L_FORUM_FOLDER_ALT}" /> </span></td>
		  <td align="left" class="row2"><span class="mainmenu"><a href="{catrow.forumrow.U_VIEWFORUM}" class="mainmenu">{catrow.forumrow.FORUM_NAME}</a></span><br />
		  <span class="genmed">{catrow.forumrow.FORUM_DESC}</span><br />
		  <span class="gensmall">{catrow.forumrow.L_MODERATOR} {catrow.forumrow.MODERATORS}</span>
		  </td>
		  <td nowrap="nowrap" class="row2"><span class="gensmall"> {catrow.forumrow.TOPICS} </span></td>
		  <td nowrap="nowrap" class="row2"><span class="gensmall"> {catrow.forumrow.POSTS} </span></td>
		  <td nowrap="nowrap" align="right" class="row2"><span class="gensmall">{catrow.forumrow.LAST_POST}</span></td>
		</tr>
		<!-- END forumrow -->
  		<!-- END catrow -->
	  </table>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr> 
	<td><a href="{U_MARK_READ}" class="gensmall">{L_MARK_FORUMS_READ}</a></td>
	<td align="right"><span class="gensmall">{S_TIMEZONE}</span></td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" width="100%" nowrap="nowrap" class="row4"><span class="cattitle"> <a href="{U_VIEWONLINE}" class="cattitle">{L_WHO_IS_ONLINE}</a></span></td>
  </tr>
  <tr>
  	<td>
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr valign="middle">
		  <td rowspan="2" align="center" nowrap="nowrap" class="row2"><span class="mainmenu"> <img src="themes/DAJ_Glass/forums/images/whosonline.gif" border="0" alt="{L_WHO_IS_ONLINE}" /> </span></td>
		  <td width="100%" class="row2"><span class="gensmall">{TOTAL_POSTS}<br />{TOTAL_USERS}<br />{NEWEST_USER}</span></td>
		</tr>
		<tr>
		  <td class="row2"><span class="gensmall">{TOTAL_USERS_ONLINE}   [ {L_WHOSONLINE_ADMIN} ]   [ {L_WHOSONLINE_MOD} ]<br />{RECORD_USERS}<br />{LOGGED_IN_USER_LIST}</span></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<table width="100%" cellpadding="1" cellspacing="1" border="0">
  <tr>
	<td valign="top"><span class="gensmall">{L_ONLINE_EXPLAIN}</span></td>
  </tr>
</table>

<br clear="all" />

<table cellspacing="1" border="0" align="center" cellpadding="3">
  <tr> 
	<td width="20" align="center"><img src="themes/DAJ_Glass/forums/images/folder_new_big.gif" border="0" alt="{L_NEW_POSTS}" /></td>
	<td><span class="gensmall">{L_NEW_POSTS}</span></td>
	<td>  </td>
	<td width="20" align="center"><img src="themes/DAJ_Glass/forums/images/folder_big.gif" border="0" alt="{L_NO_NEW_POSTS}" /></td>
	<td><span class="gensmall">{L_NO_NEW_POSTS}</span></td>
	<td>  </td>
	<td width="20" align="center"><img src="themes/DAJ_Glass/forums/images/folder_locked_big.gif" border="0" alt="{L_FORUM_LOCKED}" /></td>
	<td><span class="gensmall">{L_FORUM_LOCKED}</span></td>
  </tr>
</table>