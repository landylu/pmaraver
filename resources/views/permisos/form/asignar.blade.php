<div class="form-group">
    <label for="tipo_usuario" class="col-sm-2 control-label">Rol</label>
    <div class="col-sm-10">   
        {!! Form::select('role_id',$roles, null, ['class' => 'form-control select2']) !!}
    </div>
</div>
<div class="form-group">
    <label for="tipo_usuario" class="col-sm-2 control-label">Permisos</label>
    <div class="col-sm-10">   
        {!! Form::select('permission_id',$permiso, null, ['class' => 'form-control select2']) !!}
    </div>
</div>
<div class="form-group">
    <label for="tipo_usuario" class="col-sm-2 control-label">Usuario</label>
    <div class="col-sm-10">   
        {!! Form::select('user_id',$user, null, ['class' =>'form-control select2','style'=>'width: 100%;']) !!}
    </div>
</div>



