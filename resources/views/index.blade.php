@extends('auth.auth')
@section('htmlheader_title')
Log in
@endsection
@section('content')
<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}"><b>Impreso</b>Express</a>
        </div><!-- /.login-logo -->
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="login-box-body">
            <p class="login-box-msg">Iniciar Session</p>
            {!!Form::open(['route' => 'log.store', 'class' => 'box login', 'method'=>'POST'])!!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Usuario'])!!}
                <span class="glyphicon glyphicon-user  form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Password'])!!}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            {!! Form::checkbox('remember', true) !!}  Recordar
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    {!!Form::submit('Iniciar',['class'=>'btn btn-primary btn-block btn-flat'])!!}
                </div><!-- /.col -->
            </div>
            {!!Form::close()!!}
        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    @include('auth.scripts')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>
@endsection