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

<div class="rootWrap">

    <section class="container-fluid">
        <div class="row border-b">
            <div class="col col-12 col-md-12 col-xl-3">
                <div class="group-btn wrapBTN--SB btn-group-toggle formFilter-row1 formFilter-row" data-toggle="buttons">
                    <label class="btn btn-secondary active INS-btn-toogle--a">
                        <input type="radio" name="options" id="option1" autocomplete="off" checked> Все
                    </label>
                    <label class="btn btn-secondary INS-btn-toogle--a" >
                        <input type="radio" name="options" id="option2" autocomplete="off">  В работе
                    </label>
                    <label class="btn btn-secondary INS-btn-toogle--a">
                        <input type="radio" name="options" id="option3" autocomplete="off"> В сделке
                    </label>
                    <label class="btn btn-secondary INS-btn-toogle--a" >
                        <input type="radio" name="options" id="option3" autocomplete="off">  Выполнена
                    </label>
                </div>

            </div><!-- col -->
            <div class="col col-md-12 col-12 col-xl-9">
                <div class="wrapBTN--SB xsColumn">

                    <div class="wrapBTN--center xsColumn">

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

                    </div><!-- wrapBTN--center -->


                    <nav aria-label="breadcrumb" class="float-right">
                        <ol class="breadcrumb bg-none margin-none">
                            <li class="breadcrumb-item"><a href="#" onclick="history.back();">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Заявки</li>
                        </ol>
                    </nav>
                </div><!-- wrapBTN--center -->
            </div><!-- col -->
        </div><!-- end row -->
        <div class="row">
            <div class="col col-lg-4 col-xl-4 col-12 col-md-12 ins-col-xl-12 object-filter">
                <form action="#" method="POST" class="formFilter">

                    <div class="wrapBTN--SB formFilter-row ">

                        <div class="bTitle w-50" >
                            <span>
                                Тип заявки
                            </span>
                            <select class="form-control select-normal selectObjeckFilter" >
                                <option value="Днепропетровкая область">Покупка</option>
                                <option value="Днепропетровкая область">Покупка</option>
                                <option value="Днепропетровкая область">Продажа</option>
                                <option value="Днепропетровкая область">Покупка</option>
                            </select>
                        </div><!-- bTitle -->

                    </div><!-- wrapBTN--SB -->


                    <div class="">
                        <div class="wrapBTN--SB">
                            <div class="bTitle">
                                        <span>
                                            Цена
                                        </span>
                                <input type="number" class="w" step="10" min="0">
                            </div><!-- bTitle -->

                            <div class="bTitle">
                                        <span class="hasInpuut">
                                            <input type="radio" id="inputForObject">
                                            <label for="inputForObject">За обьект</label>
                                        </span>
                                <input type="number" step="10" min="0">
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
                </form>
            </div><!-- col -->
            <div class="col col-lg-12 col-xl-9 col-md-12 col-12 wrap heigh100vh">

                <div class="wrapTableObject">
                    <table class="table tableObject">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>
                                <a href="#">
                                    <i class="sprite sprite-menu"></i>
                                </a>
                            </th>
                            <th>
                                Рез
                            </th>
                            <th>
                                Обьект
                            </th>
                            <th>
                                Запрос (описание заявки)
                            </th>
                            <th>
                                Площадь, м<sup>2</sup>
                            </th>
                            <th>
                                Этаж
                            </th>
                            <th>
                                Комнат
                            </th>
                            <th>
                                Бюджет, $
                            </th>
                            <th>
                                Расположение
                            </th>
                            <th>
                                Ответственный
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href="#">
                                    <i class="sprite sprite-menu"></i>
                                </a>
                            </td>
                            <td>
                                <p>
                                        <span class="green">
                                            6
                                        </span>
                                    <span class="red">
                                            (+3)
                                        </span>
                                </p>
                            </td>
                            <td>
                                <p>
                                    Квартира Дом
                                </p>
                            </td>
                            <td>
                                <a href="bids2.php">
                                    Необходимо купить кваритру в центральной части города, желательно в новом ЖК.
                                </a>
                            </td>
                            <td>
                                60-80
                            </td>
                            <td>
                                4 / 11
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                120 000 - 150 000
                            </td>
                            <td>
                                Центр, Воказал, Левый берег
                            </td>
                            <td>
                                <a href="#">Святослав Райский</a>
                                <span class="gray">
                                        AH "Вариант"
                                    </span>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <a href="#">
                                    <i class="sprite sprite-menu"></i>
                                </a>
                            </td>
                            <td>
                                <p>
                                            <span class="green">
                                                6
                                            </span>
                                    <span class="red">
                                                (+3)
                                            </span>
                                </p>
                            </td>
                            <td>
                                <p>
                                    Квартира Дом
                                </p>
                            </td>
                            <td>
                                <a href="bids2.php">
                                    Необходимо купить кваритру в центральной части города, желательно в новом ЖК.
                                </a>
                            </td>
                            <td>
                                60-80
                            </td>
                            <td>
                                4 / 11
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                120 000 - 150 000
                            </td>
                            <td>
                                Центр, Воказал, Левый берег
                            </td>
                            <td>
                                <a href="#">Святослав Райский</a>
                                <span class="gray">
                                            AH "Вариант"
                                        </span>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <a href="#">
                                    <i class="sprite sprite-menu"></i>
                                </a>
                            </td>
                            <td>
                                <p>
                                                <span class="green">
                                                    7
                                                </span>
                                </p>
                            </td>
                            <td>
                                <p>
                                    Квартира Дом

                                </p>
                            </td>
                            <td>
                                <a href="bids2.php">
                                    Необходимо купить кваритру в центральной части города, желательно в новом ЖК.
                                </a>
                            </td>
                            <td>
                                60-80
                            </td>
                            <td>
                                4 / 11
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                120 000 - 150 000
                            </td>
                            <td>
                                Центр, Воказал, Левый берег
                            </td>
                            <td>
                                <a href="#">Святослав Райский</a>
                                <span class="gray">
                                                AH "Вариант"
                                            </span>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div><!-- wrapTableObject -->
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