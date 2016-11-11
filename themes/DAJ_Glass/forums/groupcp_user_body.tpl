<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_GROUP_CP}" class="mainmenu">{L_USERGROUPS}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_USERGROUPS}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<!-- BEGIN switch_groups_joined -->
  		<tr> 
		  <td colspan="2" align="center" class="row6" height="20"><span class="mainmenu">{L_GROUP_MEMBERSHIP_DETAILS}</span></td>
  		</tr>
  		<!-- BEGIN switch_groups_member -->
  		<tr> 
		  <td class="row2"><span class="genmed">{L_YOU_BELONG_GROUPS}</span></td>
		  <td class="row2" align="right"> 
	  		<table width="90%" cellspacing="0" cellpadding="0" border="0">
			  <tr><form method="post" action="{S_USERGROUP_ACTION}">
				<td width="40%"><span class="gensmall">{GROUP_MEMBER_SELECT}</span></td>
				<td align="center" width="30%"><input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}</td>
			  </form></tr>
	  		</table>
		  </td>
  		</tr>
  		<!-- END switch_groups_member -->
  		<!-- BEGIN switch_groups_pending -->
  		<tr> 
		  <td class="row2"><span class="genmed">{L_PENDING_GROUPS}</span></td>
		  <td class="row2" align="right"> 
	  		<table width="90%" cellspacing="0" cellpadding="0" border="0">
			  <tr><form method="post" action="{S_USERGROUP_ACTION}">
				<td width="40%"><span class="gensmall">{GROUP_PENDING_SELECT}</span></td>
				<td align="center" width="30%"><input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}</td>
			  </form></tr>
	  		</table>
		  </td>
  		</tr>
  		<!-- END switch_groups_pending -->
  		<!-- END switch_groups_joined -->
  		<!-- BEGIN switch_groups_remaining -->
  		<tr> 
		  <td colspan="2" align="center" class="row6" height="20"><span class="mainmenu">{L_JOIN_A_GROUP}</span></td>
  		</tr>
  		<tr> 
		  <td class="row2"><span class="genmed">{L_SELECT_A_GROUP}</span></td>
		  <td class="row2" align="right"> 
	  		<table width="90%" cellspacing="0" cellpadding="0" border="0">
			  <tr><form method="post" action="{S_USERGROUP_ACTION}">
				<td width="40%"><span class="gensmall">{GROUP_LIST_SELECT}</span></td>
				<td align="center" width="30%"><input type="submit" value="{L_VIEW_INFORMATION}" class="liteoption" />{S_HIDDEN_FIELDS}</td>
			  </form></tr>
	  		</table>
		  </td>
  		</tr>
  		<!-- END switch_groups_remaining -->
	  </table>
	</td>
  </tr>
</table>

<br clear="all" />

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>