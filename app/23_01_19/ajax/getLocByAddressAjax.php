<?

$req = 'https://nominatim.openstreetmap.org/search';
$jsonAnsw = '?format=json&polygon=1&addressdetails=1';

if($_REQUEST['region']) {
    $region = '/'.urlencode($_REQUEST['region']);//область
}
if($_REQUEST['city']) {
    $city = '/'.urlencode($_REQUEST['city']);//город
}
if($_REQUEST['street']) {
    $street = '/'.urlencode($_REQUEST['street']);//район
}
if($_REQUEST['housenumber']) {
    $housenumber = '/'.urlencode($_REQUEST['housenumber']);//номер дома
}

$queryUrl = $req.$region.$city.$street.$housenumber.$jsonAnsw;
$queryUrl = str_replace('+', '%20', $queryUrl);

if( $curl = curl_init() ) {
    $userAgent = 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2';
    curl_setopt( $curl, CURLOPT_USERAGENT, $userAgent );
    curl_setopt($curl, CURLOPT_REFERER, $_SERVER['HTTP_REFERER']);
    curl_setopt($curl, CURLOPT_URL, $queryUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POST,true);
    $out = curl_exec($curl);
    $err = curl_getinfo($curl);
    curl_close($curl);
}
$out = json_decode($out,1);
//echo '<pre>';print_r($queryUrl);echo '</pre>';
//echo '<pre>';print_r($curl);echo '</pre>';
//echo '<pre>';print_r($out);echo '</pre>';
//echo '<pre>';print_r($err);echo '</pre>';


$poligonPoints = array();
$boundinBox = array();
$coordLat = '';
$coordLon ='';
$popupStr = '';

foreach ($out as $k => $v){
    if($v['class'] == 'building') {
        //echo '<pre>';print_r($v);echo '</pre>';
        foreach ($v['polygonpoints'] as $point){
            $poligonPoints[] = $point;
        }
        $coordLat = $v['lat'];
        $coordLon = $v['lon'];
        foreach ($v['boundingbox'] as $bound){
            $boundinBox[] = $bound;
        }
        foreach ($v['address'] as $kk => $vv) {
            if($kk == 'state'){
                $state = $vv.', ';
            }
            if($kk == 'city'){
                $city = $vv.', ';
            }
            if($kk == 'road'){
                $road = $vv.', ';
            }
            if($kk == 'house_number'){
                $houseNumber = $vv;
            }
            $popupStr = $state. $city. $road. $houseNumber;
        }
    }
}

//echo '<pre>';print_r($poligonPoints);echo '</pre>';
$poligonStr = array();
$cn = 0;
foreach($poligonPoints as $k => $v){
    //echo '<pre>';print_r($v);echo '</pre>';
    $poligonStr[$cn][] = $v[1];
    $poligonStr[$cn][] = $v[0];
    $cn++;
}
//echo '<pre>';print_r($poligonStr);echo '</pre>';
//echo '<pre>';print_r($poligonStr);echo '</pre>';
//echo '<pre>';print_r($coordLat);echo '</pre>';
//echo '<pre>';print_r($coordLon);echo '</pre>';
//echo '<pre>';print_r($popupStr);echo '</pre>';

$resArr = array('poligonPoints' => $poligonStr, 'boundinBox' => $boundinBox, 'coordLat' => $coordLat, 'coordLon' => $coordLon,
    'popupStr' => $popupStr);

echo json_encode($resArr, 1);