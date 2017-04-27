<?php
ob_start();
/*
─═ঊঈঊঈ═─╮
DCafeBazarBot
V 1.o
Developer : mohammadhosseinheidari
Bot ID : @DCafeBazarBot
Dev ID : @NOBLEST
─═ঊঈঊঈ═─╯
*/
define('API_KEY','توکن شما');
//-----------------------------------------------------------------------------------------
//فانکشن MrPHPBot :
function MrPHPBot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
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
//-----------------------------------------------------------------------------------------
//متغیر ها :
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
mkdir("data/$from_id");
$chat_id = $message->chat->id;
mkdir("data/$from-id");
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$textmassage = $message->text;
$step= file_get_contents("data/$from_id/file.txt");
$Dev = 193930120;
$txtt = file_get_contents('data/users.txt');
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$data = $update->callback_query->data;
$firstcall = $update->callback_query->message->chat->first_name;
$usercall = $update->callback_query->message->chat->username;
$messageid = $update->callback_query->message->message_id;
$chatid = $update->callback_query->message->chat->id;
$nameapp = file_get_contents('data/'.$chatid.'/nameapp.txt');
$cafebazar=json_decode(file_get_contents("http://irapi.ir/cafebazaar/search.php?text=$nameapp"),true);
$s1=$cafebazar['0'];
$n1=$s1['text'];
$s2=$cafebazar['1'];
$n2=$s2['text'];
$s3=$cafebazar['2'];
$n3=$s3['text'];
$s4=$cafebazar['3'];
$n4=$s4['text'];
$s5=$cafebazar['4'];
$n5=$s5['text'];
$s6=$cafebazar['5'];
$n6=$s6['text'];
$s7=$cafebazar['6'];
$n7=$s7['text'];
$s8=$cafebazar['7'];
$n8=$s8['text'];
$s9=$cafebazar['8'];
$n9=$s9['text'];
$s10=$cafebazar['9'];
$n10=$s10['text'];
$p1=$s1['packname'];
$p2=$s2['packname'];
$p3=$s3['packname'];
$p4=$s4['packname'];
$p5=$s5['packname'];
$p6=$s6['packname'];
$p7=$s7['packname'];
$p8=$s8['packname'];
$p9=$s9['packname'];
$p10=$s10['packname'];
$nameappin1 = file_get_contents('data/'.$chatid.'/nameapp.txt');
$cafebazarin1=json_decode(file_get_contents("http://irapi.ir/cafebazaar/search.php?text=$nameappin1"),true);
$s1in1=$cafebazarin1['0'];
$p1in1=$s1in1['packname'];
$icon1=$s1in1['icon'];
$app1=json_decode(file_get_contents("http://irapi.ir/cafebazaar/download.php?p=$p1in1"),true);
$applink1=$app1['link'];
$appinfo1=$app1['info'];
$appinstal1=$appinfo1['active-installs'];
$appc1=$appinfo1['Category'];
$apps1=$appinfo1['Size'];
$appv1=$appinfo1['Version'];
$appd1=$appinfo1['Description'];
//2
$nameappin2 = file_get_contents('data/'.$chatid.'/nameapp.txt');
$cafebazarin2=json_decode(file_get_contents("http://irapi.ir/cafebazaar/search.php?text=$nameappin2"),true);
$s1in2=$cafebazarin2['1'];
$p1in2=$s1in2['packname'];
$icon2=$s1in2['icon'];
$app2=json_decode(file_get_contents("http://irapi.ir/cafebazaar/download.php?p=$p1in2"),true);
$applink2=$app2['link'];
$appinfo2=$app2['info'];
$appinstal2=$appinfo2['active-installs'];
$appc2=$appinfo2['Category'];
$apps2=$appinfo2['Size'];
$appv2=$appinfo2['Version'];
$appd2=$appinfo2['Description'];
//3
$nameappin3 = file_get_contents('data/'.$chatid.'/nameapp.txt');
$cafebazarin3=json_decode(file_get_contents("http://irapi.ir/cafebazaar/search.php?text=$nameappin3"),true);
$s1in3=$cafebazarin3['2'];
$p1in3=$s1in3['packname'];
$icon3=$s1in3['icon'];
$app3=json_decode(file_get_contents("http://irapi.ir/cafebazaar/download.php?p=$p1in3"),true);
$applink3=$app3['link'];
$appinfo3=$app3['info'];
$appinstal3=$appinfo3['active-installs'];
$appc3=$appinfo3['Category'];
$apps3=$appinfo3['Size'];
$appv3=$appinfo3['Version'];
$appd3=$appinfo3['Description'];
//4
$nameappin4 = file_get_contents('data/'.$chatid.'/nameapp.txt');
$cafebazarin4=json_decode(file_get_contents("http://irapi.ir/cafebazaar/search.php?text=$nameappin4"),true);
$s1in4=$cafebazarin4['3'];
$p1in4=$s1in4['packname'];
$icon4=$s1in4['icon'];
$app4=json_decode(file_get_contents("http://irapi.ir/cafebazaar/download.php?p=$p1in4"),true);
$applink4=$app4['link'];
$appinfo4=$app4['info'];
$appinstal4=$appinfo4['active-installs'];
$appc4=$appinfo4['Category'];
$apps4=$appinfo4['Size'];
$appv4=$appinfo4['Version'];
$appd4=$appinfo4['Description'];
//5
$nameappin5 = file_get_contents('data/'.$chatid.'/nameapp.txt');
$cafebazarin5=json_decode(file_get_contents("http://irapi.ir/cafebazaar/search.php?text=$nameappin5"),true);
$s1in5=$cafebazarin5['4'];
$p1in5=$s1in5['packname'];
$icon5=$s1in5['icon'];
$app5=json_decode(file_get_contents("http://irapi.ir/cafebazaar/download.php?p=$p1in5"),true);
$applink5=$app5['link'];
$appinfo5=$app5['info'];
$appinstal5=$appinfo5['active-installs'];
$appc5=$appinfo5['Category'];
$apps5=$appinfo5['Size'];
$appv5=$appinfo5['Version'];
$appd5=$appinfo5['Description'];
//6
$nameappin6 = file_get_contents('data/'.$chatid.'/nameapp.txt');
$cafebazarin6=json_decode(file_get_contents("http://irapi.ir/cafebazaar/search.php?text=$nameappin6"),true);
$s1in6=$cafebazarin5['5'];
$p1in6=$s1in6['packname'];
$icon6=$s1in6['icon'];
$app6=json_decode(file_get_contents("http://irapi.ir/cafebazaar/download.php?p=$p1in6"),true);
$applink6=$app6['link'];
$appinfo6=$app6['info'];
$appinstal6=$appinfo6['active-installs'];
$appc6=$appinfo6['Category'];
$apps6=$appinfo6['Size'];
$appv6=$appinfo6['Version'];
$appd6=$appinfo6['Description'];
//7
$nameappin7 = file_get_contents('data/'.$chatid.'/nameapp.txt');
$cafebazarin7=json_decode(file_get_contents("http://irapi.ir/cafebazaar/search.php?text=$nameappin7"),true);
$s1in7=$cafebazarin7['6'];
$p1in7=$s1in7['packname'];
$icon7=$s1in7['icon'];
$app7=json_decode(file_get_contents("http://irapi.ir/cafebazaar/download.php?p=$p1in7"),true);
$applink7=$app7['link'];
$appinfo7=$app7['info'];
$appinstal7=$appinfo7['active-installs'];
$appc7=$appinfo7['Category'];
$apps7=$appinfo7['Size'];
$appv7=$appinfo7['Version'];
$appd7=$appinfo7['Description'];
//8
$nameappin8 = file_get_contents('data/'.$chatid.'/nameapp.txt');
$cafebazarin8=json_decode(file_get_contents("http://irapi.ir/cafebazaar/search.php?text=$nameappin8"),true);
$s1in8=$cafebazarin8['7'];
$p1in8=$s1in8['packname'];
$icon8=$s1in8['icon'];
$app8=json_decode(file_get_contents("http://irapi.ir/cafebazaar/download.php?p=$p1in8"),true);
$applink8=$app8['link'];
$appinfo8=$app8['info'];
$appinstal8=$appinfo8['active-installs'];
$appc8=$appinfo8['Category'];
$apps8=$appinfo8['Size'];
$appv8=$appinfo8['Version'];
$appd8=$appinfo8['Description'];
//9
$nameappin9 = file_get_contents('data/'.$chatid.'/nameapp.txt');
$cafebazarin9=json_decode(file_get_contents("http://irapi.ir/cafebazaar/search.php?text=$nameappin9"),true);
$s1in9=$cafebazarin9['8'];
$p1in9=$s1in9['packname'];
$icon9=$s1in9['icon'];
$app9=json_decode(file_get_contents("http://irapi.ir/cafebazaar/download.php?p=$p1in9"),true);
$applink9=$app9['link'];
$appinfo9=$app9['info'];
$appinstal9=$appinfo9['active-installs'];
$appc9=$appinfo9['Category'];
$apps9=$appinfo9['Size'];
$appv9=$appinfo9['Version'];
$appd9=$appinfo9['Description'];
//10
$nameappin10 = file_get_contents('data/'.$chatid.'/nameapp.txt');
$cafebazarin10=json_decode(file_get_contents("http://irapi.ir/cafebazaar/search.php?text=$nameappin10"),true);
$s1in10=$cafebazarin10['9'];
$p1in10=$s1in10['packname'];
$icon10=$s1in10['icon'];
$app10=json_decode(file_get_contents("http://irapi.ir/cafebazaar/download.php?p=$p1in10"),true);
$applink10=$app10['link'];
$appinfo10=$app10['info'];
$appinstal10=$appinfo10['active-installs'];
$appc10=$appinfo10['Category'];
$apps10=$appinfo10['Size'];
$appv10=$appinfo10['Version'];
$appd10=$appinfo10['Description'];
//-----------------------------------------------------------------------------------------
//فانکشن ها : 
function SendMessage($chat_id, $text){
MrPHPBot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function sendAction($chat_id, $action){
MrPHPBot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
function Forward($berekoja,$azchejaei,$kodompayam)
{
MrPHPBot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
//-----------------------------------------------------------------------------------------
if($textmassage=="/start"){
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام $firstname\nبه ربات دانلود از کافه بازار خوش اومدی\nتو میتونی با این ربات برنامه های کافه بازار رو  دانلود کنی برای اینکار کافیه برروی گزینه جست و جو کلیک کنی ونام برنامه مورد نظر خودت رو بفرستی\nتوجه : این ربات نمیتواند برنامه های پولی رو دانلود کند\n@DCafeBazarBot",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"جست و جو"],['text'=>"درباره ما"]
	],
  [
	['text'=>"دیگر ربات ها"]
	],
	]
	])
	]);
	}elseif($textmassage=="لغو"){
 save("data/$from_id/file.txt","none");
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عملیات لغو شد :",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"جست و جو"],['text'=>"درباره ما"]
	],
  [
	['text'=>"دیگر ربات ها"]
	],
	]
	])
	]);
	}elseif($data=="back2"){
 save("data/$from_id/file.txt","none");
MrPHPBot('sendmessage',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"عملیات لغو شد :",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"جست و جو"],['text'=>"درباره ما"]
	],
  [
	['text'=>"دیگر ربات ها"]
	],
	]
	])
	]);
	}
 elseif($textmassage=="جست و جو"){
  sendAction($chat_id, 'typing');
  save("data/$from_id/file.txt","cafe");
  	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"نام برنامه مورد نطر خود را وارد کنید :",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"لغو"]
	],
	]
	])
	]);
	}elseif($step=="cafe"){  
save("data/$from_id/nameapp.txt","$textmassage");
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"انتخاب کنید :",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"لغوعملیات",'callback_data'=>'back2'],['text'=>"لیست برنامه ها",'callback_data'=>'cafe1']
 ],
	]
	])
	]);
	}
