<form action="{S_SEARCH_ACTION}" method="POST">
<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_SEARCH}" class="mainmenu">{L_SEARCH}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_SEARCH_QUERY}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr> 
		  <td class="row2" colspan="2" width="50%"><span class="genmed"><b>{L_SEARCH_KEYWORDS}:</b></span><br /><span class="gensmall">{L_SEARCH_KEYWORDS_EXPLAIN}</span></td>
		  <td class="row2" colspan="2" valign="top"><span class="genmed"><input type="text" style="width: 300px" class="liteoption" name="search_keywords" size="30" /><br /><input type="radio" name="search_terms" value="any" checked="checked" /> {L_SEARCH_ANY_TERMS}<br /><input type="radio" name="search_terms" value="all" /> {L_SEARCH_ALL_TERMS}</span></td>
		</tr>
		<tr> 
		  <td class="row2" colspan="2"><span class="genmed"><b>{L_SEARCH_AUTHOR}:</b></span><br /><span class="gensmall">{L_SEARCH_AUTHOR_EXPLAIN}</span></td>
		  <td class="row2" colspan="2" valign="middle"><span class="genmed"><input type="text" style="width: 300px" class="liteoption" name="search_author" size="30" /></span></td>
		</tr>
		<tr> 
		  <td class="row6" colspan="4" align="center" height="20"><span class="mainmenu">{L_SEARCH_OPTIONS}</span></td>
		</tr>
		<tr> 
		  <td class="row2" align="right"><span class="genmed">{L_FORUM}: </span></td>
		  <td class="row2"><span class="genmed"><select class="liteoption" name="search_forum">{S_FORUM_OPTIONS}</select></span></td>
		  <td class="row2" align="right" nowrap="nowrap"><span class="genmed">{L_SEARCH_PREVIOUS}: </span></td>
		  <td class="row2" valign="middle"><span class="genmed"><select class="liteoption" name="search_time">{S_TIME_OPTIONS}</select><br /><input type="radio" name="search_fields" value="all" checked="checked" /> {L_SEARCH_MESSAGE_TITLE}<br /><input type="radio" name="search_fields" value="msgonly" /> {L_SEARCH_MESSAGE_ONLY}</span></td>
		</tr>
		<tr> 
		  <td class="row2" align="right"><span class="genmed">{L_CATEGORY}: </span></td>
		  <td class="row2"><span class="genmed"><select class="liteoption" name="search_cat">{S_CATEGORY_OPTIONS}</select></span></td>
		  <td class="row2" align="right"><span class="genmed">{L_SORT_BY}: </span></td>
		  <td class="row2" valign="middle" nowrap="nowrap"><span class="genmed"><select class="liteoption" name="sort_by">{S_SORT_OPTIONS}</select><br /><input type="radio" name="sort_dir" value="ASC" /> {L_SORT_ASCENDING}<br /><input type="radio" name="sort_dir" value="DESC" checked /> {L_SORT_DESCENDING}</span></td>
		</tr>
		<tr> 
		  <td class="row2" align="right" nowrap="nowrap"><span class="genmed">{L_DISPLAY_RESULTS}: </span></td>
		  <td class="row2" nowrap="nowrap"><input type="radio" name="show_results" value="posts" /><span class="genmed">{L_POSTS}<input type="radio" name="show_results" value="topics" checked="checked" />{L_TOPICS}</span></td>
		  <td class="row2" align="right"><span class="genmed">{L_RETURN_FIRST}</span></td>
		  <td class="row2"><span class="genmed"><select class="liteoption" name="return_chars">{S_CHARACTER_OPTIONS}</select> {L_CHARACTERS}</span></td>
		</tr>
		<tr> 
		  <td class="row3" colspan="4" align="center" height="28">{S_HIDDEN_FIELDS}<input class="liteoption" type="submit" value="{L_SEARCH}" /></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>
</form>

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr>
	<td align="right">{JUMPBOX}</td>
  </tr>
</table>