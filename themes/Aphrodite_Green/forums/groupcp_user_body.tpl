<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_GROUP_CP}" class="nav-current">{L_USERGROUPS}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 

<!-- BEGIN switch_groups_joined -->
<table width="100%" cellspacing="0" class="forumline">
<tr>
	<td class="row-header" colspan="2"><span>{L_GROUP_MEMBERSHIP_DETAILS}</span></td>
</tr>
<!-- BEGIN switch_groups_member -->
<tr> 
	<td class="row1">{L_YOU_BELONG_GROUPS}</td>
	<td class="row2" align="right"><table width="90%" cellspacing="0" cellpadding="0" border="0">
	<tr><form method="post" action="{S_USERGROUP_ACTION}">
		<td width="40%"><span class="gensmall">{GROUP_MEMBER_SELECT}</span></td>
		<td align="center" width="30%"> 
			<input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}
		</td>
	</form></tr>
	</table></td>
</tr>
<!-- END switch_groups_member -->
<!-- BEGIN switch_groups_pending -->
<tr> 
	<td class="row1"><span class="gen">{L_PENDING_GROUPS}</span></td>
	<td class="row2" align="right"> 
	  <table width="90%" cellspacing="0" cellpadding="0" border="0">
		<tr><form method="post" action="{S_USERGROUP_ACTION}">
			<td width="40%"><span class="gensmall">{GROUP_PENDING_SELECT}</span></td>
			<td align="center" width="30%"> 
			  <input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}
			</td>
		</form></tr>
	  </table>
	</td>
  </tr>
<!-- END switch_groups_pending -->
</table>
<!-- END switch_groups_joined -->

<!-- BEGIN switch_groups_remaining -->
<table width="100%" cellspacing="0" class="forumline">
<tr>
	<td class="row-header" colspan="2"><span>{L_JOIN_A_GROUP}</span></td>
</tr>
<tr> 
	<td class="row1"><span class="gen">{L_SELECT_A_GROUP}</span></td>
	<td class="row2" align="right"> 
	  <table width="90%" cellspacing="0" cellpadding="0" border="0">
		<tr><form method="post" action="{S_USERGROUP_ACTION}">
			<td width="40%"><span class="gensmall">{GROUP_LIST_SELECT}</span></td>
			<td align="center" width="30%"> 
			  <input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}
			</td>
		</form></tr>
	  </table>
	</td>
  </tr>
</table>
<!-- END switch_groups_remaining -->

<div align="right">{JUMPBOX}</div>
