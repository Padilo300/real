
<?php
$url = json_decode($_REQUEST['PLACEMENT_OPTIONS'],1);
if($url['url'] == ''){
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="../../css/semantic.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
    <link rel="stylesheet" href="../../css/leaflet-routing-machine.css" />
    <link rel="stylesheet" type="text/css" href="../../css/fancybox.css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500i,700,900&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/contact_detail.css">
    <link rel="stylesheet" href="../../css/contact_table.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <!--<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.2/autosize.min.js"></script>
    <script src="//api.bitrix24.com/api/v1/"></script>
    <script src="../../js/OpenLayers.js"></script>
    <!--<script src="../js/script.js"></script>-->
    <script src="../../js/lightbox.js"></script>
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
            integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
            crossorigin=""></script>
    <script src="../../js/leaflet-routing-machine.min.js"></script>

    <script type="text/javascript" src="../../js/js_jquery.js"></script>
    <script type="text/javascript" src="../../js/core_ajaxconst.php"></script>
    <script type="text/javascript" src="../../js/jquery.selectbox.js"></script>
    <script type="text/javascript" src="../../js/js_scripts.js"></script>
    <script type="text/javascript">
        function setBigImage(foto) {
            $("#adpdp14").attr('href', $(foto).parent('.it').children('a').attr('href'));
            document.getElementById("dp14").src = foto.src;
        }
    </script>

    <script src="../../js/echarts.js"></script>
    <script src="../../js/semantic.min.js"></script>

    <!--<a href="#" id="back-button" onclick="history.back();" style="">-->
    <!--    <i class="fas fa-chevron-circle-left fa-3x"></i>-->
    <!--</a>-->
<?}?>
<script type="text/javascript" src="../../js/js_scripts.js"></script>

