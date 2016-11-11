<tr> 
	<td class="row1g" colspan="2" style="padding: 20px;">
		<strong class="gen">{POLL_QUESTION}</strong><br />
		<br />
		<center><table cellspacing="0" class="poll-table">
		<!-- BEGIN poll_option -->
		<tr> 
			<td>{poll_option.POLL_OPTION_CAPTION}</td>
			<td><img src="themes/Aphrodite_Green/forums/images/vote_lcap.gif" width="4" height="12" alt="" /><img src="{poll_option.POLL_OPTION_IMG}" width="{poll_option.POLL_OPTION_IMG_WIDTH}" height="12" alt="{poll_option.POLL_OPTION_PERCENT}" /><img src="themes/Aphrodite_Green/forums/images/vote_rcap.gif" width="4" alt="" height="12" /></td>
			<td align="center"><b>{poll_option.POLL_OPTION_PERCENT}</b></td>
			<td align="center">( {poll_option.POLL_OPTION_RESULT} )</td>
		</tr>
		<!-- END poll_option -->
		</table></center>
		<br clear="all" />
		<b>{L_TOTAL_VOTES} : {TOTAL_VOTES}</b>
	</td>
</tr>
<tr> 
	<td class="spaceRow" colspan="2"></td>
</tr>
