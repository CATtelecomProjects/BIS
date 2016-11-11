<br clear="all" />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr align="center"> 
	  	  <td class="row6" height="20"><span class="mainmenu">{L_PM}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_USERNAME}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_POSTS}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_FROM}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_EMAIL}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_WEBSITE}</span></td>
	  	  <td class="row6"><span class="mainmenu">{L_SELECT}</span></td>
		</tr>
		<tr> 
	  	  <td class="row1" colspan="8" height="20"><span class="mainmenu">{L_PENDING_MEMBERS}</span></td>
		</tr>
		<!-- BEGIN pending_members_row -->
		<tr align="center"> 
	  	  <td class="row2"> {pending_members_row.PM_IMG} </td>
	  	  <td class="row2"><span class="genmed"><a href="{pending_members_row.U_VIEWPROFILE}" class="genmed">{pending_members_row.USERNAME}</a></span></td>
	  	  <td class="row2"><span class="genmed">{pending_members_row.POSTS}</span></td>
	  	  <td class="row2"><span class="genmed">{pending_members_row.FROM}</span></td>
	  	  <td class="row2"><span class="genmed">{pending_members_row.EMAIL_IMG}</span></td>
	  	  <td class="row2"><span class="genmed">{pending_members_row.WWW_IMG}</span></td>
	  	  <td class="row2"><span class="gensmall"><input type="checkbox" name="pending_members[]" value="{pending_members_row.USER_ID}" checked="checked" /></span></td>
		</tr>
		<!-- END pending_members_row -->
		<tr> 
	  	  <td class="row3" colspan="8" align="right"><span class="cattitle"> 
		  <input type="submit" name="approve" value="{L_APPROVE_SELECTED}" class="mainoption" />  <input type="submit" name="deny" value="{L_DENY_SELECTED}" class="liteoption" /></span></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>