<tr> 
	<td class="row1g" colspan="2" style="padding: 20px;">
		<form method="POST" action="{S_POLL_ACTION}">
		<strong class="gen">{POLL_QUESTION}</strong><br />
		<br />
		<center><table cellspacing="0" class="poll-table">
		<!-- BEGIN poll_option -->
		<tr> 
			<td><label><input type="radio" name="vote_id" value="{poll_option.POLL_OPTION_ID}" /> {poll_option.POLL_OPTION_CAPTION}</td>
		</tr>
		<!-- END poll_option -->
		</table></center>
		<br clear="all" />
		<input type="submit" name="submit" value="{L_SUBMIT_VOTE}" class="liteoption" /><br />
		<br />
		<a href="{U_VIEW_RESULTS}" class="gensmall">{L_VIEW_RESULTS}</a>
		{S_HIDDEN_FIELDS}</form>
	</td>
</tr>
<tr> 
	<td class="spaceRow" colspan="2"></td>
</tr>
