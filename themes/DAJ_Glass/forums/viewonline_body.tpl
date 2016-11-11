<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_VIEWONLINE}" class="mainmenu">{L_WHO_IS_ONLINE}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_WHO_IS_ONLINE}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr>
		  <td height="20" width="35%" class="row6"><span class="mainmenu">{L_USERNAME}</td>
		  <td width="25%" class="row6" align="center"><span class="mainmenu">{L_LAST_UPDATE}</span></td>
		  <td width="40%" class="row6" align="right"><span class="mainmenu">{L_FORUM_LOCATION}</span></td>
		</tr>
		<tr>
		  <td height="20" class="row1" colspan="3"><span class="mainmenu">{TOTAL_REGISTERED_USERS_ONLINE}</span></td>
		</tr>
		<!-- BEGIN reg_user_row -->
		<tr>
		  <td height="20" class="row2"><a href="{reg_user_row.U_USER_PROFILE}" class="mainmenu">{reg_user_row.USERNAME}</a></td>
		  <td align="center" class="row2"><span class="mainmenu">{reg_user_row.LASTUPDATE}</span></td>
		  <td class="row2" align="right"><a href="{reg_user_row.U_FORUM_LOCATION}" class="mainmenu">{reg_user_row.FORUM_LOCATION}</a></td>
		</tr>
		<!-- END reg_user_row -->
		<tr> 
		  <td colspan="3" height="2" class="row3"><img src="themes/DAJ_Glass/forums/images/spacer.gif" width="1" height="1" border="0"></td>
  		</tr>
		<tr>
		  <td height="20" class="row1" colspan="3"><span class="mainmenu">{TOTAL_GUEST_USERS_ONLINE}</span></td>
		</tr>
		<!-- BEGIN guest_user_row -->
		<tr>
		  <td height="20" class="row2"><span class="mainmenu">{guest_user_row.USERNAME}</span></td>
		  <td align="center" class="row2"><span class="mainmenu">{guest_user_row.LASTUPDATE}</span></td>
		  <td class="row2" align="right"><a href="{guest_user_row.U_FORUM_LOCATION}" class="mainmenu">{guest_user_row.FORUM_LOCATION}</a></td>
		</tr>
		<!-- END guest_user_row -->
	  </table>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr valign="top"> 
	<td><span class="gensmall">{L_ONLINE_EXPLAIN}</span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>