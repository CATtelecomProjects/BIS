<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » {INBOX} » {SENTBOX} » {OUTBOX} » {SAVEBOX}</span></td>
  </tr>
</table>

<br clear="all" />

<form method="post" action="{S_PRIVMSGS_ACTION}">
<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr>
	<td valign="bottom">{REPLY_PM_IMG}</td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {BOX_NAME} :: {L_MESSAGE}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr> 
	  	  <td class="row6"><span class="genmed">{L_FROM}:</span></td>
	  	  <td width="100%" class="row6" colspan="2"><span class="genmed">{MESSAGE_FROM}</span></td>
		</tr>
		<tr> 
	  	  <td class="row6"><span class="genmed">{L_TO}:</span></td>
	  	  <td width="100%" class="row6" colspan="2"><span class="genmed">{MESSAGE_TO}</span></td>
		</tr>
		<tr> 
	  	  <td class="row6"><span class="genmed">{L_POSTED}:</span></td>
	  	  <td width="100%" class="row6" colspan="2"><span class="genmed">{POST_DATE}</span></td>
		</tr>
		<tr> 
	  	  <td class="row1"><span class="genmed">{L_SUBJECT}:</span></td>
	  	  <td width="100%" class="row1"><span class="genmed">{POST_SUBJECT}</span></td>
	  	  <td nowrap="nowrap" class="row1" align="center">{QUOTE_PM_IMG}{EDIT_PM_IMG}</td>
		</tr>
		<tr> 
	  	  <td valign="top" colspan="3" class="row2"><span class="postbody">{MESSAGE}</span></td>
		</tr>
		<tr> 
	  	  <td width="78%" height="20" valign="bottom" colspan="3" class="row6"> 
			<table cellspacing="0" cellpadding="0" border="0" height="18">
		  	  <tr> 
				<td valign="middle" nowrap="nowrap">{PROFILE_IMG} {PM_IMG} {EMAIL_IMG} {WWW_IMG} {AIM_IMG} {YIM_IMG} {MSN_IMG}</td><td>&nbsp;</td><td valign="top" nowrap="nowrap"><script language="JavaScript" type="text/javascript"><!-- 

				if ( navigator.userAgent.toLowerCase().indexOf('mozilla') != -1 && navigator.userAgent.indexOf('5.') == -1 && navigator.userAgent.indexOf('6.') == -1 )
					document.write('{ICQ_IMG}');
				else
					document.write('<div style="position:relative"><div style="position:absolute">{ICQ_IMG}</div><div style="position:absolute;left:3px">{ICQ_STATUS_IMG}</div></div>');
		  
		  		//--></script><noscript>{ICQ_IMG}</noscript></td>
		  	  </tr>
			</table>
	  	  </td>
		</tr>
		<tr>
	  	  <td class="row3" colspan="3" height="28" align="right"> {S_HIDDEN_FIELDS} 
		  <input type="submit" name="save" value="{L_SAVE_MSG}" class="liteoption" />  <input type="submit" name="delete" value="{L_DELETE_MSG}" class="liteoption" /></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr valign="top"> 
	<td>{REPLY_PM_IMG}</td>
  </tr>
</table>
</form>

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr> 
	<td valign="top" align="right">{JUMPBOX}</td>
  </tr>
</table>