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
$lang['Forum'] = 'กระดาน';
$lang['Category'] = 'หมวดหมู่';
$lang['Topic'] = 'กระทู้';
$lang['Topics'] = 'กระทู้';
$lang['Replies'] = 'ตอบ';
$lang['Views'] = 'เข้าชม';
$lang['Post'] = 'ตอบ';
$lang['Posts'] = 'ตอบ';
$lang['Posted'] = 'ตอบ';
$lang['Username'] = 'ชื่อเรียก';
$lang['Password'] = 'รหัสผ่าน';
$lang['Email'] = 'อีเมล์';
$lang['Poster'] = 'ผู้ตอบ';
$lang['Author'] = 'ผู้ส่ง';
$lang['Time'] = 'เวลา';
$lang['Hours'] = 'ชั่วโมง';
$lang['Message'] = 'ข้อความ';

$lang['1_Day'] = '1 วัน';
$lang['7_Days'] = '7 วัน';
$lang['2_Weeks'] = '2 สัปดาห์';
$lang['1_Month'] = '1 เดือน';
$lang['3_Months'] = '3 เดือน';
$lang['6_Months'] = '6 เดือน';
$lang['1_Year'] = '1 ปี';

$lang['Go'] = 'ไป';
$lang['Jump_to'] = 'ไปยัง';
$lang['Submit'] = 'ส่ง';
$lang['Reset'] = 'เริ่มใหม่';
$lang['Cancel'] = 'ยกเลิก';
$lang['Preview'] = 'ดูตัวอย่าง';
$lang['Confirm'] = 'ยืนยัน';
$lang['Spellcheck'] = 'ตรวจคำผิด';
$lang['Yes'] = 'ใช่';
$lang['No'] = 'ไม่ใช่';
$lang['Enabled'] = 'ใช้งานได้';
$lang['Disabled'] = 'ไม่ใช้งาน';
$lang['Error'] = 'ข้อผิดพลาด';

$lang['Next'] = 'ถัดไป';
$lang['Previous'] = 'ก่อนนี้';
$lang['Goto_page'] = 'ไปที่หน้า';
$lang['Joined'] = 'เข้าร่วมเมื่อ';
$lang['IP_Address'] = 'IP';

$lang['Select_forum'] = 'เลือกกระดาน';
$lang['View_latest_post'] = 'ดูการตอบล่าสุด';
$lang['View_newest_post'] = 'ดูการตอบใหม่สุด';
$lang['Page_of'] = 'หน้า <b>%d</b> จากทั้งหมด <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['ICQ'] = 'ICQ';
$lang['AIM'] = 'AIM';
$lang['MSNM'] = 'MSN';
$lang['YIM'] = 'Yahoo';

$lang['Forum_Index'] = '%s หน้ากระดานข่าวหลัก';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'ตั้งกระทู้ใหม่';
$lang['Reply_to_topic'] = 'ตอบกระทู้';
$lang['Reply_with_quote'] = 'ตอบกระทู้ด้วยเครื่องหมายคำพูด(quote)';