elseif($data=="cafe1"){  
save("data/$from_id/file.txt","none");
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"لیست برنامه هایی که یافت شد :",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"$n1",'callback_data'=>'app1'],['text'=>"$n2",'callback_data'=>'app2']
 ],
  [
 ['text'=>"$n3",'callback_data'=>'app3'],['text'=>"$n4",'callback_data'=>'app4']
 ],
  [
 ['text'=>"$n5",'callback_data'=>'app5'],['text'=>"$n6",'callback_data'=>'app6']
 ],
  [
 ['text'=>"$n7",'callback_data'=>'app7'],['text'=>"$n8",'callback_data'=>'app8']
 ],
  [
 ['text'=>"$n9",'callback_data'=>'app9'],['text'=>"$n10",'callback_data'=>'app10']
 ],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key']
 ],
	]
	])
	]);
	}elseif($data=="bar"){  
save("data/$from_id/file.txt","none");
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"برگشتیم ;",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"$n1",'callback_data'=>'app1'],['text'=>"$n2",'callback_data'=>'app2']
 ],
  [
 ['text'=>"$n3",'callback_data'=>'app3'],['text'=>"$n4",'callback_data'=>'app4']
 ],
  [
 ['text'=>"$n5",'callback_data'=>'app5'],['text'=>"$n6",'callback_data'=>'app6']
 ],
  [
 ['text'=>"$n7",'callback_data'=>'app7'],['text'=>"$n8",'callback_data'=>'app8']
 ],
  [
 ['text'=>"$n9",'callback_data'=>'app9'],['text'=>"$n10",'callback_data'=>'app10']
 ],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key']
 ],
	]
	])
	]);
	}
 elseif($data=="app1"){
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"لینک برنامه در کافه بازار :\nhttp://cafebazaar.ir/app/$p1in1/?l=fa\n➖➖➖\nتعداد دانلود :\n $appinstal1\n➖➖➖\nدسته :\n$appc1\n➖➖➖\nسایز :\n$apps1\n➖➖➖\nورژن :\n$appv1\n➖➖➖\nتوضیحاتی درباره برنامه :\n$appd1\n\n@DCafeBazarBot",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
        [
	['text'=>"دانلود مستقیم",'url'=>"$applink1"],['text'=>"مشاهده در کافه بازار",'url'=>"http://cafebazaar.ir/app/$p1in1/?l=fa"]
	],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key'],['text'=>"برگشت",'callback_data'=>'bar']
 ],
	]
	])
	]);
	}elseif($data=="app2"){
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"لینک برنامه در کافه بازار :\nhttp://cafebazaar.ir/app/$p1in2/?l=fa\n➖➖➖\nتعداد دانلود :\n $appinstal2\n➖➖➖\nدسته :\n$appc2\n➖➖➖\nسایز :\n$apps2\n➖➖➖\nورژن :\n$appv2\n➖➖➖\nتوضیحاتی درباره برنامه :\n$appd2\n\n@DCafeBazarBot",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
        [
	['text'=>"دانلود مستقیم",'url'=>"$applink2"],['text'=>"مشاهده در کافه بازار",'url'=>"http://cafebazaar.ir/app/$p1in2/?l=fa"]
	],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key'],['text'=>"برگشت",'callback_data'=>'bar']
 ],
	]
	])
	]);
	}elseif($data=="app3"){
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"لینک برنامه در کافه بازار :\nhttp://cafebazaar.ir/app/$p1in3/?l=fa\n➖➖➖\nتعداد دانلود :\n $appinstal3\n➖➖➖\nدسته :\n$appc3\n➖➖➖\nسایز :\n$apps3\n➖➖➖\nورژن :\n$appv3\n➖➖➖\nتوضیحاتی درباره برنامه :\n$appd3\n\n@DCafeBazarBot",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
        [
	['text'=>"دانلود مستقیم",'url'=>"$applink3"],['text'=>"مشاهده در کافه بازار",'url'=>"http://cafebazaar.ir/app/$p1in3/?l=fa"]
	],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key'],['text'=>"برگشت",'callback_data'=>'bar']
 ],
	]
	])
	]);
	}elseif($data=="app4"){
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"لینک برنامه در کافه بازار :\nhttp://cafebazaar.ir/app/$p1in4/?l=fa\n➖➖➖\nتعداد دانلود :\n $appinstal4\n➖➖➖\nدسته :\n$appc4\n➖➖➖\nسایز :\n$apps4\n➖➖➖\nورژن :\n$appv4\n➖➖➖\nتوضیحاتی درباره برنامه :\n$appd4\n\n@DCafeBazarBot",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
        [
	['text'=>"دانلود مستقیم",'url'=>"$applink4"],['text'=>"مشاهده در کافه بازار",'url'=>"http://cafebazaar.ir/app/$p1in4/?l=fa"]
	],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key'],['text'=>"برگشت",'callback_data'=>'bar']
 ],
	]
	])
	]);
	}elseif($data=="app5"){
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"لینک برنامه در کافه بازار :\nhttp://cafebazaar.ir/app/$p1in5/?l=fa\n➖➖➖\nتعداد دانلود :\n $appinstal5\n➖➖➖\nدسته :\n$appc5\n➖➖➖\nسایز :\n$apps5\n➖➖➖\nورژن :\n$appv5\n➖➖➖\nتوضیحاتی درباره برنامه :\n$appd5\n\n@DCafeBazarBot",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
        [
	['text'=>"دانلود مستقیم",'url'=>"$applink5"],['text'=>"مشاهده در کافه بازار",'url'=>"http://cafebazaar.ir/app/$p1in5/?l=fa"]
	],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key'],['text'=>"برگشت",'callback_data'=>'bar']
 ],
	]
	])
	]);
	}elseif($data=="app6"){
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"لینک برنامه در کافه بازار :\nhttp://cafebazaar.ir/app/$p1in6/?l=fa\n➖➖➖\nتعداد دانلود :\n $appinstal6\n➖➖➖\nدسته :\n$appc6\n➖➖➖\nسایز :\n$apps6\n➖➖➖\nورژن :\n$appv6\n➖➖➖\nتوضیحاتی درباره برنامه :\n$appd6\n\n@DCafeBazarBot",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
        [
	['text'=>"دانلود مستقیم",'url'=>"$applink6"],['text'=>"مشاهده در کافه بازار",'url'=>"http://cafebazaar.ir/app/$p1in6/?l=fa"]
	],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key'],['text'=>"برگشت",'callback_data'=>'bar']
 ],
	]
	])
	]);
	}elseif($data=="app7"){
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"لینک برنامه در کافه بازار :\nhttp://cafebazaar.ir/app/$p1in7/?l=fa\n➖➖➖\nتعداد دانلود :\n $appinstal7\n➖➖➖\nدسته :\n$appc7\n➖➖➖\nسایز :\n$apps7\n➖➖➖\nورژن :\n$appv7\n➖➖➖\nتوضیحاتی درباره برنامه :\n$appd7\n\n@DCafeBazarBot",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
        [
	['text'=>"دانلود مستقیم",'url'=>"$applink7"],['text'=>"مشاهده در کافه بازار",'url'=>"http://cafebazaar.ir/app/$p1in7/?l=fa"]
	],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key'],['text'=>"برگشت",'callback_data'=>'bar']
 ],
	]
	])
	]);
	}
 elseif($data=="app8"){
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"لینک برنامه در کافه بازار :\nhttp://cafebazaar.ir/app/$p1in8/?l=fa\n➖➖➖\nتعداد دانلود :\n $appinstal8\n➖➖➖\nدسته :\n$appc8\n➖➖➖\nسایز :\n$apps8\n➖➖➖\nورژن :\n$appv8\n➖➖➖\nتوضیحاتی درباره برنامه :\n$appd8\n\n@DCafeBazarBot",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
        [
	['text'=>"دانلود مستقیم",'url'=>"$applink8"],['text'=>"مشاهده در کافه بازار",'url'=>"http://cafebazaar.ir/app/$p1in8/?l=fa"]
	],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key'],['text'=>"برگشت",'callback_data'=>'bar']
 ],
	]
	])
	]);
	}elseif($data=="app9"){
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"لینک برنامه در کافه بازار :\nhttp://cafebazaar.ir/app/$p1in9/?l=fa\n➖➖➖\nتعداد دانلود :\n $appinstal9\n➖➖➖\nدسته :\n$appc9\n➖➖➖\nسایز :\n$apps9\n➖➖➖\nورژن :\n$appv9\n➖➖➖\nتوضیحاتی درباره برنامه :\n$appd9\n\n@DCafeBazarBot",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
        [
	['text'=>"دانلود مستقیم",'url'=>"$applink9"],['text'=>"مشاهده در کافه بازار",'url'=>"http://cafebazaar.ir/app/$p1in9/?l=fa"]
	],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key'],['text'=>"برگشت",'callback_data'=>'bar']
 ],
	]
	])
	]);
	}elseif($data=="app10"){
	MrPHPBot('editMessagetext',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"لینک برنامه در کافه بازار :\nhttp://cafebazaar.ir/app/$p1in10/?l=fa\n➖➖➖\nتعداد دانلود :\n $appinstal10\n➖➖➖\nدسته :\n$appc10\n➖➖➖\nسایز :\n$apps10\n➖➖➖\nورژن :\n$appv10\n➖➖➖\nتوضیحاتی درباره برنامه :\n$appd10\n\n@DCafeBazarBot",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
        [
	['text'=>"دانلود مستقیم",'url'=>"$applink10"],['text'=>"مشاهده در کافه بازار",'url'=>"http://cafebazaar.ir/app/$p1in10/?l=fa"]
	],
 [
 ['text'=>"کیبورد معممولی",'callback_data'=>'key'],['text'=>"برگشت",'callback_data'=>'bar']
 ],
	]
	])
	]);
	}
  elseif($data=="key"){
   save("data/$fm/file.txt","none");
  sendAction($chatid, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"به بخش کیبورد معمولی ربات وارد شدید\nگزینه مورد نظر خود را انتخاب کنید :",
  'parse_mode'=>'MarkDown',
 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"جست و جو"],['text'=>"درباره ما"]
	],
  [
	['text'=>"دیگر ربات ها"]
	],
	]
	])
	]);
	}
 elseif($textmassage=="درباره ما"){
 save("data/$from_id/file.txt","none");
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"توضیحاتی درباره ربات :این ربات با وب سرویس تیم برنامه نویسی کرول ساخته شده است و میتواند اخرین ورژن برنامه هایی که شما میخواهید را برایتان بفرستد.\nنکته : برنامه های پولی را نمیتوان دانلود کرد\nبرنامه نویس : محمدحسین حیدری\nزبان برنامه نویسی : *php*\nتعداد لاین : *500*\n@PowerFulTeam",
  'parse_mode'=>'MarkDown',
	]);
	}
  elseif($textmassage=="دیگر ربات ها"){
 save("data/$from_id/file.txt","none");
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"ربات صفحه تلگرامی :\n@PageTelegramBot\nربات حرف ناشناس به من :\n@HarfNashenasBemanBot\nربات مدیریت حرفه ای کانال و گروه :\n@DenyRoBot\nربات فروشگاه سورس :\n@SorceShopBot\nربات درباره تیم :\n@MrPHPINFOBot\nربات تفریحی اقای پی اچ پی :\n@MrPHPBot\nتمام ربات ها با زبان برنامه نویسی پی اچ پی نوشته شده اند.\nبرنامه نویس : محمدحسین حیدری",
  'parse_mode'=>'MarkDown',
	]);
	}
$users = file_get_contents('data/username.txt');
$members = explode("\n", $users);
if (!in_array($username, $members)) {
    $adduser = file_get_contents('data/username.txt');
    $adduser .=$username . "\n";
    file_put_contents('data/username.txt', $adduser);
}$users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
}elseif($textmassage=="آمار ربات"){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"تعداد کاربران : $mmemcount",
                'hide_keyboard'=>true,
		]);
		}elseif ($textmassage == 'ارسال به همه' && $from_id == $Dev) {
save("data/$from_id/file.txt","sendtoall");
         MrPHPBot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'sendtoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","to");
     MrPHPBot('sendmessage',[
          'chat_id'=>$memuser,
          'text'=>$textmassage,
    'parse_mode'=>'MarkDown'
        ]);
    }
} elseif ($textmassage == 'فروارد همگانی' && $from_id == $Dev) {
save("data/$from_id/file.txt","fortoall");
         MrPHPBot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'fortoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","none");
Forward($memuser, $chat_id,$message_id);
    }
}        
?>
