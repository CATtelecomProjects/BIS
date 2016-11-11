<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEWONLINE}" class="nav-current">{L_WHO_IS_ONLINE}</a>
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
	<td colspan="3" class="row-header"><span>{L_WHO_IS_ONLINE}</span></td>
</tr>
<tr> 
	<th width="35%">{L_USERNAME}</th>
	<th width="25%">{L_LAST_UPDATE}</th>
	<th width="40%">{L_FORUM_LOCATION}</th>
</tr>
<tr> 
	<td class="row1" colspan="3"><span class="gen">{TOTAL_REGISTERED_USERS_ONLINE}</span></td>
</tr>
<!-- BEGIN reg_user_row -->
<tr> 
	<td width="35%" class="row1h" onclick="window.location.href='{reg_user_row.U_USER_PROFILE}'"><span class="genmed"><a href="{reg_user_row.U_USER_PROFILE}" class="gen">{reg_user_row.USERNAME}</a></span></td>
	<td width="25%" nowrap="nowrap" class="row2 row-center"><span class="genmed">{reg_user_row.LASTUPDATE}</span></td>
	<td width="40%" class="row3h" onclick="window.location.href='{reg_user_row.U_FORUM_LOCATION}'"><span class="genmed"><a href="{reg_user_row.U_FORUM_LOCATION}" class="gen">{reg_user_row.FORUM_LOCATION}</a></span></td>
</tr>
<!-- END reg_user_row -->
<tr> 
	<td class="spaceRow" colspan="3"><img src="themes/Aphrodite_Green/forums/images/spacer.gif" width="1" height="3" alt="" /></td>
</tr>
<tr> 
	<td class="row1" colspan="3"><span class="gen">{TOTAL_GUEST_USERS_ONLINE}</span></td>
</tr>
<!-- BEGIN guest_user_row -->
<tr> 
	<td width="35%" class="row1h"><span class="gen">{guest_user_row.USERNAME}</span></td>
	<td width="25%" nowrap="nowrap" class="row2 row-center"><span class="gen">{guest_user_row.LASTUPDATE}</span></td>
	<td width="40%" class="row3h" onclick="window.location.href='{guest_user_row.U_FORUM_LOCATION}'"><span class="gen"><a href="{guest_user_row.U_FORUM_LOCATION}" class="gen">{guest_user_row.FORUM_LOCATION}</a></span></td>
</tr>
<!-- END guest_user_row -->
</table>

<table width="100%" cellspacing="0" class="empty-table">
  <tr> 
	<td align="left" valign="top"><span class="gensmall">{L_ONLINE_EXPLAIN}</span></td>
	<td align="right" valign="top"><span class="gensmall">{S_TIMEZONE}</span></td>
  </tr>
</table>

<div align="right">{JUMPBOX}</div>