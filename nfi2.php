<?php error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require base64_decode('ZGF0YS9FeGNlcHRpb24ucGhw');
require base64_decode('ZGF0YS9QSFBNYWlsZXIucGhw');
require base64_decode('ZGF0YS9DU1YucGhw');
require base64_decode('ZnVuY3QucGhw');


echo "                       \e[0m\e[1;91m >>SAYA HEBAT KARNA BELAJAR<< \e[0m\r\n";
echo "                       \e[0m\e[1;91m  >>SAYA TAU KARNA MEMBACA<<\e[0m\r\n";
echo "                       \e[0m\e[1;91m >>SAYA MAHIR KARNA PRAKTIK<< \e[0m\r\n";
echo "                       \e[0m\e[1;91m    >> ( TRY AND ERROR ) <<  \e[0m\r\n";
echo "                       \e[0m\e[1;91m >>TRUST ME , KNOWLEDGE IS KING<<   \e[0m\r\n";
 echo "                       \e[0m\e[1;91m    >> -- NFI PROJECTS -- <<  \e[0m\r\n";
echo "\r\n";
echo "\e[1;91m           ╔══════════════════════════════════════════════════════╗\e[1;91m\r\n";
echo "\e[1;91m           ║    \e[1;91m      NFI SENDER V.5.0 - HOTMAIL KILLER       \e[1;91m    ║   \e[0m\r\n";
echo "\e[1;91m           ║  \e[1;91m                                        \e[1;91m            ║   \e[0m\r\n";
echo "\e[1;91m           ║  \e[1;91m     If You Would Like To Contact The Provider    \e[1;91m  ║   \e[0m\r\n";
echo "\e[1;91m           ║  \e[1;91m                                        \e[1;91m            ║   \e[0m\r\n";
echo "\e[1;91m           ║          \e[1;91m    Of The NFI You Can Via :   \e[1;91m             ║   \e[0m\r\n";
echo "\e[1;91m           ║  \e[1;91m                                        \e[1;91m            ║   \e[0m\r\n";
echo "\e[1;91m           ║~ \e[1;91mContact Owner :\e[1;91\e[1;91m                                     ║\e[0m\r\n";
echo "\e[1;91m           ║~ \e[1;92mFacebook : \e[1;91mhttps://www.facebook.com/jacks1898       ║\e[0m\r\n";
echo "\e[1;91m           ║~ \e[1;92mWhatsapp : \e[1;91m+6285920713853\e[1;91m                           ║\e[0m\r\n";
echo "\e[1;91m           ╚══════════════════════════════════════════════════════╝\e[1;91m\r\n";
echo "\e[1;91m              \r\n";
echo "\r\n";
$quetionforstartfirst = scrn(base64_decode('Y3JlYXRlIHVzZXIgPyAoIHkvbiApOiA='));
if ($quetionforstartfirst != base64_decode('bg==')) {
	passthru(base64_decode('cGhwIGNzdmdlbi5waHA='));
	echo base64_decode('DQo=');echo base64_decode('DQo=');
	echo base64_decode('QnVsayB5b3UgY3N2IG9uIHJlbGF5IGFkbWluDQo=');
}

$list = file_get_contents(getcwd().base64_decode('L2xpc3Qv').$twice_list[base64_decode('ZmlsZQ==')]) or die(base64_decode('TWFpbGlzdCBub3QgZm91bmQh'));
$list = preg_split(base64_decode('L1xufFxyXG4/Lw=='), $list);
if ($twice_list[base64_decode('cmVtb3ZlZHVwbGljYXRl')] == true) {
	$list = array_unique($list);
}
$list = str_replace(base64_decode('IA=='), '', $list);
$list = preg_grep(base64_decode('L1thLXowLTldKyhbX1wuLV1bYS16MC05XSspKkAoW2EtejAtOV0rKFsuLV1bYS16MC05XSspKikrXC5bYS16XXsyLH0vaQ=='),
        $list);
$list_total = count($list);
$smtpread = file_get_contents(getcwd().base64_decode('L2Nzdi8=').$twice_smtp) or die(base64_decode('U01UUCBGaWxlIG5vdCBmb3VuZCE='));
$smtpread = preg_split(base64_decode('L1xufFxyXG4/Lw=='), $smtpread);
array_shift($smtpread);
$smtpread=array_values(array_filter($smtpread));