<div class="detail-main-content">
    <div class="ui stackable three column grid detail-top">
        <div class="column left-header">
            <div class="detail-title">
                Продам квартиру Героев Сталинграда просп., 4А, Оболонский р-н, Киев
                <!--                <div class="ui checkbox star" title="Добавить в избранное">-->
                <!--                    <input type="checkbox" tabindex="0" class="hidden">-->
                <!--                </div>-->
            </div>
        </div>
        <div class="column center-header">
            <div class="price-block">
                <div class="current-price"><span class="price">2 777 247</span><span class="currency"> ₴</span></div>
                <div class="config-price">
                    <div class="metr"><span>55 544</span>/м<sup>2</sup></div>
                    <div class="set-price">
                        <div class="col">
                            <span class="uah active"><i>грн</i></span>
                            <span class="usd"><i>долл</i></span>
                        </div>
                        <div class="col">
                            <span class="eur"><i>евро</i></span>
                            <span class="rub"><i>руб</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column right-header">
            <div class="row">
                <div class="ui menu control-menu">
                    <a class="item" onclick="alert('Открывается форма редактирования обекта');">Редактировать</a>
                    <!--                    <a class="item">Сохранить *.pdf</a>-->
                    <a class="item" onclick="history.back();">Назад</a>
                    <a class="item" onclick="location.reload();">Обновить</a>

                </div>
            </div>
            <div class="row">
                <div class="ui pointing secondary menu obj-menu">
                    <a class="item active" data-tab="generalt">Общие</a>
                    <a class="item" data-tab="bids">Заявки</a>
                    <a class="item" data-tab="connections">Связи</a>
                    <a class="item " data-tab="documents">Документы</a>
                    <a class="item " data-tab="analogs">Аналоги</a>
                </div>
            </div>
            <!--            <a href="#" id="back-button" onclick="history.back();">-->
            <!--                <i class="fas fa-chevron-circle-left fa-3x"></i>-->
            <!--            </a>-->

        </div>
    </div>
    <hr>
    <div class="ui two column grid equal width main-tabs">
        <div class="five wide column left-block">
            <div class="img">
                <div class="label-block">
                    <a class="ui red right ribbon label">ТОП</a>
                    <a class="ui blue right ribbon label">Новинка</a>
                    <a class="ui orange right ribbon label">PRO</a>
                    <a class="ui teal right ribbon label">Проверено</a>
                </div>
                <!--                <a href="http://remoo.ru/wp-content/uploads/2017/04/kvartira-studiya-planirovka-interer-i-foto-1.jpg" rel="example_group" id="adpdp14">-->
                <div rel="example_group" id="adpdp14">
                    <img src="https://rieltor-ua-01.appspot.com/555x416/1/offers/650/50/0/1610696658678650.jpg" id="dp14" style="margin-bottom: 3px;" alt="" />
                </div>
            </div>
            <div class="thumbs">
                <div class="it">
                    <a style="display:none;" href="http://remoo.ru/wp-content/uploads/2017/04/kvartira-studiya-planirovka-interer-i-foto-1.jpg" rel="example_group"></a>
                    <img src="https://rieltor-ua-01.appspot.com/555x416/1/offers/438/38/8/1610696657766438.jpg" onclick='setBigImage(this);' alt="" />
                </div>

                <div class="it">
                    <a style="display:none;" href="https://nedvizhimostpro.kz/uploads/apartments/19374/pictures/ae011db40778.jpeg" rel="example_group"></a>
                    <img src="https://rieltor-ua-01.appspot.com/555x416/1/offers/687/87/7/1610696657810687.jpg" onclick='setBigImage(this);' alt="" />
                </div>

                <div class="it">
                    <a style="display:none;" href="http://remoo.ru/wp-content/uploads/2017/04/kvartira-studiya-planirovka-interer-i-foto-1.jpg" rel="example_group"></a>
                    <img src="https://rieltor-ua-01.appspot.com/555x416/1/offers/898/98/8/1610696657779898.jpg" onclick='setBigImage(this);' alt="" />
                </div>

                <div class="it">
                    <a style="display:none;" href="https://nedvizhimostpro.kz/uploads/apartments/19374/pictures/ae011db40778.jpeg" rel="example_group"></a>
                    <img src="https://rieltor-ua-01.appspot.com/555x416/1/offers/782/82/2/1610696658819782.jpg" onclick='setBigImage(this);' alt="" />
                </div>

                <div class="it">
                    <a style="display:none;" href="http://remoo.ru/wp-content/uploads/2017/04/kvartira-studiya-planirovka-interer-i-foto-1.jpg" rel="example_group"></a>
                    <img src="https://rieltor-ua-01.appspot.com/555x416/1/offers/268/68/8/1610696658799268.jpg" onclick='setBigImage(this);' alt="" />
                </div>

                <div class="it">
                    <a style="display:none;" href="https://nedvizhimostpro.kz/uploads/apartments/19374/pictures/ae011db40778.jpeg" rel="example_group"></a>
                    <img src="https://rieltor-ua-01.appspot.com/555x416/1/offers/949/49/9/1610696659731949.jpg" onclick='setBigImage(this);' alt="" />
                </div>




                <div class="clr"></div>

            </div>

            <div style="padding-left:0!important;padding-right:0!important;" class="five wide right-block">
                <div class="contact-block-fixed">
                    <div class="photo">
                        <img src="http://asnu.com.ua/images/2018/03/15/rayskiy_sayt.jpg" alt="">
                    </div>
                    <div>
                        <div class="info">
                            <div class="company insiderModal-open"  data-insiderModal-open="modal-AH" ><span>Компания: </span><span>Вавилон</span><span class="status"> (партнер)</span></div>
                            <div class="post"><span>Должность: </span><span class=" insiderModal-open" data-insiderModal-open="modal1">риелтор</span></div>
                            <div class="objects"><span>Объекты: </span><span><a href="#" class=" insiderModal-open" data-insiderModal-open="modal2">2</a></span></div>
                        </div>
                        <div class="contacts">
                            <span class="inner-header">Контактная информация</span>
                            <div class="email"><span>E-mail: </span><span><a href="mailto:svyat@insidergroup.pro">svyat@insidergroup.pro</a></span></div>
                            <div class="phone"><span>Телефон: </span><span>38098730-25-97</span></div>
                            <div class="skype"><span>Skype: </span><span><a href="">raiskiysviatoslav</a></span></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="ui eleven wide column tab active" data-tab="generalt">
            <div class="ui grid">
                <div class="row">
                    <div style="" class="fifteen wide left floated column center-block">
                        <div class="ui two column grid header-center-block">
                            <div class="column header"><span>Общая информация</span></div>
                            <div class="column exclusive"><span>эксклюзивный договор</span></div>
                        </div>
                        <div class="ui three column grid">
                            <div class="column flat">
                                <span class="inner-header">Квартира</span>
                                <ul class="info-main">
                                    <li><span>Общая площадь</span><span>50м<sup>2</sup></span></li>
                                    <li><span>Жилая площадь</span><span>35м<sup>2</sup></span></li>
                                    <li><span>Кухня</span><span>12м<sup>2</sup></span></li>
                                    <li><span>Планировка</span><span>Раздельная</span></li>
                                    <li><span>Санузел</span><span>раздельный</span></li>
                                    <li><span>Состояние</span><span>Евроремонт</span></li>
                                    <li><span>Количество балконов</span><span>1</span></li>
                                </ul>
                            </div>
                            <div class="column house">
                                <span class="inner-header">Дом</span>
                                <ul class="info-main">
                                    <li><span>Этаж</span><span>4 из 25</span></li>
                                    <li><span>Материал дома</span><span>Украинский кирпич</span></li>
                                    <li><span>Класс дома</span><span>элитный</span></li>
                                </ul>
                                <a href="houses/01.php" class="all-flats">Все квартиры в этом доме</a>
                            </div>
                            <div class="column dop-info">
                                <span class="inner-header">Дополнения</span>
                                <ul class="info-main">
                                    <li><span><i class="fas fa-list-alt"></i> Пассажирский лифт</span></li>
                                    <li><span><i class="fas fa-th-list"></i> Грузовой лифт</span></li>
                                    <li><span><i class="fas fa-phone"></i> Телефон</span></li>
                                    <li><span><i class="fas fa-parking"></i> Паркинг</span></li>
                                    <li><span><i class="far fa-trash-alt"></i> Мусоропровод</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="header"><span>Описание объекта</span></div>
                        <div class="descr">
                            Светлая двухкомнатная квартира с авторским ремонтом. 4 этаж 25 этажного кирпичного дома. Общая площадь 50 м2. Квартира с функциональной планировкой комнат, полностью укомплектована всей необходимой мебелью и техникой.
                            Возле дома школа, супермаркеты, рестораны, салон красоты. В пешей доступности Оболонская набережная, Днепр, станция метро «Оболонь». Код объекта: R47874
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="location">
                <div class="header"><span>Расположение и инфраструктура</span></div>
                <div class="location-info">
                    <div class="ui four column grid">
                        <div class="four wide column loc-info-header">
                            <span>Область</span>
                            <span>Город</span>
                            <span>Район</span>
                        </div>
                        <div class="four wide column loc-info-val">
                            <span>Киевская обл.</span>
                            <span>Киев</span>
                            <span>Оболонский</span>
                        </div>
                        <div class="four wide column loc-info-header">
                            <span>Улица</span>
                            <span>Номер дома</span>
                        </div>
                        <div class="four wide column loc-info-val">
                            <span>Проспект Героев Сталинграда</span>
                            <span>4а</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="location-map" style="width: 100%;height: 620px;">
                <div id="objMap" style="width: calc(100% - 20px); height: calc(100% - 20px); margin: 10px;"></div>
            </div>
            <br>
            <br>
            <div class="prices-dynamic">
                <div class="header"><span>Динамика цен</span></div>
                <div id="prices-chart" style="width: calc(100% - 20px); height: 420px; margin: 10px;"></div>
            </div>
            <br>
            <br>
            <div class="prices-changes">
                <div class="header"><span>Изменение цены на это объявление</span></div>
                <table class="ui very basic table">
                    <thead>
                    <tr>
                        <th>Дата</th>
                        <th>Цена</th>
                        <th>Изменилась</th>
                        <th>%</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>4 сентября 2018</td>
                        <td>2 757 247  ₴</td>
                        <td class="change-green">+20 000 ₽</td>
                        <td class="change-green">-3,4%</td>
                    </tr>
                    <tr>
                        <td>12 июля 2018</td>
                        <td> 2 777 247  ₴</td>
                        <td class="change-green"></td>
                        <td class="change-green"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <div class="sys-info">
                <div class="header"><span>Системная информация</span></div>
                <table class="ui basic table">
                    <tbody>
                    <tr>
                        <td class="name">Добавил сотрудник</td>
                        <td><a href="">insider real estate Святослав</a></td>
                        <td class="name">Источник</td>
                        <td>Соцсети</td>
                    </tr>
                    <tr>
                        <td class="name">Ответственный</td>
                        <td><a href="">insider real estate Святослав</a></td>
                        <td class="name">Добавлен</td>
                        <td>12 нояб. 2018 10:35</td>
                    </tr>
                    <tr>
                        <td class="name">Комиссия</td>
                        <td>500 грн</td>
                        <td class="name">Изменен</td>
                        <td>12 нояб. 2018 10:36</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <div class="ui eleven wide column tab" data-tab="bids">
            <div class="bids-tab">
                <div class="row">

                    <div class="col col-12">
                        <table style="min-width: auto!important; width: 98%" class="table table-bordered LEAD table-sm">
                            <thead>
                            <tr>
                                <th scope="col" class="ID">ID</th>
                                <th scope="col" class="w70px">Статус</th>
                                <th scope="col" class="w70px">Тип заявки</th>
                                <th scope="col" class="w70px">Объект</th>
                                <th scope="col" class="w70px">Результат</th>
                                <th scope="col" class="w150px">Запрос</th>
                                <th scope="col" class="w70px">Бюджет</th>
                                <th scope="col" class="w70px">Площадь</th>
                                <th scope="col" class=" w125px autorObiectTh">Расположение</th>
                                <th scope="col" class="autorObiectTh">Ответвенный</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td scope="col">231</td>
                                <td scope="col" class="adress">
                                    <b class="statusInWork">
                                        В работе
                                    </b>
                                </td>
                                <td scope="col">
                                    Покупка
                                </td>
                                <td scope="col">
                                    Квартира
                                    <br>
                                    Дом
                                </td>
                                <td scope="col">
                                    6
                                </td>
                                <td scope="col"  style="text-align: left;">
                                    <b>
                                        <u>
                                            Необходимо купить квартиру  в центральной  части города, желательно в новом ЖК.
                                        </u>
                                    </b>
                                </td>
                                <td scope="col">
                                    <b>
                                        55 000
                                        <br>
                                          -
                                          <br>
                                          70 000
                                    </b>
                                </td>

                                <td scope="col" class="discription--text">
                                    <b>
                                        60 - 80
                                    </b>
                                </td>

                                <td scope="col">
                                    Центр, Красногвардейский, Вокзал, Левый берег
                                </td>
                                <td>
                                    <figure class="autorObiect">
                                        <div class="mainFace" style="display:none;">
                                            <a href="">
                                                <img src="https://pbs.twimg.com/profile_images/609772694549213184/a_30X5Vk_400x400.jpg" alt="Лицо контакта" >
                                            </a>
                                        </div>
                                        <figcaption>
                                            <p class="name">
                                                Виктор Воловик
                                            </p>
                                            <p class="autorContact">
                                                skype: <a>skypeAdress</a>
                                            </p>
                                            <p class="autorContact">
                                                Мобильный: <a>+380967969966</a>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </td>

                            <tr>
                                <td scope="col">231</td>
                                <td scope="col" class="adress">
                                    <b class="statusCompleet">
                                        Выполнена
                                    </b>
                                </td>
                                <td scope="col">
                                    Покупка
                                </td>
                                <td scope="col">
                                    Квартира
                                    <br>
                                    Дом
                                </td>
                                <td scope="col">
                                    6
                                </td>
                                <td scope="col"  style="text-align: left;">
                                    <b>
                                        <u>
                                            Необходимо купить квартиру  в центральной  части города, желательно в новом ЖК.
                                        </u>
                                    </b>
                                </td>
                                <td scope="col">
                                    <b>
                                        55 000  
                                        <br>
                                        -
                                        <br>
                                        70 000
                                    </b>
                                </td>

                                <td scope="col" class="discription--text">
                                    <b>
                                        60 - 80
                                    </b>
                                </td>

                                <td scope="col">
                                    Центр, Красногвардейский, Вокзал, Левый берег
                                </td>
                                <td>
                                    <figure class="autorObiect">
                                        <div class="mainFace" style="display:none;">
                                            <a href="">
                                                <img src="https://pbs.twimg.com/profile_images/609772694549213184/a_30X5Vk_400x400.jpg" alt="Лицо контакта" >
                                            </a>
                                        </div>
                                        <figcaption>
                                            <p class="name">
                                                Виктор Воловик
                                            </p>
                                            <p class="autorContact">
                                                skype: <a>skypeAdress</a>
                                            </p>
                                            <p class="autorContact">
                                                Мобильный: <a>+380967969966</a>
                                            </p>
                                        </figcaption>
                                    </figure>
                                </td>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--                <div class="header"><span></span></div>-->

            </div>
        </div>
        <div class="ui eleven wide column tab" data-tab="connections">
            <div style="text-align: center" class="whois-obj">
                <div class="header"><span>Собственник объекта (если другой риелтор -- информация может быть скрыта)</span></div>
                <table class="ui selectable celled table">
                    <thead>
                    <tr>
                        <th style="width: 10px;">Дата создания</th>
                        <th style="width: 10px;">Контакт</th>
                        <th style="width: 10px;">Телефон</th>
                        <th style="width: 10px;">E-mail</th>
                        <th style="width: 10px;"> Источник</th>
                        <th style="width: 10px;">Ответсвенный</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>03.10.18</td>
                        <td><a href="https://n1insider.bitrix24.ua/crm/contact/details/11/" target="_blank">Александр</a></td>
                        <td>+38 067 635-13-22</td>
                        <td><a href="mailto:aleks@mail.com">aleks@mail.com</a></td>
                        <td>Электронная почта</td>
                        <td><a href="https://n1insider.bitrix24.ua/company/personal/user/9/" target="_blank">Святослав Райский</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <div class="whois-sale">
                <div class="header"><span>ПРОДАЖА (данные из сделок) объект продают</span></div>
                <table class="ui selectable celled table">
                    <thead>
                    <tr>
                        <th>id<br>(сделки)</th>
                        <th>Дата создания</th>
                        <th>Название</th>
                        <th>Сумма объекта</th>
                        <th>Offer</th>
                        <th>C</th>
                        <th>Ответсвенный</th>
                        <th>Телефон</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>03.10.18</td>
                        <td>Продажа, 1 ком, Винница, р-н Тяжилов, Ватутина улица, дом 1378</td>
                        <td style="white-space: nowrap">$42 000.00</td>
                        <td class="green" style="white-space: nowrap">$39 000.00</td>
                        <td class="green">AH+</td>
                        <td>Святослав Райский (АН "Вариант")</td>
                        <td style="white-space: nowrap">+38 067 635-13-22</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>01.10.18</td>
                        <td>Продажа, 1 ком, Винница, р-н Тяжилов, Ватутина улица, дом 1378</td>
                        <td style="white-space: nowrap">$45 000.00</td>
                        <td class="green" style="white-space: nowrap">$43 000.00</td>
                        <td>Р</td>
                        <td>Андрей (реэлтор)</td>
                        <td style="white-space: nowrap">+38 067 635-13-22</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>02.10.18</td>
                        <td>1 ком, Винница, р-н Тяжилов, Ватутина улица, дом 1378</td>
                        <td style="white-space: nowrap">$38 000.00</td>
                        <td style="white-space: nowrap">$36 000.00</td>
                        <td class="green">Р+</td>
                        <td>Андрей (реэлтор)</td>
                        <td style="white-space: nowrap">+38 067 635-13-22</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>04.10.18</td>
                        <td>Продажа, 1 ком, Винница, р-н Тяжилов, Ватутина улица, дом 1378</td>
                        <td style="white-space: nowrap">$45 000.00</td>
                        <td class="green" style="white-space: nowrap">$35 000.00</td>
                        <td>AH</td>
                        <td>Святослав Райский (АН "Вариант")</td>
                        <td style="white-space: nowrap">+38 067 635-13-22</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <br>
            <div class="like-obj">
                <div class="header"><span>ПРЕДЛОЖЕНИЕ (данные из сделок) объект участвует в подборках</span></div>
                <table class="ui selectable celled table">
                    <thead>
                    <tr>
                        <th>id<br>(сделки)</th>
                        <th>Дата создания</th>
                        <th>Название</th>
                        <th>Сумма объекта</th>
                        <th>Offer</th>
                        <th>C</th>
                        <th>Ответсвенный</th>
                        <th>Телефон</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>03.10.18</td>
                        <td>Продажа квартиры, 1 ком, Винница, р-н Тяжилов, Ватутина улица, дом 1378</td>
                        <td style="white-space: nowrap">$42 000.00</td>
                        <td class="green" style="white-space: nowrap">$39 000.00</td>
                        <td class="green">AH+</td>
                        <td>Святослав Райский (АН "Вариант")</td>
                        <td style="white-space: nowrap">+38 067 635-13-22</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>01.10.18</td>
                        <td>Продажа, 1 ком, Винница, р-н Тяжилов, Ватутина улица, дом 1378</td>
                        <td style="white-space: nowrap">$45 000.00</td>
                        <td class="green" style="white-space: nowrap">$43 000.00</td>
                        <td>Р</td>
                        <td>Андрей (реэлтор)</td>
                        <td style="white-space: nowrap">+38 067 635-13-22</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>02.10.18</td>
                        <td>1 ком, Винница, р-н Тяжилов, Ватутина улица, дом 1378</td>
                        <td style="white-space: nowrap">$38 000.00</td>
                        <td style="white-space: nowrap">$36 000.00</td>
                        <td class="green">Р+</td>
                        <td>Андрей (реэлтор)</td>
                        <td style="white-space: nowrap">+38 067 635-13-22</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>04.10.18</td>
                        <td>Продажа, 1 ком, Винница, р-н Тяжилов, Ватутина улица, дом 1378</td>
                        <td style="white-space: nowrap">$45 000.00</td>
                        <td class="green" style="white-space: nowrap">$35 000.00</td>
                        <td>AH</td>
                        <td>Святослав Райский (АН "Вариант")</td>
                        <td style="white-space: nowrap">+38 067 635-13-22</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="ui eleven wide column tab" data-tab="documents">
            <table class="ui selectable celled table">
                <thead>
                <tr>
                    <th>Дата</th>
                    <th>Название документа</th>
                    <th>Статус</th>
                    <th>Скачать</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>03.10.18</td>
                    <td>Договор купли продажи_id_25</td>
                    <td class="green">Подписан</td>
                    <td style="text-align: center; cursor: pointer;"><i class="fas fa-file-download fa-2x"></i></td>
                </tr>
                <tr>
                    <td>05.10.18</td>
                    <td>Договор аренды_id_17</td>
                    <td class="red">Отклонен</td>
                    <td style="text-align: center; cursor: pointer;"><i class="fas fa-file-download fa-2x"></i></td>
                </tr>
                <tr>
                    <td>07.10.18</td>
                    <td>Нотариальная доверенность</td>
                    <td class="orange">На рассмотрении</td>
                    <td style="text-align: center; cursor: pointer;"><i class="fas fa-file-download fa-2x"></i></td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="ui eleven wide column tab" data-tab="analogs">
            <div class="ui form">
                <div class="inline fields" style="margin: 0;">
                    <div class="field" id="top-sort">
                        <label>Сортировка</label>
                        <select name="" id="">
                            <option value="">Необычная</option>
                            <option value="">Обычная</option>
                        </select>

                        <label>Период подачи</label>
                        <select name="" id="">
                            <option value="">Не все</option>
                            <option value="">Все</option>
                        </select>

                        <button class="btn btn-default" id="show_table"><i class="fas fa-th-list"></i></button>
                        &nbsp;
                        <button class="btn btn-default" id="show_list"><i class="fas fa-bars"></i></button>
                    </div>
                </div>
            </div>

            <div class="elements-wrapper">
                <div class="element arch ui grid" id="seven">
                    <div class="seven wide column img" style="background: url(https://storage.googleapis.com/rieltor-ua-01/offers/209/9/9/1610322752650209.jpg);">
                    </div>
                    <div class="nine wide column data" style="height: 100%;">
                        <div class="ui checkbox check" title="Отметить">
                            <input type="checkbox" tabindex="0" class="hidden">
                        </div>
                        <span class="element-title"><a href="8717590.php">Тимошенко маршала ул., 13А, Оболонский р-н, Киев</a></span>
                        <!--                    <span class="element-metro"><i class="fab fa-medium"></i> ст. Советская</span>-->
                        <span class="element-price">
                                <div class="usd">95 000 $</div>
                                /
                                <div class="uah">2 665 035 грн.</div>
                            </span>
                        <span class="element-short-info">
                                <i class="fas fa-door-open">
                                    <span>4 ком.</span>
                                </i>
                                <i class="fas fa-th-large">
                                    <span>85/55/8</span>
                                </i>
                                <i class="fas fa-building">
                                    <span>9/14 к.</span>
                                </i>
                            </span>
                        <span class="element-description">
                      Тимошенка 13а, квартира в гарному житловому стані, три окремі кімнати, одна-прохідна. Встановлені склопакети, єврорадіатори, натяжні стелі, меблі за домовленністю. </span>
                        <span class="element-footer">
                                <i class="far fa-clock">
                                    <span>31.08.2018</span>
                                </i>
                                <span class="assigned_by">Оксана</span>
                                <div class="ui checkbox star" title="Добавить в избранное">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                </div>
                            </span>
                    </div>
                </div>
                <div class="element arch ui grid" id="eight">
                    <div class="seven wide column img" style="background: url(https://rieltor-ua-01.appspot.com/555x416/1/offers/303/3/3/1618374277232303.jpg);">
                    </div>
                    <div class="nine wide column data" style="height: 100%;">
                        <div class="ui checkbox check" title="Отметить">
                            <input type="checkbox" tabindex="0" class="hidden">
                        </div>
                        <span class="element-title"><a href="8878544.php">Кондратюка Юрия ул., 5, Оболонский р-н, Киев</a></span>
                        <!--                    <span class="element-metro"><i class="fab fa-medium"></i> ст. Советская</span>-->
                        <span class="element-price">
                                <div class="usd">82 000 $</div>
                                /
                                <div class="uah">2 300 346 грн.</div>
                            </span>
                        <span class="element-short-info">
                                <i class="fas fa-door-open">
                                    <span>2 ком.</span>
                                </i>
                                <i class="fas fa-th-large">
                                    <span>69/31/17</span>
                                </i>
                                <i class="fas fa-building">
                                    <span>21/26 к.</span>
                                </i>
                            </span>
                        <span class="element-description">
                     В квартире 2 комнаты. Общее состояние квартиры - евроремонт        <span class="element-footer">
                                <i class="far fa-clock">
                                    <span>28.11.2018</span>
                                </i>
                                <span class="assigned_by">Екатерина</span>
                                <div class="ui checkbox star" title="Добавить в избранное">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                </div>
                            </span>
                    </div>
                </div>
            </div>

            <div class="element-list-wrapper">
                <div class="element-list no_my" id="seven" style="">
                    <div>1 ком</div>
                    <div>Киев, Оболонский</div>
                    <div><a href="8724280.php">Героев Сталинграда просп., 53Б</a></div>
                    <div>59/15/10</div>
                    <div>20/24</div>
                    <div>86 000 $</div>
                    <div>Сергей</div>
                    <div class="ui checkbox star" title="Добавить в избранное">
                        <input type="checkbox" tabindex="0" class="hidden">
                    </div>
                </div>
                <div class="element-list arch" id="eight" style="">
                    <div>1 ком</div>
                    <div>Киев, Оболонский</div>
                    <div><a href="8153359.php">Героев Сталинграда., 2Д</a></div>
                    <div>54/24/11</div>
                    <div>9/24</div>
                    <div>83 000 $</div>
                    <div>Юрий Сергеевич</div>
                    <div class="ui checkbox star" title="Добавить в избранное">
                        <input type="checkbox" tabindex="0" class="hidden">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="insider_modal-1 insider_modal" data-insiderModal-name="modalTabs">
        <button class="insiderModal-CLOSE">
            &#215;
        </button>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Объекты</a></li>
            <li><a href="#profile" data-toggle="tab">Заявки</a></li>
            <li><a href="#messages" data-toggle="tab">Сотрудники</a></li>
        </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="home">
            <div class="ui grid" style="width: 100%;">
                <div class="element  no_my ui left floated  eight wide column grid" >
                    <div class="seven wide column img" style="background: url(https://rieltor-ua-01.appspot.com/555x416/1/offers/650/50/0/1610696658678650.jpg);">
                    </div>
                    <div class="eight wide column data" style="height: 100%;">
                        <div class="ui checkbox  check" title="Отметить">
                            <input type="checkbox" tabindex="0" class="hidden">
                        </div>
                        <span class="element-title"><a href="../8724292.php">Героев Сталинграда просп., 4А, Оболонский р-н, Киев</a></span>
                        <!--                    <span class="element-metro"><i class="fab fa-medium"></i> ст. Советская</span>-->
                        <span class="element-price">
                                <div class="usd">99 000 $</div>
                                /
                                <div class="uah">2 777 247 грн.</div>
                            </span>
                        <span class="element-short-info">
                            <i class="fas fa-door-open">
                                <span>2 ком.</span>
                            </i>
                            <i class="fas fa-th-large">
                                <span>50/35/15</span>
                            </i>
                            <i class="fas fa-building">
                                <span>4/25 п.</span>
                            </i>
                        </span>
                        <span class="element-description">
                               Светлая двухкомнатная квартира с авторским ремонтом. 4 этаж 25 этажного кирпичного дома. Общая площадь 50 м2. Квартира с функциональной планировкой комнат, полностью укомплектована всей необходимой мебелью и техникой.
                                Возле дома школа, супермаркеты, рестораны, салон красоты. В пешей доступности Оболонская набережная, Днепр, станция метро «Оболонь». Код объекта: R47874                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate                                                     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit                                                       anim id est laborum.
                        </span>
                        <span class="element-footer">
                            <i class="far fa-clock">
                                <span> 04.09.2018</span>
                            </i>
                            <span class="assigned_by">Сергей</span>
                            <div class="ui checkbox star" title="Добавить в избранное">
                                <input type="checkbox" tabindex="0" class="hidden">
                            </div>
                        </span>
                    </div><!--  class="eight wide column data" style="height: 100%;" -->
                </div><!-- end element -->

                <div class="element  no_my ui left floated  eight wide column grid" >
                    <div class="eight wide column data" style="height: 100%;">
                    </div><!--  class="eight wide column data" style="height: 100%;" -->
                </div><!-- end element -->

            </div><!-- end ui grid -->
        </div><!-- end #home -->
        
        <div class="tab-pane" id="profile">...</div>
        <div class="tab-pane" id="messages">...</div>
      </div>
    </div><!-- end modal -->





