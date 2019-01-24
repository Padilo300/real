$(document).ready(function () {

    $("#selectObject").submit(function() {
        var form_data = $(this).serializeArray();
        var value = form_data[0]['value'];	
        var str = 'Добавление в базу ' + value;
        $('#exampleModalLabel').text(str);
        $('#selectObject table').hide();
        return false;
    });

    /* выбрать все чекбоксы */
    var check = true;
    $('.checkAll').on('click', function(){
        var p = $(this).closest("table") ;
        p.find('input' ).prop('checked', check);
        check = !check;
    });

    /* перейти по ссылке */
    $('.dataLink').on('click', function(){
        var link = $(this).attr('data-link');
        window.location.href = link;
    });


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


    
});
