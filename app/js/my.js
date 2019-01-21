$(document).ready(function () {

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

});