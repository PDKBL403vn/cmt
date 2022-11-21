<?php
if (!file_exists('noidung.txt')){
	$k = fopen("noidung.txt","a+");
}
error_reporting(0);

session_start();


date_default_timezone_set("Asia/Ho_Chi_Minh");
$end="\033[0m";
$black="\033[0;30m";
$blackb="\033[1;30m";
$white="\033[0;37m";
$whiteb="\033[1;37m";
$red="\033[0;31m";
$redb="\033[1;31m";
$green="\033[0;32m";
$greenb="\033[1;32m";
$yellow="\033[0;33m";
$yellowb="\033[1;33m";
$syan="\033[1;36m";
$blue="\033[0;34m";
$blueb="\033[1;34m";
$purple="\033[0;35m";
$purpleb="\033[1;35m";
$lightblue="\033[0;36m";
$lightblue="\033[1;35m";
$lightblueb="\033[1;36m";
$hong="\033[1;95m";
$input = array($d2="\033[1;36m",$tmd3="\033[1;37m",$tmd4="\033[1;37m",$tmd5="\033[0;31m",$tmd6="\033[1;31m",$tmd7="\033[0;32m",$tmd8="\033[1;32m",$tmd9="\033[0;33m",$tmd10="\033[1;33m",$tmd11="\033[0;34m",$tmd12="\033[1;34m",$tmd13="\033[0;35m",$tmd14="\033[1;35m",$tmd15="\033[0;36m",$tmd16="\033[1;36m");
$rand_keys = array_rand($input, 10);
$input = array($tmd1="\033[1;46m",$tmd2="\033[1;36m",$tmd3="\033[1;37m",$tmd4="\033[1;37m",$tmd5="\033[0;31m",$tmd6="\033[1;31m",$tmd7="\033[0;32m",$tmd8="\033[1;32m",$tmd9="\033[0;33m",$tmd10="\033[1;33m",$tmd11="\033[0;34m",$tmd12="\033[1;34m",$tmd13="\033[0;35m",$tmd14="\033[1;35m",$tmd15="\033[0;36m",$tmd16="\033[1;36m");
echo" \n";
if(!file_exists('noidung.txt')){
    exit("Không Tìm Thấy File noidung.txt");
}else{
    $mess= file_get_contents('noidung.txt');
}

$khotoken = [];
$khocookie = [];
	echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Cookie: $vang";
		array_push($khocookie,trim(fgets(STDIN)));
	foreach ($khocookie as $value) {
		$token = cover_cookie_token($value);
		if ($token != 'die'){
			array_push($khotoken,array('access_token' => $token, 'cookie' => $value));
		}
	}
$dulieutong = [];
foreach ($khotoken as $value){

	if(is_array($value)){
		$data = get_info($value['access_token']);
		$cookie = $value['cookie'];
		$token = $value['access_token'];
	}else{
		$cookie = null;
		$data = get_info($value);
		$token = $value;
	}
	
	if(strpos($data, 'name')){
		$data = json_decode($data,true);
		array_push($dulieutong, array('id' => $data['id'], 'name' => $data['name'], 'access_token' => $token, 'cookie' => $cookie));
	}
}
if (count($dulieutong) == 0){
	echo "\033[1;37m~\033[1;31m Tất Cả Cookie Bị Die\n";
	exit;
}
sleep(2);
@system('clear');

$list_nv = [];
echo "          \033[1;47;35mHãy Thêm Nội Dung Vào File:\033[1;34m noidung.txt\033[0m\n";
echo $do."[".$luc."●".$do."] ".$luc."Bạn muốn Spam Ở Đâu\n".$do."[".$luc."●".$do."] ".$vang."1 ".$trang."Bài Viết Bạn Bè\n".$do."[".$luc."●".$do."] ".$vang."2 ".$trang."Nhóm (Đã Tham Gia)\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập: $vang";
	$nhap = trim(fgets(STDIN));
	if($nhap == "1"){
	    $link_lay_job = "https://mbasic.facebook.com";
	} else if($nhap == "2"){
echo "\033[1;32m●\033[1;31m Ví Dụ:\n\033[1;33mhttps://m.facebook.com\n\033[1;37m Thay Thành\n\033[1;33mhttps://mbasic.facebook.com\n";
	    echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Link Nhóm (mbasic): $vang";
	    $link_lay_job = trim(fgets(STDIN));
	}else{
	    exit($do."\033[1;37m~\033[1;31m Lựa Chọn Không Xác Định\n");
	}
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Link Ảnh: $vang";
	    $img = trim(fgets(STDIN));
