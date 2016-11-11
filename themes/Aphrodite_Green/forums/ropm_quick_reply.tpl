<!-- BEGIN ropm_quick_reply -->
</form>
<table>
<tr align="center"><td class="row1" colspan="2">

<script language='JavaScript' type="text/javascript">
 function openAllSmiles(){
smiles = window.open('{U_MORE_SMILIES}', '_phpbbsmilies', 'HEIGHT=300,resizable=yes,scrollbars=yes,WIDTH=250');
smiles.focus();
return false;
 }

 function quoteSelection() {

theSelection = false;
theSelection = document.selection.createRange().text; // Get text selection

if (theSelection) {
 // Add tags around selection
 emoticon( '[quote]\n' + theSelection + '\n[/quote]\n');
 document.post.message.focus();
 theSelection = '';
 return;
}else{
 alert('{L_NO_TEXT_SELECTED}');
}
 }

 function storeCaret(textEl) {
if (textEl.createTextRange) textEl.caretPos = document.selection.createRange().duplicate();
 }

 function emoticon(text) {
if (document.post.message.createTextRange && document.post.message.caretPos) {
 var caretPos = document.post.message.caretPos;
 caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
 document.post.message.focus();
} else {
 document.post.message.value+= text;
 document.post.message.focus();
}
 }

 function checkForm() {
formerrors = false;
if (document.post.message.value.length < 2) {
 formerrors = '{L_EMPTY_MESSAGE}';
}
if (formerrors) {
 alert(formerrors);
 return false;
}
}
</script>
<form action='{ropm_quick_reply.POST_ACTION}' method='post' name='post' onsubmit='return checkForm(this)'>
<input type="hidden" name="sid" value="{ropm_quick_reply.SID}" />
<input type="hidden" name="username" value="{MESSAGE_FROM}" />
<table border='0' cellpadding='10' cellspacing='1' width='494' class='forumline'>
<tr>
<th class='row1' height='25' width="471"><b>{L_QUICK_REPLY}</b></th>
</tr>
<tr>
<td class='row1' width="453">
<input type="text" name="subject" size="45" maxlength="60" style="width:450px" tabindex="2" class="post" value="Re: {POST_SUBJECT}" /><br />
</td>
</tr>
<tr>
<td class='row2' width="453">
<img src="images/spacer.gif" width="3px"><br />
<textarea name='message' style="width:450px; height: 140px;" wrap='virtual' tabindex='3' class='post' onselect='storeCaret(this);' onclick='storeCaret(this);' onkeyup='storeCaret(this);' rows="1" cols="20"></textarea><br />
<!-- BEGIN smilies -->
<img src="{ropm_quick_reply.smilies.URL}" border="0" onmouseover="this.style.cursor='hand';" onclick="emoticon(' {ropm_quick_reply.smilies.CODE} ');" alt="{ropm_quick_reply.smilies.DESC}" title="{ropm_quick_reply.smilies.DESC}" />
<!-- END smilies -->
<input type="button" class="button" name="SmilesButt" value="{L_ALL_SMILIES}" onclick="openAllSmiles();" />
<br />
<input type='button' name='quoteselected' class='liteoption' value='{L_QUOTE_SELECTED}' onclick='javascript:quoteSelection()' /></td>
</tr>
<tr>
<td class='row2' width="453">
<span class='gen'>
<b>{L_OPTIONS}</b><br />
<input type='checkbox' name='attach_sig' {ropm_quick_reply.user_logged_in.attach_signature} value="ON" />{L_ATTACH_SIGNATURE}<br />
</td>
<tr>
<td class='row1' align='center' height='28' width="471">
<input type="hidden" name="disable_html" /><input type="hidden" name="disable_bbcode" /><input type="hidden" name="disable_smilies" /><input type="hidden" name="folder" value="inbox" /><input type="hidden" name="mode" value="post" />
<input type='submit' name='preview' class='liteoption' value='{L_PREVIEW}' />&nbsp;
<input type='submit' name='post' class='mainoption' value='{L_SUBMIT}' />
</td>
</tr>
</table></form>
</table>
<!-- END ropm_quick_reply -->