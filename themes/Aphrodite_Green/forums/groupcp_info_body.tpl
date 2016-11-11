<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_GROUP_CP}">{L_USERGROUPS}</a> &raquo; <a href="#" class="nav-current">{GROUP_NAME}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 

<form action="{S_GROUPCP_ACTION}" method="post">

<table class="forumline" width="100%" cellspacing="0">
<tr>
	<td colspan="2" class="row-header"><span>{L_GROUP_INFORMATION}</span></td>
</tr>
<tr> 
	<td class="row1" width="20%"><span class="gen">{L_GROUP_NAME}:</span></td>
	<td class="row2"><span class="gen"><b>{GROUP_NAME}</b></span></td>
</tr>
<tr> 
	<td class="row1" width="20%"><span class="gen">{L_GROUP_DESC}:</span></td>
	<td class="row2"><span class="gen">{GROUP_DESC}&nbsp;</span></td>
</tr>
<tr> 
	<td class="row1" width="20%"><span class="gen">{L_GROUP_MEMBERSHIP}:</span></td>
	<td class="row2"><span class="gen">{GROUP_DETAILS} &nbsp;&nbsp;
	<!-- BEGIN switch_subscribe_group_input -->
	<input class="mainoption" type="submit" name="joingroup" value="{L_JOIN_GROUP}" />
	<!-- END switch_subscribe_group_input -->
	<!-- BEGIN switch_unsubscribe_group_input -->
	<input class="mainoption" type="submit" name="unsub" value="{L_UNSUBSCRIBE_GROUP}" />
	<!-- END switch_unsubscribe_group_input -->
	</span></td>
</tr>
<!-- BEGIN switch_mod_option -->
<tr> 
	<td class="row1" width="20%"><span class="gen">{L_GROUP_TYPE}:</span></td>
	<td class="row2"><span class="genmed">
		<label><input type="radio" name="group_type" value="{S_GROUP_OPEN_TYPE}" {S_GROUP_OPEN_CHECKED} /> <span class="genmed">{L_GROUP_OPEN}</span></label>&nbsp;&nbsp;
		<label><input type="radio" name="group_type" value="{S_GROUP_CLOSED_TYPE}" {S_GROUP_CLOSED_CHECKED} /> <span class="genmed">{L_GROUP_CLOSED}</span></label>&nbsp;&nbsp;
		<label><input type="radio" name="group_type" value="{S_GROUP_HIDDEN_TYPE}" {S_GROUP_HIDDEN_CHECKED} /> <span class="genmed">{L_GROUP_HIDDEN}</span></label>&nbsp;&nbsp;
		<input class="mainoption" type="submit" name="groupstatus" value="{L_UPDATE}" />
	</span></td>
</tr>
<!-- END switch_mod_option -->
</table>
{S_HIDDEN_FIELDS}
</form>

<form action="{S_GROUPCP_ACTION}" method="post" name="post">
<table width="100%" cellspacing="0" class="forumline">
<tr>
	<td colspan="6" class="row-header"><span>{L_GROUP_MODERATOR}</span></td>
</tr>
<tr> 
	<th>{L_PM}</th>
	<th>{L_USERNAME}</th>
	<th>{L_POSTS}</th>
	<th>{L_FROM}</th>
	<th>{L_EMAIL}</th>
	<th>{L_WEBSITE}</th>
</tr>
<tr> 
	<td class="row1 post-buttons-single">&nbsp;{MOD_PM_IMG}&nbsp;</td>
	<td class="row1h row-center" onclick="window.location.href='{U_MOD_VIEWPROFILE}'"><a href="{U_MOD_VIEWPROFILE}">{MOD_USERNAME}</a></td>
	<td class="row2 row-center">{MOD_POSTS}</td>
	<td class="row1 row-center">&nbsp;{MOD_FROM}&nbsp;</td>
	<td class="row2 post-buttons-single">&nbsp;{MOD_EMAIL_IMG}&nbsp;</td>
	<td class="row3 post-buttons-single">&nbsp;{MOD_WWW_IMG}&nbsp;</td>
</tr>
</table>

<table width="100%" cellspacing="0" class="forumline">
<tr>
	<td colspan="7" class="row-header"><span>{L_GROUP_MEMBERS}</span></td>
</tr>
<tr> 
	<th>{L_PM}</th>
	<th>{L_USERNAME}</th>
	<th>{L_POSTS}</th>
	<th>{L_FROM}</th>
	<th>{L_EMAIL}</th>
	<th>{L_WEBSITE}</th>
	<th>{L_SELECT}</th>
</tr>
<!-- BEGIN member_row -->
<tr> 
	<td class="row1 post-buttons-single">&nbsp;{member_row.PM_IMG}&nbsp;</td>
	<td class="row1h row-center" onclick="window.location.href='{member_row.U_VIEWPROFILE}'"><a href="{member_row.U_VIEWPROFILE}">{member_row.USERNAME}</a></td>
	<td class="row2 row-center">{member_row.POSTS}</td>
	<td class="row1 row-center">&nbsp;{member_row.FROM}&nbsp;</td>
	<td class="row2 post-buttons-single">&nbsp;{member_row.EMAIL_IMG}&nbsp;</td>
	<td class="row3 post-buttons-single">&nbsp;{member_row.WWW_IMG}&nbsp;</td>
	<td class="row1 row-center">&nbsp; 
		<!-- BEGIN switch_mod_option -->
		<input type="checkbox" name="members[]" value="{member_row.USER_ID}" /> 
		<!-- END switch_mod_option -->
	&nbsp;</td>
</tr>
<!-- END member_row -->
<!-- BEGIN switch_no_members -->
<tr> 
	<td class="row1 row-center" colspan="7">{L_NO_MEMBERS}</td>
</tr>
<!-- END switch_no_members -->
<!-- BEGIN switch_hidden_group -->
<tr> 
	<td class="row1 row-center" colspan="7">{L_HIDDEN_MEMBERS}</td>
</tr>
<!-- END switch_hidden_group -->
<!-- BEGIN switch_mod_option -->
<tr>
	<td class="catBottom" colspan="7"><input type="submit" name="remove" value="{L_REMOVE_SELECTED}" class="mainoption" /></td>
</tr>
<!-- END switch_mod_option -->
</table>

<table width="100%" cellspacing="0" class="empty-table">
<tr>
	<td align="left" valign="top">
		<!-- BEGIN switch_mod_option -->
		<span class="genmed"><input type="text"  class="post" name="username" maxlength="50" size="20" /> <input type="submit" name="add" value="{L_ADD_MEMBER}" class="mainoption" /> <input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="liteoption" onClick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" /></span><br /><br />
		<!-- END switch_mod_option -->
		{PAGE_NUMBER}
	</td>
	<td align="right" valign="top"><span class="gensmall">{S_TIMEZONE}</span><br /><span class="pagination">{PAGINATION}</span></td>
</tr>
</table>

{PENDING_USER_BOX}

{S_HIDDEN_FIELDS}</form>

<table width="100%" cellspacing="2" border="0" align="center">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>
