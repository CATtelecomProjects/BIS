<div class="forumline nav-div">
	<p class="nav-header">
		<a href="{U_INDEX}">{L_INDEX}</a>
	</p>
	<div class="nav-links">
		<div class="nav-links-left"> 
			{CURRENT_TIME}
		</div> 
		&nbsp;
	</div> 
</div> 
 
<div class="forumline">
	<p class="row-header"><span>{MESSAGE_TITLE}</span></p>
	<div class="row1g gen" style="padding: 20px; text-align: center;">
		<form action="{S_CONFIRM_ACTION}" method="post">
			{MESSAGE_TEXT}<br /><br />
			{S_HIDDEN_FIELDS}<input type="submit" name="confirm" value="{L_YES}" class="mainoption" /> <input type="submit" name="cancel" value="{L_NO}" class="liteoption" />
		</form>
	</div>
</div>
