<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" xmlns="" xmlns="">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<link rel="stylesheet" href="../css/style.css?123456">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="//api.bitrix24.com/api/v1/"></script>



<style>

    .house{
        height: 290px;
        background: #fff;
        margin: 5px 5px 5px 5px;
        padding: 10px;
    }
    .top-bar {
        height: 50px;
    }
    .houses-wrapper{
        background: #f1f1f1;
    }
    .houses-wrapper .title{
        display: inline;
    }
    .houses-wrapper .address, .houses-wrapper .price {
        display: block;
        margin: 5px 0 0 0;
    }
    .houses-wrapper .readiness {
        color: green;
    }
    .houses-wrapper .description {
        margin-top: 10px;
        height: 60px;
        overflow: hidden;
    }
    .houses-wrapper .zastr-flats, .houses-wrapper .rielt-flats {
        margin-top: 15px;
    }
    .houses-wrapper .metro {
        font-weight: 600;
        color: green;
    }
    .houses-wrapper .metro p {
        font-weight: 600;
        color: #000;
        background: orange;
        display: inline;
    }
    .houses-wrapper .address {
        font-weight: 600;
    }
    .houses-wrapper .img-house {
        height: 100%;
        width: auto;
    }
    .houses-wrapper .img-house img{
        max-height: 100%;
        max-width: 100%;
    }
    .houses-wrapper .phone {
        font-size: 15px;
        font-weight: 600;
        text-decoration: underline dashed;
    }
    .houses-wrapper .phone:hover {
        cursor: pointer;
    }
</style>

    <div class="row top-bar">
        <div id="reload" onclick="location.reload()"><i class="fas fa-sync-alt fa-2x"></i></div>
        <div id="back" onclick="history.back();" style="position: absolute;right: 5%;color: lightgray;"><i class="fas fa-chevron-left fa-2x"></i></div>
    </div>
    <div class="row">
        <div class="col-lg-12 houses-wrapper">
            <div class="house">
               <div class="col-lg-3">
                   <div class="img-house"><img src="http://www.kubanmakler.ru/kvartira/images/94.jpg" alt="здесь картинка" height=""></div>
               </div>
                <div class="col-lg-9">
                    <div class="col-lg-8">
                        <div class="h4 title">
                            <a href="details/houses/01.php">ЖК «Восход»</a>
                        </div>
                        <span class="readiness">СДАН</span>
                        <span class="material">монолитно-каркасная</span>
                        <br>
                        <span class="metro">
                            <i class="fab fa-medium"></i> Оболонь
                            <p class="titleSale">
                                Акция "Приведи друга" от компании "Строитель-П"!
                                <a href="https://delmargroups.com/">
