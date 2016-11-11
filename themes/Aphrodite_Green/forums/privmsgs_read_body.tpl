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

<table cellspacing="2" cellpadding="2" border="0" align="center">
  <tr> 
  <td><span class="forumlink">{INBOX} &nbsp;</span></td>
  <td><span class="forumlink">{SENTBOX} &nbsp;</span></td>
  <td><span class="forumlink">{OUTBOX} &nbsp;</span></td>
  <td><span class="forumlink">{SAVEBOX} &nbsp;</span></td>
  </tr>
</table>

<br />

<form method="post" action="{S_PRIVMSGS_ACTION}">
{S_HIDDEN_FIELDS}

<table width="100%" cellspacing="0" cellpadding="0" border="0">
  <tr>
	  <td align="left" valign="middle">{REPLY_PM_IMG}</td>
  </tr>
</table>

<table cellspacing="0" width="100%" class="forumline">
<tr>
	<td colspan="2" class="row-header"><span>{POST_SUBJECT}</span></td>
</tr>
<tr>
	<th width="150">{L_AUTHOR}</th>
	<th>{L_MESSAGE}</th>
</tr>
<tr> 
	<td class="row-post-author">
		<span class="post-name">{MESSAGE_FROM}</span><br />
		<div class="post-details">{L_POSTED}: {POST_DATE}</div><br />
		<img src="themes/Aphrodite_Green/forums/images/spacer.gif" width="150" height="1" alt="" />
	</td>
	<td class="row-post" width="100%">
		<div class="post-buttons-top post-buttons"><span class="img-main">{QUOTE_PM_IMG}</span> {EDIT_PM_IMG}</div>
		<div class="post-subject">{POST_SUBJECT}&nbsp;</div>
		<div class="post-text">{MESSAGE}</div>
	</td>
</tr>
<tr>
	<td class="row-post-date">&nbsp;</td>
	<td class="row-post-buttons post-buttons"><span class="img-main">{PROFILE_IMG}</span> {PM_IMG} {EMAIL_IMG} {WWW_IMG} {AIM_IMG} {YIM_IMG} {MSN_IMG} {ICQ_IMG}</td>
</tr>
<tr> 
	<td class="spaceRow" colspan="2"><img src="themes/Aphrodite_Green/forums/images/spacer.gif" width="1" height="3" alt="" /></td>
</tr>
<tr> 
	<td class="catBottom" colspan="2"><input type="submit" name="save" value="{L_SAVE_MSG}" class="liteoption" />&nbsp;<input type="submit" name="delete" value="{L_DELETE_MSG}" class="liteoption" /></td>
</tr>
</table>

<table width="100%" cellspacing="0" class="empty-table">
<tr> 
	<td align="left">{REPLY_PM_IMG}</td>
	<td align="right" valign="top" nowrap="nowrap"><span class="gensmall">{S_TIMEZONE}</span></td>
</tr>
</table>
</form>


<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr> 
	<td valign="top" align="right"><span class="gensmall">{JUMPBOX}</span></td>
  </tr>
</table>