<div class="insider_modal-1 insider_modal" data-insiderModal-name="modal-AH">
    <button class="insiderModal-CLOSE"> <!-- кнопка закрывть модалку -->
        &#215; 
    </button>
    <div class="container-fluid infoObiectByStatus">
        <div class="row">
            <div class="col-md-3 col-xs-12 ">
                <h1 class="noMargin">
                    АН "ВАРИАНТ"
                </h1>
                <p>
                    Днепр, Киев
                </p>
            </div><!-- end col -->
            <div class="col col-md-9 ">
                <ul class="flexEnd nav nav-tabs " id="myTab" role="tablist">

                    <li class="nav-item active">
                        <a class="nav-link active " id="home-tab" data-toggle="tab" href="#TabDiscription" role="tab" aria-controls="home" aria-selected="true" aria-expanded="true">Обьекты АН</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#details" role="tab" aria-controls="flats" aria-selected="false">Заявки</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#TebAppartaments" role="tab" aria-controls="flats" aria-selected="false">Сотрудники</a>
                    </li>

                </ul>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">

            <div class="col-xs-12 col-md-3">
                <img src="https://variant-factory.eu/en/assets/images/news/Logo_Variant-01.jpg" alt="" class="InsiderImg">
                <a href="https://delmargroups.com/" target="_blank" class="logoAndLink-company--textLink">
                    <img src="/img/earth.svg" alt=""> delmargroups.com
                </a>
                <p>
                    Телефон: +38 067 635 1448
                </p>
            </div><!-- end col -->

                <div class="tab-content col col-12 col-md-7" id="myTabContent2">

                    <div class="tab-pane fade active in" id="TabDiscription" role="tabpanel" aria-labelledby="home-tab">
                        <div class="ui grid" style="width: 100%;">
                        <div class="element no_my ui sixteen wide wide column grid" id="two">
                            <div class="seven wide column img" style="background: url(https://rieltor-ua-01.appspot.com/555x416/1/offers/650/50/0/1610696658678650.jpg);">
                            </div>
                            <div class="eight wide column data" style="height: 100%;">
                                <div class="ui checkbox  check" title="Отметить">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                </div>
                                <span class="element-title"><a href="../8724292.php">Героев Сталинграда просп., 4А, Оболонский р-н, Киев</a></span>
                                <!--                    <span class="element-metro"><i class="fab fa-medium"></i> ст. Советская</span>-->
                                <span class="element-price">
                                        <div class="usd">99 000 $</div>
                                        /
                                        <div class="uah">2 777 247 грн.</div>
                                    </span>
                                <span class="element-short-info">
                                        <i class="fas fa-door-open">
                                            <span>2 ком.</span>
                                        </i>
                                        <i class="fas fa-th-large">
                                            <span>50/35/15</span>
                                        </i>
                                        <i class="fas fa-building">
                                            <span>4/25 п.</span>
                                        </i>
                                    </span>
                                <span class="element-description">
                                    Светлая двухкомнатная квартира с авторским ремонтом. 4 этаж 25 этажного кирпичного дома. Общая площадь 50 м2. Квартира с функциональной планировкой комнат, полностью укомплектована всей необходимой мебелью и техникой.
                                    Возле дома школа, супермаркеты, рестораны, салон красоты. В пешей доступности Оболонская набережная, Днепр, станция метро «Оболонь». Код объекта: R47874                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate                                                     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit                                                       anim id est laborum.
                                </span>
                                <span class="element-footer">
                                    <i class="far fa-clock">
                                        <span> 04.09.2018</span>
                                    </i>
                                    <span class="assigned_by">Сергей</span>
                                    <div class="ui checkbox star" title="Добавить в избранное">
                                        <input type="checkbox" tabindex="0" class="hidden">
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="element no_my ui sixteen wide column grid" id="three">
                            <div class="seven wide column img" style="background: url(https://rieltor-ua-01.appspot.com/555x416/1/offers/336/36/6/1610695803249336.jpg);">
                            </div>
                            <div class="eight wide column data" style="height: 100%;">
                                <div class="ui checkbox check" title="Отметить">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                </div>
                                <span class="element-title"><a href="../8724280.php">Героев Сталинграда просп., 53Б, Оболонский р-н, Киев</a></span>
                                <span class="element-metro"><i class="fab fa-medium"></i></span>
                                <span class="element-price">
                                        <div class="usd">86 000  $</div>
                                        /
                                        <div class="uah">2 412 558 грн.</div>
                                    </span>
                                <span class="element-short-info">
                                        <i class="fas fa-door-open">
                                            <span>1 ком.</span>
                                        </i>
                                        <i class="fas fa-th-large">
                                            <span>59/30/15 </span>
                                        </i>
                                        <i class="fas fa-building">
                                            <span>20/24 к.</span>
                                        </i>
                                </span>
                                <span class="element-description">
                                    Дом в эксплуатации - украинский кирпич, в квартире 1 комната. Планировка комнат раздельная. Общее состояние квартиры - евроремонт. Комиссия за услуги 5 %                                                     veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate                                                     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit                                                       anim id est laborum.
                                    </span>
                                <span class="element-footer">
                                <i class="far fa-clock">
                                    <span>04.09.2018</span>
                                </i>
                                <span class="assigned_by">Сергей</span>
                                    <div class="ui checkbox star" title="Добавить в избранное">
                                        <input type="checkbox" tabindex="0" class="hidden">
                                    </div>
                                </span>
                            </div>
                        </div><!-- end ui grid -->
                        </div>  <!-- ВНИМАНИЕ добавил этот закрывающий "на угад" - вылечил баг работы табов -->
                    </div><!-- end tab-pane -->

                    <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="flats-tab">
                        <div class="container-fluid">
                            <div class="row">   
                                <div class="col col-md-12 tableLeadWrap">
                                    <table class="table minW-auto table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="ID">ID</th>
                                                <th scope="col" class="discriptionObiect">Обьект</th>
                                                <th scope="col" class="rooms">Комнат</th>
                                                <th scope="col" class="level">Этаж</th>
                                                <th scope="col" class="perimetr">Площадь</th>
                                                <th scope="col" class="price">Цена</th>
                                                <th scope="col" class="priceM2">За м<sup><small>2</small></sup></th>
                                                <th scope="col" class="discription">Описание</th>
                                                <th scope="col" class="autorObiectTh">Ответвенный</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="col">231</td>
                                                <td scope="col" class="adress"><a href="https://n1insider.bitrix24.ua/marketplace/app/19/?url=8153359.php">г.Киев ул Уличная 31/11, Печерский район </a> </td>
                                                <td scope="col">3</td>
                                                <td scope="col">7/11</td>
                                                <td scope="col">90 / 53 / 11</td>
                                                <td scope="col">45 000,00</td>
                                                <td scope="col"><b>1500,00</b></td>
                                                <td scope="col" class="discription--text">
                                                    1 ком 5/9 34/17/9-кухня ул.Степана Разина. Хорошая, уютная 1-комнатная кв. в Центре города  средний 5 этаж, в отличном жилом состоянии МПО, балкон застеклен , сан узел раздельный в кафеле.
                                                </td>
                                                <td scope="col">
                                                    <figure class="autorObiect">
                                                        <div class="mainFace" style="display:none;">
                                                            <a href="">
                                                                <img src="https://pbs.twimg.com/profile_images/609772694549213184/a_30X5Vk_400x400.jpg" alt="Лицо контакта">
                                                            </a>
                                                        </div>
                                                        <figcaption>
                                                            <p class="name">
                                                                Виктор Воловик
                                                            </p>
                                                            <p class="autorContact">
                                                                skype: <a>skypeAdress</a>
                                                            </p>
                                                            <p class="autorContact">
                                                                Мобильный: <a>+380967969966</a>
                                                            </p>
                                                        </figcaption>
                                                    </figure>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="col">231</td>
                                                <td scope="col" class="adress"><a href="https://goo.gl/maps/XeUKMFCR6hp" target="_blank">г.Киев ул Уличная 31/11, Печерский район</a> </td>
                                                <td scope="col">3</td>
                                                <td scope="col">7/11</td>
                                                <td scope="col">90 / 53 / 11</td>
                                                <td scope="col">45 000,00</td>
                                                <td scope="col"><b>1500,00</b></td>
                                                <td scope="col" class="discription--text">
                                                    1 ком 5/9 34/17/9-кухня ул.Степана Разина. Хорошая, уютная 1-комнатная кв. в Центре города  средний 5 этаж, в отличном жилом состоянии МПО, балкон застеклен , сан узел раздельный в кафеле.
                                                </td>
                                                <td scope="col">
                                                    <figure class="autorObiect">
                                                        <div class="mainFace" style="display:none;">
                                                            <a href="">
                                                                <img src="https://pbs.twimg.com/profile_images/609772694549213184/a_30X5Vk_400x400.jpg" alt="Лицо контакта">
                                                            </a>
                                                        </div>
                                                        <figcaption>
                                                            <p class="name">
                                                                Виктор Воловик
                                                            </p>
                                                            <p class="autorContact">
                                                                skype: <a>skypeAdress</a>
                                                            </p>
                                                            <p class="autorContact">
                                                                Мобильный: <a>+380967969966</a>
                                                            </p>
                                                        </figcaption>
                                                    </figure>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end container-fluid -->
                      
                    </div><!-- end tab #datails -->

                    <div class="tab-pane fade" id="TebAppartaments" role="tabpanel" aria-labelledby="flats-tab">
                       <table class="table noBorder" style="min-width: auto;" >
                           <tbody >
                                <tr>
                                    <th>ФИО</th>
                                    <th>Контакты</th>
                                    <th>Оъекты</th>
                                    <th>Заявки</th>
                                </tr>
                               <tr>
                                   <td>
                                        <figure class="autorObiect">
                                            <div class="mainFace" style="display:none;">
                                                <a href="">
                                                    <img src="https://pbs.twimg.com/profile_images/609772694549213184/a_30X5Vk_400x400.jpg" alt="Лицо контакта">
                                                </a>
                                            </div>
                                            <figcaption>
                                                <p class="name">
                                                    Виктор Воловик 
                                                    <a href="#">⚙</a> 
                                                </p>
                                                <p class="autorContact">
                                                    Директор
                                                </p>
                                            </figcaption>
                                        </figure>
                                   </td>
                                   <td>
                                        <figure class="autorObiect">
                                            <figcaption>
                                                <p class="autorContact">
                                                    skype: <a>skypeAdress</a>
                                                </p>
                                                <p class="autorContact">
                                                    Мобильный: <a>+380967969966</a>
                                                </p>
                                            </figcaption>
                                        </figure>
                                   </td>
                                   <td>12</td>
                                   <td>12</td>
                               </tr>
                           </tbody>
                       </table>
                    </div>
                </div><!-- end tab-content -->
               
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end modal -->

