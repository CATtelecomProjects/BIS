<form action="{S_PROFILE_ACTION}" method="post">
<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_SEND_PASSWORD}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr> 
	  	  <td class="row6" colspan="2"><span class="gensmall"><b>{L_ITEMS_REQUIRED}</b></span></td>
		</tr>
		<tr> 
	  	  <td class="row2" width="38%"><span class="genmed">{L_USERNAME}: *</span></td>
	  	  <td class="row2"><input type="text" class="liteoption" style="width: 200px" name="username" size="25" maxlength="40" value="{USERNAME}" /></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_EMAIL_ADDRESS}: *</span></td>
	  	  <td class="row2"><input type="text" class="liteoption" style="width: 200px" name="email" size="25" maxlength="255" value="{EMAIL}" /></td>
		</tr>
		<tr> 
	  	  <td class="row3" colspan="2" align="center" height="28">{S_HIDDEN_FIELDS} 
		  <input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />  <input type="reset" value="{L_RESET}" name="reset" class="liteoption" /></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>
</form>