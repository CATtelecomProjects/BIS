<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_LOGIN_LOGOUT}" class="nav-current">{L_LOGIN_LOGOUT}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 

<form action="{S_LOGIN_ACTION}" method="post">

<table width="100%" cellspacing="0" class="forumline">
<tr>
	<td class="row-header"><span>{L_ENTER_PASSWORD}</span></td>
</tr>
<tr> 
	<td class="row1g" style="padding: 20px; padding-top: 30px;" align="center"><div style="margin: auto; width: 250px"><table cellpadding="3" cellspacing="1">
	<tr> 
		<td align="right" nowrap="nowrap"><span class="gen">{L_USERNAME}:</span></td>
		<td><input type="text" name="username" class="post" size="25" maxlength="40" value="{USERNAME}" /></td>
	</tr>
	<tr> 
		<td align="right" nowrap="nowrap"><span class="gen">{L_PASSWORD}:</span></td>
		<td><input type="password" name="password" class="post" size="25" maxlength="32" /></td>
	</tr>
	<tr align="center"> 
		<td colspan="2" nowrap="nowrap"><span class="gen"><label>{L_AUTO_LOGIN}: <input type="checkbox" name="autologin" checked="checked" /></label></span></td>
	</tr>
	<tr align="center"> 
		<td colspan="2">{S_HIDDEN_FIELDS}<input type="submit" name="login" class="mainoption" value="{L_LOGIN}" /></td>
	</tr>
	<tr align="center" nowrap="nowrap"> 
		<td colspan="2"><span class="gensmall"><a href="{U_SEND_PASSWORD}" class="gensmall">{L_SEND_PASSWORD}</a></span></td>
	</tr>
	</table></div></td>
</tr>
</table>

</form>