<div class="insider_modal-1 insider_modal" data-insiderModal-name="modal1">
    <button class="insiderModal-CLOSE"> <!-- кнопка закрывть модалку -->
        &#215; 
    </button>
    <div class="container-fluid infoObiectByStatus">
        <div class="row">
            <div class="col-md-3 col-xs-12 ">
                <h1 class=" mainName">
                    <small>Риелтор:</small> 
                    Святослав Райский
                </h1>
            </div><!-- end col -->
            <div class="col col-md-9 ">
                <ul class="flexEnd nav nav-tabs " id="myTab" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active " id="home-tab" data-toggle="tab" href="#TabDiscription2" role="tab" aria-controls="home" aria-selected="true" aria-expanded="true">Обьекты АН</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#details2" role="tab" aria-controls="flats" aria-selected="false">Заявки</a>
                    </li>
                </ul>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">

            <div class="col-xs-12 col-md-3">
                <img src="http://asnu.com.ua/images/2018/03/15/rayskiy_sayt.jpg" alt="" class="InsiderImg rieltorName">
                <a href="https://delmargroups.com/" target="_blank" class="logoAndLink-company--textLink" style="margin: 0;">
                    <img src="/img/earth.svg" alt=""> delmargroups.com
                </a>
                <p>
                    Телефон: +38 067 635 1448
                </p>
            </div><!-- end col -->

                <div class="tab-content col col-12 col-md-9" id="myTabContent2">

                    <div class="tab-pane fade active in" id="TabDiscription2" role="tabpanel" aria-labelledby="home-tab">
                        <div class="ui grid" style="width: 100%;">
                        <div class="element no_my ui sixteen wide wide column grid" id="two">
                            <div class="seven wide column img" style="background: url(https://rieltor-ua-01.appspot.com/555x416/1/offers/650/50/0/1610696658678650.jpg);">
                            </div>
                            <div class="eight wide column data" style="height: 100%;">
                                <div class="ui checkbox  check" title="Отметить">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                </div>
                                <span class="element-title"><a href="../8724292.php">Героев Сталинграда просп., 4А, Оболонский р-н, Киев</a></span>
                                <!--                    <span class="element-metro"><i class="fab fa-medium"></i> ст. Советская</span>-->
                                <span class="element-price">
                                        <div class="usd">99 000 $</div>
                                        /
                                        <div class="uah">2 777 247 грн.</div>
                                    </span>
                                <span class="element-short-info">
                                        <i class="fas fa-door-open">
                                            <span>2 ком.</span>
                                        </i>
                                        <i class="fas fa-th-large">
                                            <span>50/35/15</span>
                                        </i>
                                        <i class="fas fa-building">
                                            <span>4/25 п.</span>
                                        </i>
                                    </span>
                                <span class="element-description">
                                    Светлая двухкомнатная квартира с авторским ремонтом. 4 этаж 25 этажного кирпичного дома. Общая площадь 50 м2. Квартира с функциональной планировкой комнат, полностью укомплектована всей необходимой мебелью и техникой.
                                    Возле дома школа, супермаркеты, рестораны, салон красоты. В пешей доступности Оболонская набережная, Днепр, станция метро «Оболонь». Код объекта: R47874                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate                                                     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit                                                       anim id est laborum.
                                </span>
                                <span class="element-footer">
                                    <i class="far fa-clock">
                                        <span> 04.09.2018</span>
                                    </i>
                                    <span class="assigned_by">Сергей</span>
                                    <div class="ui checkbox star" title="Добавить в избранное">
                                        <input type="checkbox" tabindex="0" class="hidden">
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="element no_my ui sixteen wide column grid" id="three">
                            <div class="seven wide column img" style="background: url(https://rieltor-ua-01.appspot.com/555x416/1/offers/336/36/6/1610695803249336.jpg);">
                            </div>
                            <div class="eight wide column data" style="height: 100%;">
                                <div class="ui checkbox check" title="Отметить">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                </div>
                                <span class="element-title"><a href="../8724280.php">Героев Сталинграда просп., 53Б, Оболонский р-н, Киев</a></span>
                                <span class="element-metro"><i class="fab fa-medium"></i></span>
                                <span class="element-price">
                                        <div class="usd">86 000  $</div>
                                        /
                                        <div class="uah">2 412 558 грн.</div>
                                    </span>
                                <span class="element-short-info">
                                        <i class="fas fa-door-open">
                                            <span>1 ком.</span>
                                        </i>
                                        <i class="fas fa-th-large">
                                            <span>59/30/15 </span>
                                        </i>
                                        <i class="fas fa-building">
                                            <span>20/24 к.</span>
                                        </i>
                                </span>
                                <span class="element-description">
                                    Дом в эксплуатации - украинский кирпич, в квартире 1 комната. Планировка комнат раздельная. Общее состояние квартиры - евроремонт. Комиссия за услуги 5 %                                                     veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate                                                     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit                                                       anim id est laborum.
                                    </span>
                                <span class="element-footer">
                                <i class="far fa-clock">
                                    <span>04.09.2018</span>
                                </i>
                                <span class="assigned_by">Сергей</span>
                                    <div class="ui checkbox star" title="Добавить в избранное">
                                        <input type="checkbox" tabindex="0" class="hidden">
                                    </div>
                                </span>
                            </div>
                        </div><!-- end ui grid -->
                        </div>  <!-- ВНИМАНИЕ добавил этот закрывающий "на угад" - вылечил баг работы табов -->
                    </div><!-- end tab-pane -->

                    <div class="tab-pane fade" id="details2" role="tabpanel" aria-labelledby="flats-tab">
                        <div class="container-fluid">
                            <div class="row">   
                                <div class="col col-md-12 tableLeadWrap">
                                    <table class="table minW-auto table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="ID">ID</th>
                                                <th scope="col" class="discriptionObiect">Обьект</th>
                                                <th scope="col" class="rooms">Комнат</th>
                                                <th scope="col" class="level">Этаж</th>
                                                <th scope="col" class="perimetr">Площадь</th>
                                                <th scope="col" class="price">Цена</th>
                                                <th scope="col" class="priceM2">За м<sup><small>2</small></sup></th>
                                                <th scope="col" class="discription">Описание</th>
                                                <th scope="col" class="autorObiectTh">Ответвенный</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="col">231</td>
                                                <td scope="col" class="adress"><a href="https://n1insider.bitrix24.ua/marketplace/app/19/?url=8153359.php">г.Киев ул Уличная 31/11, Печерский район </a> </td>
                                                <td scope="col">3</td>
                                                <td scope="col">7/11</td>
                                                <td scope="col">90 / 53 / 11</td>
                                                <td scope="col">45 000,00</td>
                                                <td scope="col"><b>1500,00</b></td>
                                                <td scope="col" class="discription--text">
                                                    1 ком 5/9 34/17/9-кухня ул.Степана Разина. Хорошая, уютная 1-комнатная кв. в Центре города  средний 5 этаж, в отличном жилом состоянии МПО, балкон застеклен , сан узел раздельный в кафеле.
                                                </td>
                                                <td scope="col">
                                                    <figure class="autorObiect">
                                                        <div class="mainFace" style="display:none;">
                                                            <a href="">
                                                                <img src="https://pbs.twimg.com/profile_images/609772694549213184/a_30X5Vk_400x400.jpg" alt="Лицо контакта">
                                                            </a>
                                                        </div>
                                                        <figcaption>
                                                            <p class="name">
                                                                Виктор Воловик
                                                            </p>
                                                            <p class="autorContact">
                                                                skype: <a>skypeAdress</a>
                                                            </p>
                                                            <p class="autorContact">
                                                                Мобильный: <a>+380967969966</a>
                                                            </p>
                                                        </figcaption>
                                                    </figure>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td scope="col">231</td>
                                                <td scope="col" class="adress"><a href="https://goo.gl/maps/XeUKMFCR6hp" target="_blank">г.Киев ул Уличная 31/11, Печерский район</a> </td>
                                                <td scope="col">3</td>
                                                <td scope="col">7/11</td>
                                                <td scope="col">90 / 53 / 11</td>
                                                <td scope="col">45 000,00</td>
                                                <td scope="col"><b>1500,00</b></td>
                                                <td scope="col" class="discription--text">
                                                    1 ком 5/9 34/17/9-кухня ул.Степана Разина. Хорошая, уютная 1-комнатная кв. в Центре города  средний 5 этаж, в отличном жилом состоянии МПО, балкон застеклен , сан узел раздельный в кафеле.
                                                </td>
                                                <td scope="col">
                                                    <figure class="autorObiect">
                                                        <div class="mainFace" style="display:none;">
                                                            <a href="">
                                                                <img src="https://pbs.twimg.com/profile_images/609772694549213184/a_30X5Vk_400x400.jpg" alt="Лицо контакта">
                                                            </a>
                                                        </div>
                                                        <figcaption>
                                                            <p class="name">
                                                                Виктор Воловик
                                                            </p>
                                                            <p class="autorContact">
                                                                skype: <a>skypeAdress</a>
                                                            </p>
                                                            <p class="autorContact">
                                                                Мобильный: <a>+380967969966</a>
                                                            </p>
                                                        </figcaption>
                                                    </figure>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end container-fluid -->
                      
                    </div><!-- end tab #datails -->

                 
                </div><!-- end tab-content -->
               
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end modal -->