while(true){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Delay Min: $vang";
$delaymin = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Delay Max: $vang";

$delaymax = trim(fgets(STDIN));
$delay = rand($delaymin,$delaymax);
if($delaymax == "" or $delaymin == ""){
    $delay = 10;
}
array_push($list_nv, array('delay' => $delay));
break;
}
@system("clear");
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tool Auto Spam Ảnh By Tên Anh Em\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Số Cookie Đang Chạy Là: ".$vang.$socookie."\n";
echo "\033[1;93m   ================================================\n";
$dem = 0;
while(true){
foreach ($list_nv as $value) {
		for($xz=0;$xz<count($dulieutong);$xz++){
			$idfb = $dulieutong[$xz]['id'];
			$name = $dulieutong[$xz]['name'];
			$cookie = $dulieutong[$xz]['cookie'];
			$access_token = $dulieutong[$xz]['access_token'];
			if($access_token){
				echo $vang."Đang Dùng FB: ".$luc.$name." ".$vang."ID: ".$luc.$idfb."".$res."\n";
			}else{
				echo $do."[".$luc."●".$do."] ● ".$xnhac."[".date("H:i")."]".$do." ● ".$vang."[".$xnhac.$name.$vang."]".$do." ● ".$vang."[Dùng Nick FB Thất Bại]\n";
			}
			sleep(3);
			$list_job = get_job($cookie,$link_lay_job);
foreach ($list_job[1] as $link){
    if(strpos($link, '#footer_action_list') !== false){
        $cut1 = explode("story_fbid=",$link)[1];
        $done = explode("&amp;",$cut1)[0];
			$uid = $done;
			$cmt = cmt($uid,$mess,$img,$access_token);
			if($cmt){
			    $dem = $dem +1;
			    $t=$vang."".$vang."[".$vang.$dem.$vang."]".$do." ● ".$xnhac.date("H:i")."\033[1;33m CMT".$do." ●".$vang." Thành Công".$do." ● ".$vang.$uid."\n";
			    for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];
			  usleep(3000);
			    }
			}else{
			    $t=$vang."[".$vang.$dem.$vang."]".$do." ● ".$xnhac.date("H:i")."".$do." ●".$vang." ERROR".$do." ● [CMT Thất Bại]\n";

			for($i=11;$i<(strlen($t)+1);$i++){echo $t[$i];

			  usleep(3000);
			}
			}
			delay_time($value["delay"]);
			
		}	
		}
}
}
}
function get_info($access_token){

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/me/?fields=id,name&access_token=".$access_token);
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: graph.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	$access = curl_exec($ch);
	curl_close($ch);
	return $access;

}
function get_job($cookie, $url){
    $head[] = "Host: mbasic.facebook.com";
    $head[] = "Connection: keep-alive";
	$head[] = "save-data:on";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	$head[] = 'user-agent:Mozilla/5.0 (Linux; Android 10; Joy 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36';
    $head[] = "cookie: ".$cookie;
$opts = array('http' =>
    array(
        'method'  => 'GET',
        'header'  => $head
    )
);
$context  = stream_context_create($opts);
$result = file_get_contents($url, false, $context);
	preg_match_all('/<a href="(.*?)"/',$result,$list_job);
	return $list_job;
	}
function cover_cookie_token($cookie){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
	$head[] = "Connection: keep-alive";
	$head[] = "Keep-Alive: 300";
	$head[] = "authority: m.facebook.com";
	$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
	$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
	$head[] = "cache-control: max-age=0";
	$head[] = "upgrade-insecure-requests: 1";
	$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-fetch-site: none";
	$head[] = "sec-fetch-mode: navigate";
	$head[] = "sec-fetch-user: ?1";
	$head[] = "sec-fetch-dest: document";
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
	curl_setopt($ch, CURLOPT_ENCODING, '');
	curl_setopt($ch, CURLOPT_COOKIE, $cookie);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
	$access = curl_exec($ch);
	curl_close($ch);
	if (isset(explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0])){
		return explode('\",\"useLocalFilePreview',explode('accessToken\":\"', $access)[1])[0];
	}else{
		return "die";
	}
}
function cmt($idbv,$mess,$img,$access){
$url = "https://graph.facebook.com/$idbv/comments";
$data = array(
    "access_token" => $access,
    "message" => $mess,
    "attachment_url" => $img
    );
$header = array(
    "user-agent:Mozilla/5.0 (Linux; Android 10; Joy 3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Mobile Safari/537.36"
    );
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$json = json_decode($result,true);
return $json;
}
function delay_time($delay){
    for($u=$delay; $u> -1; $u--){
        echo "\033[1;33m~  Vui lòng đợi ~~> $u giây "."\r";
        sleep(1);
    }
}