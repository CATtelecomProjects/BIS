<form action="{S_PROFILE_ACTION}" method="post">
<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_PROFILE}" class="mainmenu">{L_PROFILE}</a> » {L_AVATAR_GALLERY}</span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_AVATAR_GALLERY}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr> 
	  	  <td class="row6" align="center" colspan="6" height="28"><span class="genmed">{L_CATEGORY}: {S_CATEGORY_SELECT} <input type="submit" class="liteoption" value="{L_GO}" name="avatargallery" /></span></td>
		</tr>
		<!-- BEGIN avatar_row -->
		<tr> 
		<!-- BEGIN avatar_column -->
		  <td class="row2" align="center"><img src="{avatar_row.avatar_column.AVATAR_IMAGE}" alt="{avatar_row.avatar_column.AVATAR_NAME}" title="{avatar_row.avatar_column.AVATAR_NAME}" /></td>
		<!-- END avatar_column -->
		</tr>
		<tr>
		<!-- BEGIN avatar_option_column -->
		  <td class="row1" align="center"><input type="radio" name="avatarselect" value="{avatar_row.avatar_option_column.S_OPTIONS_AVATAR}" /></td>
		<!-- END avatar_option_column -->
		</tr>
		<!-- END avatar_row -->
		<tr> 
	  	  <td class="row3" colspan="{S_COLSPAN}" align="center" height="28">{S_HIDDEN_FIELDS} 
		  <input type="submit" name="submitavatar" value="{L_SELECT_AVATAR}" class="mainoption" />  <input type="submit" name="cancelavatar" value="{L_RETURN_PROFILE}" class="liteoption" />
		  </td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

</form>