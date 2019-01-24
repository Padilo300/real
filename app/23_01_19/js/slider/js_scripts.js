$.tabs = function(selector, start) {$(selector).each(function(i, element) {$($(element).attr('rel')).css('display', 'none');$(element).click(function() {$(selector).each(function(i, element) {$(element).removeClass('selected');$($(element).attr('rel')).css('display', 'none');});$(this).addClass('selected');$($(this).attr('rel')).css('display', 'block');});});if (!start) {start = $(selector + ':first').attr('rel');} $(selector + '[rel=\'' + start + '\']').trigger('click');};


//// Json Constants Array

var JSonData = ConstJS.constants;

//// Validate Functions

function checkname()
	{var str=document.getElementById('first_name').value;
	 var filter=/^[А-ЯA-Z]{2,}( +)?([А-ЯA-Z]{2,})?( +)?$/i;
	 if (filter.test(str)) {document.getElementById('name_div').style.visibility="hidden"; document.getElementById('name_pic').style.visibility="visible";} else {document.getElementById('name_pic').style.visibility="hidden"; document.getElementById('name_div').style.visibility="visible";}
	}
function checksurname()
	{var str=document.getElementById('last_name').value;
	 var filter=/^[А-ЯA-Z]{2,}( +)?([А-ЯA-Z]{2,})?( +)?$/i;
	 if (filter.test(str)) {document.getElementById('surname_div').style.visibility="hidden"; document.getElementById('surname_pic').style.visibility="visible";} else {document.getElementById('surname_pic').style.visibility="hidden"; document.getElementById('surname_div').style.visibility="visible";}}
function checkmail()
	{var str=document.getElementById('email').value;
	 var filter=/^[.\w-]+@([\w-]+\.)+[a-zA-Z]{2,6}$/;
	 if (filter.test(str)) {document.getElementById('mail_div').style.visibility="hidden"; document.getElementById('mail_pic').style.visibility="visible";} else {document.getElementById('mail_pic').style.visibility="hidden"; document.getElementById('mail_div').style.visibility="visible";}
	}
function checkphone()
	{var str=document.getElementById('phone').value;
	 var filter=/^(?:8|\+7)? ?\(\d{1,5}\)? ?\d{1,5}\-\d{2}\-\d{2}$/;
	 if (str != "") {document.getElementById('phone_div').style.visibility="hidden"; document.getElementById('phone_pic').style.visibility="visible";} else {document.getElementById('phone_pic').style.visibility="hidden"; document.getElementById('phone_div').style.visibility="visible";}
	}
 
function open_window(link,w,h) //opens new window
	{
	var win = "width="+w+",height="+h+",menubar=no,location=no,resizable=yes,scrollbars=yes";
	newWin = window.open(link,'newWin',win);
	newWin.focus();
	}

function validate_custinfo() //validate customer information
	{	
	
	var strFName=document.getElementById('first_name').value;
	var filterFName=/^[А-ЯA-Z]{2,}( +)?([А-ЯA-Z]{2,})?( +)?$/i;

	if (!filterFName.test(strFName)) 
		{
		alert(JSonData.ERROR_INPUT_NAME);
		return false;
		}

	var strSName=document.getElementById('last_name').value;
	var filterSName=/^[А-ЯA-Z]{2,}( +)?([А-ЯA-Z]{2,})?( +)?$/i;

	if (!filterSName.test(strSName)) 
		{
		alert(JSonData.ERROR_INPUT_NAME);
		return false;
		}

	var strEmail=document.getElementById('email').value;
	var filterEmail=/^[.\w-]+@([\w-]+\.)+[a-zA-Z]{2,6}$/;

	if (!filterEmail.test(strEmail)) 
		{
		alert(JSonData.ERROR_INPUT_EMAIL);
		return false;
		}

	var strPhone=document.getElementById('phone').value;
	//var filterPhone=/^(?:8|\+7)? ?\(\d{1,5}\)? ?\d{1,5}\-\d{2}\-\d{2}$/;
	if (strPhone ="" ){
		alert(JSonData.ERROR_INPUT_PHONE);
		return false;
	}
	return true;
	}

