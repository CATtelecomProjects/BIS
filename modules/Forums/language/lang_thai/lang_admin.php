<?php

/***************************************************************************
 *                            lang_admin.php [Thai]
 *                              -------------------
 *     begin                : Jan 2003
 *     copyright            : (C) 2002 ThaiNuke
 *     email                : webmaster@thainuke.net
 *
 *     $Id: lang_admin.php,v 1.35.2.3 2002/06/27 20:06:44 thefinn Exp $
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
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'จัดการทั่วไป';
$lang['Users'] = 'จัดการสมาชิก';
$lang['Groups'] = 'จัดการกลุ่มผู้ใช้';
$lang['Forums'] = 'จัดการกระดานข่าว';
$lang['Styles'] = 'จัดการรูปแบบ';

$lang['Configuration'] = 'ค่าติดตั้งระบบ';
$lang['Permissions'] = 'สิทธิการใช้งาน';
$lang['Manage'] = 'การจัดการ';
$lang['Disallow'] = 'ชื่อที่ไม่อนุญาต';
$lang['Prune'] = 'การตัดทอน';
$lang['Mass_Email'] = 'จัดการเมล์';
$lang['Ranks'] = 'จัดอันดับ';
$lang['Smilies'] = 'รูปรอยยิ้ม';
$lang['Ban_Management'] = 'ควบคุมการใช้';
$lang['Word_Censor'] = 'กรองคำหยาบ';
$lang['Export'] = 'ส่งออก';
$lang['Create_new'] = 'สร้าง';
$lang['Add_new'] = 'เพิ่ม';
$lang['Backup_DB'] = 'สำรองฐานข้อมูล';
$lang['Restore_DB'] = 'เรียกคืนฐานข้อมูล';


//
// Index
//
$lang['Admin'] = 'ส่วนของการจัดการ';
$lang['Not_admin'] = 'คุณไม่มีสิทธิในการจัดการกระดานข่าวนี้';
$lang['Welcome_phpBB'] = 'ยินดีต้อนรับสู่ phpBB';
$lang['Admin_intro'] = 'ขอบคุณที่ใช้ phpBB หน้านี้จะแสดงค่าสถิติต่างๆของกระดานข่าว คุณสามารถกลับมาที่หน้านี้ได้โดยคลิ๊กที่  <u>หน้าแรกของผู้ควบคุมระบบ</u>ที่ฝั่งซ้าย ถ้าต้องการกลับไปที่กระดานข่าว ให้คลิ๊กโลโก้ phpBB ที่ฝั่งซ้าย ส่วนลิงก์อื่นๆที่ฝั่งซ้าย จะนำคุณไปสู่การควบคุมในส่วนต่างๆ แต่ละหน้าจะมีคำแนะนำการใช้บอกเอาไว้';
$lang['Main_index'] = 'หน้าแรกของกระดานข่าว';
$lang['Forum_stats'] = 'สถิติของกระดานข่าว';
$lang['Admin_Index'] = 'หน้าแรกของผู้ควบคุมระบบ';
$lang['Preview_forum'] = 'ดูกระดานข่าวก่อน';

$lang['Click_return_admin_index'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปหน้าแรกของผู้ควบคุมระบบ';

$lang['Statistic'] = 'สถิติ';
$lang['Value'] = 'ค่า';
$lang['Number_posts'] = 'จำนวนการตอบกระทู้';
$lang['Posts_per_day'] = 'ตอบกระทู้ต่อวัน';
$lang['Number_topics'] = 'จำนวนกระทู้';
$lang['Topics_per_day'] = 'ตั้งกระทู้ต่อวัน';
$lang['Number_users'] = 'จำนวนสมาชิก';
$lang['Users_per_day'] = 'สมัครสมาชิกต่อวัน';
$lang['Board_started'] = 'วันเริ่มต้น';
$lang['Avatar_dir_size'] = 'ขนาดของไดเรคทอรีรูปประจำตัว';
$lang['Database_size'] = 'ขนาดของฐานข้อมูล';
$lang['Gzip_compression'] ='ใช้งานการบีบอัดแบบ Gzip';
$lang['Not_available'] = 'ไม่มี';

$lang['ON'] = 'ใช้งาน'; // This is for GZip compression
$lang['OFF'] = 'ไม่ใช้งาน'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'เครื่องมือจัดการฐานข้อมูล';

$lang['Restore'] = 'เรียกคืนข้อมูล';
$lang['Backup'] = 'สำรองข้อมูล';
$lang['Restore_explain'] = 'กู้คืนตาราง phpBB ทั้งหมดจากไฟล์ที่บันทึกไว้ ถ้าเซิร์ฟเวอร์สนับสนุนการบีบอัดแบบ gzip ก็จะถูกขยายโดยอัตโนมัติ <b>คำเตือน</b> ข้อมูลเก่าจะถูกเขียนทับหมด การกู้คืนจะใช้เวลาสักครู่ กรุณาอย่าเปลี่ยนหน้าจนกว่าจะทำงานเสร็จ';
$lang['Backup_explain'] = 'คุณสามารถสำรองข้อมูลของ phpBB ถ้าคุณมีตารางส่วนตัวในฐานข้อมูล phpBB ที่คุณต้องการสำรองด้วย กรุณาป้อนชื่อและคั่นด้วยลูกน้ำ ลงในตารางเพิ่มเติมด้านล่าง ถ้าเซิร์ฟเวอร์รองรับการบีบอัดแบบ gzip จะทำให้จำนวนข้อมูลที่คุณต้องดาวน์โหลดน้อยลง';

$lang['Backup_options'] = 'ส่วนการสำรองข้อมูล';
$lang['Start_backup'] = 'เริ่มสำรองข้อมูล';
$lang['Full_backup'] = 'สำรองเต็มรูปแบบ';
$lang['Structure_backup'] = 'สำรองเฉพาะโครงสร้าง';
$lang['Data_backup'] = 'สำรองเฉพาะข้อมูล';
$lang['Additional_tables'] = 'การเพิ่มตาราง';
$lang['Gzip_compress'] = 'การบีบอัดไฟล์แบบ Gzip';
$lang['Select_file'] = 'เลือกไฟล์';
$lang['Start_Restore'] = 'เริ่มเรียกคืนข้อมูล';

$lang['Restore_success'] = 'ฐานข้อมูลของคุณถูกเรียกคืนเรียบร้อยแล้ว<br /><br />กระดานข่าวของคุณจะกลับไปสู่สภาวะที่คุณทำการสำรองข้อมูล';
$lang['Backup_download'] = 'การดาวน์โหลดของคุณจะเริ่มต้นในไม่ช้า กรุณารอสักครู่จนกว่าจะเริ่ม';
$lang['Backups_not_supported'] = 'เสียใจแต่การสำรองฐานข้อมูลไม่สามารถทำได้ในระบบฐานข้อมูลของคุณ';

$lang['Restore_Error_uploading'] = 'ข้อผิดพลาดในการอับโหลดไฟล์สำรองข้อมูล';
$lang['Restore_Error_filename'] = 'มีปัญหากับชื่อไฟล์ กรุณาใช้ชื่อไฟล์อื่น';
$lang['Restore_Error_decompress'] = 'ไม่สามารถขยายไฟล์บีบอัดแบบ gzip กรุณาอับโหลดเท็กซ์ไฟล์ธรรมดา';
$lang['Restore_Error_no_file'] = 'ไม่มีไฟล์ที่จะอับโหลด';


//
// Auth pages
//
$lang['Select_a_User'] = 'เลือกสมาชิก';
$lang['Select_a_Group'] = 'เลือกกลุ่ม';
$lang['Select_a_Forum'] = 'เลือกกระดาน';
$lang['Auth_Control_User'] = 'จัดการสิทธิการใช้งานของสมาชิก'; 
$lang['Auth_Control_Group'] = 'ควบคุมสิทธิการใช้งานกลุ่ม'; 
$lang['Auth_Control_Forum'] = 'ควบคุมสิทธิการใช้งานกระดานข่าว'; 
$lang['Look_up_User'] = 'เลือกสมาชิก'; 
$lang['Look_up_Group'] = 'เลือกกลุ่ม'; 
$lang['Look_up_Forum'] = 'เลือกกระดาน'; 

$lang['Group_auth_explain'] = 'คุณสามารถเปลี่ยนแปลงการอนุญาต และสถานะ ผู้ตรวจทานของแต่ละกลุ่มผู้ใช้ อย่าลืมว่า เมื่อเปลี่ยนแปลงการอนุญาตของกลุ่มแล้ว แต่การอนุญาตสำหรับผู้ใช้รายบุคคลอาจยังอยู่ ซึ่งอาจทำให้ผู้ใช้นั้นยังสามารถเข้าไปสู่กระดาน ฯลฯ ในกรณีนี้ คุณจะได้รับการแจ้งเตือน';
$lang['User_auth_explain'] = 'คุณสามารถเปลี่ยนแปลงการอนุญาต และสถานะ ผู้ตรวจทานของผู้ใช้แต่ละคน อย่าลืมว่า เมื่อเปลี่ยนแปลงการอนุญาตของผู้ใช้แล้ว แต่การอนุญาตสำหรับกลุ่มผู้ใช้อาจยังอยู่ ซึ่งอาจทำให้ผู้ใช้นั้นยังสามารถเข้าไปสู่กระดาน ฯลฯ ในกรณีนี้ คุณจะได้รับการแจ้งเตือน';
$lang['Forum_auth_explain'] = 'คุณสามารถเปลี่ยนแปลงระดับการอนุญาตของแต่ละกระดาน คุณสามารถเลือกแบบอย่างง่าย หรือแบบชั้นสูงก็ได้ วิธีชั้นสูงจะให้การควบคุมกระดาน ในแต่ละการทำงานได้ดีกว่า การเปลี่ยนแปลงระดับการอนุญาตของกระดาน จะมีผลกับผู้ใช้ที่สามารถกระทำการต่างๆนี้ได้';

$lang['Simple_mode'] = 'แบบง่ายๆ';
$lang['Advanced_mode'] = 'แบบพิเศษ';
$lang['Moderator_status'] = 'สถานภาพผู้ตรวจทาน';

$lang['Allowed_Access'] = 'อนุญาตให้ใช้งาน';
$lang['Disallowed_Access'] = 'ไม่อนุญาตให้ใช้งาน';
$lang['Is_Moderator'] = 'เป็นผู้ตรวจทาน';
$lang['Not_Moderator'] = 'ไม่เป็นผู้ตรวจทาน';

$lang['Conflict_warning'] = 'คำเตือนเกิดความขัดแย้งของสิทธิการใช้งาน';
$lang['Conflict_access_userauth'] = 'ผู้ใช้นี้จะยังคงมีสิทธิ์เข้าไปยังกระดาน ผ่านทางสมาชิกกลุ่ม คุณอาจต้องเปลี่ยนการอนุญาตกลุ่ม หรือลบผู้ใช้นี้ออกจากกลุ่ม การอนุญาตของกลุ่ม (และของกระดานที่เกี่ยวข้อง) ได้อธิบายไว้ข้างล่างนี้';
$lang['Conflict_mod_userauth'] = 'ผู้ใช้นี้ยังคงมีสิทธิ์ของผู้ตรวจทาน เข้าไปยังกระดาน คุณอาจต้องเปลี่ยนการอนุญาตกลุ่ม หรือลบผู้ใช้นี้ออกจากกลุ่ม เพื่อป้องกันสิทธิ์การเป็น ผู้ตรวจทาน การอนุญาตของกลุ่ม (และของกระดานที่เกี่ยวข้อง) ได้อธิบายไว้ข้างล่างนี้';

$lang['Conflict_access_groupauth'] = 'ผู้ใช้(เหล่า)นี้ยังคงมีสิทธิ์เข้าไปยังกระดาน ผ่านทางสมาชิกกลุ่ม คุณอาจต้องเปลี่ยนการอนุญาตสำหรับผู้ใช้ การอนุญาตของกลุ่ม (และของ กระดานที่เกี่ยวข้อง) ได้แสดงไว้ด้านล่างนี้';
$lang['Conflict_mod_groupauth'] = 'ผู้ใช้(เหล่า)นี้ยังคงมีสิทธิ์ของผู้ตรวจทาน เข้าไปยัง กระดาน  คุณอาจต้องเปลี่ยนการอนุญาตสำหรับผู้ใช้ เพื่อป้องกันสิทธิ์การเป็นผู้ตรวจทาน การอนุญาตของกลุ่ม (และของกระดานที่เกี่ยวข้อง) ได้แสดงไว้ด้านล่างนี้';

$lang['Public'] = 'สาธารณะ';
$lang['Private'] = 'ส่วนตัว';
$lang['Registered'] = 'สมาชิก';
$lang['Administrators'] = 'ผู้ควบคุมระบบ';
$lang['Hidden'] = 'ไม่แสดง';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'ทั้งหมด';
$lang['Forum_REG'] = 'สมาชิก';
$lang['Forum_PRIVATE'] = 'ส่วนตัว';
$lang['Forum_MOD'] = 'MOD';
$lang['Forum_ADMIN'] = 'ผู้ควบคุมระบบ';

$lang['View'] = 'เข้าชม';
$lang['Read'] = 'อ่าน';
$lang['Post'] = 'ตั้งกระทู้';
$lang['Reply'] = 'ตอบ';
$lang['Edit'] = 'แก้ไข';
$lang['Delete'] = 'ลบ';
$lang['Sticky'] = 'ตรึง';
$lang['Announce'] = 'ประกาศ'; 
$lang['Vote'] = 'ลงคะแนน';
$lang['Pollcreate'] = 'สร้างแบบสำรวจ';

$lang['Permissions'] = 'สิทธิการใช้งาน';
$lang['Simple_Permission'] = 'สิทธิการใช้เบื้องต้น';

$lang['User_Level'] = 'ระดับของสมาชิก'; 
$lang['Auth_User'] = 'สมาชิก';
$lang['Auth_Admin'] = 'ผู้ควบคุมระบบ';
$lang['Group_memberships'] = 'สมาชิกของกลุ่ม';
$lang['Usergroup_members'] = 'กลุ่มนี้ดูแลโดยสมาชิก';

$lang['Forum_auth_updated'] = 'บันทึกสิทธิการใช้งานกระดานข่าว';
$lang['User_auth_updated'] = 'บันทึกสิทธิการใช้งานกของสมาชิก';
$lang['Group_auth_updated'] = 'บันทึกสิทธิการใช้งานของกลุ่ม';

$lang['Auth_updated'] = 'สิทธิการใช้งานถูกบันทึก';
$lang['Click_return_userauth'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปที่สิทธิการใช้งานของสมาชิก';
$lang['Click_return_groupauth'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปที่สิทธิการใช้งานของกลุ่ม';
$lang['Click_return_forumauth'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปที่สิทธิการใช้งานของกระดานข่าว';


//
// Banning
//
$lang['Ban_control'] = 'ควบคุมการใช้';
$lang['Ban_explain'] = 'คุณสามารถควบคุมการหวงห้ามผู้ใช้ได้ที่นี่ คุณสามารถหวงห้ามผู้ใช้รายบุคคล และ/หรือ กลุ่มของ IP  หรือชื่อโฮส วิธีนี้จะป้องกันผู้ใช้ไม่ให้เข้าถึงหน้าแรกของกระดานข่าว ถ้าจะป้องกันผู้ใช้จากการสมัครสมาชิกโดยใช้ชื่อต่างๆ คุณสามารถระบอีเมล์ที่ต้องการหวงห้าม แต่การหวงห้ามอีเมล์เพียงอย่างเดียวจะไม่สามารถป้องกันผู้ใช้นั้นจากการเข้าสู่ระบบ หรือโพสต์ในกระดานข่าว คุณควรใช้หนึ่งในสองวิธีแรกสำหรับแก้ไขปัญหานี้';
$lang['Ban_explain_warn'] = 'โปรดระวังว่า การระบุกลุ่มของ IP จะมีผลกับทุก IP ที่อยู่ระหว่าง IP เริ่มต้นและสิ้นสุด หมายเลข IP ที่จะบันทึกลงฐานข้อมูลจะใช้ไวด์คาร์ด โดยอัตโนมัติเพื่อลดขนาดของ IP ถ้าคุณต้องการระบุช่วงของ IP จริงๆ กรุณาระบุช่วงให้แคบที่สุดเท่าที่จะทำได้';

$lang['Select_username'] = 'เลือกชื่อสมาชิก';
$lang['Select_ip'] = 'เลือก IP';
$lang['Select_email'] = 'เลือกอีเมล์';

$lang['Ban_username'] = 'ห้ามสมาชิกใช้งาน';
$lang['Ban_username_explain'] = 'คุณสามารถหวงห้ามผู้ใช้หลายคนในครั้งเดียว โดยใช้เมาส์และคีย์บอร์ดร่วมกัน';

$lang['Ban_IP'] = 'ห้าม IP หรือชื่อโฮสใช้งาน';
$lang['IP_hostname'] = 'IP หรือชื่อโฮส';
$lang['Ban_IP_explain'] = 'เพื่อระบุหลายหมายเลข IP หรือหลายชื่อโฮส ให้คั่นแต่ละชื่อด้วยลูกน้ำ ถ้าจะระบุช่วงของ IP ให้แยกหมายเลขเริ่มต้นและสิ้นสุดด้วยขีด (-) ถ้าจะระบุไวด์คาร์ดให้ใช้ *';

$lang['Ban_email'] = 'ห้ามอีเมล์ใช้งาน';
$lang['Ban_email_explain'] = 'ถ้าจะระบุมากกว่า 1อีเมล์ ให้คั่นด้วยลูกน้ำ ถ้าจะระบุโดยใช้ ไวด์คาร์ดให้ใช้ * เช่น *@hotmail.com';

$lang['Unban_username'] = 'ยกเลิกการห้ามสมาชิกใช้งาน';
$lang['Unban_username_explain'] = 'คุณสามารถยกเลิกการหวงห้ามหลายชื่อในครั้งเดียว โดยใช้เมาส์และคีย์บอร์ดร่วมกัน';

$lang['Unban_IP'] = 'ยกเลิกการห้าม IP หรือชื่อโฮสใช้งาน';
$lang['Unban_IP_explain'] = 'คุณสามารถยกเลิกการหวงห้ามหลาย IP ในครั้งเดียว โดยใช้เมาส์และคีย์บอร์ดร่วมกัน';

$lang['Unban_email'] = 'ยกเลิกการห้ามอีเมล์ใช้งาน';
$lang['Unban_email_explain'] = 'คุณสามารถยกเลิกการหวงห้ามหลายอีเมล์ ในครั้งเดียว โดยใช้เมาส์และคีย์บอร์ดร่วมกัน';

$lang['No_banned_users'] = 'ไม่มีสมาชิกที่ถูกห้ามใช้งาน';
$lang['No_banned_ip'] = 'ไม่มี IP ที่ถูกห้ามใช้งาน';
$lang['No_banned_email'] = 'ไม่มีอีเมล์ที่ถูกห้ามใช้งาน';

$lang['Ban_update_sucessful'] = 'รายการควบคุมการใช้ถูกบันทึกเรียบร้อยแล้ว';
$lang['Click_return_banadmin'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปควบคุมการใช้';


//
// Configuration
//
$lang['General_Config'] = 'กำหนดค่าติดตั้งเฉพาะระบบ';
$lang['Config_explain'] = 'แบบฟอร์มด้านล่างนี้ จะยอมให้คุณปรับแต่งค่าต่างๆของกระดานข่าว ให้ใช้ลิงค์อื่นๆที่เกี่ยวข้องที่ฝั่งซ้าย เพื่อการตั้งค่าสำหรับผู้ใช้และกระดานข่าว';

$lang['Click_return_config'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปที่กำหนดค่าติดตั้งเฉพาะระบบ';

$lang['General_settings'] = 'กำหนดค่าทั่วไปของกระดานข่าว';
$lang['Server_name'] = 'ชื่อโดเมน';
$lang['Server_name_explain'] = 'ชื่อโดเมนที่กระดานข่าวนี้ทำงาน';
$lang['Script_path'] = 'ที่อยู่ของโค้ด';
$lang['Script_path_explain'] = 'ตำแหน่งของ phpBB2 จะสัมพันธ์กับชื่อโดเมน';
$lang['Server_port'] = 'พอร์ตของเซิร์ฟเวอร์';
$lang['Server_port_explain'] = 'หมายเลขพอร์ตของเซิร์ฟเวอร์ ปรกติคือ 80';
$lang['Site_name'] = 'ชื่อไซต์';
$lang['Site_desc'] = 'คำอธิบายไซต์';
$lang['Board_disable'] = 'ไม่ใช้งานกระดานข่าว';
$lang['Board_disable_explain'] = 'ทำให้กระดานข่าวใช้งานไม่ได้ อย่าออกจากระบบเมื่อคุณยกเลิกกระดานข่าว เพราะคุณจะไม่สามารถเข้าสู่ระบบได้อีก!';
$lang['Acct_activation'] = 'กำหนดสถานภาพของสมาชิก';
$lang['Acc_None'] = 'ไม่'; // These three entries are the type of activation
$lang['Acc_User'] = 'สมาชิก';
$lang['Acc_Admin'] = 'ผู้ควบคุมระบบ';

$lang['Abilities_settings'] = 'กำหนดค่าติดตั้งเฉพาะของสมาชิกและกระดานข่าว';
$lang['Max_poll_options'] = 'จำนวนสูงสุดของคำตอบในแบบสำรวจ';
$lang['Flood_Interval'] = 'ระยะเวลาของการส่ง';
$lang['Flood_Interval_explain'] = 'จำนวนวินาที ที่ผู้ใช้ต้องรอระหว่างการส่ง'; 
$lang['Board_email_form'] = 'ส่งเมล์จากกระดาน';
$lang['Board_email_form_explain'] = 'ส่งอีเมล์ระหว่างผู้ใช้ผ่านกระดานข่าว';
$lang['Topics_per_page'] = 'กระทู้ต่อหน้า';
$lang['Posts_per_page'] = 'ตอบกระทู้ต่อหน้า';
$lang['Hot_threshold'] = 'จำนวนตอบกระทู้ยอดนิยม';
$lang['Default_style'] = 'รูปแบบปกติ';
$lang['Override_style'] = 'ทับรูปแบบของสมาชิก';
$lang['Override_style_explain'] = 'แทนที่รูปแบบที่ผู้ใช้เลือกเอง ด้วยรูปแบบมาตรฐาน';
$lang['Default_language'] = 'ภาษาปกติที่ใช้งาน';
$lang['Date_format'] = 'รูปแบบวันที่';
$lang['System_timezone'] = 'ปรับเวลาของระบบ';
$lang['Enable_gzip'] = 'ใช้การบีบอัดแบบ GZip';
$lang['Enable_prune'] = 'ใช้งานตัดทอนกระดานข่าว';
$lang['Allow_HTML'] = 'ใช้งาน HTML';
$lang['Allow_BBCode'] = 'ใช้งาน BBCode';
$lang['Allowed_tags'] = 'ใช้งาน HTML tags';
$lang['Allowed_tags_explain'] = 'คั่นแต่ละคำสั่งด้วยลูกน้ำ';
$lang['Allow_smilies'] = 'ใช้งานรูปรอยยิ้ม';
$lang['Smilies_path'] = 'ที่เก็บไฟล์รูปรอยยิ้ม';
$lang['Smilies_path_explain'] = 'อยู่ในไดเรคทอรี root ของ phpBB เช่น images/smiles';
$lang['Allow_sig'] = 'ใช้งานลายเซ็น';
$lang['Max_sig_length'] = 'ความยาวสูงสุดของลายเซ็น';
$lang['Max_sig_length_explain'] = 'จำนวนตัวอักษรสูงสุดในลายเซ็น';
$lang['Allow_name_change'] = 'อนุญาตให้สมาชิกเปลี่ยนแปลงได้';

$lang['Avatar_settings'] = 'กำหนดค่าสัญญลักษณ์';
$lang['Allow_local'] = 'ใช้สัญญลักษณ์จากภายใน';
$lang['Allow_remote'] = 'ใช้สัญญลักษณ์จากภายนอก';
$lang['Allow_remote_explain'] = 'รูปประจำตัวที่อยู่บนเว็บอื่น';
$lang['Allow_upload'] = 'อับโหลดสัญญลักษณ์ได้';
$lang['Max_filesize'] = 'ขนาดไฟล์สูงสุดของสัญญลักษณ์';
$lang['Max_filesize_explain'] = 'สำหรับการอับโหลดไฟล์รูปประจำตัว';
$lang['Max_avatar_size'] = 'ขนาดมิติสูงสุดของสัญญลักษณ์';
$lang['Max_avatar_size_explain'] = '(สูง x กว้าง ในหน่วย pixels)';
$lang['Avatar_storage_path'] = 'ที่เก็บสัญญลักษณ์';
$lang['Avatar_storage_path_explain'] = 'อยู่ในไดเรคทอรี root ของ phpBB เช่น images/avatars';
$lang['Avatar_gallery_path'] = 'ที่เก็บสัญญลักษณ์ที่อับโหลด';
$lang['Avatar_gallery_path_explain'] = 'อยู่ใน directory ของข้างบนนี้ เช่น images/avatars/gallery';

$lang['COPPA_settings'] = 'กำหนดค่าของ COPPA';
$lang['COPPA_fax'] = 'เลขที่แฟกซ์ COPPA';
$lang['COPPA_mail'] = 'อีเมล์ COPPA';
$lang['COPPA_mail_explain'] = 'This is the mailing address where parents will send COPPA registration forms';

$lang['Email_settings'] = 'กำหนดค่าอีเมล์';
$lang['Admin_email'] = 'อีเมล์ของผู้ควบคุมระบบ';
$lang['Email_sig'] = 'ลายเซ็นอีเมล์';
$lang['Email_sig_explain'] = 'ข้อความนี้จะแนบไปกับอีเมล์ทุกฉบับ เมื่อส่งจากกระดาน';
$lang['Use_SMTP'] = 'ใช้ SMTP เซิร์ฟเวอร์สำหรับอีเมล์';
$lang['Use_SMTP_explain'] = 'ตอบ ใช่ เมื่อคุณต้องการหรือจำเป็นต้องส่งอีเมล์ ผ่าน SMTP เซิร์ฟเวอร์แทนที่จะใช้ฟังก์ชันส่งอีเมล์ ของตัวโปรแกรมเอง';
$lang['SMTP_server'] = 'ที่อยู่ของ SMTP เซิร์ฟเวอร์';
$lang['SMTP_username'] = 'ชื่อเรียก SMTP';
$lang['SMTP_username_explain'] = 'ให้ป้อน username เมื่อจำเป็นต้องใช้เท่านั้น';
$lang['SMTP_password'] = 'รหัสผ่าน SMTP';
$lang['SMTP_password_explain'] = 'ให้ป้อน password เมื่อจำเป็นต้องใช้เท่านั้น';

$lang['Disable_privmsg'] = 'ข่าวสารส่วนตัว';
$lang['Inbox_limits'] = 'จำนวนมากที่สุดใน Inbox';
$lang['Sentbox_limits'] = 'จำนวนมากที่สุดใน Sentbox';
$lang['Savebox_limits'] = 'จำนวนมากที่สุดใน Savebox';

$lang['Cookie_settings'] = 'กำหนดค่าคุ๊กกี้'; 
$lang['Cookie_settings_explain'] = 'รายละเอียดนี้จะใช้กับคุ๊กกี้ ที่ถูกส่งไปที่บราวเซอร์ ของคุณ โดยทั่วไปค่ามาตรฐานก็เพียงพอแล้ว แต่ถ้าคุณต้องการเปลี่ยนแปลง กรุณาทำด้วยความระมัดระวัง การตั้งค่าที่ผิดพลาด จะทำให้ผู้ใช้ไม่สามารถเข้าสู่ระบบได้';
$lang['Cookie_domain'] = 'โดเมนคุ๊กกี้';
$lang['Cookie_name'] = 'ชื่อคุ๊กกี้';
$lang['Cookie_path'] = 'ที่อยู่คุ๊กกี้';
$lang['Cookie_secure'] = 'การรักษาความปลอดภัยคุ๊กกี้';
$lang['Cookie_secure_explain'] = 'ถ้าเซิร์ฟเวอร์ของคุณใช SSL ก็ให้เปิดใช้งาน';
$lang['Session_length'] = 'ระยะเวลา [ วินาที ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'ใช้งานการยืนยันแบบเสมือน';
$lang['Visual_confirm_explain'] = 'ต้องการให้สมาชิกใส่โค้ดที่แสดงเป็นรูปภาพ เวลาสมัครสมาชิกใหม่';

//
// Forum Management
//
$lang['Forum_admin'] = 'การจัดการกระดานข่าว';
$lang['Forum_admin_explain'] = 'ในส่วนนี้คุณสามาระเพิ่ม, ลบ, แก้ไข, เรียงลำดับ, จัดเรียงกลุ่มและกระดานใหม่';
$lang['Edit_forum'] = 'แก้ไขกระดาน';
$lang['Create_forum'] = 'เพิ่มกระดานใหม่';
$lang['Create_category'] = 'เพิ่มหมวดหมู่ใหม่';
$lang['Remove'] = 'ลบ';
$lang['Action'] = 'ทำงาน';
$lang['Update_order'] = 'บันทึกลำดับ';
$lang['Config_updated'] = 'ค่าคงที่ของระบบถูกบันทึกเรียบร้อยแล้ว';
$lang['Edit'] = 'แก้ไข';
$lang['Delete'] = 'ลบ';
$lang['Move_up'] = 'เลื่อนขึ้น';
$lang['Move_down'] = 'เลื่อนลง';
$lang['Resync'] = 'ทำให้สอดคล้องกัน';
$lang['No_mode'] = 'ไม่มีการกำหนดรูปแบบ';
$lang['Forum_edit_delete_explain'] = 'แบบฟอร์มด้านล่างนี้ จะยอมให้คุณปรับแต่งการตั้งค่าทั่วไปของกระดาน ให้ใช้ลิงก์ที่ฝั่งซ้าย เพื่อการตั้งค่าสำหรับผู้ใช้และกระดาน';

$lang['Move_contents'] = 'ย้ายเนื้อหาทั้งหมด';
$lang['Forum_delete'] = 'ลบกระดาน';
$lang['Forum_delete_explain'] = 'แบบฟอร์มด้านล่างนี้ จะยอมให้คุณลบกระดาน (หรือกลุ่ม) และให้คุณเลือกว่า จะนำหัวข้อ (หรือกระดาน) ไปเก็บไว้ที่ใด';

$lang['Status_locked'] = 'ปิด';
$lang['Status_unlocked'] = 'เปิด';
$lang['Forum_settings'] = 'กำหนดค่าทั่วไปของกระดาน';
$lang['Forum_name'] = 'ชื่อกระดาน';
$lang['Forum_desc'] = 'คำอธิบาย';
$lang['Forum_status'] = 'สถานะของกระดาน';
$lang['Forum_pruning'] = 'ตัดทอนอัตโนมัติ';

$lang['prune_freq'] = 'เช็คอายุของกระทู้ทุกๆ';
$lang['prune_days'] = 'ลบกระทู้ที่ไม่ได้รับการตอบใน';
$lang['Set_prune_data'] = 'คุณใช้งานการตัดทอนอัตโนมัติสำหรับกระดานนี้ แต่ยังไม่ได้กำหนดช่วงระยะเวลาที่ใช้ในการตัดทอน กรุณากลับไประบุด้วย';

$lang['Move_and_Delete'] = 'ย้ายและลบ';

$lang['Delete_all_posts'] = 'ลบการตอบกระทู้ทั้งหมด';
$lang['Nowhere_to_move'] = 'ไม่มีที่ที่จะย้ายไป';

$lang['Edit_Category'] = 'แก้ไขหมวดหมู่';
$lang['Edit_Category_explain'] = 'ใช้แบบฟอร์มนี้เพื่อแก้ไขชื่อหมวดหมู่';

$lang['Forums_updated'] = 'กระดานและหมวดหมู่ถูกแก้ไขเรียบร้อยแล้ว';

$lang['Must_delete_forums'] = 'คุณต้องลบกระดานทั้งหมดก่อนการลบหมวดหมู่นี้';

$lang['Click_return_forumadmin'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปยังการจัดการกระดานข่าว';


//
// Smiley Management
//
$lang['smiley_title'] = 'จัดการแก้ไขรูปรอยยิ้ม';
$lang['smile_desc'] = 'ที่หน้านี้ คุณสามารถเพิ่ม, ลบ และแก้ไข รูปแสดงอารมณ์ หรือรูปรอยยิ้ม ที่ผู้ใช้สามารถใช้ในข้อความที่โพสต์และข้อความส่วนตัว';

$lang['smiley_config'] = 'ค่าเฉพาะของรูปรอยยิ้ม';
$lang['smiley_code'] = 'รหัสของรูปรอยยิ้ม';
$lang['smiley_url'] = 'ไฟล์รูปภาพของรูปรอยยิ้ม';
$lang['smiley_emot'] = 'อารมณ์ของรูปรอยยิ้ม';
$lang['smile_add'] = 'เพิ่มรูปรอยยิ้มใหม่';
$lang['Smile'] = 'รูปรอยยิ้ม';
$lang['Emotion'] = 'อารมณ์';

$lang['Select_pak'] = 'เลือกไฟล์ชุด (.pak) ';
$lang['replace_existing'] = 'ทับรูปรอยยิ้มเดิม';
$lang['keep_existing'] = 'เก็บรูปรอยยิ้มเดิมไว้';
$lang['smiley_import_inst'] = 'คุณควร unzip แพ็คของรูปรอยยิ้ม แล้วส่งทุกไฟล์ขึ้นไปที่ ไดเรคทอรีสำหรับรูปรอยยิ้มเพื่อการติดตั้ง จากนั้นให้เลือกข้อมูลที่ถูกต้องในแบบฟอร์มนี้ เพื่อนำเข้ารูปรอยยิ้ม';
$lang['smiley_import'] = 'นำเข้าชุดของรูปรอยยิ้ม';
$lang['choose_smile_pak'] = 'เลือกไฟล์ชุดของรูปรอยยิ้ม';
$lang['import'] = 'นำเข้ารูปรอยยิ้ม';
$lang['smile_conflicts'] = 'อะไรที่ต้องทำเมื่อเกิดการซ้ำกัน';
$lang['del_existing_smileys'] = 'ลบรูปรอยยิ้มที่มีก่อนการนำเข้า';
$lang['import_smile_pack'] = 'นำเข้าชุดของรูปรอยยิ้ม';
$lang['export_smile_pack'] = 'สร้างชุดของรูปรอยยิ้ม';
$lang['export_smiles'] = 'การสร้างแพ็คของรูปรอยยิ้มจากรูปรอยยิ้มที่ได้ติดตั้งไว้ ให้คล๊ิก %sที่นี่%s เพื่อดาวน์โหลดไฟล์ smiles.pak ตรวจดูให้แน่นอนว่านามสุกลของไฟล์เป็น .pak จากนั้นให้สร้างไฟล์ zip ที่บรรจุรูปภาพรอยยิ้มทั้งหมด รวมไว้กับไฟล์การตั้งค่า .pak ไฟล์นี้';

$lang['smiley_add_success'] = ' รูปรอยยิ้มถูกเพิ่มเรียบร้อยแล้ว';
$lang['smiley_edit_success'] = ' รูปรอยยิ้มถูกแก้ไขเรียบร้อยแล้ว';
$lang['smiley_import_success'] = 'ชุดของรูปรอยยิ้มถูกนำเข้าเรียบร้อยแล้ว!';
$lang['smiley_del_success'] = ' รูปรอยยิ้มถูกลบเรียบร้อยแล้ว';
$lang['Click_return_smileadmin'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปการจัดการรูปรอยยิ้ม';


//
// User Management
//
$lang['User_admin'] = 'จัดการสมาชิก';
$lang['User_admin_explain'] = 'คุณสามารถเปลี่ยนแปลงรายละเอียดของผู้ใช้ และตัวเลือกต่างๆ ถ้าจะแก้ไขการอนุญาต ให้ใช้ระบบการอนุญาตสำหรับผู้ใช้และกลุ่ม';

$lang['Look_up_user'] = 'เลือกสมาชิก';

$lang['Admin_user_fail'] = 'ไม่สามารถแก้ไขข้อมูลสมาชิก';
$lang['Admin_user_updated'] = 'ข้อมูลของสมาชิกถูกแก้ไขเรียบร้อยแล้ว';
$lang['Click_return_useradmin'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปยังการจัดการสมาชิก';

$lang['User_delete'] = 'ลบสมาชิกคนนี้';
$lang['User_delete_explain'] = 'คลิ๊กที่นี่เพื่อลบผู้ใช้นี้ ไม่สามารถยกเลิกได้';
$lang['User_deleted'] = 'สมาชิกถูกลบเรียบร้อยแล้ว';

$lang['User_status'] = 'สมาชิกทำงาน';
$lang['User_allowpm'] = 'สามารถส่งข่าวสารส่วนตัว';
$lang['User_allowavatar'] = 'สามารถแสดงรูปภาพสัญญลักษณ์';

$lang['Admin_avatar_explain'] = 'คุณสามารถดูและลบรูปประจำตัวของผู้ใช้ได้ที่นี่';

$lang['User_special'] = 'ส่วนจัดการเฉพาะผู้ควบคุมระบบ';
$lang['User_special_explain'] = 'ส่วนนี้ไม่สามารถแก้ไขได้โดยผู้ใช้ คุณสามารถตั้งสถานะและตัวเลือกอื่นๆ ที่ผู้ใช้ไม่สามารถทำได้';


//
// Group Management
//
$lang['Group_administration'] = 'จัดการกลุ่มผู้ใช้';
$lang['Group_admin_explain'] = 'คุณสามารถจัดการกลุ่มผู้ใช้ได้ที่นี่ คุณสามารถ ลบ, สร้าง และแก้ไขกลุ่มผู้ใช้ที่มีอยู่ คุณอาจเลือกผู้ตรวจทาน สลับสถานะเปิด/ปิดกลุ่ม และตั้งชื่อกลุ่มและคำอธิบาย';
$lang['Error_updating_groups'] = 'มีข้อผิดพลาดเกิดขึ้นขณะแก้ไขกลุ่ม';
$lang['Updated_group'] = 'แก้ไขกลุ่มเรียบร้อยแล้ว';
$lang['Added_new_group'] = 'สร้างกลุ่มใหม่เรียบร้อยแล้ว';
$lang['Deleted_group'] = 'ลบกลุ่มเรียบร้อยแล้ว';
$lang['New_group'] = 'สร้างกลุ่มใหม่';
$lang['Edit_group'] = 'แก้ไขกลุ่ม';
$lang['group_name'] = 'ชื่อกลุ่ม';
$lang['group_description'] = 'คำอธิบายกลุ่ม';
$lang['group_moderator'] = 'ผู้ดูแลกลุ่ม';
$lang['group_status'] = 'สถานะของกลุ่ม';
$lang['group_open'] = 'เปิดกลุ่ม';
$lang['group_closed'] = 'ปิดกลุ่ม';
$lang['group_hidden'] = 'ซ่อนกลุ่ม';
$lang['group_delete'] = 'ลบกลุ่ม';
$lang['group_delete_check'] = 'ลบกลุ่มนี้';
$lang['submit_group_changes'] = 'บันทึกการเปลี่ยนแปลง';
$lang['reset_group_changes'] = 'ยกเลิกการเปลี่ยนแปลง';
$lang['No_group_name'] = 'คุณต้องใส่ชื่อของกลุ่มนี้';
$lang['No_group_moderator'] = 'คุณต้องมีผู้ดูแลสำหรับกลุ่มนี้';
$lang['No_group_mode'] = 'คุณต้องกำหนดรูปแบบของกลุ่มนี้ เปิดหรือปิด';
$lang['No_group_action'] = 'ไม่มีการกำหนดการทำงาน';
$lang['delete_group_moderator'] = 'ลบผู้ดูแลกลุ่มเดิม?';
$lang['delete_moderator_explain'] = 'ถ้าคุณกำลังเปลี่ยนแปลงผู้ตรวจทานของกลุ่ม ให้เลือกกล่องนี้เพื่อลบผู้ตรวจทานเก่าออกจากกลุ่มด้วย หรือถ้าไม่เลือก ผู้ใช้นี้จะกลายเป็นสมาชิกธรรมดาของกลุ่ม';
$lang['Click_return_groupsadmin'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปยังการจัดการกลุ่มผู้ใช้';
$lang['Select_group'] = 'เลือกกลุ่ม';
$lang['Look_up_group'] = 'เลือกกลุ่ม';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'ตัดทอนกระดานข่าว';
$lang['Forum_Prune_explain'] = 'ลบหัวข้อที่ไม่มีผู้ตอบ ตามจำนวนวันที่กำหนด ถ้าคุณไม่ระบุจำนวนวัน ทุกหัวข้อจะถูกลบทิ้ง แต่จะไม่ถอดหัวข้อที่แบบสอบถามกำลังทำงานอยู่ และจะไม่ถอดข้อความประกาศ คุณจะต้องถอดหัวข้อเหล่านี้ด้วยตัวเอง';
$lang['Do_Prune'] = 'ทำการตัดทอน';
$lang['All_Forums'] = 'ทุกกระดาน';
$lang['Prune_topics_not_posted'] = 'ตัดทอนกระทู้ที่ไม่มีการตอบเป็นระยะเวลานาน';
$lang['Topics_pruned'] = 'กระทู้ที่ถูกตัดทอน';
$lang['Posts_pruned'] = 'การตอบกระทู้ที่ถูกตัดทอน';
$lang['Prune_success'] = 'การตัดทอนกระดานข่าวเสร็จแล้ว';


//
// Word censor
//
$lang['Words_title'] = 'กรองคำหยาบ';
$lang['Words_explain'] = 'คุณสามารถเพิ่ม, แก้ไข, และลบคำ ที่ห้ามใช้ในกระดาน และผู้ใช้จะไม่สามารถลงทะเบียนโดยใช้ชื่อที่มีคำเหล่านี้อยู่ คุณสามารถใช้ไวด์คาร์ด (*) ผสมในคำได้ เช่น *test* จะห้าม detestable, test* จะห้าม testing, *test จะห้าม detest';
$lang['Word'] = 'คำ';
$lang['Edit_word_censor'] = 'แก้ไขคำหยาบ';
$lang['Replacement'] = 'เปลี่ยนเป็น';
$lang['Add_new_word'] = 'เพิ่มคำใหม่';
$lang['Update_word'] = 'บันทึกคำหยาบ';

$lang['Must_enter_word'] = 'คุณจะต้องใส่คำหยาบและคำที่เปลี่ยนเป็น';
$lang['No_word_selected'] = 'ไม่มีคำที่เลือกสำหรับการแก้ไข';

$lang['Word_updated'] = 'คำหยาบที่เลือกถูกแก้ไขแล้ว';
$lang['Word_added'] = 'คำหยาบถูกเพิ่มแล้ว';
$lang['Word_removed'] = 'คำหยาบที่เลือกถูกลบออกแล้ว';

$lang['Click_return_wordadmin'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปยังการกรองคำหยาบ';


//
// Mass Email
//
$lang['Mass_email_explain'] = 'คุณสามารถส่งอีเมล์ไปให้ผู้ใช้ทุกคน หรือผู้ใช้ทุกคนภายในกลุ่มที่ระบุ อีเมล์นี้จะถูกส่งไปทอีเมล์ของผู้ควบคุมระบบที่ระบุไว้ และส่งเป็น BCC (blind carbon copy) แก่ผู้รับทุกคน ถ้าคุณส่งอีเมล์ให้แก่ผู้ใช้กลุ่มใหญ่ กรุณาอดทนรอหลังกดส่ง และอย่ากดปุ่มหยุดระหว่างการทำงาน. เป็นเหตุการณ์ปรกติที่ต้องใช้เวลานาน คุณจะได้รับการแจ้งเมื่อระบบทำงานเสร็จเรียบร้อยแล้ว';
$lang['Compose'] = 'ส่งเมล์'; 

$lang['Recipients'] = 'ส่งไป'; 
$lang['All_users'] = 'สมาชิกทั้งหมด';

$lang['Email_successfull'] = 'ข่าวสารของคุณถูกส่งไปแล้ว';
$lang['Click_return_massemail'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปยังการจัดการเมล์';


//
// Ranks admin
//
$lang['Ranks_title'] = 'จัดการการจัดอันดับ';
$lang['Ranks_explain'] = 'คุณสามารถเพิ่ม, แก้ไข, ดู และลบระดับขั้น และคุณสามารถสร้างระดับขั้นเพิ่มเติมเพื่อใช้กับผู้ใช้อื่นๆ ผ่านทางการจัดการผู้ใช้';

$lang['Add_new_rank'] = 'เพิ่มอันดับใหม่';

$lang['Rank_title'] = 'ชื่ออันดับ';
$lang['Rank_special'] = 'กำหนดให้เป็นอันดับพิเศษ';
$lang['Rank_minimum'] = 'ตอบกระทู้น้อยที่สุด';
$lang['Rank_maximum'] = 'ตอบกระทู้มากที่สุด';
$lang['Rank_image'] = 'รูปภาพอันดับ (ขึ้นอยู่กับที่อยู่ของ phpBB2 )';
$lang['Rank_image_explain'] = 'คำอธิบายรูปเล็กๆ สำหรับแต่ละระดับขั้น';

$lang['Must_select_rank'] = 'คุณจะต้องเลือกอันดับ';
$lang['No_assigned_rank'] = 'ไม่มีการเลือกอันดับ';

$lang['Rank_updated'] = 'อันดับถูกแก้ไขแล้ว';
$lang['Rank_added'] = 'อันดับถูกเพิ่มแล้ว';
$lang['Rank_removed'] = 'อันดับถูกลบแล้ว';
$lang['No_update_ranks'] = 'อันดับถูกลบแล้ว แต่อย่างไรก็ดี สมาชิกที่ใช้อันดับนี้อยู่จะไม่ถูกแก้ไข  คุณจะต้องเข้าไปจัดการแก้ไขอันดับของสมาชิกเหล่านี้เอง';

$lang['Click_return_rankadmin'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปการจัดอันดับ';


//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'ควบคุมการห้าม(ชื่อ)สมาชิกใช้งาน';
$lang['Disallow_explain'] = 'คุณสามารถควบคุมผู้ใช้ที่ไม่อนุญาตให้ใช้งาน การไม่อนุญาตผู้ใช้ อาจใช้ตัวอักษรไวด์คาร์ด คือ *. คุณไม่สามารถไม่อนุญาตชื่อผู้ใช้ ที่ได้ทำการลงทะเบียนไว้ก่อนแล้ว คุณจะต้องลบผู้ใช้นั้น ก่อนจะทำการไม่อนุญาต';

$lang['Delete_disallow'] = 'ลบ';
$lang['Delete_disallow_title'] = 'ยกเลิกชื่อสมาชิกที่ห้ามใช้งาน';
$lang['Delete_disallow_explain'] = 'คุณสามารถลบชื่อสมาชิกที่ไม่อนุญาต โดยเลือก ชื่อสมาชิก จากรายการ แล้วคลิ๊กปุ่ม ลบ';

$lang['Add_disallow'] = 'เพิ่ม';
$lang['Add_disallow_title'] = 'เพิ่มชื่อสมาชิกที่ห้ามใช้งาน';
$lang['Add_disallow_explain'] = 'คุณสามารถระบุโดยใช้เครื่องหมาย * แทนที่ตัวอักษรใดๆก็ได';

$lang['No_disallowed'] = 'ไม่มีชื่อที่ไม่อนุญาต';

$lang['Disallowed_deleted'] = 'ชื่อที่ไม่อนุญาตถูกลบแล้ว';
$lang['Disallow_successful'] = 'ชื่อที่ไม่อนุญาตถูกเพิ่มแล้ว';
$lang['Disallowed_already'] = 'ชื่อที่คุณใส่เข้าไปไม่สามารถเป็นชื่อที่ไม่อนุญาตได้ อาจเป็นเพราะมีชื่อดังกล่าวอยู่แล้ว หรืออยู่ในบัญชีคำหยาบ หรือเป็นชื่อที่ใช้งานอยู่ในขณะนี้';

$lang['Click_return_disallowadmin'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปยังการจัดการชื่อที่ไม่อนุญาต';


//
// Styles Admin
//
$lang['Styles_admin'] = 'จัดการรูปแบบ';
$lang['Styles_explain'] = 'คุณสามารถเพิ่ม, ลบ และจัดการรูปแบบ (template และธีม) สำหรับผู้ใช้อื่นๆ';
$lang['Styles_addnew_explain'] = 'รายการนี้จะเป็นรูปแบบทั้งหมดที่คุณมี บางรูปแบบอาจยังไม่ได้รับการติดตั้งลงฐานข้อมูล phpBB ให้คลิ๊ก ติดตั้งที่ด้านข้างของแต่ละรูปแบบ';

$lang['Select_template'] = 'เลือก Template';

$lang['Style'] = 'รูปแบบ';
$lang['Template'] = 'Template';
$lang['Install'] = 'ติดตั้ง';
$lang['Download'] = 'ดาวน์โหลด';

$lang['Edit_theme'] = 'แก้ไขธีม';
$lang['Edit_theme_explain'] = 'ด้านล่างนี้คุณสามารถแก้ไขการตั้งค่าต่างๆ ของรูปแบบที่ถูกเลือก';

$lang['Create_theme'] = 'สร้างธีม';
$lang['Create_theme_explain'] = 'ด้านล่างนี้คุณสามารถสร้างรูปแบบใหม่จากรูปแบบที่ถูกเลือก การระบุค่าสี (ซึ่งคุณควรใช้เป็นเลขฐาน 6) คุณต้องไม่ใส่เครื่องหมาย # เช่น.. CCCCCC นั้นถูกต้อง แต่ #CCCCCC นั้นไม่ถูกต้อง';

$lang['Export_themes'] = 'ส่งออกธีม';
$lang['Export_explain'] = 'คุณสามารถส่งออกข้อมูลรูปแบบ ของรูปแบบที่ถูกเลือก ให้เลือกรูปแบบจากรายการด้านล่างนี้ แล้วระบบจะสร้างไฟล์การตั้งค่าและรูปแบบ สำหรับบันทึกเก็บไว้ในไดเรคทอรีของรูปแบบ ถ้าโปรแกรมไม่สามารถบันทึกด้วยตัวเอง โปรแกรมจะให้คุณทำการดาวน์โหลดเอง. ซึ่งถ้าคุณต้องการให้โปรแกรมบันทึกไฟล์ให้คุณ คุณต้องกำหนดสิทธิ์การเขียนบนเว็บเซิร์ฟเวอร์ให้กับไดเรคทอรีของรูปแบบที่คุณเลือก ดูข้อมูลเพิ่มเติมในคู่มือของ phpBB 2';

$lang['Theme_installed'] = 'ธีมที่เลือกติดตั้งเรียบร้อยแล้ว';
$lang['Style_removed'] = 'รูปแบบที่เลือกถูกลบออกจากฐานข้อมูลแล้ว เพื่อให้การลบสมบูรณ์คุณต้องเข้าไปลบรูปแบบดังกล่าวในไดเรคทอรี templates ของคุณ';
$lang['Theme_info_saved'] = 'ข้อมูลธีมสำหรับ template ที่เลือกถูกบันทึกไว้แล้ว คุณต้องกลับไปกำนดสิทธิการใช้งานใน theme_info.cfg (รวมทั้งไดเรคทอรี template ที่เลือก) เป็น read-only';
$lang['Theme_updated'] = 'ธีมที่เลือกถูกแก้ไขแล้ว คุณต้องไปกำหนดค่าของธีมใหม่';
$lang['Theme_created'] = 'สร้างธีมแล้ว คุณต้องไปกำหนดค่าเฉพาะต่างๆของธีม เพื่อความปลอดภัยหรือกำหนดการใช้งาน';

$lang['Confirm_delete_style'] = 'คุณแน่ใจที่จะลบรูปแบบนี้';

$lang['Download_theme_cfg'] = 'ตัวส่งออกไม่สามารถสร้างไฟล์รายละเอียดของธีม คลิกปุ่มด้านล่างเพื่อดาวน์โหลดไฟล์ด้วยบราวเซอร์ เมื่อคุณดาวน์โหลดเสร็จแล้ว คุณสามารถเก็บไว้ในไดเรคทอรีสำหรับเก็บไฟล์ template คุณสามารถส่งต่อให้ผู้อื่นหรือเก็บไว้ใช้ตามต้องการ';
$lang['No_themes'] = 'template ที่คุณเลือกยังไม่มีธีม เพื่อสร้างธีมใหม่ คลิ๊กที่ "เพิ่ม" ในจัดการรูปแบบทางเมนูด้านซ้าย';
$lang['No_template_dir'] = 'คุณไม่สามารถเปิดไดเรคทอรี template  ซึ่งเว็บมาสเตอร์เป็นผู้กำหนดสิทธิการใช้งานเอาไว้ หรืออาจจะยังไม่มีไดเรคทอรีดังกล่าว';
$lang['Cannot_remove_style'] = 'คุณไม่สามารถลบรูปแบบที่เลือก เพราะกำลังใช้เป็นรูปแบบหลักของกระดาน กรุณาเข้าไปเปลี่ยนรูปแบบหลักแล้วลองใหม่อีกครั้ง';
$lang['Style_exists'] = 'ชื่อรูปแบบที่เลือกมีอยู่แล้ว กรุณากลับไปเลือกชื่ออื่น';

$lang['Click_return_styleadmin'] = 'คลิ๊ก %sที่นี่%s เพื่อกลับไปยังการจัดการรูปแบบ';

$lang['Theme_settings'] = 'กำหนดค่าธีม';
$lang['Theme_element'] = 'ส่วนประกอบของธีม';
$lang['Simple_name'] = 'รูปแบบการใช้';
$lang['Value'] = 'ค่าที่ใช้';
$lang['Save_Settings'] = 'บันทึกการเปลี่ยนแปลง';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Background_image'] = 'รูปภาพพื้นหลัง';
$lang['Background_color'] = 'สีพื้นหลัง';
$lang['Theme_name'] = 'ชื่อธีม';
$lang['Link_color'] = 'สีของลิงก์';
$lang['Text_color'] = 'สีของตัวอักษร';
$lang['VLink_color'] = 'สีของลิงก์ที่เข้าชมแล้ว';
$lang['ALink_color'] = 'สีของลิงก์เมื่อทำงาน';
$lang['HLink_color'] = 'สีของลิงก์เมื่อเมาซ์ชี้';
$lang['Tr_color1'] = 'สีของแถวในตาราง 1';
$lang['Tr_color2'] = 'สีของแถวในตาราง 2';
$lang['Tr_color3'] = 'สีของแถวในตาราง 3';
$lang['Tr_class1'] = 'Class ของแถวในตาราง  1';
$lang['Tr_class2'] = 'Class ของแถวในตาราง 2';
$lang['Tr_class3'] = 'Class ของแถวในตาราง 3';
$lang['Th_color1'] = 'สีที่ส่วนหัวของตาราง 1';
$lang['Th_color2'] = 'สีที่ส่วนหัวของตาราง 2';
$lang['Th_color3'] = 'สีที่ส่วนหัวของตาราง 3';
$lang['Th_class1'] = 'Class ของส่วนหัวตาราง 1';
$lang['Th_class2'] = 'Class ของส่วนหัวตาราง 2';
$lang['Th_class3'] = 'Class ของส่วนหัวตาราง 3';
$lang['Td_color1'] = 'สีของพื้นที่ในตาราง 1';
$lang['Td_color2'] = 'สีของพื้นที่ในตาราง 2';
$lang['Td_color3'] = 'สีของพื้นที่ในตาราง 3';
$lang['Td_class1'] = 'Class ของพื้นที่ในตาราง 1';
$lang['Td_class2'] = 'Class ของพื้นที่ในตาราง 2';
$lang['Td_class3'] = 'Class ของพื้นที่ในตาราง 3';
$lang['fontface1'] = 'รูปแบบของฟอนต์ 1';
$lang['fontface2'] = 'รูปแบบของฟอนต์ 2';
$lang['fontface3'] = 'รูปแบบของฟอนต์ 3';
$lang['fontsize1'] = 'ขนาดของฟอนต์ 1';
$lang['fontsize2'] = 'ขนาดของฟอนต์ 2';
$lang['fontsize3'] = 'ขนาดของฟอนต์ 3';
$lang['fontcolor1'] = 'สีของฟอนต์ 1';
$lang['fontcolor2'] = 'สีของฟอนต์ 2';
$lang['fontcolor3'] = 'สีของฟอนต์ 3';
$lang['span_class1'] = 'Span Class 1';
$lang['span_class2'] = 'Span Class 2';
$lang['span_class3'] = 'Span Class 3';
$lang['img_poll_size'] = 'ขนาดของรูปในแบบสำรวจ [px]';
$lang['img_pm_size'] = 'ขนาดของรูปในข่าวสารส่วนตัว [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'ยินดีต้อนรับสู่การติดตั้ง phpBB 2';
$lang['Initial_config'] = 'การตั้งค่าพื้นฐาน';
$lang['DB_config'] = 'การตั้งค่าฐานข้อมูล';
$lang['Admin_config'] = 'การตั้งค่าผู้ควบคุมระบบ';
$lang['continue_upgrade'] = 'เมื่อคุณดาวน์โหลดไฟล์การตั้งค่าลงเครื่องของคุณ ให้คลิ๊กปุ่ม ทำการอัปเกรดต่อไป ที่ด้านล่างนี้ เพื่อไปยังกระบวนการอัปเกรด กรุณารอขณะทำการส่งไฟล์การตั้งค่า จนกว่ากระบวนการอัปเกรดจะเสร็จสิ้น.';
$lang['upgrade_submit'] = 'ทำการอัปเกรดต่อไป';

$lang['Installer_Error'] = 'เกิดข้อผิดพลาดขึ้นระหว่างการติดตั้ง';
$lang['Previous_Install'] = 'ตรวจพบว่าเคยมีการติดตั้งมาก่อน';
$lang['Install_db_error'] = 'เกิดข้อผิดพลาดขึ้นในการพยายามปรับปรุงฐานข้อมูล';

$lang['Re_install'] = 'การติดตั้งครั้งก่อนยังไม่เสร็จ <br /><br />ถ้าคุณต้องการติดตั้ง phpBB 2 ใหม่ คุณควรคลิ๊กปุ่ม Yes ด้านล่างนี้ โปรดระวังว่าการทำเช่นนี้ จะทำลายข้อมูลที่มีอยู่ทั้งหมด ไม่มีการสำรองข้อมูลใดๆทั้งสิ้น! ชื่อและรหัสผ่านของผู้ควบคุมระบบ ที่คุณเคยใช้จะถูกสร้างใหม่ จะไม่มีการตั้งค่าอื่นๆหลงเหลืออยู่อีก<br /><br />กรุณาคิดให้รอบคอบก่อนคลิก Yes!';

$lang['Inst_Step_0'] = 'ขอบคุณที่ใช้ phpBB 2 เพื่อให้การติดตั้งสมบูรณ์ กรุณากรอกรายละเอียดด้านล่างนี้. กรุณาตรวจสอบก่อนว่าชื่อฐานข้อมูลที่คุณจะใช้นั้นได้ถูกสร้างไว้ก่อนแล้ว ถ้าคุณกำลังติดตั้งลงฐานข้อมูล ODBC เช่น MS Access คุณควรจะสร้าง DSN เสียก่อน';

$lang['Start_Install'] = 'เริ่มติดตั้ง';
$lang['Finish_Install'] = 'การติดตั้งเสร็จแล้ว';

$lang['Default_lang'] = 'ภาษามาตรฐานของกระดานข่าว';
$lang['DB_Host'] = 'Database Server Hostname / DSN';
$lang['DB_Name'] = 'ชื่อฐานข้อมูลของคุณ';
$lang['DB_Username'] = 'ชื่อผู้ใช้';
$lang['DB_Password'] = 'รหัสผ่าน';
$lang['Database'] = 'ฐานข้อมูลของคุณ';
$lang['Install_lang'] = 'เลือกภาษาเพื่อใช้ในการติดตั้ง';
$lang['dbms'] = 'ชนิดฐานข้อมูล';
$lang['Table_Prefix'] = 'ขึ้นต้นชื่อตารางในฐานข้อมูลด้วยคำว่า';
$lang['Admin_Username'] = 'ชื่อผู้ควบคุมระบบ';
$lang['Admin_Password'] = 'รหัสผ่าน';
$lang['Admin_Password_confirm'] = 'รหัสผ่าน [ยืนยัน]';

$lang['Inst_Step_2'] = 'สร้างบัญชผู้ควบคุมระบบของคุณแล้ว ขณะนี้การติดตั้งพื้นฐานได้เสร็จสมบูรณ์ คุณจะถูกพาไปยังหน้าสำหรับการตั้งค่าทั่วไป กรุณาตรวจสอบรายละเอียดของ การตั้งค่าทั่วไป แล้วแก้ไขในส่วนที่ต้องการ ขอบคุณที่ใช้ phpBB 2';

$lang['Unwriteable_config'] = 'ไฟล์การตั้งค่าของคุณ ถูกกำหนดสิทธิ์ให้ไม่สามารถแก้ไขได้ เมื่อคุณคลิ๊กปุ่มด้านล่างนี้ ไฟล์การตั้งค่าจะถูกส่งมาให้คุณดาวน์โหลด คุณควรอับโหลด ไฟล์นี้ไปเก็บไว้ในไดเรคทอรีเดียวกันกับ phpBB 2 เสร็จแล้วให้เข้าสู่ระบบด้วยบัญชีของ ผู้ควบคุมระบบที่กรอกไว้ จากนั้นให้ไปที่ Admin Control Panel (เป็นลิงก์ที่ด้านล่างของแต่ละหน้า เมื่อเข้าสู่ระบบแล้ว) เพื่อตรวจสอบการตั้งค่าทั่วไป ขอบคุณที่ใช้ phpBB 2.';
$lang['Download_config'] = 'ดาวน์โหลดไฟล์การตั้งค่า';

$lang['ftp_choose'] = 'เลือกวิธีการดาวน์โหลด';
$lang['ftp_option'] = '<br />มีการติดตั้งระบบ FTP ลงในภาษา PHP รุ่นนี้ คุณอาจใช้ระบบ ftp เพื่อส่งไฟล์ไปเก็บไว้โดยอัตโนมัติ';
$lang['ftp_instructs'] = 'คุณได้เลือกใช้ระบบ ftp เพื่อส่งไฟล์โดยอัตโนมัติ กรุณากรอกข้อมูลด้านล่างนี้ ตำแหน่ง FTP ควรจะตรงกับตำแหน่ง ftp ที่ทำการติดตั้ง phpBB2 เหมือนอย่างที่คุณใช้โปรแกรม ftp ทั่วๆไป';
$lang['ftp_info'] = 'กรุณากรอกข้อมูล FTP ของคุณ';
$lang['Attempt_ftp'] = 'พยายามตั้งค่าการ ftp เพื่อส่งไฟล์ไปเก็บไว้';
$lang['Send_file'] = 'แค่ส่งไฟล์มาให้ฉัน แล้วฉันจะใช้โปรแกรม ftp อื่นๆ ส่งไปด้วยตัวเอง';
$lang['ftp_path'] = 'ตำแหน่ง FTP ของ phpBB 2';
$lang['ftp_username'] = 'ชื่อผู้ใช้ FTP ';
$lang['ftp_password'] = 'รหัสผ่าน FTP ';
$lang['Transfer_config'] = 'เริ่มส่งไฟล์';
$lang['NoFTP_config'] = 'การพยายามส่งไฟล์การตั้งค่าทาง ftp ล้มเหลว กรุณาดาวน์โหลด ไฟล์การตั้งค่า แล้วส่งมาทาง ftp ด้วยตัวคุณเอง';

$lang['Install'] = 'ติดตั้ง';
$lang['Upgrade'] = 'อัปเกรด';


$lang['Install_Method'] = 'กรุณาเลือกวิธีการติดตั้ง';

$lang['Install_No_Ext'] = 'การตั้งค่าในภาษา php บนเซิร์ฟเวอร์ของคุณ ไม่สนับสนุนฐานข้อมูลที่คุณเลือก';

$lang['Install_No_PCRE'] = 'phpBB2 ต้องการ Perl-Compatible Regular Expressions Module สำหรับภาษา php ซึ่งปรากฏว่าการตั้งค่าในภาษา php ของคุณนั้นไม่สนับสนุน!';
//
// Version Check
//
$lang['Version_up_to_date'] = 'Your installation is up to date, no updates are available for your version of phpBB.';
$lang['Version_not_up_to_date'] = 'Your installation does <b>not</b> seem to be up to date. Updates are available for your version of phpBB, please visit <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> to obtain the latest version.';
$lang['Latest_version_info'] = 'The latest available version is <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'You are running <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'Unable to open connection to phpBB Server, reported error is:<br />%s';
$lang['Socket_functions_disabled'] = 'Unable to use socket functions.';
$lang['Mailing_list_subscribe_reminder'] = 'For the latest information on updates to phpBB, why not <a href="http://www.phpbb.com/support/" target="_new">subscribe to our mailing list</a>.';
$lang['Version_information'] = 'Version Information';

//
// That's all Folks!
// -------------------------------------------------

?>