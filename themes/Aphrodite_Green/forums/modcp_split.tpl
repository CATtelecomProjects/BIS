<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_VIEW_FORUM}" class="nav-current">{FORUM_NAME}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 

<form method="post" action="{S_SPLIT_ACTION}">
<table width="100%" cellspacing="0" class="forumline">
<tr>
	<td class="row-header" colspan="3"><span>{L_SPLIT_TOPIC}</span></td>
</tr>
<tr> 
	<th colspan="3"><span class="gensmall">{L_SPLIT_TOPIC_EXPLAIN}</span></td>
</tr>
<tr> 
	<td class="row1" nowrap="nowrap"><span class="gen">{L_SPLIT_SUBJECT}</span></td>
	<td class="row2" colspan="2"><input class="post" type="text" size="35" style="width: 350px" maxlength="60" name="subject" /></td>
	</tr>
	<tr> 
	  <td class="row1" nowrap="nowrap"><span class="gen">{L_SPLIT_FORUM}</span></td>
	  <td class="row2" colspan="2">{S_FORUM_SELECT}</td>
	</tr>
	<tr> 
	<td class="catBottom" colspan="3"> 
		<table width="60%" cellspacing="0" cellpadding="0" border="0" align="center">
		  <tr> 
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_all" value="{L_SPLIT_POSTS}" />
			</td>
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_beyond" value="{L_SPLIT_AFTER}" />
			</td>
		  </tr>
		</table>
	  </td>
	</tr>
	<tr> 
		<td class="spaceRow" colspan="3"><img src="themes/Aphrodite_Green/forums/images/spacer.gif" width="1" height="3" alt="" /></td>
	</tr>
	<tr> 
	  <th>{L_AUTHOR}</th>
	  <th>{L_MESSAGE}</th>
	  <th>{L_SELECT}</th>
	</tr>
	<!-- BEGIN postrow -->
	<tr> 
	  <td class="row-post-author"><span class="post-name"><a name="{postrow.U_POST_ID}"></a>{postrow.POSTER_NAME}</span></td>
	  <td width="100%" class="row-post">
		<span class="gensmall"><img src="themes/Aphrodite_Green/forums/images/icon_post.gif" alt="{L_POST}"> {L_POSTED}: {postrow.POST_DATE}</span><br />
		<div class="post-subject">{postrow.POST_SUBJECT}&nbsp;</div>
		<div class="post-text">{postrow.MESSAGE}</div>
	  </td>
	  <td width="5%" class="row1g">&nbsp;{postrow.S_SPLIT_CHECKBOX}&nbsp;</td>
	</tr>
	<tr> 
		<td class="spaceRow" colspan="3"><img src="themes/Aphrodite_Green/forums/images/spacer.gif" width="1" height="3" alt="" /></td>
	</tr>
	<!-- END postrow -->
	<tr> 
	  <td class="catBottom" colspan="3"> 
		<table width="60%" cellspacing="0" cellpadding="0" border="0" align="center">
		  <tr> 
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_all" value="{L_SPLIT_POSTS}" />
			</td>
			<td width="50%" align="center"> 
			  <input class="liteoption" type="submit" name="split_type_beyond" value="{L_SPLIT_AFTER}" />
			  {S_HIDDEN_FIELDS} </td>
		  </tr>
		</table>
	  </td>
	</tr>
</table>

  <table width="100%" cellspacing="2" border="0" align="center" cellpadding="2">
	<tr> 
	  <td align="right" valign="top"><span class="gensmall">{S_TIMEZONE}</span></td>
	</tr>
  </table>
</form>