<div class="insider_modal-1 insider_modal" data-insiderModal-name="modal2">
    <button class="insiderModal-CLOSE"> <!-- кнопка закрывть модалку -->
        &#215; 
    </button>
    <div class="container-fluid infoObiectByStatus">
        <div class="row">
            <div class="col-md-3 col-xs-12 ">
                <h1 class="noMargin" style="margin: 10px 0;">
                    Объекты
                </h1>
            </div><!-- end col -->
            <div class="col col-md-9 ">
                
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row">
                <div class="tab-content col col-12 col-md-7" id="myTabContent2">
                    <div class="tab-pane fade active in" id="TabDiscription3" role="tabpanel" aria-labelledby="home-tab">
                        <div class="ui grid" style="width: 100%;">
                        <div class="element no_my ui sixteen wide wide column grid" id="two">
                            <div class="seven wide column img" style="background: url(https://rieltor-ua-01.appspot.com/555x416/1/offers/650/50/0/1610696658678650.jpg);">
                            </div>
                            <div class="eight wide column data" style="height: 100%;">
                                <div class="ui checkbox  check" title="Отметить">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                </div>
                                <span class="element-title"><a href="../8724292.php">Героев Сталинграда просп., 4А, Оболонский р-н, Киев</a></span>
                                <!--                    <span class="element-metro"><i class="fab fa-medium"></i> ст. Советская</span>-->
                                <span class="element-price">
                                        <div class="usd">99 000 $</div>
                                        /
                                        <div class="uah">2 777 247 грн.</div>
                                    </span>
                                <span class="element-short-info">
                                        <i class="fas fa-door-open">
                                            <span>2 ком.</span>
                                        </i>
                                        <i class="fas fa-th-large">
                                            <span>50/35/15</span>
                                        </i>
                                        <i class="fas fa-building">
                                            <span>4/25 п.</span>
                                        </i>
                                    </span>
                                <span class="element-description">
                                    Светлая двухкомнатная квартира с авторским ремонтом. 4 этаж 25 этажного кирпичного дома. Общая площадь 50 м2. Квартира с функциональной планировкой комнат, полностью укомплектована всей необходимой мебелью и техникой.
                                    Возле дома школа, супермаркеты, рестораны, салон красоты. В пешей доступности Оболонская набережная, Днепр, станция метро «Оболонь». Код объекта: R47874                                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate                                                     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit                                                       anim id est laborum.
                                </span>
                                <span class="element-footer">
                                    <i class="far fa-clock">
                                        <span> 04.09.2018</span>
                                    </i>
                                    <span class="assigned_by">Сергей</span>
                                    <div class="ui checkbox star" title="Добавить в избранное">
                                        <input type="checkbox" tabindex="0" class="hidden">
                                    </div>
                                </span>
                            </div>
                        </div>
                        <div class="element no_my ui sixteen wide column grid" id="three">
                            <div class="seven wide column img" style="background: url(https://rieltor-ua-01.appspot.com/555x416/1/offers/336/36/6/1610695803249336.jpg);">
                            </div>
                            <div class="eight wide column data" style="height: 100%;">
                                <div class="ui checkbox check" title="Отметить">
                                    <input type="checkbox" tabindex="0" class="hidden">
                                </div>
                                <span class="element-title"><a href="../8724280.php">Героев Сталинграда просп., 53Б, Оболонский р-н, Киев</a></span>
                                <span class="element-metro"><i class="fab fa-medium"></i></span>
                                <span class="element-price">
                                        <div class="usd">86 000  $</div>
                                        /
                                        <div class="uah">2 412 558 грн.</div>
                                    </span>
                                <span class="element-short-info">
                                        <i class="fas fa-door-open">
                                            <span>1 ком.</span>
                                        </i>
                                        <i class="fas fa-th-large">
                                            <span>59/30/15 </span>
                                        </i>
                                        <i class="fas fa-building">
                                            <span>20/24 к.</span>
                                        </i>
                                </span>
                                <span class="element-description">
                                    Дом в эксплуатации - украинский кирпич, в квартире 1 комната. Планировка комнат раздельная. Общее состояние квартиры - евроремонт. Комиссия за услуги 5 %                                                     veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate                                                     velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit                                                       anim id est laborum.
                                    </span>
                                <span class="element-footer">
                                <i class="far fa-clock">
                                    <span>04.09.2018</span>
                                </i>
                                <span class="assigned_by">Сергей</span>
                                    <div class="ui checkbox star" title="Добавить в избранное">
                                        <input type="checkbox" tabindex="0" class="hidden">
                                    </div>
                                </span>
                            </div>
                        </div><!-- end ui grid -->
                        </div>  <!-- ВНИМАНИЕ добавил этот закрывающий "на угад" - вылечил баг работы табов -->
                    </div><!-- end tab-pane -->
                </div><!-- end tab-content -->
        </div><!-- end row -->
    </div><!-- end container -->
