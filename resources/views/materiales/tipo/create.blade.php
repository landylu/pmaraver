@extends('app')
@section('htmlheader_title')
hola mundo
@endsection
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Nuevo Tipo de Material</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    {!!Form::open(['route'=>'material.tipo.store','method'=>'POST','class'=>'form-horizontal'])!!}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="materialNombre" class="col-sm-2 control-label">Material</label>
                            <div class="col-sm-10">   
                                {!!Form::text('material',null,['class'=>'form-control', 'placeholder'=>'Material'])!!}
                            </div>
                        </div><div class="form-group">
                            <label for="estatus" class="col-sm-2 control-label">Estatus</label>
                            <div class="col-sm-10">
                                {!! Form::select('activo', ['Estatus'=>'Estatus','1'=>'Activo','0'=> 'Inactivo'], null, ['class' => 'form-control select2']) !!}
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
