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
                        <h3 class="box-title">Nuevo Cliente</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    {!!Form::open(['route'=>'clientes.store','method'=>'POST','class'=>'form-horizontal'])!!}
                    <div class="box-body">
                       @include('clientes.form.form')
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