</div>


    <script>
        $( document ).ready(function() {
            $('.insiderModal-open').on('click', function(){
            console.log('Нажата кнопка вызова модалки');
            var nameModal  = $(this).attr('data-insiderModal-open'); // узанем имя модалки
            if(nameModal){
                console.log('модалка найдена с именем ' + nameModal);
            }else{
                console.log('модалка не найдена!');
            }
            $('.insider_modal[data-insiderModal-name="'+ nameModal +'"]').addClass('ins_modal-open'); // ищем модалку по имени в дата атрибуте и вызываем
        });

        /* === закрываем  === */
        
        $('.insiderModal-CLOSE').on('click',function(){
            var nameModal = $(this).parent().attr('data-insidermodal-name');
            $('.insider_modal[data-insiderModal-name="'+ nameModal +'"]').removeClass('ins_modal-open'); // ищем модалку по имени в дата атрибуте и прячем ее
        });

            //var mymap = L.map('objMap').setView([48.4433188, 34.9989199363271], 12);
            var mymap = L.map('objMap').setView([48.06580390, 37.96604550], 12);

            mymap.scrollWheelZoom.disable();
        

            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(mymap);

            addMarc(mymap);

            mymap.on('click', function(e) {
                console.log(e);
            } );

            addChart();


            $('.menu .item')
                .tab()
            ;

            var top = $('.detail-main-content .main-tabs .left-block').outerHeight() + 80;
            $('.contact-block-fixed').css({'top':+top});


            $('#more-detail').click(function() {
                var cont = $('#one').html();
                $('.elements-wrapper').append('<div class="element ui grid">'+cont+'</div>');
                //ui();
            });

            $('.obj-menu .item').click(function () {
                $("body").scrollTop(1);
            })


            $('.elements-wrapper').show();
            $('.element-list-wrapper').hide();
            $('.more-btn').show();
            $('.more-btn-list').hide();

            $('#show_list').click(function() {
                $('.elements-wrapper').hide();
                $('.element-list-wrapper').show();
                $('.more-btn').hide();
                $('.more-btn-list').show();
            });

            $('#show_table').click(function() {
                $('.elements-wrapper').show();
                $('.element-list-wrapper').hide();
                $('.more-btn').show();
                $('.more-btn-list').hide();
            });

        });

        $('.set-price span').on('click', function() {
            $('.set-price span.active').removeClass('active');
            $(this).addClass('active');

            if($(this).hasClass('uah')){
                $('.current-price .price').html('3 699 000');
                $('.current-price .currency').html(' ₴');
                $('.config-price .metr span').html('14 554');
            }else if($(this).hasClass('usd')){
                $('.current-price .price').html('132 108');
                $('.current-price .currency').html(' $');
                $('.config-price .metr span').html('520');
            }else if($(this).hasClass('eur')){
                $('.current-price .price').html('119 323');
                $('.current-price .currency').html(' €');
                $('.config-price .metr span').html('470');
            }else if($(this).hasClass('rub')){
                $('.current-price .price').html('7 398 000');
                $('.current-price .currency').html(' ₽');
                $('.config-price .metr span').html('29 108');
            }
        });

        function addMarc(mymap) {
            var region = '';//область
            var city = 'Киев';//город
            var street = 'Героев Сталинграда';//район
            var housenumber = '4а';//номер дома
            var obj;
            var poligonPoints = '';
            var boundinBox = '';
            var coordLat = '';
            var coordLon = '';
            var popupStr = '';
            $.ajax({
                url: '../../ajax/getLocByAddressAjax.php',
                data: {region: region, city: city, street: street, housenumber: housenumber},
                success: function (r) {

                    obj = jQuery.parseJSON(r);
                    poligonPoints = obj.poligonPoints;
                    boundinBox = obj.boundinBox;
                    coordLat = obj.coordLat;
                    coordLon = obj.coordLon;
                    popupStr = obj.popupStr;

                    var marker = L.marker([coordLat, coordLon]).addTo(mymap);
                    marker.bindPopup(popupStr);

                    var polygon = L.polygon(poligonPoints).addTo(mymap);

                    mymap.panTo([coordLat, coordLon]);

                    // var coordLat_n = 48.06580390;
                    // var coordLon_n = 37.96604550;

                    //mymap.panTo([coordLat_n, coordLon_n]);

                    // mymap.fitBounds([[1,1],[2,2],[3,3]]);
                    //
                    // [48.4429104, 48.4437841, 34.9985898, 34.9995088]

                    //["48.4429104", "48.4437841", "34.9985898", "34.9995088"]

                }
            });
        }

        function addChart() {
            var myChart = echarts.init(document.getElementById('prices-chart'));
            // specify chart configuration item and data
            var option = {
                title: {
                },
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    data:['Это объявление','Ленинский район','Барнаул']
                },
                grid: {
                    left: '1%',
                    right: '1%',
                    bottom: '1%',
                    containLabel: true
                },
                toolbox: {
                    feature: {
                        saveAsImage: {}
                    }
                },
                xAxis: {
                    //type: 'category',
                    boundaryGap: false,
                    data: ['Июль 2018', 'Август 2018','Сентябрь 2018','Октябрь 2018']
                },
                yAxis: {
                    type: 'value'
                },
                series: [
                    {
                        name:'Это объявление',
                        type:'line',
                        stack: '1',
                        data:[1200000, 950000, 1000000, 1100000]
                    },
                    {
                        name:'Ленинский район',
                        type:'line',
                        stack: '2',
                        data:[650000, 700000, 650000, 600000]
                    },
                    {
                        name:'Барнаул',
                        type:'line',
                        stack: '3',
                        data:[750000, 1200000, 500000, 700000]
                    }
                ]
            };

            // use configuration item and data specified to show chart
            myChart.setOption(option);
        }

        BX24.init(function () {
            BX24.fitWindow();
        });

    </script>