//// Payment functions

function checkSubmit() {
	if (document.getElementById("idto").value != "") return true;
	else 
	  {
		alert("Введите номер телефона в формате 9059103456");
		return false;
	  }
	}

//// Mode Functions

function moduleSearch()
	{location = "./index.php?searchstring="+$('#mod_search_searchword').attr('value');}

function cart_update(obect)
{
  var array_input = document.getElementsByTagName('input');
  
  for (var i=0; i<array_input.length; i++)
  {
     if ((array_input[i].name.split('_')[1])=='instock') 
     {
        id=array_input[i].name.split('_')[2];
		//alert("id="+ id + "  >> "+array_input[i].name);
		if(array_input[i].value=="") continue;
        if ((Math.round(array_input[i].value*100)/100) <(Math.round(document.getElementById('count_'+id).value*100)/100))
        {
          alert('Перевышено максимально возможное количество для '+document.getElementById('name'+id).innerHTML); return false;
 
        }
     }
  } 
  $('#'+obect).submit();

}

function currencyFormat(num, dec) {
  num = Math.round( num / dec ) * dec;
  num = new Number(num).toFixed(2);   // особенности счета JavaScript ( x/100 не всегда = x*0.01 )
  var s = 0;
  var str = '';
  for( var i=num.toString().length-1; i>=0; i-- ) {
    s++;
    str = num.toString().charAt(i) + str;
    if(num.toString().charAt(i)=='.') s=0;
    if( s > 0 && !(s % 3) ) str  = " " + str;
  } 
  return str;         
}






function googleTranslateElementInit()
	{
	new google.translate.TranslateElement(
		{pageLanguage: json_const.PAGE_LANG,includedLanguages: 'en, ru'}, 'google_translate_element');
	}


if(document.getElementsByClassName) {
	 
	    getElementsByClass = function(classList, node) {   
	        return (node || document).getElementsByClassName(classList)
	    }
	 
	} else {
	 
	    getElementsByClass = function(classList, node) {           
	        var node = node || document,
	        list = node.getElementsByTagName('*'),
	        length = list.length, 
	        classArray = classList.split(/\s+/),
	        classes = classArray.length,
	        result = [], i,j
	        for(i = 0; i < length; i++) {
	            for(j = 0; j < classes; j++)  {
	                if(list[i].className.search('\\b' + classArray[j] + '\\b') != -1) {
	                    result.push(list[i])
	                    break
	                }
	            }
	        }
	     
	        return result
	    }
	}



var cartajaxTimer = null;

function change_cart_items() {
	var id_line = this.id.split('_')['2'];
	var parentli = $(this).parent('li');
	var tvalue = this.value;
	if(cartajaxTimer!=null) clearTimeout(cartajaxTimer);
	cartajaxTimer = setTimeout(function(){
		//alert("--");
		$.post('./includes/shopping_cart_info.php',{ giditem: id_line, values: tvalue},function(result){ 
			var res = eval("("+result+")");
			$("#span_cart_"+id_line).html(res.new_price+"р");
			$('.sum_cart_all').html(res.new_sum+"р");
			$('#sci').text(res.new_csum); 
			$('#sci').css("font-weight","bold");
			$('#scs').text(res.new_sum);  
			if(res.new_count==0) parentli.hide(200);
		});
	},700);
}





