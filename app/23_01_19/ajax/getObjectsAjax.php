<?php

//echo '<pre>';print_r($_REQUEST);echo '</pre>';

//$query = 'https://overpass-api.de/api/interpreter?data=[out:json][timeout:25];(node[%22amenity%22=%22'.$_REQUEST['objType'].'%22](around:'.$_REQUEST['radius'].','.$_REQUEST['coordLat'].','.$_REQUEST['coordLon'].'););out%20body;>;out%20skel%20qt;';

$query = 'https://overpass-api.de/api/interpreter?data=[out:json][timeout:25];(node[%22amenity%22=%22'.$_REQUEST['objType'].'%22](around:5000,48.4439688,34.9975673);way[%22amenity%22=%22'.$_REQUEST['objType'].'%22](around:5000,48.4439688,34.9975673);relation[%22amenity%22=%22'.$_REQUEST['objType'].'%22](around:5000,48.4439688,34.9975673););out%20body;>;out%20skel%20qt;';
//echo '<pre>';print_r($query);echo '</pre>';
$resArr = array();


    if( $curl = curl_init() ) {
        $userAgent = 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2';
        curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);
        curl_setopt($curl, CURLOPT_REFERER, $_SERVER['HTTP_REFERER']);
        curl_setopt($curl, CURLOPT_URL, $query);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $out = curl_exec($curl);
        curl_close($curl);
    }
    //$resTemp = json_decode($out, true);
    //$resArr[$k] = $resTemp;
print_r($out);

$nodesArr = array();
$nodesObjArr = array();
$relationsArr = array();
$waysArr = array();

foreach ($resTemp['elements'] as $key => $val){
    if($val['type'] == 'node'){
        $name = false;
        if($val['tags']['name']){
            $name =  $val['tags']['name'];
        }
        if($val['tags']['name:ru']){
            $name =  $val['tags']['name:ru'];
        }
        if($val['tags']['name:uk']){
            $name =  $val['tags']['name:uk'];
        }

        if($name == false){
            $nodesArr[$val['id']]['lat'] = $val['lat'];
            $nodesArr[$val['id']]['lon'] = $val['lon'];
            $nodesArr[$val['id']]['tags'] = $val['tags'];
        }else{
            $nodesObjArr[$val['id']]['lat'] = $val['lat'];
            $nodesObjArr[$val['id']]['lon'] = $val['lon'];
            $nodesObjArr[$val['id']]['tags'] = $val['tags'];
        }
    }elseif($val['type'] == 'relation') {
        $relationsArr[$val['id']]['members'] = $val['members'];
        $relationsArr[$val['id']]['tags'] = $val['tags'];
    }elseif($val['type'] == 'way') {
        $waysArr[$val['id']]['nodes'] = $val['nodes'];
        $waysArr[$val['id']]['tags'] = $val['tags'];
    }
}
$arRes = array('nodes' => $nodesArr, 'nodesObj' => $nodesObjArr, 'relations' => $relationsArr, 'ways' => $waysArr);

//echo '<pre>';print_r(count($nodesArr));echo '</pre>';
//echo '<pre>';print_r(count($nodesObjArr));echo '</pre>';
//echo '<pre>';print_r(count($relationsArr));echo '</pre>';
//echo '<pre>';print_r($arRes);echo '</pre>';
//print_r(json_encode($arRes, JSON_UNESCAPED_UNICODE));



//$cn = 0;
//foreach ($resTemp['elements'] as $key => $val){
//   $name = '';
//   $check = false;
////   echo '<pre>';print_r($val['tags']);echo '</pre>';
//   $name = $val['tags']['name'];
//
//   if($val['tags']['name:ru']) {
//       $name = $val['tags']['name:ru'];
//   }
//   if($val['tags']['name:uk']) {
//       $name = $val['tags']['name:uk'];
//   }
//    //echo '<pre>';print_r($name);echo '</pre>';
//
//    if($name != ''){
//        $resArr[$cn]['lat'] = $val['lat'];
//        $resArr[$cn]['lon'] = $val['lon'];
//        $resArr[$cn]['name'] = $name;
//        $cn++;
//    }else{
//        continue;
//    }
//}

//echo '<pre>';print_r($resArr);echo '</pre>';
//print_r(json_encode($resArr, JSON_UNESCAPED_UNICODE));
//print_r(json_encode($resArr));