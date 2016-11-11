<form action="{S_PROFILE_ACTION}" {S_FORM_ENCTYPE} method="post">

{ERROR_BOX}

<table width="100%" cellspacing="1" cellpadding="1" border="0">
  <tr valign="top">
	<td nowrap="nowrap"><img src="themes/DAJ_Glass/forums/images/nav.gif" border="0"></td>
	<td width="100%"><span class="mainmenu"><a href="{U_INDEX}" class="mainmenu">{L_INDEX}</a> » <a href="{U_REGISTER}" class="mainmenu">{L_PROFILE}</a></span></td>
  </tr>
</table>

<br />

<table width="100%" cellspacing="0" cellpadding="0" class="forumline">
  <tr>
	<td height="25" nowrap="nowrap" class="row4"><span class="cattitle"> {L_REGISTRATION_INFO}</span></td>
  </tr>
  <tr>
  	<td colspan="3">
	  <table width="100%" cellspacing="1" cellpadding="3" border="0">
	  	<tr> 
		  <td class="row6" colspan="2"><span class="gensmall"><b>{L_ITEMS_REQUIRED}</b></span></td>
		</tr>
		<!-- BEGIN switch_namechange_disallowed -->
		<tr> 
		  <td class="row2" width="38%"><span class="genmed">{L_USERNAME}: *</span></td>
		  <td class="row2"><input type="hidden" name="username" value="{USERNAME}" /><span class="genmed"><b>{USERNAME}</b></span></td>
		</tr>
		<!-- END switch_namechange_disallowed -->
		<!-- BEGIN switch_namechange_allowed -->
		<tr> 
		  <td class="row2" width="38%"><span class="genmed">{L_USERNAME}: *</span></td>
		  <td class="row2"><input type="text" class="liteoption" style="width:200px" name="username" size="25" maxlength="25" value="{USERNAME}" /></td>
		</tr>
		<!-- END switch_namechange_allowed -->
		<tr> 
		  <td class="row2"><span class="genmed">{L_EMAIL_ADDRESS}: *</span></td>
		  <td class="row2"><input type="text" class="liteoption" style="width:200px" name="email" size="25" maxlength="255" value="{EMAIL}" /></td>
		</tr>
		<!-- BEGIN switch_edit_profile -->
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_CURRENT_PASSWORD}: *</span><br />
		  <span class="gensmall">{L_CONFIRM_PASSWORD_EXPLAIN}</span></td>
	  	  <td class="row2"> 
		  <input type="password" class="liteoption" style="width: 200px" name="cur_password" size="25" maxlength="32" value="{CUR_PASSWORD}" /></td>
		</tr>
		<!-- END switch_edit_profile -->
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_NEW_PASSWORD}: *</span><br />
		  <span class="gensmall">{L_PASSWORD_IF_CHANGED}</span></td>
	  	  <td class="row2"> 
		  <input type="password" class="liteoption" style="width: 200px" name="new_password" size="25" maxlength="32" value="{NEW_PASSWORD}" /></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_CONFIRM_PASSWORD}: * </span><br />
		  <span class="gensmall">{L_PASSWORD_CONFIRM_IF_CHANGED}</span></td>
	  	  <td class="row2"> 
		  <input type="password" class="liteoption" style="width: 200px" name="password_confirm" size="25" maxlength="32" value="{PASSWORD_CONFIRM}" /></td>
		</tr>
		<!-- Visual Confirmation -->
		<!-- BEGIN switch_confirm -->
		<tr>
		  <td class="row2" colspan="2" align="center"><span class="gensmall">{L_CONFIRM_CODE_IMPAIRED}</span><br /><br />{CONFIRM_IMG}<br /><br /></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_CONFIRM_CODE}: * </span><br /><span class="gensmall">{L_CONFIRM_CODE_EXPLAIN}</span></td>
	  	  <td class="row2"><input type="text" class="liteoption" style="width: 200px" name="confirm_code" size="6" maxlength="6" value="" /></td>
		</tr>
		<!-- END switch_confirm -->
		<tr> 
	  	  <td class="row3" height="2" colspan="2"><img src="themes/DAJ_Glass/forums/images/spacer.gif" border="0" width="1" height="1"></td>
		</tr>
		<tr> 
	  	  <td align="center" class="row1" colspan="2" height="20"><span class="mainmenu">{L_PROFILE_INFO}</span></td>
		</tr>
		<tr> 
	  	  <td class="row6" colspan="2"><span class="gensmall"><b>{L_PROFILE_INFO_NOTICE}</b></span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_ICQ_NUMBER}:</span></td>
	  	  <td class="row2"><input type="text" name="icq" class="liteoption" style="width: 100px"  size="10" maxlength="15" value="{ICQ}" /></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_AIM}:</span></td>
	  	  <td class="row2"><input type="text" class="liteoption" style="width: 150px"  name="aim" size="20" maxlength="255" value="{AIM}" /></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_MESSENGER}:</span></td>
	  	  <td class="row2"><input type="text" class="liteoption" style="width: 150px"  name="msn" size="20" maxlength="255" value="{MSN}" /></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_YAHOO}:</span></td>
	  	  <td class="row2"><input type="text" class="liteoption" style="width: 150px"  name="yim" size="20" maxlength="255" value="{YIM}" /></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_WEBSITE}:</span></td>
	  	  <td class="row2"><input type="text" class="liteoption" style="width: 200px"  name="website" size="25" maxlength="255" value="{WEBSITE}" /></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_LOCATION}:</span></td>
	 	  <td class="row2"><input type="text" class="liteoption" style="width: 200px"  name="location" size="25" maxlength="100" value="{LOCATION}" /></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_OCCUPATION}:</span></td>
	  	  <td class="row2"><input type="text" class="liteoption" style="width: 200px"  name="occupation" size="25" maxlength="100" value="{OCCUPATION}" /></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_INTERESTS}:</span></td>
	  	  <td class="row2"><input type="text" class="liteoption" style="width: 200px"  name="interests" size="35" maxlength="150" value="{INTERESTS}" /></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_SIGNATURE}:</span><br /><span class="gensmall">{L_SIGNATURE_EXPLAIN}<br /><br />{HTML_STATUS}<br />{BBCODE_STATUS}<br />{SMILIES_STATUS}</span></td>
	  	  <td class="row2"><textarea name="signature" style="width: 300px"  rows="6" cols="30" class="liteoption">{SIGNATURE}</textarea></td>
		</tr>
		<tr> 
	  	  <td class="row3" colspan="2" height="2"><img src="themes/DAJ_Glass/forums/images/spacer.gif" border="0" width="1" height="1"></td>
		</tr>
		<tr> 
	  	  <td class="row1" align="center" colspan="2" height="20"><span class="mainmenu">{L_PREFERENCES}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_PUBLIC_VIEW_EMAIL}:</span></td>
	  	  <td class="row2"><input type="radio" name="viewemail" value="1" {VIEW_EMAIL_YES} />
		  <span class="genmed">{L_YES}</span>   
		  <input type="radio" name="viewemail" value="0" {VIEW_EMAIL_NO} />
		  <span class="genmed">{L_NO}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_HIDE_USER}:</span></td>
	  	  <td class="row2"><input type="radio" name="hideonline" value="1" {HIDE_USER_YES} />
		  <span class="genmed">{L_YES}</span>   
		  <input type="radio" name="hideonline" value="0" {HIDE_USER_NO} />
		  <span class="genmed">{L_NO}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_NOTIFY_ON_REPLY}:</span><br />
		  <span class="gensmall">{L_NOTIFY_ON_REPLY_EXPLAIN}</span></td>
	  	  <td class="row2"><input type="radio" name="notifyreply" value="1" {NOTIFY_REPLY_YES} />
		  <span class="genmed">{L_YES}</span>   
		  <input type="radio" name="notifyreply" value="0" {NOTIFY_REPLY_NO} />
		  <span class="genmed">{L_NO}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_NOTIFY_ON_PRIVMSG}:</span></td>
	  	  <td class="row2"><input type="radio" name="notifypm" value="1" {NOTIFY_PM_YES} />
		  <span class="genmed">{L_YES}</span>   
		  <input type="radio" name="notifypm" value="0" {NOTIFY_PM_NO} />
		  <span class="genmed">{L_NO}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_POPUP_ON_PRIVMSG}:</span><br /><span class="gensmall">{L_POPUP_ON_PRIVMSG_EXPLAIN}</span></td>
	  	  <td class="row2"><input type="radio" name="popup_pm" value="1" {POPUP_PM_YES} />
		  <span class="genmed">{L_YES}</span>   
		  <input type="radio" name="popup_pm" value="0" {POPUP_PM_NO} />
		  <span class="genmed">{L_NO}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_ALWAYS_ADD_SIGNATURE}:</span></td>
	  	  <td class="row2"><input type="radio" name="attachsig" value="1" {ALWAYS_ADD_SIGNATURE_YES} />
		  <span class="genmed">{L_YES}</span>   
		  <input type="radio" name="attachsig" value="0" {ALWAYS_ADD_SIGNATURE_NO} />
		  <span class="genmed">{L_NO}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_ALWAYS_ALLOW_BBCODE}:</span></td>
	  	  <td class="row2"><input type="radio" name="allowbbcode" value="1" {ALWAYS_ALLOW_BBCODE_YES} />
		  <span class="genmed">{L_YES}</span>   
		  <input type="radio" name="allowbbcode" value="0" {ALWAYS_ALLOW_BBCODE_NO} />
		  <span class="genmed">{L_NO}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_ALWAYS_ALLOW_HTML}:</span></td>
	  	  <td class="row2"><input type="radio" name="allowhtml" value="1" {ALWAYS_ALLOW_HTML_YES} />
		  <span class="genmed">{L_YES}</span>   
		  <input type="radio" name="allowhtml" value="0" {ALWAYS_ALLOW_HTML_NO} />
		  <span class="genmed">{L_NO}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_ALWAYS_ALLOW_SMILIES}:</span></td>
	  	  <td class="row2"><input type="radio" name="allowsmilies" value="1" {ALWAYS_ALLOW_SMILIES_YES} />
		  <span class="genmed">{L_YES}</span>   
		  <input type="radio" name="allowsmilies" value="0" {ALWAYS_ALLOW_SMILIES_NO} />
		  <span class="genmed">{L_NO}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_BOARD_LANGUAGE}:</span></td>
	  	  <td class="row2"><span class="gensmall">{LANGUAGE_SELECT}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_BOARD_STYLE}:</span></td>
	  	  <td class="row2"><span class="gensmall">{STYLE_SELECT}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_TIMEZONE}:</span></td>
	  	  <td class="row2"><span class="gensmall">{TIMEZONE_SELECT}</span></td>
		</tr>
		<tr> 
	  	  <td class="row2"><span class="genmed">{L_DATE_FORMAT}:</span><br />
		  <span class="gensmall">{L_DATE_FORMAT_EXPLAIN}</span></td>
	  	  <td class="row2"><input type="text" name="dateformat" value="{DATE_FORMAT}" maxlength="14" class="liteoption" /></td>
		</tr>
		<!-- BEGIN switch_avatar_block -->
		<tr> 
	  	  <td class="row3" colspan="2" height="2"><img src="themes/DAJ_Glass/forums/images/spacer.gif" border="0" width="1" height="1"></td>
		</tr>
		<tr> 
	  	  <td class="row1" colspan="2" height="20" align="center"><span class="mainmenu">{L_AVATAR_PANEL}</span></td>
		</tr>
		<tr> 
		  <td class="row2" colspan="2">
		  	<table width="70%" cellspacing="1" cellpadding="1" border="0" align="center">
			  <tr> 
				<td width="65%"><span class="gensmall">{L_AVATAR_EXPLAIN}</span></td>
				<td align="center"><span class="gensmall">{L_CURRENT_IMAGE}</span><br />{AVATAR}<br /><input type="checkbox" name="avatardel" /> <span class="gensmall">{L_DELETE_AVATAR}</span></td>
			  </tr>
		  	</table>
	  	  </td>
		</tr>
		<!-- BEGIN switch_avatar_local_upload -->
		<tr> 
		  <td class="row2"><span class="genmed">{L_UPLOAD_AVATAR_FILE}:</span></td>
		  <td class="row2"><input type="hidden" name="MAX_FILE_SIZE" value="{AVATAR_SIZE}" /><input type="file" name="avatar" class="liteoption" style="width:200px" /></td>
		</tr>
		<!-- END switch_avatar_local_upload -->
		<!-- BEGIN switch_avatar_remote_upload -->
		<tr> 
		  <td class="row2"><span class="genmed">{L_UPLOAD_AVATAR_URL}:</span><br /><span class="gensmall">{L_UPLOAD_AVATAR_URL_EXPLAIN}</span></td>
		  <td class="row2"><input type="text" name="avatarurl" size="40" class="liteoption" style="width:200px" /></td>
		</tr>
		<!-- END switch_avatar_remote_upload -->
		<!-- BEGIN switch_avatar_remote_link -->
		<tr> 
		  <td class="row2"><span class="genmed">{L_LINK_REMOTE_AVATAR}:</span><br /><span class="gensmall">{L_LINK_REMOTE_AVATAR_EXPLAIN}</span></td>
		  <td class="row2"><input type="text" name="avatarremoteurl" size="40" class="liteoption" style="width:200px" /></td>
		</tr>
		<!-- END switch_avatar_remote_link -->
		<!-- BEGIN switch_avatar_local_gallery -->
		<tr> 
		  <td class="row2"><span class="genmed">{L_AVATAR_GALLERY}:</span></td>
		  <td class="row2"><input type="submit" name="avatargallery" value="{L_SHOW_GALLERY}" class="liteoption" /></td>
		</tr>
		<!-- END switch_avatar_local_gallery -->
		<!-- END switch_avatar_block -->
		<tr>
		  <td class="row3" colspan="2" align="center" height="28">{S_HIDDEN_FIELDS}<input type="submit" name="submit" value="{L_SUBMIT}" class="mainoption" />  <input type="reset" value="{L_RESET}" name="reset" class="liteoption" /></td>
		</tr>
	  </table>
	</td>
  </tr>
</table>

</form>