@extends('app')
@section('htmlheader_title')
Home

@endsection
@section('main-content')
<head>
    <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}
    
</head>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Usuarios y Conductores</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    {!!Form::open(['method'=>'POST','class'=>'form-horizontal'])!!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-body">
                        @include('form')
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {!!Form::reset('Cancelar',['class'=>'btn btn-default'])!!}
                        <!--<button type="submit" class="btn btn-info pull-right">Sign in</button>-->
                        {!!Form::submit('Colocar en el Mapa',['class'=>'btn btn-info pull-right'])!!}
                    </div><!-- /.box-footer -->
                    {!!Form::close();!!}
                    <div class="panel-body">
                        {!!$map['html']!!}

                    </div>
                    <!--<div id="directionsDiv"></div>-->
                </div>
            </div>
        </div>
    </div>
    @endsection