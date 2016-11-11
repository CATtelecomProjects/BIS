<form method="post" action="{S_MODE_ACTION}">
<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_MEMBERLIST}" class="mainmenu">{L_MEMBERLIST}</a></span></td>
  </tr>
</table>

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr> 
	<td align="right" nowrap="nowrap"><span class="genmed">{L_SELECT_SORT_METHOD}: {S_MODE_SELECT}  {L_ORDER} {S_ORDER_SELECT}   
	<input type="submit" name="submit" value="{L_SUBMIT}" class="liteoption" /></span></td>
  </tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_MEMBERLIST}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<tr align="center"> 
	  	  <td height="20" class="row6" nowrap="nowrap"><span class="mainmenu">#</span></td>
	  	  <td class="row6" nowrap="nowrap"><span class="mainmenu">{L_PM}</span></td>
	  	  <td class="row6" nowrap="nowrap"><span class="mainmenu">{L_USERNAME}</span></td>
	  	  <td class="row6" nowrap="nowrap"><span class="mainmenu">{L_EMAIL}</span></td>
	  	  <td class="row6" nowrap="nowrap"><span class="mainmenu">{L_FROM}</span></td>
	  	  <td class="row6" nowrap="nowrap"><span class="mainmenu">{L_JOINED}</span></td>
	  	  <td class="row6" nowrap="nowrap"><span class="mainmenu">{L_POSTS}</span></td>
	  	  <td class="row6" nowrap="nowrap"><span class="mainmenu">{L_WEBSITE}</span></td>
		</tr>
		<!-- BEGIN memberrow -->
		<tr align="center" valign="middle"> 
	  	  <td class="row2"><span class="genmed"> {memberrow.ROW_NUMBER} </span></td>
	  	  <td class="row2"> {memberrow.PM_IMG}</td>
	  	  <td class="row2"><a href="{memberrow.U_VIEWPROFILE}" class="genmed">{memberrow.USERNAME}</a></td>
	  	  <td class="row2"> {memberrow.EMAIL_IMG} </td>
	  	  <td class="row2"><span class="genmed">{memberrow.FROM}</span></td>
	  	  <td class="row2"><span class="gensmall">{memberrow.JOINED}</span></td>
	  	  <td class="row2"><span class="genmed">{memberrow.POSTS}</span></td>
	  	  <td class="row2"> {memberrow.WWW_IMG} </td>
		</tr>
		<!-- END memberrow -->
	  </table>
	</td>
  </tr>
</table>

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr> 
	<td><span class="genmed">{PAGINATION}</span></td>
	<td align="right"><span class="nav">{PAGE_NUMBER}</span></td>
  </tr>
</table>
</form>

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr> 
	<td valign="top" align="right"><br />{JUMPBOX}</td>
  </tr>
</table>