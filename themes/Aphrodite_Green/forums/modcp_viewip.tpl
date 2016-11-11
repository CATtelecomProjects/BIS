<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="#" class="nav-current">{L_IP_INFO}</a>
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
	<td class="row-header"><span>{L_IP_INFO}</span></td>
</tr>
<tr> 
	<th height="26">{L_THIS_POST_IP}</th>
</tr>
  <tr> 
	<td class="row1h" onclick="{U_LOOKUP_IP}'"> 
	  <table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr> 
		  <td>&nbsp;<span class="gen">{IP} [ {POSTS} ]</span></td>
		  <td align="right"><span class="gen">[ <a href="{U_LOOKUP_IP}">{L_LOOKUP_IP}</a> 
			]&nbsp;</span></td>
		</tr>
	  </table>
	</td>
  </tr>
  <tr> 
	<th height="26">{L_OTHER_USERS}</th>
  </tr>
  <!-- BEGIN userrow -->
  <tr> 
	<td class="row1h" onclick="{userrow.U_PROFILE}'"> 
	  <table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr> 
		  <td>&nbsp;<span class="gen"><a href="{userrow.U_PROFILE}">{userrow.USERNAME}</a> [ {userrow.POSTS} ]</span></td>
		  <td align="right" class="post-buttons"><a href="{userrow.U_SEARCHPOSTS}" title="{userrow.L_SEARCH_POSTS}"><img src="{SEARCH_IMG}" alt="{L_SEARCH}" /></a>&nbsp;</td>
		</tr>
	  </table>
	</td>
  </tr>
  <!-- END userrow -->
  <tr> 
	<th height="26">{L_OTHER_IPS}</th>
  </tr>
  <!-- BEGIN iprow -->
  <tr> 
	<td class="row1h" onclick="{iprow.U_LOOKUP_IP}'"><table width="100%" cellspacing="0" cellpadding="0" border="0">
		<tr> 
		  <td>&nbsp;<span class="gen">{iprow.IP} [ {iprow.POSTS} ]</span></td>
		  <td align="right"><span class="gen">[ <a href="{iprow.U_LOOKUP_IP}">{L_LOOKUP_IP}</a> 
			]&nbsp;</span></td>
		</tr>
	  </table></td>
  </tr>
  <!-- END iprow -->
</table>