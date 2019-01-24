<!---->
<?//
//include('inc/CurlBitrix.php');
//include('inc/DatabaseLi.php');
//include('inc/log.php');
//?>
<!---->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">-->
<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">-->
<!--<link rel="stylesheet" href="css/style.css">-->
<!--<link rel="stylesheet" href="css/lightbox.css">-->
<!--<link rel="stylesheet" type="text/css" href="css/semantic.min.css">-->
<!--<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"-->
<!--      integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="-->
<!--      crossorigin=""/>-->
<!--<link rel="stylesheet" href="css/leaflet-routing-machine.css" />-->
<!--<link rel="stylesheet" type="text/css" href="css/fancybox.css" media="screen" />-->
<!--<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500i,700,900&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet" />-->
<!---->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>-->
<!--<script src="//api.bitrix24.com/api/v1/dev/"></script>-->
<!--<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>-->
<!---->
<!---->
<!--<a href="#" id="back-button" onclick="history.back();" style="">-->
<!--    <i class="fas fa-chevron-circle-left fa-3x"></i>-->
<!--</a>-->
<!--<style>-->
<!--   body {-->
<!--       overflow: hidden;-->
<!--   }-->
<!--</style>-->
<!--<div class="container-fluid" style="min-height: 925px;">-->
<!--    --><?//
//    $db = new DatabaseLi();
//    $domain = $_REQUEST['DOMAIN'];
//    $auth = $_REQUEST['AUTH_ID'];
//
//    $method = 'user.current';
//    $var = array(
//        'auth' => $auth,
//    );
//    $userCurrent = execCurlBitrix($method, $domain, $var);
//    //printLog($userCurrent, '$userCurrent');
//
//    $redirect = '';
//
    $url = json_decode($_REQUEST['PLACEMENT_OPTIONS'],1);
    //echo '<pre>';print_r($url);echo '</pre>';
    if($url['href'] == 'detail.php'){
//       include ('templates/detail.php');
//       echo '<pre>';print_r('templates/'.$url['href']);echo '</pre>';
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: templates/detail.php");
        exit();
    }else{?>
<!--    <div class="row">-->
<!--        <div class="col-lg-4">-->
<!--            <a href="templates/main_temp.php" class="main-link">-->
<!--                <div class="col-lg-4">-->
<!--                    <i class="far fa-map fa-5x"></i>-->
<!--                </div>-->
<!--                <div class="col-lg-8">-->
<!--                    <div class="h2">База объектов</div>-->
<!--                </div>-->
<!---->
<!--                <div class="border border-rt"></div>-->
<!--                <div class="border border-lb"></div>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-4">-->
<!--            <a href="templates/bids.php" class="main-link">-->
<!--                <div class="col-lg-4">-->
<!--                    <i class="far fa-newspaper fa-5x"></i>-->
<!--                </div>-->
<!--                <div class="col-lg-8">-->
<!--                    <div class="h2">База заявок</div>-->
<!--                </div>-->
<!---->
<!--                <div class="border border-rt"></div>-->
<!--                <div class="border border-lb"></div>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-4">-->
<!--            <a href="templates/houses.php" class="main-link">-->
<!--                <div class="col-lg-4">-->
<!--                    <i class="far fa-building fa-5x"></i>-->
<!--                </div>-->
<!--                <div class="col-lg-8">-->
<!--                    <div class="h2">База домов</div>-->
<!--                </div>-->
<!---->
<!--                <div class="border border-rt"></div>-->
<!--                <div class="border border-lb"></div>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-lg-4">-->
<!--                <a href="https://n1insider.bitrix24.ua/crm/company/list/" class="main-link">-->
<!--                    <div class="col-lg-4">-->
<!--                        <i class="fas fa-hotel fa-5x"></i>-->
<!--                    </div>-->
<!--                    <div class="col-lg-8">-->
<!--                        <div class="h2">База АН</div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="border border-rt"></div>-->
<!--                    <div class="border border-lb"></div>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    --><?//}?>
<!--</div>-->


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#9CC2CE"> <!-- цвет вкладки chrome -->
    <link rel="shortcut icon" href="img/ico/triangle.png" type="image/x-icon">
    <title>Padilo</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body><!--
        <i class="sprite sprite-Server-2"></i>
        <i class="sprite sprite-Group-2"></i>
        <i class="sprite sprite-menu"></i>
        <i class="sprite sprite-map-pin"></i>
        <i class="sprite sprite-square"></i>
        <i class="sprite sprite-star"></i> -->
<!--<div id="add_new" style="position: absolute;right: 20px;">-->
<!--    <a href="templates/add/step1.php">-->
<!--        <i class="fas fa-plus fa-2x" style="color:#55595C;"></i>-->
<!--    </a>-->
<!--</div>-->
<div class="rootWrap">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-md-12 col-12 col-lg-3">
                <div class="btn-xs-column">
                    <a href="templates/main_temp.php" class="INS-btn-mainPage">
                        Объекты
                    </a>
                    <a href="templates/bids.php" class="INS-btn-mainPage">
                        Заявки
                    </a>
                    <a href="templates/houses.php" class="INS-btn-mainPage">
                        Дома / Жк
                    </a>
                    <a href="https://newstart2.bitrix24.ua/crm/company/list/" class="INS-btn-mainPage">
                        АН / риэлтора
                    </a>
                </div><!-- btn-xs-column -->
            </div><!-- col -->
            <div class="col col-12 col-md-12 col-lg-9">
                <div class="btn-xs-column">
                    <table class="table table-main-page text-center" >
                        <thead>
                        <tr>
                            <td colspan="3" class="text-upper">
                                Обьекты
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Сегодня</td>
                            <td>Месяц</td>
                            <td>Всего</td>
                        </tr>
                        <tr>
                            <td>
                                <p class="gray">
                                                    <span class="green">
                                                        3
                                                    </span>
                                    / 126
                                </p>
                            </td>
                            <td>
                                <p class="gray">
                                                    <span class="green">
                                                        25
                                                    </span>
                                    / 1 240
                                </p>
                            </td>
                            <td>
                                <p class="gray">
                                                    <span class="green">
                                                        120
                                                    </span>
                                    / 170 000
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table table-main-page text-center" >
                        <thead>
                        <tr>
                            <td colspan="3" class="text-upper">
                                Заявки
                            </td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Сегодня</td>
                            <td>Месяц</td>
                            <td>Всего</td>
                        </tr>
                        <tr>
                            <td>
                                <p class="gray">
                                                        <span class="green">
                                                            3
                                                        </span>
                                    / 126
                                </p>
                            </td>
                            <td>
                                <p class="gray">
                                                        <span class="green">
                                                            25
                                                        </span>
                                    / 1 240
                                </p>
                            </td>
                            <td>
                                <p class="gray">
                                                        <span class="green">
                                                            120
                                                        </span>
                                    / 170 000
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- btn-xs-column -->

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container-fluid -->
</div><!-- rootWrap -->
<script src="js/libs/jquery-3.3.1.min.js"   ></script>
<script src="js/libs/bootstrap.min.js"     defer ></script>
<script src="js/libs/slick.min.js"         defer ></script>
<script src="js/my.js"                     defer ></script>
<script src="//api.bitrix24.com/api/v1/dev/"></script>
<script>
    $(document).ready(function(){
        var check = true;
        $('#checkAll').on('click', function(){
            $('#tableCheck tr td input').prop('checked', check);
            check = !check;
        });


        // var width = $('.container-fluid').width();
        // var height = $('.container-fluid').height();
        //
        // BX24.resizeWindow(width, height);

    });

    var req = '<?=json_encode($_REQUEST['PLACEMENT_OPTIONS'], true)?>';
    console.log(req);
</script>
</body>
</html>

<?php
    }