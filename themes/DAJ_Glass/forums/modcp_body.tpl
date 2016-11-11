<form method="post" action="{S_MODCP_ACTION}">
<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_VIEW_FORUM}" class="mainmenu">{FORUM_NAME}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr valign="bottom"> 
	<td><span class="gensmall">{PAGINATION}</span></td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_MOD_CP}</span></td>
  </tr>
  <tr>
  	<td>
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr> 
	  	  <td class="row6" colspan="5"><span class="gensmall"><b>{L_MOD_CP_EXPLAIN}</b></span></td>
		</tr>
		<tr align="center"> 
	  	  <td width="4%" class="row1" nowrap="nowrap">&nbsp;</td>
	  	  <td align="left" class="row1" nowrap="nowrap"><span class="mainmenu">{L_TOPICS}</span></td>
	  	  <td width="8%" class="row1" nowrap="nowrap"><span class="mainmenu"> {L_REPLIES} </span></td>
	  	  <td width="17%" class="row1" nowrap="nowrap"><span class="mainmenu"> {L_LASTPOST} </span></td>
	  	  <td width="5%" class="row1" nowrap="nowrap"><span class="mainmenu">{L_SELECT}</span></td>
		</tr>
		<!-- BEGIN topicrow -->
		<tr align="center" valign="middle"> 
	  	  <td class="row2"><img src="{topicrow.TOPIC_FOLDER_IMG}" border="0" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></td>
	  	  <td class="row2" align="left"><span class="mainmenu">{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="mainmenu">{topicrow.TOPIC_TITLE}</a></span></td>
	  	  <td class="row2"><span class="postdetails">{topicrow.REPLIES}</span></td>
	  	  <td class="row2"><span class="postdetails">{topicrow.LAST_POST_TIME}</span></td>
	  	  <td class="row2"><input type="checkbox" name="topic_id_list[]" value="{topicrow.TOPIC_ID}" /></td>
		</tr>
		<!-- END topicrow -->
		<tr align="right"> 
	  	  <td class="row3" colspan="5" height="28">{S_HIDDEN_FIELDS} 
		  <input type="submit" name="delete" class="liteoption" value="{L_DELETE}" />
		  <input type="submit" name="move" class="liteoption" value="{L_MOVE}" />
		  <input type="submit" name="lock" class="liteoption" value="{L_LOCK}" />
		  <input type="submit" name="unlock" class="liteoption" value="{L_UNLOCK}" /></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr valign="top"> 
	<td><span class="gensmall">{PAGINATION}</span></td>
	<td align="right" nowrap="nowrap"><span class="nav">{PAGE_NUMBER}</b></span></td>
  </tr>
</table>
</form>

<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr> 
	<td align="right"><br />{JUMPBOX}</td>
  </tr>
</table>