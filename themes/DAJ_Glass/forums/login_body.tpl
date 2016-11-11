<form action="{S_LOGIN_ACTION}" method="post" target="_top">

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_ENTER_PASSWORD}</span></td>
  </tr>
  <tr>
  	<td colspan="3" class="row6">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr> 
		  <td width="45%" align="right"><span class="genmed">{L_USERNAME}:</span></td>
		  <td><input class="liteoption" type="text" name="username" size="25" maxlength="40" value="{USERNAME}" /></td>
		</tr>
		<tr> 
		  <td align="right"><span class="genmed">{L_PASSWORD}:</span></td>
		  <td><input class="liteoption" type="password" name="password" size="25" maxlength="32" /></td>
		</tr>
		<tr align="center"> 
		  <td colspan="2"><span class="genmed">{L_AUTO_LOGIN}: <input type="checkbox" name="autologin" /></span></td>
		</tr>
		<tr align="center"> 
		  <td colspan="2">{S_HIDDEN_FIELDS}<input type="submit" name="login" class="mainoption" value="{L_LOGIN}" /></td>
		</tr>
		<tr align="center"> 
		  <td colspan="2"><span class="gensmall"><a href="{U_SEND_PASSWORD}" class="gensmall">{L_SEND_PASSWORD}</a></span></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

</form>