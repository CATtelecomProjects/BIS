<?php

/***************************************************************************
 *                            lang_main.php [Thai]
 *                              -------------------
 *     begin                : Jan  2003
 *     copyright            : (C) 2002 ThaiNuke
 *     email                : webmaster@thainuke.net
 *
 *     $Id: lang_main.php,v 1.85.2.4 2002/06/23 02:47:56 dougk_ff7 Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// Add your details here if wanted, e.g. Name, username, email address, website
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'tis-620';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = '��дҹ';
$lang['Category'] = '��Ǵ����';
$lang['Topic'] = '��з��';
$lang['Topics'] = '��з��';
$lang['Replies'] = '�ͺ';
$lang['Views'] = '��Ҫ�';
$lang['Post'] = '�ͺ';
$lang['Posts'] = '�ͺ';
$lang['Posted'] = '�ͺ';
$lang['Username'] = '�������¡';
$lang['Password'] = '���ʼ�ҹ';
$lang['Email'] = '������';
$lang['Poster'] = '���ͺ';
$lang['Author'] = '�����';
$lang['Time'] = '����';
$lang['Hours'] = '�������';
$lang['Message'] = '��ͤ���';

$lang['1_Day'] = '1 �ѹ';
$lang['7_Days'] = '7 �ѹ';
$lang['2_Weeks'] = '2 �ѻ����';
$lang['1_Month'] = '1 ��͹';
$lang['3_Months'] = '3 ��͹';
$lang['6_Months'] = '6 ��͹';
$lang['1_Year'] = '1 ��';

$lang['Go'] = '�';
$lang['Jump_to'] = '��ѧ';
$lang['Submit'] = '��';
$lang['Reset'] = '���������';
$lang['Cancel'] = '¡��ԡ';
$lang['Preview'] = '�ٵ�����ҧ';
$lang['Confirm'] = '�׹�ѹ';
$lang['Spellcheck'] = '��Ǩ�ӼԴ';
$lang['Yes'] = '��';
$lang['No'] = '�����';
$lang['Enabled'] = '��ҹ��';
$lang['Disabled'] = '�����ҹ';
$lang['Error'] = '��ͼԴ��Ҵ';

$lang['Next'] = '�Ѵ�';
$lang['Previous'] = '��͹���';
$lang['Goto_page'] = '价��˹��';
$lang['Joined'] = '������������';
$lang['IP_Address'] = 'IP';

$lang['Select_forum'] = '���͡��дҹ';
$lang['View_latest_post'] = '�١�õͺ����ش';
$lang['View_newest_post'] = '�١�õͺ�����ش';
$lang['Page_of'] = '˹�� <b>%d</b> �ҡ������ <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ';
$lang['AIM'] = 'AIM';
$lang['MSNM'] = 'MSN';
$lang['YIM'] = 'Yahoo';

$lang['Forum_Index'] = '%s ˹�ҡ�дҹ������ѡ';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = '��駡�з������';
$lang['Reply_to_topic'] = '�ͺ��з��';
$lang['Reply_with_quote'] = '�ͺ��з���������ͧ���¤Ӿٴ(quote)';

$lang['Click_return_topic'] = '���� %s�����%s ���͡�Ѻ��ѧ��з��'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = '���� %s�����%s �����ͧ�����ա����';
$lang['Click_return_forum'] = '���� %s�����%s ���͡�Ѻ仡�дҹ';
$lang['Click_view_message'] = '���� %s�����%s ���ʹ٢�ͤ����ͧ�س';
$lang['Click_return_modcp'] = '���� %s�����%s ���͡�Ѻ���ǹ��äǺ����ͧ����Ǩ�ҹ(Moderator)';
$lang['Click_return_group'] = '���� %s�����%s ���͡�Ѻ仢����Ţͧ�����';

$lang['Admin_panel'] = '价����ǹ�ͧ��äǺ����к�';

$lang['Board_disable'] = '����㨡�дҹ���ǹ�����ӧҹ ��س������������͡��˹��';


//
// Global Header strings
//
$lang['Registered_users'] = '��Ҫԡ:';
$lang['Browsing_forum'] = '�������ѧ��ҹ:';
$lang['Online_users_zero_total'] = '������ <b>0</b> �� :: ';
$lang['Online_users_total'] = '������ <b>%d</b> �� :: ';
$lang['Online_user_total'] = '������ <b>%d</b> �� :: ';
$lang['Reg_users_zero_total'] = '0 ���������Ҫԡ, ';
$lang['Reg_users_total'] = '%d ���������Ҫԡ, ';
$lang['Reg_user_total'] = '%d ���������Ҫԡ, ';
$lang['Hidden_users_zero_total'] = '0 ���������ʴ���� ';
$lang['Hidden_user_total'] = '%d ���������ʴ���� ';
$lang['Hidden_users_total'] = '%d ���������ʴ���� ';
$lang['Guest_users_zero_total'] = '0 �ؤ�ŷ����';
$lang['Guest_users_total'] = '%d �ؤ�ŷ����';
$lang['Guest_user_total'] = '%d �ؤ�ŷ����';
$lang['Record_online_users'] = '�ӹǹ�ͧ������������ҹ�ҡ����ش <b>%s</b> ������� %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%s���Ǻ����к�%s';
$lang['Mod_online_color'] = '%s����Ǩ�ҹ%s';

$lang['You_last_visit'] = '�س����Ҥ����ش��������� %s'; // %s replaced by date/time
$lang['Current_time'] = '����㹢�й�� %s'; // %s replaced by time

$lang['Search_new'] = '�١�з��������������Ҥ����ش����';
$lang['Search_your_posts'] = '�١�з��ͧ�س';
$lang['Search_unanswered'] = '�١�з�����ѧ����ա�õͺ';

$lang['Register'] = '��Ѥ���Ҫԡ';
$lang['Profile'] = '��������ǹ���';
$lang['Edit_profile'] = '��䢢�������ǹ���';
$lang['Search'] = '����';
$lang['Memberlist'] = '��¹����Ҫԡ';
$lang['FAQ'] = '�Ӷ��������¢ͧ��дҹ����';
$lang['BBCode_guide'] = '������ BBCode';
$lang['Usergroups'] = '����������ҹ';
$lang['Last_Post'] = '�ͺ����ش';
$lang['Moderator'] = '����Ǩ�ҹ';
$lang['Moderators'] = '����Ǩ�ҹ';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = '�ӹǹ��õͺ����������� <b>0</b> �ӵͺ'; // Number of posts
$lang['Posted_articles_total'] = '�ӹǹ��õͺ����������� <b>%d</b> �ӵͺ'; // Number of posts
$lang['Posted_article_total'] = '�ӹǹ��õͺ����������� <b>%d</b> �ӵͺ'; // Number of posts
$lang['Registered_users_zero_total'] = '����� <b>0</b> ��Ҫԡ'; // # registered users
$lang['Registered_users_total'] = '����� <b>%d</b> ��Ҫԡ'; // # registered users
$lang['Registered_user_total'] = '����� <b>%d</b> ��Ҫԡ'; // # registered users
$lang['Newest_user'] = '��Ҫԡ������ش��� <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = '����ա�з����������س����Ҥ����ش����';
$lang['No_new_posts'] = '����ա�з������';
$lang['New_posts'] = '��з������';
$lang['New_post'] = '��з������';
$lang['No_new_posts_hot'] = '����ա�з������ [ �ʹ�Ե ]';
$lang['New_posts_hot'] = '��з������ [ �ʹ�Ե ]';
$lang['No_new_posts_locked'] = '����ա�з������ [ ���١�Դ ]';
$lang['New_posts_locked'] = '��з������ [ ���١�Դ ]';
$lang['Forum_is_locked'] = '��дҹ���١�Դ';


//
// Login
//
$lang['Enter_password'] = '��س�������������ʼ�ҹ�����������к�';
$lang['Login'] = '����к�';
$lang['Logout'] = '�͡�ҡ�к�';

$lang['Forgotten_password'] = '������ʼ�ҹ';

$lang['Log_me_in'] = '����к��ѵ��ѵԷء���駷����ҡ�дҹ����';

$lang['Error_login'] = '�س������ �������ʼ�ҹ���١��ͧ';


//
// Index page
//
$lang['Index'] = '��úѭ';
$lang['No_Posts'] = '�ѧ����ա�з������';
$lang['No_forums'] = '�ѧ����ա�дҹ';

$lang['Private_Message'] = '��������ǹ���';
$lang['Private_Messages'] = '��������ǹ���';
$lang['Who_is_Online'] = '�����ҹ㹢�й��';

$lang['Mark_all_forums'] = '������ͧ���¡�дҹ�����������ҹ';
$lang['Forums_marked_read'] = '��дҹ�����������ҹ�١������ͧ��������';


//
// Viewforum
//
$lang['View_forum'] = '�١�дҹ';

$lang['Forum_not_exist'] = '��дҹ�س������͡�����';
$lang['Reached_on_error'] = '�Դ��ͼԴ��Ҵ���˹�ҹ��';

$lang['Display_topics'] = '�ʴ���з���͹���';
$lang['All_Topics'] = '��з�������';

$lang['Topic_Announcement'] = '<b>��С��:</b>';
$lang['Topic_Sticky'] = '<b>��֧:</b>';
$lang['Topic_Moved'] = '<b>�١����:</b>';
$lang['Topic_Poll'] = '<b>[ Ẻ���Ǩ ]</b>';

$lang['Mark_all_topics'] = '������ͧ���¡�з������������ҹ';
$lang['Topics_marked_read'] = '��з��㹡�дҹ�������ҹ�١������ͧ��������';

$lang['Rules_post_can'] = '�س <b>����ö</b> ��駡�з������㹡�дҹ���';
$lang['Rules_post_cannot'] = '�س <b>�������ö</b> ��駡�з������㹡�дҹ���';
$lang['Rules_reply_can'] = '�س <b>����ö</b> �ͺ��з��㹡�дҹ���';
$lang['Rules_reply_cannot'] = '�س <b>�������ö</b> �ͺ��з��㹡�дҹ���';
$lang['Rules_edit_can'] = '�س <b>����ö</b> ��䢡�õͺ��з��ͧ�س㹡�дҹ���';
$lang['Rules_edit_cannot'] = '�س <b>�������ö</b> ��䢡�õͺ��з��ͧ�س㹡�дҹ���';
$lang['Rules_delete_can'] = '�س <b>����ö</b> ź��õͺ��з��ͧ�س㹡�дҹ���';
$lang['Rules_delete_cannot'] = '�س <b>�������ö</b> ź��õͺ��з��ͧ�س㹡�дҹ���';
$lang['Rules_vote_can'] = '�س <b>����ö</b> ŧ��ṹ�Ẻ���Ǩ㹡�дҹ���';
$lang['Rules_vote_cannot'] = '�س <b>�������ö</b> ŧ��ṹ�Ẻ���Ǩ㹡�дҹ���';
$lang['Rules_moderate'] = '�س <b>����ö</b> %s��Ǩ�ҹ㹡�дҹ���%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = '�ѧ����ա�з��㹡�дҹ���<br />���꡷�� <b>��駡�з������</b> �˹�ҹ�����͵�駡�з��';


//
// Viewtopic
//
$lang['View_topic'] = '�١�з��';

$lang['Guest'] = '�ؤ�ŷ����';
$lang['Post_subject'] = '���͡�з��';
$lang['View_next_topic'] = '�١�з��Ѵ�';
$lang['View_previous_topic'] = '�١�з���͹���';
$lang['Submit_vote'] = 'ŧ��ṹ';
$lang['View_results'] = '�����Ǩ';

$lang['No_newer_topics'] = '����ա�з�����������㹡�дҹ���';
$lang['No_older_topics'] = '����ա�з������ҡ���㹡�дҹ���';
$lang['Topic_post_not_exist'] = '��з�����ͤӵͺ���س��ͧ��������';
$lang['No_posts_topic'] = '����դӵͺ����ͧ�������Ѻ��з����';

$lang['Display_posts'] = '�ʴ���õͺ��͹���';
$lang['All_Posts'] = '��õͺ������';
$lang['Newest_First'] = '�����ҡ�͹';
$lang['Oldest_First'] = '����ҡ�͹';

$lang['Back_to_top'] = '��Ѻ仢�ҧ��';

$lang['Read_profile'] = '�ʴ���������ǹ��Ǣͧ��Ҫԡ'; 
$lang['Send_email'] = '����������ѧ��Ҫԡ';
$lang['Visit_website'] = '��Ҫ����䫵�';
$lang['ICQ_status'] = 'ʶҹ� ICQ';
$lang['Edit_delete_post'] = '���/ź�ӵͺ���';
$lang['View_IP'] = '�ʴ� IP ';
$lang['Delete_post'] = 'ź�ӵͺ���';

$lang['wrote'] = '�ѹ�֡'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = '�Ӿٴ'; // comes before bbcode quote output.
$lang['Code'] = '��'; // comes before bbcode code output.

$lang['Edited_time_total'] = '��䢤����ش������ %s ����� %s, ��䢷����� %d ����'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = '��䢤����ش������ %s ����� %s, ��䢷����� %d ����'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = '�Դ��ҹ��з����';
$lang['Unlock_topic'] = '�Դ��ҹ��з����';
$lang['Move_topic'] = '���¡�з����';
$lang['Delete_topic'] = 'ź��з����';
$lang['Split_topic'] = '�觡�з����';

$lang['Stop_watching_topic'] = '��ش�١�з����';
$lang['Start_watching_topic'] = '�١�з��������Ѻ��õͺ';
$lang['No_longer_watching'] = '�س��ش�١�з��������';
$lang['You_are_watching'] = '�س���ѧ�١�з����';

$lang['Total_votes'] = '��ṹ������';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = '��ǹ�ͧ��ͤ���';
$lang['Topic_review'] = '���ǹ��з��';

$lang['No_post_mode'] = '����ա�����Ẻ�����'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = '��駡�з������';
$lang['Post_a_reply'] = '�ͺ��з��';
$lang['Post_topic_as'] = '�ͺ��з��Ẻ';
$lang['Edit_Post'] = '��䢡�з��';
$lang['Options'] = '��ǹ�������';

$lang['Post_Announcement'] = '��С��';
$lang['Post_Sticky'] = '��֧';
$lang['Post_Normal'] = '����';

$lang['Confirm_delete'] = '�س��㨷���ź�ӵͺ���?';
$lang['Confirm_delete_poll'] = '�س��㨷���źẺ���Ǩ���?';

$lang['Flood_Error'] = '�س�������ö��������ѧ�ҡ����觤�������ش ��س����ѡ�������������';
$lang['Empty_subject'] = '�س��ͧ����������ͧ㹡�õ�駡�з������';
$lang['Empty_message'] = '�س��ͧ����ͤ�����͹�����';
$lang['Forum_locked'] = '��дҹ�����١�Դ�س�������ö��駡�з�� �ͺ��з�� ������䢡�з����';
$lang['Topic_locked'] = '��з����١�Դ�س�������ö��䢤ӵͺ���͵ͺ��з��';
$lang['No_post_id'] = '�س��ͧ���͡�ӵͺ�������';
$lang['No_topic_id'] = '�س��ͧ���͡��з����еͺ';
$lang['No_valid_mode'] = '�س����੾�С�õ�駡�з�� ��䢤ӵͺ���͢�ͤ����Ӿٴ ��سҡ�Ѻ��ͧ�����ա����';
$lang['No_such_post'] = '����դӵͺ ��سҡ�Ѻ��ͧ�����ա����';
$lang['Edit_own_posts'] = '����㨤س�����੾�С�з��ͧ�س��ҹ��';
$lang['Delete_own_posts'] = '����㨤سź��੾�С�з��ͧ�س��ҹ��';
$lang['Cannot_delete_replied'] = '����㨤س�������öź��з�����ա�õͺ';
$lang['Cannot_delete_poll'] = '����㨤س�������öźẺ���Ǩ�����ѧ�ӧҹ��';
$lang['Empty_poll_title'] = '�س��ͧ����������ѺẺ���Ǩ';
$lang['To_few_poll_options'] = '�س��ͧ���ӵͺ���ҧ���� 2 �ӵͺ';
$lang['To_many_poll_options'] = '�س��ͧ���������ӵͺ����ҡ�';
$lang['Post_has_no_poll'] = '��з���������Ẻ���Ǩ';
$lang['Already_voted'] = '�سŧ��ṹ�Ẻ���Ǩ�������';
$lang['No_vote_option'] = '�س��ͧ���͡�ӵͺ������ա��ŧ��ṹ';

$lang['Add_poll'] = '����Ẻ���Ǩ';
$lang['Add_poll_explain'] = '��Ҥس����ͧ�������Ẻ���Ǩ���������ҧ���';
$lang['Poll_question'] = '�Ӷ��';
$lang['Poll_option'] = '�ӵͺ';
$lang['Add_option'] = '�����ӵͺ';
$lang['Update'] = '��Ѻ��ا';
$lang['Delete'] = 'ź';
$lang['Poll_for'] = '��ҹ';
$lang['Days'] = '�ѹ'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ ��� 0 ���ͻ������ҧ����Ѻ�����ҹ��ʹ�վ ]';
$lang['Delete_poll'] = 'źẺ���Ǩ';

$lang['Disable_HTML_post'] = '�����ҹ HTML 㹡�õͺ���';
$lang['Disable_BBCode_post'] = '�����ҹ BBCode 㹡�õͺ���';
$lang['Disable_Smilies_post'] = '�����ҹ�ٻ�������㹡�õͺ���';

$lang['HTML_is_ON'] = 'HTML <u>��ҹ��</u>';
$lang['HTML_is_OFF'] = 'HTML <u>������ҹ</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>��ҹ��</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s  <u>������ҹ</u>';
$lang['Smilies_are_ON'] = '�ٻ������� <u>��ҹ��</u>';
$lang['Smilies_are_OFF'] = '�ٻ������� <u>������ҹ</u>';

$lang['Attach_signature'] = '�Դ����� (���������ö����¹�ŧ��㹢�������ǹ���)';
$lang['Notify'] = '��͹������ա�õͺ㹡�з����';
$lang['Delete_post'] = 'ź�ӵͺ���';

$lang['Stored'] = '��ͤ����ͧ�س�١�����º��������';
$lang['Deleted'] = '��ͤ����ͧ�س�١ź���º��������';
$lang['Poll_delete'] = 'Ẻ���Ǩ�ͧ�س�١ź���º��������';
$lang['Vote_cast'] = '���ŧ��ṹ�ͧ�س�١�ѹ�֡����';

$lang['Topic_reply_notification'] = '�����͹������ա�õͺ��з��';

$lang['bbcode_b_help'] = '���˹�: [b]��ͤ���[/b]  (alt+b)';
$lang['bbcode_i_help'] = '������§: [i]��ͤ���[/i]  (alt+i)';
$lang['bbcode_u_help'] = '�մ�����: [u]��ͤ���[/u]  (alt+u)';
$lang['bbcode_q_help'] = '�Ӿٴ: [quote]��ͤ���[/quote]  (alt+q)';
$lang['bbcode_c_help'] = '�ʴ���: [code]��[/code]  (alt+c)';
$lang['bbcode_l_help'] = '��¡��: [list]��ͤ���[/list] (alt+l)';
$lang['bbcode_o_help'] = '�ӴѺ��¡��: [list=]��ͤ���[/list]  (alt+o)';
$lang['bbcode_p_help'] = '�����ٻ: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = '���� URL: [url]http://url[/url] ���� [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = '�Դ bbCode ����Դ���';
$lang['bbcode_s_help'] = '��: [color=red]��ͤ���[/color]  �Ի: �س����ö�� color=#FF0000';
$lang['bbcode_f_help'] = '��Ҵ: [size=x-small]��ͤ���[/size]';

$lang['Emoticons'] = '�ͤ͹�ʴ�������';
$lang['More_emoticons'] = '���ͤ͹�ʴ�����������';

$lang['Font_color'] = '�յ���ѡ��';
$lang['color_default'] = '����';
$lang['color_dark_red'] = 'ᴧ���';
$lang['color_red'] = 'ᴧ';
$lang['color_orange'] = '���';
$lang['color_brown'] = '��ӵ��';
$lang['color_yellow'] = '����ͧ';
$lang['color_green'] = '����';
$lang['color_olive'] = '�С͡';
$lang['color_cyan'] = '���';
$lang['color_blue'] = '����Թ';
$lang['color_dark_blue'] = '����Թ���';
$lang['color_indigo'] = '����';
$lang['color_violet'] = '��ǧ';
$lang['color_white'] = '���';
$lang['color_black'] = '��';

$lang['Font_size'] = '��Ҵ����ѡ��';
$lang['font_tiny'] = '����';
$lang['font_small'] = '���';
$lang['font_normal'] = '����';
$lang['font_large'] = '�˭�';
$lang['font_huge'] = '�ѡ��';

$lang['Close_Tags'] = '�Դ�����';
$lang['Styles_tip'] = '�Ի: �ٻẺ����ö��ҹ�����ҧ�Ǵ���� ���¡�����͡��ͤ���';


//
// Private Messaging
//
$lang['Private_Messaging'] = '���������ǹ���';

$lang['Login_check_pm'] = '����к����͵�Ǩ���������ǹ��Ǣͧ�س';
$lang['New_pms'] = '�س���Ѻ %d �����������'; // You have 2 new messages
$lang['New_pm'] = '�س���Ѻ %d �����������'; // You have 1 new message
$lang['No_new_pm'] = '�س����բ����������';
$lang['Unread_pms'] = '�س�� %d ������÷���ѧ�������ҹ';
$lang['Unread_pm'] = '�س�� %d ������÷���ѧ�������ҹ';
$lang['No_unread_pm'] = '�س����բ�����÷���ѧ�������ҹ';
$lang['You_new_pm'] = '�բ�����������ͤس����㹵�騴����';
$lang['You_new_pms'] = '�բ�����������ͤس����㹵�騴����';
$lang['You_no_new_pm'] = '����բ��������������Ѻ�س';

$lang['Unread_message'] = '������÷���ѧ�������ҹ';
$lang['Read_message'] = '������÷����ҹ����';

$lang['Read_pm'] = '��ҹ�������';
$lang['Post_new_pm'] = '�觢������';
$lang['Post_reply_pm'] = '�ͺ�������';
$lang['Post_quote_pm'] = '������äӾٴ';
$lang['Edit_pm'] = '��䢢������';

$lang['Inbox'] = '����Ѻ';
$lang['Outbox'] = '����͡';
$lang['Savebox'] = '���ѹ�֡';
$lang['Sentbox'] = '�����';
$lang['Flag'] = '���͡';
$lang['Subject'] = '���͡�з��';
$lang['From'] = '�ҡ';
$lang['To'] = '�֧';
$lang['Date'] = '�ѹ';
$lang['Mark'] = '����ͧ����';
$lang['Sent'] = '�١��';
$lang['Saved'] = '�١�ѹ�֡';
$lang['Delete_marked'] = 'ź����ͧ����';
$lang['Delete_all'] = 'ź������';
$lang['Save_marked'] = '�ѹ�֡����ͧ����'; 
$lang['Save_message'] = '�ѹ�֡�������';
$lang['Delete_message'] = 'ź�������';

$lang['Display_messages'] = '�ʴ�������á�͹˹�ҹ��'; // Followed by number of days/weeks/months
$lang['All_Messages'] = '������÷�����';

$lang['No_messages_folder'] = '�س����բ���������������';

$lang['PM_disabled'] = '���������ǹ��Ƕ١�ЧѺ�����ҹ����Ѻ��дҹ���ǹ��';
$lang['Cannot_send_privmsg'] = '����� ����Ǻ����к�������س�觢��������ǹ���';
$lang['No_to_user'] = '�س��ͧ��Ѥ���Ҫԡ��͹ �֧����ö�觢�����ù����';
$lang['No_such_user'] = '��������������Ҫԡ�ѧ�����';

$lang['Disable_HTML_pm'] = '����ʴ� HTML 㹢�ͤ������';
$lang['Disable_BBCode_pm'] = '����ʴ� BBCode 㹢�ͤ������';
$lang['Disable_Smilies_pm'] = '����ʴ� �ٻ������� 㹢�ͤ������';

$lang['Message_sent'] = '������âͧ�س�١�Ѵ������';

$lang['Click_return_inbox'] = '���� %s�����%s ���͡�Ѻ价���騴���¢ͧ�س';
$lang['Click_return_index'] = '���� %s�����%s ���͡�Ѻ价��˹���á';

$lang['Send_a_new_message'] = '�觢��������ǹ�������';
$lang['Send_a_reply'] = '�ͺ���������ǹ���';
$lang['Edit_message'] = '��䢢��������ǹ���';

$lang['Notification_subject'] = '���Ѻ���������ǹ�������';

$lang['Find_username'] = '���Ҫ�����Ҫԡ';
$lang['Find'] = '����';
$lang['No_match'] = '��辺�����ŷ���ͧ���';

$lang['No_post_id'] = '��辺 ID �ͧ��з�����ͧ���';
$lang['No_such_folder'] = '��辺������ѧ�����';
$lang['No_folder'] = '��������������ͧ���';

$lang['Mark_all'] = '������ͧ���·�����';
$lang['Unmark_all'] = '¡��ԡ����ͧ���·�����';

$lang['Confirm_delete_pm'] = '�س�����ҵ�ͧ��÷���ź������ù��?';
$lang['Confirm_delete_pms'] = '�س�����ҵ�ͧ��÷���ź������ù��?';

$lang['Inbox_size'] = '����Ѻ�����¶١��ҹ� %d%% '; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = '����觨����¶١��ҹ�  %d%% '; 
$lang['Savebox_size'] = '���ѹ�֡�����¶١��ҹ� %d%% '; 

$lang['Click_view_privmsg'] = '���� %s�����%s ������ҵ�騴���¢ͧ�س';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = '�ʴ������Ţͧ :: %s'; // %s is username 
$lang['About_user'] = '�ء���ҧ����ǡѺ %s'; // %s is username

$lang['Preferences'] = '��ҵԴ���';
$lang['Items_required'] = '��ͧ���������ͧ���� * �繢����ŷ����繵�ͧ���';
$lang['Registration_info'] = '��������Ҫԡ';
$lang['Profile_info'] = '��������ǹ���';
$lang['Profile_info_warn'] = '�����Ţ�ҧ��ҧ�����ʴ�����Ҹ�ó��';
$lang['Avatar_panel'] = '��ǹ�Ѵ����ѭ��ѡɳ�';
$lang['Avatar_gallery'] = '�ٻ�Ҿ�ѭ��ѡɳ�';

$lang['Website'] = '���䫵�';
$lang['Location'] = '�������';
$lang['Contact'] = '�Դ���';
$lang['Email_address'] = '������';
$lang['Email'] = '������';
$lang['Send_private_message'] = '�觢��������ǹ���';
$lang['Hidden_email'] = '[ ��͹ ]';
$lang['Search_user_posts'] = '���ҷ��ͺ����Ҫԡ��ҹ���';
$lang['Interests'] = '����ʹ�';
$lang['Occupation'] = '�Ҫվ'; 
$lang['Poster_rank'] = '�дѺ�ͧ�����';

$lang['Total_posts'] = '�ͺ������';
$lang['User_post_pct_stats'] = '%.2f%% �ҡ������'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f �ӵͺ����ѹ'; // 1.5 posts per day
$lang['Search_user_posts'] = '���ҷ��ͺ�� %s'; // Find all posts by username

$lang['No_user_id_specified'] = '���������Ҫԡ��ҹ��������';
$lang['Wrong_Profile'] = '�س�������ö��䢢�������ǹ��Ƿ�������ͧ�س';

$lang['Only_one_avatar'] = '�س����ö���͡�ٻ�Ҿ�ѭ��ѡɳ�����§���ҧ������ҹ��';
$lang['File_no_data'] = '����� URL ���س���͡����բ�����';
$lang['No_connection_URL'] = '�������ö�Դ��͡Ѻ URL ���س���͡��';
$lang['Incomplete_URL'] = ' URL ���س����������ó�';
$lang['Wrong_remote_avatar_format'] = ' URL �ͧ�ٻ�Ҿ�ѭ��ѡɳ����١��ͧ';
$lang['No_send_account_inactive'] = '����������ʼ�ҹ�ͧ�س�������ö���� ���С������Ҫԡ�ͧ�س�١�ЧѺ ��سҵԴ��ͼ����š�дҹ��������Ѻ�������������';

$lang['Always_smile'] = '�ʴ� �ٻ�������';
$lang['Always_html'] = '��ҹ HTML ��';
$lang['Always_bbcode'] = '��ҹ BBCode ��';
$lang['Always_add_sig'] = '�ʴ������';
$lang['Always_notify'] = '��͹������ա�õͺ��з��';
$lang['Always_notify_explain'] = '����������������õͺ㹡�з����س��駢�� �¨�����¹�ŧ�ء���駷���õͺ';

$lang['Board_style'] = '�ٻẺ';
$lang['Board_lang'] = '���ҷ����ҹ';
$lang['No_themes'] = '����ո��㹰ҹ������';
$lang['Timezone'] = '���ҷ���ʴ�';
$lang['Date_format'] = '�ٻẺ�ѹ���';
$lang['Date_format_explain'] = '�ٻẺ�ͧ���� PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> �ѧ��ѹ';
$lang['Signature'] = '�����';
$lang['Signature_explain'] = '��ͧ�������Ѻ����ͤ������س��ͧ��� �բ�Ҵ����Թ %d ����ѡ��';
$lang['Public_view_email'] = '�ʴ�������';

$lang['Current_password'] = '���ʼ�ҹ�Ѩ�غѹ';
$lang['New_password'] = '���ʼ�ҹ����';
$lang['Confirm_password'] = '�׹�ѹ���ʼ�ҹ';
$lang['Confirm_password_explain'] = '�س��ͧ������ʼ�ҹ�Ѩ�غѹ㹡óշ��س��ͧ��è�����¹ ���͢������ҹ������ͧ�س';
$lang['password_if_changed'] = '������ʼ�ҹ������س��ͧ��è�����¹';
$lang['password_confirm_if_changed'] = '�س��ͧ�׹�ѹ���ʼ�ҹ��Ҥس��ͧ�������¹���ʼ�ҹ';

$lang['Avatar'] = '�ѭ��ѡɳ�';
$lang['Avatar_explain'] = '�ʴ��ٻ�Ҿ��Ҵ��硢�ҧ��������´�ͧ�س㹡�õ�� ���͵ͺ��з�� �¨��ʴ���§�ٻ��������Ф��� �������ҧ�ͧ�ٻ����Թ %d pixels ����٧����Թ %d pixels ��Т�Ҵ�ͧ�������ҡ���� %dkB.'; 
$lang['Upload_Avatar_file'] = '�Ѻ��Ŵ�ٻ�Ҿ�ѭ��ѡɳ�ҡ����ͧ�ͧ�س';
$lang['Upload_Avatar_URL'] = '�Ѻ��Ŵ�ٻ�Ҿ�ѭ��ѡɳ�ҡ URL';
$lang['Upload_Avatar_URL_explain'] = '��� URL ��������ٻ�Ҿ�ѭ��ѡɳ� �¨���������������䫵���';
$lang['Pick_local_Avatar'] = '���͡�ѭ��ѡɳ�ҡ�ٻ�Ҿ';
$lang['Link_remote_Avatar'] = '�����价���ٻ�Ҿ�ѭ��ѡɳ���¹͡���䫵�';
$lang['Link_remote_Avatar_explain'] = '��� URL ��������ٻ�Ҿ�ѭ��ѡɳ���س��ͧ���������';
$lang['Avatar_URL'] = 'URL �ͧ�ٻ�Ҿ�ѭ��ѡɳ� ';
$lang['Select_from_gallery'] = '���͡�ٻ�Ҿ�ͧ�ѭ��ѡɳ�';
$lang['View_avatar_gallery'] = '�ʴ��ٻ�Ҿ';

$lang['Select_avatar'] = '���͡�ѭ��ѡɳ�';
$lang['Return_profile'] = '¡��ԡ�ѭ��ѡɳ�';
$lang['Select_category'] = '���͡��Ǵ����';

$lang['Delete_Image'] = 'ź�ٻ';
$lang['Current_Image'] = '�ٻ�Ѩ�غѹ';

$lang['Notify_on_privmsg'] = '��͹������բ��������ǹ�������';
$lang['Popup_on_privmsg'] = 'Pop up ˹�ҵ�ҧ������բ��������ǹ�������'; 
$lang['Popup_on_privmsg_explain'] = '�Դ˹�ҵ�ҧ����������͹�س������բ��������ǹ������������'; 
$lang['Hide_user'] = '����ʴ�ʶҹС����ҹ�ͧ�س';

$lang['Profile_updated'] = '��������ǹ��Ǣͧ�س�١�ѹ�֡����';
$lang['Profile_updated_inactive'] = '��������ǹ��Ǣͧ�س�١�ѹ�֡���� �����ҧ�á�ա������Ҫԡ�ͧ�س�١�ЧѺ���� ��Ǩ�ͺ������ͧ�س�����ҷҧ�Դ��ҹ��Ҫԡ�ͧ�س ���͵Դ��ͼ����š�дҹ�����Դ��ҹ��Ҫԡ';

$lang['Password_mismatch'] = '���ʼ�ҹ���������١��ͧ';
$lang['Current_password_mismatch'] = '���ʼ�ҹ�Ѩ�غѹ���ç�Ѻ���ѹ�֡���㹰ҹ������';
$lang['Password_long'] = '�س��ͧ������ʼ�ҹ����ҡ���� 32 ����ѡ��';
$lang['Too_many_registers'] = '�ѹ���س��������Ѥ����¤������� ��س��ͧ���������ѧ';
$lang['Username_taken'] = '����� ��������¡����ռ��������';
$lang['Username_invalid'] = '����� ��������¡����յ���ѡ�÷�����١��ͧ �� \'';
$lang['Username_disallowed'] = '����� ��������¡������͹حҵ�����ҹ';
$lang['Email_taken'] = '����� �����������ռ����ҹ����';
$lang['Email_banned'] = '����� ����������١�ЧѺ�����ҹ';
$lang['Email_invalid'] = '����� �������������١��ͧ';
$lang['Signature_too_long'] = '����繢ͧ�س����Թ�';
$lang['Fields_empty'] = '�س��ͧ��������㹢����ŷ�����(���������ͧ���� *)';
$lang['Avatar_filetype'] = '��Դ�ͧ����ѭ��ѡɳ��ͧ�� .jpg, .gif ���� .png';
$lang['Avatar_filesize'] = '�ٻ�Ҿ�ͧ����ѭ��ѡɳ��ͧ�բ�Ҵ����˭���� %d kB'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = '�ٻ�Ҿ�ͧ����ѭ��ѡɳ��ͧ�դ������ҧ����Թ %d pixels ��Ф����٧����Թ %d pixels '; 

$lang['Welcome_subject'] = '�Թ�յ�͹�Ѻ����дҹ���� %s '; // Welcome to my.com forums
$lang['New_account_subject'] = '��Ҫԡ����';
$lang['Account_activated_subject'] = '��Ҫԡ�Ҿ�ӧҹ';

$lang['Account_added'] = '�ͺ�س����Ѻ�����Ѥ���Ҫԡ �س����Ҫԡ������ó����� ��Фس����ö�������к����ª������¡������ʼ�ҹ�ͧ�س';
$lang['Account_inactive'] = '�س����Ҫԡ������ó����� ���дҹ���ǹ���ͧ��á���׹�ѹ�������Ҫԡ�ѧ��� �س��ͧ�����Դ������ͧ�س�����Ѻ activation key ��سҵ�Ǩ�ͺ������ͧ�س����Ѻ�����ŵ���';
$lang['Account_inactive_admin'] = '�س����Ҫԡ������ó����� ���дҹ���ǹ���ͧ��á���׹�ѹ�������Ҫԡ�¼��Ǻ����к� ������ж١����ѧ���Ǻ����к� ��Фس�����Ѻ����� �������Ҫԡ�Ҿ�ͧ�س�ӧҹ';
$lang['Account_active'] = '��Ҫԡ�Ҿ�ͧ�س�ӧҹ �ͺ�س����Ѻ�����Ѥ���Ҫԡ';
$lang['Account_active_admin'] = '��Ҫԡ�Ҿ�ӧҹ����';
$lang['Reactivate'] = '��˹������Ҫԡ�Ҿ�ӧҹ�ա����!';
$lang['Already_activated'] = '�س��˹������Ҫԡ�Ҿ�ӧҹ����';
$lang['COPPA'] = '�س����Ҫԡ������ó����� ���ͧ�͡�õ�Ǩ�ͺ ��س���ҹ����������Ѻ��������´';

$lang['Registration'] = '��͵�ŧ㹡����Ѥ�����Ҫԡ';
$lang['Reg_agreement'] = '�س����Ѻ��Ҽ��Ǻ����к� ��м���Ǩ�ҹ�ͧ��дҹ���ǹ�� ���Է�����ҹ ź ������䢷ء��ͤ��� ��м��Ǻ����к� ����Ǩ�ҹ�������������� �������ö�Ѻ�Դ�ͺ��͢�ͤ������س���ʴ������Դ��� (¡�����Ҿǡ�Ҩ��繼���ʵ��ͧ)<br /><br />�س��ŧ��Ҩ�����ʵ��ͤ��������Һ���, ����, ����ʴ�������þ, ���蹻���ҷ, �繷���ѧ��¨, �����, ����㹷ҧ�� ����������Ѵ��͡�����. ��á�з��蹹���Ҩ�����س�١�ǧ�����ѹ�� ������ҧ���� (��м������ԡ�âͧ�س������Ѻ�������͹����) �����Ţ IP �ͧ�ء�ʵ�ж١�ѹ�֡����������ѡ�ҹ. �س�Թ������ ����������, ���Ǻ����к� ��� ����Ǩ�ҹ�ͧ��дҹ���ǹ�����Է���ź, ���, ���� ���ͻԴ��Ǣ�������ʹ���ҷ������� �س�Թ����������ŷء���ҧ�ͧ�س�١�����㹰ҹ������. ��觢���������ҹ������١�Դ�µ�ͼ�������������Ѻ����Թ����ҡ�س ����������, ���Ǻ����к� ��� ����Ǩ�ҹ�������ö�Ѻ�Դ�ͺ��͡�ö١��Т����� ���ǹ�����ҧ������ʹ��͹��ҧ�<br /><br />��дҹ���ǹ�����к���ꡡ�� �����红��������㹤���������ͧ�س ��ꡡ�� ����ҹ�������բ����ŷ��س���͡�������͹��ҹ��; �����ͪ������س��ҹ����¢�� ������ж١�������׹�ѹ�����š����Ѥ���Ҫԡ������ʼ�ҹ�ͧ�س��ҹ�� (���������Ѻ�� ���ʼ�ҹ�ѹ��������ͤس������ʼ�ҹ���)<br /><br />��Ҥس������Ѥ���Ҫԡ����ҹ��ҧ��� �����Ҥس������Ѻ�ء���͹䢷������������';

$lang['Agree_under_13'] = '����ŧ�����͵�ŧ��м����� <b>���¡���</b> 13  ��';
$lang['Agree_over_13'] = '����ŧ�����͵�ŧ��м����� <b>�ҡ����</b> ���� <b>��ҡѺ</b> 13  ��';
$lang['Agree_not'] = '����赡ŧ�����͵�ŧ';

$lang['Wrong_activation'] = '�����׹�ѹ�ͧ�س���ç�Ѻ�����ŷ����㹰ҹ������';
$lang['Send_password'] = '�����ʼ�ҹ����'; 
$lang['Password_updated'] = '���ʼ�ҹ����١���ҧ��� ��سҵ�Ǩ�ͺ������ͧ�س����Ѻ��������´�Ըա�á�˹������Ҫԡ�Ҿ�ӧҹ';
$lang['No_email_match'] = '��������������ç�Ѻ�����Ţͧ��Ҫԡ���͹��';
$lang['New_password_activation'] = '���ʼ�ҹ����ӧҹ';
$lang['Password_activated'] = 'ʶҹ�Ҿ�ͧ�س�ӧҹ�ա���� ����������к���س������ʼ�ҹ������������ҧ������';

$lang['Send_email_msg'] = '��������������';
$lang['No_user_specified'] = '�������Ҫԡ��ҹ���';
$lang['User_prevent_email'] = '��Ҫԡ����ͧ����Ѻ������ ��س��觷ҧ���������ǹ���';
$lang['User_not_exist'] = '�������Ҫԡ��ҹ���';
$lang['CC_email'] = '�����Ңͧ��������价��س�ͧ';
$lang['Email_message_desc'] = '��ͤ������ж١����ٻẺ�ͧ�硫������ ��س�������� HTML ���� BBCode ������ͺ��Ѻ��˹���������ѧ������ͧ�س';
$lang['Flood_email_limit'] = '�س�������ö��������������㹢�й�� ��س��ͧ�����ա���������ѧ';
$lang['Recipient'] = '����Ѻ';
$lang['Email_sent'] = '������١�������';
$lang['Send_email'] = '��������';
$lang['Empty_subject_email'] = '�س��ͧ�����ͧ͢���������';
$lang['Empty_message_email'] = '�س��ͧ����ͤ����������������';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = '���׹�ѹ���س������١��ͧ';
$lang['Too_many_registers'] = '�ѹ���س��������Ѥ����¤������� ��س��ͧ�����ѹ��ѧ';
$lang['Confirm_code_impaired'] = '��Ҥس�������ö��ҹ�鴷���ʴ��� ��س���价�� %sAdministrator%s ���µç���ͤ͢������������';
$lang['Confirm_code'] = '�����׹�ѹ';
$lang['Confirm_code_explain'] = '��������ç�Ѻ���ʷ��س��� �µ����� ����˭������ᵡ��ҧ�ѹ';



//
// Memberslist
//
$lang['Select_sort_method'] = '���͡�Ըա�����§�ӴѺ';
$lang['Sort'] = '���§�ӴѺ';
$lang['Sort_Top_Ten'] = '10 �ѹ�Ѻ�����';
$lang['Sort_Joined'] = '�ѹ����������';
$lang['Sort_Username'] = '�������¡';
$lang['Sort_Location'] = '�������';
$lang['Sort_Posts'] = '�觷�����';
$lang['Sort_Email'] = '������';
$lang['Sort_Website'] = '���䫵�';
$lang['Sort_Ascending'] = '������ҡ';
$lang['Sort_Descending'] = '�ҡ仹���';
$lang['Order'] = '�ӴѺ';


//
// Group control panel
//
$lang['Group_Control_Panel'] = '�Ѵ��á����';
$lang['Group_member_details'] = '��������´��Ҫԡ�ͧ�����';
$lang['Group_member_join'] = '������������';

$lang['Group_Information'] = '�����š����';
$lang['Group_name'] = '���͡����';
$lang['Group_description'] = '��������´�ͧ�����';
$lang['Group_membership'] = '��Ҫԡ�Ҿ�ͧ�����';
$lang['Group_Members'] = '��Ҫԡ�ͧ�����';
$lang['Group_Moderator'] = '����Ǩ�ҹ�����';
$lang['Pending_members'] = '��Ҫԡ�����ѧ�Ԩ�ó�';

$lang['Group_type'] = '�������ͧ�����';
$lang['Group_open'] = '�Դ�����';
$lang['Group_closed'] = '�Դ�����';
$lang['Group_hidden'] = '��͹�����';

$lang['Current_memberships'] = '��Ҫԡ�Ҿ㹻Ѩ�غѹ';
$lang['Non_member_groups'] = '���������������Ҫԡ';
$lang['Memberships_pending'] = '��Ҫԡ�Ҿ�����ѧ�Ԩ�ó�';

$lang['No_groups_exist'] = '�ѧ����ա����';
$lang['Group_not_exist'] = '��Ҫԡ��ҹ��������';

$lang['Join_group'] = '������������';
$lang['No_group_members'] = '���������������Ҫԡ';
$lang['Group_hidden_members'] = '��������١��͹ �س�������ö�����ª�����Ҫԡ';
$lang['No_pending_group_members'] = '���������������Ҫԡ����͡�þԨ�ó�';
$lang['Group_joined'] = '�س�͡�Ѻ����Ҫԡ�ͧ��������º��������<br />�س�����Ѻ���������͡�ú͡�Ѻ����Ҫԡ�ͧ�س���Ѻ�������Ѻ�ҡ����Ǩ�ҹ�����';
$lang['Group_request'] = '��¹����ͧ���������������ͧ�س����';
$lang['Group_approved'] = '����ͧ�ͧ�س���Ѻ�������Ѻ����';
$lang['Group_added'] = '�س�������������Ҫԡ�ͧ������������'; 
$lang['Already_member_group'] = '�س����Ҫԡ�ͧ����������������';
$lang['User_is_member_group'] = '��Ҫԡ��ҹ�������Ҫԡ�ͧ����������������';
$lang['Group_type_updated'] = '��Ѻ��ا�������ͧ��������º��������';

$lang['Could_not_add_user'] = '��Ҫԡ���س���͡�����';
$lang['Could_not_anon_user'] = '�س�������ö���ؤ�ŷ������Ѥ�����Ҫԡ�ͧ�������';

$lang['Confirm_unsub'] = '�س��㨷���¡��ԡ��ú͡�Ѻ����Ҫԡ�ͧ��������?';
$lang['Confirm_unsub_pending'] = '��ú͡�Ѻ����Ҫԡ�ͧ�س���ѧ����������ҧ��þԨ�ó� �س��㨷���¡��ԡ��ú͡�Ѻ����Ҫԡ?';

$lang['Unsub_success'] = '�س¡��ԡ��ú͡�Ѻ����Ҫԡ�ͧ�����������º��������';

$lang['Approve_selected'] = '���͡����Ѻ';
$lang['Deny_selected'] = '���͡�������Ѻ';
$lang['Not_logged_in'] = '�س��ͧ����к�����������������';
$lang['Remove_selected'] = '���͡ź';
$lang['Add_member'] = '������Ҫԡ';
$lang['Not_group_moderator'] = '�س��������Ǩ�ҹ�ͧ�������� ����������ö��觡�����ӧҹ��';

$lang['Login_to_join'] = '����к��������������������ͨѴ�����Ҫԡ�ͧ�����';
$lang['This_open_group'] = '����͡���Դ����� �������͢�����Ҫԡ';
$lang['This_closed_group'] = '����͡�ûԴ����� �������Ҫԡ��ҹ�����Ѻ';
$lang['This_hidden_group'] = '����͡�ë�͹����� ���͹حҵ���������Ҫԡ����Ẻ�ѵ��ѵ�';
$lang['Member_this_group'] = '�س�����Ҫԡ�ͧ��������';
$lang['Pending_this_group'] = '�س�����Ҫԡ������������ҧ��þԨ�óҢͧ��������';
$lang['Are_group_moderator'] = '�س��ͼ���Ǩ�ҹ�ͧ��������';
$lang['None'] = '�����';

$lang['Subscribe'] = '�͡�Ѻ����Ҫԡ';
$lang['Unsubscribe'] = '¡��ԡ��ú͡�Ѻ����Ҫԡ';
$lang['View_Information'] = '�ʴ���������´';


//
// Search
//
$lang['Search_query'] = '�Ӷ�����Ф���';
$lang['Search_options'] = '�����������';

$lang['Search_keywords'] = '���Ҩҡ��੾��';
$lang['Search_keywords_explain'] = '�س����ö�� <u>AND</u> ���͡�˹��ӷ���ͧ����㹼��Ѿ�� <u>OR</u> ���͡�˹��ӷ���Ҩ������㹼��Ѿ����� <u>NOT</u> ���͡�˹��ӷ�����������㹼��Ѿ��  �� * ����Ѻ��ǹ�ͧ��ä��� �� nuke* ';
$lang['Search_author'] = '���Ҽ���駡�з��';
$lang['Search_author_explain'] = '�� * ����Ѻ��ǹ�ͧ��ä���';

$lang['Search_for_any'] = '���Ҩҡ��ǹ���������Ӷ������ͧ���';
$lang['Search_for_all'] = '���Ҩҡ������';
$lang['Search_title_msg'] = '���ҷ�駡�з����Т�ͤ���';
$lang['Search_msg_only'] = '����੾�Т�ͤ�����ҹ��';

$lang['Return_first'] = '��Ѻ������'; // followed by xxx characters in a select box
$lang['characters_posts'] = '����ѡ�âͧ��з��';

$lang['Search_previous'] = '���ҵ���'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = '���§���';
$lang['Sort_Time'] = '���������';
$lang['Sort_Post_Subject'] = '���͡�з��';
$lang['Sort_Topic_Title'] = '���ͧ͢��з��';
$lang['Sort_Author'] = '����駡�з��';
$lang['Sort_Forum'] = '��дҹ����';

$lang['Display_results'] = '�ʴ����Ѿ��';
$lang['All_available'] = '�����������';
$lang['No_searchable_forums'] = '�س������Է��㹡�ä��ҡ�дҹ�溹���䫵���';

$lang['No_search_match'] = '����ա�з�����͢�ͤ������ç�ѹ�Ѻ���͹䢷���ͧ��ä���';
$lang['Found_search_match'] = '���Ҿ� %d ���ç�ѹ'; // eg. Search found 1 match
$lang['Found_search_matches'] = '���Ҿ� %d ���ç�ѹ'; // eg. Search found 24 matches

$lang['Close_window'] = '�Դ˹�ҵ�ҧ';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = '������� %s ��ҹ�鹷������ö�觻�С��㹡�дҹ���';
$lang['Sorry_auth_sticky'] = '������� %s ��ҹ�鹷������ö��֧��з��㹡�дҹ���'; 
$lang['Sorry_auth_read'] = '������� %s ��ҹ�鹷������ö��ҹ��з��㹡�дҹ���'; 
$lang['Sorry_auth_post'] = '������� %s ��ҹ�鹷������ö��駡�з������㹡�дҹ���'; 
$lang['Sorry_auth_reply'] = '������� %s ��ҹ�鹷������ö�ͺ��з��㹡�дҹ���'; 
$lang['Sorry_auth_edit'] = '������� %s ��ҹ�鹷������ö��䢡�з��㹡�дҹ���'; 
$lang['Sorry_auth_delete'] = '������� %s ��ҹ�鹷������öź��з��㹡�дҹ���'; 
$lang['Sorry_auth_vote'] = '������� %s ��ҹ�鹷������öŧ��ṹ�Ẻ���Ǩ㹡�дҹ���'; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>�ؤ�ŷ����</b>';
$lang['Auth_Registered_Users'] = '<b>��Ҫԡ</b>';
$lang['Auth_Users_granted_access'] = '<b>��Ҫԡ������Ѻ�Է�Ծ����</b>';
$lang['Auth_Moderators'] = '<b>����Ǩ�ҹ</b>';
$lang['Auth_Administrators'] = '<b>���Ǻ����к�</b>';

$lang['Not_Moderator'] = '�س��������Ǩ�ҹ����Ѻ��дҹ���';
$lang['Not_Authorised'] = '������Է����ҹ';

$lang['You_been_banned'] = '�س�١¡��ԡ�����ҹ㹡�дҹ���<br />��سҵԴ����������������ͼ��Ǻ����к� ����Ѻ�����ŷ������Ǣ�ͧ';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = '�� 0 ��Ҫԡ��� '; // There ae 5 Registered and
$lang['Reg_users_online'] = '�� %d ��Ҫԡ��� '; // There ae 5 Registered and
$lang['Reg_user_online'] = '�� %d ��Ҫԡ��� '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 ��������ʧ���͡�����ҹ'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d ��������ʧ���͡�����ҹ'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d ��������ʧ���͡�����ҹ'; // 6 Hidden users online
$lang['Guest_users_online'] = '�� %d �ؤ�ŷ������ҹ'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = '�� 0 �ؤ�ŷ������ҹ'; // There are 10 Guest users online
$lang['Guest_user_online'] = '�� %d �ؤ�ŷ������ҹ'; // There is 1 Guest user online
$lang['No_users_browsing'] = '���������ҹ��дҹ����㹢�й��';

$lang['Online_explain'] = '�����Ź����ʴ�੾�м������ҹ�ҡ���� 5 �ҷ�';

$lang['Forum_Location'] = '�������ͧ��дҹ';
$lang['Last_updated'] = '����¹�ŧ�����ش����';

$lang['Forum_index'] = '˹�ҡ�дҹ������ѡ';
$lang['Logging_on'] = '����к������';
$lang['Posting_message'] = '���ѧ�觢�ͤ���';
$lang['Searching_forums'] = '���ѧ���ҡ�дҹ';
$lang['Viewing_profile'] = '���ѧ�٢�����';
$lang['Viewing_online'] = '���ѧ�ټ����ҹ㹢�й��';
$lang['Viewing_member_list'] = '���ѧ����¹����Ҫԡ';
$lang['Viewing_priv_msgs'] = '���ѧ�٢��������ǹ���';
$lang['Viewing_FAQ'] = '���ѧ�� FAQ';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = '��ǹ�ͧ����Ǩ�ҹ';
$lang['Mod_CP_explain'] = '��Ẻ�������ҧ��ҧ���ͨѴ�����ǹ�ҹ�ͧ����Ǩ�ҹ������㹡�дҹ���ǹ�� �س����ö�Դ �Դ��дҹ ���� ź ��з�������';

$lang['Select'] = '���͡';
$lang['Delete'] = 'ź';
$lang['Move'] = '����';
$lang['Lock'] = '�Դ';
$lang['Unlock'] = '�Դ';

$lang['Topics_Removed'] = '��з�������͡�ж١ź�͡�ҡ�ҹ���������ҧ����';
$lang['Topics_Locked'] = '��з�������͡�ж١�Դ';
$lang['Topics_Moved'] = '��з�������͡�ж١����';
$lang['Topics_Unlocked'] = '��з�������͡�ж١�Դ';
$lang['No_Topics_Moved'] = '����ա�з����١����';

$lang['Confirm_delete_topic'] = '�س��㨷���ź��з�������͡/s?';
$lang['Confirm_lock_topic'] = '�س��㨷��лԴ��з�������͡/s?';
$lang['Confirm_unlock_topic'] = '�س��㨷����Դ��з�������͡/s?';
$lang['Confirm_move_topic'] = '�س��㨷������¡�з�������͡/s?';

$lang['Move_to_forum'] = '����仡�дҹ';
$lang['Leave_shadow_topic'] = '��駡�з�����㹡�дҹ���';

$lang['Split_Topic'] = '��ǹ����觡�з��';
$lang['Split_Topic_explain'] = '��Ẻ��������㹡���觡�з���͡�� 2 ��ǹ';
$lang['Split_title'] = '���͡�з������';
$lang['Split_forum'] = '��дҹ����Ѻ��з������';
$lang['Split_posts'] = '�觡�з�������͡';
$lang['Split_after'] = '�觨ҡ��з�������͡';
$lang['Topic_split'] = '��з�������͡�١�����º��������';

$lang['Too_many_error'] = '�س���͡��з���ҡ� �س����ö���͡��˹�觡�з����ҹ��㹡����!';

$lang['None_selected'] = '�س�ѧ��������͡��з���� ��سҡ�Ѻ����͡��з���͹';
$lang['New_forum'] = '��дҹ����';

$lang['This_posts_IP'] = 'IP ����Ѻ��з����';
$lang['Other_IP_this_user'] = 'IP ��蹷�������觡�з�������';
$lang['Users_this_IP'] = '������觡�з��ҡ IP ���';
$lang['IP_info'] = '������ IP';
$lang['Lookup_IP'] = '���� IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = '��Ѻ���� %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 �������';
$lang['-11'] = 'GMT - 11 �������';
$lang['-10'] = 'GMT - 10 �������';
$lang['-9'] = 'GMT - 9 �������';
$lang['-8'] = 'GMT - 8 �������';
$lang['-7'] = 'GMT - 7 �������';
$lang['-6'] = 'GMT - 6 �������';
$lang['-5'] = 'GMT - 5 �������';
$lang['-4'] = 'GMT - 4 �������';
$lang['-3.5'] = 'GMT - 3.5 �������';
$lang['-3'] = 'GMT - 3 �������';
$lang['-2'] = 'GMT - 2 �������';
$lang['-1'] = 'GMT - 1 �������';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 �������';
$lang['2'] = 'GMT + 2 �������';
$lang['3'] = 'GMT + 3 �������';
$lang['3.5'] = 'GMT + 3.5 �������';
$lang['4'] = 'GMT + 4 �������';
$lang['4.5'] = 'GMT + 4.5 �������';
$lang['5'] = 'GMT + 5 �������';
$lang['5.5'] = 'GMT + 5.5 �������';
$lang['6'] = 'GMT + 6 �������';
$lang['6.5'] = 'GMT + 6.5 �������';
$lang['7'] = 'GMT + 7 �������';
$lang['8'] = 'GMT + 8 �������';
$lang['9'] = 'GMT + 9 �������';
$lang['9.5'] = 'GMT + 9.5 �������';
$lang['10'] = 'GMT + 10 �������';
$lang['11'] = 'GMT + 11 �������';
$lang['12'] = 'GMT + 12 �������';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 ������� (Eniwetok, Kwajalein)';
$lang['tz']['-11'] = 'GMT - 11 ������� (Midway Island, Samoa)';
$lang['tz']['-10'] = 'GMT - 10 ������� (Hawaii)';
$lang['tz']['-9'] = 'GMT - 9 ������� (Alaska)';
$lang['tz']['-8'] = 'GMT - 8 ������� (Pacific Time (US & Canada); Tijuana)';
$lang['tz']['-7'] = 'GMT - 7 ������� (Arizona)';
$lang['tz']['-6'] = 'GMT - 6 ������� (Central America, Mexico City, Saskatchewan)';
$lang['tz']['-5'] = 'GMT - 5 ������� (Bogota, Lima, Quito, Idiana (East))';
$lang['tz']['-4'] = 'GMT - 4 ������� (Atlantic Time (Canada), Caracas, La Paz, Santiago)';
$lang['tz']['-3.5'] = 'GMT - 3.5 ������� (Newfoundland)';
$lang['tz']['-3'] = 'GMT - 3 ������� (Brasilia, Beunos Aires, Georgetown, Greenland)';
$lang['tz']['-2'] = 'GMT - 2 ������� (Mid-Atlantic)';
$lang['tz']['-1'] = 'GMT - 1 ������� (Azores, Cape Verde Is.)';
$lang['tz']['0'] = 'GMT (Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London, Casablanca, Monrovia)';
$lang['tz']['1'] = 'GMT + 1 ������� (Amsterdam, Berlin, Rome, Stockholm, Vienna, Budapest, Madris, Paris)';
$lang['tz']['2'] = 'GMT + 2 ������� (Athens, Istanbul, Minsk, Bucharest, Cairo, Jerusalem)';
$lang['tz']['3'] = 'GMT + 3 ������� (Baghdad, Kuwait, Moscow)';
$lang['tz']['3.5'] = 'GMT + 3.5 ������� (Tehran)';
$lang['tz']['4'] = 'GMT + 4 ������� (Abu Dhabi, Muscat)';
$lang['tz']['4.5'] = 'GMT + 4.5 ������� (Kabul)';
$lang['tz']['5'] = 'GMT + 5 ������� (Islamabad, Karachi)';
$lang['tz']['5.5'] = 'GMT + 5.5 ������� (New Delhi)';
$lang['tz']['6'] = 'GMT + 6 ������� (Dhaka)';
$lang['tz']['6.5'] = 'GMT + 6.5 ������� (Rangoon)';

$lang['tz']['7'] = 'GMT + 7 ������� (Bangkok, Hanoi, Jakarta)';

$lang['tz']['8'] = 'GMT + 8 ������� (Hong Kong, Kuala Lumpur, Singapore, Taipei)';
$lang['tz']['9'] = 'GMT + 9 ������� (Osaka, Sapporo, Tokyo)';
$lang['tz']['9.5'] = 'GMT + 9.5 ������� (Adelaide, Darwin)';
$lang['tz']['10'] = 'GMT + 10 ������� (Melbourne, Sydney)';
$lang['tz']['11'] = 'GMT + 11 ������� (Magadan, Solomon Is., New Caledonia)';
$lang['tz']['12'] = 'GMT + 12 ������� (Auckland, Wellington, Fiji)';
$lang['tz']['13'] = 'GMT + 13 �������';

$lang['datetime']['Sunday'] = '�ҷԵ��';
$lang['datetime']['Monday'] = '�ѹ���';
$lang['datetime']['Tuesday'] = '�ѧ���';
$lang['datetime']['Wednesday'] = '�ظ';
$lang['datetime']['Thursday'] = '�����';
$lang['datetime']['Friday'] = '�ء��';
$lang['datetime']['Saturday'] = '�����';
$lang['datetime']['Sun'] = '�ҷԵ��';
$lang['datetime']['Mon'] = '�.';
$lang['datetime']['Tue'] = '�.';
$lang['datetime']['Wed'] = '�.';
$lang['datetime']['Thu'] = '��.';
$lang['datetime']['Fri'] = '�.';
$lang['datetime']['Sat'] = '�.';
$lang['datetime']['January'] = '���Ҥ�';
$lang['datetime']['February'] = '����Ҿѹ��';
$lang['datetime']['March'] = '�չҤ�';
$lang['datetime']['April'] = '����¹';
$lang['datetime']['May'] = '����Ҥ�';
$lang['datetime']['June'] = '�Զع�¹';
$lang['datetime']['July'] = '�á�Ҥ�';
$lang['datetime']['August'] = '�ԧ�Ҥ�';
$lang['datetime']['September'] = '�ѹ��¹';
$lang['datetime']['October'] = '���Ҥ�';
$lang['datetime']['November'] = '��Ȩԡ�¹';
$lang['datetime']['December'] = '�ѹ�Ҥ�';
$lang['datetime']['Jan'] = '��.';
$lang['datetime']['Feb'] = '��.';
$lang['datetime']['Mar'] = '�դ.';
$lang['datetime']['Apr'] = '���.';
$lang['datetime']['May'] = '��.';
$lang['datetime']['Jun'] = '���.';
$lang['datetime']['Jul'] = '��.';
$lang['datetime']['Aug'] = 'ʤ.';
$lang['datetime']['Sep'] = '��.';
$lang['datetime']['Oct'] = '��.';
$lang['datetime']['Nov'] = '��.';
$lang['datetime']['Dec'] = '��.';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = '�����ŷ����';
$lang['Critical_Information'] = '�����ũء�Թ';

$lang['General_Error'] = '��ͼԴ��Ҵ�����';
$lang['Critical_Error'] = '��ͼԴ��Ҵ�����ç';
$lang['An_error_occured'] = '�բ�ͼԴ��Ҵ�Դ���';
$lang['A_critical_error'] = '�բ�ͼԴ��Ҵ�����ç�Դ���';

//
// That's all Folks!
// -------------------------------------------------

?>