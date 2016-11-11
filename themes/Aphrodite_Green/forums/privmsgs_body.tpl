<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_PRIVATEMSGS}" class="nav-current">{L_PRIVATEMSGS}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 

<form method="post" name="privmsg_list" action="{S_PRIVMSGS_ACTION}">

<script language="Javascript" type="text/javascript">
<!--
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
//-->
</script>

<table cellpadding="0" width="100%" class="empty-table">
<tr> 
	<td align="left" valign="bottom">{POST_PM_IMG}</td>
	<td valign="top" align="center" width="100%"> 
	  <table height="40" cellspacing="2" cellpadding="2" border="0">
		<tr valign="middle"> 
		  <td><span class="forumlink">{INBOX} &nbsp;</span></td>
		  <td><span class="forumlink">{SENTBOX} &nbsp;</span></td>
		  <td><span class="forumlink">{OUTBOX} &nbsp;</span></td>
		  <td><span class="forumlink">{SAVEBOX} &nbsp;</span></td>
		</tr>
	  </table>
	</td>
	<td align="right"> 
	  <!-- BEGIN switch_box_size_notice -->
	  <table width="190" cellspacing="0" class="forumline">
		<tr> 
		  <th colspan="3"><span class="gensmall">{BOX_SIZE_STATUS}</span></th>
		</tr>
		<tr> 
		  <td colspan="3" width="190" class="row1" nowrap="nowrap"><img src="themes/Talisman/forums/images/vote_lcap.gif" width="4" height="12" border="0" /><img src="themes/Talisman/forums/images/voting_bar.gif" width="{INBOX_LIMIT_IMG_WIDTH}" height="12" alt="{INBOX_LIMIT_PERCENT}" /><img src="themes/Talisman/forums/images/vote_rcap.gif" width="4" height="12" border="0" alt="" /></td>
		</tr>
		<tr> 
		  <td width="33%" class="row3"><span class="gensmall">0%</span></td>
		  <td width="34%" align="center" class="row3"><span class="gensmall">50%</span></td>
		  <td width="33%" align="right" class="row3"><span class="gensmall">100%</span></td>
		</tr>
	  </table>
	  <!-- END switch_box_size_notice -->
	</td>
  </tr>
</table>

<table cellspacing="0" width="100%" class="forumline">
<tr>
	<td colspan="5" class="row-header"><span>{BOX_NAME}</span></td>
</tr>
<tr> 
	<th colspan="2">{L_SUBJECT}</th>
	<th width="20%">{L_FROM_OR_TO}</th>
	<th width="15%">{L_DATE}</th>
	<th width="5%">{L_MARK}</th>
</tr>
<!-- BEGIN listrow -->
<tr> 
	<td class="row1 row-center" width="18"><img src="{listrow.PRIVMSG_FOLDER_IMG}" width="15" height="15" alt="{listrow.L_PRIVMSG_FOLDER_ALT}" title="{listrow.L_PRIVMSG_FOLDER_ALT}" /></td>
	<td valign="middle" class="row1h row-forum" onclick="window.location.href='{listrow.U_READ}'"><span class="topiclink"><a href="{listrow.U_READ}" class="topiclink">{listrow.SUBJECT}</a></span></td>
	<td class="row2 row-center"><a href="{listrow.U_FROM_USER_PROFILE}">{listrow.FROM}</a></td>
	<td class="row2 row-center-small">{listrow.DATE}</td>
	<td class="row3 row-center"><input type="checkbox" name="mark[]2" value="{listrow.S_MARK_ID}" /></td>
</tr>
<!-- END listrow -->
<!-- BEGIN switch_no_messages -->
<tr> 
	<td class="row1 row-center" colspan="5">{L_NO_MESSAGES}</td>
</tr>
<!-- END switch_no_messages -->
<tr> 
	<td class="catBottom" colspan="5"><table width="100%" cellspacing="0" cellpadding="0" border="0">
	  <tr>
		<td nowrap="nowrap" align="left" valign="middle"><span class="gensmall">&nbsp;{L_DISPLAY_MESSAGES}:&nbsp;</span></td>
		<td nowrap="nowrap"><select name="msgdays">{S_SELECT_MSG_DAYS}</select> <input type="submit" value="{L_GO}" name="submit_msgdays" class="liteoption jumpbox" /></td>
		<td width="100%" align="right" nowrap="nowrap">
		{S_HIDDEN_FIELDS} 
		<input type="submit" name="save" value="{L_SAVE_MARKED}" class="mainoption" style="padding-left: 2px; padding-right: 2px;" />
		&nbsp; 
		<input type="submit" name="delete" value="{L_DELETE_MARKED}" class="liteoption" style="padding-left: 2px; padding-right: 2px;" />
		&nbsp; 
		<input type="submit" name="deleteall" value="{L_DELETE_ALL}" class="liteoption" style="padding-left: 2px; padding-right: 2px;" />
		</td>
	  </tr>
	  </table></td>
</tr>
</table>

  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	  <td align="left" valign="middle"><span class="gen">{POST_PM_IMG}</span></td>
	  <td align="left" valign="middle" width="100%"><span class="gen">{PAGE_NUMBER}</span></td>
	  <td align="right" valign="top" nowrap="nowrap"><span class="gensmall"><a href="javascript:select_switch(true);" class="gensmall">{L_MARK_ALL}</a> :: <a href="javascript:select_switch(false);" class="gensmall">{L_UNMARK_ALL}</a></span><br /><div class="pagination">{PAGINATION}</div><br /><span class="gensmall">{S_TIMEZONE}</span></td>
	</tr>
  </table>
</form>

<div align="right">{JUMPBOX}</div>