$(document).ready(function(){  
	$('.newselect').selectbox();
  
  if($('#category_sel')[0]) {
	$('li#category_sel').parents('ul').show();
	$('li#category_sel').parents('li:first').children("a").children('span').addClass('activ');
	$('#category_sel ul').show();///!
  }else{
	$('#category ul li:first ul').show();
	$('#category ul li:first>a>span').addClass('activ');
  }
  
  $('#category .has_sub').click(function() {
        $(this).parent('a').next().slideToggle('normal');
		return false;
   });
	

$('.chk').click(function () {
        var curid = this.id.split('_')[1];
		var hurl = $('#hc' + curid).val();

		if ($('#inpc'+curid).val() == 0) {
			check = curid;
			uncheck = 0;
			$('#sc_' + curid).html('<img src="./images/ok.png" alt="" />');
			$('#c_ul').append('<li style="padding: 2px 5px;" id="dtr_' + curid + '"><a href="./' + hurl + '" title="' + $('#dp'+curid).attr('alt') + '"><img src="' + $('#dp' + curid).attr('src') + '" class="c_img" height="50" alt="" /></a></li>');
			$('#inpc' + curid).val(['1']);
			
				//Тут же функции анимации и прочих красивостей
				var image = $('#dp'+curid).offset();
				var comp  = $('#compare').offset();
	
				$('#dp'+curid).before('<img src="' + $('#dp'+curid).attr('src') + '" id="temp" style="position: absolute; top: ' + image.top + 'px; left: ' + image.left + 'px;" />');
	
				params = {
					top : comp.top + 'px',
					left : comp.left+($('#c_ul li').size()*60) + 'px',
					opacity : 0.0,
					width : '50px',  
					heigth : '50px'
				};		
	
				$('#temp').animate(params, 'slow', false, function () {
					$('#temp').remove();
				});
			
		} else {
			check = 0;
			uncheck = curid;
			$('#dtr_' + curid + ', #ic_' + curid).remove();
			$('#sc_' + curid).html('');
			$('#inpc' + curid).val(['0']);
		}

        poststr = "check=" + check + "&uncheck=" + uncheck;
        $.ajax({
            type: "GET",
            url: "./includes/compare.php",
            data: poststr
        });
		
		if ($('#c_ul li').size() == 0) {
			$('#compare').hide(500);
		} else {
			$('#compare').show(500);
		}
    });
	
	$('.dell_chk').click(function () {
        var curid = this.id.split('_')[1];
		check = 0;
		uncheck = curid;

        poststr = "check=" + check + "&uncheck=" + uncheck;
        $.ajax({
            type: "GET",
            url: "./includes/compare.php",
            data: poststr
        });
		//alert($('.comp tr').size());
		$('#dtr_' + curid).hide(500).remove();
		if ($('.comp tr').size() == 2) {
			location = "./index.php?clear_compare";
		}
    });
	
	
   $('input[name|="captcha"]').attr('autocomplete', 'off');
	
 
    $("#phone").keypress (
	function(event)
	{
	    var key, keyChar;
	    if(!event) var event = window.event;
	     
	    if (event.keyCode) key = event.keyCode;
	    else if(event.which) key = event.which;
	     
	/*
	    если нажата одна из следующих клавиш: enter, tab, backspace, del, стрекла влево, стрелка вправо
	    тогда на этом завершаем работу функции, т..к эти клавиши нужны для нормальной работы с полями форм
	*/
	if(key==null || key==0 || key==8 || key==13 || key==37 || key==39 || key==46 || key==9) return true;
	keyChar=String.fromCharCode(key);
	 
	/*
	    если нажтый символ не является цифрой или "-", или "+", тогда значение поля не меняется
	*/
	if(!/^[-\d]$/.test(keyChar)) return false;
	 
	});  
        
        $("#zip").keypress (
	function(event)
	{
	    var key, keyChar;
	    if(!event) var event = window.event;
	     
	    if (event.keyCode) key = event.keyCode;
	    else if(event.which) key = event.which;
	     
	/*
	    если нажата одна из следующих клавиш: enter, tab, backspace, del, стрекла влево, стрелка вправо
	    тогда на этом завершаем работу функции, т..к эти клавиши нужны для нормальной работы с полями форм
	*/
	if(key==null || key==0 || key==8 || key==13 || key==37 || key==39 || key==46 || key==9) return true;
	keyChar=String.fromCharCode(key);
	 
	/*
	    если нажтый символ не является цифрой или "-", или "+", тогда значение поля не меняется
	*/
	if(!/^[-\d]$/.test(keyChar)) return false;
	 
	});          


// Ajax cart function
    $('.ajaxcart').click(function () {                //Биндим клик по классу ajxcart
        var curid = this.id.split('_')[1];            //Смотрим id (вида tocard_123) и берем из него код продукта
        var option = ''; 
        var table = document.getElementById('products'); 
        var new_priceid="newprice"+curid; 
        var countp='count_'+curid;
        if (document.getElementById(countp)) $kol=document.getElementById(countp).value;
        else $kol=1;
        var array_options = document.getElementsByTagName('select');
        for (var oi=0; oi<array_options.length; oi++)
        {
             if ((array_options[oi].name.split('_')[2])==curid) 
             { 
              if (oi==0)
              option= array_options[oi].name.split('_')[3] +':'+array_options[oi].value.split(':')[0];
              else option= option +',' + array_options[oi].name.split('_')[3] +':'+array_options[oi].value.split(':')[0];
             }  
            
        }
        
        poststr = "shopping_cart=yes&add2cart=" + curid + "&type=ajax&kol="+$kol+"&opt="+option;        //Формируем POST
        $.ajax(                            //Отправляем
        {
            type: "GET",
            url: "./includes/shopping_cart.php",
            data: poststr,
            success:
                function (response)				   //Обрабатываем ответ
                {
				if (response==-1) {alert('Перевышено максимально возможное количество данного товара'); return false;}
				var return_data = eval("("+response+")");  //JSON.parse();

				
				$('#sci').text(return_data.info.count);    //Пишем количество товаров в элемент с id="sci"
				$('#sci').css("font-weight","bold");
				$('#scs').text(return_data.info.cost);     //Пишем сумму товаров в элемент с id="scs"
				$('.sum_cart_all').html(return_data.info.cost+'р');
				
				if (document.getElementById('coun_cart_'+return_data.info.prod_item.id)) {//edit
					$("#span_cart_"+curid).text(return_data.info.prod_item.cost+"р");
					$('#coun_cart_'+curid).val(return_data.info.prod_item.quantity);
					
				}else{//add
					$("#cart_list ul").prepend('<li>&nbsp;<input type="text" style="width:30px;" align="center" id="coun_cart_'+return_data.info.prod_item.id+'" value="'+return_data.info.prod_item.quantity+'"/>&nbsp;'+return_data.info.prod_item.name+'<span class="rspan" id="span_cart_'+return_data.info.prod_item.id+'">'+return_data.info.prod_item.cost+'р</span></li>');
					$('#coun_cart_'+return_data.info.prod_item.id).change(change_cart_items);
					//$('#coun_cart_'+return_data.info.prod_item.id).spinner({ min: 0, max: 100, allowNull: true });
				}
            //Тут же функции анимации и прочих красивостей
				var cart_info = $("#cart_list").html();
				creat_info_block('<div class="info_cart_mess"><h2>Товар успешно добавлен в корзину</h2><div class="inform">У Вас сейчас '+return_data.info.count+' товар(ов) на сумму '+return_data.info.cost+'руб.</div><ul>'+cart_info+'</ul><div class="buttons"><a href="./cart/" class="button">Оформить</a></div></div>');
				setTimeout(close_info_block,4000);
				
				/*var image = $('#dp'+curid).offset();
				var cart  = $('#module_cart').position();

				$('#dp'+curid).before('<img src="' + $('#dp'+curid).attr('src') + '" id="temp" style="position: absolute; " />');

				params = {
					top : cart.top + 'px',
					left : cart.left + 'px',
					opacity : 0.0
				};		

				$('#temp').animate(params, 'slow', false, function () {
					$('#temp').remove();
				});*/
			}
        });
	return false;
    });

// Jcarusel hits show
    $(".carouselDiv .jCarouselLite").jCarouselLite({auto: JSonData.CONF_HITS_FRIQ, speed: JSonData.CONF_HITS_SPEED, vertical: true, visible: JSonData.CONF_SCROLL_HITS, easeInQuad: "easeOutQuad"});

// HideSlide hits show
    var fadeTime = 2000*(JSonData.CONF_HITS_FRIQ/10000);var i = $('.slide').length;var x = 0;showSlide();function showSlide(){curSlide = "#slide" + x;if(x == 0){prevSlide = "#slide" + (i - 1);} else {prevSlide = "#slide" + (x - 1);}$(prevSlide).fadeOut(fadeTime, function(){$(curSlide).fadeIn(fadeTime);if(x == (i - 1)){x = 0;} else {x++;}});setTimeout(showSlide, JSonData.CONF_HITS_FRIQ);}

// Tabs

    if (JSonData.REVIEW_SAVED != 1) {$.tabs('.tabs a');} else {$.tabs('.tabs a', '#tab_review');}
	
	

// Search
    $('#mod_search_searchword').keydown(function(e) {if (e.keyCode == 13) {moduleSearch();}});

// Tag flash cloud
      if (document.getElementById('tag'))  
      { 
	    var rnumber = Math.floor(Math.random()*9999999);
	    var so = new SWFObject("./core/tagcloud.swf?r="+rnumber, "tagcloudflash", "160", "160", "9", "#ffffff");
	    so.addParam("allowScriptAccess", "always");
	    so.addParam("wmode", "transparent");
	    so.addVariable("tcolor", "0x565656");
	    so.addVariable("tspeed", "150");
	    so.addVariable("distr", "true");
	    so.addVariable("mode", "tags");
	    so.addVariable("tagcloud", JSonData.TAGS_CLOUD);
	    so.write("wpcumuluscontent");
     }
});