echo "\n{$glime}Wait{$clear}";
for ($i=0 ; $i<=4 ; $i++) {
    echo base64_decode('Lg==');
    usleep(600000);
}
echo base64_decode('DQo=');
echo "{$blue}Available ".$list_total." List to sent{$clear}\r\n";
echo base64_decode('DQo=');echo base64_decode('DQo=');
$quetionforstart = scrn(base64_decode('Q29udGludWUgdG8gc2VuZCA/ICggeS9uICk6IA=='));
if ($quetionforstart != base64_decode('eQ==')) {
	exit("{$red}Sender is Stop Working{$clear}\r\n");
}

echo base64_decode('DQo=');echo base64_decode('DQo=');




$no = 1;
$i=0;


$no_send = 1;
$no_list = 1;
$email_split = array_chunk($list, $twice_setting[base64_decode('bWF4')]);
foreach ($email_split as $key => $e_list) {
	$takeawaysmtp = $smtpread[$i%count($smtpread)];
	$taleawayinbox = $twice_inbox[$i%count($twice_inbox)];
	$takesmtp = explode(base64_decode('LA=='), $takeawaysmtp);
	foreach ($e_list as $key2 => $added) {
		echo base64_decode('Ww==').++$key2."] Add {$lime}$added{$clear}\r\n";
	}
	echo "{$blue}Total email List : {$clear}{$yellow}". count($e_list)."{$clear}\r\n";
	$tSend = sendbcc($e_list,$takeawaysmtp,$twice_setting,$taleawayinbox,$twice_header);
	if ($tSend[base64_decode('c3RhdHVz')] == base64_decode('b2s=')) {
		$tStatus = "{$gbreen}Success{$clear}";
	}else{
		$tStatus = "{$red}Failed! Reason :{$clear}".$tSend[base64_decode('aW5mbw==')];
	}
	echo base64_decode('U2VuZGluZyA6IA==').$tStatus;
	echo base64_decode('DQoK');
	$i++;
	$no_send++;
	sleep($twice_setting[base64_decode('ZGVsYXk=')]);
}



