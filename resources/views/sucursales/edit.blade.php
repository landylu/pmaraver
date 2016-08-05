@extends('app')
@section('htmlheader_title')
Home
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Editar Sucursal: {!!$sucursal->sucursal !!}</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    {!!Form::model($sucursal,['route'=>['sucursal.update',$sucursal],'method'=>'PUT','class'=>'form-horizontal'])!!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="tipo_usuario" class="col-sm-2 control-label">Estado</label>
                            <div class="col-sm-10">   
                                {!! Form::select('sucursalEstadoId',$estados, null, ['class' => 'form-control select2']) !!}
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label for="apellidos" class="col-sm-2 control-label">Sucursal</label>
                            <div class="col-sm-10">
                                {!!Form::text('sucursal',null,['class'=>'form-control', 'placeholder'=>'Ingresa Sucursal'])!!}
                            </div>
                        </div>

                    </div><!-- /.box-body -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                    {!!Form::reset('Cancelar',['class'=>'btn btn-default'])!!}
                    {!!Form::submit('Actualizar',['class'=>'btn btn-info pull-right'])!!}
                </div><!-- /.box-footer -->
                {!!Form::close();!!}
            </div><!-- /.box -->
        </div>
    </div>
</div>
</div>
@endsection