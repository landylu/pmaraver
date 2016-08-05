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
                        <h3 class="box-title">Editar Material</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    {!!Form::model($material,['route'=>['material.update',$material],'method'=>'PUT','class'=>'form-horizontal'])!!}
                    {!!Form::open(['route'=>'material.store','method'=>'POST','class'=>'form-horizontal'])!!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="materialNombre" class="col-sm-2 control-label">Sucursal</label>
                            <div class="col-sm-10">   
                                {!! Form::select('sucursalId',$sucursal, null, ['class' => 'form-control select2']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="materialNombre" class="col-sm-2 control-label">Calidad</label>
                            <div class="col-sm-10">   
                                {!! Form::select('calidadId',$calidad, null, ['class' => 'form-control select2']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="materialNombre" class="col-sm-2 control-label">Material</label>
                            <div class="col-sm-10">   
                                {!! Form::select('tipoMaterialId',$tipo, null, ['class' => 'form-control select2']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="apellidos" class="col-sm-2 control-label">Stock</label>
                            <div class="col-sm-10">
                                {!!Form::text('stock',null,['class'=>'form-control', 'placeholder'=>'stock'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellidos" class="col-sm-2 control-label">Precio </label>
                            <div class="col-sm-10">
                                {!!Form::text('precio',null,['class'=>'form-control', 'placeholder'=>'Precio'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="apellidos" class="col-sm-2 control-label">Fecha</label>
                            <div class="col-sm-10">
                                {!!Form::text('fechaIngreso',null,['class'=>'form-control','data-mask', 'placeholder'=>'Fecha Ingreso'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="materialNombre" class="col-sm-2 control-label">Tipo</label>
                            <div class="col-sm-10">   
                                {!!Form::text('materialNombre',null,['class'=>'form-control', 'placeholder'=>'Material'])!!}
                            </div>
                        </div>                   
                        <div class="form-group">
                            <label for="unidadDeMedida" class="col-sm-2 control-label">Unidad</label>
                            <div class="col-sm-10">
                                {!! Form::select('unidadDeMedida',$unidad, null, ['class' => 'form-control select2']) !!}
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {!!Form::reset('Cancelar',['class'=>'btn btn-default'])!!}
                        <!--<button type="submit" class="btn btn-info pull-right">Sign in</button>-->
                        {!!Form::submit('Registrar',['class'=>'btn btn-info pull-right'])!!}
                    </div><!-- /.box-footer -->
                    {!!Form::close();!!}
                </div><!-- /.box -->
            </div>
        </div>
    </div>
</div>
@endsection

