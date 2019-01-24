
<?
include('header.php');
include('../inc/CurlBitrix.php');

$domain = $_REQUEST['domain'];
$auth = $_REQUEST['auth'];

$method = 'user.current';
$var = array(
    'auth' => $auth,
);
$userCurrent = execCurlBitrix($method, $domain, $var);
//echo '<pre>';print_r($userCurrent);echo '</pre>';

$method = 'imconnector.register';
$var = array(
    'auth' => $auth,
    array(

      'ID' => 'IGP_NEW_TEST_CONNECTOR',
      'NAME' => 'NEW_TEST_CONNECTOR',
      'ICON' => array(
         'DATA_IMAGE' => '../img/animal-paw-print.svg',
         //'COLOR' => '#f0f0f0',
         //'SIZE' => '',
         //'POSITION' => ''
      ),
      'ICON_DISABLED' => array(
          'DATA_IMAGE' => '../img/animal-paw-print.svg',
          //'COLOR' => '#f0f0f0',
          //'SIZE' => '',
          //'POSITION' => ''
        ),
    )
);
$newConnector = execCurlBitrix($method, $domain, $var);
echo '<pre>';print_r($newConnector);echo '</pre>';