<!--                                    <img  src="details/houses/01/home/tag.svg" alt=""> Подробнее про акцию-->
                                </a>
                            </p>

                        </span>
                        <span class="address">Киев, Героев Сталинграда просп., 4а</span>
                        <span class="price 1-room">от 1 134 000 грн за 1комн от 46,5 м<sup>2</sup></span>
                        <span class="price studio">от 1 285 000 грн за студию 48,2 м</span>
                        <span class="price 2-room">от 1 578 000 грн за 1комн от 66,7 м<sup>2</sup></span>
                        <span class="price 3-room">от 1 927 000 грн за 1комн от 86,3 м<sup>2</sup></span>
                    </div>
                    <div class="col-lg-4" style="min-height: 170px;">
                        <span class="phone">
                            <a class="crm-entity-phone-number" style="text-decoration: underline;text-decoration-style: dashed;" title="+380973840482" href="callto://+380973840482" onclick="if(typeof(top.BXIM) !== 'undefined') { top.BXIM.phoneTo('+380973840482', {&quot;ENTITY_TYPE_NAME&quot;:&quot;CONTACT&quot;,&quot;ENTITY_ID&quot;:25473,&quot;AUTO_FOLD&quot;:true}); return BX.PreventDefault(event); }">+38 (067) 523-00-01</a>
                        </span>
                        <br>
                        Застройщик: <a href="https://delmargroups.com">Delmar</a>
                        <div class="logoAndLink-company" style="height: 100px">
                            <a href="https://delmargroups.com/" target="_blank" class="logoAndLink-company--imgLink" style="height: 100%">
                                <img src="https://delmargroups.com/wp-content/themes/delmar/assets/img/delmar_logo_ng.jpg" alt="" height="100%">
                            </a><!--  -->
                        </div><!-- end logoAndLink-company-->
                    </div>
                    <div class="col-lg-12 description">
                        ЖК «Новодворянский» Премиум-класс расположен в историческом месте г. Днепра – на ул.Вернадского (Дзержинского), 33 (бывшая ул.Новодворянская), одной из самых престижных улиц города. Он удачно сочетает в себе близость к деловому центру и зеленой зоне города. Совсем рядом с жилым комплексом расположен парк им. Т.Г.Шевченко, жители дома не только могут наслаждаться панорамным видом на реку Днепр, но и в любое время прогуляться к ней.В июне 2015 года компанией «Дельмар» проведена корректировка проекта строительства с повышением класса ЖК до уровня премиум. Архитекторами ГК «Дельмар» разработан и усовершенствован фасад 26-этажного здания до ультрасовременного фасада в стиле фьюжн. Фасад жилого комплекса является эксклюзивным в нем сочетаются различные стили, такие как классика (в фасаде присутствует симметрия и колонны), а также стиль хай-тек – символическое отражение века технологий (в виде широкого использования стекла на фасаде здания).
                    </div>
                    <div class="col-lg-6 zastr-flats"><a href="">3 квартиры от застройщика</a></div>
                    <div class="col-lg-6 rielt-flats"><a href="">2 квартиры от агенств и частных лиц</a></div>
                </div>
            </div>
            <div class="house">
                <div class="col-lg-3">
                    <div class="img-house">
                        <img src="https://storage.googleapis.com/houses-photos/photos-resized/700x640/31674.jpg" alt="здесь картинка" height="">
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="col-lg-8">
                        <div class="h4 title">
                            <a href="details/houses/01.php">Героев Сталинграда просп., 53Б, Оболонский р-н, Киев</a>
                        </div>
                        <span class="readiness">СДАН</span>
                        <span class="material">монолитно-каркасная</span>
                        <br>
                        <span class="metro"><i class="fab fa-medium"></i> Оболонь</span>
                        <span class="price 1-room">от 987 000 грн за 1комн от 43 м<sup>2</sup></span>
                        <span class="price 2-room">от 1 112 000 грн за 1комн от 56,1 м<sup>2</sup></span>
                    </div>
                    <div class="col-lg-4" style="min-height: 170px;">

                    </div>
                    <div class="col-lg-12 description">
                        При постройке данного объекта используется усовершенствованные типовые проекты, с внесенными улучшениями и дизайнерскими решениями, иногда индивидуальные проекты, довольно часто встречаются интересные варианты оформления фасадов. Квартиры комфорт-класса в основном (40-50%) представляют собой двухкомнатные квартиры среднего метража, студий и однокомнатных квартир около 30% от общего количества. При этом большинство квартир обладают кухнями площадью не меньше 8 кв. м.    </div>
<!--                    <div class="col-lg-6 zastr-flats"><a href="">1 квартирf от застройщика</a></div>-->
                    <div class="col-lg-6 rielt-flats"><a href="">3 квартиры от агенств и частных лиц</a></div>
                </div>
            </div>
            <div class="house">
                <div class="col-lg-3">
                    <div class="img-house"><img src="https://ub.com.ua/Media/images/projects/big/e35c19f52fc70355dae2193f2cbae0aa.jpg" alt="здесь картинка" height=""></div>
                </div>
                <div class="col-lg-9">
                    <div class="col-lg-8">
                        <div class="h4 title">
                            <a href="details/houses/01.php">ЖК «GENESIS»</a>
                        </div>
                        <span class="readiness">СДАНА 1я секция</span>
                        <span class="material">монолитно-каркасная</span>
                        <br>
                        <span class="metro"><i class="fab fa-medium"></i> Оболонь</span>
                        <span class="address">Киев, пер Индустриальный, 2</span>
                        <span class="price studio">от 1 312 000 грн за студию 47,2 м</span>
                        <span class="price 2-room">от 1 497 000 грн за 1комн от 65,7 м<sup>2</sup></span>
                        <span class="price 3-room">от 1 825 000 грн за 1комн от 85,3 м<sup>2</sup></span>
                    </div>
                    <div class="col-lg-4" style="min-height: 170px;">
                        <span class="phone">
                            <a class="crm-entity-phone-number" style="text-decoration: underline;text-decoration-style: dashed;" title="+380973840482" href="callto://+380973840482" onclick="if(typeof(top.BXIM) !== 'undefined') { top.BXIM.phoneTo('+380973840482', {&quot;ENTITY_TYPE_NAME&quot;:&quot;CONTACT&quot;,&quot;ENTITY_ID&quot;:25473,&quot;AUTO_FOLD&quot;:true}); return BX.PreventDefault(event); }">+38 (044) 365-74-90</a>
                        </span><br>
                        Застройщик: <a href="https://ub.com.ua/">УкрБУД</a>
                        <div class="logoAndLink-company" style="height: 100px">
                            <a href="https://ub.com.ua/" target="_blank" class="logoAndLink-company--imgLink" style="height: 100%">
                                <img src="https://storage.googleapis.com/bd-ua-01/companies/294.png" alt="" height="100%">
                            </a><!--  -->
                        </div><!-- end logoAndLink-company-->
                    </div>
                    <div class="col-lg-12 description">
                        Жилой комплекс GENESIS - современный комплекс комфорт-класса, расположенный по адресу Индустриальный переулок, 2.
                        Название ЖК GENESIS говорит о двух его ключевые особенности: во-первых, это качественно новое пространство и образ жизни в уже сформированном среде. Во-вторых, это основа для дальнейшего развития общества и окружения.
                        Преимущества архитектурных объемов комплекса - функциональность и эстетика. Для фасада были выбраны цвета, которые наиболее удачно передают атмосферу стабильности и гармонии, стиля и уюта. Узнаваемый стиль архитектуры Нидерландов очевиден в образе ЖК GENESIS.
                    </div>
                    <div class="col-lg-6 zastr-flats"><a href="">4 квартиры от застройщика</a></div>
