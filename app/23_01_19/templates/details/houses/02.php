<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/lightbox.css">
<link rel="stylesheet" type="text/css" href="../../../css/semantic.min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500i,700,900&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="../../../js/echarts.js"></script>
<script src="../../../js/semantic.min.js"></script>
<script src="//api.bitrix24.com/api/v1/"></script>
<script src="../../../js/lightbox.js"></script>


<style>
    .house-menu {
        border-bottom: 2px solid lightgray;
    }
    .house-menu li {
        margin-bottom: -2px;
    }
    .nav.house-menu a{
        color: #000!important;
    }
    .nav.house-menu .nav-item.active a{
        font-weight: 600!important;
        border-left: 2px solid lightgray;
        border-right: 2px solid lightgray;
        border-top: 2px solid lightgray;
        border-bottom: 2px solid #fff;
    }
</style>


<div class="row top-bar">
    <div id="reload" onclick="location.reload()"><i class="fas fa-sync-alt fa-2x"></i></div>
    <div id="back" onclick="history.back();" style="position: absolute;right: 5%;color: lightgray;"><i class="fas fa-chevron-left fa-2x"></i></div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col col-12 col-md-12 mainHeader">
            <div>
                <div class="mainTitle">
                    <h1>
                        ЖК ВОСХОД
                    </h1>
                    <p>
                        Днепр, ж/м Солнечный
                    </p>    
                </div><!-- end mainTitle -->
            </div><!-- end col -->
            <!-- ======= -->
            <div>
                <div class="mainPrice">
                    <h1>
                        <small>
                            от 
                        </small>
                        8 900 000
                        <small>
                            р.
                        </small>
                    </h1>
                    <p>
                        Монолитный, Апартаменты
                    </p>
                </div><!-- end mainPrice -->
            </div><!-- end col -->
            <p class="titleSale">
                Акция "Приведи друга" от компании "Строитель-П" ! Получайте приятный бонус в размере 15000 грн.
                <a href="https://delmargroups.com/">
                    <img  src="./01/home/tag.svg" alt=""> Подробнее про акцию
                </a>
            </p>
        </div><!-- end col-md-12 -->
    </div><!-- end row -->
    <div class="row">
        <div class="col col-12">
            <ul class="flexEnd nav nav-tabs house-menu" id="myTab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link active house-menu" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" aria-expanded="true">Описание обьекта</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="flats" aria-selected="false">Квартиры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#details" role="tab" aria-controls="flats" aria-selected="false">Дополнительно</a>
                </li>
            </ul>
            <br>
        </div><!-- end col -->
    </div><!-- end row -->
    
    <div class="row">
    <div class="col col-12 col-md-4">
        <div class="insiderCarusel">
            <div class="insiderCarusel__main">
                <img src="http://www.kubanmakler.ru/kvartira/images/94.jpg" alt="">
            </div><!-- end insiderCarusel__main  -->
            <div class="insiderCarusel__mini">
                
            </div> <!-- end insiderCarusel__mini -->
        </div><!-- end insiderCarusel -->
        <h2>
            Застройщик
        </h2>
    </div><!-- end col -->
        <div class="tab-content col col-12 col-md-8" id="myTabContent">
                <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="flats-tab">
                    <?php require_once(__DIR__."/01/tab_details.php");?>
                </div><!-- end tab #datails -->
                <div class="tab-pane fade active in" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <?php require_once(__DIR__."/01/tab_descriptonObiect.php");?>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="flats-tab">
                    <?php require_once(__DIR__."/01/apartment.php");?>
                    
                    </div>
                </div>
            </div>
    </div><!-- end row -->
    
</div>







