<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_IP_INFO}</span></td>
  </tr>
  <tr>
  	<td>
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr> 
		  <td class="row6" height="20"><span class="mainmenu">{L_THIS_POST_IP}</span></td>
  		</tr>
  		<tr> 
		  <td class="row2"> 
	  		<table width="100%" cellspacing="0" cellpadding="0" border="0">
			  <tr> 
		  		<td><span class="genmed">{IP} [ {POSTS} ]</span></td>
		  		<td align="right"><span class="genmed">[ <a href="{U_LOOKUP_IP}">{L_LOOKUP_IP}</a> ] </span></td>
			  </tr>
	  		</table>
		  </td>
  		</tr>
  		<tr> 
		  <td class="row6" height="20"><span class="mainmenu">{L_OTHER_USERS}</span></td>
  		</tr>
  		<!-- BEGIN userrow -->
  		<tr> 
		  <td class="row2"> 
	  		<table width="100%" cellspacing="0" cellpadding="0" border="0">
			  <tr> 
		  		<td><span class="genmed"><a href="{userrow.U_PROFILE}">{userrow.USERNAME}</a> [ {userrow.POSTS} ]</span></td>
		  		<td align="right"><a href="{userrow.U_SEARCHPOSTS}" title="{userrow.L_SEARCH_POSTS}"><img src="{SEARCH_IMG}" border="0" alt="{L_SEARCH}" /></a></td>
			  </tr>
	  		</table>
		  </td>
  		</tr>
  		<!-- END userrow -->
  		<tr> 
		  <td class="row6" height="20"><span class="mainmenu">{L_OTHER_IPS}</span></td>
  		</tr>
  		<!-- BEGIN iprow -->
  		<tr> 
		  <td class="row2">
		  	<table width="100%" cellspacing="0" cellpadding="0" border="0">
			  <tr> 
		  		<td><span class="genmed">{iprow.IP} [ {iprow.POSTS} ]</span></td>
		  		<td align="right"><span class="genmed">[ <a href="{iprow.U_LOOKUP_IP}">{L_LOOKUP_IP}</a> ] </span></td>
			  </tr>
	  		</table>
		  </td>
  		</tr>
  		<!-- END iprow -->
	  </table>
	</td>
  </tr>
</table>

<br clear="all" />