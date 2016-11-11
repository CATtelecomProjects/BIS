<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a> &raquo; <a href="{U_FAQ}" class="nav-current">{L_FAQ}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 

<table class="forumline" width="100%" cellspacing="0">
<tr>
	<td class="row-header"><span>{L_FAQ_TITLE}</span></td>
</tr>
<tr>
	<td class="row1g-left gen">
		<!-- BEGIN faq_block_link -->
		<b>{faq_block_link.BLOCK_TITLE}</b><br />
			<!-- BEGIN faq_row_link -->
			<a href="{faq_block_link.faq_row_link.U_FAQ_LINK}">{faq_block_link.faq_row_link.FAQ_LINK}</a><br />
			<!-- END faq_row_link -->
			<br />
		<!-- END faq_block_link -->
	</td>
</tr>
<tr>
	<td class="catBottom"><a href="#top">{L_BACK_TO_TOP}</a></td>
</tr>
</table>

<!-- BEGIN faq_block -->
<table class="forumline" width="100%" cellspacing="0">
<tr> 
	<td class="row-header"><span>{faq_block.BLOCK_TITLE}</span></td>
</tr>
<!-- BEGIN faq_row -->  
<tr> 
	<td class="row1g-left gen">
		<a name="{faq_block.faq_row.U_FAQ_ID}"></a><span class="post-subject">{faq_block.faq_row.FAQ_QUESTION}</span><br /><br />
		{faq_block.faq_row.FAQ_ANSWER}<br /><br />
		<a href="#top">{L_BACK_TO_TOP}</a>
	</td>
</tr>
<tr>
	<td class="spaceRow"><img src="themes/Aphrodite_Green/forums/images/spacer.gif" width="1" height="3" alt="" /></td>
</tr>
<!-- END faq_row -->
</table>
<!-- END faq_block -->

<div align="right">{JUMPBOX}</div>