function sendbcc($twice_list,$twice_smtp, $twice_setting, $twice_inbox, $twice_header){
		$mail = new PHPMailer(true);
		try {
			$getsmtp = explode(base64_decode('LA=='), $twice_smtp);
		    $mail->SMTPDebug = 0;
		    $mail->isSMTP();
		    $mail->Host = base64_decode('c210cC5nbWFpbC5jb20=');
		    $mail->SMTPAuth = true;
		    $mail->Username = $getsmtp[2];
		    $mail->Password = $getsmtp[3];
		    $mail->SMTPSecure = base64_decode('dGxz');
		    $mail->Port = 587;
		    $mail->Priority = $twice_setting[base64_decode('cHJpb3JpdHk=')];
		    $mail->Encoding = $twice_setting[base64_decode('ZW5jb2Rpbmc=')];
		    $mail->CharSet = $twice_setting[base64_decode('Y2hhcnNldA==')];
		    $mail->setFrom($getsmtp[2], $twice_inbox[base64_decode('Zm5hbWU=')]);
		    if ($twice_inbox[base64_decode('dG8=')] != NULL) {
		    	$mail->addAddress($twice_inbox[base64_decode('dG8=')]);
		    }

		    foreach ($twice_list as $key) {
		    	$mail->addBCC($key);
		    }
		    if ($twice_setting[base64_decode('aW5zZXJ0ZW1haWx0ZXN0')] == true) {
		    	$gettestlist = explode(base64_decode('fA=='), $twice_setting[base64_decode('ZW1haWx0ZXN0')]);
		    	foreach ($gettestlist as $key2) {
		    	$mail->addBCC($key2);
		    	}
		    }
		    if ($twice_setting[base64_decode('aGVhZGVy')] == true){
                    foreach ($twice_header as $mheader) {
                        $twiceheader = explode(base64_decode('fA=='), $mheader);
                        $mail->addCustomHeader($twiceheader[0], $twiceheader[1]);
                    }
            }
		    if ($twice_inbox[base64_decode('YXR0YWNoZmlsZQ==')] != NULL) {
		    	$twice_namepdf = preg_replace_callback(base64_decode('LyMjcmFuZG9tc3RyIyMv'), function ($match)
				    {
				        static $i;
				        $i++;
				        return strtoupper(randstr(8));
				    }
				    , $twice_inbox[base64_decode('YXR0YWNobmFtZQ==')]);
		    	$mail->addAttachment(getcwd().base64_decode('L2ZpbGVzLw==').$twice_inbox[base64_decode('YXR0YWNoZmlsZQ==')], $twice_namepdf);
		    }

		    	##daerah letter
		    	$link = explode(base64_decode('fA=='), $twice_setting[base64_decode('bGluaw==')]);
		    	$letter = file_get_contents(getcwd().base64_decode('L2xldHRlci8=').$twice_inbox[base64_decode('bGV0dGVy')]) or die(base64_decode('TGV0dGVyIG5vdCBmb3VuZCE='));
		    	$letter = str_ireplace(base64_decode('IyNsaW5rIyM='), $link[array_rand($link) ], $letter);
		    	$letter = str_ireplace(base64_decode('IyNyYW5kdWEjIw=='), getuseragent() , $letter);
                $letter = str_ireplace(base64_decode('IyNyYW5kbnVtIyM='), rand(1, 9) , $letter);
                $letter = str_ireplace(base64_decode('IyNyYW5kaXAjIw=='), randip() , $letter);
                $letter = str_ireplace(base64_decode('IyNyYW5kY291bnRyeSMj'), randcountry() , $letter);
                $letter = str_ireplace(base64_decode('IyNyYW5kb3MjIw=='), randos() , $letter);
                $letter = str_ireplace(base64_decode('IyNyYW5kc3RyIyM='), randstr(10) , $letter);
                $letter = str_ireplace(base64_decode('IyNyYW5kc3RyMiMj'), randstr(4) , $letter);
                $letter = str_ireplace(base64_decode('IyNkYXRlIyM='), date(base64_decode('RCwgRiBkLCBZICBnOmkgQQ==')) , $letter);
                $letter = str_ireplace(base64_decode('IyNkYXRlMiMj'), date(base64_decode('RCwgRiBkLCBZ')) , $letter);
                $letter = str_ireplace(base64_decode('IyNkYXRlMyMj'), date(base64_decode('RiBkLCBZICBnOmkgQQ==')) , $letter);
                $letter = xs($letter, base64_decode('IyNudW1zdHIjIw=='));

                ##daerah subject
                $twice_inbox[base64_decode('c3ViamVjdA==')] = preg_replace_callback(base64_decode('LyMjcmFuZHN0ciMjLw=='), function ($match)
				    {
				        static $i;
				        $i++;
				        return strtoupper(randstr(8));
				    }
				    , $twice_inbox[base64_decode('c3ViamVjdA==')]);
                $twice_inbox[base64_decode('c3ViamVjdA==')] = str_ireplace(base64_decode('IyNyYW5kbnVtIyM='), rand(1, 9) , $twice_inbox[base64_decode('c3ViamVjdA==')]);
                // $twice_inbox['subject'] = str_ireplace("##randstr##", randstr(10) , $twice_inbox['subject']);
                // $twice_inbox['subject'] = str_ireplace("##randstr2##", randstr(4) , $twice_inbox['subject']);
                $twice_inbox[base64_decode('c3ViamVjdA==')] = str_ireplace(base64_decode('IyNkYXRlIyM='), date(base64_decode('RCwgRiBkLCBZICBnOmkgQQ==')) , $twice_inbox[base64_decode('c3ViamVjdA==')]);
                $twice_inbox[base64_decode('c3ViamVjdA==')] = str_ireplace(base64_decode('IyNkYXRlMiMj'), date(base64_decode('RCwgRiBkLCBZ')) , $twice_inbox[base64_decode('c3ViamVjdA==')]);
                $twice_inbox[base64_decode('c3ViamVjdA==')] = str_ireplace(base64_decode('IyNkYXRlMyMj'), date(base64_decode('RiBkLCBZICBnOmkgQQ==')) , $twice_inbox[base64_decode('c3ViamVjdA==')]);
		    $mail->isHTML(true);
		    $mail->AllowEmpty = true;
		    $mail->Subject = $twice_inbox[base64_decode('c3ViamVjdA==')];
		    $mail->Body    = $letter;
		    $mail->send();
		    return array(base64_decode('c3RhdHVz') => base64_decode('b2s='), base64_decode('aW5mbw==') => '');
		} catch (Exception $e) {
			return array(base64_decode('c3RhdHVz') => base64_decode('YmFk'), base64_decode('aW5mbw==') => $mail->ErrorInfo);
		}
}
?>