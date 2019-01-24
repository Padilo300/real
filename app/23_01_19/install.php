<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/style.css">
    <title></title>
</head>
<body>
<h1>База объектов</h1>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//api.bitrix24.com/api/v1/dev/"></script>
<a href="" onclick="finish();">Finish</a>


<script>
    BX24.install(function(){
        BX24.callBatch({
                placement_bind_contact_detail: [
                    'placement.bind', {
                        'PLACEMENT': 'CRM_CONTACT_DETAIL_TAB',
                        'HANDLER': 'https://srv.insidergroup.pro/ftp/konst.p/real/handlers/handler_contact_crm.php',
                        'TITLE': 'Объект'
                    }
                ],
                placement_bind_conmpany_detail: [
                    'placement.bind', {
                        'PLACEMENT': 'CRM_COMPANY_DETAIL_TAB',
                        'HANDLER': 'https://srv.insidergroup.pro/ftp/konst.p/real/handlers/handler_company_crm.php',
                        'TITLE': 'Объекты'
                    }
                ]
            },
            function(result)
            {
                console.log('result: '+result);
            }
        );
    });

    function finish(){
        BX24.installFinish();
    }
</script>

</body>
</html>
