<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_MEMBERLIST}" class="nav-current">{L_MEMBERLIST}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 

<table width="100%" cellspacing="0" class="forumline">
<tr>
	<td colspan="8" class="row-header"><span>{L_MEMBERLIST}</span></td>
</tr>
<tr> 
	<th width="50">#</th>
	<th width="50">&nbsp;</th>
	<th>{L_USERNAME}</th>
	<th width="50">{L_EMAIL}</th>
	<th>{L_FROM}</th>
	<th>{L_JOINED}</th>
	<th width="50">{L_POSTS}</th>
	<th width="50">{L_WEBSITE}</th>
</tr>
<!-- BEGIN memberrow -->
<tr> 
	<td class="row1 row-center">&nbsp;{memberrow.ROW_NUMBER}&nbsp;</td>
	<td class="row1 post-buttons-single" align="center">&nbsp;{memberrow.PM_IMG}&nbsp;</td>
	<td class="row1 row-center"><a href="{memberrow.U_VIEWPROFILE}">{memberrow.USERNAME}</a></td>
	<td class="row1 post-buttons-single">&nbsp;{memberrow.EMAIL_IMG}&nbsp;</td>
	<td class="row1 row-center-small">&nbsp;{memberrow.FROM}&nbsp;</td>
	<td class="row1 row-center-small">{memberrow.JOINED}</td>
	<td class="row1 row-center">{memberrow.POSTS}</td>
	<td class="row1 post-buttons-single">&nbsp;{memberrow.WWW_IMG}&nbsp;</td>
</tr>
<!-- END memberrow -->
</table>

<table width="100%" cellspacing="0" class="empty-table">
<tr> 
	<td align="left"><span class="pagination">{PAGINATION}</span></td>
	<td align="right" valign="top" nowrap="nowrap"><form method="post" action="{S_MODE_ACTION}">
		<span class="genmed">{L_SELECT_SORT_METHOD}:&nbsp;{S_MODE_SELECT}&nbsp;&nbsp;{L_ORDER}&nbsp;{S_ORDER_SELECT}&nbsp;&nbsp;<input type="submit" name="submit" value="{L_SUBMIT}" class="liteoption jumpbox" /></span>
	</form></td>
</tr>
<tr>
	<td align="left"><span class="gen">{PAGE_NUMBER}</span></td>
	<td valign="top" align="right">{JUMPBOX}</td>
</tr>
</table>

