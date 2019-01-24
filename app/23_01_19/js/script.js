$( document ).ready(function() {

    /* =============  работа модалочки  =============== */
   
        /* ==== открываем ->O ==== */
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
    /* =============  конец работа модалочки  =============== */


    //top poition for shw-filter-btn
    var topPos = ($(".filter-block").height() / 2);
    //$('#arrow').css({'margin-top':''+topPos+''});

    var widthFilt = $(".filter-block").width();
    $('.filter-block-child').css({'width':''+widthFilt+''});

    var widthMap = $(".obj-block").width();
    $('#mainMap').css({'width':''+widthMap+''});

    $('#show_my').click(function() {
        $('.no_my').hide();
        $('.arch').hide();
        $('.my').show();
    });

    $('#show_no_my').click(function() {
        $('.my').hide();
        $('.arch').hide();
        $('.no_my').show();
    });

    $('#show_all').click(function() {
        $('.no_my').show();
        $('.my').show();
        $('.arch').show();
    });

    $('#show_arch').click(function() {
        $('.my').hide();
        $('.no_my').hide();
        $('.arch').show();
    });

    // if($('.filter-block').css("z-index") == 99) {
    //     $('.filter-block').removeClass('three');
    // }



    $('#filter').click(function() {
        filtClick();
    });

    // $('#more').click(function() {
    //     var cont = $('#one').html();
    //     $('.elements-wrapper').append('<div class="element ui grid">'+cont+'</div>');
    //     ui();
    // });
    //
    // $('#more-lst').click(function() {
    //     var contList = $('#five').html();
    //     $('.element-list-wrapper').append('<div class="element-list">'+contList+'</div>');
    //     ui();
    // });

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



    ui();
    filtClick();

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'maxWidth': 900
    });

    //закрытие фильтра по клику вне его
    // $(document).mouseup(function (e) {
    //     var container = $(".filt-block-child");
    //     var obj = $(e.target).parent().attr('id');
    //     console.log(obj);
    //     if(obj != 'filter' || obj != 'add_item'){
    //         if (container.has(e.target).length === 0){
    //             $('.filter-block').hide();
    //             //$(this).html('<span><i class="fas fa-angle-left"></i></span>');
    //             $('#filter').removeClass('fil_show');
    //             //$('#top-sort').css({'margin-left':'60px'});
    //             widthMap = $(".obj-block").width();
    //             $('#mainMap').css({'width': '' + widthMap + ''});
    //             $('.elements-wrapper').css({'padding-left': '15px'});
    //             $('.element-list-wrapper').css({'padding-left': '15px'});
    //         }
    //     }
    // });



    $('#add_item').click(function(){
        confirm('открывается форма добавления нового объекта');
    });


});



function initMap(map){

    // L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiaW5zaWRlcnQyMDQ4IiwiYSI6ImNqbzRmZWZ4azEzdDMzcXJqZjVndnFrb3QifQ.hLOXSOL3GeirjatgvI0mEg', {
    //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    //     maxZoom: 18,
    //     id: 'mapbox.streets',
    //     accessToken: 'pk.eyJ1IjoiaW5zaWRlcnQyMDQ4IiwiYSI6ImNqbzRmZWZ4azEzdDMzcXJqZjVndnFrb3QifQ.hLOXSOL3GeirjatgvI0mEg'
    // }).addTo(map);

    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
}

function ui(){
    $('.ui.checkbox')
        .checkbox()
    ;

    $('.ui.radio.checkbox')
        .checkbox()
    ;

    $('.ui.sticky')
        .sticky()
    ;
}

function filtClick() {

    BX24.init(function () {
        BX24.fitWindow();
    });

    var filt = $('#filter');

    if(filt.hasClass('fil_show')) {
        //$('.filter-block').hide();
        $('.filter-block').hide();
        //$(this).html('<span><i class="fas fa-angle-left"></i></span>');
        filt.removeClass('fil_show');
        //$('#top-sort').css({'margin-left':'60px'});

        // widthMap = $(".obj-block").width();

        $('.main-block').css({'width':'100%'});
        $('.obj-block').css({'width':'50%'});
        $('.map-block').css({'width':'50%'});
        $('#mainMap').css({'width':''+$(".map-block").width()+''});

        $('.elements-wrapper').css({'padding-left':'15px'});
        $('.element-list-wrapper').css({'padding-left':'15px'});
    }else{
        $('.filter-block').show();
        //$(this).html('<span><i class="fas fa-angle-right"></i></span>');
        filt.addClass('fil_show');
        //$('#top-sort').css({'margin-left':'25%'});

        // widthMap = $(".obj-block").width();

        $('.main-block').css({'width':'74%'});

        $('.obj-block').css({'width':'62%'});
        $('.map-block').css({'width':'38%'});
        $('#mainMap').css({'width':''+$(".map-block").width()+''});

        $('.elements-wrapper').css({'padding-left':'0'});
        $('.element-list-wrapper').css({'padding-left':'0'});
    }
}

function trim( str ) {
    return str.replace(/^\s+|\s+$/g, "");
}


function explode( delimiter, string ) {	// Split a string by string
    var emptyArray = { 0: '' };
    if ( arguments.length != 2
        || typeof arguments[0] == 'undefined'
        || typeof arguments[1] == 'undefined' )
    {
        return null;
    }
    if ( delimiter === ''
        || delimiter === false
        || delimiter === null )
    {
        return false;
    }
    if ( typeof delimiter == 'function'
        || typeof delimiter == 'object'
        || typeof string == 'function'
        || typeof string == 'object' )
    {
        return emptyArray;
    }
    if ( delimiter === true ) {
        delimiter = '1';
    }
    return string.toString().split ( delimiter.toString() );
}

function moveUserInfo() {
    alert('scr');
}
