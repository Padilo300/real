<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#9CC2CE"> <!-- цвет вкладки chrome -->
    <link rel="shortcut icon" href="../img/ico/triangle.png" type="image/x-icon">
    <title>Padilo</title>
    <link rel="stylesheet" href="../css/libs/font-awesome.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body><!--
        <i class="sprite sprite-Server-2"></i>
        <i class="sprite sprite-Group-2"></i>
        <i class="sprite sprite-menu"></i>
        <i class="sprite sprite-map-pin"></i>
        <i class="sprite sprite-square"></i>
        <i class="sprite sprite-star"></i> -->
<div class="rootWrap">

    <section class="container-fluid">
        <div class="row">
            <div class="col col-12 col-md-12 col-xl-3" style="margin-top: 10px;">
                <div class="wrapBTN--SB btnFilterTab nav nav-pills mb-3 ins-col-xl-12 lgMargin--0auto" id="pills-tab" role="tablist">
                    <button class="btn-img active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                        <i class="sprite sprite-Group-2"></i>
                        Список
                    </button>

                    <button class="btn-img" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                        <i class="sprite sprite-menu"></i>
                        Таблица
                    </button>
                    <button class="btn-img" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                        <i class="sprite sprite-map-pin"></i>
                        На карте
                    </button>
                </div><!-- wrapBTN--center -->

            </div><!-- col -->
            <div class="col col-md-12 col-12 col-xl-9">
                <div class="wrapBTN--SB xsColumn">
                    <div class="wrapBTN--center">
                        <select class="form-control select-normal m03px">
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                        </select>
                        <select class="form-control select-normal m03px">
                            <option value="">За последний месяц</option>
                            <option value="">За последний месяц</option>
                            <option value="">За последний месяц</option>
                            <option value="">За последний месяц</option>
                        </select>
                        <select class="form-control select-normal m03px">
                            <option value="">Сначала новые</option>
                            <option value="">Сначала старые</option>
                            <option value="">Сначала с конца</option>
                        </select>
                        <button class="btnAddobjact--m" data-toggle="modal" data-target="#exampleModal">
                            + Добавить объект
                        </button>
                    </div><!-- wrapBTN--center -->
                    <nav aria-label="breadcrumb" class="float-right">
                        <ol class="breadcrumb bg-none ">
                            <li class="breadcrumb-item">
                                <a href="#" onclick="history.back();">Главная</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Объеты</li>
                        </ol>
                    </nav>
                </div><!-- wrapBTN--center -->
            </div><!-- col -->
        </div><!-- end row -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form action="/" method="POST" class="modal-content modalSelectObjact" id="selectObject">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Добавление объекта в базу</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <table>
                            <tr>
                                <td>
                                    <div class="form-check castomRadio">
                                        <label class="form-check-label containerRadio"  for="exampleRadios1">
                                            Квартира
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Квартира" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check castomRadio">
                                        <label class="form-check-label containerRadio"  for="exampleRadios2">
                                            Дача
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Дача" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check castomRadio">
                                        <label class="form-check-label containerRadio"  for="exampleRadios3">
                                            Дом, котедж
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Дом,котедж" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check castomRadio">
                                        <label class="form-check-label containerRadio"  for="exampleRadios4">
                                            Гараж
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="Гараж" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check castomRadio">
                                        <label class="form-check-label containerRadio"  for="exampleRadios6">
                                            Коммерческая
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="Коммерческая" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check castomRadio">
                                        <label class="form-check-label containerRadio"  for="exampleRadios7">
                                            Паркинг
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="Паркинг" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check castomRadio">
                                        <label class="form-check-label containerRadio"  for="exampleRadios8">
                                            Участок
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios8" value="Участок" >
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btnAddobjactM" >Добавить</button>
                        <button type="reset" class="btnAddobjactM--red" data-dismiss="modal">Отменить</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col col-lg-4 col-xl-3 col-12 col-md-12 ins-col-xl-12 object-filter" style="margin-top: 6px;">
                <form action="#" method="POST" cla1ss="formFilter ">
                    <div class="wrap btn-group wrapBTN--SB btn-group-toggle formFilter-row1 formFilter-row" data-toggle="buttons">
                        <label class="btn btn-secondary active INS-btn-toogle">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Все
                        </label>
                        <label class="btn btn-secondary INS-btn-toogle" >
                            <input type="radio" name="options" id="option2" autocomplete="off"> Мои
                        </label>
                        <label class="btn btn-secondary INS-btn-toogle">
                            <input type="radio" name="options" id="option3" autocomplete="off"> АН
                        </label>
                        <label class="btn btn-secondary INS-btn-toogle" >
                            <input type="radio" name="options" id="option3" autocomplete="off"> Партнер
                        </label>
                        <label class="btn btn-secondary INS-btn-toogle">
                            <input type="radio" name="options" id="option3" autocomplete="off"> Архив
                        </label>
                    </div>

                    <div class="wrapBTN--SB formFilter-row">
                        <select class="form-control select-xs m03px">
                            <option value="Днепропетровкая область">Продажа</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                        </select>
                        <select class="form-control select-normal m03px">
                            <option value="Днепропетровкая область">Квартиры</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                        </select>
                    </div><!-- wrapBTN--SB -->
                    <div class="form-group formFilter-row">
                        <label for="exampleCity">
                            <b class="gray">
                                Район
                            </b>
                        </label>
                        <select class="form-control" id="exampleCity">
                            <option value="Днепропетровкая область">Квартиры</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                        </select>
                    </div><!-- form group -->

                    <div class="formFilter-row">
                        <div class="form-group ">
                            <label for="input1">
                                <b class="gray">
                                    Адресс
                                </b>
                            </label>
                            <input type="text" class="form-control" id="address" >
                        </div><!-- form group -->

                        <div class="form-group">
                            <div class="wrapBTN--SB ">
                                <b class="gray w-50">Количество комнат</b>
                                <b class="gray w-50">Площадь, м<sup>2</sup></b>
                            </div>

                            <div class="wrapBTN--SB wrapInputBtn"><!-- wrap flex -->

                                <div class="wrapBTN--center"><!-- inner flex -->
                                    <div class="btn-group btn-group-toggle row-rooms " data-toggle="buttons">
                                        <label class="btn btn-secondary active INS-btn-toogle--xs">
                                            <input type="radio" name="options" id="option1" autocomplete="off" checked> 1
                                        </label>
                                        <label class="btn btn-secondary INS-btn-toogle--xs">
                                            <input type="radio" name="options" id="option2" autocomplete="off"> 2
                                        </label>
                                        <label class="btn btn-secondary INS-btn-toogle--xs">
                                            <input type="radio" name="options" id="option3" autocomplete="off"> 3
                                        </label>
                                        <label class="btn btn-secondary INS-btn-toogle--xs">
                                            <input type="radio" name="options" id="option3" autocomplete="off"> 4+
                                        </label>
                                    </div>
                                </div>  <!-- inner flex -->
                                <div class="wrapBTN--fend row-square">   <!-- inner flex -->
                                    <input type="number" class="w-50" name="" id="" placeholder="от" step="10">
                                    <input type="number" class="w-50" name="" id="" placeholder="до" step="10">
                                </div><!-- inner flex -->
                            </div><!-- wrap flex -->
                        </div><!-- form-group -->
                    </div><!-- formFilter-row -->

                    <div class="formFilter-row">
                        <div class="wrapBTN--SB wrap">
                            <b class="gray">Цена</b>
                            <div class="wrapBTN--SB w-50">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        За объект
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        За м<sup>2</sup>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="wrapBTN--SB">
                            <div class="wrapBTN--SB w-70">   <!-- inner flex -->
                                <input type="number" class="w-50" name="" id="" placeholder="от" step="10">
                                <input type="number" class="w-50" name="" id="" placeholder="до" step="10">
                            </div><!-- inner flex -->
                            <select class="form-control select-xs m03px" id="exampleCity">
                                <option value="Днепропетровкая область">Гривна</option>
                                <option value="Днепропетровкая область">Рубли</option>
                                <option value="Днепропетровкая область">Доллар</option>
                                <option value="Днепропетровкая область">Евро</option>
                            </select>
                        </div>
                    </div><!-- formFilter-row -->

                    <div class="formFilter-row">
                        <div class="wrapBTN--SB wrap">
                            <b class="gray">Этаж</b>
                        </div>

                        <div class="wrapBTN--SB">
                            <div class="wrapBTN--SB row-level">   <!-- inner flex -->
                                <input type="number" class="w-50" name="" id="" placeholder="от" step="10">
                                <input type="number" class="w-50" name="" id="" placeholder="до" step="10">
                            </div><!-- inner flex -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Не первый
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Не последний
                                </label>
                            </div>
                        </div>
                    </div><!-- formFilter-row -->
                </form>
            </div><!-- col -->
            <div class="col col-lg-12 col-xl-9 col-md-12 col-12 castom-width-1 wrap tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="wrapAppartament">
                        <div class="row position-relative">
                            <div class="col col-md-3 col-12">
                                <div class="wrapAppartament-img wrap">
                                    <div class="wrapAppartament-btnGrop">
                                        <a href="#">
                                            <input type="checkbox" name="" id="">
                                        </a>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>

                                    </div>
                                    <div class="img">
                                        <div class="label-wrap">
                                                <span class="label">
                                                    ЭКС 5%
                                                </span>
                                            <span class="label --blue">
                                                    Партнер
                                                </span>
                                            <span class="label --orang">
                                                <a href="https://newstart2.bitrix24.ua/crm/deal/details/73972/" style="color:#fff;">
                                                    Задаток
                                                </a>
                                            </span>
                                        </div><!-- label-wrap -->
                                        <div class="labelMedia">
                                                <span>
                                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                                    12
                                                </span>
                                            <span>
                                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                                    7
                                                </span>
                                        </div><!--  labelMedia -->
                                        <img src="http://kitchenguide.su/wp-content/uploads/2017/03/ii37.jpg" alt="">
                                    </div>
                                </div><!-- wrapImgAppartament -->
                            </div><!-- col-3 -->
                            <div class="col col-sm-9 col-12 col-md-7 position-relative wrap">
                                <a href="detail.php" class="hrefObject">
                                    <h1 class="h3 titleAppart">
                                        Героев Сталинграда просп., 4А, Оболонский р-н,
                                        г. Киев
                                    </h1>
                                </a>
                                <p class="h4 wrapAppartParametr">
                                    <span>
                                        2 разд
                                    </span>

                                    <span>
                                        50 / 35 / 15 м<sup>2</sup>
                                    </span>

                                    <span>
                                        4 этаж из 11
                                    </span>

                                    <span class="ObCheck">
                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                        <span class="ObCheck-title">
                                            Чешский проект
                                        </span>
                                    </span>
                                </p>
                                <p class="descriptionAppart">
                                    Светлая двухкомнатная квартира с авторским ремонтом. 4 этаж 25 этажного кирпичного дома. Общая площадь 50 м2. Квартира с функциональной планировкой комнат, полностью укомплектована всей необходимой ...
                                </p>

                            </div><!-- col-9 -->

                            <div class="col col-md-2 col-sm-3 col-12 wrapPrice">
                                <p class="appartPrice">
                                    <b class="h2 blue">
                                        99 000$
                                    </b>
                                    <span>
                                        1 200$ за м<sup>2</sup>
                                    </span>
                                </p>
                                <p class="appartPrice">
                                    <b class="h2">
                                        <small>
                                            2 777 242 грн
                                        </small>
                                    </b>
                                    <span>
                                            32 000 грн. за м<sup>2</sup>
                                        </span>
                                </p>
                            </div>
                            <footer class="col col-12">
                                <p>
                                    <span class="multiSpan">
                                        <span>
                                            Заявки:
                                        </span>
                                        <a href="#" class="blue">
                                            <b>
                                                7
                                            </b>
                                        </a>
                                        <span class="green">
                                            (+4)
                                        </span>
                                    </span><!-- end multiSpan -->

                                    <span class="multiSpan">
                                        <span>
                                            Интерес:
                                        </span>
                                        <a href="#" class="blue">
                                            <b>
                                                6
                                            </b>
                                        </a>
                                    </span><!-- end multiSpan -->

                                    <span class="multiSpan">
                                        <span>
                                            Аналоги:
                                        </span>
                                        <a href="#" class="blue">
                                            <b>
                                                6
                                            </b>
                                        </a>
                                    </span><!-- end multiSpan -->


                                    <b class="number">
                                        № 231181
                                    </b>

                                    <span class="multiSpan">
                                        <span>
                                            Добавленно:
                                        </span>
                                        <a href="#" class="blue">
                                            <b>
                                                18.12.2018
                                            </b>
                                        </a>
                                    </span><!-- end multiSpan -->


                                    <span class="multiSpan">
                                        <span>
                                            Обновленно:
                                        </span>
                                        <a href="#" class="blue">
                                            <b>
                                                18.12.2018
                                            </b>
                                        </a>
                                    </span><!-- end multiSpan -->


                                    <span class="multiSpan">
                                        <span>
                                            AH:
                                        </span>
                                        <a href="#" class="blue">
                                            <b>
                                                Райский Святослав (АН “Вариант”)
                                            </b>
                                        </a>
                                    </span><!-- end multiSpan -->
                                </p>
                            </footer>
                        </div><!-- row -->
                    </div><!-- wrapAppartament -->
                    <div class="wrapAppartament">
                        <div class="row position-relative">
                            <div class="col col-md-3 col-12">
                                <div class="wrapAppartament-img wrap">
                                    <div class="wrapAppartament-btnGrop">
                                        <a href="#">
                                            <input type="checkbox" name="" id="">
                                        </a>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>

                                    </div>
                                    <div class="img">
                                        <div class="label-wrap">
                                                    <span class="label">
                                                        ЭКС 5%
                                                    </span>
                                            <span class="label --blue">
                                                        Партнер
                                                    </span>
                                            <span class="label --orang">
                                                        Задаток
                                                    </span>
                                        </div><!-- label-wrap -->
                                        <div class="labelMedia">
                                                    <span>
                                                        <i class="fa fa-camera" aria-hidden="true"></i>
                                                        12
                                                    </span>
                                            <span>
                                                        <i class="fa fa-video-camera" aria-hidden="true"></i>
                                                        7
                                                    </span>
                                        </div><!--  labelMedia -->
                                        <img src="http://kitchenguide.su/wp-content/uploads/2017/03/ii37.jpg" alt="">
                                    </div>
                                </div><!-- wrapImgAppartament -->
                            </div><!-- col-3 -->
                            <div class="col col-sm-9 col-12 col-md-7 position-relative wrap">
                                <a href="detail.php" class="hrefObject">
                                    <h1 class="h3 titleAppart">
                                        Героев Сталинграда просп., 4А, Оболонский р-н,
                                        г. Киев
                                    </h1>
                                </a>
                                <p class="h4 wrapAppartParametr">
                                        <span>
                                            2 разд
                                        </span>

                                    <span>
                                            50 / 35 / 15 м<sup>2</sup>
                                        </span>

                                    <span>
                                            4 этаж из 11
                                        </span>

                                    <span class="ObCheck">
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            <span class="ObCheck-title">
                                                Чешский проект
                                            </span>
                                        </span>
                                </p>
                                <p class="descriptionAppart">
                                    Светлая двухкомнатная квартира с авторским ремонтом. 4 этаж 25 этажного кирпичного дома. Общая площадь 50 м2. Квартира с функциональной планировкой комнат, полностью укомплектована всей необходимой ...
                                </p>

                            </div><!-- col-9 -->

                            <div class="col col-md-2 col-sm-3 col-12 wrapPrice">
                                <p class="appartPrice">
                                    <b class="h2 blue">
                                        99 000$
                                    </b>
                                    <span>
                                            1 200$ за м<sup>2</sup>
                                        </span>
                                </p>
                                <p class="appartPrice">
                                    <b class="h2">
                                        <small>
                                            2 777 242 грн
                                        </small>
                                    </b>
                                    <span>
                                                32 000 грн. за м<sup>2</sup>
                                            </span>
                                </p>
                            </div>
                            <footer class="col col-12">
                                <p>
                                        <span class="multiSpan">
                                            <span>
                                                Заявки:
                                            </span>
                                            <a href="#" class="blue">
                                                <b>
                                                    7
                                                </b>
                                            </a>
                                            <span class="green">
                                                (+4)
                                            </span>
                                        </span><!-- end multiSpan -->

                                    <span class="multiSpan">
                                            <span>
                                                Интерес:
                                            </span>
                                            <a href="#" class="blue">
                                                <b>
                                                    6
                                                </b>
                                            </a>
                                        </span><!-- end multiSpan -->

                                    <span class="multiSpan">
                                            <span>
                                                Аналоги:
                                            </span>
                                            <a href="#" class="blue">
                                                <b>
                                                    6
                                                </b>
                                            </a>
                                        </span><!-- end multiSpan -->


                                    <b class="number">
                                        № 231181
                                    </b>

                                    <span class="multiSpan">
                                            <span>
                                                Добавленно:
                                            </span>
                                            <a href="#" class="blue">
                                                <b>
                                                    18.12.2018
                                                </b>
                                            </a>
                                        </span><!-- end multiSpan -->


                                    <span class="multiSpan">
                                            <span>
                                                Обновленно:
                                            </span>
                                            <a href="#" class="blue">
                                                <b>
                                                    18.12.2018
                                                </b>
                                            </a>
                                        </span><!-- end multiSpan -->


                                    <span class="multiSpan">
                                            <span>
                                                AH:
                                            </span>
                                            <a href="#" class="blue">
                                                <b>
                                                    Райский Святослав (АН “Вариант”)
                                                </b>
                                            </a>
                                        </span><!-- end multiSpan -->
                                </p>
                            </footer>
                        </div><!-- row -->
                    </div><!-- wrapAppartament -->
                    <div class="wrapAppartament">
                        <div class="row position-relative">
                            <div class="col col-md-3 col-12">
                                <div class="wrapAppartament-img wrap">
                                    <div class="wrapAppartament-btnGrop">
                                        <a href="#">
                                            <input type="checkbox" name="" id="">
                                        </a>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>

                                    </div>
                                    <div class="img">
                                        <div class="label-wrap">
                                                        <span class="label">
                                                            ЭКС 5%
                                                        </span>
                                            <span class="label --blue">
                                                            Партнер
                                                        </span>
                                            <span class="label --orang">
                                                            Задаток
                                                        </span>
                                        </div><!-- label-wrap -->
                                        <div class="labelMedia">
                                                        <span>
                                                            <i class="fa fa-camera" aria-hidden="true"></i>
                                                            12
                                                        </span>
                                            <span>
                                                            <i class="fa fa-video-camera" aria-hidden="true"></i>
                                                            7
                                                        </span>
                                        </div><!--  labelMedia -->
                                        <img src="http://kitchenguide.su/wp-content/uploads/2017/03/ii37.jpg" alt="">
                                    </div>
                                </div><!-- wrapImgAppartament -->
                            </div><!-- col-3 -->
                            <div class="col col-sm-9 col-12 col-md-7 position-relative wrap">
                                <a href="detail.php" class="hrefObject">
                                    <h1 class="h3 titleAppart">
                                        Героев Сталинграда просп., 4А, Оболонский р-н,
                                        г. Киев
                                    </h1>
                                </a>
                                <p class="h4 wrapAppartParametr">
                                            <span>
                                                2 разд
                                            </span>

                                    <span>
                                                50 / 35 / 15 м<sup>2</sup>
                                            </span>

                                    <span>
                                                4 этаж из 11
                                            </span>

                                    <span class="ObCheck">
                                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                <span class="ObCheck-title">
                                                    Чешский проект
                                                </span>
                                            </span>
                                </p>
                                <p class="descriptionAppart">
                                    Светлая двухкомнатная квартира с авторским ремонтом. 4 этаж 25 этажного кирпичного дома. Общая площадь 50 м2. Квартира с функциональной планировкой комнат, полностью укомплектована всей необходимой ...
                                </p>

                            </div><!-- col-9 -->

                            <div class="col col-md-2 col-sm-3 col-12 wrapPrice">
                                <p class="appartPrice">
                                    <b class="h2 blue">
                                        99 000$
                                    </b>
                                    <span>
                                                1 200$ за м<sup>2</sup>
                                            </span>
                                </p>
                                <p class="appartPrice">
                                    <b class="h2">
                                        <small>
                                            2 777 242 грн
                                        </small>
                                    </b>
                                    <span>
                                                    32 000 грн. за м<sup>2</sup>
                                                </span>
                                </p>
                            </div>
                            <footer class="col col-12">
                                <p>
                                            <span class="multiSpan">
                                                <span>
                                                    Заявки:
                                                </span>
                                                <a href="#" class="blue">
                                                    <b>
                                                        7
                                                    </b>
                                                </a>
                                                <span class="green">
                                                    (+4)
                                                </span>
                                            </span><!-- end multiSpan -->

                                    <span class="multiSpan">
                                                <span>
                                                    Интерес:
                                                </span>
                                                <a href="#" class="blue">
                                                    <b>
                                                        6
                                                    </b>
                                                </a>
                                            </span><!-- end multiSpan -->

                                    <span class="multiSpan">
                                                <span>
                                                    Аналоги:
                                                </span>
                                                <a href="#" class="blue">
                                                    <b>
                                                        6
                                                    </b>
                                                </a>
                                            </span><!-- end multiSpan -->


                                    <b class="number">
                                        № 231181
                                    </b>

                                    <span class="multiSpan">
                                                <span>
                                                    Добавленно:
                                                </span>
                                                <a href="#" class="blue">
                                                    <b>
                                                        18.12.2018
                                                    </b>
                                                </a>
                                            </span><!-- end multiSpan -->


                                    <span class="multiSpan">
                                                <span>
                                                    Обновленно:
                                                </span>
                                                <a href="#" class="blue">
                                                    <b>
                                                        18.12.2018
                                                    </b>
                                                </a>
                                            </span><!-- end multiSpan -->


                                    <span class="multiSpan">
                                                <span>
                                                    AH:
                                                </span>
                                                <a href="#" class="blue">
                                                    <b>
                                                        Райский Святослав (АН “Вариант”)
                                                    </b>
                                                </a>
                                            </span><!-- end multiSpan -->
                                </p>
                            </footer>
                        </div><!-- row -->
                    </div><!-- wrapAppartament -->
                    <div class="wrapAppartament">
                        <div class="row position-relative">
                            <div class="col col-md-3 col-12">
                                <div class="wrapAppartament-img wrap">
                                    <div class="wrapAppartament-btnGrop">
                                        <a href="#">
                                            <input type="checkbox" name="" id="">
                                        </a>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>

                                    </div>
                                    <div class="img">
                                        <div class="label-wrap">
                                                            <span class="label">
                                                                ЭКС 5%
                                                            </span>
                                            <span class="label --blue">
                                                                Партнер
                                                            </span>
                                            <span class="label --orang">
                                                                Задаток
                                                            </span>
                                        </div><!-- label-wrap -->
                                        <div class="labelMedia">
                                                            <span>
                                                                <i class="fa fa-camera" aria-hidden="true"></i>
                                                                12
                                                            </span>
                                            <span>
                                                                <i class="fa fa-video-camera" aria-hidden="true"></i>
                                                                7
                                                            </span>
                                        </div><!--  labelMedia -->
                                        <img src="http://kitchenguide.su/wp-content/uploads/2017/03/ii37.jpg" alt="">
                                    </div>
                                </div><!-- wrapImgAppartament -->
                            </div><!-- col-3 -->
                            <div class="col col-sm-9 col-12 col-md-7 position-relative wrap">
                                <a href="detail.php" class="hrefObject">
                                    <h1 class="h3 titleAppart">
                                        Героев Сталинграда просп., 4А, Оболонский р-н,
                                        г. Киев
                                    </h1>
                                </a>
                                <p class="h4 wrapAppartParametr">
                                                <span>
                                                    2 разд
                                                </span>

                                    <span>
                                                    50 / 35 / 15 м<sup>2</sup>
                                                </span>

                                    <span>
                                                    4 этаж из 11
                                                </span>

                                    <span class="ObCheck">
                                                    <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                    <span class="ObCheck-title">
                                                        Чешский проект
                                                    </span>
                                                </span>
                                </p>
                                <p class="descriptionAppart">
                                    Светлая двухкомнатная квартира с авторским ремонтом. 4 этаж 25 этажного кирпичного дома. Общая площадь 50 м2. Квартира с функциональной планировкой комнат, полностью укомплектована всей необходимой ...
                                </p>

                            </div><!-- col-9 -->

                            <div class="col col-md-2 col-sm-3 col-12 wrapPrice">
                                <p class="appartPrice">
                                    <b class="h2 blue">
                                        99 000$
                                    </b>
                                    <span>
                                                    1 200$ за м<sup>2</sup>
                                                </span>
                                </p>
                                <p class="appartPrice">
                                    <b class="h2">
                                        <small>
                                            2 777 242 грн
                                        </small>
                                    </b>
                                    <span>
                                                        32 000 грн. за м<sup>2</sup>
                                                    </span>
                                </p>
                            </div>
                            <footer class="col col-12">
                                <p>
                                                <span class="multiSpan">
                                                    <span>
                                                        Заявки:
                                                    </span>
                                                    <a href="#" class="blue">
                                                        <b>
                                                            7
                                                        </b>
                                                    </a>
                                                    <span class="green">
                                                        (+4)
                                                    </span>
                                                </span><!-- end multiSpan -->

                                    <span class="multiSpan">
                                                    <span>
                                                        Интерес:
                                                    </span>
                                                    <a href="#" class="blue">
                                                        <b>
                                                            6
                                                        </b>
                                                    </a>
                                                </span><!-- end multiSpan -->

                                    <span class="multiSpan">
                                                    <span>
                                                        Аналоги:
                                                    </span>
                                                    <a href="#" class="blue">
                                                        <b>
                                                            6
                                                        </b>
                                                    </a>
                                                </span><!-- end multiSpan -->


                                    <b class="number">
                                        № 231181
                                    </b>

                                    <span class="multiSpan">
                                                    <span>
                                                        Добавленно:
                                                    </span>
                                                    <a href="#" class="blue">
                                                        <b>
                                                            18.12.2018
                                                        </b>
                                                    </a>
                                                </span><!-- end multiSpan -->


                                    <span class="multiSpan">
                                                    <span>
                                                        Обновленно:
                                                    </span>
                                                    <a href="#" class="blue">
                                                        <b>
                                                            18.12.2018
                                                        </b>
                                                    </a>
                                                </span><!-- end multiSpan -->


                                    <span class="multiSpan">
                                                    <span>
                                                        AH:
                                                    </span>
                                                    <a href="#" class="blue">
                                                        <b>
                                                            Райский Святослав (АН “Вариант”)
                                                        </b>
                                                    </a>
                                                </span><!-- end multiSpan -->
                                </p>
                            </footer>
                        </div><!-- row -->
                    </div><!-- wrapAppartament -->
                    <div class="wrapAppartament">
                        <div class="row position-relative">
                            <div class="col col-md-3 col-12">
                                <div class="wrapAppartament-img wrap">
                                    <div class="wrapAppartament-btnGrop">
                                        <a href="#">
                                            <input type="checkbox" name="" id="">
                                        </a>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>

                                    </div>
                                    <div class="img">
                                        <div class="label-wrap">
                                                                <span class="label">
                                                                    ЭКС 5%
                                                                </span>
                                            <span class="label --blue">
                                                                    Партнер
                                                                </span>
                                            <span class="label --orang">
                                                                    Задаток
                                                                </span>
                                        </div><!-- label-wrap -->
                                        <div class="labelMedia">
                                                                <span>
                                                                    <i class="fa fa-camera" aria-hidden="true"></i>
                                                                    12
                                                                </span>
                                            <span>
                                                                    <i class="fa fa-video-camera" aria-hidden="true"></i>
                                                                    7
                                                                </span>
                                        </div><!--  labelMedia -->
                                        <img src="http://kitchenguide.su/wp-content/uploads/2017/03/ii37.jpg" alt="">
                                    </div>
                                </div><!-- wrapImgAppartament -->
                            </div><!-- col-3 -->
                            <div class="col col-sm-9 col-12 col-md-7 position-relative wrap">
                                <a href="detail.php" class="hrefObject">
                                    <h1 class="h3 titleAppart">
                                        Героев Сталинграда просп., 4А, Оболонский р-н,
                                        г. Киев
                                    </h1>
                                </a>
                                <p class="h4 wrapAppartParametr">
                                                    <span>
                                                        2 разд
                                                    </span>

                                    <span>
                                                        50 / 35 / 15 м<sup>2</sup>
                                                    </span>

                                    <span>
                                                        4 этаж из 11
                                                    </span>

                                    <span class="ObCheck">
                                                        <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                        <span class="ObCheck-title">
                                                            Чешский проект
                                                        </span>
                                                    </span>
                                </p>
                                <p class="descriptionAppart">
                                    Светлая двухкомнатная квартира с авторским ремонтом. 4 этаж 25 этажного кирпичного дома. Общая площадь 50 м2. Квартира с функциональной планировкой комнат, полностью укомплектована всей необходимой ...
                                </p>

                            </div><!-- col-9 -->

                            <div class="col col-md-2 col-sm-3 col-12 wrapPrice">
                                <p class="appartPrice">
                                    <b class="h2 blue">
                                        99 000$
                                    </b>
                                    <span>
                                                        1 200$ за м<sup>2</sup>
                                                    </span>
                                </p>
                                <p class="appartPrice">
                                    <b class="h2">
                                        <small>
                                            2 777 242 грн
                                        </small>
                                    </b>
                                    <span>
                                                            32 000 грн. за м<sup>2</sup>
                                                        </span>
                                </p>
                            </div>
                            <footer class="col col-12">
                                <p>
                                                    <span class="multiSpan">
                                                        <span>
                                                            Заявки:
                                                        </span>
                                                        <a href="#" class="blue">
                                                            <b>
                                                                7
                                                            </b>
                                                        </a>
                                                        <span class="green">
                                                            (+4)
                                                        </span>
                                                    </span><!-- end multiSpan -->

                                    <span class="multiSpan">
                                                        <span>
                                                            Интерес:
                                                        </span>
                                                        <a href="#" class="blue">
                                                            <b>
                                                                6
                                                            </b>
                                                        </a>
                                                    </span><!-- end multiSpan -->

                                    <span class="multiSpan">
                                                        <span>
                                                            Аналоги:
                                                        </span>
                                                        <a href="#" class="blue">
                                                            <b>
                                                                6
                                                            </b>
                                                        </a>
                                                    </span><!-- end multiSpan -->


                                    <b class="number">
                                        № 231181
                                    </b>

                                    <span class="multiSpan">
                                                        <span>
                                                            Добавленно:
                                                        </span>
                                                        <a href="#" class="blue">
                                                            <b>
                                                                18.12.2018
                                                            </b>
                                                        </a>
                                                    </span><!-- end multiSpan -->


                                    <span class="multiSpan">
                                                        <span>
                                                            Обновленно:
                                                        </span>
                                                        <a href="#" class="blue">
                                                            <b>
                                                                18.12.2018
                                                            </b>
                                                        </a>
                                                    </span><!-- end multiSpan -->


                                    <span class="multiSpan">
                                                        <span>
                                                            AH:
                                                        </span>
                                                        <a href="#" class="blue">
                                                            <b>
                                                                Райский Святослав (АН “Вариант”)
                                                            </b>
                                                        </a>
                                                    </span><!-- end multiSpan -->
                                </p>
                            </footer>
                        </div><!-- row -->
                    </div><!-- wrapAppartament -->


                </div><!-- id="pills-home" -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="hidden">

                        <table class="table text-center lh-min-all table-hover">
                            <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="checkAll">
                                </th>
                                <th>
                                    №
                                </th>
                                <th>
                                    <i class="sprite sprite-menu"></i>
                                </th>
                                <th>
                                    П
                                </th>
                                <th>
                                    Описание
                                </th>
                                <th>
                                    Площадь, м<sup>2</sup>
                                </th>
                                <th>
                                    Этаж
                                </th>
                                <th>
                                    Комната
                                </th>
                                <th>
                                    Цена
                                </th>
                                <th>
                                    За м<sup>2</sup>
                                </th>
                                <th>
                                    Ответственный
                                </th>
                            </tr>
                            </thead>
                            <tbody id="tableCheck">
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    <i class="sprite sprite-menu"></i>
                                </td>
                                <td>
                                        <span class="text-success">
                                            ЭКС
                                        </span>
                                </td>
                                <td>
                                    Героев Сталинграда просп., 4А, Оболонский р-н,
                                    г. Киев
                                </td>
                                <td>
                                    50 / 35 / 15
                                </td>
                                <td>
                                    4 / 11
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    99 000 $
                                    <br>
                                    <span class="small--grey">
                                            2 777 247 грн.
                                        </span>
                                </td>
                                <td>
                                    1 200 $ за м²
                                    <br>
                                    <span class="small--grey">
                                            1 200 $ за м²
                                        </span>
                                </td>
                                <td>
                                    <a href="#">
                                        Святослав Райский
                                    </a>

                                    <div class="small--grey">
                                        АН “Вариант”
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    <i class="sprite sprite-menu"></i>
                                </td>
                                <td>
                                            <span class="text-success">
                                                ЭКС
                                            </span>
                                </td>
                                <td>
                                    Героев Сталинграда просп., 4А, Оболонский р-н,
                                    г. Киев
                                </td>
                                <td>
                                    50 / 35 / 15
                                </td>
                                <td>
                                    4 / 11
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    99 000 $
                                    <br>
                                    <span class="small--grey">
                                                2 777 247 грн.
                                            </span>
                                </td>
                                <td>
                                    1 200 $ за м²
                                    <br>
                                    <span class="small--grey">
                                                1 200 $ за м²
                                            </span>
                                </td>
                                <td>
                                    <a href="#">
                                        Святослав Райский
                                    </a>

                                    <div class="small--grey">
                                        АН “Вариант”
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    <i class="sprite sprite-menu"></i>
                                </td>
                                <td>
                                                <span class="text-success">
                                                    ЭКС
                                                </span>
                                </td>
                                <td>
                                    Героев Сталинграда просп., 4А, Оболонский р-н,
                                    г. Киев
                                </td>
                                <td>
                                    50 / 35 / 15
                                </td>
                                <td>
                                    4 / 11
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    99 000 $
                                    <br>
                                    <span class="small--grey">
                                                    2 777 247 грн.
                                                </span>
                                </td>
                                <td>
                                    1 200 $ за м²
                                    <br>
                                    <span class="small--grey">
                                                    1 200 $ за м²
                                                </span>
                                </td>
                                <td>
                                    <a href="#">
                                        Святослав Райский
                                    </a>

                                    <div class="small--grey">
                                        АН “Вариант”
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    <i class="sprite sprite-menu"></i>
                                </td>
                                <td>
                                                    <span class="text-success">
                                                        ЭКС
                                                    </span>
                                </td>
                                <td>
                                    Героев Сталинграда просп., 4А, Оболонский р-н,
                                    г. Киев
                                </td>
                                <td>
                                    50 / 35 / 15
                                </td>
                                <td>
                                    4 / 11
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    99 000 $
                                    <br>
                                    <span class="small--grey">
                                                        2 777 247 грн.
                                                    </span>
                                </td>
                                <td>
                                    1 200 $ за м²
                                    <br>
                                    <span class="small--grey">
                                                        1 200 $ за м²
                                                    </span>
                                </td>
                                <td>
                                    <a href="#">
                                        Святослав Райский
                                    </a>

                                    <div class="small--grey">
                                        АН “Вариант”
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    <i class="sprite sprite-menu"></i>
                                </td>
                                <td>
                                                        <span class="text-success">
                                                            ЭКС
                                                        </span>
                                </td>
                                <td>
                                    Героев Сталинграда просп., 4А, Оболонский р-н,
                                    г. Киев
                                </td>
                                <td>
                                    50 / 35 / 15
                                </td>
                                <td>
                                    4 / 11
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    99 000 $
                                    <br>
                                    <span class="small--grey">
                                                            2 777 247 грн.
                                                        </span>
                                </td>
                                <td>
                                    1 200 $ за м²
                                    <br>
                                    <span class="small--grey">
                                                            1 200 $ за м²
                                                        </span>
                                </td>
                                <td>
                                    <a href="#">
                                        Святослав Райский
                                    </a>

                                    <div class="small--grey">
                                        АН “Вариант”
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    <i class="sprite sprite-menu"></i>
                                </td>
                                <td>
                                                            <span class="text-success">
                                                                ЭКС
                                                            </span>
                                </td>
                                <td>
                                    Героев Сталинграда просп., 4А, Оболонский р-н,
                                    г. Киев
                                </td>
                                <td>
                                    50 / 35 / 15
                                </td>
                                <td>
                                    4 / 11
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    99 000 $
                                    <br>
                                    <span class="small--grey">
                                                                2 777 247 грн.
                                                            </span>
                                </td>
                                <td>
                                    1 200 $ за м²
                                    <br>
                                    <span class="small--grey">
                                                                1 200 $ за м²
                                                            </span>
                                </td>
                                <td>
                                    <a href="#">
                                        Святослав Райский
                                    </a>

                                    <div class="small--grey">
                                        АН “Вариант”
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    <i class="sprite sprite-menu"></i>
                                </td>
                                <td>
                                                                <span class="text-success">
                                                                    ЭКС
                                                                </span>
                                </td>
                                <td>
                                    Героев Сталинграда просп., 4А, Оболонский р-н,
                                    г. Киев
                                </td>
                                <td>
                                    50 / 35 / 15
                                </td>
                                <td>
                                    4 / 11
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    99 000 $
                                    <br>
                                    <span class="small--grey">
                                                                    2 777 247 грн.
                                                                </span>
                                </td>
                                <td>
                                    1 200 $ за м²
                                    <br>
                                    <span class="small--grey">
                                                                    1 200 $ за м²
                                                                </span>
                                </td>
                                <td>
                                    <a href="#">
                                        Святослав Райский
                                    </a>

                                    <div class="small--grey">
                                        АН “Вариант”
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    <i class="sprite sprite-menu"></i>
                                </td>
                                <td>
                                                                    <span class="text-success">
                                                                        ЭКС
                                                                    </span>
                                </td>
                                <td>
                                    Героев Сталинграда просп., 4А, Оболонский р-н,
                                    г. Киев
                                </td>
                                <td>
                                    50 / 35 / 15
                                </td>
                                <td>
                                    4 / 11
                                </td>
                                <td>
                                    2
                                </td>
                                <td>
                                    99 000 $
                                    <br>
                                    <span class="small--grey">
                                                                        2 777 247 грн.
                                                                    </span>
                                </td>
                                <td>
                                    1 200 $ за м²
                                    <br>
                                    <span class="small--grey">
                                                                        1 200 $ за м²
                                                                    </span>
                                </td>
                                <td>
                                    <a href="#">
                                        Святослав Райский
                                    </a>

                                    <div class="small--grey">
                                        АН “Вариант”
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- id="pills-profile" -->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="wrapMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d21174.139754201522!2d35.00453174405145!3d48.441802493825875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0LrQsNGA0YLQsA!5e0!3m2!1sru!2sua!4v1545924565857" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div><!-- wrapMap -->
                </div><!-- id="pills-contact" -->
            </div><!-- col-9 -->

        </div><!-- row -->
        <div class="row">
            <div class="col col-12 d-flex justify-content-center" >
                <nav aria-label="Page navigation example " >
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!-- col -->
        </div><!-- row -->
    </section><!-- end cont -->