function creat_info_block(obj){
	
	var fon_id = $('#black_fon'); 
	document.getElementById('black_fon').style.position='fixed';
	fon_id.show(0);
	
	$('body').scrollTop();
	$('#fast_order').css({left: 0, top: 0, width: 100+'%', height: 100+'%', position: 'fixed'}); 
	$('#fast_order').show(500);
	$("#fast_order #im_content").html(obj);
}

function close_info_block(){
	$('#fast_order').hide(700);
    $('#black_fon').hide(0);
}

$(document).ready(function() {

  $("#poll").submit(formProcess); // setup the submit handler
  
  if ($("#poll-results").length > 0 ) {
    animateResults();
  }
  if (document.getElementById('idvote')) {
	   idvote=document.getElementById('idvote').value;
		
	  if ($.cookie('vote_id_'+idvote)) {
		$("#poll-container").empty();
		votedID = $.cookie('vote_id_'+idvote);
		$.getJSON("poll.php?vote=none",loadResults);
	  }
  }

    $("#online_call").click(function() {
	    creat_info_block($("#online_call .text").html());
   }); 
  
   $("#close_info").click(function() {
	    close_info_block();
		return false;
   }); 
  
  
   $(".cities .form_select").click(function() {
		$(this).parent('.cities').children('ul').animate({height: 'toggle'}, 'normal');
		return false;
   }) ;

   $("#module_cart").hover(function() {
	      $('#cart_list').animate({height: 'toggle'}, 'normal');
		  $('#cart_list input').spinner({ min: 0, max: 100, allowNull: true });
		  return false;
   });

    $('#cart_list input').change(change_cart_items);
   
    $("a.thickbox").fancybox();

    //$(".gallery:eq(0)  a[rel^='example_group']").prettyPhoto();
			
     $("a#iframe").fancybox({
                    'type' : 'iframe',
                    'overlayShow': 'TRUE',
                    'hideOnOverlayClick': 'FALSE',
                    'height': 900,
                    'width': 1100       
	            
	           });    
   
    $("a[rel=example_group]").fancybox(); 
   
    $("a[rel=example_group1]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			}); 
    
   $("#review_form").validate();
   $("#custinfo_form").validate();
    //$("#one_click_form_id").validate();

   $(".review").click(function() 
   {
       var data            ='captcha='+$("#captcha").val();
       if ($("#review_form").validate) 
       {
         $.ajax({
                type: "POST",
                url: "core/core_captcha.php",
                data: data,
		rules: {
			captcha: {
				   required: true,
				   remote: "core_caching.php"
			         }
		},
                beforeSend: function(html) { // запустится до вызова запроса
                    $("#results").html('');
               },  
                success: function(html){ // запустится после получения резуотатов
                    if (html=='1')
                    {  
                       $('#review_form').submit();
                    }
                    else
                    {
                      $("#results").show();
                      $("#results").append(html);
                      return false; 
                     
                     
                     
                    }  
                }
});
        //return false;
}
	
});   

});


function go_cap(){
	var okoshko="<input type='text' name='captcha' /><img style='margin-left: 15px;' src='./core/core_captcha.php?"+Math.random()+"' alt='' /><img id='cap' style='cursor:pointer;' border='0' src='./images/reload.jpg' onclick='go_cap()' alt='' />";
	document.getElementById("cap").src="./core/core_captcha.php?"+Math.random();
}


jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-zА-Я]+$/i.test(value);
}, "Letters only please"); 

