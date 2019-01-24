<?php

$pre = 'https://nominatim.openstreetmap.org/reverse?format=json&';
$aft = '&zoom=18&addressdetails=1';


//echo '<pre>';print_r($_REQUEST);echo '</pre>';

$resArr = array();


    foreach ($_REQUEST['data'] as $k => $v){
        if( $curl = curl_init() ) {
            $userAgent = 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2';
            curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
            curl_setopt($curl, CURLOPT_REFERER, $_SERVER['HTTP_REFERER']);
            curl_setopt($curl, CURLOPT_URL, $pre . 'lat=' . $v[0] . '&lon=' . $v[1] . $aft);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $out = curl_exec($curl);
            curl_close($curl);
        }
        $resTemp = json_decode($out, true);
        $resArr[$k] = $resTemp['address']['road'] . ', ' . $resTemp['address']['house_number'];
    }


//echo '<pre>';print_r($resArr);echo '</pre>';
print_r(json_encode($resArr, JSON_UNESCAPED_UNICODE));
//print_r(json_encode($resArr));