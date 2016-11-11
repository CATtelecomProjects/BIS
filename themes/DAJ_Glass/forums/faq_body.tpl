<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_FAQ}" class="mainmenu">{L_FAQ}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_FAQ_TITLE}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr>
		  <td class="row2">
		  <!-- BEGIN faq_block_link -->
		  <span class="genmed"><b>{faq_block_link.BLOCK_TITLE}</b></span><br />
		  <!-- BEGIN faq_row_link -->
		  <a href="{faq_block_link.faq_row_link.U_FAQ_LINK}" class="genmed">{faq_block_link.faq_row_link.FAQ_LINK}</a><br />
		  <!-- END faq_row_link -->
		  <br />
		  <!-- END faq_block_link -->
		  </td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

<!-- BEGIN faq_block -->
<br clear="all" />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {faq_block.BLOCK_TITLE}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
		<!-- BEGIN faq_row -->  
		<tr> 
		  <td class="row2" valign="top"><span class="postbody"><a name="{faq_block.faq_row.U_FAQ_ID}"></a><b>{faq_block.faq_row.FAQ_QUESTION}</b></span><br /><span class="postbody">{faq_block.faq_row.FAQ_ANSWER}<br /><br /><a class="mainmenu" href="#Top">{L_BACK_TO_TOP}</a></span></td>
		</tr>
		<tr>
		  <td class="row3" height="2"><img src="themes/DAJ_Glass/forums/images/spacer.gif" border="0" width="1" height="1" /></td>
		</tr>
		<!-- END faq_row -->
	  </table>
	</td>
  </tr>
</table>
<!-- END faq_block -->

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr>
	<td align="right" valign="top"><br />{JUMPBOX}</td> 
  </tr>
</table>