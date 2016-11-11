<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; 
		<!-- BEGIN switch_user_logged_in -->
			<a href="{U_PROFILE}" class="nav-current">{L_PROFILE}</a>
		<!-- END switch_user_logged_in -->
		<!-- BEGIN switch_user_logged_out -->
			<a href="{U_REGISTER}" class="nav-current">{L_REGISTER}</a>
		<!-- END switch_user_logged_out -->
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 

<form action="{S_PROFILE_ACTION}" method="post">

<table cellspacing="0" width="100%" class="forumline">
<tr>
	<td colspan="{S_COLSPAN}" class="row-header"><span>{L_AVATAR_GALLERY}</span></td>
</tr>
<tr> 
	<th colspan="{S_COLSPAN}">{L_CATEGORY}:&nbsp;{S_CATEGORY_SELECT}&nbsp;<input type="submit" class="liteoption" value="{L_GO}" name="avatargallery" /></th>
</tr>
<!-- BEGIN avatar_row -->
<tr> 
<!-- BEGIN avatar_column -->
	<td class="row1 row-center"><img src="{avatar_row.avatar_column.AVATAR_IMAGE}" alt="{avatar_row.avatar_column.AVATAR_NAME}" title="{avatar_row.avatar_column.AVATAR_NAME}" /></td>
<!-- END avatar_column -->
</tr>
<tr>
<!-- BEGIN avatar_option_column -->
	<td class="row2 row-center"><input type="radio" name="avatarselect" value="{avatar_row.avatar_option_column.S_OPTIONS_AVATAR}" /></td>
<!-- END avatar_option_column -->
</tr>
<tr> 
	<td class="spaceRow" colspan="{S_COLSPAN}"><img src="themes/Aphrodite_Green/forums/images/spacer.gif" width="1" height="3" alt="" /></td>
</tr>
<!-- END avatar_row -->
<tr> 
	<td class="catBottom" colspan="{S_COLSPAN}">{S_HIDDEN_FIELDS} 
		<input type="submit" name="submitavatar" value="{L_SELECT_AVATAR}" class="mainoption" />
		&nbsp;&nbsp; 
		<input type="submit" name="cancelavatar" value="{L_RETURN_PROFILE}" class="liteoption" />
	</td>
</tr>
</table>
</form>
