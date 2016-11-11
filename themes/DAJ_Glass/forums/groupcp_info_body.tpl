<form action="{S_GROUPCP_ACTION}" method="post">

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_GROUP_CP}" class="mainmenu">{L_USERGROUPS}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_GROUP_INFORMATION}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr> 
		  <td class="row2" width="20%"><span class="genmed">{L_GROUP_NAME}:</span></td>
		  <td class="row2"><span class="genmed"><b>{GROUP_NAME}</b></span></td>
		</tr>
		<tr> 
		  <td class="row2"><span class="genmed">{L_GROUP_DESC}:</span></td>
		  <td class="row2"><span class="genmed">{GROUP_DESC}</span></td>
		</tr>
		<tr> 
		  <td class="row2"><span class="genmed">{L_GROUP_MEMBERSHIP}:</span></td>
		  <td class="row2"><span class="genmed">{GROUP_DETAILS}   
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
		  <td class="row2"><span class="genmed">{L_GROUP_TYPE}:</span></td>
		  <td class="row2"><span class="genmed"><span class="gen"><input type="radio" name="group_type" value="{S_GROUP_OPEN_TYPE}" {S_GROUP_OPEN_CHECKED} /> {L_GROUP_OPEN}   <input type="radio" name="group_type" value="{S_GROUP_CLOSED_TYPE}" {S_GROUP_CLOSED_CHECKED} />	{L_GROUP_CLOSED}   <input type="radio" name="group_type" value="{S_GROUP_HIDDEN_TYPE}" {S_GROUP_HIDDEN_CHECKED} />	{L_GROUP_HIDDEN}    <input class="mainoption" type="submit" name="groupstatus" value="{L_UPDATE}" /></span></td>
		</tr>
		<!-- END switch_mod_option -->
	  </table>
	</td>
  </tr>
</table>

{S_HIDDEN_FIELDS}

</form>

<br />

<form action="{S_GROUPCP_ACTION}" method="post" name="post">
<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr align="center"> 
	  	  <td class="row6" height="20"><span class="mainmenu">{L_PM}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_USERNAME}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_POSTS}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_FROM}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_EMAIL}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_WEBSITE}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_SELECT}</span></td>
		</tr>
		<tr> 
	  	  <td class="row1" colspan="8" height="20"><span class="mainmenu">{L_GROUP_MODERATOR}</span></td>
		</tr>
		<tr align="center" valign="middle"> 
	  	  <td class="row2"> {MOD_PM_IMG} </td>
	  	  <td class="row2"><span class="genmed"><a href="{U_MOD_VIEWPROFILE}" class="genmed">{MOD_USERNAME}</a></span></td>
	  	  <td class="row2"><span class="genmed">{MOD_POSTS}</span></td>
	  	  <td class="row2"><span class="genmed">{MOD_FROM}</span></td>
	  	  <td class="row2"><span class="genmed">{MOD_EMAIL_IMG}</span></td>
	  	  <td class="row2">{MOD_WWW_IMG}</td>
	  	  <td class="row2">  </td>
		</tr>
		<tr> 
	  	  <td class="row1" colspan="8" height="20"><span class="mainmenu">{L_GROUP_MEMBERS}</span></td>
		</tr>
		<!-- BEGIN member_row -->
		<tr align="center" valign="middle"> 
	  	  <td class="row2"> {member_row.PM_IMG} </td>
	  	  <td class="row2"><span class="genmed"><a href="{member_row.U_VIEWPROFILE}" class="genmed">{member_row.USERNAME}</a></span></td>
	  	  <td class="row2"><span class="genmed">{member_row.POSTS}</span></td>
	  	  <td class="row2"><span class="genmed"> {member_row.FROM} </span></td>
	  	  <td class="row2"><span class="genmed">{member_row.EMAIL_IMG}</span></td>
	  	  <td class="row2"> {member_row.WWW_IMG} </td>
	  	  <td class="row2"> 
	  	  <!-- BEGIN switch_mod_option -->
	  	  <input type="checkbox" name="members[]" value="{member_row.USER_ID}" /> 
	  	  <!-- END switch_mod_option -->
	  	  </td>
		</tr>
		<!-- END member_row -->
		<!-- BEGIN switch_no_members -->
		<tr> 
	  	  <td class="row2" colspan="7" align="center"><span class="genmed">{L_NO_MEMBERS}</span></td>
		</tr>
		<!-- END switch_no_members -->
		<!-- BEGIN switch_hidden_group -->
		<tr> 
	  	  <td class="row2" colspan="7" align="center"><span class="genmed">{L_HIDDEN_MEMBERS}</span></td>
		</tr>
		<!-- END switch_hidden_group -->
		<!-- BEGIN switch_mod_option -->
		<tr>
		  <td class="row3" colspan="8" align="right"><span class="cattitle"><input type="submit" name="remove" value="{L_REMOVE_SELECTED}" class="mainoption" /></span></td>
		</tr>
		<!-- END switch_mod_option -->
	  </table>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr valign="top">
	<td>
	<!-- BEGIN switch_mod_option -->
	<span class="genmed"><input type="text" class="liteoption" name="username" maxlength="50" size="20" /> <input type="submit" name="add" value="{L_ADD_MEMBER}" class="mainoption" /> <input type="submit" name="usersubmit" value="{L_FIND_USERNAME}" class="liteoption" onclick="window.open('{U_SEARCH_USER}', '_phpbbsearch', 'HEIGHT=250,resizable=yes,WIDTH=400');return false;" /></span><br /><br />
	<!-- END switch_mod_option -->
	<span class="genmed">{PAGINATION}</span></td>
	<td align="right" valign="top"><span class="nav">{PAGE_NUMBER}</span></td>
  </tr>
</table>

{PENDING_USER_BOX}

{S_HIDDEN_FIELDS}

</form>

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>