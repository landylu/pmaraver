<html>
    <head>

        <link rel="stylesheet" href="{{ asset('/jquery-ui.css') }}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>  
        <style>
            /*            .ui-autocomplete-loading {
                            background: white url("images/ui-anim_basic_16x16.gif") right center no-repeat;
                        }
                        .ui-widget-content {
                            background: white important;
                            border: 1px solid #aaaaaa;
                            color: #222222;
                            margin: 30px;
                            padding: 10px;
                        }*/
            .ui-autocomplete { max-height: 200px; overflow-y: scroll; overflow-x: hidden;}
        </style>
        <script>

//$("body").on('keyup', '#tags', function () {
////  var info = $(this).val();
//    var busqueda = $.ajax({
//        url: '/listado',
//        minLength: 1,
//        type: 'GET',
//        data: $('#formcliente').serialize(),
//        success: function (response) {
//            $("#resultado").html(response);
//
//        }
//    });

//    $("#tags").autocomplete({
//        source: "/listado",
//        url: busqueda,
//        minLength: 1,
//        dataType: "json",
//        select: function (event, ui) {
//            $('#resultado').val(ui.item.tags);
//        }
//    });
//});
$("body").on('keyup', '#tags', function () {
//  var info = $(this).val();
    var busqueda = $.ajax({
        url: '/listado',
        minLength: 1,
        type: 'GET',
        data: $('#formcliente').serialize(),
        success: function(response){
          $("#resultado").html(response);
          var obj = JSON.parse(response);
          console.log(obj.clientes.ApellidoPaterno)
          var ap=(obj.clientes.ApellidoPaterno);
          $("#res").html(ap);
        } 
    });
});

        </script>

    </head>
    <body>
        {!!Form::open(['url' => '/listado','method'=>'GET','class'=>'form-horizontal', 'id'=>'formcliente','role'=>'search'])!!}
        <label for="exampleInputEmail1">Cliente</label>
        <div class="input-group input-group-sm">
            {!!Form::text('tags',null,['class'=>'form-control buscar','id' => 'tags', 'placeholder'=>'Buscar Cliente'])!!}
            <!--{!!Form::text('resultado',null, ['id' => 'response','hidden'])!!}-->
            <!--{!!Form::submit('Guardar nombre', array('class' => 'btn btn-primary','id'=>'guardar'))!!}-->
        </div>
        {!!Form::close();!!}
        <span id="resultado"></span>
        <br>
        Resultado
        <span id="res"></span>

    </body>
</html>

