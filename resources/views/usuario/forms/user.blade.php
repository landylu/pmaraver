<div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
        {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa Tu Nombre'])!!}
    </div>
</div>
<div class="form-group">
    <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
    <div class="col-sm-10">
        {!!Form::text('apellidos',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu Apellido'])!!}
    </div>
</div>
<div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
        {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu Email'])!!}
    </div>
</div>
<div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Usuario</label>
    <div class="col-sm-10">
        {!!Form::text('usuario',null,['class'=>'form-control','placeholder'=>'Ingresa Tu Usuario'])!!}
    </div>
</div>
<div class="form-group">
    <label for="tipo_usuario" class="col-sm-2 control-label">Rol</label>
    <div class="col-sm-10">   
        {!! Form::select('tipo_usuario',$roles, null, ['class' => 'form-control select2']) !!}
    </div>
</div>
<div class="form-group">
    <label for="estatus" class="col-sm-2 control-label">Estatus</label>
    <div class="col-sm-10">
        {!! Form::select('estatus', ['Estatus'=>'Estatus','1'=>'Activo','0'=> 'Inactivo'], null, ['class' => 'form-control select2']) !!}
    </div>
</div>
<div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        {!!Form::password('password',['class'=>'form-control' ,'placeholder'=>'Ingresa tu Password'])!!}
    </div>
</div>