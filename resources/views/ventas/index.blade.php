@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')  
<style>
    .ui-autocomplete { max-height: 200px; overflow-y: scroll; overflow-x: hidden;}
</style>
<link rel="stylesheet" href="{{ asset('/jquery-ui.css') }}">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
<script>
$('body').keyup(function () {
    var cant = $('#cant').val();
    var base = $('#base').val();
    var altura = $('#altura').val();
    var total = cant * (base * altura);
    $('#metros').val(total.toFixed(2));
});


</script>

<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa  fa-shopping-cart"></i> Nueva Venta</h3>
        </div>
        <div class="box-body">
            <div class="col-sm-4 invoice-col">
                {!!Form::open(['url' => '/listado','method'=>'GET','class'=>'form-horizontal', 'id'=>'formcliente','role'=>'search'])!!}
                <div class="input-group">
                    <label for="materialNombre" class="col-sm-12 control-label">Cliente</label>
                    <div class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </div>
                    {!!Form::text('tags',null,['class'=>'form-control buscar','id' => 'tags', 'placeholder'=>'Buscar Cliente'])!!}
                </div>
                {!!Form::close();!!}
                <!--<span id="resultado"></span>-->
            </div>
            <div class="col-sm-4 invoice-col" id="datos">
                <address>
                    <strong id="nombres"></strong> 
                    <strong id="apellidopa"></strong>
                    <strong id="apellidoma"></strong> 
                    <br>
                    <strong id="tipocliente"></strong>
                    <strong id="formapago"></strong>
                    <br>
                    <strong id="colonia"></strong>
                    <strong id="numext"></strong>
                    <strong id="cp"></strong>
                    <br>
                    <strong id="municipio"></strong>
                    <strong id="estado"></strong>
                    <br>
                    <strong id="telefono"></strong> 
                    <strong id="email"></strong>
                    <strong id="sindatos"></strong>
                </address>
            </div>

            <div class="col-sm-4 invoice-col">
                <b>Invoice #007612</b><br>
                <br>
                <b>Order ID:</b> 4F3S8J<br>
                <b>Payment Due:</b> 2/22/2014<br>
                <b>Account:</b> 968-34567
            </div>
            {!!Form::open(['url' => '/ventas','method'=>'POST','class'=>'form-horizontal','id'=>'formventa'])!!}
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group">
                        <label for="materialNombre" class="col-sm-4 control-label">Sucursal</label>
                        <div class="col-sm-8">
                            {!! Form::select('SucursalId',$sucursal, null, ['class' => 'form-control select2','id'=>'suc']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-group">
                        <label for="materialNombre" class="col-sm-12 control-label">Fecha</label>
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        {!!Form::text('fechaRecepcion',null,['class'=>'form-control pull-right','id'=>'reservation','placeholder'=>'Fecha Recepcion'])!!}
                    </div>
                </div>

                <div class="col-sm-4">
                    &nbsp;
                    <div class="input-group">
                        <label for="materialNombre" class="col-sm-4 control-label">Cantidad</label>
                        <div class="col-sm-6">
                            <input type="number" name="materialCantidad" id="cant" min="1" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    &nbsp;
                    <div class="input-group">
                        <label for="materialNombre" class="col-sm-4 control-label">Material</label>
                        <div class="col-sm-8">
                            {!! Form::select('materialId',$material, null, ['class' => 'form-control select2','id'=>'mat']) !!}
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    &nbsp;
                    <div class="input-group">
                        <label for="materialNombre"   class="col-sm-4 control-label">Base</label>
                        <div class="col-sm-6">
                            <input type="number" name="materialBase" step='0.01' id="base" min="1" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    &nbsp;
                    <div class="input-group">
                        <label for="materialNombre" class="col-sm-4 control-label">Altura</label>
                        <div class="col-sm-6">
                            <input type="number" name="materialAltura" step='0.01' min="1" id="altura" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    &nbsp;
                    <div class="input-group">
                        <label for="materialNombre" class="col-sm-4 control-label">Metros</label>
                        <div class="col-sm-6">
                            <input type="number" name="materialCantidad" min="1" id="metros" class="form-control" >
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    &nbsp;
                    <div class="form-group">
                        <label for="materialNombre" class="col-sm-3 control-label">Archivos</label>
                        <div class="col-sm-8">
                            {!!Form::text('archivos',null,['class'=>'form-control', 'placeholder'=>'Nombre archivo(s)'])!!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!--                <div class="col-sm-4" style="/*margin-left: 1px;*/">
                                    &nbsp;
                                    <div class="form-group">
                                        <label for="materialNombre" class="col-sm-2 control-label">Diseño</label>
                                        <label>
                                            <input type="checkbox" class="minimal">
                                        </label>
                                    </div>
                                </div>-->
                <div class="col-sm-4">
                    &nbsp;
                    <div class="form-group">
                        <label for="materialNombre" class="col-sm-8 control-label">Diseño</label>
                        <label style=' margin-left: -110px'>
                            <input type="checkbox" name="diseño" class="minimal">
                        </label>
                    </div>
                </div>


                <div class="col-sm-4">
                    &nbsp;
                    <div class="input-group">
                        <label for="materialNombre" class="col-sm-3 control-label">Tipo</label>
                        <div class="col-sm-8">
                            {!! Form::text('archivos', null, ['class' => 'form-control','placeholder'=>'Nombre archivo(s)']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    &nbsp;
                    <div class="input-group">
                        <label for="materialNombre" class="col-sm-4 control-label">Costo Diseño</label>
                        <div class="col-sm-8">
                            {!! Form::text('archivos', null, ['class' => 'form-control','placeholder'=>'Nombre archivo(s)','style'=>'margin-left: -14px']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    &nbsp;
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Diseñador</label>
                        <div class="col-sm-8">
                            {!! Form::text('disenadorId', null, ['class' => 'form-control input-sm','placeholder'=>'Diseñador','style'=>'margin-left:-27px']) !!}
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    &nbsp;
                    <div class="form-group">
                        <label for="materialNombre" class="col-sm-8 control-label">Urgente</label>
                        <label style=' margin-left: -110px'>
                            <input type="checkbox" class="minimal">
                        </label>
                    </div>
                </div>
                <div class="col-sm-4">
                    &nbsp;
                    <div class="input-group">
                        <label for="materialNombre" class="col-sm-4 control-label">Costo</label>
                        <div class="col-sm-7">
                            {!! Form::text('SucursalId', null, ['class' => 'form-control','disabled'=>'disabled']) !!}
                        </div>
                    </div>
                </div>
            </div>
            {!!Form::submit('Realizar Pedido',['class'=>'btn btn-success pull-right'])!!}
            <br>
            {!!Form::close();!!}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12">
            <!-- The time line -->
            <ul class="timeline">
                <!-- timeline time label -->

                <!-- /.timeline-label -->
                <!-- timeline item -->
                <li style="margin-left:-57px">

                    <div class="timeline-item">
                        <div class="timeline-body">
                            <h4>Descripcion del Pedido </h4>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <br>
    <div class="box" style="border-top: none">
        <div class="box-body">
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Qty</th>
                                <th>Product</th>
                                <th>Serial #</th>
                                <th>Description</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Call of Duty</td>
                                <td>455-981-221</td>
                                <td>El snort testosterone trophy driving gloves handsome</td>
                                <td>$64.50</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Need for Speed IV</td>
                                <td>247-925-726</td>
                                <td>Wes Anderson umami biodiesel</td>
                                <td>$50.00</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Monsters DVD</td>
                                <td>735-845-642</td>
                                <td>Terry Richardson helvetica tousled street art master</td>
                                <td>$10.70</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Grown Ups Blue Ray</td>
                                <td>422-568-642</td>
                                <td>Tousled lomo letterpress</td>
                                <td>$25.99</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <!-- accepted payments column -->
                <div class="col-xs-6">
                    <p class="lead">Metodos de Pago:</p>
<!--                    <img src="../public/dist/img/credit/visa.png" alt="Visa">
                    <img src="../public/dist/img/credit/mastercard.png" alt="Mastercard">
                    <img src="../public/dist/img/credit/american-express.png" alt="American Express">
                    <img src="../public/dist/img/credit/paypal2.png" alt="Paypal">-->
                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                        Elige la forma de pago
                    </p>
                </div><!-- /.col -->
                <div class="col-xs-6">
                    <p class="lead">Amount Due 2/22/2014</p>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Subtotal:</th>
                                <td>$250.30</td>
                            </tr>
                            <tr>
                                <th>Tax (9.3%)</th>
                                <td>$10.34</td>
                            </tr>
                            <tr>
                                <th>Shipping:</th>
                                <td>$5.80</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td>$265.24</td>
                            </tr>
                        </table>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <a href="invoice-print.html" target="_blank" class="btn btn-default "><i class="fa fa-print"></i> Print</a>
                    <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                    <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                </div>
            </div>
        </div>
    </div><!-- /.box-body -->
</section><!-- /.content -->
@endsection