jQuery.extend(jQuery.validator.messages, {
        required: "Это поле необходимо заполнить.",
        remote: "Пожалуйста, введите правильное значение.",
        lettersonly: "Пожалуйста, введите только русские и латинские буквы!",  
        email: "Пожалуйста, введите корретный адрес электронной почты.",
        url: "Пожалуйста, введите корректный URL.",
        date: "Пожалуйста, введите корректную дату.",
        dateISO: "Пожалуйста, введите корректную дату в формате ISO.",
        number: "Пожалуйста, введите число.",
        digits: "Пожалуйста, вводите только цифры.",
        creditcard: "Пожалуйста, введите правильный номер кредитной карты.",
        equalTo: "Пожалуйста, введите такое же значение ещё раз.",
        accept: "Пожалуйста, выберите файл с правильным расширением.",
        maxlength: jQuery.validator.format("Пожалуйста, введите не больше {0} символов."),
        minlength: jQuery.validator.format("Пожалуйста, введите не меньше {0} символов."),
        rangelength: jQuery.validator.format("Пожалуйста, введите значение длиной от {0} до {1} символов."),
        range: jQuery.validator.format("Пожалуйста, введите число от {0} до {1}."),
        max: jQuery.validator.format("Пожалуйста, введите число, меньшее или равное {0}."),
        min: jQuery.validator.format("Пожалуйста, введите число, большее или равное {0}.")
});


