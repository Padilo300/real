<?php

function execCurlBitrix($method, $domain, $var) {
        $queryUrl = 'https://' . $domain . '/rest/' . $method . '.json';
        $queryData = http_build_query($var);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $queryUrl,
            CURLOPT_POSTFIELDS => $queryData,
        ));

        $result = curl_exec($curl);
        $result = json_decode($result, true);
        curl_close($curl);

        return $result;
    }
