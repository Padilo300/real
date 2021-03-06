<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#9CC2CE"> <!-- цвет вкладки chrome -->
    <link rel="shortcut icon" href="../img/ico/triangle.png" type="image/x-icon">
    <title>RealEstate</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body><!--
        <i class="sprite sprite-Server-2"></i>
        <i class="sprite sprite-Group-2"></i>
        <i class="sprite sprite-menu"></i>
        <i class="sprite sprite-map-pin"></i>
        <i class="sprite sprite-square"></i>
        <i class="sprite sprite-star"></i> -->

<style>
    body {
        overflow: hidden;
    }
</style>

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
<div class="rootWrap">

    <section class="container-fluid">
        <div class="row border-b">
            <div class="col col-12 col-md-12 col-xl-3">
                <section class="group-btn">
                    <a href="" class="btn-transp">
                        Все
                    </a>
                    <a href="" class="btn-transp">
                        В работе
                    </a>
                    <a href="" class="btn-transp">
                        В сделке
                    </a>
                    <a href="" class="btn-transp">
                        Выполнена
                    </a>
                </section>
            </div><!-- col -->
            <div class="col col-md-12 col-12 col-xl-9">
                <div class="row">
                    <div class="col col-12 col-xl-8"></div>
                    <div class="col col-12 col-xl-4 col-md-12">
                        <div class="wrapBTN--SB xsColumn">
                            <nav aria-label="breadcrumb" class="float-right">
                                <ol class="breadcrumb bg-none margin-none">
                                    <li class="breadcrumb-item"><a href="#" onclick="history.back();">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div><!-- wrapBTN--center -->
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- col -->
        </div><!-- end row -->
        <div class="row">
            <div class="col col-lg-4 col-xl-4 col-12 col-md-12 ins-col-xl-12 object-filter">
                <form action="#" method="POST" class="formFilter">

                    <div class="formFilter-row">
                        <a href="#">
                            <b>
                                Параметры заявки
                            </b>
                        </a>
                    </div>

                    <div class=" formFilter-row ">
                        <div class="bTitle " >
                            <span>
                                Поиск
                            </span>
                            <input type="text">
                        </div><!-- bTitle -->
                    </div><!-- wrapBTN--SB -->

                    <div class="wrap">
                        <table class="w-100">
                            <tr>
                                <td>Объеты</td>
                                <td>
                                    <a href="">
                                        Квартира, Дом
                                    </a>
                                </td>
                                <td></td>
                            </tr>
                        </table>
                    </div><!-- wrap -->


                    <div class="">
                        <div class="wrapBTN--SB">
                            <div class="bTitle">
                                        <span>
                                            Бюджет
                                        </span>
                                <input type="number" class="w" step="10" min="0">
                            </div><!-- bTitle -->

                            <div class="bTitle">
                                        <span class="hasInpuut">
                                            <input type="radio" id="inputForObject">
                                            <label for="inputForObject">За объект</label>
                                        </span>
                                <input type="number" step="10" min="0" value="">
                            </div><!-- bTitle -->


                            <div class="bTitle">
                                        <span class="hasInpuut">
                                            <input type="radio" id="inputForObject">
                                            <label for="inputForObject">За м <sup>2</sup></label>
                                        </span>

                                <select class="form-control select-normal ">
                                    <option value="Днепропетровкая область">гривна</option>
                                    <option value="Днепропетровкая область">Покупка</option>
                                    <option value="Днепропетровкая область">Продажа</option>
                                    <option value="Днепропетровкая область">Покупка</option>
                                </select>
                            </div><!-- bTitle -->
                        </div><!-- wrapBTN--SB -->
                        <div class=" wrap" >

                            <div class="wrapBTN--SB wrapInputBtn"><!-- wrap flex -->
                                <div class="bTitle w-50" >                                
                                        <span>
                                            Количество комнат
                                        </span>
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
                                </div><!-- bTitle w-50 -->
                                <div class="bTitle w-50 max-cont">
                                        <span>
                                            Площадь м<sup>2</sup>
                                        </span>
                                    <div class="wrapBTN--SB row-square">   <!-- inner flex -->
                                        <input type="number" class="w-50" name="" id="" placeholder="от" step="10" min="0">
                                        <input type="number" class="w-50" name="" id="" placeholder="до" step="10" min="0">
                                    </div><!-- inner flex -->
                                </div><!-- bTitle w-50 -->
                            </div><!-- wrap flex -->
                        </div><!-- form-group -->

                    </div><!-- formFilter-row -->

                    <div >
                        <div class="wrapBTN--SB">

                            <div class="bTitle">
                                <span>
                                    Этаж
                                </span>
                                <div class="wrapBTN--SB row-level">   <!-- inner flex -->
                                    <input type="number"  name="" id="" placeholder="от" step="1" max="50" min="1">
                                    <input type="number"  name="" id="" placeholder="до" step="1" max="50" min="1">
                                </div><!-- inner flex -->
                            </div><!-- bTitle -->

                            <div class="bTitle">
                                <label class="form-check-label weght-400" for="defaultCheck1" >
                                    Не первый
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            </div><!-- bTitle -->

                            <div class="bTitle">
                                <label class="form-check-label weght-400" for="defaultCheck1">
                                    Не последний
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            </div><!-- bTitle -->
                        </div><!-- wrapBTN--SB -->
                    </div><!-- formFilter-row -->

                    <div class="space-10px"></div>

                    <div class="bTitle">
                        <span>
                            Расположение
                        </span>
                        <select class="form-control">
                            <option value="Днепропетровкая область">Центр, Левый берег</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                            <option value="Днепропетровкая область">Днепропетровкая область</option>
                        </select>
                    </div><!-- form group -->

                    <div class="space-10px"></div>

                    <div class="bTitle">
                        <span>
                            Ответственный
                        </span>
                        <select class="form-control selectResponsible">
                            <option value="Днепропетровкая область">Святослав Райский</option>
                            <option value="Днепропетровкая область">Святослав Райский</option>
                            <option value="Днепропетровкая область">Святослав Райский</option>
                            <option value="Днепропетровкая область">Святослав Райский</option>
                        </select>
                    </div><!-- form group -->
                    <button type="button" class="btn btn-lg filterStart btn-primary">Применить</button>
                </form>
                <div class="wrap">
                    <div class="wrapBTN--SB">
                        <p >
                            Святослав Райский
                        </p>
                        <p>
                            <a href="#">
                                АН "Вариант"
                            </a>
                        </p>
                    </div><!-- wrapBTN--SB -->
                    <div>
                        <table class="table tableTel noBorder">
                            <tr>
                                <td>
                                            <span class="small--grey">
                                                Объекты:
                                            </span>
                                </td>
                                <td>
                                    <a href="#">4 +</a>  <a href="#">3</a> <span class="LabelIteam--green">ЭКС</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                            <span class="small--grey">
                                                Заявки:
                                            </span>
                                </td>
                                <td>
                                    <a href="">
                                        10
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                            <span class="small--grey">
                                                Телефон:
                                            </span>
                                </td>
                                <td>
                                    <p>
                                        <a href="tel:+380967969966">+380967969966</a>
                                        <a href="viber://chat?number=+380967969966">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 1C3.68634 1 1 3.68634 1 7C1 8.23972 1.37614 9.39131 2.02041 10.3472L1 13L3.72814 12.0255C4.66993 12.6396 5.79214 13 7 13C10.3137 13 13 10.3137 13 7C13 3.68634 10.3137 1 7 1Z" stroke="#9B51E0" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.3634 7.93068C6.03192 8.59921 7.50233 9.47059 8.18693 9.47059C8.87152 9.47059 9.47055 8.88243 9.47055 8.44413V7.93068C9.47055 7.93068 8.83938 7.62053 8.44365 7.41723C8.04792 7.21394 7.41719 7.93068 7.41719 7.93068C7.41719 7.93068 6.6948 7.72217 6.13357 7.16051C5.5719 6.59928 5.3634 5.87689 5.3634 5.87689C5.3634 5.87689 6.08014 5.24616 5.87684 4.85043C5.67355 4.4547 5.3634 3.82353 5.3634 3.82353H4.84995C4.41165 3.82353 3.82349 4.42255 3.82349 5.10715C3.82349 5.79175 4.69487 7.26216 5.3634 7.93068Z" stroke="#9B51E0" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </p>
                                    <p>
                                        <a href="tel:+380967969966">+380967969966</a>
                                    </p>
                                    <p>
                                        <a href="tel:+380967969966">+380967969966</a>
                                    </p>
                                    <p>
                                        <a href="tel:+380967969966">+380967969966</a>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="space-5px"></div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                            <span class="small--grey">
                                                e-mail:
                                            </span>
                                </td>
                                <td>
                                    <a href="mailto:rayskiy.svyat@gmail.com">
                                        rayskiy.svyat@gmail.com
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div><!-- wrap -->
            </div><!-- col -->
            <div class="col col-lg-12 col-xl-9 col-md-12 col-12 wrap heigh100vh ">
                <nav>
                    <div class="nav nav-tabs tabsObject" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ЗАПРОСЫ НА СДЕЛКУ (2)</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">СДЕЛКИ (0)</a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <div class="wrapTableObject">
                            <h5 class="bg-lightPink titelTableObject">
                                Запросы на сделку (2)
                            </h5>
                            <table class="table tableObject--reqvest">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" class="checkAll">
                                    </th>
                                    <th>
                                        №
                                    </th>
                                    <th>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        1
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                        </div><!-- wrapTableObject -->

                        <!-- ============ -->

                        <div class="wrapTableObject">
                            <h5 class="bg-lightCrema titelTableObject">
                                Активные обЪекты (3)
                            </h5>
                            <table class="table tableObject--reqvest">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" class="checkAll">
                                    </th>
                                    <th>
                                        №
                                    </th>
                                    <th>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        1
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        3
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                        </div><!-- wrapTableObject -->

                        <!-- ================ -->

                        <div class="wrapTableObject">
                            <h5 class="bg-lightBlue titelTableObject">
                                ВСТРЕЧНАЯ ПОДБОРКА ОБЪЕКТОВ (5)
                            </h5>
                            <table class="table tableObject--reqvest">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" class="checkAll">
                                    </th>
                                    <th>
                                        №
                                    </th>
                                    <th>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        1
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        3
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        4
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        5
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                        </div><!-- wrapTableObject -->
                    </div><!-- id="nav-home" -->
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                        <div class="wrapTableObject">
                            <h5 class="bg-lightGreen titelTableObject">
                                сделка
                            </h5>
                            <table class="table tableObject--reqvest">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" class="checkAll">
                                    </th>
                                    <th>
                                        №
                                    </th>
                                    <th>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                </tbody>
                            </table>
                        </div><!-- wrapTableObject -->

                        <!-- ============ -->

                        <div class="wrapTableObject">
                            <h5 class="bg-lightCrema titelTableObject">
                                Активные обЪекты (3)
                            </h5>
                            <table class="table tableObject--reqvest">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" class="checkAll">
                                    </th>
                                    <th>
                                        №
                                    </th>
                                    <th>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        1
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        3
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                        </div><!-- wrapTableObject -->

                        <!-- ================ -->

                        <div class="wrapTableObject">
                            <h5 class="bg-lightBlue titelTableObject">
                                ВСТРЕЧНАЯ ПОДБОРКА ОБЪЕКТОВ (5)
                            </h5>
                            <table class="table tableObject--reqvest">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" class="checkAll">
                                    </th>
                                    <th>
                                        №
                                    </th>
                                    <th>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        1
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        3
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        4
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                                        5
                                    </td>
                                    <td>
                                        <a href="#">
                                            <i class="sprite sprite-menu"></i>
                                        </a>
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
                        </div><!-- wrapTableObject -->
                    </div><!-- id="nav-profile" -->
                </div>
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
<script src="/js/libs/jquery-3.3.1.min.js"   ></script>
<script src="/js/libs/bootstrap.min.js"     defer ></script>
<script src="/js/libs/slick.min.js"         defer ></script>
<script src="/js/my.js"                     defer ></script>
</body>
</html>
<script src="../js/libs/jquery-3.3.1.min.js"   ></script>
<script src="../js/libs/bootstrap.min.js"     defer ></script>
<script src="../js/libs/slick.min.js"         defer ></script>
<script src="../js/my.js"                     defer ></script>
<script src="//api.bitrix24.com/api/v1/dev/"></script>

<script>
    $(document).ready(function(){


        var width = $('body').width();
        var height = $('body').height();

        BX24.resizeWindow(width, height);
    });

</script>
</body>
</html>