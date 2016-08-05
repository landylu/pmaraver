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
                        <h3 class="box-title">Editar Usuario: {!!$usuarios->nombre !!}</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    {!!Form::model($usuarios,['route'=>['usuario.update',$usuarios],'method'=>'PUT','class'=>'form-horizontal'])!!}
                    <div class="box-body">
                        @include('usuario.forms.user',compact('usuarios'))
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