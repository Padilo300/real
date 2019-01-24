<?php

//echo '<pre>';print_r($_REQUEST);echo '</pre>';
//echo '<pre>';print_r($_SERVER);echo '</pre>';

$wpStr = explode('driving/', $_SERVER['SCRIPT_URL'])[1];

$domain = 'http://route.insidergroup.pro/route/v1/driving/'.$wpStr.'?overview=false&alternatives=true&steps=true';
//echo '<pre>';print_r($domain);echo '</pre>';

if( $curl = curl_init() ) {
    $userAgent = 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2';
    curl_setopt( $curl, CURLOPT_USERAGENT, $userAgent );
    curl_setopt($curl, CURLOPT_REFERER, $_SERVER['HTTP_REFERER']);
    curl_setopt($curl, CURLOPT_URL, $domain);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $out = curl_exec($curl);
    curl_close($curl);
}
//echo json_encode($out,1);
?>

<?

print_r($out);
