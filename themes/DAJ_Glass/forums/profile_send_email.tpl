<script language="JavaScript" type="text/javascript">
<!--
function checkForm(formObj) {

	formErrors = false;    

	if (formObj.message.value.length < 2) {
		formErrors = "{L_EMPTY_MESSAGE_EMAIL}";
	}
	else if ( formObj.subject.value.length < 2)
	{
		formErrors = "{L_EMPTY_SUBJECT_EMAIL}";
	}

	if (formErrors) {
		alert(formErrors);
		return false;
	}
}
//-->
</script>

<form action="{S_POST_ACTION}" method="post" name="post" onSubmit="return checkForm(this)">

{ERROR_BOX}

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_SEND_EMAIL_MSG}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr> 
		  <td class="row2" width="22%"><span class="genmed"><b>{L_RECIPIENT}</b></span></td>
		  <td class="row2" width="78%"><span class="genmed"><b>{USERNAME}</b></span></td>
		</tr>
		<tr> 
		  <td class="row2"><span class="genmed"><b>{L_SUBJECT}</b></span></td>
		  <td class="row2"><span class="genmed"><input type="text" name="subject" size="45" maxlength="100" style="width:450px" tabindex="2" class="liteoption" value="{SUBJECT}" /></span></td>
		</tr>
		<tr> 
		  <td class="row2" valign="top"><span class="genmed"><b>{L_MESSAGE_BODY}</b></span><br /><span class="gensmall">{L_MESSAGE_BODY_DESC}</span></td>
		  <td class="row2"><span class="genmed"><textarea name="message" rows="25" cols="40" wrap="virtual" style="width:500px" tabindex="3" class="liteoption">{MESSAGE}</textarea></span></td>
		</tr>
		<tr> 
		  <td class="row2" valign="middle"><span class="genmed"><b>{L_OPTIONS}</b></span></td>
		  <td class="row2">
		    <table cellspacing="0" cellpadding="1" border="0">
			  <tr> 
				<td><input type="checkbox" name="cc_email"  value="1" checked="checked" /></td>
				<td><span class="genmed">{L_CC_EMAIL}</span></td>
			  </tr>
			</table>
		  </td>
		</tr>
		<tr>
		  <td class="row3" colspan="2" align="center" height="28">{S_HIDDEN_FIELDS}<input type="submit" tabindex="6" name="submit" class="mainoption" value="{L_SEND_EMAIL}" /></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

</form>

<table width="100%" cellspacing="1" border="0" cellpadding="1">
  <tr>
	<td valign="top" align="right"><br />{JUMPBOX}</td>
  </tr>
</table>