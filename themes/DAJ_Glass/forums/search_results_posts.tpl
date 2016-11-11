<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_SEARCH}" class="mainmenu">{L_SEARCH}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_SEARCH_MATCHES}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr align="center"> 
		  <td width="150" height="20" class="row6" nowrap="nowrap"><span class="mainmenu">{L_AUTHOR}</span></td>
		  <td width="100%" class="row6" nowrap="nowrap"><span class="mainmenu">{L_MESSAGE}</span></td>
  		</tr>
  		<!-- BEGIN searchresults -->
  		<tr> 
		  <td class="row1" colspan="2" height="20"><span class="mainmenu"><img src="themes/DAJ_Glass/forums/images/folder.gif" border="0" align="absmiddle">  {L_TOPIC}: <a href="{searchresults.U_TOPIC}" class="mainmenu">{searchresults.TOPIC_TITLE}</a></span></td>
  		</tr>
  		<tr> 
		  <td width="150" valign="top" class="row2" rowspan="2"><span class="name"><b>{searchresults.POSTER_NAME}</b></span><br /><br />
	  	  <span class="postdetails">{L_REPLIES}: <b>{searchresults.TOPIC_REPLIES}</b><br />{L_VIEWS}: <b>{searchresults.TOPIC_VIEWS}</b></span><br /></td>
		  <td width="100%" valign="middle" height="20" class="row2"><img src="{searchresults.MINI_POST_IMG}" alt="{searchresults.L_MINI_POST_ALT}" title="{searchresults.L_MINI_POST_ALT}" border="0" /><span class="postdetails">{L_FORUM}: <b><a href="{searchresults.U_FORUM}" class="postdetails">{searchresults.FORUM_NAME}</a></b>   {L_POSTED}: {searchresults.POST_DATE}   {L_SUBJECT}: <b><a href="{searchresults.U_POST}">{searchresults.POST_SUBJECT}</a></b></span></td>
  		</tr>
  		<tr>
		  <td valign="top" class="row2"><span class="postbody">{searchresults.MESSAGE}</span></td>
  		</tr>
  		<!-- END searchresults -->
	  </table>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
  <tr valign="top"> 
	<td><span class="genmed">{PAGINATION}</span></td>
	<td align="right" nowrap="nowrap"><span class="nav">{PAGE_NUMBER}</span></td>
  </tr>
</table>

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr> 
	<td valign="top" align="right"><br />{JUMPBOX}</td>
  </tr>
</table>