$(document).ready(function () {

    
  
/* 
    var check = true;
    $('#checkAll').on('click', function(){
        var p = $(this).closest("table") ;
        $( p + ' #tableCheck tr td input').prop('checked', check);
        check = !check;
    });
 */

    var check = true;
    $('.checkAll').on('click', function(){
        var p = $(this).closest("table") ;
        p.find('input' ).prop('checked', check);
        check = !check;
    });

});