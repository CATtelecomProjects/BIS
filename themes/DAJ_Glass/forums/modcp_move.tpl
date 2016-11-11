<form action="{S_MODCP_ACTION}" method="post">
<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {MESSAGE_TITLE}</span></td>
  </tr>
  <tr>
  	<td>
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr> 
	  	  <td class="row1"> 
			<table width="100%" border="0" cellspacing="0" cellpadding="1">
		  	  <tr valign="middle"> 
				<td align="center"><span class="genmed">{L_MOVE_TO_FORUM}   {S_FORUM_SELECT}<br /><br />
			  	<input type="checkbox" name="move_leave_shadow" checked="checked" />{L_LEAVESHADOW}<br />
			  	<br />
			  	{MESSAGE_TEXT}</span><br />
			  	<br />
			  	{S_HIDDEN_FIELDS} 
			  	<input class="mainoption" type="submit" name="confirm" value="{L_YES}" />
			    <input class="liteoption" type="submit" name="cancel" value="{L_NO}" /></td>
		  	  </tr>
			</table>
	  	  </td>
		</tr>
	  </table>
	</td>
  </tr>
</table>
</form>