<!--                    <div class="col-lg-6 rielt-flats"><a href="">2 квартиры от агенств и частных лиц</a></div>-->
                </div>
            </div>
            <div class="house">
                <div class="col-lg-3">
                    <div class="img-house"><img src="https://storage.googleapis.com/houses-photos/photos-resized/700x640/119.jpg" alt="здесь картинка" height=""></div>
                </div>
                <div class="col-lg-9">
                    <div class="col-lg-8">
                        <div class="h4 title">
                            <a href="details/houses/01.php">Тимошенко маршала ул., 13А, Оболонский р-н, Киев</a>
                        </div>
                        <span class="readiness">СДАН</span>
                        <span class="material">монолитно-каркасная</span>
                        <br>
                        <span class="metro"><i class="fab fa-medium"></i> Оболонь</span>
                        <span class="address">Киев, Героев Сталинграда просп., 4а</span>
                        <span class="price 1-room">от 1 134 000 грн за 1комн от 46,5 м<sup>2</sup></span>
                        <span class="price studio">от 1 285 000 грн за студию 48,2 м</span>
                        <span class="price 2-room">от 1 578 000 грн за 1комн от 66,7 м<sup>2</sup></span>
                        <span class="price 3-room">от 1 927 000 грн за 1комн от 86,3 м<sup>2</sup></span>
                    </div>
                    <div class="col-lg-4" style="min-height: 170px;">
<!--                        +38 (067) 523-00-01 <br>-->
<!--                        Застройщик: <a href="https://delmargroups.com">Delmar</a>-->
<!--                        <div class="logoAndLink-company" style="height: 100px">-->
<!--                            <a href="https://delmargroups.com/" target="_blank" class="logoAndLink-company--imgLink" style="height: 100%">-->
<!--                                <img src="https://delmargroups.com/wp-content/themes/delmar/assets/img/delmar_logo_ng.jpg" alt="" height="100%">-->
<!--                            </a>-->
<!--                        </div>end logoAndLink-company-->
                    </div>
                    <div class="col-lg-12 description">
                        ЖК «Новодворянский» Премиум-класс расположен в историческом месте г. Днепра – на ул.Вернадского (Дзержинского), 33 (бывшая ул.Новодворянская), одной из самых престижных улиц города. Он удачно сочетает в себе близость к деловому центру и зеленой зоне города. Совсем рядом с жилым комплексом расположен парк им. Т.Г.Шевченко, жители дома не только могут наслаждаться панорамным видом на реку Днепр, но и в любое время прогуляться к ней.В июне 2015 года компанией «Дельмар» проведена корректировка проекта строительства с повышением класса ЖК до уровня премиум. Архитекторами ГК «Дельмар» разработан и усовершенствован фасад 26-этажного здания до ультрасовременного фасада в стиле фьюжн. Фасад жилого комплекса является эксклюзивным в нем сочетаются различные стили, такие как классика (в фасаде присутствует симметрия и колонны), а также стиль хай-тек – символическое отражение века технологий (в виде широкого использования стекла на фасаде здания).
                    </div>
                    <div class="col-lg-6 zastr-flats"><a href="">3 квартиры от застройщика</a></div>
                    <div class="col-lg-6 rielt-flats"><a href="">2 квартиры от агенств и частных лиц</a></div>
                </div>
            </div>

        </div>
    </div>


</div>

<script>
    $(document).ready(function(){
        var width = $('body').width();
        var height = $('body').height();

        BX24.resizeWindow(width, height);
    });
</script>