function formProcess(event){
  event.preventDefault();
  
  var id = $("input[@name='poll']:checked").attr("value");
  id = id.replace("opt",'');
  idvote=document.getElementById('idvote').value;
  $("#poll-container").fadeOut("slow",function(){
    $(this).empty();
    
    votedID = id;
    $.getJSON("poll.php?vote="+id+'&idvote='+idvote,loadResults);
    
    $.cookie('vote_id_'+idvote, id, {expires: 365, path: '/'});
    });
}

function animateResults(){
  $("#poll-results div").each(function(){
      var percentage = $(this).next().text();
      $(this).css({width: "0%"}).animate({
				width: percentage}, 'slow');
  });
}

function loadResults(data) {
  var total_votes = 0;
  var percent;
  
  for (id in data) {
    total_votes = total_votes+parseInt(data[id][OPT_VOTES]);
  }
  
  var results_html = "<div id='poll-results'>\n<dl class='graph'>\n";
  for (id in data) {
    percent=0; 
    if (data[id][OPT_VOTES]>0) 
      percent = Math.round((parseInt(data[id][OPT_VOTES])/parseInt(total_votes))*100);
    if (data[id][OPT_ID] !== votedID) {
      results_html = results_html+"<dd  style='float:left;' class='bar-container'><div id='bar"+data[id][OPT_ID]+"'style='width:0%; float:left; '><nobr><b>"+data[id][OPT_TITLE]+"</b></nobr></div><strong>"+percent+"%</strong></dd>\n";
    } else {
      results_html = results_html+"<dd class='bar-container' style='float:left;'><div id='bar"+data[id][OPT_ID]+"'style='width:0%;background-color:#FD5300; float:left;'><nobr><b>"+data[id][OPT_TITLE]+"</b></nobr></div><strong>"+percent+"%</strong></dd>\n";
    }
  }
  
  results_html = results_html+"</dl><p style='clear: both;'>Total Votes: "+total_votes+"</p></div>\n";
  
  $("#poll-container").append(results_html).fadeIn("slow",function(){
    animateResults();});
}


