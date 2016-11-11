<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="#" class="nav-current">{L_SEND_PASSWORD}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 

<form action="{S_PROFILE_ACTION}" method="post">

<table cellspacing="0" width="100%" class="forumline">
<tr>
	<td class="row-header" colspan="2"><span>{L_SEND_PASSWORD}</span></td>
</tr>
<tr> 
	<th colspan="2" align="left"><span class="gensmall">{L_ITEMS_REQUIRED}</span></th>
</tr>
<tr> 
	<td class="row1" width="38%"><span class="gen">{L_USERNAME}: *</span></td>
	<td class="row2"><input type="text" class="post" style="width: 200px" name="username" size="25" maxlength="40" value="{USERNAME}" /></td>
</tr>
<tr> 
	<td class="row1"><span class="gen">{L_EMAIL_ADDRESS}: *</span></td>
	<td class="row2"><input type="text" class="post" style="width: 200px" name="email" size="25" maxlength="255" value="{EMAIL}" /></td>
</tr>
<tr> 
	<td class="catBottom" colspan="2" align="center" height="28">{S_HIDDEN_FIELDS} 
		<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />
		&nbsp;&nbsp; 
		<input type="reset" value="{L_RESET}" name="reset" class="liteoption" />
	</td>
</tr>
</table>
</form>

