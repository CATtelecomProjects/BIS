<form method="post" action="{S_SPLIT_ACTION}">
<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_VIEW_FORUM}" class="mainmenu">{FORUM_NAME}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_SPLIT_TOPIC}</span></td>
  </tr>
  <tr>
  	<td>
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr> 
	  	  <td class="row6" colspan="3"><span class="gensmall"><b>{L_SPLIT_TOPIC_EXPLAIN}</b></span></td>
		</tr>
		<tr> 
	  	  <td class="row2" nowrap="nowrap"><span class="genmed">{L_SPLIT_SUBJECT}</span></td>
	  	  <td class="row2" colspan="2"><input class="liteoption" type="text" size="35" style="width: 350px" maxlength="60" name="subject" /></td>
		</tr>
		<tr> 
	  	  <td class="row2" nowrap="nowrap"><span class="genmed">{L_SPLIT_FORUM}</span></td>
	  	  <td class="row2" colspan="2">{S_FORUM_SELECT}</td>
		</tr>
		<tr> 
	  	  <td class="row3" colspan="3" height="28"> 
			<table width="60%" cellspacing="0" cellpadding="0" border="0" align="center">
		  	  <tr> 
				<td width="50%" align="center"><input class="liteoption" type="submit" name="split_type_all" value="{L_SPLIT_POSTS}" /></td>
				<td width="50%" align="center"><input class="liteoption" type="submit" name="split_type_beyond" value="{L_SPLIT_AFTER}" /></td>
		  	  </tr>
			</table>
	 	  </td>
		</tr>
		<tr align="center"> 
	  	  <td class="row6" nowrap="nowrap"><span class="mainmenu">{L_AUTHOR}</span></td>
	  	  <td nowrap="nowrap" class="row6"><span class="mainmenu">{L_MESSAGE}</span></td>
	  	  <td class="row6" nowrap="nowrap"><span class="mainmenu">{L_SELECT}</span></td>
		</tr>
		<!-- BEGIN postrow -->
		<tr> 
	  	  <td valign="top" rowspan="2" class="row2"><span class="name"><a name="{postrow.U_POST_ID}"></a>{postrow.POSTER_NAME}</span></td>
	  	  <td width="100%" valign="top" class="row2"> 
			<table width="100%" cellspacing="0" cellpadding="0" border="0">
		  	  <tr> 
				<td valign="middle"><img src="themes/DAJ_Glass/forums/images/icon_minipost.gif" alt="{L_POST}"><span class="postdetails">{L_POSTED}: {postrow.POST_DATE}    {L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></td>
		  	  </tr>
			</table>
		  </td>
		  <td width="5%" rowspan="2" align="center" class="row2">{postrow.S_SPLIT_CHECKBOX}</td>
		</tr>
		<tr>
		  <td valign="top" class="row2">
		  	<table width="100%" cellspacing="0" cellpadding="1" border="0">
		  	  <tr> 
				<td valign="top"><span class="postbody">{postrow.MESSAGE}</span></td> 
		  	  </tr>
			</table>
	  	  </td>
	  	</tr>
		<tr> 
	  	  <td colspan="3" height="2" class="row3"><img src="themes/DAJ_Glass/forums/images/spacer.gif" width="1" height="1" border="0"></td>
		</tr>
		<!-- END postrow -->
		<tr> 
	  	  <td class="row3" colspan="3" height="28"> 
			<table width="60%" cellspacing="0" cellpadding="0" border="0" align="center">
		  	  <tr> 
				<td width="50%" align="center"><input class="liteoption" type="submit" name="split_type_all" value="{L_SPLIT_POSTS}" /></td>
				<td width="50%" align="center"><input class="liteoption" type="submit" name="split_type_beyond" value="{L_SPLIT_AFTER}" />{S_HIDDEN_FIELDS}</td>
		  	  </tr>
			</table>
	  	  </td>
		</tr>
	  </table>
	</td>
  </tr>
</table>
</form>