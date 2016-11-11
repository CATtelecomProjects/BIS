<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_SEARCH}" class="nav-current">{L_SEARCH}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 


<form action="{S_SEARCH_ACTION}" method="POST">
<table class="forumline" width="100%" cellspacing="0">
<tr>
	<td colspan="4" class="row-header"><span>{L_SEARCH_QUERY}</span></td>
</tr>
<tr> 
	<td class="row1" colspan="2" width="50%"><span class="gen">{L_SEARCH_KEYWORDS}:</span><br /><span class="gensmall">{L_SEARCH_KEYWORDS_EXPLAIN}</span></td>
	<td class="row2" colspan="2" valign="top"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_keywords" size="30" /><br /><label><input type="radio" name="search_terms" value="any" checked="checked" /> <span>{L_SEARCH_ANY_TERMS}</span></label><br /><label><input type="radio" name="search_terms" value="all" /> <span>{L_SEARCH_ALL_TERMS}</span></label></span></td>
</tr>
<tr> 
	<td class="row1" colspan="2"><span class="gen">{L_SEARCH_AUTHOR}:</span><br /><span class="gensmall">{L_SEARCH_AUTHOR_EXPLAIN}</span></td>
	<td class="row2" colspan="2" valign="middle"><span class="genmed"><input type="text" style="width: 300px" class="post" name="search_author" size="30" /></span></td>
</tr>
<tr> 
	<th colspan="4">{L_SEARCH_OPTIONS}</th>
</tr>
<tr> 
	<td class="row1" align="right"><span class="gen">{L_FORUM}:&nbsp;</span></td>
	<td class="row2"><span class="genmed"><select class="post" name="search_forum">{S_FORUM_OPTIONS}</select></span></td>
	<td class="row1" align="right" nowrap="nowrap"><span class="gen">{L_SEARCH_PREVIOUS}:&nbsp;</span></td>
	<td class="row2" valign="middle"><span class="genmed"><select class="post" name="search_time">{S_TIME_OPTIONS}</select><br /><label><input type="radio" name="search_fields" value="all" checked="checked" /> <span>{L_SEARCH_MESSAGE_TITLE}</span></label><br /><label><input type="radio" name="search_fields" value="msgonly" /> <span>{L_SEARCH_MESSAGE_ONLY}</span></label></span></td>
</tr>
<tr> 
	<td class="row1" align="right"><span class="gen">{L_CATEGORY}:&nbsp;</span></td>
	<td class="row2"><span class="genmed"><select class="post" name="search_cat">{S_CATEGORY_OPTIONS}</select></span></td>
	<td class="row1" align="right"><span class="gen">{L_SORT_BY}:&nbsp;</span></td>
	<td class="row2" valign="middle" nowrap="nowrap"><span class="genmed"><select class="post" name="sort_by">{S_SORT_OPTIONS}</select><br /><label><input type="radio" name="sort_dir" value="ASC" /> <span>{L_SORT_ASCENDING}</span></label><br /><label><input type="radio" name="sort_dir" value="DESC" checked /> <span>{L_SORT_DESCENDING}</span></label></span>&nbsp;</td>
</tr>
<tr> 
	<td class="row1" align="right" nowrap="nowrap"><span class="gen">{L_DISPLAY_RESULTS}:&nbsp;</span></td>
	<td class="row2" nowrap="nowrap"><span class="genmed"><label><input type="radio" name="show_results" value="posts" /><span>{L_POSTS}</span></label><label><input type="radio" name="show_results" value="topics" checked="checked" /> <span>{L_TOPICS}</span></label></span></td>
	<td class="row1" align="right"><span class="gen">{L_RETURN_FIRST}</span></td>
	<td class="row2"><span class="genmed"><select class="post" name="return_chars">{S_CHARACTER_OPTIONS}</select> {L_CHARACTERS}</span></td>
</tr>
<tr> 
	<td class="catBottom" colspan="4">{S_HIDDEN_FIELDS}<input class="mainoption" type="submit" value="{L_SEARCH}" /></td>
</tr>
</table>

<div align="right">{JUMPBOX}</div>