$lang['Click_return_topic'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปยังกระทู้'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'คลิ๊ก %sที่นี่%s เพื่อลองใหม่อีกครั้ง';
$lang['Click_return_forum'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปกระดาน';
$lang['Click_view_message'] = 'คลิ๊ก %sที่นี่%s เพื่อดูข้อความของคุณ';
$lang['Click_return_modcp'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปส่วนการควบคุมของผู้ตรวจทาน(Moderator)';
$lang['Click_return_group'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปข้อมูลของกลุ่ม';

$lang['Admin_panel'] = 'ไปที่ส่วนของการควบคุมระบบ';

$lang['Board_disable'] = 'เสียใจกระดานข่าวนี้ไม่ทำงาน กรุณาเข้ามาใหม่ในโอกาสหน้า';


//
// Global Header strings
//
$lang['Registered_users'] = 'สมาชิก:';
$lang['Browsing_forum'] = 'ผู้ที่กำลังใช้งาน:';
$lang['Online_users_zero_total'] = 'ทั้งหมด <b>0</b> คน :: ';
$lang['Online_users_total'] = 'ทั้งหมด <b>%d</b> คน :: ';
$lang['Online_user_total'] = 'ทั้งหมด <b>%d</b> คน :: ';
$lang['Reg_users_zero_total'] = '0 คนที่เป็นสมาชิก, ';
$lang['Reg_users_total'] = '%d คนที่เป็นสมาชิก, ';
$lang['Reg_user_total'] = '%d คนที่เป็นสมาชิก, ';
$lang['Hidden_users_zero_total'] = '0 คนที่ไม่แสดงและ ';
$lang['Hidden_user_total'] = '%d คนที่ไม่แสดงและ ';
$lang['Hidden_users_total'] = '%d คนที่ไม่แสดงและ ';
$lang['Guest_users_zero_total'] = '0 บุคคลทั่วไป';
$lang['Guest_users_total'] = '%d บุคคลทั่วไป';
$lang['Guest_user_total'] = '%d บุคคลทั่วไป';
$lang['Record_online_users'] = 'จำนวนของผู้ที่เข้ามาใช้งานมากที่สุด <b>%s</b> คนเมื่อ %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sผู้ควบคุมระบบ%s';
$lang['Mod_online_color'] = '%sผู้ตรวจทาน%s';

$lang['You_last_visit'] = 'คุณเข้ามาครั้งสุดท้ายเมื่อ %s'; // %s replaced by date/time
$lang['Current_time'] = 'เวลาในขณะนี้ %s'; // %s replaced by time

$lang['Search_new'] = 'ดูกระทู้ใหม่ตั้งแต่เข้ามาครั้งสุดท้าย';
$lang['Search_your_posts'] = 'ดูกระทู้ของคุณ';
$lang['Search_unanswered'] = 'ดูกระทู้ที่ยังไม่มีการตอบ';

$lang['Register'] = 'สมัครสมาชิก';
$lang['Profile'] = 'ข้อมูลส่วนตัว';
$lang['Edit_profile'] = 'แก้ไขข้อมูลส่วนตัว';
$lang['Search'] = 'ค้นหา';
$lang['Memberlist'] = 'รายนามสมาชิก';
$lang['FAQ'] = 'คำถามถามบ่อยของกระดานข่าว';
$lang['BBCode_guide'] = 'คู่มือ BBCode';
$lang['Usergroups'] = 'กลุ่มผู้ใช้งาน';
$lang['Last_Post'] = 'ตอบล่าสุด';
$lang['Moderator'] = 'ผู้ตรวจทาน';
$lang['Moderators'] = 'ผู้ตรวจทาน';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'จำนวนการตอบทั้งหมดที่มี <b>0</b> คำตอบ'; // Number of posts
$lang['Posted_articles_total'] = 'จำนวนการตอบทั้งหมดที่มี <b>%d</b> คำตอบ'; // Number of posts
$lang['Posted_article_total'] = 'จำนวนการตอบทั้งหมดที่มี <b>%d</b> คำตอบ'; // Number of posts
$lang['Registered_users_zero_total'] = 'เรามี <b>0</b> สมาชิก'; // # registered users
$lang['Registered_users_total'] = 'เรามี <b>%d</b> สมาชิก'; // # registered users
$lang['Registered_user_total'] = 'เรามี <b>%d</b> สมาชิก'; // # registered users
$lang['Newest_user'] = 'สมาชิกคนล่าสุดคือ <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'ไม่มีกระทู้ใหม่ตั้งแต่คุณเข้ามาครั้งสุดท้าย';
$lang['No_new_posts'] = 'ไม่มีกระทู้ใหม่';
$lang['New_posts'] = 'กระทู้ใหม่';
$lang['New_post'] = 'กระทู้ใหม่';
$lang['No_new_posts_hot'] = 'ไม่มีกระทู้ใหม่ [ ยอดฮิต ]';
$lang['New_posts_hot'] = 'กระทู้ใหม่ [ ยอดฮิต ]';
$lang['No_new_posts_locked'] = 'ไม่มีกระทู้ใหม่ [ ที่ถูกปิด ]';
$lang['New_posts_locked'] = 'กระทู้ใหม่ [ ที่ถูกปิด ]';
$lang['Forum_is_locked'] = 'กระดานนี้ถูกปิด';


//
// Login
//
$lang['Enter_password'] = 'กรุณาใส่ชื่อและรหัสผ่านเพื่อเข้าสู่ระบบ';
$lang['Login'] = 'เข้าระบบ';
$lang['Logout'] = 'ออกจากระบบ';

$lang['Forgotten_password'] = 'ลืมรหัสผ่าน';

$lang['Log_me_in'] = 'เข้าระบบอัตโนมัติทุกครั้งที่เข้ากระดานข่าว';

$lang['Error_login'] = 'คุณใส่ชื่อ หรือรหัสผ่านไม่ถูกต้อง';


//
// Index page
//
$lang['Index'] = 'สารบัญ';
$lang['No_Posts'] = 'ยังไม่มีกระทู้ใหม่';
$lang['No_forums'] = 'ยังไม่มีกระดาน';

$lang['Private_Message'] = 'ข่าสารส่วนตัว';
$lang['Private_Messages'] = 'ข่าสารส่วนตัว';
$lang['Who_is_Online'] = 'ผู้ใช้งานในขณะนี้';

$lang['Mark_all_forums'] = 'ทำเครื่องหมายกระดานทั้งหมดที่อ่าน';
$lang['Forums_marked_read'] = 'กระดานทั้งหมดที่อ่านถูกทำเครื่องหมายแล้ว';


//
// Viewforum
//
$lang['View_forum'] = 'ดูกระดาน';

$lang['Forum_not_exist'] = 'กระดานคุณที่เลือกไม่มี';
$lang['Reached_on_error'] = 'เกิดข้อผิดพลาดที่หน้านี้';

$lang['Display_topics'] = 'แสดงกระทู้ก่อนนี้';
$lang['All_Topics'] = 'กระทู้ทั้งหมด';

$lang['Topic_Announcement'] = '<b>ประกาศ:</b>';
$lang['Topic_Sticky'] = '<b>ตรึง:</b>';
$lang['Topic_Moved'] = '<b>ถูกย้าย:</b>';
$lang['Topic_Poll'] = '<b>[ แบบสำรวจ ]</b>';

$lang['Mark_all_topics'] = 'ทำเครื่องหมายกระทู้ทั้งหมดที่อ่าน';
$lang['Topics_marked_read'] = 'กระทู้ในกระดานนี้ที่อ่านถูกทำเครื่องหมายแล้ว';

$lang['Rules_post_can'] = 'คุณ <b>สามารถ</b> ตั้งกระทู้ใหม่ในกระดานนี้';
$lang['Rules_post_cannot'] = 'คุณ <b>ไม่สามารถ</b> ตั้งกระทู้ใหม่ในกระดานนี้';
$lang['Rules_reply_can'] = 'คุณ <b>สามารถ</b> ตอบกระทู้ในกระดานนี้';
$lang['Rules_reply_cannot'] = 'คุณ <b>ไม่สามารถ</b> ตอบกระทู้ในกระดานนี้';
$lang['Rules_edit_can'] = 'คุณ <b>สามารถ</b> แก้ไขการตอบกระทู้ของคุณในกระดานนี้';
$lang['Rules_edit_cannot'] = 'คุณ <b>ไม่สามารถ</b> แก้ไขการตอบกระทู้ของคุณในกระดานนี้';
$lang['Rules_delete_can'] = 'คุณ <b>สามารถ</b> ลบการตอบกระทู้ของคุณในกระดานนี้';
$lang['Rules_delete_cannot'] = 'คุณ <b>ไม่สามารถ</b> ลบการตอบกระทู้ของคุณในกระดานนี้';
$lang['Rules_vote_can'] = 'คุณ <b>สามารถ</b> ลงคะแนนในแบบสำรวจในกระดานนี้';
$lang['Rules_vote_cannot'] = 'คุณ <b>ไม่สามารถ</b> ลงคะแนนในแบบสำรวจในกระดานนี้';
$lang['Rules_moderate'] = 'คุณ <b>สามารถ</b> %sตรวจทานในกระดานนี้%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'ยังไม่มีกระทู้ในกระดานนี้<br />คลิ๊กที่ <b>ตั้งกระทู้ใหม่</b> ในหน้านี้เพื่อตั้งกระทู้';


//
// Viewtopic
//
$lang['View_topic'] = 'ดูกระทู้';

$lang['Guest'] = 'บุคคลทั่วไป';
$lang['Post_subject'] = 'ชื่อกระทู้';
$lang['View_next_topic'] = 'ดูกระทู้ถัดไป';
$lang['View_previous_topic'] = 'ดูกระทู้ก่อนนี้';
$lang['Submit_vote'] = 'ลงคะแนน';
$lang['View_results'] = 'ผลสำรวจ';

$lang['No_newer_topics'] = 'ไม่มีกระทู้ที่ใหม่กว่าในกระดานนี้';
$lang['No_older_topics'] = 'ไม่มีกระทู้ที่เก่ากว่าในกระดานนี้';
$lang['Topic_post_not_exist'] = 'กระทู้หรือคำตอบที่คุณต้องการไม่มี';
$lang['No_posts_topic'] = 'ไม่มีคำตอบที่ต้องการสำหรับกระทู้นี้';

$lang['Display_posts'] = 'แสดงการตอบก่อนนี้';
$lang['All_Posts'] = 'การตอบทั้งหมด';
$lang['Newest_First'] = 'ใหม่มาก่อน';
$lang['Oldest_First'] = 'เก่ามาก่อน';

$lang['Back_to_top'] = 'กลับไปข้างบน';

$lang['Read_profile'] = 'แสดงข้อมูลส่วนตัวของสมาชิก'; 
$lang['Send_email'] = 'ส่งอีเมล์ไปยังสมาชิก';
$lang['Visit_website'] = 'เข้าชมเว็บไซต์';
$lang['ICQ_status'] = 'สถานะ ICQ';
$lang['Edit_delete_post'] = 'แก้ไข/ลบคำตอบนี้';
$lang['View_IP'] = 'แสดง IP ';
$lang['Delete_post'] = 'ลบคำตอบนี้';

$lang['wrote'] = 'บันทึก'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'คำพูด'; // comes before bbcode quote output.
$lang['Code'] = 'โค้ด'; // comes before bbcode code output.

$lang['Edited_time_total'] = 'แก้ไขครั้งสุดท้ายโดย %s เมื่อ %s, แก้ไขทั้งหมด %d ครั้ง'; // Last edited by me on 12 Oct 2001, edited 1 time in total
$lang['Edited_times_total'] = 'แก้ไขครั้งสุดท้ายโดย %s เมื่อ %s, แก้ไขทั้งหมด %d ครั้ง'; // Last edited by me on 12 Oct 2001, edited 2 times in total

$lang['Lock_topic'] = 'ปิดใช้งานกระทู้นี้';
$lang['Unlock_topic'] = 'เปิดใช้งานกระทู้นี้';
$lang['Move_topic'] = 'ย้ายกระทู้นี้';
$lang['Delete_topic'] = 'ลบกระทู้นี้';
$lang['Split_topic'] = 'แบ่งกระทู้นี้';

$lang['Stop_watching_topic'] = 'หยุดดูกระทู้นี้';
$lang['Start_watching_topic'] = 'ดูกระทู้นี้สำหรับการตอบ';
$lang['No_longer_watching'] = 'คุณหยุดดูกระทู้นี้แล้ว';
$lang['You_are_watching'] = 'คุณกำลังดูกระทู้นี้';

$lang['Total_votes'] = 'คะแนนทั้งหมด';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'ส่วนของข้อความ';
$lang['Topic_review'] = 'ทบทวนกระทู้';

$lang['No_post_mode'] = 'ไม่มีการส่งในแบบพิเศษ'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'ตั้งกระทู้ใหม่';
$lang['Post_a_reply'] = 'ตอบกระทู้';
$lang['Post_topic_as'] = 'ตอบกระทู้แบบ';
$lang['Edit_Post'] = 'แก้ไขกระทู้';
$lang['Options'] = 'ส่วนเพิ่มเติม';

$lang['Post_Announcement'] = 'ประกาศ';
$lang['Post_Sticky'] = 'ตรึง';
$lang['Post_Normal'] = 'ปกติ';

$lang['Confirm_delete'] = 'คุณแน่ใจที่จะลบคำตอบนี้?';
$lang['Confirm_delete_poll'] = 'คุณแน่ใจที่จะลบแบบสำรวจนี้?';

$lang['Flood_Error'] = 'คุณไม่สามารถส่งใหม่หลังจากเพิ่งส่งครั้งล่าสุด กรุณารอสักครู่ค่อยส่งใหม่';
$lang['Empty_subject'] = 'คุณต้องใส่ชื่อเรื่องในการตั้งกระทู้ใหม่';
$lang['Empty_message'] = 'คุณต้องใส่ข้อความก่อนการส่ง';
$lang['Forum_locked'] = 'กระดานนี้นี้ถูกปิดคุณไม่สามารถตั้งกระทู้ ตอบกระทู้ หรือแก้ไขกระทู้ได้';
$lang['Topic_locked'] = 'กระทู้นี้ถูกปิดคุณไม่สามารถแก้ไขคำตอบหรือตอบกระทู้';
$lang['No_post_id'] = 'คุณต้องเลือกคำตอบที่จะแก้ไข';
$lang['No_topic_id'] = 'คุณต้องเลือกกระทู้ที่จะตอบ';
$lang['No_valid_mode'] = 'คุณทำได้เฉพาะการตั้งกระทู้ แก้ไขคำตอบหรือข้อความคำพูด กรุณากลับไปลองใหม่อีกครั้ง';
$lang['No_such_post'] = 'ไม่มีคำตอบ กรุณากลับไปลองใหม่อีกครั้ง';
$lang['Edit_own_posts'] = 'เสียใจคุณแก้ไขได้เฉพาะกระทู้ของคุณเท่านั้น';
$lang['Delete_own_posts'] = 'เสียใจคุณลบได้เฉพาะกระทู้ของคุณเท่านั้น';
$lang['Cannot_delete_replied'] = 'เสียใจคุณไม่สามารถลบกระทู้ที่มีการตอบ';
$lang['Cannot_delete_poll'] = 'เสียใจคุณไม่สามารถลบแบบสำรวจที่กำลังทำงานได้';
$lang['Empty_poll_title'] = 'คุณต้องใส่ชื่อสำหรับแบบสำรวจ';
$lang['To_few_poll_options'] = 'คุณต้องใส่คำตอบอย่างน้อย 2 คำตอบ';
$lang['To_many_poll_options'] = 'คุณต้องพยายามใส่คำตอบให้มากๆ';
$lang['Post_has_no_poll'] = 'กระทู้นี้ไม่มีแบบสำรวจ';
$lang['Already_voted'] = 'คุณลงคะแนนในแบบสำรวจนี้แล้ว';
$lang['No_vote_option'] = 'คุณต้องเลือกคำตอบเมื่อมีการลงคะแนน';

$lang['Add_poll'] = 'เพิ่มแบบสำรวจ';
$lang['Add_poll_explain'] = 'ถ้าคุณไม่ต้องการเพิ่มแบบสำรวจให้ปล่อยว่างไว้';
$lang['Poll_question'] = 'คำถาม';
$lang['Poll_option'] = 'คำตอบ';
$lang['Add_option'] = 'เพิ่มคำตอบ';
$lang['Update'] = 'ปรับปรุง';
$lang['Delete'] = 'ลบ';
$lang['Poll_for'] = 'ใช้งาน';
$lang['Days'] = 'วัน'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ ใส่ 0 หรือปล่อยว่างสำหรับการใช้งานตลอดชีพ ]';
$lang['Delete_poll'] = 'ลบแบบสำรวจ';

$lang['Disable_HTML_post'] = 'ไม่ใช้งาน HTML ในการตอบนี้';
$lang['Disable_BBCode_post'] = 'ไม่ใช้งาน BBCode ในการตอบนี้';
$lang['Disable_Smilies_post'] = 'ไม่ใช้งานรูปรอยยิ้มในการตอบนี้';

$lang['HTML_is_ON'] = 'HTML <u>ใช้งานได้</u>';
$lang['HTML_is_OFF'] = 'HTML <u>ห้ามใช้งาน</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s <u>ใช้งานได้</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s  <u>ห้ามใช้งาน</u>';
$lang['Smilies_are_ON'] = 'รูปรอยยิ้ม <u>ใช้งานได้</u>';
$lang['Smilies_are_OFF'] = 'รูปรอยยิ้ม <u>ห้ามใช้งาน</u>';

$lang['Attach_signature'] = 'ติดลายเซ็น (ลายเซ็นสามารถเปลี่ยนแปลงได้ในข้อมูลส่วนตัว)';
$lang['Notify'] = 'เตือนเมื่อมีการตอบในกระทู้นี้';
$lang['Delete_post'] = 'ลบคำตอบนี้';

$lang['Stored'] = 'ข้อความของคุณถูกส่งเรียบร้อยแล้ว';
$lang['Deleted'] = 'ข้อความของคุณถูกลบเรียบร้อยแล้ว';
$lang['Poll_delete'] = 'แบบสำรวจของคุณถูกลบเรียบร้อยแล้ว';
$lang['Vote_cast'] = 'การลงคะแนนของคุณถูกบันทึกแล้ว';

$lang['Topic_reply_notification'] = 'การเตือนเมื่อมีการตอบกระทู้';

$lang['bbcode_b_help'] = 'ตัวหนา: [b]ข้อความ[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'ตัวเอียง: [i]ข้อความ[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'ขีดเส้นใต้: [u]ข้อความ[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'คำพูด: [quote]ข้อความ[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'แสดงโค้ด: [code]โค้ด[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'รายการ: [list]ข้อความ[/list] (alt+l)';
$lang['bbcode_o_help'] = 'ลำดับรายการ: [list=]ข้อความ[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'เพิ่มรูป: [img]http://image_url[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'เพิ่ม URL: [url]http://url[/url] หรือ [url=http://url]URL text[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'ปิด bbCode ที่เปิดไว้';
$lang['bbcode_s_help'] = 'สี: [color=red]ข้อความ[/color]  ทิป: คุณสามารถใช้ color=#FF0000';
$lang['bbcode_f_help'] = 'ขนาด: [size=x-small]ข้อความ[/size]';

$lang['Emoticons'] = 'ไอคอนแสดงอารมณ์';
$lang['More_emoticons'] = 'ดูไอคอนแสดงอารมณ์อื่นๆ';

$lang['Font_color'] = 'สีตัวอักษร';
$lang['color_default'] = 'ปกติ';
$lang['color_dark_red'] = 'แดงเข้ม';
$lang['color_red'] = 'แดง';
$lang['color_orange'] = 'ส้ม';
$lang['color_brown'] = 'น้ำตาล';
$lang['color_yellow'] = 'เหลือง';
$lang['color_green'] = 'เขียว';
$lang['color_olive'] = 'มะกอก';
$lang['color_cyan'] = 'ฟ้า';
$lang['color_blue'] = 'น้ำเงิน';
$lang['color_dark_blue'] = 'น้ำเงินเข้ม';
$lang['color_indigo'] = 'คราม';
$lang['color_violet'] = 'ม่วง';
$lang['color_white'] = 'ขาว';
$lang['color_black'] = 'ดำ';

$lang['Font_size'] = 'ขนาดตัวอักษร';
$lang['font_tiny'] = 'จิ๋ว';
$lang['font_small'] = 'เล็ก';
$lang['font_normal'] = 'ปกติ';
$lang['font_large'] = 'ใหญ่';
$lang['font_huge'] = 'ยักษ์';

$lang['Close_Tags'] = 'ปิดคำสั่ง';
$lang['Styles_tip'] = 'ทิป: รูปแบบสามารถใช้งานได้อย่างรวดเร็ว ด้วยการเลือกข้อความ';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'ข่าวสารส่วนตัว';

$lang['Login_check_pm'] = 'เข้าระบบเพื่อตรวจข่าวสารส่วนตัวของคุณ';
$lang['New_pms'] = 'คุณได้รับ %d ข่าวสารใหม่'; // You have 2 new messages
$lang['New_pm'] = 'คุณได้รับ %d ข่าวสารใหม่'; // You have 1 new message
$lang['No_new_pm'] = 'คุณไม่มีข่าวสารใหม่';
$lang['Unread_pms'] = 'คุณมี %d ข่าวสารที่ยังไม่ได้อ่าน';
$lang['Unread_pm'] = 'คุณมี %d ข่าวสารที่ยังไม่ได้อ่าน';
$lang['No_unread_pm'] = 'คุณไม่มีข่าวสารที่ยังไม่ได้อ่าน';
$lang['You_new_pm'] = 'มีข่าวสารใหม่รอคุณอยู่ในตู้จดหมาย';
$lang['You_new_pms'] = 'มีข่าวสารใหม่รอคุณอยู่ในตู้จดหมาย';
$lang['You_no_new_pm'] = 'ไม่มีข่าวสารใหม่สำหรับคุณ';

$lang['Unread_message'] = 'ข่าวสารที่ยังไม่ได้อ่าน';
$lang['Read_message'] = 'ข่าวสารที่อ่านแล้ว';

$lang['Read_pm'] = 'อ่านข่าวสาร';
$lang['Post_new_pm'] = 'ส่งข่าวสาร';
$lang['Post_reply_pm'] = 'ตอบข่าวสาร';
$lang['Post_quote_pm'] = 'ข่าวสารคำพูด';
$lang['Edit_pm'] = 'แก้ไขข่าวสาร';

$lang['Inbox'] = 'ตู้รับ';
$lang['Outbox'] = 'ตู้ออก';
$lang['Savebox'] = 'ตู้บันทึก';
$lang['Sentbox'] = 'ตู้ส่ง';
$lang['Flag'] = 'เลือก';
$lang['Subject'] = 'ชื่อกระทู้';
$lang['From'] = 'จาก';
$lang['To'] = 'ถึง';
$lang['Date'] = 'วัน';
$lang['Mark'] = 'เครื่องหมาย';
$lang['Sent'] = 'ถูกส่ง';
$lang['Saved'] = 'ถูกบันทึก';
$lang['Delete_marked'] = 'ลบเครื่องหมาย';
$lang['Delete_all'] = 'ลบทั้งหมด';
$lang['Save_marked'] = 'บันทึกเครื่องหมาย'; 
$lang['Save_message'] = 'บันทึกข่าวสาร';
$lang['Delete_message'] = 'ลบข่าวสาร';

$lang['Display_messages'] = 'แสดงข่าวสารก่อนหน้านี้'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'ข่าวสารทั้งหมด';

$lang['No_messages_folder'] = 'คุณไม่มีข่าวสารในโฟลเดอร์นี้';

$lang['PM_disabled'] = 'ข่าวสารส่วนตัวถูกระงับการใช้งานสำหรับกระดานข่าวนี้';
$lang['Cannot_send_privmsg'] = 'เสียใจ แต่ผู้ควบคุมระบบไม่ให้คุณส่งข่าวสารส่วนตัว';
$lang['No_to_user'] = 'คุณต้องสมัครสมาชิกก่อน ถึงสามารถส่งข่าวสารนี้ได้';
$lang['No_such_user'] = 'เสียใจแต่ไม่มีสมาชิกดังกล่าว';

$lang['Disable_HTML_pm'] = 'ไม่แสดง HTML ในข้อความนี้';
$lang['Disable_BBCode_pm'] = 'ไม่แสดง BBCode ในข้อความนี้';
$lang['Disable_Smilies_pm'] = 'ไม่แสดง รูปรอยยิ้ม ในข้อความนี้';

$lang['Message_sent'] = 'ข่าวสารของคุณถูกจัดส่งแล้ว';

$lang['Click_return_inbox'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปที่ตู้จดหมายของคุณ';
$lang['Click_return_index'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปที่หน้าแรก';

$lang['Send_a_new_message'] = 'ส่งข่าวสารส่วนตัวใหม่';
$lang['Send_a_reply'] = 'ตอบข่าวสารส่วนตัว';
$lang['Edit_message'] = 'แก้ไขข่าวสารส่วนตัว';

$lang['Notification_subject'] = 'ได้รับข่าวสารส่วนตัวใหม่';

$lang['Find_username'] = 'ค้นหาชื่อสมาชิก';
$lang['Find'] = 'ค้นหา';
$lang['No_match'] = 'ไม่พบข้อมูลที่ต้องการ';

$lang['No_post_id'] = 'ไม่พบ ID ของกระทู้ที่ต้องการ';
$lang['No_such_folder'] = 'ไม่พบโฟลเดอร์ดังกล่าว';
$lang['No_folder'] = 'ไม่มีโฟลเดอร์ที่ต้องการ';

$lang['Mark_all'] = 'ทำเครื่องหมายทั้งหมด';
$lang['Unmark_all'] = 'ยกเลิกเครื่องหมายทั้งหมด';

$lang['Confirm_delete_pm'] = 'คุณแน่ใจว่าต้องการที่จะลบข่าวสารนี้?';
$lang['Confirm_delete_pms'] = 'คุณแน่ใจว่าต้องการที่จะลบข่าวสารนี้?';

$lang['Inbox_size'] = 'ตู้รับจดหมายถูกใช้งานไป %d%% '; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'ตู้ส่งจดหมายถูกใช้งานไป  %d%% '; 
$lang['Savebox_size'] = 'ตู้บันทึกจดหมายถูกใช้งานไป %d%% '; 

$lang['Click_view_privmsg'] = 'คลิ๊ก %sที่นี่%s เพื่อเข้าตู้จดหมายของคุณ';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'แสดงข้อมูลของ :: %s'; // %s is username 
$lang['About_user'] = 'ทุกอย่างเกี่ยวกับ %s'; // %s is username

$lang['Preferences'] = 'ค่าติดตั้ง';
$lang['Items_required'] = 'ช่องที่มีเครื่องหมาย * เป็นข้อมูลที่จำเป็นต้องใส่';
$lang['Registration_info'] = 'ข้อมูลสมาชิก';
$lang['Profile_info'] = 'ข้อมูลส่วนตัว';
$lang['Profile_info_warn'] = 'ข้อมูลข้างล่างนี้จะแสดงต่อสาธารณชน';
$lang['Avatar_panel'] = 'ส่วนจัดการสัญญลักษณ์';
$lang['Avatar_gallery'] = 'รูปภาพสัญญลักษณ์';

$lang['Website'] = 'เว็บไซต์';
$lang['Location'] = 'ที่อยู่';
$lang['Contact'] = 'ติดต่อ';
$lang['Email_address'] = 'อีเมล์';
$lang['Email'] = 'อีเมล์';
$lang['Send_private_message'] = 'ส่งข่าวสารส่วนตัว';
$lang['Hidden_email'] = '[ ซ่อน ]';
$lang['Search_user_posts'] = 'ค้นหาที่ตอบโดยสมาชิกท่านนี้';
$lang['Interests'] = 'ความสนใจ';
$lang['Occupation'] = 'อาชีพ'; 
$lang['Poster_rank'] = 'ระดับของผู้ส่ง';

$lang['Total_posts'] = 'ตอบทั้งหมด';
$lang['User_post_pct_stats'] = '%.2f%% จากทั้งหมด'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f คำตอบต่อวัน'; // 1.5 posts per day
$lang['Search_user_posts'] = 'ค้นหาที่ตอบโดย %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'เสียใจแต่สมาชิกท่านนั้นไม่มี';
$lang['Wrong_Profile'] = 'คุณไม่สามารถแก้ไขข้อมูลส่วนตัวที่ไม่ใช่ของคุณ';

$lang['Only_one_avatar'] = 'คุณสามารถเลือกรูปภาพสัญญลักษณ์ได้เพียงอย่างเดียวเท่านั้น';
$lang['File_no_data'] = 'ไฟล์ที่ URL ที่คุณเลือกไม่มีข้อมูล';
$lang['No_connection_URL'] = 'ไม่สามารถติดต่อกับ URL ที่คุณเลือกได้';
$lang['Incomplete_URL'] = ' URL ที่คุณใส่ไม่สมบูรณ์';
$lang['Wrong_remote_avatar_format'] = ' URL ของรูปภาพสัญญลักษณ์ไม่ถูกต้อง';
$lang['No_send_account_inactive'] = 'เสียใจแต่รหัสผ่านของคุณไม่สามารถส่งได้ เพราะการเป็นสมาชิกของคุณถูกระงับ กรุณาติดต่อผู้ดูแลกระดานข่าวสำหรับข้อมูลเพิ่มเติม';

$lang['Always_smile'] = 'แสดง รูปรอยยิ้ม';
$lang['Always_html'] = 'ใช้งาน HTML ได้';
$lang['Always_bbcode'] = 'ใช้งาน BBCode ได้';
$lang['Always_add_sig'] = 'แสดงลายเซ็น';
$lang['Always_notify'] = 'เตือนเมื่อมีการตอบกระทู้';
$lang['Always_notify_explain'] = 'ส่งอีเมล์เมื่อมีใครตอบในกระทู้ที่คุณตั้งขึ้น โดยจะเปลี่ยนแปลงทุกครั้งที่คุรตอบ';

$lang['Board_style'] = 'รูปแบบ';
$lang['Board_lang'] = 'ภาษาที่ใช้งาน';
$lang['No_themes'] = 'ไม่มีธีมในฐานข้อมูล';
$lang['Timezone'] = 'เวลาที่แสดง';
$lang['Date_format'] = 'รูปแบบวันที่';
$lang['Date_format_explain'] = 'รูปแบบของภาษา PHP <a href=\'http://www.php.net/date\' target=\'_other\'>date()</a> ฟังก์ชัน';
$lang['Signature'] = 'ลายเซ็น';
$lang['Signature_explain'] = 'ช่องนี้สำหรับใส่ข้อความที่คุณต้องการ มีขนาดไม่เกิน %d ตัวอักษร';
$lang['Public_view_email'] = 'แสดงอีเมล์';

$lang['Current_password'] = 'รหัสผ่านปัจจุบัน';
$lang['New_password'] = 'รหัสผ่านใหม่';
$lang['Confirm_password'] = 'ยืนยันรหัสผ่าน';
$lang['Confirm_password_explain'] = 'คุณต้องใส่รหัสผ่านปัจจุบันในกรณีที่คุณต้องการจะเปลี่ยน หรือขอใหม่ผ่านอีเมล์ของคุณ';
$lang['password_if_changed'] = 'ใส่รหัสผ่านใหม่ที่คุณต้องการจะเปลี่ยน';
$lang['password_confirm_if_changed'] = 'คุณต้องยืนยันรหัสผ่านถ้าคุณต้องการเปลี่ยนรหัสผ่าน';

$lang['Avatar'] = 'สัญญลักษณ์';
$lang['Avatar_explain'] = 'แสดงรูปภาพขนาดเล็กข้างรายละเอียดของคุณในการตั้ง หรือตอบกระทู้ โดยจะแสดงเพียงรูปเดียวในแต่ละครั้ง ความกว้างของรูปไม่เกิน %d pixels และสูงไม่เกิน %d pixels และขนาดของไฟล์ไม่มากกว่า %dkB.'; 
$lang['Upload_Avatar_file'] = 'อับโหลดรูปภาพสัญญลักษณ์จากเครื่องของคุณ';
$lang['Upload_Avatar_URL'] = 'อับโหลดรูปภาพสัญญลักษณ์จาก URL';
$lang['Upload_Avatar_URL_explain'] = 'ใส่ URL ที่ที่เก็บรูปภาพสัญญลักษณ์ โดยจะสำเนามาไว้ที่เว็บไซต์นี้';
$lang['Pick_local_Avatar'] = 'เลือกสัญญลักษณ์จากรูปภาพ';
$lang['Link_remote_Avatar'] = 'เชื่อมไปที่รูปภาพสัญญลักษณ์ภายนอกเว็บไซต์';
$lang['Link_remote_Avatar_explain'] = 'ใส่ URL ที่ที่เก็บรูปภาพสัญญลักษณ์ที่คุณต้องการเชื่อมไป';
$lang['Avatar_URL'] = 'URL ของรูปภาพสัญญลักษณ์ ';
$lang['Select_from_gallery'] = 'เลือกรูปภาพของสัญญลักษณ์';
$lang['View_avatar_gallery'] = 'แสดงรูปภาพ';

$lang['Select_avatar'] = 'เลือกสัญญลักษณ์';
$lang['Return_profile'] = 'ยกเลิกสัญญลักษณ์';
$lang['Select_category'] = 'เลือกหมวดหมู่';

$lang['Delete_Image'] = 'ลบรูป';
$lang['Current_Image'] = 'รูปปัจจุบัน';

$lang['Notify_on_privmsg'] = 'เตือนเมื่อมีข่าวสารส่วนตัวใหม่';
$lang['Popup_on_privmsg'] = 'Pop up หน้าต่างเมื่อมีข่าวสารส่วนตัวใหม่'; 
$lang['Popup_on_privmsg_explain'] = 'เปิดหน้าต่างใหม่เพื่อเตือนคุณเมื่อมีข่าวสารส่วนตัวใหม่เข้ามา'; 
$lang['Hide_user'] = 'ไม่แสดงสถานะการใช้งานของคุณ';

$lang['Profile_updated'] = 'ข้อมูลส่วนตัวของคุณถูกบันทึกแล้ว';
$lang['Profile_updated_inactive'] = 'ข้อมูลส่วนตัวของคุณถูกบันทึกแล้ว แต่อย่างไรก็ดีการเป็นสมาชิกของคุณถูกระงับอยู่ ตรวจสอบอีเมล์ของคุณเพื่อหาทางเปิดใช้งานสมาชิกของคุณ หรือติดต่อผู้ดูแลกระดานเพื่อเปิดใช้งานสมาชิก';

$lang['Password_mismatch'] = 'รหัสผ่านที่ใส่ไม่ถูกต้อง';
$lang['Current_password_mismatch'] = 'รหัสผ่านปัจจุบันไม่ตรงกับที่บันทึกไว้ในฐานข้อมูล';
$lang['Password_long'] = 'คุณต้องใส่รหัสผ่านไม่มากกว่า 32 ตัวอักษร';
$lang['Too_many_registers'] = 'วันนี้คุณพยายามสมัครหลายครั้งแล้ว กรุณาลองใหม่คราวหลัง';
$lang['Username_taken'] = 'เสียใจ แต่ชื่อเรียกนี้มีผู้ใช้แล้ว';
$lang['Username_invalid'] = 'เสียใจ แต่ชื่อเรียกนี้มีตัวอักษรที่ไม่ถูกต้อง เช่น \'';
$lang['Username_disallowed'] = 'เสียใจ แต่ชื่อเรียกนี้ไม่อนุญาตให้ใช้งาน';
$lang['Email_taken'] = 'เสียใจ แต่อีเมล์นี้มีผู้ใช้งานแล้ว';
$lang['Email_banned'] = 'เสียใจ แต่อีเมล์นี้ถูกระงับการใช้งาน';
$lang['Email_invalid'] = 'เสียใจ แต่อีเมล์นี้ไม่ถูกต้อง';
$lang['Signature_too_long'] = 'ลายเซ็นของคุณยาวเกินไป';
$lang['Fields_empty'] = 'คุณต้องใส่ข้อมูลในข้อมูลที่จำเป็น(ที่มีเครื่องหมาย *)';
$lang['Avatar_filetype'] = 'ชนิดของไฟล์สัญญลักษณ์ต้องเป็น .jpg, .gif หรือ .png';
$lang['Avatar_filesize'] = 'รูปภาพของไฟล์สัญญลักษณ์ต้องมีขนาดไม่ใหญ่กว่า %d kB'; // The avatar image file size must be less than 6 kB
$lang['Avatar_imagesize'] = 'รูปภาพของไฟล์สัญญลักษณ์ต้องมีความกว้างไม่เกิน %d pixels และความสูงไม่เกิน %d pixels '; 

$lang['Welcome_subject'] = 'ยินดีต้อนรับสู่กระดานข่าว %s '; // Welcome to my.com forums
$lang['New_account_subject'] = 'สมาชิกใหม่';
$lang['Account_activated_subject'] = 'สมาชิกภาพทำงาน';

$lang['Account_added'] = 'ขอบคุณสำหรับการสมัครสมาชิก คุณเป็นสมาชิกโดยสมบูรณ์แล้ว และคุณสามารถเข้าสู่ระบบด้วยชื่อเรียกและรหัสผ่านของคุณ';
$lang['Account_inactive'] = 'คุณเป็นสมาชิกโดยสมบูรณ์แล้ว แต่กระดานข่าวนี้ต้องการการยืนยันการเป็นสมาชิกดังนั้น คุณต้องเข้าไปเปิดอีเมล์ของคุณเพื่อรับ activation key กรุณาตรวจสอบอีเมล์ของคุณสำหรับข้อมูลต่อไป';
$lang['Account_inactive_admin'] = 'คุณเป็นสมาชิกโดยสมบูรณ์แล้ว แต่กระดานข่าวนี้ต้องการการยืนยันการเป็นสมาชิกโดยผู้ควบคุมระบบ อีเมล์จะถูกส่งไปยังผู้ควบคุมระบบ และคุณจะได้รับการแจ้ง เมื่อสมาชิกภาพของคุณทำงาน';
$lang['Account_active'] = 'สมาชิกภาพของคุณทำงาน ขอบคุณสำหรับการสมัครสมาชิก';
$lang['Account_active_admin'] = 'สมาชิกภาพทำงานแล้ว';
$lang['Reactivate'] = 'กำหนดให้สมาชิกภาพทำงานอีกครั้ง!';
$lang['Already_activated'] = 'คุณกำหนดให้สมาชิกภาพทำงานแล้ว';
$lang['COPPA'] = 'คุณเป็นสมาชิกโดยสมบูรณ์แล้ว แต่ต้องรอการตรวจสอบ กรุณาอ่านอีเมล์สำหรับรายละเอียด';

$lang['Registration'] = 'ข้อตกลงในการสมัครเป็นสมาชิก';
$lang['Reg_agreement'] = 'คุณยอมรับว่าผู้ควบคุมระบบ และผู้ตรวจทานของกระดานข่าวนี้ มีสิทธิ์อ่าน ลบ หรือแก้ไขทุกข้อความ และผู้ควบคุมระบบ ผู้ตรวจทานหรือเว็บมาสเตอร์ ไม่สามารถรับผิดชอบต่อข้อความที่คุณได้แสดงความคิดเห็น (ยกเว้นว่าพวกเขาจะเป็นผู้โพสต์เอง)<br /><br />คุณตกลงว่าจะไม่โพสต์ข้อความที่หยาบคาย, ลามก, ไม่แสดงความเคารพ, หมิ่นประมาท, เป็นที่รังเกียจ, ขู่เข็ญ, ส่อไปในทางเพศ หรืออื่นๆที่ขัดต่อกฎหมาย. การกระทำเช่นนั้นอาจทำให้คุณถูกหวงห้ามทันที และอย่างถาวร (และผู้ให้บริการของคุณก็จะได้รับการแจ้งเตือนด้วย) หมายเลข IP ของทุกโพสต์จะถูกบันทึกเพื่อใช้เป็นหลักฐาน. คุณยินยอมให้ เว็บมาสเตอร์, ผู้ควบคุมระบบ และ ผู้ตรวจทานของกระดานข่าวนี้มีสิทธิ์ลบ, แก้ไข, ย้าย หรือปิดหัวข้อใดๆได้ตลอดเวลาที่สมควร คุณยินยอมให้ข้อมูลทุกอย่างของคุณถูกเก็บไว้ในฐานข้อมูล. ซึ่งข้อมูลเหล่านี้จะไม่ถูกเปิดเผยต่อผู้อื่นโดยไม่ได้รับการยินยอมจากคุณ เว็บมาสเตอร์, ผู้ควบคุมระบบ และ ผู้ตรวจทานไม่สามารถรับผิดชอบต่อการถูกเจาะข้อมูล แล้วนำไปสร้างความเดือดร้อนต่างๆ<br /><br />กระดานข่าวนี้ใช้ระบบคุ๊กกี้ เพื่อเก็บข้อมูลไว้ในคอมพิวเตอร์ของคุณ คุ๊กกี้ เหล่านี้จะไม่มีข้อมูลที่คุณได้กรอกไว้เหมือนด้านบน; แต่เพื่อช่วยให้คุณใช้งานได้ง่ายขึ้น อีเมล์จะถูกใช้เพื่อยืนยันข้อมูลการสมัครสมาชิกและรหัสผ่านของคุณเท่านั้น (และใช้สำหรับส่ง รหัสผ่านอันใหม่เมื่อคุณลืมรหัสผ่านเก่า)<br /><br />ถ้าคุณคลิ๊กสมัครสมาชิกที่ด้านล่างนี้ ถือว่าคุณได้ยอมรับทุกเงื่อนไขที่กล่าวมาแล้ว';

$lang['Agree_under_13'] = 'ผมตกลงตามข้อตกลงและผมอายุ <b>น้อยกว่า</b> 13  ปี';
$lang['Agree_over_13'] = 'ผมตกลงตามข้อตกลงและผมอายุ <b>มากกว่า</b> หรือ <b>เท่ากับ</b> 13  ปี';
$lang['Agree_not'] = 'ผมไม่ตกลงตามข้อตกลง';

$lang['Wrong_activation'] = 'รหัสยืนยันของคุณไม่ตรงกับข้อมูลที่มีในฐานข้อมูล';
$lang['Send_password'] = 'ส่งรหัสผ่านใหม่'; 
$lang['Password_updated'] = 'รหัสผ่านใหม่ถูกสร้างขึ้น กรุณาตรวจสอบอีเมล์ของคุณสำหรับรายละเอียดวิธีการกำหนดให้สมาชิกภาพทำงาน';
$lang['No_email_match'] = 'อีเมล์ที่ให้ไม่ตรงกับข้อมูลของสมาชิกชื่อนี้';
$lang['New_password_activation'] = 'รหัสผ่านใหม่ทำงาน';
$lang['Password_activated'] = 'สถานภาพของคุณทำงานอีกครั้ง การเข้าสู่ระบบกรุณาใช้รหัสผ่านใหม่ที่ส่งไปให้ทางอีเมล์';

$lang['Send_email_msg'] = 'ส่งอีเมล์ข่าวสาร';
$lang['No_user_specified'] = 'ไม่มีสมาชิกท่านนี้';
$lang['User_prevent_email'] = 'สมาชิกไม่ต้องการรับอีเมล์ กรุณาส่งทางข่าวสารส่วนตัว';
$lang['User_not_exist'] = 'ไม่มีสมาชิกท่านนี้';
$lang['CC_email'] = 'ส่งสำเนาของอีเมล์นี้ไปที่คุณเอง';
$lang['Email_message_desc'] = 'ข้อความนี้จะถูกส่งในรูปแบบของเท็กซ์ธรรมดา กรุณาอย่าใส่ HTML หรือ BBCode อีเมล์ตอบกลับกำหนดให้ส่งมายังอีเมล์ของคุณ';
$lang['Flood_email_limit'] = 'คุณไม่สามารถส่งอีเมล์อื่นๆได้ในขณะนี้ กรุณาลองใหม่อีกครั้งภายหลัง';
$lang['Recipient'] = 'ผู้รับ';
$lang['Email_sent'] = 'อีเมล์ถูกส่งไปแล้ว';
$lang['Send_email'] = 'ส่งอีเมล์';
$lang['Empty_subject_email'] = 'คุณต้องใส่ชื่อของอีเมล์ด้วย';
$lang['Empty_message_email'] = 'คุณต้องใส่ข้อความในอีเมล์ที่จะส่งไป';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'โค้ดยืนยันที่คุณใส่ไม่ถูกต้อง';
$lang['Too_many_registers'] = 'วันนี้คุณพยายามสมัครหลายครั้งแล้ว กรุณาลองใหม่วันหลัง';
$lang['Confirm_code_impaired'] = 'ถ้าคุณไม่สามารถอ่านโค้ดที่แสดงได้ กรุณาแจ้งไปที่ %sAdministrator%s ได้โดยตรงเพื่อขอความช่วยเหลือ';
$lang['Confirm_code'] = 'รหัสยืนยัน';
$lang['Confirm_code_explain'] = 'ใส่โค้ดให้ตรงกับรหัสที่คุณเห็น โดยตัวเล็ก ตัวใหญ่ถือว่าแตกต่างกัน';



//
// Memberslist
//
$lang['Select_sort_method'] = 'เลือกวิธีการเรียงลำดับ';
$lang['Sort'] = 'เรียงลำดับ';
$lang['Sort_Top_Ten'] = '10 อันดับผู้ส่ง';
$lang['Sort_Joined'] = 'วันที่เข้าร่วม';
$lang['Sort_Username'] = 'ชื่อเรียก';
$lang['Sort_Location'] = 'ที่อยู่';
$lang['Sort_Posts'] = 'ส่งทั้งหมด';
$lang['Sort_Email'] = 'อีเมล์';
$lang['Sort_Website'] = 'เว็บไซต์';
$lang['Sort_Ascending'] = 'น้อยไปมาก';
$lang['Sort_Descending'] = 'มากไปน้อย';
$lang['Order'] = 'ลำดับ';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'จัดการกลุ่ม';
$lang['Group_member_details'] = 'รายละเอียดสมาชิกของกลุ่ม';
$lang['Group_member_join'] = 'เข้าร่วมกลุ่ม';

$lang['Group_Information'] = 'ข้อมูลกลุ่ม';
$lang['Group_name'] = 'ชื่อกลุ่ม';
$lang['Group_description'] = 'รายละเอียดของกลุ่ม';
$lang['Group_membership'] = 'สมาชิกภาพของกลุ่ม';
$lang['Group_Members'] = 'สมาชิกของกลุ่ม';
$lang['Group_Moderator'] = 'ผู้ตรวจทานกลุ่ม';
$lang['Pending_members'] = 'สมาชิกที่กำลังพิจารณา';

$lang['Group_type'] = 'ประเภทของกลุ่ม';
$lang['Group_open'] = 'เปิดกลุ่ม';
$lang['Group_closed'] = 'ปิดกลุ่ม';
$lang['Group_hidden'] = 'ซ่อนกลุ่ม';

$lang['Current_memberships'] = 'สมาชิกภาพในปัจจุบัน';
$lang['Non_member_groups'] = 'กลุ่มที่ไม่เป็นสมาชิก';
$lang['Memberships_pending'] = 'สมาชิกภาพที่กำลังพิจารณา';

$lang['No_groups_exist'] = 'ยังไม่มีกลุ่ม';
$lang['Group_not_exist'] = 'สมาชิกท่านนั้นไม่มี';

$lang['Join_group'] = 'เข้าร่วมกลุ่ม';
$lang['No_group_members'] = 'กลุ่มนี้ไม่มีสมาชิก';
$lang['Group_hidden_members'] = 'กลุ่มนี้ถูกซ่อน คุณไม่สามารถเห็นรายชื่อสมาชิก';
$lang['No_pending_group_members'] = 'กลุ่มนี้ไม่มีสมาชิกที่รอการพิจารณา';
$lang['Group_joined'] = 'คุณบอกรับเป็นสมาชิกของกลุ่มเรียบร้อยแล้ว<br />คุณจะได้รับการแจ้งเมื่อการบอกรับเป็นสมาชิกของคุณได้รับการยอมรับจากผู้ตรวจทานกลุ่ม';
$lang['Group_request'] = 'เขียนคำร้องขอเข้าร่วมกลุ่มของคุณแล้ว';
$lang['Group_approved'] = 'คำร้องของคุณได้รับการยอมรับแล้ว';
$lang['Group_added'] = 'คุณได้เข้าร่วมเป็นสมาชิกของกลุ่มนี้แล้ว'; 
$lang['Already_member_group'] = 'คุณเป็นสมาชิกของกลุ่มนี้อยู่แล้ว';
$lang['User_is_member_group'] = 'สมาชิกท่านนี้เป็นสมาชิกของกลุ่มนี้อยู่แล้ว';
$lang['Group_type_updated'] = 'ปรับปรุงประเภทของกลุ่มเรียบร้อยแล้ว';

$lang['Could_not_add_user'] = 'สมาชิกที่คุณเลือกไม่มี';
$lang['Could_not_anon_user'] = 'คุณไม่สามารถให้บุคคลทั่วไปสมัครเป็นสมาชิกของกลุ่มได้';

$lang['Confirm_unsub'] = 'คุณแน่ใจที่จะยกเลิกการบอกรับเป็นสมาชิกของกลุ่มนี้?';
$lang['Confirm_unsub_pending'] = 'การบอกรับเป็นสมาชิกของคุณกำลังอยู่ในระหว่างการพิจารณา คุณแน่ใจที่จะยกเลิกการบอกรับเป็นสมาชิก?';

$lang['Unsub_success'] = 'คุณยกเลิกการบอกรับเป็นสมาชิกของกลุ่มนี้เรียบร้อยแล้ว';

$lang['Approve_selected'] = 'เลือกยอมรับ';
$lang['Deny_selected'] = 'เลือกไม่ยอมรับ';
$lang['Not_logged_in'] = 'คุณต้องเข้าระบบเพื่อเข้าร่วมกลุ่ม';
$lang['Remove_selected'] = 'เลือกลบ';
$lang['Add_member'] = 'เพิ่มสมาชิก';
$lang['Not_group_moderator'] = 'คุณไม่ใช่ผู้ตรวจทานของกลุ่มนี้ คุรไม่สามารถสั่งการให้ทำงานได้';

$lang['Login_to_join'] = 'เข้าระบบเพื่อเข้าร่วมกลุ่มหรือจัดการสมาชิกของกลุ่ม';
$lang['This_open_group'] = 'นี่คือการเปิดกลุ่ม คลิ๊กเพื่อขอเป็นสมาชิก';
$lang['This_closed_group'] = 'นี่คือการปิดกลุ่ม ไม่มีสมาชิกท่านใดยอมรับ';
$lang['This_hidden_group'] = 'นี่คือการซ่อนกลุ่ม ไม่อนุญาตให้เพิ่มสมาชิกใหม่แบบอัตโนมัติ';
$lang['Member_this_group'] = 'คุณคือสมาชิกของกลุ่มนี้';
$lang['Pending_this_group'] = 'คุณคือสมาชิกที่อยู่ระหว่างการพิจารณาของกลุ่มนี้';
$lang['Are_group_moderator'] = 'คุณคือผู้ตรวจทานของกลุ่มนี้';
$lang['None'] = 'ไม่มี';

$lang['Subscribe'] = 'บอกรับเป็นสมาชิก';
$lang['Unsubscribe'] = 'ยกเลิกการบอกรับเป็นสมาชิก';
$lang['View_Information'] = 'แสดงรายละเอียด';


//
// Search
//
$lang['Search_query'] = 'คำถามที่จะค้นหา';
$lang['Search_options'] = 'ค้นหาเพิ่มเติม';

$lang['Search_keywords'] = 'ค้นหาจากคำเฉพาะ';
$lang['Search_keywords_explain'] = 'คุณสามารถใช้ <u>AND</u> เพื่อกำหนดคำที่ต้องอยู่ในผลลัพธ์ <u>OR</u> เพื่อกำหนดคำที่อาจจะอยู่ในผลลัพธ์และ <u>NOT</u> เพื่อกำหนดคำที่ไม่ควรอยู่ในผลลัพธ์  ใช้ * สำหรับส่วนของการค้นหา เช่น nuke* ';
$lang['Search_author'] = 'ค้นหาผู้ตั้งกระทู้';
$lang['Search_author_explain'] = 'ใช้ * สำหรับส่วนของการค้นหา';

$lang['Search_for_any'] = 'ค้นหาจากส่วนใดๆหรือใส่คำถามที่ต้องการ';
$lang['Search_for_all'] = 'ค้นหาจากทั้งหมด';
$lang['Search_title_msg'] = 'ค้นหาทั้งกระทู้และข้อความ';
$lang['Search_msg_only'] = 'ค้นหาเฉพาะข้อความเท่านั้น';

$lang['Return_first'] = 'กลับไปเริ่ม'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'ตัวอักษรของกระทู้';

$lang['Search_previous'] = 'ค้นหาต่อไป'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'เรียงตาม';
$lang['Sort_Time'] = 'ส่งมาเมื่อ';
$lang['Sort_Post_Subject'] = 'ชื่อกระทู้';
$lang['Sort_Topic_Title'] = 'ชื่อของกระทู้';
$lang['Sort_Author'] = 'ผู้ตั้งกระทู้';
$lang['Sort_Forum'] = 'กระดานข่าว';

$lang['Display_results'] = 'แสดงผลลัพธ์';
$lang['All_available'] = 'ทั้งหมดที่มี';
$lang['No_searchable_forums'] = 'คุณไม่มีสิทธิในการค้นหากระดานใดๆบนเว็บไซต์นี้';

$lang['No_search_match'] = 'ไม่มีกระทู้หรือข้อความที่ตรงกันกับเงื่อนไขที่ต้องการค้นหา';
$lang['Found_search_match'] = 'ค้นหาพบ %d ที่ตรงกัน'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'ค้นหาพบ %d ที่ตรงกัน'; // eg. Search found 24 matches

$lang['Close_window'] = 'ปิดหน้าต่าง';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'เสียใจแต่ %s เท่านั้นที่สามารถส่งประกาศในกระดานนี้';
$lang['Sorry_auth_sticky'] = 'เสียใจแต่ %s เท่านั้นที่สามารถตรึงกระทู้ในกระดานนี้'; 
$lang['Sorry_auth_read'] = 'เสียใจแต่ %s เท่านั้นที่สามารถอ่านกระทู้ในกระดานนี้'; 
$lang['Sorry_auth_post'] = 'เสียใจแต่ %s เท่านั้นที่สามารถตั้งกระทู้ใหม่ในกระดานนี้'; 
$lang['Sorry_auth_reply'] = 'เสียใจแต่ %s เท่านั้นที่สามารถตอบกระทู้ในกระดานนี้'; 
$lang['Sorry_auth_edit'] = 'เสียใจแต่ %s เท่านั้นที่สามารถแก้ไขกระทู้ในกระดานนี้'; 
$lang['Sorry_auth_delete'] = 'เสียใจแต่ %s เท่านั้นที่สามารถลบกระทู้ในกระดานนี้'; 
$lang['Sorry_auth_vote'] = 'เสียใจแต่ %s เท่านั้นที่สามารถลงคะแนนในแบบสำรวจในกระดานนี้'; 

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>บุคคลทั่วไป</b>';
$lang['Auth_Registered_Users'] = '<b>สมาชิก</b>';
$lang['Auth_Users_granted_access'] = '<b>สมาชิกที่ได้รับสิทธิพิเศษ</b>';
$lang['Auth_Moderators'] = '<b>ผู้ตรวจทาน</b>';
$lang['Auth_Administrators'] = '<b>ผู้ควบคุมระบบ</b>';

$lang['Not_Moderator'] = 'คุณไม่ใช่ผู้ตรวจทานสำหรับกระดานนี้';
$lang['Not_Authorised'] = 'ไม่มีสิทธิใช้งาน';

$lang['You_been_banned'] = 'คุณถูกยกเลิกการใช้งานในกระดานนี้<br />กรุณาติดต่อเว็บมาสเตอร์หรือผู้ควบคุมระบบ สำหรับข้อมูลที่เกี่ยวข้อง';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'มี 0 สมาชิกและ '; // There ae 5 Registered and
$lang['Reg_users_online'] = 'มี %d สมาชิกและ '; // There ae 5 Registered and
$lang['Reg_user_online'] = 'มี %d สมาชิกและ '; // There ae 5 Registered and
$lang['Hidden_users_zero_online'] = '0 ผู้ไม่ประสงค์ออกนามใช้งาน'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d ผู้ไม่ประสงค์ออกนามใช้งาน'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d ผู้ไม่ประสงค์ออกนามใช้งาน'; // 6 Hidden users online
$lang['Guest_users_online'] = 'มี %d บุคคลทั่วไปใช้งาน'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'มี 0 บุคคลทั่วไปใช้งาน'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'มี %d บุคคลทั่วไปใช้งาน'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'ไม่มีใครใช้งานกระดานข่าวในขณะนี้';

$lang['Online_explain'] = 'ข้อมูลนี้จะแสดงเฉพาะผู้ที่ใช้งานมากกว่า 5 นาที';

$lang['Forum_Location'] = 'ที่อยู่ของกระดาน';
$lang['Last_updated'] = 'เปลี่ยนแปลงครั้งสุดท้าย';

$lang['Forum_index'] = 'หน้ากระดานข่าวหลัก';
$lang['Logging_on'] = 'เข้าระบบเมื่อ';
$lang['Posting_message'] = 'กำลังส่งข้อความ';
$lang['Searching_forums'] = 'กำลังค้นหากระดาน';
$lang['Viewing_profile'] = 'กำลังดูข้อมูล';
$lang['Viewing_online'] = 'กำลังดูผู้ใช้งานในขณะนี้';
$lang['Viewing_member_list'] = 'กำลังดูรายนามสมาชิก';
$lang['Viewing_priv_msgs'] = 'กำลังดูข่าวสารส่วนตัว';
$lang['Viewing_FAQ'] = 'กำลังดู FAQ';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'ส่วนของผู้ตรวจทาน';
$lang['Mod_CP_explain'] = 'ใช้แบบฟอร์มข้างล่างเพื่อจัดการส่วนงานของผู้ตรวจทานทั้งหมดในกระดานข่าวนี้ คุณสามารถเปิด ปิดกระดาน ย้าย ลบ กระทู้ใดๆก็ได้';

$lang['Select'] = 'เลือก';
$lang['Delete'] = 'ลบ';
$lang['Move'] = 'ย้าย';
$lang['Lock'] = 'ปิด';
$lang['Unlock'] = 'เปิด';

$lang['Topics_Removed'] = 'กระทู้ที่เลือกจะถูกลบออกจากฐานข้อมูลอย่างถาวร';
$lang['Topics_Locked'] = 'กระทู้ที่เลือกจะถูกปิด';
$lang['Topics_Moved'] = 'กระทู้ที่เลือกจะถูกย้าย';
$lang['Topics_Unlocked'] = 'กระทู้ที่เลือกจะถูกเปิด';
$lang['No_Topics_Moved'] = 'ไม่มีกระทู้ที่ถูกย้าย';

$lang['Confirm_delete_topic'] = 'คุณแน่ใจที่จะลบกระทู้ที่เลือก/s?';
$lang['Confirm_lock_topic'] = 'คุณแน่ใจที่จะปิดกระทู้ที่เลือก/s?';
$lang['Confirm_unlock_topic'] = 'คุณแน่ใจที่จะเปิดกระทู้ที่เลือก/s?';
$lang['Confirm_move_topic'] = 'คุณแน่ใจที่จะย้ายกระทู้ที่เลือก/s?';

$lang['Move_to_forum'] = 'ย้ายไปกระดาน';
$lang['Leave_shadow_topic'] = 'ทิ้งกระทู้เก่าในกระดานเดิม';

$lang['Split_Topic'] = 'ส่วนการแบ่งกระทู้';
$lang['Split_Topic_explain'] = 'ใช้แบบฟอร์มนี้ในการแบ่งกระทู้ออกเป็น 2 ส่วน';
$lang['Split_title'] = 'ชื่อกระทู้ใหม่';
$lang['Split_forum'] = 'กระดานสำหรับกระทู้ใหม่';
$lang['Split_posts'] = 'แบ่งกระทู้ที่เลือก';
$lang['Split_after'] = 'แบ่งจากกระทู้ที่เลือก';
$lang['Topic_split'] = 'กระทู้ที่เลือกถูกแบ่งเรียบร้อยแล้ว';

$lang['Too_many_error'] = 'คุณเลือกกระทู้มากไป คุณสามารถเลือกได้หนึ่งกระทู้เท่านั้นในการแบ่ง!';

$lang['None_selected'] = 'คุณยังไม่ได้เลือกกระทู้ใดๆ กรุณากลับไปเลือกกระทู้ก่อน';
$lang['New_forum'] = 'กระดานใหม่';

$lang['This_posts_IP'] = 'IP สำหรับกระทู้นี้';
$lang['Other_IP_this_user'] = 'IP อื่นที่ผู้ใช้ส่งกระทู้เข้ามา';
$lang['Users_this_IP'] = 'ผู้ใช้ส่งกระทู้จาก IP นี้';
$lang['IP_info'] = 'ข้อมูล IP';
$lang['Lookup_IP'] = 'ค้นหา IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'ปรับเวลา %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 ชั่วโมง';
$lang['-11'] = 'GMT - 11 ชั่วโมง';
$lang['-10'] = 'GMT - 10 ชั่วโมง';
$lang['-9'] = 'GMT - 9 ชั่วโมง';
$lang['-8'] = 'GMT - 8 ชั่วโมง';
$lang['-7'] = 'GMT - 7 ชั่วโมง';
$lang['-6'] = 'GMT - 6 ชั่วโมง';
$lang['-5'] = 'GMT - 5 ชั่วโมง';
$lang['-4'] = 'GMT - 4 ชั่วโมง';
$lang['-3.5'] = 'GMT - 3.5 ชั่วโมง';
$lang['-3'] = 'GMT - 3 ชั่วโมง';
$lang['-2'] = 'GMT - 2 ชั่วโมง';
$lang['-1'] = 'GMT - 1 ชั่วโมง';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 ชั่วโมง';
$lang['2'] = 'GMT + 2 ชั่วโมง';
$lang['3'] = 'GMT + 3 ชั่วโมง';
$lang['3.5'] = 'GMT + 3.5 ชั่วโมง';
$lang['4'] = 'GMT + 4 ชั่วโมง';
$lang['4.5'] = 'GMT + 4.5 ชั่วโมง';
$lang['5'] = 'GMT + 5 ชั่วโมง';
$lang['5.5'] = 'GMT + 5.5 ชั่วโมง';
$lang['6'] = 'GMT + 6 ชั่วโมง';
$lang['6.5'] = 'GMT + 6.5 ชั่วโมง';
$lang['7'] = 'GMT + 7 ชั่วโมง';
$lang['8'] = 'GMT + 8 ชั่วโมง';
$lang['9'] = 'GMT + 9 ชั่วโมง';
$lang['9.5'] = 'GMT + 9.5 ชั่วโมง';
$lang['10'] = 'GMT + 10 ชั่วโมง';
$lang['11'] = 'GMT + 11 ชั่วโมง';
$lang['12'] = 'GMT + 12 ชั่วโมง';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 ชั่วโมง (Eniwetok, Kwajalein)';
$lang['tz']['-11'] = 'GMT - 11 ชั่วโมง (Midway Island, Samoa)';
$lang['tz']['-10'] = 'GMT - 10 ชั่วโมง (Hawaii)';
$lang['tz']['-9'] = 'GMT - 9 ชั่วโมง (Alaska)';
$lang['tz']['-8'] = 'GMT - 8 ชั่วโมง (Pacific Time (US & Canada); Tijuana)';
$lang['tz']['-7'] = 'GMT - 7 ชั่วโมง (Arizona)';
$lang['tz']['-6'] = 'GMT - 6 ชั่วโมง (Central America, Mexico City, Saskatchewan)';
$lang['tz']['-5'] = 'GMT - 5 ชั่วโมง (Bogota, Lima, Quito, Idiana (East))';
$lang['tz']['-4'] = 'GMT - 4 ชั่วโมง (Atlantic Time (Canada), Caracas, La Paz, Santiago)';
$lang['tz']['-3.5'] = 'GMT - 3.5 ชั่วโมง (Newfoundland)';
$lang['tz']['-3'] = 'GMT - 3 ชั่วโมง (Brasilia, Beunos Aires, Georgetown, Greenland)';
$lang['tz']['-2'] = 'GMT - 2 ชั่วโมง (Mid-Atlantic)';
$lang['tz']['-1'] = 'GMT - 1 ชั่วโมง (Azores, Cape Verde Is.)';
$lang['tz']['0'] = 'GMT (Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London, Casablanca, Monrovia)';
$lang['tz']['1'] = 'GMT + 1 ชั่วโมง (Amsterdam, Berlin, Rome, Stockholm, Vienna, Budapest, Madris, Paris)';
$lang['tz']['2'] = 'GMT + 2 ชั่วโมง (Athens, Istanbul, Minsk, Bucharest, Cairo, Jerusalem)';
$lang['tz']['3'] = 'GMT + 3 ชั่วโมง (Baghdad, Kuwait, Moscow)';
$lang['tz']['3.5'] = 'GMT + 3.5 ชั่วโมง (Tehran)';
$lang['tz']['4'] = 'GMT + 4 ชั่วโมง (Abu Dhabi, Muscat)';
$lang['tz']['4.5'] = 'GMT + 4.5 ชั่วโมง (Kabul)';
$lang['tz']['5'] = 'GMT + 5 ชั่วโมง (Islamabad, Karachi)';
$lang['tz']['5.5'] = 'GMT + 5.5 ชั่วโมง (New Delhi)';
$lang['tz']['6'] = 'GMT + 6 ชั่วโมง (Dhaka)';
$lang['tz']['6.5'] = 'GMT + 6.5 ชั่วโมง (Rangoon)';

$lang['tz']['7'] = 'GMT + 7 ชั่วโมง (Bangkok, Hanoi, Jakarta)';

$lang['tz']['8'] = 'GMT + 8 ชั่วโมง (Hong Kong, Kuala Lumpur, Singapore, Taipei)';
$lang['tz']['9'] = 'GMT + 9 ชั่วโมง (Osaka, Sapporo, Tokyo)';
$lang['tz']['9.5'] = 'GMT + 9.5 ชั่วโมง (Adelaide, Darwin)';
$lang['tz']['10'] = 'GMT + 10 ชั่วโมง (Melbourne, Sydney)';
$lang['tz']['11'] = 'GMT + 11 ชั่วโมง (Magadan, Solomon Is., New Caledonia)';
$lang['tz']['12'] = 'GMT + 12 ชั่วโมง (Auckland, Wellington, Fiji)';
$lang['tz']['13'] = 'GMT + 13 ชั่วโมง';

$lang['datetime']['Sunday'] = 'อาทิตย์';
$lang['datetime']['Monday'] = 'จันทร์';
$lang['datetime']['Tuesday'] = 'อังคาร';
$lang['datetime']['Wednesday'] = 'พุธ';
$lang['datetime']['Thursday'] = 'พฤหัส';
$lang['datetime']['Friday'] = 'ศุกร์';
$lang['datetime']['Saturday'] = 'เสาร์';
$lang['datetime']['Sun'] = 'อาทิตย์';
$lang['datetime']['Mon'] = 'จ.';
$lang['datetime']['Tue'] = 'อ.';
$lang['datetime']['Wed'] = 'พ.';
$lang['datetime']['Thu'] = 'พฤ.';
$lang['datetime']['Fri'] = 'ศ.';
$lang['datetime']['Sat'] = 'ส.';
$lang['datetime']['January'] = 'มกราคม';
$lang['datetime']['February'] = 'กุมภาพันธ์';
$lang['datetime']['March'] = 'มีนาคม';
$lang['datetime']['April'] = 'เมษายน';
$lang['datetime']['May'] = 'พฤษภาคม';
$lang['datetime']['June'] = 'มิถุนายน';
$lang['datetime']['July'] = 'กรกฎาคม';
$lang['datetime']['August'] = 'สิงหาคม';
$lang['datetime']['September'] = 'กันยายน';
$lang['datetime']['October'] = 'ตุลาคม';
$lang['datetime']['November'] = 'พฤศจิกายน';
$lang['datetime']['December'] = 'ธันวาคม';
$lang['datetime']['Jan'] = 'มค.';
$lang['datetime']['Feb'] = 'กพ.';
$lang['datetime']['Mar'] = 'มีค.';
$lang['datetime']['Apr'] = 'เมย.';
$lang['datetime']['May'] = 'พค.';
$lang['datetime']['Jun'] = 'มิย.';
$lang['datetime']['Jul'] = 'กค.';
$lang['datetime']['Aug'] = 'สค.';
$lang['datetime']['Sep'] = 'กย.';
$lang['datetime']['Oct'] = 'ตค.';
$lang['datetime']['Nov'] = 'พย.';
$lang['datetime']['Dec'] = 'ธค.';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'ข้อมูลทั่วไป';
$lang['Critical_Information'] = 'ข้อมูลฉุกเฉิน';

$lang['General_Error'] = 'ข้อผิดพลาดทั่วไป';
$lang['Critical_Error'] = 'ข้อผิดพลาดร้ายแรง';
$lang['An_error_occured'] = 'มีข้อผิดพลาดเกิดขึ้น';
$lang['A_critical_error'] = 'มีข้อผิดพลาดร้ายแรงเกิดขึ้น';

//
// That's all Folks!
// -------------------------------------------------

?>