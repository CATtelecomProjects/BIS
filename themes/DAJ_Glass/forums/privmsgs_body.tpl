 <script language="Javascript" type="text/javascript">
	//
	// Should really check the browser to stop this whining ...
	//
	function select_switch(status)
	{
		for (i = 0; i < document.privmsg_list.length; i++)
		{
			document.privmsg_list.elements[i].checked = status;
		}
	}
</script>

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » {INBOX} » {SENTBOX} » {OUTBOX} » {SAVEBOX}</span></td>
	<td align="right" nowrap="nowrap">
	  <!-- BEGIN switch_box_size_notice -->
	  <table width="175" cellspacing="1" cellpadding="1" border="0" class="forumline">
		<tr> 
		  <td colspan="3" width="175" class="row6" nowrap="nowrap"><span class="gensmall">{BOX_SIZE_STATUS}</span></td>
		</tr>
		<tr> 
		  <td colspan="3" width="175" class="row1">
			<table cellspacing="0" cellpadding="1" border="0">
			  <tr> 
				<td bgcolor="{T_TD_COLOR2}"><img src="themes/DAJ_Glass/forums/images/spacer.gif" width="{INBOX_LIMIT_IMG_WIDTH}" height="8" alt="{INBOX_LIMIT_PERCENT}" /></td>
			  </tr>
			</table>
		  </td>
		</tr>
		<tr> 
		  <td width="33%" class="row6"><span class="gensmall">0%</span></td>
		  <td width="34%" align="center" class="row6"><span class="gensmall">50%</span></td>
		  <td width="33%" align="right" class="row6"><span class="gensmall">100%</span></td>
		</tr>
	  </table>
	  <!-- END switch_box_size_notice -->
	</td>
  </tr>
</table>

<br clear="all" />

<form method="post" name="privmsg_list" action="{S_PRIVMSGS_ACTION}">
<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="bottom"> 
	<td nowrap="nowrap">{POST_PM_IMG}</td>
	<td valign="middle" width="100%"><span class="nav">{PAGINATION}</span></td>
	<td align="right" nowrap="nowrap">
	<span class="gensmall">{L_DISPLAY_MESSAGES}: 
	<select name="msgdays">{S_SELECT_MSG_DAYS}
	</select>
	<input type="submit" value="{L_GO}" name="submit_msgdays" class="liteoption" />
	</span></td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {PRIVATE_MESSAGE_INFO}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr align="center"> 
	  	  <td width="5%" height="20" class="row6" nowrap="nowrap"><span class="mainmenu"> {L_FLAG} </span></td>
	  	  <td width="55%" class="row6" align="left" nowrap="nowrap"><span class="mainmenu"> {L_SUBJECT} </span></td>
	  	  <td width="20%" class="row6" nowrap="nowrap"><span class="mainmenu"> {L_FROM_OR_TO} </span></td>
	  	  <td width="15%" class="row6" nowrap="nowrap"><span class="mainmenu"> {L_DATE} </span></td>
	  	  <td width="5%" class="row6" nowrap="nowrap"><span class="mainmenu"> {L_MARK} </span></td>
		</tr>
		<!-- BEGIN listrow -->
		<tr valign="middle" align="center"> 
	  	  <td class="row2"><img src="{listrow.PRIVMSG_FOLDER_IMG}" border="0" alt="{listrow.L_PRIVMSG_FOLDER_ALT}" title="{listrow.L_PRIVMSG_FOLDER_ALT}" /></td>
	  	  <td align="left" class="row2"><span class="mainmenu"><a href="{listrow.U_READ}" class="mainmenu">{listrow.SUBJECT}</a></span></td>
	  	  <td class="row2"><span class="name"><a href="{listrow.U_FROM_USER_PROFILE}" class="name">{listrow.FROM}</a></span></td>
	  	  <td class="row2"><span class="postdetails">{listrow.DATE}</span></td>
	  	  <td class="row2"><span class="postdetails"> 
		  <input type="checkbox" name="mark[]2" value="{listrow.S_MARK_ID}" /></span></td>
		</tr>
		<!-- END listrow -->
		<!-- BEGIN switch_no_messages -->
		<tr> 
	  	  <td class="row6" colspan="5" align="center" valign="middle"><span class="genmed">{L_NO_MESSAGES}</span></td>
		</tr>
		<!-- END switch_no_messages -->
		<tr> 
	  	  <td class="row3" colspan="5" height="28" align="right">{S_HIDDEN_FIELDS} 
		  <input type="submit" name="save" value="{L_SAVE_MARKED}" class="mainoption" />  
		  <input type="submit" name="delete" value="{L_DELETE_MARKED}" class="liteoption" />  
		  <input type="submit" name="deleteall" value="{L_DELETE_ALL}" class="liteoption" /></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr valign="top"> 
	<td>{POST_PM_IMG}</td>
	<td valign="middle" width="100%"><span class="nav">{PAGINATION}</span></td>
	<td align="right" nowrap="nowrap"><b><span class="gensmall"><a href="javascript:select_switch(true);" class="gensmall">{L_MARK_ALL}</a> :: <a href="javascript:select_switch(false);" class="gensmall">{L_UNMARK_ALL}</a></span></b><br /><br /><span class="nav">{PAGE_NUMBER}</span></td>
  </tr>
</table>
</form>

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr> 
	<td align="right" valign="top"><br />{JUMPBOX}</td>
  </tr>
</table>