</div>
<script src="../js/libs/jquery-3.3.1.min.js"   ></script>
<script src="../js/libs/bootstrap.min.js"     defer ></script>
<script src="../js/libs/slick.min.js"         defer ></script>
<script src="../js/my.js"                     defer ></script>
<script src="https://cdn.jsdelivr.net/npm/places.js@1.15.1"></script>
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="//api.bitrix24.com/api/v1/dev/"></script>
<script>
    $(document).ready(function(){
        $("#selectObject").submit(function() {
            var form_data = $(this).serializeArray();
            var value = form_data[0]['value'];
            var str = 'Добавление в базу ' + value;
            $('#exampleModalLabel').text(str);
            $('#selectObject table').hide();
            return false;
        });

        var check = true;
        $('.checkAll').on('click', function(){
            var p = $(this).closest("table") ;
            p.find('input' ).prop('checked', check);
            check = !check;
        });

        var width = $('body').width();
        var height = $('body').height();

        BX24.resizeWindow(width, height);
    });
</script>
<script>
    var client = algoliasearch('O5XYSXVFQJ', 'e33d59cdad1bfb32b19f131f5e07ab19');
    var placesAutocomplete = places({
        client,
        container: document.querySelector('#address')
    });

    var $address = document.querySelector('#address-value');
    placesAutocomplete.on('change', function(e) {
        alert (e.suggestion.value)
    });
</script>
</body>
</html>